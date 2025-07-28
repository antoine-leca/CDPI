<?php 
    const VICTORY_POINTS = 3;
    const DRAW_POINTS = 1;

    $teams = [
        "team1" => [
            "points" => 0,
            "matches_played" => 0,
            "victories" => 0,
            "draws" => 0,
            "defeats" => 0
        ],
        "team2" => [
            "points" => 0,
            "matches_played" => 0,
            "victories" => 0,
            "draws" => 0,
            "defeats" => 0
        ],
        "team3" => [
            "points" => 0,
            "matches_played" => 0,
            "victories" => 0,
            "draws" => 0,
            "defeats" => 0
        ],
        "team4" => [
            "points" => 0,
            "matches_played" => 0,
            "victories" => 0,
            "draws" => 0,
            "defeats" => 0
        ],
        "team5" => [
            "points" => 0,
            "matches_played" => 0,
            "victories" => 0,
            "draws" => 0,
            "defeats" => 0
        ],
        "team6" => [
            "points" => 0,
            "matches_played" => 0,
            "victories" => 0,
            "draws" => 0,
            "defeats" => 0
        ]
        ];

    function playMatch($team1, $team2) {
        $score1 = rand(0, 5);
        $score2 = rand(0, 5);
        
        return [
            "team_score1" => $score1,
            "team_score2" => $score2
        ];
    }

    function updateStats(&$teams, $team1, $team2, $score1, $score2) {
        $teams[$team1]["matches_played"]++;
        $teams[$team2]["matches_played"]++;

        if ($score1 > $score2) {
            $teams[$team1]["victories"]++;
            $teams[$team1]["points"] += VICTORY_POINTS;
            $teams[$team2]["defeats"]++;
        } elseif ($score1 < $score2) {
            $teams[$team2]["victories"]++;
            $teams[$team2]["points"] += VICTORY_POINTS;
            $teams[$team1]["defeats"]++;
        } else {
            $teams[$team1]["draws"]++;
            $teams[$team2]["draws"]++;
            $teams[$team1]["points"] += DRAW_POINTS;
            $teams[$team2]["points"] += DRAW_POINTS;
        }
    }

    function printMatchResult ($team1, $team2, $score1, $score2) {
        echo "🏀 " . $team1 . " " . $score1 . " - " . $score2 . " " . $team2 . "."; 
    }

    $teamNames = array_keys($teams);

    for ($i = 0; $i < count($teamNames); $i++) {
        for ($j = $i + 1; $j < count($teamNames); $j++) {
            $team1 = $teamNames[$i];
            $team2 = $teamNames[$j];

            $result = playMatch($team1, $team2);
            $score1 = $result["team_score1"];
            $score2 = $result["team_score2"];
            
            updateStats($teams, $team1, $team2, $score1, $score2);
            printMatchResult($team1, $team2, $score1, $score2);
            echo "<br>";
        }    
    }

    function compareTeams($a, $b) {
        return $b["points"] - $a["points"];
    }

    uasort($teams, "compareTeams");

    // Affichage du tableau de classement
    echo "<h2>🏆 Classement Final</h2>";
    echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
    echo "<tr style='background-color: #f2f2f2;'>";
    echo "<th>Rang</th><th>Équipe</th><th>Points</th><th>Victoires</th><th>Nuls</th><th>Défaites</th><th>Matchs joués</th>";
    echo "</tr>";

    $rang = 1;
    foreach ($teams as $teamName => $stats) {
        echo "<tr>";
        echo "<td style='text-align: center; font-weight: bold;'>" . $rang . "</td>";
        echo "<td style='padding: 8px;'>" . $teamName . "</td>";
        echo "<td style='text-align: center; font-weight: bold;'>" . $stats["points"] . "</td>";
        echo "<td style='text-align: center;'>" . $stats["victories"] . "</td>";
        echo "<td style='text-align: center;'>" . $stats["draws"] . "</td>";
        echo "<td style='text-align: center;'>" . $stats["defeats"] . "</td>";
        echo "<td style='text-align: center;'>" . $stats["matches_played"] . "</td>";
        echo "</tr>";
        $rang++;
    }
    echo "</table>";
?>
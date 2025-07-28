<?php
    require_once '../includes/modules.php';
    $titre_page = "Récap PHP - Évaluations";
    $base_link = "../";
?>


    <?php require_once '../includes/header.php' ?>
    <main class="min-h-[80vh]">
        <section>
            <table class="table table-zebra">
                <thead>
                    <tr>
                        <th>Nom du module</th>
                        <th>Auto évaluation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($modules as $key => $value) { ?>
                        <tr><td><?= $value["nom"] ?><td>10</td></td></tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
    </main>
    <?php require_once '../includes/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</body>
</html>
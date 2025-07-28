<?php
    const BASE_LIEN = "/CDPI/debuts-php/";
    $titre_page = "Récap PHP - Modules";
    $base_link = "../";
    require_once '../includes/modules.php';
?>

<?php require_once '../includes/header.php' ?>
    <main class="min-h-[90vh] flex justify-center">
        <section class="w-9/10 flex justify-center my-4">
            <div>
                <?php foreach ($modules as $key => $value) { ?>
                    <div class="collapse collapse-arrow bg-base-100 border border-base-300">
                        <input type="radio" name="my-accordion-2" checked="checked" />
                        <div class="collapse-title font-semibold"><?= $value["nom"] ?></div>
                        <div class="collapse-content text-sm">
                            <p class="mb-4"><?= $value["recap"] ?></p>
                            <span>Liens :   </span>
                            <ul class="menu menu-vertical lg:menu-horizontal bg-base-200 rounded-box">
                                <?php foreach ($value["fichiers"] as $nomFichier => $fichier) { ?>
                                    <li><a target="__blank" href="<?= BASE_LIEN . $fichier ?>"><?= $nomFichier ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                <?php } ?>
            </div>
            
            
        </section>
    </main>
    <?php require_once '../includes/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</body>
</html>
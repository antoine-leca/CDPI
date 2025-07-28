<?php
    $titre_page = "Récap PHP - Accueil";
    $base_link = "./";
?>


    <?php require_once './includes/header.php' ?>
    <main class="min-h-[80vh] flex flex-col justify-center items-center">
        <div class="flex items-center gap-2">
            <h1 class="text-2xl text-center title-font-b">Bienvenue sur  le récap de</h1>
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP Logo" width="64" height="64">
        </div>    
        <div class="w-9/10 lg:w-6/10 text-justify mt-16">
            <p>PHP (Hypertext Preprocessor) est un langage de programmation principalement utilisé pour le développement web côté serveur. Il permet de créer des pages web dynamiques en interagissant facilement avec des bases de données comme MySQL. Intégré directement dans le code HTML, PHP est simple à apprendre et largement utilisé pour développer des sites web et des applications web.</p>
            <p class="mt-8">Concrètement, PHP permet de traiter les formulaires, gérer les sessions utilisateurs, interagir avec des fichiers et bases de données, et générer du contenu HTML dynamique. Il est à la base de nombreux CMS populaires comme WordPress, et reste l'un des langages les plus utilisés pour le développement web backend.</p>
        </div>

    </main>
    <?php require_once './includes/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</body>
</html>
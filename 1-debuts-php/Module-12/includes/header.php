<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $titre_page ?></title>
        <link rel="stylesheet" href="<?= $base_link ?>assets/css/root.css">
        <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    </head>
    <body class="main-font-m">
    <header class="drawer drawer-end main-font-r text-(--cta-color)">
        <input id="my-drawer-3" type="checkbox" class="drawer-toggle">
        <div class="drawer-content flex flex-col">
            <!-- Navbar -->
            <div class="navbar w-full shadow-md">
                <div class='h-full flex-1 justify-start lg:w-6/10 flex items-center'>
                    <a class="mx-2 px-2 text-2xl" href="/CDPI/debuts-php/Module-12/index.php">Récap PHP</a>
                </div>
                <div class="hidden w-3/9 lg:flex lg:justify-end">
                    <ul class="menu menu-horizontal">
                    <!-- Navbar menu content here -->
                        <li><a class='text-xl links-nav' href='/CDPI/debuts-php/Module-12/index.php'>Accueil</a></li>
                        <li><a class='text-xl links-nav' href='/CDPI/debuts-php/Module-12/pages/modules.php'>Modules</a></li>
                        <li><a class='text-xl links-nav capitalize' href='/CDPI/debuts-php/Module-12/pages/evaluations.php'>évaluations</a></li>
                    </ul>
                </div>
                <div class="flex-none lg:hidden">
                    <label for="my-drawer-3" aria-label="open sidebar" class="btn btn-square btn-ghost">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            class="inline-block h-6 w-6 stroke-current text-(--cta-color)"
                        >
                            <path
                            strokeLinecap="round"
                            strokeLinejoin="round"
                            strokeWidth="2"
                            d="M4 6h16M4 12h16M4 18h16"
                            ></path>
                        </svg>
                    </label>
                </div>
            </div>
        </div>
        <div class="drawer-side z-30">
            <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
            <ul class="menu bg-base-100 min-h-full w-80 p-4 pt-[64px]">
            <!-- Sidebar content here -->
                <li><a class='text-xl' href='/CDPI/debuts-php/Module-12/index.php'>Accueil</a></li>
                <li><a class='text-xl' href='/CDPI/debuts-php/Module-12/pages/modules.php'>Modules</a></li>
                <li><a class='text-xl capitalize' href='/CDPI/debuts-php/Module-12/pages/evaluations.php'>évaluations</a></li>
            </ul>
        </div>
    </header>
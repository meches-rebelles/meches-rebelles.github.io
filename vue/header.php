<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="color-scheme" content="light" />
    <?php if ($page == 'Admin') {?>
        <script type="text/javascript" src='js/builder.js'></script>
    <?php } ?>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <link rel="icon" href="assets/favicon.svg" type="image/svg+xml" />
    <title><?=$firm_info["nom"].' | '.$page?></title>
    <link rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>

<?php if ($page == 'Admin') { ?>
<body id="<?=$critere?>">
<?php } else { ?>
<body>
<?php } ?>
    <header>
        <nav class="navbar">
            <a href="?action=accueil" class="nav-branding">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500">
                    <g stroke="var(--text)">
                        <path d="M108.918 422.206S53.37 337.016 94.556 294.36c46.125-47.781 136.667-56.345 191.954-87.311 80.028-44.825 67.253-91.207 67.253-91.207s33.868 87.632-29.382 141.097c-45.041 38.071-107.796 31.842-156.699 62.362-59.822 37.342-58.764 102.905-58.764 102.905Z" transform="matrix(1.15543 0 0 1.21178 -25.41 -69.621)"/>
                        <path fill="var(--text)" fill-opacity=".95" stroke="#000" d="M108.918 422.206s-23.093-76.388 22.859-116.916c51.477-45.392 113.627-58.072 175.324-87.496 89.302-42.579 75.046-86.645 75.046-86.645s7.997 80.228-62.589 131.021c-50.26 36.17-90.493 33.279-145.065 62.279-66.758 35.475-65.575 97.761-65.575 97.761Z" transform="matrix(1.15543 0 0 1.21178 -25.41 -69.621)"/>
                        <path d="M108.918 422.206s.011-50.343 41.193-92.999c46.125-47.777 120.007-52.301 175.294-83.267 80.024-44.824 74.82-100.807 74.82-100.807s19.911 110.8-81.558 146.407c-55.643 19.533-65.39 8.705-116.962 35.766-67.291 35.312-92.787 94.9-92.787 94.9z" transform="matrix(1.15543 0 0 1.21178 -25.41 -69.621)"/>
                    </g>
                </svg>
                <span>
                    <write-and-delete timeout="1000" loop="true" speed="100">
                        Bienvenue, <?=$firm_info['nom']?>, <?=$site?>
                    </write-and-delete>
                </span>
            </a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="?action=evenement" class="nav-link">Évènementielle</a>
                </li>

                <li class="nav-item">
                    <a href="?action=horaires" class="nav-link">Horaires</a>
                </li>

                <li class="nav-item">
                    <a href="?action=secteur" class="nav-link">Secteur d'Activité</a>
                </li>

                <li class="nav-item">
                    <a href="?action=galerie" class="nav-link">Galerie Photos</a>
                </li>

                <li class="nav-item">
                    <a href="?action=contact" class="nav-link">Contact</a>
                </li>
            </ul>
            <div class="hamburger">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </nav>
    </header>
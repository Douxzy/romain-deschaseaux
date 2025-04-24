<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Romain Deschaseaux - Développeur Web Fullstack</title>
    <link rel="icon" type="image/png" href="assets/img/logo.png">
    <meta name="description" content="Portfolio de Romain Deschaseaux, Développeur Web & Mobile Fullstack. Découvrez mes projets et contactez-moi pour vos besoins digitaux.">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>tailwind.config = {darkMode: 'class'}</script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bg-white text-gray-900 font-sans dark:bg-gray-900 dark:text-white transition-colors">
    <nav class="flex justify-between items-center p-6 relative">
        <div class="text-xl font-bold">Romain Deschaseaux</div>
        <ul class="hidden md:flex space-x-6 text-lg">
            <li><a href="index.php" class="hover:text-purple-500">Accueil</a></li>
            <li><a href="projets.php" class="hover:text-purple-500">Projets</a></li>
            <li><a href="a-propos.php" class="hover:text-purple-500">À propos</a></li>
            <li><a href="services.php" class="hover:text-purple-500">Services</a></li>
            <li><a href="contact.php" class="hover:text-purple-500">Contact</a></li>
        </ul>
        <button id="theme-toggle"
            class="hidden md:block border border-purple-500 px-4 py-2 rounded hover:bg-purple-500 hover:text-white transition">
            Mode Sombre
        </button>
        <button id="menu-toggle" class="md:hidden flex items-center">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <div id="mobile-menu" class="hidden absolute top-20 left-0 w-full bg-white dark:bg-gray-900 text-center">
            <ul class="flex flex-col space-y-4 text-lg py-4">
                <li><a href="index.php" class="hover:text-purple-500">Accueil</a></li>
                <li><a href="projets.php" class="hover:text-purple-500">Projets</a></li>
                <li><a href="a-propos.php" class="hover:text-purple-500">À propos</a></li>
                <li><a href="services.php" class="hover:text-purple-500">Services</a></li>
                <li><a href="contact.php" class="hover:text-purple-500">Contact</a></li>
                <li>
                    <button id="theme-toggle-mobile"
                        class="border border-purple-500 px-4 py-2 rounded hover:bg-purple-500 hover:text-white transition">
                        Mode Sombre
                    </button>
                </li>
            </ul>
        </div>
    </nav>
<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

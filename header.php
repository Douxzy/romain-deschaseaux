<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Développeur Web Fullstack</title>
    <meta name="description"
        content="Portfolio de Romain Deschaseaux, Développeur Web & Mobile Fullstack. Découvrez mes projets et contactez-moi pour vos besoins digitaux.">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class'
        }
    </script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bg-white text-gray-900 font-sans dark:bg-gray-900 dark:text-white transition-colors">
    <!-- Navbar -->
    <nav class="flex justify-between items-center p-6">
        <ul class="flex space-x-6 text-lg">
            <li><a href="index.php" class="hover:text-purple-500">Accueil</a></li>
            <li><a href="projets.php" class="hover:text-purple-500">Projets</a></li>
            <li><a href="a-propos.php" class="hover:text-purple-500">À propos</a></li>
            <li><a href="services.php" class="hover:text-purple-500">Services</a></li>
            <li><a href="contact.php" class="hover:text-purple-500">Contact</a></li>
        </ul>
        <button id="theme-toggle"
            class="border border-purple-500 px-4 py-2 rounded hover:bg-purple-500 hover:text-white transition">
            Mode Sombre
        </button>
    </nav>
<?php require_once "header.php"; ?>

<section
    class="flex flex-col md:flex-row items-center justify-center min-h-screen px-8 bg-gray-100 dark:bg-gray-800 transition-colors">
    <div class="max-w-xl text-center md:text-left flex flex-col justify-center md:mr-16">
        <p class="uppercase text-sm text-gray-500 mb-2">Développeur Web & Mobile Fullstack</p>
        <h1 class="text-4xl md:text-5xl font-bold mb-6">
            Romain Deschaseaux
        </h1>
        <p class="text-gray-600 dark:text-gray-300 mb-8">
            Je conçois des applications modernes, performantes et adaptées à vos besoins. Passionné par les technologies
            web et mobile.
        </p>
        <div class="flex flex-col sm:flex-row sm:space-x-4 space-y-4 sm:space-y-0">
            <a href="projets.php"
                class="bg-purple-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-purple-400 transition">
                Voir mes projets
            </a>
            <a href="contact.php"
                class="border border-purple-500 px-6 py-3 rounded-lg font-semibold hover:bg-purple-500 hover:text-white transition">
                Me contacter
            </a>
        </div>
    </div>
    <div class="flex justify-center">
        <img src="assets/img/logo.png" alt="Romain Deschaseaux" class="w-72 md:w-96 object-contain rounded-full">
    </div>
</section>



<section class="max-w-5xl mx-auto px-4 py-16 text-center">
    <h2 class="text-3xl font-bold mb-6">Qui suis-je ?</h2>
    <p class="text-gray-700 dark:text-gray-300 mb-4">
        Développeur passionné, j'accompagne entreprises et indépendants dans la création de leurs projets digitaux :
        sites web, applications mobiles, outils sur-mesure.
    </p>
    <p class="text-gray-700 dark:text-gray-300">
        Fort d'une double compétence front-end et back-end, je propose des solutions complètes, optimisées et
        évolutives.
    </p>
</section>
<section class="bg-purple-50 dark:bg-gray-900 py-16">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-10">Pourquoi me faire confiance ?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-xl font-semibold mb-2">💡 Expertise Fullstack</h3>
                <p class="text-gray-600 dark:text-gray-300">Maîtrise des technologies modernes pour des projets clé en
                    main.</p>
            </div>
            <div>
                <h3 class="text-xl font-semibold mb-2">⚡ Réactivité</h3>
                <p class="text-gray-600 dark:text-gray-300">Un interlocuteur unique, disponible et à l'écoute.</p>
            </div>
            <div>
                <h3 class="text-xl font-semibold mb-2">🚀 Optimisation & SEO</h3>
                <p class="text-gray-600 dark:text-gray-300">Des sites performants, rapides et bien référencés.</p>
            </div>
        </div>
    </div>
</section>
<section class="max-w-6xl mx-auto px-4 py-16 text-center">
    <h2 class="text-3xl font-bold mb-10">Mes dernières réalisations</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white dark:bg-gray-800 shadow p-4 rounded">
            <h3 class="font-semibold mb-2">Bouge Ton Paname</h3>
            <p class="text-sm text-gray-600 dark:text-gray-300">Site d'événements à Paris avec filtres et calendrier.
            </p>
        </div>
        <div class="bg-white dark:bg-gray-800 shadow p-4 rounded">
            <h3 class="font-semibold mb-2">clickerMania</h3>
            <p class="text-sm text-gray-600 dark:text-gray-300">Testez votre vitesse de clic en 1 seconde !</p>
        </div>
        <div class="bg-white dark:bg-gray-800 shadow p-4 rounded">
            <h3 class="font-semibold mb-2">Princess Quest</h3>
            <p class="text-sm text-gray-600 dark:text-gray-300">Jeux d'aventure fantastique.</p>
        </div>
    </div>
    <a href="projets.php"
        class="inline-block mt-8 bg-purple-500 text-white px-6 py-3 rounded hover:bg-purple-400 transition">
        Voir tous les projets
    </a>
</section>
<section class="bg-purple-500 py-12 text-center text-white">
    <h2 class="text-3xl font-bold mb-4">Prêt à donner vie à votre projet ?</h2>
    <a href="contact.php" class="bg-white text-purple-500 px-6 py-3 rounded font-semibold hover:bg-gray-100 transition">
        Discutons ensemble
    </a>
</section>

<?php require_once "footer.php"; ?>
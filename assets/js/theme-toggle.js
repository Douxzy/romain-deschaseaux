const toggleButtons = [
    document.getElementById('theme-toggle'),
    document.getElementById('theme-toggle-mobile')
];

const htmlElement = document.documentElement;

// Fonction pour basculer le thème
function toggleDarkMode() {
    htmlElement.classList.toggle('dark');

    toggleButtons.forEach(button => {
        if (htmlElement.classList.contains('dark')) {
            button.textContent = 'Mode Clair';
        } else {
            button.textContent = 'Mode Sombre';
        }
    });

    // Sauvegarder le choix
    if (htmlElement.classList.contains('dark')) {
        localStorage.setItem('theme', 'dark');
    } else {
        localStorage.setItem('theme', 'light');
    }
}

// Ajouter l'event listener aux deux boutons
toggleButtons.forEach(button => {
    if (button) {  // Vérification que le bouton existe
        button.addEventListener('click', toggleDarkMode);
    }
});

// Au chargement, appliquer le thème sauvegardé
if (localStorage.getItem('theme') === 'dark') {
    htmlElement.classList.add('dark');
    toggleButtons.forEach(button => button.textContent = 'Mode Clair');
}

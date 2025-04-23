const toggleButton = document.getElementById('theme-toggle');
const htmlElement = document.documentElement;

toggleButton.addEventListener('click', () => {
    htmlElement.classList.toggle('dark');
    if (htmlElement.classList.contains('dark')) {
        toggleButton.textContent = 'Mode Clair';
    } else {
        toggleButton.textContent = 'Mode Sombre';
    }
});

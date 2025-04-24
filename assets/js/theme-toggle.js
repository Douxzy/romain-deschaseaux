const toggleButtons = [
    document.getElementById('theme-toggle'),
    document.getElementById('theme-toggle-mobile')
];
const htmlElement = document.documentElement;
function toggleDarkMode() {
    htmlElement.classList.toggle('dark');

    toggleButtons.forEach(button => {
        if (htmlElement.classList.contains('dark')) {
            button.textContent = 'Mode Clair';
        } else {
            button.textContent = 'Mode Sombre';
        }
    });
    if (htmlElement.classList.contains('dark')) {
        localStorage.setItem('theme', 'dark');
    } else {
        localStorage.setItem('theme', 'light');
    }
}
toggleButtons.forEach(button => {
    if (button) {
        button.addEventListener('click', toggleDarkMode);
    }
});

if (localStorage.getItem('theme') === 'dark') {
    htmlElement.classList.add('dark');
    toggleButtons.forEach(button => button.textContent = 'Mode Clair');
}

var nama = prompt("Nama Anda ?")
alert("Selama datang di Kivotos Sensei " + nama )  
console.log("Selamat Datang Sensei"); 


function toggleDarkMode() {
    let dark = document.getElementById('darkmode-toggle').checked;
    const medsos = document.querySelector('.medsos');
    const banner = document.querySelector('.banner');

    if (dark) {
        medsos.classList.remove('medsos');
        medsos.classList.add('medsos_dark');

        banner.classList.remove('banner');
        banner.classList.add('banner_dark');
    } 
    else{
        medsos.classList.remove('medsos_dark');
        medsos.classList.add('medsos');

        banner.classList.remove('banner_dark');
        banner.classList.add('banner');
    }
}


window.addEventListener('DOMContentLoaded', function () {
    const darkModeToggle = document.getElementById('darkmode-toggle');

    darkModeToggle.checked = localStorage.getItem('darkMode') === 'true';

    darkModeToggle.addEventListener('change', function () {
        toggleDarkMode();
        localStorage.setItem('darkMode', darkModeToggle.checked);
    });

    if (darkModeToggle.checked) {
        toggleDarkMode();
    }
});

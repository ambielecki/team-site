document.addEventListener("DOMContentLoaded", function() {
    let active_nav = document.querySelector('#active_nav');
    console.log(active_nav);
    console.log(active_nav.dataset.tab);
    console.log(active_nav.dataset.page || 'Nothing here');
});

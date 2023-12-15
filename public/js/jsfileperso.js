
// document.addEventListener('mousemove', (event) => {
//     if (isemailpasswordValid()) {
//         return;
//     }
//     escape(event);
// })

document.addEventListener('DOMContentLoaded', function () {
    let menu = document.querySelector('.menu');
    let reservation = document.querySelector('.reservation');
    let compagnie = document.querySelector('.compagny');
    observer.observe(menu);
    observer.observe(reservation);
    observer.observe(compagnie);
    observer.observe(document.querySelector('.carousel'));
    observer.observe(document.querySelector('.artgrandeimg > .desc'));
    observer.observe(document.querySelector('.artgrandeimg > img'));
    observer.observe(document.querySelector('.artgrandeimg >h1'));




})

const observer = new IntersectionObserver((entries) => {
    for (const entry of entries) {
        if (entry.isIntersecting) {
            entry.target.animate([
                { transform: 'translateX(-300px)', opacity: 0 },
                { transform: 'translateX(0px)', opacity: 1 }
            ], {
                duration: 450
            })
            observer.unobserve(entry.target);
        }
    }
}, {
    threshold: .5
})




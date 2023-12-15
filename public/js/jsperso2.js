// Récupérer l'état de visibilité depuis le stockage local
const isAjoutVisible = localStorage.getItem('isAjoutVisible') === 'false';
const isDeleteVisible = localStorage.getItem('isDeleteVisible') === 'false';


// Fonction pour mettre à jour l'état de visibilité dans le stockage local
function updateVisibilityState() {
    console.log(localStorage.setItem('isAjoutVisible', document.querySelector('.fenetrepajout').hasAttribute('hidden')));
    localStorage.setItem('isDeleteVisible', document.querySelector('.fenetrepdelete').hasAttribute('hidden'));

}

// Mettre à jour l'état initial de visibilité
if (isAjoutVisible) {
    document.querySelector('.fenetrepajout').removeAttribute('hidden');
} else {
    document.querySelector('.fenetrepajout').setAttribute('hidden', 'hidden');
}

if (isDeleteVisible) {
    document.querySelector('.fenetrepdelete').removeAttribute('hidden');
} else {
    document.querySelector('.fenetrepdelete').setAttribute('hidden', 'hidden');
}



// Ajouter des écouteurs d'événements
document.querySelector('.linkajout').addEventListener('click', function (e) {
    document.querySelector('.fenetrepajout').removeAttribute('hidden');
    document.querySelector('.fenetrepdelete').setAttribute('hidden', 'hidden');


    updateVisibilityState();

    document.querySelector('.fenetrepajout').animate([
        { opacity: 0 },
        { opacity: 1 }
    ], {
        duration: 450
    });
    e.stopPropagation();
});

document.querySelector('.linksupp').addEventListener('click', function () {
    document.querySelector('.fenetrepajout').setAttribute('hidden', 'hidden');
    document.querySelector('.fenetrepdelete').removeAttribute('hidden');


    updateVisibilityState();

    document.querySelector('.fenetrepdelete').animate([
        { opacity: 0 },
        { opacity: 1 }
    ], {
        duration: 450
    });
});



// ... le reste de votre code
// Récupérer l'état de visibilité depuis le stockage local
// const isAjoutVisible2 = localStorage.getItem('isAjoutVisible') === 'false';
// const isDeleteVisible2 = localStorage.getItem('isDeleteVisible') === 'false';
// const isModifierVisible2 = localStorage.getItem('isModifierVisible') === 'false';
// const ispVisible2 = localStorage.getItem('ispVisible') === 'false';
// console.log(ispVisible);

// // Fonction pour mettre à jour l'état de visibilité dans le stockage local
// function updateVisibilityState() {
//     console.log(localStorage.setItem('isAjoutVisible', document.querySelector('.fenetrerajout').hasAttribute('hidden')));
//     localStorage.setItem('isDeleteVisible', document.querySelector('.fenetrerdelete').hasAttribute('hidden'));
//     localStorage.setItem('isModifierVisible', document.querySelector('.fenetrermodifier').hasAttribute('hidden'));
//     localStorage.setItem('ispVisible', document.querySelector('.fenetrermodifier').hasAttribute('hidden'));
// }

// // Mettre à jour l'état initial de visibilité
// if (isAjoutVisible2) {
//     document.querySelector('.fenetrerajout').removeAttribute('hidden');
// } else {
//     document.querySelector('.fenetrerajout').setAttribute('hidden', 'hidden');
// }

// if (isDeleteVisible2) {
//     document.querySelector('.fenetrerdelete').removeAttribute('hidden');
// } else {
//     document.querySelector('.fenetrerdelete').setAttribute('hidden', 'hidden');
// }

// if (isModifierVisible2) {
//     document.querySelector('.fenetrermodifier').removeAttribute('hidden');
// } else {
//     document.querySelector('.fenetrermodifier').setAttribute('hidden', 'hidden');
// }
// if (ispVisible2) {
//     document.querySelector('.casvide').removeAttribute('hidden');
// } else {
//     document.querySelector('.casvide').setAttribute('hidden', 'hidden');
// }

// // Ajouter des écouteurs d'événements
// document.querySelector('.linkajout').addEventListener('click', function (e) {
//     document.querySelector('.fenetrepajout').removeAttribute('hidden');
//     document.querySelector('.fenetrepdelete').setAttribute('hidden', 'hidden');
//     document.querySelector('.fenetrepmodifier').setAttribute('hidden', 'hidden');
//     document.querySelector('.casvide').setAttribute('hidden', 'hidden');

//     updateVisibilityState();

//     document.querySelector('.fenetrepajout').animate([
//         { opacity: 0 },
//         { opacity: 1 }
//     ], {
//         duration: 450
//     });
//     e.stopPropagation();
// });

// document.querySelector('.linksupp').addEventListener('click', function () {
//     document.querySelector('.fenetrepajout').setAttribute('hidden', 'hidden');
//     document.querySelector('.fenetrepdelete').removeAttribute('hidden');
//     document.querySelector('.fenetrepmodifier').setAttribute('hidden', 'hidden');
//     document.querySelector('.casvide').setAttribute('hidden', 'hidden');

//     updateVisibilityState();

//     document.querySelector('.fenetrepdelete').animate([
//         { opacity: 0 },
//         { opacity: 1 }
//     ], {
//         duration: 450
//     });
// });

// document.querySelector('.linkmod').addEventListener('click', function () {
//     document.querySelector('.fenetrepajout').setAttribute('hidden', 'hidden');
//     document.querySelector('.fenetrepdelete').setAttribute('hidden', 'hidden');
//     document.querySelector('.fenetrepmodifier').removeAttribute('hidden');
//     document.querySelector('.casvide').setAttribute('hidden', 'hidden');

//     updateVisibilityState();

//     document.querySelector('.fenetrepmodifier').animate([
//         { opacity: 0 },
//         { opacity: 1 }
//     ], {
//         duration: 450
//     });
// });

// // ... le reste de votre code

console.log('script player.js bien chargé');

let lecteur = document.getElementById('lecteur');

player = {
    play: function () {
        lecteur.play();
    },

    pause: function () {
        lecteur.pause();
    },

    volumePlus: function () {
        lecteur.volume += 0.2;
    },

    volumeMoins: function () {
        lecteur.volume -= 0.2;
    }
}
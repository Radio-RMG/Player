console.log('script player.js bien chargé')

let lecteur = $('#lecteur')[0]
let play    = $('#play')
let pause    = $('#pause')
let plus    = $('#plus')
let moins   = $('#moins')

let player = {
    init: () => {
        player.refresh()
        player.play()
        player.pause()
        player.volumePlus()
        player.volumeMoins()
    },

    refresh: () => {
        setInterval(() => {
            $('#titre').load('includes/p_titre.php').fadeIn("slow")
        }, 10000)
    },

    play: () => {
        play.click(() => {
            lecteur.play()
        })
    },

    pause: () => {
        pause.click(() => {
            lecteur.pause()
        })
    },

    volumePlus: () => {
        plus.click(() => {
            if (1.0 !== lecteur.volume) {
                lecteur.volume += 0.1
            }
        })
    },

    volumeMoins: () => {
        moins.click(() => {
            if ('0.0' !== lecteur.volume.toFixed(1)) {
                lecteur.volume -= 0.1
            }
        })
    },
}

player.init()



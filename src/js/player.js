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
            lecteur.volume += 0.2
        })
    },

    volumeMoins: () => {
        moins.click(() => {
            lecteur.volume -= 0.2
        })
    },
}

player.init()



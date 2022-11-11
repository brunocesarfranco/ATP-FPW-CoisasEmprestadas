const btnMobile = document.getElementById('btn-mobile')

/* Adicionando Funcionalidades do Botão */

function toggleMenu(event) {
    if(event.type === 'touchstart') event.preventDefault()
    const nav = document.getElementById('nav')
    /* toggle = Adicione caso tenha, remova caso não tenha. */
    nav.classList.toggle('active')
    const active = nav.classList.contains('active')
    event.currentTarget.setAttribute('aria-expended', active)
    if(active) {
        event.currentTarget.setAttribute('aria-label', 'Fechar menu')
    } else {
        event.currentTarget.setAttribute('aria-label', 'Abrir menu')
    }
}

btnMobile.addEventListener('click', toggleMenu)

/* Devido aos 300milisegundos no mobile vamos add o touchstart */
btnMobile.addEventListener('touchstart', toggleMenu)


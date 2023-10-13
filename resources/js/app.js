import './bootstrap';

window.copy = function(text) {
    navigator.clipboard.writeText(text)
    // setTimeout(() => showMsg = false, 1000)
}

window.show = function(el, duration = 1000) {
    el.style.display = 'block'

    setTimeout(() => {
        el.style.display = 'none'
    }, duration);
}
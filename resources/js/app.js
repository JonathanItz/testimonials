import './bootstrap';
import './iframe';
import Toastify from 'toastify-js'
import Masonry from 'masonry-layout'

window.Toastify = Toastify
window.Masonry = Masonry

import "toastify-js/src/toastify.css"

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

window.nextStep = function(step = 2) {
    let prevStep = step - 1
    let prevStepEl = document.getElementById(`step-${prevStep}`)
    let nextStepEl = document.getElementById(`step-${step}`)
    let timeout = 150

    prevStepEl.style.opacity = 0

    setTimeout(() => {
        prevStepEl.style.display = 'none'
        nextStepEl.style.display = 'block'
        nextStepEl.style.opacity = 100
    }, timeout);
}
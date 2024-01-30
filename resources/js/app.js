import './bootstrap';
import './iframe';
import Toastify from 'toastify-js'
import Masonry from 'masonry-layout'

window.Toastify = Toastify
window.Masonry = Masonry

import "toastify-js/src/toastify.css"

window.copy = function (text) {
    navigator.clipboard.writeText(text)
    // setTimeout(() => showMsg = false, 1000)
}

window.copyiFrame = function (text) {
    navigator.clipboard.writeText(text)
    // setTimeout(() => showMsg = false, 1000)
}

window.show = function (el, duration = 1000) {
    el.style.display = 'block'

    setTimeout(() => {
        el.style.display = 'none'
    }, duration);
}

window.nextStep = function (step = 2) {
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

// function lemonBestieTestimonialRequest() {
//     // Create the parent element
//     const parentElement = document.createElement('div');

//     // Set the id attribute for the parent element
//     parentElement.id = 'lb-container';

//     // Create the SVG element
//     const svgElement = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
//     svgElement.setAttribute('xmlns', 'http://www.w3.org/2000/svg');
//     svgElement.setAttribute('fill', 'none');
//     svgElement.setAttribute('viewBox', '0 0 24 24');
//     svgElement.setAttribute('stroke-width', '1.5');
//     svgElement.setAttribute('stroke', 'currentColor');
//     svgElement.setAttribute('width', '32');
//     svgElement.setAttribute('height', '32');

//     // Create the path element with the provided SVG data
//     const pathElement = document.createElementNS('http://www.w3.org/2000/svg', 'path');
//     pathElement.setAttribute('stroke-linecap', 'round');
//     pathElement.setAttribute('stroke-linejoin', 'round');
//     pathElement.setAttribute('d', 'M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z');

//     // Append the path to the SVG element
//     svgElement.appendChild(pathElement);

//     // Append the SVG element to the parent element
//     parentElement.appendChild(svgElement);

//     // Attach an event listener to the parent element to toggle the class on click
//     parentElement.addEventListener('click', function () {
//         parentElement.classList.add('lb-highlighted');
        
//         if(! parentElement.classList.contains('lb-highlighted')) {

//         }
//     });

//     // Attach an event listener to the document to remove the class when clicking outside the parent element
//     document.addEventListener('click', function (event) {
//         const isClickInside = parentElement.contains(event.target);
//         if (!isClickInside) {
//             parentElement.classList.remove('lb-highlighted');
//         }
//     });

//     // Attach the parent element to the HTML body
//     document.body.appendChild(parentElement);
// }

// document.addEventListener('livewire:navigated', () => {
//     lemonBestieTestimonialRequest()
// })

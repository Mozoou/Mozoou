/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import '../styles/app.scss';

console.log("TEST")
// start the Stimulus application
import '../bootstrap';
import Slideout from 'slideout';
import '../../node_modules/@fortawesome/fontawesome-free/css/all.css'

// window.addEventListener('load', () => {
//     let menu = document.querySelector('.mobile-menu');
//     let menuButton = document.querySelector('#menuButton');
//     let menuIcon = menuButton.querySelector('i')
//     menuButton.addEventListener('click', function (e) {
//         menu.classList.toggle('translate-x-full')
//         menu.classList.toggle('invisible')

//         if (!menu.classList.contains('w-0', 'h-0')) {
//             setTimeout(() => {
//                 menu.classList.toggle('w-0')
//                 menu.classList.toggle('h-0')
//             }, 1000);
//         } else {
//             menu.classList.toggle('w-0')
//             menu.classList.toggle('h-0')
//         }

//         if (menuIcon.classList.contains('fa-bars')) {
//             menuIcon.classList.replace('fa-bars', 'fa-xmark')
//         } else {
//             menuIcon.classList.replace('fa-xmark', 'fa-bars')
//         }
//     });
// })
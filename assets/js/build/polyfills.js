/*
 * Polyfill for object fit css properties.
 * Requires Modernizr detection feature to detect wether the browser supports Object Fit
 * 
 * Usage:
 * Wrap your object fit image in a div or other block element and give it a class of .ob-image
 * The image URL will be applied to the wrapping element as a background-image.
*/

if (!Modernizr.objectfit) {
    const imgContainer = document.querySelectorAll('.ob-image');

    imgContainer.forEach((el) => {
        const imgURL = el.querySelector('img').src;

        if (imgURL) {
            el.style.backgroundImage = `url('${imgURL}')`;
            el.classList.add('ob-image--active');
        }
    });
};
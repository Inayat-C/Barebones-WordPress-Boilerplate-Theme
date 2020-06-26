# Barebones Theme

The Barebones WordPress theme has been optimised to include only the necessary files and dependancies i know i'll require when beginning a new WordPress project. Anything extra i may need is dependant on the needs of the project i'm working on, and is added as and when required on a project per project basis. But usually everything contained in this theme is used on each new WordPress project.

An overview of what this theme contains:

#### :globe_with_meridians: &nbsp; Webpack - Module bundling and code compiling with webpack

-   Compiles Sass.
-   Supports ES6 Javascript backwards compatibility.
-   Minifies/uglifies JS and CSS for production.
-   Watches your files.

#### :fire: &nbsp; Functions - Helpful functions to optimise your WordPress theme

-   Main scripts and styles file enqueued and ready to use.
-   A series of functions which removes bloatware from WordPress to speed up your site.

#### :ok_hand: &nbsp; CSS

-   Bootstrap 4 Flexbox Grid - You don't need the whole library if you just need the grid!
-   Normalize.css included.

#### :pray: &nbsp; Polyfill

-   A simple polyfill script for `object-fit` included.
-   Modernizr feature detection included.

## Get Started

Run `npm install` to install all the required dependancies for the theme. Then run `npm run watch` to begin watching your `SASS` and `JS` files.

You can now start building your WordPress theme!

## Polyfill

The theme contains a `polyfills.js` file which has a polyfill for `object-fit`. The `object-fit` polyfill uses modernizrs detection feature to detect if your browser supports `object-fit`, if not it gets your image src and adds it to the wrapping div as a `background-image` provided the wrapping div has a class of `ob-image`.

How you would use it:

```
<div class="ob-image">
  <img src="/your-image.jpg" alt="your-image-description" title="your-image-title" />
</div>
```

## To-do

-   Add a theme cover image

## Contribution

Pull requests welcome!

# Barebones Theme

The Barebones WordPress theme has been optimised to include only the necessary files and dependancies i know i'll require when beginning a new WordPress project. Anything extra i may need is dependant on the needs of the project i'm working on, and is added as and when required on a project per project basis. But usually everything contained in this theme is used on each new WordPress project.

An overview of what this theme contains:

- Supports `ES6` Javascript.
- `SASS` ready.
- Bootstrap 4 Flexbox Grid.
- A `package.json` file with all the dependancies required for the theme.
- Gulp file which compiles SASS, concatenates & minifies CSS, concatenates & minifies JS, compiles JS with Babel and adds vendor prefixes to CSS.
- Functions file with some snippets that remove bloatware from WordPress such as oEmbed scripts, comments, emoji support and more.  
- Polyfills for `Array.from()` and `object-fit`.
- Modernizr.
- Normalize.

## Get Started

Run `npm init` to install all the required dependancies to the theme. Then run `gulp watch` to begin watching your `SASS` and `JS` files. You may need to also run `npm gulp install` if `gulp watch` throws an error. 

You can now start building your WordPress theme! Any changes you make to your SASS files will be compiled to CSS when you save the `style.scss` file. The JS files all live in the `assets/js/build/` directory and compiles to `scripts.min.js` in the `assets/js/` directory.

For debugging Javascript when developing, you can remove `uglify()` from the `js` task in `gulp`. Just remember to add it back in when your pushing to production!   

## Theme Structure

Set up your colours and typography in the `sass` files provided which live in the `assets/sass/base/` directory. 

When adding Custom Post Types, place your code in `/includes/custom-post-types.php`.

The theme uses the Bootstrap 4 flexbox grid which is pulled in from the `node_modules` folder which appears once you've set up your theme. You can remove this and add your own grid if you prefer in the `assets/sass/layout/grid.scss` file.

The theme contains a `polyfills.js` file which has polyfills for `Array.from()` and `object-fit`. The `object-fit` polyfill uses modernizrs detection feature to detect if your browser supports `object-fit`, if not it gets your image src and adds it to the wrapping div as a `background-image` provided the wrapping div has a class of `ob-image`.

It would look something like this:

```
<div class="ob-image">
<img src="https://images.unsplash.com/photo-1532572204213-a43b97556045?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=4896eb0c6605ee360a949b1c20e90df7&auto=format&fit=crop&w=634&q=80">
</div>
```

## To-doå

- Add a theme cover image
- Create a more useful 404 template
- Replace gulp with webpack!

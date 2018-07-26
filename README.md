# Barebones Theme

The Barebones WordPress theme has been optimised to include only the necessary files and dependancies i know i'll require when beginning a new WordPress project. Anything extra i may need is dependant on the needs of the project i'm working on, and is added as and when required on a project per project basis. But usually everything contained in this theme is used on each new WordPress project.

An overview of what this theme contains:

- Supports `ES6` Javascript.
- `SASS` ready.
- A `package.json` file with all the dependancies required for the theme.
- Gulp file which compiles SASS, concatenates & minifies CSS, concatenates & minifies JS, compiles JS with Babel and adds vendor prefixes to CSS.
- Functions file with some snippets that remove bloatware from WordPress such as oEmbed scripts, comments, emoji support and more.  
- Polyfills for `Array.from()` and `object-fit`.
- Modernizr.

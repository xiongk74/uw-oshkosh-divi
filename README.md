# Install

## Prerequisites

### [Node.js](https://nodejs.org)

Bring up a terminal and type `node --version`.
Node should respond with a version at or above 0.10.x.
If you require Node, go to [nodejs.org](https://nodejs.org) and click on the big green Install button.

### Install local dependencies
1. Navigate to the repository in a terminal window
2. Run ```npm install```

It should be noted that this package runs some UNIX commands, so this won't work on Windows. It does work on Linux and Mac.

That's it! You should have everything you need to run scripts for uw-oshkosh-divi.

# Commands

At this time, there are two basic build commands that this this package uses.

1. ```npm run build-dev``` builds the project in builds/dev. This build version doesn't minify CSS or JavaScript and adds a map file to each for easier debugging. Image compression is enabled.
2. ```npm run build-prod``` builds a project readying it for release. This build version does minify everything and does not include a map file for CSS and JavaScript. Image compressions is enabled.
3. ```npm clean``` removes the build directory if it exists.

# About uw-oshkosh-divi
A child theme for UW Oshkosh Wordpress sites using the Divi parent theme.

This repository has two main sections.
The first is a custom-files directory including sites-specific information for the Google Custom Search Engine. Information on how to set this up for your site is <a href="https://kb.uwosh.edu/internal/page.php?id=56354" target="_blank">here</a>.
The second section is the actual UWO child theme (which goes in the WordPress themes folder). This theme is a child theme of <a href="http://www.elegantthemes.com/gallery/divi/" target="_blank">Divi</a> by <a href="http://www.elegantthemes.com/" target="_blank">Elegant Themes</a>.

# Construction_theme

Theme Requirements:

1) Must have the PRO version of Advanced Custom Fields. This theme will only work if you have that. 
2) Must install Custom Post Type UI plugin - IT'S FREE!
3) Download [Responsive Menu] plugin from repository and set the breakpoint to 800px
4) Pre-Processing solution


Steps:

1) Fork theme
2) Clone down repository 
3) Download ACF PRO 
4) Upload JSON file to [Custom Fields -> Tools -> Upload]
5) Download Custom Post Type UI plugin
6) Copy and Paste text from file CPT_UI.txt to [CPT UI -> Tools]
7) You will want to set up a preprocessing solution since this site uses SCSS (I have not set up a gulp file yet, could come through in a    later version).


Recommendations:

I have been using [Autoptimize] to help with site speed and it is working great. The overall theme is pretty slim out of the box so you most likely wont have any speed issues.

I typically compress each photo manually prior to uploading using [Compressor.io]. With other websites I have used the [Imagify] plugin which does a really great job of compressing photos and doesn't usually bloat the site. 

When I do not have time to set up a gulpfile.js I use Pre Pros to process the SCSS

================================================================

================================================================

How to set up gulp and browsersync:

1) Install gulp globally || npm install --global gulp-cli
2) Make sure you have the package.json from the construction_theme files
3) Install dependencies || npm install
4) Once you have done this, you will be able to run each in this order 

    ==============================
    postinstall || npm run build
    ==============================
    build || gulp
    ==============================
    browsersync || gulp browsersync
    ==============================
    
5) browsersync works great on my machine, make sure you change the [const LOCAL_URL = 'http://localhost:8888/Eric%20Rattcliffe%20Construction/wordpress/';] which is located in the [gulpfile.js]

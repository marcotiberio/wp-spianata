# NPM
npm install

# Grunt
The repository does NOT have a watch function
When you type in 'grunt', the following happens:

## Shell
- Your Wordpress theme folder will get emptied

## SASS
- CSS gets compiled

## Concat
- JS gets compiled, it was a quick setup. So all JS files just get pasted behind each other. ES6 does not work

## Copy
- The important files for this Wordpress theme will get copied and pasted into the folder of your theme destination


If you do nto want to use the copy and paste from the repository folder to the wordpress theme folder and develop the theme right inside the theme folder, just comment out line 72 and 75 in the Grunfile.js


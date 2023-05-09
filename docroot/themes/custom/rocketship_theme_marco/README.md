# Dropsolid Layout exercise

## Tools and dependencies

- A browser with developer tools
- A code editor
- A local stack that can run Drupal projects (recommended)

## Install

This repo consist of exercises for you to apply to a Drupal theme. In order for this to work, it is recommended you install a Drupal 8 or 9 site, with a theme in which you can add and modify templates, theme functions, JS and CSS (or SCSS).

Since we'll be working with our rocketship theme a lot it would be a good idea to use a rocketship theme already ( and it's nessecary for Exercise 6 )

You can install the module https://www.drupal.org/project/rocketship_theme_generator to generate one. ( Use the dev version )

```
composer require 'drupal/rocketship_theme_generator:^3.x-dev'
```

Instructions to generate the theme are available in the readme. In short: You'll have to use the following command inside the module's folder to generate a theme. It will be placed in the /dist folder of the folder and you'll have to move the theme manually.

```
php scripts/generate-theme.php --name='Rocketship Starter' --machine-name='rocketship_theme_starter' --preset=starter --author='rembrandx' --description='Component-based Drupal theme for use with Dropsolid Rocketship install profile, modules and other components.' --theme-path='dist'
```

### What we expect
- A copy of the site (including the database), so we can view the files you changed and run the results
- Let us know per exercise what files you added/modified (and where you added them) to do the exercises.

If for some reason it is not an option for you to run a Drupal site, you can supply us with the solutions in stand-alone files per exercise folder. We will evaluate them only based on their theoretical result & your knowledge of the syntax/structure, not the practical (running) result.<br />
That being said, if we can`t see it run, our evaluation of the work will be a bit limited.

## Exercise 1

Make a custom block type called `Info` and add 2 fields to it:
- One for a long text field
- One for a link field
Add it somehere on your site but it can only render on the homepage

## Exercise 2

Override the Block's Twig template with a new template
- Make a custom theme suggestion to do this

## Exercise 3

Add an extra class to your block type
- Extra credits: use a theme function to do it

## Exercise 4

Override the Twig template for that link field with a new template
- make a custom theme suggestion to do this

## Exercise 5

We want to run some JS for our `Info` block
- Make 3 Drupal JS-files for your theme, called `helpers.js`, `block-info.js` and `block-info-link.js`
- add console logs to all of them so we can see in the browser console what's happening.
- Load the files in the site:
  - `helpers.js` needs to load on every url where your front-end theme is active
  - `block-info.js` can only load on pages where the `Info` block is rendered
  - `block-info-link.js` can only load on pages where the info link is rendered
  - we want to see 3 different methods for loading those JS-files in Drupal

## Exercise 6

We want to add some styling to our block. Implement the following using a atomic design approach.

- Add a background color to the block. Every block of the same block type should have this background color.
- Change the text color of the link field. If the field would be reused anywhere else it should have to same color.
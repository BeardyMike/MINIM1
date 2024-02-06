<picture>
  <source media="(prefers-color-scheme: dark)" srcset="https://raw.githubusercontent.com/BeardyMike/MINIM1/dev/public/img/MINIM1-w.png">
  <source media="(prefers-color-scheme: light)" srcset="https://raw.githubusercontent.com/BeardyMike/MINIM1/dev/public/img/MINIM1.png">
  <img alt="the word MINIM1, shown in a sharp font" src="https://raw.githubusercontent.com/BeardyMike/MINIM1/dev/public/img/MINIM1.png">
</picture>

 A clean PHP application, with some helpful diagnostic and setup tools, plenty of example pages, and many handy functions built in.
<br> Ideal for PHP beginners, or someone looking for a clean starter MVC-pattern project.
 
 MINIM1 is based on [MINI3](https://github.com/panique/mini3), from [Panique](https://github.com/panique). This project allows for much deeper customisation, and includes a number of new features that wouldn't make sense in the regular MINI3 project.

 In the _Tools folder you'll find a number of useful tools, including a Python NameSpace Renamer, a Python Crawler for highlighting routing errors, and a full dummy SQL DB for you to import for testing purposes.

## Commenting
This project uses the [PHP-FIG](https://www.php-fig.org/) standard for commenting code, and we've taken great effort to show how and why each function is used.
If you find a comment that needs amending, please feel free to submit a pull request to the dev branch. We want MINIM1 comments to be easy to read, helping new users understand why functions work the way they do.

## What's new?
Simplified installation process, using composer install. Protected view() function in the Controllers with a variable passing on most routes. 
```
   view('_templates/header.php', [
       'meta_title' => 'Homepage',
       'meta_description' => 'This the pages meta description',
       'meta_canonical' => URL . "home"
       ]);
```

## Why not just fork MINI3?
We wanted to create a version of MINI3 that was more up to date, included a number of new features, and that is a signifacnt depatrure from MINI3's goals of being super simple/lightwieght. We want MINIM1 to be a 

We also want MINIM1 to be an easier starting point for PHP beginners who are trying to learn the MVC pattern.

## Installation
Open a terminal and use "composer install", this creates the VENDOR folder with all the dependencies. 
### THE PHP APPLICATION WILL NOT WORK UNLESS YOU PERFORM THIS STEP.

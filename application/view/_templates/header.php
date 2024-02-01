<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $meta_title;?></title>
    <meta name="description" content="<?php echo $meta_description;?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $meta_canonical;?>" rel="canonical" />
    <!-- CSS -->
    <link href="<?php echo URL; ?>css/style.css" rel="stylesheet">
</head>
<body>
    <!-- logo, check the CSS file for more info how the logo "image" is shown -->
    <div class="logo"></div>

    <!-- navigation -->
    <div class="navigation">
        <a href="<?php echo URL; ?>">home</a>
        <a href="<?php echo URL; ?>home/example-one">home/example-one</a>
        <a href="<?php echo URL; ?>home/example-two">home/example-two</a>
        <a href="<?php echo URL; ?>login">Login</a>
    </div>

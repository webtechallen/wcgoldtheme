<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVE</title>



    <?php wp_head();?>


</head>




<body <?php body_class("test");?>>







<header>
    <div class="container d-flex align-items-center justify-content-between">

        <img src="<?php bloginfo("template_directory");?>/images/mvelogo.png" class="img-fluid logo">
        <nav class="navigation">

        <?php
        wp_nav_menu(

                array(

                    "theme_location" => "top-menu",
                    "menu_class" => "top-menu d-flex"
                )
      
                );?>











    </div>
</header>

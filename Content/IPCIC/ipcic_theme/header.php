<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php wp_title('|',true,'right'); ?><?php bloginfo('name');?></title>
  <?php wp_head(); ?>
</head>
<body>
<header class="header">
  <?php get_template_part( 'template-parts/header', get_post_format() ); ?>
</header>
<main class="main full-width">


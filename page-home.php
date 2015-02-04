<?php
currentDivider = 0;
/* Template Name: Homepage */
get_header(); 
get_header('home'); 

get_template_part('section','introduction')

get_template_part('section','about');

get_template_part('section','divider');
currentDivider++;

get_template_part('section','portfolio');

get_template_part('section','service');

get_template_part('section','team');

get_template_part('section','divider');
currentDivider++;


if(function_exists('get_field')){

	get_template_part('section','portfolio');

}

if(function_exists('get_field')){

	get_template_part('section','service');

}

if(function_exists('get_field')){

	get_template_part('section','team');

}

if(function_exists('get_field')){

	get_template_part('section','client');

}



get_template_part('section','blog');

if(function_exists('get_field')){

	get_template_part('section','contact');

}

get_footer('home');

get_footer(); ?>
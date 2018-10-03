<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route = array(
	'default_controller' 		=> 'welcome',
	'404_override' 					=> '',
	'translate_uri_dashes' 	=> FALSE,
	'login' 								=> 'auth/login',
	'user'									=> 'auth',
	'landing_page'					=> 'lessons/landing_page',
	'about'									=> 'lessons/about',
	'contact'								=> 'lessons/contact',
	'levels/(:num)'					=> 'pages/levels/$1',
	'sing-a-long'						=> 'pages/sing_vid_menu',




	'add-category' 					=> 'category/create',
	'add-level' 						=> 'level/create',

	'add-question' 					=> 'quiz/create',
	'add-lesson' 						=> 'lessons/create',



	'edit-category/(:num)' 	=> 'category/edit/$1',
	'edit-level/(:num)' 		=> 'level/edit/$1',


	'edit-quiz/(:num)' 	 		=> 'quiz/edit/$1',
	'category_menu' 				=>  'lessons/category_menu',

	'lesson' 								=>  'lessons/lesson_menu',
	'lesson/(:num)'					=> 'lessons/lesson/$1',

	'videos_menu' 					=>  'lessons/videos_menu',
	'videos/Lesson' 				=>  'lessons/lessons_video',
	'videos/StorySeries' 		=>  'lessons/storyseries',
	'videos/SingALong' 			=>  'lessons/singalong',

// num = number
// any = text

	'question/(:num)/(:num)'		=> 'quiz/question/$1/$2',




	// 'temp1_quiz/(:num)/(:any)'				=> 'quiz/temp1_quiz/$1/$2',
	// 'temp2_quiz/(:num)/(:any)'				=> 'quiz/temp2_quiz/$1/$2',
	//
	// 'mod1_quiz/(:num)/(:any)'		=> 'quiz/mod1_quiz/$1/$2',
	// 'mod2_quiz/(:num)/(:any)'		=> 'quiz/mod2_quiz/$1/$2',
	// 'temp7_quiz/(:num)/(:any)'		=> 'quiz/temp7_quiz/$1/$2',
	// 'temp4_quiz/(:num)/(:any)'		=> 'quiz/temp4_quiz/$1/$2',
	//
	// 'dif1_quiz/(:num)/(:any)'		=> 'quiz/dif1_quiz/$1/$2',
	//


	'upload' 					=> 'upload/index',


	//'add-user/(:num)'	=> 'auth/create_user/$1',
	// 'edit-user/(:num)' 	=> 'auth/edit_user/$1',
);




// $route['videos/lessons_video'] = 'lessons/lessons_video';

$route['lessons/submenu_alphabets'] = 'lessons/submenu_alphabets';
$route['lessons/submenu_numbers'] = 'lessons/submenu_numbers';
$route['lessons/submenu_colors'] = 'lessons/submenu_colors';
$route['lessons/submenu_actionwords'] = 'lessons/submenu_actionwords';
$route['lessons/submenu_shapes'] = 'lessons/submenu_shapes';
$route['lessons/submenu_expressions'] = 'lessons/submenu_expressions';


$route['lessons/lesson_alphabets'] = 'lessons/lesson_alphabets';


$route['lessons/lesson_numbers'] = 'lessons/lesson_numbers';
      // $route['lessons/numbers'] = 'lessons/numbers';


      // $route['lessons/lesson_colors'] = 'lessons/lesson_colors';
$route['lessons/lesson_colors'] = 'lessons/lesson_colors';
$route['lessons/color_black'] = 'lessons/color_black';





$route['lessons/lesson_actionwords'] = 'lessons/lesson_actionwords';
      // $route['lessons/action_words'] = 'lessons/action_words';



$route['lessons/lesson_shapes'] = 'lessons/lesson_shapes';
$route['lessons/lesson_expressions'] = 'lessons/lesson_expressions';
      // $route['lessons/expression_happy'] = 'lessons/expression_happy';


$route['lessons/lesson_vowels'] = 'lessons/lesson_vowels';

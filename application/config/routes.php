<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route = array(
	'default_controller' 		=> 'welcome',
	'404_override' 					=> '',
	'translate_uri_dashes' 	=> FALSE,
	'login' 								=> 'auth/login',
	'register' 								=> 'auth/register',

	'user'									=> 'auth',
	// 'quiz'									=> 'quiz',

	'landing_page'					=> 'pages/landing_page',
	'about'									=> 'pages/about',
	'contact'								=> 'pages/contact',
	'levels/(:num)'					=> 'lessons/levels/$1',
	'sing-a-long'						=> 'lessons/sing_vid_menu',

	'results' 							=>  'results/result_page',

	'tally' 							=>  'results/tally',





	'add-category' 					=> 'category/create',
	'add-level' 						=> 'level/create',

	'add-question' 					=> 'question/create',

	'add-question' 					=> 'quiz/create',
	'add-lesson' 						=> 'lessons/create',
	'edit-category/(:num)' 	=> 'category/edit/$1',
	'edit-level/(:num)' 		=> 'level/edit/$1',


	// 'edit-quiz/(:num)' 	 		=> 'quiz/edit/$1',

	// 'edit-quiz/(:num)' 			=> 'question/edit/$1',

	'quiz/edit_quiz/(:num)' 			=> 'auth/edit_quiz/$1',


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




	'upload' 					=> 'upload/index',


	//'add-user/(:num)'	=> 'auth/create_user/$1',
	// 'edit-user/(:num)' 	=> 'auth/edit_user/$1',
);

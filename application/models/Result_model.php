<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Result_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}


	public function results(){
		$query = $this->db->select('*, level.level_name,results.id as resultID')
				->from('results')
				->join('users', 'results.user_id = users.id')
				->join('level', 'results.level_id = level.id')
				->join('category', 'results.category_id = category.id')
				

				->where('results.level_id=1')
				->get();
		return $query;
	}

	public function result_mods(){
		$query = $this->db->select('*, level.level_name,results.id as resultID')
				->from('results')
				->join('users', 'results.user_id = users.id')
				->join('level', 'results.level_id = level.id')
				->join('category', 'results.category_id = category.id')


				->where('results.level_id=2')
				->get();
		return $query;
	}

	public function result_difs(){
		$query = $this->db->select('*, level.level_name,category.category_name,results.id as resultID')
				->from('results')
				->join('users', 'results.user_id = users.id')
				->join('level', 'results.level_id = level.id')
				->join('category', 'results.category_id = category.id')


				->where('results.level_id=3')
				->get();
		return $query;
	}

// SELECT level.level_name from results join users
// on results.user_id = users.id
// join level on results.level_id = level.id where results.level_id = 1

// SELECT * from results
// join users on results.user_id = users.id
// where results.level_id = 1


}



// FOR Lesson example in every lesson image
// SELECT * FROM lesson_example join images
// on lesson_example.img_id= images.id join lesson_image
// on lesson_example.lesson_id= lesson_image.lesson_id
// where lesson_image.id = 16

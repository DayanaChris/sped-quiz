<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Query_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function delete_question($id){
		$this->db->delete('quiz', array('id' => $id));
		$this->db->delete('quiz_answer', array('quiz_id' => $id));
		$this->db->delete('quiz_image', array('quiz_id' => $id));
	}



	public function quiz_cat(){
		$query = $this->db->select('*, quiz.id as quizID')
				->from('quiz')
				->join('category', 'quiz.category_id = category.id')
				->join('level', 'quiz.level_id = level.id')
				->get();
		return $query;
	}




	// public function lesson(){
	// 	$query = $this->db->select('*, quiz.id as quizID')
	// 			->from('lesso')
	// 			->join('category', 'quiz.category_id = category.id')
	// 			->join('level', 'quiz.level_id = level.id')
	// 			->get();
	// 	return $query;
	// }





	public function questioner($id, $catId){
		$qury = $this->db->select('*,template_num,background, quiz.id as quizID')
										 ->from('level')
										 ->join('quiz', 'level.id = quiz.level_id')
										 ->where('level.id', $id)
										 ->where('quiz.category_id', $catId)
										 ->order_by('rand()')
										 ->limit(5)
										 ->get();

	return $qury;
	}



	public function get_answer($id){
		$query = $this->db->select()
									 		 ->from('quiz_image')
											 ->join('images', 'quiz_image.img_id = images.id')
											 ->where('quiz_image.quiz_id', $id)
											 ->order_by('rand()')
											 ->get();
			return $query;
	}






	public function get_template(){
		$query = $this->db->select('template_num')
		->from('quiz')
		->get();

		return $query;
	}




	//
	// SELECT * from `lesson_example`
	// join images on lesson_example.img_id = images.id
	// where lesson_example.lesson_id = 1



	// public function display_lesson_example_imageDISPLAYALL($id){
	// 	$query = $this->db->select()
	// 										 ->from('lesson_example')
	// 										 ->join('images', 'lesson_example.img_id = images.id')
	// 										 ->join('lesson', 'lesson.id = lesson_example.id')
	//
	// 										 ->join('category', 'category.id = lesson.cat_id')
	//
	// 										 ->where('lesson.cat_id', $id)
	//
	// 										 ->get();
	// 		return $query;
	// }


// functional
	// SELECT * from `lesson_example`
	//  join images on lesson_example.img_id = images.id
	// join lesson on lesson.id = lesson_example.id
	// join category on category.id= lesson.cat_id
	// where  lesson.cat_id=1


// old not functional
// SELECT * from `lesson_example`
//  join images on lesson_example.img_id = images.id
// join lesson on lesson.id = lesson_example.id
// join lesson_manager on lesson_example.img_id= images.id
// join category on category.id= lesson.cat_id
// where lesson_manager.lesson_example_id= lesson_example.id and lesson.cat_id=4
//


	public function display_lesson_example_imagessssssssss($id){
		$query = $this->db->select()
											 ->from('lesson_example')
											 ->join('images', 'lesson_example.img_id = images.id')
											 ->join('lesson', 'lesson.id = lesson_example.id')
											 ->join('lesson_image', 'lesson.id = lesson_image.lesson_id')

											 ->join('category', 'category.id = lesson.cat_id')
											 ->join('lesson_manager', 'lesson_image.img_id = images.id')

											 ->where('lesson_manager.lesson_image_id', 'lesson_image.id')


											 ->get();
			return $query;
	}





	public function display_lesson_images_WORKING($catId){
		$query = $this->db->select('*,template_num,category.category_image_title ,lesson.id as lessonID')
								->from('lesson_image')
								->join('images', 'lesson_image.img_id = images.id')
								->join('lesson', 'lesson.id = lesson_image.id')
								->join('lesson_manager', 'lesson_image.img_id = images.id')
								->join('category', 'category.id = lesson.cat_id')

								->where('lesson_manager.lesson_image_id', 'lesson_image.id' , 'and' , 'lesson.cat_id',   $catId)

								->get();
		return $query;
	}


	//	WORKING QUERY FOR DISPLAY LESSON IMAGES
	// SELECT * from `lesson_image`
	//  join images on lesson_image.img_id = images.id
	// join lesson on lesson.id = lesson_image.id
	// join lesson_manager on lesson_image.img_id= images.id
	// join category on category.id= lesson.cat_id
	// where lesson_manager.lesson_image_id= lesson_image.id and lesson.cat_id=4





}

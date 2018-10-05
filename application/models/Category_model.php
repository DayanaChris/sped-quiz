<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Category_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}


  public function cat_title($id){
		$query = $this->db->select()
											 ->from('category')
											 ->where('id', $id)

											 ->get();
			return $query;
	}


}

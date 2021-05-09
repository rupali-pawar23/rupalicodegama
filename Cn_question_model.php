<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cn_question_model extends CI_Model {

function __construct() {

parent::__construct();

}

public function get_question_list()

{
$this->db->select('A.pk_id,A.question');
$this->db->from('questions as A');
$this->db->where('A.status',1);
$this->db->order_by('A.pk_id asc');
$question_list=$this->db->get()->result_array();

	return $question_list;
}

public function get_question_answer_list()

{
$this->db->select('A.pk_id,A.answer,A.fk_ques_id,B.question');
$this->db->from('answer as A');
$this->db->join('questions B','B.pk_id=A.fk_ques_id');
$this->db->where('A.status',1);
$this->db->order_by('A.pk_id asc');
$this->db->group_by('A.fk_ques_id');
$question_answer_data=$this->db->get()->result_array();

	return $question_answer_data;
}

public function get_question_votes($fk_ques_id='')

{
$this->db->select('count(A.pk_id) as total_ques_votes');
$this->db->from('question_votes as A');
$this->db->where('A.fk_ques_id',$fk_ques_id);
$this->db->where('A.votes','Yes');
$get_ques_votes=$this->db->get()->result_array();

	return $get_ques_votes;
}


public function get_answer_votes($fk_answer_id='')

{

$this->db->select('count(A.pk_id) as total_answer_votes');
$this->db->from('answer_votes as A');
$this->db->where('A.fk_answer_id',$fk_answer_id);
$this->db->where('A.votes','Yes');
$get_answer_votes=$this->db->get()->result_array();

	return $get_answer_votes;
}


public function get_question_comment($fk_ques_id='')

{
$this->db->select('count(A.pk_id) as total_ques_cmmt');
$this->db->from('question_comment as A');
$this->db->where('A.fk_ques_id',$fk_ques_id);
$this->db->where('A.comment!='," ");
$get_ques_cmmt=$this->db->get()->result_array();

	return $get_ques_cmmt;
}


public function get_answer_comment($fk_answer_id='')

{
$this->db->select('count(A.pk_id) as total_answer_cmmt');
$this->db->from('answer_comment as A');
$this->db->where('A.fk_answer_id',$fk_answer_id);
$this->db->where('A.comment!='," ");
$get_answer_cmmt=$this->db->get()->result_array();

	return $get_answer_cmmt;
}


public function get_total_answer($fk_ques_id='')

{
$this->db->select('count(A.pk_id) as total_answer');
$this->db->from('answer as A');
$this->db->where('A.fk_ques_id',$fk_ques_id);
$get_answer=$this->db->get()->result_array();


	return $get_answer;
}
}
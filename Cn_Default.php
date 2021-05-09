<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cn_Default extends CI_Controller {
function __construct() {
parent::__construct();
$this->load->model('Cn_question_model');
}
  public function index()
{
    /*Get questions*/
$question_list=array();
$question_answer_list_graph=array();
$question_answer_list=array();
$data=array();


$data['question_list']=$this->Cn_question_model->get_question_list();

/*start::Get data for display*/

$question_answer_data=$this->Cn_question_model->get_question_answer_list();
 // echo "<pre>";print_r($question_answer_data);die();
if (!empty($question_answer_data)) {
   foreach ($question_answer_data as $key => $value) {

$get_ques_votes=$this->Cn_question_model->get_question_votes($value['fk_ques_id']);
$value['total_ques_votes']=!empty($get_ques_votes[0]['total_ques_votes'])?$get_ques_votes[0]['total_ques_votes']:'0';


$get_answer_votes=$this->Cn_question_model->get_answer_votes($value['pk_id']);
$value['total_answer_votes']=!empty($get_answer_votes[0]['total_answer_votes'])?$get_answer_votes[0]['total_answer_votes']:'0';



$get_ques_cmmt=$this->Cn_question_model->get_question_comment($value['fk_ques_id']);
$value['total_ques_cmmt']=!empty($get_ques_cmmt[0]['total_ques_cmmt'])?$get_ques_cmmt[0]['total_ques_cmmt']:'0';


$get_answer_cmmt=$this->Cn_question_model->get_answer_comment($value['pk_id']);
$value['total_answer_cmmt']=!empty($get_answer_cmmt[0]['total_answer_cmmt'])?$get_answer_cmmt[0]['total_answer_cmmt']:'0';


$get_answer=$this->Cn_question_model->get_total_answer($value['fk_ques_id']);
$value['total_answer']=!empty($get_answer[0]['total_answer'])?$get_answer[0]['total_answer']:'0';


$value['question_number']=!empty($value['fk_ques_id'])? 'Question '.$value['fk_ques_id']:'0';
$final_array[]=$value;
     
   }
}

$data['question_answer_list_graph']=json_encode($final_array);
$data['question_answer_list']=$final_array;

/*End::Get data for display*/
// echo "<pre>";print_r($final_array);die();
    $this->load->view('form1',$data);
}
 public function action_question() {
     
        if (!empty($this->input->post())) {
        $textquestions = !empty($this->input->post('textquestions')) ? $this->input->post('textquestions') : "";
           
                 $inserted_data = array(
                    'question' => $textquestions,
                    'status' => '1',
                    'createdDate' => date('Y-m-d H:i:s'),
                    'createdBy' => $this->session->userdata('UID'),
                    'created_ip_address ' => $_SERVER['REMOTE_ADDR'],
                   
                );

             $ret = $this->Md_database->insertData('questions', $inserted_data);
         redirect(base_url() . 'index-form');
            
        } else {

            redirect(base_url() . 'index-form');
        }
    } 


public function add_answer_question()
{

$textques = !empty($this->input->post('textques')) ? $this->input->post('textques') : '';
$txtanswer = !empty($this->input->post('txtanswer')) ? $this->input->post('txtanswer') : '';
$txtcmtques = !empty($this->input->post('txtcmtques')) ? $this->input->post('txtcmtques') : '';
$txtcmtanswer = !empty($this->input->post('txtcmtanswer')) ? $this->input->post('txtcmtanswer') : '';
$txtvotques = !empty($this->input->post('txtvotques')) ? $this->input->post('txtvotques') : '';
$txtvoteanswer = !empty($this->input->post('txtvoteanswer')) ? $this->input->post('txtvoteanswer') : '';

$insert_data1=array(

'fk_ques_id'=>$textques,
'answer'=>$txtanswer,
'createdDate' => date('Y-m-d H:i:s'),
// 'createdBy' => $this->session->userdata('UID'),
'created_ip_address ' => $_SERVER['REMOTE_ADDR'],
'status'=>1,

);  

$res= $this->Md_database->insertData('answer', $insert_data1);
$fk_answer_id=$this->db->insert_id();


$insert_data2=array(

'fk_ques_id'=>$textques,
'comment'=>$txtcmtques,
'createdDate' => date('Y-m-d H:i:s'),
// 'createdBy' => $this->session->userdata('UID'),
 'created_ip_address ' => $_SERVER['REMOTE_ADDR'],
'status'=>1,

);  

$res= $this->Md_database->insertData('question_comment', $insert_data2);

$insert_data3=array(

'fk_ques_id'=>$textques,
'fk_answer_id'=>$fk_answer_id,
'comment'=>$txtcmtanswer,
'createdDate' => date('Y-m-d H:i:s'),
// 'createdBy' => $this->session->userdata('UID'),
 'created_ip_address ' => $_SERVER['REMOTE_ADDR'],
'status'=>1,

);  

$res= $this->Md_database->insertData('answer_comment', $insert_data3);

$insert_data4=array(

'fk_ques_id'=>$textques,
'votes'=>$txtvotques,
'createdDate' => date('Y-m-d H:i:s'),
// 'createdBy' => $this->session->userdata('UID'),
'created_ip_address ' => $_SERVER['REMOTE_ADDR'],
'status'=>1,

);  

$res= $this->Md_database->insertData('question_votes', $insert_data4);

$insert_data5=array(

'fk_ques_id'=>$textques,
'fk_answer_id'=>$fk_answer_id,
'votes'=>$txtvoteanswer,
'createdDate' => date('Y-m-d H:i:s'),
// 'createdBy' => $this->session->userdata('UID'),
 'created_ip_address ' => $_SERVER['REMOTE_ADDR'],
'status'=>1,

);  

$res= $this->Md_database->insertData('answer_votes', $insert_data5);



if (!empty($res)) {

         redirect(base_url() . 'index-form');
            
        } else {

            redirect(base_url() . 'index-form');
        }
    } 


}

<!DOCTYPE html>
<html>
<body>
  <script src="http://www.amcharts.com/lib/amcharts.js" type="text/javascript"></script>
<h2>Step 1 :Store Questions</h2>

<form id="add_question_form" name="add_question_form" action="<?php echo base_url();?>add-question" method="post"  onsubmit="return validateForm()">

<label for="">Question</label><br>
  <textarea type="text" id="textquestions" name="textquestions" value="" autocomplete="off"></textarea> <br><br>
  <input type="submit" value="Submit">
</form> 
<hr>
<h2>Step 2: store question with answer</h2>

<form id="add_answer_ques" name="add_answer_ques" action="<?php echo base_url();?>add-answer-question" method="post"  onsubmit="return validateForm2()">
  <label for="">Words:</label><br>
  <select id="textques" name="textques" >
    <option value="">Select Question</option>
      <?php if (!empty($question_list)) {
   foreach ($question_list as $key => $value) {?>
    <option value="<?php echo !empty($value['pk_id'])?$value['pk_id']:'';?>"><?php echo !empty($value['question'])?$value['question']:'';?></option>
  <?php }}?>
 
  </select> <br> <br>
  <label for="">Answer:</label><br>
  <input type="text" id="txtanswer" name="txtanswer" value="" autocomplete="off"><br><br>

    <label for="">Comment On Question:</label><br>
  <textarea type="text" id="txtcmtques" name="txtcmtques" value="" autocomplete="off"></textarea><br><br>


<label for="">Comment On Answer:</label><br>
  <textarea type="text" id="txtcmtanswer" name="txtcmtanswer" value="" autocomplete="off"></textarea> <br><br>

   <label for="">Vote  On Question:</label><br>
     <select id="txtvotques" name="txtvotques" >
    <option value="">Select Vote</option>
    <option value="Yes">Yes</option>
    <option value="No">No</option>
  </select><br><br>



<label for="">Vote On Answer:</label><br>
    <select id="txtvoteanswer" name="txtvoteanswer" >
    <option value="">Select Vote</option>
    <option value="Yes">Yes</option>
    <option value="No">No</option>
  </select><br><br>

  <input type="submit" value="Submit">
</form> 
<!-- Step 3 -->
<h2>Step 3:Display Data</h2>
<h4>Total Number of Questions : <?php echo !empty($question_answer_list)? count($question_answer_list):'0';?></h4>
<hr>
  <?php if (!empty($question_answer_list)) {
   foreach ($question_answer_list as $key => $value) {?>
  <p style=" color: blueviolet;"><?php echo $key+1;?>. <?php echo !empty($value['question'])? $value['question']:'0';?></p>
  <p><?php echo !empty($value['answer'])? $value['answer']:'0';?></p>
  <p>Question Votes :<?php echo !empty($value['total_ques_votes'])? $value['total_ques_votes']:'0';?></p><p>Answer Votes :<?php echo !empty($value['total_answer_votes'])? $value['total_answer_votes']:'0';?></p> <p>Question Comments :<?php echo !empty($value['total_ques_cmmt'])? $value['total_ques_cmmt']:'0';?></p> <p>Answer Comments :<?php echo !empty($value['total_answer_cmmt'])? $value['total_answer_cmmt']:'0';?></p>
<?php }}?>
<!--End- Step 3-->
<div class="container">
    <h2>Display Questions — Line Chart</h2>
    <div>
      <div id="graph"></div>
    </div>
</div>

</body>
</html>



<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script>
//Set bar chart for questions and answer
        Morris.Bar({
          element: 'graph',
          data: <?php echo $question_answer_list_graph;?>,
          xkey: 'question_number',
          ykeys: ['total_answer','total_ques_votes', 'total_answer_votes', 'total_ques_cmmt','total_answer_cmmt'],
          labels: ['total_answer','total_ques_votes', 'total_answer_votes', 'total_ques_cmmt','total_answer_cmmt'],
        });


</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
//Validate add question form
  function validateForm() {
  var textquestions = document.forms["add_question_form"]["textquestions"].value;
  if (textquestions == "") {
    alert("Must be filled out");
    return false;
  }
}
//Validate add question answer form
  function validateForm2() {
  var textques = document.forms["add_answer_ques"]["textques"].value;
  var txtanswer = document.forms["add_answer_ques"]["txtanswer"].value;
  if (textques == "" && txtanswer=='') {
    alert("Must be filled out");
    return false;
  }
}
</script>


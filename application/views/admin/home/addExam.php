<h2>Add exam Form-</h2>
<?php echo $this->session->flashdata('addExamMsg'); ?> 
<form method="post" action="<?php echo base_url('add_exam');?>" >

    <label>Course</label>
    <select id="course" onchange="getSubject()" required>
      <option>---Select Course---</option>
      <?php foreach ($courses as $course) { ?>
      <option value="<?php echo $course['id']?>"><?php echo $course['name']?></option>
      <?php }?>
    </select>
  </br>

  <label>Subject</label>
    <select name='subjectId' id='subject' required>
      <option>---Select Subject---</option>
    </select>
  </br>

  <label>Exam Name</label>
    <input name='name' placeholder="Exam Name" autofocus required />
    </br>
    
    <input type="submit" onclick="return confirm('Do you want to add exam.')" />
  &nbsp;&nbsp;
  <input type="reset"/>
  </p>
</form>
<script>
  function getSubject()
  {
    var xmlhttp;
    if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
      }
    else
      {// code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
    xmlhttp.onreadystatechange=function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
        document.getElementById("subject").innerHTML=xmlhttp.responseText;
        }
      }
    var req = "get_subject/" + document.getElementById('course').value;
    xmlhttp.open("GET",req,true);
    xmlhttp.send();

    //xmlhttp.open("POST","get_subject",true);
    //xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    
    xmlhttp.send();
  }
</script>
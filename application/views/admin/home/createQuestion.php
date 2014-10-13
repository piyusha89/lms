<h2>Create Question Form-</h2>
<?php echo $this->session->flashdata('creaeQueMsg'); ?> 
<form method="post" action="<?php echo base_url('create_question');?>">
  
    <label>Question</label>
    <textarea rows="4" cols="50" name="que" placeholder="Enter new question" autofocus required></textarea>

    </br>

    <label for="textfield2">Question type</label>
    <select name="type">
      <option value="Easy">Easy</option>
      <option value="Moderate">Moderate</option>
      <option value="Tough">Tough</option>
    </select>
  </br>
    
    <input type="submit"/>
  &nbsp;&nbsp;
  <input type="reset"/>
  </p>
</form>
<p>&nbsp;</p>

<?php include('elements/header.php');?>

<div class="container">
	<div class="page-header">
   <h1> the Add Post View </h1>
  </div>

  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>

  <div class="row">
      <div class="span8">
          
        <form action="<?php echo BASE_URL?>addpost/<?php echo $task?>" method="post" onsubmit="editor.post()">

           <label>Title</label>
          	<input type="text" class="span6" name="title" value="" required="Title">

          <label>Date</label>
          	<input type="date"  class="" name="date" value="<?php echo $date?>" required="Date">

          <label for="category">Category <span class="require"></span></label>
                <select name="category" id="category">
                <option value="0" selected="">-- Select Category --</option>
 <?
			foreach($categories AS $key => $value) {

	   		echo '<option value="' . $key . '">' . $value . '</option>' . "\n" ;
			}

?>
            </select>

           <label>Content</label>
         	 <textarea id="tinyeditor" name="content" style="width:556px;height: 200px" value="" required="Content"></textarea>
    			<br/>
          <input type="hidden" name="pID" value="<?php echo $pID?>"/>
          <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
        </form>


      </div>
    </div>
</div>
<?php include('elements/footer.php');?>

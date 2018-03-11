
<?php
include('elements/header.php');
?>


<div class="container">
	<div class="page-header">
   <h1> Register </h1>
  </div>

  <?php if(isset($message) && $message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>
   
    <div class="row">
      <div class="span8">

        <form action="<?php echo BASE_URL?>register/<?php echo $task?>" method="post" onsubmit="editor.post()">

          <label>First Name:</label>
           <input type="text" id="first_name" name="first_name" value="" required="First Name">

          <label>Last Name:</label>
          <input type="text"  class="text" id="last_name" name="last_name" value="" required="Last Name">

          <label>Email:</label>
          	<input type="text" class="text" id="email" name="email" value="" required="Email">

          <label>Password</label>
          	<input type="password"  class="text" id="password" name="password" value="" required="Password">



    			<br/>
          <input type="hidden" name="uID" value="<?php echo $uID?>"/>
          <button id="submit" type="submit" class="btn btn-primary" >Register</button>
        </form>


      </div>
    </div>
</div>






<?php include('elements/footer.php');?>

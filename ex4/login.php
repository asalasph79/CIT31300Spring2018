<?php
include('elements/header.php');?>


<div class="container">
	<div class="page-header">

   <h1> The Login View </h1>
   <?php if(isset($error)) { ?>
        <div class="alert alert-danger">
            <?php echo $error;?>
        </div>

        <?php
			}
        ?>


  
	 <div class="row">
	 		<div class="span8">

<form name="form" method="post" action="<?php echo BASE_URL;?>login/do_login" method="post" onsubmit="editor.post()">
  E-mail Adress:<br>
  <input type="text" id="email" name="email" value="" required="email"/>
  <br><br>
  Password:<br>
  <input type="password" id="password" name="password" value="" required="password"/>
  <br><br>
  <input type="submit" value="Login">


</form>

  </div>
</div>
<?php include('elements/footer.php');?>

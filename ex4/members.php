<?php include('elements/header.php');?>

<?php
if( isset($user) && is_array($user) ) {
	extract($user);?>

<div class="container">
    <div class="page-header">

      <h1>Member <?php echo $uID;?></h1>
    </div>

<?php echo strval($first_name.' '.$last_name)?><br>
<?php echo '<a href="mailto:'.$email.'">'.$email.'</a>';?>
</div>
<?php }?>

<?php if( isset($users) && is_array($users) ) {?>

 
<div class="container">
<div class="page-header">

        <h1><?php echo $title;?></h1>
</div>

<?php foreach($users as $u){?>
<a href="<?php echo BASE_URL.'members/view/'.$u['uID']; ?>"><h4>
<?php echo $u['email'];?></h4></a>

<?php echo strval($u['first_name'].' '.$u['last_name'])?><br>
<?php echo '<a href="mailto:'.$u['email'].'">'.$u['email'].'</a>';?>

<?php }?>
</div>

<?php }?>

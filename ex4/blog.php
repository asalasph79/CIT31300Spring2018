
<?php include('elements/header.php');?>
<?php
if( isset($post) && is_array($post) ) {
	extract($post);?>

<div class="container">
	<div class="page-header">

<h1><?php echo $title;?></h1>
  </div>

	<p><?php echo $content;?></p>

	<p>Posted on <?php echo $date;?></p>
</div>

</div>
<?php }?>
    
<?php if( isset($posts) && is_array($posts) ) {?>

<div class="container">
<div class="page-header">

<h1><?php echo $title;?></h1>
  </div>

	<?php foreach($posts as $p){?>
    <h3><a href="<?php echo BASE_URL?>blog/view/<?php echo $p['pID'];?>" title="<?php echo $p['title'];?>"><?php echo $p['title'];?></a></h3>
	<p><?php echo $p['content'];?></p>
	<p>Posted on <?php echo $p['date'];?></p>
<?php }?>
</div>

<?php }?>


<?php include('elements/footer.php');?>

<form id="registration_form" action="<?php echo BASE_URL;?>register/<?php echo $task?>" method="post">

<fieldset>
<legend>You May Register</legend>
<label for="first_name">First Name: </label>
<input type="text" id="first_name" name="first_name" value="" maxlength="20" required="first_name" />
<br />

<label for="last_name">Last Name: </label>
<input type="text" class="txt" id="last_name" name="last_name" value="" maxlength="20" required="last_name" />
<br />

<label for="email">E-mail Address: </label>
<input type="text" class="txt" id="email" name="email" value="" maxlength="100" required="email" />
<br />
 
<label for="password">Password: </label>
<input type="password" class="txt" id="password" name="password" value="" maxlength="100" required="password" />

<br />

<input type="hidden" name="uID" value="<?php echo $uID ?>"/>

<button id="submit" type="submit" class="btn btn-primary" >Sign Up</button>
</fieldset>
</form>

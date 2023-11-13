


<link href="css/form.css" type="text/css" rel="stylesheet">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ;?>" method="post">
<fieldset>

<label>First Name</label>
<input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ;?>">
<span><?php echo $first_name_err;?></span>

<label>Last Name</label>
<input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ;?>">
<span><?php echo $last_name_err;?></span>

<label>Email</label>
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">
<span><?php echo $email_err;?></span>

<label>Phone</label>
<input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']) ;?>">
<span><?php echo $phone_err;?></span>

<label>Favorite Movies</label>

<ul>
<li><input type="checkbox" name="movies[]" value="prison" <?php if(isset($_POST['movies']) && in_array('prison', $movies)) echo 'checked="checked"';?>>Prisoners</li>

<li><input type="checkbox" name="movies[]" value="scott" <?php if(isset($_POST['movies']) && in_array('scott', $movies)) echo 'checked="checked"';?>>Scott Pilgrim Vs. The World</li>

<li><input type="checkbox" name="movies[]" value="garden" <?php if(isset($_POST['movies']) && in_array('garden', $movies)) echo 'checked="checked"';?>>Garden State</li>

<li><input type="checkbox" name="movies[]" value="lotr" <?php if(isset($_POST['movies']) && in_array('lotr', $movies)) echo 'checked="checked"';?>>Lord of the Rings</li>

<li><input type="checkbox" name="movies[]" value="goonies" <?php if(isset($_POST['movies']) && in_array('goonies', $movies)) echo 'checked="checked"';?>>Goonies</li>

</ul>
<span><?php echo $movies_err;?></span>

<label>Movie Genres</label>

<select name="genre">
<option value="" <?php if(isset($_POST['genre']) && is_NULL($_POST['genre'])) echo 'selected="unselected"';?>>Select one!</option>

<option value="act" <?php if(isset($_POST['genre']) && $_POST['genre'] == "act") echo 'selected="selected"';?>>Action</option>

<option value="com" <?php if(isset($_POST['genre']) && $_POST['genre'] == "com") echo 'selected="selected"';?>>Comedy</option>

<option value="dram" <?php if(isset($_POST['genre']) && $_POST['genre'] == "dram") echo 'selected="selected"';?>>Drama</option>

<option value="scifi" <?php if(isset($_POST['genre']) && $_POST['genre'] == "scifi") echo 'selected="selected"';?>>Science Fiction</option>

<option value="myst" <?php if(isset($_POST['genre']) && $_POST['genre'] == "myst") echo 'selected="selected"';?>>Mystery/Thriller</option>

</select>
<span><?php echo $genre_err;?></span>

<label>Privacy</label>
<ul>
<li><input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == "yes") echo 'checked="checked"';?>>Yes</li>

</ul>
<span><?php echo $privacy_err;?></span>

<input type="submit" value="Send it!">

<p><a href="">Reset</p>

</fieldset>
</form>

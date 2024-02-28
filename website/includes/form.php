
<h1>Hiking Trails & Beautiful Views</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])   ;?>" method="post">
<fieldset>
<legend>
Contact Jacquie
</legend>

<label>First Name</label>
<input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ;?>">
<span> <?php echo $first_name_err;?> </span>

<label>Last Name</label>
<input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ;?>">
<span> <?php echo $last_name_err;?> </span>

<label>Email</label>
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">
<span> <?php echo $email_err;?> </span>

<label>Features</label>
<ul>
<li><input type="radio" name="features" value="waterfalls" <?php if(isset($_POST['features']) && $_POST['features'] == 'waterfalls') echo 'checked ="checked" ' ;?>>Waterfalls</li>
<li><input type="radio" name="features" value="lakes" <?php if(isset($_POST['features']) && $_POST['features'] == 'lakes') echo 'checked ="checked" ' ;?>>Lakes</li>
<li><input type="radio" name="features" value="rivers" <?php if(isset($_POST['features']) && $_POST['features'] == 'rivers') echo 'checked ="checked" ' ;?>>Rivers</li>
<li><input type="radio" name="features" value="mountains" <?php if(isset($_POST['features']) && $_POST['features'] == 'mountains') echo 'checked ="checked" ' ;?>>Mountains</li>
<li><input type="radio" name="features" value="views" <?php if(isset($_POST['features']) && $_POST['features'] == 'views') echo 'checked ="checked" ' ;?>>Views</li>
</ul>
<span> <?php echo $features_err;?> </span>

<label>Phone</label>
<input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars ($_POST['phone']) ;?>">
<span> <?php echo $phone_err;?> </span>

<label>Favorite Trails & Areas</label>
<ul>
<li><input type="checkbox" name="trails[]" value="sv"  <?php if(isset($_POST['trails']) && in_array('cab', $trails)) echo 'checked = "checked" '  ;?>>Skagit Valley, WA</li>

<li><input type="checkbox" name="trails[]" value="jt"  <?php if(isset($_POST['trails']) && in_array('merlot', $trails)) echo 'checked = "checked" '  ;?>>Joshua Tree National Park, CA</li>

<li><input type="checkbox" name="trails[]" value="np"  <?php if(isset($_POST['trails']) && in_array('syrah', $trails)) echo 'checked = "checked" '  ;?>>Naches Peak, Mt.Rainier, WA</li>

<li><input type="checkbox" name="trails[]" value="l22"  <?php if(isset($_POST['trails']) && in_array('malbec', $trails)) echo 'checked = "checked" '  ;?>>Lake 22, WA</li>

<li><input type="checkbox" name="trails[]" value="sl"  <?php if(isset($_POST['trails']) && in_array('red', $trails)) echo 'checked = "checked" '  ;?>>Skyline, Mt. Rainier, WA</li>
</ul>

<span> <?php echo $trails_err;?> </span>

<label>Regions</label>
<select name="regions">
<option value="" <?php if(isset($_POST['regions']) && is_null($_POST['regions'])) echo 'selected = "unselected"' ;?>>Select One!</option>
<!-- <span> <?php echo $regions_err;?> </span> -->

<option value="ew" <?php if(isset($_POST['regions']) && $_POST['regions'] == "ew") echo 'selected = "selected"' ;?>>Eastern Washington</option>

<option value="ww" <?php if(isset($_POST['regions']) && $_POST['regions'] == "ww") echo 'selected = "selected"' ;?>>Western Washington</option>

<option value="cw" <?php if(isset($_POST['regions']) && $_POST['regions'] == "cw") echo 'selected = "selected"' ;?>>Central Washington</option>

<option value="az" <?php if(isset($_POST['regions']) && $_POST['regions'] == "az") echo 'selected = "selected"' ;?>>Arizona</option>

<option value="ut" <?php if(isset($_POST['regions']) && $_POST['regions'] == "ut") echo 'selected = "selected"' ;?>>Utah</option>

<option value="sc" <?php if(isset($_POST['regions']) && $_POST['regions'] == "sc") echo 'selected = "selected"' ;?>>Southern California</option>

<option value="cd" <?php if(isset($_POST['regions']) && $_POST['regions'] == "cd") echo 'selected = "selected"' ;?>>California Desert</option>
</select>
<span> <?php echo $regions_err;?> </span>

<label>Comments</label>
<textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments'])  ;?></textarea>
<span> <?php echo $comments_err;?> </span>

<label>Privacy</label>
<ul>
<li><input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == "yes") echo 'checked = "checked"'  ;?>>Yes</li>
</ul>
<span> <?php echo $privacy_err;?> </span>

<input type="submit" value="Send it!">

<p><a href="">Reset</a></p>

</fieldset>
</form>


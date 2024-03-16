
<h1>National Parks in the US</h1>
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

<label>Phone</label>
<input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars ($_POST['phone']) ;?>">
<span> <?php echo $phone_err;?> </span>

<label>Features -- What do you want to see in the park?</label>
<ul>
<li><input type="radio" name="features" value="waterfalls" <?php if(isset($_POST['features']) && $_POST['features'] == 'waterfalls') echo 'checked ="checked" ' ;?>>Waterfalls</li>
<li><input type="radio" name="features" value="lakes" <?php if(isset($_POST['features']) && $_POST['features'] == 'lakes') echo 'checked ="checked" ' ;?>>Lakes</li>
<li><input type="radio" name="features" value="rivers" <?php if(isset($_POST['features']) && $_POST['features'] == 'rivers') echo 'checked ="checked" ' ;?>>Rivers</li>
<li><input type="radio" name="features" value="mountains" <?php if(isset($_POST['features']) && $_POST['features'] == 'mountains') echo 'checked ="checked" ' ;?>>Mountains</li>
<li><input type="radio" name="features" value="hiking" <?php if(isset($_POST['features']) && $_POST['features'] == 'hiking') echo 'checked ="checked" ' ;?>>Hiking Trails</li>
<li><input type="radio" name="features" value="access" <?php if(isset($_POST['features']) && $_POST['features'] == 'access') echo 'checked ="checked" ' ;?>>Accessible Trails & Services</li>
<li><input type="radio" name="features" value="wildlife" <?php if(isset($_POST['features']) && $_POST['features'] == 'wildlife') echo 'checked ="checked" ' ;?>>Wildlife Viewing</li>
<li><input type="radio" name="features" value="vistas" <?php if(isset($_POST['features']) && $_POST['features'] == 'vistas') echo 'checked ="checked" ' ;?>>Vistas</li>
</ul>
<span> <?php echo $features_err;?> </span>

<label>Popular Parks -- Which ones interest you?</label>
<ul>
<li><input type="checkbox" name="trails[]" value="zu"  <?php if(isset($_POST['trails']) && in_array('zu', $trails)) echo 'checked = "checked" '  ;?>>Zion National Park -- UT</li>

<li><input type="checkbox" name="trails[]" value="jt"  <?php if(isset($_POST['trails']) && in_array('jt', $trails)) echo 'checked = "checked" '  ;?>>Joshua Tree National Park -- CA</li>

<li><input type="checkbox" name="trails[]" value="mr"  <?php if(isset($_POST['trails']) && in_array('mr', $trails)) echo 'checked = "checked" '  ;?>>Mt.Rainier National Park -- WA</li>

<li><input type="checkbox" name="trails[]" value="ol"  <?php if(isset($_POST['trails']) && in_array('ol', $trails)) echo 'checked = "checked" '  ;?>>Olympic National Park -- WA</li>

<li><input type="checkbox" name="trails[]" value="ac"  <?php if(isset($_POST['trails']) && in_array('ac', $trails)) echo 'checked = "checked" '  ;?>>Acadia National Park -- ME</li>

<li><input type="checkbox" name="trails[]" value="ar"  <?php if(isset($_POST['trails']) && in_array('ar', $trails)) echo 'checked = "checked" '  ;?>>Arches National Park -- UT</li>
</ul>

<span> <?php echo $trails_err;?> </span>

<label>Regions</label>
<select name="regions">
<option value="" <?php if(isset($_POST['regions']) && is_null($_POST['regions'])) echo 'selected = "unselected"' ;?>>Select One!</option>
<!-- <span> <?php echo $regions_err;?> </span> -->

<option value="ew" <?php if(isset($_POST['regions']) && $_POST['regions'] == "wa") echo 'selected = "selected"' ;?>>Washington</option>

<option value="ww" <?php if(isset($_POST['regions']) && $_POST['regions'] == "or") echo 'selected = "selected"' ;?>>Oregon</option>

<option value="cw" <?php if(isset($_POST['regions']) && $_POST['regions'] == "wy") echo 'selected = "selected"' ;?>>Wyoming</option>

<option value="az" <?php if(isset($_POST['regions']) && $_POST['regions'] == "az") echo 'selected = "selected"' ;?>>Arizona</option>

<option value="ut" <?php if(isset($_POST['regions']) && $_POST['regions'] == "ut") echo 'selected = "selected"' ;?>>Utah</option>

<option value="sc" <?php if(isset($_POST['regions']) && $_POST['regions'] == "me") echo 'selected = "selected"' ;?>>Maine</option>

<option value="cd" <?php if(isset($_POST['regions']) && $_POST['regions'] == "ca") echo 'selected = "selected"' ;?>>California</option>
</select>
<span> <?php echo $regions_err;?> </span>

<label>Comments -- What other parks or areas interest you?</label>
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


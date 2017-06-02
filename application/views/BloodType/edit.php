<form action="<?php echo base_url(); ?>index.php/BloodType/index/update/<?php echo $new['id'];?>" method="POST">
Title :: <input type="text" name="title" value="<?php echo $new['title'];?>"><br>
Text :: <textarea name="text" rows="10" cols="30"><?php echo $new['text'];?></textarea>
<input type="submit" name="Submit" value="Submit">
</form>
<br>
<a href="<?php echo base_url(); ?>index.php/BloodType/index">Back to BloodTypes</a>

<form action="http://localhost/learncodei/index.php/news/index/update/<?php echo $new['id'];?>" method="POST">
Title :: <input type="text" name="title" value="<?php echo $new['title'];?>"><br>
Text :: <textarea name="text" rows="10" cols="30"><?php echo $new['text'];?></textarea>
<input type="submit" name="Submit" value="Submit">
</form>

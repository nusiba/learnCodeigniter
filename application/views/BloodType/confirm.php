<table width="100%" border="1">
<tr>
  <td width="80%">
    Are you sure about deleting this record?<br>
    <?php
    echo "<b>".$new['title']."</b><br>".$new['text'];
    ?>
  </td>
  <td width="20%">
    <a href="<?php echo base_url(); ?>index.php/BloodType/index/delete/<?php echo $new['id'];?>">[ Delete ]</a>
    <a href="<?php echo base_url(); ?>index.php/BloodType/index">[ Back ]</a>
  </td>
</tr>
</table>

<br>
<a href="<?php echo base_url(); ?>index.php/BloodType/index">Back to BloodTypes</a>

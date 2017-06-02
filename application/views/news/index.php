<a href="<?php echo base_url(); ?>index.php/news/add">[ New ]</a>
<table width="100%" border="1">
<?php
foreach($news as $new){
  ?>
  <tr>
  	<td width='5%'><?php echo $new['id']; ?></td>
    <td width="20%"><?php echo $new['title']; ?></td>
    <td width="50%"><?php echo $new['text']; ?></td>
    <td width="25%">
      <a href="<?php echo base_url(); ?>index.php/news/edit/<?php echo $new['id'];?>">[ Edit ]</a>
      <a href="<?php echo base_url(); ?>index.php/news/confirm/<?php echo $new['id'];?>">[ Delete ]</a>
    </td>
	</tr>
  <?php
}
?>
</table>

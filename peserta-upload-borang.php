<?php 
# memulakan fungsi session
session_start();

# memanggil fail header, guard-hakim dan connection
include('header.php');
include('guard-hakim.php');
include('connection.php');
?>

<style>
   *{
      margin: 10px;
   }
</style>

<!-- Tajuk laman -->
<h3>Upload Participant data (*.txt)</h3>

<!-- Borang untuk memuat naik fail -->
<form action='peserta-upload-proses.php' method='POST' enctype='multipart/form-data'>

   <h3><b>Choose a file to upload</b></h3>
   <input       type='file'     name='data_peserta'>
   <button      type='submit'   name='btn-upload'>Upload</button>
   
</form>
<?php include ('footer.php'); ?>
<?php 
# memulakan fail session
session_start();

# memanggil fail header.php dan guard-hakim.php
include('header.php');
include('guard-hakim.php');
?>

<style>
    *{
        margin: 10px;
    }
</style>

<!-- Memaparkan nama hakim -->
<p>Selamat datang <?= $_SESSION['nama'] ?></p>

<!-- Memaparkan tugas-tugas sebagai hakim pertandingan -->
<p>Judge To Do List:</p>
<ol>
    <li>Every judge has to key in the participants results in a form of a .txt format.</li>
    <li>Every hakim can edit the results of any participant.</li>
    <li>The final participant will be judged and scored on the last day of the competition.</li>
    
</ol>

<?php include ('footer.php'); ?>

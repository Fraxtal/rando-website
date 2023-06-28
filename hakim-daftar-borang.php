<?php
# memulakan fungsi session
session_start();

# memanggil fail header dan guard-hakim
include('header.php');
include('guard-hakim.php');
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="loginhakim.css">
<!-- Borang pentaftaran hakim baru -->

<body>
    <div class="center">
        <h2>Judge Account Addition</h2>
        <form action='hakim-daftar-proses.php' method='POST'>
            <div class="txt_field">
                <input type="text" name="nama" required>
                <span></span>
                <label>Name</label>
            </div>
            <div class="txt_field">
                <input type="text" name="nokp" required>
                <span></span>
                <label>NRIC(No -)</label>
            </div>
            <div class="txt_field">
                <input type="pwd" name="katalaluan" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="txt_field">
                <input type="submit" name="submit" value='Add'>
            </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
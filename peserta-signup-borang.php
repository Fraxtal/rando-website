<?php
# Memulakan fungsi session
session_start();

#memanggil fail header.php  fungsi.php
include('indheader.php');
include('fungsi.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participant Registration</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="loginhakim.css">
</head>

<body>
    <div class="center">
        <h2>Participant Registration</h2>
        <form action='peserta-signup-proses.php' method='POST'>
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
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"></label>
                    <select class="form-select" aria-label="Default select example" name='kod_sekolah'>
                        <option selected disabled>Select Your School</option>
                        <?= $list = senarai_sekolah(); ?>
                    </select>
                </div>
                <input type="submit" name="submit" value='Register'>
                <div class="signup_link">
                    Want to go back main page?
                    <a href="index.php">Click Me!</a>
                </div>
            </div>
        </form>
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<?php
include('indfooter.php');
?>

</html>
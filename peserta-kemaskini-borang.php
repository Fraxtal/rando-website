<?php 
# Memulakan fungsi session
session_start();

# Memanggil fail header, guard-hakim dan fungsi
include('header.php');
include('guard-hakim.php');
include('fungsi.php');
# Menyemak kewujudan data GET. Jika data GET empty, buka fail senarai-peserta
if(empty($_GET)) { die("<script>window.location.href='senarai-peserta.php';</script>"); }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change User Info</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="loginhakim.css">
</head>

<body>
    <div class="center">
        <h2>Change User Info</h2>
        <form action='peserta-kemaskini-proses.php?nokp_lama=<?= $_GET['nokp'] ?>' method='POST'>
            <div class="txt_field">
                <input type="text" name="nama" value='<?= $_GET['nama'] ?>' required>
                <span></span>
                <label>Name</label>
            </div>
            <div class="txt_field">
                <input type="text" name="nokp" value='<?= $_GET['nokp'] ?>' required>
                <span></span>
                <label>NRIC</label>
            </div>
            <div class="txt_field">
                <input type="pwd" name="katalaluan" value='<?= $_GET['katalaluan'] ?>' required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="txt_field">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"></label>
                    <select class="form-select" aria-label="Default select example" name='kod_sekolah'>
                        <option value='<?= $_GET['kod_sekolah'] ?>'><?= $_GET['nama_sekolah'] ?></option>
                        <?= $list = senarai_sekolah(); ?>
                    </select>
                </div>
                <input type="submit" name="submit" value='Submit'>
            </div>
        </form>
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>
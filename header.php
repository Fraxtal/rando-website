<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<h1 style="text-align:center;">Inventionist Competition</h1>
<hr>
<!-- Bahagian Menu Asas. 
     Menu terbahagi kepada 3 jenis iaitu
     1. Menu hakim dimana hakim dapat akses semua perkara
     2. Menu peserta dimana peserta hanya boleh memeriksa 
        keputusan pertandingan. peserta perlu login.
     3. Menu di laman utama - bagi pelawat yang tidak login
-->
<style>
    .links a :focus{
        text-decoration: none;
        color: lightblue;
    }
</style>
<div class="links">
    <?PHP
    # Menu Hakim
    if (!empty($_SESSION['tahap']) and $_SESSION['tahap'] == "hakim") {
        echo "
    | <a href='hakim-menu.php'>Judge Menu</a>
    | <a href='senarai-peserta.php'>Participant List</a>
    | <a href='peserta-upload-borang.php'>Upload New Participant Data</a>
    | <a href='senarai-hakim.php'>List of Judges</a>
    | <a href='penilaian-peserta.php'>Participant Data</a>
    | <a href='keputusan-individu.php'>Individual Result</a>
    | <a href='keputusan-sekolah.php'>School Overall Result</a>
    | <a href='logout.php'>Logout</a>
    | <hr>";
    }
    # Menu Peserta
    else if (!empty($_SESSION['tahap']) and $_SESSION['tahap'] == "peserta") {
        echo "
    | <a href='peserta-menu.php'>Participant Menu</a>
    | <a href='logout.php'>Logout</a>
    | <hr> ";
    } else {

        #menu Laman Utama
        echo "<a href='index.php'>Main Menu</a><hr><br>";
    }
    ?>

</div>
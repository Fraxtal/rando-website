<?php 
# memulakan fungsi session
session_start();

# memanggil fail header, guar-peserta, connection dan fungsi
include('header.php');
include('guard-peserta.php');
include ('connection.php');
include('fungsi.php');

# pemboleh ubah $k mengambil nilai yang dipulangkan oleh fungsi semak
$k=semak();

# jika nilai yang dipulangkan oleh fungsi semak seperti dibawah
if($k=="Semua peserta telah dinilai.")
{
    # arahan untuk mencari dan menyusun peserta yang mempunyai mata tertinggi
    $query_semak    =   "select* from peserta order by mata DESC";

    # laksanakan proses pencarian
    $laksana        =   mysqli_query($condb,$query_semak);
    $bil=1;

    # mengambil data hasil proses pencarian di atas
    while($m=mysqli_fetch_array($laksana))
    {
        # jika data yang ditemu sepadan dengan nokp peserta yang sedang log masuk
        if($m['nokp_peserta']==$_SESSION['nokp'])
        {
            # paparkan kedudukan keputusan peserta tersebut
            echo "Anda mendapat tempat ke : ".$bil."<br>";
        }
        $bil++;
    }
}
echo $k;
?>
<style>
    *{
        margin: 10px;
    }
</style>

<link rel="stylesheet" href="indextables.css">


<div class="t_title">
    Individual Results</div>
<?PHP
$k = semak();
if ($k == "Semua peserta telah dinilai.") {
    keputusan_individu();
} else {
    echo "<br>The results are being tabulated";
}

?>
<hr>
<div class="t_title">
    School Results</div>
<?php
$k = semak();
if ($k == "Semua peserta telah dinilai.") {
    keputusan_sekolah();
} else {
    echo "<br>The results are being tabulated";
}
?>
</div>


<?php include ('footer.php'); ?>
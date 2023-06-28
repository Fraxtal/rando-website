<?php
# memulakan fungsi session
session_start();

# memanggil fail guard-hakim.php
include('guard-hakim.php');

# menyemak kewujudan data GET nokp peserta
if(!empty($_GET))
{
    # memanggil fail connection
    include('connection.php');

    # arahan untuk memadam data peserta berdasarkan nokp yang dihantar
    $arahan     =   "delete from peserta where nokp_peserta='".$_GET['nokp']."'";

    # melaksanakan arahan dan menguji proses padam rekod
    if(mysqli_query($condb,$arahan))
    {
        # jika data berjaya dipadam
        echo "<script>alert('Padam data Berjaya');
        window.location.href='senarai-peserta.php';</script>";
    }
    else
    {
        # jika data gagal dipadam
        echo "<script>alert('Padam data gagal');
        window.history.back();</script>";
    }
}
else
{
    # jika data GET tidak wujud (empty)
    die("<script>alert('Ralat! akses secara terus');
    window.location.href='senarai-peserta.php';</script>");
}
?>
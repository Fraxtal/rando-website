<?php
# memulakan fungsi session
session_start();

# memanggil fail guard-hakim dan connection
include('guard-hakim.php');
include('connection.php');

# menyemak kewujudan data POST
if(!empty($_POST))
{
    # Mengambil data yang diPOST
    $mata=$_POST['mata'];
    $nokp=$_POST['nokp'];

    # Data validation dan had atas / bawah
    if(($mata>100 or $mata<0) or !is_numeric($mata))
    {
        die("<script>alert('Error in Data!');
        window.location.href='penilaian-peserta.php';</script>");
    }

    # arahan (query) mengemaskini jadual peserta 
    $query_update = "update peserta 
    set mata        =   '$mata' ,
    nokp_hakim      =   '".$_SESSION['nokp']."'
    where
    nokp_peserta    =   '$nokp' ";

    # Melaksanakan proses kemaskini
    $laksana_update =   mysqli_query($condb,$query_update);

    # Menyemak adakah data telah berjaya dikemaskini
    if($laksana_update)
    {
        echo "<script>alert('Save Successful'); 
        window.location.href='penilaian-peserta.php';</script>";
    }
    else
    {
        
        echo "<script>alert('Save Failed');
        window.location.href='penilaian-peserta.php';</script>";

    }
}
else
{
    # jika data post tidak wujud (empty)
    die("<script>alert('Please enter the Marks');
    window.location.href='penilaian-peserta.php';</script>");
}
?>
<?php
# memulakan fungsi session
session_start();

# menyemak kewujudan data post yang dihantar dari peserta-login-borang.php
if(!empty($_POST['nokp'] and !empty($_POST['katalaluan'])))
{
    # jika data yang dihantar tidak empty

    # memanggil fail connection.php
    include ('connection.php');

    # Arahan(query) untuk membandingkan data yang dimasukkan
    $query_login = "select * from peserta
    where 
            nokp_peserta            =   '".$_POST['nokp']."'
    and     katalaluan_peserta      =   '".$_POST['katalaluan']."' ";

    # melaksakan arahan membandingkan data
    $laksana_query = mysqli_query($condb,$query_login);

    # jika terdapat 1 data yang sepadan, login berjaya
    if(mysqli_num_rows($laksana_query)==1)
    {
        # mengambil data yang ditemui
        $m  =   mysqli_fetch_array($laksana_query);

        # mengumpukkan kepada pembolehubah session
        $_SESSION['nama']   =   $m['nama_peserta'];
        $_SESSION['nokp']   =   $m['nokp_peserta'];
        $_SESSION['tahap']  =   "peserta";

        # membukan laman peserta-menu.php
        echo "<script>window.location.href='peserta-menu.php';</script>";
    }
    else
    {
        # login gagal. kembali ke laman peserta-login-borang.php
        die("<script>alert('Failed to Login');
        window.location.href='peserta-login-borang.php';</script>");
    }
}
else
{
    # data yang dihantar dari laman peserta-login-borang.php kosong
    die("<script>alert('Please enter your username and password');
    window.location.href='peserta-login-borang.php';</script>");
}

?>
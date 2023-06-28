<?php
# Memulakan fungsi session
session_start();

#menyemak kewujudan data POST
if(!empty($_POST))
{
    # Jika data POST wujud

    # panggil fail connection.php
    include ('connection.php');

    # Data Validation : Had Atas & had bawah
    if(strlen($_POST['nokp']) != 12 or !is_numeric($_POST['nokp']))
    {
        die("<script>alert('Please enter ur NRIC properly');
        window.location.href='peserta-signup-borang.php';</script>");
    }

    # Arahan (Query) untuk menyimpan data Peserta baru
    $query_login = "insert into peserta
    (nama_peserta,nokp_peserta,katalaluan_peserta,kod_sekolah)
    values
    ('".$_POST['nama']."','".$_POST['nokp']."','".$_POST['katalaluan']."',
    '".$_POST['kod_sekolah']."') ";

    # Melaksanakan Arahan Menyimpan data Peserta baru
    $laksana_query = mysqli_query($condb,$query_login);

    # Menyemak proses penyimpanan data
    if($laksana_query)
    {
        # jika data berjaya disimpan
        die("<script>alert('You have successfully been registered');
        window.location.href='index.php';</script>");
    }
    else
    {
        # jika data gagal disimpan
        die("<script>alert('Signup Failed');
        window.location.href='peserta-signup-borang.php';</script>");
    }

}
else
{
    # jika data POST tidak wujud (empty)
    die("<script>alert('Please enter the following information');
    window.location.href='peserta-signup-borang.php';</script>");
}

?>
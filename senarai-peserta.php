<?php 
# memulakan fungsi session
session_start();

#memanggil fail header, guard-hakim, connection dan fungsi
include('header.php');
include('guard-hakim.php');
include('connection.php');
include ('fungsi.php');
?>

<style>*{margin: 10px;}</style>
<link rel="stylesheet" href="keputusan.css">

<h3>Participant List</h3>
<!-- Bahagian 1 : memaparkan borang untuk memilih sekolah -->
<form action='' method='POST'>
    <select name='kod_sekolah'>
        <option selected value disabled>Choose according to your school</option>
        <!-- Memaparkan senarai sekolah dalam bentuk drop down list -->
        <?= $list=senarai_sekolah(); ?>

    </select> <input type='submit' value='Submit'>

</form>

<!-- Memanggil fail butang-saiz bagi membolehkan pengguna mengubah saiz tulisan -->
<?php include('butang-saiz.php'); ?>
<!-- Header bagi jadual untuk memaparkan senarai peserta -->
<table width='100%' border='1' id='saiz'> 
    <thead>
    <tr> 
        <th>Name</th> 
        <th>NRIC</th> 
        <th>School</th> 
        <th>Password</th> 
        <th>Action</th>
    </tr> 
    </thead>
<?php 

# syarat tambahan yang akan dimasukkan dalam arahan(query) senarai peserta
$tambahan="";
if(!empty($_POST['kod_sekolah']))
{
    $tambahan= "and peserta.kod_sekolah = '".$_POST['kod_sekolah']."'";
}

# arahan query untuk mencari senarai nama peserta 
$arahan_papar="Select* from peserta, sekolah 
where peserta.kod_sekolah = sekolah.kod_sekolah 
$tambahan
"; 

# laksanakan arahan mencari data peserta 
$laksana = mysqli_query($condb,$arahan_papar); 

# Mengambil data yang ditemui 
    while($m=mysqli_fetch_array($laksana)) 
    { 
        # umpukkan data kepada tatasusunan bagi tujuan kemaskini peserta
        $data_get=array(
            'nama'          =>  $m['nama_peserta'],
            'nokp'          =>  $m['nokp_peserta'],
            'katalaluan'    =>  $m['katalaluan_peserta'],
            'kod_sekolah'   =>  $m['kod_sekolah'],
            'nama_sekolah'  =>  $m['nama_sekolah'],
        );

        # memaparkan senarai nama dalam jadual 
        echo"<tr> 
        <td>".$m['nama_peserta']."</td> 
        <td>".$m['nokp_peserta']."</td> 
        <td>".$m['nama_sekolah']."</td> 
        <td>".$m['katalaluan_peserta']."</td> ";
        
        # memaparkan navigasi untuk kemaskini dan hapus data peserta
        echo"<td>
        |<a href='peserta-kemaskini-borang.php?".http_build_query($data_get)."'>Alter Info</a>
        |<a href='peserta-padam-proses.php?nokp=".$m['nokp_peserta']."' onClick=\"return confirm('Anda pasti anda ingin memadam data ini.')\">Delete</a>|
        </td>
        </tr>"; 
    }

?> 
</table>
<?php include ('footer.php'); ?>
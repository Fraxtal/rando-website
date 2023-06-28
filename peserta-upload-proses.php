<?PHP
if (isset($_POST['btn-upload']))
{
    # memanggil fail connection
    include ('connection.php');

    # mengambil nama sementara fail
    $namafailsementara=$_FILES["data_peserta"]["tmp_name"];

    # mengambil nama fail
    $namafail=$_FILES['data_peserta']['name'];

    # mengambil jenis fail
    $jenisfail=pathinfo($namafail,PATHINFO_EXTENSION);

    # menguji jenis fail dan sail fail 
    if($_FILES["data_peserta"]["size"]>0 AND $jenisfail=="txt")
    {
        # membuka fail yang diambil
        $fail_data_peserta=fopen($namafailsementara,"r");

        # mendapatkan data dari fail baris demi baris
        while (!feof($fail_data_peserta))
        {
            # mengambil data sebaris sahaja bg setiap pusingan 
            $ambilbarisdata = fgets($fail_data_peserta);

            # memecahkan baris data mengikut tanda pipe
            $pecahkanbaris = explode("|",$ambilbarisdata);

            # selepas pecahan tadi akan diumpukan kepada 3
            list($nokp_peserta,$nama_peserta,$kod_sekolah,$katalaluan_peserta) = $pecahkanbaris;

            # arahan SQL untuk menyimpan data
            $arahan_sql_simpan="insert into peserta
            (nokp_peserta,nama_peserta,kod_sekolah,katalaluan_peserta) values
            ('$nokp_peserta','$nama_peserta','$kod_sekolah','$katalaluan_peserta')";

            # memasukkan data kedalam jadual peserta
            $laksana_arahan_simpan=mysqli_query($condb, $arahan_sql_simpan);
            echo"<script>alert('Importing Data Successful');
         window.location.href='senarai-peserta.php';</script>";
        }
    fclose($fail_data_peserta);
    }
    else
    {
        echo "<script>alert('only files in txt format are accepted');</script>";
    }
}
else
{
    die("<script>alert('Error! Access through unknown cause!');
    window.location.href='peserta-upload-borang.php';</script>");
}
?>
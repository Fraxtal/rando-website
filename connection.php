<?php
# nama host. localhost merupakan default
$nama_host  =   "localhost";

# usename bagi SQL. root merupakan default
$nama_sql   =   "id19211598_inventionist";

# password bagi SQL. masukkan password anda.
$pass_sql   =   "9fFBM1bN99HQy|b^";

# nama pangkalan data yang anda telah bangunkan sebelum ini.
$nama_db    =   "id19211598_inventives";

# membuka hubungan antara pangkalan data dan sistem.
$condb      =   mysqli_connect($nama_host, $nama_sql, $pass_sql, $nama_db);

# menguji adakah hubungan berjaya dibuka
if (!$condb) 
{
    die("Sambungan ke pangkalan data gagal");
}
else
{
    #echo "Sambungan ke pangkalan data berjaya";
}
?>
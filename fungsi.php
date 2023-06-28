<?PHP 
# Fungi untuk menyemak keputusan Pertandingan
function semak(){
    include('connection.php');
    $arahan = "Select* from peserta where mata is null";
    $laksana=mysqli_query($condb,$arahan);
    $bil_tidak_nilai = mysqli_num_rows($laksana);
    if($bil_tidak_nilai>0)
    {
        $umum =  "Results of Participant are not yet tabulated.<br>
        Official Results have yet to be announced";
    }
    else
    {
         $umum = "All Participants have already had their results announced.";
    }
    return $umum;
}

# Fungsi untuk memaparkan drop down nama sekolah
function senarai_sekolah()
{
    include('connection.php');
    $arahan = "Select* from sekolah";
    $laksana=mysqli_query($condb,$arahan);
    $list="";
    while($m=mysqli_fetch_array($laksana))
    {
        $list=$list."<option value='".$m['kod_sekolah']."'>
        ".$m['nama_sekolah']."</option>";
    }
    return $list;
}

# Fungsi untuk memaparkan keputusan individu
function keputusan_individu()
{
    include('connection.php');
    echo" <table width='100%' border='1'>
            <thead>   
            <tr> 
                <th>Placement</th>
                <th>Name</th> 
                <th>School</th> 
                <th>Points</th> 
            </tr> 
            </thead>";

$arahan_papar="SELECT* FROM peserta
LEFT JOIN sekolah
ON peserta.kod_sekolah = sekolah.kod_sekolah
LEFT JOIN hakim
ON peserta.nokp_hakim = hakim.nokp_hakim
order by peserta.mata DESC limit 5 "; 

$laksana = mysqli_query($condb,$arahan_papar); 
$bil=0;
while($m=mysqli_fetch_array($laksana)) 
{ 
    echo"<tr> 
    <td>".++$bil."</td>
    <td>".$m['nama_peserta']."</td> 
    <td>".$m['nama_sekolah']."</td>
    <td>".$m['mata']."</td>
    </tr>"; 
}
echo "</table>";
}

# Fungsi untuk Memaparkan Keputusan keseluruhan Sekolah
function keputusan_sekolah()
{
    include('connection.php');
    echo "
    <table width='100%' border='1'> 
        <thead>
        <tr> 
            <th>Placement</th>
            <th>School</th> 
            <th>Points</th> 
        </tr> 
        </thead>";

    $arahan_papar="SELECT sekolah.nama_sekolah, SUM(peserta.mata) AS jumlah
    FROM peserta
    JOIN sekolah
    ON peserta.kod_sekolah = sekolah.kod_sekolah
    GROUP BY peserta.kod_sekolah
    order by jumlah DESC "; 
    
    $laksana = mysqli_query($condb,$arahan_papar); 
    $bil=0;
        while($m=mysqli_fetch_array($laksana)) 
        { 
            echo"<tr> 
                <td>".++$bil."</td>
                <td>".$m['nama_sekolah']."</td> 
                <td>".$m['jumlah']."</td> 
            </tr>"; 
        } 
   echo " </table>";
}
?>
<?php
//membuat koneksi ke database
$host = 'localhost';
  $user = 'root';      
  $password = '';      
  $database = 'akademik';  
    
  $konek_db = mysql_connect($host, $user, $password);    
  $find_db = mysql_select_db($database) ;
?>

<center> 
DATA MAHASISWA 
<br>
<br>


<?php  
// Perintah untuk menampilkan data
$queri="Select * From mahasiswa" ;  //menampikan SEMUA data dari tabel siswa

$hasil=MySQL_query ($queri);    //fungsi untuk SQL

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysql_fetch_array ($hasil)){
$id = $data['nim'];

$myArr = array($data['nim'], $data['nama'], $data['alamat'], $data['progdi']);

$myJSON = json_encode($myArr);

echo $myJSON;
        
}



?>

</table>
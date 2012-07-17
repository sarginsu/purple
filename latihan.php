<head>  
<title>Pencarian Daftar Buku</title>  
<style type="text/css">  
.style1 {  
    font-family: Utsaah, Vani, "Tw Cen MT";  
    font-weight: bold;  
    font-size: 36px;  
}  
.tabel1 {  
border:thin solid #999999;  
}  
.atas_buku {  
background:#000000;  
color:#FFFFFF;  
text-align:center;  
}  
</style>  
</head>  
  
<body>  
<span class="style1">PENCARIAN BUKU </span>  
  
    
<form action="<?$_SERVER['PHP_SELF']?>" method="post" name="pencarian" id="pencarian">  
  <input type="submit" name="submit" id="submit" value="CARI">    
  <select name="jurusan" style="width:150px">  
    <option value="111">111</option>  
    <option value="222">22d2s</option>  
  </select>  
</form>    
<strong>Note :</strong> Silahkan Copi <strong>Jenis Buku</strong> di kolom <strong>Jenis Buku</strong>  
       dan <strong>Judul Buku</strong> di Kolom <strong>Judul Buku</strong>  
         
  
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
       Pada Formulir Peminjaman Buku  
<?php    
// konfigurasi    

    
// koneksi ke database    
include "koneksi.php"; 
    
// menampilkan data
$sql = "SELECT * FROM matakuliah";
$hasil = mysql_query($sql,$koneksi) or die(mysql_error());
echo"--------s--------";

echo "<table class=\"tabel2\" border=\"0\" width=\"90%\"  align=\"center\" cellspacing=\"1\">"; //membuat tag pembuka table  
echo "<strong><tr><td class=\"atas_buku\">Kode Buku</td><td class=\"atas_buku\">Jenis Buku</td><td class=\"atas_buku\">Judul Buku</td></tr></strong>";   
  
    
  
if ((isset($_POST['submit'])) ) {  
  $search = $_POST['jurusan'];
  echo $search;
  $sql = mysql_query("SELECT * FROM matakuliah WHERE kode_jur= $search ") or die(mysql_error());    
    while ($res=mysql_fetch_array($sql)) {    
    echo '<tr>';  
    echo '<td>'.$res['kode_jur'].'</td>';    
    echo '<td>'.$res['jn_buku'].'</td>';   
    echo '<td>'.$res['jd_buku'].'</td>';  
    echo '</tr>';    
  }    
   echo "</table>";        
}           
?>  
</body>  
</html>
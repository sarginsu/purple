<?
 include "koneksi.php";
 $max = $_GET['total'];
 //$x = 1;
 //echo $_GET['nim'.$x];
 
 for($i=1; $i<=$max; $i++) {
  $nim = $_GET['nim'.$i];
  $absen = $_GET['absen'.$i];
  $sql = "INSERT INTO absensi (`kode_krs`, `hari`, `pertemuan_ke`, `materi`, `nim`, `absen`) VALUES 
			('$_GET[krs]', '$_GET[hari]', '$_GET[pertemuan]', '$_GET[materi]', '$nim', '$absen')";
	$data = mysql_query($sql);  
 }
    
	echo $sql;
	
    //header('Location: '.$uri.'/purple/tampil_absensi.php');
	//Tes untuk email!!
?>
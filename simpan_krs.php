<?
 include "koneksi.php";
	
	$sql = "INSERT INTO krs (`nim`, `ta`, `semester`, `id_dosen`, `kelas`) VALUES 
			('$_GET[nim]', '$_GET[ta]', '$_GET[semester]', '$_GET[dosen_wali]', '$_GET[kelas]')";
	$data = mysql_query($sql);
    
    header('Location: '.$uri.'/purple/tampil_krs.php');
?>
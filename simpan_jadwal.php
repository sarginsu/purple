<?
 include "koneksi.php";
	
	$sql = "INSERT INTO jadwal (`kode_jadwal`, `kode_mk`, `hari`, `jam_ke`, `ruangan`, `id_dosen`) VALUES 
			('$_GET[kode]', '$_GET[mk]', '$_GET[hari]', '$_GET[jam]', '$_GET[dosen]', '$_GET[ruangan]')";
	$data = mysql_query($sql);
    
    header('Location: '.$uri.'/purple/tampil_dosen.php');
?>
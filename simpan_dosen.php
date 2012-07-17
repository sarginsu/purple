<?
 include "koneksi.php";
	
	$sql = "INSERT INTO dosen (`id_dosen`, `nama_dosen`, `alamat_dosen`, `telp`, `lulusan`, `catatan`, `foto`) VALUES 
			('$_GET[kode]', '$_GET[nama]', '$_GET[alamat]', '$_GET[telp]', '$_GET[lulusan]', '$_GET[catatan]', '$_GET[foto]')";
	$data = mysql_query($sql);
    
    header('Location: '.$uri.'/purple/tampil_dosen.php');
?>
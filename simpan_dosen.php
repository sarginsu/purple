<?
 include "koneksi.php";
	
	$sql = "INSERT INTO dosen (`id_dosen`, `nama_dosen`, `alamat_dosen`, `telp`, `jurusan`, `catatan`, `foto`) VALUES 
			('$_GET[kode]', '$_GET[nama]', '$_GET[alamat]', '$_GET[telp]', '$_GET[jurusan]', '$_GET[catatan]', '$_GET[foto]')";
	$data = mysql_query($sql);
    
    header('Location: '.$uri.'/purple/tampil_dosen.php');
?>
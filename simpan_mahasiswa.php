<?
 include "koneksi.php";
	
	$sql = "INSERT INTO mahasiswa (`nim`, `nama_mhs`, `tempat_lahir`, `tgl_lahir`, `alamat`, `telp`, `hp`, `nama_ortu`, `alamat_ortu`, `telp_ortu`, `nama_wali`, `alamat_wali`, `telp_wali`, `foto`, `dosen_wali`, `kode_jur`) VALUES 
			('$_GET[nim]', '$_GET[nama]', '$_GET[tempat_lahir]', '$_GET[tgl_lahir]', '$_GET[alamat]', '$_GET[tlpn]', '$_GET[hp]', '$_GET[nama_orangtua]', '$_GET[alamat_orangtua]', '$_GET[tlpn_orangtua]', '$_GET[nama_wali]', '$_GET[alamat_wali]', '$_GET[tlpn_wali]', '$_GET[foto]', '$_GET[dosen_wali]', '$_GET[jurusan]')";
	$data = mysql_query($sql);
    
    header('Location: '.$uri.'/purple/tampil_mahasiswa.php');
?>
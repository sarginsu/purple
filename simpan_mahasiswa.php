<?
 include "koneksi.php";
	
	$sql = "INSERT INTO mahasiswa (`nim`, `nama_mhs`, `tempat_lahir`, `jk`,`agama`,`tgl_lahir`, `alamat`, `telp`, `nama_ortu`, `alamat_ortu`, `telp_ortu`, `foto`,`pass`, `dosen_wali`, `kode_jur`,`status_ukul`,) VALUES 
			('$_GET[nim]', '$_GET[nama]', '$_GET[tempat_lahir]', '$_GET[jk]', '$_GET[agama]', '$_GET[tgl_lahir]', '$_GET[alamat]', '$_GET[tlpn]', '$_GET[nama_orangtua]', '$_GET[alamat_orangtua]', '$_GET[tlpn_orangtua]',  '$_GET[foto]','$_GET[pass]', '$_GET[dosen_wali]', '$_GET[jurusan]','$_GET[status_ukul]')";
	$sql ="INSERT INTO `mahasiswa`(`nim`, `nama_mhs`, `tempat_lahir`, `tgl_lahir`, `jk`, `agama`, `alamat`, `telp`, `email`, `nama_ortu`, `alamat_ortu`, `telp_ortu`, `foto`, `pass`, `dosen_wali`, `jurusan`, `status_ukul`)
	      VALUES ('$_GET[nim]', '$_GET[nama]','$_GET[tempat_lahir]','$_GET[tgl_lahir]','$_GET[jk]','$_GET[agama]','$_GET[alamat]','$_GET[telp]','$_GET[email]','$_GET[nama_orangtua]','$_GET[alamat_orangtua]','$_GET[tlpn_orangtua]','$_GET[foto]','$_GET[pass]','$_GET[dosen_wali]','$_GET[jurusan]','$_GET[status_ukul]')";
	$data = mysql_query($sql);
    
    header('Location: '.$uri.'/purple/tampil_mahasiswa.php');
?>
<?
 include "koneksi.php";
	
    
    if($_GET['jurusan'] == "ti") {
        $kode_mk = "111";    
    } else if($_GET['jurusan'] == "tid3") {
        $kode_mk = "222";    
    } else if($_GET['jurusan'] == "mi") {
        $kode_mk = "333";    
    }
    
	$sql = "INSERT INTO matakuliah (`kode_jur`, `kode_mk`, `matakuliah`, `sks`, `semester`) VALUES 
			('$kode_mk', '$_GET[kode]', '$_GET[matakuliah]', '$_GET[sks]', '$_GET[semester]')";
	$data = mysql_query($sql)or die(mysql_error());
    
    header('Location: '.$uri.'/purple/tampil_matakuliah.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    Created by Artisteer v3.0.0.41778
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>New Page</title>
    <meta name="description" content="Description" />
    <meta name="keywords" content="Keywords" />


    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->

    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
<div id="art-main">
    <div class="cleared reset-box"></div>
<div class="art-nav">
	<div class="art-nav-l"></div>
	<div class="art-nav-r"></div>
<div class="art-nav-outer">
<div class="art-nav-wrapper">
<div class="art-nav-inner">
	<ul class="art-hmenu">
		<li>
			<a href="./matakuliah.html" ><span class="l"></span><span class="r"></span><span class="t">Mata Kuliah</span></a>
		</li>	
		<li>
			<a href="./dosen.html"><span class="l"></span><span class="r"></span><span class="t">Dosen</span></a>
		</li>
        <li>
			<a href="./mahasiswa.html"><span class="l"></span><span class="r"></span><span class="t">Mahasiswa</span></a>
		</li>
        <li>
			<a href="./absensi.html" class="active"><span class="l"></span><span class="r"></span><span class="t">Absensi</span></a>
		</li>
        <li>
			<a href="./krs.html"><span class="l"></span><span class="r"></span><span class="t">KRS</span></a>
		</li>
        <li>
			<a href="./KHS.html"><span class="l"></span><span class="r"></span><span class="t">KHS</span></a>
		</li>
        <li>
			<a href="./jadwal.html"><span class="l"></span><span class="r"></span><span class="t">Jadwal</span></a>
		</li>
        <li>
			<a href="./pengumuman.html"><span class="l"></span><span class="r"></span><span class="t">pengumunan</span></a>
		</li>		
	</ul>
</div>
</div>
</div>
</div>
<div class="cleared reset-box"></div>
<div class="art-header">
        <div class="art-header-clip">
        <div class="art-header-center">
            <div class="art-header-jpeg"></div>
        </div>
        </div>
    <div class="art-header-wrapper">
    <div class="art-header-inner">
        <div class="art-logo">
                 <h1 class="art-logo-name"><a href="./index.html">Enter Site Title</a></h1>
                         <h2 class="art-logo-text">Enter Site Slogan</h2>
                </div>
    </div>
    </div>
    </div>
    <div class="cleared reset-box"></div>
    <div class="art-sheet">
        <div class="art-sheet-body">
            <div class="art-content-layout">
                <div class="art-content-layout-row">
                    <div class="art-layout-cell art-content">
<div class="art-post">
    <div class="art-post-tl"></div>
    <div class="art-post-tr"></div>
    <div class="art-post-bl"></div>
    <div class="art-post-br"></div>
    <div class="art-post-tc"></div>
    <div class="art-post-bc"></div>
    <div class="art-post-cl"></div>
    <div class="art-post-cr"></div>
    <div class="art-post-cc"></div>
    <div class="art-post-body">
<div class="art-post-inner art-article">

<h2 class="art-postheader">
                Absensi Siswa
</h2>
<div class="cleared"></div>
<div class="art-postcontent">
<form name="input" action="simpan_absensi.php" method="get">
				<table width="600" border="1">
	<tr>
    <td>Kode Jadwal :</td>
	<?
    //<td><input  type="text" name="krs" value="" /></td>
	echo "<td><input  type=text name=krs value=$_GET[krs] /></td>";
	?>
  </tr>
  <tr>
    <td>Hari</td>
    <td><select name="hari">hari
    	<option value="senin">Senin</option>
        <option value="selasa">Selasa</option>
        <option value="rabu">Rabu</option>
        <option value="kamis">Kamis</option>
        <option value="jumat">Jumat</option>
        <option value="sabtu">Sabtu</option>
        </select>
  </tr>
  <tr>
    <td>Kode Mata Kuliah</td>
    <td><input  type="text" name="pertemuan" size=10 /></td>
  </tr>
  <tr>
    <td>Mata Kuliah</td>
    <td><input  type="text" name="pertemuan" size=30 /></td>
  </tr>
  <tr>
    <td>Pertemuan Ke</td>
    <td><select name="pertemuan_ke">
	<? for($i=1; $i<17; $i++)
	{ 
	    echo  "<option value='$i'>$i</option> ";
        } ?>
    </td></select>
  </tr>
  <tr>
    <td>Materi Pertemuan</td>
    <td><input  type="text" name="materi" /></td>
  </tr>
</table>
<table width="600" border="1">
  <tr>
    <td colspan="6">&nbsp;</td>

  </tr>
  <tr>
    <td>No</td>
    <td>Nim</td>
    <td>Nama Mahasiswa</td>
    <td>Hadir</td>
    <td>Ijin</td>
    <td>Sakit</td>
  </tr>
  <?
	include "koneksi.php";
	$sql = "SELECT * from mahasiswa";
	$data = mysql_query($sql);
	$no = 0;
	
	while ($m = mysql_fetch_row($data)) {
		$no++;
		echo "<tr>";
			echo "<td width=21 >$no</td>";
			echo "<td ><input  size=12 type=text width=10 name=nim$no value='$m[0]' disabled='yes' ></td>";
			echo "<td width=317><input size=46  type=text name=nama value='$m[1]' disabled='yes'></td>";
			echo "<td><input type=radio name=absen$no value=hadir></td>";
			echo "<td><input type=radio name=absen$no value=ijin></td>";
			echo "<td><input type=radio name=absen$no value=sakit></td>";
		echo "</tr>";
		
	}
		echo "<input type=hidden name=total value=$no >"
  ?>
</table>
<input type="submit" value="Kirim" /> <input type="button" value="batal" />
</form> 

                </div>
                <div class="cleared"></div>
                </div>

		<div class="cleared"></div>
    </div>
</div>

                      <div class="cleared"></div>
                    </div>
                    <div class="art-layout-cell art-sidebar1">
<div class="art-block">
    <div class="art-block-body">
                <div class="art-blockheader">
                    <div class="l"></div>
                    <div class="r"></div>
                    <h3 class="t">New Block</h3>
                </div>
                <div class="art-blockcontent">
                    <div class="art-blockcontent-tl"></div>
                    <div class="art-blockcontent-tr"></div>
                    <div class="art-blockcontent-bl"></div>
                    <div class="art-blockcontent-br"></div>
                    <div class="art-blockcontent-tc"></div>
                    <div class="art-blockcontent-bc"></div>
                    <div class="art-blockcontent-cl"></div>
                    <div class="art-blockcontent-cr"></div>
                    <div class="art-blockcontent-cc"></div>
                    <div class="art-blockcontent-body">
                
<p>Enter Block content here...</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pharetra, tellus sit amet congue vulputate, nisi erat iaculis nibh, vitae feugiat sapien ante eget mauris. </p>

                
                                		<div class="cleared"></div>
                    </div>
                </div>
		<div class="cleared"></div>
    </div>
</div>

                      <div class="cleared"></div>
                    </div>
                </div>
            </div>
            <div class="cleared"></div>
            
    		<div class="cleared"></div>
        </div>
    </div>
    <div class="art-footer">
        <div class="art-footer-t"></div>
        <div class="art-footer-body">
            <div class="art-footer-center">
                <div class="art-footer-wrapper">
                    <div class="art-footer-text">
                        <a href="#" class="art-rss-tag-icon" title="RSS"></a>
                        
<p><a href="#">Link1</a> | <a href="#">Link2</a> | <a href="#">Link3</a></p>
<p>Copyright © 2011. All Rights Reserved.</p>


                        <div class="cleared"></div>
                        <p class="art-page-footer"><a href="http://www.2createawebsite.com/artisteer">Website Template created with Artisteer</a>.</p>
                    </div>
                </div>
            </div>
            <div class="cleared"></div>
        </div>
    </div>
    <div class="cleared"></div>
</div>

</body>
</html>

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
			<a href="./matakuliah.html" class="active"><span class="l"></span><span class="r"></span><span class="t">Mata Kuliah</span></a>
		</li>	
		<li>
			<a href="./dosen.html"><span class="l"></span><span class="r"></span><span class="t">Dosen</span></a>
		</li>
        <li>
			<a href="./mahasiswa.html"><span class="l"></span><span class="r"></span><span class="t">Mahasiswa</span></a>
		</li>
        <li>
			<a href="./absensi.html"><span class="l"></span><span class="r"></span><span class="t">Absensi</span></a>
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
                Mata Kuliah
</h2>
<div class="cleared"></div>
<div class="art-postcontent">
<form name="input" action="html_form_action.asp" method="get">
				<table width="600" border="1">
  <tr>
    <td>Jurusan :</td>
    <td><select >Jurusan</option>
    	<option value="ti" onclick=>Teknik Informatika (S1)</option>
        <option value="tid3">Teknik Informatika (D3)</option>
        <option value="mi">Manajemen Informatika (D3)</option>
  </tr>
  <tr>
    <td>Semester :</td>
    <td><input  type="text" /><input type="submit" value="cari" />
    <? include "koneksi.php";
	$sql = "select * from matakuliah where (select kode_jur from jurusan where nama_jur='TEKNIK INFORMATIKA') and semester='I'";
	$hasil = mysql_query($sql,$koneksi);
	$i=0;
    ?>
</form> </td>
  </tr>
</table>
			    
<table width="600" border="1">
  <tr>
    <td colspan="4"><div align="center">Daftar Mata Kuliah</div></td>

  </tr>
  <tr>
    <td>No</td>
    <td>Kode MK</td>
    <td>Mata Kuliah</td>
    <td width="170">SKS</td>
  </tr>
  
  <? while ($ds = mysql_fetch_row($hasil)) {?>
  <tr>
    <td width="21" ><? echo $i=$i+1; ?><div align="center"></div></td>
    <td width="64"><? echo $ds[1]; ?></td>
    <td width="317"><? echo $ds[2]; ?></td>
    <td><? echo $ds[3]; ?></td>
  </tr>
  <? } ?>
</table>
				


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

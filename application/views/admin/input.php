<?php 
include'onek.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #ededed;
		margin: 0px;
		
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 0 0 0;
	}
  .lebar{
    margin-left: 0px;
    margin-right: 0px;
  }

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>

<style type="text/css">
	
table, td, th {
  border: 1px solid black;
  font-weight: bold;
  font-size: 14px;
  text-align: center;
  

}
th{
	padding-left: 5px;
  padding-right: 5px;
}
table{
	background-color:#eded;
  white-space: nowrap;
  vertical-align: middle;

}


	
</style>
<style type="text/css">
	
table, td, th {
  border: 1px solid black;
  font-weight: bold;

  text-align: center;

}

table{
	background-color:#ededed;
}
.rotate {
  white-space: nowrap;
  vertical-align: middle;
  width: 20px;
  height: 150px;

}
.rotate div {
     -moz-transform: rotate(-90.0deg);  /* FF3.5+ */
       -o-transform: rotate(-90.0deg);  /* Opera 10.5 */
  -webkit-transform: rotate(-90.0deg);  /* Saf3.1+, Chrome */
            
         margin-left: -10em;
         margin-right: -10em;
         font-weight: bold;
         z-index:1;"
}


	
</style>
<body>

  <div class="lebar">
<br><br><br><br>

<p><center><b style="font-size:30px;">Input Nilai Siswa</b></center></p>
<center>
<pre>

<form method="POST" action="<?php echo base_url('index.php/uploadexcel') ?>" enctype="multipart/form-data"><label>Upload File Excel</label><input type="file" name="file"><button type="submit" name="Submit">Upload</button></form><form action="" method="post" >
<select style="width: 150px;" name="kelas" id="cari" onchange="myFunction();">
   <option data-value="XII MIPA I">XII MIPA 1</option>
   <option data-value="XII MIPA II">XII MIPA 2</option>
   <option data-value="XII MIPA III">XII MIPA 3</option>
   <option data-value="XII IIS">XII IIS</option>
   <option data-value="XII IBB">XII IBB</option>
</select>&nbsp<button name="ok">ok</button></form>
<table id="search">
<form method="post">
<tr>
	<th style="background-color: white;">NIS</th>
	<td><input type="number" name="NISM" placeholder="Silahkan isi NIS" /required></td>
</tr>
<tr>
	<th style="background-color: white;">Nama</th>
	<td><input type="text" name="nama" placeholder="Silahkan isi Nama" /required></td>
</tr>
<tr>
	<th style="background-color: white;">Kelas</th>
	<td><input type="text" name="kelas" value="<?php if (isset($_POST['ok'])) { 
$kelasnya= $_POST['kelas'];
	echo $kelasnya;
}?>"></td>

</tr>
<tr>

	<th style="background-color: white;" colspan="6">Nilai</th>
</tr> 
<tr>
	<th style="background-color: white;">Mapel</th>
	<th style="background-color: white;">Nilai Pengetahuan (NP)</th>
	<th style="background-color: white;">Nilai Ketrampilan (NK)</th>
	<th style="background-color: white;">Mapel</th>
	<th style="background-color: white;">Nilai Pengetahuan (NP)</th>
	<th style="background-color: white;">Nilai Ketrampilan (NK)</th>
</tr>
<tr>
	<th style="background-color: white;">Al-Qur'an Hadist</th>
	<td><input type="number" name="a_quran" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_quran" placeholder="Silahkan isi NK" /required></td>
	<th style="background-color: white;">Bahasa Jawa
</th>
	<td><input type="number" name="a_bahasa_jawa" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_bahasa_jawa" placeholder="Silahkan isi NK" /required></td>
</tr>
<tr>
	<th style="background-color: white;">Aqidah-Akhlaq</th>
	<td><input type="number" name="a_akidah" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_akidah" placeholder="Silahkan isi NK" /required></td>
	<th style="background-color: white;">Ke-NU-an
</th>
	<td><input type="number" name="a_nu" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_nu" placeholder="Silahkan isi NK" /required></td>
</tr>
<tr>
	<th style="background-color: white;">Fiqih</th>
	<td><input type="number" name="a_fiqih" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_fiqih" placeholder="Silahkan isi NK" /required></td>
	<th style="background-color: white;">Qiro`atul Qur`an
</th>
	<td><input type="number" name="a_qiro" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_qiro" placeholder="Silahkan isi NK" /required></td>
</tr>
<tr>
	<th style="background-color: white;">Sejarah Kebudayaan
</th>
	<td><input type="number" name="a_sejarah_islam" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_sejarah_islam" placeholder="Silahkan isi NK" /required></td>
	<th style="background-color: white;">Nahwu Shorof
</th>
	<td><input type="number" name="a_nahwu" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_nahwu" placeholder="Silahkan isi NK" /required></td>
</tr>
<tr>
	<th style="background-color: white;">PPKN</th>
	<td><input type="number" name="a_ppkn" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_ppkn" placeholder="Silahkan isi NK" /required></td>
	<th style="background-color: white;">Ta'limul Muta'alim
</th>
	<td><input type="number" name="a_kitab_Kuning" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_kitab_Kuning" placeholder="Silahkan isi NK" /required></td>
</tr>
<tr>
	<th style="background-color: white;">Bahasa Indonesia
</th>
	<td><input type="number" name="a_indonesia" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_indonesia" placeholder="Silahkan isi NK" /required></td>
	<th style="background-color: white;"><?php if (isset($_POST['ok'])) { 
$kelasnya= $_POST['kelas'];
if ($kelasnya=='XII MIPA 1') {
	echo 'Matematika peminatan';
}else if ($kelasnya=='XII MIPA 2') {
	echo 'Matematika peminatan';
}else if ($kelasnya=='XII MIPA 3') {
	echo 'Matematika peminatan';
}else if ($kelasnya=='XII IIS') {
	echo 'Geografi';
}else if ($kelasnya=='XII IBB') {
	echo 'Bahasa dan sastra indonesia';
}
}?>
</th>
	<td><input type="number" name="a_matematika_peminatan" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_matematika_peminatan" placeholder="Silahkan isi NK" /required></td>
</tr>
<tr>
	<th style="background-color: white;">Bahasa Arab
</th>
	<td><input type="number" name="a_arab" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_arab" placeholder="Silahkan isi NK" /required></td>
	<th style="background-color: white;"><?php if (isset($_POST['ok'])) { 
$kelasnya= $_POST['kelas'];
if ($kelasnya=='XII MIPA 1') {
	echo 'Biologi';
}else if ($kelasnya=='XII MIPA 2') {
	echo 'Biologi';
}else if ($kelasnya=='XII MIPA 3') {
	echo 'Biologi';
}else if ($kelasnya=='XII IIS') {
	echo 'Sejarah';
}else if ($kelasnya=='XII IBB') {
	echo 'Bahasa dan sastra inggris';
}
}?></th>
	<td><input type="number" name="a_biologi" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_biologi" placeholder="Silahkan isi NK" /required></td>
</tr>
<tr>
	<th style="background-color: white;">Matematika wajib
</th>
	<td><input type="number" name="a_Matematika_wajib" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_Matematika_wajib" placeholder="Silahkan isi NK" /required></td>
	<th style="background-color: white;"><?php if (isset($_POST['ok'])) { 
$kelasnya= $_POST['kelas'];
if ($kelasnya=='XII MIPA 1') {
	echo 'Fisika';
}else if ($kelasnya=='XII MIPA 2') {
	echo 'Fisika';
}else if ($kelasnya=='XII MIPA 3') {
	echo 'Fisika';
}else if ($kelasnya=='XII IIS') {
	echo 'Sosiologi';
}else if ($kelasnya=='XII IBB') {
	echo 'Bahasa dan sastra jepang';
}
}?></th>
	<td><input type="number" name="a_fisika" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_fisika" placeholder="Silahkan isi NK" /required></td>
</tr>
<tr>
	<th style="background-color: white;">Sejarah Indonesia
</th>
	<td><input type="number" name="a_sejarah_indonesia" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_sejarah_indonesia" placeholder="Silahkan isi NK" /required></td>
	<th style="background-color: white;"><?php if (isset($_POST['ok'])) { 
$kelasnya= $_POST['kelas'];
if ($kelasnya=='XII MIPA 1') {
	echo 'Kimia';
}else if ($kelasnya=='XII MIPA 2') {
	echo 'Kimia';
}else if ($kelasnya=='XII MIPA 3') {
	echo 'Kimia';
}else if ($kelasnya=='XII IIS') {
	echo 'Ekonomi';
}else if ($kelasnya=='XII IBB') {
	echo 'Antropologi';
}
}?></th>
	<td><input type="number" name="a_kimia" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_kimia" placeholder="Silahkan isi NK" /required></td>
</tr>
<tr>
	<th style="background-color: white;">Bahasa Inggris
</th>
	<td><input type="number" name="a_bahasa_inggris" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_bahasa_inggris" placeholder="Silahkan isi NK" /required></td>
	<th style="background-color: white;"><?php if (isset($_POST['ok'])) { 
$kelasnya= $_POST['kelas'];
if ($kelasnya=='XII MIPA 1') {
	echo 'Informatika';
}else if ($kelasnya=='XII MIPA 2') {
	echo 'Informatika';
}else if ($kelasnya=='XII MIPA 3') {
	echo 'Informatika';
}else if ($kelasnya=='XII IIS') {
	echo 'informatika';
}else if ($kelasnya=='XII IBB') {
	echo 'informatika';
}
}?></th>
	<td><input type="number" name="a_informatika" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_informatika" placeholder="Silahkan isi NK" /required></td>
</tr>
<tr>
	<th style="background-color: white;">Seni Budaya
</th>
	<td><input type="number" name="a_seni_budaya" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_seni_budaya" placeholder="Silahkan isi NK" /required></td>
	<th style="background-color: white;"><?php if (isset($_POST['ok'])) { 
$kelasnya= $_POST['kelas'];
if ($kelasnya=='XII MIPA 1') {
	echo 'Teknik Audio Video';
}else if ($kelasnya=='XII MIPA 2') {
	echo 'Teknik Audio Video';
}else if ($kelasnya=='XII MIPA 3') {
	echo 'Teknik dan bisnis sepeda';
}else if ($kelasnya=='XII IIS') {
	echo 'Teknik tata busana';
}else if ($kelasnya=='XII IBB') {
	echo 'Teknik multimedia';
}
}?>
</th>
	<td><input type="number" name="a_teknik" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_teknik" placeholder="Silahkan isi NK" /required></td>
</tr>
<tr>
	<th style="background-color: white;">Penjasorkes</th>
	<td><input type="number" name="a_penjasorkes" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_penjasorkes" placeholder="Silahkan isi NK" /required></td>
	<td></td><td></td>
	<td><button style="width:155px;background-color: #bbffb9;" name="simpan">Simpan</button></td>
</tr>
</form>
	<?php
  if (isset($_POST['simpan'])) {
  
?>
<?php $nisn= $_POST['NISM']; ?>
<?php $nama= $_POST['nama']; ?>
<?php $kelas= $_POST['kelas']; ?>
<?php $a= $_POST['a_quran']; ?>
<?php $aa= $_POST['b_quran']; ?>
<?php $b= $_POST['a_akidah']; ?>
<?php $bb= $_POST['b_akidah']; ?>
<?php $c= $_POST['a_fiqih']; ?>
<?php $cc= $_POST['b_fiqih']; ?>
<?php $d= $_POST['a_sejarah_islam']; ?>
<?php $dd= $_POST['b_sejarah_islam']; ?>
<?php $e= $_POST['a_ppkn']; ?>
<?php $ee= $_POST['b_ppkn']; ?>
<?php $f= $_POST['a_indonesia']; ?>
<?php $ff= $_POST['b_indonesia']; ?>
<?php $g= $_POST['a_arab']; ?>
<?php $gg= $_POST['b_arab']; ?>
<?php $h= $_POST['a_Matematika_wajib']; ?>
<?php $hh= $_POST['b_Matematika_wajib']; ?>
<?php $i= $_POST['a_sejarah_indonesia']; ?>
<?php $ii= $_POST['b_sejarah_indonesia']; ?>
<?php $j= $_POST['a_bahasa_inggris']; ?>
<?php $jj= $_POST['b_bahasa_inggris']; ?>
<?php $k= $_POST['a_seni_budaya']; ?>
<?php $kk= $_POST['b_seni_budaya']; ?>
<?php $l= $_POST['a_penjasorkes']; ?>
<?php $ll= $_POST['b_penjasorkes']; ?>
<?php $m= $_POST['a_bahasa_jawa']; ?>
<?php $mm= $_POST['b_bahasa_jawa']; ?>
<?php $n= $_POST['a_nu']; ?> 
<?php $nn= $_POST['b_nu']; ?>
<?php $o= $_POST['a_qiro']; ?>
<?php $oo= $_POST['b_qiro']; ?>
<?php $p= $_POST['a_nahwu']; ?>
<?php $pp= $_POST['b_nahwu']; ?>
<?php $q= $_POST['a_kitab_Kuning']; ?>
<?php $qq= $_POST['b_kitab_Kuning']; ?>
<?php $r= $_POST['a_matematika_peminatan']; ?>
<?php $rr= $_POST['b_matematika_peminatan']; ?>
<?php $s= $_POST['a_biologi']; ?>
<?php $ss= $_POST['b_biologi']; ?>
<?php $t= $_POST['a_fisika']; ?>
<?php $tt= $_POST['b_fisika']; ?>
<?php $u= $_POST['a_kimia']; ?>
<?php $uu= $_POST['b_kimia']; ?>
<?php $v= $_POST['a_informatika']; ?>
<?php $vv= $_POST['b_informatika']; ?>
<?php $w= $_POST['a_teknik']; ?>
<?php $ww= $_POST['b_teknik']; ?>

<?php $total_NP=$a+$b+$c+$d+$e+$f+$g+$h+$i+$j+$k+$l+$m+$n+$o+$p+$q+$r+$s+$t+$u+$v+$w;  ?>
<?php $total_NK=$aa+$bb+$cc+$dd+$ee+$ff+$gg+$hh+$ii+$jj+$kk+$ll+$mm+$nn+$oo+$pp+$qq+$rr+$ss+$tt+$uu+$vv+$ww; ?>
<?php $ttl=$total_NP+$total_NK ?>
<?php $rt=$ttl/46; ?>

<?php if ($a >=0 and $b >=0 and $c >=0 and $d >=0 and $e >=0 and $f >=0 and $g >=0 and $h >=0 and $i >=0 and $j >=0 and $k >=0 and $l >=0 and $m >=0 and $n >=0 and $o >=0 and $p >=0 and $q >=0 and $r >=0 and $s >=0 and $t >=0 and $u >=0 and $v >=0 and $w >=0 and $aa >=0 and $bb >=0 and $cc >=0 and $dd >=0 and $ee >=0 and $ff >=0 and $gg >=0 and $hh >=0 and $ii >=0 and $jj >=0 and $kk >=0 and $ll >=0 and $mm >=0 and $nn >=0 and $oo >=0 and $pp >=0 and $qq >=0 and $rr >=0 and $ss >=0 and $tt >=0 and $uu >=0 and $vv >=0 and $ww >=0) {

if ($a <=100 and $b <=100 and $c <=100 and $d <=100 and $e <=100 and $f <=100 and $g <=100 and $h <=100 and $i <=100 and $j <=100 and $k <=100 and $l <=100 and $m <=100 and $n <=100 and $o <=100 and $p <=100 and $q <=100 and $r <=100 and $s <=100 and $t <=100 and $u <=100 and $v <=100 and $w <=100 and $aa <=100 and $bb <=100 and $cc <=100 and $dd <=100 and $ee <=100 and $ff <=100 and $gg <=100 and $hh <=100 and $ii <=100 and $jj <=100 and $kk <=100 and $ll <=100 and $mm <=100 and $nn <=100 and $oo <=100 and $pp <=100 and $qq <=100 and $rr <=100 and $ss <=100 and $tt <=100 and $uu <=100 and $vv <=100 and $ww <=100) {
  # code...

  $sqli="INSERT INTO tb_nilai(NISM, nama, kelas, a_quran, b_quran, a_akidah, b_akidah, a_fiqih, b_fiqih, a_sejarah_islam, b_sejarah_islam, a_ppkn, b_ppkn, a_indonesia, b_indonesia, a_arab, b_arab, a_Matematika_wajib, b_Matematika_wajib, a_sejarah_indonesia, b_sejarah_indonesia, a_bahasa_inggris, b_bahasa_inggris, a_seni_budaya, b_seni_budaya, a_penjasorkes, b_penjasorkes, a_bahasa_jawa, b_bahasa_jawa, a_nu, b_nu, a_qiro, b_qiro, a_nahwu, b_nahwu, a_kitab_Kuning, b_kitab_Kuning, a_matematika_peminatan, b_matematika_peminatan, a_biologi, b_biologi, a_fisika, b_fisika, a_kimia, b_kimia, a_informatika, b_informatika, a_teknik, b_teknik, rata) VALUES($nisn,'$nama','$kelas',$a,$aa,$b,$bb,$c,$cc,$d,$dd,$e,$ee,$f,$ff,$g,$gg,$h,$hh,$i,$ii,$j,$jj,$k,$kk,$l,$ll,$m,$mm,$n,$nn,$o,$oo,$p,$pp,$q,$qq,$r,$rr,$s,$ss,$t,$tt,$u,$uu,$v,$vv,$w,$ww,$rt);";

  $queryy=mysqli_query($dbcon,$sqli);
  if ($queryy) {
    echo "<script>alert('berhasil tambah data');
        </script>" ;
    # code...
  }else{
    echo "<script>alert('gagal tambah data');
        </script>" ;
  }
}else{
  echo "<script>alert('Angka harus >= 0 dan <=100');
        </script>" ;
  # code...
} 
}else{
  echo "<script>alert('Angka harus >= 0 dan <=100');
        </script>" ;
  # code...
}
?>

<?php } ?>

</table>
</pre>
</center>
</div>

</body>
</html>

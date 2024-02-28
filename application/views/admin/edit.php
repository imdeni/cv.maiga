<?php 
include'onek.php';
if (isset($_GET['n'])) {
        
        $nama = $_GET['n'];
        $kl = $_GET['k'];
    $sql="SELECT * from tb_nilai where nama='$nama'";
    $db=mysqli_query($dbcon,$sql);
    while ($data=mysqli_fetch_array($db)) {
    	$nisn=$data['NISM'];
    	$nama=$data['nama'];
    	$kelas=$data['kelas'];
    	$aquran=$data['a_quran'];
    	$bquran=$data['b_quran'];
    	$aakidah=$data['a_akidah'];
    	$bakidah=$data['b_akidah'];
    	$afiqih=$data['a_fiqih'];
    	$bfiqih=$data['b_fiqih'];
    	$asejarah_islam=$data['a_sejarah_islam'];
    	$bsejarah_islam=$data['b_sejarah_islam'];
    	$appkn=$data['a_ppkn'];
    	$bppkn=$data['b_ppkn'];
    	$aindonesia=$data['a_indonesia'];
    	$bindonesia=$data['b_indonesia'];
    	$aarab=$data['a_arab'];
    	$barab=$data['b_arab'];
    	$aMatematika_wajib=$data['a_Matematika_wajib'];
    	$bMatematika_wajib=$data['b_Matematika_wajib'];
    	$asejarah_indonesia=$data['a_sejarah_indonesia'];
    	$bsejarah_indonesia=$data['b_sejarah_indonesia'];
    	$abahasa_inggris=$data['a_bahasa_inggris'];
    	$bbahasa_inggris=$data['b_bahasa_inggris'];
    	$aseni_budaya=$data['a_seni_budaya'];
    	$bseni_budaya=$data['b_seni_budaya'];
    	$apenjasorkes=$data['a_penjasorkes'];
    	$bpenjasorkes=$data['b_penjasorkes'];
    	$abahasa_jawa=$data['a_bahasa_jawa'];
    	$bbahasa_jawa=$data['b_bahasa_jawa'];
    	$anu=$data['a_nu'];
    	$bnu=$data['b_nu'];
    	$aqiro=$data['a_qiro'];
    	$bqiro=$data['b_qiro'];
    	$anahwu=$data['a_nahwu'];
    	$bnahwu=$data['b_nahwu'];
    	$akitab_kuning=$data['a_kitab_Kuning'];
    	$bkitab_kuning=$data['b_kitab_Kuning'];
    	$amatematika_peminatan=$data['a_matematika_peminatan'];
    	$bmatematika_peminatan=$data['b_matematika_peminatan'];
    	$abiologi=$data['a_biologi'];
    	$bbiologi=$data['b_biologi'];
    	$afisika=$data['a_fisika'];
    	$bfisika=$data['b_fisika'];
    	$akimia=$data['a_kimia'];
    	$bkimia=$data['b_kimia'];
    	$ainformatika=$data['a_informatika'];
    	$binformatika=$data['b_informatika'];
    	$ateknik=$data['a_teknik'];
    	$bteknik=$data['b_teknik'];

    	
      

    }

    }
  
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
  font-size: 18px;
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

<p><center><b style="font-size:24px;">Edit Nilai <?php echo $nama; ?></b></center></p>
<center>
<pre>
	
<table id="search">
<form method="post">
<tr>
	<th style="background-color: white;">NIS</th>
	<td><input type="number" name="NISM" value="<?php echo $nisn; ?>" placeholder="Silahkan isi NIS" /required></td>
</tr>
<tr>
	<th style="background-color: white;">Nama</th>
	<td><input type="text" name="nama" value="<?php echo $nama; ?>" placeholder="Silahkan isi Nama" /required></td>
</tr>
<tr>
	<th style="background-color: white;">Kelas</th>
	<td><input type="text" name="kls" value="<?php echo $kelas; ?>"></td>

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
	<td><input type="number" name="a_quran" value="<?php echo $aquran; ?>" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_quran" value="<?php echo $bquran; ?>" placeholder="Silahkan isi NK" /required></td>
	<th style="background-color: white;">Bahasa Jawa
</th>
	<td><input type="number" name="a_bahasa_jawa" value="<?php echo $abahasa_jawa; ?>" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_bahasa_jawa" value="<?php echo $bbahasa_jawa; ?>" placeholder="Silahkan isi NK" /required></td>
</tr>
<tr>
	<th style="background-color: white;">Aqidah-Akhlaq</th>
	<td><input type="number" name="a_akidah" value="<?php echo $aakidah; ?>" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_akidah" value="<?php echo $aakidah; ?>" placeholder="Silahkan isi NK" /required></td>
	<th style="background-color: white;">Ke-NU-an
</th>
	<td><input type="number" name="a_nu" value="<?php echo $anu; ?>" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_nu" value="<?php echo $bnu; ?>" placeholder="Silahkan isi NK" /required></td>
</tr>
<tr>
	<th style="background-color: white;">Fiqih</th>
	<td><input type="number" name="a_fiqih" value="<?php echo $afiqih; ?>" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_fiqih" value="<?php echo $bfiqih; ?>" placeholder="Silahkan isi NK" /required></td>
	<th style="background-color: white;">Qiro`atul Qur`an
</th>
	<td><input type="number" name="a_qiro" value="<?php echo $aqiro; ?>" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_qiro" value="<?php echo $bqiro; ?>" placeholder="Silahkan isi NK" /required></td>
</tr>
<tr>
	<th style="background-color: white;">Sejarah Kebudayaan
</th>
	<td><input type="number" name="a_sejarah_islam" value="<?php echo $asejarah_islam; ?>" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_sejarah_islam" value="<?php echo $bsejarah_islam; ?>" placeholder="Silahkan isi NK" /required></td>
	<th style="background-color: white;">Nahwu Shorof
</th>
	<td><input type="number" name="a_nahwu" value="<?php echo $anahwu; ?>" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_nahwu" value="<?php echo $bnahwu; ?>" placeholder="Silahkan isi NK" /required></td>
</tr>
<tr>
	<th style="background-color: white;">PPKN</th>
	<td><input type="number" name="a_ppkn" value="<?php echo $appkn; ?>" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_ppkn" value="<?php echo $bppkn; ?>" placeholder="Silahkan isi NK" /required></td>
	<th style="background-color: white;">Ta'limul Muta'alim
</th>
	<td><input type="number" name="a_kitab_Kuning" value="<?php echo $akitab_kuning; ?>" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_kitab_Kuning" value="<?php echo $bkitab_kuning; ?>" placeholder="Silahkan isi NK" /required></td>
</tr>
<tr>
	<th style="background-color: white;">Bahasa Indonesia
</th>
	<td><input type="number" name="a_indonesia"  value="<?php echo $aindonesia; ?>" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_indonesia" value="<?php echo $bindonesia; ?>" placeholder="Silahkan isi NK" /required></td>
	<th style="background-color: white;"><?php  
if ($kelas=='XII MIPA 1') {
	echo 'Matematika peminatan';
}else if ($kelas=='XII MIPA 2') {
	echo 'Matematika peminatan';
}else if ($kelas=='XII MIPA 3') {
	echo 'Matematika peminatan';
}else if ($kelas=='XII IIS') {
	echo 'Geografi';
}else if ($kelas=='XII IBB') {
	echo 'Bahasa dan sastra indonesia';
}
?>
</th>
	<td><input type="number" name="a_matematika_peminatan"  value="<?php echo $amatematika_peminatan; ?>" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_matematika_peminatan" value="<?php echo $bmatematika_peminatan; ?>" placeholder="Silahkan isi NK" /required></td>
</tr>
<tr>
	<th style="background-color: white;">Bahasa Arab
</th>
	<td><input type="number" name="a_arab" value="<?php echo $aarab; ?>" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_arab" value="<?php echo $barab; ?>" placeholder="Silahkan isi NK" /required></td>
	<th style="background-color: white;"><?php 
if ($kelas=='XII MIPA 1') {
	echo 'Biologi';
}else if ($kelas=='XII MIPA 2') {
	echo 'Biologi';
}else if ($kelas=='XII MIPA 3') {
	echo 'Biologi';
}else if ($kelas=='XII IIS') {
	echo 'Sejarah';
}else if ($kelas=='XII IBB') {
	echo 'Bahasa dan sastra inggris';
}
?></th>
	<td><input type="number" name="a_biologi"  value="<?php echo $abiologi; ?>" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_biologi" value="<?php echo $bbiologi; ?>" placeholder="Silahkan isi NK" /required></td>
</tr>
<tr>
	<th style="background-color: white;">Matematika wajib
</th>
	<td><input type="number" name="a_Matematika_wajib" value="<?php echo $aMatematika_wajib; ?>" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_Matematika_wajib" value="<?php echo $aMatematika_wajib; ?>" placeholder="Silahkan isi NK" /required></td>
	<th style="background-color: white;"><?php 
if ($kelas=='XII MIPA 1') {
	echo 'Fisika';
}else if ($kelas=='XII MIPA 2') {
	echo 'Fisika';
}else if ($kelas=='XII MIPA 3') {
	echo 'Fisika';
}else if ($kelas=='XII IIS') {
	echo 'Sosiologi';
}else if ($kelas=='XII IBB') {
	echo 'Bahasa dan sastra jepang';
}
?></th>
	<td><input type="number" name="a_fisika"  value="<?php echo $afisika; ?>" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_fisika" value="<?php echo $bfisika; ?>" placeholder="Silahkan isi NK" /required></td>
</tr>
<tr>
	<th style="background-color: white;">Sejarah Indonesia
</th>
	<td><input type="number" name="a_sejarah_indonesia" value="<?php echo $asejarah_indonesia; ?>" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_sejarah_indonesia" value="<?php echo $bsejarah_indonesia; ?>" placeholder="Silahkan isi NK" /required></td>
	<th style="background-color: white;"><?php 
if ($kelas=='XII MIPA 1') {
	echo 'Kimia';
}else if ($kelas=='XII MIPA 2') {
	echo 'Kimia';
}else if ($kelas=='XII MIPA 3') {
	echo 'Kimia';
}else if ($kelas=='XII IIS') {
	echo 'Ekonomi';
}else if ($kelas=='XII IBB') {
	echo 'Antropologi';

}?></th>
	<td><input type="number" name="a_kimia" value="<?php echo $bkimia; ?>" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_kimia" value="<?php echo $bkimia; ?>" placeholder="Silahkan isi NK" /required></td>
</tr>
<tr>
	<th style="background-color: white;">Bahasa Inggris
</th>
	<td><input type="number" name="a_bahasa_inggris" value="<?php echo $abahasa_inggris; ?>" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_bahasa_inggris" value="<?php echo $bbahasa_inggris; ?>" placeholder="Silahkan isi NK" /required></td>
	<th style="background-color: white;"><?php 
if ($kelas=='XII MIPA 1') {
	echo 'Informatika';
}else if ($kelas=='XII MIPA 2') {
	echo 'Informatika';
}else if ($kelas=='XII MIPA 3') {
	echo 'Informatika';
}else if ($kelas=='XII IIS') {
	echo 'informatika';
}else if ($kelas=='XII IBB') {
	echo 'informatika';

}?></th>
	<td><input type="number" name="a_informatika" value="<?php echo $ainformatika; ?>" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_informatika" value="<?php echo $binformatika; ?>" placeholder="Silahkan isi NK" /required></td>
</tr>
<tr>
	<th style="background-color: white;">Seni Budaya
</th>
	<td><input type="number" name="a_seni_budaya" value="<?php echo $aseni_budaya; ?>" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_seni_budaya" value="<?php echo $bseni_budaya; ?>" placeholder="Silahkan isi NK" /required></td>
	<th style="background-color: white;"><?php 
if ($kelas=='XII MIPA 1') {
	echo 'Teknik Audio Video';
}else if ($kelas=='XII MIPA 2') {
	echo 'Teknik Audio Video';
}else if ($kelas=='XII MIPA 3') {
	echo 'Teknik dan bisnis sepeda';
}else if ($kelas=='XII IIS') {
	echo 'Teknik tata busana';
}else if ($kelas=='XII IBB') {
	echo 'Teknik multimedia';

}?>
</th>
	<td><input type="number" name="a_teknik" value="<?php echo $ateknik; ?>" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_teknik" value="<?php echo $bteknik; ?>" placeholder="Silahkan isi NK" /required></td>
</tr>
<tr>
	<th style="background-color: white;">Penjasorkes</th>
	<td><input type="number" name="a_penjasorkes" value="<?php echo $apenjasorkes; ?>" placeholder="Silahkan isi NP" /required></td>
	<td><input type="number" name="b_penjasorkes" value="<?php echo $bpenjasorkes; ?>" placeholder="Silahkan isi NK" /required></td>
	<td></td><td></td>
	<td><button style="width:155px;background-color: #bbffb9;" name="simpan">Simpan</button></td>
</tr>
</form>
	<?php
  if (isset($_POST['simpan'])) {
  
?>
<?php $nisn= $_POST['NISM']; ?>
<?php $nm= $_POST['nama']; ?>
<?php $kl= $_POST['kls']; ?>
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

  $sqli="UPDATE tb_nilai SET NISM=$nisn, nama='$nm', kelas='$kl', a_quran=$a, b_quran=$aa, a_akidah=$b, b_akidah=$bb, a_fiqih=$c, b_fiqih=$cc, a_sejarah_islam=$d, b_sejarah_islam=$dd, a_ppkn=$e, b_ppkn=$ee, a_indonesia=$f, b_indonesia=$ff, a_arab=$g, b_arab=$gg, a_Matematika_wajib=$h, b_Matematika_wajib=$hh, a_sejarah_indonesia=$i, b_sejarah_indonesia=$ii, a_bahasa_inggris=$j, b_bahasa_inggris=$jj, a_seni_budaya=$k, b_seni_budaya=$kk, a_penjasorkes=$l, b_penjasorkes=$ll, a_bahasa_jawa=$m, b_bahasa_jawa=$mm, a_nu=$n, b_nu=$nn, a_qiro=$o, b_qiro=$oo, a_nahwu=$p, b_nahwu=$pp, a_kitab_Kuning=$q, b_kitab_Kuning=$qq, a_matematika_peminatan=$r, b_matematika_peminatan=$rr, a_biologi=$s, b_biologi=$ss, a_fisika=$t, b_fisika=$tt, a_kimia=$u, b_kimia=$uu, a_informatika=$v, b_informatika=$vv, a_teknik=$w, b_teknik=$ww, rata=$rt where nama='$nama'";

  $queryy=mysqli_query($dbcon,$sqli);
  if ($queryy) {
    echo "<script>alert('berhasil edit data');
    window.location.href='sukses';
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

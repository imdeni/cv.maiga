<?php include'onek.php'; ?>

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
    margin-top: 0px;

    font: 16px/20px normal Helvetica, Arial, sans-serif;
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
    margin: 0 15px 0 15px;
  }
  .lebar{
    margin-left: -50px;
    margin-right: -50px;
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
             filter:  progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083);  /* IE6,IE7 */
         -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083)"; /* IE8 */
         margin-left: -10em;
         margin-right: -10em;
         font-weight: bold;
}
.kiri{
  position: right;
}
.kanan{
  position: absolute;
  top:120px;
  right: 100px;
}
.rata{
  width: 330px;
}


  
</style>

<body>
<br>
<div class="container"><div class="lebar">
    <pre><table width="100%">

      <label> TAMBAH DATA SISWA :</label>
<form method="post">
<div class="kiri">
      <label><div class="rata"> NISN : </div></label><input type="int" name="NISM" /required><br>
      <label><div class="rata"> Nama : </div></label><input type="text" name="nama" /required><br>
      <label><div class="rata"> Kelas : </div></label><select name="kelas"><option>XII MIPA 1</option><option>XII MIPA 2</option><option>XII MIPA 3</option><option>XII IIS 1</option><option>XII IIS 2</option><option>XII IBB</option></select>

      <label><div class="rata"> Nilai Pengetahuan : Al-Qur'an Hadist : </div></label><input type="int" name="a_quran" /required><br>
      <label><div class="rata"> Nilai Ketrampilan : Al-Qur'an Hadist : </div></label><input type="int" name="b_quran" /required><br>
      <label><div class="rata"> Nilai Pengetahuan : Aqidah-Akhlaq : </div></label><input type="int" name="a_akidah" /required><br>
      <label><div class="rata"> Nilai Ketrampilan : Aqidah-Akhlaq : </div></label><input type="int" name="b_akidah" /required><br>
      <label><div class="rata"> Nilai Pengetahuan : Fiqih : </div></label><input type="int" name="a_fiqih" /required><br>
      <label><div class="rata"> Nilai Ketrampilan : Fiqih : </div></label><input type="int" name="b_fiqih" /required><br>
      <label><div class="rata"> Nilai Pengetahuan : Sejarah Kebudayaan : </div></label><input type="int" name="a_sejarah_islam" /required><br>
      <label><div class="rata"> Nilai Ketrampilan : Sejarah Kebudayaan : </div></label><input type="int" name="b_sejarah_islam" /required><br>
      <label><div class="rata"> Nilai Pengetahuan : PPKN : </div></label><input type="int" name="a_ppkn" /required><br>
      <label><div class="rata"> Nilai Ketrampilan : PPKN : </div></label><input type="int" name="b_ppkn" /required><br>
      <label><div class="rata"> Nilai Pengetahuan : Bahasa Indonesia : </div></label><input type="int" name="a_indonesia" /required><br>
      <label><div class="rata"> Nilai Ketrampilan : Bahasa Indonesia : </div></label><input type="int" name="b_indonesia" /required><br>
      <label><div class="rata"> Nilai Pengetahuan : Bahasa Arab : </div></label><input type="int" name="a_arab" /required><br>
      <label><div class="rata"> Nilai Ketrampilan : Bahasa Arab : </div></label><input type="int" name="b_arab" /required><br>
      <label><div class="rata"> Nilai Pengetahuan : Matematika : </div></label><input type="int" name="a_Matematika_wajib" /required><br>
      <label><div class="rata"> Nilai Ketrampilan : Matematika : </div></label><input type="int" name="b_Matematika_wajib" /required><br>
      <label><div class="rata"> Nilai Pengetahuan : Sejarah Indonesia : </div></label><input type="int" name="a_sejarah_indonesia" /required><br>
      <label><div class="rata"> Nilai Ketrampilan : Sejarah Indonesia : </div></label><input type="int" name="b_sejarah_indonesia" /required><br>
      <label><div class="rata"> Nilai Pengetahuan : Bahasa Inggris : </div></label><input type="int" name="a_bahasa_inggris" /required><br>
      <label><div class="rata"> Nilai Ketrampilan : Bahasa Inggris : </div></label><input type="int" name="b_bahasa_inggris" /required><br>
      <label><div class="rata"> Nilai Pengetahuan : Seni Budaya : </div></label><input type="int" name="a_seni_budaya" /required><br>
      <label><div class="rata"> Nilai Ketrampilan : Seni Budaya : </div></label><input type="int" name="b_seni_budaya" /required><br>
    </div>
<div class="kanan">
      <label><div class="rata"> Nilai Pengetahuan : Penjasorkes : </div></label><input type="int" name="a_penjasorkes" /required><br>
      <label><div class="rata"> Nilai Ketrampilan : Penjasorkes : </div></label><input type="int" name="b_penjasorkes" /required><br>
      <label><div class="rata"> Nilai Pengetahuan : Bahasa Jawa : </div></label><input type="int" name="a_bahasa_jawa" /required><br>
      <label><div class="rata"> Nilai Ketrampilan : Bahasa Jawa : </div></label><input type="int" name="b_bahasa_jawa" /required><br>
      <label><div class="rata"> Nilai Pengetahuan : Ke-NU-an : </div></label><input type="int" name="a_nu" /required><br>
      <label><div class="rata"> Nilai Ketrampilan : Ke-NU-an : </div></label><input type="int" name="b_nu" /required><br>
      <label><div class="rata"> Nilai Pengetahuan : Qiro`atul Qur`an : </div></label><input type="int" name="a_qiro" /required><br>
      <label><div class="rata"> Nilai Ketrampilan : Qiro`atul Qur`an : </div></label><input type="int" name="b_qiro" /required><br>
      <label><div class="rata"> Nilai Pengetahuan : Nahwu Shorof : </div></label><input type="int" name="a_nahwu" /required><br>
      <label><div class="rata"> Nilai Ketrampilan : Nahwu Shorof : </div></label><input type="int" name="b_nahwu" /required><br>
      <label><div class="rata"> Nilai Pengetahuan : Ta'limul Muta`alim : </div></label><input type="int" name="a_kitab_Kuning" /required><br>
      <label><div class="rata"> Nilai Ketrampilan : Ta'limul Muta`alim : </div></label><input type="int" name="b_kitab_Kuning" /required><br>
      <label><div class="rata"> Nilai Pengetahuan : Matematika : </div></label><input type="int" name="a_matematika_peminatan" /required><br>
      <label><div class="rata"> Nilai Ketrampilan : Matematika : </div></label><input type="int" name="b_matematika_peminatan" /required><br>
      <label><div class="rata"> Nilai Pengetahuan : Biologi : </div></label><input type="int" name="a_biologi" /required><br>
      <label><div class="rata"> Nilai Ketrampilan : Biologi : </div></label><input type="int" name="b_biologi" /required><br>
    
      <label><div class="rata"> Nilai Pengetahuan : Fisika : </div></label><input type="int" name="a_fisika" /required><br>
      <label><div class="rata"> Nilai Ketrampilan : Fisika : </div></label><input type="int" name="b_fisika" /required><br>
      <label><div class="rata"> Nilai Pengetahuan : Kimia : </div></label><input type="int" name="a_kimia" /required><br>
      <label><div class="rata"> Nilai Ketrampilan : Kimia : </div></label><input type="int" name="b_kimia" /required><br>
      <label><div class="rata"> Nilai Pengetahuan : Informatika : </div></label><input type="int" name="a_informatika" /required><br>
      <label><div class="rata"> Nilai Ketrampilan : Informatika : </div></label><input type="int" name="b_informatika" /required><br>
      <label><div class="rata"> Nilai Pengetahuan : Teknik Audio Video : </div></label><input type="int" name="a_teknik" /required><br>
      <label><div class="rata"> Nilai Ketrampilan : Teknik Audio Video : </div></label><input type="int" name="b_teknik" /required><br>
      <button style="width:200px;" name="simpan">Tambah Data</button>
</div>  
  
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


    </table></pre>

  <div class="container"><div class="lebar">
    <pre><table width="100%">
<form method="post">
  
  <label>Pilih Kelas untuk menampilkan tabel : </label>
<select name="kelas">
  <option>XII MIPA 1</option>
  <option>XII MIPA 2</option>
  <option>XII MIPA 3</option>
  <option>XII IIS 1</option>
  <option>XII IIS 2</option>
  <option>XII IBB</option>


</select>
 <label> </label>
<button name="submit" id="submit">submit</button>
</form>
</table></pre>
</div></div>

<?php
  if (isset($_POST['submit'])) {
    $kelas=$_POST['kelas'];
?>


<?php if ($kelas=='XII MIPA 2') {
  # code...
 ?>

  <div class="container">
<div class="lebar"><input type="text" id="cari" onkeyup="myFunction()" placeholder="CARI NAMA">
<br><br>
<pre>
<table id="search">

<tr>
  <th style="background-color: white;" class="rotate" rowspan="3"><div>Nama</div></th>
  <th style="background-color: white;" class="rotate" rowspan="3"><div>Kelas</div></th>
  <th style="background-color: white;" colspan ="46">Nilai</th>
  <th style="background-color: white;" class="rotate" rowspan="3"><div>Rata-Rata</div></th>
  <th style="background-color: white;" class="rotate" rowspan="3"><div>Ranking Kelas</div></th>
  <th style="background-color: white;" class="rotate" rowspan="3"><div>Hapus</div></th>
  
</tr>
<tr>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Al-Qur'an Hadist</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Aqidah-Akhlaq</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Fiqih</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Sejarah Kebudayaan</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>PPKN</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Bahasa Indonesia</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Bahasa Arab</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Matematika</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Sejarah Indonesia</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Bahasa Inggris</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Seni Budaya</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Penjasorkes</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Bahasa Jawa</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Ke-NU-an</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div> Qiro`atul Qur`an</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Nahwu Shorof</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div> Ta'limul Muta`alim</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Matematika</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Biologi</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Fisika</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Kimia</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Informatia</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Teknik Audio Video</div></td>
  
  
</tr>

<tr>
  
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>


</tr><?php 
$rows = 0;
$sql = "SELECT * FROM tb_nilai where kelas='$kelas' order by rata desc";
$nilai = mysqli_query($dbcon,$sql);
while ($query=mysqli_fetch_array($nilai)) {
  $rows++;
  
 ?>
<tr>
  <td style="width: 100px;background-color: white;" ><?php echo $query['nama']; ?></td>                  
  <td  style="background-color: white;" ><div><?php echo $query['kelas']; ?></div></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_quran']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_quran']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_akidah']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_akidah']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_fiqih']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_fiqih']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_sejarah_islam']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_sejarah_islam']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_ppkn']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_ppkn']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_indonesia']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_indonesia']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_arab']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_arab']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_Matematika_wajib']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_Matematika_wajib']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_sejarah_indonesia']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_sejarah_indonesia']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_bahasa_inggris']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_bahasa_inggris']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_seni_budaya']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_seni_budaya']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_penjasorkes']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_penjasorkes']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_bahasa_jawa']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_bahasa_jawa']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_nu']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_nu']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_qiro']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_qiro']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_nahwu']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_nahwu']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_kitab_Kuning']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_kitab_Kuning']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_matematika_peminatan']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_matematika_peminatan']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_biologi']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_biologi']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_fisika']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_fisika']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_kimia']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_kimia']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_informatika']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_informatika']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_teknik']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_teknik']; ?></td>                  





<?php $a= $query['a_quran']; ?>
<?php $aa= $query['b_quran']; ?>
<?php $b= $query['a_akidah']; ?>
<?php $bb= $query['b_akidah']; ?>
<?php $c= $query['a_fiqih']; ?>
<?php $cc= $query['b_fiqih']; ?>
<?php $d= $query['a_sejarah_islam']; ?>
<?php $dd= $query['b_sejarah_islam']; ?>
<?php $e= $query['a_ppkn']; ?>
<?php $ee= $query['b_ppkn']; ?>
<?php $f= $query['a_indonesia']; ?>
<?php $ff= $query['b_indonesia']; ?>
<?php $g= $query['a_arab']; ?>
<?php $gg= $query['b_arab']; ?>
<?php $h= $query['a_Matematika_wajib']; ?>
<?php $hh= $query['b_Matematika_wajib']; ?>
<?php $i= $query['a_sejarah_indonesia']; ?>
<?php $ii= $query['b_sejarah_indonesia']; ?>
<?php $j= $query['a_bahasa_inggris']; ?>
<?php $jj= $query['b_bahasa_inggris']; ?>
<?php $k= $query['a_seni_budaya']; ?>
<?php $kk= $query['b_seni_budaya']; ?>
<?php $l= $query['a_penjasorkes']; ?>
<?php $ll= $query['b_penjasorkes']; ?>
<?php $m= $query['a_bahasa_jawa']; ?>
<?php $mm= $query['b_bahasa_jawa']; ?>
<?php $n= $query['a_nu']; ?> 
<?php $nn= $query['b_nu']; ?>
<?php $o= $query['a_qiro']; ?>
<?php $oo= $query['b_qiro']; ?>
<?php $p= $query['a_nahwu']; ?>
<?php $pp= $query['b_nahwu']; ?>
<?php $q= $query['a_kitab_Kuning']; ?>
<?php $qq= $query['b_kitab_Kuning']; ?>
<?php $r= $query['a_matematika_peminatan']; ?>
<?php $rr= $query['b_matematika_peminatan']; ?>
<?php $s= $query['a_biologi']; ?>
<?php $ss= $query['b_biologi']; ?>
<?php $t= $query['a_fisika']; ?>
<?php $tt= $query['b_fisika']; ?>
<?php $u= $query['a_kimia']; ?>
<?php $uu= $query['b_kimia']; ?>
<?php $v= $query['a_informatika']; ?>
<?php $vv= $query['b_informatika']; ?>
<?php $w= $query['a_teknik']; ?>
<?php $ww= $query['b_teknik']; ?>

<?php $total_NP=$a+$b+$c+$d+$e+$f+$g+$h+$i+$j+$k+$l+$m+$n+$o+$p+$q+$r+$s+$t+$u+$v+$w;  ?>
<?php $total_NK=$aa+$bb+$cc+$dd+$ee+$ff+$gg+$hh+$ii+$jj+$kk+$ll+$mm+$nn+$oo+$pp+$qq+$rr+$ss+$tt+$uu+$vv+$ww; ?>
<?php $ttl=$total_NP+$total_NK ?>
<?php $rt=$ttl/46; ?>

<?php $rata=$query['rata']; ?>

  
  <td style="background-color:#bbffb9;color: black;" ><b><div><?php echo number_format($rata,2);  ?></div></b></td>
  <td style="background-color:#bbffb9;color: black;" ><b><div><?php echo $rows;  ?></div></b></td>
  <td style="background-color:#bbffb9;color: black;" ><b><div><a onclick="return confirm('Apakah yakin menghapus ?')" href='<?php echo base_url('index.php/hapus/?id_nilai=').$query['id_nilai']; ?>'>hapus</a></div></b></td>
  
</tr>
<?php } ?>
</table>
</pre>
</div>


<script>
function myFunction()  input, filter, table, tr, td, i, txtV input = document.getElementById("cari");
  f input.value.toUpperCase();
  table = document.getElementById("search");
  tr = table.getElementsByTagName("tr");
  for (i = 3; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";

        
        
      } else {
        tr[i].style.display = "none";
      }

    }       
  }


</script>

<?php } 
else if ($kelas=='XII IIS 1') {
?>
<div class="container">
 <input type="text" id="cari1" onkeyup="myFunction1()" placeholder="CARI NAMA">
<br><br>
<pre>
<table id="search1">

<tr>
  <th style="background-color: white;" class="rotate" rowspan="3"><div>Nama</div></th>
  <th style="background-color: white;" class="rotate" rowspan="3"><div>Kelas</div></th>
  <th style="background-color: white;" colspan ="46">Nilai</th>
  <th style="background-color: white;" class="rotate" rowspan="3"><div>Rata-Rata</div></th>
  <th style="background-color: white;" class="rotate" rowspan="3"><div>Ranking kelas</div></th>

  <th style="background-color: white;" class="rotate" rowspan="3"><div>Hapus</div></th>

  
</tr>
<tr>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Al-Qur'an Hadist</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Aqidah-Akhlaq</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Fiqih</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Sejarah Kebudayaan</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>PPKN</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Bahasa Indonesia</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Bahasa Arab</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Matematika</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Sejarah Indonesia</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Bahasa Inggris</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Seni Budaya</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Penjasorkes</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Bahasa Jawa</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Ke-NU-an</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div> Qiro`atul Qur`an</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Nahwu Shorof</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div> Ta'limul Muta`alim</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Geografi</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Sejarah</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Sosiologi</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Ekonomi</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Informatika</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Teknik Tata Busana</div></td>
  
  
</tr>

<tr>
  
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>


</tr><?php 
$rows = 0;
$sql = "SELECT * FROM tb_nilai where kelas='$kelas' order by rata desc";
$nilai = mysqli_query($dbcon,$sql);
while ($query=mysqli_fetch_array($nilai)) {
  $rows++;
  
 ?>
<tr>
  <td style="width: 100px;background-color: white;" ><?php echo $query['nama']; ?></td>                  
  <td  style="background-color: white;" ><div><?php echo $query['kelas']; ?></div></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_quran']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_quran']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_akidah']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_akidah']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_fiqih']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_fiqih']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_sejarah_islam']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_sejarah_islam']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_ppkn']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_ppkn']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_indonesia']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_indonesia']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_arab']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_arab']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_Matematika_wajib']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_Matematika_wajib']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_sejarah_indonesia']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_sejarah_indonesia']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_bahasa_inggris']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_bahasa_inggris']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_seni_budaya']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_seni_budaya']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_penjasorkes']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_penjasorkes']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_bahasa_jawa']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_bahasa_jawa']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_nu']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_nu']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_qiro']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_qiro']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_nahwu']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_nahwu']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_kitab_Kuning']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_kitab_Kuning']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_matematika_peminatan']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_matematika_peminatan']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_biologi']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_biologi']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_fisika']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_fisika']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_kimia']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_kimia']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_informatika']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_informatika']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_teknik']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_teknik']; ?></td>                  





<?php $a= $query['a_quran']; ?>
<?php $aa= $query['b_quran']; ?>
<?php $b= $query['a_akidah']; ?>
<?php $bb= $query['b_akidah']; ?>
<?php $c= $query['a_fiqih']; ?>
<?php $cc= $query['b_fiqih']; ?>
<?php $d= $query['a_sejarah_islam']; ?>
<?php $dd= $query['b_sejarah_islam']; ?>
<?php $e= $query['a_ppkn']; ?>
<?php $ee= $query['b_ppkn']; ?>
<?php $f= $query['a_indonesia']; ?>
<?php $ff= $query['b_indonesia']; ?>
<?php $g= $query['a_arab']; ?>
<?php $gg= $query['b_arab']; ?>
<?php $h= $query['a_Matematika_wajib']; ?>
<?php $hh= $query['b_Matematika_wajib']; ?>
<?php $i= $query['a_sejarah_indonesia']; ?>
<?php $ii= $query['b_sejarah_indonesia']; ?>
<?php $j= $query['a_bahasa_inggris']; ?>
<?php $jj= $query['b_bahasa_inggris']; ?>
<?php $k= $query['a_seni_budaya']; ?>
<?php $kk= $query['b_seni_budaya']; ?>
<?php $l= $query['a_penjasorkes']; ?>
<?php $ll= $query['b_penjasorkes']; ?>
<?php $m= $query['a_bahasa_jawa']; ?>
<?php $mm= $query['b_bahasa_jawa']; ?>
<?php $n= $query['a_nu']; ?> 
<?php $nn= $query['b_nu']; ?>
<?php $o= $query['a_qiro']; ?>
<?php $oo= $query['b_qiro']; ?>
<?php $p= $query['a_nahwu']; ?>
<?php $pp= $query['b_nahwu']; ?>
<?php $q= $query['a_kitab_Kuning']; ?>
<?php $qq= $query['b_kitab_Kuning']; ?>
<?php $r= $query['a_matematika_peminatan']; ?>
<?php $rr= $query['b_matematika_peminatan']; ?>
<?php $s= $query['a_biologi']; ?>
<?php $ss= $query['b_biologi']; ?>
<?php $t= $query['a_fisika']; ?>
<?php $tt= $query['b_fisika']; ?>
<?php $u= $query['a_kimia']; ?>
<?php $uu= $query['b_kimia']; ?>
<?php $v= $query['a_informatika']; ?>
<?php $vv= $query['b_informatika']; ?>
<?php $w= $query['a_teknik']; ?>
<?php $ww= $query['b_teknik']; ?>

<?php $total_NP=$a+$b+$c+$d+$e+$f+$g+$h+$i+$j+$k+$l+$m+$n+$o+$p+$q+$r+$s+$t+$u+$v+$w;  ?>
<?php $total_NK=$aa+$bb+$cc+$dd+$ee+$ff+$gg+$hh+$ii+$jj+$kk+$ll+$mm+$nn+$oo+$pp+$qq+$rr+$ss+$tt+$uu+$vv+$ww; ?>
<?php $ttl=$total_NP+$total_NK ?>
<?php $rt=$ttl/46; ?>

<?php $rata=$query['rata']; ?>

  
  <td style="background-color:#bbffb9;color: black;" ><b><div><?php echo number_format($rata,2);  ?></div></b></td>
  <td style="background-color:#bbffb9;color: black;" ><b><div><?php echo $rows;  ?></div></b></td>
  <td style="background-color:#bbffb9;color: black;" ><b><div><a onclick="return confirm('Apakah yakin menghapus ?')" href='<?php echo base_url('index.php/hapus/?id_nilai=').$query['id_nilai']; ?>'>hapus</a></div></b></td>
  
</tr>
<?php } ?>
</table>
</pre>
</div>

<?php } else if ($kelas=='XII MIPA 3') {
?>

<div class="container">
 <input type="text" id="cari2" onkeyup="myFunction2()" placeholder="CARI NAMA">
<br><br>
<pre>
<table id="search2">

<tr>
  <th style="background-color: white;" class="rotate" rowspan="3"><div>Nama</div></th>
  <th style="background-color: white;" class="rotate" rowspan="3"><div>Kelas</div></th>
  <th style="background-color: white;" colspan ="46">Nilai</th>
  <th style="background-color: white;" class="rotate" rowspan="3"><div>Rata-Rata</div></th>
  <th style="background-color: white;" class="rotate" rowspan="3"><div>Ranking Kelas</div></th>
  <th style="background-color: white;" class="rotate" rowspan="3"><div>Hapus</div></th>
  
</tr>
<tr>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Al-Qur'an Hadist</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Aqidah-Akhlaq</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Fiqih</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Sejarah Kebudayaan</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>PPKN</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Bahasa Indonesia</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Bahasa Arab</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Matematika wajib</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Sejarah Indonesia</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Bahasa Inggris</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Seni Budaya</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Penjasorkes</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Bahasa Jawa</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Ke-NU-an</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div> Qiro`atul Qur`an</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Nahwu Shorof</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div> Kitab Kuning</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Matematika Peminatan</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Biologi</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Fisika</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Kimia</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Informatika</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Teknik & Bisnis Sepeda</div></td>
  
  
</tr>

<tr>
  
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>


</tr><?php 
$rows = 0;
$sql = "SELECT * FROM tb_nilai where kelas='$kelas' order by rata desc";
$nilai = mysqli_query($dbcon,$sql);
while ($query=mysqli_fetch_array($nilai)) {
  $rows++;
  
 ?>
<tr>
  <td style="width: 100px;background-color: white;" ><?php echo $query['nama']; ?></td>                  
  <td  style="background-color: white;" ><div><?php echo $query['kelas']; ?></div></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_quran']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_quran']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_akidah']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_akidah']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_fiqih']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_fiqih']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_sejarah_islam']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_sejarah_islam']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_ppkn']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_ppkn']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_indonesia']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_indonesia']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_arab']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_arab']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_Matematika_wajib']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_Matematika_wajib']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_sejarah_indonesia']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_sejarah_indonesia']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_bahasa_inggris']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_bahasa_inggris']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_seni_budaya']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_seni_budaya']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_penjasorkes']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_penjasorkes']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_bahasa_jawa']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_bahasa_jawa']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_nu']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_nu']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_qiro']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_qiro']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_nahwu']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_nahwu']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_kitab_Kuning']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_kitab_Kuning']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_matematika_peminatan']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_matematika_peminatan']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_biologi']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_biologi']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_fisika']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_fisika']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_kimia']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_kimia']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_informatika']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_informatika']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_teknik']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_teknik']; ?></td>                  





<?php $a= $query['a_quran']; ?>
<?php $aa= $query['b_quran']; ?>
<?php $b= $query['a_akidah']; ?>
<?php $bb= $query['b_akidah']; ?>
<?php $c= $query['a_fiqih']; ?>
<?php $cc= $query['b_fiqih']; ?>
<?php $d= $query['a_sejarah_islam']; ?>
<?php $dd= $query['b_sejarah_islam']; ?>
<?php $e= $query['a_ppkn']; ?>
<?php $ee= $query['b_ppkn']; ?>
<?php $f= $query['a_indonesia']; ?>
<?php $ff= $query['b_indonesia']; ?>
<?php $g= $query['a_arab']; ?>
<?php $gg= $query['b_arab']; ?>
<?php $h= $query['a_Matematika_wajib']; ?>
<?php $hh= $query['b_Matematika_wajib']; ?>
<?php $i= $query['a_sejarah_indonesia']; ?>
<?php $ii= $query['b_sejarah_indonesia']; ?>
<?php $j= $query['a_bahasa_inggris']; ?>
<?php $jj= $query['b_bahasa_inggris']; ?>
<?php $k= $query['a_seni_budaya']; ?>
<?php $kk= $query['b_seni_budaya']; ?>
<?php $l= $query['a_penjasorkes']; ?>
<?php $ll= $query['b_penjasorkes']; ?>
<?php $m= $query['a_bahasa_jawa']; ?>
<?php $mm= $query['b_bahasa_jawa']; ?>
<?php $n= $query['a_nu']; ?> 
<?php $nn= $query['b_nu']; ?>
<?php $o= $query['a_qiro']; ?>
<?php $oo= $query['b_qiro']; ?>
<?php $p= $query['a_nahwu']; ?>
<?php $pp= $query['b_nahwu']; ?>
<?php $q= $query['a_kitab_Kuning']; ?>
<?php $qq= $query['b_kitab_Kuning']; ?>
<?php $r= $query['a_matematika_peminatan']; ?>
<?php $rr= $query['b_matematika_peminatan']; ?>
<?php $s= $query['a_biologi']; ?>
<?php $ss= $query['b_biologi']; ?>
<?php $t= $query['a_fisika']; ?>
<?php $tt= $query['b_fisika']; ?>
<?php $u= $query['a_kimia']; ?>
<?php $uu= $query['b_kimia']; ?>
<?php $v= $query['a_informatika']; ?>
<?php $vv= $query['b_informatika']; ?>
<?php $w= $query['a_teknik']; ?>
<?php $ww= $query['b_teknik']; ?>

<?php $total_NP=$a+$b+$c+$d+$e+$f+$g+$h+$i+$j+$k+$l+$m+$n+$o+$p+$q+$r+$s+$t+$u+$v+$w;  ?>
<?php $total_NK=$aa+$bb+$cc+$dd+$ee+$ff+$gg+$hh+$ii+$jj+$kk+$ll+$mm+$nn+$oo+$pp+$qq+$rr+$ss+$tt+$uu+$vv+$ww; ?>
<?php $ttl=$total_NP+$total_NK ?>
<?php $rt=$ttl/46; ?>

<?php $rata=$query['rata']; ?>

  
  <td style="background-color:#bbffb9;color: black;" ><b><div><?php echo number_format($rata,2);  ?></div></b></td>
  <td style="background-color:#bbffb9;color: black;" ><b><div><?php echo $rows;  ?></div></b></td>
  <td style="background-color:#bbffb9;color: black;" ><b><div><a onclick="return confirm('Apakah yakin menghapus ?')" href='<?php echo base_url('index.php/hapus/?id_nilai=').$query['id_nilai']; ?>'>hapus</a></div></b></td>
  
</tr>
<?php } ?>
</table>
</pre>
</div>

<?php } else if ($kelas=='XII MIPA 1') {
?>

<div class="container">
 <input type="text" id="cari3" onkeyup="myFunction3()" placeholder="CARI NAMA">
<br><br>
<pre>
<table id="search3">

<tr>
  <th style="background-color: white;" class="rotate" rowspan="3"><div>Nama</div></th>
  <th style="background-color: white;" class="rotate" rowspan="3"><div>Kelas</div></th>
  <th style="background-color: white;" colspan ="46">Nilai</th>
  <th style="background-color: white;" class="rotate" rowspan="3"><div>Rata-Rata</div></th>
  <th style="background-color: white;" class="rotate" rowspan="3"><div>Ranking Kelas</div></th>
  <th style="background-color: white;" class="rotate" rowspan="3"><div>Hapus</div></th>

  
</tr>
<tr>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Al-Qur'an Hadist</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Aqidah-Akhlaq</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Fiqih</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Sejarah Kebudayaan</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>PPKN</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Bahasa Indonesia</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Bahasa Arab</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Matematika wajib</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Sejarah Indonesia</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Bahasa Inggris</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Seni Budaya</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Penjasorkes</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Bahasa Jawa</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Ke-NU-an</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div> Qiro`atul Qur`an</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Nahwu Shorof</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Ta'limul Muta'alim</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Matematika Peminatan</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Biologi</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Fisika</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Kimia</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Informatika</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Teknik Audio Video</div></td>
  
  
</tr>

<tr>
  
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>


</tr><?php 
$rows = 0;
$sql = "SELECT * FROM tb_nilai where kelas='$kelas' order by rata desc";
$nilai = mysqli_query($dbcon,$sql);
while ($query=mysqli_fetch_array($nilai)) {
  $rows++;
  
 ?>
<tr>
  <td style="width: 100px;background-color: white;" ><?php echo $query['nama']; ?></td>                  
  <td  style="background-color: white;" ><div><?php echo $query['kelas']; ?></div></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_quran']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_quran']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_akidah']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_akidah']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_fiqih']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_fiqih']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_sejarah_islam']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_sejarah_islam']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_ppkn']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_ppkn']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_indonesia']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_indonesia']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_arab']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_arab']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_Matematika_wajib']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_Matematika_wajib']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_sejarah_indonesia']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_sejarah_indonesia']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_bahasa_inggris']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_bahasa_inggris']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_seni_budaya']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_seni_budaya']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_penjasorkes']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_penjasorkes']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_bahasa_jawa']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_bahasa_jawa']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_nu']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_nu']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_qiro']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_qiro']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_nahwu']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_nahwu']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_kitab_Kuning']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_kitab_Kuning']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_matematika_peminatan']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_matematika_peminatan']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_biologi']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_biologi']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_fisika']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_fisika']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_kimia']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_kimia']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_informatika']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_informatika']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_teknik']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_teknik']; ?></td>                  





<?php $a= $query['a_quran']; ?>
<?php $aa= $query['b_quran']; ?>
<?php $b= $query['a_akidah']; ?>
<?php $bb= $query['b_akidah']; ?>
<?php $c= $query['a_fiqih']; ?>
<?php $cc= $query['b_fiqih']; ?>
<?php $d= $query['a_sejarah_islam']; ?>
<?php $dd= $query['b_sejarah_islam']; ?>
<?php $e= $query['a_ppkn']; ?>
<?php $ee= $query['b_ppkn']; ?>
<?php $f= $query['a_indonesia']; ?>
<?php $ff= $query['b_indonesia']; ?>
<?php $g= $query['a_arab']; ?>
<?php $gg= $query['b_arab']; ?>
<?php $h= $query['a_Matematika_wajib']; ?>
<?php $hh= $query['b_Matematika_wajib']; ?>
<?php $i= $query['a_sejarah_indonesia']; ?>
<?php $ii= $query['b_sejarah_indonesia']; ?>
<?php $j= $query['a_bahasa_inggris']; ?>
<?php $jj= $query['b_bahasa_inggris']; ?>
<?php $k= $query['a_seni_budaya']; ?>
<?php $kk= $query['b_seni_budaya']; ?>
<?php $l= $query['a_penjasorkes']; ?>
<?php $ll= $query['b_penjasorkes']; ?>
<?php $m= $query['a_bahasa_jawa']; ?>
<?php $mm= $query['b_bahasa_jawa']; ?>
<?php $n= $query['a_nu']; ?> 
<?php $nn= $query['b_nu']; ?>
<?php $o= $query['a_qiro']; ?>
<?php $oo= $query['b_qiro']; ?>
<?php $p= $query['a_nahwu']; ?>
<?php $pp= $query['b_nahwu']; ?>
<?php $q= $query['a_kitab_Kuning']; ?>
<?php $qq= $query['b_kitab_Kuning']; ?>
<?php $r= $query['a_matematika_peminatan']; ?>
<?php $rr= $query['b_matematika_peminatan']; ?>
<?php $s= $query['a_biologi']; ?>
<?php $ss= $query['b_biologi']; ?>
<?php $t= $query['a_fisika']; ?>
<?php $tt= $query['b_fisika']; ?>
<?php $u= $query['a_kimia']; ?>
<?php $uu= $query['b_kimia']; ?>
<?php $v= $query['a_informatika']; ?>
<?php $vv= $query['b_informatika']; ?>
<?php $w= $query['a_teknik']; ?>
<?php $ww= $query['b_teknik']; ?>

<?php $total_NP=$a+$b+$c+$d+$e+$f+$g+$h+$i+$j+$k+$l+$m+$n+$o+$p+$q+$r+$s+$t+$u+$v+$w;  ?>
<?php $total_NK=$aa+$bb+$cc+$dd+$ee+$ff+$gg+$hh+$ii+$jj+$kk+$ll+$mm+$nn+$oo+$pp+$qq+$rr+$ss+$tt+$uu+$vv+$ww; ?>
<?php $ttl=$total_NP+$total_NK ?>
<?php $rt=$ttl/46; ?>

<?php $rata=$query['rata']; ?>

  
  <td style="background-color:#bbffb9;color: black;" ><b><div><?php echo number_format($rata,2);  ?></div></b></td>
  <td style="background-color:#bbffb9;color: black;" ><b><div><?php echo $rows;  ?></div></b></td>
  <td style="background-color:#bbffb9;color: black;" ><b style="width: 200px;"><div><a  onclick="return confirm('Apakah yakin menghapus ?')" href='<?php echo base_url('index.php/hapus/?id_nilai=').$query['id_nilai']; ?>'>hapus</a></div></b></td>
  
</tr>
<?php } ?>
</table>
</pre>
</div>

<?php } else if ($kelas=='XII IIB') {
?>

<div class="container">
 <input type="text" id="cari4" onkeyup="myFunction4()" placeholder="CARI NAMA">
<br><br>
<pre>
<table id="search4">

<tr>
  <th style="background-color: white;" class="rotate" rowspan="3"><div>Nama</div></th>
  <th style="background-color: white;" class="rotate" rowspan="3"><div>Kelas</div></th>
  <th style="background-color: white;" colspan ="46">Nilai</th>
  <th style="background-color: white;" class="rotate" rowspan="3"><div>Rata-Rata</div></th>
  <th style="background-color: white;" class="rotate" rowspan="3"><div>Ranking Kelas</div></th>
  <th style="background-color: white;" class="rotate" rowspan="3"><div>Hapus</div></th>
  
</tr>
<tr>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Al-Qur'an Hadist</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Aqidah-Akhlaq</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Fiqih</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Sejarah Kebudayaan</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>PPKN</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Bahasa Indonesia</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Bahasa Arab</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Matematika wajib</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Sejarah Indonesia</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Bahasa Inggris</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Seni Budaya</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Penjasorkes</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Bahasa Jawa</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Ke-NU-an</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div> Qiro`atul Qur`an</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Nahwu Shorof</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Ta'limul Muta'alim</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Matematika Peminatan</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Biologi</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Fisika</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Kimia</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Informatika</div></td>
  <td style="background-color: white;" class="rotate" colspan ="2"><div>Teknik Audio Video</div></td>
  
  
</tr>

<tr>
  
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>
  <td style="width: 20px;background-color: white;" >NP</td>
  <td style="width: 20px;background-color: white;">NK</td>


</tr><?php 
$rows = 0;
$sql = "SELECT * FROM tb_nilai where kelas='$kelas' order by rata desc";
$nilai = mysqli_query($dbcon,$sql);
while ($query=mysqli_fetch_array($nilai)) {
  $rows++;
  
 ?>
<tr>
  <td style="width: 100px;background-color: white;" ><?php echo $query['nama']; ?></td>                  
  <td  style="background-color: white;" ><div><?php echo $query['kelas']; ?></div></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_quran']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_quran']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_akidah']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_akidah']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_fiqih']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_fiqih']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_sejarah_islam']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_sejarah_islam']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_ppkn']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_ppkn']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_indonesia']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_indonesia']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_arab']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_arab']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_Matematika_wajib']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_Matematika_wajib']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_sejarah_indonesia']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_sejarah_indonesia']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_bahasa_inggris']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_bahasa_inggris']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_seni_budaya']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_seni_budaya']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_penjasorkes']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_penjasorkes']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_bahasa_jawa']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_bahasa_jawa']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_nu']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_nu']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_qiro']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_qiro']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_nahwu']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_nahwu']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_kitab_Kuning']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_kitab_Kuning']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_matematika_peminatan']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_matematika_peminatan']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_biologi']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_biologi']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_fisika']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_fisika']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_kimia']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_kimia']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_informatika']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_informatika']; ?></td>                  
  <td style="background-color: #65c368;color:white;"><?php echo $query['a_teknik']; ?></td>                  
  <td style="background-color: #bbffb9;color:black;"><?php echo $query['b_teknik']; ?></td>                  





<?php $a= $query['a_quran']; ?>
<?php $aa= $query['b_quran']; ?>
<?php $b= $query['a_akidah']; ?>
<?php $bb= $query['b_akidah']; ?>
<?php $c= $query['a_fiqih']; ?>
<?php $cc= $query['b_fiqih']; ?>
<?php $d= $query['a_sejarah_islam']; ?>
<?php $dd= $query['b_sejarah_islam']; ?>
<?php $e= $query['a_ppkn']; ?>
<?php $ee= $query['b_ppkn']; ?>
<?php $f= $query['a_indonesia']; ?>
<?php $ff= $query['b_indonesia']; ?>
<?php $g= $query['a_arab']; ?>
<?php $gg= $query['b_arab']; ?>
<?php $h= $query['a_Matematika_wajib']; ?>
<?php $hh= $query['b_Matematika_wajib']; ?>
<?php $i= $query['a_sejarah_indonesia']; ?>
<?php $ii= $query['b_sejarah_indonesia']; ?>
<?php $j= $query['a_bahasa_inggris']; ?>
<?php $jj= $query['b_bahasa_inggris']; ?>
<?php $k= $query['a_seni_budaya']; ?>
<?php $kk= $query['b_seni_budaya']; ?>
<?php $l= $query['a_penjasorkes']; ?>
<?php $ll= $query['b_penjasorkes']; ?>
<?php $m= $query['a_bahasa_jawa']; ?>
<?php $mm= $query['b_bahasa_jawa']; ?>
<?php $n= $query['a_nu']; ?> 
<?php $nn= $query['b_nu']; ?>
<?php $o= $query['a_qiro']; ?>
<?php $oo= $query['b_qiro']; ?>
<?php $p= $query['a_nahwu']; ?>
<?php $pp= $query['b_nahwu']; ?>
<?php $q= $query['a_kitab_Kuning']; ?>
<?php $qq= $query['b_kitab_Kuning']; ?>
<?php $r= $query['a_matematika_peminatan']; ?>
<?php $rr= $query['b_matematika_peminatan']; ?>
<?php $s= $query['a_biologi']; ?>
<?php $ss= $query['b_biologi']; ?>
<?php $t= $query['a_fisika']; ?>
<?php $tt= $query['b_fisika']; ?>
<?php $u= $query['a_kimia']; ?>
<?php $uu= $query['b_kimia']; ?>
<?php $v= $query['a_informatika']; ?>
<?php $vv= $query['b_informatika']; ?>
<?php $w= $query['a_teknik']; ?>
<?php $ww= $query['b_teknik']; ?>

<?php $total_NP=$a+$b+$c+$d+$e+$f+$g+$h+$i+$j+$k+$l+$m+$n+$o+$p+$q+$r+$s+$t+$u+$v+$w;  ?>
<?php $total_NK=$aa+$bb+$cc+$dd+$ee+$ff+$gg+$hh+$ii+$jj+$kk+$ll+$mm+$nn+$oo+$pp+$qq+$rr+$ss+$tt+$uu+$vv+$ww; ?>
<?php $ttl=$total_NP+$total_NK ?>
<?php $rt=$ttl/46; ?>

<?php $rata=$query['rata']; ?>

  
  <td style="background-color:#bbffb9;color: black;" ><b><div><?php echo number_format($rata,2);  ?></div></b></td>
  <td style="background-color:#bbffb9;color: black;" ><b><div><?php echo $rows;  ?></div></b></td>
  <td style="background-color:#bbffb9;color: black;" ><b><div><a onclick="return confirm('Apakah yakin menghapus ?')" href='<?php echo base_url('index.php/hapus/?id_nilai=').$query['id_nilai']; ?>'>hapus</a></div></b></td>
  
</tr>
<?php } ?>
</table>
</pre>
</div>
</div>
<?php } ?> 




<?php 
}
?>
</body>
</html>


<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("cari");
  filter = input.value.toUpperCase();
  table = document.getElementById("search");
  tr = table.getElementsByTagName("tr");
  for (i = 3; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";

        
        
      } else {
        tr[i].style.display = "none";
      }

    }       
  }
}

</script>

<script>
function myFunction1() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("cari1");
  filter = input.value.toUpperCase();
  table = document.getElementById("search1");
  tr = table.getElementsByTagName("tr");
  for (i = 3; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";

        
        
      } else {
        tr[i].style.display = "none";
      }

    }       
  }
}

</script>

<script>
function myFunction2() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("cari2");
  filter = input.value.toUpperCase();
  table = document.getElementById("search2");
  tr = table.getElementsByTagName("tr");
  for (i = 3; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";

        
        
      } else {
        tr[i].style.display = "none";
      }

    }       
  }
}

</script>

<script>
function myFunction3() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("cari3");
  filter = input.value.toUpperCase();
  table = document.getElementById("search3");
  tr = table.getElementsByTagName("tr");
  for (i = 3; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";

        
        
      } else {
        tr[i].style.display = "none";
      }

    }       
  }
}

</script>

<script>
function myFunction4() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("cari4");
  filter = input.value.toUpperCase();
  table = document.getElementById("search4");
  tr = table.getElementsByTagName("tr");
  for (i = 3; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";

        
        
      } else {
        tr[i].style.display = "none";
      }

    }       
  }
}

</script>

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
    font: 14px/20px normal Helvetica, Arial, sans-serif;
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
    margin-left: 150px;
    margin-right: 10px;
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
  font-size: 12px;
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

<p><center><b style="font-size:30px;">Peringkat</b></center></p>

<?php 


$sss=$this->session->userdata('username');
$sqlz = "SELECT * FROM tb_nilai where NISM='$sss' order by rata desc";
$uslll = mysqli_query($dbcon,$sqlz);
while ($query=mysqli_fetch_array($uslll)) { 
$aaa=$query['nama'];
$bbb=$query['kelas'];
$ccc=$query['id_nilai'];


?>
<?php 
$rowslll = 1;
$sqlllll = "SELECT * FROM tb_nilai order by rata desc";
$nilailll = mysqli_query($dbcon,$sqlllll);
while ($queryy=mysqli_fetch_array($nilailll)) {
  
  if ($queryy['nama']!=$aaa) {
    $rowslll++;
  }
  else{
    $rowsslll=$rowslll;
  }


  

 ?>
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
<?php $rata=$ttl/46; ?>
<?php }} ?>

<?php 


$s=$this->session->userdata('username');
$sql = "SELECT * FROM tb_nilai where NISM='$s'";
$us = mysqli_query($dbcon,$sql);
while ($queryl=mysqli_fetch_array($us)) { 
$a=$queryl['nama'];
$b=$queryl['kelas'];

}
?>
<?php 
$rows = 1;
$sqll = "SELECT * FROM tb_nilai where kelas='$b' order by rata desc";
$nilai = mysqli_query($dbcon,$sqll);
while ($queryyl=mysqli_fetch_array($nilai)) {
  
  if ($queryyl['nama']!=$a) {
    $rows++;
  }
  else{
    $rowss=$rows;
  }


  }
 ?>

  <p><b>NISN          : <?php echo $this->session->userdata('username'); ?></b></p>
  <p><b>Nama          : <?php echo $a; ?></b></p>
  <p><b>Kelas          : <?php echo $b; ?></b></p>
  <center><p><b>Nama siswa diatas mendapatkan peringkat ke <?php echo $rowss; ?> di kelas <?php echo $b; ?> dan predikat siswa berprestasi peringkat <?php echo $rowsslll; ?> paralel dengan jumlah nilai <?php echo $ttl;?></b></p></center>
  <center><form method="post" action="<?php echo base_url('index.php/cetak/?id_nilai=').$ccc.'&rows='.$rowsslll.'&rowss='.$rowss; ?>" target="_blank"><?php if($rata>=90){?><button>Cetak</button><?php } ?></form></center>
  <br>
</div>

</body>
</html>

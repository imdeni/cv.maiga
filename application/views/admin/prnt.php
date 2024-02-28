<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include 'onek.php';
    $id = $_GET['k']; 
    

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url('plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- Ionicons -->  
  
  <link rel="shortcut icon" href="<?php echo base_url('images/icon.ico'); ?>">
	<!--Import Google Icon Font-->
    <link href="<?php echo base_url('fonts/material.css'); ?>" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('css/materialize.min.css'); ?>"  media="screen,projection"/>

  <style type="text/css">


  ::selection { background-color: #E13300; color: white; }
  ::-moz-selection { background-color: #E13300; color: white; }

  body {
    background-color: white;
    margin-top:10px; 
    margin-bottom:10px;
    font: 13px/20px normal Helvetica, Arial, sans-serif;
    color: #4F5155;
  }


  a {
    color: #003399;
    background-color: transparent;
    font-weight: normal;
  }

  h1 {
    color: white;
    background-color: transparent;
    font-size: 19px;
    font-weight: normal;

    
  }

  

  table {
    background-color: #333;
    font: 14px normal Helvetica, Arial, sans-serif;
    color: silver;

}
  #container {
    margin: 1px;
  }
  #atas{
    margin-top: 50px;
  }
  #container1{

  	color: white;
  	margin-left: 50px;
  	margin-bottom: 10px;
  	margin-top: 10px;
  	border: 1px solid blue;
    box-shadow: 0 0 8px blue;
  }
  #container2{
  	color: white;
  	margin-right: 50px;
  	margin-bottom: 10px;
  	margin-top: 10px;
  	border: 1px solid blue;
    box-shadow: 0 0 8px blue;
  }


  
  </style>

  <style type="text/css">
    
    img{
      
    }
    .kanan{
  position: absolute;
  top:350px;
  right: 200px;
}
#header{
  padding-left: 300px;
}
    
</style>

</head>


<body onload="window.print()">
      



<div class="col s12 m6 l6" >



    
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                          <img style="position:absolute;top: 20px;left:170px;width: 125px;height: 125px;" src="<?php echo base_url('img/logo_rapor.jpeg') ?>"><br>
                            <h1  style="color:black;font-size: 20px;"><div id="header"><b>YAYASAN AL IRSYAD AL MUBAROK</b></div></h1>
                            <h1  style="color:black;font-size: 20px;"><div id="header"><b>MA KETRAMPILAN "AL IRSYAD" GAJAH-DEMAK</b></div></h1>
                            <h1  style="color:black;font-size: 20px;"><div id="header"><b>TERAKREDITASI A (SKOR: 95)</b></div></h1>
                            <h1  style="color:black;font-size: 16px;"><div id="header"><i>Jalan Raya Gajah-Dempet nomor 11 Gajah Demak 59581 Telepone/Faximile (0291) 4284022</i></div></h1>
                            <h1  style="color:black;font-size: 16px;"><div id="header">Homepage : www.ma-alirsyad.sch.id  & Email : maalirsyad demak@ymail.com</div></h1>
                            <hr style="border-color: black; border-width: 10px;">
                            <br>

<table class="table table-striped" id="search" width="100%">

<tr><th style="background-color: white;color: black;"  ><div>no</div></th>
  <th style="background-color: white;color: black;"  ><div>NIS</div></th>
  <th style="background-color: white;color: black;"  ><div>Nama</div></th>
  <th style="background-color: white;color: black;"  ><div>Kelas</div></th>
  <th style="background-color: white;color: black;"  ><div>Jumlah Nilai Pengetahuan</div></th>
  <th style="background-color: white;color: black;"  ><div>Jumlah Nilai Ketrampilan</div></th>
  <th style="background-color: white;color: black;"  ><div>Rata-Rata</div></th>
  <th style="background-color: white;color: black;"  ><div>Peringkat Kelas</div></th>
<?php if ($id=='p') {
?>
<?php echo '<th style="background-color: white;"  ><div>Peringkat Paralel</div></th>' ?>
<?php
} ?>
  
  
</tr>
<?php 
$noo_MIPA1=1;
$noo_MIPA2=1;
$noo_MIPA3=1;
$noo_IIS1=1;
$noo_IBB=1;
$no=0;
$rows = 0;
if ($id=='p') {
$sql = "SELECT * FROM tb_nilai order by rata desc";
}
else{
$sql = "SELECT * FROM tb_nilai where kelas='$id' order by rata desc";
}
$nilai = mysqli_query($dbcon,$sql);
while ($query=mysqli_fetch_array($nilai)) {
  $rows++;
  $no++;
  
  
 ?>

<tr>

  <td style="color: black;font-weight: bold;" ><b><div><?php echo $no  ?></div></b></td>
  <td  style="color: black;font-weight: bold;" ><div><?php echo $query['NISM']; ?></div></td>
  <td style="width: 100px;color: black;font-weight: bold;" ><?php echo $query['nama']; ?></td>                  
  <td  style="color: black;font-weight: bold;" ><div><?php echo $query['kelas']; ?></div></td>                  
                    





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
  <td style="color: black;font-weight: bold;text-align: center;" ><b><div><?php echo $total_NP  ?></div></b></td>
  <td style="color: black;font-weight: bold;text-align: center;" ><b><div><?php echo $total_NK ?></div></b></td>
  <td style="color: black;font-weight: bold;text-align: center;" ><b><div><?php echo number_format($rata,2);  ?></div></b></td>
  
  <td style="color: black;font-weight: bold;text-align: center;" ><div><?php
$kelass=$query['kelas'];
if ($kelass=='XII MIPA 2') {
  echo $noo_MIPA2;
  $noo_MIPA2++;
}
else if ($kelass=='XII IIS 1') {
  echo $noo_IIS1;
  $noo_IIS1++;
}
else if ($kelass=='XII MIPA 3') {
  echo $noo_MIPA3;
  $noo_MIPA3++;
}
else if ($kelass=='XII MIPA 1') {
  echo $noo_MIPA1;
  $noo_MIPA1++;
}
else if ($kelass=='XII IBB') {
  echo $noo_IBB;
  $noo_IBB++;
}
$abc=$query['id_nilai'];
    ?></div></td>

    <?php if ($id=='p') {
?>
<?php echo '<td><?php echo $rows?></td>' ?>
<?php
} ?>
    
    
  

</tr>
<?php } ?>
</table>
<br><br>
<h1 style="font-size: 16px;padding-left:700px;color:black;">Gajah, <?php echo date('d-m-y'); ?>.</h1>
<h1 style="font-size: 16px;padding-left:700px;color:black;">Kepala Madrasah,</h1>
<img style="margin-left:700px;" src="<?php echo base_url('img/ttd.png') ?>" width="100" height="100">
<h1 style="font-size: 16px;padding-left:700px;color:black;"><u><b>Hj. Amma Khabibah, S.Ag.</b></u></h1>
<h1 style="font-size: 16px;padding-left:700px;color:black;">NIP. xxx</h1>
<!-- <h1 style="font-size: 16px;padding-left:700px;color:black;">NIP. 197602112007101003</h1> -->



  

                            
                       
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->


</div>
</div>








</body>
</html>











<script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo base_url('js/metisMenu.min.js'); ?>"></script>

        <!-- Morris Charts JavaScript -->
        <script src="<?php echo base_url('js/raphael.min.js'); ?>"></script>
        <script src="<?php echo base_url('js/morris.min.js'); ?>"></script>
        <script src="<?php echo base_url('js/morris-data.js'); ?>"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo base_url('js/startmin.js'); ?>"></script>

        
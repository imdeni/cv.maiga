<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include 'onek.php';
    $id = $_GET['id_nilai']; 
    $rows = $_GET['rows']; 

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
<h1  style="color:black;font-size: 22px;"><center><b><u>SURAT KETERANGAN</u></b></center></h1>
<h1  style="color:black;font-size: 18px;"><center>MA.35/11.21/3936/XI/2020</center></h1>
<br>
<h1 style="font-size: 16px;padding-left:70px;color:black;">Yang bertandatangan di bawah ini : </h1>
<h1 style="font-size: 16px;padding-left:100px;color:black;">Nama &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b>Hj. Amma Khabibah, S.Ag.</b></h1>
<!-- <h1 style="font-size: 16px;padding-left:100px;color:black;">NIP &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 197602112007101003</h1> -->
<h1 style="font-size: 16px;padding-left:100px;color:black;">NIP &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp xxx</h1>
<h1 style="font-size: 16px;padding-left:100px;color:black;">Jabatan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Kepala MA Keterampilan Al Irsyad Gajah Demak</h1>
<h1 style="font-size: 16px;padding-left:100px;color:black;">Alamat &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Desa Gajah Kec. Gajah Kab. Demak</h1>
<br>
<h1 style="font-size: 16px;padding-left:70px;color:black;">Dengan ini menerangkan bahwa : </h1>
<?php 
$sql="SELECT * FROM tb_nilai where id_nilai=$id";
$query=mysqli_query($dbcon,$sql);
while ($data=mysqli_fetch_array($query)) {


  # code...

?>


<?php $a= $data['a_quran']; ?>
<?php $aa= $data['b_quran']; ?>
<?php $b= $data['a_akidah']; ?>
<?php $bb= $data['b_akidah']; ?>
<?php $c= $data['a_fiqih']; ?>
<?php $cc= $data['b_fiqih']; ?>
<?php $d= $data['a_sejarah_islam']; ?>
<?php $dd= $data['b_sejarah_islam']; ?>
<?php $e= $data['a_ppkn']; ?>
<?php $ee= $data['b_ppkn']; ?>
<?php $f= $data['a_indonesia']; ?>
<?php $ff= $data['b_indonesia']; ?>
<?php $g= $data['a_arab']; ?>
<?php $gg= $data['b_arab']; ?>
<?php $h= $data['a_Matematika_wajib']; ?>
<?php $hh= $data['b_Matematika_wajib']; ?>
<?php $i= $data['a_sejarah_indonesia']; ?>
<?php $ii= $data['b_sejarah_indonesia']; ?>
<?php $j= $data['a_bahasa_inggris']; ?>
<?php $jj= $data['b_bahasa_inggris']; ?>
<?php $k= $data['a_seni_budaya']; ?>
<?php $kk= $data['b_seni_budaya']; ?>
<?php $l= $data['a_penjasorkes']; ?>
<?php $ll= $data['b_penjasorkes']; ?>
<?php $m= $data['a_bahasa_jawa']; ?>
<?php $mm= $data['b_bahasa_jawa']; ?>
<?php $n= $data['a_nu']; ?> 
<?php $nn= $data['b_nu']; ?>
<?php $o= $data['a_qiro']; ?>
<?php $oo= $data['b_qiro']; ?>
<?php $p= $data['a_nahwu']; ?>
<?php $pp= $data['b_nahwu']; ?>
<?php $q= $data['a_kitab_Kuning']; ?>
<?php $qq= $data['b_kitab_Kuning']; ?>
<?php $r= $data['a_matematika_peminatan']; ?>
<?php $rr= $data['b_matematika_peminatan']; ?>
<?php $s= $data['a_biologi']; ?>
<?php $ss= $data['b_biologi']; ?>
<?php $t= $data['a_fisika']; ?>
<?php $tt= $data['b_fisika']; ?>
<?php $u= $data['a_kimia']; ?>
<?php $uu= $data['b_kimia']; ?>
<?php $v= $data['a_informatika']; ?>
<?php $vv= $data['b_informatika']; ?>
<?php $w= $data['a_teknik']; ?>
<?php $ww= $data['b_teknik']; ?>

<?php $total_NP=$a+$b+$c+$d+$e+$f+$g+$h+$i+$j+$k+$l+$m+$n+$o+$p+$q+$r+$s+$t+$u+$v+$w;  ?>
<?php $total_NK=$aa+$bb+$cc+$dd+$ee+$ff+$gg+$hh+$ii+$jj+$kk+$ll+$mm+$nn+$oo+$pp+$qq+$rr+$ss+$tt+$uu+$vv+$ww; ?>
<?php $ttl=$total_NP+$total_NK ?>

<h1 style="font-size: 16px;padding-left:100px;color:black;">Nama &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b><?php echo $data['nama']; ?></b></h1>
<h1 style="font-size: 16px;padding-left:100px;color:black;">NIS/NISN &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $data['NISM']; ?></h1>
<h1 style="font-size: 16px;padding-left:100px;color:black;">Kelas &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $data['kelas']; ?></h1>

<h1 style="font-size: 16px;padding-left:100px;color:black;">Keterangan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :</h1>
<h1 style="font-size: 16px;padding-left:120px;color:black;">1.  Nama Siswa tersebut di atas benar-benar siswa Madrasah Aliyah Keterampilan  Al Irsyad  Gajah  Demak.</h1>
<h1 style="font-size: 16px;padding-left:120px;color:black;">2. Surat Keterangan ini diberikan karena yang bersangkutan mendapatkan predikat <b>Siswa Berprestasi Peringkat <?php echo $rows; ?> Paralel dengan Jumlah Nilai <?php echo $ttl; ?>.</b></h1>
<br>
<h1 style="font-size: 16px;padding-left:70px;color:black;">Demikian surat keterangan ini dibuat untuk dapat digunakan sebagaimana mestinya.</h1>
<br>
<br>
<br>

<h1 style="font-size: 16px;padding-left:700px;color:black;">Gajah, <?php echo date('d-m-y'); ?>.</h1>
<h1 style="font-size: 16px;padding-left:700px;color:black;">Kepala Madrasah,</h1>
<img style="margin-left:700px;" src="<?php echo base_url('img/ttd.png') ?>" width="100" height="100">
<h1 style="font-size: 16px;padding-left:700px;color:black;"><u><b>Hj. Amma Khabibah, S.Ag.</b></u></h1>
<h1 style="font-size: 16px;padding-left:700px;color:black;">NIP. xxx</h1>
<!-- <h1 style="font-size: 16px;padding-left:700px;color:black;">NIP. 197602112007101003</h1> -->



  

                            
   <?php } ?>                     
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

        
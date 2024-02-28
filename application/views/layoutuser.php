<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<link type="text/css" rel="stylesheet" href="<?php echo base_url('css/materialize.min.css'); ?>"  media="screen,projection"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url('plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- Ionicons -->  
  
    <link href="<?php echo base_url('fonts/material.css'); ?>" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('css/materialize.min.css'); ?>"  media="screen,projection"/>
<style type="text/css">

  ::selection { background-color: #E13300; color: white; }
  ::-moz-selection { background-color: #E13300; color: white; }

  body {
    background-color: #91C7F5;
    font: 18px normal Helvetica, Arial, sans-serif;
    color: #4F5155;
  }
  

  #body {
    margin: 0 0 0 10px;
  }

  #container {
    
    border: 1px solid blue;
    box-shadow: 0 0 8px blue;

  }
  .container{
    width: auto;
    margin-top: 60px;
    margin-left: 130px;
    margin-right: 10px;
  }
  
  #card{
    
    background-color: #bbffb9;
  }
  .card{
    border: 2px solid gray;
    background-color:white;
    position: fixed;
    width: 7000px;
    z-index:2;"
  }
.k{
  border: 2px solid gray;
    width: 130px;
    height: 5000px;
     background-color: #bbffb9;
     position: fixed;
     margin-top: 62px;
     scroll-behavior: smooth;
  }
  .card-action1{
  margin-left:10px;
  }
  
  </style>
<body>
<div class="card" >
<div id="card" >

<div class="card-action">
<div class="ml-auto mr-3">

<p style="margin:5px;"><img src="<?php echo base_url('img/logo_rapor.jpeg') ?>" width="50" height="50"><b style="font-size:18px;margin-left: 10px;">Sistem pemilihan siswa berprestasi MAIGA</b></p>




   
</div>
</div>
</div>    
</div>

<div class="k" >

<div class="card-action1">
<div class="ml-auto mr-3">
<br>
<p><b><a href="<?php echo base_url('index.php/user'); ?>" style="color:black;font-size: 18px;">Beranda</a></b></p>
<p><b><a href="<?php echo base_url('index.php/User/profile') ?>" style="color:black;font-size: 18px;">Profile Siswa</a></b></p>
<p><b><a href="<?php echo base_url('index.php/User/kelas') ?>" style="color:black;font-size: 18px;">Peringkat Kelas</a></b></p>
<p><b><a href="<?php echo base_url('index.php/User/paralel') ?>" style="color:black;font-size: 18px;">Peringkat Paralel</a></b></p>
<p><b><a href="<?php echo base_url('index.php/User/ganti') ?>" style="color:black;font-size: 18px;">Ganti kata sandi</a></b></p>
<p><b><a href="<?php echo base_url('index.php/logout') ?>" style="color:black;font-size: 18px;">Logout</a></b></p>





   

</div>
</div>    
</div>
</body>
</html>
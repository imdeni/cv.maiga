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
    font: 13px/20px normal Helvetica, Arial, sans-serif;
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

  }
  
  #card{
    background-color: #bbffb9;
  }
  .card{
    background-color:white;
  }

  
  </style>
<body>
<div class="card" >
<div id="card" >

<div class="card-action">
<div class="ml-auto mr-3">
<center>
  <a  href="<?php echo base_url('index.php/welcome'); ?>" style="color:black;"> <b>Beranda</b></a> 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <a  href="<?php echo base_url('index.php/nilai'); ?>" style="color:black;"> <b>Data Nilai</b></a> 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <a  href="<?php echo base_url('index.php/Auth/logout'); ?>" style="color:black;"> <b>Logout</b></a> 




   </center>
</div>
</div>
</div>    
</div>
</body>
</html>
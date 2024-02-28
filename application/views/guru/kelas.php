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

<p><center><b style="font-size:24px;">Profile Siswa</b></center></p>

<?php 


$s=$this->session->userdata('username');
$sql = "SELECT * FROM tb_nilai where NISM='$s'";
$us = mysqli_query($dbcon,$sql);
while ($query=mysqli_fetch_array($us)) { 
$a=$query['nama'];
$b=$query['kelas'];

}
?>
<?php 
$rows = 1;
$sqll = "SELECT * FROM tb_nilai where kelas='$b' order by rata desc";
$nilai = mysqli_query($dbcon,$sqll);
while ($queryy=mysqli_fetch_array($nilai)) {
  
  if ($queryy['nama']!=$a) {
    $rows++;
  }
  else{
    $rowss=$rows;
  }


  }
 ?>
<pre>
  <p><b>          NISN          : <?php echo $this->session->userdata('username'); ?></b></p>
  <p><b>          Nama          : <?php echo $a; ?></b></p>
  <p><b>          Kelas          : <?php echo $b; ?></b></p>
  <p><b>          Nama siswa diatas mendapatkan peringkat ke <?php echo $rowss; ?> di kelas <?php echo $b; ?></b></p>
</pre>
</div>

</body>
</html>

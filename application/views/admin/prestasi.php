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
  font-family: "Open Sans", Arial, sans-serif;

}
.tengah{

  text-align: center;

}



	
</style>
<body>
  <div class="lebar">
<br>
<form method="post"><label style="font-weight: bold;font-family: 'Open Sans', Arial, sans-serif;">Silahkan pilih jumlah siswa dengan nilai teratas yang ingin di tampilkan</label>&nbsp<input type="number" name="jml"><button name="submit">Submit</button></form>
<label>Kelas : </label>
<select style="width: 200px;" name="kelasnya" id="cari" onchange="myFunction100();">
   <option data-value="XII MIPA I">XII MIPA 1</option>
   <option data-value="XII MIPA II">XII MIPA 2</option>
   <option data-value="XII MIPA III">XII MIPA 3</option>
   <option data-value="XII MIPA IIS">XII IIS</option>
   <option data-value="XII MIPA IBB">XII IBB</option>
</select>
<label>Jurusan : </label>
<select style="width: 200px;" name="kelasnya" id="cari2" onchange="myFunction200();">
   <option value="MIPA">MIPA</option>
   <option value="IIS">IIS</option>
   <option value="IBB">BAHASA</option>
   
</select>
<?php 
if (isset($_POST['submit'])) { 
$jmlll= $_POST['jml'];
} ?>


<pre>
<table id="search" width="100%">

<tr><th style="background-color: white;"  ><div>no</div></th>
	<th style="background-color: white;"  ><div>NIS</div></th>
	<th style="background-color: white;"  ><div>Nama</div></th>
	<th style="background-color: white;"  ><div>Kelas</div></th>
	<th style="background-color: white;"  ><div>Jumlah Nilai Pengetahuan</div></th>
	<th style="background-color: white;"  ><div>Jumlah Nilai Ketrampilan</div></th>
	<th style="background-color: white;"  ><div>Rata-Rata</div></th>
	<th style="background-color: white;"  ><div>Peringkat Paralel</div></th>
	
  <th style="background-color: white;"  ><div>Status</div></th>
</tr>
<?php 
$noo_MIPA1=0;
$noo_MIPA2=0;
$noo_MIPA3=0;
$noo_IIS1=0;
$noo_IBB=0;
$no=0;
$rows = 0;

$sql = "SELECT * FROM tb_nilai order by rata desc LIMIT 0, $jmlll"; 
$nilai = mysqli_query($dbcon,$sql);
while ($query=mysqli_fetch_array($nilai)) {
	$rows++;
	$no++;
  $kelass=$query['kelas'];
  $abc=$query['id_nilai'];
	
	
 ?>

<tr>

	<td style="background-color:white;color: black;" ><b><div class="tengah"><?php echo $no  ?></div></b></td>
	<td  style="background-color: white;" ><div><?php echo $query['NISM']; ?></div></td>
	<td style="width: 100px;background-color: white;" ><?php echo $query['nama']; ?></td>                  
	<td  style="background-color: white;" ><div><?php echo $query['kelas']; ?></div></td>                  
	                  





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
	<td style="color: black;" ><b><div class="tengah"><?php echo $total_NP  ?></div></b></td>
	<td style="color: black;" ><b><div class="tengah"><?php echo $total_NK ?></div></b></td>
	<td style="color: black;" ><b><div class="tengah"><?php echo number_format($rata,2);  ?></div></b></td>
	<td style="color: black;" ><div class="tengah"><?php echo $rows; ?></div></td>
	<?php if ($kelass=='XII MIPA 2') {
    $noo_MIPA2++;
  ?><td style="color: black;" ><div><?php if($rata>=90){?><a class="btn btn-green btn-ok" onclick="return confirm('Print ?')" href="<?php  echo base_url('index.php/cetak/?id_nilai='.$abc.'&rows='.$rows.'&rowss='.$noo_MIPA2);?>" target="_blank"><b>Cetak</b></a><?php } ?></div></td><?php
}
else if ($kelass=='XII IIS 1') {
  $noo_IIS1++;
  ?><td style="color: black;" ><div><?php if($rata>=90){?><a class="btn btn-green btn-ok" onclick="return confirm('Print ?')" href="<?php  echo base_url('index.php/cetak/?id_nilai='.$abc.'&rows='.$rows.'&rowss='.$noo_MIPA1);?>" target="_blank"><b>Cetak</b></a><?php } ?></div></td><?php
  
}
else if ($kelass=='XII MIPA 3') {
  $noo_MIPA3++;
  ?><td style="color: black;" ><div><?php if($rata>=90){?><a class="btn btn-green btn-ok" onclick="return confirm('Print ?')" href="<?php  echo base_url('index.php/cetak/?id_nilai='.$abc.'&rows='.$rows.'&rowss='.$noo_MIPA3);?>" target="_blank"><b>Cetak</b></a><?php } ?></div></td><?php
  
}
else if ($kelass=='XII MIPA 1') {
  $noo_MIPA1++;
  ?><td style="color: black;" ><div><?php if($rata>=90){?><a class="btn btn-green btn-ok" onclick="return confirm('Print ?')" href="<?php  echo base_url('index.php/cetak/?id_nilai='.$abc.'&rows='.$rows.'&rowss='.$noo_MIPA1);?>" target="_blank"><b>Cetak</b></a><?php } ?></div></td><?php
  
}
else if ($kelass=='XII IBB') {
  $noo_IBB++;
  ?><td style="color: black;" ><div><?php if($rata>=90){?><a class="btn btn-green btn-ok" onclick="return confirm('Print ?')" href="<?php  echo base_url('index.php/cetak/?id_nilai='.$abc.'&rows='.$rows.'&rowss='.$noo_IBB);?>" target="_blank"><b>Cetak</b></a><?php } ?></div></td><?php
  }
     ?>
	

</tr>
<?php } ?>
</table>
</pre>
<br><br>
</div>
</div>

<script>
function myFunction100() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("cari");
  filter = input.value.toUpperCase();
  table = document.getElementById("search");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
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
function myFunction200() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("cari2");
  filter = input.value.toUpperCase();
  table = document.getElementById("search");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
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
  table = document.getElementById("search");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[10];
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
  table = document.getElementById("search");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
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
function myFunction5() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("cari5");
  filter = input.value.toUpperCase();
  table = document.getElementById("search");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[9];
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
</body>
</html>

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
  font-size: 12px;
  text-align: center;

}
table{
	background-color:#eded;
  white-space: nowrap;
  vertical-align: middle;
  width: 20px;
  height: 150px;
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
<p><center><b style="font-size:30px;">Data Nilai Siswa</b></center></p>
<p>Kelas : XII IBB</p>
<pre>
<table id="search">

<tr>

	<th style="background-color: white;" class="rotate" rowspan="3">NIS</th>
	<th style="background-color: white;" class="rotate" rowspan="3">Nama</th>
	<th style="background-color: white;" colspan ="46">Nilai</th>
	<th style="background-color: white;" class="rotate" rowspan="3">Rata-Rata</th>
	<th style="background-color: white;" class="rotate" rowspan="3">Peringkat</th>
	<th style="background-color: white;" class="rotate" rowspan="3">Aksi</th>
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
	
	<td style="width: 20px;background-color: white;" >&nbspNP</td>
	<td style="width: 20px;background-color: white;">&nbspNK</td>
	<td style="width: 20px;background-color: white;" >&nbspNP</td>
	<td style="width: 20px;background-color: white;">&nbspNK</td>
	<td style="width: 20px;background-color: white;" >&nbspNP</td>
	<td style="width: 20px;background-color: white;">&nbspNK</td>
	<td style="width: 20px;background-color: white;" >&nbspNP</td>
	<td style="width: 20px;background-color: white;">&nbspNK</td>
	<td style="width: 20px;background-color: white;" >&nbspNP</td>
	<td style="width: 20px;background-color: white;">&nbspNK</td>
	<td style="width: 20px;background-color: white;" >&nbspNP</td>
	<td style="width: 20px;background-color: white;">&nbspNK</td>
	<td style="width: 20px;background-color: white;" >&nbspNP</td>
	<td style="width: 20px;background-color: white;">&nbspNK</td>
	<td style="width: 20px;background-color: white;" >&nbspNP</td>
	<td style="width: 20px;background-color: white;">&nbspNK</td>
	<td style="width: 20px;background-color: white;" >&nbspNP</td>
	<td style="width: 20px;background-color: white;">&nbspNK</td>
	<td style="width: 20px;background-color: white;" >&nbspNP</td>
	<td style="width: 20px;background-color: white;">&nbspNK</td>
	<td style="width: 20px;background-color: white;" >&nbspNP</td>
	<td style="width: 20px;background-color: white;">&nbspNK</td>
	<td style="width: 20px;background-color: white;" >&nbspNP</td>
	<td style="width: 20px;background-color: white;">&nbspNK</td>
	<td style="width: 20px;background-color: white;" >&nbspNP</td>
	<td style="width: 20px;background-color: white;">&nbspNK</td>
	<td style="width: 20px;background-color: white;" >&nbspNP</td>
	<td style="width: 20px;background-color: white;">&nbspNK</td>
	<td style="width: 20px;background-color: white;" >&nbspNP</td>
	<td style="width: 20px;background-color: white;">&nbspNK</td>
	<td style="width: 20px;background-color: white;" >&nbspNP</td>
	<td style="width: 20px;background-color: white;">&nbspNK</td>
	<td style="width: 20px;background-color: white;" >&nbspNP</td>
	<td style="width: 20px;background-color: white;">&nbspNK</td>
	<td style="width: 20px;background-color: white;" >&nbspNP</td>
	<td style="width: 20px;background-color: white;">&nbspNK</td>
	<td style="width: 20px;background-color: white;" >&nbspNP</td>
	<td style="width: 20px;background-color: white;">&nbspNK</td>
	<td style="width: 20px;background-color: white;" >&nbspNP</td>
	<td style="width: 20px;background-color: white;">&nbspNK</td>
	<td style="width: 20px;background-color: white;" >&nbspNP</td>
	<td style="width: 20px;background-color: white;">&nbspNK</td>
	<td style="width: 20px;background-color: white;" >&nbspNP</td>
	<td style="width: 20px;background-color: white;">&nbspNK</td>
	<td style="width: 20px;background-color: white;" >&nbspNP</td>
	<td style="width: 20px;background-color: white;">&nbspNK</td>


</tr><?php 
$rows = 0;
$sql = "SELECT * FROM tb_nilai where kelas='XII IBB' order by rata desc";
$nilai = mysqli_query($dbcon,$sql);
while ($query=mysqli_fetch_array($nilai)) {
	$rows++;
	
 ?>
<tr>
	<td  style="background-color: white;" ><div><?php echo $query['NISM']; ?></div></td>
	<td style="width: 100px;background-color: white;text-align: left;" ><?php echo $query['nama']; ?></td>                                    
	<td style="background-color: #808080;color:white;"><?php echo $query['a_quran']; ?></td>                  
	<td style="background-color: #D3D3D3;color:black;"><?php echo $query['b_quran']; ?></td>                  
	<td style="background-color: #808080;color:white;"><?php echo $query['a_akidah']; ?></td>                  
	<td style="background-color: #D3D3D3;color:black;"><?php echo $query['b_akidah']; ?></td>                  
	<td style="background-color: #808080;color:white;"><?php echo $query['a_fiqih']; ?></td>                  
	<td style="background-color: #D3D3D3;color:black;"><?php echo $query['b_fiqih']; ?></td>                  
	<td style="background-color: #808080;color:white;"><?php echo $query['a_sejarah_islam']; ?></td>                  
	<td style="background-color: #D3D3D3;color:black;"><?php echo $query['b_sejarah_islam']; ?></td>                  
	<td style="background-color: #808080;color:white;"><?php echo $query['a_ppkn']; ?></td>                  
	<td style="background-color: #D3D3D3;color:black;"><?php echo $query['b_ppkn']; ?></td>                  
	<td style="background-color: #808080;color:white;"><?php echo $query['a_indonesia']; ?></td>                  
	<td style="background-color: #D3D3D3;color:black;"><?php echo $query['b_indonesia']; ?></td>                  
	<td style="background-color: #808080;color:white;"><?php echo $query['a_arab']; ?></td>                  
	<td style="background-color: #D3D3D3;color:black;"><?php echo $query['b_arab']; ?></td>                  
	<td style="background-color: #808080;color:white;"><?php echo $query['a_Matematika_wajib']; ?></td>                  
	<td style="background-color: #D3D3D3;color:black;"><?php echo $query['b_Matematika_wajib']; ?></td>                  
	<td style="background-color: #808080;color:white;"><?php echo $query['a_sejarah_indonesia']; ?></td>                  
	<td style="background-color: #D3D3D3;color:black;"><?php echo $query['b_sejarah_indonesia']; ?></td>                  
	<td style="background-color: #808080;color:white;"><?php echo $query['a_bahasa_inggris']; ?></td>                  
	<td style="background-color: #D3D3D3;color:black;"><?php echo $query['b_bahasa_inggris']; ?></td>                  
	<td style="background-color: #808080;color:white;"><?php echo $query['a_seni_budaya']; ?></td>                  
	<td style="background-color: #D3D3D3;color:black;"><?php echo $query['b_seni_budaya']; ?></td>                  
	<td style="background-color: #808080;color:white;"><?php echo $query['a_penjasorkes']; ?></td>                  
	<td style="background-color: #D3D3D3;color:black;"><?php echo $query['b_penjasorkes']; ?></td>                  
	<td style="background-color: #808080;color:white;"><?php echo $query['a_bahasa_jawa']; ?></td>                  
	<td style="background-color: #D3D3D3;color:black;"><?php echo $query['b_bahasa_jawa']; ?></td>                  
	<td style="background-color: #808080;color:white;"><?php echo $query['a_nu']; ?></td>                  
	<td style="background-color: #D3D3D3;color:black;"><?php echo $query['b_nu']; ?></td>                  
	<td style="background-color: #808080;color:white;"><?php echo $query['a_qiro']; ?></td>                  
	<td style="background-color: #D3D3D3;color:black;"><?php echo $query['b_qiro']; ?></td>                  
	<td style="background-color: #808080;color:white;"><?php echo $query['a_nahwu']; ?></td>                  
	<td style="background-color: #D3D3D3;color:black;"><?php echo $query['b_nahwu']; ?></td>                  
	<td style="background-color: #808080;color:white;"><?php echo $query['a_kitab_Kuning']; ?></td>                  
	<td style="background-color: #D3D3D3;color:black;"><?php echo $query['b_kitab_Kuning']; ?></td>                  
	<td style="background-color: #808080;color:white;"><?php echo $query['a_matematika_peminatan']; ?></td>                  
	<td style="background-color: #D3D3D3;color:black;"><?php echo $query['b_matematika_peminatan']; ?></td>                  
	<td style="background-color: #808080;color:white;"><?php echo $query['a_biologi']; ?></td>                  
	<td style="background-color: #D3D3D3;color:black;"><?php echo $query['b_biologi']; ?></td>                  
	<td style="background-color: #808080;color:white;"><?php echo $query['a_fisika']; ?></td>                  
	<td style="background-color: #D3D3D3;color:black;"><?php echo $query['b_fisika']; ?></td>                  
	<td style="background-color: #808080;color:white;"><?php echo $query['a_kimia']; ?></td>                  
	<td style="background-color: #D3D3D3;color:black;"><?php echo $query['b_kimia']; ?></td>                  
	<td style="background-color: #808080;color:white;"><?php echo $query['a_informatika']; ?></td>                  
	<td style="background-color: #D3D3D3;color:black;"><?php echo $query['b_informatika']; ?></td>                  
	<td style="background-color: #808080;color:white;"><?php echo $query['a_teknik']; ?></td>                  
	<td style="background-color: #D3D3D3;color:black;"><?php echo $query['b_teknik']; ?></td>                  





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

	
	<td style="background-color:#D3D3D3;color: black;" ><b><div><?php echo number_format($rata,2);  ?></div></b></td>
	<td style="background-color:#D3D3D3;color: black;" ><b><div><?php echo $rows;  ?></div></b></td>
	<td style="background-color:#D3D3D3;color: black;" ><b><div><a class="btn btn-green btn-ok" onclick="return confirm('Edit ?')" href="<?php  echo base_url('index.php/edit/?n=').$query['nama'].'&k='.$query['kelas'];?>" ><b>Edit</b></a><a class="btn btn-green btn-ok" onclick="return confirm('Hapus ?')" href="<?php  echo base_url('index.php/hapus/?n=').$query['nama'].'&k='.$query['kelas'];?>" ><b>Hapus</b></a></div></b></td>
</tr>
<?php } ?>
</table>
</pre>
</div>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("cari");
  filter = input.value.toUpperCase();
  table = document.getElementById("search");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
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
  table = document.getElementById("search");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[8];
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

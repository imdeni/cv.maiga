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
  font-size: 20px;
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

<p><center><b style="font-size:30px;">Ganti sandi</b></center></p>
<center>
<pre>
  
<table id="search">
<form method="post">
<tr>
	<th style="background-color: white;font-size: 20px;">NIS/Username</th>
	<td><?php echo $this->session->userdata('username'); ?></td>
</tr>
<tr>
	<th style="background-color: white;">New Password</th>
	<td><input type="password" name="password"></td>
</tr>
	
	<td><button style="width:155px;background-color: #bbffb9;" name="simpan">Simpan</button></td>
</tr>
</form>
	<?php
  if (isset($_POST['simpan'])) {
?>
<?php $username=$this->session->userdata('username');
			$password=$_POST['password'] ?>

<?php 
 $sqli="UPDATE user SET password='$password' where username='$username' ";

  $queryy=mysqli_query($dbcon,$sqli);
  if ($queryy) {
    echo "<script>alert('berhasil diganti');
        </script>" ;
    # code...
  }else{
    echo "<script>alert('gagal diaganti');
        </script>" ;
  }

?>

<?php } ?>

</table>
</pre>
</center>
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

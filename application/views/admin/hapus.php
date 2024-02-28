<?php
	
	include 'onek.php';

	if (isset($_GET['n'])) {
		
		$id = $_GET['n'];

		mysqli_query($dbcon,"DELETE FROM tb_nilai WHERE nama='$id'");
		echo "<script>confirm('berhasil menghapus');
		window.location.href='reload';
		</script>";

	}else{
		echo "<h1>Gagal Hapus</h1>";
	}

?>
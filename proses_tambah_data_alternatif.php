<?php
	include('koneksi.php');
	include('cek_login.php');
	
	if(isset ($_POST["no_spt"]) && isset ($_POST["klasifikasi"])){
		$sql_tambah_data_alternatif = "INSERT INTO alternatif (id_wilayah, no_spt, klasifikasi) VALUES ('".$_SESSION['id_wilayah']."','". $_POST['no_spt']. "', '" .$_POST['klasifikasi']. "') ";
		$hasil = mysql_query($sql_tambah_data_alternatif) or die(mysql_error());
		
		if($hasil == 0){
			header("Location:tambah_data_alternatif.php");
		} else {
			// header("Location:data_alternatif.php");
			?>
				<script language="javascript">
					alert("Berhasil! Data Alternatif telah ditambahkan");
					document.location.href = "data_alternatif.php";
				</script>
			<?php	
			
		}
	}
?>
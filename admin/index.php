<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
			<img src="foto1.jpeg">
					<div class="jumbotron">
						<h2>welcome to eca preloved ( <?php echo $_SESSION['username'];?> )</h2>
						<p>website admin </p>
						<p><a class="btn btn-warning btn-lg" href="tampil-mahasiswa.php" role="button">data penjualan</a>
						<a class="btn btn-danger btn-lg" href="tampil-user.php"role="button">User</a></p>
				</div>
      </div>
		</div>
</div><!-- Akhir Jumbotron -->
<?php include "footer.php";?>
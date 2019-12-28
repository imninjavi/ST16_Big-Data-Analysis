<!DOCTYPE html>
<html>
<head>
	<title>BAGIAN TUBUH YANG SAKIT MAHASISWA STSN</title>
	<script type="text/javascript" src="chartjs/Chart.js"></script>
</head>
<body>
	<style type="text/css">
	body{
		font-family: roboto;
	}

	table{
		margin: 0px auto;
	}
	</style>


	<center>
		<h2>BAGIAN TUBUH YANG SAKIT MAHASISWA STSN</h2>
	</center>


	<?php 
	include 'koneksi2.php';
	?>

	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>

	<br/>
	<br/>

	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["tangan", "kaki", "perut", "kepala"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_teknik = mysqli_query($conn,"SELECT * FROM penyakit WHERE penyakit='tangan'");
					echo mysqli_num_rows($jumlah_teknik);
					?>, 
					<?php 
					$jumlah_ekonomi = mysqli_query($conn,"SELECT * FROM penyakit WHERE penyakit='kaki'");
					echo mysqli_num_rows($jumlah_ekonomi);
					?>, 
					<?php 
					$jumlah_fisip = mysqli_query($conn,"SELECT * FROM penyakit WHERE penyakit='perut'");
					echo mysqli_num_rows($jumlah_fisip);
					?>, 
					<?php 
					$jumlah_pertanian = mysqli_query($conn,"SELECT * FROM penyakit WHERE penyakit='kepala'");
					echo mysqli_num_rows($jumlah_pertanian);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</body>
</html>
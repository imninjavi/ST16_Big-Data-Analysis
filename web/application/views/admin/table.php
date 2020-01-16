<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<!-- <div class="card-header">
						<a href="  <?php // echo site_url('admin') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div> -->
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Country</th>
										<th>Year</th>
										<th>Sex</th>
										<th>Population</th>
										<th>Generation</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($bdata as $bd): ?>
									<tr>
										<td width="150">
											<?php echo $bd->country ?>
										</td>
										<td>
											<?php echo $bd->year ?>
										</td>
										<td width="64">
											<?php echo $bd->sex?>
										</td>
										<td>
                                            <?php echo $bd->population ?>
                                        </td>
										<td width="250">
											<?php echo $bd->generation ?>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
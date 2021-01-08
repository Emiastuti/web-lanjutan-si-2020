<!DOCTYPE html>
<html>
<head>

		<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">

	<title>login</title>
</head>
<body>

	<div class="container mt-5">
		<div class="col-md-4">
			<div class="card">
				<div class="card-header">
					Form Login
				</div>
				<div class="card-body">
					<?php if ($this->session->flashdata('pesan')){?>
						<div class="alert alert-danger">
							<?php echo $this->session->flashdata('pesan');?>
						</div>
						<?php } ?>

					

					<form action="<?= site_url('Login/proses')?>" method="post">

						<div class="form-group">
							<label for="">username</label>
							<input type="text" name="txtusername"
							        class="form-control">

						 </div>

						<div class="form-group">
							<label for="">password</label>
							<input type="password" name="txtpassword"
							        class="form-control">

							
						</div>
						<input type="submit" class="btn btn-primary">
						
					</form>
					
				</div>
			</div>
		</div>
		
	</div>

</body>
</html>
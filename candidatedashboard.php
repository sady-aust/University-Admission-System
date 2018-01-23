<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

	<style media="">
	fieldset.fsStyle {
		border: 1px solid #999999;
		padding: 4px;
		margin: 5px;

	}
	legend.legendStyle {
		font-size: 90%;
		color: #888888;
		background-color: transparent;
		font-weight: bold;
	}

	legend {
		width: auto;
		border-bottom: 0px;
	}

	tr{
		align: center;
	}
</style>

</head>

<body>
	<div class="container">

		<div class="row">
			<div class="col-sm-12">

				<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
					<!-- Brand/logo -->
					<a class="navbar-brand" href="#">University Admission System</a>

					<!-- Links -->
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="#">Home</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#">Notice</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">About Us</a>
						</li>
					</ul>

					<ul class="nav navbar-nav ml-auto">
						<li class="nav-item">
							<a href="#" class="nav-link">
								Admin
							</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>

	<div class="formBorder" style="border:1px solid black;">
		<div class="row formheading">
			<div class="col-sm-12">
				<h5>Candidate's Dashboard</h5>

			</div>
		</div>
		<div class="container">
			<fieldset class="fsStyle">
				<legend class= "legendStyle">Hi Hijibiji</legend>
				<div class="row">
					<div class="table-responsive col-sm-6">
						<table>
							<tr>
								<td>
									<label for="">Application Serial No</label>
								</td>
								<td>
									<p>------------</p>
								</td>
							</tr>
							<tr>
								<td>
									<label for="">Applicant's Name</label>
								</td>
								<td>
									<p>----------------</p>
								</td>
							</tr>
							<tr>
								<td>
									<label for="">Father's Name</label>
								</td>
								<td>
									<p>----------------</p>
								</td>
							</tr>
							<tr>
								<td>
									<label for="">Mother's Name</label>
								</td>
								<td>
									<p>----------------</p>
								</td>
							</tr>
							<tr>
								<td>
									<label for="">Date Of Birth</label>
								</td>
								<td>
									<p>----------------</p>
								</td>
							</tr>
						</table>
					</div>

					<div class="table-responsive col-sm-6">
						<table>
							<tr>

								<div class="row">
									<div class="col-sm-4">
										
									</div>
									<div>
										
											<img class="applicantimgae" src="images/p1.png" alt="image" width="200" height="250">
										
									</div>
								</div>
							</tr>
							<tr>
								<div class="row">
									<div class="col-sm-4">
										
									</div>
									<div class="signature">
										
									</div>
								</div>
							</tr>
						</table>
					</div>
				</div>

			</fieldset>
			<fieldset class="fsStyle">
				<legend class= "legendStyle">Application Status</legend>
				<div class="row">
					<div class="table-responsive col-sm-12">
						<table class="table table-bordered">
							<thead class="thead-light">
								<th>Application Form</th>
								<th>Payment</th>
								<th>Application Received</th>
								<th>Admit Card</th>
								<th>Result</th>
							</thead>
							<tbody>
								<tr>
									<td>
										<button class="btn btn-warning">Not Complete</button>
									</td>
									<td>
										<button class="btn btn-warning">Not Complete</button>
									</td>
									<td>
										<button class="btn btn-warning">Not Complete</button>
									</td>
									<td>
										<button class="btn btn-warning">Not Complete</button>
									</td>
									<td>
										<button class="btn btn-warning">Not Complete</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>

					
				</div>

			</fieldset>


		</div>
	</div>


	<div class="row">
		<div class="container footer col-sm-12">
			<p class="text-muted">&copyRight AUST CSE3100 Project</p>
		</div>
	</div>



</div>
</body>
</html>

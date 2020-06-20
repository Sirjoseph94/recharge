
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Air Time</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Uchenna Anya">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="./public/css/index.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
	</head>
	<body>
		<header>
			<div >
				<img class="logodiv" src="./public/images/hnglogo.png" alt="hnglogo">
			</div>
			<nav></nav>
		</header>
		<div class="container">
			<div class="row">
				<div class="col-md-12 title">
					<h1 class="">TOP&nbsp;UP<span class="hng">&nbsp;HNG&nbsp;INTERNS</span></h1>
					<h6>Send mobile recharge card to any of the intern on any of the tracks</h6>
				</div>
			</div>
		</div>
		<div class="container">
			<h4 class="q">Who would you like to top up </h4>
			<div class="row inputs-div">
				<div class="col-md-1" style="border:none;"></div>
				<div class="col-md-3">
					<p>Name/Track</p>
					<span class="initials">AA</span>
					<select name="username" class="user">

						<option value="username">Daniel<i class="fa fa-arow-down"></i></option>
						<option value="username">Kosiben<i class="fa fa-arow-down"></i></option>
						<option value="username">Joseph<i class="fa fa-arow-down"></i></option>
					</select>
					<i class="fa fa-user"></i>
					<hr class="hruser">
				</div>
				<form action="process_entry.php" method="post"></form>
				<div class="col-md-2 ">
					<p>Enter&nbsp;recipient&nbsp;phone&nbsp;number</p>
					<span class="phone-number">+234</span><input type="text" name="phone-number" class="phone">
					<hr class="hrphone">
				</div>
				<div class="col-md-2">
					<p>Amount</p>
					<span class="amount">N</span><input type="text" name="amount" class="amt">
					<hr class="hramt">
				</div>
				<div class="col-md-1">
					<p>Network</p>
					<select name="network" class="network">
						<option value="mtn">MTN</option>
						<option value="airtel">Airtel</option>
						<option value="9mobile">9mobile</option>
						<option value="glo">glo</option>
					</select>
					<hr class="hrnetwork">
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4 buttons">
						<input type="button" name="top-up" value="RECHARGE">
					</div>
				</div>
			</div>
</form>
			<div class="container">
				<div class="row title-table">
					<div class="col-md-12">
						<h1><span class="hng">HNG </span> ACTIVEINTERNS</h1>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row table">
					<div class="col-md-12 table-responsive">
						<table class="table" id="tbody">
							<tr>
								<th>Name</th>
								<th>Track</th>
								<th>Slack&nbsp;Username</th>
								
							</tr>
							<tr>
								<td>Joseph</td>
								<td>Backend</td>
								<td>Sirjoseph94</td>
							</tr>
							<tr>
								<td>Daniel</td>
								<td>Design</td>
								<td>Daniel2code</td>
							</tr>
							<tr>
								<td>Kosiben</td>
								<td>Design</td>
								<td>Kosiben</td>
							</tr>
								
						</table>
					</div>
				</div>
			</div>
		
			<div class="container">
				<div class="row">
					<div class="col-md-12 buttons">
						<input type="button" name="add-intern" value="ADD MORE INTERNS">
					</div>
				</div>
			</div>
			
		</div>
		<script type="text/javascript" src="./public/js/index.js"></script>
	</body>
</html>

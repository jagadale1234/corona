<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'links/link.php';?>
	<?php include 'css/styles.php';?>
</head>
<body>
	<nav class="navbar navbar-expand-lg nav p-4">
  <a class="navbar-brand pl-5" href="index.php">Covid-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="about.php#sympid">Symptoms and Precautions </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="about.php#covidid">Covid Quiz </a>
      </li>
  </ul>
</div>
</nav>


<div class="main-header">
	<div class="row w-100 h-100">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="images/coronacell.png" height=300 width=300>
			</div>
		</div>

		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
			<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
				<h1>Lets stay safe and fight against Corona Virus: "Jaan hai toh Jahan hai"</h1>
			</div>
		</div>
	</div>
</div>





<!--///////////////////// Corona Latest Upadates\\\\\\\\\\\\\\\\-->
<section class="corona-updates">
	<div class="my-3">
		<h3 class="text-center">Covid-19 Updates (State Wise)</h3>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-striped text-center mt-5">
			<tr>
				<th>Updated</th>
				<th>States</th>
				<th>Confirmed Cases</th>
				<th>Active Cases</th>
				<th>Recovered Cases</th>
				<th>Deaths</th>
			</tr>

			<?php
				$data = file_get_contents('https://api.covid19india.org/data.json');
				$coronaupdates=json_decode($data,true);

				$statescount=count($coronaupdates['statewise']);
				$i=1;
				
				while($i < $statescount){
					
					?>
					<tr>
					<td><?php echo $coronaupdates['statewise'][$i]['lastupdatedtime'];?></td>
					<td><?php echo $coronaupdates['statewise'][$i]['state']; ?></td>
					<td><?php echo $coronaupdates['statewise'][$i]['confirmed'];?></td>
					<td><?php echo $coronaupdates['statewise'][$i]['active']; ?></td>
					<td><?php echo $coronaupdates['statewise'][$i]['recovered'];?></td>
					<td><?php echo $coronaupdates['statewise'][$i]['deaths'];?></td>
				</tr>
					<?php
					$i++;

				}
			?>
		</table>
	</div>
</section>


<footer class="mt-5 footer-style">
  <div class="text-center container-fluid justify-content-center">
    <p>Copyright By Anish Jagadale</p>
  </div>

  <div class="col-lg-5 col-md-5 col-12 offset-lg-1">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="about.php#sympid">Symptoms and Preventions</a></li>
      <li><a href="about.php#covidid">Covid Quiz</a></li>
    </ul>
  </div>
</footer>

</body>
</html>
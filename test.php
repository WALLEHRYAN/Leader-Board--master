<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "registration";
// Create connection
$conn = mysqli_connect ($host, $dbusername, $dbpassword, $dbname);
$sql = "SELECT * FROM `players`";
$run = mysqli_query($conn,$sql) or die(mysqli_connect_error());
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Leader Board </title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="wrapper">
	<div class="lboard_section">
		<div class="lboard_tabs">
			<div class="tabs">
				<ul>
					<li data-li="today">Today</li>
					<li class="active" data-li="month">Month</li>
					<li data-li="year">Year</li>
				</ul>
			</div>
		</div>
		<?php
		while ($row=mysqli_fetch_assoc($run)) {
			?>
			<div class="lboard_wrap">
			<div class="lboard_item today" style="display: none;">
				<div class="lboard_mem">
					
					<div class="img">
						<img src="pic_1.png" alt="picture_1">
					</div>
					<div class="name_bar">
						<p><span>1.</span> ryan walleh</p>
						<div class="bar_wrap">
							<div class="inner_bar" style="width: 95%"></div>
						</div>
					</div>
					<div class="points">
						195 points
					</div>	
				</div>
				<?php
		}
		
		?>
				<div class="lboard_mem">
					<div class="img">
						<img src="pic_2.png" alt="picture_2">
					</div>
					<div class="name_bar">
						<p><span>2.</span>Alex Mike</p>
						<div class="bar_wrap">
							<div class="inner_bar" style="width: 80%"></div>
						</div>
					</div>
					<div class="points">
						185 points
					</div>
				</div>
				<div class="lboard_mem">
					<div class="img">
						<img src="pic_3.png" alt="picture_2">
					</div>
					<div class="name_bar">
						<p><span>3.</span>Johnson</p>
						<div class="bar_wrap">
							<div class="inner_bar" style="width: 60%;"></div>
						</div>
					</div>
					<div class="points">
						160 points
					</div>
				</div>
				<div class="lboard_mem">
					<div class="img">
						<img src="pic_4.png" alt="picture_1">
					</div>
					<div class="name_bar">
						<p><span>4.</span>Rosey</p>
						<div class="bar_wrap">
							<div class="inner_bar" style="width: 30%"></div>
						</div>
					</div>
					<div class="points">
						130 points
					</div>
				</div>
				<div class="lboard_mem">
					<div class="img">
						<img src="pic_5.png" alt="picture_2">
					</div>
					<div class="name_bar">
						<p><span>5.</span>Scarlett Angela</p>
						<div class="bar_wrap">
							<div class="inner_bar" style="width: 10%"></div>
						</div>
					</div>
					<div class="points">
						110 points
					</div>
				</div>
			</div>
			<div class="lboard_item month" style="display: block;">
				<div class="lboard_mem">
					<div class="img">
						<img src="pic_2.png" alt="picture_2">
					</div>
					<div class="name_bar">
						<p><span>1.</span> Alex Mike</p>
						<div class="bar_wrap">
							<div class="inner_bar" style="width: 95%"></div>
						</div>
					</div>
					<div class="points">
						1195 points
					</div>
				</div>
				<div class="lboard_mem">
					<div class="img">
						<img src="pic_3.png" alt="picture_3">
					</div>
					<div class="name_bar">
						<p><span>2.</span>Johnson</p>
						<div class="bar_wrap">
							<div class="inner_bar" style="width: 80%"></div>
						</div>
					</div>
					<div class="points">
						1185 points
					</div>
				</div>
				<div class="lboard_mem">
					<div class="img">
						<img src="pic_1.png" alt="picture_1">
					</div>
					<div class="name_bar">
						<p><span>3.</span>Charles John</p>
						<div class="bar_wrap">
							<div class="inner_bar" style="width: 70%;"></div>
						</div>
					</div>
					<div class="points">
						1160 points
					</div>
				</div>
				<div class="lboard_mem">
					<div class="img">
						<img src="pic_5.png" alt="picture_5">
					</div>
					<div class="name_bar">
						<p><span>4.</span>Scarlett Angela</p>
						<div class="bar_wrap">
							<div class="inner_bar" style="width: 50%"></div>
						</div>
					</div>
					<div class="points">
						1130 points
					</div>
				</div>
				<div class="lboard_mem">
					<div class="img">
						<img src="pic_4.png" alt="picture_4">
					</div>
					<div class="name_bar">
						<p><span>5.</span>Rosey</p>
						<div class="bar_wrap">
							<div class="inner_bar" style="width: 30%"></div>
						</div>
					</div>
					<div class="points">
						1110 points
					</div>
				</div>
			</div>
			<div class="lboard_item year" style="display: none;">
				<div class="lboard_mem">
					<div class="img">
						<img src="pic_5.png" alt="picture_5">
					</div>
					<div class="name_bar">
						<p><span>1.</span>Scarlett Angela</p>
						<div class="bar_wrap">
							<div class="inner_bar" style="width: 90%"></div>
						</div>
					</div>
					<div class="points">
						2195 points
					</div>
				</div>
				<div class="lboard_mem">
					<div class="img">
						<img src="pic_4.png" alt="picture_4">
					</div>
					<div class="name_bar">
						<p><span>2.</span>Rosey</p>
						<div class="bar_wrap">
							<div class="inner_bar" style="width: 85%"></div>
						</div>
					</div>
					<div class="points">
						2185 points
					</div>
				</div>
				<div class="lboard_mem">
					<div class="img">
						<img src="pic_3.png" alt="picture_3">
					</div>
					<div class="name_bar">
						<p><span>3.</span>Johnson</p>
						<div class="bar_wrap">
							<div class="inner_bar" style="width: 65%;"></div>
						</div>
					</div>
					<div class="points">
						2160 points
					</div>
				</div>
				<div class="lboard_mem">
					<div class="img">
						<img src="pic_1.png" alt="picture_1">
					</div>
					<div class="name_bar">
						<p><span>4.</span>Charles John</p>
						<div class="bar_wrap">
							<div class="inner_bar" style="width: 30%"></div>
						</div>
					</div>
					<div class="points">
						2130 points
					</div>
				</div>
				<div class="lboard_mem">
					<div class="img">
						<img src="pic_2.png" alt="picture_2">
					</div>
					<div class="name_bar">
						<p><span>5.</span>Alex Mike</p>
						<div class="bar_wrap">
							<div class="inner_bar" style="width: 10%"></div>
						</div>
					</div>
					<div class="points">
						2110 points
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	

<script src="scripts.js"></script>
</body>
</html>
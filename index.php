<!DOCTYPE HTML>
<!--
	Typify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Credit Calculator</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />


		<!--link href="../static/css/search.css" rel="stylesheet" /-->
		<!--link rel="icon" type="image/png" href="../static/images/icons/favicon.ico"/-->
		<!--link rel="stylesheet" type="text/css" href="../static/vendor/bootstrap/css/bootstrap.min.css"-->
		<!--link rel="stylesheet" type="text/css" href="../static/fonts/font-awesome-4.7.0/css/font-awesome.min.css"-->
		<!--link rel="stylesheet" type="text/css" href="../static/vendor/animate/animate.css"-->
		<!--link rel="stylesheet" type="text/css" href="../static/vendor/perfect-scrollbar/perfect-scrollbar.css"-->
		<!--link rel="stylesheet" type="text/css" href="../static/css/util.css"-->
		<!--link rel="stylesheet" type="text/css" href="../static/css/main.css"-->

	</head>
	<body>

		<!-- Banner -->
			<section id="banner">
				<br /><br /><br />
				<h2 style="text-transform:capitalize;">NTU Credit Calculator</h2>
				<p style="text-transform:capitalize;">
				<font size="3">
				Powered by NTU CSIE
				</font>
				</p>
				<br /><br /><br /><br /><br /><br /><br />
				<ul class="actions">
					<li><a href="#two" class="button special">Submit url</a></li>
					<li><a href="#one" class="button special">tutorial</a></li>
				</ul>
			</section>

			<section id="two" class="wrapper style2 special">
				<div class="inner narrow">
					<header>
						<h2>Submit URL</h2>
					</header>
					<form class="grid-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>#two">
						<div class="form-control">
							<input name="name" id="name" type="text" placeholder="輸入你的修課檢視連結">
						</div>
						<ul class="actions">
							<li><input value="Submit" type="submit"></li>
						</ul>
					</form>
					
					<?php
					$cmd="python test.py ".$_POST['name'];
					$handle=popen($cmd,"r");
					$data=fread($handle,4096);
					echo "$data";
					pclose($handle);
					?>
				</div>
					
					<table>
						<caption>相差學分數</caption>
						<thead>
							<tr>
								<th>通識</th>
								<th>選修</th>
								<th>必修</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>15</th>
								<th>20</th>
								<th>25</th>
							</tr>
						</thead>
					</table>

					<br /><br />
					<br /><br />
					<br /><br />
					<br /><br />
					<br /><br />
					<br /><br />
					<br /><br />
					<br /><br />

			</section>


		<!-- One -->
			<section id="one" class="wrapper special">
				<div class="inner">
					<header class="major">
						<h2>Tutorial</h2>
					</header>
					<div class="features">
						<div class="feature">
							<i class="fa fa-diamond"></i>
							<h3 >Step 1</h3>
							<p>登入<a href="https://if163.aca.ntu.edu.tw/eportfolio/">NTU E-po</a></p>
						</div>
						<div class="feature">
							<i class="fa fa-copy"></i>
							<h3>Step 2</h3>
							<p>點選修課檢視-進入修課檢視系統</p>
						</div>
						<div class="feature">
							<i class="fa fa-save"></i>
							<h3>Step 3</h3>
							<p>將網址填入上方欄位中</p>
						</div>
					</div>
				</div>
				<div class="copyright">
					&copy; Untitled. Design: <a href="http://templated.co/">TEMPLATED</a>.
				</div>
			</section>

	</body>
</html>

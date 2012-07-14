<html>
<head>
	<title>Gravity Library - Main Page</title>
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
	<script src='http://static.gravity-groups.com/js/bootstrap.min.js'></script>
	<link rel='stylesheet' type='text/css' href='http://static.gravity-groups.com/css/bootstrap.min.css' />
	<link rel='stylesheet' type='text/css' href='http://static.gravity-groups.com/css/bootstrap-responsive.min.css' />
	<style type='text/css'>
	body{
		padding-top: 60px;
		padding-bottom: 40px;
		margin: 0;
		font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
		font-size: 13px;
		line-height: 18px;
		color: #333;
		background-color: white;
	}
	</style>
</head>
<body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
		   	<div class="container">
		   		<a class='brand' href='/'><?= $title?></a>
		   	</div>
		</div>
	</div>
	<div class="container">
		<div class='hero-unit'>
			<h1><?= $title?></h1>
			<p><?= $description?></p>
		</div>
		<div class='row' id='main-data'>
			<div class='span4'>
				<h1><?= $latestImport?></h1>
				<p>此顯示最新加入之圖書</p>
			</div>
			<div class='span4'>
				<h1><?= $booksQuery?></h1>
				<p>此顯示最新加入之圖書</p>
			</div>
			<div class='span4'>
				<h1><?= $borrowStatus?></h1>
				<p>此顯示最新加入之圖書</p>
			</div>
		</div>
    </div>
</body>
</html>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Книжный магазин</title>
	  <link href="css/bootstrap.min.css" rel="stylesheet">
	  <link href="css/style.css" rel="stylesheet">
  	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
</head>
<body>
<script src="js/bootstrap.bundle.min.js"></script>

<h1>Тестовая строка</h1>

<div class="container">
	<form class="needs-validation" novalidate>
		<div class="row g-3">
			<div class="col-md-4">
				<div class="input-group">
					<label for=""></label>
					<input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="">
					<small id="emailHelpId" class="form-text text-muted">Help text</small>
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group">
					<label for=""></label>
					<input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="">
					<small id="emailHelpId" class="form-text text-muted">Help text</small>
				</div>
			</div>
		</div>
		<div class="row g-3">
			<div class="col-md-4">
				<div class="input-group">
					<label for=""></label>
					<input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="">
					<small id="emailHelpId" class="form-text text-muted">Help text</small>
				</div>
			</div>
			<div class="col-md-4">
				<div class="input-group">
					<label for=""></label>
					<input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="">
					<small id="emailHelpId" class="form-text text-muted">Help text</small>
				</div>
			</div>
		</div>
	</form>
	<div class="alert alert-warning" role="alert">
		<strong>Warning!</strong>
	</div>
	<div id="carouselId" class="carousel slide" data-bs-ride="carousel">
		<ol class="carousel-indicators">
			<li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
			<li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
			<li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
			<li data-bs-target="#carouselId" data-bs-slide-to="3"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<img src="images/salmon.jpg" alt="First slide">
			</div>
			<div class="carousel-item">
				<img src="images/watermelon.jpg" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img src="images/berries.jpg" alt="Third slide">
			</div>
			<div class="carousel-item">
				<img src="images/ice-cream.jpg" alt="Fourth slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselId" role="button" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Сюда</span>
		</a>
		<a class="carousel-control-next" href="#carouselId" role="button" data-bs-slide="next">
			<span>Туда</span>
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
		</a>
	</div>
</div>
</body>
</html>
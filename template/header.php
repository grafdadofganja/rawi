<?php
	header('Content-type: text/html; charset=utf-8');	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel ="stylesheet" href="./css/main.css">
	<link rel ="stylesheet" href="./css/star.css">
	<script type="text/javascript" src="./js/index.js">
	</script>

	<title>
		
		
	</title>
</head>
<body>

	<div class="container">
		<header>
			<img src="./img/header.jpg" class="titleimg"/>
			
				<div class="imgg">
					<img src="./img/rawi.jpg"/>
				</div>		
			
			<nav class="animenu"> 
			  <button class="animenu__toggle">
			    <span class="animenu__toggle__bar"></span>
			    <span class="animenu__toggle__bar"></span>
			    <span class="animenu__toggle__bar"></span>
			  </button>
			  <ul class="animenu__nav">
			    <li>
			      <a href="index.php">Обитель</a>
			    </li>
			    <li>
			      <a href="infokat.php">Статьи</a>
			      <ul class="animenu__nav__child">
			        <li>
						<a href="perskat.php">Персонажи
						</a>
					</li>
					<li>
						<a href="natkat.php">Народы
						</a>
					</li>
					<li>
						<a href="regkat.php">Регионы
						</a>
					</li>
					<li>
						<a href="frackat.php">Фракции
						</a>
					</li>
					<li>
						<a href="edkat.php">Система образования
						</a>
					</li>
					<li>
						<a href="relkat.php">Учения и религии
						</a>
					</li>
			      </ul>
			    </li>     
			    <li>
			      <a href="rawitale.php">Эпопея</a>
			      <ul class="animenu__nav__child">
			        <li><a href="./rawitale.php?s=s1&ch=chap0">Сезон 1</a></li>
			        <li><a href="./rawitale.php?s=s2&ch=chap0">Сезон 2</a></li>
			        <li><a href="./rawitale.php?s=s3&ch=chap0">Сезон 3</a></li>
			      </ul>
			    </li>
			    <li>
			      <a href="#">Прочее</a>
			    </li>
			                    
			  </ul>
			</nav>
		</header>
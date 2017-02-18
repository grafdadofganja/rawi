<?php
	include("./template/header.php");
?>
<main>

<?php
	if(isset($_GET["c"]) && isset($_GET["p"])){

	
		$path = "./articles/" . $_GET["c"] . "/" . $_GET["p"] . ".php";
		//echo $path;
		if(file_exists($path)) {
			//echo $path;
			include($path);
		}
	}
?>

</main>	

<br class="clearfix">
<?php
	include("./template/footer.php");
?>
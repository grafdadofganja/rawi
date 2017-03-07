<?php
	include("./template/header.php");
?>


<main>
	
	

<main class="main-page">
	<img src="./img/crimea.jpg" class="map-img"/>
	<img src="./img/kurti.jpg" class="map-img"/>
	<img src="./img/belt.jpg" class="map-img"/>
	<img src="./img/daru.jpg" class="map-img"/>
	<img src="./img/dnipro.jpg" class="map-img"/>

</main>

<?php
	include("./template/footer.php");
?>
<script type="text/javascript">

	$(document).ready(function () {

	    $('td a').click(function () {

	        var o=$(this).parent();

	        var url=o.find('img').attr('src');

	        var html='<a href="#" class="clone"><img src="'+url+'" /></a>'

	        o.append(html);
	        o=o.find('.clone');

	        o.animate({width:'150%',height:'150%'});

	        o.click(function () {

	            $(this).remove();

	        });

	    });

	});

	</script>

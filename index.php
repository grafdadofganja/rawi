<?php
	include("./template/header.php");
?>

<main>
	
	<td>
	<!--img src="./img/crimea.jpg" class="acrimea"/>
	<img src="./img/kurti.jpg" class="acrimea"/>
	<img src="./img/belt.jpg" class="acrimea"/>
	<img src="./img/daru.jpg" class="acrimea"/>
	<img src="./img/dnipro.jpg" class="acrimea"/-->
	    <a href='#'><img src="./img/crimea.jpg" class="acrimea" /></a>

	</td>

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

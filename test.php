<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>BRAND</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="jquery-ui/themes/base/all.css">
	<link rel="stylesheet" href="jquery-ui/themes/swanky-purse/jquery-ui.min.css">
	<link rel="stylesheet" href="jquery-ui/themes/swanky-purse/theme.css">
	<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<script src="jquery/dist/jquery.min.js"></script>
	<script src="jquery-ui/jquery-ui.min.js"></script>
	<script src="index.js"></script>
	<script src="animation.js"></script>

	<script>
		$(document).ready(function () {
			$('.test-block').on('mousedown',function(e){
				var offset_block_x = e.pageX - $(this).offset().left;
				var offset_block_y = e.pageY - $(this).offset().top;
				console.log('down');
				$('body').on('mousemove',function (e) {
					console.log(e.pageX+' '+e.pageY);
					var posX = e.pageX - offset_block_x;
					var posY = e.pageY - offset_block_y;
					$('.test-block').offset({top:posY,left:posX});
					$(document).on('mouseup',function () {
						console.log('up');
						$('body').off('mousemove');
						$(document).off('mouseup');
					})
				});
			});

			expandBlock('.category','.category_nav',false,'',1);
		});



	</script>
</head>
<body>
<div class="container">

	<div class="category">
		<p>Category</p>
		<div class="category_triangle"></div>
	</div>
	<nav class="category_nav">
		<a href="#">Accessories</a>
		<a href="#">Bags</a>
		<a href="#">Denim</a>
		<a href="#">Hoodies & Sweatshirts</a>
		<a href="#">Jackets & Coats</a>
		<a href="#">Pants</a>
		<a href="#">Polos</a>
		<a href="#">Shirts</a>
		<a href="#">Shoes</a>
		<a href="#">Shorts</a>
		<a href="#">Sweaters & Knits</a>
		<a href="#">T-Shirts</a>
		<a href="#">Tanks</a>
	</nav>
	</nav>
	<div class="test-block"></div>
</div>
</body>
</html>

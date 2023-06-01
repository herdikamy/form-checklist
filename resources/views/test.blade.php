<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		section {
			clear: both;			
			padding: 10px;
			border: 1px solid black;
			display: inline-block;
			width: 100%;
			clear: both;
			box-sizing: border-box;
		}

		div {
			float: left;
		}

		.div-1 {
			width: 50%;
			height: 200px;
			background: dodgerblue;
		}

		.div-2 {
			width: 50%;
			height: 200px;
			background: green;
		}
	</style>
</head>
<body>
	<section>		
		<div class="div-1">Kolom 1</div>
		<div class="div-2">Kolom 2</div>
	</section>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Belajar CSS</title>
<style>
 div {
    -webkit-column-count: 3;
    -moz-column-count: 3;
    column-count: 3;
  }
</style>
</head>
<body>
<h2>Belajar CSS Multiple Column di Duniailkom</h2>
<div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mi
tortor, imperdiet sed hendrerit non, consequat luctus magna. Nullam
accumsan odio ac lectus mollis finibus. Maecenas imperdiet feugiat 
felis, sit amet ullamcorper elit vulputate in.
</p>
<p>liquam a lectus porta, bibendum enim id, dictum nunc. Duis tincidunt
sed turpis non suscipit. Nunc id mi molestie, porta leo id, vulputate
eros. Donec scelerisque vitae justo finibus imperdiet. Curabitur eget
nibh dignissim ipsum interdum maximus at scelerisque odio.</p>
<p>
Morbi ac fermentum risus. Class aptent taciti sociosqu ad litora
torquent per conubia nostra, per inceptos himenaeos. Praesent gravida
luctus leo sit amet vehicula. Donec luctus sit amet justo vel pretium.
Mauris id elit et sem semper convallis non eu nibh. Nullam ultrices
molestie lectus ut ultricies. Nam nec risus nunc.</p>
</div>
</body>
</html>
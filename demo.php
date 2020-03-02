<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="get" action="simpleform.html">
		<h2>Shoes</h2>
		
		<img src="giay.jpg" height="300px"> <br> <br>
		<p>Name</p>
		<input type = "text" name="name" class="form-control" placeholder="" value="Vans Old Skool" /><br>
		
		
		<p>Price</p>
		<input type = "text" name="price" class="form-control" placeholder="" value="50" />$
		
		<p>Quantity</p>
		<select name="quantity">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
		</select>
		<p>Quality</p>
		<input type="radio" name="quality"> Fake
		<input type="radio" name="quality"> Authentic


		<p><input type = "button" name="btBuy" value="Buy"/></p>
		<style>
			.wufoo {
				font-family: "Lucida Grande","Lucida Sans Unicode", Tahoma, sans-serif;
			}
		</style>
		<form method="get" action="simpleform.html" class = ".wufoo">


	</form>
</body>
</html>
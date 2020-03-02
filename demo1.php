<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
</head>
<body>
<table style="width:50%">
  <tr>
    <th><img src="giay.jpg" height="300px">
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
	</th>

  </tr>

  
</table>
</body>
</html>
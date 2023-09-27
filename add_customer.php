<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="ajax.js"></script>
</head>
<body>
<div class="container">
<div class="card mt-4">
<div class="card-header">Add Customers Data</div>
<div class="card-body">
<form method="POST" autocomplete="on">
  <div class="form-group">
	<label for="name">Name:</label>
	<input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
	<label for="address">Address:</label>
	<textarea class="form-control" id="address" name="address"></textarea>
  </div>
  <div class="form-group">
	<label for="city">City:</label>
	<select name="city" id="city" class="form-control" required>
		<option value="Airport West">Airport West</option>
		<option value="Box Hill">Box Hill</option>
		<option value="Yarraville">Yarraville</option>
	</select>
  </div><br>
  <button type="button" class="btn btn-primary" onclick="add_customer_post()">Add</button>
</form>
<br>
<div id="add_response"></div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   
</body>
</html>
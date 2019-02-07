<!DOCTYPE html>
<html>
<head>
	<title>Create Product</title>
</head>
<body>
<ul>
	<li><a href="{{ url('/product') }}">Back</a></li>
</ul>
<h2>Create New Product</h2>
<form action="{{ url ('/product') }}" method="post">
	@csrf
	<label>name</label>
	<input type="text" name="name">
	<button type="submit">Save</button>
</form>
</body>
</html>
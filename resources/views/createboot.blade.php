<html>
	<head>
		<title>
			Titulo
		</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body>
		<h1>CREATE</h1>
		<form class="form-group" method="POST" action="/Ejemplo">
			@csrf
			<div class="container">
			  <div class="form-group">
			    <label for="formGroupExampleInput">Example label</label>
			    <input type="text" name="nombre" class="form-control" id="formGroupExampleInput" placeholder="Example input">
			  </div>
			  <div class="form-group">
			    <label for="formGroupExampleInput2">Another label</label>
			    <input type="text" name="apellido" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
	</body>
</html>
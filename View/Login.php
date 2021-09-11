<html dir="rtl">
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
	      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>
<div class="container mt-5">
	<div class="row">
		<div class="col-6 card shadow mb-5 bg-body rounded" >
			<div class="card-header " style="background:lightyellow" >
				صفحه ورود
			</div>
			<div class="card-body">
			<form action="/authentication/login" method="post">
				<lable for="username">نام کاربری</lable>
				<input class="form-control " type="text" name="username" id="username"><br>
				<lablel for="password">رمز عبور</lablel>
				<input  class="form-control" type="password" name="password" id="password"><br>
				<input  class="btn btn-success" type="submit" name="loginbtn" value="ورود">
			</form>
			</div>
		</div>
	</div>
</div>

</body>
</html>
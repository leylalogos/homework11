<html dir="rtl">
<head>
	<meta charset="utf-8">
	<title>آپلود فایل</title>
	<link rel="stylesheet" href="../Assets/style.css">
</head>
<body>

<form class="reForm" action="/authentication/register" method="post">
	<div class="reg-nav">صفحه ثبت نام</div>
	<div class="error-reg">
		<?php echo isset($_SESSION['validation_error']) ? $_SESSION['validation_error'] : '' ?>
	</div>
	<lable for="username">
		نام کاربری
	</lable>
	<input type="text" name="username" id="username"><br>
	<lable for="mobile">
		شماره موبایل
	</lable>
	<input type="text" name="mobile" id="mobile"><br>
	<lable for="email">
		ایمیل
	</lable>
	<input type="email" name="email" id="email"><br>
	<lable for="password">
		رمز عبور
	</lable>
	<input type="password" name="password" id="password"><br>
	<lable for="repeatPassword">
		تکرار رمز عبور
	</lable>
	<input type="password" name="repeatPassword" id="repeatPassword"><br>
	<input  class="btn-reg" type="submit" value="ارسال" name="btn_reg">
</form>


</body>
</html>
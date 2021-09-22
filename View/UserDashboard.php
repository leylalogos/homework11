<html dir="rtl">
<head>
	<meta charset="utf-8">
	<title>پنل کاربری</title>
	<link rel="stylesheet" href="../Assets/style.css">
</head>
<body>

<div class="container">
	<div class="content">
		<div class="nav-pannel">
			<h3>پنل کاربری</h3>

		</div>
		<div class="php">
			<div>
				نام کاربری:
				<?php echo $userData['username'] ?><br>
			</div>
			<div>
				اعتبار کاربر:
				<?php echo $userData['credit'] ?><br>
			</div>
			<div>
				تعداد دانلودها:
				<?php echo $userFiles['download_sum'] ?><br>
			</div>
			<div>
				حجم فایل ها:
				<?php echo $userFiles['size_sum'] ?><br>
			</div
		</div>
	</div>
	<a  class ="btna" href="/homepage/showhome">بازگشت به صفحه اصلی</a>

</div>
</body>
</html>
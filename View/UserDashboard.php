<html>
<head>

</head>
<body>
<div>
	نام کاربری:
	<?php echo $userData['username'] ?><br>
	اعتبار کاربر:
	<?php echo $userData['credit'] ?><br>
	 تعداد دانلود:
	<?php echo $userFiles['download_sum'] ?><br>
	حجم فایل:
	<?php echo $userFiles['size_sum'] ?><br>

</div>
</body>
</html>
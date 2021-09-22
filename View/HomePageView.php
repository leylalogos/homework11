<html>

<head>
	<meta charset="utf-8">
	<title>صفحه اصلی</title>
	<link rel="stylesheet" href="../Assets/style.css">
</head>

<body>
	<header class="nav-home">
		<div class="menu-text">

			<?php if (isset($_SESSION['user_id'])) { ?>
				<a href="/authentication/logout">خروج کاربر</a>
				<?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'normal') { ?>
					<a href="/userdashboard/showdashboard">پنل کاربری</a>
					<a href="/upload/showuploadform">صفحه آپلود فایل توسط کاربر</a>
					<a href="/filedetail/showdetails">مشاهده مشخصات فایل</a>
				<?php } ?>
				<?php if ($_SESSION['role'] == 'admin') { ?>
					<a href="/usermanagement/list">پنل مدیریت کاربران</a>
					<a href="/setting/showsetting">تنظیمات</a>
				<?php } ?>
				<?php if ($_SESSION['role'] == 'approval' ||  $_SESSION['role'] == 'admin') { ?>
					<a href="/approve/showfiles">پنل مدیریت فایل ها</a>

				<?php } ?>
			<?php } else { ?>
				<a href="/upload/showUploadGuest">صفحه آپلود فایل به صورت مهمان</a>
				<a href="/authentication/login"> ورود</a>

			<?php } ?>
		</div>
	</header>
</body>

</html>
<html dir="rtl">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="/Assets/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

	<title>آپلود فایل توسط کاربر</title>
</head>

<body>

<form action="upload/showuploadform" enctype="multipart/form-data">
	<div class="file">
		<lable><h4>فایل خود را آپلود کنید</h4></lable>
		<input type="file" name="file_user" class="form-control form-control-lg" style="margin-top: 22px">
		<input class="btn btn-success" type="submit" name="btn-file" value="بارگذاری فایل" style="margin-top: 47px">
	</div>
</form>
<a  class ="btna" href="/homepage/showhome">بازگشت به صفحه اصلی</a>

</body>
</html>

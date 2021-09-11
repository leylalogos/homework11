<html>
<head>
	<title>
		صفحه مدیریت کاربران
	</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="/Assets/style.css">
</head>
<body>
<div class="container" style=" margin-top: 55px;">
	<div class="row">
		<div class="col-12">
			<table class="table table-responsive">
				<tr>
					<th>شناسه</th>
					<th>نام کاربری</th>
					<th>وضعیت کاربر</th>
					<th>اعتبار کاربر</th>
					<th> نقش</th>
				</tr>
				<?php
				for ($i = 0; $i < count($users); $i++) {
					?>
					<tr>
						<td><?php echo $users[$i]['id'] ?></td>
						<td> <?php echo $users[$i]['username'] ?></td>
						<td>
							<?php echo $users[$i]['is_active'] ? 'فعال' : 'غیر فعال' ?>
							<form action="/usermanagement/changeStatus" method="post">
								<input type="hidden" name="id" value="<?php echo $users[$i]['id'] ?>">
								<input class="btn btn-danger" style="color: white" type="submit" value="تغییر">
							</form>
						</td>
						<td> <?php echo $users[$i]['credit'] ?> ریال</td>
						<td><?php echo $users[$i]['role'] != '' ? $users[$i]['role'] : 'کاربر معمولی'; ?>
							<form action="/usermanagement/changeRole" method="post">
								<input type="hidden" name="id" value="<?php echo $users[$i]['id'] ?>">
								<select class="form-control" name="role" >
									<option value="admin">ادمین</option>
									<option value="approval">تایید کننده</option>
									<option value="normal">تایید کننده</option>
								</select>
								<input class="btn btn-warning" type="submit" value="تغییر">

							</form>
						</td>
					</tr>
				<?php } ?>


			</table>

		</div>
	</div>
	<a  class ="btna" href="/homepage/showhome">بازگشت به صفحه اصلی</a>

</div>

</body>
</html>

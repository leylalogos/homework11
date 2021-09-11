<html>
<head>
	<title>
		صفحه مدیریت کاربران
	</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"/>

</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-12">
			<table class="table table-responsive">
				<tr>
					<th>شناسه</th>
					<th>نام کاربری</th>
					<th>وضعیت کاربر</th>
					<th>اعتبار کاربر</th>
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
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>
</div>
</body>
</html>

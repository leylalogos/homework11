<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>صفحه مشخصات فایل</title>
    <link rel="stylesheet" href="/Assets/style.css">
</head>

<body>
    <a class="btna" href="/homepage/showhome">بازگشت به صفحه اصلی</a>
    <div class="container" style=" margin-top: 55px;">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>شناسه</th>
                        <th>نام فایل</th>
                        <th>پسوند فایل</th>
                        <th>سایز فایل</th>
                        <th>تعداد دانلودها</th>
                        <th>وضعیت</th>
                    </tr>
                    <?php foreach ($allfiles as $file) { ?>
                        <tr>
                            <td>
                                <?php echo $file['id'] ?>
                            </td>
                            <td>
                                <?php echo $file['name'] ?>
                            </td>
                            <td>
                                <?php echo $file['extention'] ?>
                            </td>
                            <td>
                                <?php echo $file['size'] ?>
                            </td>
                            <td>
                                <?php echo $file['download_count'] ?>
                            </td>
                            <td>
                                <?php echo $file['is_approved'] ?>
                            </td>
                        </tr>

                    <?php } ?>

                </table>
            </div>
        </div>
    </div>
</body>

</html>
<html>

<head>
    <meta charset="utf-8">
    <title>صفحه تایید یا حذف فایل</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" />

</head>

<body>

    <div class="container" style=" margin-top: 55px;">
        <div class="row">
            <div class="col-12">
                <table class="table table-responsive">
                    <tr>
                        <th>شناسه</th>
                        <th>نام فایل</th>
                        <th> پسوند فایل</th>
                        <th> حجم فایل</th>
                        <th> تعداد دانلود</th>
                        <th> تایید فایل</th>
                        <th> حذف فایل</th>
                    </tr>
                    <?php
                    for ($i = 0; $i < count($all); $i++) {
                    ?>
                        <tr>
                            <td><?php echo $all[$i]['id'] ?></td>
                            <td> <?php echo $all[$i]['name'] ?></td>
                            <td>
                                <?php echo $all[$i]['extention'] ?>
                            </td>
                            <td> <?php echo $all[$i]['size'] ?> </td>
                            <td> <?php echo $all[$i]['download_count'] ?> </td>
                            <td><?php echo $all[$i]['is_approved']  ?>
                                <form action="/approve/approvefile" method="post">
                                    <input type="hidden" name="id" value="<?php echo $all[$i]['id']  ?>">
                                    <input type="submit" value="تایید" style="background:green; padding:7px; color: white;">
                                </form>
                            </td>
                            <td>
                                <form action="/delete/deletefile" method="post">
                                    <input type="hidden" name="id" value="<?php echo $all[$i]['id']  ?>">
                                    <input type="submit" value="حذف" style="background:red; color:white; padding:7px; margin-top:17px;">
                                </form>
                            </td>
                        </tr>
                    <?php } ?>


                </table>

            </div>
        </div>
</body>

</html>
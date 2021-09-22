<html dir="rtl">

<head>
    <title>صفحه تنظیمات</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-8 card shadow mb-5 bg-body rounded ">
                <div class="card-header " style="background:lightyellow">
                    صفحه تنظیمات
                </div>
                <div class="card-body">
                    <div class="error">

                    </div>
                    <form action="<?php echo (isset($row['extention']) ? '/setting/updateSettings' : '/setting/setsetting') ?>" method="post">
                        <div class="form-group row">
                            <lable for="extention">نوع پسوند را مشخص کنید</lable>
                            <input type="text" name="extention" id="extention" value="<?php echo (isset($row['extention']) ? $row['extention'] : ''); ?>" class="form-control" placeholder="نوع پسوند">
                        </div><br />
                        <div class="form-group row">
                            <lable for="maxupload">حداکثر حجم مجاز آپلود فایل</lable>
                            <input type="number" name="maxupload" id="maxupload" value="<?php echo (isset($row['maxupload']) ? $row['maxupload'] : ''); ?>" class="form-control" placeholder="حجم مجاز">
                        </div>
                        <br />
                        <div class="form-group row">
                            <lable for="keepingtime">مدت زمان نگه داری فایل های مهمان</lable>
                            <input type="number" name="keepingtime" id="keepingtime" value="<?php echo (isset($row['keepingtime']) ? $row['keepingtime'] : ''); ?>" class="form-control" placeholder="مدت زمان نگهداری فایل">
                        </div>
                        <br />
                        <button type="submit" class="btn btn-primary">ارسال</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
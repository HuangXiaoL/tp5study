<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Login</title>
</head>
<body>
<div class="row">
    <div class=col-md-3">
<form action="edit" method="post" >
    <input type="text" placeholder="账号" class="form-control" name="username"value="<?php echo $admin->username?>">
    <input type="password" placeholder="密码" class="form-control" name="password" value="<?php echo $admin->password?>">
    <input type="submit" value="修改" class="btn btn-primary">
    <input type="reset" value="重置" class="btn btn-warning">
    <input hidden name="id" value="<?php echo $admin->id?>">
</form>
    </div>
</div>
</body>
</html>
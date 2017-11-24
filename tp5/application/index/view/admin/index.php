<!DOCTYPE html>
<html lang="en">
<head>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <meta charset="UTF-8">
    <title>所有用户</title>
</head>
<body>
<a href="add" class="btn btn-info">添加用户</a>
    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>用户名</th>
            <th>创建时间</th>
            <th>修改时间</th>
            <th>登录时间</th>
            <th>操作</th>
        </tr>

        <?php foreach($admin as $ad){?>
        <tr class="info">
            <td><?php echo $ad['id']?></td>
            <td><?php echo $ad['username']?></td>
            <td><?php echo $ad['create_time']?></td>
            <td><?php echo $ad['update_time']?></td>
            <td><?php echo $ad['last_login_time']?></td>
            <td>
                <a href="edit?id=<?php echo $ad['id'];?>" class="btn btn-info">编辑</a>
                <a href="del?id=<?php echo $ad['id'];?>" class="btn btn-danger">删除</a>
            </td>
        </tr>
        <?php }?>
    </table>
</body>
</html>
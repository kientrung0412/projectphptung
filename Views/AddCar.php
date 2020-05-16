<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>

<form action="../Controller/CarController.php" method="get">
    Tên xe:
    <input type="text" name="carname" id="">
    <input type="hidden" name="ac" value="add">
    <button type="submit">Thêm</button>
</form>

<form action="../Controller/CarController.php" method="get">
    Tên xe:
    <input type="text" name="carname" id="">
    id cần
    <input type="text" name="carid" id="">
    <input type="hidden" name="ac" value="update">
    <button type="submit">Sửa</button>
</form>

</body>
</html>

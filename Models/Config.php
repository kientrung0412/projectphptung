<?php

function conn()
{
    return $con = new mysqli('localhost', 'root', '', 'demo');
    if ($con->connect_error) {
        exit('Kết nối không thành công. chi tiết lỗi:' . $con->connect_error);
    }
}






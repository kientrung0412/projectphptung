<?php
require '../Models/Config.php';
require '../EF/Car.php';

function insCar(string $carName)
{
    //câu lệnh sql
    $sql = "insert into car (CarName) values ('$carName')";

    //mở kết nối
    $conn = conn();

    //thực hiện chuy vấn
    if ($conn->query($sql) === true) {
        echo "thêm thành công";
    } else {
        echo "thêm thất bại";
    }

    //đóng kết nối
    $conn->close();
}

function deleteCar(int $carId)
{
    $sql = "delete from car where CarId = $carId";

    $conn = conn();

    if ($conn->query($sql) === true) {
        echo "Xóa thành công";
    } else {
        echo "Xóa thất bại";
    }
    $conn->close();
}

function selectCart()
{
    $sql = "select * from car";

    $conn = conn();

    $rs = $conn->query($sql);

    if ($rs->num_rows>0){
        return $rs;
    }

    $conn->close();

}

function updateCar(car $car)
{
    $carName = $car->getCarName();
    $carId = $car->getCarId();

    $sql = "update car set CarName = '$carName' where CarId = $carId";

    $conn = conn();

    if ($conn->query($sql) === true) {
        echo "Cập nhật thành công";
    } else {
        echo "Cập nhật  thất bại";
    }

    $conn->close();

}
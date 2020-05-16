<?php
require '../DAO/CarDAO.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    if (!empty($_GET["ac"])) {

        switch ($_GET["ac"]) {

            case "add":
                if (!empty($_GET["carname"])) {
                    insCar($_GET["carname"]);
                } else {
                    echo "nhập đi mày";
                }
                break;

            case "update":

                $carName = $_GET["carname"];
                $carId = $_GET["carid"];
                $car = new car($carId, $carName);

                updateCar($car);

        }


    }


}
?>
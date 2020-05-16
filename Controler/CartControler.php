<?php
require '../DAO/CarDAO.php';
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!empty($_GET["carname"])) {
       $carName = $_GET["carname"];
       echo $carName;
       insCar($carName);
    }
} ?>
<?php

namespace model;

use PDO;

class CityModel
{
    public PDO $conn;

    public function __construct()
    {
        $db = new DBConnect();
        $this->conn = $db->connect();
    }

    function getAllCities() {
        $sql = "SELECT * FROM city";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function remove($id) {
        $sql = "DELETE FROM city WHERE  id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
    }

    function addCity($city_name, $country, $area, $population, $gdp, $description) {
        $sql = "INSERT INTO city(city_name,country,area,population,gdp,description) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $city_name);
        $stmt->bindParam(2, $country);
        $stmt->bindParam(3, $area);
        $stmt->bindParam(4, $population);
        $stmt->bindParam(5, $gdp);
        $stmt->bindParam(6, $description);
        $stmt->execute();
    }

    function findCityById($id) {
        $sql = "SELECT * FROM city WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    function updateCity($city_name, $country, $area, $population, $gdp, $description, $id) {
        $sql = "UPDATE city SET city_name =?, country =?, area =?, population =?, gdp = ?, description = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $city_name);
        $stmt->bindParam(2, $country);
        $stmt->bindParam(3, $area);
        $stmt->bindParam(4, $population);
        $stmt->bindParam(5, $gdp);
        $stmt->bindParam(6, $description);
        $stmt->bindParam(7, $id);
        $stmt->execute();
    }
}
<?php
namespace controller;
use model\CityModel;

class CityController
{
    public $cityModel;

    public function __construct()
    {
        $this->cityModel = new CityModel();
    }

    function showPageCityList() {
        $city = $this->cityModel->getAllCities();
        include_once "./src/view/city/index.php";
    }

    function deleteCity($id) {
        $this->cityModel->remove($id);
        header("location: index.php?page=city&action=show-list");
    }

    function showPageFormAdd()
    {
        include_once "./src/view/city/add.php";
    }

    function showPageFormEdit($id)
    {
        $city = $this->cityModel->findCityById($id);
        if (!$city) {
            include_once "./src/view/error/404.php";
        } else{
            include_once "./src/view/city/edit.php";
        }
    }
    
    function showCityDetail($id)
    {
        $city = $this->cityModel->findCityById($id);
        if (!$city) {
            include_once "./src/view/error/404.php";
        } else{
            include_once "./src/view/city/detail.php";
        }
    }

    function storeCity() {
        $city_name = $_REQUEST['city_name'];
        $country = $_REQUEST['country'];
        $area = $_REQUEST['area'];
        $population = $_REQUEST['population'];
        $gdp = $_REQUEST['gdp'];
        $description = $_REQUEST['description'];
        if (!$city_name || !$country || !$area || !$population || !$gdp || !$description) {
            header("location: index.php?page=city&action=create");
        } else {
            $this->cityModel->addCity($city_name, $country, $area, $population, $gdp, $description);
            header("location: index.php?page=city&action=show-list");
        }
    }

    function editCity($id) {
        $city_name = $_REQUEST['city_name'];
        $country = $_REQUEST['country'];
        $area = $_REQUEST['area'];
        $population = $_REQUEST['population'];
        $gdp = $_REQUEST['gdp'];
        $description = $_REQUEST['description'];
        $this->cityModel->updateCity($city_name, $country, $area, $population, $gdp, $description, $id);
        header("location: index.php?page=city&action=show-list");
    }
}
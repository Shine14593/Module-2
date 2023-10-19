<?php

use controller\CityController;

$page = $_REQUEST['page'] ?? null;
$action = $_REQUEST['action'] ?? null;

$cityController = new CityController();
switch ($page) {
    case "city":
        switch ($action) {
            case "show-list":
                $cityController->showPageCityList();
                break;
            case "delete":
                $id = $_REQUEST['id'];
                $cityController->deleteCity($id);
                break;
            case "create":
                $cityController->showPageFormAdd();
                break;
            case "store":
                $cityController->storeCity();
                break;
            case 'update':
                $id = $_REQUEST['id'];
                $cityController->showPageFormEdit($id);
                break;
            case 'detail':
                $id = $_REQUEST['id'];
                $cityController->showCityDetail($id);
                break;
            case 'edit':
                $id = $_REQUEST['id'];
                $cityController->editCity($id);
                break;
        }
        break;
}
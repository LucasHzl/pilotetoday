<?php

class Car {
    public $id_car;
    public $brand;
    public $model;


    public function getId_car() {
      return $this->id_car;
    }
    public function setId_car($value) {
      $this->id_car = $value;
    }

    public function getBrand() {
      return $this->brand;
    }
    public function setBrand($value) {
      $this->brand = $value;
    }

    public function getModel() {
      return $this->model;
    }
    public function setModel($value) {
      $this->model = $value;
    }
}
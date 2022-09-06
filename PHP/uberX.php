<?php
require_once('car.php');
class UberX extends Car
{
    public $brand;
    public $model;

    public function __construct($license, $driver, $brand, $model)
    {
        parent::__construct($license, $driver);
        $this->license = $license;
        $this->driver = $driver;
        $this->brand = $brand;
        $this->model = $model;
    }

    public function printDataCar()
    {
        if ($this->passengers == 4) {

            echo "
            <br/>
            Licencia: $this->license  <br/>
            Driver: {$this->driver->name} <br/>
            Número de pasajeros: $this->passengers <br/>
            Marca: $this->brand  <br/>
            Modelo: {$this->model} <br/>
        ";
        } else {
        }
    }
}

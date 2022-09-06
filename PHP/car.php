<?php

class Car
{
    public $id;
    public $license;
    public $driver;
    public $passengers;

    public function __construct($license, $driver)
    {
        $this->license = $license;
        $this->driver = $driver;
    }

    public function printDataCar()
    {
        echo "
            <br/>
            Licencia: $this->license  <br/>
            Driver: {$this->driver->name} <br/>
            Número de pasajeros: $this->passengers <br/>
        ";
    }

    public function getPassenger()
    {
        return $this->passengers;
    }

    public function setPassenger($passengers)
    {

        if ($passengers == 4) {
            $this->passengers = $passengers;
        } else {
            echo "<br/> Error: Necesitas asignar 4 pasajeros. <br/>";
        }
    }
}

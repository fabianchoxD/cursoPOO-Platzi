<?php
require_once('car.php');
class UberVan extends Car
{
    public $typeCarAccepted;
    public $seatsMaterial;

    public function __construct($license, $driver, $typeCarAccepted, $seatsMaterial)
    {
        parent::__construct($license, $driver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->driver = $driver;
        $this->seatsMaterial = $seatsMaterial;
    }

    public function setPassenger($passengers)
    {

        if ($this->passengers == 6) {
            $this->passengers = $passengers;
        } else {
            echo "<br/> Error: Necesitas asignar 6 pasajeros. <br/>";
        }
    }
}

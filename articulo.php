<?php
class Articulo {
    private $cveArticulo;
    private $descripcion;
    private $descuento;
    private $iva;
    private $precio;
    private $existencias; // Añadir esta propiedad

    function __construct() {}

    public function getCveArticulo() {
        return $this->cveArticulo;
    }

    public function setCveArticulo($cveArticulo) {
        $this->cveArticulo = $cveArticulo;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getDescuento() {
        return $this->descuento;
    }

    public function setDescuento($descuento) {
        $this->descuento = $descuento;
    }

    public function getIva() {
        return $this->iva;
    }

    public function setIva($iva) {
        $this->iva = $iva;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function getExistencias() {
        return $this->existencias;
    }

    public function setExistencias($existencias) {
        $this->existencias = $existencias;
    }
}
?>

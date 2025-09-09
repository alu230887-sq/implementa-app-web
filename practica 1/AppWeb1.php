<?php
//Programa para imprimir mensaje de bienvenida
//Creado por Luna Leilany Melendez Espindola
//fecha :09 /septiembre/ 2025
//appweb1.php
class texto
{
    public $texto1="Bienvenidos a programacion de App Web";
public function imprimirtexto()
{
    echo $this->texto1;
    print$this->texto1;
}

}
$obj1=new texto;
$obj1->imprimirtexto();
?>
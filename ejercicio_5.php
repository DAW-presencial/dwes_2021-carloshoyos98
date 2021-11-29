<?php
// Definir clase padre

class parentClass {
    private $propiedad_privada = 1;
    protected $propiedad_protegida = 2;
    public $propiedad_publica = 3;

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }
}

// Definir clase hija

class childClass extends parentClass {

}

// Instanciamos clase hija y llamamos los métodos __get y __set

$claseHija = new childClass;

$prop1 = claseHija.__get('propiedad_publica');
$prop2 = claseHija.__get('propiedad_privada');

echo ($prop1);
echo "<br>";
echo ($prop2);

// Las propiedades privadas son heredadas por la clase hija, las 'protected', no.
// Al llamar las funciones 'mágicas' desde la clase hija sin haberlas definido en esta, no llama a las de la clase padre.
?>
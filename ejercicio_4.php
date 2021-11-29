<?php

// Definir clase 

class clasePrueba {
    public $propiedad_1 = 'Propiedad 1';

}

?>


<?php
// Instanciamos la clase

    $claseInstanciada = new clasePrueba;


// Ahora intentamos acceder a una propiedad que no existe


    $propiedad_no_existe = $claseInstanciada->propiedad_2 = 'Propiedad creada tras instanciar';
    echo($propiedad_no_existe); // 

    echo "<br>";
    //Intancio otro objeto de la clase
    $segundoObjeto = new clasePrueba;
    $propiedad_no_existe_2 = $segundoObjeto->propiedad_2;
    echo($propiedad_no_existe_2);

    echo "<br>";
    //Intancio otro objeto de la clase
    $tercerObjeto = new clasePrueba;
    $propiedad_no_existe_3 = $tercerObjeto->propiedad_2;
    echo($propiedad_no_existe_3);

    // Tras estas pruebas se puede concluir que una propiedad creada tras instanciar un objeto de una clase, esta se añade a esta intancia de la clase, ya que la clase no permite crear de forma dinámica propiedades que es lo que estamos haciendo con la instancia.
?>
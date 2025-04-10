<?php

class Perro {
    private $nombre;
    private $raza;

    // Constructor
    public function __construct($nombre, $raza) {
        $this->nombre = $nombre;
        $this->raza = $raza;
    }

    // Método para ladrar normalmente
    public function ladra($sonido) {
        return $this->nombre . " (" . $this->raza . "): " . $sonido . "<br><br>";
    }

    // Método para ladrar fuerte
    public function ladraAlto($sonido) {
        return $this->nombre . " (" . $this->raza . "): " . strtoupper($sonido) . "!!!<br><br>";
    }

    // Método para ladrar bajo
    public function ladraBajo($sonido) {
        return $this->nombre . " (" . $this->raza . "): " . strtolower($sonido) . "...<br><br>";
    }

    // Método para mostrar los datos del perro
    public function mostrarDatos() {
        return "Nombre: " . $this->nombre . ", Raza: " . $this->raza . "<br><br>";
    }

    // Getters
    public function getNombre() {
        return $this->nombre;
    }

    public function getRaza() {
        return $this->raza;
    }
}

// Crear tres perros con diferentes características
$sabueso = new Perro("Bruno", "Sabueso");

$pitbull = new Perro("Rocky", "Pitbull");

$retriever = new Perro("Max", "Golden Retriever");

// Simulación de una conversación entre los perros
function conversacion($sabueso, $pitbull, $retriever) {
    echo "En el parque de perros jugaban tres mejores amigos: Bruno, Rocky y Max.<br><br>";

    echo $sabueso->ladra("Auuuuuuuu");

    echo $pitbull->ladraBajo("Grrrrrr");

    echo $retriever->ladraAlto("¡Guau guau guau!");

    echo "Bruno: ¿Por qué siempre gruñes, Rocky? <br><br>";

    echo "Rocky: Porque soy temeroso y prefiero que se alejen.<br><br>";

    echo "Max: Y yo ladro porque me emociona todo <br><br>";

    echo "Bruno: Bueno sigamos jugando entonces.<br><br>";

    echo "Rocky: Si me gusta mucho jugar <br><br>";

    echo "Max: A mí también <br><br>";

    echo "Bruno: ¡Vamos! <br><br>";
}

// Ejecutar la conversación
conversacion($sabueso, $pitbull, $retriever);

?>

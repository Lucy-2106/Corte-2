<?php
// Incluir la clase Persona
require_once 'persona.php';
// Crear un objeto de la clase Persona
$persona1 = new Persona();
// Intentar acceder a las propiedades directamente
echo "Accediendo directamente a las propiedades:<br>";
echo "Nombre: " . $persona1->nombre . "<br>"; // Sí Se puede acceder
// Intentar acceder a una propiedad privada
echo "Edad: " . $persona1->edad . "<br>"; // Generará un error
// Intentar acceder a una propiedad protegida
echo "DNI: " . $persona1->dni . "<br>"; // Generará un error
// Mostrar datos desde el método dentro de la clase
echo "<br>Accediendo a las propiedades mediante el método mostrarDatos():<br>";
$persona1->mostrarDatos();
?>

<?php

class Contacto
{

    private static $reglas = array(
        'nombre' => array('required', 'min:2', 'max:50',
            'regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/'),
        'email' => 'required | email | min:5 | max:150',
        'mensaje' => 'required | max:5000'
    );
    private static $mensajes = array('regex' => 'El formato de el :attribute no es correcto, solo se permiten letras, números, espacios en blanco
    y guiones medios o bajos.');
    public static function valida()
    {
        $validador = Validator::make(Input::all(), self::$reglas, self::$mensajes); // Validamos el formulario       
        return $validador;
    }

}

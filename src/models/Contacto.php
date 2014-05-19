<?php 

class Contacto
{
    private static $reglas = array(
        'nombre' => array('required', 'min:2', 'max:50'), 
            //'regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/'),
        'email' => 'required | email | min:5 | max:150',
        'mensaje' => 'required | max:5000'
    );
    public static function valida()
    {        
        $validador = Validator::make(Input::all(), self::$reglas); // Validamos el formulario       
        return $validador;
    }

}

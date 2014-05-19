<?php

class ContactoController extends BaseController
{

    private function emailContacto()
    {
        Mail::send('contacto::email', Input::all(), function($message)
        {
            //$message->from(Input::get('email'), Input::get('nombre')); No funciona, al menos  con gmail
            $sitio = Config::get('mail.from.name');
            $destino = Config::get('mail.email-administrador');
            $message->to($destino)->subject('Contacto de ' . $sitio);
        });
    }

    public function validaFormulario()
    {        
        $validador = Contacto::valida();
        
        if ($validador->passes())
        {
            $this->emailContacto();
            return View::make('contacto::formulario-enviado');
        }
        else
        {
            return Redirect::to('contacto')->withErrors($validador)->withInput();
        }
    }

}

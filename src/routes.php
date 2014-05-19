<?php
/* ---------- Contacto ---------------- */

Route::get('contacto', array('as' => 'contacto', function()
{
    return View::make('contacto::formulario-contacto');
}
));
Route::post('contacto', 'ContactoController@validaFormulario', array('before' => 'csrf'));


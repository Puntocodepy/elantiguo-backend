<?php

namespace App\Constants;

class HttpRequest
{
    const BAD_REQUEST = 403;
    const CODE_CREATED = 201;
    const CODE_SUCCESSFUL = 200;
    const INTERNAL_SERVER_ERROR = 500;
    const NOT_ACCEPTABLE = 406;
    const NOT_FOUND = 404;
    const UNAUTHORIZED_CODE = 401;
    const UNPROCESSABLE_ENTITY = 422;

    //Messages
    const REQUEST_INVALID = 'Error en los datos enviados en el formulario!';
    const CREDENTIAL_INVALID = 'Credenciales incorrectas!';
    const NOT_FIND = 'No pudimos encontrar en la Base de Datos!';


}

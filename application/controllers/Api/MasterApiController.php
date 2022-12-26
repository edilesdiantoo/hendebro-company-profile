<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class MasterApiController extends RestController
{
    public function user_get()
    {
        echo "im restfull apu";
    }
}

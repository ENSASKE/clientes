<?php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Mail\InformacionEmail;
use Illuminate\Support\Facades\Mail;
 
class EmailController extends Controller
{
    public function send()
    {
        $objInformacion = new \stdClass();
        $objInformacion->variable1 = 'Variable 1 ejemplo';
        $objInformacion->variable2 = 'Variable 2 ejemplo';
        $objInformacion->sender = 'Grégor';
        $objInformacion->receiver = 'Usuario';
 
        Mail::to("example@example.com")->send(new InformacionEmail($objInformacion));
    }
}
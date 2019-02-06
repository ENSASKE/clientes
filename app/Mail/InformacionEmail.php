<?php
 
namespace App\Mail;
 
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
 
class InformacionEmail extends Mailable
{
    use Queueable, SerializesModels;
     
    public $informacion;
     
    public function __construct($informacion){
        $this->informacion = $informacion;
    }
    
    public function build(){
        return $this->from('sender@example.com')
                    ->view('correo.informacion')
                    ->text('correo.informacion_plain')
                    ->with(
                      [
                            'variable1' => 'Hola',
                            'variable2' => 'Mundo',
                      ])
                      ->attach(public_path('/images').'/informacion.jpg', [
                              'as' => 'informacion.jpg',
                              'mime' => 'image/jpeg',
                      ]);
    }
}
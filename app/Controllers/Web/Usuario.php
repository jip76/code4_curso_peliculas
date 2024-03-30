<?php

namespace App\Controllers\Web;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class Usuario extends BaseController
{
    public function crear_usuario()
    {
       $usuarioModel = new UsuarioModel();
       $usuarioModel->insert([
        'usuario'=> 'admin',
        'email' => 'admin@gmail.com',
        'contrasena'=> $usuarioModel->contrasenaHash('123'),
       ]);
    }
    # verificamos si funciona el has
    public function probar_contrasena()
    {
       $usuarioModel = new UsuarioModel();
       echo $usuarioModel->contrasenaVerificar('123','$2y$10$rZ/bM6/tbqXwMfjPkiFdB.D1ZED04xPAgOYwgkgip3IWeAoS/fzLa');
    }

    public function login()
    { 
      return view('web/usuario/login');
      
    }
    public function login_post()
    {
       $usuarioModel = new UsuarioModel();
       $email = $this->request->getPost('email');
       $contrasena = $this->request->getPost('contrasena');

       $usuario = $usuarioModel->select()
              ->orwhere('email', $email)
       ->orwhere('usuario', $email)
       ->first();

       if (!$usuario) {
         return redirect()->back()->with('mensaje','Usuario y/o Contraseña usaurio no es correcto');
       }
    
       if ($usuarioModel->contrasenaVerificar($contrasena, $usuario->contrasena)) {
        $session= session();
         unset($usuario->contrasena);
         session()->set('usuario', $usuario);
         
         return redirect()->to('dashboard/categoria/')->with('mensaje',"Bienvenid@ $usuario->usuario");
       }
       return redirect()->back()->with('mensaje','Usuario y/o Contraseña invalida');
    }


    public function registrar()
    { 
      return view('web/usuario/registrar');
      
    }
   

    public function registrar_post()
    {

        $usuarioModel = new UsuarioModel();

        if ($this->validate('usuarios')) {
            $usuarioModel->insert([
                'usuario' => $this->request->getPost('usuario'),
                'email' => $this->request->getPost('email'),
                'contrasena' => $usuarioModel->contrasenaHash($this->request->getPost('contrasena')),
            ]);

            return redirect()->to(route_to('login'))->with('mensaje', "Usuario registrado exitosamente");
        }

        session()->setFlashdata([
            'validation' => $this->validator
        ]);

        return redirect()->back()->withInput();
       
    }
    public function logout(){
      session()->destroy();
      return redirect()->to(route_to('login'));
    }
    
}

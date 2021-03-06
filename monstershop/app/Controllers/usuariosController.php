<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UsuariosController
{

    public function __construct()
    {
        session_start();
        $url = $_SERVER['REQUEST_URI'];
        //if(!str_contains($url, 'usuarios')) {
            if(!isset($_SESSION['logado']) || empty($_SESSION['logado'])) {
                $_SESSION['loginInvalido'] = 'Faça login para acessar!';
                header('Location: /admin/login');
                exit();
            }
        //}
    }
    

    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function view()
    {
        if(!empty($_POST['usuario'])) {
            $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);  
            $usuarios = App::get('database')->procurar('usuarios', 'nome', $usuario);
            return view('admin/usuarios', compact('usuarios'));  
        }
        
        $usuarios = App::get('database')->selectAll('usuarios');
        return view('admin/usuarios', compact('usuarios')); 
    }

    public function create()
    {
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
        $senha = base64_encode($senha);
        $foto = filter_input(INPUT_POST, 'foto');

        if(!$nome || !$email || !$senha) {
            $_SESSION['faltaCampos'] = 'ERRO: Preencha todos os campos corretamente!';
            header('Location: /admin/usuarios');
            exit();
        }

        if(!$foto) {
            $foto = 'MonsterShop-logo.png';
        }

        $emailExist = App::get('database')->procurar('usuarios', 'email', $email);

        if($emailExist) {
            $_SESSION['emailCadastrado'] = 'Erro ao criar usuário: Email já cadastrado!';
            header('Location: /admin/usuarios');
            exit();
        }

        App::get('database')->adicionar('usuarios', compact('nome', 'email', 'senha', 'foto'));

        header('Location: /admin/usuarios');
        exit();
    }

    public function update()
    {
        $dados = [
            'nome' => filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS),
            'email' => filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL),
            'senha' => base64_encode(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS)),
        ];

        $foto = filter_input(INPUT_POST, 'foto');

        App::get('database')->editaUsuario('usuarios', $dados, $foto, $_POST['id']);

        header('Location: /admin/usuarios');
    }

    public function delete()
    {
        $id = $_POST['id'];

        App::get('database')->deletar('usuarios', $id);

        header('Location: /admin/usuarios');
    }
}

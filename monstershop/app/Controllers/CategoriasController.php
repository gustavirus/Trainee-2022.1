<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class CategoriasController
{<?php

    namespace App\Controllers;
    
    use App\Core\App;
    use Exception;
    
    class CategoriasController
    {   
        
        public function __construct() 
        {
            session_start();
            $url = $_SERVER['REQUEST_URI'];
            if(!str_contains($url, 'logout')) {
                if(!empty($_SESSION['logado'])) {
                    header('Location: /dashboard');
                    exit();
                }
            }
        }
    
        public function index()
        {
            if(!empty($_POST['categoria'])) {
                $categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_SPECIAL_CHARS);  
                $categorias = App::get('database')->procurarCategoria('categorias', $categoria);
                return view('admin/frontend_adm_categorias', compact('categorias'));  
            }
            
            $categorias = App::get('database')->selectAll('categorias');
            return view('admin/frontend_adm_categorias', compact('categorias')); 
        }
    
        /*public function show()
        {
           
        }*/
    
        public function create()
        {
            //filtagrem para seguranca
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);             
            $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);      
            
            App::get('database')->adicionaCategoria('categorias', compact('nome', 'descricao'));
    
            header('Location: /admin/categorias');
     
        }
    
        /*public function store()
        {   
            $nome = filter_input(INPUT_POST, 'nome');
            $descricao = filter_input(INPUT_POST, 'descricao');
    
            if($nome && $descricao) {
                App::get('datebase')->store('categorias', $nome, $descricao);
            }
        }*/
    
       /* public function edit()
        {
      
        }*/
    
        public function update()
        {
            //filtagrem para seguranca
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);             
            $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
       
            App::get('database')->editaCategoria('categorias', compact('nome', 'descricao'), $_POST['id']);
    
            header('Location: /admin/categorias');
        }
    
        public function delete()
        {
            App::get('database')->deletaCategoria('categorias', $_POST['id']);
    
            header('Location: /admin/categorias');
        }
    
    
    }
    
    public function index()
    {
        if(!empty($_POST['categoria'])) {
            $categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_SPECIAL_CHARS);  
            $categorias = App::get('database')->procurarCategoria('categorias', $categoria);
            return view('admin/frontend_adm_categorias', compact('categorias'));  
        }
        
        $categorias = App::get('database')->selectAll('categorias');
        return view('admin/frontend_adm_categorias', compact('categorias')); 
    }

    /*public function show()
    {
       
    }*/

    public function create()
    {
        //filtagrem para seguranca
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);             
        $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);      
        
        App::get('database')->adicionaCategoria('categorias', compact('nome', 'descricao'));

        header('Location: /admin/categorias');
 
    }

    /*public function store()
    {   
        $nome = filter_input(INPUT_POST, 'nome');
        $descricao = filter_input(INPUT_POST, 'descricao');

        if($nome && $descricao) {
            App::get('datebase')->store('categorias', $nome, $descricao);
        }
    }*/

   /* public function edit()
    {
  
    }*/

    public function update()
    {
        //filtagrem para seguranca
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);             
        $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
   
        App::get('database')->editaCategoria('categorias', compact('nome', 'descricao'), $_POST['id']);

        header('Location: /admin/categorias');
    }

    public function delete()
    {
        App::get('database')->deletaCategoria('categorias', $_POST['id']);

        header('Location: /admin/categorias');
    }


}

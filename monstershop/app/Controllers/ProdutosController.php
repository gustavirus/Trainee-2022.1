<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ProdutosController
{
    public function __construct()
    {
        session_start();
        $url = $_SERVER['REQUEST_URI'];
        if(!str_contains($url, 'usuarios')) {
            if(!isset($_SESSION['logado']) || empty($_SESSION['logado'])) {
                $_SESSION['loginInvalido'] = 'Faça login para acessar!';
                header('Location: /admin/login');
                exit();
            }
        }
    }

    public function view()
    {
        if(!empty($_POST['produto'])) {
            $produto = filter_input(INPUT_POST, 'produto', FILTER_SANITIZE_SPECIAL_CHARS);  
            $produtos = App::get('database')->procurar('produtos', 'nome', $produto);

            for ($i = 0; $i < count($produtos) ; $i++) { 
                $produtoImagem = App::get('database')->selecionarNomeImagem($produtos[$i]->id);
                $produtos[$i]->imagens = $produtoImagem;
            }
    
            $categorias = App::get('database')->selectAll('categorias');
            $imagens = App::get('database')->selectAll('imagens');
    
            $table = [
                'produtos' => $produtos,
                'categorias' => $categorias,
                'imagens' => $imagens
            ];

            return view('admin/produtos', $table);  
        }  

        $produtos = App::get('database')->selectAll('produtos');

        for ($i = 0; $i < count($produtos) ; $i++) { 
            $produtoImagem = App::get('database')->selecionarNomeImagem($produtos[$i]->id);
            $produtos[$i]->imagens = $produtoImagem;
        }

        $categorias = App::get('database')->selectAll('categorias');
        $imagens = App::get('database')->selectAll('imagens');

        $table = [
            'produtos' => $produtos,
            'categorias' => $categorias,
            'imagens' => $imagens
        ];
        return view('admin/produtos', $table);
    }

    public function create()
    {   
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);             
        $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS); 
        $categoriaID = filter_input(INPUT_POST, 'categoriaID', FILTER_SANITIZE_SPECIAL_CHARS);
        $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_SPECIAL_CHARS);

        if(!$nome || !$preco) {
            $_SESSION['faltaCampos'] = 'ERRO: Preencha os campos de nome e preço!';
            header('Location: /admin/produtos');
            exit();
        }
        
        App::get('database')->adicionar('produtos', compact('nome', 'descricao', 'categoriaID', 'preco'));

        //parte de imagens
        $produto_id = App::get('database')->selecionarIDProduto();

        $coluna = $_FILES['txtimagem']['name'];
        for ($i=0; $i < count($coluna); $i++) { 
            
            $imagens = [
                'id_produto' => $produto_id[0]->id,
                'nome_imagem' => $coluna[$i],
            ];
            App::get('database')->adicionar('imagens', $imagens);
        }
        header('Location: /admin/produtos');
    }

    public function update()
    {
        //parte de produtos
        $preco=$_POST['preco'];
        if($preco==NULL)
            $preco=0.00;
            
        $parametros = [
            'nome' => $_POST['nome'],
            'descricao' => $_POST['descricao'],
            'categoriaID' => $_POST['categoriaID'],
            'preco' => $preco,
        ];
        
        $id = $_POST['id'];
        
        App::get('database')->editar('produtos', $parametros, $id);

        //parte de imagens
        $verificaImg = false;

        $coluna = $_FILES['txtimagem']['name'];
        if($_FILES['txtimagem'] != NULL && $coluna[0] != ""){
            $verificaImg = true;
        }
        
        if($verificaImg){
            app::get('database')->deletarImagens($_POST['id']);

            for($i = 0; $i < sizeof($coluna); $i++){
                $imagens = [
                    'id_produto' => $id,
                    'nome_imagem' => $coluna[$i],
                ];
                App::get('database')->adicionar('imagens', $imagens);
            }
        }
        
        header('Location: /admin/produtos');
    }
    
    public function delete()
    {
        app::get('database')->deletar('produtos', $_POST['id']);
        app::get('database')->deletarImagens($_POST['id']);

        header('Location: /admin/produtos');
    }
}

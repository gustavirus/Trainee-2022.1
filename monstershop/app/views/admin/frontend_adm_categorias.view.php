<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/frontend_adm_categorias.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2b94009ee2.js" crossorigin="anonymous"></script>

    <title>Frontend Administrador Categorias</title>
    
    
</head>

<body>

    <div class="main">
    
        <div class="container">

            <div class="imgCat">
                <img src="../../../public/img/img_adm_categorias/Categorias.png" alt="a" width="55%">
                <img src="../../../public/img/img_adm_categorias/carMonsterShop.png" alt="a" width="55%">
            </div>
    
        
        
        <!-- Botão de adicionar categoria -->
            <div class="botoes1">

                
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1">
                    Adicionar categoria
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Adicionando categoria</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                        <form>
                            <div class="form-group">
                              <label for="">Nome da categoria</label>
                              <input name="nomeCat" class="form-control" type="text" placeholder="">
                            </div>
                            <div class="form-group">
                              <label for="">Descrição</label>
                              <input name= "desCat" class="form-control" type="text" placeholder="">
                            </div>
                        </form>

                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Salvar Categoria</button>
                        </div>
                    </div>
                    </div>
                </div>

            </div>
            




        <!-- Inicio Lista de Categorias -->    


            <!-- Tabela-Start -->

                <table class="table table-hover table-bordered border-dark table-custom">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">
                                <form class="d-flex">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit"><i
                                            class="fa-solid fa-magnifying-glass"></i></button>
                                </form>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Roupas</td>

                            <td>

                                <!-- Modal de vizualização -->
                                <button type="button " class="btn btn-primary btn-custom" data-bs-toggle="modal" data-bs-target="#v1">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                
                                <!-- Modal de vizualização -->
                                <div class="modal fade" id="v1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Vizualização</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                         <h4>Descrição:</h4>
                                         <p>Moletons e camisetas para academia.</p>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>


                                <!-- Botão de Edição -->
                                <button type="button" class="btn btn-primary btn-custom" data-bs-toggle="modal"
                                    data-bs-target="#e2">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>

                                <!-- Modal de edição -->
                                <div class="modal fade" id="e2" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Editar Categoria</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Form de Edição -->
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Nome da categoria</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Descrição da categoria</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Fechar</button>
                                                <button type="button" class="btn btn-primary">Salvar alterações</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <!-- Botão de exclusão -->
                                <button type="button" class="btn btn-danger btn-custom" data-bs-toggle="modal"
                                    data-bs-target="#d1">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>

                                <!-- Modal de confirmação de exclusão -->
                                <div class="modal fade" id="d1" data-bs-backdrop="static" data-bs-keyboard="false"
                                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Confirmação de exclusão</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Tem certeza que deseja excluir essa categoria?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-danger">Excluir</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>

                            <!-- Exemplos testes -->
                        <tr>
                            <th scope="row">2</th>
                            <td>Acessórios</td>

                            <td>
                                <!-- Modal de vizualização -->
                                <button type="button" class="btn btn-primary btn-custom" data-bs-toggle="modal" data-bs-target="#v2">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                
                                <!-- Modal de vizualização -->
                                <div class="modal fade" id="v2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Vizualização</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                         <h4>Descrição:</h4>
                                         <p>Luvas e acessórios para musculação.</p>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>


                                <!-- Botão de Edição -->
                                <button type="button" class="btn btn-primary btn-custom" data-bs-toggle="modal"
                                    data-bs-target="#e2">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>

                                <!-- Modal de edição -->
                                <div class="modal fade" id="e2" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Editar Categoria</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Form de Edição -->
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Nome da categoria</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Descrição da categoria</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Fechar</button>
                                                <button type="button" class="btn btn-primary">Salvar alterações</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <!-- Botão de exclusão -->
                                <button type="button" class="btn btn-danger btn-custom" data-bs-toggle="modal"
                                    data-bs-target="#d2">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>

                                <!-- Modal de confirmação de exclusão -->
                                <div class="modal fade" id="d2" data-bs-backdrop="static" data-bs-keyboard="false"
                                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Confirmação de exclusão</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Tem certeza que deseja excluir essa categoria?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-danger">Excluir</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Proteínas</td>

                            <td>
                                <!-- Modal de vizualização -->
                                <button type="button" class="btn btn-primary btn-custom" data-bs-toggle="modal" data-bs-target="#v3">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                
                                <!-- Modal de vizualização -->
                                <div class="modal fade" id="v3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Vizualização</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                         <h4>Descrição:</h4>
                                         <p>Whey Protein.</p>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>


                                <!-- Botão de Edição -->
                                <button type="button" class="btn btn-primary btn-custom" data-bs-toggle="modal"
                                    data-bs-target="#e3">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>

                                <!-- Modal de edição -->
                                <div class="modal fade" id="e3" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Editar Categoria</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Form de Edição -->
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Nome da categoria</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Descrição da categoria</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Fechar</button>
                                                <button type="button" class="btn btn-primary">Salvar alterações</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Botão de exclusão -->
                                <button type="button" class="btn btn-danger btn-custom" data-bs-toggle="modal"
                                    data-bs-target="#d3">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>

                                <!-- Modal de confirmação de exclusão -->
                                <div class="modal fade" id="d3" data-bs-backdrop="static" data-bs-keyboard="false"
                                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Confirmação de exclusão</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Tem certeza que deseja excluir essa categoria?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-danger">Excluir</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Vitaminas</td>

                            <td>
                                <!-- Modal de vizualização -->
                                <button type="button" class="btn btn-primary btn-custom" data-bs-toggle="modal" data-bs-target="#v4">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                
                                <!-- Modal de vizualização -->
                                <div class="modal fade" id="v4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Vizualização</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                         <h4>Descrição:</h4>
                                         <p>Suplementos de multivitaminicos e polivitaminicos.</p>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>


                                <!-- Botão de Edição -->
                                <button type="button" class="btn btn-primary btn-custom" data-bs-toggle="modal"
                                    data-bs-target="#e4">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>

                                <!-- Modal de edição -->
                                <div class="modal fade" id="e4" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Editar Categoria</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Form de Edição -->
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Nome da categoria</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Descrição da categoria</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Fechar</button>
                                                <button type="button" class="btn btn-primary">Salvar alterações</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Botão de exclusão -->
                                <button type="button" class="btn btn-danger btn-custom" data-bs-toggle="modal"
                                    data-bs-target="#d4">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>

                                <!-- Modal de confirmação de exclusão -->
                                <div class="modal fade" id="d4" data-bs-backdrop="static" data-bs-keyboard="false"
                                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Confirmação de exclusão</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Tem certeza que deseja excluir essa categoria?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-danger">Excluir</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Venenos</td>

                            <td>
                                <!-- Modal de vizualização -->
                                <button type="button" class="btn btn-primary btn-custom" data-bs-toggle="modal" data-bs-target="#v5">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                
                                <!-- Modal de vizualização -->
                                <div class="modal fade" id="v5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Vizualização</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                         <h4>Descrição:</h4>
                                         <p>"Paradinhas" para crescer.</p>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>


                                <!-- Botão de Edição -->
                                <button type="button" class="btn btn-primary btn-custom" data-bs-toggle="modal"
                                    data-bs-target="#e5">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>

                                <!-- Modal de edição -->
                                <div class="modal fade" id="e5" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Editar Categoria</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Form de Edição -->
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Nome da categoria</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Descrição da categoria</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Fechar</button>
                                                <button type="button" class="btn btn-primary">Salvar alterações</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Botão de exclusão -->
                                <button type="button" class="btn btn-danger btn-custom" data-bs-toggle="modal"
                                    data-bs-target="#d5">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>

                                <!-- Modal de confirmação de exclusão -->
                                <div class="modal fade" id="d5" data-bs-backdrop="static" data-bs-keyboard="false"
                                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Confirmação de exclusão</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Tem certeza que deseja excluir essa categoria?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-danger">Excluir</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Outros</td>

                            <td>
                                <!-- Modal de vizualização -->
                                <button type="button" class="btn btn-primary btn-custom" data-bs-toggle="modal" data-bs-target="#v6">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                
                                <!-- Modal de vizualização -->
                                <div class="modal fade" id="v6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Vizualização</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                         <h4>Descrição:</h4>
                                         <p>Outros...</p>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>


                                <!-- Botão de Edição -->
                                <button type="button" class="btn btn-primary btn-custom" data-bs-toggle="modal"
                                    data-bs-target="#e6">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>

                                <!-- Modal de edição -->
                                <div class="modal fade" id="e6" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Editar Categoria</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Form de Edição -->
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Nome da categoria</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Descrição da categoria</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Fechar</button>
                                                <button type="button" class="btn btn-primary">Salvar alterações</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Botão de exclusão -->
                                <button type="button" class="btn btn-danger btn-custom" data-bs-toggle="modal"
                                    data-bs-target="#d6">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>

                                <!-- Modal de confirmação de exclusão -->
                                <div class="modal fade" id="d6" data-bs-backdrop="static" data-bs-keyboard="false"
                                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Confirmação de exclusão</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Tem certeza que deseja excluir essa categoria?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-danger">Excluir</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>

                            <!-- Exemplos teste - end -->

                    </tbody>
                </table>
            </div>

            

        
           
        <!-- Fim Lista de Categorias -->
        
         
            







    </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 

</body>


</html>
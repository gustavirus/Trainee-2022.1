<div class="modal fade" id="mod-visualizar-<?= $produto->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Vizualização</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nome</label>
                        <input class="form-control" type="text" value="<?= $produto->nome ?>" aria-label="<?= $produto->nome ?>" disabled readonly>
                    </div>

                    <!-- Início Carrosel -->

                    <div id="carouselExampleControls" class="carousel slide carousel-dark" data-bs-ride="carousel">
                        <label for="exampleInputPassword1" class="form-label">Imagens</label>
                        <div class="carousel-inner">
                            <div class="carousel-inner">
                                <?php for ($i = 0; $i < count($produto->imagens); $i++) : ?>
                                    <div class="carousel-item<?php echo ($i === 0 ? ' active' : ''); ?>">
                                        <img src="../../../public/img/adm-produtos/produtos/<?= $produto->imagens[$i]->nome_imagem ?>" class="d-block w-100 imagem-teste" alt="Imagem do produto">
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <!-- Fim Carrosel -->

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Categoria</label>
                        <input class="form-control" type="text" <?php foreach ($categorias as $cat) : if ($cat->id === $produto->categoriaID) : ?> value="<?= $cat->nome ?>" <?php endif;
                                                                                                                                                                        endforeach; ?> aria-label="categoria do Produto" disabled readonly>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Descrição</label>
                        <textarea class="form-control text-justify" id="exampleFormControlTextarea1" rows="3" disabled><?= $produto->descricao ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Preço</label>
                        <input class="form-control" type="text" value="R$ <?= number_format($produto->preco, 2, ',', '') ?>" aria-label="Preço do produto" disabled readonly>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<?php include '../components/head.php' ?>
<?php include '../components/header.php' ?>

<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Adicionar equipamento
                        <a href="equipaments.php" class="btn btn-outline-danger float-end">Voltar</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="../services/equipament-actions.php" method="post">
                        <div class="mb-3">
                            <label for="">Número de Série</label>
                            <input type="text" name="equipament_serie_number" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Data de Cadastro</label>
                            <input type="datetime-local" name="equipament_register_date" class="form-control">
                        </div>
                        
                        <label for="">Selecione um Tipo</label>
                        <select class="form-select mb-3" name="equipament_type">
                            <option value="Tensao">Tensão</option>
                            <option value="Corrente">Corrente</option>
                            <option value="Óleo">Óleo</option>
                        </select>

                        <div class="mb-3">
                            <button type="submit" name="create_equipament" class="btn btn-primary">
                                Salvar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../components/footer.php'?>
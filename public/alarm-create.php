<?php include '../components/head.php' ?>
<?php include '../components/header.php' ?>

<div class="container my-5">
    <?php include '../services/message.php'?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Adicionar alarme
                        <a href="alarms.php" class="btn btn-outline-danger float-end">Voltar</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="../services/alarm-actions.php" method="post">
                        <div class="mb-3">
                            <label for="">Equipamento Relacionado</label>
                            <input type="text" name="alarm_equipament" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Data de Cadastro</label>
                            <input type="datetime-local" name="alarm_register_date" class="form-control">
                        </div>
                        
                        <label for="">Selecione uma Classificação</label>
                        <select class="form-select mb-3" name="alarm_classification">
                            <option value="Urgente">Urgente</option>
                            <option value="Emergente">Emergente</option>
                            <option value="Ordinario">Ordinário</option>
                        </select>

                        <div class="mb-3">
                            <label for="">Descrição do Alarme</label>
                            <input type="text" name="alarm_description" class="form-control">
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="create_alarm" class="btn btn-primary">
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
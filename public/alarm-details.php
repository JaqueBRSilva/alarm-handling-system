<?php include '../components/head.php' ?>
<?php include '../components/header.php' ?>

<?php
    session_start();
    require '../services/connection.php'
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Visualizar alarme
                        <a href="alarms.php" class="btn btn-outline-danger float-end">
                            Voltar
                        </a>
                    </h4>
                </div>

                <div class="card-body">
                    <?php 
                        if (isset($_GET['alarm_id'])) {
                            $alarm_id = mysqli_real_escape_string($connection, $_GET['alarm_id']);
                            $sql = "SELECT * FROM alarms WHERE alarm_id='$alarm_id'";
                            $query = mysqli_query($connection, $sql);

                            if (mysqli_num_rows($query) > 0) {
                                $alarm = mysqli_fetch_array($query);
                            }
                    ?>
                    <form action="" method="">
                        <input type="hidden" name="alarm_id" value="<?=$alarm['alarm_id']?>" >
                        <div class="mb-3">
                            <label for="">Equipamento Relacionado</label>
                            <input disabled type="text" name="alarm_equipament" value="<?=$alarm['alarm_equipament']?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Data de Cadastro</label>
                            <input disabled type="datetime-local" name="alarm_register_date" value="<?=$alarm['alarm_register_date']?>" class="form-control">
                        </div>
                        
                        <label for="">Selecione uma Classificação</label>
                        <select disabled class="form-select mb-3" name="alarm_classification" value="<?=$alarm['alarm_classification']?>">
                            <option value="Urgente">Urgente</option>
                            <option value="Emergente">Emergente</option>
                            <option value="Ordinario">Ordinário</option>
                        </select>

                        <div class="mb-3">
                            <label for="">Descrição do Alarme</label>
                            <input disabled type="text" name="alarm_description" value="<?=$alarm['alarm_description']?>" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <a href="alarm-update.php?alarm_id=<?=$alarm['alarm_id'] ?>" class="btn btn-outline-success">
                                Editar informações
                            </a>
                        </div>
                    </form>
                    <?php 
                        } else {
                            echo "<h5>Alarme Não Encontrado</h5>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
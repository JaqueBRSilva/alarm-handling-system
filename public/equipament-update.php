<?php include '../components/head.php' ?>
<?php include '../components/header.php' ?>

<?php
    session_start();
    require '../services/connection.php';
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Editar alarme
                        <a href="alarms.php" class="btn btn-outline-danger float-end">
                            Voltar
                        </a>
                    </h4>
                </div>

                <div class="card-body">
                    <?php 
                        if (isset($_GET['equipament_id'])) {
                            $equipament_id = mysqli_real_escape_string($connection, $_GET['equipament_id']);
                            $sql = "SELECT * FROM equipaments WHERE equipament_id='$equipament_id'";
                            $query = mysqli_query($connection, $sql);

                            if (mysqli_num_rows($query) > 0) {
                                $equipament = mysqli_fetch_array($query);
                            }
                    ?>
                    <form action="../services/equipament-actions.php" method="POST">
                        <input type="hidden" name="equipament_id" value="<?=$equipament['equipament_id']?>" >
                        <div class="mb-3">
                            <label for="">Número de Série</label>
                            <input type="text" name="equipament_serie_number" value="<?=$equipament['equipament_serie_number']?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Data de Cadastro</label>
                            <input type="datetime-local" name="equipament_register_date" value="<?=$equipament['equipament_register_date']?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Selecione um Tipo</label>
                            <select class="form-select mb-3" name="equipament_type">
                                <option value="Tensao">Tensão</option>
                                <option value="Corrente">Corrente</option>
                                <option value="Óleo">Óleo</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="update_equipament" class="btn btn-warning">
                                Salvar alterações
                            </button>
                        </div>
                    </form>
                    <?php 
                        } else {
                            echo "<h5>Equipamento Não Encontrado</h5>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php include '../components/footer.php' ?>
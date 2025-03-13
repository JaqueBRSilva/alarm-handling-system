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
                    <h4>Visualizar equipamento
                        <a href="equipaments.php" class="btn btn-outline-danger float-end">
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
                    <form action="" method="">
                        <input type="hidden" name="equipament_id" value="<?=$equipament['equipament_id']?>" >
                        <div class="mb-3">
                            <label for="">Número de Série</label>
                            <input disabled type="text" name="equipament_serie_number" value="<?=$equipament['equipament_serie_number']?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Data de Cadastro</label>
                            <input disabled type="datetime-local" name="equipament_register_date" value="<?=$equipament['equipament_register_date']?>" class="form-control">
                        </div>
                        
                        <label for="">Selecione um Tipo</label>
                        <select disabled class="form-select mb-3" name="equipament_type" value="<?=$equipament['equipament_type']?>">
                            <option value="Tensao">Tensão</option>
                            <option value="Corrente">Corrente</option>
                            <option value="Óleo">Óleo</option>
                        </select>
                        
                        <div class="mb-3">
                            <a href="equipament-update.php?equipament_id=<?=$equipament['equipament_id']?>" class="btn btn-outline-success">
                                Editar informações
                            </a>
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
<?php include_once '../components/head.php' ?>
<?php include_once '../components/header.php' ?>

<?php 
  require '../services/connection.php'
?>

<div class="container mt-4">
    <?php include '../services/message.php' ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Lista de Alarmes
                        <a href="create-alarm.php" class="btn btn-primary float-end">Adicionar</a>
                    </h4>
                </div>

                <div class="card-body">
                    <table class="table tabble-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Descrição do Alarme</th>
                                <th>Data de Cadastro</th>
                                <th>Equipamento Relacionado</th>
                                <th>Classificação</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = 'SELECT * FROM alarms';
                                $alarms = mysqli_query($connection, $sql);
                                
                                if (mysqli_num_rows($alarms) > 0) {
                                    foreach($alarms as $alarm) {
                            ?>
                            <tr>
                                <td><?=$alarm['alarm_description'] ?></td>
                                <td><?=date('d/m/Y H:i', strtotime($alarm['alarm_register_date']))?></td>
                                <td><?=$alarm['alarm_equipament'] ?></td>
                                <td><?=$alarm['alarm_classification'] ?></td>
                                <td class="d-flex gap-2">
                                    <a href="create-alarm.php?id=<?=$alarm['alarm_id'] ?>" class="btn btn-secondary btn-sm">
                                        <span class="bi-eye-fill"></span>&nbsp; Visualizar
                                    </a>
                                    <a href="update-alarm.php?id=<?=$alarm['alarm_id'] ?>" class="btn btn-success btn-sm">
                                        <span class="bi-pencil-fill"></span>&nbsp; Editar
                                    </a>
                                    <a href="update-alarm.php?id=<?=$alarm['alarm_id'] ?>" class="btn btn-danger btn-sm">
                                        <span class="bi-trash3-fill"></span>&nbsp; Apagar
                                    </a>
                                </td>
                            </tr>
                                <?php 
                                    }
                                } else {
                                        echo '<h5>Nenhum Alarme Encontrado</h5>';
                                    }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>  
</div>
    
<?php include_once '../components/footer.php' ?>
<?php 
    session_start();
    require 'connection.php';

    if (isset($_POST['create_equipament'])) {

        $equipament_serie_number = mysqli_real_escape_string($connection, trim($_POST['equipament_serie_number']));
        $equipament_register_date = mysqli_real_escape_string($connection, trim($_POST['equipament_register_date']));
        $equipament_type = mysqli_real_escape_string($connection, trim($_POST['equipament_type']));

        $sql = "INSERT INTO equipaments (equipament_serie_number, equipament_register_date, equipament_type) VALUES ('$equipament_serie_number', '$equipament_register_date', '$equipament_type')";

        mysqli_query($connection, $sql);

        if (mysqli_affected_rows($connection) > 0) {
            $_SESSION['message'] = 'Equipamento Criado com Sucesso';
            header('Location: ../public/equipaments.php');
            exit;
        } else {
            $_SESSION['message'] = 'Equipamento Não Foi Criado';
            header('Location: ../public/equipaments.php');
            exit;
        }
    }

    if (isset($_POST['update_equipament'])) {
        $equipament_id = mysqli_real_escape_string($connection, $_POST['equipament_id']);

        $equipament_serie_number = mysqli_real_escape_string($connection, trim($_POST['equipament_serie_number']));
        $equipament_register_date = mysqli_real_escape_string($connection, trim($_POST['equipament_register_date']));
        $equipament_type = mysqli_real_escape_string($connection, trim($_POST['equipament_type']));

        $sql = "UPDATE equipaments SET equipament_serie_number = '$equipament_serie_number', equipament_register_date = '$equipament_register_date', equipament_type = '$equipament_type'";

        $sql .= " WHERE equipament_id = '$equipament_id'";

        mysqli_query($connection, $sql);

        if (mysqli_affected_rows($connection) > 0) {
            $_SESSION['message'] = 'Equipamento atualizado com sucesso';
            header('Location: ../public/equipaments.php');
            exit;
        } else {
            $_SESSION['message'] = 'Equipamento não foi atualizado';
            header('Location: ../public/equipaments.php');
            exit;
        }
    }

    if (isset($_POST['delete_equipament'])) {
        $equipament_id = mysqli_real_escape_string($connection, $_POST['delete_equipament']);

        $sql = "DELETE FROM equipaments WHERE equipament_id = '$equipament_id'";

        mysqli_query($connection, $sql);

        if (mysqli_affected_rows($connection) > 0) {
            $_SESSION['message'] = 'Equipamento deletado com Sucesso';
            header('Location: ../public/equipaments.php');
            exit;
        } else {
            $_SESSION['message'] = 'Equipamento não foi deletado';
            header('Location: ../public/equipaments.php');
            exit;
        }
    }
?>
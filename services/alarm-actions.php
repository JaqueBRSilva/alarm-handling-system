<?php 
    session_start();
    require 'connection.php';

    if (isset($_POST['create_alarm'])) {

        $alarm_description = mysqli_real_escape_string($connection, trim($_POST['alarm_description']));
        $alarm_register_date = mysqli_real_escape_string($connection, trim($_POST['alarm_register_date']));
        $alarm_equipament = mysqli_real_escape_string($connection, trim($_POST['alarm_equipament']));
        $alarm_classification = mysqli_real_escape_string($connection, trim($_POST['alarm_classification']));

        $sql = "INSERT INTO alarms (alarm_equipament, alarm_register_date, alarm_classification, alarm_description) VALUES ('$alarm_equipament', '$alarm_register_date', '$alarm_classification', '$alarm_description')";

        mysqli_query($connection, $sql);

        if (mysqli_affected_rows($connection) > 0) {
            $_SESSION['message'] = 'Alarme Criado com Sucesso';
            header('Location: ../public/alarms.php');
            exit;
        } else {
            $_SESSION['message'] = 'Alarme Não Foi Criado';
            header('Location: ../public/alarms.php');
            exit;
        }
    }

    if (isset($_POST['update_alarm'])) {
        $alarm_id = mysqli_real_escape_string($connection, $_POST['alarm_id']);

        $alarm_description = mysqli_real_escape_string($connection, trim($_POST['alarm_description']));
        $alarm_register_date = mysqli_real_escape_string($connection, trim($_POST['alarm_register_date']));
        $alarm_equipament = mysqli_real_escape_string($connection, trim($_POST['alarm_equipament']));
        $alarm_classification = mysqli_real_escape_string($connection, trim($_POST['alarm_classification']));

        $sql = "UPDATE alarms SET alarm_description = '$alarm_description', alarm_register_date = '$alarm_register_date', alarm_equipament = '$alarm_equipament', alarm_classification = '$alarm_classification'";

        $sql .= " WHERE id = '$alarm_id'";

        mysqli_query($connection, $sql);

        if (mysqli_affected_rows($connection) > 0) {
            $_SESSION['message'] = 'Alarme Atualizado Com Sucesso';
            header('Location: ../public/alarms.php');
            exit;
        } else {
            $_SESSION['message'] = 'Alarme Não Foi Atualizado';
            header('Location: ../public/alarms.php');
            exit;
        }
    }

    if (isset($_POST['delete_alarm'])) {
        $alarm_id = mysqli_real_escape_string($connection, $_POST['delete_alarm']);

        $sql = "DELETE FROM alarms WHERE id = '$alarm_id'";

        mysqli_query($connection, $sql);

        if (mysqli_affected_rows($connection) > 0) {
            $_SESSION['message'] = 'Alarme Apagado Com Sucesso';
            header('Location: ../public/alarms.php');
            exit;
        } else {
            $_SESSION['message'] = 'Alarme Não Foi Apagado';
            header('Location: ../public/alarms.php');
            exit;
        }
    }
?>
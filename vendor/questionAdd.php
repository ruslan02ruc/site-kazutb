<?php
    session_start();
    require_once 'connect.php';

    // $email =   strval($_SESSION['user']['email']);
    // $name =  strval($_SESSION['user']['full_name']);

    //  экранирует специальные символы в строке
    $tema = mysqli_real_escape_string($connect, $_REQUEST['tema']);
    // $email = mysqli_real_escape_string($connect, $email1);
    $telephone = mysqli_real_escape_string($connect, $_REQUEST['telephone']);
    $question = mysqli_real_escape_string($connect, $_REQUEST['question']);
    $name = mysqli_real_escape_string($connect, $_REQUEST['name']);


    $error_fields = [];

    if ($tema === '') {
        $error_fields[] = 'tema';
    }

    if ($telephone === '') {
        $error_fields[] = 'telephone';
    }

    if ($question === '') {
        $error_fields[] = 'question';
    }

    if (!empty($error_fields)) {
        $response = [
            "status" => false,
            "type" => 1,
            "message" => "Проверьте правильность полей",
            "fields" => $error_fields
        ];

        echo json_encode($response);

        die();
    }

    // Попытка выполнения запроса вставки
    // $check_user = mysqli_query($connect, "INSERT INTO `questions` (`tema`, `email`, `telephone`, `question`, `name`) VALUES ('ggg','ggg','gggne','ggg','ggg');");
    $sql = mysqli_query($connect, "INSERT INTO `questions` (`tema`, `telephone`, `question`, `name`) VALUES ('$tema','$telephone','$question','$name');");
    if(mysqli_query($connect, $sql)){
        echo "Записи успешно вставлены.";
    } else{
        echo "ERROR: Не удалось выполнить $sql. " . mysqli_error($connect);
    }


    // Закрыть соединение
    mysqli_close($connect);
?>

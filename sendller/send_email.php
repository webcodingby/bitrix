<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Проверка на пустоту
    if (empty($email) || empty($message)) {
        echo "Пожалуйста, заполните все поля.";
    } else {
        // Проверка валидности email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Неверный формат email.";
        } else {
            // Отправка данных на почту
            $to = "webcodingby@yandex.ru"; // Замените на реальный email
            $subject = "Форма обратной связи";
            $headers = "From: $email";
            $mailBody = "Email: $email\n\n$message";

            if (mail($to, $subject, $mailBody, $headers)) {
                echo "Ваше сообщение отправлено.";
            } else {
                echo "Ошибка при отправке сообщения.";
            }
        }
    }
}
?>

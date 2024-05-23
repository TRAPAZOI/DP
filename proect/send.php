<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Проверка на пустые поля
    if (empty($name) || empty($email) || empty($message)) {
        header("Location: index.php?error=All fields are required.");
        exit;
    }

    // Проверка email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.php?error=Invalid email format.");
        exit;
    }

    // Отправка email
    $to = "dima.zienko2004@gmail.com"; // Укажите свой email
    $subject = "New message from contact form";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: index.php?success=1");
        exit;
    } else {
        header("Location: index.php?error=Ошибка");
        exit;
    }
} else {
    echo "Invalid request method.";
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $text = $_POST['text'] ?? ''; // Получаем текст из поля 'text'
    //Работа с базой данных
    echo "Получен текст: " . htmlspecialchars($text);
}

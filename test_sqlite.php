<?php
try {
    // Создаем (или открываем) базу данных SQLite
    $pdo = new PDO('sqlite:test_database.db');
    
    // Устанавливаем режим обработки ошибок
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Создаем таблицу
    $pdo->exec("CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY,
        name TEXT,
        email TEXT
    )");
    
    // Вставляем данные
    $pdo->exec("INSERT INTO users (name, email) VALUES ('John Doe', 'john@example.com')");
    
    // Выполняем запрос
    $stmt = $pdo->query("SELECT * FROM users");
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Выводим данные
    foreach ($users as $user) {
        echo "ID: " . $user['id'] . " - Name: " . $user['name'] . " - Email: " . $user['email'] . "\n";
    }
} catch (PDOException $e) {
    echo "Ошибка подключения к базе данных: " . $e->getMessage();
}
?>

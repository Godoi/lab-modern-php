<?php
require_once __DIR__ . '/Calculator.php';

header('Content-Type: text/plain; charset=utf-8');

$calc = new Calculator();

echo "✅ PHP " . PHP_VERSION . "\n";
echo extension_loaded('xdebug') ? "✅ Xdebug " . phpversion('xdebug') . "\n" : "❌ Xdebug\n";
echo extension_loaded('pdo_mysql') ? "✅ pdo_mysql\n" : "❌ pdo_mysql\n";

// Teste rápido
try {
    $result = $calc->add(10, 32);
    echo "🧮 Calculator::add(10, 32) = $result\n";

    $pdo = new PDO('mysql:host=db;dbname=app_db;charset=utf8mb4', 'app_user', 'app_pass');
    echo "✅ MySQL: " . $pdo->query('SELECT VERSION()')->fetchColumn() . "\n";
} catch (Exception $e) {
    echo "❌ Erro: " . $e->getMessage() . "\n";
}
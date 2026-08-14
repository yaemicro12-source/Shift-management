<?php
try {
// データベース接続情報
$dsn = 'mysql:host=localhost;dbname=test_db;charset=utf8';
$username = 'root';
$password = '';

// PDOオプション設定
$options = [
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // エラーを例外としてスロー
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // デフォルトのフェッチモードを連想配列に設定
];

// PDOインスタンス生成
$pdo = new PDO($dsn, $username, $password, $options);
echo "データベースに接続できました！";
} catch (PDOException $e) {
// エラー処理
echo "接続に失敗しました: " . $e->getMessage();
}
?>


<?php
$stmt = $pdo->query('SELECT * FROM users');
while ($row = $stmt->fetch()) {
echo $row['name'] . '<br>';
}
?>


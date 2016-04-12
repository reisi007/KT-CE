<html>
<head>
    <title>Setting up DB</title>
</head>
<body>
<?php
require_once 'Helper.php';
try {
    $pdo = getConnection();
    $sql = file_get_contents('create.sql');
    $pdo->exec($sql);
    echo "<h1>Database setup finished successfully :)</h1>";
} catch (Exception $e) {
    echo "<h1>Error $e :(</h1>";
}

?>
</body>
</html>
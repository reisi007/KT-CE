<?php
/**
 * Created by PhpStorm.
 * User: Florian
 * Date: 12.04.2016
 * Time: 08:23
 */
require_once 'jsonHeader.php';
$sql = file_get_contents('insert.sql');
$data = getVariable('data');
try {
    if (strlen($data) === 0) {
        throw new Exception('Invalid argument');
    }
    $connection = getConnection();
    $pstmt = $connection->prepare($sql);
    $pstmt->bindValue(':data', $data, PDO::PARAM_STR);
    $pstmt->execute();
    $connection->commit();
    echo '{"result": 1 }';
} catch (Exception $e) {
    var_dump($e);
    echo json_encode($e);
}
?>
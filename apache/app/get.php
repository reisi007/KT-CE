<?php
/**
 * Created by PhpStorm.
 * User: Florian
 * Date: 12.04.2016
 * Time: 08:23
 */
require_once 'jsonHeader.php';
$sql = 'SELECT * FROM ktce.main ORDER BY time DESC LIMIT 100';
try {
    $connection = getConnection();
    $pstmt = $connection->query($sql);
    toJSON($pstmt);
} catch (Exception $e) {
    echo json_encode($e);
}
?>
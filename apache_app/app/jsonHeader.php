<?php
/**
 * Created by PhpStorm.
 * User: Florian
 * Date: 12.04.2016
 * Time: 08:23
 */
require_once 'Helper.php';
header('Content-Type: application/json');
/**
 * @param $pstmt \PDOStatement A prepated statement
 */
function toJSON($pstmt)
{
    $pstmt->execute();
    echo json_encode($pstmt->fetchAll(\PDO::FETCH_NAMED));
}

?>
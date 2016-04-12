<?php
/**
 * Created by PhpStorm.
 * User: Florian
 * Date: 12.04.2016
 * Time: 08:04
 */

/**
 * Tries to create a connection to the defined MySQL database
 * @return \pdo
 * @throws \PDOException
 */
function getConnection()
{
    $mysql = [];
    $mysql_host = 'host';
    $mysql_user = 'user';
    $mysql_port = 'port';
    $mysql_password = 'password';
    $mysql[$mysql_host] = 'mysql';
    $mysql[$mysql_user] = 'root';
    $mysql[$mysql_password] = '1234';

    $connection = new \PDO('mysql:host=' . $mysql[$mysql_host] . ';charset=utf8mb4',
        $mysql[$mysql_user], $mysql[$mysql_password]);
    $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    $connection->beginTransaction();
    return $connection;
}

/**
 * @param $array array
 */
function arrayOfArrayToHtml($array)
{
    if (empty($array)) return false;
    $keys = array_keys($array[0]);
    if (count($keys) === 0) {
        return false;
    }
    $html = "<table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">";
    $html .= "<thead><tr>";

    foreach ($keys as $k) {
        $html .= "<th class=\"mdl-data-table__cell--non-numeric\">$k</th>";
    }
    $html .= "</tr></thead><tbody>";
    $html .= "<tr>";
    foreach ($array as $row) {
        foreach ($keys as $cur) {
            $field = $row[$cur];
            $html .= "<td class=\"mdl-data-table__cell--non-numeric\">$field</td>";
        }
        $html .= "</tr>";
    }
    $html .= "</tbody></table>";
    return $html;
}

/**
 * @param $name string The name of the HTTP form variable
 * @param null $default The default value, or a String representation
 * @return string The variable content as String
 */
function getVariable($name, $default = null)
{
    $tmp = isset($_REQUEST[$name]) ? $_REQUEST[$name] : $default;
    $tmp = (string)$tmp;
    return $tmp;
}

?>

<?php
//$Connection;
function getConnection($database_name)
{
    $conn = mysqli_connect('localhost', 'root', '', $database_name);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    if (!$conn) {
        die("Can't connect to the database server");
    }
    return $conn;
}

function getDbRowsAsArray($conn, $query)
{
    $results = mysqli_query($conn, $query);
    $rows = array();
    while ($row = mysqli_fetch_array($results)) {
        $rows[] = $row;
    }
    if (count($rows) > 0) {
        mysqli_close($conn);
        return $rows;
    }
}

function writeToFile($fileName, $str)
{
    //die("Reading file : " . $fileName);
    //print_r($str);
    $str = trim($str);
    if (strlen($str) > 0) {
        $file = fopen($fileName, "w+");
        fwrite($file, $str);
        fclose($file);
    } else {
        die("Cannot open the file : " . $fileName);
    }
}

function readfromFile($fileName)
{
    $fh = fopen($fileName, "r+");
    $len = filesize($fileName);
    if ($len > 0) {
        $data = fread($fh, filesize($fileName));
    } else {
        $data = "";
    }

    fclose($fh);
    return $data;
}


//$field_array_values = column =>value pair
function insertSQL($tablename, $field_array_values)
{
    //declares
    //insert into tablename (columns,..) values ();

    unset($columns);
    unset($columns_values);

    //field checks
    if ($field_array_values == null) {
        exit();
    }

    $insert_query = "INSERT INTO ";
    $insert_query .= " $tablename \n  (";
    //field or col names
    $i = 0;
    foreach ($field_array_values as $key => $field) {
        $columns = $key;
        /** encode strings **/
        $field = htmlspecialchars($field);
        //$field = mysql_escape_string($field);
        /** End Encoding **/
        if ($i == 0) {
            $insert_query .= $columns;
        } else {
            $insert_query .= ',' . $columns;
        }
        if (isset($columns_values) == false) {
            //no value before
            $columns_values = " \n '$field' \n";
        } else {
            $columns_values .= ",'$field' \n";
        }
        $i++;
    }
    $insert_query .= " \n ) VALUES ( \n";
    $insert_query .= $columns_values;
    $insert_query .= ")";

    return $insert_query;
}

function executeSQL($conn, $sql)
{
    // echo "</br>SQL:<pre>" ;print_r( $sql ) ;echo "</pre></br>" ; die();
    $retval = mysqli_query($conn, $sql);
    if (!$retval) {
        echo "Can't save data : " + $sql;
    }
    mysqli_close($conn);
}


?>
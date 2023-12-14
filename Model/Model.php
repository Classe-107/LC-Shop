<?php
include __DIR__ . '/../server/settings.php';
include __DIR__ . '/../Traits/DrawCard.php';
abstract class Model
{

    use DrawCard;
    public function __construct()
    {

    }

    public static function fetchAll($conn, $table)
    {
        //impostiamo la query
        $sql = "SELECT * FROM $table";


        $result = $conn->query($sql);
        //var_dump($result);
        return $result;

    }




}

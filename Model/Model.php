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
    public static function create($conn, $data, $table)
    {
        $sql = "";
        $s = "";
        if ($table == 'movies') {
            $sql = "INSERT INTO $table (title, original_title, language, vote, image) VALUES (?, ?, ?, ?, ?)";
            $s = "sssss";
        } else {
            $sql = "INSERT INTO $table (title, plot, cover_image) VALUES (?, ?, ?)";
            $s = "sss";
        }
        $stmt = $conn->prepare($sql);
        $stmt->bind_param($s, ...array_values($data));
        $stmt->execute();
        return $stmt->insert_id;
    }



}

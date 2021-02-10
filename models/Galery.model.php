<?php

include ROOT.'/core/Dbh.class.php';

class Galery extends Dbh{
    public static function getPhotos(){
        $pdo = parent::connect();

        $sql = "SELECT p.id, p.title, p.date, p.src, c.title as category FROM photos as p
                JOIN
                photos_category as c
                ON
                p.category_id = c.id
        ";

        $result = $pdo->query($sql);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $photosList = [];

        while($row = $result->fetch()){
            array_push($photosList, [
                'id' => $row['id'],
                'title' => $row['title'],
                'src' => $row['src'],
                'date' => $row['date'],
                'category' => $row['category'],
            ]);
        }

        return $photosList;
    }

    public static function getPhotosCategories(){
        $pdo = parent::connect();

        $sql = "SELECT * FROM photos_category";

        $result = $pdo->query($sql);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $categoriesList = [];

        while($row = $result->fetch()){
            array_push($categoriesList, [
                'id' => $row['id'],
                'title' => $row['title']
            ]);
        }
        return $categoriesList;
    }

    public static function getVideos(){
        
    }


}
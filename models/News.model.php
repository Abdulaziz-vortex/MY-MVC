<?php

include ROOT.'/core/Dbh.class.php';

class News extends Dbh{


    public static function getAllNews(){
        $pdo = parent::connect();
        $newsList = [];
        $sql = "SELECT n.id, n.title, n.short, n.date, n.images, ctg.title as category FROM news as n
                JOIN
                news_category as ctg
                ON
                n.category_id = ctg.id
        ";
        $result = $pdo->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        while($row = $result->fetch()){
            array_push($newsList, [
                'id' => $row['id'],
                'title' => $row['title'],
                'short' => $row['short'],
                'date' => $row['date'],
                'images' => $row['images'],
                'category' => $row['category']
            ]);
        }
        return $newsList;

    }


    public static function getCategoryNews($category){
        $pdo = parent::connect();
        $newsList = [];
        $sql = "SELECT n.id, n.title, n.short, n.date, n.images, ctg.title as category FROM news as n
                JOIN
                news_category as ctg
                ON
                n.category_id = ctg.id
                WHERE ctg.title = '{$category}'
        ";
        $result = $pdo->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        while($row = $result->fetch()){
            array_push($newsList, [
                'id' => $row['id'],
                'title' => $row['title'],
                'short' => $row['short'],
                'date' => $row['date'],
                'images' => $row['images'],
                'category' => $row['category']
            ]);
        }
        return $newsList;
    }


    public static function getCategories(){
        $pdo = parent::connect();
        $newsList = [];
        $sql = "SELECT * FROM news_category";
        $result = $pdo->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        while($row = $result->fetch()){
            array_push($newsList, [
                'id' => $row['id'],
                'title' => $row['title'],
                'is_available' => $row['is_available']
            ]);
        }
        return $newsList;
    }

    public static function SearchNews($search, $search_by, $sortBy, $category){
        $pdo = parent::connect();
        $newsList = [];
        $sql = "SELECT n.id, n.title, n.short, n.date, n.images, ctg.title as category FROM news as n
                JOIN
                news_category as ctg
                ON
                n.category_id = ctg.id
                WHERE ctg.title = '{$category}' AND n.title LIKE '%{$search}%'
                ORDER BY n.title {$sortBy}
        ";
        $result = $pdo->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        while($row = $result->fetch()){
            array_push($newsList, [
                'id' => $row['id'],
                'title' => $row['title'],
                'short' => $row['short'],
                'date' => $row['date'],
                'images' => $row['images'],
                'category' => $row['category']
            ]);
        }
        return $newsList;
    }

    public static function SortNews($sortBy, $category){
        $pdo = parent::connect();
        $newsList = [];
        $sql = "SELECT n.id, n.title, n.short, n.date, n.images, ctg.title as category FROM news as n
                JOIN
                news_category as ctg
                ON
                n.category_id = ctg.id
                WHERE ctg.title = '{$category}'
                ORDER BY n.title {$sortBy}
        ";
        $result = $pdo->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        while($row = $result->fetch()){
            array_push($newsList, [
                'id' => $row['id'],
                'title' => $row['title'],
                'short' => $row['short'],
                'date' => $row['date'],
                'images' => $row['images'],
                'category' => $row['category']
            ]);
        }
        return $newsList;
    }

    public static function getById($id){
        $pdo = parent::connect();
        $newsList = [];
        $sql = "SELECT n.id, n.title, n.text, n.date, n.images, ctg.title as category FROM news as n
                JOIN
                news_category as ctg
                ON
                n.category_id = ctg.id
                WHERE n.id = '{$id}'
        ";
        $result = $pdo->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        while($row = $result->fetch()){
            array_push($newsList, [
                'id' => $row['id'],
                'title' => $row['title'],
                'text' => $row['text'],
                'date' => $row['date'],
                'images' => $row['images'],
                'category' => $row['category']
            ]);
        }
        return $newsList;
    }

}
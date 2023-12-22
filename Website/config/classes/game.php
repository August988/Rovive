<?php

class Game
{

    public static function getGame($id)
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM games WHERE id = :id");
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }
  
    public static function getPopularGames($limit, $offset)
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM games ORDER BY id DESC LIMIT :limit OFFSET :offset");
        $stmt->bindValue(":limit", $limit, PDO::PARAM_INT);
        $stmt->bindValue(":offset", $offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function getPopularGamesTotal()
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM games");
        $stmt->execute();
        return $stmt->fetchColumn();
    }

    public static function searchTotal($query)
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM games WHERE title LIKE :query");
        $stmt->bindValue(":query", "%$query%", PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchColumn();
    }

    public static function search($query, $limit, $offset)
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM games WHERE title LIKE :query ORDER BY id DESC LIMIT :limit OFFSET :offset");
        $stmt->bindValue(":query", "%$query%", PDO::PARAM_STR);
        $stmt->bindValue(":limit", $limit, PDO::PARAM_INT);
        $stmt->bindValue(":offset", $offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function getGamesByUserId($id)
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM games WHERE creator_id = :id");
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

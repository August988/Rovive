<?php

// asset class

class Asset
{

    public static function getAsset($id)
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM assets WHERE id = :id");
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    public static function addAsset($name, $description, $type, $fileUrl)
    {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO assets (name, description, type, file_url) VALUES (:name, :description, :type, :file_url)");
        $stmt->bindValue(":name", $name, PDO::PARAM_STR);
        $stmt->bindValue(":description", $description, PDO::PARAM_STR);
        $stmt->bindValue(":type", $type, PDO::PARAM_STR);
        $stmt->bindValue(":file_url", $fileUrl, PDO::PARAM_STR);
        $stmt->execute();
    }

    public static function deleteAsset($id)
    {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM assets WHERE id = :id");
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public static function approveAsset($id)
    {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE assets SET approved = 1 WHERE id = :id");
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public static function disapproveAsset($id)
    {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE assets SET approved = 0, name = 'Content Declined', description = 'Asset has been moderated.', file_url = :file_url WHERE id = :id");
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);

        $asset = self::getAsset($id);

        $fileUrl = "";

        if ($asset["type"] == "sound") {
            $fileUrl = "/uploads/disapproved.mp3";
        }

        $stmt->bindValue(":file_url", $fileUrl, PDO::PARAM_STR);
        $stmt->execute();
    }

    public static function updateAsset($id, $name, $description, $type, $fileUrl)
    {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE assets SET name = :name, description = :description, type = :type, file_url = :file_url WHERE id = :id");
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->bindValue(":name", $name, PDO::PARAM_STR);
        $stmt->bindValue(":description", $description, PDO::PARAM_STR);
        $stmt->bindValue(":type", $type, PDO::PARAM_STR);
        $stmt->bindValue(":file_url", $fileUrl, PDO::PARAM_STR);
        $stmt->execute();
    }
}

<?php

class User
{

    public static function getUser($id)
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    public static function getUserByUsername($username)
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindValue(":username", $username, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }

    public static function searchTotal($query)
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE username LIKE :query");
        $stmt->bindValue(":query", "%$query%", PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchColumn();
    }

    public static function search($query, $limit, $offset)
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username LIKE :query ORDER BY id DESC LIMIT :limit OFFSET :offset");
        $stmt->bindValue(":query", "%$query%", PDO::PARAM_STR);
        $stmt->bindValue(":limit", $limit, PDO::PARAM_INT);
        $stmt->bindValue(":offset", $offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function moderate($username, $type, $reason, $expires)
    {
        global $pdo;

        $userid = self::getUserByUsername($username)["id"];

        $stmt = $pdo->prepare("INSERT INTO moderation_actions (user_id, action, reason, moderatedBy, expiresAt, createdAt) VALUES (:user_id, :type, :reason, :moderator, :expires, :createdAt)");
        $stmt->bindValue(":user_id", $userid, PDO::PARAM_INT);
        $stmt->bindValue(":type", $type, PDO::PARAM_STR); // Change to PARAM_STR
        $stmt->bindValue(":reason", $reason, PDO::PARAM_STR);
        $stmt->bindValue(":moderator", $_SESSION["user"]["id"], PDO::PARAM_INT);
        $stmt->bindValue(":expires", $expires, PDO::PARAM_INT);
        $stmt->bindValue(":createdAt", time(), PDO::PARAM_INT);
        $stmt->execute();

        $id = $pdo->lastInsertId();

        $stmt = $pdo->prepare("UPDATE users SET ongoing_action_id = :id WHERE id = :user_id");
        $stmt->bindValue(":user_id", $userid, PDO::PARAM_INT);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT); // Change order of binding
        $stmt->execute();
    }

    public static function removeModeration($userid)
    {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM moderation_actions WHERE user_id = :id");
        $stmt->bindValue(":id", $userid, PDO::PARAM_INT);
        $stmt->execute();

        $stmt = $pdo->prepare("UPDATE users SET ongoing_action_id = NULL WHERE id = :user_id");
        $stmt->bindValue(":user_id", $userid, PDO::PARAM_INT);
        $stmt->execute();
    }

    public static function generateInviteKey()
    {
        global $pdo;
        $lastkeycreatedtime = self::getUser($_SESSION["user"]["id"])["lastInviteKeyCreated"];

        if (time() - $lastkeycreatedtime < 43200) {
            return "uneligible";
        } else {
            $invite_key = bin2hex(openssl_random_pseudo_bytes(16));

            $stmt = $pdo->prepare("UPDATE users SET lastInviteKeyCreated = :time WHERE id = :user_id");
            $stmt->bindValue(":user_id", $_SESSION["user"]["id"], PDO::PARAM_INT);
            $stmt->bindValue(":time", time(), PDO::PARAM_INT);
            $stmt->execute();

            $stmt = $pdo->prepare("INSERT INTO invites (createdBy, inviteKey, createdAt) VALUES (:user_id, :invite_key, :time)");
            $stmt->bindValue(":user_id", $_SESSION["user"]["id"], PDO::PARAM_INT);
            $stmt->bindValue(":invite_key", $invite_key, PDO::PARAM_STR);
            $stmt->bindValue(":time", time(), PDO::PARAM_INT);
            $stmt->execute();

            return $invite_key;
        }
    }

    public static function admin_generateInviteKey()
    {
        global $pdo;

        $invite_key = bin2hex(openssl_random_pseudo_bytes(16));

        $stmt = $pdo->prepare("UPDATE users SET lastInviteKeyCreated = :time WHERE id = :user_id");
        $stmt->bindValue(":user_id", $_SESSION["user"]["id"], PDO::PARAM_INT);
        $stmt->bindValue(":time", time(), PDO::PARAM_INT);
        $stmt->execute();

        $stmt = $pdo->prepare("INSERT INTO invites (createdBy, inviteKey, createdAt) VALUES (:user_id, :invite_key, :time)");
        $stmt->bindValue(":user_id", $_SESSION["user"]["id"], PDO::PARAM_INT);
        $stmt->bindValue(":invite_key", $invite_key, PDO::PARAM_STR);
        $stmt->bindValue(":time", time(), PDO::PARAM_INT);
        $stmt->execute();

        return $invite_key;
    }

    public function getAccountAction($user_id)
    {
        global $pdo;

        $stmt = $pdo->prepare("SELECT * FROM moderation_actions WHERE user_id = :user_id");
        $stmt->bindValue(":user_id", $user_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function changeEmail($user_id, $new_email)
    {
        global $pdo;

        $stmt = $pdo->prepare("UPDATE users SET email = :new_email WHERE id = :user_id");
        $stmt->bindValue(":user_id", $user_id, PDO::PARAM_INT);
        $stmt->bindValue(":new_email", $new_email, PDO::PARAM_STR);
        $stmt->execute();
    }
}

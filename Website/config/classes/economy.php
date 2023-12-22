<?php

class Economy
{
    public static function giveCurrency($amount, $userId)
    {
        global $pdo;

        $stmt = $pdo->prepare('UPDATE users SET currency = currency + :amount WHERE id = :id');
        $stmt->execute([
            'amount' => $amount,
            'id' => $userId
        ]);

        return true;
    }

    public static function takeCurrency($amount, $userId)
    {
        global $pdo;

        $stmt = $pdo->prepare('UPDATE users SET currency = currency - :amount WHERE id = :id');
        $stmt->execute([
            'amount' => $amount,
            'id' => $userId
        ]);

        return true;
    }

    public static function getCurrency($userId)
    {
        global $pdo;

        $stmt = $pdo->prepare('SELECT currency FROM users WHERE id = :id');
        $stmt->execute([
            'id' => $userId
        ]);

        return $stmt->fetch()['currency'];
    }

    public static function logTransaction($fromUserId, $toUserId, $amount, $name)
    {
        global $pdo;

        $stmt = $pdo->prepare('INSERT INTO transactions (fromUserId, toUserId, amount, name) VALUES (:fromUserId, :toUserId, :amount, :name)');
        $stmt->execute([
            'fromUserId' => $fromUserId,
            'toUserId' => $toUserId,
            'amount' => $amount,
            'name' => $name
        ]);

        return true;
    }

    public static function commitTransaction($fromUserId, $toUserId, $amount, $name = "Transaction")
    {
        self::takeCurrency($amount, $fromUserId);
        self::giveCurrency($amount, $toUserId);
        self::logTransaction($fromUserId, $toUserId, $amount, $name);

        return true;
    }

    public static function getTransaction($id)
    {
        global $pdo;

        $stmt = $pdo->prepare('SELECT * FROM transactions WHERE id = :id');
        $stmt->execute([
            'id' => $id
        ]);

        return $stmt->fetch();
    }

    public static function rollbackTransaction($id)
    {
        global $pdo;

        $transaction = self::getTransaction($id);

        $stmt = $pdo->prepare('DELETE FROM transactions WHERE id = :id');
        $stmt->execute([
            'id' => $id
        ]);

        self::giveCurrency($transaction['amount'], $transaction['fromUserId']);
        self::takeCurrency($transaction['amount'], $transaction['toUserId']);

        return true;
    }
}

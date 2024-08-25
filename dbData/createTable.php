<?php
$pdo = new PDO($dsn, $user, $password);
$res = $pdo->query('SHOW TABLES LIKE "usersTable"');
if ($res->rowCount()) {
    return;
} else {
    try {
        $sql = "CREATE TABLE `usersTable` (
        `id` INT NOT NULL AUTO_INCREMENT ,
        `name` VARCHAR(255) NOT NULL ,
        `userInput` VARCHAR(255) NOT NULL ,
        `userFibonacci` VARCHAR(1000) NOT NULL ,
        `user_IP` VARCHAR(255) NOT NULL,
          PRIMARY KEY (`id`)) ENGINE = InnoDB;";

        $pdo->exec($sql);
        echo "Таблиця успішно створена";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}


<?php
$pdo = new PDO($dsn, $user, $password);

function fibonacci($userFibonacci)
{
    $a = 0;
    $b = 1;
    for ($i = 0; $i < $userFibonacci; $i++) {
        $temp = $a;
        $a = $b;
        $b = $temp + $b;
    }
    return $a;
}

if (isset($_POST['userName']) && isset($_POST['userNumber'])) {
    $userName = htmlspecialchars($_POST['userName'], ENT_QUOTES, 'UTF-8');
    $userNumber = htmlspecialchars($_POST['userNumber'], ENT_QUOTES, 'UTF-8');
    $userFibonacci = htmlspecialchars(fibonacci($_POST['userNumber']), ENT_QUOTES, 'UTF-8');
    $user_IP = $_SERVER['REMOTE_ADDR'];
    $data = [
        'userName' => $userName,
        'userNumber' => $userNumber,
        'user_IP' => $user_IP,
        'userFibonacci' => $userFibonacci
    ];

    $sql = "INSERT INTO usersTable (name, userInput,user_IP,userFibonacci) VALUES (:userName, :userNumber,:user_IP,:userFibonacci)";
    $pdo->prepare($sql)->execute($data);
}

$sql = 'SELECT * FROM usersTable ORDER BY `id` asc ';
$query = $pdo->query($sql);
$query = $query->fetchAll(PDO::FETCH_ASSOC);


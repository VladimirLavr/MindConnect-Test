<?php

class Test1
{
    static function last_word($sentence = 0)
    {
        if ($sentence) {
            $result = explode(' ', $sentence);
            $lastWordLength = strlen(end($result));
            return $lastWordLength;
        }
        return $sentence;
    }

    static function extract_string($str = '')
    {
        if ($str) {
            $firstSymbol = mb_strrpos($str, '[') + 1;
            $lastSymbol = mb_strrpos($str, ']');
            if ($firstSymbol && $lastSymbol) {
                $count = $lastSymbol - $firstSymbol;
                $searchWord = mb_substr($str, $firstSymbol, $count);
                return $searchWord;
            }

        }
        return '';
    }
}

class Test2
{
    function is_power($number, $base)
    {
        if ($number < 1 || $base < 2) {
            return false;
        }
        while ($number > 1) {
            if ($number % $base !== 0) {
                return false;
            }
            $number /= $base;
        }
        return true;
    }

    function format_number($str)
    {
        return preg_replace("/[^,.0-9]/", '', $str);
    }


    function sum_digits($int)
    {
        $int = abs($int);
        $result = 0;

        foreach (str_split($int) as $item) {
            $result += (int)$item;
        }
        return $result;
    }
}

//Task 3
// "I think we can use prapere for remove Sql injection";
$data = [];
foreach ($ids as $id) {
    $result = $connection->query("SELECT `x`, `y` FROM `values` WHERE `id`=" . $id);
}
if ($query) {
    foreach ($ids as $id) {
        $query->bind_param("i", $id);
        $query->execute();
        $result = $query->get_result();

        while ($row = $result->fetch_row()) {
            $data[] = $row;
        }
    }
    $query->close();
}

//Task 4
//"3 rows, 1 NULL value";

//Task5

//i)
"SELECT 
    customer.Name AS CustomerName, 
    customer.city AS CustomerCity, 
    salesman.Name AS SalesmanName
FROM 
    salesman
JOIN 
    customer  ON salesman.id = customer.Salesman_id
WHERE 
    salesman.commission BETWEEN 0.12 AND 0.14;";

//ii)
"SELECT 
    customer.Name AS CustomerName, 
    customer.city AS CustomerCity, 
    salesman.Name AS SalesmanName
FROM 
    salesman
LEFT JOIN 
    customer  ON salesman.id = customer.Salesman_id
WHERE 
    customer.Salesman_id IS NULL";

//Task 6
//d. INSERT INTO example (id, text1,text2) VALUES(1,'test','test');
//because Values must be not NULL










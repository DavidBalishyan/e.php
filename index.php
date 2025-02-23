<?php
// ???????????????????????????????????????
// 1. Ստեղծեք PHP ֆայլ, որը արտածում է "Hello, World!"։ ???
echo "Hello, World!";
// 2. Ստեղծեք փոփոխականներ և արտածեք դրանց արժեքները։ ???
$var1 = 5;
$var2 = 10;
echo $var1 . " " . $var2;
// 3. Գրեք ֆունկցիա, որը վերադարձնում է երկու թվերի գումարը։ ???
function sum($a, $b): mixed {
    return $a + $b;
}

echo sum(a: 5, b: 10);
// 4. Ստեղծեք զանգված և արտածեք դրա տարրերը։ ????
$arr = [1, 2, 3, 4, 5];

foreach ($arr as $item) {
    echo $item;
}
// 5. Գրեք ծրագիր, որը ստուգում է, թե թիվը զույգ է, թե կենտ։ ???

function isEven($num): bool {
    return $num % 2 == 0;
}

echo isEven(num: 5);

// 6. Օգտագործելով for ցիկլ, արտածեք 1-10 թվերը։ ???
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

// 7. Օգտագործելով while, արտածեք 1-10 թվերը։ ????
$i = 1;
while ($i <= 10) {
    echo $i;
    $i++;
}

// 8. Ստեղծեք ասոցիատիվ զանգված և արտածեք դրա տարրերը։ ????
$assocArray = [
    "first" => "David",
    "last" => "Balishyan",
    "age" => 12,
    "city" => "Erevan"
];

foreach ($assocArray as $key => $value) {
    echo "$key: $value\n";
}

// 9. Գրեք ծրագիր, որը ստուգում է, արդյոք տրված թիվը պարզ է։ ??? 

function isPrime($num): bool {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

echo isPrime(5) ? "5 is a prime number" : "5 is not a prime number";

// 10. Գրեք ֆունկցիա, որը ստուգում է տեքստը պալինդրոմ է, թե ոչ։ ????
function isPalindrome($str): bool {
    return $str == strrev($str);
}

echo isPalindrome("racecar") ? "racecar is a palindrome" : "racecar is not a palindrome";

// 11. Ստեղծեք MySQL տվյալների բազա։  --- sarqeci heto ????
// 12. Ստեղծեք աղյուսակ users անունով (id, name, email, password)։ --- sarqeci heto ????

// 13. Գրեք PHP կոդ, որը կապ է հաստատում MySQL տվյալների բազայի հետ: ????
$conn = new mysqli("localhost", "root", "", "testdb");

// 14. Գրեք SQL հարցում, որը ներմուծում է տվյալներ աղյուսակում։
$sql = "INSERT INTO users (name, email, password) VALUES ('test', 'test', '123456')";

// 15. Գրեք PHP կոդ, որը բերում է բոլոր օգտատերերին տվյալների բազայից։ ???
$conn = new mysqli("localhost", "root", "", "testdb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
// 16. Գրեք կոդ, որը թարմացնում է տվյալներ MySQL-ում։ ????

$sql = "UPDATE users SET name = 'test2' WHERE id = 1";
// 17. Գրեք կոդ, որը ջնջում է տվյալ օգտատիրոջ տվյալները։ ????

$sql = "DELETE FROM users WHERE id = 1";
// 18. Ստեղծեք որոնման ձև, որը գտնում է օգտատերերին ըստ անվան։ search.php ???

// 19. Ստեղծեք համակարգ, որը հաշվում է աղյուսակի բոլոր գրառումները։
$conn = new mysqli("localhost", "root", "", "testdb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT COUNT(*) as total FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Total records: " . $row["total"];
} else {
    echo "0 records found";
}

$conn->close();

// 20. Գրեք կոդ, որը կարգաբերում է տվյալները ըստ անվան։

$conn = new mysqli("localhost", "root", "", "testdb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users ORDER BY name ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();

// 21. Ստեղծեք HTML ձև, որը fetch-ով ուղարկում է տվյալներ PHP ֆայլին։ e21.php

// 22. Ստեղծեք PHP ֆայլ, որը ստանում և արտածում է ուղարկված տվյալները։ process.php

// 23. Գրեք AJAX հարցում, որը բերում է տվյալներ տվյալների բազայից։ -- TODO

// 24. Ստեղծեք live որոնման դաշտ fetch-ով։ e24.php

// 25. Գրեք կոդ, որը ձևում մուտքագրված տվյալները պահպանում է տվյալների բազայում առանց էջը թարմացնելու։ e25.php

// 26. Ստեղծեք JavaScript ֆայլ, որը fetch-ի միջոցով ստանում է տվյալներ և արտածում դրանք HTML-ում։ e26.php
 
// 27. Գրեք ծրագիր, որը ջնջում է տվյալներ fetch-ով և MySQLi-ով։ e27.php

// 28. Ստեղծեք օգտվողների գրանցման ձև fetch-ով։ e28.php

// 29. Ստեղծեք օգտվողի մուտք գործելու համակարգ fetch-ով։ e29.php

// 30. Գրեք ծրագիր, որը հաշվարկում է օգտվողների ընդհանուր քանակը և արտածում առանց էջը թարմացնելու։ e30.php

// 31. Ստեղծեք session համակարգ, որը պահպանում է օգտվողի տվյալները։ --TODO

// 32. Գրեք ծրագիր, որը ստուգում է, արդյոք տվյալ էլ․ հասցեն արդեն գրանցված է։ --TODO

// 33. Գրեք ֆունկցիա, որը կոդավորում է գաղտնաբառը (hash)։

// md5 hashing
function hash_pass_md5($pass): string {
    $res = md5($pass);
    return $res;
}

// password_hash fn
function hash_pass($pass): string {
    $res = password_hash($pass, PASSWORD_BCRYPT);
    return $res;
}

echo hash_pass("pass");


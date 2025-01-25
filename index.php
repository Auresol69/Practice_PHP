<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="index.php">
        <input type="radio" name="cc" value="Visa">Visa<br>
        <input type="radio" name="cc" value="Momo">Momo<br>
        <input type="radio" name="cc" value="MasterCard">MasterCard<br>
        <input type="submit" name="confirm" value="confirm">
    </form>
    <br>
</body>

</html>

<?php
// This is a comment
/*
This
is
a
mutiline
comment*/

// variable = string, integer, float, boolean
// $name = "Roy Thai";
// $price = 4.99;

// $tax_rate = 5.1;
// $online = false;
// $total = null;

// echo "Hello {$name}";
// echo "<br>Your pizza is \${$price}";
// echo "<br>The sales tax rate is {$tax_rate}%";
// if ($online) {
//     echo "<br>Online status: Online";
// } else {
//     echo "<br>Online status: Offline";
// }

// // calculate total
// $quantity = 4;
// $food = "pizza";

// echo "</br>You have ordered {$quantity} x {$food}";
// $total = $quantity *  $price;
// echo "</br>Your total is: \${$total}<br>";
// echo $_POST["username"] . "<br>";
// echo "{$_POST["password"]}<br>";

// get post
// $item = "pizza";
// $price = 5.99;
// $quantity = $_POST["quantity"];
// $total = null;

// $total = $quantity * $price;
// echo "You have ordered {$quantity} x {$item}/s";
// echo "<br>Your total is \${$total}";

// associative arrays

$capitals = array(
    "USA" => "Washington DC",
    "Canada" => "Ottawa",
    "UK" => "London"
);

// echo $capitals["USA"]; // output: Washington DC
// $capitals["China"] = "Hong Kong";
// array_pop($capitals);
// array_shift($capitals);
$keys = array_keys($capitals);
$values = array_values($capitals);

foreach ($capitals as $key => $value) {
    echo $key . " " . $value . "<br>";
}

foreach ($keys as $key) {
    echo $key . "<br>";
}

// isset() = Returns TRUE if a variable is declared and not null
// empty() = Returns TRUE if a variable is not declared, false, null, ""
if (isset($_POST["confirm"])) {
    $creditcard = null;
    if (isset($_POST["cc"])) {
        $creditcard = $_POST["cc"];
    }
    switch ($creditcard) {
        case "Visa":
            echo "You have chosen Visa";
            break;
        case "Momo":
            echo "You have chosen Momo";
            break;
        case "MasterCard":
            echo "You have chosen MasterCard";
            break;
        default:
            echo "Invalid credit card";
            break;
    }
} else {
    echo "Please choose a credit card";
}
echo "<br>";
// String function

$str = "Hello World";
$phone = "123-456-7890";

echo strlen($str) . "<br>"; // output: 11
echo strpos($str, "lo") . "<br>"; // output: 3
echo substr($str, 6, 5) . "<br>"; // output: World
echo strtoupper($str) . "<br>"; // output: HELLO WORLD
echo trim($str) . "<br>"; // output: Hello World
echo strcmp($str, "Hello World") . "<br>";
$fullname = explode(" ", $str); // implode: array -> string
foreach ($fullname as $name) {
    echo $name . "<br>";
}
?>
<?php
$arr = range(0, 1000, 1);
shuffle($arr);

function findNum($arr, $num)
{
    $bottom = 0;
    $top = count($arr) - 1;
    $middle = (int)(($bottom + $top) / 2);
    while ($bottom <= $top) {
        if ($arr[$middle] == $num) {
            return true;
        } elseif ($arr[$middle] > $num) {
            $top = $middle - 1;
            echo 'Lower!';
        } else {
            $bottom = $middle + 1;
            echo 'Higher!';
        }
        return false;
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="#" method="get">
    <input type="text" name="num" placeholder="guess number">
    <button>Guess~</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $num = $_GET['num'];
    if (findNum($arr, $num) != -1) {
        return "You're right!";
    }
}

$matrix = [
    [0, 1, 1, 2],
    [0, 5, 0, 0],
    [2, 0, 3, 3]
];

for ($i = 0; $i <count($matrix); $i++) {
    for ($j = 0; $j < count($matrix[$j][$i]); $j++) {

    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>PHP-����</title>
</head>
<body>
<style>
    body {
        background-color: black;
        color: white;
        font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
        font-size: 27px;
    }
</style>
<?php
// 1. ���������� ���� ���� �����
function sum($num1,$num2 ){
    $res = $num1+ $num2;
    print "sum numbers $num1 and $num2: $res ";
}
$num1 = 1;
$num2 = 2;
sum($num1, $num2);

echo "<br>";
// 2. ��������� �������� ���� ��������� � ������� checkError �� � ������� sum
function checkError($num1, $num2) {
  
    if (!is_numeric($num1) || (!is_numeric($num2) && $num2 !== true)) {
        return false;
    }
    
    $sum = $num1 + $num2;
    return $sum;
}

$num1 = 15;
$num2 = true; 
$result = checkError($num1, $num2);

if ($result !== false) {
    echo "���� ����� $num1 �� $num2: $result";
} else {
    echo "�������: ��������� ������ ���� �������. �������� $num2.";
}
echo "<br>";
/**
 * @param int|float $n1 
 * @param int|float $n2 
 */
function check4Error($n1, $n2) {
    if (!is_numeric($n1) || (!is_numeric($n2))) {
        return false;
    }
    $sum = $n1 + $n2;
    return $sum;
}

$result = check4Error(2.2, 10); 

var_dump($result);

echo "<br>";

function checkError1($num1, $num2): int|float {
    if (!is_numeric($num1) || !is_numeric($num2)) {
        return false;
    }
    $sum = ($num1 + $num2);

    return $sum;
    
}
$num1 = 9.2;
$num2 = 2;

$result = checkError1($num1, $num2);

if ($result !== false) {
    echo "���� ����� $num1 �� $num2: $result. ���: " . gettype($result); 
} else {
    echo "�������: ��������� ������ ���� �������. �������� $num2.";
}
echo "<br>";
// 5. �������� ������� �� ������������� ��� ��������� ������� sum4
function sum4($num1 = 0, $num2 = 0) {
    $res = $num1 + $num2;
    print "���� ����� $num1 �� $num2: $res ";
    return $res;
}

// ������ ������� ��� ��������� (���������������� �������� �� �������������)
sum4();
echo "<br>";

$num1 = 5;
$num2 = 3;
sum4($num1, $num2); 
// 6
echo "<br>";
$globalVar = 10;

function v1() {
    global $globalVar;
    print $globalVar;
}

v1(); 

function var2() {
    echo $GLOBALS['globalVar'];
}

var2(); 
//7
echo "<br>";
function daysBetween($date1, $date2) {
    $diff = $date1->diff($date2);
    return $diff->days;
}

$date1 = new DateTime('2024-05-31');
$date2 = new DateTime(); 
$daysDifference = daysBetween($date1, $date2);
echo "ʳ������ ��� �� " . $date1->format('Y-m-d') . " �� " . $date2->format('Y-m-d') . ": $daysDifference";
//8 ��������� ��������� �������� ������� ������

echo "<br>";
function findMax($array) {

    if (empty($array)) {
        return null;
    }
    $max = $array[0];
    foreach ($array as $value) {
        // ���� �������� ������� ������ �� ��������� ��������, ��������� ��������
        if ($value > $max) {
            $max = $value;
        }
    }

    return $max;
}

$array = [4, 2, 7, 1, 9, 5];
echo "��������� ������� � �����: " . findMax($array);
//9 
function customSort($array, $mod = 'ASC', $byValue = true) {

    if (empty($array)) {
        return [];
    }

    // ���� ������ ���������� �� ���������� ��� �������
    $sortFunction = $byValue ? ($mod === 'ASC' ? 'asort' : 'arsort') : ($mod === 'ASC' ? 'ksort' : 'krsort');

    // ������ �������� ������� ��� ����������
    $sortFunction($array);

    return $array;
}
echo "<br>";

$array = ['a' => 2, 'b' => 2, 'c' => 9, 'd' => 31, 'e' => 29, 'f' => 5];

$result = customSort($array, 'ASC');
echo "���������� �� ���������� � ������� �������: ";
print_r($result);
echo "<br>";
// ���������� �� ������� � ����������� �������
$result = customSort($array, 'DESC', false);
echo "���������� �� ������� � ����������� �������: ";
print_r($result);

?>
</body>
</html>

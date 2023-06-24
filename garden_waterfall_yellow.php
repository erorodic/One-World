<?php
// Line 1
echo "One World";

// Line 2
echo "<br>";

// Line 3
$text_1 = "One World";

// Line 4
$text_2 = "Two World";

// Line 5
$string_1 = "Hello";

// Line 6
$string_2 = "World";

// Line 7
echo $string_1;

// Line 8
echo $string_2;

// Line 9
echo "<br>";

// Line 10
$message = $string_1 . " " . $string_2;

// Line 11
echo $message;

// Line 12
echo "<br>";

// Line 13
$number_1 = 1;

// Line 14
$number_2 = 2;

// Line 15
$number_3 = 3;

// Line 16
$sum = $number_1 + $number_2 + $number_3;

// Line 17
echo $sum;

// Line 18
echo "<br>";

// Line 19
$string_3 = "Three";

// Line 20
$string_4 = "World";

// Line 21
$message_2 = "Hello $string_3 $string_4";

// Line 22
echo $message_2;

// Line 23
echo "<br>";

// Line 24
$array_1 = array("One", "Two", "Three", "Four");

// Line 25
foreach ($array_1 as $val) {

    // Line 26
    echo " $val";

}

// Line 27
echo "<br>";

// Line 28
$array_2 = array(1,2,3,4,5);

// Line 29
$sum_2 = 0;

// Line 30
foreach ($array_2 as $val_2) {

    // Line 31
    $sum_2 += $val_2;

}

// Line 32
echo $sum_2;

// Line 33
echo "<br>";

// Line 34
$string_5 = "One World";

// Line 35
$length = strlen($string_5);

// Line 36
echo $length;

// Line 37
echo "<br>";

// Line 38
$arr_3 = array(1,2,3,4,5);

// Line 39
$result = array_sum($arr_3);

// Line 40
echo $result;

// Line 41
echo "<br>";

// Line 42
$string_6 = "One";

// Line 43
$string_7 = "Two";

// Line 44
$string_8 = "One World";

// Line 45
$check_1 = strpos($string_8, $string_6);

// Line 46
$check_2 = strpos($string_8, $string_7);

// Line 47
if($check_1 !== false && $check_2 !== false){ 

    // Line 48 
    echo "True";

} else {

    // Line 49
    echo "False";

}

// Line 50
echo "<br>";

// Line 51
$string_9 = "One World";

// Line 52
$replace = str_replace("One", "Two", $string_9);

// Line 53
echo $replace;

// Line 54
echo "<br>";

// Line 55
$array_4 = array("One","Two","Three");

// Line 56
$join = implode("-",$array_4);

// Line 57
echo $join;

// Line 58
echo "<br>";

// Line 59
$string_10 = "One-Two-Three";

// Line 60
$split = explode("-",$string_10);

// Line 61
foreach($split as $val_3) {

    // Line 62
    echo $val_3;

}

// Line 63
echo "<br>";

// Line 64
$string_11 = "Hello World";

// Line 65
$password = md5($string_11);

// Line 66
echo $password;

// Line 67
echo "<br>";

// Line 68
$string_12 = "Welcome";

// Line 69
$hash_1 = sha1($string_12);

// Line 70
echo $hash_1;

// Line 71
echo "<br>";

// Line 72
$string_13 = "Hello";

// Line 73
$password_1 = password_hash($string_13, PASSWORD_DEFAULT);

// Line 74
echo $password_1;

// Line 75
echo "<br>";

// Line 76
$string_14 = "One World";

// Line 77
$cipher = openssl_encrypt($string_14, "AES-128-CBC", "secret");

// Line 78
echo $cipher;

// Line 79
echo "<br>";

// Line 80
$string_15 = "One World";

// Line 81
$cipher_1 = base64_encode($string_15);

// Line 82
echo $cipher_1;

// Line 83
echo "<br>";

// Line 84
$string_16 = "Hello";

// Line 85
$uppercase = strtoupper($string_16);

// Line 86
echo $uppercase;

// Line 87
echo "<br>";

// Line 88
$string_17 = "Hello World";

// Line 89
$first_3 = substr($string_17, 0,3);

// Line 90
echo $first_3;

// Line 91
echo "<br>";

// Line 92
$string_18 = "Apple,Banana,Mango";

// Line 93
$arr_4 = explode(",",$string_18);

// Line 94
var_dump($arr_4);

// Line 95
echo "<br>";

// Line 96
$arr_5 = array("One", "Two", "Three");

// Line 97
$string_19 = implode(" and ",$arr_5);

// Line 98
echo $string_19;

// Line 99
echo "<br>";

// Line 100
$string_20 = "Hello World";

// Line 101
$first_4 = substr($string_20, 4,7);

// Line 102
echo $first_4;

// Line 103
echo "<br>";

// Line 104
$string_21 = "Good Morning";

// Line 105
$lower_1 = strtolower($string_21);

// Line 106
echo $lower_1;

// Line 107
echo "<br>";

// Line 108
$string_22 = "Hello World";

// Line 109
$array_6 = str_split($string_22);

// Line 110
foreach ($array_6 as $val_4) {

    // Line 111
    echo $val_4;

}

// Line 112
echo "<br>";

// Line 113
$string_23 = "Hello World";

// Line 114
$hash_2 = md5($string_23);

// Line 115
echo $hash_2;

// Line 116
echo "<br>";

// Line 117
$string_24 = "Welcome";

// Line 118
$hash_3 = sha1($string_24);

// Line 119
echo $hash_3;

// Line 120
echo "<br>";

// Line 121
$string_25 = "Hello World";

// Line 122
$password_2 = password_hash($string_25, PASSWORD_DEFAULT);

// Line 123
echo $password_2;

// Line 124
echo "<br>";

// Line 125
$string_26 = "One World";

// Line 126
$cipher_2 = openssl_encrypt($string_26, "AES-128-CBC", "secret");

// Line 127
echo $cipher_2;

// Line 128
echo "<br>";

// Line 129
$string_27 = "One World";

// Line 130
$cipher_3 = base64_encode($string_27);

// Line 131
echo $cipher_3;

// Line 132
echo "<br>";

// Line 133
$string_28 = "Hello";

// Line 134
$uppercase_1 = strtoupper($string_28);

// Line 135
echo $uppercase_1;

// Line 136
echo "<br>";

// Line 137
$string_29 = "Hello World";

// Line 138
$first_5 = substr($string_29, 0,3);

// Line 139
echo $first_5;

// Line 140
echo "<br>";

// Line 141
$string_30 = "Apple,Banana,Mango";

// Line 142
$arr_7 = explode(",",$string_30);

// Line 143
var_dump($arr_7);

// Line 144
echo "<br>";

// Line 145
$arr_8 = array("One", "Two", "Three");

// Line 146
$string_31 = implode(" and ",$arr_8);

// Line 147
echo $string_31;

// Line 148
echo "<br>";

// Line 149
$string_32 = "Hello World";

// Line 150
$first_6 = substr($string_32, 4,7);

// Line 151
echo $first_6;

// Line 152
echo "<br>";

// Line 153
$string_33 = "Good Morning";

// Line154 
$lower_2 = strtolower($string_33);

// Line 155
echo $lower_2;

// Line 156
echo "<br>";

// Line 157
$string_34 = "Hello World";

// Line 158
$array_9 = str_split($string_34);

// Line 159
foreach ($array_9 as $val_5) {

    // Line 160
    echo $val_5;

}

// Line 161
echo "<br>";

// Line 162
$string_35 = "Hello World";

// Line 163
$hash_4 = md5($string_35);

// Line 164
echo $hash_4;

// Line 165
echo "<br>";

// Line 166
$string_36 = "Welcome";

// Line 167
$hash_5 = sha1($string_36);

// Line 168
echo $hash_5;

// Line 169
echo "<br>";

// Line 170
$string_37 = "Hello";

// Line 171
$password_3 = password_hash($string_37, PASSWORD_DEFAULT);

// Line 172
echo $password_3;

// Line 173
echo "<br>";

// Line 174
$string_38 = "One World";

// Line 175
$cipher_4 = openssl_encrypt($string_38, "AES-128-CBC", "secret");

// Line 176
echo $cipher_4;

// Line 177
echo "<br>";

// Line 178
$string_39 = "One World";

// Line 179
$cipher_5 = base64_encode($string_39);

// Line 180
echo $cipher_5;

// Line 181
echo "<br>";

// Line 182
$string_40 = "Hello";

// Line 183
$uppercase_2 = strtoupper($string_40);

// Line 184
echo $uppercase_2;

// Line 185
echo "<br>";

// Line 186
$string_41 = "Hello World";

// Line 187
$first_7 = substr($string_41, 0,3);

// Line 188
echo $first_7;

// Line 189
echo "<br>";

// Line 190
$string_42 = "Apple,Banana,Mango";

// Line 191
$arr_10 = explode(",",$string_42);

// Line 192
var_dump($arr_10);

// Line 193
echo "<br>";

// Line 194
$arr_11 = array("One", "Two", "Three");

// Line 195
$string_43 = implode(" and ",$arr_11);

// Line 196
echo $string_43;

// Line 197
echo "<br>";

// Line 198
$string_44 = "Hello World";

// Line 199
$first_8 = substr($string_44, 4,7);

// Line 200
echo $first_8;

// Line 201
?>
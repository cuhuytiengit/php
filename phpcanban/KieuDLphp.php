<?php

echo 'Kieu int <br/>';

$number = 12;
echo 'Kieu float<br/>';
$total = 10.5;
echo 'kieu chuoi <br/>';
$name = "CÙ HUY {$number} TIẾN";
echo $name;
echo '<br/>';
echo ' Kieu mang';
$box =['sp1','sp2', 'sp3', 'sp4'];
////0,1,2,3
////chỉ số cho các phần tử bắt đầu là 0 , kết thúc là n-1, trong đó
///n là số phần tử 

///Đây là kểu chỉ mục (đánh theo số)
$box=[
    0=>"SP1",
    1=>"SP2",
    2=>"SP4",
    3=>"SP3",
];

echo '<br/>';
//Kiểu kết hợp 
$info = [
    'name'=>"Cù Huy Tiến",
    'age' =>21,
    'level' =>"admin"
];
////in mảng
echo $box[3];
echo '<br/>';
echo $info ['level'];
echo '<br/>';
//cách thay đổi giá trị trong mảng
$info ['level']= 'master';
echo $info ['level'];
echo '<br/>';
//thêm một phần tử vào mảng

$box[] = 'Giá trị';
print_r($box);
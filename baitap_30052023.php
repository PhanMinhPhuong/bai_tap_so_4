<?php 
echo "Bài 1: Hàm hiểm tra chẵn lẻ:<br>";
function ktChanLe($number) {
    if ($number % 2 === 0) {
        echo $number." là số chẵn<br>";
    } else {
        echo $number." là số lẻ<br>";
    }
}
ktChanLe(5);
ktChanLe(6);

echo "<br>Bài 2: Tra cứu điểm thi, xếp hạng học lực: <br>";
function xepHangHocLuc($diemGiuaKy, $diemCuoiKy) {
    $diemTB = ($diemGiuaKy*0.30) + ($diemCuoiKy*0.7);
    if ($diemTB >= 9.0) {
        echo "Xuất sắc<br/>";
    } else if ($diemTB > 7.0 && $diemTB <= 9.0) {
        echo "Giỏi<br>";
    } else if ($diemTB >=5.0 && $diemTB < 7.0) {
        echo "Khá <br/>";
    } else if ($diemTB < 5.0) {
        echo "Trung bình - Yếu <br/>";
    }
}
xepHangHocLuc(10, 10);
xepHangHocLuc(9, 8);
xepHangHocLuc(6, 6);
xepHangHocLuc(1, 2);

echo "<br>Bài 3: Kiểm tra năm hiện tại là năm chẵn hay lẻ:<br>";
function ktNamchanLe() {
    $year = date("Y");
    if ($year % 2 === 0) {
        echo "Năm ".$year." là năm chẵn<br>";
    } else {
        echo "Năm " .$year." là năm lẻ<br>";
    }
}
ktNamchanLe();


echo "<br/>Bài 4: Sử dụng for in từ 1 đếm 100:<br>";
function for100() {
    for ($i = 1; $i <= 100; $i++) {
        echo $i." ";
    }
}
for100();
echo "<br/>";

echo "<br>Bài 5: Sử dụng for in từ 1 đếm 100 số chẵn in đậm số lẻ in thường:<br>";

function forCau5() {
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 === 0) {
            echo "<strong>".$i."</strong> ";
        } else {
            echo $i." ";
        }
    }
}
forCau5();
echo "<br/>";

echo "<br>Bài 6: Sử dụng forEach in ra các năm trong mảng:<br>";
$nam = array(1990, 1991, 1992, 1993, 1994, 1995);
foreach ($nam as $key => $value){
    echo $value." ";
}
?>
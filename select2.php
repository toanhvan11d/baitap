<?php
$link = mysqli_connect("localhost","root","",'QLBH');
$str_select = "SELECT * from `loaisanpham`";
mysqli_query($link,"SET NAM 'utf8'");
$result = mysqli_query($link,$str_select);
echo" MÃ LOẠI SẢN PHẨM - TÊN LOẠI SẢN PHẨM - DIỄN GIẢI </BR>";
while($row2 = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    print_r( $row2['MaLSP'].$row2['TenLSP'].$row2['DienGiai']."</BR>");
}
mysqli_close($link);
?>
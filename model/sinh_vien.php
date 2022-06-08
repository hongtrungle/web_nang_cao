<?php
$connect = mysqli_connect('localhost', 'root', '', 'web_nang_cao');
mysqli_set_charset($connect, 'utf8');

function sinh_vien_index()
{
    global $connect;
    $sql = "select sinh_vien.*, lop.ten as ten_lop from sinh_vien
        left join lop on lop.ma = sinh_vien.ma_lop";
    $result = mysqli_query($connect, $sql);
    mysqli_close($connect);
    return $result;
}

function sinh_vien_store($ten, $ma_lop)
{
    global $connect;
    $sql = "insert into sinh_vien(ten, ma_lop)
        values('$ten', '$ma_lop')";
    mysqli_query($connect, $sql);
    mysqli_close($connect);
}

function sinh_vien_edit($ma)
{
    global $connect;
    $sql = "select sinh_vien.*, lop.ten as ten_lop from sinh_vien
        left join lop on lop.ma = sinh_vien.ma_lop
        where sinh_vien.ma = '$ma'";
    $result = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result);
    mysqli_close($connect);
    return $each;
}

function sinh_vien_update($ma, $ten, $ma_lop)
{
    global $connect;
    $sql = "update sinh_vien
        set
        ten = '$ten',
        ma_lop = '$ma_lop'
        where ma = '$ma'";
    mysqli_query($connect, $sql);
    mysqli_close($connect);
}

function sinh_vien_delete($ma)
{
    global $connect;
    $sql = "delete from sinh_vien
        where ma = '$ma'";
    mysqli_query($connect, $sql);
    mysqli_close($connect);
}






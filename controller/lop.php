<?php

switch($action){
    case '':
        include 'model/lop.php';
        $result = lop_index();
        include 'view/lop/index.php';
        break;
    case 'create':
        include 'view/lop/create.php';
        break;
    case 'store':
        $ten = $_POST['ten'];
        include 'model/lop.php';
        lop_store($ten);
        header('location: index.php?controller=lop');
        break;
    case 'edit':
        $ma = $_GET['ma'];
        include 'model/lop.php';
        $each = lop_edit($ma);
        include 'view/lop/edit.php';
        break;
    case 'update':
        $ma = $_POST['ma'];
        $ten = $_POST['ten'];
        include 'model/lop.php';
        lop_update($ma, $ten);
        header('location: index.php?controller=lop');
        break;
    case 'delete':
        $ma = $_GET['ma'];
        include 'model/lop.php';
        lop_delete($ma);
        header('location: index.php?controller=lop');
        break;
    default:
        echo "Nhập action linh tinh gì thế";
}
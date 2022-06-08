<?php
$controller = $_GET['controller'] ?? '';
$action =$_GET['action'] ?? '';

switch($controller){
    case '':
        include 'controller/root.php';
        break;
    case 'lop':
        include 'controller/lop.php';
        break;
    case 'sinh_vien':
        include 'controller/sinh_vien.php';
        break;
    default:
        echo'Nhập linh tinh controller gì thế';
        break;
}
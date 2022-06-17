<?php

require 'model/Connect.php';
require 'model/SinhVienObject.php';

class SinhVien
{
    public function all()
    {

        $sql = "select sinh_vien.*, lop.ten as ten_lop from sinh_vien
                join lop on lop.ma = sinh_vien.ma_lop";
        $result = (new Connect())->select($sql);

        $arr = [];
        foreach ($result as $row){
            $object = new SinhVienObject($row);

            $arr[] = $object;
        }

        return $arr;
    }
    public function create($params)
    {
        $object = new SinhVienObject($params);


        $sql = "insert into sinh_vien(ten, ma_lop)
                values('{$object->get_ten()}','{$object->get_ma_lop()}')";
        (new Connect())->execute($sql);
    }

    public function find($ma)
    {
        $sql = "select * from sinh_vien
                where ma = '$ma'";
        $result = (new Connect())->select($sql);
        $each = mysqli_fetch_array($result);

         return new SinhVienObject($each);

        }
    public function update(array $params)
    {
        $object = new SinhVienObject($params);


        $sql = "update sinh_vien set
                ten = '{$object->get_ten()}',
                ma_lop = '{$object->get_ma_lop()}'
                where 
                    ma = '{$object->get_ma()}'";
        (new Connect())->execute($sql);
    }
    public function destroy($ma)
    {

        $sql = "delete from sinh_vien 
                where 
                    ma = '$ma'";
        (new Connect())->execute($sql);
    }
}
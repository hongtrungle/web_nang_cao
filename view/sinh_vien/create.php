<form action="?action=store&controller=sinh_vien" method="post">
    Tên
    <input type="text" name="ten">
    <br>
    Lớp
    <select name="ma_lop">
        <?php foreach ($lops as $lop){ ?>
            <option value="<?php echo $lop['ma']?>">
                <?php echo $lop['ten']?>
            </option>
        <?php } ?>
    </select>
    <button>Thêm sinh viên</button>
</form>
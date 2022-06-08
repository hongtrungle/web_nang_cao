<form action="?action=update&controller=lop" method="post">
    <input type="hidden" name="ma" value = "<?php echo $each['ma']?>">
    Tên
    <input type="text" name="ten" value="<?php echo $each['ten']?>">
    <br>
    <button>Sửa lớp</button>
</form>
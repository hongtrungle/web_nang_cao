<a href="?action=create&controller=lop">
    Thêm
</a>

<table border="1" width="100%">
            <tr>
                <th>Mã</th>
                <th>Tên</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
            <?php foreach ($arr as $each){ ?>
                    <tr>
                        <td><?php echo $each->show_ma() ?></td>
                        <td><?php echo $each->get_ho_ten() ?></td>
                        <td>
                            <a href="?action=edit&ma=<?php echo $each->get_ma() ?>&controller=lop">
                                Sửa
                            </a>
                        </td>
                        <td>
                            <a href="?action=delete&ma=<?php echo $each->get_ma() ?>&controller=lop">
                                Xóa
                            </a>
                        </td>
                    </tr>
            <?php } ?>
        </table>
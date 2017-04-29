<?php if( isset( $data ) ) : ?>
    <a href="<?php echo BASE_URL; ?>/Sach/Themsach">Thêm mới</a>
    <table >
        <tr>
            <td>Mã số sách</td>
            <td>Tên sách</td>
            <td>Tác giả</td>
            <td>Năm xuất bản</td>
            <td>Nhà xuất bản</td>
            <td>Thao tác</td>
        </tr>
    
        <?php foreach( $data as $value ) : ?>
            <tr>
                <td><?php echo $value['MaSoSach']; ?></td>
                <td><?php echo $value['TenSach']; ?></td>
                <td><?php echo $value['TacGia']; ?></td>
                <td><?php echo $value['NamXB']; ?></td>
                <td><?php echo $value['NhaXB']; ?></td>
                <td>
                    <a href="<?php echo BASE_URL; ?>/Sach/Suasach/<?php echo $value['MaSoSach']; ?>">Sửa</a> | <a onclick="return confirm('Bạn có chắc chắn muốn xóa');" href="<?php echo BASE_URL; ?>/Sach/Xoasach/<?php echo $value['MaSoSach']; ?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else : ?>
    <table >
        <tr>
            <td rowspan="5">Không có dữ liệu</td>
        </tr>
    </table>
<?php endif; ?>
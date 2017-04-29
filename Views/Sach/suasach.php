<form class="" method="post" action="<?php echo BASE_URL; ?>/Sach/XLSuasach/" >
    <input name="masach" type="hidden" value="<?php echo ( isset( $data['MaSoSach'] ) ) ? $data['MaSoSach'] : ''; ?>" />
    <div class="form-group">
        <label>Tên sách</label>
        <input name="tensach" type="text" value="<?php echo ( isset( $data['TenSach'] ) ) ? $data['TenSach'] : ''; ?>" required="required" />
    </div>
    
    <div class="form-group">
        <label>Tác giả</label>
        <input name="tacgia" type="text" value="<?php echo ( isset( $data['TacGia'] ) ) ? $data['TacGia'] : ''; ?>" required="required" />
    </div>
    
    <div class="form-group">
        <label>Năm xuất bản</label>
        <input name="namxb" type="text" value="<?php echo ( isset( $data['NamXB'] ) ) ? $data['NamXB'] : ''; ?>" required="required" />
    </div>
    
    <div class="form-group">
        <label>Nhà xuất bản</label>
        <input name="nhaxb" type="text" value="<?php echo ( isset( $data['NhaXB'] ) ) ? $data['NhaXB'] : ''; ?>" required="required" />
    </div>
    
    <div class="form-group">
        <input name="submit" type="submit" value="Sửa" />
        <input name="reset" type="reset" value="Reset" />
    </div>
    
</form>
<form class="" method="post" action="<?php echo BASE_URL; ?>/Sach/XLThemsach" >
    <div class="form-group">
        <label>Tên sách</label>
        <input name="tensach" type="text" value="" required="required" />
    </div>
    
    <div class="form-group">
        <label>Tác giả</label>
        <input name="tacgia" type="text" value="" required="required" />
    </div>
    
    <div class="form-group">
        <label>Năm xuất bản</label>
        <input name="namxb" type="text" value="" required="required" />
    </div>
    
    <div class="form-group">
        <label>Nhà xuất bản</label>
        <input name="nhaxb" type="text" value="" required="required" />
    </div>
    
    <div class="form-group">
        <input name="submit" type="submit" value="Thêm" />
        <input name="reset" type="reset" value="Reset" />
    </div>
    
</form>
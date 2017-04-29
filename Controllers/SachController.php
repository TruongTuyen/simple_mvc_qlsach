<?php

class SachController{
    public $model;
    
    public function __construct(){
        $this->model = new SachModel();
    }
    
    public function view( $view_name, $data = false ){
        $file_name = BASE_DIR . '/Views/Sach/' . $view_name . '.php';
        if( $data ){ 
            extract( $data ); 
            
        }
        if( file_exists( $file_name ) ){
            include( $file_name );
        }
    }
    
    public function Danhsach(){
        $data = $this->model->Danhsach();
        $this->view( 'danhsach', $data );
    }
    
    public function Themsach( ){
        $this->view( 'themsach' );
    }
    
    public function XLThemsach(){
        
        $data = array(
            'tensach' => (isset( $_POST['tensach'] ) ) ? strip_tags( $_POST['tensach'] ) : '',
            'tacgia'  => (isset( $_POST['tacgia'] ) )  ? strip_tags( $_POST['tacgia'] ) : '',
            'namxb'   => (isset( $_POST['namxb'] ) )   ? strip_tags( $_POST['namxb'] ) : '',
            'nhaxb'   => (isset( $_POST['nhaxb'] ) )   ? strip_tags( $_POST['nhaxb'] ) : '',
        ); 
        
        if( $this->model->Themsach( $data ) ){
            header('Location: ' . BASE_URL . '/Sach/Danhsach' );
        }else{
            echo "Lỗi, không thêm được. ";
        }
        
    }
    
    public function Suasach( $id ){
        $data = $this->model->Chitietsach( $id );
        $this->view('suasach', $data);
    }
    
    public function XLSuasach( ){
        $data = array(
            'masach'  => (isset( $_POST['masach'] ) ) ? strip_tags( $_POST['masach'] ) : '',
            'tensach' => (isset( $_POST['tensach'] ) ) ? strip_tags( $_POST['tensach'] ) : '',
            'tacgia'  => (isset( $_POST['tacgia'] ) )  ? strip_tags( $_POST['tacgia'] ) : '',
            'namxb'   => (isset( $_POST['namxb'] ) )   ? strip_tags( $_POST['namxb'] ) : '',
            'nhaxb'   => (isset( $_POST['nhaxb'] ) )   ? strip_tags( $_POST['nhaxb'] ) : '',
        ); 
        
        if( $this->model->Suasach( $data ) ){
            header('Location: ' . BASE_URL . '/Sach/Danhsach' );
        }else{
            echo "Lỗi, không sửa được. ";
        }
    }
    
    public function Xoasach( $id ){
        if( $this->model->Xoasach( $id ) ){
            header('Location: ' . BASE_URL . '/Sach/Danhsach' );
        }else{
            echo "Lỗi, không xóa được. ";
        }
    }
    
}
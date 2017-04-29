<?php

class SachModel{
    public $conn;
    public function __construct(){
        $this->conn = mysqli_connect( 'localhost', 'root', '', 'mvc_qlsach' ) or die ( "Could not connect to server!" );
    }
    
    public function Themsach( $data ){
        foreach( $data as $value ){
            if( $value == '' ){
                return false;
            }
        }
        extract( $data );
        $sql = "INSERT INTO `mvc_qlsach`.`sach` (`MaSoSach`, `TenSach`, `TacGia`, `NamXB`, `NhaXB`) VALUES (NULL, '{$tensach}', '{$tacgia}', '{$namxb}', '{$nhaxb}');";
        
        $query = mysqli_query( $this->conn, $sql );
        if( mysqli_affected_rows( $this->conn ) > 0 ){
            return true;
        }
        return false;
    }
    
    public function Suasach( $data ){
        foreach( $data as $value ){
            if( $value == '' ){
                return false;
            }
        }
        extract( $data );
        $sql = "UPDATE `mvc_qlsach`.`sach` SET `TenSach` = '{$tensach}', `TacGia` = '{$tacgia}', `NamXB` = {$namxb}, `NhaXB` = '{$nhaxb}' WHERE `MaSoSach` = {$masach};";
        
        $query = mysqli_query( $this->conn, $sql );
        if( mysqli_affected_rows( $this->conn ) > 0 ){
            return true;
        }
        return false;
    }
    
    public function Xoasach( $id ){
        $sql = "DELETE FROM  `mvc_qlsach`.`sach` WHERE `MaSoSach` = {$id};";
        $query = mysqli_query( $this->conn, $sql );
        if( mysqli_affected_rows( $this->conn ) > 0 ){
            return true;
        }
        return false;
    }
    
    public function Chitietsach( $id ){
        $sql = "SELECT * FROM `sach` WHERE `MaSoSach` = {$id}";
        $query = mysqli_query( $this->conn, $sql );
        $data = array();
        if( mysqli_num_rows( $query ) ){
            $data = mysqli_fetch_assoc( $query ); 
        }
        return $data;
    }
    
    public function Danhsach(){
        $sql = 'SELECT * FROM `sach`';
        $query = mysqli_query( $this->conn, $sql );
        $data = array();
        if( mysqli_num_rows( $query ) ){
            while( $row = mysqli_fetch_assoc( $query ) ){
                $data[] = $row;
            }
        }
        return $data;
    }
    
    
    
}
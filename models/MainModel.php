<?php


class MainModel{
    public $db;
    public $paginacion;

    function __construct(){
        $this->db = Connection::getConnect();
        $this->paginacion = array();
    }

    public function getPaginacion($start, $postByPage){
        if(Connection::validateConnect()){
            $mysql = $this->db;
            $sql = "SELECT * FROM paginacion LIMIT ?, ?";
            $stm = $mysql->prepare($sql);
            $stm->bind_param("ii", $start, $postByPage);
            $stm->execute();
            $result = $stm->get_result();

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    array_push($this->paginacion, $row);   
                }
                return $this->paginacion;

                $stm->close();
            }else{
                return $this->paginacion;
            }

        }
    }

    public function getAllArticulos(){
        $mysql = $this->db;
        $sql = "SELECT * FROM paginacion";
        $result = $mysql->query($sql);

        if($result->num_rows > 0){
            return $result->num_rows;
        }else{
            return NULL;
        }
    }
}
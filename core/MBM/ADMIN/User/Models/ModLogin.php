<?php

namespace MBM\Admin\User\Models;

class ModLogin extends \MBM\Lib\Model{

	public function test(){
            $query = "SELECT * FROM m_categories";
            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
	}

	public function db(){
		return $this->db;
	}
        
//        public function useradd(){
//            $querry = "INSERT into m_users";
//        }
}


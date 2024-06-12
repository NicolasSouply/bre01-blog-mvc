<?php

require "category.php";

class CategoryManager extends AbstractManager {
    

   public function findAll() {
        $stmt = $this->db->query("SELECT * FROM categories");
        $categories = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $categories[] = new Category( $row['id'],$row['title']);
        }
        return $categories;
    }
    /*
    public function findOne(int $name) {

    $stmt = $this->db->query("SELECT id FROM categories WHERE id = :id");
    $stmt->execute([ "id" => $id ]);
    

    }*/
}
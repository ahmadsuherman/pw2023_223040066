<?php

class Category
{
    private $table = "categories";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getCategories()
    {
        $this->db->query("SELECT * FROM $this->table ORDER BY created_at DESC");

        return $this->db->resultSet();
    }

    public function getCategorySelect()
    {
        $this->db->query("SELECT * FROM $this->table 
            WHERE is_active <=> 1
            ORDER BY created_at DESC");

        return $this->db->resultSet();
    }

    public function add(string $name)
    {
        $this->db->query("INSERT INTO $this->table(
            uid,
            name,
            created_by, 
            updated_by, 
            created_at, 
            updated_at) VALUE (
                :uid,
                :name,
                :created_by, 
                :updated_by,
                :created_at,
                :updated_at
            )");
        // dd("asdf");
        $this->db->bind('uid', createUid());
        $this->db->bind('name', $name);
        $this->db->bind('created_by', $_SESSION['user']['id']);
        $this->db->bind('updated_by', $_SESSION['user']['id']);
        $this->db->bind('created_at', now());
        $this->db->bind('updated_at', now());
        
        return $this->db->execute();
    }

    public function findByUid(string $uid)
    {
        $this->db->query("SELECT * FROM $this->table WHERE uid=:uid");
        $this->db->bind('uid', $uid);
        
        return $this->db->single();
    }

    public function update(string $uid, string $name)
    {
        $this->db->query("UPDATE $this->table SET name=:name WHERE uid=:uid");
        $this->db->bind('uid', $uid);
        $this->db->bind('name', $name);

        return $this->db->execute();
    }

    public function updateStatus(string $uid, string $is_active)
    {
        $status = $is_active == '1' ? '0' : '1';
        $this->db->query("UPDATE $this->table SET is_active=:is_active WHERE uid=:uid");

        $this->db->bind('uid', $uid);
        $this->db->bind('is_active', $status);

        return $this->db->execute();
    }

    public function getCategoryGroupByIsActive()
    {
        $this->db->query("SELECT 
            is_active,
            COUNT(*) AS total_category  
        FROM $this->table
        GROUP BY is_active
        ORDER BY is_active DESC");

        return $this->db->resultSet();
    }
}

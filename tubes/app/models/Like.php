<?php

class Like
{
    private $table = "likes";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getLikeDestination(string $uid)
    {
        $this->db->query("SELECT 
            likes.user_id,
            users.name
        FROM $this->table
        LEFT JOIN destinations ON destinations.id = likes.destination_id
        LEFT JOIN users ON likes.user_id = users.id 
        
        WHERE destinations.uid=:uid");

        $this->db->bind('uid', $uid);
        return $this->db->resultSet();
    }
    
    public function add(int $userId, int $destinationId)
    {
        $this->db->query("INSERT INTO $this->table(
            uid,
            user_id,
            destination_id,
            created_at, 
            updated_at) VALUE (
                :uid,
                :user_id,
                :destination_id,
                :created_at,
                :updated_at
            )");
        // dd("asdf");
        $this->db->bind('uid', createUid());
        $this->db->bind('user_id', $userId);
        $this->db->bind('destination_id', $destinationId);
        $this->db->bind('created_at', now());
        $this->db->bind('updated_at', now());
        
        return $this->db->execute();
    }

    public function void(int $userId, int $destinationId)
    {
        // dd($uid);
        $this->db->query("DELETE FROM $this->table WHERE user_id=:user_id AND destination_id=:destination_id");

        $this->db->bind('user_id', $userId);
        $this->db->bind('destination_id', $destinationId);
        
        return $this->db->execute();
    }
    
}

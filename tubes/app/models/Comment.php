<?php

class Comment
{
    private $table = "comments";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getCommentDestination(string $uid, int $offset, int $limit)
    {
        $this->db->query("SELECT 
            comments.uid,
            comments.content,
            comments.user_id,
            comments.destination_id,
            comments.created_at,
            users.name,
            users.avatar
        FROM $this->table 
        
        LEFT JOIN destinations ON destinations.id = comments.destination_id
        LEFT JOIN users ON comments.user_id = users.id 
        WHERE destinations.uid=:uid 
        ORDER BY comments.created_at DESC
        LIMIT :offset, :limit
        ");
        
        $this->db->bind('uid', $uid);
        $this->db->bind('offset', $offset);
        $this->db->bind('limit', $limit);
        
        return $this->db->resultSet();
    }

    public function countTotalCommentDestination(string $uid){

        $this->db->query("SELECT 
            comments.uid,
            users.name
        FROM $this->table 
        
        LEFT JOIN destinations ON destinations.id = comments.destination_id
        LEFT JOIN users ON comments.user_id = users.id 
        WHERE destinations.uid=:uid 
        ORDER BY comments.created_at DESC
        ");
        
        $this->db->bind('uid', $uid);
        
        return $this->db->resultSet();
    }

    public function add(int $userId, int $destinationId, string $content)
    {
        $this->db->query("INSERT INTO $this->table(
            uid,
            user_id,
            destination_id,
            content,
            created_at, 
            updated_at) VALUE (
                :uid,
                :user_id,
                :destination_id,
                :content,
                :created_at,
                :updated_at
            )");
            
        $this->db->bind('uid', createUid());
        $this->db->bind('user_id', $userId);
        $this->db->bind('destination_id', $destinationId);
        $this->db->bind('content', $content);
        $this->db->bind('created_at', now());
        $this->db->bind('updated_at', now());
        
        return $this->db->execute();
    }

    public function delete(string $uid)
    {
        $this->db->query("DELETE FROM $this->table WHERE uid=:uid");

        $this->db->bind('uid', $uid);
        
        return $this->db->execute();
    }
}

<?php

class Comment
{
    private $table = "comments";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getCommentDestination(string $uid)
    {
        $this->db->query("SELECT 
            comments.content,
            users.name,
            comments.created_at
        FROM $this->table 
        LEFT JOIN destinations ON destinations.id = comments.destination_id
        LEFT JOIN users ON comments.user_id = users.id 
        WHERE destinations.uid=:uid");
        
        $this->db->bind('uid', $uid);
        return $this->db->resultSet();
    }

    public function add(int $userId, int $destinationId, string $comment)
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
                :comment,
                :created_at,
                :updated_at
            )");
        // dd("asdf");
        $this->db->bind('uid', createUid());
        $this->db->bind('user_id', $userId);
        $this->db->bind('destination_id', $destinationId);
        $this->db->bind('content', $content);
        $this->db->bind('created_at', now());
        $this->db->bind('updated_at', now());
        
        return $this->db->execute();
    }
}

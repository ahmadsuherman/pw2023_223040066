<?php

class Destination
{
    private $table = "destinations";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getDestinations()
    {
        $this->db->query("SELECT 
            destinations.*, 
            CONCAT(latitude, ',', longitude) AS coordinates, 
            categories.name AS category_name 
        FROM $this->table 
        LEFT JOIN categories ON destinations.category_id = categories.id 
        WHERE destinations.deleted_at <=> null
        ORDER BY destinations.created_at DESC");

        return $this->db->resultSet();
    }

    public function getTotalItem() {
        $this->db->query("SELECT COUNT(*) AS total FROM $this->table 
            WHERE destinations.deleted_at <=> null");
        
        $rowCount = $this->db->resultSet();
        $totalItem = $rowCount[0]['total'];
        return $totalItem;
    }

    public function getDataDestinations($initialLimit, $totalItem) {
        $this->db->query("SELECT destinations.*, categories.name AS category_name FROM $this->table 
            LEFT JOIN categories ON destinations.category_id = categories.id 
            WHERE destinations.deleted_at <=> null
            ORDER BY created_at DESC
            LIMIT $initialLimit, $totalItem
        ");

        return $this->db->resultSet();
    }

    public function getNewDestinations()
    {
        $this->db->query("SELECT 
            destinations.*,
            date_format(destinations.created_at, '%Y-%m-%d') as created_at,
            categories.name as category_name
        FROM $this->table 
        LEFT JOIN categories ON destinations.category_id = categories.id
        WHERE destinations.deleted_at <=> null
        ORDER BY destinations.created_at 
        DESC LIMIT 5 ");

        return $this->db->resultSet();
    }

    public function getSearchDestinations(string $keyword)
    {
        $this->db->query("SELECT destinations.*, categories.name AS category_name FROM $this->table 
            LEFT JOIN categories ON destinations.category_id = categories.id 
            WHERE destinations.deleted_at <=> null
            AND destinations.name LIKE '%{$keyword}%';
        ");

        return $this->db->resultSet();
    }

    public function findByUid(string $uid)
    {
        $this->db->query("SELECT destinations.*, categories.name AS category_name FROM $this->table LEFT JOIN categories ON destinations.category_id = categories.id WHERE destinations.uid=:uid");
        $this->db->bind('uid', $uid);
        
        return $this->db->single();
    }

    public function add(string $imageName, string $name, int $categoryId, string $description, string $latitude, string $longitude)
    {
        $this->db->query("INSERT INTO $this->table(
            uid, 
            category_id, 
            name, 
            description, 
            image, 
            latitude, 
            longitude, 
            created_by, 
            updated_by, 
            created_at, 
            updated_at
        ) VALUE (
            :uid, 
            :category_id, 
            :name, 
            :description, 
            :image, 
            :latitude, 
            :longitude, 
            :created_by, 
            :updated_by, 
            :created_at, 
            :updated_at
        )");

        $this->db->bind('uid', createUid());
        $this->db->bind('category_id', $categoryId);
        $this->db->bind('name', $name);
        $this->db->bind('description', $description);
        $this->db->bind('image', $imageName);
        $this->db->bind('latitude', $latitude);
        $this->db->bind('longitude', $longitude);
        $this->db->bind('created_by', $_SESSION['user']['id']);
        $this->db->bind('updated_by', $_SESSION['user']['id']);
        $this->db->bind('created_at', now());
        $this->db->bind('updated_at', now());

        return $this->db->execute();
    }

    public function update(string $uid, string $imageName, string $name, int $categoryId, string $description, string $latitude, string $longitude)
    {
        // dd($longitude);
        $this->db->query("UPDATE $this->table SET 
            category_id=:category_id, 
            name=:name, 
            description=:description, 
            image=:image,
            latitude=:latitude,
            longitude=:longitude,
            updated_by=:updated_by,
            updated_at=:updated_at WHERE uid=:uid");

        $this->db->bind('uid', $uid);
        $this->db->bind('category_id', $categoryId);
        $this->db->bind('name', $name);
        $this->db->bind('description', $description);
        $this->db->bind('image', $imageName);
        $this->db->bind('latitude', $latitude);
        $this->db->bind('longitude', $longitude);
        $this->db->bind('updated_by', $_SESSION['user']['id']);
        $this->db->bind('updated_at', now());

        return $this->db->execute();
    }

    public function delete(string $uid)
    {
        // dd($uid);
        $this->db->query("UPDATE $this->table SET 
            deleted_by=:deleted_by,
            deleted_at=:deleted_at 
        WHERE uid=:uid");

        $this->db->bind('uid', $uid);
        $this->db->bind('deleted_by', $_SESSION['user']['id']);
        $this->db->bind('deleted_at', now());
        
        return $this->db->execute();
    }

    public function getDestinationGroupByCategoryDashboard()
    {
        $this->db->query("SELECT 
            categories.name AS category_name,
            COUNT(*) AS total_destination  
        FROM $this->table
        LEFT JOIN categories ON destinations.category_id = categories.id 
        WHERE destinations.deleted_at <=> null
        GROUP BY categories.name");

        return $this->db->resultSet();
    }
}

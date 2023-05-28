<?php

class User
{
    private $table = "users";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function login(string $email)
    {
        $this->db->query("SELECT * FROM $this->table WHERE email=:email");
        $this->db->bind("email", $email);

        return $this->db->single();
    }

    public function loginUser(string $username)
    {
        $this->db->query("SELECT * FROM $this->tableUser WHERE username=:username");
        $this->db->bind("username", $username);

        return $this->db->single();
    }

    public function registerUser(string $name, string $email, string $password)
    {
        $a = $this->db->query("INSERT INTO $this->table(
            name,
            uid, 
            email, 
            password, 
            level, 
            created_at, 
            updated_at) VALUE (
                :name, 
                :uid, 
                :email, 
                :password, 
                :level, 
                :created_at, 
                :updated_at)"
            );

        $this->db->bind("uid", createUid());
        $this->db->bind("name", $name);
        $this->db->bind("email", $email);
        $this->db->bind("level", 'Pengguna');
        $this->db->bind("password", $password);
        $this->db->bind("created_at", now());
        $this->db->bind("updated_at", now());
        
        return $this->db->execute();
    }

    public function cekUser(string $email)
    {
        $this->db->query("SELECT * FROM $this->table WHERE email=:email");
        $this->db->bind("email", $email);

        return $this->db->single();
    }

    public function findByUid(string $uid)
    {
        $this->db->query("SELECT * FROM $this->table WHERE uid=:uid");
        $this->db->bind('uid', $uid);

        return $this->db->single();
    }

    public function update(string $uid, string $name, string $email)
    {
        $this->db->query("UPDATE $this->table SET name=:name, email=:email WHERE uid=:uid");
        $this->db->bind('uid', $uid);
        $this->db->bind('name', $name);
        $this->db->bind('email', $email);

        return $this->db->execute();
    }

    public function updatePassword(string $uid, string $password)
    {
        $this->db->query("UPDATE $this->table SET password=:password WHERE uid=:uid");
        $this->db->bind('uid', $uid);
        $this->db->bind('password', $password);

        return $this->db->execute();
    }

    public function getNewUserDashboard()
    {
        $this->db->query("SELECT 
            DATE_FORMAT(created_at,'%Y-%m-%d') AS created_at,
            COUNT(*) AS total_user  
        FROM $this->table
        GROUP BY DATE_FORMAT(created_at, '%Y-%m-%d')");

        return $this->db->resultSet();
    }
      
}

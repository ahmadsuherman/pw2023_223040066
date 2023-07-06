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

    public function update(string $uid, string $name, string $email, string $level)
    {
        $this->db->query("UPDATE $this->table SET 
            name=:name, 
            email=:email,
            level=:level
        WHERE uid=:uid");
        $this->db->bind('uid', $uid);
        $this->db->bind('name', $name);
        $this->db->bind('email', $email);
        $this->db->bind('level', $level);

        return $this->db->execute();
    }

    public function updateProfile(string $uid, string $name, string $email)
    {
        $this->db->query("UPDATE $this->table SET 
            name=:name, 
            email=:email
        WHERE uid=:uid");
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
        WHERE deleted_at <=> null
        GROUP BY DATE_FORMAT(created_at, '%Y-%m-%d')
        LIMIT 10");

        return $this->db->resultSet();
    }

    public function getNewUserRegistrationDashboard()
    {
        $this->db->query("SELECT 
            name,
            email,
            date_format(created_at, '%Y-%m-%d') as created_at
        FROM $this->table
        WHERE deleted_at <=> null 
        ORDER BY created_at DESC
        LIMIT 5");

        return $this->db->resultSet();
    }

    public function getUsers()
    {
        $this->db->query("SELECT 
            uid,
            name,
            email,
            level
        FROM $this->table 
        WHERE deleted_at <=> null
        ORDER BY created_at DESC
        ");

        return $this->db->resultSet();
    }

    public function add(string $name, string $email, string $password, string $level)
    {
        $this->db->query("INSERT INTO $this->table(
            uid,
            name,
            email,
            password,
            level,
            created_at, 
            updated_at) VALUE (
                :uid,
                :name,
                :email,
                :password,
                :level,
                :created_at,
                :updated_at
            )");

        $this->db->bind('uid', createUid());
        $this->db->bind('name', $name);
        $this->db->bind('email', $email);
        $this->db->bind('password', $password);
        $this->db->bind('level', $level);
        $this->db->bind('created_at', now());
        $this->db->bind('updated_at', now());
        
        return $this->db->execute();
    }

    public function delete(string $uid)
    {
        $this->db->query("UPDATE $this->table SET 
            deleted_at=:deleted_at 
        WHERE uid=:uid");

        $this->db->bind('uid', $uid);
        $this->db->bind('deleted_at', now());
        
        return $this->db->execute();
    }
    
    public function getCountTotalUserDashboard()
    {
        $this->db->query("SELECT 
            COUNT(id) AS total_user
        FROM $this->table 
        WHERE deleted_at <=> null
        ORDER BY created_at DESC
        ");

        return $this->db->resultSet();
    }
}

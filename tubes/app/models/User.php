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

    public function updatePengguna(int $id, string $namaLengkap, string $username, string $password, string $telp)
    {
        if (is_null($password)) {
            $this->db->query("UPDATE $this->table SET nama_lengkap=:nama_lengkap, username=:username, telp=:telp WHERE id_user=:id");
            $this->db->bind('id', $id);
            $this->db->bind('nama_lengkap', $namaLengkap);
            $this->db->bind('username', $username);
            $this->db->bind('telp', $telp);
        } else {
            $this->db->query("UPDATE $this->table SET nama_lengkap=:nama_lengkap, username=:username, password=:password, telp=:telp WHERE id_user=:id");
            $this->db->bind('id', $id);
            $this->db->bind('nama_lengkap', $namaLengkap);
            $this->db->bind('username', $username);
            $this->db->bind('password', $password);
            $this->db->bind('telp', $telp);
        }

        return $this->db->execute();
    }

    public function deletePengguna(int $id)
    {
        $this->db->query("DELETE FROM $this->tableUser WHERE id_user=:id");
        $this->db->bind('id', $id);

        return $this->db->execute();
    }

    public function getMapPopupContentAttribute()
    {
        $mapPopupContent = '';
        $mapPopupContent .= '<div class="my-2"><strong>'.__('outlet.name').':</strong><br>'.$this->name_link.'</div>';
        $mapPopupContent .= '<div class="my-2"><strong>'.__('outlet.coordinate').':</strong><br>'.$this->coordinate.'</div>';

        return $mapPopupContent;
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
      
}

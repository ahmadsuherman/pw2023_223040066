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
        $this->db->query("SELECT destinations.*, CONCAT(latitude, ',', longitude) AS coordinates, categories.name AS category_name FROM $this->table LEFT JOIN categories ON destinations.category_id = categories.id");

        return $this->db->resultSet();
    }

    public function getNewDestinations()
    {
        $this->db->query("SELECT * FROM $this->table ORDER BY created_at DESC LIMIT 5");

        return $this->db->resultSet();
    }

    public function addBarang(string $namaGambar, string $namaBarang, String $tgl, int $hargaAwal, string $deskripsiBarang)
    {
        $this->db->query("INSERT INTO $this->table(gambar, nama_barang, tgl, harga_awal, deskripsi_barang) VALUE (:gambar, :nama_barang, :tgl, :harga_awal, :deskripsi_barang)");
        $this->db->bind('gambar', $namaGambar);
        $this->db->bind('nama_barang', $namaBarang);
        $this->db->bind('tgl', $tgl);
        $this->db->bind('harga_awal', $hargaAwal);
        $this->db->bind('deskripsi_barang', $deskripsiBarang);

        return $this->db->execute();
    }

    public function getDataBarangById(int $id)
    {
        $this->db->query("SELECT * FROM $this->table WHERE id_barang=:id");
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function updateBarang(int $id, ?string $namaGambar, string $namaBarang, String $tgl, int $hargaAwal, string $deskripsiBarang)
    {
        if (is_null($namaGambar)) {
            $this->db->query("UPDATE $this->table SET nama_barang=:nama_barang, tgl=:tgl, harga_awal=:harga_awal, deskripsi_barang=:deskripsi_barang WHERE id_barang=:id");
            $this->db->bind('id', $id);
            $this->db->bind('nama_barang', $namaBarang);
            $this->db->bind('tgl', $tgl);
            $this->db->bind('harga_awal', $hargaAwal);
            $this->db->bind('deskripsi_barang', $deskripsiBarang);
        } else {
            $this->db->query("UPDATE $this->table SET gambar=:gambar, nama_barang=:nama_barang, tgl=:tgl, harga_awal=:harga_awal, deskripsi_barang=:deskripsi_barang WHERE id_barang=:id");
            $this->db->bind('id', $id);
            $this->db->bind('gambar', $namaGambar);
            $this->db->bind('nama_barang', $namaBarang);
            $this->db->bind('tgl', $tgl);
            $this->db->bind('harga_awal', $hargaAwal);
            $this->db->bind('deskripsi_barang', $deskripsiBarang);
        }

        return $this->db->execute();
    }

    public function deleteBarang(int $id)
    {
        $this->db->query("DELETE FROM $this->table WHERE id_barang=:id");
        $this->db->bind('id', $id);

        return $this->db->execute();
    }
}

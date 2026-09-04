<?php

class Buku
{
    // Property
    private $judul;
    private $penulis;
    private $harga;
    private $stok;
    private $halaman;
    private $diskon;

    // Getter
    public function getJudul()
    {
        return $this->judul;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function getHarga()
    {
        return $this->harga;
    }

    public function getStok()
    {
        return $this->stok;
    }

    public function getHalaman()
    {
        return $this->halaman;
    }

    public function getDiskon()
    {
        return $this->diskon;
    }

    // Setter
    public function setJudul($judul)
    {
        if ($judul != "") {
            $this->judul = $judul;
        } else {
            echo "Judul tidak boleh kosong.<br>";
        }
    }

    public function setPenulis($penulis)
    {
        if ($penulis != "") {
            $this->penulis = $penulis;
        } else {
            echo "Penulis tidak boleh kosong.<br>";
        }
    }

    public function setHarga($harga)
    {
        if ($harga > 0) {
            $this->harga = $harga;
        } else {
            echo "Harga harus lebih dari 0.<br>";
        }
    }

    public function setStok($stok)
    {
        if ($stok >= 0) {
            $this->stok = $stok;
        } else {
            echo "Stok tidak boleh negatif.<br>";
        }
    }

    public function setHalaman($halaman)
    {
        if ($halaman > 0) {
            $this->halaman = $halaman;
        } else {
            echo "Jumlah halaman harus lebih dari 0.<br>";
        }
    }

    public function setDiskon($diskon)
    {
        if ($diskon >= 0 && $diskon <= 50) {
            $this->diskon = $diskon;
        } else {
            echo "Diskon harus antara 0 sampai 50%.<br>";
        }
    }
}


// Membuat object Buku
$buku = new Buku();

// Mengisi data menggunakan setter
$buku->setJudul("Laut Bercerita");
$buku->setPenulis("Leila S. Chudori");
$buku->setHarga(120000);
$buku->setStok(10);
$buku->setHalaman(379);
$buku->setDiskon(10);

$buku2 = new Buku();

$buku2->setJudul("Hujan");
$buku2->setPenulis("Tere Liye");
$buku2->setHarga(100000);
$buku2->setStok(5);
$buku2->setHalaman(500);
$buku2->setDiskon(5);

// Menampilkan data menggunakan getter
echo "===== DATA BUKU =====<br><br>";

echo "Judul: " . $buku->getJudul() . "<br>";
echo "Penulis: " . $buku->getPenulis() . "<br>";
echo "Harga: Rp" . $buku->getHarga() . "<br>";
echo "Stok: " . $buku->getStok() . "<br>";
echo "Halaman: " . $buku->getHalaman() . "<br>";
echo "Diskon: " . $buku->getDiskon() . "%<br><br>";

echo "Judul: " . $buku2->getJudul() . "<br>";
echo "Penulis: " . $buku2->getPenulis() . "<br>";
echo "Harga: Rp" . $buku2->getHarga() . "<br>";
echo "Stok: " . $buku2->getStok() . "<br>";
echo "Halaman: " . $buku2->getHalaman() . "<br>";
echo "Diskon: " . $buku2->getDiskon() . "%";

?>
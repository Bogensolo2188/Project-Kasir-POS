<?php
// Data dari form tambah barang
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

// Simpan data ke dalam file JSON
$stock_file = 'stock.json';
if (file_exists($stock_file)) {
    $current_data = json_decode(file_get_contents($stock_file), true);
} else {
    $current_data = [];
}

$new_item = array(
    'nama_barang' => $nama_barang,
    'harga' => $harga,
    'stok' => $stok
);

array_push($current_data, $new_item);

file_put_contents($stock_file, json_encode($current_data, JSON_PRETTY_PRINT));

// Menampilkan pesan berhasil
echo "Barang berhasil ditambahkan";
?>

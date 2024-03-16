<?php
// Data dari form transaksi penjualan
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

// Simpan data transaksi ke dalam file JSON
$transaksi_file = 'transaksi.json';
if (file_exists($transaksi_file)) {
    $current_data = json_decode(file_get_contents($transaksi_file), true);
} else {
    $current_data = [];
}

$new_item = array(
    'nama_barang' => $nama_barang,
    'harga' => $harga,
    'jumlah' => $jumlah
);

array_push($current_data, $new_item);

file_put_contents($transaksi_file, json_encode($current_data, JSON_PRETTY_PRINT));

// Menampilkan pesan berhasil
echo "Barang berhasil ditambahkan ke transaksi";
?>

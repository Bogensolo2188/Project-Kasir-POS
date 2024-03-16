<?php
// Ambil data dari file JSON
$stock_file = 'stock.json';
if (file_exists($stock_file)) {
    $stock_data = json_decode(file_get_contents($stock_file), true);
} else {
    $stock_data = [];
}

// Tampilkan data stok dalam tabel
foreach ($stock_data as $item) {
    echo "<tr>";
    echo "<td>" . $item['id'] . "</td>";
    echo "<td>" . $item['nama_barang'] . "</td>";
    echo "<td>" . $item['harga'] . "</td>";
    echo "<td>" . $item['stok'] . "</td>";
    echo "</tr>";
}
?>

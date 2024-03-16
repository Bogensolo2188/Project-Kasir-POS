<?php
// Ambil data dari file JSON
$transaksi_file = 'transaksi.json';
if (file_exists($transaksi_file)) {
    $transaksi_data = json_decode(file_get_contents($transaksi_file), true);
} else {
    $transaksi_data = [];
}

$total_pembayaran = 0;

// Tampilkan data transaksi dalam list
foreach ($transaksi_data as $item) {
    echo "<div>";
    echo "<p>Nama Barang: " . $item['nama_barang'] . "</p>";
    echo "<p>Harga: " . $item['harga'] . "</p>";
    echo "<p>Jumlah: " . $item['jumlah'] . "</p>";
    echo "</div>";
    
    // Hitung total pembayaran
    $total_pembayaran += ($item['harga'] * $item['jumlah']);
}

// Tampilkan Total Pembayaran dengan huruf lebih besar
echo "<h2>Total Pembayaran: <span style='font-size: 3em;'>Rp " . number_format($total_pembayaran, 0, ',', '.') . "</span></h2>";

// Tampilkan form untuk input pembayaran
echo "<form id='pembayaranForm'>";
echo "Pembayaran: <input type='number' name='pembayaran'><br>";
echo "<input type='submit' value='Bayar'>";
echo "</form>";

// Handle form submission
echo "<div id='pengembalian'></div>";
?>

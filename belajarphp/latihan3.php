<?php

// Aplikasi kalkulator diskon sederhana untuk toko online

// Function untuk menghitung harga setelah diskon
function hitungDiskon($hargaAwal, $persenDiskon)
{
    // Hitung potongan harga
    $potongan = $hargaAwal * ($persenDiskon / 100);

    // Hitung harga akhir setelah diskon
    $hargaAkhir = $hargaAwal - $potongan;

    // Kembalikan hasil perhitungan
    return $hargaAkhir;
}

// Variabel untuk menyimpan hasil perhitungan
$hargaSetelahDiskon = "";

// Cek apakah form sudah dikirim
if (isset($_POST['hitung'])) {

    // Ambil data dari form
    $harga = $_POST['harga'];
    $diskon = $_POST['diskon'];

    // Panggil Function untuk menghitung harga setelah diskon
    $hargaSetelahDiskon = hitungDiskon($harga, $diskon);
}

?>

<!-- Form input harga dan diskon -->
<form method="post">
    <label>Harga Awal (Rp):</label>
    <input type="number" name="harga" required><br><br>

    <label>Diskon (%):</label>
    <input type="number" name="diskon" required><br><br>

    <button type="submit" name="hitung">Hitung Harga Setelah Diskon
    </button>
</form>

<?php

// Tampilkan hasil jika sudah dihitung
if ($hargaSetelahDiskon != "") {
    echo "<h3>Harga Setelah Diskon: Rp " .
        number_format($hargaSetelahDiskon, 0, ',', '.') .
        "</h3>";
}

?>
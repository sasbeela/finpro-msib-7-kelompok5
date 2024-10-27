<?php
// Fungsi untuk menghitung total harga tiket
function hitungTotalHarga($jenisTiket, $jumlahTiket, $hariPemesanan) {
    // Harga tiket per jenis
    $hargaDewasa = 50000;
    $hargaAnak = 30000;
    
    // Biaya tambahan akhir pekan
    $tambahanAkhirPekan = 10000;
    
    // Menentukan harga berdasarkan jenis tiket
    if ($jenisTiket === 1) {
        $hargaPerTiket = $hargaDewasa;
    } elseif ($jenisTiket === 2) {
        $hargaPerTiket = $hargaAnak;
    } else {
        return "Jenis tiket tidak valid.";
    }
    
    // Memeriksa apakah hari pemesanan adalah akhir pekan
    if ($hariPemesanan === 6 || $hariPemesanan === 7) {
        $hargaPerTiket += $tambahanAkhirPekan; // Tambah biaya akhir pekan
    }
    
    // Menghitung total harga tiket
    $totalHarga = $hargaPerTiket * $jumlahTiket;
    
    // Memberikan diskon 10% jika total harga melebihi Rp150.000
    if ($totalHarga > 150000) {
        $diskon = $totalHarga * 0.10;
        $totalHarga -= $diskon; // Harga setelah diskon
    }
    
    return $totalHarga;
}

// Fungsi untuk validasi input jenis tiket
function pilihJenisTiket() {
    do {
        echo "Pilih jenis tiket:\n";
        echo "1. Dewasa (Rp50.000)\n";
        echo "2. Anak-anak (Rp30.000)\n";
        $jenisTiket = (int) readline("Masukkan pilihan (1 atau 2): ");
        
        if ($jenisTiket === 1 || $jenisTiket === 2) {
            return $jenisTiket;
        } else {
            echo "Pilihan tidak valid. Silakan coba lagi.\n";
        }
    } while (true);
}

// Fungsi untuk validasi input hari pemesanan
function pilihHariPemesanan() {
    do {
        echo "Pilih hari pemesanan:\n";
        echo "1. Senin\n";
        echo "2. Selasa\n";
        echo "3. Rabu\n";
        echo "4. Kamis\n";
        echo "5. Jumat\n";
        echo "6. Sabtu\n";
        echo "7. Minggu\n";
        $hariPemesanan = (int) readline("Masukkan pilihan (1-7): ");
        
        if ($hariPemesanan >= 1 && $hariPemesanan <= 7) {
            return $hariPemesanan;
        } else {
            echo "Hari pemesanan tidak valid. Silakan coba lagi.\n";
        }
    } while (true);
}

// Program utama
$jenisTiket = pilihJenisTiket();
$jumlahTiket = (int) readline("Masukkan jumlah tiket: ");
$hariPemesanan = pilihHariPemesanan();

// Memanggil fungsi untuk menghitung total harga
$totalHarga = hitungTotalHarga($jenisTiket, $jumlahTiket, $hariPemesanan);

// Tampilkan hasil ke pengguna
echo "Total harga: Rp" . number_format($totalHarga, 0, ',', '.') . "\n";
?>

function hitungRataRata() {
    // Mengambil nilai tinggi badan dari input
    var siswa1 = parseFloat(document.getElementById("siswa1").value);
    var siswa2 = parseFloat(document.getElementById("siswa2").value);
    var siswa3 = parseFloat(document.getElementById("siswa3").value);
    var siswa4 = parseFloat(document.getElementById("siswa4").value);
    var siswa5 = parseFloat(document.getElementById("siswa5").value);

    // Menghitung total tinggi badan
    var total = siswa1 + siswa2 + siswa3 + siswa4 + siswa5;

    // Menghitung rata-rata
    var rataRata = total / 5;

    // Menampilkan hasil rata-rata
    document.getElementById("hasil").innerText = "Rata-rata Tinggi Badan: " + rataRata.toFixed(2) + " cm";
}
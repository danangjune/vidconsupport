<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Permohonan Vidcon</title>
</head>
<body>
    <h2>Form Permohonan Vidcon</h2>
    <form action="{{ route('permohonan.store') }}" method="POST">
        @csrf
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br>

        <label for="nip">NIP:</label><br>
        <input type="text" id="nip" name="nip" required><br>
        
        <label for="opd">OPD:</label><br>
        <input type="text" id="opd" name="opd" required><br>
        
        <label for="tanggal_acara">Tanggal Acara:</label><br>
        <input type="date" id="tanggal_acara" name="tanggal_acara" required><br>
        
        <label for="tempat_acara">Tempat Acara:</label><br>
        <input type="text" id="tempat_acara" name="tempat_acara" required><br>
        
        <label for="waktu_acara">Waktu Acara:</label><br>
        <input type="time" id="waktu_acara" name="waktu_acara" required><br>
        
        <label for="peserta">Peserta:</label><br>
        <textarea id="peserta" name="peserta" required></textarea><br>
        
        <label for="bentuk_dukungan">Bentuk Dukungan:</label><br>
        <input type="text" id="bentuk_dukungan" name="bentuk_dukungan" required><br>
        
        <input type="checkbox" id="dukungan_infrastruktur" name="dukungan_infrastruktur" value="1">
        <label for="dukungan_infrastruktur">Butuh Bantuan Infrastruktur</label><br>
        
        <button type="submit">Kirim Permohonan</button>
    </form>
</body>
</html>
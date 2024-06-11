<!DOCTYPE html>
<html>
<head>
    <title>Permohonan Dukungan Vidcon</title>
</head>
<body>
    <h1>Permohonan Dukungan Vidcon</h1>
    <p>Nama: {{ $permohonan->nama }}</p>
    <p>OPD: {{ $permohonan->opd }}</p>
    <p>Hari Tanggal: {{ $permohonan->tanggal_acara }}</p>
    <p>Tempat Acara: {{ $permohonan->tempat_acara }}</p>
    <p>Waktu/Jam: {{ $permohonan->waktu_acara }}</p>
    <p>Peserta: {{ $permohonan->peserta }}</p>
    <p>Bentuk Dukungan: {{ $permohonan->bentuk_dukungan }}</p>
    <p>Butuh Bantuan Infrastruktur: {{ $permohonan->dukungan_infrastruktur ? 'Ya' : 'Tidak' }}</p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lampiran Permohonan Dukungan Vidcon</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
        }
        .container {
            margin-top: 20px;
        }
        h1 {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }
        .info {
            margin-bottom: 20px;
        }
        .info p {
            margin: 0;
            padding: 5px 0;
        }
        .info-label {
            font-weight: bold;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9em;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Permohonan Dukungan Vidcon</h1>
        <div class="info">
            <p><span class="info-label">Nama:</span> {{ $permohonan->nama }}</p>
            <p><span class="info-label">NIP:</span> {{ $permohonan->nip }}</p>
            <p><span class="info-label">OPD:</span> {{ $permohonan->opd }}</p>
            <p><span class="info-label">Hari Tanggal:</span> {{ $permohonan->tanggal_acara }}</p>
            <p><span class="info-label">Tempat Acara:</span> {{ $permohonan->tempat_acara }}</p>
            <p><span class="info-label">Waktu/Jam:</span> {{ $permohonan->waktu_acara }}</p>
            <p><span class="info-label">Peserta:</span> {{ $permohonan->peserta }}</p>
            <p><span class="info-label">Bentuk Dukungan:</span> {{ $permohonan->bentuk_dukungan }}</p>
            <p><span class="info-label">Butuh Bantuan Infrastruktur:</span> {{ $permohonan->dukungan_infrastruktur ? 'Ya' : 'Tidak' }}</p>
        </div>
        <div class="footer">
            <p>Terima kasih atas permohonan Anda.</p>
        </div>
    </div>
</body>
</html>

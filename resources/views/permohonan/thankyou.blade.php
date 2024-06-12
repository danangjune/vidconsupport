<!DOCTYPE html>
<html>
<head>
    <title>Terima Kasih</title>
</head>
<body>
    <h1>Terima kasih telah mengisi formulir!</h1>
    <p>Anda dapat mengunduh PDF dari formulir yang Anda isi.</p>
    <a href="{{ route('download.pdf', $permohonan->id) }}">Unduh PDF</a>
</body>
</html>
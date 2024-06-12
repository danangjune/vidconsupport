@php
$permohonan = session('permohonan');
@endphp
<!DOCTYPE html>
<html>
<head>
    <title>Terima Kasih</title>
</head>
<body>
    <h1>Terima kasih telah mengisi formulir!</h1>
    <p>Anda dapat mengunduh Lampiran untuk dicetak dibawah ini.</p>
    @if($permohonan)
        <a href="{{ route('download.pdf', $permohonan->id) }}">Unduh PDF</a>
    @else
        <p>Permohonan tidak ditemukan.</p>
    @endif
</body>
</html>

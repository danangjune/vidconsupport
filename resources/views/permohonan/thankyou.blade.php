@php
$permohonan = session('permohonan');
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 text-center">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Terima Kasih!</h1>
                <p class="card-text">Terima kasih telah mengisi formulir permohonan vidcon.</p>
                <p class="card-text">Anda dapat mengunduh Lampiran untuk dicetak dibawah ini.</p>
                @if($permohonan)
                    <a href="{{ route('download.pdf', $permohonan->id) }}" class="btn btn-primary">Unduh PDF</a>
                @else
                    <p class="text-danger">Permohonan tidak ditemukan.</p>
                @endif
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

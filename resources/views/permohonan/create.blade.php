<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Permohonan Vidcon</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .was-validated .form-control:invalid,
        .was-validated .form-control:invalid:focus {
            border-color: #dc3545;
            box-shadow: none;
        }
        .was-validated .form-control:valid,
        .was-validated .form-control:valid:focus {
            border-color: #28a745;
            box-shadow: none;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Form Permohonan Vidcon</h2>
        <form action="{{ route('permohonan.store') }}" method="POST" class="needs-validation" novalidate>
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
                <div class="invalid-feedback">Nama wajib diisi.</div>
            </div>
            <div class="form-group">
                <label for="nip">NIP:</label>
                <input type="text" class="form-control" id="nip" name="nip" pattern="\d{18}" required>
                <div class="invalid-feedback">NIP wajib diisi 18 digit angka.</div>
            </div>
            <div class="form-group">
                <label for="opd">OPD:</label>
                <input type="text" class="form-control" id="opd" name="opd" required>
                <div class="invalid-feedback">OPD wajib diisi.</div>
            </div>
            <div class="form-group">
                <label for="tanggal_acara">Tanggal Acara:</label>
                <input type="date" class="form-control" id="tanggal_acara" name="tanggal_acara" required>
                <div class="invalid-feedback">Tanggal acara wajib diisi.</div>
            </div>
            <div class="form-group">
                <label for="tempat_acara">Tempat Acara:</label>
                <input type="text" class="form-control" id="tempat_acara" name="tempat_acara" required>
                <div class="invalid-feedback">Tempat acara wajib diisi.</div>
            </div>
            <div class="form-group">
                <label for="waktu_acara">Waktu Acara:</label>
                <input type="time" class="form-control" id="waktu_acara" name="waktu_acara" required>
                <div class="invalid-feedback">Waktu acara wajib diisi.</div>
            </div>
            <div class="form-group">
                <label for="peserta">Peserta:</label>
                <textarea class="form-control" id="peserta" name="peserta" rows="3" required></textarea>
                <div class="invalid-feedback">Peserta wajib diisi.</div>
            </div>
            <div class="form-group">
                <label for="bentuk_dukungan">Bentuk Dukungan:</label>
                <input type="text" class="form-control" id="bentuk_dukungan" name="bentuk_dukungan" required>
                <div class="invalid-feedback">Bentuk dukungan wajib diisi.</div>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="dukungan_infrastruktur" name="dukungan_infrastruktur" value="1">
                <label class="form-check-label" for="dukungan_infrastruktur">Butuh Bantuan Infrastruktur</label>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Kirim Permohonan</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Custom JS for validation -->
    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</body>
</html>

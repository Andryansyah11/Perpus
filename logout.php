<?php
// Mulai sesi
session_start();

// Jika tombol logout ditekan
if(isset($_POST['logout'])) {
    // Hapus semua data sesi
    session_unset();

    // Hapus sesi dari server
    session_destroy();

    // Redirect ke halaman login atau halaman lain
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <!-- Tambahkan stylesheet Bootstrap di sini jika belum ditambahkan -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Logout</h2>
        <p>Anda yakin ingin logout?</p>
        <!-- Tombol untuk memicu modal -->
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmModal">Logout</button>

        <!-- Modal konfirmasi -->
        <div class="modal" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmModalLabel">Konfirmasi Logout</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Anda yakin ingin logout?
                    </div>
                    <div class="modal-footer">
                        <!-- Tombol logout di dalam modal -->
                        <form method="post">
                            <button type="submit" name="logout" class="btn btn-danger">Logout</button>
                        </form>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahkan script Bootstrap di sini jika belum ditambahkan -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
include 'function/Alert.php';

$nim = isset($_POST['nim']) ? trim($_POST['nim']) : '';
$nama = isset($_POST['nama']) ? trim($_POST['nama']) : '';
$jurusan = isset($_POST['jurusan']) ? trim($_POST['jurusan']) : '';
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($nim) || empty($nama) || empty($jurusan)) {
        $error_message = "Semua field harus diisi!";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OOP - CRUD</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Create Mahasiswa</h1>

            <?php if ($error_message): ?>
                <?php alert($error_message, 0); ?>
            <?php endif; ?>
            <form action="<?php echo $error_message ? 'create.php' : 'function/Mahasiswa.php?action=create'; ?>" method="post">
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" name="nim" value="<?= htmlspecialchars($nim); ?>" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?= htmlspecialchars($nama); ?>" required>
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" name="jurusan" value="<?= htmlspecialchars($jurusan); ?>" required>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Create</button>
            </form>
        </div>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyvlkpU366/PK5hCdSbCRGRCMV+ep10QJWyd1fbcAugocuj5zNL1q" crossorigin="anonymous"></script>
</body>
</html>
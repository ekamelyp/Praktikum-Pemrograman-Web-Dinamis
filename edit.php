<?php
include_once("koneksi.php");
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim = $id");
while ($user_data = mysqli_fetch_array($result)) {
    $nim = $user_data['nim'];
    $nama = $user_data['nama'];
    $jk = $user_data['jk'];
    $alamat = $user_data['alamat'];
    $tgllhr = $user_data['tgllhr'];
    $ipk = $user_data['ipk'];
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Praktikum 3 PWD</title>
</head>

<body>
    <div class="container">
        <h1>Edit Data Mahasiswa</h1>

        <a href="index.php" class="btn btn-info btn-sm m-2">Data</a>

        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <form action="edit.php" method="post">
                    <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
                    <div class="form-group">
                        <label>Nim</label>
                        <input type="text" name="nim" value="<?= $nim; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" value="<?= $nama; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <input type="text" name="jk" value="<?= $jk; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" value="<?= $alamat; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgllhr" value="<?= $tgllhr; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>IPK</label>
                        <input type="float" name="ipk" value="<?= $ipk; ?>" class="form-control" required>
                    </div>
                    <button type="submit" name="Update" class="btn btn-success btn-sm mt-2">Ubah</button>
                </form>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>

<?php
// Check If form submitted, insert form data into users table.
if (isset($_POST['Update'])) {
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $tgllhr = $_POST['tgllhr'];
    $ipk = $_POST['ipk'];
    // include database connection file
    include_once("koneksi.php");
    // Insert user data into table
    $result = mysqli_query($conn, "UPDATE mahasiswa SET nama='$nama',jk='$jk',alamat='$alamat',tgllhr='$tgllhr',ipk='$ipk' WHERE nim='$id'");
    // Show message when user added
    header("Location: index.php");
}
?>
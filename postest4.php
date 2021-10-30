<html>

<head>
    <title>Postest 4</title>
</head>

<body>
    <?php
    $nimMhs = $namaMhs = $jkMhs = $alamatMhs = $tglMhs =  $ipkMhs = "";
    $nim = $nama = $jk = $alamat = $tgl = $ipk = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nim"])) {
            $nimMhs = "NIM harus diisi";
        } else {
            $nim = test_input($_POST["nim"]);
        }

        if (empty($_POST["nama"])) {
            $namaMhs = "Nama harus diisi";
        } else {
            $nama = test_input($_POST["nama"]);
        }

        if (empty($_POST["jk"])) {
            $jkMhs = "Gender harus dipilih";
        } else {
            $jk = test_input($_POST["jk"]);
        }

        if (empty($_POST["alamat"])) {
            $alamatMhs = "";
        } else {
            $alamat = test_input($_POST["alamat"]);
        }

        if (empty($_POST["tgllhr"])) {
            $tglMhs = "";
        } else {
            $tgl = test_input($_POST["tgllhr"]);
        }

        if (empty($_POST["ipk"])) {
            $ipkMhs = "IPK harus diisi";
        } else {
            $ipk = test_input($_POST["ipk"]);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <a href="index.php">Daftar Mahasiswa</a>
    <br /><br />
    <form action="postest4.php <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Nim</td>
                <td><input type="text" name="nim">
                    <span class="error">* <?php echo $nimMhs; ?></span>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama">
                    <span class="error">* <?php echo $namaMhs; ?></span>
                </td>
            </tr>
            <tr>
                <td>Gender (L/P)</td>
                <td><input type="text" name="jk">
                    <span class="error">* <?php echo $jkMhs; ?></span>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat">
                    <span class="error"><?php echo $alamatMhs; ?></span>
                </td>
            </tr>
            <tr>
                <td>Tgl Lahir</td>
                <td><input type="text" name="tgllhr">
                    <span class="error"><?php echo $tglMhs; ?></span>
                </td>
            </tr>
            <tr>
                <td>IPK</td>
                <td><input type="text" name="ipk">
                    <span class="error">* <?php echo $ipkMhs; ?></span>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah"></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['Submit'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jkel = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $tgllhr = $_POST['tgllhr'];
        $ipkk = $_POST['ipk'];

        include_once("koneksi.php");

        if (empty($nim = $_POST['nim'])) {
            echo "NIM Kosong.<a href='index.php'>View Users</a>";

            if (empty($nim = $_POST['nama'])) {
                echo "Nama Kosong.<a href='index.php'>View Users</a>";

                if (empty($nim = $_POST['jk'])) {
                    echo "Gender Kosong.<a href='index.php'>View Users</a>";

                    if (empty($nim = $_POST['ipk'])) {
                        echo "IPK Kosong.<a href='index.php'>View Users</a>";
                    }
                }
            }
        } else {
            $result = mysqli_query($conn, "INSERT INTO mahasiswa(nim,nama,jk,alamat,tgllhr,ipk) VALUES('$nim','$nama','$jkel','$alamat','$tgllhr','$ipkk')");

            echo "Data berhasil disimpan. <a href='index.php'>View Users</a>";
        }
    }
    ?>
</body>

</html>
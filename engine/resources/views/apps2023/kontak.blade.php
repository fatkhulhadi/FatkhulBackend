<!DOCTYPE html>
<html>
<head>
    <title>Form Kontak</title>
</head>
<body>
    <?php
    // Inisialisasi variabel
    $nama = $email = $subjek = $pesan = $success = $error = "";

    // Cek apakah form telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validasi dan ambil data dari formulir
        $nama = test_input($_POST["nama"]);
        $email = test_input($_POST["email"]);
        $subjek = test_input($_POST["subjek"]);
        $pesan = test_input($_POST["pesan"]);

        // Alamat email penerima
        $penerima_email = "contoh@email.com";

        // Membuat header email
        $header = "From: $email\r\nReply-To: $email";

        // Mengirim email
        if (mail($penerima_email, $subjek, $pesan, $header)) {
            $success = "Pesan Anda telah berhasil terkirim!";
        } else {
            $error = "Gagal mengirim pesan. Silakan coba lagi.";
        }
    }

    // Fungsi untuk membersihkan dan memvalidasi input
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>Form Kontak</h2>
    <p><span class="error">* wajib diisi</span></p>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nama: <input type="text" name="nama">
        <span class="error">*</span>
        <br><br>

        Email: <input type="text" name="email">
        <span class="error">*</span>
        <br><br>

        Subjek: <input type="text" name="subjek">
        <span class="error">*</span>
        <br><br>

        Pesan: <textarea name="pesan" rows="5" cols="40"></textarea>
        <span class="error">*</span>
        <br><br>

        <input type="submit" name="submit" value="Kirim">
    </form>

    <?php
    // Menampilkan pesan sukses atau error
    if (!empty($success)) {
        echo "<p class='success'>$success</p>";
    }
    if (!empty($error)) {
        echo "<p class='error'>$error</p>";
    }
    ?>

</body>
</html>

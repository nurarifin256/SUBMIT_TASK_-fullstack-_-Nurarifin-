<?php
include "koneksi.php";
// var_dump($_POST);
// die;

if ($_POST['Submit'] == "Submit") {

    if (empty($_POST['nama']) || empty($_POST['jenis']) || empty($_POST['komentar'])) {
?>
        <script type="text/javascript">
            alert("harap lengkapi data");
            location.replace('index.php')
        </script>
        <?php
    } else {
        if ($_POST["hp"] == "") {
            $hp = "-";
        } else {
            $hp = $_POST['hp'];
        }

        $nama      = $_POST['nama'];
        $jenis      = $_POST['jenis'];
        $hp         = $hp;
        $komentar   = base64_encode($_POST['komentar']);

        $simpan = mysqli_query($koneksi, "INSERT INTO tb_user(nama, jenis, hp, komentar)VALUES('$nama','$jenis','$hp', '$komentar')");
        if ($simpan) {
        ?>
            <script type="text/javascript">
                alert("data berhasil disimpan");
                location.replace('index.php')
            </script>
<?php
        } else {
            echo "gagal";
        }
    }
}

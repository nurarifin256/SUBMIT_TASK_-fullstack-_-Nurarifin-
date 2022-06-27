<?php
include "koneksi.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <title>Test Full Stack</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
            <img src="https://dashindo.com/testfullstack/derpface.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Fullstack Programmer Test
        </a>
    </nav>

    <div class="container">
        <h3 class="mb-3 mt-3">Form Input</h3>
        <form method="POST" action="simpan.php" autocomplete="off">

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nama">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jenis</label>
                <div class="col-sm-6">
                    <select class="form-control" name="jenis">
                        <option value="">Pilih Salah Satu</option>
                        <option value="Manusia">Manusia</option>
                        <option value="Elf">Elf</option>
                        <option value="Tumbuh - Tumbuhan">Tumbuh - Tumbuhan</option>
                    </select>

                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">HP</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="hp" onkeypress="return hanyaAngka(event)">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Komentar</label>
                <div class="col-sm-6">
                    <textarea class="form-control" name="komentar" rows="5"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-6">
                    <button type="submit" name="Submit" value="Submit" class="btn btn-primary"><i class="fas fa-save mr-2"></i> SAVE</button>
                </div>
            </div>


        </form>

        <h3 class="mb-3 mt-3">Hasil Input</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Hp</th>
                    <th scope="col">Komentar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                $sql = mysqli_query($koneksi, "SELECT A.nama, A.jenis, A.hp, A.komentar FROM tb_user A");
                while ($data = mysqli_fetch_array($sql)) {
                    $no++;

                    $komentar = $data["komentar"];
                ?>
                    <tr>
                        <th scope="row"><?= $no ?></th>
                        <td><?= $data["nama"] ?></td>
                        <td><?= $data["jenis"] ?></td>
                        <td><?= $data["hp"] ?></td>
                        <!-- <td><//?= base64_decode($komentar) ?></td> -->
                        <td><?= $data["komentar"] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>

<script>
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;
        return true;
    }
</script>
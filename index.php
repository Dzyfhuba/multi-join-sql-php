<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basis Data Implementation</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-dark">
    <?php include_once('get.php'); ?>
    <table class="table table-dark table-striped table-hover table-responsive">
        <thead class="thead-default sticky-top">
            <tr>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Password</th>
                <th>No. Telepon</th>
                <th>Alamat</th>
                <th>TTL</th>
                <th>Foto</th>
                <th>Role</th>
                <th>Permission</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $key => $d) { ?>
                <tr>
                    <td scope="row"><?= $d['nama_lengkap'] ?></td>
                    <td><?= $d['email'] ?></td>
                    <td><?= $d['password'] ?></td>
                    <td><?= $d['no_telepon'] ?></td>
                    <td><?= $d['alamat'] ?></td>
                    <td><?= $d['tempat_lahir'].", ".$d['tanggal_lahir'] ?></td>
                    <td><img style="width: 5vw;" src="<?= $d['file_path'] ?>"></td>
                    <td><?= $d['nama_role'] ?></td>
                    <td><?= $d['nama_permission'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Perfilman Indonesia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container p-5 my-5 border">
        <div class="row">
            <div class="col">
                <?php if (!empty(session()->getFlashdata('message'))) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button class="btn-close" data-bs-dismiss="alert"><i class="bi bi-x-lg"></i></button>
                        <?php echo session()->getFlashdata('message'); ?>
                    </div>
                <?php endif ?>
                <a href="<?php echo base_url('/tambahfilm') ?>" class="btn btn-md btn-secondary mb-3 w-100">Tambah Film</a>
                <table class="table table-bordered table-striped">
                    <thead class="thead table-info">
                        <tr>
                            <th>#</th>
                            <th>Judul Film</th>
                            <th>Tahun Rilis</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($films as $r) : ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $r['judul'] ?></td>
                                <td><?php echo $r['rilis'] ?></td>
                                <td><?php echo $r['deskripsi'] ?></td>
                                <td>
                                    <a href="<?php echo base_url('/edit' . $r['id']) ?>" class="btn btn-outline-warning">Edit</a>
                                    <a href="<?php echo base_url('/delete' . $r['id']) ?>" class="btn btn-outline-danger" onclick="return confirm('Apakah yakin ingin menghapus data FILMKU?')">Delete</a>
                                </td>
                            </tr>
                        <?php $no++;
                        endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
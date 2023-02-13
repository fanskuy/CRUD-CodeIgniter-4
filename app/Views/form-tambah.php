<!DOCTYPE html>
<html lang="en">

<head>
    <title>Perfilman Indonesia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/form-tambah.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container p-5 my-5 border">
        <div class="row">
            <div class="col">
                <?php if (isset($validation)) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $validation->listErrors() ?>
                    </div>
                <?php } ?>
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo base_url('/') ?>" method="post">
                            <div class="form-control">
                                <input type="text" name="judul" required="">
                                <label>
                                    <span style="transition-delay:0ms">J</span>
                                    <span style="transition-delay:50ms">u</span>
                                    <span style="transition-delay:100ms">d</span>
                                    <span style="transition-delay:150ms">u</span>
                                    <span style="transition-delay:200ms">l</span>
                            </div>
                            <div class="form-control">
                                <input type="date" name="rilis" required="">
                                <label>
                                    <span style="transition-delay:0ms">R</span>
                                    <span style="transition-delay:50ms">i</span>
                                    <span style="transition-delay:100ms">l</span>
                                    <span style="transition-delay:150ms">i</span>
                                    <span style="transition-delay:200ms">s</span>
                            </div>
                            <div class="form-control">
                                <input type="text" name="deskripsi" required="">
                                <label>
                                    <span style="transition-delay:0ms">D</span>
                                    <span style="transition-delay:50ms">e</span>
                                    <span style="transition-delay:100ms">s</span>
                                    <span style="transition-delay:150ms">k</span>
                                    <span style="transition-delay:200ms">r</span>
                                    <span style="transition-delay:250ms">i</span>
                                    <span style="transition-delay:300ms">p</span>
                                    <span style="transition-delay:350ms">s</span>
                                    <span style="transition-delay:400ms">i</span>
                            </div>
                            <button type="submit" class="btn btn-outline-success w-100">Confirm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
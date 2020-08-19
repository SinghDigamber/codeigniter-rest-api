<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Upload Multiple Files or Images in Codeigniter 4 - positronx.io</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 500px;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <?php if (session('msg')) : ?>
        <div class="alert alert-success mt-3">
            <?= session('msg') ?>
        </div>
    <?php endif ?>    

    <form method="post" action="<?php echo base_url('UploadMultipleFiles/uploadFiles');?>" 
    enctype="multipart/form-data">
      <div class="form-group mt-3">
        <input type="file" name='images[]' multiple="" class="form-control">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-danger">Upload</button>
      </div>
    </form>

  </div>
</body>

</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>PDF Hello</title>
  </head>
  <body>

    <div class="container mt-5">

      <form action="makePdf.php" method="post" class="offset-md-3 col-md-6">

        <h1>Create your own PDF</h1>
        <p>fill out the details below and PDF will download</p>

        <div class="row mb-2">

          <div class="col-md-6">
            <input type="text" name="fname" placeholder="First Name" class="form-control" required />
          </div>
          <div class="col-md-6">
            <input type="text" name="lname" placeholder="Last Name" class="form-control" required />
          </div>
        </div>

        <div class="mb-2">
            <input type="email" name="email" placeholder="Email" class="form-control" required/>
        </div>
        <div class="mb-2">
          <input type="tel" name="phone" placeholder="Phone" class="form-control" required/>
        </div>
        <div class="mb-2">
          <textarea name="message" placeholder="Your Message" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success btn-lg w-100">Create PDF</button>

      </form>

    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  </body>
</html>

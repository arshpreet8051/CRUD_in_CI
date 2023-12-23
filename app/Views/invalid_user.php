<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Login Page</title>
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4>Login Failed</h4>
        </div>
        <div class="card-body">
        <form action="<?php echo base_url('student_controller/login'); ?>" method="post">
            <div class="row md-6 justify-content-center">
              <h2 style="margin-bottom:19px">Sorry! Invalid User</h2>
              <h4 style="margin-bottom:19px">Either your username or password is wrong</h4>
            <button type="submit" class="btn btn-primary">Go Back</button>
</div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

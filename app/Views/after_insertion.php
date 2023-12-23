<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration done</title>
  <!-- Include Bootstrap CSS from CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h1>Your Data has been inserted successfully</h1>
    <form method="POST" action="<?php echo base_url('student_controller/show_student'); ?>">
       <button type="submit" name="submit" class="btn btn-primary">Show registrations</button>
    </form>
  </div>

  <!-- Include Bootstrap JS and Popper.js from CDN if needed -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

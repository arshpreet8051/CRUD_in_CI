<!-- application/views/log_view.php -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Log View</title>
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Log Table</h4>
        <a href="<?php echo base_url('student_controller/admin_view'); ?>" class="btn btn-primary">Go Back</a>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Course Code</th>
              <th>Branch Code</th>
              <th>Scheme Code</th>
              <th>leet_status</th>
              <th>semester</th>
              <th>6_month_training</th>
              <th>AICTE_RE</th>
              <th>course_type</th>
              <th>subject_title</th>
              <th>m_code</th>
              <th>theory/practical</th>
              <th>elective_status</th>
              <th>credits</th>
              <th>internal_marks</th>
              <th>external_marks</th>
              <th>cbs_status</th>
              <th>created_at</th>
              <th>updated_at</th>
              <!-- Add other columns as needed -->
            </tr>
          </thead>
          <tbody>
            <?php foreach ($students as $student): ?>
              <tr>
                <?php foreach ($student_log_model->allowedFields as $field): ?>
                  <td style="<?php echo ($student_log_model->isUpdatedField($student, $field)) ? 'background-color: yellow;' : ''; ?>">
                    <?php echo $student[$field]; ?> <!-- Access array values using square brackets -->
                  </td>
                <?php endforeach; ?>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

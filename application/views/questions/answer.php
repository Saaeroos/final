<?php //var_dump($question) ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <?php $this->load->view('admin/application/bootstrap') ?>
  <link rel="stylesheet" type="text/css" href="/assets/platform.css">
  <meta charset="utf-8">
  <title>Answer this question</title>
</head>
<body>
<?php $this->load->view('header') ?>

  <div class="container">
    <?php $this->load->view('validation_errors') ?>

    <h2><?php echo $question['title'] ?></h2>
    <p><?php echo $question['q_content'] ?></p>
    <p>Needed: <?php echo $question['when_needed'] ?></p>

    <form method="POST">
      <div class="form-group">
        <label for="a_content">Your answer to this question:</label>
        <textarea class="form-control" id="a_content" name="a_content" ><?php echo set_value('a_content'); ?></textarea>
      </div>

      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" name="share">
          Check this to share your profile with this NGO. (does not work yet)
        </label>
      </div>

      <button type="submit" class="btn btn-primary">Send</button>
    </form>

  </div>

</body>
</html>

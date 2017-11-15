<!DOCTYPE html>
<html>


<meta charset="utf-8">
<?php $this->load->view('admin/application/bootstrap') ?>
<link rel="stylesheet" type="text/css" href="/assets/platform.css">
<meta charset="utf-8">
<head>
  <title>Add your Question</title>
</head>
<body>
  <?php $this->load->view('header') ?>

  <div class="container">
    <?php $this->load->view('validation_errors') ?>

    <form method="POST" action="/questions/add">
      <div class="form-group">
        <label for="title">Add your question</label>
        <textarea class="form-control" id="title" name="title" ><?php echo set_value('title'); ?></textarea>
      </div>

      <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" id="description" rows="3" name="q_content"><?php echo set_value('q_content'); ?></textarea>
      </div>

      <div class="form-group">
        <label for="when_needed">When Needed:</label>
        <textarea  name='when_needed' class="form-control" id="when_needed" rows="1"><?php echo set_value('when_needed'); ?></textarea>
      </div>
      <div class="form-group">
        <label for="attachment">Photo</label>
        <div>
          <input id="attachment" type="file" name="attachment" size="20">
        </div>
      </div>





      <button type="submit" class="btn btn-primary">Add question</button>

    </form>

  </div>






</body>
</html>







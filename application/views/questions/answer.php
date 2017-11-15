<?php $this->load->view('html_head', array('title' => 'Answer this question')) ?>
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

<?php $this->load->view('html_head', array('title' => 'Homepage')) ?>
<?php $this->load->view('header') ?>

<div class="container">
  <?php $this->load->view('validation_errors') ?>
  <div class="card-columns">
    <div class="card p-3">
      <blockquote class="blockquote mb-0 card-body">
        <p>We believe in the power of people who want to <em>make a change</em></p>
        <footer class="blockquote-footer">
          <small class="text-muted">
            Engineers Without Borders
          </small>
        </footer>
      </blockquote>
    </div>

    <?php foreach ($questions_for_view as $question) { ?>

    <div class="card">
      <?php if(!empty($question['attachment'])) { ?>
      <img class="card-img-top" src="<?php echo $question['attachment'] ; ?> " alt="Card image cap">
      <?php } ?>
      <div class="card-body">
        <h4 class="card-title"><?php echo $question['title'] ; ?></h4>
        <p class="card-text"><?php echo $question['q_content']?></p>
        <a  href="/questions/<?php echo $question['question_id']; ?>" class="btn btn-primary">View Question</a>
      </div>
    </div>

    <?php } ?>
  </div>
</div>
</body>
</html>

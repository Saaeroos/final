<?php $this->load->view('html_head', array('title' => 'View Question')) ?>
<?php $this->load->view('header') ?>

<div class="container">
  <?php $this->load->view('validation_errors') ?>
  <div class="container-fluid">
    <h1>Question from NGO</h1>
      <h2><?php echo $question['title']; ?></h2>
      <h4>Contact Person:<?php echo $question['name'] ?></h4>
      <h4>Contact info: <?php echo $question['contact_email'] ?></h4>
      <h4>Description:</h4>
      <p><?php echo $question['q_content'] ?></p>

      <h4>Attached Files:</h4>
      <img class="card-img-top" src="<?php echo $question['attachment'] ?>" alt="Card image cap">

      <h4>When needed: <?php echo $question['when_needed'] ?></h4>
      <div>
      <?php if ($this->session->currentUser['role'] == 'engineer'){ ?>
        <a class="btn btn-primary" href="/questions/<?php echo $question['question_id'] ?>/answer">I take this question</a>
      <?php } ?>
        <div>
        <h4>Answers</h4>
        <h4>Posted By: Engineer Alan Cook</h4>
        <h4>dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus variu</h4>
        </div>
        <div>
        <h4>Comments:</h4>
        <div>
        <h4>dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus variu</h4></div>
        </div>
      </div>






  </div>
</div>


</body>
</html>
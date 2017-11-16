<?php $this->load->view('html_head', array('title' => 'View Question')) ?>
<?php $this->load->view('header') ?>

<div class="container">
  <?php $this->load->view('validation_errors') ?>
  <div class="container-fluid">
    <h1>Question from NGO</h1>
    <h2><?php echo $question['title']; ?></h2>
    <?php //var_dump($question) ?>
    <h4>Contact Person:<?php echo $question['ngo']['name'] ?></h4>
    <h4>Contact info: <?php echo $question['ngo']['contact_email'] ?></h4>
    <h4>Description:</h4>
    <p><?php echo $question['q_content'] ?></p>

    <h4>Attached Files:</h4>
    <img class="card-img-top" src="<?php echo $question['attachment'] ?>" alt="Card image cap">

    <h4>When needed: <?php echo $question['when_needed'] ?></h4>
    <div>
      <?php if ($this->session->currentUser['role'] == 'engineer'){ ?>
      <div class="clearfix">
        <a class="btn btn-primary btn-lg float-right" href="/questions/<?php echo $question['id'] ?>/answer">I take this question</a>
      </div>
      <?php } ?>
      <div>

        <section id="answers">
          <h2>Answers</h2>

          <?php foreach ($question['answers'] as $answer) { ?>
          <div class="card mt-4">
            <div class="card-header text-white bg-primary">
              <strong><?php echo $answer['engineer_name'] ?></strong>
              <span>(Engineer)</span>
            </div>
            <div class="card-body">
              <p class="card-text"><?php echo $answer['a_content'] ?></p>
              <?php // if (current user is ngo?) ?>
              <div class="clearfix">
                <?php //var_dump($answer)?>
              <a href="/engineer/<?php echo $answer['engineer_id'] ?>/request" class="btn btn-primary float-right">Request Profile</a>
              </div>
            </div>
          </div>


          <section class="comments mt-4 ml-5 mb-5">
            <h4>Comments:</h4>
            <?php if(!empty($answer['comments'])) { ?>
            <?php foreach ($answer['comments'] as $comment) { ?>
            <div class="card mb-4">
              <div class="card-header bg-secondary">
                <?php if(!empty($comment['engineer_name'])) { ?>
                <strong><?php echo $comment['engineer_name'] ?></strong>
                <span>(Engineer)</span>
                <?php } else { ?>
                <strong><?php echo $comment['ngo_contact_person'] ?></strong>
                <span>(<?php echo $comment['ngo_name'] ?>)</span>
                <?php } ?>
              </div>
              <div class="card-body">
                <p class="card-text"><?php echo $comment['c_content'] ?></p>
              </div>
            </div>
            <?php } ?>
            <?php } ?>
            <form method="POST">
            <div class="form-group mt-4">
              <label for="exampleInputPassword1">Add your own comment:</label>
              <textarea class="form-control" id="exampleInputPassword1" placeholder="Write a comment..." rows="4" name="comment"></textarea>
            </div>
            <input type="hidden" name="answer_id" value="<?php echo $answer['id'] ?>">
            <button type="submit" class="btn btn-outline-primary">Send comment</button>
            </form>
          </section>
          <?php } ?>

        </section>

      </div>
    </div>
  </div>
</div>
</body>
</html>

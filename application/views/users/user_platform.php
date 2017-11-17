<?php $this->load->view('html_head', array('title' => 'Platform')) ?>
<?php $this->load->view('header') ?>

  <div class="container">
    <?php if ($user['role'] == 'ngo'){ ?>
      <form method="POST" action="/questions/add" class="mb-4">
        <div class="form-group">
        <label for="exampleFormControlTextarea1">Add your question</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="title"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Add question</button>
    </form>
  <?php } ?>


<h2>Questions</h2>

<?php foreach ($questions_for_view as $question) { ?>

<div class="card mb-4">
  <?php if(!empty($question['attachment'])) { ?>
    <img class="card-img-top" src="/uploads/<?php echo $question['attachment'] ; ?> " alt="Card image cap">
  <?php } ?>
  <div class="card-body">
    <h4 class="card-title"><?php echo $question['title'] ; ?></h4>
    <h6 class="mt-0 mb-1"><strong>Posted by:</strong><?php echo $question['name'] ?></h6>
    <p class="card-text"><?php echo $question['q_content']?></p>
    <a  href="/questions/<?php echo $question['question_id']; ?>" class="btn btn-primary">View Question</a>
  </div>
</div>

<?php } ?>





</div>

</body>
</html>

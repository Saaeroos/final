<?php $this->load->view('html_head', array('title' => 'Your NGO Profile')) ?>
<?php $this->load->view('header') ?>

<div class="container">
  <h2>List of Pending Request</h2>
<table class="table">

  <thead>
    <tr>
      <th scope="col">Engineer name</th>
      <th scope="col">Date requested</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($share_requests as $request) { ?>
    <tr>
      <td><?php echo $request['name'] ?></td>
      <td><?php echo $request['created_at'] ?></td>
      <td><?php echo $request['status'] ?></td>
      <td>
      <?php if($request['status'] == 'accepted') { ?>
        <a href="/engineer/<?php echo $request['engineer_id'] ?>/profile" class="badge badge-success">Engineer Profile</a>
        <?php } ?>
    </td>

    </tr>
<?php } ?>
  </tbody>
</table>

</div>








<?php $this->load->view('html_head', array('title' => 'Your NGO Profile')) ?>
<?php $this->load->view('header') ?>

<div class="container">

<table class="table">
  <h2>List of requests</h2>

  <thead>
    <tr>

      <th scope="col">NGO name</th>
      <th scope="col">Date</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
    <?php foreach ($share_requests as $request) { ?>
  <tbody>

    <tr>

      <td><?php echo $request['name'] ?></td>
      <td><?php echo $request['created_at'] ?></td>
      <td><?php echo $request['status'] ?></td>
      <td><a href="/share_requests/approve/<?php echo $request['share_request_id'] ?>" class="badge badge-success">Approve</a>
      <a href="/share_requests/decline/<?php echo $request['share_request_id'] ?>" class="badge badge-warning">Decline</a></td>

    </tr>
<?php } ?>
  </tbody>
</table>

</div>








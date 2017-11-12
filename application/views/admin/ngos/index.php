<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <?php $this->load->view('admin/application/bootstrap') ?>
  <meta charset="utf-8">
  <title>Admin: NGOs</title>
</head>
<body>

  <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link platform" href="#">Platform</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Log Out</a>
  </li>

</ul>
  <h4>Admin</h4>
  <h5>Jen</h5>
  <h5>jen@example.com</h5>


  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <a class="nav-link active" id="v-pills-ngos-tab" data-toggle="pill" href="#v-pills-ngos" role="tab" aria-controls="v-pills-ngos" aria-selected="true">NGOs</a>
  <a class="nav-link" id="v-pills-engineer-tab" data-toggle="pill" href="#v-pills-engineer" role="tab" aria-controls="v-pills-engineer" aria-selected="false">Engineer</a>
  <a class="nav-link" id="v-pills-questions-tab" data-toggle="pill" href="#v-pills-question" role="tab" aria-controls="v-pills-question" aria-selected="false">Questions</a>
  <a class="nav-link" id="v-pills-answer-tab" data-toggle="pill" href="#v-pills-answer" role="tab" aria-controls="v-pills-answer" aria-selected="false">Answers</a>
  <a class="nav-link" id="v-pills-comments-tab" data-toggle="pill" href="#v-pills-comments" role="tab" aria-controls="v-pills-comments" aria-selected="false">Comments</a>
  <a class="nav-link" id="v-pills-pending_engineer_signups-tab" data-toggle="pill" href="#v-pills-answer" role="tab" aria-controls="v-pills-pending_engineer_signups-tab" aria-selected="false">Pending Engineer Signups</a>
  <a class="nav-link" id="v-pills-pending_ngo_signups-tab" data-toggle="pill" href="#v-pills-ngo" role="tab" aria-controls="v-pills-pending_ngo_signups-tab" aria-selected="false">Pending NGO Signups</a>
</div>

<div class="tab-content" id="v-pills-tabContent">
  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
</div>

</body>
</html>
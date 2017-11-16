<?php if ( null !==($this->session->flashdata('success')) ){ ?>
<div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
<?php } ?>

<?php
$errors = validation_errors('<li>', '</li>');

$flash_error = $this->session->flashdata('error');

if(!empty($flash_error)) {
  $errors .= "<li>{$flash_error}</li>";
}

$uploads_errors = $this->upload->display_errors('<li>', '</li>');
if(!empty($_POST) && !empty($uploads_errors)) {
  $errors .= $uploads_errors;
}

if ( $errors ) { ?>
<ul class="list-unstyled alert alert-danger">
  <?php echo $errors; ?>
</ul>
<?php }

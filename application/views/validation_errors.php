<?php if ( null !==($this->session->flashdata('success')) ){ ?>
<div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
<?php } ?>

<?php
$err = validation_errors('<li>', '</li>');
if( $err ) { ?>
<ul class="list-unstyled alert alert-danger">
  <?php echo $err; ?>
</ul>
<?php }

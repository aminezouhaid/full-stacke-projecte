<?php require APPROOT . '/views/inc/header.php'; ?>
<a href="<?php echo URLROOT; ?>/contacts" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
<br>
<h1><?php echo $data['contact']->name; ?></h1>
<div class="bg-secondary text-white p-2 mb-3">
  Written by <?php echo $data['name']->name; ?> on <?php echo $data['contact']->created_at; ?>
</div>
<p><?php echo $data['contact']->body; ?></p>

<?php if($data['contact']->user_id == $_SESSION['user_id']) : ?>
  <hr>
  <a href="<?php echo URLROOT; ?>/contacts/edit/<?php echo $data['contact']->id; ?>" class="btn btn-dark">Edit</a>

  <form class="pull-right" action="<?php echo URLROOT; ?>/contacts/delete/<?php echo $data['contact']->id; ?>" method="post">
    <input type="submit" value="Delete" class="btn btn-danger">
  </form>
<?php endif; ?>

<?php require APPROOT . '/views/inc/footer.php'; ?>
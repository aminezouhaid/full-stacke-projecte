<?php require APPROOT . '/views/inc/header.php'; ?>
  <?php flash('contact_message'); ?>
  <div class="row mb-3">
    <div class="col-md-6">
      <h1>Contacts</h1>
    </div>
    <div class="col-md-6">
      <a href="<?php echo URLROOT; ?>/contacts/add" class="btn btn-primary pull-right">
        <i class="fa fa-pencil"></i> Add contact
      </a>
    </div>
  </div>
  <?php foreach($data['contacts'] as $contact) : ?>
    <div class="card card-body mb-3">
      <h4 class="card-title"><?php echo $contact->name; ?></h4>
      <div class="bg-light p-2 mb-3">
        Written by <?php echo $contact->name; ?> on <?php echo $contact->contactCreated; ?>
      </div>
      <p class="card-text"><?php echo $contact->email; ?></p>
      <a href="<?php echo URLROOT; ?>/contacts/show/<?php echo $contact->contactId; ?>" class="btn btn-dark">More</a>
    </div>
  <?php endforeach; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>
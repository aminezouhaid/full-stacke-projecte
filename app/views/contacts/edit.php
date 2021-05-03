<?php require APPROOT . '/views/inc/header.php'; ?>
<a href="<?php echo URLROOT; ?>/contacts" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
  <div class="m-5">
        <div>
            <h2 class="mt-2">Edit contact</h2>
        </div>
        <?php foreach ($data as $row) : ?>
        <form action="href=<?php echo URLROOT; ?>/Contacts/edit" method="POST" class="row g-3 col-11 m-auto">
            <div class="col-md-6">
              <label for="" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>">
            </div>
            <div class="col-md-6">
              <label for="" class="form-label">Phone</label>
              <input type="tel" name="number" class="form-control" value="<?php echo $row['number']; ?>">
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>">
            </div>
            <div class="col-12">
              <label for="" class="form-label">Address</label>
              <input type="text" name="address" class="form-control" value="<?php echo $row['address']; ?>">
            </div>
            <div class="col-12">
              <button type="submit" name="submit_edit" class="btn btn-primary mt-2 ml-5">Edit</button>
            </div>
        </form>
        <?php endforeach; ?>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
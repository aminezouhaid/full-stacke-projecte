<?php require APPROOT . '/views/inc/header.php'; ?>
  <a href="<?php echo URLROOT; ?>/contacts" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
  <div class="m-5">
        <div>
            <h2 class="mt-2">Add contact</h2>
        </div>
        <form action="href=<?php echo URLROOT; ?>/Contacts/insert" method="POST" class="row g-3 col-11 m-auto">
            <div class="col-md-6">
              <label for="" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" placeholder="Enter name">
            </div>
            <div class="col-md-6">
              <label for="" class="form-label">Phone</label>
              <input type="tel" name="number" class="form-control" placeholder="Enter email">
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" placeholder="Enter email">
            </div>
            <div class="col-12">
              <label for="" class="form-label">Address</label>
              <input type="text" name="address" class="form-control" placeholder="Enter address">
            </div>
            <div class="col-12">
              <button type="submit" name="submit_add" class="btn btn-primary mt-2 ml-5">Add</button>
            </div>
        </form>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
<?php require APPROOT . '/views/inc/header.php'; ?>
  <?php flash('contact_message'); ?>
  <div class="container">
            <div class="btn-group mb-2" role="group" aria-label="Basic outlined example">
              <a href="<?php echo URLROOT; ?>/Contacts/return" class="btn btn-outline-primary">Add contact</a>
            </div>
            <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <td>id</td>
                            <td>Name</td>
                            <td>Number</td>
                            <td>Address</td>
                            <td>Email</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $row) : ?>
                        <tr>
                            <td><?php echo $row->id ; ?></td>
                            <td><?php echo $row->name ; ?></td>
                            <td><?php echo $row->number ; ?></td>
                            <td><?php echo $row->address ; ?></td>
                            <td><?php echo $row->email ; ?></td>
                            <td> <a href="<?php echo URLROOT; ?>/UsersControllers/getOne?id=<?php echo $row->id; ?>" class="btn btn-success">Update</a>  <a href="<?php echo URLROOT; ?>/Contacts/delete?id=<?php echo $row->id; ?>" class="btn btn-danger">Delete</a>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>      
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
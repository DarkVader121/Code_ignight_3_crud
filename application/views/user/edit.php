<div class="container">
    <h1 class="text-center">Edit User</h1>
    <form action="<?php echo base_url('user/update/' . $users->id); ?>" method="POST">
        <input type="hidden" name="__method" value="PUT">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $users->name;?> ">
        </div>
        <div class="form-group">
            <label for="">Mobile </label>
            <input type="text" class="form-control" id="name" name="mobile" value="<?php echo $users->mobile;?> ">
        </div>
        <div class="form-group">
            <label for="">Address</label>
            <input type="text" class="form-control" id="name" name="address" value="<?php echo $users->address;?> ">
        </div>
        <div class="form-group">
            <label for="">Email Address</label>
            <input type="text" class="form-control" id="name" name="email_address" value="<?php echo $users->email_address;?> ">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
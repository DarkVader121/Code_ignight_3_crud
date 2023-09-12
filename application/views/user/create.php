<div class="container">
    <h1 class="text-center">CREATE USER</h1>
    <form action="<?php echo base_url('user/store');?>" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control"  placeholder="Name" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Mobile</label>
            <input type="text" class="form-control"  placeholder="Mobile" name="mobile">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <input type="text" class="form-control"  placeholder="Address" name="address">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control"  placeholder="Email Address" name="email_address">
        </div>
        <button class="btn btn-primary">Create User</button>
    </form>
</div>
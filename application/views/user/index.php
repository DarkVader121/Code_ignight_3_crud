<div class="container">
    <h1 class="text-center">Code Igniter 3 </h1>
    <div class="card">
        <div class="card-header">
            <a class="btn btn-outline-primary" href="<?php echo base_url('user/create'); ?>">
                Create a user
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                <?php foreach($users as $user){ ?>
                <tr>
                    <td><?php echo $user->id ?></td>
                    <td><?php echo $user->name ?></td>
                    <td><?php echo $user->mobile ?></td>
                    <td><?php echo $user->address ?></td>
                    <td><?php echo $user->email_address ?></td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="<?php echo base_url('user/edit/' . $user->id) ?>">
                           Edit User
                        </a>
                        <a class="btn btn-danger btn-sm" href="<?php echo base_url('user/delete/' . $user->id) ?>">
                           Delete User
                        </a>
                    </td>
                </tr>
                
                 <?php } ?>
            </table>
        </div>
    </div>
</div>

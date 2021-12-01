<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <?php if(isset($users)): $i++;?>
            <table class="table table-condensed">
                <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Blood Group</th>
                <th>City</th>
                </thead>
                <?php foreach($users as $u): $i++;?>
                <tr class="<?php if($i%2==0){echo $bg_background;}else{echo 'bg-light';} ?>">
                    <td><?= $u['first_name']." ".$u['last_name']; ?></td>
                    <td><?= $u['email']; ?></td>
                    <td><?= $u['dob']; ?></td>
                    <td><?= $u['gender']; ?></td>
                    <td><?= $u['b_type']; ?></td>
                    <td><?= $u['city']; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
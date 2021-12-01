<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <?php if(isset($donors)): $i++;?>
            <table class="table table-condensed">
                <thead>
                <th>Name</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Blood Group</th>
                <th>Address</th>
                <th>City</th>
                <th>Mobile</th>
                <th>Last Date of Donation</th>
                <!-- <th></th> -->
                </thead>
                <?php foreach($donors as $u): $i++;

                ?>
                <tr class="<?php if($i%2==0){echo $bg_background;}else{echo 'bg-light';} ?>">
                    <td><a href="profile.php?id=<?= $u['id']; ?>"><?= $u['fname']." ".$u['mname']." ".$u['lname']; ?></a></td>
                    <td><?= $u['bday']; ?></td>
                    <td><?= $u['sex']; ?></td>
                    <td><?= $u['b_type']; ?></td>
                    <td><?= wordwrap($u['h_address'], 26, '<br>'); ?></td>
                    <td><?= $u['city']; ?></td>
                    <td><?= $u['mobile']; ?></td>
                    <td><?= $u['don_date']; ?></td>
                    <!-- <td><a href="delete.php?id=<?php echo $u['id']; ?>">Delete</a></td> -->
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
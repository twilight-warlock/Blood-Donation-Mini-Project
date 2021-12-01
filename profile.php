<?php
$id = $_GET['id']; // primary key for the donor in the database

require_once 'php/DBConnect.php';
$db = new DBConnect();
$flag = $db->checkAuth();
// Search by Id
$donor = $db->getDonorProfileById($id);

$title = "Donor Profile";

include 'layout/_header.php';

include 'layout/_top_nav.php';

if($flag){
    include 'layout/_top_nav.php';
}

?>

<div class="container">
    <marquee style="font-size: 40px; color: rgb(146, 15, 15); font-family: 'Poppins', sans-serif;">Profile Information</marquee>
    <br><br>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-md-5">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h5 style="font-size: 30px; font-weight: bold; color: black; font-family: 'Poppins', sans-serif;">Basic Info</h5>
                </div>
                <div class="panel-body">
                    <table class="table table-condensed">
                        <tr>
                            <td><label>Name</label></td>
                            <td><?= $donor[0]['fname']." ".$donor[0]['mname']." ".$donor[0]['lname']; ?></td>
                        </tr>
                        <tr>
                            <td><label>Gender</label></td>
                            <td><?= $donor[0]['sex']; ?></td>
                        </tr>
                        <tr>
                            <td><label>D.O.B</label></td>
                            <td><?= $donor[0]['bday']; ?></td>
                        </tr>
                        <tr>
                            <td><label> Gender </label></td>
                            <td><?= $donor[0]['sex']; ?></td>
                        </tr>
                        <tr>
                            <td><label> Address </label></td>
                            <td><?= wordwrap($donor[0]['h_address'], 26, '<br>'); ?></td>
                        </tr>
                        <tr>
                            <td><label> City </label></td>
                            <td><?= $donor[0]['city']; ?></td>
                        </tr>
                        <tr>
                            <td><label> Donation Date </label></td>
                            <td><?= $donor[0]['don_date']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h5 style="font-size: 30px; font-weight: bold; color: black; font-family: 'Poppins', sans-serif;">Medical Info</h5>
                </div>
                <div class="panel-body">
                    <table class="table table-condensed">
                        <tr>
                            <td><label>Blood Type</label></td>
                            <td><?= $donor[0]['b_type']; ?></td>
                        </tr>
                        <tr>
                            <td><label>Temperature</label></td>
                            <td><?= $donor[0]['temp']; ?></td>
                        </tr>
                        <tr>
                            <td><label> Pulse </label></td>
                            <td><?= $donor[0]['pulse']; ?></td>
                        </tr>
                        <tr>
                            <td><label> Blood Pressure </label></td>
                            <td><?= $donor[0]['bp']; ?></td>
                        </tr>
                        <tr>
                            <td><label> Weight </label></td>
                            <td><?= $donor[0]['weight']; ?></td>
                        </tr>
                        <tr>
                            <td><label> Haemoglobin </label></td>
                            <td><?= $donor[0]['haemoglobin']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>

<br><br>

<?php include 'layout/_footer.php'; ?>

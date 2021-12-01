<?php

$i=0;
require_once 'users/php/DBConnect.php';
$db = new DBConnect();
$donors = $db->getDonors();

$title="Donors Area";$setMemberActive="active";$bg_background="bg-danger";
include 'layout/_header.php';

include 'layout/_top_nav.php';
?>

<div class="container" style="text-align: center;">
	<a href="#" style="font-size: 40px; color: black; font-family: 'Poppins', sans-serif;">Our Donors</a>
</div>
<br>

<?php include 'users/layout/_donor_layout.php'; ?>

<?php include 'layout/_footer.php'; ?>

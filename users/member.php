<?php
$i=0;
require_once 'php/DBConnect.php';
$db = new DBConnect();
$users = $db->getUsers();

$title="Members Area";$setMemberActive="active";$bg_background="bg-danger";
include 'layout/_header.php';

include 'layout/navbar.php';
?>

<div class="container" style="text-align: center;">
	<a href="#" style="font-size: 40px; color: black; font-family: 'Poppins', sans-serif;">Our Members</a>
</div>
<br>

<?php include 'layout/_member_layout.php'; ?>

<br><br>

<?php include 'layout/_footer.php'; ?>

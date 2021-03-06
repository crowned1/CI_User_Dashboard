<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="/assets/style.css">
  <title>Test App Dashboard</title>
</head>
<body>
	<div class='show_header'>
		<ul>
			<li><span class='bold'>Test App</span></span>
			<li><a href="/dashboard">Dashboard</a></li>
			<li><a href="/dashboard/profile">Profile</a></li>
			<li><span class='log_off'><a href="/loginRegister/logoff">Log Off</a></span></li>
		</ul>
	</div>
<div id='dash_top'>
	<h1>All Users</h1>
</div>
<div id='dashboard'>
	<table>
		<thead>
			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>Email</td>
				<td>Created At</td>
				<td>User Level</td>
			</tr>
		</thead>
		<tbody>
<?php
		foreach ($user as $user) { ?>
			<tr>
				<td><?= $user['id'] ?></td>
				<td><?= $user['first_name'] . " " . $user['last_name'] ?></td>
				<td><?= $user['email'] ?></td>
				<td><?= $user['created_at'] ?></td>
				<td><?= $user['user_level'] ?></td>
			</tr>
<?php } ?>
		</tbody>
	</table>
</div>
</body>
</html>
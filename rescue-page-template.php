<!DOCTYPE html>
<html>
<head>
	<title>Trang cứu hộ</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo plugin_dir_url(__FILE__ ); ?>assets/resuce.css">
</head>
<body>
	<div class="wrapper">
		<h1 class="text-center mb-5">Update Users Password</h1>
		<table id="example" class="table table-striped table-bordered" style="width:100%">
			<thead>
				<tr>
					<th>Username</th>
					<th>Name</th>
					<th>Email</th>
					<th>Role</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach(get_users() as $user): ?>
					<tr>
						<td><?php echo $user->data->user_login; ?></td>
						<td><?php echo $user->data->display_name; ?></td>
						<td><?php echo $user->data->user_email; ?></td>
						<td><?php echo $user->roles[0]; ?></td>
						<td><a href="javascript:void(0)" data-id="<?php echo $user->data->ID;?>">Update</a></td>
					</tr>
				<?php endforeach; ?>	
			</tbody>
			<tfoot>
				<tr>
					<th>Username</th>
					<th>Name</th>
					<th>Email</th>
					<th>Role</th>
					<th>Action</th>
				</tr>
			</tfoot>
		</table>
	</div>
</body>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="<?php echo plugin_dir_url(__FILE__ ); ?>assets/resuce.js"></script>
</html>
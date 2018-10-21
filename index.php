<?php 
	include "koneksi.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="style2.css" type="text/css">
</head>
<body>
	<table>

		<tr>
			<td colspan="6">
				
			</td>
		</tr>

		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Password</th>
			<th>Level</th>
			<th>Fullname</th>
			<th>Data</th>
		</tr>

			<?php 
				$qry = mysqli_query($koneksi,"SELECT * FROM users");
				while($user = mysqli_fetch_array($qry)){
			 ?>

		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['level']; ?></td>
			<td><?php echo $user['fullname']; ?></td>

			<td>
			<a class="button border-green" href="edit.php?id=<?php echo $user['id']; ?>">Edit</a>
			<a onclick="return confirm('Yakin untuk menghapus ?')" class="button bg-red"
			href="hapus.php?id=<?php echo $user['id']; ?>">Hapus Data</a>
			<a href="tambah.php" class="button tambah">+</a>
			
			</td>
		</tr>

		<?php  
		}
		?>
	</table>
</body>
</html>
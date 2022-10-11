<table>
	<thead>
	<tr>
		<th>Name</td>
        <th>Age</td>
        <th>Email</td>
        <th>Password</td>
        <th>Gender</td>
        <th>Country</td>
        <th>Files</td>
    </thead>
    </tr>
    <tbody>
    <tr>
    	<td><?php echo $name ?></td>
        <td><?php echo $age ?></td>
        <td><?php echo $email ?></td>
        <td><?php echo $pass ?></td>
        <td><?php echo $gender ?></td>
        <td><?php echo $country ?></td>
        <td><?php echo "<a href='$filepath'>$filename</a>"?></td>
    </tr>
    </tbody>
</table>
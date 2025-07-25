<?php
include 'header.php';

?>
<div class="container mt-4">
    <h2>User Management</h2>
    <a href="user_tambah.php" class="btn btn-success mb-3">Add User</a>
</div>
<div class="container mt-4">
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM users";
                $result = mysqli_query($conn, $query);
                
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td><a href='user_edit.php?id=" . $row['id'] . "' class='btn btn-warning'>Edit</a> ";
                    echo "<a href='delete_user.php?id=" . $row['id'] . "' class='btn btn-danger'>Delete</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>    
    </div>
</div>
<?php
include 'footer.php';   
?>

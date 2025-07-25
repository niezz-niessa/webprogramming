<?php 
include 'header.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'config.php';

    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (username, email, group_id, password) VALUES ('$username', '$email', 1, '$password')";
    if (mysqli_query($conn, $query)) {
        echo "<div class='alert alert-success'>User added successfully.</div>";
        header("Location: user.php");
        exit();
    } else {
        echo "<div class='alert alert-danger'>Error adding user: " . mysqli_error($conn) . "</div>";
    }
}
?>
<div class="container mt-4">
    <h2>Add User</h2>
    <form method="POST" action="user_tambah.php">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Add User</button>
    </form>
</div>
<?php
include 'footer.php';
?>
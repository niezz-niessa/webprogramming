<?php 
include 'header.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'config.php';

    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "UPDATE users SET username='$username', email='$email', password='$password' WHERE id='$id'";
    if (mysqli_query($conn, $query)) {
        echo "<div class='alert alert-success'>User updated successfully.</div>";
        header("Location: user.php");
        exit();
    } else {
        echo "<div class='alert alert-danger'>Error updating user: " . mysqli_error($conn) . "</div>";
    }
}
?>
<div class="container mt-4">
    <h2>Edit User</h2>
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM users WHERE id='$id'";
        $result = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($result);
    ?>
    <form method="POST" action="user_edit.php">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="<?php echo $user['username']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $user['email']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Leave blank to keep current password">
        <button type="submit" class="btn btn-primary">Update User</button>
    </form>
    <?php
    } else {
        echo "<div class='alert alert-danger'>No user selected for editing.</div>";
    }
    ?>  
</div>
<?php
include 'footer.php';
?>
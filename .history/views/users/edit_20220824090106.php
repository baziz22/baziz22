<h1>User Edit:</h1>

<?php
    print_r($this->user);
    //echo 'The id is: '.$this->user['id'];
?>
<form action="../editSave/<?php echo $this->user['id']; ?>" method="POST">
    <!-- <label for="">Username: </label><input type="text" name="username" value="<?php echo $this->user['user_name']; ?>"><br /> -->
    <label for="">Username: </label><input type="text" name="username" value=""><br />
    <label for="">Password: </label><input type="text" name="password"><br />
    <label for="">Role: </label>
    <select name="the_role" id="">
        <option value="default" <?php if($this->user['role'] == 'default') echo 'selected'; ?>>Default</option>
        <option value="user" <?php if($this->user['role'] == 'user') echo 'selected'; ?>>User</option>
        <option value="super" <?php if($this->user['role'] == 'user') echo 'selected'; ?>>Super</option>
        <option value="admin" <?php if($this->user['role'] == 'admin') echo 'selected'; ?>>Admin</option>
        <!-- <option value="owner" <?php if($this->user['role'] == 'admin') echo 'selected'; ?>>Owner</option> -->
    </select><br />
    <label for="">&nbsp;</label><input type="submit" name="submit"><br />
</form>

Warning: Undefined property: View::$user in /Users/macmini/MEGAsync/mySite/mvc_edited/views/users/edit.php on line 13 Warning: Trying to access array offset on value of type null in /Users/macmini/MEGAsync/mySite/mvc_edited/views/users/edit.php on line 13 >Default
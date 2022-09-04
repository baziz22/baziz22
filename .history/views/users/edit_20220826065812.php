<?php
    //print_r($this->userList);
    echo 'The id is: '.$this->userList[1]['user_id'];
    echo 'logged in user id: ' . $_SESSION['user_id'];
    echo 'logged in user id: ' . $_SESSION['user_id'];

?>
<form action="../editSave/<?php echo $this->user['user_id']; ?>" method="POST">
    <h1>Edit User:</h1>
    <label for="">Username: </label><input type="text" name="username" value="<?php echo $this->user['user_name']; ?>"><br />
    <label for="">Password: </label><input type="text" name="password"><br />
    <label for="">Role: </label>
    <select name="the_role" id="">
        <option value="default" <?php if($this->user['user_role'] == 'default') echo 'selected'; ?>>Default</option>
        <option value="user" <?php if($this->user['user_role'] == 'user') echo 'selected'; ?>>User</option>
        <option value="super" <?php if($this->user['user_role'] == 'super') echo 'selected'; ?>>Super</option>
        <option value="admin" <?php if($this->user['user_role'] == 'admin') echo 'selected'; ?>>Admin</option>
        <!-- <option value="owner" <?php if($this->user['user_role'] == 'owner') echo 'selected'; ?>>Owner</option> -->
    </select><br />
    <label for="">&nbsp;</label><input type="submit" name="submit"><br />
</form>
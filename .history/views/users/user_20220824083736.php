<div class="main_container">
    <section class="first_page_scroll">
    <div id="first_line_page">

    <h1>User</h1>
    <form action="<?php URLROOT; ?>user/create" method="POST">
        <label for="">Username: </label><input type="text" name="username"><br />
        <label for="">Password: </label><input type="text" name="password"><br />
        <label for="">Role: </label>
        <select name="role" id="">
            <option value="default">Default</option>
            <option value="user">User</option>
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select><br />
        <label for="">&nbsp;</label><input type="submit" name="submit"><br />
    </form>

    <table>
    <?php
        //pre_r($this->userList);
        foreach ($this->userList as $key => $value) {
            echo '<tr>';
            echo '<td>' . $value['user_id'] . '. </td>';
            echo '<td>' . $value['user_name'] . '</td>';
            echo '<td>' . $value['role'] . '</td>';
            echo '<td> <a href="#">Create</a> </td>';
            echo '<td> <a href="' . URLROOT .'user/edit/'. $value['user_id'] . '">Edit</a> </td>';
            echo '<td> <a href="' . URLROOT .'user/delete/'. $value['user_id'] . '">Delete</a> </td>';
            echo '</tr>';
        }
    ?>
    </table>

    </div>
</section>
</div>
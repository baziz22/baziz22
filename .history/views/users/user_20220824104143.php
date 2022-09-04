<div class="main_container">
    <section class="first_page_scroll">
    <div id="first_line_page">
        <!-- Add User -->
    <form action="<?php URLROOT; ?>user/create" method="POST">
        <h1>Add User</h1>
        <label for="">Username: </label><input type="text" name="username"><br />
        <label for="">Email: </label><input type="text" name="email"><br />
        <label for="">Password: </label><input type="text" name="password"><br />
        <label for="">Role: </label>
        <select name="role" id="">
            <option value="default">Default</option>
            <option value="user">User</option>
            <option value="super">Super Visor</option>
            <option value="admin">Admin</option>
        </select><br />
        <label for="">&nbsp;</label><input type="submit" name="submit"><br />
    </form>

    <!-- Users Table -->
    <div class="user-list-table">
        <table>
        <?php
            //pre_r($this->userList);
            foreach ($this->userList as $key => $value) {
                echo '<tr>';
                echo '<td>' . $value['user_id'] . '. </td>';
                echo '<td>' . $value['user_name'] . '</td>';
                echo '<td>' . $value['user_role'] . '</td>';
                echo '<td> <a href="#">Create</a> </td>';
                echo '<td> <a href="' . URLROOT .'user/edit/'. $value['user_id'] . '"><button class="btn">Edit</button></a> </td>';
                echo '<td> <a href="' . URLROOT .'user/delete/'. $value['user_id'] . '"><button class="btn">Delete</button></a> </td>';
                echo '</tr>';
            }
        ?>
        </table>
    </div> <!-- End of user-list-table -->

    </div>
</section>
</div>
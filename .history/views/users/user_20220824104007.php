<div class="main_container">
    <section class="first_page_scroll">
    <div id="first_line_page">

    
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

    .

    </div>
</section>
</div>
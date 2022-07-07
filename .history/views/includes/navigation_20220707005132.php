<input type="checkbox" id="nav-toggle-checkbox" class="nav-toggle-checkbox">
<nav>
        <div id="img-logo">
            <!-- <a href="index.php"><img id="logo" src="img/logo.svg" alt="logo"></a> -->
                <?php
                if(isset($_SESSION['userUid'])) {
                    echo 'userUid';
                }
                ?>
        </div>
        
        <div class="nav_link">
        
        <?php if(Session::get('loggedIn') == false): ?>
            <ul>
            <li><a href="<?php URLROOT; ?>index">Home</a></li>
            <li><a href="<?php URLROOT; ?>api">API</a></li>
            <!-- <li><a href="<?php URLROOT; ?>project">Projects</a>
            </li>
            <li><a href="#">Blog</a></li> -->
        <?php endif; ?>
        
        <?php if(Session::get('loggedIn') == true): ?>
            <li class="btn-login"><a href="dashboard">Dashboard</a></li>
                <?php if(Session::get('role') == 'owner'): ?>
                    <li class="btn-login"><a href="user">User</a></li>
                <?php endif; ?>
            <li class="btn-login"><a href="dashboard/logout">Logout</a></li>
        <?php else: ?>
            <li class="btn-login"><a href="login"><button id='login_btn_created' class='btn'">Login</button></a></li>
        <?php endif; ?>
        </ul>
        </div>
</nav>
<label for="nav-toggle-checkbox" class="nav-toggle-label">
    <span></span>
</label>
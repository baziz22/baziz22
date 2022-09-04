<span id="to-navigate"></span>
<input type="checkbox" id="nav-toggle-checkbox" class="nav-toggle-checkbox">
<nav>
    <div class="nav_link">

        <?php if (Session::get('loggedIn') == false) : ?>
            <ul>
                <li><a href="<?php URLROOT; ?>index">Home</a></li>
                <li><a href="<?php URLROOT; ?>api">API</a></li>
                <li><a href="<?php URLROOT; ?>projects">Projects</a>
                </li>
                <!-- <li><a href="#">Blog</a></li> -->
            <?php endif; ?>

            <?php if (Session::get('loggedIn') == true) : ?>
                <li><a href="<?php URLROOT; ?>index">Home</a></li>
                <li><a href="<?php URLROOT; ?>api">API</a></li>
                <li><a href="<?php URLROOT; ?>projects">Projects</a>
                </li>
                <li class="btn-login"><a href="dashboard">Dashboard</a></li>
                <?php if (Session::get('role') == 'owner') : ?>
                    <li class="btn-login"><a href="user">User</a></li>
                <?php endif; ?>
                <li class="btn-login"><a href="logout" class="login-button login_btn_created"><button class='btn'>Logout</button></a></li>
                span.
                <?php 
                  echo (Session::get('username'));
                ?>
            <?php else : ?>
                <li class="btn-login"><a href="login" class="login-button login_btn_created"><button class='btn'>Login</button></a></li>
                <div>
                  
                </div>
            <?php endif; ?>
            </ul>
    </div>
</nav>
<label for="nav-toggle-checkbox" class="nav-toggle-label">
    <span></span>
</label>
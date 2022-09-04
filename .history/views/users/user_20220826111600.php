<div class="main_container">
  <section class="first_page_scroll">
    <header>
      <?php require 'views/includes/header.php'; ?>
    </header>
    <div id="first_line_page">
      <section class="dashboard-container">

        <div class="dashboard-sidebar">
          <div class="logo">
            <p>BB</p>
          </div>
          <div class="btn dashboard-btn">
            <a href="<?php URLROOT; ?>dashboard">
              <!-- <img src="./favicon-32x32.png" alt="" /> -->
              <span class="material-symbols-outlined"> dashboard </span>
            </a>
          </div>
          <div class="btn dashboard-btn active">
            <?php if (Session::get('role') == 'owner') : ?>
              <a href="user">
                <span class="material-symbols-outlined"> monitoring </span>
              </a>
            <?php endif; ?>
          </div>
          <div class="btn dashboard-btn">
            <a href="#">
              <!-- <img src="./favicon-32x32.png" alt="" /> -->
              <span class="material-symbols-outlined"> person </span>
            </a>
          </div>
          <div class="btn dashboard-btn">
            <a href="#">
              <span class="material-symbols-outlined"> settings </span>
            </a>
          </div>
        </div>
        <div class="dashboard-main">
          <div class="dashboard-main-top">Admin Dashboard</div>
          <div class="dashboard-main-upper-middle">

            <div class="dashboard-statistics">
              <!-- Search for a user -->
              <div class="dashboard-search-user">
                <h1>Search User</h1>
                <form action="user/check_user" method="post">
                  <div class="search-box">
                    <input class="search-txt" type="text" name="search-username" placeholder="Type to search">
                    <button class="search-btn">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </form>
                <div id="listInsert"></div>
                <div id="search-results">
                  <?php echo (isset($_GET['search-result'])) ? $_GET['search-result'] : 'No User Selected'; ?>
                </div>
              </div>
              <!-- Edit User -->
              <div class="dashboard-edit-user">
                <h2>Edit User</h2>
                <?php
                //print_r($this->userList);
                //echo 'The id is: '.$this->userList[1]['user_id'];
                //echo 'logged in user id: ' . $_SESSION['user_id'];
                //echo 'the id is:: ' . $this->user['user_id'];
                ?>
                <form action="../editSave/<?php echo $this->user['user_id']; ?>" method="POST">
                  <label for=""></label><input type="text" name="username" placeholder="username" value="<?php echo $this->user['user_name']; ?>"><br />
                  <label for=""></label><input type="text" name="password" placeholder="Password"><br />
                  <label for=""></label>
                  <select name="the_role" id="">
                    <option value="default" <?php if ($this->user['user_role'] == 'default') echo 'selected'; ?>>Default</option>
                    <option value="user" <?php if ($this->user['user_role'] == 'user') echo 'selected'; ?>>User</option>
                    <option value="super" <?php if ($this->user['user_role'] == 'super') echo 'selected'; ?>>Super</option>
                    <option value="admin" <?php if ($this->user['user_role'] == 'admin') echo 'selected'; ?>>Admin</option>
                    <!-- <option value="owner" <?php if ($this->user['user_role'] == 'owner') echo 'selected'; ?>>Owner</option> -->
                  </select><br />
                  <label for="">&nbsp;</label><button type="submit" name="submit" class="btn dashboard-btn">Edit<button>
                </form>
              </div>
            </div>

            <!-- Add User -->
            <div class="dashboard-extra-statistics">
              <form action="<?php URLROOT; ?>user/create" method="POST" class="add-user">
                <h1>Add User</h1>
                <label for="">Username: </label><input type="text" name="username" class="input register-input "><br />
                <label for="">Email: </label><input type="text" name="email"><br />
                <label for="">Password: </label><input type="text" name="password"><br />
                <label for="">Role: </label>
                <select name="role" id="">
                  <option value="default">Default</option>
                  <option value="user">User</option>
                  <option value="super">Super Visor</option>
                  <option value="admin">Admin</option>
                </select><br />
                <label for="">&nbsp;</label><button type="submit" name="submit" class="btn">ADD</button>
              </form>
            </div>
          </div>
          <!-- User Management -->
          <div class="dashboard-main-lower-middle">
            <h1>User Management</h1>
            <?php
            $per_page_record = 4;  // Number of entries to show in a page.   
            // Look for a GET variable page if not found default is 1.        
            if (isset($_GET["page"])) {
              $page  = $_GET["page"];
            } else {
              $page = 1;
            }
            $start_from = ($page - 1) * $per_page_record;
            ?>
            <!-- Users Table -->
            <div class="user-list-table">
              <table>
                <div class="dashboard-table-header">
                  <?php
                  //print_r($this->user);
                  //print_r($this->userList);
                  //print_r($this->total_records);
                  echo '<tr class="table-header">';
                  echo '<th>ID</th>';
                  echo '<th>Username</th>';
                  echo '<th>Role</th>';
                  echo '<th>status</th>';
                  echo '<th>Action</th>';
                  echo '</tr>';
                  //print_r($this);
                  ?>
                </div>
                <?php
                foreach ($this->userList as $key => $value) {

                  echo '<tr>';
                  echo '<td>' . $value['user_id'] . '. </td>';
                  echo '<td>' . $value['user_name'] . '</td>';
                  echo '<td>' . $value['user_role'] . '</td>';
                  echo '<td>' . $value['user_status'] . '</td>';
                  /* echo '<td> <a href="#"><button class="btn btn-view">View</button></a></td>';
                                echo '<td> <a href="' . URLROOT .'user/edit/'. $value['user_id'] . '"><button class="btn">Edit</button></a> </td>';
                                echo '<td> <a href="' . URLROOT .'user/delete/'. $value['user_id'] . '"><button class="btn btn-delete">Delete</button></a> </td>';
                                echo '</tr>'; */
                  echo '<td> <a href="#"><button class="btn btn-view"><i class="fa-solid fa-magnifying-glass"></i> View</button></a>
                                <a href="' . URLROOT . 'user/activate/' . $value['user_id'] . '"><button class="btn btn-status-activate"><i class="fa-solid fa-pencil"></i> activate</button></a>
                                <a href="' . URLROOT . 'user/delete/' . $value['user_id'] . '"><button class="btn btn-delete"><i class="fa-solid fa-trash-can"></i> Delete</button></a>
                                </td>';
                  echo '</tr>';
                  $total_records = $this->total_records;
                  
                }

                ?>
              </table>
            </div> <!-- End of user-list-table -->
                
          </div> <!-- End of User Management -->

          <div class="dashboard-main-bottom">
            Summary: Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam laudantium modi libero saepe dolore eum ullam exercitationem praesentium blanditiis suscipit ipsam, sed distinctio debitis a nobis, corrupti sequi sint qui.
          </div>
        </div>
        <div class="dashboard-profile">
          <div>
            <img class="dashboard-profile-picture" src="<?php URLROOT; ?>public/images/dashboard/memoji-profile-picture.jpeg" alt="" />
          </div>
          <div class="dashboard-profile-full-name">Bader Binsunbil</div>
          <div class="dashboard-profile-last-login">12-Aug-2022</div>
          <div class="dashboard-profile-last-login">progress</div>
        </div>
        <div class="dashboard-footer">
          <span class="material-symbols-outlined"> copyright </span>
          <span> 2022 All rights reserved. Bader Binsunbil </span>
        </div>
      </section> <!-- End of dashboard-container -->
    </div>
  </section>
</div>
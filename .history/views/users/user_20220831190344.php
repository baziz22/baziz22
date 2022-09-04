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
            <!-- <php if (Session::get('role') == 'owner') : ?> -->
              <a href="user">
                <span class="material-symbols-outlined"> monitoring </span>
              </a>
           <!--  <php endif; ?> -->
          </div>
          <div class="btn dashboard-btn">
            <?php if (Session::get('role') == 'owner') : ?>
              <a href="messages">
                <span class="material-symbols-outlined"> message </span>
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
              <?php
              $id = $_SESSION['user_id'];
              $userObj = new user();
              $users_basic_details = $userObj->all_records();
              $single_user_record = $userObj->single_user($id);
              // $userObj->check_user($username);
              
              //echo "Username: ".$users_basic_details[0]['user_name'];
              ?>
            <div class="dashboard-search-user">
              <h1>Search User</h1>
              <form action="user/check_user" method="post">
              <!-- <form action="user/single_user/<?= $id ?>" method="post"> -->
                <div class="search-box">
                  <input class="search-txt" type="text" name="search-username" placeholder="Type to search">
                  <button class="search-btn">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
              <div id="listInsert"></div>
              <div id="search-results">
                <?php echo (isset($_GET['user_name'])) ? $_GET['user_name'] : 'User not found'; ?>
              </div>
              <div class="user-list-table">
                <table>
                <div class="dashboard-table-header">
                  <?php
                  echo '<tr class="table-header">';
                  echo '<th>Username</th>';
                  echo '<th></th>';
                  echo '<th>Action</th>';
                  echo '<th></th>';
                  echo '</tr>';
                  ?>
                </div>
                  <tr>
                  <td><?= (isset($_GET['user_name'])) ? $_GET['user_name'] : $single_user_record['user_name'] ?></td>
                  <td class="action-btn"><a href="#"><button class="btn btn-view"><i class="fa-solid fa-magnifying-glass"></i>View</button></a></td>
                  <td class="action-btn"><?= (isset($_GET['user_status'])) ? ($_GET['user_status'] == 1) ? '<button class="btn btn-status-inactive"><i class="fa-solid fa-trash-can"></i>activated</button>' : '<a href="' . URLROOT . 'user/activate_user/' . $_GET['user_id'] . '"><button class="btn btn-status-activate"><i class="fa-solid fa-trash-can"></i>activate</button></a>' : $single_user_record['user_status'];
                        ?></td>
                  <td class="action-btn"><a href="' . URLROOT . 'user/delete/' . $single_user_record['user_id'] . '"><button class="btn btn-delete"><i class="fa-solid fa-trash-can"></i>Delete</button></a></td>
                  </tr>
                </table>
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
            <!-- Edit User -->
            <div class="dashboard-edit-user">
              <h2>Edit User</h2>
              <?php
              //echo 'The id is: '.$this->userList[1]['user_id'];
              
              echo 'logged in user id: ' . $_SESSION['user_id'];
              /* foreach($users_basic_details as $key => $value){
                $edit_user_id = $users_basic_details[0]['user_id'];
              } */
              /* if(isset($_POST['submit']) {

              }; */

              //echo 'the id is:: ' . $users_basic_details[1]['user_id'];
              //print_r( $single_user);
              ?>
              <!-- <form action="../user/editSave/<php echo $single_user['user_id']; ?>" method="POST"> -->
              <form action="user/edit" method="POST">
                <label for=""></label><input type="text" name="username" placeholder="username"><br />
                <label for=""></label><input type="text" name="email" placeholder="email"><br />
                <label for=""></label>
                <select name="the_role" id="">
                  <option value="default">Default</option>
                  <option value="user">User</option>
                  <option value="super">Super</option>
                  <option value="admin">Admin</option>
                  <!-- <option value="owner" <?php if ($single_user['user_role'] == 'owner') echo 'selected'; ?>>Owner</option> -->
                </select><br />
                <label for="">&nbsp;</label><button type="submit" name="submit" class="btn dashboard-btn">Edit<button>
              </form>
            </div>
              
            </div>

            
          </div>
          <!-- User Management -->
          <div class="dashboard-main-lower-middle">
            <h2>User Management</h2>
            <?php
            $per_page_record = 4;  // Number of entries to show in a page.   
            // Look for a GET variable page if not found default is 1.        
            if (isset($_GET["page"])) {
              $page  = $_GET["page"];
            } else {
              $page = 1;
            }
            $start_from = ($page - 1) * $per_page_record;

            $number_of_pages = $userObj->pagination($start_from, $per_page_record);
            print_r($number_of_pages);

            ?>
            <form action="user/pagination/<?php echo $start_from . ',' . $per_page_record ?>" method="POST">
              <button type="submit">Show Database</button>
            </form>
            <!-- Users Table -->
            <div class="user-list-table">
              <table>
                <div class="dashboard-table-header">
                  <?php
                  //echo "<pre>";print_r($this);echo "<pre>";
                  echo '<tr class="table-header">';
                  echo '<th>ID</th>';
                  echo '<th>Username</th>';
                  echo '<th>Role</th>';
                  echo '<th>status</th>';
                  echo '<th></th>';
                  echo '<th>Action</th>';
                  echo '<th></th>';
                  echo '</tr>';
                  //print_r($this);
                  ?>
                </div>
                <?php
                //$pages_number = [];
                //foreach ($this->model->db->pagination($start_from, $per_page_record) as $key => $value) {

                /* for($i = 0; $i < $start_from; $i++){
                    echo 'stage: ' . $i . '<br>';
                    echo $pages_number;
                  } */
                //echo ($pages_number).'<br>';
                foreach (array_slice($users_basic_details, $start_from, $per_page_record) as $key => $value) {
                ?>
                  <tr>
                    <td><?= $value['user_id'] ?></td>
                    <td><?= $value['user_name'] ?></td>
                    <td><?= $value['user_role'] ?></td>
                    <td><?= $value['user_status'] ?></td>
                    <td class="action-btn"><a href="#"><button class="btn btn-view"><i class="fa-solid fa-magnifying-glass"></i>View</button></a></td>
                    <td class="action-btn"><?php if ($value['user_status'] == 1) {
                          echo '<button class="btn btn-status-inactive"><i class="fa-solid fa-trash-can"></i>activated</button>';
                        } else {
                          echo '<a href="' . URLROOT . 'user/activate_user/' . $value['user_id'] . '"><button class="btn btn-status-activate"><i class="fa-solid fa-trash-can"></i>activate</button></a>';
                        } ?></td>
                    <td class="action-btn"><a href="<?php URLROOT . 'user/delete/' . $value['user_id'] ?>"><button class="btn btn-delete"><i class="fa-solid fa-trash-can"></i>Delete</button></a></td>
                  </tr>

                <?php } ?>
              </table>
            </div> <!-- End of user-list-table -->
            <div class="pagination">
              <?php
              $total_records = $userObj->total_records();
              echo "</br>";
              // Number of pages required.   
              $total_pages = ceil($total_records / $per_page_record);
              $pagLink = "";

              if ($page >= 2) {
                echo "<a href='user?page=" . ($page - 1) . "'> &laquo; Prev </a>";
              }

              for ($i = 1; $i <= $total_pages; $i++) {
                if ($i == $page) {
                  $pagLink .= "<a class = 'active' href='user?page="
                    . $i . "'>" . $i . " </a>";
                } else {
                  $pagLink .= "<a href='user?page=" . $i . "'>   
                                                " . $i . " </a>";
                }
              };
              echo $pagLink;

              if ($page < $total_pages) {
                echo "<a href='user?page=" . ($page + 1) . "'>  Next &raquo;</a>";
              }

              ?>
            </div> <!-- End of Pagination div -->
            <div class="pages-quick-access">
              <input class="pages-number-input" id="page" type="number" min="1" max="<?php echo $total_pages ?>" placeholder="<?php echo $page . "/" . $total_pages; ?>" required>
              <button onClick="go2Page();" class="btn dashbord-btn quick-navigate-button" style="display:inline-block">Go</button>
            </div>



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
<script>
  function go2Page() {
    var page = document.getElementById("page").value;
    page = ((page > <?php echo $total_pages; ?>) ? <?php echo $total_pages; ?> : ((page < 1) ? 1 : page));
    window.location.href = 'user?page=' + page;
  }
</script>
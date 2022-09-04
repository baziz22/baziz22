<script src="<?php URLROOT; ?>public/js/router.js" defer></script>
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
          <div class="btn dashboard-btn active">
            <a href="<?php URLROOT; ?>dashboard">
              <span class="material-symbols-outlined"> dashboard </span>
            </a>
          </div>
          <div class="btn dashboard-btn">
            <?php if (Session::get('role') == 'owner') : ?>
              <a href="user">
                <span class="material-symbols-outlined"> monitoring </span>
              </a>
            <?php endif; ?>
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
          <div class="dashboard-main-top">Progress Dashboard</div>
          <div class="dashboard-main-upper-middle">
            <div class="dashboard-statistics">
              <h2>statistics</h2>
            </div>
            <div class="dashboard-extra-statistics">
              <h2>More Statistics</h2>
            </div>
          </div>
          <div class="dashboard-main-lower-middle">
            <h2>Messages Management</h2>
            <?php
                $messagesObj = new messages();
                $all_messages = $messagesObj->list_messages();
              ?>
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
                    //echo "<pre>";print_r($this);echo "<pre>";
                    echo '<tr class="table-header">';
                    echo '<th>ID</th>';
                    echo '<th>Name</th>';
                    echo '<th>Email</th>';
                    echo '<th>Phone</th>';
                    echo '<th class="message-comments">Message</th>';
                    echo '<th>Date Added</th>';
                    echo '<th>Actions</th>';
                    echo '</tr>';
                    //print_r($this);
                    ?>
                  </div>
                  <?php
                  foreach (array_slice($all_messages, $start_from, $per_page_record) as $key => $value) {
                  ?>
                    <tr>
                      <td><?= $value['id'] ?></td>
                      <td><?= $value['name'] ?></td>
                      <td><?= $value['email'] ?></td>
                      <td><?= $value['mobile'] ?></td>
                      <td class="message-comments"><?= $value['comment'] ?></td>
                      <td><?= $value['added_on'] ?></td>
                      <td><a href="#"><button class="btn btn-view"><i class="fa-solid fa-magnifying-glass"></i>View</button></a></td>
                      <td><?php echo '<a href="' . URLROOT . 'user/message_archive/' . $value['id'] . '"><button class="btn btn-status-activate"><i class="fa-solid fa-trash-can"></i>archive</button></a>';?></td>
                      <td><a href="<?php URLROOT . 'user/delete/' . $value['id'] ?>"><button class="btn btn-delete"><i class="fa-solid fa-trash-can"></i>Delete</button></a></td>
                      <td></td>
                    </tr>

                  <?php } ?>
                </table>
              </div> <!-- End of user-list-table -->
              <div class="pagination">
                <?php
                $total_records = $messagesObj->total_records();
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
            </div> <!-- End of Message Management -->

          <div class="dashboard-main-bottom">
            <p>Summary: Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam laudantium modi libero saepe dolore eum ullam exercitationem praesentium blanditiis suscipit ipsam, sed distinctio debitis a nobis, corrupti sequi sint qui.
            </p>
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
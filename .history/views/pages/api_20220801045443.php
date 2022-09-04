<div class="main_container">
    <section id="section-one" class="first_page_scroll">
        <header>
            <?php require 'views/includes/header.php';?>
        </header>
        <div id="first_line_page"></div>
        <div class="card">
            <div class="card-info">
                <h2 class="heading-h2"> Random User Generator Project ::: </h2>
                <br>
                <div id="main-content-api">
                    <div id="api-pic">
                        <img id="profile-image" src="<?php URLROOT; ?>public/img/image6.jpg" />
                    </div>
                    <div id="api-info">
                        <p>Random User Generator API</p>
                        <p>Coming Soon</p>
                        <p>People on Profile picture ain't exist in real life!</p>
                        <p>Designed & Developed By</p>
                        <p>Bader Binsunbil</p>
                        <p>If you have any suggestion, Hit me up!</p>
                    </div>
                </div>
            </div>
            <div class="api-navigation">
                <ul>
                    <li class="api-list api-active">
                        <a href="#">
                            <span class="api-icon">
                                <ion-icon name="home-outline"></ion-icon>
                                <!-- <i class="fas fa-home"></i> -->
                            </span>
                            <span class="api-text api-home">Home</span>
                        </a>
                    </li>
                    <li class="api-list">
                        <a href="#">
                            <span class="api-icon">
                                <ion-icon name="person-add-outline"></ion-icon>
                                <!-- <i class="far fa-user"></i> -->
                            </span>
                            <span class="api-text">User</span>
                        </a>
                    </li>
                    <li class="api-list">
                        <a href="#">
                            <span class="api-icon">
                                <ion-icon name="mail-outline"></ion-icon>
                                <!-- <i class="far fa-comment-dots"></i> -->
                            </span>
                            <span class="api-text">email</span>
                        </a>
                    </li>
                    <li class="api-list">
                        <a href="#">
                            <span class="api-icon">
                                <i class="fas fa-map-marked-alt"></i>
                                <!-- <i class="far fa-comment-dots"></i> -->
                            </span>
                            <span class="api-text">Location</span>
                        </a>
                    </li>
                    <li class="api-list">
                        <a href="#">
                            <span class="api-icon">
                                <ion-icon name="call-outline"></ion-icon>
                                <!-- <i class="fas fa-camera"></i> -->
                            </span>
                            <span class="api-text">Photo</span>
                        </a>
                    </li>
                    <li class="api-list">
                        <a href="#">
                            <span class="api-icon">
                                <ion-icon name="cog-outline"></ion-icon>
                                <!-- <i class="fas fa-user-cog"></i> -->
                            </span>
                            <span class="api-text">Birthday</span>
                        </a>
                    </li>
                    <!-- <li class="api-list">
                        <a href="#">
                            <span class="api-icon">
                                <ion-icon name="cog-outline"></ion-icon>
                                <i class="fas fa-user-cog"></i> 
                            </span>
                            <span class="api-text">Birthday</span>
                        </a>
                    </li> -->
                    <div class="api-indicator"></div>
                </ul>
            </div>
        </div>

        <script>
            const list = document.querySelectorAll('.api-list');
            let info = document.getElementById('api-info');

            function activeLink() {
                list.forEach((item) => item.classList.remove('api-active'));
                this.classList.add('api-active');
                let tag_content = this.children[0].children[1].textContent;
                console.log('content: ' + tag_content);
                switch (tag_content) {
                    case 'Home':
                        info.innerHTML = `<p>Random User Generator API</p>
                        <p>Coming Soon</p>
                        <p>People on Profile picture ain't exist in real life!</p>
                        <p>Designed & Developed By</p>
                        <p>Bader Binsunbil</p>
                        <p>If you have any suggestion, Hit me up!</p>`;
                        break;
                    case 'Profile':
                        info.innerHTML = `<p>This is an example<p> <br>`;
                        info.innerHTML += 'My email address is <br> seth.romero@example.com';
                        break;
                    case 'Message':
                        info.innerHTML = `<p>This is an example<p> <br>`;
                        info.innerHTML += 'My address is <br> 4591 Harrison Ct';
                        break;
                    case 'Photo':
                        info.innerHTML = `<p>This is an example<p> <br>`;
                        info.innerHTML += 'My phone number is <br> (967)-977-5083';
                        break;
                    case 'birthday':
                        info.innerHTML = `<p>This is an example<p> <br>`;
                        info.innerHTML += 'My birthday is <br> 3/5/1969';
                        break;
                    case 'Setting':
                        info.innerHTML = `<p>This is an example<p> <br>`;
                        info.innerHTML += 'My birthday is <br> 3/5/1969';
                        break;
                    default:
                        console.log('I cant get it');
                }
            }
            list.forEach((item) => item.addEventListener('mouseover', activeLink));
        </script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </section>
</div>
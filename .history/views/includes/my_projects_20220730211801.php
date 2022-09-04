<style>
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }
</style>
<main  class="section-main">
    <div id="card" class="card">
        <div id="slider-info" class="card-info">
            <!-- <h2 class="heading-h2">Projects :::</h2>
            <br>
            <h3>Here you are</h3>
            <p>Navigate some of my projects, I am still developing and adding more when I have free time!</p>
            <p><i class="fa-brands fa-github-alt"></i> Check my github repository to get the code of all projects</p>
            <img src="<?php URLROOT; ?>public/images/projects/projects_intro.png" /> -->
        </div>
    </div>
    
    <div class="api-navigation">
        <ul>
            <li class="api-list api-active">
                <a >
                    <span class="api-icon">
                        <ion-icon name="home-outline"></ion-icon>
                        <!-- <i class="fas fa-home"></i> -->
                    </span>
                    <span class="api-text api-projects">Home</span>
                </a>
            </li>
            <li class="api-list">
                <a >
                    <span class="api-icon">
                        <ion-icon name="game-controller-outline"></ion-icon>
                        <!-- <i class="far fa-user"></i> -->
                    </span>
                    <span class="api-text">Games</span>
                </a>
            </li>
            <li class="api-list">
                <a >
                    <span class="api-icon">
                        <ion-icon name="bar-chart-outline"></ion-icon>
                        <!-- <i class="far fa-user"></i> -->
                    </span>
                    <span class="api-text">Data Visualization</span>
                </a>
            </li>
            <li class="api-list">
                <a>
                    <span class="api-icon">
                        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                        <!-- <i class="fas fa-home"></i> -->
                    </span>
                    <span class="api-text api-home">Chat Room</span>
                </a>
            </li>
            <!-- <li class="api-list">
                <a >
                    <span class="api-icon">
                        <ion-icon name="document-attach-outline"></ion-icon>
                        <i class="far fa-user"></i> 
                    </span>
                    <span class="api-text">Others</span>
                </a>
            </li> -->
            <li class="api-list">
                <a >
                    <span class="api-icon">
                        <ion-icon name="document-attach-outline"></ion-icon>
                        <!-- <i class="far fa-user"></i> -->
                    </span>
                    <span class="api-text">CV</span>
                </a>
            </li>
            <div class="api-indicator"></div>
        </ul>
    </div>
</main>
<script>
    const list = document.querySelectorAll('.api-list');
    let info = document.getElementById('slider-info');

    function activeLink() {
        list.forEach((item) => item.classList.remove('api-active'));
        this.classList.add('api-active');
        let tag_content = this.children[0].children[1].textContent;
        console.log('content: ' + tag_content);
        switch (tag_content) {
            case 'Home':
                info.innerHTML =
                    `<?php require 'views/includes/projects/intro_slides.php'; ?>`;
                break;
            case 'Games':
                info.innerHTML =
                    `<?php require 'views/includes/projects/games_slides.php'; ?>`;
                    currentSlide(1);
                break;
            case 'Data Visualization':
                info.innerHTML = `<?php require 'views/includes/projects/d3.php'; ?>`;
                currentSlide(1);
                break;
            case 'Chat Room':
                info.innerHTML = `<?php require 'views/includes/projects/chat.php'; ?>`;
                break;
            case 'Others':
                info.innerHTML = ` < p > This is an example < p > < br > `;
                info.innerHTML += 'My email address is <br> seth.romero@example.com';
                break;
            case 'CV':
                info.innerHTML = `<?php require 'views/includes/projects/cv.php'; ?>`;
                break;
            default:
                console.log('I cant get it');
        }
    }
    list.forEach((item) => item.addEventListener('click', activeLink));
</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
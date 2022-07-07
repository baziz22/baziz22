<div class="main_container">
    <section class="first_page_scroll">
    <div id="first_line_page">
    </div>
    <div id="main-content-lobby">
    
    <div class="lobby-navigation">
		<ul>
			<li class="api-list api-active">
				<a href="#">
					<span class="api-icon">
                        <ion-icon name="chatbubble-ellipses-sharp"></ion-icon>
                        <!-- <i class="fas fa-home"></i> -->
                    </span>
					<span class="api-text api-home">Chat Room</span>
				</a>
			</li>
			<li class="api-list">
				<a href="#">
					<span class="api-icon">
                        <ion-icon name="game-controller-sharp"></ion-icon>
                        <!-- <i class="far fa-user"></i> -->
                    </span>
					<span class="api-text">Games</span>
				</a>
			</li>
			<li class="api-list">
				<a href="#">
					<span class="api-icon">
                    <ion-icon name="settings-sharp"></ion-icon>
                        <!-- <i class="fas fa-user-cog"></i> -->
                    </span>
					<span class="api-text">Setting</span>
				</a>
			</li>
			<div class="api-indicator"></div>
		</ul>
	</div>
    <div id="lobby-info"></div>
</div>

	<script>
        const list = document.querySelectorAll('.api-list');
        let info = document.getElementById('lobby-info');
        function activeLink(){
            list.forEach((item) => item.classList.remove('api-active'));
            this.classList.add('api-active');
            let tag_content = this.children[0].children[1].textContent;
            console.log('content: ' + tag_content);
            switch (tag_content) {
                case 'Chat Room':
                    info.innerHTML = `<?php require 'views/includes/lobby/chat.php'; ?>`;
                    break;
                case 'Games':
                    info.innerHTML = '<center>Games Coming Sooooooon!</center>';
                    break;
                case 'Setting':
                    info.innerHTML = '<center>Settings for Chat and Games</center>';
                    break;
                default:
                    console.log('I cant get it');
            }
        }
        list.forEach((item) => item.addEventListener('mouseover', activeLink));

    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </div>
    </section>
</div>
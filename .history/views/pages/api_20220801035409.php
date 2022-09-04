<div class="main_container">
    <section id="section-one" class="first_page_scroll">
        <header>
        <?php require 'views/includes/header.php';?>
        </header>
        <div id="first_line_page"></div>
        

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
                        info.innerHTML = `<p>This is an example<p> <br>`;
                        info.innerHTML += `Hi, My Name is <br><br> Seth Romero`;
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
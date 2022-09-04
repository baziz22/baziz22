
        //<img src="public/images/projects_live/${project.imgLink}" alt="$

const projects = [
    {
        number: 1,
        name: "bar-chart",
        imgLink: "1-bar-chart.png",
    },
    {
        number: 2,
        name: "pie-chart",
        imgLink: "2-progress-steps.png",
    },
    {
        number: 6,
        name: "scroll-animation",
        imgLink: "6-scroll-animation.png",
    },
    { number: 8, name: "form-wave", imgLink: "8-form-wave.png" },
    { number: 9, name: "sound-board", imgLink: "9-sound-board.png" },
    { number: 10, name: "dad-jokes", imgLink: "10-dad-jokes.png" },
    { number: 17, name: "movie-app", imgLink: "17-movie-app.png" },
    { number: 19, name: "theme-clock", imgLink: "19-theme-clock.png" },
    { number: 21, name: "drag-n-drop", imgLink: "21-drag-n-drop.png" },
    { number: 22, name: "drawing-app", imgLink: "22-drawing-app.png" },
    {
        number: 24,
        name: "content-placeholder",
        imgLink: "24-content-placeholder.png",
    },
    { number: 33, name: "notes-app", imgLink: "33-notes-app.png" },
    {
        number: 38,
        name: "mobile-tab-navigation",
        imgLink: "38-mobile-tab-navigation.png",
    },
    {
        number: 41,
        name: "verify-account-ui",
        imgLink: "41-verify-account-ui.png",
    },
    { number: 46, name: "quiz-app", imgLink: "46-quiz-app.png" },
    {
        number: 48,
        name: "random-image-feed",
        imgLink: "48-random-image-feed.png",
    },
];

const projectsEl = document.getElementById("projects-live-container");

projects.forEach((project) => {
    projectEl = document.createElement("div");

    projectEl.innerHTML = `
        <span class="project-live-title">${project.number}</span>
        <img src="public/images/projects_live/${project.imgLink}" alt="${project.name}" />
        <div class="projects-live-content">
            <h4>${formateProjectName(project.name)}</h4>
            <a
                href="#"
                id="${project.name}"
                class="btn btn-primary"
                >Live Demo</a
            >
        </div>
    `;

    projectsEl.appendChild(projectEl);

    /* Live Modal */

    // Get the modal
    var modal = document.getElementById("project-live-modal");

    // Get the button that opens the modal
    var btn = document.querySelector(`#${project.name}`);

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close-modal-btn")[0];

    let display_project = document.querySelector(`#project-${project.name}`);
    // When the user clicks the button, open the modal 
    btn.addEventListener('click', function(e) {
        modal.style.display = "block";
        document.querySelector('.main_container').classList.add('disable-scroll')
        let linky = "<?php echo 'Bader Binsunbi' ?>"
        //document.querySelector(".svg-container").innerHTML = `${}`;
        console.log("e: ", project.name);
        
        display_project.classList.remove("hide-project");
        display_project.classList.add("show-project");
        });

    /* btn.onclick = function() {
    modal.style.display = "block";
    } */


    // When the user clicks on <span> (x), close the modal
    span.addEventListener('click', function(e) {
        display_project.classList.add("hide-project");
        modal.style.display = "none";
        document.querySelector('.main_container').classList.remove('disable-scroll');
    
    })

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    }
});

function formateProjectName(name) {
    return name
        .split("-")
        .map((word) => word[0].toUpperCase() + word.slice(1))
        .join(" ");
}



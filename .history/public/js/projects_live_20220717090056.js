
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
    { number: 22, name: "canvas-drawing", imgLink: "22-drawing-app.png" },
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
                onclick="runscript(this);"
                id="${project.name}"
                class="btn btn-primary"
                >Live Demo</a
            >
        </div>
    `;

    projectsEl.appendChild(projectEl);

   
});

function formateProjectName(name) {
    return name
        .split("-")
        .map((word) => word[0].toUpperCase() + word.slice(1))
        .join(" ");
}

 /* Live Modal */

    // Get the modal
    var modal = document.getElementById("project-live-modal");
    var span = document.getElementsByClassName("close-modal-btn")[0];
    function runscript(project_live_btn) {
        
        modal.style.display = "block";
        const remove_elements = () => {
            projects.forEach((project, i)=> {
            
            if(project.name !== project_live_btn.id){
                
                const element = document.getElementById(`project-${project.name}`);
                element?.remove();
            } else {
                console.log('projects.name: ', i+". "+project.name);
                return;
            }
        })};
        remove_elements();
        
        span.setAttribute('id',project_live_btn.id);
        document.querySelector('.main_container').classList.add('disable-scroll');
        let btn_id = project_live_btn.id; 
        show_content(project_live_btn.id);
        
        return btn_id;
    }
    // Get the <span> element that closes the modal
    

    function show_content(project_name){
        let display_project = document.querySelector(`#project-${project_name}`);
        display_project.classList.add('show-project')
        display_project.classList.remove('hide-project')
        
        return project_name;
    }
    function hide_content(project_name){
        let display_project = document.querySelector(`#project-${project_name}`);

        display_project.classList.add('hide-project')
        display_project.classList.remove('show-project')
        
        return project_name;
    }
    // When the user clicks on <span> (x), close the modal
    span.addEventListener('click', function() {
        let modal_body = document.querySelector(".project-live-modal-body");
        
        var php_string = {<?php echo json_encode($vars) ?>};
        
        hide_content(this.id)
            const add_elements = () => {
                projects.forEach((project, i)=> {
                    if(project.name !== this.id){
                
                        const el_tag = document.createElement("div")
                        el_tag.setAttribute("id", `project-${project.name}`);
                        const el_text = document.createTextNode(php_string)
                        el_tag.appendChild(el_text);
                        modal_body.appendChild(el_tag)
                    } else {
                        console.log('This is projects.name: ', i+". "+project.name);
                        return;
                    }
                
             
        })}; add_elements();
        modal.style.display = "none";
        document.querySelector('.main_container').classList.remove('disable-scroll');
    })
       
    // When the user clicks the button, open the modal 
    //btn.addEventListener('click', function(e) {});

    /* btn.onclick = function() {
    modal.style.display = "block";
    } */

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }}

    const remove_elements = () =>{
        projects.forEach((project, i)=> {
            
            if(i === 6){
                return;
            } else {
                console.log('projects.name: ', i+". "+project.name);
            }
        })
    }
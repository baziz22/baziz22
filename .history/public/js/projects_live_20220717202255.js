
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
    { number: 3, name: "drawing-canvas", imgLink: "22-drawing-app.png" },
    
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
        let modal_body = document.querySelector(".project-live-modal-body");
        const remove_elements = () => {
            projects.forEach((project, i)=> {
                const element = document.getElementById(`project-${project.name}`);
                
                element.parentElement?.removeChild(element);
            if(project.name == project_live_btn.id){
                
                const el_tag = document.createElement("div")
                el_tag.setAttribute("id", `project-${project.name}`);
                modal_body.appendChild(el_tag)

                let the_svg_container = document.querySelector(`#project-${project.name}`);
                const el2_tag = document.createElement("div")
                el2_tag.setAttribute("class", "svg-container");
                the_svg_container.appendChild(el2_tag)


                let the_script = document.querySelector(".svg-container");
                const el3_tag = document.createElement("script")
                el3_tag.setAttribute("src", `views/includes/project_live/${project.name}/js/${project.name}.js`);
                the_script.appendChild(el3_tag)

                console.log('projects.name: ', i+". "+project.name);
                return project.name;
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
            const element = document.getElementById(`project-${this.id}`)
            element?.removeChild(element);
        hide_content(this.id)
            
                
             
        })}; 
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
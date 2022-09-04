const projects = [
    {
        number: 1,
        name: "bar-chart",
        imgLink: "1-bar-chart.png",
    },
    {
        number: 2,
        name: "donut-chart",
        imgLink: "2-donut-chart.png",
    },
    {
        number: 3,
        name: "pie-chart",
        imgLink: "3-pie-chart.png",
    },
    { number: 4, name: "line-chart", imgLink: "4-line-chart.png" },
    
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
function formatePathName(name) {
    return name
        .split("-")
        .join("_");
}

 /* Live Modal */
 let modal_body = document.querySelector(".project-live-modal-body");
    // Get the modal
    var modal = document.getElementById("project-live-modal");
    var span = document.getElementsByClassName("close-modal-btn")[0];
    function runscript(project_live_btn) {
        
        modal.style.display = "block";
        
        const add_remove_elements = () => {
            // Remove Elements
            projects.forEach((project, i)=> {
                const element = document.getElementById(`project-${project.name}`);
                
                element?.remove(element);

                // Add Elements
            if(project.name == project_live_btn.id){
                document.querySelector('.project-live-modal-header h2').textContent = `${formateProjectName(project.name)} Porject Using D3.js`
                const el_tag = document.createElement("div")
                el_tag.setAttribute("id", `project-${project.name}`);
                modal_body.appendChild(el_tag)

                let the_svg_container = document.querySelector(`#project-${project.name}`);
                const el2_tag = document.createElement("div")
                el2_tag.setAttribute("class", "svg-container");
                the_svg_container.appendChild(el2_tag)

                //let php_path = "<?php URLROOT; ?>";
                //let rest_path = "views/includes/project_live/${project.name}/js/${project.name}.js";
                //var script = document.createElement('script');
                //script.type = 'text/javascript';
                //script.src = url;
                let the_script = document.querySelector(".svg-container");

                const el3_tag = document.createElement("script")
                el3_tag.setAttribute("src", `./views/includes/project_live/${formatePathName(project.name)}/js/${formatePathName(project.name)}.js`);
                the_script.appendChild(el3_tag)

                console.log('projects.name: ', i+". "+project.name);
                return project.name;
            }

        })};
        add_remove_elements();
        
        // Manipulate X button
        span.setAttribute('id',project_live_btn.id);
        //document.querySelector('.main_container').classList.add('disable-scroll');
        let btn_id = project_live_btn.id; 
        show_content(project_live_btn.id);
        // this changes the scrolling behavior to "smooth"
window.scrollTo({ target:"#project-live-modal", behavior: 'smooth' });

        
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
        // Remove Element
        const element = document.getElementById(`project-${this.id}`)
        //element?.remove(element);
        //hide_content(this.id); 
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


        //<img src="public/images/projects_live/${project.imgLink}" alt="$

const projects = [
    {
        number: 1,
        name: "expanding-cards",
        imgLink: "1-expanding-cards.png",
    },
    {
        number: 2,
        name: "progress-steps",
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
        <span class="project-title">${project.number}</span>
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
});

function formateProjectName(name) {
    return name
        .split("-")
        .map((word) => word[0].toUpperCase() + word.slice(1))
        .join(" ");
}

// 

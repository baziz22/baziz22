
    <div class="slidershow">
        <div class="slides">
            <input type="radio" name="radio" id="r1" checked />
            <input type="radio" name="radio" id="r2" />
            <input type="radio" name="radio" id="r3" />
            <input type="radio" name="radio" id="r4" />
            <input type="radio" name="radio" id="r5" />

            <div class="slide s1" id="map-pic">
                <img src="<?php URLROOT; ?>public/images/slides/whack.png">
            </div>
            <div class="slide project-content" id="chart-pic">
                <div class="project-information">
                    <p>name: Space Invader</p>
                </div>
                <img src="<?php URLROOT; ?>public/images/slides/guessNumber.png" alt="" />
                <div class="project-footer"></div>
            </div>
            <div class="slide" id="svg-pic">
                <img src="<?php URLROOT; ?>public/images/slides/calc.png" alt="" />
            </div>
            <div class="slide" id="game1">
                <img src="<?php URLROOT; ?>public/images/slides/snake.png" alt="" />
            </div>
            <div class="slide" id="game2">
                <img src="<?php URLROOT; ?>public/images/slides/spaceInvaderPoster.jpg" alt="" />
            </div>
            <div class="navigation">
                <label for="r1" class="bar">whack A mole</label>
                <label for="r2" class="bar">Guess Number</label>
                <label for="r3" class="bar">Calculator</label>
                <label for="r4" class="bar">Snake</label>
                <label for="r5" class="bar">Space Invaders</label>
            </div>
        </div>
    </div>
    <div class="card">
    <div class="card-info">
        <h2 class="footer-h2"> Games ::: </h2> <br>
        <p>Most of these games are programmed using Javascript, some Java</p> <br>
        <p>Check them on github </p>
        <br>
        <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img class="img-curve" src="public/images/projects/d3/charts_logo.png" width="600px" height="400px" alt="" style="width:100%">
            <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img class="img-curve" src="public/images/projects/d3/map.png" width="600px" height="400px" alt="" style="width:100%">
            <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img class="img-curve" src="public/images/projects/d3/r_charts.png" width="600px" height="400px" alt="" style="width:100%">
            <div class="text">Caption Three</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    </div>

    
</div>
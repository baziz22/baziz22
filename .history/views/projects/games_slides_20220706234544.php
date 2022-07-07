
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
                
        </div>
    </div>
    <div class="card">
    <div class="card-info">
        <h2 class="footer-h2"> Games ::: </h2> <br>
        <p>Most of these games are programmed using Javascript, some Java</p> <br>
        <p>Check them out on github or play live on the browser</p>
        <P>I am still developing them and adding more for fun!</P>
        <br>
        <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="<?php URLROOT; ?>public/images/slides/whack.png"  width="600px" height="400px" alt="" style="width:100%">
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
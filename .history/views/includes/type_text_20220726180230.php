<script>
    // Use Javascript To Type Out Text On Webpage One Letter At A Time
    // sound: https://www.fesliyanstudios.com/royalty-free-sound-effects-download/keyboard-typing-6
    // font: https://www.dafont.com/theme.php?cat=113
    /*  let myText = 'Welecome to my personal page';
     let myText2 = 'Welecome to my personal page';
     let myArray = myText.split("");
     let myArray2 = myText2.split("");
     let loopTimer;
     function frameLooper() {
         if (myArray.length > 0) {
             document.getElementById("type_text").innerHTML += `${myArray.shift()}` ;
             
         } else {
             clearTimeout(loopTimer);
             return false;
         }
         loopTimer = setTimeout('frameLooper()',70);
         
     }
     frameLooper(); */


    // ####################################################################

    const textDisplay = document.getElementById('type_text');
    //const phrases = ['Welcome to my personal website.'];
    //const phrases = ['Welcome to my personal website.', 'My name is Bader Binsunbil.', 'I am a Full Stack Developer.', 'System Engineer Assistant.', 'Computer Network Technician.', 'IT Specialist.'];
    const phrases = ['W']
    
    let i = 0
    let j = 0
    let currentPhrase = []
    let isDeleting = false
    let isEnd = false
    loop()

    function loop() {
        isEnd = false
        textDisplay.innerHTML = currentPhrase.join('')

        if (i < phrases.length) {

            if (!isDeleting && j <= phrases[i].length) {
                currentPhrase.push(phrases[i][j])
                j++
                textDisplay.innerHTML = currentPhrase.join('')
            }

            if (isDeleting && j <= phrases[i].length) {
                currentPhrase.pop(phrases[i][j])
                j--
                textDisplay.innerHTML = currentPhrase.join('')
            }

            if (j == phrases[i].length) {
                isEnd = true
                isDeleting = true
            }

            if (isDeleting && j === 0) {
                currentPhrase = []
                isDeleting = false
                i++
                if (i === phrases.length) {
                    //i = 4
                    // TODO made a fadeout in jQuery
                    /* currentPhrase = ["Bader Binsunbil"];
                    document.querySelector('#type_text2').innerHTML = "Full Stack Developer and System Engineer Assistant"; */
                    // TODO: move the object to the right side of the page.

                    var unfade = document.getElementById('myInfo');
                    var logo_svg = document.getElementById("logo-svg");
                    //logo_svg.style.marginTop = 0;
                    logo_svg.style.transform = "translate(10rem, -16.5rem)";
                    logo_svg.style.transition = "all 4s";
                    //document.querySelector("#myInfo").innerHTML = `Bader Binsunbil`;
                    document.querySelector("#myInfo-img").src = `<?php URLROOT; ?>public/images/bb.svg`;
                    unfade.classList.add("fade");
                    document.querySelector("#mySkills").classList.add('fade');
                }
            }
        }
        const spedUp = Math.random() * (80 - 50) + 10
        const normalSpeed = Math.random() * (300 - 200) + 10
        const time = isEnd ? 1500 : isDeleting ? spedUp : normalSpeed
        setTimeout(loop, time)
    }
</script>
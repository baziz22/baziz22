

<?php
    //echo $this->view->msg;
?>
<div class="main_container">
    <section class="first_page_scroll">
    <div id="first_line_page">
        <h1>Page Not Found 404</h1>
        <p>You will be directed to the main page in 3 seconds</p>
        <p></p>
    
    
    <?php
        //echo $this->view->msg;

        //header("Refresh:5; url=index.php");
        //sleep(3);
        //header("Location: ".URLROOT);
        header("Refresh:3; url=../../".URLROOT);
    ?>
    </div>
    </section>
</div>

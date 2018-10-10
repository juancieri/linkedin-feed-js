<?php
$titlePage = "";
$pageDescription = "";
$pageKeywords = "";
require("part-head.php");
?>

    <body id="home-page">
        
        <?php require("part-header.php"); ?>
        
        <main>
            
            <section id="linkedin-feed-js">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <script type="in/Login"></script>
                            <div id="displayUpdates"></div>
                        </div>
                    </div>
                </div>
            </section>
            
        </main>
        
        <?php require("part-footer.php"); ?>
        
        <?php require("part-script.php"); ?>
        
    </body>
</html>
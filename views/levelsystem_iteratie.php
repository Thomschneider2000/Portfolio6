<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('../includes/head.php'); ?>
</head>

<body>
    <div class="js-cursor" id="js-cursor"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="l-sidebar">
                    <?php include('../includes/sidebar.php'); ?>
                </div>
            </div>
            <div class="col-md-9">
                <h1><strong>level system</strong></h1>
                <div class="l-cmd">
                    <div class="row">
                        <h5>Cmd Methods:</h5>
                        <img class="c-cmd" src="../assets/logo-workshop.png" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 px-0 pr-4">
                        <h2>Introduction</h2>
                        <p>
                        I developed a Proof of Concept (POC) featuring an XP bar that showcases profile leveling. This interactive element allows users to track their progress and experience growth. By visualizing achievements and unlocking new levels, it enhances engagement and provides a sense of accomplishment within the application.
                        </p>
                    </div>
                    <div class="col-6 px-0 pl-4">
                        <h2>Main question</h2>
                        <p>How can I create an XP bar to visually represent and track user progress and level advancements for the PSV app?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 px-0 pr-4">
                        <h2>Process</h2>
                        <p>
                        I implemented a working XP bar using PHP, SCSS, and JS. First, I created the necessary HTML structure to display the XP bar. Then, in PHP, I implemented logic to track XP points and calculate the progress towards the next level. Using SCSS, I styled the XP bar with appropriate colors and animations. Finally, in JS, I updated the XP bar dynamically as the user earns XP, providing a visual representation of their progress towards the next level.
                            <br/><br/>
                            To create an XP bar, I used the CMD method called prototyping. I made an initial version of the XP bar to see how it would look and work. Then, I made improvements and changes until I was happy with how it tracked and showed the user's experience points.
                        </p>
                    </div>
                    <div class="col-6 px-0 pl-4">
                    <a href="https://imgur.com/m8LZdYy"><img src="https://i.imgur.com/m8LZdYy.png" title="source: imgur.com" /></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 px-0 pr-4">
                        <h2>Conclusion</h2>
                        <p>In summary, I created a simple XP bar to show how it works. By using PHP, SCSS, and JS, I made it possible to track and display experience points. This proof of concept proves that we can add this feature to our PSV app. It will make the app more engaging and help users see their progress and level up easily.</p>
                    </div>
                    <div class="col-6 px-0 pl-4">
                        <h2>Reflection</h2>
                        <p>Reflecting on the process of creating the XP bar, I encountered a few challenges along the way. Some aspects were a bit difficult, but I persevered and overcame them. It required a deeper understanding of PHP, SCSS, and JS to implement the functionality correctly. However, the experience was valuable as it allowed me to enhance my coding skills and problem-solving abilities. Overall, the effort put into developing the XP bar was rewarding, and I gained valuable knowledge that can be applied to future projects.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 px-0">
                        <h2>Next Step</h2>
                        <p>The next thing to do is to add the XP bar to the PSV app to show how the progression works. I will need to put the XP bar into the app and make it update as the user earns XP. It's important to test and make sure it works well, so users can see their progress and feel accomplished while using the app.</p>
                    </div>
                </div>
                <div class="c-arrow-link">
                    <a href="https://github.com/Thomschneider2000/level-system" target="_blank"
                        class="c-link button arrow">Git repository</a><i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
    <?php include('../includes/scripts.php'); ?>
</body>

</html>
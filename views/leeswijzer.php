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
        <div class="l-filter">
          <div id="leeswijzer_nav">
            <a href="#individual"><button type="button" class="btn active">Individual</button></a>
            <a href="#group"><button type="button" class="btn">Group</button></a>
            <a href="#international"><button type="button" class="btn">International</button></a>
          </div>
        </div>
        <h1><strong>Reading Guide</strong></h1>
        <div class="row leeswijzer">
          <div class="col-md-7 pl-0 pr-4">
            <!-- individual project -->
            <h3 id="individual">Individual Project</h3>
            <h5>Assignment</h5>
            <p>For this assignment, I aim to create a new portfolio that builds upon the foundation of my previous
              portfolio. Drawing inspiration from my previous work, I seek to optimize and improve the design,
              functionality, and overall user experience. By critically evaluating the strengths and weaknesses of my
              old portfolio, I will implement enhancements such as a more intuitive navigation, responsive layout, and
              refined visual aesthetics to showcase my skills and accomplishments effectively.</p>
            <h5>Process & Results</h5>
            <p>
              For this project, I created several PoCs. I started by creating a <a class="c-link" target="_blank"
                href="projectplanportfolio_iteratie.php">project plan</a> for my portfolio to get a
              clear idea of what I wanted to accomplish and how I was going to go about it. Then I did <a class="c-link"
                target="_blank" href="uxresearch_iteratie.php">research on UI/UX</a>
              to improve my old portfolio. I looked at what could be improved and what trends were currently going on.
            </p>
            <p>Then I designed a completely new layout for my portfolio. The first design did not meet my expectations,
              so I decided to create a <a class="c-link" target="_blank" href="portfolio_iteratie.php">new design</a>.
              In the end, I chose
              this new design because it was more
              user-friendly, especially with the addition of a sidebar.
            </p>
            <p> After the design was ready, I started <a class="c-link" target="_blank"
                href="frontendportfolio_iteratie.php">coding my portfolio</a>.
              To do this, I used HTML, SCSS, PHP and
              JavaScript. To keep my code efficient, I divided the website into different layouts that I could manage
              dynamically with PHP. This provided better organization and maintenance of my code.
            </p>
            <p> I was also involved as a stakeholder in the <a class="c-link" target="_blank"
                href="leadership_iteratie.php">Smartmobile
                group</a>, which participated in the development of the PSV app. Together we brainstormed new features
              that we could implement.</p>
            </p>
            <h5>Reflection</h5>
            <p>During this assignment, I faced a challenge in selecting a final design for my new portfolio. Being quite
              particular about my preferences, I found it hard to make a decision. The abundance of design choices made
              it difficult to settle on one. However, this experience taught me the importance of finding a balance
              between my high standards and practicality to create a visually pleasing and functional portfolio.</p>
            <p>
              As a stakeholder in the Smartmobile group, it was a valuable experience to be involved in the development
              process of the PSV app. It was inspiring to collaborate with other team members and share insights. By
              listening to the ideas and perspectives of others, I gained new insights and broadened my understanding of
              the project. It was enriching to see how different points of view contributed to the development of
              innovative features and solutions. It was a fine and educational experience to be involved in the project
              as a stakeholder.
            </p>
          </div>
          <div class="col-md-5 pl-4 pr-0">
            <a href="https://imgur.com/QhiZXNj"><img src="https://i.imgur.com/QhiZXNj.png"
                title="source: imgur.com" /></a>
          </div>
          <div class="col-md-7 pl-0 pr-4">
            <!-- group project -->
            <h3 class="c-spacer" id="group">Group Project</h3>
            <h5>Assignment</h5>
            <p>For our group project, we received a task from PSV to come up with an innovative way to engage supporters more with the match experience at the stadium. The assignment we received is quite broad, which is actually nice.</p>
            <h5>Process & Results</h5>
            <p>
              Before starting our project, we took the important step of creating a <a class="c-link" target="_blank"
                href="projectplanpsv_iteratie.php">project plan</a>. This plan helped us
              outline the goals, timeline, and deliverables for our app development. We used various techniques like
              <a class="c-link" target="_blank" href="https://i.imgur.com/ALruTCB.png">personas</a>, <a class="c-link" target="_blank" href="projectplanpsv_iteratie.php">user
                stories</a>, and <a class="c-link" target="_blank" href="https://i.imgur.com/zbi6iA9.png">user journey mapping</a> to understand the
              needs of our target users. This
              user-centric approach ensured that our app would meet the expectations and requirements of our audience.
              using the persona, I did a study on psv's <a class="c-link" target="_blank" href="research-targetgroup_iteratie.php">target audience</a>
              and how to make sure we can apply gamification to this.

              With the project plan in place, we then focused on specifying the <a class="c-link" target="_blank"
                href="projectplanpsv_iteratie.php">key functionalities</a> and features for our
              app. This helped us establish a clear direction for development and ensured that we stayed focused on
              creating a successful and functional app. We paid special attention to <a class="c-link" target="_blank"
                href="frontend_iteratie.php">designing the different betting
                options</a> within the app, aiming for appealing and user-friendly interfaces. Our goal was to engage
              users
              and provide them with a seamless and enjoyable betting experience.
            </p>
            <p>
              After this stage of the project, I started working on implementing our design. To begin with, I set up a
              <a class="c-link" target="_blank" href="https://github.com/Thomschneider2000/Psv-project">git
                repository</a> and created multiple branches so that my team can collaborate without
              encountering conflicts. Once the team members have pushed their changes to their respective branches, they
              can request to push their modifications to the main branch, which I need to approve. After this, I created
              a <a class="c-link" target="_blank" href="c4_iteratie.php">c4 model</a> with my group to see what the infrastructure of
              the app will look like.

              Furthermore, for the app, we wanted to create a <a class="c-link" target="_blank" href="frontend_iteratie.php">web app</a>
              concept, so I developed a part of it using HTML,
              SCSS, and
              JavaScript. We also ensured code optimization by including various layouts, eliminating the need to repeat
              them for each page.
            </p>
            <p>
              For the web app I also created an <a class="c-link" target="_blank" href="levelsystem_iteratie.php">xp progress system</a> so you
              can see how the user progressed in our app.
              After completing the web app, we had our <a class="c-link" target="_blank" href="testingdoc_iteratie.php">stakeholder test a feature</a>. We incorporated his feedback and made
              improvements. Then, we prepared an <a class="c-link" target="_blank" href="advicereport_iteratie.php">advice document</a> to guide our stakeholder in further developing our
              idea. Finally, we conducted a <a class="c-link" target="_blank" href="peerreview_iteratie.php">peer review</a> within our group to learn about our strengths and weaknesses.
            </p>
            <h5>Reflection</h5>
            <p>During the development of the app using HTML, CSS, JavaScript, and PHP, I found the process to be
              relatively straightforward. However, one challenge arose when multiple team members worked on different
              branches. It was crucial to maintain consistent styling throughout the app, which initially posed a slight
              issue. Fortunately, we were able to address this concern swiftly by implementing effective communication
              and collaborative decision-making, ensuring a cohesive and uniform design across all branches. This
              experience reinforced the significance of teamwork and effective coordination in achieving a unified and
              visually appealing final product.</p>
          </div>
          <div class="col-md-5 pl-4 pr-0">
            <a class="c-image-reading" href="https://imgur.com/tAxYVQY"><img class="c-spacer"
                src="https://i.imgur.com/tAxYVQY.png" title="source: imgur.com" /></a>
          </div>
          <div class="col-md-7 pl-0 pr-4">
            <!-- international project -->
            <h3 class="c-spacer" id="international">International Project</h3>
            <h5>Assignment</h5>
            <p>
              I would like to take you through my report on my participation in an international school
              project. The project was a fun experience where I had the opportunity to collaborate with students from
              different countries and cultures.
            </p>
            <p>
              In this report, I will take you through the process of our assignment, where we were tasked with devising
              a new, innovative 15th game aimed at promoting physical activity among children on the school playground.
            </p>
            <h5>Process & Results</h5>
            <p>
              To start off, we conducted research to explore innovative ideas for our project. This led us to the
              concept of creating a tag game where users navigate from point A to point B. By collecting points through
              back-and-forth movement, players can climb the leaderboard. Before diving into the project, we thoroughly
              <a href="researchtags_iteratie.php">researched different tags</a> that users can employ. Additionally, I created a <a
                href="researchtags_iteratie.php">comparison table</a> to determine the most suitable tag for our specific needs.
            </p>
            <p>In addition, I took on the task of creating <a target="_blank" class="c-link" href="video_iteratie.php">a
                logo</a> for our concept,
              which we later incorporated into our project. Furthermore, I played a significant role in producing the
              video presentation for the participants of the international week. These contributions allowed me to
              showcase my creativity and actively engage with the project's visual elements, enhancing the overall
              impact and cohesiveness of our work.</p>
            <h5>Reflection</h5>
            <p>Being a part of the international week was a lot of fun! I had a great time connecting with people from
              different countries and cultures. It was exciting to learn from them and share ideas. The experience was
              enriching and gave me a broader perspective. I made wonderful memories and enjoyed the lively and
              enjoyable atmosphere throughout the event. It was truly an amazing and enjoyable experience to be a part
              of the international week.</p>
          </div>
          <div class="col-md-5 pl-4 pr-0">
            <a href="https://imgur.com/LEtFzl5"><img class="c-spacer" src="https://i.imgur.com/IsFwHS9.png"
                title="source: imgur.com" /></a>
          </div>
          <div class="col-md-7 pl-0 pr-4">
            <!-- semester reflection -->
            <h3 class="c-spacer" id="international">Semester Reflection</h3>
              <h5>communication</h5>
              <p>Throughout the semester, communication played a pivotal role in our group's success. We fostered a culture of open and effective communication, which greatly contributed to our collaborative efforts. Regular team meetings, clear and concise messages, and active listening ensured that everyone was on the same page. We encouraged ideas and opinions, allowing for fruitful discussions and problem-solving. This strong communication foundation facilitated smooth coordination, minimized misunderstandings, and maximized productivity, making our semester a cohesive and rewarding experience.</p>
              <h5>Self improvement</h5>
              <p>In reflecting on my own performance, I acknowledge that one area for improvement lies in consistently adhering to the planned schedule. At times, I found it challenging to stay on track with the established timelines and deadlines. To address this, I aim to enhance my time management skills by prioritizing tasks, breaking them down into manageable steps, and setting realistic deadlines. By actively monitoring my progress and making necessary adjustments, I can ensure greater adherence to the schedule and achieve more efficient and effective results in future endeavors. But overall I think i did a pretty good job this semester</p>
              <h5>Next Semester</h5>
              <p>Next semester, I want to improve myself even more. I will be taking a minor called "Ed-Tech" which focuses on using technology for education. I want to learn new things and become better than before. This program will help me understand how technology can be used in teaching and learning. I am excited to explore new ideas and find innovative ways to make education more engaging and effective. By doing this, I hope to become even better at what I do and make a positive difference in education.</p>
            </div>
          <div class="col-md-5 pl-4 pr-0">
            <a href="https://imgur.com/SEaSO0W"><img class="c-spacer" src="https://i.imgur.com/G6GQ3H9.jpg"
                title="source: imgur.com" /></a>
          </div>
          <div class="c-arrow-link">
            <a href="../assets/pdf/Porfolio.pdf" target="_blank" class="c-link button arrow">Reading guide
              pdf</a><i class="fa-solid fa-arrow-right"></i>
          </div>
          <div class="col-md-12 pl-0 pr-4">
            <!-- table -->
            <h3 class="c-spacer" id="">Table of POC</h3>
            <p>
              In the table below, you will find all the products I have created this semester, organized according to
              learning objectives.
            </p>
            <table border="1" width="500">
              <tr>
                <th width="50%">Learning outcomes</th>
                <th width="50%">Products</th>
              </tr>

              <tr>
                <td>Learning outcome 1: User interaction (analysis & advice)</td>
                <td><a href="uxresearch_iteratie.php" target="_blank">UX research</a> / <a
                    href="research-targetgroup_iteratie.php" target="_blank">Research Target Group</a> / <a
                    href="researchtags_iteratie.php" target="_blank">Research Tags</a> / <a href="video_iteratie.php" target="_blank">Logo Design & Poster</a> / <a href="https://i.imgur.com/ALruTCB.png" target="_blank">Persona</a> / <a href="projectplanpsv_iteratie.php" target="_blank">User Stories</a> / <a href="https://i.imgur.com/zbi6iA9.png" target="_blank">User Journey</a></td>
              </tr>

              <tr>
                <td>Learning outcome 2: User interaction (execution & validation)</td>
                <td><a href="testingdoc_iteratie.php" target="_blank">Testing PSV App</a> / <a href="advicereport_iteratie.php" target="_blank">Advice Report</a> / <a href="portfolio_iteratie.php" target="_blank">Portfolio iterations</a></td>
              </tr>
              <tr>
                <td>Learning outcome 3: Software design</td>
                <td><a href="frontendportfolio_iteratie.php" target="_blank">Portfolio Front-end</a> / <a
                    href="frontend_iteratie.php" target="_blank">PSV Front-end</a> / <a href="c4_iteratie.php"
                    target="_blank">C4-Model</a> / <a href="levelsystem_iteratie.php" target="_blank">Level system</a>
                </td>
              </tr>
              <tr>
                <td>Learning outcome 4: Future-oriented organisation</td>
                <td><a href="projectplanpsv_iteratie.php" target="_blank">Projectplan PSV</a> / <a
                    href="projectplanportfolio_iteratie.php" target="_blank">Projectplan Portfolio</a> / <a
                    href="https://github.com/Thomschneider2000/Psv-project" target="_blank">Git</a> / <a
                    href="https://trello.com/b/ogvDSdI1/advanced-media-psv" target="_blank">Trello</a></td>
              </tr>
              <tr>
                <td>Learning outcome 5: Investigative problem solving</td>
                <td><a href="uxresearch_iteratie.php" target="_blank">UX research</a> / <a
                    href="research-targetgroup_iteratie.php" target="_blank">Research Target Group</a> / <a
                    href="researchtags_iteratie.php" target="_blank">Research Tags</a></td>
              </tr>
              <tr>
                <td>Learning outcome 6: Personal leadership </td>
                <td><a href="peerreview_iteratie.php" target="_blank">Peer review</a> / <a href="leadership_iteratie.php" target="_blank">Leadership Smartmobile</a></td>
              </tr>
              <tr>
                <td>Learning outcome 7: Goal-oriented interaction </td>
                <td><a href="projectplanpsv_iteratie.php" target="_blank">Projectplan PSV</a> / <a
                    href="projectplanportfolio_iteratie.php" target="_blank">Projectplan Portfolio</a> / <a href="advicereport_iteratie.php" target="_blank">Advice Report</a> / <a href="video_iteratie.php" target="_blank">Logo Design & Poster</a></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include('../includes/scripts.php'); ?>
</body>

</html>
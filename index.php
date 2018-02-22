<?php
 require_once("include/header.php");
?>
  <section id="Banner">
    <div class="banner wrapper">
      <h2>Play. Improve. Win.</h2>
      <p>Want to improve your skills in csgo? Look no further, Monitorus brings you the warmup servers of choice. With built in statistics, to help you improve your skills!</p>
      <h2 class="orange">ALPHA</h2>
      <p>
        We strive to finish the first version, while you wait you can still access all features as they're built for free. Enjoy statistics and a 128 tick server today!
      </p>

      <a class="playNow" href="steam://connect/94.23.157.153:27015">
        Play now!
      </a>

    </div>
  </section>
  <section class="analytics" id="Analytics">
    <div class="wrapper">
      <div class="center">
        <div class="box">
          <span class="value">15000<?php //echo $db->query("SELECT id FROM hits")->num_rows; ?></span><br />
          <span class="title">Hits analyzed</span>
        </div>
        <div class="box">
          <span class="value">12648<?php //echo $db->query("SELECT id FROM kills ORDER BY id")->num_rows; ?></span><br />
          <span class="title">Kills recorded</span>
        </div>
        <div class="box">
          <span class="value">3451<?php //echo $db->query("SELECT DISTINCT attacker FROM hits ORDER BY attacker")->num_rows; ?></span><br />
          <span class="title">Players</span>
        </div>
        <div class="box">
          <span class="value">86</span><br />
          <span class="title">Our servers</span>
        </div>
        <br class="br" />
    </div>
  </section>
  <section class="skillbackground" id="skill">
   <div class="wrapper wrapper-flex">
     <div class="skill">
       <h2>TRACK YOUR SKILL</h2>
       <p>Improve your skill, watch as your rank and skill raises through the leaderboards. Get insight in how you play, and how you can improve.</p>
     </div>
     <div class="img-graph">
       <img class="responsive-image" src="img/graph.png" alt="" height="350px" width="500px">
     </div>
   </div>

   <div class="wrapper wrapper-flex">
     <div class="skill">
       <h2>COMMUNITY</h2>
       <p>Get tips and tricks in how to improve from Global Elites in our community, our coaches write guides to explain retakes, takes, nades and other helpful tips anr tricks!</p>
     </div>
     <div class="img-graph">
       <img class="responsive-image" src="img/coach.jpeg" alt="" height="350px" width="500px">
     </div>
   </div>
  </section>

  <section id="footer">
    <footer class="footer">
      <div class="wrapper">
        <div class="wrap">
          <h3>Monitorus</h3>
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Anti-Cheat</a></li>
                <li><a href="#">Client</a></li>
                <li><a href="#">Stats</a></li>
                <li><a href="#">Bans</a></li>
            </ul>
        </div>
        <div class="wrap">
          <h3>RESOURCES</h3>
            <ul>
                <li><a href="#">Support</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Jobs</a></li>
                <li><a href="#">Developers</a></li>
                <li><a href="#">Press</a></li>
            </ul>
        </div>
          <div class="wrap">
            <h3>FOLLOW</h3>
              <ul>
                  <li><a href="#">Twitter</a></li>
                  <li><a href="#">Facebook</a></li>
                  <li><a href="#">Youtube</a></li>
                  <li><a href="#">Twitch</a></li>
              </ul>
          </div>
      </div>

      <p class="center-paragraph footer-monitorus">Monitorus &copy; 2018</p>
      <br class="br" />
    </footer>
  </section>
</body>
</html>

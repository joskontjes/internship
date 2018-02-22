<?php
require_once("include/header.php");
?>
  <section id="Banner">
    <div class="banner" class="wrapper">
      <h2>Play. Improve. Win.</h2>
      <p>Wan't to improve your skills in csgo? Look no further, Monitorus brings you the warmup servers of choice.<br />With built in statistics, to help you improve your skills!</p>
      <h2 style="color: orange;">ALPHA</h2>
      <p>
        We strive to finish the first version, while you wait you can still access all features as they're built for free.<br />Enjoy statistics and a 128 tick server today!
      </p>

      <a href="steam://connect/94.23.157.153:27015">
        <div class="playNow" style="margin-top: 100px;">
          Play now!
        </div>
      </a>

      <!--<div class="sign-up">
        <a href="#">SIGN UP FOR FREE</a>
      </div>
      <div class="log-in">
        <a href="#">SIGN UP WITH FACEBOOK</a>
      </div>-->
    </div>
  </section>
  <section id="Analytics">
    <div class="wrapper">
      <div class="center">
        <div class="box">
          <span style="font-size: 40px; color: #E89A00;"><?php echo $db->query("SELECT id FROM hits")->num_rows; ?></span><br />
          <span style="font-size: 20px; color: #c9c9c9;">Hits analyzed</span>
        </div>
        <div class="box">
          <span style="font-size: 40px; color: #E89A00;"><?php echo $db->query("SELECT id FROM kills ORDER BY id")->num_rows; ?></span><br />
          <span style="font-size: 20px; color: #c9c9c9;">Kills recorded</span>
        </div>
        <div class="box">
          <span style="font-size: 40px; color: #E89A00;"><?php echo $db->query("SELECT DISTINCT attacker FROM hits ORDER BY attacker")->num_rows; ?></span><br />
          <span style="font-size: 20px; color: #c9c9c9;">Players</span>
        </div>
        <div class="box">
          <span style="font-size: 40px; color: #E89A00;">1</span><br />
          <span style="font-size: 20px; color: #c9c9c9;">Server</span>
        </div>
        <br style="clear: both;">
        <!--<div class="box2">
          <a href="#">kappaPride</a>
        </div>
        <div class="box2">
          <a href="#">kappaPride</a>
        </div>
      </div>-->
    </div>
  </section>
  <section id="skill">
   <div class="wrapper">
     <div class="skill">
       <h2>TRACK YOUR SKILL</h2>
       <p>Improve your skill, watch as your rank and skill raises through the leaderboards. Get insight in how you play, and how you can improve.</p>
     </div>
     <div class="img-graph">
       <img src="img/graph.png" alt="" height="350px" width="500px">
     </div>
   </div>
  </section>

  <section id="skill">
   <div class="wrapper">
     <div class="img-graph" style="float: left !important;">
       <img src="img/coach.jpeg" alt="" height="350px" width="500px">
     </div>
     <div class="skill" style="float: right !important; width: 500px; padding-left: 40px; padding-right: 40px;">
       <h2>COMMUNITY</h2>
       <p>Get tips and tricks in how to play from Global Elites in our community, our coaches write guides to explain retakes, takes, nades and other helpful tips anr tricks!</p>
     </div>
   </div>
  </section>

  <section id="footer">
    <footer class="footer">
      <div class="wrapper">
        <!--
        <div class="footer-left">
          <h3>Monitorus</h3>
          <p class="footer-links">
            <ul>
              <div class="footer-left-align">
                <li><a href="#">About</a></li>
              </div>
              <div class="footer-left-align">
                <li><a href="#">Anti-Cheat</a></li>
              </div>
              <div class="footer-left-align">
                <li><a href="#">Client</a></li>
              </div>
              <div class="footer-left-align">
                <li><a href="#">Stats</a></li>
              </div>
              <div class="footer-left-align">
                <li><a href="#">Bans</a></li>
              </div>
            </ul>
          </p>
        </div>
        <div class="footer-center">
          <h3>RESOURCES</h3>
          <p class="footer-links">
            <ul>
              <div class="footer-center-align">
                <li><a href="#">Support</a></li>
              </div>
              <div class="footer-center-align">
                <li><a href="#">FAQ</a></li>
              </div>
              <div class="footer-center-align">
                <li><a href="#">Jobs</a></li>
              </div>
              <div class="footer-center-align">
                <li><a href="#">Developers</a></li>
              </div>
              <div class="footer-center-align">
                <li><a href="#">Press</a></li>
              </div>
            </ul>
          </p>
        </div>
          <div class="footer-right">
            <h3>FOLLOW</h3>
            <p class="footer-links">
              <ul>
                <div class="footer-right-align">
                  <li><a href="#">Twitter</a></li>
                </div>
                <div class="footer-right-align">
                  <li><a href="#">Facebook</a></li>
                </div>
                <div class="footer-right-align">
                  <li><a href="#">Youtube</a></li>
                </div>
                <div class="footer-right-align">
                  <li><a href="#">Twitch</a></li>
                </div>
              </ul>
            </p>
          </div>

          <p class="pp-tc">Terms & Conditions</p>
      </div>
      -->
      <p class="footer-monitorus">Monitorus &copy; 2018</p>
      <br style="clear: both;" />
    </footer>
  </section>
</body>
</html>

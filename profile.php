<?php
require_once("include/header.php");

$getProfileSummary = file_get_contents("http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=F8EA41179E2DCE45EF33216905BD5DEE&steamids=".$_GET['profile']);
$getProfileSummary = json_decode($getProfileSummary, true);
$getProfileSummary = $getProfileSummary["response"]["players"][0];
?>
<section id="BannerProfile">
  <div class="bannerprofile">
    <div class="wrapper" style="position: relative; height: 100%">
      <img src="<?php echo $getProfileSummary['avatarfull']; ?>" style="position: absolute; left:0px; bottom: 20px; height: 100px; width: 100px;"/>
      <div style="position: absolute; bottom: 20px; left: 120px; color: white;">
        <h3><?php echo $getProfileSummary['personaname']; ?></h3>
      </div>
    </div>
  </div>
</section>
<section id="server-info">
  <div class="wrapper2">

    <h1>Statistics</h1>

    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawAll);

      function drawAll() {
        drawHitsPlayers();
        drawKills();
      }


      function drawHitsPlayers() {
        var data = google.visualization.arrayToDataTable([
           ['Element', 'Hits', { role: 'style' }],
           ['Headshot', <?php echo $db->query("SELECT `id` FROM `hits` WHERE `attacker` = '".$_GET['profile']."' AND `hit` = '1' AND isBot = 'false'")->num_rows; ?>, '#b87333'],            // RGB value
           ['Upper torso', <?php echo $db->query("SELECT `id` FROM `hits` WHERE `attacker` = '".$_GET['profile']."' AND `hit` = '2' AND isBot = 'false'")->num_rows; ?>, 'silver'],            // English color name
           ['Lower torso', <?php echo $db->query("SELECT `id` FROM `hits` WHERE `attacker` = '".$_GET['profile']."' AND `hit` = '3' AND isBot = 'false'")->num_rows; ?>, 'gold'],
           ['Left arm', <?php echo $db->query("SELECT `id` FROM `hits` WHERE `attacker` = '".$_GET['profile']."' AND `hit` = '4' AND isBot = 'false'")->num_rows; ?>, 'color: #e5e4e2' ],
           ['Right arm', <?php echo $db->query("SELECT `id` FROM `hits` WHERE `attacker` = '".$_GET['profile']."' AND `hit` = '5' AND isBot = 'false'")->num_rows; ?>, 'color: #e5e4e2' ],
           ['Left leg', <?php echo $db->query("SELECT `id` FROM `hits` WHERE `attacker` = '".$_GET['profile']."' AND `hit` = '6' AND isBot = 'false'")->num_rows; ?>, 'color: #e5e4e2' ],
           ['Right leg', <?php echo $db->query("SELECT `id` FROM `hits` WHERE `attacker` = '".$_GET['profile']."' AND `hit` = '7' AND isBot = 'false'")->num_rows; ?>, 'color: #e5e4e2' ],
        ]);

        var options = {
          width:450,
          title: 'Hits on Players',
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('hitsplayers'));
        chart.draw(data, options);
      }

      function drawKills() {

        var data = google.visualization.arrayToDataTable([
           ['Element', 'Weapon', { role: 'style' }],
           <?php
             $weapons = $db->query("SELECT weapon,COUNT(*) as count FROM kills WHERE `attacker` = '".$_GET['profile']."' AND isBot = 'false' GROUP BY weapon ORDER BY count DESC");
             while($weapon = $weapons->fetch_assoc()) {
               echo "['".$weapon['weapon']."', ".$weapon['count'].", 'silver'],";
             }
             if($weapons->num_rows == 0) {
               echo "['ak47', 0, 'silver'],";
             }
          ?>
        ]);

        var options = {
          width:450,
          title: 'Kills by weapon',
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('kills'));
        chart.draw(data, options);
      }
    </script>


    <div id="hitsplayers" style="float: left;"></div>
    <div id="kills" style="float: right;"></div>
    <br style="clear: both;" />
    <div id="d" style="float: right;"></div>

  </div>
</section>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>

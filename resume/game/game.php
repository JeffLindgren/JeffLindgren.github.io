<?php include ('assets/insert.php'); ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>


    <title>21 Remastered</title>
    <link rel="shortcut icon" href="assets/images/honor_diamond.png" />
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/MyStyles.css">


    
	<style>
		<!-- css styles here-->
	</style>


	<script src="js/jquery-3.1.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
  <script src="js/MyScripts.js"></script>
  </head>

  <body onload="oldStats();">
    
    <div class="container text-center">
      


      <table width="20%" cellpadding="2" cellspacing="5" border="0" align="center">
        <tr>
          
          <br />
          <br />

          <p class="cardStyleImg" id="dealer1"><img src="assets/images/gray_back.png"></p>
          <p class="cardStyleImg" id="dealer2"><img src="assets/images/gray_back.png"></p>
          <p class="cardStyleImg" id="dealer3"></p>
          <p class="cardStyleImg" id="dealer4"></p>
          <p class="cardStyleImg" id="dealer5"></p>
          <p class="cardStyleImg" id="dealer6"></p>
          <p class="cardStyleImg" id="dealer7"></p>
          <p class="cardStyleImg" id="dealer8"></p>
          
          

          <!-- <td id="cards">sad</td> -->
        </tr>

        <tr>
          <td>Dealer Score</td>
          <td id="dealerScore">0 </td>

          <!-- <td id="cards">sad</td> -->
        </tr>

        <tr>
          <td>Dealer Total</td>
          <td id="dealerTotal">0 </td>

          <!-- <td id="cards">sad</td> -->
        </tr>



        <tr>
          <p id="dealerStatus" class="dealerStatus"></p>
        </tr>


      </table>



          <hr>
      <table width="20%" cellpadding="2" cellspacing="5" border="0" align="center">
        <tr>
          <p class="cardStyleImg" id="player1"><img src="assets/images/gray_back.png"></p>
          <p class="cardStyleImg" id="player2"><img src="assets/images/gray_back.png"></p>
          <p class="cardStyleImg" id="player3"></p>
          <p class="cardStyleImg" id="player4"></p>
          <p class="cardStyleImg" id="player5"></p>
          <p class="cardStyleImg" id="player6"></p>
          <p class="cardStyleImg" id="player7"></p>
          <p class="cardStyleImg" id="player8"></p>
          
        </tr>

        <tr>
          <td>Your Score</td>
          <td id="playerScore">0 </td>

          
        </tr>

        <tr>
          <td>Your Total</td>
          <td id="playerTotal">0 </td>

          
        </tr>

        <tr>
          <p id="playerStatus" class="playerStatus"></p>
        </tr>

        <!-- <tr>
          <td>Test</td>
          <td>Test</td>
          <td>Test</td>
          <td>Test</td>
          
        </tr> -->



        


      </table>
      <button class="btn-primary btn-lg buttons-guess" onclick="Hit()">Hit</button>
      <button class="btn-primary btn-lg buttons-guess" onclick="Stay()">Stay</button>
      <br />
      <br />
      <button class="btn-primary btn-lg buttons-guess" onclick="battleIt();">Play</button>
     
      <button class="btn-warning btn-lg buttons-guess" onclick="stop();">Exit</button>

      

      <button class="btn-danger btn-lg buttons-guess" onclick="window.location.href='assets/HighScore.php'">Top 5 Players</button>

      <br /><br />

      <ol id="oldStats" class="oldStats">
        
        
      </ol>
      


      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="hide" id ="hide">
          <table align="center">
            <tr>
              <td><p>Name: </td>
              <td><input type="text" size = "20" name="playerName" /></p></td>
            </tr>
            <tr>
              <td> </td>
              <td class="hideScore"><input  size="2" name = "playerScore" value="" readonly id="score" /></p></td>
            </tr>
            <tr>
              <td colspan="2" style="text-align:center;"><input type="submit" name="frmAddPoints" class="btn-warning btn-group-sm"></input></td>
            </tr>
          </table>
        </form>
       

      



      
    </div>


  </body>
</html>
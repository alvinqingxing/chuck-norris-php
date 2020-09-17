<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link href="style.css" rel="stylesheet" />
    <title>Random Chuck Norris Joke Generator</title>
  </head>
  <body>
    <h1>Random Chuck Norris Joke Generator</h1>
    <img src="Chuck-Norris.png" />
    <p id="random-joke">
      <?php
      switch (rand(0, 19)) {
        case 0:
          echo "Chuck Norris can strangle you with a cordless phone.";
          break;
        case 1:
          echo "Chuck Norris doesn’t wear a watch. He decides what time it is.";
          break;
        case 2:
          echo "If Chuck Norris were to travel to an alternate dimension in which there was another Chuck Norris and they both fought, they would both win.";
          break;
        case 3:
          echo "Chuck Norris can kill your imaginary friends.";
          break;
        case 4:
          echo "Chuck Norris can kill your imaginary friends.";
          break;
        case 5:
          echo "Chuck Norris tells Simon what to do.";
          break;
        case 6:
          echo "Chuck Norris makes onions cry.";
          break;
        case 7:
          echo "Chuck Norris knows Victoria’s secret.";
          break;
        case 8:
          echo "Chuck Norris lost his virginity before his dad did.";
          break;
        case 9:
          echo "If it looks like chicken, tastes like chicken, and feels like chicken but Chuck Norris says its beef, then it’s beef.";
          break;
        case 10:
          echo "Chuck Norris’ tears cure cancer. Too bad he has never cried.";
          break;
        case 11:
          echo "Chuck Norris does not own a stove, oven, or microwave, because revenge is a dish best served cold.";
          break;
        case 12:
          echo "Chuck Norris has never blinked in his entire life. Never.";
          break;
        case 13:
          echo "Chuck Norris can speak Braille.";
          break;
        case 14:
          echo "Chuck Norris can slam revolving doors.";
          break;
        case 15:
          echo "The dark is afraid of Chuck Norris.";
          break;
        case 16:
          echo "Chuck Norris once had a heart attack. His heart lost.";
          break;
        case 17:
          echo "When Chuck Norris does a pushup, he’s pushing the Earth down.";
          break;
        case 18:
          echo "Chuck Norris doesn’t cheat death. He wins fair and square.";
          break;
        case 19:
          echo "Chuck Norris is the reason why Waldo is hiding.";
          break;
        }
    ?>
    </p>
    <p>
      <small>Reload the page for a new joke</small>
    </p>
  </body>
</html>

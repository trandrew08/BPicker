<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href= "./style/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.js" ></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset=utf-8 />
  </head>
  <body ontouchstart="" ontouchend="">
    <nav id="nav-bar-custom" class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <!--BUTTON FOR COLLAPSIBLE MENU-->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapsed_navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="navbar-brand navbar-left">
            <img src="./img/octo_logo.png" alt="logo_octo"/>
            OCTO CONSULTING
          </div>
        </div>

        <div class="collapse navbar-collapse" id="collapsed_navbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a id="button_home">Home</a></li>

            <li><a id="button_about">About</a></li>

            <li><a id="button_contact_us">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="main-card">

      <!--WELCOME CARD-->
      <div id="welcome_card" class="w3-card-4" style="text-align:center">
        <header class="w3-container header">
          <h3>Do I want Blockchain?</h3>
        </header>

        <div class="w3-container">
          <div class="w3-card-2 w3-hover-shadow">
            <div class="w3-container" style="text-align:center;display:inline-block;width:100%">
              <p style="display:inline-block">
                <h4>Hey there!</h4>
                <span>I'm sure you're here because you are curious about Blockchain. Sometimes the newest and trendiest technology might not be right for your solution. This is an interactive little app that can help you determine whether you should use Blockchain for your project. Have fun!</span>
              </p>
            </div>
          </div>
        </div>

        <footer>
          <div class="w3-container">
            <button id="button_start" class="w3-button w3-round w3-green" style="margin:10px">GETTING STARTED</button>
          </div>
        </footer>
      </div>


      <!--ABOUT CARD-->
      <div id="about_card" class="w3-card-4" style="text-align:center;display:none">
        <header class="w3-container header">
          <h3>About this tool</h3>
        </header>
        <div class="w3-container">
          <p style="display:inline-block">
              <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
            </p>
        </div>
      </div>

      <!--CONTACT US CARD-->
      <div id="contact_us_card" class="w3-card-4" style="text-align:center;display:none">
        <header class="w3-container header">
          <h3>How To Contact Octo</h3>
        </header>
        <div class="w3-container">
          <p style="display:inline-block">
              <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
            </p>
        </div>
      </div>


      <!--DATABASE CARD-->
      <div id="database_card" class="w3-card-4" style="text-align:center;display:none">
        <header class="w3-container header">
          <h3>Does your project need a database?</h3>
        </header>

        <div class="w3-container">
          <div class="w3-card-2 w3-hover-shadow">

            <div class="w3-container" style="text-align:center;display:inline-block;width:100%">
              <img src="./img/database.png" alt="public_network" style="width:100px;height:100px;margin-top:10px"/>
            </div>
            <div class="w3-container" style="text-align:center;display:inline-block;width:100%">
              <p style="display:inline-block">
                <h4>Overview</h4>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
              </p>
            </div>
          </div>
        </div>

        <footer>
          <div class="w3-container">
            <button id="button_yes_1" class="w3-button w3-round w3-green" style="margin:5px">YES</button>
            <button id="button_no_1" class="w3-button w3-round w3-red" style="margin:5px">NO</button>
          </div>
        </footer>
      </div>

      <!--SHARED WRITE ACCESS CARD-->
      <div id="shared_write_access_card" class="w3-card-4" style="text-align:center;display:none">
        <header class="w3-container header">
          <h3>Does it require shared write access?</h3>
        </header>

        <div class="w3-container">
          <div class="w3-card-2 w3-hover-shadow">

            <div class="w3-container" style="text-align:center;display:inline-block;width:100%">
              <img src="./img/database.png" alt="public_network" style="width:100px;height:100px;margin-top:10px"/>
            </div>
            <div class="w3-container" style="text-align:center;display:inline-block;width:100%">
              <p style="display:inline-block">
                <h4>Overview</h4>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
              </p>
            </div>
          </div>
        </div>

        <footer>
          <div class="w3-container">
            <button id="button_yes_2" class="w3-button w3-round w3-green" style="margin:5px">YES</button>
            <button id="button_no_2" class="w3-button w3-round w3-red" style="margin:5px">NO</button>
            <button id="button_back_shared_write_access" class="w3-button w3-round w3-indigo" style="margin:5px">BACK</button>
          </div>
        </footer>
      </div>

      <!--TRUSTED PARTICIPANT CARD-->
      <div id="trusted_participant_card" class="w3-card-4" style="text-align:center;display:none">
        <header class="w3-container header">
          <h3>Are all participants known and trusted?</h3>
        </header>

        <div class="w3-container">
          <div class="w3-card-2 w3-hover-shadow">

            <div class="w3-container" style="text-align:center;display:inline-block;width:100%">
              <img src="./img/database.png" alt="public_network" style="width:100px;height:100px;margin-top:10px"/>
            </div>
            <div class="w3-container" style="text-align:center;display:inline-block;width:100%">
              <p style="display:inline-block">
                <h4>Overview</h4>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
              </p>
            </div>
          </div>
        </div>

        <footer>
          <div class="w3-container">
            <button id="button_yes_3" class="w3-button w3-round w3-green" style="margin:5px">YES</button>
            <button id="button_no_3" class="w3-button w3-round w3-red" style="margin:5px">NO</button>
            <button id="button_back_trusted_participant" class="w3-button w3-round w3-indigo" style="margin:5px">BACK</button>
          </div>
        </footer>
      </div>

      <!--UNIFIED INTEREST PARTICIPANTS-->
      <div id="unified_interest_participant_card" class="w3-card-4" style="text-align:center;display:none">
        <header class="w3-container header">
          <h3>Do all participants have the same goals?</h3>
        </header>

        <div class="w3-container">
          <div class="w3-card-2 w3-hover-shadow">

            <div class="w3-container" style="text-align:center;display:inline-block;width:100%">
              <img src="./img/database.png" alt="public_network" style="width:100px;height:100px;margin-top:10px"/>
            </div>
            <div class="w3-container" style="text-align:center;display:inline-block;width:100%">
              <p style="display:inline-block">
                <h4>Overview</h4>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
              </p>
            </div>
          </div>
        </div>

        <footer>
          <div class="w3-container">
            <button id="button_yes_4" class="w3-button w3-round w3-green" style="margin:5px">YES</button>
            <button id="button_no_4" class="w3-button w3-round w3-red" style="margin:5px">NO</button>
            <button id="button_back_unified_interest_participant" class="w3-button w3-round w3-indigo" style="margin:5px">BACK</button>
          </div>
        </footer>
      </div>

      <!--TRUSTED THIRD PARTY-->
      <div id="trusted_third_party_card" class="w3-card-4" style="text-align:center;display:none">
        <header class="w3-container header">
          <h3>Do you have a 3rd party that might need access to your system?</h3>
        </header>

        <div class="w3-container">
          <div class="w3-card-2 w3-hover-shadow" >

            <div class="w3-container" style="text-align:center;display:inline-block;width:100%">
              <img src="./img/database.png" alt="public_network" style="width:100px;height:100px;margin-top:10px"/>
            </div>
            <div class="w3-container" style="text-align:center;display:inline-block;width:100%">
              <p style="display:inline-block">
                <h4>Overview</h4>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
              </p>
            </div>
          </div>
        </div>

        <footer>
          <div class="w3-container">
            <button id="button_yes_5" class="w3-button w3-round w3-green" style="margin:5px">YES</button>
            <button id="button_no_5" class="w3-button w3-round w3-red" style="margin:5px">NO</button>
            <button id="button_back_trusted_third_party" class="w3-button w3-round w3-indigo" style="margin:5px">BACK</button>
          </div>
        </footer>
      </div>


      <!--FUNCTIONALITY CONTROL-->
      <div id="functionality_control_card" class="w3-card-4" style="text-align:center;display:none">
        <header class="w3-container header">
          <h3>Do you need tight control over the system's functionalities?</h3>
        </header>

        <div class="w3-container">
          <div class="w3-card-2 w3-hover-shadow" >

            <div class="w3-container" style="text-align:center;display:inline-block;width:100%">
              <img src="./img/database.png" alt="public_network" style="width:100px;height:100px;margin-top:10px"/>
            </div>
            <div class="w3-container" style="text-align:center;display:inline-block;width:100%">
              <p style="display:inline-block">
                <h4>Overview</h4>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
              </p>
            </div>
          </div>
        </div>

        <footer>
          <div class="w3-container">
            <button id="button_yes_6" class="w3-button w3-round w3-green" style="margin:5px">YES</button>
            <button id="button_no_6" class="w3-button w3-round w3-red" style="margin:5px">NO</button>
            <button id="button_back_functionality_control" class="w3-button w3-round w3-indigo" style="margin:5px">BACK</button>
          </div>
        </footer>
      </div>


      <!--CONSENSUS-->
      <div id="consensus_card" class="w3-card-4" style="text-align:center;display:none">
        <header class="w3-container header">
          <h3>Where is consensus determined?</h3>
        </header>

        <div class="w3-container">
          <div class="w3-card-2 w3-hover-shadow" >

            <div class="w3-container" style="text-align:center;display:inline-block;width:100%">
              <img src="./img/database.png" alt="public_network" style="width:100px;height:100px;margin-top:10px"/>
            </div>
            <div class="w3-container" style="text-align:center;display:inline-block;width:100%">
              <p style="display:inline-block">
                <h4>Consensus Overview</h4>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
              </p>
            </div>
          </div>
        </div>

        <footer>
          <div class="w3-container">
            <button id="button_intra" class="w3-button w3-round w3-green" style="margin:5px">INTRA FIRM</button>
            <button id="button_inter" class="w3-button w3-round w3-green" style="margin:5px">INTER FIRM</button>
            <button id="button_back_consensus" class="w3-button w3-round w3-indigo" style="margin:5px">BACK</button>
          </div>
        </footer>
      </div>

      <!--TRANSACTION MODE-->
      <div id="transaction_mode_card" class="w3-card-4" style="text-align:center;display:none">
        <header class="w3-container header">
          <h3>What about the visibility of your network transactions?</h3>
        </header>

        <div class="w3-container">
          <div class="w3-card-2 w3-hover-shadow" >

            <div class="w3-container" style="text-align:center;display:inline-block;width:100%">
              <img src="./img/database.png" alt="public_network" style="width:100px;height:100px;margin-top:10px"/>
            </div>
            <div class="w3-container" style="text-align:center;display:inline-block;width:100%">
              <p style="display:inline-block">
                <h4>Overview</h4>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
              </p>
            </div>
          </div>
        </div>

        <footer>
          <div class="w3-container">
            <button id="button_public" class="w3-button w3-round w3-green" style="margin:5px">PUBLIC</button>
            <button id="button_private" class="w3-button w3-round w3-green" style="margin:5px">PRIVATE</button>
            <button id="button_back_transaction_mode" class="w3-button w3-round w3-indigo" style="margin:5px">BACK</button>
          </div>
        </footer>
      </div>

      <!--PUBLIC BLOCKCHAIN-->
      <div id="public_blockchain_card" class="w3-card-4" style="text-align:center;display:none">
        <header class="w3-container header">
          <h3>OUR RECOMMENDATION</h3>
        </header>

        <div class="w3-container">
          <div class="w3-card-2 w3-hover-shadow" >

            <div class="w3-container" style="text-align:center;display:inline-block;width:100%">
              <img src="./img/database.png" alt="public_network" style="width:100px;height:100px;margin-top:10px"/>
            </div>
            <div class="w3-container" style="text-align:center;display:inline-block;width:100%">
              <p style="display:inline-block">
                <h4>A PUBLIC BLOCKCHAIN</h4>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
              </p>
            </div>
          </div>
        </div>
        <footer>
          <div class="w3-container">
            <button id="button_back_public_blockchain" class="w3-button w3-round w3-indigo" style="margin:5px">BACK</button>
            <button id="button_reset_public_blockchain" class="w3-button w3-round w3-orange" style="margin:5px">RESET</button>
          </div>
        </footer>
      </div>

      <!--HYBRID BLOCKCHAIN-->
      <div id="hybrid_blockchain_card" class="w3-card-4" style="text-align:center;display:none">
        <header class="w3-container header">
          <h3>OUR RECOMMENDATION</h3>
        </header>

        <div class="w3-container">
          <div class="w3-card-2 w3-hover-shadow" >

            <div class="w3-container" style="text-align:center;display:inline-block;width:100%">
              <img src="./img/database.png" alt="public_network" style="width:100px;height:100px;margin-top:10px"/>
            </div>
            <div class="w3-container" style="text-align:center;display:inline-block;width:100%">
              <p style="display:inline-block">
                <h4>A HYBRID BLOCKCHAIN</h4>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
              </p>
            </div>
          </div>
        </div>
        <footer>
          <div class="w3-container">
            <button id="button_back_hybrid_blockchain" class="w3-button w3-round w3-indigo" style="margin:5px">BACK</button>
            <button id="button_reset_hybrid_blockchain" class="w3-button w3-round w3-orange" style="margin:5px">RESET</button>
          </div>
        </footer>
      </div>

      <!--PRIVATE BLOCKCHAIN-->
      <div id="private_blockchain_card" class="w3-card-4" style="text-align:center;display:none">
        <header class="w3-container header">
          <h3>OUR RECOMMENDATION</h3>
        </header>

        <div class="w3-container">
          <div class="w3-card-2 w3-hover-shadow" >

            <div class="w3-container" style="text-align:center;display:inline-block;width:100%">
              <img src="./img/database.png" alt="public_network" style="width:100px;height:100px;margin-top:10px"/>
            </div>
            <div class="w3-container" style="text-align:center;display:inline-block;width:100%">
              <p style="display:inline-block">
                <h4>A PRIVATE BLOCKCHAIN</h4>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
              </p>
            </div>
          </div>
        </div>
        <footer>
          <div class="w3-container">
            <button id="button_back_private_blockchain" class="w3-button w3-round w3-indigo" style="margin:5px">BACK</button>
            <button id="button_reset_private_blockchain" class="w3-button w3-round w3-orange" style="margin:5px">RESET</button>
          </div>
        </footer>
      </div>

      <!--NO BLOCKCHAIN CARD-->
      <div id="no_blockchain_card" class="w3-card-4" style="text-align:center;display:none">
        <header class="w3-container header">
          <h3>Blockchain is NOT for you!</h3>
        </header>

        <div class="w3-container">
          <div class="w3-card-2 w3-hover-shadow" >

            <div class="w3-container" style="text-align:center;display:inline-block;width:100%">
              <img src="./img/question_mark.svg" alt="public_network" style="width:100px;height:100px;margin-top:10px"/>
            </div>
            <div class="w3-container" style="text-align:center;display:inline-block;width:100%">
              <p style="display:inline-block">
                <h4>Reason</h4>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
              </p>
            </div>
          </div>
        </div>
        <footer>
          <div class="w3-container">
            <button id="button_back_no_blockchain" class="w3-button w3-round w3-green" style="margin:5px">BACK</button>
          </div>
        </footer>
      </div>
    </div>
  </body>
  <div id="page-footer" class="w3-container w3-black" style="text-align:center">
    <span style="color:white">Copyright © <?php echo date("Y");?> Octo Consulting Group</span>
  </div>

  <script type="text/javascript" src="./js/main.js"/>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/c39dcdfb59.js"></script>
</html>

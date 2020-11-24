<?php
/* @var $this yii\web\View */
?>
<h1>message/index</h1>
<html>
    <head>
        <meta charset="utf-8">
        <title>Websocket 101</title>
        <script src="js/node_modules/socket.io/node_modules/socket.io-client/dist/socket.io.js"></script>
        <script src="js/nodeClient.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/3.0.1/socket.io.js" integrity="sha512-vGcPDqyonHb0c11UofnOKdSAt5zYRpKI4ow+v6hat4i96b7nHSn8PQyk0sT5L9RECyksp+SztCPP6bqeeGaRKg==" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
           
</head>
<body>


    <div class="col-container-fluid d-flex h-100 flex-column mt-2">
        <div class="row">
          <div class="col-sm-3 border-right border-left border-top">
          <h4>Messages
            <div class="btn-group align-right" style="float:right;">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false" align="right">
  </button>
  <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left dropdown-menu-justify-align-right">
    <button class="dropdown-item" type="button">All conversations</button>
    <button class="dropdown-item" type="button">Archived conversations</button>
    <button class="dropdown-item" type="button">Unread conversations</button>
  </div>
</div>
        </h4>
            <!-- <h4 class="mt-2">Messages
            <div class="btn-group align-right" style="float:right;">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false" align="right">
          
        </button>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left dropdown-menu-justify-align-right">
          <button class="dropdown-item" type="button">All conversations</button>
          <button class="dropdown-item" type="button">Archived conversations</button>
          <button class="dropdown-item" type="button">Unread conversations</button>
            </div>
            </div>
            </h4> -->
          </div>
          <div class="col-sm-6 border-right border-left border-top">
            <p class="mt-2"></p>
          </div>
          <div class="col-sm-3 border-right border-left border-top">
           <h4 class="mt-2"> Details
           <button type="button" class="close" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
           </h4>
          </div>
        </div>
      </div>
      
      <div class="col-container-fluid d-flex h-100 flex-column">
        <div class="row">
          <div class="col-sm-3 border-right border-left border-top text-center" style="height: 36rem;">
          <h6 class="mt-5"><b>You have unread messages</b></h6>
          <p class="mt-4">When you book a site trip or experience,<br>messages from your seller will show up here</p>
          <div class="col-auto">
                          <button class="btn btn-outline-secondary border-left rounded rounded-right rounded-left" type="button">
                              Explore shambani
                </button>
                      </div>
          </div>
          <div class="col-sm-6 border-right border-left border-top" style="height: 36rem;">
            <div id="mario-chat">
                <!-- <h2>Mario Chat</h2> -->
                <div id="chat-window">
                    <div id="output"></div>
                    <div id="feedback"></div>
                </div>
                <input id="handle" type="text" placeholder="handle"/>
                <input id="message" type="text" placeholder="Message"/>
                <button id="send">Send</button>
            </div>
           
          </div>
          <div class="col-sm-3 border-right border-left border-top" style="height: 36rem;">
            <div class="card" style="width: 18rem;">
              <img src="../images/Bahari.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-dark btn-lg btn-block">Keep Searching</button>
              </div>
              <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Mt Kenya Guest House</li>
                  <li class="list-group-item">Hosted By Nderitu</li>
                  <li class="list-group-item">Check In</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

       
      <script src="chat.js"></script>        
</body>   
 
</html>
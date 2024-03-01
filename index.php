<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Bot</title>

    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div id="starting">
        <div id="title">
            ChatBot &nbsp; <img src="chatbot-icon.png" height="80px" width="80px">
        </div>
        <div id="background-content">
        At a technical level, a chatbot is a computer program that simulates human conversation to solve customer queries. When a customer or a lead reaches out via any channel, the chatbot is there to welcome them and solve their problems. They can also help the customers lodge a service request, send an email or connect to human agents if need be.
        If this reminds you of a telephonic customer care number where you choose the options according to your need, you would be very correct. That phone tree is also a chatbot, though a very primitive one. Modern chatbots do the same thing by holding a conversation with customers. This conversation may be in the form of text, voice or a hybrid of both.
        </div>
        <div id="team">
            <div id="team-title">
                Team Members:
            </div>
            <div id="team-members">
                <ol>
                    <li>Aryan Kumar Rana</li>
                    <li>Akshat Kumar Kakran</li>
                    <li>Jatin Kumar</li>
                </ol>
            </div>
        </div>
    </div>


    <!-- CHAT BAR BLOCK -->
<div class="chat-bar-collapsible">
        <button id="chat-button" type="button" class="collapsible"><img src="profile_image.png">Chat with us! &nbsp;
            <i id="chat-icon" style="color: #fff; paddng-left:3px;" class="fa fa-comments"></i>
        </button>

        <div class="contentss">
            <div class="full-chat-block">
                <!-- Message Container -->
                <div class="outer-container">
                    <div class="chat-container">
                        <!-- Messages -->
                        <div id="chatbox">
                            <h5 id="chat-timestamp"></h5>
                            <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
                        </div>

                        <!-- User input box -->
                        <form method="POST" action="chatbot_db.php">
                        <div class="chat-bar-input-block">
                            <div id="userInput">
                                <input id="textInput" class="input-box" type="text" name="content"
                                    placeholder="Tap 'Send' to send a message">
                                <p></p>
                            </div>

                            <div class="chat-bar-icons">
                                <i id="start-btn" style="color: black;" class="fa fa-microphone" 
                                    onclick="microPhone()"></i>
                                <i id="chat-icon" style="color: crimson;" class="fa fa-fw fa-heart"
                                    onclick="heartButton()"></i>
                                <i id="chat-icon" aria-hidden = "true" class="fa fa-paper-plane"
                                    onclick="sendButton()"></i>
                            </div>
                        </div>
                        </form>

                        <div id="chat-bar-bottom">
                            <p></p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="script/chat.js"></script>
<script src="script/responses.js"></script>
<script src="script/index.js"></script>
</body>

</html>
function getBotResponse(input) {
    //rock paper scissors
    if (input == "rock") {
        return "paper";
    } else if (input == "paper") {
        return "scissors";
    } else if (input == "scissors") {
        return "rock";
    }

    // Simple responses
    if (input == "hello") {
        return "Hello there!";
    } else if (input == "goodbye") {
        return "Talk to you later!";
    } else if (input == "can you help me with something") {
        return "Yes, please procede with your question";
    } else if (input == "what is my name") {
        return "Your name is Aryan Kumar Rana";   
    } else if (input == "jai shree ram") {
        return "Jai Shree Ram";
    } else {
        return "Try asking something else!";
    }

    
}
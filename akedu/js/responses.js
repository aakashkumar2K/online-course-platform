function getBotResponse(input) {
    //rock paper scissors
    if (input == "what are the courses offered") {
        return "1.python  2.web development  3.machine learning   4.java  5.data structures  6.graphics and many more";
    } else if (input == "are the courses free") {
        return "some courses are free and some are paid";
    } else if (input == "how can i contact dr puja munjal") {
        return "you  can contact her by email:abc@gmail.com";
    }

    // Simple responses
    if (input == "hello "||"hey"||"hye") {
        return "Hello there!";
    } else if (input == "goodbye"||"bye") {
        return "Talk to you later!";
    } else {
        return "Try asking something else!";
    }
}
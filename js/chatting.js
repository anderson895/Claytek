function getQueryParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param); // Returns the value of the parameter
}




$('#sendmeessages').on('click', function () {

    const senderId = getQueryParam('sender_id'); // Extract sender_id from URL
    if (!senderId) {
        console.error("Sender ID is missing in the URL.");
        return;
    }

    const messageInput = $('#chat-input');
    const message = messageInput.val().trim();
  
    if (message) {
        $.ajax({
            url: "backend/end-points/send_messages.php",
            method: "POST",
            data: { message: message,senderId:senderId },
            success: function (response) {
                console.log(response);
                if (response =="success") {
                    messageInput.val(""); 
                    fetchChatContent();   
                } else {
                    console.error(response.error || "Failed to send message.");
                }
            },
            error: function () {
                console.error("Error sending message.");
            }
        });
    } else {
        alert("Message cannot be empty!");
    }
  });


function fetchChatContent() {
    const senderId = getQueryParam('sender_id'); // Extract sender_id from URL
    if (!senderId) {
        console.error("Sender ID is missing in the URL.");
        return;
    }

    $.ajax({
        url: "backend/end-points/chatcontent.php", // Path to chat_content.php
        method: "GET",
        data: { sender_id: senderId }, // Pass sender_id as a query parameter
        success: function (data) {
        
            $('#chat-content').html(data); // Load chat content into the container
        },
        error: function () {
            console.error("Failed to fetch chat messages.");
        }
    });
}

// Fetch messages every 5 seconds
setInterval(fetchChatContent, 2000);

// Fetch messages on initial load
$(document).ready(fetchChatContent);

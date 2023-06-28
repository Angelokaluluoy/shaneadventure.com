<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Messages</title>
  <style>
  /* CSS for the messaging page */
  body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 20px;
}

.container {
  max-width: 600px;
  margin: 0 auto;
  border: 1px solid #ccc;
  padding: 20px;
  background-color: #f7f7f7;
}

h1 {
  text-align: center;
  margin-bottom: 20px;
}

.message {
  margin-bottom: 10px;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.message .sender {
  font-weight: bold;
  margin-bottom: 5px;
}

.message .timestamp {
  font-size: 0.8em;
  color: #888;
}

</style>

</head>
<body>
  <div class="container">
    <h1>Messages</h1>

    <div id="message-list">
      <!-- Messages will be dynamically added here -->
      <?php
      include 'receive-email.php';
      ?>
    </div>
  <script>
    // JavaScript for handling messages
    document.addEventListener("DOMContentLoaded", function() {
      const messageList = document.getElementById("message-list");
      const messageInput = document.getElementById("message-input");
      const sendButton = document.getElementById("send-button");

      sendButton.addEventListener("click", function() {
        const messageText = messageInput.value.trim();
        if (messageText !== "") {
          const message = createMessage("You", messageText);
          messageList.appendChild(message);
          messageInput.value = "";
        }
      });

      function createMessage(sender, text) {
        const message = document.createElement("div");
        message.classList.add("message");

        const senderElement = document.createElement("div");
        senderElement.classList.add("sender");
        senderElement.textContent = sender;
        message.appendChild(senderElement);

        const textElement = document.createElement("div");
        textElement.textContent = text;
        message.appendChild(textElement);

        const timestamp = document.createElement("div");
        timestamp.classList.add("timestamp");
        timestamp.textContent = getCurrentTime();
        message.appendChild(timestamp);

        return message;
      }

      function getCurrentTime() {
        const now = new Date();
        const hours = now.getHours().toString().padStart(2, "0");
        const minutes = now.getMinutes().toString().padStart(2, "0");
        const timeString = `${hours}:${minutes}`;
        return timeString;
      }
    });
  </script>
</body>
</html>

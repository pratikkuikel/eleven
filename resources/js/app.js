import "./bootstrap";

Echo.channel("chat").listen("MessageEvent", (event) => {
    console.log(event.message);

    const messageBox = document.getElementById("messageBox");
    const messageDiv = document.createElement("div");
    const messageText = document.createTextNode(event.message);
    messageDiv.appendChild(messageText);
    messageBox.appendChild(messageDiv);
    messageBox.scrollTop = messageBox.scrollHeight;
});

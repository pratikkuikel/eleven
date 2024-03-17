<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div x-data="chat()">
        <h1>Laravel Reverb self chat</h1>
        <div id="messageBox">
        </div>
        <input type="text" x-model="newMessage" @keyup.enter="sendMessage">
    </div>

    <script defer>
        function chat() {
            return {
                messages: [],
                newMessage: '',

                sendMessage() {
                    fetch('/send-message', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            message: this.newMessage
                        })
                    }).then(response => {
                        if (response.ok) {
                            this.newMessage = '';
                        } else {
                            console.error('Failed to send message');
                        }
                    }).catch(error => {
                        console.error('Error:', error);
                    });
                }
            }
        }
    </script>

</body>

</html>

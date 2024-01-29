<div class="app-chat-type">
    <div class="input-group mb-0">
        <div class="input-group-prepend d-none d-sm-flex">
            <span class="input-group-text">
                <i class="fa fa-smile-o"></i>
            </span>
        </div>
        <input id="userInput" class="form-control" placeholder="Type here..." type="text">
        <div class="input-group-prepend">
            <span class="input-group-text" onclick="askQuestion()">
                <i class="fa fa-paper-plane"></i>
            </span>
        </div>
    </div>
</div>

<script>
    function askQuestion() {
        // Get the user's input
        const userInput = document.getElementById('userInput').value;

        // Replace 'YOUR_API_KEY' with your actual API key
        const apiKey = 'YOUR_API_KEY';

        // Replace this URL with the actual API endpoint for question-answering
        const apiUrl = 'https://example.com/question-answering-api';

        // Make a request to the API
        fetch(apiUrl, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': `Bearer ${apiKey}`,
            },
            body: JSON.stringify({ question: userInput }),
        })
        .then(response => response.json())
        .then(data => {
            // Display the answer (replace 'answerContainer' with the actual container)
            alert('Answer: ' + data.answer);
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
</script>
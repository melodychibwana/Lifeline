<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Doctor</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container mt-5">
        
        <div class="row mt-1">
            <div class="col-md-6 col-sm-10 text-center">
                <h1 class="display-4 font-weight-normal">My Doctor</h1>
                <img src="images/bot.jpg">
            </div>
            <div class="col-md-4 col-sm-8 offset-1 bg-white p-3" id="outer">
                <div class="main"></div>
                <div class="input-group">
                    <input type="text" class="form-control" name="" placeholder="Ask any question" id="inp-text" style="width: 50px;" >

                    <div class="input-group-append">
                        <button class="btn btn-primary btn-lg" id="send"><i class="far fa-paper-plane"></i></button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        document.getElementById("inp-text").focus();
document.getElementsByTagName("body")[0].addEventListener("keypress", function (e) {
    if (e.key == "Enter") {
        send();
    }
});
document.getElementById("send").addEventListener("click", send);

function send() {
    var text = document.getElementById("inp-text").value;
    if (text == "") {

    } else {
        var request = document.createElement("div");
        request.className = "request";
        request.innerText = text;

        document.getElementsByClassName("main")[0].appendChild(request);
        document.getElementById("inp-text").value = "";

        fetch(`https://api.monkedev.com/fun/chat?msg=${text}`)
            .then(response => response.json())
            .then(function (data) {
                var response = document.createElement("div");
                response.className = "response";
                response.innerText = data.response;

                setTimeout(function () {
                    document.getElementsByClassName("main")[0].appendChild(response);
                    var a = document.getElementsByClassName("main")[0].scrollHeight;
                    document.getElementsByClassName("main")[0].scrollTop = a + 100;
                }, 1000)
            });

        var a = document.getElementsByClassName("main")[0].scrollHeight;
        document.getElementsByClassName("main")[0].scrollTop = a;
    }
}

    </script>

</body>
</html>

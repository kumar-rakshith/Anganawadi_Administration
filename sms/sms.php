<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>How to Send SMS</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body class="bg-light" >
        <div class="container mt-5">
            <div class="row justify-content-md-center">
                <div class="">
                    <h3 class="text-center">Send SMS</h3>
                </div>
            </div>
        </div>


             
    <div class="container mt-3">
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <form method="POST" action="">
                  
                  <label for="lblMobileNumber">Mobile Number</label>
                  <input type="tel" name="userMobile" class="form-control" id="number" placeholder="919191919191" pattern="[789][0-9]{9}" oninvalid="Please Enter Proper Mobile Number" >
                  
                  <label for="lblMessage">Message</label>
                  <textarea class="form-control"  name="userMessage"  id="message" rows="3"  placeholder="Enter your message here" maxlength="158"></textarea>     

                  <button type="submit" name="sendotp" class="btn btn-outline-primary mt-3" id="btnSend">Send</button>
                  
            </div>
        </div>
    </div>
    <div class="container mt-5">
            <div class="row justify-content-md-center">
                <div class="col-md-4">
                    <p  id-"response" class="text-center"></p>
                </div>
            </div>
        </div>
</body>
<script type="text/javascript">
function clearAllFields(){
    number.value="";
    textMessage.value="";
}
</script>
</html>

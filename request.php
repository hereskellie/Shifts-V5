<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta content="" name="description">
    <meta content="" name="author">
    <link href="../../favicon.ico" rel="icon">
    <title>Shifts</title><!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.firebase.com/js/client/2.4.1/firebase.js">
    </script>
    <script src=
    'https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'>
    </script>
    <script src="requests.js" type="text/javascript">
    </script><!-- Custom styles for this template -->
    <link href="softwareproject.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <script src="ie-emulation-modes-warning.js">
    </script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body background="dark.jpg">
    <div id='cssmenu'>
        <ul>
            <li>
                <a href='roster0702.php'><span>Rosters</span></a>
            </li>
            <li class='active'>
                <a href='request.php'><span>Requests</span></a>
            </li>
            <li>
                <a href='chat2.php'><span>Chat</span></a>
            </li>
            <li class='last'>
                <a href='manager.php'><span>Manager</span></a>
            </li>
            <li class='pull-right' id='logout'>
                <a href='index.php'><span>Log Out</span></a>
            </li>
        </ul>
    </div>
    <center>
        <img height="100" src="company.png" width="750">
    </center>
    <center>
    <h1>Submit a Request</h1>
    <div id="chatwindow">
            <label for="nameInput"><font color="white">Name:</font></label>
            <input id='nameInput' placeholder='enter your name' type='text'></br>
            <label><font color="white">Type of Request:</font></label> <input id=
            'typeInput' placeholder='Type a request' type='text'></br>
            <label><font color="white">Reason for Request:</font></label></br>
             <input id=
            'requestInput' placeholder='Type a message and then press enter' type='text' style="height:200px;width:400px;font-size:14pt;">
    </div>

</body>
</html>
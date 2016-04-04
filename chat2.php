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
    <!-- Custom styles for this template -->
    <link href="softwareproject.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <script src="ie-emulation-modes-warning.js">
    </script>
    <script src="https://cdn.firebase.com/js/client/2.2.1/firebase.js">
    </script>
    <script src=
    'https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'>
    </script>
    <script src="chatjava.js" type="text/javascript">
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
            <li>
                <a href='dayoff.php'><span>Request</span></a>
            </li>
            <li class='active'>
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
        <h1><font color="white">Message Members of Staff</font></h1>
        <div id="chatwindow">
            <label for="nameInput"><font color="white">Name:</font></label>
            <input id='nameInput' placeholder='enter your name' type='text'>
            <div id="messagewindow">
                <ul class="example-chat-messages" id='example-messages'></ul>
            </div><label><font color="white">Message:</font></label> <input id=
            'messageInput' placeholder='Type a message...' type='text'>
        </div>
    </center><!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ie10-viewport-bug-workaround.js">
    </script>
</body>
</html>
<!HTML>
<head>
  <style>
    code {
      background-color: #F6E3CE;
      margin-left: 20px;
    }
  </style>
  <title>C-Ryan's Twitch Mult-Stream Setup</title>
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script>
  $(document).ready(function(){
      $( "#clickButton" ).click(function() {
        var theURL = "/livestream/index.php?group=custom&channels="+$('#streams').val()+"&h="+$('#sHeight').val()+"&w="+$('#sWidth').val();
        $("#resPan").html("<input type=text value="+theURL+" size=100>");
        window.open(theURL);
      })
		});
  </script>
  
</head>

<H1>
  C-Ryan's Twitch Mult-Stream Setup
</H1>

<table>
<tr><td>
Enter the twitch usernames here: <input type=text id="streams" size=40><br>
Enter multiple by seperating with a comma.<br>
Twitch username is as follows: <code>http://twitch.tv/<i>username</i></code>
  </td></tr> 
<tr><td>
<br>Stream Width: <input type=text id="sWidth" size=4 value="400"> <br>
Stream Height: <input type=text id="sHeight" size=4 value="400"><br>
All streams will be this size.
</td></tr>
<tr><td><button id="clickButton">
  Go!
  </button></td></tr>
</table>
<Br>
  <div id="resPan">
    
  </div>
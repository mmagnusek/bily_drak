<html> 
  <head> 
    <title>Client Flow Example</title> 
  </head> 
  <body> 
  <script> 
    function displayUser(user) {
      var userName = document.getElementById('userName');
      var greetingText = document.createTextNode('Greetings, '+ user.name + '.');
      userName.appendChild(greetingText);
    }

    var appID = '162182283836091';
    if (window.location.hash.length == 0) {
      var path = 'https://www.facebook.com/dialog/oauth?';
      var queryParams = ['client_id=' + appID,'redirect_uri=http://www.fstore.cz','response_type=token'];
      var query = queryParams.join('&');
      var url = path + query;
      window.open(url);
    } else {
      var accessToken = window.location.hash.substring(1);
      var path = "https://graph.facebook.com/me?";
      var queryParams = [accessToken, 'callback=displayUser'];
      var query = queryParams.join('&');
      var url = path + query;

      var script = document.createElement('script');
      script.src = url;
      document.body.appendChild(script);        
    }
  </script> 
  <p id="userName"></p> 
  </body> 
 </html>
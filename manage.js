function ban(mail, isBanned){
    var request = new XMLHttpRequest();
    request.onreadystatechange = function(){
      if(request.readyState == 4 && request.status == 200){

      }
    };
    request.open('POST', 'ban.php');
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    request.send(`mail=${mail}&isBanned=${isBanned}`);

}

function banDriver(mail, isBanned){
    var request = new XMLHttpRequest();
    request.onreadystatechange = function(){
      if(request.readyState == 4 && request.status == 200){

      }
    };
    request.open('POST', 'banDriver.php');
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    request.send(`mail=${mail}&isBanned=${isBanned}`);

}

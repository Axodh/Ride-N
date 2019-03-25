function ban(mail, table, isBanned){
var mailUser = mail;
var mailDriver = mail;
console.log(table);
    var request = new XMLHttpRequest();
    request.onreadystatechange = function(){
      if(request.readyState == 4 && request.status == 200){
      }
    };
    request.open('POST', 'ban.php');
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    if( mailUser.length > 1 && table == 'user'){
      request.send(`mailUser=${mailUser}&isBanned=${isBanned}&table=${table}`);
      console.log(mailUser);
    }else if(mailDriver.length > 1 && table == 'driver'){
      request.send(`mailDriver=${mailDriver}&isBanned=${isBanned}&table=${table}`);
      console.log(mailDriver);
    }
}

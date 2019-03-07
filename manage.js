function ban(mail){
    var request = new XMLHttpRequest();
    request.onreadystatechange = function(){
      if(request.readyState == 4 && request.status == 200){
        console.log(this.responseText);
      }
    };
    request.open('POST', 'ban.php');
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    request.send(`mail=${mail}`);

}

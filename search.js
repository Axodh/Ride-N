function research(){

  var res = document.getElementById("inlineFormInputGroup").value;

  var test = document.querySelectorAll("option:checked");

  var filterUser = test[0].value;
  var filterBan = test[1].value;



  if(res.length > 0 && filterUser.length > 0 && filterBan.length > 0){
    var request = new XMLHttpRequest();
    request.onreadystatechange = function(){
      if(request.readyState == 4 && request.status == 200){
          document.getElementById("display").innerHTML = this.responseText;
      }
    };
    request.open('POST', 'search.php');
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    request.send(`request=${res}&filterUser=${filterUser}&filterBan=${filterBan}`);
  }
}

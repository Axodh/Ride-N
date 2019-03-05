function research(){

  var res = document.getElementById("inlineFormInputGroup").value;
  if(res.length > 0){
    var request = new XMLHttpRequest();
    request.onreadystatechange = function(){
      if(request.readyState == 4 && request.status == 200){
        console.log(request.responseText);
      }
    };
    request.open('POST', 'search.php');
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    request.send(`request=${res}`);
  }
}

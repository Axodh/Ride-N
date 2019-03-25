function modify(table, mail, name, surname, addr, city, zip, number, age){
  var request = new XMLHttpRequest();
  request.onreadystatechange = function(){
    if(request.readyState == 4 && request.status == 200){
        document.getElementById("display").innerHTML = this.responseText;
    }
  };
  request.open('POST', 'modify.php');
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');


  if(table == 'user'){
    request.send(`table=${table}
      &mailUser=${mail}
      &nameUser=${name}
      &surnameUser=${surname}
      &addressUser=${addr}
      &cityUser=${city}
      &zipCode=${zip}
      &numberUser=${number}`);
  }else if(table == 'driver'){
    request.send(`table=${table}
      &mailDriver=${mail}
      &nameDriver=${name}
      &lastNameDriver=${surname}
      &addr=${addr}
      &number=${number}
      &age=${age}`);
  }
}

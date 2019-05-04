var elem = document.querySelector('.tabs');
var instance = M.Tabs.init(elem);

function research(){

  var res = document.getElementById("inlineFormInputGroup").value;

  var filter = document.querySelectorAll("option:checked");

  var filterUser = filter[0].value;
  var filterBan = filter[1].value;



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

function modify(table, mail, name, surname, addr, city, zip, number){
  var request = new XMLHttpRequest();
  request.onreadystatechange = function(){
    if(request.readyState == 4 && request.status == 200){
        document.getElementById("display").innerHTML = this.responseText;
    }
  };
  request.open('POST', 'modify.php');
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  var modal = document.getElementById(mail);
  var array = modal.getElementsByTagName("input");

  var mailUser = array[0].value;
  var nameUser = array[1].value;
  var surnameUser = array[2].value;
  var addressUser = array[3].value;
  var cityUser = array[4].value;
  var zipCode = array[5].value;
  var numberUser = array[6].value;


  if(table == 'user'){
    request.send(`table=${table}
      &mailUser=${mailUser}
      &nameUser=${nameUser}
      &surnameUser=${surnameUser}
      &addressUser=${addressUser}
      &cityUser=${cityUser}
      &zipCode=${zipCode}
      &numberUser=${numberUser}`);
  }
}

function modifyDriver(table, mailDriver, nameDriver, lastNameDriver, addr, number, age){
  var request = new XMLHttpRequest();
  request.onreadystatechange = function(){
    if(request.readyState == 4 && request.status == 200){
        document.getElementById("display").innerHTML = this.responseText;
    }
  };
  request.open('POST', 'modify.php');
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  var modal = document.getElementById(mailDriver);
  var array = modal.getElementsByTagName("input");

  var mailDriver = array[0].value;
  var nameDriver = array[1].value;
  var lastNameDriver = array[2].value;
  var addr = array[3].value;
  var number = array[4].value;
  var age = array[5].value;

  

  if(table == 'driver'){
   request.send(`table=${table}
     &mailDriver=${mailDriver}
     &nameDriver=${nameDriver}
     &lastNameDriver=${lastNameDriver}
     &addr=${addr}
     &number=${number}
     &age=${age}`);
   }
}

function openModal(mail){
    var modal = document.getElementById(mail);
    modal.style.display = 'block';
}

function closeModal(mail){
    var modal = document.getElementById(mail);
    modal.style.display = 'none';
}

function ban(mail, table, isBanned){
    var mailUser = mail;
    var mailDriver = mail;
    var request = new XMLHttpRequest();

    console.log(table);

    request.onreadystatechange = function() { if(request.readyState == 4 && request.status == 200){} };
    request.open('POST', 'ban.php');
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    if(mailUser.length > 1 && table == 'user') {
        request.send(`mailUser=${mailUser}&isBanned=${isBanned}&table=${table}`);
        console.log(mailUser);
    } else if (mailDriver.length > 1 && table == 'driver') {
        request.send(`mailDriver=${mailDriver}&isBanned=${isBanned}&table=${table}`);
        console.log(mailDriver);
    }
}

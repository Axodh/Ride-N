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
            if(request.readyState == 4 && request.status == 200){ document.getElementById("display").innerHTML = this.responseText; }
        };
        request.open('POST', 'search.php');
        request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        request.send(`request=${res}&filterUser=${filterUser}&filterBan=${filterBan}`);
    }
}

function modify(table, mail, name, surname, addr, city, zip, number, age){
    var request = new XMLHttpRequest();
    request.onreadystatechange = function(){
        if(request.readyState == 4 && request.status == 200){ document.getElementById("display").innerHTML = this.responseText; }
    };
    request.open('POST', 'modify.php');
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');


    if(table == 'user') {
        request.send(`table=${table}
        &mailUser=${mail}
        &nameUser=${name}
        &surnameUser=${surname}
        &addressUser=${addr}
        &cityUser=${city}
        &zipCode=${zip}
        &numberUser=${number}`);
    } else if(table == 'driver') {
        request.send(`table=${table}
        &mailDriver=${mail}
        &nameDriver=${name}
        &lastNameDriver=${surname}
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
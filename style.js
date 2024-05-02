let loggedin =false;
let userName;
let password;

while(!loggedin){
    userName = prompt("Enter your username");
    password = prompt("Enter your password");

    getElementById("username").value=userName;
    getElementById("password").value=password;
    if(userName === "admin" && password === "lastborn@98"){
        loggedin=true;
    }
    else{
        alert("Wrong username or password  ,Please Try again!" );
    }
}

let username;

document.getElementById("submitButton").onclick = function(){
    username = document.getElementById("mytext").value;
    document.getElementById("thisH1").textContent=`Hello,${username}`;
}
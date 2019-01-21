/*
const arr = [
    ["Juan", "Que risaaaa....", "2019-01-16 10:24:12"],
    ["Pedrito", "xd", "2019-01-16 01:12:00"],
    ["Maria", "relajense señores que la estan armando", "2019-01-16 00:48:31"],
    ["Juan", "Que risa tio....", "2019-01-14 21:32:06"],
    ["Juan", "Que risa....", "2018-12-16 12:32:42"],
    ["Pedrito", "Este es mi primer tweet tambien", "2018-12-15 15:24:32"],
    ["Maria", "Buenas, este es mi primer tweet", "2018-12-14 02:41:02"],
    ["Pedrito", "Ohh, que pasa señores", "2018-12-12 17:26:13"];
*/

const panel = document.getElementById('tweets');
const registeredUsers = ["pedrito", "juan", "maria"];

const checkUser = (user) => {
    console.log(user);
    return registeredUsers.includes(user) ? true : false;
}

const updateUI = (data) => {
    let text = "";
    // Reset message board
    panel.innerHTML = "";

    // Loop data and write messages
    for (let i = 0; i < data.length; i++) {
        let image = checkUser(data[i][0].toLowerCase()) ? data[i][0] : "anon" ;
        let date = dateTransform(data[i][2]);
        console.log(image);
        text += `<div class="tweet p-2"><div class="row"><div class="col-sm-4 col-md-3 col-lg-2 "><img class="rounded-cir" src="img/profile/${image}.jpg" alt="" srcset="" width="100%"></div><div class="col-sm-8 col-md-9 col-lg-10"><div class="tweet-header"><span><strong>${data[i][0]}</strong></span><span class="tweet-header-name"> @${data[i][0].toLowerCase()} · </span><span class="tweet-header-date">${date}</span></div><div class="tweet-content"><p>${data[i][1]}</p></div><div class="tweet-footer"><span class="button-comment"><i class="far fa-comment"></i>&nbsp5.8K&nbsp</span><span class="button-retweet"><i class="fas fa-retweet"></i>&nbsp39K&nbsp</span><span class="button-love"><i class="far fa-heart"></i>&nbsp123K</span></div></div></div></div>`
    }
    // Insertar los datos actualizados
    panel.insertAdjacentHTML('beforeend', text);
}


const dateTransform = (date) => {
    const months = ["ene.", "feb.", "mar.", "abr.", "may.", "jun.", "jul.", "ago.", "sep.", "oct.", "now.", "dic."];
    let startDate = new Date(date.slice(0, 10) + "T" + date.slice(11, 19) + "Z");
    let now = new Date();

    //console.log(startDate, now);
    dateDiff = Math.round((now - startDate) / 1000);
    dateDiff = Math.round(dateDiff / 60);
    dateDiff = Math.round(dateDiff / 60);

    if (dateDiff < 24) {
        return (dateDiff + " h");
    } else {
        if (now.getFullYear() == startDate.getFullYear()) {
            return startDate.getDate() + " " + months[startDate.getMonth()];
        } else {
            return startDate.getDate() + " " + months[startDate.getMonth()] + " " + startDate.getFullYear();
        }
    }
}

const addZero = i => {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}

const postMessage = () => {
    let name = document.getElementById('name').value;
    let msg = document.getElementById('msg').value;
    let now = new Date();
    let date = `${now.getFullYear()}-${now.getMonth()+1}-${now.getDate()}%20${addZero(now.getHours())}:${addZero(now.getMinutes())}:${addZero(now.getSeconds())}`;
    let data = `name=${name}&msg=${msg}&date=${date}`;

    let ajx = new XMLHttpRequest();
    ajx.onreadystatechange = () => {
        if (ajx.readyState == 4 && ajx.status == 200) {
            //document.getElementById("msg").innerHTML = ajx.responseText;
            updateUI(JSON.parse(ajx.responseText));
            //console.log(JSON.parse(ajx.responseText));
        }
    };
    ajx.open("POST", "utilities/main.php", true);
    ajx.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajx.send(data);
}

const select = () => {
    let data = "";
    let ajx = new XMLHttpRequest();
    ajx.onreadystatechange = () => {
        if (ajx.readyState == 4 && ajx.status == 200) {
            updateUI(JSON.parse(ajx.responseText));
        }
    };
    ajx.open("POST", "utilities/main2.php", true);
    ajx.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajx.send(data);
}

window.onload = function(){
    select();
}



const insertUser = () => {
    let name = document.getElementById('name').value;
    let msg = document.getElementById('msg').value;
    let now = new Date();
    let date = `${now.getFullYear()}-${now.getMonth()+1}-${now.getDate()}%20${addZero(now.getHours())}:${addZero(now.getMinutes())}:${addZero(now.getSeconds())}`;
    let data = `name=${name}&msg=${msg}&date=${date}`;

    let ajx = new XMLHttpRequest();
    ajx.onreadystatechange = () => {
        if (ajx.readyState == 4 && ajx.status == 200) {
            //document.getElementById("msg").innerHTML = ajx.responseText;
            updateUI(JSON.parse(ajx.responseText));
            //console.log(JSON.parse(ajx.responseText));
        }
    };
    ajx.open("POST", "utilities/main.php", true);
    ajx.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajx.send(data);
}
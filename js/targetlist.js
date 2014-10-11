var timestamp = 0;
function appendRow(id, message, time, ip) {
    var table = document.getElementById('table');
    var rowCount = table.rows.length;
    var row = table.insertRow(rowCount);
    console.log(row);
    var date = timeConverter(time);
    ip = intToIP(ip);
    row.insertCell(0).innerHTML = id;
    row.insertCell(1).innerHTML = '<strong>' + message + '</strong>';
    row.insertCell(2).innerHTML = date;
    row.insertCell(3).innerHTML = ip;
    row.insertCell(4).innerHTML = '<a onclick="removeRow(this)" class="btn btn-danger btn-xs">Delete</a>';

    //getRows(timestamp);
}
function removeRow(obj) {
    var index = obj.parentNode.parentNode;
    console.log(index);
    //var table = document.getElementById('table');
    index.remove();
}
function getRows() {
    ajax(timestamp);
    setInterval( function() {ajax(timestamp)}, 5000);
}

function timeConverter(UNIX_timestamp){
    var a = new Date(UNIX_timestamp*1000);
    var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
    var year = a.getFullYear();
    var month = months[a.getMonth()];
    var date = a.getDate();
    var hour = a.getHours();
    var min = a.getMinutes();
    var sec = a.getSeconds();
    var time = hour + ':' + min + ':' + sec + ' ' + date + ',' + month + ' ' + year ;
    return time;
}

function intToIP(int) {
    var part1 = int & 255;
    var part2 = ((int >> 8) & 255);
    var part3 = ((int >> 16) & 255);
    var part4 = ((int >> 24) & 255);

    return part4 + "." + part3 + "." + part2 + "." + part1;
}

function appendRow() {
    var table = document.getElementById('table');
    var rowCount = table.rows.length;
    var row = table.insertRow(rowCount);
    console.log(table);
    row.insertCell(0).innerHTML = 'idnum';
    row.insertCell(1).innerHTML = '<strong>message...</strong>';
    row.insertCell(2).innerHTML = 'timestamp...';
    row.insertCell(3).innerHTML = 'ip...';
    row.insertCell(4).innerHTML = '<a onclick="appendRow()" class="btn btn-success btn-xs">Make Visible</a>';
    row.insertCell(5).innerHTML = '<a onclick="removeRow(this)" class="btn btn-warning btn-xs">Delete</a> ' +
    '<a href="#" class="btn btn-danger btn-xs">Ban</a>';
} function removeRow(obj) {
    var index = obj.parentNode.parentNode;
    console.log(index);
    var table = document.getElementById('table');
    table.deleteRow(index);
}
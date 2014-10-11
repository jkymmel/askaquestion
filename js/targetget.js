ajax = function(time) {
    console.log("asd");
    $.ajax({
        url: 'include/targetget.php',
        data: {
            timestamp: time
        },
        type: 'post',
        dataType: 'json',
        error: function(data, data2){
            console.log('error' + data2 + time);
        },
        success: function (data) {
            console.log('yay');
            $.each(data, function (idx, obj) {
                timestamp = obj.lastupdate;
                console.log(obj);
                appendRow(obj.id, obj.question, obj.timestamp, obj.ip, obj.forwarded);
            });
        }
    });
};
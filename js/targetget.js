ajax = function(time) {
    console.log("asd");
    $.ajax({
        url: 'include/targetget.php',
        data: {
            fId: time
        },
        type: 'post',
        dataType: 'json',
        error: function(data, data2){
            console.log('error' + data2 + time);
        },
        success: function (data) {
            console.log('yay');
            $.each(data, function (idx, obj) {
                fId = obj.fId;
                console.log(obj);
                appendRow(obj.id, obj.question, obj.timestamp, obj.ip);
            });
        }
    });
};
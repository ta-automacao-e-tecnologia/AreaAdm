window.onload = function()
{
    /*** login ***/
    var form_login = document.getElementById('login_form');
    // var div_login  = document.getElementById('login');
    // var div_result = document.getElementById('login_result');
    var p_bem_vindo = document.getElementById('bem_vindo');
    var div_error  = document.getElementById('login_error');

    form_login.onsubmit = function(event)
    {
        event.preventDefault();
        var form = new FormData(form_login);

        xmlHttpPost('1-php/login', function()
        {
            beforeSend(function()
            {
                //div_users.innerHTML = `<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>`;
            });
    
            success(function()
            {   
                var login = xhttp.responseText;
                alert(login);

                if(login != "error")
                {
                    //var usuario = JSON.parse(xhttp.responseText);
                    // div_result.innerHTML = createTableUsers(users);
                    // div_login.style.display = 'none';
                    
                    location.href= "6-views/home.php";
                    
                }
                else
                {
                    // clearFields(form_login);
                    // displaysMessage(div_error, "alert-danger", "Usuário ou senha incorreto(s)", 5);
                }

            });

        }, form);
    }

    /*** all-data-database ***/
    // var div_users  = document.getElementById('users');

    // xmlHttpGet('1-php/all-database', function()
    // {
    //     beforeSend(function()
    //     {
    //         // div_users.innerHTML = `<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>`;
    //     });
    
    //     success(function()
    //     {
    //         var users = JSON.parse(xhttp.responseText);
    //         div_users.innerHTML = createTableUsers(users);
    //     });
    
    // });
}
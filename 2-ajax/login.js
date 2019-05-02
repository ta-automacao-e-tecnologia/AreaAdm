/*** Ações da página de login ***/
window.onload = function()
{
    /*** login ***/
    var form_login = document.getElementById('login_form');
    var div_msg = document.getElementById('msg');

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

                if(login == '')
                {
                    location.href = '6-views/0-adm-area/home.php';
                    //location.href = 'index.php';
                }
                else
                {
                    displayMessage(div_msg, 'alert-danger', 'Usuário ou senha incorreto(s)!', 10);
                }
            });

        }, form);
    }
}
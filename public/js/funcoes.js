$(document).ready(function(){
   $('#btnClicar').click(function(){
       alert('Cliquei pelo Jquery');
       ReqAjax();
       //this->ReqAjax()
   });
});

function EmitirAlerta(mensagem)
{
    alert(mensagem);
}

function ReqAjax()
{
    $.post('Login/RetornaAjax',
    {
        nome: 'Joe', 
        mail: 'joe@foo.com'
    },function(data)
    {
        alert(data);
    });       
}
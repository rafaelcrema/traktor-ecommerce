function contato(){
    var email_cliente = document.getElementById("email_cliente").value;
    var nome_cliente = document.getElementById("nome_cliente").value;
    var mensagem_cliente = document.getElementById("mensagem_cliente").value;

    //registrando no database

    var contatoajax = {
        'email_cliente':email_cliente,
        'nome_cliente':nome_cliente,
        'mensagem_cliente':mensagem_cliente
    };
    
    var contato = contato.php;
    $.ajax({
        url:localhost,
        data:contatoajax,
        type:'POST',
        cache:false,

        error:function(XMLHttpRequest, textStatus, errorThrown)
        {
            alert("Erro no envio da menssagem!")
        },
        success:function(result)
        {
            alert("Menssagem enviada com sucesso!");
            return;
        }
    })
    }
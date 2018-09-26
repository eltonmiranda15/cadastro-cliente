$('#filtrar-tabela').('keyup click change',function(){
    search = $(this).val().toLowerCase();
    var re = new RegExp(search, 'g');

    $('#tabela tbody tr').each(function(){
        $(this).hide();
        target = $(this).find('td').text().toLowerCase();
        if(target.match(re) || target.match('^' + search)){
            $(this).show();
        }
    });
});

//bind é um vinculador, ele anexa um manipulador para um evento para os elementos
//keyup -  O evento keyup é acionado quando uma tecla é liberada.
//change - Bind um manipulador de eventos para o evento "mudança/change" JavaScript, ou acionar esse evento em um elemento.
//É um evento normalmente usado em input, Quando muda alguma coisa no campo, entra aí,Normalmente é depois que vc sai do campo que ele dispara o evento
//val() Obtenha o valor atual do primeiro elemento no conjunto de elementos correspondentes.
//tolowercase()  retorna a string chamada convertida para minúsculo.
//regexp( , 'g') corresponde globalmente
//hide() Esconder os elementos combinados.
//find() Obter os descendentes de cada elemento no conjunto atual de elementos combinados, filtrados por um seletor, objeto jQuery, ou elemento.
//text() Obter o conteúdo de texto combinados de cada elemento no conjunto de elementos correspondentes, incluindo os seus descendentes, ou definir o conteúdo de texto dos elementos combinados.
//match() recupera as correspondências ao testar uma string com uma expressão regular.
//show() Exibe os elementos combinados.
//each() Iterar sobre um objeto jQuery, executando uma função para cada elemento correspondente.
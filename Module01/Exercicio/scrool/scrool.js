

/**
 * Infinit Scroll
 */

var start = 0;
var limit = 2;
var reachedMax = false;

$(window).scroll(function () {
	if($(window).scrollTop() == $(document).height() - $(window).height())
		getData();
});

$(document).ready(function () {
   getData();
});

function getData() {
	if (reachedMax)
		return;

	$.ajax({
	   url: 'db.php',
	   method: 'POST',
	   dataType: 'json',
	   data: {
		   getData: 1,
		   start: start,
		   limit: limit
       },
       beforeSend:function(){
        
       }
	}).done(function(response){
             //Se a resposta for -1 significa que ja não existe resposta
       if (response == -1){
           //Sendo assim ele vai para a busca
            reachedMax = true;
            console.log("Já não tem mais!")
       }else {
             start += limit;
             console.log('Resposta Esta abaixo')
             //Logo que  apagina é carregada e se não tiver nada no arry
             // ele traz a resposta
             //E add no Array ScroolItems
                 if(vue._data.scroolItems.length == 0){
                     vue._data.scroolItems.push(response);
                    
                }else{
                  //Faça um ciclo foreach para percorrer a resposta 
                  //e inserir a resposta no array 
                  response.forEach(function(data) {
                       vue._data.scroolItems[0].push({
                        id: data.id,
                        nome: data.nome,
                        morada: data.morada,
                        senha: data.senha,
                        email: data.email
   
                      });
              
                  });


                }
             }
    }).fail(function(e){
           console.log(e)
    });
}
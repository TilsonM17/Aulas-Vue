<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Infit Scrool</title>
     <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   

</head>

<body>

    <div class="container app" >
        <div class="row">
        <div class="col-md-6">

          <div v-for="i in scroolItems[0]" :key="i.id">
           
                   <p>Id da conversa-> {{i.id}}</p> <br>
                   <p> Email: {{i.email}}</p> <br>
                   <p>Senha : {{i.senha}}</p>  <br>
            
            <hr>
           
           </div>
             
        </div>

         <div class="col-md-6">
             <p>
                 Laboris dolor culpa sunt eu ut fugiat dolore aute ipsum ullamco exercitation mollit. In anim aute ullamco laboris dolore pariatur enim amet cupidatat. Anim in ipsum quis pariatur. Ut ad excepteur consequat aliquip eiusmod officia dolore velit amet aliqua dolore. Consequat Lorem incididunt esse nostrud tempor cillum dolor minim irure.

Excepteur magna veniam pariatur duis excepteur. Et sint aliquip aute sit ipsum culpa. Consequat Lorem et minim ipsum et eu non do. Cillum minim exercitation mollit dolor eu. Cillum ipsum eiusmod non veniam cillum exercitation anim voluptate proident esse dolor aute ullamco voluptate.

Consequat sint mollit nostrud ullamco consequat do dolor aliqua occaecat adipisicing. Tempor ad est fugiat laborum do consequat non quis ea exercitation dolore exercitation culpa. Id in laborum do amet reprehenderit consequat duis ut et qui minim culpa Lorem occaecat. Fugiat ea nulla irure nostrud excepteur sint enim.

Ut incididunt est fugiat sunt exercitation est laboris commodo. Velit excepteur cupidatat nisi labore qui. In dolore deserunt laborum magna elit ad in aliquip nisi cupidatat velit anim cillum. Qui nisi duis consequat excepteur anim in.

Deserunt ipsum laborum incididunt aliqua aliquip enim amet qui enim non veniam. Aliqua officia dolore amet fugiat pariatur amet cillum. Deserunt voluptate officia sunt et excepteur duis eiusmod mollit laborum.

Consequat laborum dolore officia excepteur labore ullamco. Minim nostrud incididunt qui labore tempor labore. Adipisicing magna id cillum aute veniam amet sit proident id enim ad aute minim dolore.

Duis dolore quis dolor pariatur labore qui. Aliqua quis eu esse et ea dolore. Lorem eu tempor do sit. Est aliqua laborum officia fugiat Lorem ex elit. Veniam eu dolore enim tempor laboris laboris. Anim aliquip culpa deserunt do labore anim occaecat nulla incididunt irure velit tempor in.

Occaecat consequat tempor sint exercitation nostrud id aliquip quis adipisicing culpa cupidatat incididunt labore duis. Ut ad tempor nisi duis incididunt reprehenderit eu laboris laborum reprehenderit minim laborum. Irure pariatur magna aliquip pariatur dolor. Ea cillum laboris amet commodo id sint. Est duis aute ex non velit aliqua quis id labore. Nulla minim anim eiusmod aute duis.

Ullamco anim Lorem aliqua quis veniam excepteur. Aliqua aliqua in ipsum voluptate laborum magna. Nisi fugiat aliquip ea fugiat deserunt amet nostrud in nostrud do veniam. Ea ullamco sit cillum labore et laboris magna laborum. Excepteur irure qui non elit ea do. Dolor sint dolore nulla duis est.

Labore est deserunt anim eu duis nostrud velit in ad. Anim sunt tempor veniam et velit anim irure tempor excepteur. Esse est eu proident exercitation amet Lorem aliqua qui Lorem fugiat duis minim. Fugiat est Lorem culpa nisi sunt labore excepteur nostrud enim. Velit dolore dolore Lorem qui ea excepteur ex Lorem. Nisi esse do eu sit sint sint reprehenderit irure duis minim exercitation ad in.



             </p>
         </div>
              
          </div>

    </div>


    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../vue.js"></script>
    <script src="jquery.min.js"></script>
    <script>
      const options = {
            el: ".app",
            data() {
                return {
                 sms :"Ola mundo" ,
                 scroolItems:[]
                }
            }

        }

        const app = new Vue(options);


        //Deixar o Vue Visvel para o JQUERY
         const vue = app
    </script>
    <script src="scrool.js"></script>

    

</body>

</html>

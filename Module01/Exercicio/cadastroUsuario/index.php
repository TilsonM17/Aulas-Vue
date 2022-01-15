<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercicio - 02</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  
</head>

<body>

    <div id="app" class="container ">
            <div class="row">
            <div class="col-3 my-5"> 
                          <p class="text-danger">{{sms}}</p>
                          <p class="text-success">{{sms_success}}</p>
                        
            </div>
                <div class="col-6 mt-5">

                    <p class="h3 text-center">Cadastro de Usuario.</p>

                    <form @submit.prevent="Cadastro"  method="post">
                        <div class="form-group">
                            <label for="Nome">Nome</label>
                            <input type="text" class="form-control" v-model="nome" >
                        </div>
                        <div class="form-group">
                            <label for="Nome">Password</label>
                            <input type="password" class="form-control" v-model="senha">
                        </div>
                        <div class="form-group">
                            <label for="Nome">Morada</label>
                            <input type="text" class="form-control" v-model="morada">
                        </div>
                        <div class="form-group">
                            <label for="Nome">Email</label>
                            <input type="email" class="form-control" v-model="email">
                        </div>
                        <div class="mt-2 text-md-center">
                            <button class="btn btn-outline-primary" :disabled ="control">Cadastrar Usuario</button>
                        </div>

                    </form>
                </div>
            </div>
    </div>


    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="jquery.min.js"></script>
    <script src="../../vue.js"></script>
    <script>
        //=====================================================================
        const options = {
            el: "#app",
            data() {
                return {
                    nome:"",
                    morada:"",
                    email:"",
                    senha:"",
                    control:true,
                    sms:"",
                    resposta: false,
                    sms_success:""
                }
            },methods:{
                Cadastro:function(){
                    if(this.nome != "" && this.morada != "" && this.email != "" && this.senha != ""){
                          
                        $.ajax({
                            url:"db.php",
                            type:"POST",
                            data:{
                                nome: this.nome,
                                email: this.email,
                                senha: this.senha,
                                morada: this.morada
                            },
                            beforeSend:function(){
                                console.log('Foi enviado')
                            }
                        }).done(function(response){
                               if(response == 1){
                                   console.log(response)
                                    this.sms_success = "O seu cadastro foi feito com sucesso"
                               }else
                                   this.sms="Erro na Inserçaõ dos Dados"
                        }).fail(function(e){
                            console.log(e)
                        })



                    }
                    else{
                        this.sms = "Tudo deve estar preenchido"
                    }
                }
            },watch:{
                nome:function(){
                    if(this.nome != ""){this.control = false; this.sms = ""}
                         
                    else{
                        this.control = true;
                          this.sms = "Nome não pode estar vazio"
                        }
                        
                },
              morada:function(){
                    if(this.morada != ""){
                        this.control = false;
                         this.sms = ""
                        }
                    else{ this.control = true; this.sms = "A morada não pode estar vazio"}
                       
                },
                email:function(){
                   var padrao = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i

                   if(!padrao.test(this.email)){
                       this.sms = "Esse email não é valido"
                       return;
                   }

                   this.sms = ""
                 
                },
                senha:function(){
                    if(this.senha.length < 7){
                        this.sms = "A senha deve ter mais de 6 caracteres"
                        this.control = true;
                        return;
                    }
                    this.sms =""
                    
                }
            }
            
        };
        //======================================================================
        const app = new Vue(options);

    </script>
</body>

</html>
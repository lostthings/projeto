
$(function() {
  
    
    $("#cadastro").validate({
    
        
        rules: {
            nome: {
                    required: true,
                    minlength: 5,
                    maxlength: 40
                },
		usuario: {
                    required: true,
                    minlength: 5,
                    maxlength: 25
                },
                email: {
                    required: true,
                    email: true
                },
                telefone: {
                    required: true,
                    minlength: 10,
                    maxlength: 10
                },
                cidade: {
                    required: true,
                    minlength: 4,
                    maxlength: 40
                },
		bairro: {
                    required: true,
                    minlength: 2,
                    maxlength: 20
                },
                
                senha: {
                    required: true,
                    minlength: 8,
                    maxlength: 20
                },
                senha2: {
                    equalTo: "#senha"
                },
		},
        
        
        messages: {
            nome: "Por favor, insira seu nome",
           nome: {
                    required: "Digite corretamente seu Nome",
                    minlength: "Mínimo de caracteres permitidos 5",
                    maxlength: "Maxímo de caracteres permitidos 25"
                },
		usuario: {
                    required: "Digite corretamente seu Usuário ",
                    minlength: "Mínimo de caracteres permitidos 5",
                    maxlength: "Maxímo de caracteres permitidos 25"
                },
                
                email: "Digite um email válido",
                telefone: {
                    required: "Digite corretamente seu Telefone",
                    minlength: "Mínimo de caracteres permitidos 8",
                    maxlength: "Maxímo de caracteres permitidos 10"
                },
                cidade: {
                    required: "Digite corretamente sua Cidade",
                    minlength: "Mínimo de caracteres permitidos 8",
                    maxlength: "Maxímo de caracteres permitidos 40"
		},
               
                bairro: {
                    required: "Digite corretamente seu Bairro",
                    minlength: "Mínimo de caracteres permitidos 8",
                    maxlength: "Maxímo de caracteres permitidos 20"
                },
               
               
                senha: {
                    required: "Digite corretamente sua senha",
                    minlength: "Mínimo de caracteres permitidos 8",
                    maxlength: "Maxímo de caracteres permitidos 10"
                },
                senha2: {
                    equalTo: "As senhas não conferem, redigite!"
                },
		
            }
        });
	});
  


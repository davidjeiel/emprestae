/* 
 *@description: Funções JavaScript para toda a aplicação
 *@title:       Funções de manipulação do DOM
 *@author:      David Jeiel - <email: davidjeiel@gmail.com>
 */

 	//Função de leitura do formulário de acesso ao carregar o modal
    $(document).ready(function(){
        $("#dados-registro").load('view/form/acesso.php')
    })
    
    function pagInicial(){
       window.location.href="./index.php"
    }

    function painelCotas()
    {
        $('#painel-principal').load('view/paineis/cotas.php');
    }
    
    function painelInvestimentos()
    {
        $('#painel-principal').load('view/paineis/investimentos.php');
    }
   
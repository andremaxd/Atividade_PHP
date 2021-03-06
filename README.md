# Atividade_PHP
<b><h1> Sistema para controle de atividades! </h1></b>

<b><i><h2>Descrição do projeto:</h2></i></b>
    <p>Projeto desenvolvido em PHP e MySQL para a criação de um Sistema para um <b>Controle de Atividades</b> seguindo alguns requisitos;</p>
    <ul>
        <li>Protegido por Login;</li>
        <li>Possibilidade de Adicionar ou Remover atividades;</li>
        <li>Deixar atividades em aberto ou concluída;</li>
        <li>Definir o tipo de cada atividade;</li>
        <li>Possível editar e visualizar tarefas em aberto ou concluída;</li>
    </ul>
<br>


<b><i><h3>Tecnologias utilizadas:</h3></i></b>
<ul>
    <li>MariaDB</li>
    <li>PHP;</li>
    <li>HTML;</li>
    <li>Bootstrap;</li>
</ul>
<br>

<b><i><h3>Método simples para executar projeto:</h3></i></b>
<ul>
    <li>Xampp instalado;</li>
    <li>Start do "Apache" no Xampp para acesso ao localhost;</li>
    <li>Start do "MySQL" no Xampp para acesso ao localhost/phpmyadmin para acesso ao banco de dados;</li>
    <li>Anexar pasta do projeto na pasta "HTDOCS" do Xampp com nome "ControleAtividades";</li>
    <li>Criação do banco com nome "controle_atividades" para realizar a importação do arquivo ".sql" anexado ao Git;</li>
    <li>Abrir o projeto através de localhost;</li>
</ul>
<br>
<br>

<b><i><h3>Funcionalidades:</h3></i></b>
<ol>
    <li>Login</li>
        <img height="300px" width="550px" text-align="center" src="img_prints_telas/login.png">
        <p>Para login utilizar as seguintes informações:</p>
        <p><b>E-mail: </b><i>andre@teste.com</li></p>
        <p><b>Senha: </b><i>123</li></p>
        <br>
    <li>Controle de Atividades</li>
        <img height="300px" width="550px" text-align="center" src="img_prints_telas/index.png">
        <ul>
            <li>Nova Atividade: Realiza a inserção de uma nova atividade;</li>
            <li>Atividades Abertas: Abre a tela onde tem as atividades que ainda não foram concluídas;</li>
            <li>Atividades Concluídas: Abre a tela das atividades que já foram concluídas;</li>
        </ul>
        <br>
    <li>Nova Atividade</li>
        <img height="300px" width="550px" text-align="center" src="img_prints_telas/nova_atv.png">
        <ul>
            <li>Tipo de Atividade: Insere o tipo de atividade (Desenvolvimento; Atendimento; Manutenção; Manutenção Urgente);</li>
            <li>Título: Insere o título da atividade;</li>
            <li>Descrição: Insere a descrição da atividade;</li>
            <li>Podendo concluir ou não a atividade já pela inserção;</li>
        </ul>
    <br>
    <li>Atividades Abertas</li>
        <img height="300px" width="550px" text-align="center" src="img_prints_telas/atv_abertas.png">
        <ul>
            <li>Exibe as atividades em abertas;</li>
            <li>Possibilidade de adicionar nova atividade; </li>
            <li>Funcionalidades: Concluir; Visualizar; Editar; Excluir;</li>
            <li>Obs 1: <i>"Manutenção Urgente"</i> não pode ser excluída! </li>
            <li>Obs 2: <i>"Manutenção Urgente"</i> não pode ser adicionada após as 13hrs da Sexta-Feira!</li>
            <li>Obs 3: <i>"Atendimento"</i> e <i>"Manutenção Urgente"</i> só podem ser concluídas se a descrição tiver mais que 50 caracteres!</li>
        </ul>
    <br>
    <li>Atividades Concluídas</li>
        <img height="300px" width="550px" text-align="center" src="img_prints_telas/atv_concluidas.png">
        <ul>
            <li>Exibe as atividades concluídas;</li>
            <li>Funcionalidades: Visualizar; Editar; Excluir;</li>
            <li>Obs: <i>"Manutenção Urgente"</i> não pode ser excluída!</li>
        </ul>
        
</ol>

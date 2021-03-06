<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script src="js/jquery-3.3.1.js"></script>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        
        <link rel="stylesheet" type="text/css" media="screen" href="css/estiloPrincipal.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/Servicos.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/Responsividade.css" />
        
        <link rel="icon" href="img/Principal/favicon.ico" type="image/x-icon">
        <title> Serviços de Computação </title>
    </head>

    <body ondragstart="return false;" ondrop="return false;">
        <?php include('menu.php'); ?>

     <!-- ////////////////////////////////////-Automação-////////////////////////////////////////////-->

        <section id="automacao">

            <div id="secao_branca">
                <div class="container">
                    <div class="row"> 
                        <div class="col-md-12 text-center">
                            <h1 class="tituloServicos"> AUTOMAÇÃO </h1>
                            <div class="linha"></div>
                        </div>
                    </div>

                    <div class="row">
                        <hr class="separador">
                        <div class="col-md-6">
                            <h3 class="subtitulo_servicos"> Sistema de Controle de Variáveis </h3>
                            <p class="texto">
                                Variáveis precisam ser analisadas e controladas em um 
                                processo produtivo. Com um sistema de controle de variáveis, 
                                a Serra Jr. eleva seu nível de produção pela redução das variabilidades de seus processos.
                            </p>
                        </div>

                        <div class="col-md-6">
                            <img class="img-responsive_right" src="img/Servicos/computacao/automacao/arduino.png">
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-md-12 text-center">
                            <button type="button" class="saiba_mais" data-toggle="modal" data-target="#ModalSistemaDeControle">Saiba Mais</button>
                        </div>
                    </div>   
                </div>  
            </div>
                    
            <div id="secao_cinza">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="img-responsive_left" src="img/Servicos/computacao/automacao/arduino2.png">
                        </div>
                        <div class="col-md-6">
                            <h3 class="subtitulo_servicos"> Automação e Controle de Processos </h3>
                            <p class="texto"> 
                                Por que não ter maior produção, menor custo de produção, maior qualidade? 
                                Com a automação ou controle de seu processo, você pode. 
                            </p>
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-md-12 text-center">
                                <button type="button" class="saiba_mais" data-toggle="modal" data-target="#ModalAutomacao">Saiba Mais</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

     <!-- ////////////////////////////////////-Desenvolvimento Web-////////////////////////////////////////////-->
        <section id="Desenvolvimento_web">

            <div id="secao_branca">
                <div class="container">
                    <div class="col-md-12 text-center">
                            <h1 class="tituloServicos"> WEB </h1>
                            <div class="linha"></div>
                    </div>
                    <div class="row">
                        <hr class="separador">
                        <div class="col-md-6">
                            <h3 class="subtitulo_servicos"> Web sites </h3>
                            <p class="texto">
                                Hoje, segundo a Organização das Nações Unidas,750 milhões
                                de famílias estão conectadas aos seus computadores. 
                                Fixe sua marca e fique mais perto de seus clientes realizando um site conosco!
                            </p>
                        </div>
                        <div class="col-md-6">
                            <img class="img-responsive_right" src="img/Servicos/computacao/desenvolvimento_web/WebDesign.png">
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-md-12 text-center">
                                <button type="button" class="saiba_mais" data-toggle="modal" data-target="#ModalWebSites">Saiba Mais</button>
                        </div>
                    </div>   
                </div>
            </div>

            <div id="secao_cinza">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="img-responsive_left" src="img/Servicos/computacao/desenvolvimento_web/WebSistema.png">
                        </div>
                        <div class="col-md-6">
                            <h3 class="subtitulo_servicos"> Sistema Web </h3>
                            <p class="texto"> 
                                    Disponibilizar pessoas para registrar vendas, estoques, funcionários
                                    e caixa pode ser muito trabalhoso e demandar muito tempo. Com um sistema
                                    web você consegue automatizar e tornar esse monitoramento mais eficiente.
                            </p>
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-md-12 text-center">
                            <button type="button" class="saiba_mais" data-toggle="modal" data-target="#ModalSistemaWeb">Saiba Mais</button>
                        </div>
                    </div>
                </div>
            </div>


        </section>

     <!-- ///////////////////////////////////// Botões Modais ///////////////////////////////////////// -->

        <div id="ModalSistemaDeControle" class="modal fade" role="dialog" tabindex="-1" >
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="col-md-12 text-center">
                            <h4 class="modal_titulos"> Sistema de Controle de Variáveis </h4>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="col-md-12" >
                                <p class="modal_texto">Historicamente, nos meados das décadas de 70 e 80, com o avanço da eletrônica e o surgimento dos microprocessadores, o computador se tornou uma peça chave nos diversos setores industriais. 
                                    Surgiram também os primeiros sistemas supervisores que destina-se à captura de informações de um processo de produção e sua armazenagem em um determinado banco de dados. 
                                    As informações vêm de sensores que capturam dados específicos (conhecidos como variáveis de processo) da planta industrial.</p>
                                <p class="modal_texto">A <span>Serra Jr</span> trabalha na elaboração de projetos de software de supervisão. Nossos softwares monitoram em tempo real a produção utilizando <span class="modal_sublinhado_1">Arduino</span>, <span class="modal_sublinhado_1">Raspberry Pi</span>, <span class="modal_sublinhado_1">Sensores digitais</span> e <span class="modal_sublinhado_1">Banco de dados</span> </p>
                                <hr class="separador">
                                <p class="modal_texto"><span class="modal_sublinhado_2">Principais benefícios do Sistema de Controle:</span> </p>
                                <ul>
                                    <li>Controle de produção. </li>
                                    <li>Monitoramento de processos.</li>
                                    <li>Construção de gráficos de perda e outros indicadores.</li>
                                </ul>
                                <p class="modal_texto"># Gostaria de saber se a Serra Jr pode te ajudar? Contate-nos e peça um orçamento ou agende uma reunião sem compromisso preenchendo os dados do nosso formulário de contato a seguir. #</p>
                            </div>
                        </div>
                        <div class="container">
                            <hr class="separador">
                            <div class="col-md-12 text-center">
                                <h3 class="modal_titulo_contato"> Contato </h3>
                                <form class="formularioServicos" method="post" action="php/contato.php">
                                    <label for="contato_nome" class="contato_label"> Nome </label> <br>
                                    <input type="text" id="contato_nome" name="nome" class="contato_input" required placeholder="Digite aqui seu nome">
                                    <br><br>
                                    <label for="contato_email" class="contato_label"> E-mail </label><br>
                                    <input type="email" id="contato_email" name="email" class="contato_input" required placeholder="Digite aqui seu e-mail">
                                    <br><br>
                                    <label for="contato_telefone" class="contato_label"> Telefone </label><br>
                                    <input type="text" id="contato_telefone" name="numero" class="contato_input" maxlength="15" required placeholder="Digite aqui seu número">
                                    <br><br>
                                    <label for="contato_msg" class="contato_label"> Mensagem </label><br>
                                    <textarea cols="35" rows="5" id="contato_msg" name="msg" class="contato_input" required placeholder="Digite aqui sua mensagem"></textarea>
                                    <br><br>                                 
                                    <center> <input type="submit" class="botaoEstilizado" value="Enviar"> </center>
                                </form>
                            </div>
                        </div>    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="modal_sair" data-dismiss="modal">Sair</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="ModalAutomacao" class="modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="col-md-12 text-center">
                            <h4 class="modal_titulos"> Automação e Controle de Processos </h4>
                        </div>  
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="col-md-12" >
                                <p class="modal_texto">Automação industrial é a aplicação de técnicas, softwares e/ou equipamentos específicos em um determinado processo com o intuito de torná-lo mais eficiente e autônomo.</p>
                                <p class="modal_texto">A <span>Serra Jr</span> trabalha com a análise e melhorias nas cadeias de produção/serviços. Desenvolvemos softwares e equipamentos customizados que agilizam e/ou proporcionam autonomia nos processos. </p>
                                <hr class="separador">
                                <p class="modal_texto"><span class="modal_sublinhado_2">Principais benefíios da automação:</span> </p>
                                <ul>
                                    <li>Aumenta a eficiência do processo.</li>
                                    <li>Maximiza a produção com o menor consumo de energia e/ou matérias primas. </li>
                                    <li>Reduz o esforço ou a interferência humana sobre o processo ou máquina.</li>
                                </ul>
                                <p class="modal_texto"># Gostaria de saber se a Serra Jr pode te ajudar? Contate-nos e peça um orçamento ou agende uma reunião sem compromisso preenchendo os dados do nosso formulário de contato a seguir. #</p>
                            </div>
                        </div>
                        <div class="container">
                            <hr class="separador">
                            <div class="col-md-12 text-center">
                                <h3 class="modal_titulo_contato"> Contato </h3>
                                <form class="formularioServicos" method="post" action="php/contato.php">
                                    <label for="contato_nome" class="contato_label"> Nome </label> <br>
                                    <input type="text" id="contato_nome" name="nome" class="contato_input" required placeholder="Digite aqui seu nome">
                                    <br><br>
                                    <label for="contato_email" class="contato_label"> E-mail </label><br>
                                    <input type="email" id="contato_email" name="email" class="contato_input" required placeholder="Digite aqui seu e-mail">
                                    <br><br>
                                    <label for="contato_telefone" class="contato_label"> Telefone </label><br>
                                    <input type="text" id="contato_telefone" name="numero" class="contato_input" maxlength="15" required placeholder="Digite aqui seu número">
                                    <br><br>
                                    <label for="contato_msg" class="contato_label"> Mensagem </label><br>
                                    <textarea cols="35" rows="5" id="contato_msg" name="msg" class="contato_input" required placeholder="Digite aqui sua mensagem"></textarea>
                                    <br><br>
                                    <center> <input type="submit" class="botaoEstilizado" value="Enviar"> </center>
                                </form>   
                            </div>
                        </div>    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="modal_sair" data-dismiss="modal">Sair</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="ModalWebSites" class="modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="col-md-12 text-center">
                            <h4 class="modal_titulos"> Web sites </h4>
                        </div>  
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="col-md-12" >
                                <p class="modal_texto">Com um site você garante seu espaço exclusivo na Web, independente se seu empreendimento é pequeno ou grande. Esta é uma maneira de apresentar ao mundo informações, fotos e produtos referentes à sua empresa e/ou serviço. 
                                    Além disso, estar na internet permite que o seu negócio e você estejam em qualquer lugar do mundo a todo momento. Com a ajuda da Serra Jr., você terá essas vantagens. A partir de uma análise da sua necessidade elaboraremos um site sob medida, com todas as facilidades e requisitos que você precisa.</p>
                                <p class="modal_texto"># Gostaria de saber se a Serra Jr pode te ajudar? Contate-nos e peça um orçamento ou agende uma reunião sem compromisso preenchendo os dados do nosso formulário de contato a seguir. #</p>
                            </div>
                        </div>
                        <div class="container">
                            <hr class="separador">
                            <div class="col-md-12 text-center">
                                <h3 class="modal_titulo_contato"> Contato </h3>
                                <form class="formularioServicos" method="post" action="php/contato.php">
                                    <label for="contato_nome" class="contato_label"> Nome </label> <br>
                                    <input type="text" id="contato_nome" name="nome" class="contato_input" required placeholder="Digite aqui seu nome">
                                    <br><br>
                                    <label for="contato_email" class="contato_label"> E-mail </label><br>
                                    <input type="email" id="contato_email" name="email" class="contato_input" required placeholder="Digite aqui seu e-mail">
                                    <br><br>
                                    <label for="contato_telefone" class="contato_label"> Telefone </label><br>
                                    <input type="text" id="contato_telefone" name="numero" class="contato_input" maxlength="15" required placeholder="Digite aqui seu número">
                                    <br><br>
                                    <label for="contato_msg" class="contato_label"> Mensagem </label><br>
                                    <textarea cols="35" rows="5" id="contato_msg" name="msg" class="contato_input" required placeholder="Digite aqui sua mensagem"></textarea>
                                    <br><br>           
                                    <center> <input type="submit" class="botaoEstilizado" value="Enviar"> </center>
                                </form>
                            </div>
                        </div>    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="modal_sair" data-dismiss="modal">Sair</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="ModalSistemaWeb" class="modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="col-md-12 text-center">
                            <h4 class="modal_titulos"> Sistema Web </h4>
                        </div>  
                    </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="col-md-12" >
                                    <p class="modal_texto">O sistema web permite uma visão abrangente dos custos com encargos fiscais, funcionários, montantes reservados para os serviços prestados ou produção do produto, além do controle do estoque e/ou caixa a partir do monitoramento desses dados. 
                                        Com essas inContatoações a Serrra Jr. elabora um sistema personalizado através do qual é possível saber se há excessos nos gastos, evitando erros humanos e garantindo maior qualidade dos registros e análises.</p>
                                    <p class="modal_texto"># Gostaria de saber se a Serra Jr pode te ajudar? Contate-nos e peça um orçamento ou agende uma reunião sem compromisso preenchendo os dados do nosso formulário de contato a seguir. #</p>
                                </div>
                            </div>
                            <div class="container">
                                <hr class="separador">
                                <div class="col-md-12 text-center">
                                    <h3 class="modal_titulo_contato"> Contato </h3>
                                    <form class="formularioServicos" method="post" action="php/contato.php">
                                        <label for="contato_nome" class="contato_label"> Nome </label> <br>
                                        <input type="text" id="contato_nome" name="nome" class="contato_input" required placeholder="Digite aqui seu nome">
                                        <br><br>
                                        <label for="contato_email" class="contato_label"> E-mail </label><br>
                                        <input type="email" id="contato_email" name="email" class="contato_input" required placeholder="Digite aqui seu e-mail">
                                        <br><br>
                                        <label for="contato_telefone" class="contato_label"> Telefone </label><br>
                                        <input type="text" id="contato_telefone" name="numero" class="contato_input" maxlength="15" required placeholder="Digite aqui seu número">
                                        <br><br>
                                        <label for="contato_msg" class="contato_label"> Mensagem </label><br>
                                        <textarea cols="35" rows="5" id="contato_msg" name="msg" class="contato_input" required placeholder="Digite aqui sua mensagem"></textarea>
                                        <br><br>
                                        <center> <input type="submit" class="botaoEstilizado" value="Enviar"> </center>
                                    </form>
                                </div>
                            </div>    
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="modal_sair" data-dismiss="modal">Sair</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="ModalAplicativo" class="modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="col-md-12 text-center">
                            <h4 class="modal_titulos"> Aplicativos </h4>
                        </div>  
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="col-md-12" >
                                <p class="modal_texto">É inegável que as gerações atuais usam seus smartphones e tablets para realizar as mais diversas atividades no dia a dia. 
                                    Desde uma compra às pesquisas de inspiração, dos pedidos de comida aos serviços bancários, quase tudo pode ser feito por meio dos aparelhos mobile. 
                                    Por isso, sua empresa pode ter diversos benefícios ao apostar no desenvolvimento de aplicativos para agregar valor à marca e ter um diferencial no atendimento. 
                                    Com a Serra Jr. sua ideia de app vira realidade com muita criatividade e tecnologia. Planejamos, desenvolvemos e entregamos aplicativos personalizados para seu negócio se destacar no mercado.</p>
                                <p class="modal_texto"># Gostaria de saber se a Serra Jr pode te ajudar? Contate-nos e peça um orçamento ou agende uma reunião sem compromisso preenchendo os dados do nosso formulário de contato a seguir. #</p>
                            </div>
                        </div>
                        <div class="container">
                            <hr class="separador">
                            <div class="col-md-12 text-center">
                                <h3 class="modal_titulo_contato"> Contato </h3>
                                <form class="formularioServicos" method="post" action="php/contato.php">
                                    <label for="contato_nome" class="contato_label"> Nome </label> <br>
                                    <input type="text" id="contato_nome" name="nome" class="contato_input" required placeholder="Digite aqui seu nome">
                                    <br><br>
                                    <label for="contato_email" class="contato_label"> E-mail </label><br>
                                    <input type="email" id="contato_email" name="email" class="contato_input" required placeholder="Digite aqui seu e-mail">
                                    <br><br>
                                    <label for="contato_telefone" class="contato_label"> Telefone </label><br>
                                    <input type="text" id="contato_telefone" name="numero" class="contato_input" maxlength="15" required placeholder="Digite aqui seu número">
                                    <br><br>
                                    <label for="contato_msg" class="contato_label"> Mensagem </label><br>
                                    <textarea cols="35" rows="5" id="contato_msg" name="msg" class="contato_input" required placeholder="Digite aqui sua mensagem"></textarea>
                                    <br><br>                                  
                                    <center> <input type="submit" class="botaoEstilizado" value="Enviar"> </center>
                                </form>
                            </div>
                        </div>    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="modal_sair" data-dismiss="modal">Sair</button>
                    </div>
                </div>
            </div>
        </div>

    <!-- ////////////////// Botões Modais ////////////////// -->

    <?php include('rodape.php'); ?>

    </body>

    <script src="js/Servicos.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</html>

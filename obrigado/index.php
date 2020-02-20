<?php
//1 – Definimos Para quem vai ser enviado o email
$para = "contato@infectophmed.com.br, ddz.iotti@gmail.com";
//2 - resgatar o s dados do email
$nome = $_POST['nome'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$instit = $_POST['instit'];
$tel = $_POST['tel'];
$msg = $_POST['mensagem'];


// 3 - resgatar o assunto digitado no formulário e  grava na variavel
//$assunto
$assunto = 'Infecto PH Med - Contato através do site';
 //4 – Agora definimos a  mensagem que vai ser enviado no e-mail

$mensagem .= "<br>  <strong>Nome:  </strong>".$nome;
$mensagem .= "<br>  <strong>E-mail:  </strong>".$email;
$mensagem .= "<br>  <strong>Cidade:  </strong>".$cidade;
$mensagem .= "<br>  <strong>Empresa:  </strong>".$instit;
$mensagem .= "<br>  <strong>Telefone:  </strong>".$tel;
$mensagem .= "<br>  <strong>Mensagem:  </strong>".$msg;


//5 – agora inserimos as codificações corretas e  tudo mais.
$headers =  "Content-Type:text/html; charset=UTF-8\n";
$headers .= "From:  Site Infecto PH Med <site@infectophmed.com.br>\n";
//Vai ser //mostrado que  o email partiu deste email e seguido do nome
$headers .= "X-Sender:  <site@infectophmed.com.br>\n";
//email do servidor //que enviou
$headers .= "X-Mailer: PHP  v".phpversion()."\n";
$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
$headers .= "Return-Path:  <site@infectophmed.com.br>\n";
//caso a msg //seja respondida vai para  este email.
$headers .= "MIME-Version: 1.0\n";

mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Infectologia Hospitalar - PH Med - Santa Catarina</title>
    <link rel="stylesheet" href="/style.css" />

    <link rel="stylesheet" type="text/css" href="/js/slick.css" />

    <link rel="stylesheet" type="text/css" href="/js/slick-theme.css" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <!-- Primary Meta Tags -->
    <title>Infectologia Hospitalar - PH Med - Santa Catarina</title>
    <meta
      name="title"
      content="Infectologia Hospitalar - PH Med - Santa Catarina"
    />
    <meta
      name="description"
      content="A PH Med oferece soluções para hospitais, clínicas e outras instituições da área da saúde. Nossas áreas de atuação são: Consultoria em Infectologia, Serviço de Controle de Infecção Hospitalar, Atendimento adulto e pediátrico na especialidade da Infectologia e equipes médicas especializadas."
    />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://infectophmed.com.br/" />
    <meta
      property="og:title"
      content="Infectologia Hospitalar - PH Med - Santa Catarina"
    />
    <meta
      property="og:description"
      content="A PH Med oferece soluções para hospitais, clínicas e outras instituições da área da saúde. Nossas áreas de atuação são: Consultoria em Infectologia, Serviço de Controle de Infecção Hospitalar, Atendimento adulto e pediátrico na especialidade da Infectologia e equipes médicas especializadas."
    />
    <meta
      property="og:image"
      content="https://infectophmed.com.br/shot-infectophmed.png"
    />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://infectophmed.com.br/"">
    <meta
      property="twitter:title"
      content="Infectologia Hospitalar - PH Med - Santa Catarina"
    />
    <meta
      property="twitter:description"
      content="A PH Med oferece soluções para hospitais, clínicas e outras instituições da área da saúde. Nossas áreas de atuação são: Consultoria em Infectologia, Serviço de Controle de Infecção Hospitalar, Atendimento adulto e pediátrico na especialidade da Infectologia e equipes médicas especializadas."
    />
    <meta
      property="twitter:image"
      content="https://infectophmed.com.br/shot-infectophmed.png"
    />
  </head>
  <body>
    <header id="home">
      <nav>
        <a href="/"
          ><img src="/img/logo.png" alt="PH Med Infectologia Hospitalar"
        /></a>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#quem-somos">Quem Somos</a></li>
          <li>
            <a href="#nossos-servicos">Serviços</a>
          </li>
          <li><a href="#clientes">Clientes</a></li>
          <li><a href="#equipe">Equipe</a></li>
          <li><a href="#local">Localização</a></li>
          <li><a href="#contato">Contato</a></li>
        </ul>
      </nav>
      <section>
        <div class="slider">
          <div>
            <div class="slide">
              <div>
                <h2>Atendimento adulto e pediátrico (Infectologia)</h2>
                <p>
                  Médicos especialistas para consultorias 24h ou atendimento
                  presencial nas unidades hospitalares ou clínicas
                </p>
              </div>
              <div>
                <img
                  src="/img/ilustra-3.png"
                  alt="Atendimento adulto e pediátrico (Infectologia)"
                />
              </div>
            </div>
          </div>
          <div>
            <div class="slide">
              <div>
                <h2>Consultoria em Infectologia</h2>
                <p>
                  Através de nossa consultoria tornamos seu negócio mais
                  produtivo e viável, buscando maior efetividade e acompanhando
                  os resultados constantemente.
                </p>
              </div>
              <img src="/img/ilustra-2.png" alt="Consultoria em infectologia" />
            </div>
          </div>
          <div>
            <div class="slide">
              <div>
                <h2>Serviço de controle de Infecções (SCIH)</h2>
                <p>
                  SCIH é o Serviço de Controle de Infecção Hospitalar,
                  implantado de acordo com as normas da vigilância sanitária, é
                  responsável por executar as atividades definidas pela CCIH
                  (Comissão de Controle de Infecção hospitalar).
                </p>
              </div>
              <img
                src="/img/ilustra-1.png"
                alt="Serviço de controle de Infecções (SCIH)"
              />
            </div>
          </div>

          <div>
            <div class="slide">
              <div>
                <h2>Equipes médicas especializadas</h2>
                <p>
                  Equipes capacitadas em infectologia e controle de infecção que
                  auxiliarão a gestão hospitalar, atraves de medidas
                  preventivas, auditorias e ações que promovam a melhoria dos
                  processos
                </p>
              </div>
              <img
                src="/img/ilustra-4.png"
                alt="Equipes médicas especializadas"
              />
            </div>
          </div>
        </div>
      </section>
    </header>
    <main>
      <section id="quem-somos">
        <div class="container">
          <div class="title-column">
            <h2>
              Quem <br />
              <span>Somos</span>
            </h2>
          </div>
          <div class="text-column">
            <p>
              Somos um grupo de infectologistas que presta consultoria
              especializada para clínicas e hospitais.
            </p>

            <p>
              Atendemos aos clientes de forma individualizada, de acordo com as
              demandas do hospital ou clínica, adequando o serviço a todas as
              exigências legais.
            </p>

            <p>
              Temos como objetivo contribuir com a constante melhoria nos
              serviços de saúde, desse modo, realizamos análises de dados,
              fornecemos orientações em decisões técnicas e promovemos ações que
              geram impacto positivo na gestão hospitalar.
            </p>

            <p>
              Estamos localizados anexos à Oximed, Rua Célio Veiga, 395 - Barreiros, São José - SC, 88111-320
</p><p>
              <strong>
                Atendemos todo o estado de Santa Catarina, principalmente na
                região da Grande Florianópolis, Balneário Camboriú e Vale do
                Itajaí.
              </strong>
            </p>
          </div>
        </div>
      </section>

      <section id="nossos-servicos">
        <div class="container">
          <div class="title-column">
            <h2>
              Nossos <br />
              <span>Serviços</span>
            </h2>
          </div>
          <div class="text-column">
            <p>
              A <strong>PH Med</strong> oferece soluções para hospitais,
              clínicas e outras instituições da área da saúde.
              <strong>
                Consultoria em Infectologia, Serviço de Controle de Infecção
                Hospitalar, Atendimento adulto e pediátrico na especialidade da
                Infectologia e equipes médicas especializadas.
              </strong>
            </p>
          </div>
        </div>
      </section>
      <section id="clientes">
        <div class="container">
          <div class="title-column">
            <h2>
              Nossos <br />
              <span>Clientes</span>
            </h2>
          </div>
          <div class="text-column">
          <ul class="client-list">
              <li><img src="img/logo-hmrc.png" alt="" /></li>
              <li><img src="img/logo-marieta.png" alt="" /></li>
              <li><img src="img/logo-oximed.png" alt="" /></li>
              <li><img src="img/logo-unimed.png" alt="" /></li>
              <li><img src="img/logo-santa-luiza.png" alt="" /></li>
              <li><img src="img/logo-hosc.png" alt="" /></li>
              <li><img src="img/logo-hf.png" alt="" /></li>
            </ul>
          </div>
        </div>
      </section>

      <section id="equipe">
        <div class="container">
          <div class="title-column">
            <h2>
              Equipe <br />
              <span>PHMed</span>
            </h2>
          </div>
          <div class="text-column">
            <ul class="team-list">
              <li>
                <h3>
                  Dr Cleyton Gregory Silva <br />
                  <span>CRM 1983 / RQE 6903</span>
                </h3>
              </li>

              <li>
                <h3>
                  Dra Giuliana Stravinskas Durigon <br />
                  <span>CRM 26339 / RQE 16856</span>
                </h3>
              </li>

              <li>
                <h3>
                  Dra Juliane Vianna <br />
                  <span>CRM 15619 / RQE 15233</span>
                </h3>
              </li>

              <li>
                <h3>
                  Dr Raphael Alexandre de Paiva Bertechini <br />
                  <span>CRM 9182 / RQE 7580</span>
                </h3>
              </li>

              <li>
                <h3>
                  Dr Ricardo Dimas Zimmermann<br />
                  <span>CRM 11568 / RQE 7797</span>
                </h3>
              </li>
              <li>
                <h3>Rafaela Martelosso Secron <br>
<span>CRM 22723/ RQE 13357</span></h3>
              </li>
            </ul>
          </div>
        </div>
      </section>
    </main>
    <footer>
      <div id="contato">
        <div class="container-footer">
          <h2>Envie uma <br /><span>Mensagem</span></h2>
          <h1>Obrigado por entrar em contato. Responderemos prontamente.</h1>
        </div>
      </div>

      <div id="local">
        <div class="container-footer">
          <h2>
            Localização <br />
            <span>e Contato</span>
          </h2>
          <p>
              Estamos localizados anexos à Oximed, Rua Célio Veiga, 395 - Barreiros, São José - SC, 88111-320
</p>
<p>Atendemos todo o estado de Santa Catarina, principalmente
            na região da Grande Florianópolis, Balneário Camboriú e Vale do
            Itajaí.
          </p>
          <p>
            47 <strong>9605-3830</strong> <br />
            <strong>
              <a href="mailto:contato@infectophmed.com.br"
                >contato@infectophmed.com.br</a
              >
            </strong>
          </p>
        </div>
      </div>
    </footer>
    <div class="post-footer">
      <h5>
        Copyright © 2020 - PH Med Infectologia LTDA. Responsável Técnico Dr
        Raphael Bertechini - CRM/SC 9182 / RQE 7580
      </h5>
    </div>
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-1.11.0.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>
    <script type="text/javascript" src="/js/slick.min.js"></script>

    <script>
      $(document).ready(function() {
        $(".slider").slick({
          dots: true,
          infinite: true,
          speed: 500,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000
        });
        var element = document.getElementById("contato");

        element.scrollIntoView();

      });

      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener("click", function(e) {
          e.preventDefault();

          document.querySelector(this.getAttribute("href")).scrollIntoView({
            behavior: "smooth"
          });
        });
      });
    </script>
  </body>
</html>

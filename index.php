<?php 

      // Monitoramento de leads (pedido da gestora de trafégo)
      $url = "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; // Capturando a url
      $escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' ); // Sanitizando a url

      // A url será passada através de um input invisível (type=hidden) do formulário
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Google Tag Manager -->
    <script>
      ;(function (w, d, s, l, i) {
        w[l] = w[l] || []
        w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" })
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != "dataLayer" ? "&l=" + l : ""
        j.async = true
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl
        f.parentNode.insertBefore(j, f)
      })(window, document, "script", "dataLayer", "GTM-WF3G8C4")
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- favicon -->
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />

    <!-- title -->
    <meta property="og:title" content="Brainstorm - Escola de Negócios" />

    <!-- description -->
    <meta
      name="description"
      content="Você busca ter uma carreira de sucesso? Ser um bom empresário? A Primeira EScola de Negócios pode te ajudar com isso."
    />
    <meta
      property="og:description"
      content="Você busca ter uma carreira de sucesso? Ser um bom empresário? A Primeira EScola de Negócios pode te ajudar com isso."
    />
    <meta
      name="twitter:description"
      content="Você busca ter uma carreira de sucesso? Ser um bom empresário? A Primeira EScola de Negócios pode te ajudar com isso."
    />

    <!-- misc -->
    <meta property="og:locale" content="pt_BR" />
    <meta name="theme-color" content="#57167d" />

    <link rel="stylesheet" href="style.css" />
    <!-- G FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="preload"
      href="./public/fonts/Intelo-ExtraBold.woff2"
      as="font"
      type="font/woff2"
      crossorigin
    />
    <link
      rel="preload"
      href="./public/fonts/Intelo-Bold.woff2"
      as="font"
      type="font/woff2"
      crossorigin
    />
    <link
      rel="preload"
      href="./public/fonts/Intelo-Regular.woff2"
      as="font"
      type="font/woff2"
      crossorigin
    />

    <link rel="stylesheet" href="./libs/splide-3.6.4/splide.min.css" />
    <link
      rel="preload"
      href="./public/fonts/Intelo-Light.woff2"
      as="font"
      type="font/woff2"
      crossorigin
    />

    <link rel="stylesheet" href="./libs/aos/aos.css" />
    <title>Brainstorm - Escola de Negócios</title>
  </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript
      ><iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-WF3G8C4"
        height="0"
        width="0"
        style="display: none; visibility: hidden"
      ></iframe
    ></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="exit-form__trigger" id="exitFormTrigger"></div>
    <div class="exit-form__trigger-activator" id="exitFormTriggerActivator"></div>
    <main>
      <div class="glass">
        <!-- SECTION HERO -->
        <section class="section-hero">
          <div class="section-center">
            <div class="section-hero__text" data-aos="fade-right">
              <img class="logo" src="./public/images/logo-branco.svg" alt="" />
              <h1>
                Pronto para alcançar o <span class="clr-main">próximo </span
                ><span class="clr-accent">nível</span> como um empreendedor?
              </h1>
              <!-- <p>Então cola com a gente!</p> -->
              <!-- <button class="btn">Garantir meu curso agora!</button> -->
            </div>
            <img
              class="logo--no-copy"
              src="./public/images/logo-branco--no-copy.svg"
              alt=""
              data-tilt
              data-tilt-glare
              data-tilt-max-glare="2"
              data-tilt-full-page-listening
            />
          </div>
        </section>

        <!-- SECTION BIG NUMBERS-->
        <section class="section-big-numbers">
          <div class="section-center">
            <h2>
              A <b>primeira</b> escola de negócios da
              <span class="clr-main">VIDA</span>
              <span class="clr-accent">REAL</span>
            </h2>

            <div class="cards">
              <!-- start of item -->
              <div class="cards__card" data-aos="fade-right">
                <img
                  src="./public/images/graduated.png"
                  alt=""
                  width="100"
                  height="100"
                />
                <div class="cards__card__text">
                  <p class="title">+400 empreendedores formados</p>
                  <p class="text">
                    <b>Somos refêrencia</b> quando se trata de ensinar o DNA do
                    sucesso aos nossos alunos.
                  </p>
                </div>
              </div>
              <!-- end of item -->
              <!-- start of item -->
              <div class="cards__card" data-aos="fade-up">
                <img
                  src="./public/images/cooperation.png"
                  alt=""
                  width="100"
                  height="100"
                />
                <div class="cards__card__text">
                  <p class="title">
                    +4200 <span> empregos gerados pelo mundo</span>
                  </p>
                  <p class="text">
                    Atendemos <b>mais de 5 países</b>, transmitindo a ciência do
                    sucesso para todas as partes do mundo.
                  </p>
                </div>
              </div>
              <!-- end of item -->
              <!-- start of item -->
              <div class="cards__card" data-aos="fade-left">
                <img
                  src="./public/images/money.png"
                  alt=""
                  width="100"
                  height="100"
                />
                <div class="cards__card__text">
                  <p class="title">
                    +60 <span> milhões movimentados no mercado</span>
                  </p>
                  <p class="text">
                    Nós criamos <b>empreendedores de sucesso</b>, que geram
                    resultados com o que fazem.
                  </p>
                </div>
              </div>
              <!-- end of item -->
            </div>
            <button class="btn btn--cta">Quero aprender a ciência do sucesso</button>
          </div>
        </section>

        <!-- SECTION SLIDER -->
        <section class="section-sliders">
          <div class="section-center">
            <h2>
              Conheça <span class="clr-main">seu</span> futuro
              <span class="clr-accent">mentor</span>
            </h2>

            <div class="wrapper">
              <img src="./public/images/dude.png" alt="" />

              <div class="wrapper__text">
                <p class="title">Christian Daleck, a mente por trás da Brainstorm</p>
                <p class="text">
                  Christian tinha um sonho: criar uma escola visionária que
                  <b>realmente preparasse as pessoas para empreender</b>, do jeito
                  que o mercado precisa, indo além dos assuntos que são abordados no
                  ensino tradicional.
                </p>
                <p class="text">
                  Assim, nasceu a Brainstorm On,
                  <b
                    >a primeira escola de negócios da vida real, disponível para
                    qualquer pessoa, de qualquer lugar.</b
                  >
                </p>

                <div class="competencias">
                  <ul class="list-wrapper">
                    <li>
                      Franqueado e Executivo da Wiser Educação (detentora da marca
                      Wise Up).
                    </li>
                    <li>Bacharel em Direto pela Unib.</li>
                    <li>Militar da Academia da Força Aérea</li>
                  </ul>
                  <ul class="list-wrapper">
                    <li>Curso de Finanças pela FGV.</li>
                    <li>Formado em Coach e Mentor pela Instituto Holos.</li>
                    <li>Fundador da Startup Hoswapp</li>
                  </ul>
                </div>
              </div>
            </div>
            <button class="btn btn--cta">Quero aprender a ciência do sucesso</button>
          </div>
        </section>

        <!-- SECTION DIFERENTIALS -->
        <section class="section-diferentials">
          <div class="section-center">
            <h2>
              Oferecemos <span class="clr-main">o melhor</span> do mercado
              <span class="clr-accent">para o seu sucesso</span>
            </h2>

            <div class="cards cards--diferenciais">
              <div class="cards__card" data-aos="fade-right">
                <img
                  width="100"
                  height="100"
                  src="./public/images/network.png"
                  alt=""
                />
                <p class="title">Networking</p>
                <p class="text">
                  Você terá contato e fará networking com
                  <b>alunos de todo o país</b>
                </p>
              </div>
              <div class="cards__card" data-aos="fade-up">
                <img
                  width="100"
                  height="100"
                  src="./public/images/mentor.png"
                  alt=""
                />
                <p class="title">Mentoria ao vivo</p>
                <p class="text">
                  <b>Os melhores treinadores</b> te ajudando no que você precisar
                </p>
              </div>
              <div class="cards__card" data-aos="fade-up">
                <img
                  width="100"
                  height="100"
                  src="./public/images/webinar.png"
                  alt=""
                />
                <p class="title">Aulas gravadas</p>
                <p class="text">
                  Aulas disponíveis 24h por dia com
                  <b>o melhor conteúdo</b> para <b>te levar ao sucesso.</b>
                </p>
              </div>
              <div class="cards__card" data-aos="fade-left">
                <img
                  width="100"
                  height="100"
                  src="./public/images/certificate.png"
                  alt=""
                />
                <p class="title">Certificado</p>
                <p class="text">
                  <b>A prova</b> material
                  <b>de que você aprendeu o DNA do sucesso</b>.
                </p>
              </div>
            </div>
            <button class="btn btn--cta">Quero aprender a ciência do sucesso</button>
          </div>
        </section>

        <!-- SECTION FOR YOU -->
        <section class="section-for-you">
          <div class="section-center">
            <h2>
              O <span class="clr-main">curso</span> Brainstorm ON é o
              <span class="clr-accent">ideal para mim</span>?
            </h2>
            <div class="item-list">
              <div class="left">
                <p class="title">Se você deseja:</p>
                <ul class="item-list__item-wrapper">
                  <li>Ser uma pessoa de sucesso.</li>
                  <li>Aprender uma metodológia ágil que entrega resultados.</li>
                  <li>Aprender inteligência emocional.</li>
                  <li>Ter vontade de mudar para uma vida melhor.</li>
                </ul>
              </div>
              <div class="right">
                <p class="title">Se você NÃO deseja:</p>
                <ul class="item-list__item-wrapper">
                  <li>Querer ser uma pessoa de sucesso.</li>
                  <li>Aprender uma metodologia que ve ajudar no sucesso.</li>
                  <li>
                    Querer aprender a ter inteligência emocional para lidar com
                    situações dificeis.
                  </li>
                  <li>Ter o conhecimento para mudar de vida.</li>
                </ul>
              </div>
            </div>
            <button class="btn btn--cta">Quero aprender a ciência do sucesso</button>
          </div>
        </section>

        <!-- SECTION TESTIMONIAL -->
        <section class="section-testimonial">
          <div class="section-center">
            <h2>
              <span class="clr-main">Depoimentos de</span> quem já foram
              <span class="clr-accent">nossos alunos</span>
            </h2>

            <div class="splide">
              <div class="splide__track">
                <ul class="splide__list">
                  <li class="splide__slide">
                    <p class="testimonials__slide__text">
                      MTOOOOO obrigada pela oportunidade de estar com vocês a
                      distância. Você é foda!! Me orgulho mto de ter investido em mim
                      e começado a brainstorm.
                      <b>
                        Vcs estão me transformando e estou sendo melhor pq estou
                        vendo o caminho através dessa escola maravilhosaaaaa!!
                      </b>
                    </p>

                    <p class="name">Luisa de Estefani</p>
                  </li>
                  <li class="splide__slide">
                    <p class="testimonials__slide__text">
                      Sendo a primeira escola de negócios da vida real, a experiência
                      que eles trazem, vicência na prática, insights e mentoria para
                      aplicar o conhecimento adquirido!
                      <b>
                        Realmente são fantásticos e recomento! Mudança de vida,
                        comportamento e resultados!
                      </b>
                    </p>

                    <p class="name">Kathelyn Lourenção</p>
                  </li>
                  <li class="splide__slide">
                    <p class="testimonials__slide__text">
                      Bom diaaaa!!! Bora ser feliz todo dia!!! Foi muito legal ontem,
                      <b>
                        acho que todos nós conseguimos evoluir e está é a proposta da
                        escola </b
                      >, nos tirar da zona de conforto e nos fazer acreditar que
                      somos capazes! Parabéns para todos!! Arrasamos!!!
                    </p>

                    <p class="name">Mariane Zaqueo</p>
                  </li>
                  <li class="splide__slide">
                    <p class="testimonials__slide__text">
                      @christiandaleck obrigada!
                      <b>
                        Está me ensinando um caminho que não conhecia, o
                        empreededorismo, mudou meu mindset, um grande mestre </b
                      >, tenho certeza que @escoladenegociosbrainstorm será um
                      sucesso. Meu filho será aluno da @escoladenegociosbrainstorm
                    </p>

                    <p class="name">Maira Pompeo</p>
                  </li>
                </ul>
              </div>
            </div>
            <button class="btn btn--cta">Quero aprender a ciência do sucesso</button>
          </div>
        </section>

        <!-- FOOTER -->
        <footer>
          <div class="section-center">
            <p>Feito com 🖤 por Blanc Digital <span class="smile">:)</span></p>
          </div>
        </footer>
      </div>

      <div class="modal modal--main-form is-hidden" id="modal">
        <div class="modal__image-wrapper">
          <img
            data-src="./public/images/logo-branco--no-copy.svg"
            class="lazyload"
            alt=""
          />
        </div>

        <form
          method="post"
          action="enviar.php"
          id="enviar"
          name="enviar"
          class="form"
          autocomplete="off"
          onsubmit="return validateForm(e)"
        >
          <input type="hidden" name="url-form" value="<?php echo $escaped_url?>" />
          <div class="wrapper">
            <button class="btn btn--full btn--close" type="button">&times;</button>

            <h6>Só mais um passo pra começar o seu sucesso profissional!</h6>
            <p>
              Ficamos felizes e animados de saber que você tem interesse em evoluir
              não só como profissional, mas como pessoa. Preencha os dados abaixo e
              nossa equipe entrará em contato o quanto antes!
            </p>
            <p id="alertForm" class="alert is-hidden">
              Preencha todos os campos corretamente!
            </p>
            <!-- FORM__NAME -->
            <div class="form__field-wrapper">
              <label class="" for="name-form">Nome*</label>
              <input
                type="text"
                name="name-form"
                id="nameForm"
                placeholder="Seu nome aqui"
                autocomplete="off"
                oninput="validateName(this)"
                required
              />
            </div>

            <!-- FORM__EMAIL -->
            <div class="form__field-wrapper">
              <label for="email-form">Seu melhor e-mail para contato*</label>
              <input
                type="email"
                name="email-form"
                id="emailForm"
                placeholder="email@exemplo.com"
                oninput="validateEmail(this)"
                required
              />
            </div>

            <!-- FORM__CELLPHONE -->
            <div class="form__field-wrapper">
              <label class="" for="cellphone-form">Número de celular*</label>
              <input
                type="tel"
                name="cellphone-form"
                id="cellphoneForm"
                placeholder="Seu número aqui"
                title="Seu número de celular com o código de área"
                oninput="validateNumber(this)"
                onkeypress="mascara(this)"
                maxlength="15"
                autocomplete="off"
                required
              />
            </div>

            <button
              class="btn btn--full btn--submit"
              name="submit-btn"
              formaction="enviar.php"
              type="submit"
              id="enviar"
              title="Enviar formulário"
            >
              Quero ter sucesso profissional!
            </button>
          </div>
        </form>
      </div>

      <!-- EXIT FORM -->
      <div class="modal modal--exit-form is-hidden" id="modal">
        <div class="modal__image-wrapper">
          <img
            data-src="./public/images/logo-branco--no-copy.svg"
            class="lazyload"
            alt=""
          />
        </div>

        <form
          method="post"
          id="exitForm"
          name="envia"
          class="form form--exit"
          autocomplete="off"
        >
          <div class="wrapper">
            <button class="btn btn--full btn--close btn--close-exit" type="button">
              &times;
            </button>

            <h6>Você vai perder a sua oportunidade de mudar de vida?</h6>
            <p>
              Ainda dá tempo de voltar atrás,
              <b>nunca é tarde pra aprender a ter sucesso profissional</b>. Só
              precisamos de mais alguns dados para podermos entar em contato com
              você!
            </p>
            <p id="alertForm" class="alert is-hidden">
              Preencha todos os campos corretamente!
            </p>

            <input type="hidden" name="url-form" value="<?php echo $escaped_url?>" />

            <!-- FORM__NAME -->
            <div class="form__field-wrapper">
              <label class="" for="name-form">Nome*</label>
              <input
                type="text"
                name="name-form"
                id="nameForm"
                placeholder="Seu nome aqui"
                autocomplete="off"
                oninput="validateName(this)"
                required
              />
            </div>

            <!-- FORM__EMAIL -->
            <div class="form__field-wrapper">
              <label for="email-form">Seu melhor e-mail para contato*</label>
              <input
                type="email"
                name="email-form"
                id="emailForm"
                placeholder="email@exemplo.com"
                oninput="validateEmail(this)"
                required
              />
            </div>

            <!-- FORM__CELLPHONE -->
            <div class="form__field-wrapper">
              <label class="" for="cellphone-form">Número de celular*</label>
              <input
                type="tel"
                name="cellphone-form"
                id="cellphoneForm"
                placeholder="Seu número aqui"
                title="Seu número de celular com o código de área"
                onkeypress="mascara(this)"
                oninput="validateNumber(this)"
                maxlength="15"
                autocomplete="off"
                required
              />
            </div>

            <button
              class="btn btn--full btn--submit"
              name="submit-btn"
              formaction="enviar.php"
              type="submit"
              id="enviar"
              title="Enviar formulário"
            >
              Quero ter meu sucesso profissional!
            </button>
          </div>
        </form>
      </div>

      <div class="flare flare--1"></div>
      <div class="flare flare--2"></div>
      <div class="flare flare--3"></div>
      <div class="flare flare--4"></div>
      <div class="flare flare--6"></div>
      <div class="flare flare--7"></div>
      <div class="flare flare--8"></div>
      <div class="flare flare--9"></div>
      <div class="flare flare--10"></div>
      <div class="flare flare--11"></div>
    </main>

    <script src="./libs/lazysizes/lazysizes.min.js" async></script>
    <script src="./libs/aos/aos.js" defer></script>
    <script src="./libs/vanilla-tilt/vanilla-tilt.min.js" defer></script>
    <script src="./libs/splide-3.6.4/splide.min.js" defer></script>
    <script src="./main.js" defer></script>
  </body>
</html>

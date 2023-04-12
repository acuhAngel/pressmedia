<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://necolas.github.io/normalize.css/8.0.1/normalize.css"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Drawe -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css"
    />
    <title>QS</title>
  </head>
  <body class="drawer drawer--left">
    <header>
      <div class="header mobile"><?php include('views/header_mobile.php') ?></div>
      <div class="header desk"><?php include('views/header_desk.php') ?></div>
    </header>
    <main>
      <div class="flex column">
        <section id="title_label ">
          <p class="title_label intro_black_italic_italic">¿Quienes somos?</p>
        </section>
        <div class="division_section"></div>

        <section id="mision_vision ">
          <div class="flex column text_align_center margin_mobile_16">
            <div class="width_100">
              <p
                class="intro_black_italic_italic font_size_76 text_align_center margin_10pc"
              >
                Vanguardia, Tecnología y el personal más calificado
              </p>
              <img
                class="right_gray_points_up desk rotate"
                src="assets/img/gray_points.png"
                alt=""
              />
            </div>
            <div class="division"></div>
            <p class="intro_light_reg text_align_center margin_32">
              Contamos con tecnología de punta y equipo vanguardista siendo un
              proveedor confiable y competitivo ya que adquirimos el compromiso
              de solucionar problemas en cuanto a tiempo y forma de entrega de
              acuerdo a las necesidades de nuestros clietnes.
            </p>
            <div></div>
          </div>
        </section>
        <div class="division">
          <img
            class="desk left_gray_points"
            src="assets/img/gray_points.png"
            alt=""
          />
        </div>
        <section id="mision_vision">
          <div class="flex column text_align_center margin_mobile_16">
            <div class="mision">
              <p class="intro_black_italic_italic font_size_48">Misión</p>
              <p class="font_size_16">
                Atender los requerimientos específicos de impresión, diseño y
                material de nuestros clientes, suministrando impresos de alta
                calidad en el menor tiempo superando las expectativas de
                nuestros consumidores.
              </p>
            </div>
            <div class="division">
              <div class="flex flex_space_between">
                <div>&nbsp</div>
                <div>
                  <img
                    class="right_gray_points desk"
                    src="assets/img/gray_points.png"
                    alt=""
                  />
                </div>
              </div>
            </div>
            <div class="mision">
              <p class="intro_black_italic_italic font_size_48">Visión</p>

              <p class="font_size_16">
                Ser reconocida como la mejor empresa de artes graficas a nivel
                estatal; ser destacada a nivel nacional a través del permanente
                compromiso con nuestros clientes, distintivo de calidad y
                enfoque social.
              </p>
            </div>
          </div>
        </section>

        <div class="division_section"></div>
        <div class="division_section"></div>

        <section id="valores">
          <div class="with_100 flex row padding_left_10pc">
            <div
              class="desk gray_container flex column text_align_center flex_space_around"
            >
              <div class="">
                <p
                  class="color_white margin_16 intro_black_italic_italic font_size_48"
                >
                  Valores
                </p>
              </div>

              <div class="flex row">
                <div class="flex_item_50"></div>
                <p class="flex_item_50">
                  <img class="" src="assets/img/checkbox.png" alt="" />
                </p>
              </div>
              <div class="flex row">
                <div class="flex_item_50"></div>
                <p class="flex_item_50">
                  <img class="" src="assets/img/checkbox.png" alt="" />
                </p>
              </div>
              <div class="flex row">
                <div class="flex_item_50"></div>
                <p class="flex_item_50">
                  <img class="" src="assets/img/checkbox.png" alt="" />
                </p>
              </div>
              <div class="flex row">
                <div class="flex_item_50"></div>
                <p class="flex_item_50">
                  <img class="" src="assets/img/checkbox.png" alt="" />
                </p>
              </div>
              <div class="flex row">
                <div class="flex_item_50"></div>
                <p class="flex_item_50">
                  <img class="" src="assets/img/checkbox.png" alt="" />
                </p>
              </div>
            </div>
            <div class="valores_list flex column flex_space_around">
              <p class="margin_16 desk">&nbsp</p>
              <p
                class="mobile margin_16 intro_black_italic_italic font_size_48 text_align_center"
              >
                Valores
              </p>
              <div class="flex row flex_cross_center">
                <img class="" src="assets/img/checkbox.png" alt="" />
                <p class="padding_left_16 font_size_56 intro_book_reg margin_0">
                  Ética
                </p>
              </div>
              <div class="flex row flex_cross_center">
                <img class="" src="assets/img/checkbox.png" alt="" />
                <p class="padding_left_16 font_size_56 intro_book_reg margin_0">
                  Trabajo en equipo
                </p>
              </div>
              <div class="flex row flex_cross_center">
                <img class="" src="assets/img/checkbox.png" alt="" />
                <p class="padding_left_16 font_size_56 intro_book_reg margin_0">
                  Honestidad
                </p>
              </div>
              <div class="flex row flex_cross_center">
                <img class="" src="assets/img/checkbox.png" alt="" />
                <p class="padding_left_16 font_size_56 intro_book_reg margin_0">
                  Responsabilidad social
                </p>
              </div>
              <div class="flex row flex_cross_center">
                <img class="" src="assets/img/checkbox.png" alt="" />
                <p class="padding_left_16 font_size_56 intro_book_reg margin_0">
                  Empatia
                </p>
              </div>
            </div>
          </div>
        </section>

        <div class="division_section"></div>
        <div class="division_section">
          <img
            class="desk left_gray_points"
            src="assets/img/gray_points.png"
            alt=""
          />
        </div>

        <section id="empresa_sustentable">
          <div class="flex row back_gray margin_mobile_16">
            <div class="flex row rwrap">
              <div class="flex column rotate flex_center color_white empresa">
                <p class="intro_black_italic_italic font_size_76 margin_0">
                  <span class="intro_book_reg font_size_48 left_menos_30"
                    >empresa</span
                  >
                  sustentable
                </p>
              </div>
              <div class="flex column flex_center text_align_center">
                <div class="division"></div>
                <img class="img_esr" src="assets/img/ecologia.png" alt="" />
                <div class="division"></div>
                <p class="intro_book_reg">
                  Nos comprometemos a operar con un enfoque de protección y
                  cuidado al medio ambiente.
                </p>
                <div class="division"></div>
                <img
                  class="img_esr"
                  src="assets/img/logos pressverde-02.png"
                  alt=""
                />
                <div class="division"></div>
                <p class="intro_book_reg">
                  Durante el proceso de impresión cuidamos utilizar la menor
                  cantidad de productos químicos, asimismo nos preocupamos por
                  no crear grandes cantidades de desperdicio de papel, para
                  generar un mínimo impacto medioambiental.
                </p>
                <div class="division"></div>
                <img
                  class="img_esr"
                  src="assets/img/logos pressverde-02.png"
                  alt=""
                />
                <div class="division"></div>
                <p class="intro_book_reg">
                  El material que resulta del desperdicio se destina para su
                  correcto reciclaje
                </p>
                <div class="division_section"></div>
              </div>
            </div>
          </div>
        </section>
        <div class="division_section"></div>
        <div class="flex flex_space_between">
          <div>&nbsp</div>
          <div>
            <img
              class="right_gray_points desk"
              src="assets/img/gray_points.png"
              alt=""
            />
          </div>
        </div>

        <section id="corte_suaje/diseño">
          <div class="flex column wrap wrap_desk margin_mobile_16">
            <div class="flex row wrap">
              <div class="flex_item_50 text_align_center">
                <p class="intro_black_italic_italic font_size_56">
                  Comprometidos con nuestro equipo de trabajo
                </p>
                <p class="intro_book_alt_reg center_text_box">
                  Avanzando y juntos de la mano con nuestros trabajadores;
                  reconocemos el talento y esfuerzo de las mujeres fomentando el
                  desarrollo para un bien común.
                </p>
                <div class="division mobile"></div>
              </div>
              <div class="flex_item_50">
                <img
                  class="width_100"
                  src="assets/img/WhatsApp Image 2023-02-21 at 12.01.56 PM.png"
                  alt=""
                />
              </div>
            </div>

            <div class="flex row rwrap">
              <div class="flex_item_50">
                <img
                  class="width_100"
                  src="assets/img/WhatsApp Image 2023-02-21 at 12.27.10 PM.png"
                  alt=""
                />
              </div>
              <div class="flex_item_50 text_align_center">
                <p class="intro_black_italic_italic font_size_56">
                  Nos preocupamos por el bienestar de nuestros colaboradores
                </p>
                <p class="intro_book_alt_reg center_text_box">
                  La solidaridad con las madres solteras. y el compromiso de ser
                  un apoyo económico a través de la creación de empleos dentro
                  de Grupo Pressmedia.
                </p>
                <div class="division mobile"></div>
              </div>
            </div>
          </div>
          <div class="division_section">
              <img
                class="left_gray_points desk"
                src="assets/img/gray_points.png"
                alt=""
              />
            </div>
        </section>
      </div>
    </main>
    <footer>
    <div class="width_100">
      <img class="main_footer_img width_100  " src="assets/img/footer2.png">
      <?php include('views/footer.php') ?>
    </div>
  </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
    <!-- drawer.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
    <script>
      $(document).ready(function () {
        $(".drawer").drawer();
      });
    </script>
  </body>
</html>

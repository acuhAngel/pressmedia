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
    <title>Infraestructura</title>
  </head>
  <body class="drawer drawer--left">
    <header>
      <div class="header mobile">
        <?php include('views/header_mobile.php') ?>
      </div>
      <div class="header desk"><?php include('views/header_desk.php') ?></div>
    </header>
    <main>
      <div class="flex column margin_mobile_16">
        <section class=" ">
          <p class="title_label intro_black_italic_italic">Infraestructura</p>
        </section>

        <section class="flex column width_100">
          <div class="division_section"></div>
          <div class="division_section">
            <img
              class="right_gray_points_up desk rotate"
              src="assets/img/gray_points.png"
              alt=""
            />
          </div>
          <div class="division"></div>
          <img class="width_100" src="assets/img/speedmaster.jpg" alt="" />
          <div class="division"></div>
          <div class="flex margin_32">
            <div class="text_align_end flex_item_50">
              <p class="intro_black_italic_italic font_size_48">
                Impresión Offset
              </p>
              <p class="intro_light_reg">
                <span class="intro_book_reg">Máquina offset 6 colores</span>
                <br />
                tamaño máximo de Impresión 102 x 72cm
                <br />
                mas aplicación de barniz.
              </p>
            </div>
          </div>

          <div class="division_section flex flex_end">
            <div class="">
              <img class="desk" src="assets/img/gray_points.png" alt="" />
            </div>
          </div>
          <div class="center_text_box">
            <p class="intro_light_reg font_size_28">
              Técnica de impresión que brinda mayor calidad, definición y
              transparencia en grandes volúmenes. consiste en aplicar una tinta
              sobre una plancha metálica y posteriormente se aplica al papel a
              través de una mantilla de caucho mediante presión.
            </p>
          </div>
        </section>
        <div class="division_section">
          <div class="">
            <img class="desk" src="assets/img/gray_points.png" alt="" />
          </div>
        </div>

        <section class="flex column">
          <img
            class="width_100"
            src="assets/img/typography-stack-paper-near-cutting-machine.jpg"
            alt=""
          />
          <div class="division"></div>
          <div class="text_align_right">
            <p class="intro_black_italic_italic font_size_48">
              Guillotinas Polar
            </p>

            <p class="intro_light_reg font_size_32">
              tamaño máximo de luz 115cm
              <br />
              máximo de pliego de 113 x 115cm y
              <br />
              cuchillas de carburo de tugsteno.
            </p>
          </div>
        </section>
        <div class="division"></div>
        <section>
          <div class="width_100 flex row mobile_margin">
            <div class="margin_32 desk">
              <div class="division_section"></div>
              <div class="division_section"></div>
              <div class="">
                <img class="desk" src="assets/img/gray_points.png" alt="" />
              </div>
            </div>

            <div class="flex_grow_1 gray_line">
              <div class="">
                <p class="intro_black_italic_italic font_size_48">
                  Máquinas suajadoras
                </p>
                <p
                  class="intro_thin_alt_reg font_size_32 text_align_center margin_0"
                >
                  tamaño maximo 120 cm.
                </p>
                <div class="division"></div>
              </div>
              <div>
                <p class="intro_black_italic_italic font_size_48">
                  Máquinas dobladoras con 4 dobleces naturales
                </p>
                <p
                  class="intro_thin_alt_reg font_size_32 text_align_center margin_0"
                >
                  tamaño màximo de 60 x 90 cm.
                </p>
                <div class="division"></div>
              </div>
              <div>
                <p class="intro_black_italic_italic font_size_48">
                  Máquinas de pegado de cajas.
                </p>
                <p
                  class="intro_thin_alt_reg font_size_32 text_align_center margin_0"
                >
                  Lineal y fondo automático.
                </p>
                <div class="division"></div>
              </div>
              <div>
                <p class="intro_black_italic_italic font_size_48">
                  Barnizadoras.
                </p>
                <p
                  class="intro_thin_alt_reg font_size_32 text_align_center margin_0"
                >
                  A registro, barniz plasta, barniz UV.
                </p>
                <div class="division"></div>
              </div>
              <div>
                <p class="intro_black_italic_italic font_size_48">
                  Máquina para Hot Stamping
                </p>
                <p
                  class="intro_thin_alt_reg font_size_32 text_align_center margin_0"
                >
                  Tamaño 4 cm
                </p>
                <div class="division"></div>
              </div>
            </div>
          </div>
        </section>

        <div class="division_section"></div>
        <section class="flex column">
          <div class="">
            <img
              class="width_100"
              src="assets/img/IMG20220923113233.png"
              alt=""
            />
          </div>
          <div class="flex">
            <div class="text_align_left margin_32 flex_item_50">
              <p class="intro_black_italic_italic font_size_48">
                Máquina CTP para filmado de placas para Offset.
              </p>
              <p class="intro_thin_alt_reg font_size_32">
                Tamaño máximo de 1050 mm.
              </p>
            </div>
            <div></div>
          </div>
        </section>
        <div class="division"></div>
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

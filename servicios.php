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
    <!-- owl carousel -->
    <link
      rel="stylesheet"
      href="../node_modules/owl.carousel/dist/assets/owl.carousel.min.css"
    />
    <!-- Drawe -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css"
    />
    <title>Servicios</title>
  </head>
  <body class="drawer drawer--left">
    <header>
      <div class="mobile"><?php include('views/header_mobile.php') ?></div>
      <div class="desk"><?php include('views/header_desk.php') ?></div>
    </header>
    <main>
      <div class="flex column margin_mobile_16">
        <section id="page_label_title">
          <p class="title_label intro_black_italic_italic">Servicios</p>
        </section>

        <section id="impresion" class="flex row rwrap">
          <div class="flex_item_50">
            <img
              class="width_100"
              src="assets/img/man-working-printing-house-with-paper-paints (2).png"
              alt=""
            />
          </div>
          <div class="flex column margin_32 flex_item_50">
            <div class="margin_32">
              <p class="intro_black_italic_italic font_size_48">Impresión</p>
              <p>
                En el departamento de prensas se ofrece impresión Offset hasta 6
                colores en linea más barniz.
              </p>
              <p>Se cuenta con las siguientes capacidades y tecnología:</p>
              <li>Velocidad de impresión hasta 15,000 pliegos/hora.</li>
              <li>Impresión de Alto lineaje.</li>
              <li>Aplicación de Barniz</li>
              <li>Tamaño máximo de impresión 72 x 102 cm</li>
            </div>
          </div>
        </section>
        <div class="division"></div>
        <section id="barniz" class="flex row rwrap flex_center">
          <div class="width_100">
            <img class="img_50" src="assets/img/barniz.png" alt="" />
          </div>
          <div class="flex column margin_32 text_align_end">
            <p class="intro_black_italic_italic font_size_48">Barniz</p>
            <p class="intro_book_alt_reg">
              Contamos con las mejores caracteristicas en el area, manejando
              barnices de marca, excelente brillo, secado rápido, buena
              fricción, y gran calidad de adehencia.
            </p>
            <p class="text_align_end">
              <span class="font_size_28">barniz a registro & barniz uv</span>
              <br />
              ( a registro, mate, textura y plasta)
            </p>
          </div>
        </section>
        <div class="division"></div>
        <section id="corte_suaje/diseño" class="flex column wrap wrap_desk">
          <div class="flex row rwrap">
            <div class="flex_item_50">
              <img
                class="width_100"
                src="assets/img/typography-stack-paper-near-cutting-machine.jpg"
                alt=""
              />
            </div>
            <div class="flex_item_50">
              <p
                class="intro_black_italic_italic font_size_56 text_align_center"
              >
                Corte y suaje
              </p>
              <div class="intro_book_alt_reg margin_32">
                <p>- Troquelado y servicio de guillotinas</p>
                <p>- Doblez y pegado de caja (Fondo lineal y automático)</p>
              </div>
            </div>
          </div>

          <div class="flex row wrap">
            <div class="flex_item_50">
              <p
                class="intro_black_italic_italic font_size_56 text_align_center"
              >
                Diseño gráfico
              </p>
              <div class="margin_32 intro_book_alt_reg">
                <p class="">- Imagen corporativa.</p>
                <p>- Proyectos especiales.</p>
                <p>- Marketing político.</p>
              </div>
            </div>
            <div class="flex_item_50">
              <img class="width_100" src="assets/img/magnifier.jpg" alt="" />
            </div>
          </div>
        </section>
        <section id="productos" class="margin_16">
          <p class="intro_black_italic_italic font_size_48 margin_32">
            Productos
          </p>
          <div class="flex column text_align_center flex_center">
            <p class="font_size_32 margin_0">Empaques</p>
            <p class="margin_0">(impresión en cajas y bolsas)</p>
            <div class="division"></div>
            <p class="font_size_32 margin_0">Etiquetas</p>
            <p class="margin_0">(papel couché y adhesivo).</p>
            <div class="division"></div>
            <p class="font_size_32 margin_0">Papelera Empresarial.</p>
            <p class="margin_0">
              (Hojas membretadas, tarjetas de presentación, sobres, folders,
              Recibos, Notas, Documentos Fiscales).
            </p>
            <div class="division"></div>
            <p class="font_size_32 margin_0">Diseño editorial.</p>
            <p class="margin_0">(Libros, revistas, folletos, libretas).</p>
            <div class="division"></div>
            <p class="font_size_32 margin_0">Producción publicitaria.</p>
            <p class="margin_0">
              ( dipticos, tripticos, cuadripticos, flyers, volantes, folletos,
              tarjetas publicitarias, separadores).
            </p>
            <div class="division"></div>
            <p class="font_size_32 margin_0">Impresión de placa para offset.</p>
            <div class="division"></div>
            <p class="font_size_32 margin_0">
              Impresión de etiqueta en tela. (nylon)
            </p>
          </div>
        </section>
        <div class="division"></div>
        <section id="clientes">
          <p
            class="intro_black_italic_italic font_size_48 text_align_end margin_32"
          >
            Principales Clientes
          </p>
        </section>
      </div>
    </main>
    <footer>
      <?php include('views/footer.php') ?>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
    <script src="../node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <!-- drawer.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
    <script>
      $(document).ready(function () {
        $(".drawer").drawer();
      });
      $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: true,
          },
          600: {
            items: 3,
            nav: false,
          },
          1000: {
            items: 5,
            nav: true,
            loop: false,
          },
        },
      });
    </script>
  </body>
</html>

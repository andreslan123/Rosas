<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Flores 21 | Ramos de flores amarillas</title>
    <link rel="icon" type="image/png" href="{{ asset('imagenes/iconoGirasol.png') }}">

    @vite('resources/css/app.css')
</head>

<body>

    <!-- ========================================
         NAVBAR
    ========================================= -->

    <header class="navbar">

        <div class="container navbar-content">

            <a href="#inicio" class="logo">
                Flores <span>21</span>
            </a>

            <nav class="nav-menu">

                <a href="#inicio">
                    Inicio
                </a>

                <a href="#ramos">
                    Ramos
                </a>

                <a href="#como-funciona">
                    Cómo funciona
                </a>

                <a href="#contacto">
                    Contacto
                </a>

            </nav>

        </div>

    </header>


    <!-- ========================================
         CONTENIDO PRINCIPAL
    ========================================= -->

    <main>


        <!-- ========================================
             HERO
        ========================================= -->

        <section id="inicio" class="hero">

            <div class="container hero-content">


                <!-- TEXTO -->

                <div class="hero-text">

                    <span class="hero-tag">
                        🌻 Flores amarillas · 21 de septiembre
                    </span>

                    <h1>
                        Haz que este
                        <span>21 florezca.</span>
                    </h1>

                    <p>
                        Ramos de flores preparados para regalar,
                        sorprender y hacer especial ese día.
                    </p>


                    <div class="hero-buttons">

                        <a
                            href="#ramos"
                            class="btn btn-primary"
                        >
                            Ver ramos
                        </a>


                        <a
                            href="https://wa.me/59164072075?text=Hola%2C%20quiero%20hacer%20un%20pedido%20de%20Flores%2021%20%F0%9F%8C%BB"
                            target="_blank"
                            class="btn btn-secondary"
                        >
                            Pedir por WhatsApp
                        </a>

                    </div>

                </div>


                <!-- IMAGEN PRINCIPAL -->

                <div class="hero-image">

                    <img
                        src="{{ asset('imagenes/ramoPrincipal.jpg') }}"
                        alt="Ramo de flores amarillas"
                    >

                </div>

            </div>

        </section>



        <!-- ========================================
             CATALOGO
        ========================================= -->

        <section id="ramos" class="catalog">

            <div class="container">


                <!-- TITULO -->

                <div class="section-heading">

                    <span class="section-tag">
                        NUESTROS RAMOS
                    </span>

                    <h2>
                        Elige el ramo perfecto
                    </h2>

                    <p>
                        Desde un detalle sencillo hasta un ramo
                        personalizado pensado especialmente para ti.
                    </p>

                </div>



                <!-- PRODUCTOS -->

                <div class="products-grid">


                    <!-- ==================================
                         RAMO 1 - GIRASOLES
                    ================================== -->

                    <a
                        href="https://wa.me/59164072075?text=Hola%2C%20quiero%20el%20ramo%20de%20girasoles%20%F0%9F%8C%BB"
                        target="_blank"
                        class="product-card"
                    >

                        <div class="product-image-wrapper">

                            <img
                                src="{{ asset('imagenes/RamoDe1.png') }}"
                                alt="Ramo de girasoles"
                                class="product-image"
                            >

                            <span class="product-featured">
                                MÁS VENDIDO
                            </span>

                            <span class="product-count">
                                🌻 Girasoles
                            </span>

                        </div>


                        <div class="product-content">

                            <span class="product-label">
                                Flores amarillas
                            </span>

                            <h3>
                                Ramos de Girasoles
                            </h3>

                            <p>
                                Una opción alegre y especial para
                                regalar este 21 de septiembre.
                            </p>


                            <div class="product-footer">

                                <strong>
                                    Desde Bs. 15
                                </strong>

                                <span class="product-link">
                                    Pedir →
                                </span>

                            </div>

                        </div>

                    </a>



                    <!-- ==================================
                         RAMO 2 - ROSAS
                    ================================== -->

                    <a
                        href="https://wa.me/59164072075?text=Hola%2C%20quiero%20consultar%20por%20un%20ramo%20de%20rosas%20%F0%9F%8C%B9"
                        target="_blank"
                        class="product-card"
                    >

                        <div class="product-image-wrapper">

                            <img
                                src="{{ asset('imagenes/RamoDeRosas.png') }}"
                                alt="Ramo de rosas"
                                class="product-image"
                            >

                            <span class="product-count">
                                🌹 Rosas
                            </span>

                        </div>


                        <div class="product-content">

                            <span class="product-label">
                                Rosas
                            </span>

                            <h3>
                                Ramos de Rosas
                            </h3>

                            <p>
                                Rosas para expresar tus sentimientos
                                con un detalle especial.
                            </p>


                            <div class="product-footer">

                                <strong>
                                    Consultar
                                </strong>

                                <span class="product-link">
                                    Pedir →
                                </span>

                            </div>

                        </div>

                    </a>

                    <!-- ==================================
                         RAMO 4 - PERSONALIZADO
                    ================================== -->

                    <a
                        href="https://wa.me/59164072075?text=Hola%2C%20quisiera%20cotizar%20un%20ramo%20personalizado%20con%20rosas%20de%20distintos%20colores%20%F0%9F%8C%B9%F0%9F%8E%A8"
                        target="_blank"
                        class="product-card product-card-custom"
                    >

                        <div class="product-image-wrapper">

                            <img
                                src="{{ asset('imagenes/RosasDeTodoColor.jpg') }}"
                                alt="Ramo personalizado de rosas"
                                class="product-image"
                            >

                            <span class="product-featured">
                                PERSONALIZADO
                            </span>

                            <span class="product-count">
                                🎨 Tu diseño
                            </span>

                        </div>


                        <div class="product-content">

                            <span class="product-label">
                                Diseño personalizado
                            </span>

                            <h3>
                                Crea tu propio ramo
                            </h3>

                            <p>
                                Elige colores, flores y estilo.
                                Cuéntanos tu idea y te ayudamos a
                                crear un ramo único para esa persona.
                            </p>


                            <div class="product-footer">

                                <strong>
                                    Cotizar
                                </strong>

                                <span class="product-link">
                                    Diseñar →
                                </span>

                            </div>

                        </div>

                    </a>

                </div>



                <!-- ========================================
                     AVISO PERSONALIZADO
                ========================================= -->

                <div class="catalog-more">

                    <h3>
                        🌹 ¿Tienes una idea diferente?
                    </h3>

                    <p>
                        Podemos ayudarte a crear un ramo personalizado
                        según los colores, flores y estilo que tengas en mente.
                    </p>

                </div>

            </div>

        </section>



        <!-- ========================================
             COMO FUNCIONA
        ========================================= -->

        <section
            id="como-funciona"
            class="how-it-works"
        >

            <div class="container">


                <div class="section-heading">

                    <span class="section-tag">
                        FÁCIL Y RÁPIDO
                    </span>

                    <h2>
                        ¿Cómo hacer tu pedido?
                    </h2>

                </div>



                <div class="steps-grid">


                    <!-- PASO 1 -->

                    <article class="step">

                        <span class="step-number">
                            01
                        </span>

                        <h3>
                            Elige tu ramo
                        </h3>

                        <p>
                            Escoge uno de nuestros diseños
                            o crea un ramo personalizado.
                        </p>

                    </article>



                    <!-- PASO 2 -->

                    <article class="step">

                        <span class="step-number">
                            02
                        </span>

                        <h3>
                            Escríbenos
                        </h3>

                        <p>
                            Haz clic en el ramo que te guste
                            y envíanos tu consulta por WhatsApp.
                        </p>

                    </article>



                    <!-- PASO 3 -->

                    <article class="step">

                        <span class="step-number">
                            03
                        </span>

                        <h3>
                            Coordinamos tu pedido
                        </h3>

                        <p>
                            Confirmamos los detalles y coordinamos
                            contigo la entrega de tu ramo.
                        </p>

                    </article>

                </div>

            </div>

        </section>



        <!-- ========================================
             CONTACTO
        ========================================= -->

        <section
            id="contacto"
            class="contact"
        >

            <div class="container">

                <div class="contact-box">

                    <span class="section-tag">
                        ¿LISTO PARA REGALAR?
                    </span>

                    <h2>
                        Haz tu pedido por WhatsApp 🌻
                    </h2>

                    <p>
                        Escríbenos y te ayudamos a elegir
                        o diseñar el ramo perfecto para esa ocasión.
                    </p>


                    <a
                        href="https://wa.me/59164072075?text=Hola%2C%20quiero%20hacer%20un%20pedido%20de%20Flores%2021%20%F0%9F%8C%BB"
                        target="_blank"
                        class="btn btn-whatsapp"
                    >
                        Pedir por WhatsApp
                    </a>

                </div>

            </div>

        </section>

    </main>



    <!-- ========================================
         FOOTER
    ========================================= -->

    <footer class="footer">

        <div class="container footer-content">

            <div>

                <strong>
                    Flores 21
                </strong>

                <p>
                    Detalles que hacen florecer momentos.
                </p>

            </div>


            <p>
                © 2026 Flores 21 · Todos los derechos reservados.
            </p>

        </div>

    </footer>

</body>
</html>
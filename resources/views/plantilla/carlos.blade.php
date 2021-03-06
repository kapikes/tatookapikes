 <style type="text/css">
           p{
            color:black;
           }
       </style>

<header class="main-header">
            <!-- fondo que llevara la imagen que viene abajo -->
            <div class="background-overlay text-white py-5">
                <div class="container">
                    <div class="row d-flex h-100">
                        <!-- OJO columna de 6 de 12 -->
                        <!-- centra el texto verticalmente -->
                        <div class="col-sm-6 text-center justify-content-center align-self-center">

                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Japones
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <img src="{{ asset('imagenes/japones.jpg') }}" class="img-thumbnail" hspace="5" vspace="5" style="float: right;" />
                                            <p>El arte japonés es uno de las artes más antiguos del tatuaje. Contiene diseños detallados que a menudo cubren grandes áreas del cuerpo como la espalda o el brazo. Este estilo sigue unas pautas artísticas muy estrictas: posicionamiento, imágenes utilizadas, dirección, color… para dar una imagen tradicional japonesa. Los tatuajes incluyen: flores de cerezo, dragones, geishas, etcétera. 

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Fechas
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            <img src="{{ asset('imagenes/flechas.jpg') }}" class="img-thumbnail" hspace="5" vspace="5" style="float: right;" />
                                            <p>Las flechas son tatuajes que están muy de moda. Aunque las flechas no tienen mayor secreto, las formas y estilos de éstas se combinan para crear tatuajes que quedan muy bien. Para la persona que se lo tatúa puede tener diferentes significados, pero generalmente se refieren a los sueños y objetivos o al camino a seguir.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Glifos
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            <img src="{{ asset('imagenes/glifos.jpg') }}" class="img-thumbnail" hspace="5" vspace="5" style="float: right;" />
                                            <p>Los glifos son signos grabados, escritos o pintados que se han empleado en diferentes culturas. Por ejemplo, por los maya o los griegos. son lo que se conoce como jeroglíficos en el Antiguo Egipto. Ideales para cualquier parte del cuerpo, pero siempre en pequeñas dimensiones.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingfour">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                                Numeros Romanos
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                                        <div class="card-body">
                                            <img src="{{ asset('imagenes/numerosromanos.jpg') }}" class="img-thumbnail" hspace="5" vspace="5" style="float: right;" />
                                            <p>Los números romanos también son un tatuaje muy popular. Estos números tienen gran tradición histórica, pero, además, quedan muy bien como tatuaje.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingfive">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                                Corazones
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">
                                        <div class="card-body">
                                            <img src="{{ asset('imagenes/corazones.jpg') }}" class="img-thumbnail" hspace="5" vspace="5" style="float: right;" />
                                            <p>Uno de los tipos de tatuaje que más se emplean son los corazones. Se pueden encontrar de diferentes tamaños y colores, pero generalmente representan el amor.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>





                            <!-- OJO ES UN BOTON QUE DICE LEE MAS -->
                            <!-- al poner btn-lg hacemos el boton mas grande y un pequeño borde -->
                            <!-- es un enlece que parace un boton -->
                            <a href="carlosFotos.html" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">VEMOS MAS....</a>
                        </div>
                        <!-- OJO columna de 6 de 12 -->
                        <div class="col-sm-6">
                            <!-- imagen que aparace en el fondo de la pagina -->
                            <!-- imagen responseive ponemos img-fluid -->
                            <!-- en el archivo main.css esta la imagen de fondo se llama background.jpg  -->
                            <!-- si esta en tañano de pantalla pequeño la imagen desaparece con esta clase -->
                            <img src="{{ asset('imagenes/carlos.jpg') }}" class="img-fluid d-none d-sm-block">
                        </div>
                    </div>
                </div>
            </div>
        </header>
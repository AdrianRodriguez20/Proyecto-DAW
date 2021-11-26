@extends('layouts.app')
<link href="{{ asset('css/faqs.css') }}" rel="stylesheet">
@section('content')
<div class="container">

    <div class="row">
        <div class="col-lg-4">
            <div class="row">

                <div class="col-lg-12">

                    <div class="nav nav-pills faq-nav" id="faq-tabs" role="tablist" aria-orientation="vertical">
                        <a href="#tab1" class="nav-link active" data-toggle="pill" role="tab" aria-controls="tab1"
                            aria-selected="true">
                            <i class="mdi mdi-help-circle"></i> Preguntas Frecuentes
                        </a>
                        <a href="#tab2" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab2"
                            aria-selected="false">
                            <i class="mdi mdi-account"></i> Guía Alumnado
                        </a>
                        <a href="#tab3" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab3"
                            aria-selected="false">
                            <i class="mdi mdi-account-settings"></i> Documentación
                        </a>
                        <a href="#tab4" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab4"
                            aria-selected="false">
                            <i class="mdi mdi-heart"></i> Guía Profesorado
                        </a>
                        <a href="#tab5" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab5"
                            aria-selected="false">
                            <i class="mdi mdi-help"></i> Contacta
                        </a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <img class="imgFaqs" src="https://i.ibb.co/kxLYy1T/FAQs-bro-min.png">
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="tab-content" id="faq-tab-content">
                <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                    <div class="accordion" id="accordion-tab-1">
                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-1">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#accordion-tab-1-content-1" aria-expanded="false"
                                        aria-controls="accordion-tab-1-content-1">
                                        ¿Qué es una convalidación de módulos profesionales de Formación Profesional?
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse show" id="accordion-tab-1-content-1"
                                aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p>
                                        La convalidación es el procedimiento para validar módulos superados de estudios
                                        reglados oficiales del sistema educativo. Imprescindible para el reconocimiento:
                                        los resultados obtenidos, los contenidos y carga horaria del módulo o módulos
                                        que se solicita convalidar. Asimismo, se a estar matriculado en el centro
                                        educativo
                                        para realizar la instancia de las convalidaciones de módulos.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-2">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#accordion-tab-1-content-2" aria-expanded="false"
                                        aria-controls="accordion-tab-1-content-2">
                                        ¿Qué estudios se pueden convalidar por estos módulos profesionales?
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-1-content-2"
                                aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p>
                                    <ul>
                                        <li><u>Formación Profesional Básica</u>.- se convalidan módulos de otro ciclo
                                            formativo de FP Básica cursado.</li>
                                        <li><u>Ciclo de Grado Medio</u>.- se convalidan módulos y estudios de:
                                            <ul>
                                                <li>Unidades de competencia oficialmente reconocidas.</li>
                                                <li>Estudios de FPI y FPII</li>
                                                <li>Módulos experimentales de FP de nivel II y nivel III</li>
                                                <li>Ciclos de grado medio.</li>
                                                <li>Ciclos de Grado Superior. </li>
                                                <li>Estudios de enseñanzas de régimen especial del sistema educativo
                                                </li>
                                            </ul>
                                            <span> <b>NOTA:</b>No se contemplan los estudios universitarios de
                                                diplomado, licenciado o grado al no pertenecer el grado medio al espacio
                                                de educación superior.
                                            </span>
                                        </li>
                                        <li><u>Ciclo de Grado Superior</u>.- se convalidan módulos y estudios de:
                                            <ul>
                                                <li>Unidades de competencia oficialmente reconocidas.</li>
                                                <li>Estudios de FPII.</li>
                                                <li>Módulos experimentales de FP de nivel III.</li>
                                                <li>Ciclos de Grado Superior. </li>
                                                <li>Estudios Universitarios oficiales de diplomado, licenciado o grado.
                                                </li>
                                                <li>Estudios de enseñanzas de régimen especial del sistema educativo
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <span> <b>NOTA:</b>La convalidación es efectiva al realizar la instancia de
                                        Solicitud de Convalidación en el centro y adjuntar un certificado de notas del
                                        ciclo. </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-3">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#accordion-tab-1-content-3" aria-expanded="false"
                                        aria-controls="accordion-tab-1-content-3">
                                        ¿Qué no es objeto de convalidación?
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-1-content-3"
                                aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p>
                                    <ul>
                                        <li>Estudios extranjeros, incluidos aquellos que han sido objeto de
                                            homologación.</li>
                                        <li>Másteres oficiales.</li>
                                        <li>Títulos propios universitarios.</li>
                                        <li>Estudios universitarios cuando se solicita la convalidación de
                                            módulos profesionales de ciclos formativos de grado medio.</li>
                                        <li> Estudios universitarios no se considerarán los programas de asignaturas
                                            convalidadas, reconocidas, adaptadas o superadas por compensación.El
                                            número de módulos que se soliciten no debe superar el 60% de los créditos
                                            ECTS establecidos para las enseñanzas mínimas del título en cuyo ciclo se
                                            efectúa la matrícula para los que se solicita la convalidación.</li>
                                        <li>Módulos convalidados o asignaturas de estudios universitarios oficiales
                                            de diplomado, licenciado o grado que consten como convalidadas. </li>
                                        <li>Títulos del sistema educativo que tengan declarada la equivalencia con el
                                            ciclo en el que se encuentra el módulo o los módulos que se soliciten.</li>
                                        <li>Certificados de idiomas no reconocidos oficialmente.</li>
                                        <li>Certificados de profesionalidad anteriores a la Ley Orgánica 5/2002 de 19 de
                                            Junio de las Cualificaciones y de la Formación Profesional</li>
                                        <li>Experiencia profesional, formación no formal, informal o de otros organismos
                                            e instituciones (artículo 3.9 del Real Decreto 1085/2020, de 9 de
                                            diciembre). </li>
                                        <li>No se convalidan títulos de obtención directa (pruebas libres). La normativa
                                            solo
                                            permite la convalidación o exención de módulos cursados en enseñanzas de
                                            formación
                                            profesional en un centro autorizado</li>
                                        <li>El módulo de Proyecto no contempla ni la convalidación o exención en ningún
                                            caso.</li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-4">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#accordion-tab-1-content-4" aria-expanded="false"
                                        aria-controls="accordion-tab-1-content-4">
                                        ¿Qué módulos pueden solicitar su convalidación?
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-1-content-4"
                                aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p>Se pueden solicitar módulos profesionales de ciclos formativos de formación
                                        profesional básica,
                                        de grado medio y de grado superior siempre que se esté matriculado en el año
                                        escolar en un
                                        centro educativo dentro de la oferta formativa de cada comunidad autónoma.</p>

                                    <p> Un módulo profesional viene definido por un código, denominación, carga horaria,
                                        resultados de aprendizaje y contenidos, y puede formar parte de varios ciclos
                                        formativos.
                                        En el caso de cursar un ciclo en el que se encuentra un módulo profesional que
                                        tenga el mismo código
                                        ya superado de otro ciclo, no hay que repetirlo, trasladándose la nota.</p>
                                    <p>
                                    <ul>
                                        <li><u>Convalidación del módulo de FOL (Formación y Orientación Laboral) :</u>
                                            <ul>
                                                <li>Convalidación ciclo de LOGSE a LOE de cualquier ciclo debe haberse
                                                    superado el módulo
                                                    y acreditar el nivel básico de Prevención de Riesgos laborales
                                                    expedido de acuerdo
                                                    con el RD 39/1997 de 17 de enero. </li>
                                                <li>Convalidación ciclo de LOE a LOE de cualquier ciclo debe haberse
                                                    superado el módulo.
                                                    El módulo de EMR (Empresa e iniciativa emprendedora ) también se
                                                    convalida sin necesidad
                                                    de aportar documentación extra. </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-5">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#accordion-tab-1-content-5" aria-expanded="false"
                                        aria-controls="accordion-tab-1-content-5">
                                        ¿Cómo se inicia el trámite de solicitud de convalidación?
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-1-content-5"
                                aria-labelledby="accordion-tab-1-heading-5" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p>El trámite se inicia en el centro educativo donde la persona que lo solicite esté
                                        matriculada,
                                        por lo que ante cualquier duda la Secretaría del centro puede solicitar más
                                        información al respecto. </p>
                                    <p>La instancia de solicitud se puede descargar directamente en la web del
                                        IES Puerto de la Cruz - Telesforo Bravo o rellenar directamente desde esta
                                        aplicación pulsando, en el menú, Formulario y descargar e imprimir. </p>
                                    <p>El impreso debidamente rellenado se debe entregar firmado en la Secretaría y
                                        adjuntado la documentación pertinente. </p>
                                    <p>La <strong>resolución de la solicitud</strong> puede ser responsabilidad del
                                        centro, de la Comunidad Autónoma o de la Subdirección General de Ordenación e
                                        Innovación
                                        de la Formación Profesional del Ministerio de Educación y Formación Profesional.
                                    </p>
                                    <p>Se debe tener en cuenta para entrega de las solicitudes:
                                    <ul>
                                        <li>EL plazo de presentación se inicia el día que comience el curso escolar
                                            hasta el la finalización del mes de octubre de cada curso escolar. </li>
                                        <li>Sólo se permite una única solicitud de convalidación por curso académico.
                                        </li>
                                        <li>Mientras dure el proceso de resolución, es necesario asistir a las
                                            actividades lectivas y evaluaciones de los módulos solicitados del curso que
                                            esté matriculado. </li>
                                        <li>Una vez entregada la convalidación en la secretaría, si no se desea que se
                                            haga efectiva, se puede renunciar mediante escrito dirigido a la dirección
                                            del centro.</li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-6">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#accordion-tab-1-content-6" aria-expanded="false"
                                        aria-controls="accordion-tab-1-content-6">
                                        ¿Cómo termina el trámite?
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-1-content-6"
                                aria-labelledby="accordion-tab-1-heading-6" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p>El trámite concluye con la emisión de la resolución de convalidación solicitada.
                                        La secretaría informará sobre la resolución de convalidaciones que son
                                        responsabilidad del centro educativo. </p>
                                    <p>Las resoluciones pueden ser favorables o desfavorables. La resolución favorable
                                        permite al alumnado a no asistir
                                        al módulo convalidado y obtener la nota del módulo superado. </p>
                                    <p>La resolución desfavorable, indica que se ha de cursar el módulo. Si no se está
                                        de acuerdo con el resultado se puede interponer un recurso de alzada. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-7">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#accordion-tab-1-content-7" aria-expanded="false"
                                        aria-controls="accordion-tab-1-content-7">
                                        ¿Y si no estoy de acuerdo?
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-1-content-7"
                                aria-labelledby="accordion-tab-1-heading-7" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p>En este caso, tal y como se especifica en la misma resolución, se puede
                                        interponer recurso de alzada. Solicite más información al respecto en la
                                        Secretaría del centro escolar que esté matriculado. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="tab2">
                    <div class="accordion" id="accordion-tab-2">
                        <div class="card">
                            <div class="card-header" id="accordion-tab-2-heading-1">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#accordion-tab-2-content-1" aria-expanded="false"
                                        aria-controls="accordion-tab-2-content-1">
                                        Usos de la aplicación para el alumno
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse show" id="accordion-tab-2-content-1"
                                aria-labelledby="accordion-tab-2-heading-1" data-parent="#accordion-tab-2">
                                <div class="card-body">
                                    <p>Esta aplicación se creó con el objetivo de agilizar el procedimiento de las
                                        convalidaciones, en el momento de realizar la instancia cómo el procedimiento de
                                        resolución de la misma.
                                    </p>
                                    <p>Diseñada para rellenar el formulario de solicitud de las convalidaciones, de
                                        manera fácil y sencilla, evitando posibles errores de transcripción de datos o
                                        de contenido erróneo. Asimismo de una impresión al término, es decir, una vez
                                        enviados los datos de solicitud de genera el documento de la instancia para su
                                        descarga, aportando la posibilidad de impresión en el mismo centro, enviarla por
                                        correo o almacenarla en una unidad extraíble. <b>Sólo se permite generar un
                                            impreso por alumno, la aplicación no admite dos dnis iguales</b>
                                    </p>
                                    <p><strong>NOTA: </strong>Se recomienda eliminar el documento del ordenador del
                                        centro por los datos sensibles del propio solicitante.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-2-heading-2">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#accordion-tab-2-content-2" aria-expanded="false"
                                        aria-controls="accordion-tab-2-content-2">
                                        Instrucciones para rellenar el formulario
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-2-content-2"
                                aria-labelledby="accordion-tab-2-heading-2" data-parent="#accordion-tab-2">
                                <div class="card-body">
                                    <p>El formulario consta de 5 apartados, todos los campos son obligatorios:
                                    <ol>
                                        <li><u>Datos personales</u>.- insertar los datos personales del solicitante,
                                            todos los campos son requeridos.</li>
                                        <li><u>Ciclo Formativo en que se está matriculado</u>.- indicar el estudio,
                                            nombre del ciclo inscripto y la familia a que pertenece el nivel y la ley
                                            educativa que lo ampara. Ejemplo, alumno matriculado en Desarrollo de
                                            aplicaciones Web, perteneciente a la familia de formación de Informática y
                                            Comunicación, ciclo de grado superior y ley LOE.</li>
                                        <li><u>Estudios que se aportan</u>.- en este apartado hay que indicar qué
                                            formación tiene el solicitante y desea presentar para la convalidación.</li>
                                        <li><u>Módulos Profesionales</u>.- nombre de los módulos (asignaturas) que se
                                            deseen presentar para la convalidación, con su código si pertenecen a
                                            módulos de Formación Profesional.</li>
                                        <li><u>Certificado de Notas</u>.- aportar obligatoriamente el certificado de
                                            notas para evaluar la convalidación. El archivo puede estar en formato PDF o
                                            ser una imagen JPGE/PNG.</li>
                                    </ol>
                                    </p>
                                    <p><strong>NOTA: </strong>se recomienda subir el archivo en buena calidad y mayor
                                        nitidez posible, sobretodo si el formato es una imagen.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-2-heading-3">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#accordion-tab-2-content-3" aria-expanded="false"
                                        aria-controls="accordion-tab-2-content-3">
                                        Estudios que se aportan
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-2-content-3"
                                aria-labelledby="accordion-tab-2-heading-3" data-parent="#accordion-tab-2">
                                <div class="card-body">
                                    <p>Se debe indicar qué tipo de estudio es, empleando los siguientes números.
                                        Insertar en el campo de TIPO. </p>
                                    <p>&nbsp; 1 Formación profesional de LOE </p>
                                    <p>&nbsp; 2 Formación profesional de LOGSE</p>
                                    <p>&nbsp; 3 Estudios Universitarios</p>
                                    <p>&nbsp; 4 Certificados de Profesionalidad</p>
                                    <p>&nbsp; 5 Otros</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-2-heading-4">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#accordion-tab-2-content-4" aria-expanded="false"
                                        aria-controls="accordion-tab-2-content-4">
                                        Módulos Profesionales
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-2-content-4"
                                aria-labelledby="accordion-tab-2-heading-4" data-parent="#accordion-tab-2">
                                <div class="card-body">
                                    <p>En caso de módulos profesionales indicar el código especificado en el Real
                                        Decreto que establece el título. El código identificativo del módulo
                                        (asignatura), consta de 3 o 4 dígitos. Esta información está disponible en la
                                        web del IES Telesforo Bravo, Portal de Educación del Gobiernos de Canarias cómo
                                        en el Portal TodoFP del Gobierno de España. <i> (links de acceso en “Más
                                            Información”)</i>.</p>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-2-heading-5">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#accordion-tab-2-content-5" aria-expanded="false"
                                        aria-controls="accordion-tab-2-content-5"> Más información</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-2-content-5"
                                aria-labelledby="accordion-tab-2-heading-5" data-parent="#accordion-tab-2">
                                <div class="card-body">
                                    <p>
                                    <ul>
                                        <li>Consultar la Web del IES Puerto de la Cruz - Telesforo Bravo: <a
                                                href="https://blog.iespuertodelacruz.es/alumnado/">acceder pulsando
                                                aquí</a></li>
                                        <li>Consultar más sobre Formación Profesional, Gobierno de España TodoFP:<a
                                                href="https://www.todofp.es/inicio.html">acceder pulsando aquí</a></li>
                                        <li>Consultar más sobre Formación Profesional, Gobierno de Canarias : <a
                                                href="https://www.gobiernodecanarias.org/educacion/web/formacion_profesional">acceder
                                                pulsando aquí</a></li>
                                        <li>Consulta directa sobre convalidaciones al Gobierno de Canarias:<a
                                                href="https://www.gobiernodecanarias.org/educacion/web/formacion_profesional/orientacion/convalidaciones_exenciones/">acceder
                                                pulsando aquí</a></li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab3" role="tabpanel" aria-labelledby="tab3">
                    <div class="accordion" id="accordion-tab-3">
                        <div class="card">
                            <div class="card-header" id="accordion-tab-3-heading-1">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#accordion-tab-3-content-1" aria-expanded="false"
                                        aria-controls="accordion-tab-3-content-1">
                                        ¿Qué documentación es necesario aportar?
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse show" id="accordion-tab-3-content-1"
                                aria-labelledby="accordion-tab-3-heading-1" data-parent="#accordion-tab-3">
                                <div class="card-body">
                                    <p> Documentación esencial:
                                    <ol>
                                        <li><b> Solicitud </b> dirigida a la dirección del centro educativo donde se
                                            efectúe la matrícula debidamente cumplimentada, fechada y firmada por la
                                            persona solicitante. <b> Debe constar el sello de entrada de la secretaría
                                                del centro educativo</b>.</li>
                                        <li><b>Certificado de matrícula en el centro educativo.</b>
                                        </li>
                                        <li><b>Certificado académico oficial de los estudios aportados</b>. En el caso
                                            de que
                                            consten convalidaciones, adaptaciones, reconocimientos, se debe añadir el
                                            certificado académico de los estudios que dieron origen a la convalidación,
                                            adaptación o reconocimiento.
                                        </li>

                                    </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-3-heading-2">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#accordion-tab-3-content-2" aria-expanded="false"
                                        aria-controls="accordion-tab-3-content-2">
                                        ¿ Y si mis estudios anteriores son de LOGSE?
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-3-content-2"
                                aria-labelledby="accordion-tab-3-heading-2" data-parent="#accordion-tab-3">
                                <div class="card-body">
                                    <p>Si los estudios anteriores pertenecen a la Ley de LOGSE, es obligatorio para ser
                                        efectiva la convalidación la aportadión de <b>diploma del curso de prevención
                                            de riesgos laborales, conforme a la legislación vigente</b>. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-3-heading-3">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#accordion-tab-3-content-3" aria-expanded="false"
                                        aria-controls="accordion-tab-3-content-3">
                                        ¿ Y si he realizado estudios universitarios?
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-3-content-3"
                                aria-labelledby="accordion-tab-3-heading-3" data-parent="#accordion-tab-3">
                                <div class="card-body">
                                    <p>Si se desean convalidar módulos aportando estudios universitarios, el solicitante
                                        debe incluir <b>los programas de las asignaturas cursadas y superadas</b> que el
                                        alumno considere que dan lugar a la convalidación del módulo o módulos
                                        solicitados. Estos <b>programas deben ir sellados por la Universidad</b>.En cada
                                        programa
                                        debe constar el mismo curso académico que figura en el certificado como
                                        superado. Si no fuera así, se debe adjuntar un escrito de la universidad
                                        confirmando que los
                                        programas son los que se impartieron el curso que se superaron.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab4" role="tabpanel" aria-labelledby="tab4">
                    <div class="accordion" id="accordion-tab-4">
                        <div class="card">
                            <div class="card-header" id="accordion-tab-4-heading-1">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#accordion-tab-4-content-1" aria-expanded="false"
                                        aria-controls="accordion-tab-4-content-1">Usos de la aplicación para el
                                        profesorado</button>
                                </h5>
                            </div>
                            <div class="collapse show" id="accordion-tab-4-content-1"
                                aria-labelledby="accordion-tab-4-heading-1" data-parent="#accordion-tab-4">
                                <div class="card-body">
                                    <p>Esta aplicación se creó con el objetivo de agilizar el procedimiento de las
                                        convalidaciones, en el momento de realizar la instancia cómo el procedimiento de
                                        resolución de la misma.</p>
                                    <p>Diseñada para recopilar los datos del alumnado y crear listados. Al acceder a los
                                        datos aportados por cada solicitante, se obtendrá toda la información y se
                                        procederá a la evaluación de las convalidaciones aportadas, y permite la
                                        descarga de la resolución en formato PDF, con los datos del alumnado,la
                                        resolución y del centro.</p>
                                    <p><strong>NOTA: </strong>Se recomienda eliminar el documento descargado del
                                        ordenador del centro por los datos sensibles del propio solicitante (apartado de
                                        datos personales).</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-4-heading-2">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#accordion-tab-4-content-2" aria-expanded="false"
                                        aria-controls="accordion-tab-4-content-2">
                                        Primer acceso a la aplicación: REGISTRO
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-4-content-2"
                                aria-labelledby="accordion-tab-4-heading-2" data-parent="#accordion-tab-4">
                                <div class="card-body">
                                    <p>El registro en la aplicación solicita los datos del profesor de nombre, email y
                                        una contraseña de longitud de 8 caracteres. Pero el acceso está restringido por
                                        una clave de acceso, que deberá solicitarse previamente.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-4-heading-3">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#accordion-tab-4-content-3" aria-expanded="false"
                                        aria-controls="accordion-tab-4-content-3">Acceso a la aplicación: LOGIN
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-4-content-3"
                                aria-labelledby="accordion-tab-4-heading-3" data-parent="#accordion-tab-4">
                                <div class="card-body">
                                    <p>El acceso a la aplicación, una vez registrada en la misma, es tan simple de
                                        introducir el email del usuario y contraseña. La primera vista que se despliega es
                                        el listado de peticiones por parte del alumnado.</p>
                                    <p><strong>NOTA: </strong>Recuerde cerrar la sesión de usuario para evitar el acceso
                                        a otras personas a los datos sensibles de los solicitantes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-4-heading-4">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#accordion-tab-4-content-4" aria-expanded="false"
                                        aria-controls="accordion-tab-4-content-4">
                                        Listado del alumnado y Vista detallada de un solicitante
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-4-content-4"
                                aria-labelledby="accordion-tab-4-heading-4" data-parent="#accordion-tab-4">
                                <div class="card-body">
                                    <p>El profesorado que abra sesión en la aplicación, se le mostrará directamente el
                                        listado de los alumnos que han realizado la petición de convalidación en una
                                        tabla con los datos más significativos. </p>
                                        <p>SE genera un listado completo, pudiéndose clasificar por solicitudes pendientes o resueltos.</p>
                                       <p> Cada solicitud posee un link de acceso
                                        al detalle de cada solicitante en particular. En esta vista, el profesorado no
                                        tiene acceso a la modificación de los datos del solicitante, sólo a la
                                        información de los módulos a convalidar y a la descarga del certificado de
                                        notas. Por cada módulo aportado, se puede aceptar o denegar la convalidación,
                                        siendo posible la edición en cada momento. Además, de la posibilidad de
                                        descargar el PDF de la resolución de las convalidaciones.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-4-heading-5">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#accordion-tab-4-content-5" aria-expanded="false"
                                        aria-controls="accordion-tab-4-content-5">Documento de Resolución de
                                        Convalidación</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-4-content-5"
                                aria-labelledby="accordion-tab-4-heading-5" data-parent="#accordion-tab-4">
                                <div class="card-body">
                                    <p>El documento de la resolución, únicamente se puede descargar accediendo a la
                                        vista de detalle de cada solicitante. Se descarga en formato PDF, con toda la
                                        información aportada, y las convalidaciones resueltas, y la información del
                                        Centro Educativo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab5" role="tabpanel" aria-labelledby="tab5">
                    <div class="accordion" id="accordion-tab-5">
                        <div class="card">
                            <div class="card-header" id="accordion-tab-5-heading-1">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#accordion-tab-5-content-1" aria-expanded="false"
                                        aria-controls="accordion-tab-5-content-1">Dirección</button>
                                </h5>
                            </div>
                            <div class="collapse show" id="accordion-tab-5-content-1"
                                aria-labelledby="accordion-tab-5-heading-1" data-parent="#accordion-tab-5">
                                <div class="card-body">
                                    <p>Calle las Cabezas, 7, 38400 Puerto de la Cruz, Santa Cruz de Tenerife</p>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-5-heading-2">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#accordion-tab-5-content-2" aria-expanded="false"
                                        aria-controls="accordion-tab-5-content-2">Formas de contacto</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-5-content-2"
                                aria-labelledby="accordion-tab-5-heading-2" data-parent="#accordion-tab-5">
                                <div class="card-body">

                                    <p>Teléfono: <strong>922380112</strong></p>
                                    <p>Fax: <strong>922381401</strong></p>
                                    <p>Email: <strong><a
                                                href="mailto:info@iespuertodelacruz.es">info@iespuertodelacruz.es</a></strong>
                                    </p>
                                    <p>Canal Telegram: <strong><a href="http://telegram.me/iespto">@IESPTO</a></strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-5-heading-3">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#accordion-tab-5-content-3" aria-expanded="false"
                                        aria-controls="accordion-tab-5-content-3">Horario</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-5-content-3"
                                aria-labelledby="accordion-tab-5-heading-3" data-parent="#accordion-tab-5">
                                <div class="card-body">
                                    <p><strong>Horario de Secretaría:</strong></p>
                                    <p> De 9:00h a 13:00h de Lunes a Viernes.</p>
                                    <p><strong>Horario General del Centro:</strong></p>
                                    <p> De 8:00h a 22:00h de Lunes a Jueves.</p>
                                    <p> Viernes de 8:00h a 20:00h.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-5-heading-4">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#accordion-tab-5-content-4" aria-expanded="false"
                                        aria-controls="accordion-tab-5-content-4">Mapa</button>
                                </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-5-content-4"
                                aria-labelledby="accordion-tab-5-heading-4" data-parent="#accordion-tab-5">
                                <div class="card-body">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7022.07476722577!2d-16.550351000000003!3d28.41191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x97e763bf7638fd44!2sIES%20Puerto%20de%20la%20Cruz!5e0!3m2!1ses!2sus!4v1621865767047!5m2!1ses!2sus"
                                        width="500" height="350" style="border:0;" allowfullscreen=""
                                        loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

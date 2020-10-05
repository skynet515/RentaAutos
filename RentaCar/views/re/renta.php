<?php include('menu.php');
include_once('../../CapaNegocios/Nrenta.php');
$renta = new Nrenta();
$idauto = $_GET['id'];

if (!is_numeric($idauto)) { ?>
    <script>
        window.location.replace('autosDisp.php');
    </script>
    <?php
} else {

    $data = $renta->ListarPortada($idauto);
    if ($data == null) {
    ?>
        <script>
            window.location.replace('autosDisp.php');
        </script>
    <?php
    } else {
        $precio = $data['precio'];
    ?>

        <div id="page_caption" class="hasbg  withtopbar " style="background-image:url(img/<?= $data['portada']; ?>">

            <div class="single_car_header_button">
                <div class="standard_wrapper">

                    <?php
                    $num = 0;
                    $lista = $renta->ListaImages($idauto);
                    foreach ($lista as $matriz => $img) {
                    ?>
                        <?php if ($matriz == 0) {  ?>

                            <a href="img/<?= $img['img']; ?>" id="single_car_gallery_open" class="button fancy-gallery"><span class="ti-camera"></span>Ver fotos</a>

                        <?php } else if ($matriz > 0) {

                        ?>

                            <div style="display:none;">
                                <a id="single_car_gallery_image1" href="img/<?= $img['img']; ?>" title="" class="fancy-gallery"></a>
                            </div>

                    <?php    }
                    } ?>
                </div>
            </div>

            <div class="single_car_header_content">
                <div class="standard_wrapper">
                    <div class="single_car_header_price">
                        <span id="single_car_price"><span class="single_car_currency">$</span><span class="single_car_price"><?= $data['precio']; ?></span></span>
                        <span id="single_car_price_per_unit_change" class="single_car_price_per_unit">
                            <span id="single_car_unit">Por día</span>
                        
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Begin content -->
        <div id="page_content_wrapper" class="hasbg withtopbar ">
            <div class="inner">

                <!-- Begin main content -->
                <div class="inner_wrapper">

                    <div class="sidebar_content">

                        <h1><?= $data['marca']; ?> <?= $data['modelo']; ?></h1>

                        <div class="single_car_attribute_wrapper themeborder">
                            <div class="one_fourth">
                                <div class="car_attribute_icon ti-user"></div>
                                <div class="car_attribute_content">
                                    <?= $data['capacidad']; ?>&nbsp; Pasajeros</div>
                            </div>

                            <div class="one_fourth">
                                <div class="car_attribute_icon ti-briefcase"></div>
                                <div class="car_attribute_content">
                                    4&nbsp; Maletas</div>
                            </div>

                            <div class="one_fourth">
                                <div class="car_attribute_icon ti-panel"></div>
                                <div class="car_attribute_content">
                                    <?= $data['transmision']; ?> </div>
                            </div>

                            <div class="one_fourth last">
                                <div class="car_attribute_icon ti-car"></div>
                                <div class="car_attribute_content">
                                    <?= $data['cant_puertas']; ?>&nbsp; Puertas </div>
                            </div>
                        </div>
                        <br class="clear" />

                        <ul class="single_car_departure_wrapper themeborder">
                            <li>
                                <div class="single_car_departure_title">Incluye</div>
                                <div class="single_car_departure_content">
                                    <div class="one_half ">
                                        <span class="ti-check"></span>Entrada de Audio </div>
                                    <div class="one_half last">
                                        <span class="ti-check"></span>GPS</div>
                                    <div class="one_half ">
                                        <span class="ti-check"></span>Bluetooth </div>
                                    <div class="one_half last">
                                        <span class="ti-check"></span>Entradas USB</div>
                                    <div class="one_half last">
                                        <span class="ti-check"></span>FM Radio </div>
                                </div>
                            </li>

                            <li>
                                <div class="single_car_departure_title">Nota:</div>
                                <div class="single_car_departure_content">
                                    <p><b>Las reservacciones deben hacerse con dos días de anticipación</b></p>
                                </div>
                            </li>
                        </ul>

                        <div class="fullwidth_comment_wrapper sidebar">
                            <div>

                                <div class="right ">
                                    <div class="comment_text">
                                    </div>

                                </div>


                                <div class="gravatar">
                                </div>

                                <div class="right ">

                                    <div class="comment_text" />

                                </div>
                            </div>
                            <div class="right ">
                                <div class="comment_text">

                                </div>

                            </div>


                            <div class="right ">
                                <div class="comment_text">

                                </div>

                            </div>
                            <!-- #comment-## -->
                        </div>
                    </div>

                </div>

                <div class="sidebar_wrapper">

                    <div class="sidebar_top"></div>

                    <div class="sidebar">

                        <div class="content">

                            <div class="single_car_header_price">
                                <span id="single_car_price_scroll"><span class="single_car_currency">$</span><span class="single_car_price"><?= $data['precio']; ?></span></span>
                                <span id="single_car_price_per_unit_change_scroll" class="single_car_price_per_unit">
                                    <span id="single_car_unit_scroll">Per Day</span>
                                    <span class="ti-angle-down"></span>

                                    <ul id="price_per_unit_select_scroll">
                                        <li class="icon arrow"></li>
                                        <li class="active">
                                            <a class="active" href="javascript:;" data-filter="car_price_day" data-price="&lt;span class=&quot;single_car_currency&quot;&gt;$&lt;/span&gt;&lt;span class=&quot;single_car_price&quot;&gt;127&lt;/span&gt;">Per Day</a>
                                        </li>
                                        <li>
                                            <a class="active" href="javascript:;" data-filter="car_price_hour" data-price="&lt;span class=&quot;single_car_currency&quot;&gt;$&lt;/span&gt;&lt;span class=&quot;single_car_price&quot;&gt;14&lt;/span&gt;">Per Hour</a>
                                        </li>
                                        <li>
                                            <a class="active" href="javascript:;" data-filter="car_price_airport" data-price="&lt;span class=&quot;single_car_currency&quot;&gt;$&lt;/span&gt;&lt;span class=&quot;single_car_price&quot;&gt;120&lt;/span&gt;">Airport Transfer</a>
                                        </li>
                                    </ul>
                                </span>
                                <hr />
                            </div>

                            <div class="single_car_booking_wrapper themeborder book_instantly">
                                <div role="form" class="wpcf7" id="wpcf7-f157-o1" lang="en-US" dir="ltr">
                                    <div class="screen-reader-response"></div>
                                    <form action="#" method="post" class="wpcf7-form" novalidate="novalidate">

                                        <p>
                                            <label> Nombre Completo
                                                <br />
                                                <span class="wpcf7-form-control-wrap your-name"><input type="text" id="nombre" name="nombre" value="" required="required" size="40" class="wpcf7-form-control wpcf7-text wpcf7" aria-required="true" aria-invalid="true" placeholder="John Doe" /></span> </label>
                                        </p>
                                        <p>
                                            <label> Correo Electrónico
                                                <br />
                                                <span class="wpcf7-form-control-wrap your-email"><input type="email" id="correo" name="correo" value="" required size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="sample@yourcompany.com" /></span> </label>
                                        </p>

                                        <p>
                                            <label> Pais
                                                <br />
                                                <span class="wpcf7-form-control-wrap pickup-time"><select name="pais" id="pais" required class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                                                        <option value="">Seleccione...</option>
                                                        <option value="Argentina"> Argentina</option>
                                                        <option value="Bahamas"> Bahamas</option>
                                                        <option value="Barbados"> Barbados</option>
                                                        <option value="Belice"> Belice</option>
                                                        <option value="Bolivia"> Bolivia</option>
                                                        <option value="Brasil"> Brasil</option>
                                                        <option value="Canadá"> Canadá</option>
                                                        <option value="Chile"> Chile</option>
                                                        <option value="Colombia"> Colombia</option>
                                                        <option value="Costa Rica"> Costa Rica</option>
                                                        <option value="Cuba"> Cuba</option>
                                                        <option value="Dominica"> Dominica</option>
                                                        <option value="Ecuador"> Ecuador</option>
                                                        <option value="El Salvador"> El Salvador</option>
                                                        <option value="España"> España</option>
                                                        <option value="Estados Unidos"> Estados Unidos</option>
                                                        <option value="Francia"> Francia</option>
                                                        <option value="Granada"> Granada</option>
                                                        <option value="Guatemala"> Guatemala</option>
                                                        <option value="Guyana"> Guyana</option>
                                                        <option value="Haití"> Haití</option>
                                                        <option value="Honduras"> Honduras</option>
                                                        <option value="Italia"> Italia</option>
                                                        <option value="Jamaica"> Jamaica</option>
                                                        <option value="México"> México</option>
                                                        <option value="Nicaragua"> Nicaragua</option>
                                                        <option value="Panamá"> Panamá</option>
                                                        <option value="Paraguay"> Paraguay</option>
                                                        <option value="Perú"> Perú</option>
                                                        <option value="Portugal"> Portugal</option>
                                                        <option value="República Dominicana"> República Dominicana</option>
                                                        <option value="San Cristóbal y Nieves"> San Cristóbal y Nieves</option>
                                                        <option value="San Vicente y las Granadinas"> San Vicente y las Granadinas</option>
                                                        <option value="Santa Lucía"> Santa Lucía</option>
                                                        <option value="Surinam"> Surinam</option>
                                                        <option value="Trinidad y Tobago"> Trinidad y Tobago</option>
                                                        <option value="Uruguay"> Uruguay</option>
                                                        <option value="Venezuela"> Venezuela</option>
                                                    </select></span>
                                        </p>
                                        <p>
                                            <label> Número de teléfono
                                                <br />
                                                <span class="wpcf7-form-control-wrap your-tel"><input type="tel" name="tel" id="tel" value="" size="40" required="" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="+66-4353434" /></span> </label>
                                        </p>
                                        <p>
                                            <label> Dirección de recogida
                                                <br />
                                                <span class=" wpcf7-form-control-wrap pickup-address"><input type="text" required="" id="d_recogida" name="d_recogida" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="34 Mainfield Road" /></span> </label>
                                        </p>
                                        <p>
                                            <label> Fecha de recogida
                                                <br />
                                                <span class="wpcf7-form-control-wrap pickup-date"><input type="date" id="f_recorrida" name="f_recogida" required="" value="mm/dd/yyyy" class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date" aria-required="true" aria-invalid="false" /></span> </label>

                                            <script>
                                                $(function() {
                                                    $('input[name="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date"]').datepicker({

                                                        minDate: '08/12/2020'
                                                    });
                                                });
                                            </script>
                                        </p>

                                        <p>
                                            <label> Hora de recogida
                                                <br />
                                                <span class="wpcf7-form-control-wrap pickup-time"><select name="h_entrega" id="h_entrega" required="required" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                                                        <option value="">---</option>
                                                        <option value="1:00">1:00</option>
                                                        <option value="1:30">1:30</option>
                                                        <option value="2:00">2:00</option>
                                                        <option value="2:30">2:30</option>
                                                        <option value="3:00">3:00</option>
                                                        <option value="3:30">3:30</option>
                                                        <option value="5:00">5:00</option>
                                                        <option value="5:30">5:30</option>
                                                        <option value="6:00">6:00</option>
                                                        <option value="6:30">6:30</option>
                                                        <option value="7:00">7:00</option>
                                                        <option value="7:30">7:30</option>
                                                        <option value="8:00">8:00</option>
                                                        <option value="8:30">8:30</option>
                                                        <option value="9:00">9:00</option>
                                                        <option value="9:30">9:30</option>
                                                        <option value="10:00">10:00</option>
                                                        <option value="10:30">10:30</option>
                                                        <option value="11:00">11:00</option>
                                                        <option value="11:30">11:30</option>
                                                        <option value="12:00">12:00</option>
                                                        <option value="12:30">12:30</option>
                                                        <option value="13:00">13:00</option>
                                                        <option value="13:30">13:30</option>
                                                        <option value="14:00">14:00</option>
                                                        <option value="14:30">14:30</option>
                                                        <option value="15:00">15:00</option>
                                                        <option value="15:30">15:30</option>
                                                        <option value="16:00">16:00</option>
                                                        <option value="16:30">16:30</option>
                                                        <option value="17:00">17:00</option>
                                                        <option value="17:30">17:30</option>
                                                        <option value="18:00">18:00</option>
                                                        <option value="18:30">18:30</option>
                                                        <option value="19:00">19:00</option>
                                                        <option value="19:30">19:30</option>
                                                        <option value="20:00">20:00</option>
                                                        <option value="20:30">20:30</option>
                                                        <option value="21:00">21:00</option>
                                                        <option value="21:30">21:30</option>
                                                        <option value="22:00">22:00</option>
                                                        <option value="22:30">22:30</option>
                                                        <option value="23:00">23:00</option>
                                                        <option value="23:30">23:30</option>
                                                        <option value="24:00">24:00</option>
                                                        <option value="24:30">24:30</option>
                                                    </select></span> </label>
                                        </p>
                                        <p>
                                            <label> Fecha de entrega
                                                <br />
                                                <span class="wpcf7-form-control-wrap pickup-date"><input type="date" name="f_entrega" required="" value="mm/dd/yyyy" class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date" aria-required="true" aria-invalid="false" /></span> </label>
                                        </p>

                                        <p>
                                            <label> Dirección de entrega
                                                <br />
                                                <span class=" wpcf7-form-control-wrap dropoff-address"><input type="text" id="d_entrega" name="d_entrega" value="" required="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Heatrow Airport" /></span> </label><span class="wpcf7-form-control-wrap dynamicurl"><input type="hidden" name="dynamicurl" value="http://themes.themegoods.com/grandcarrental/demo/car/mercedes-benz-gle/" size="40" class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamichidden" aria-invalid="false" /></span></p>

                                        <p>
                                            <label> Hora de recogida
                                                <br />
                                                <span class="wpcf7-form-control-wrap pickup-time"><select name="h_recogida" id="h_recogida" required="" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                                                        <option value="">---</option>
                                                        <option value="1:00">1:00</option>
                                                        <option value="1:30">1:30</option>
                                                        <option value="2:00">2:00</option>
                                                        <option value="2:30">2:30</option>
                                                        <option value="3:00">3:00</option>
                                                        <option value="3:30">3:30</option>
                                                        <option value="5:00">5:00</option>
                                                        <option value="5:30">5:30</option>
                                                        <option value="6:00">6:00</option>
                                                        <option value="6:30">6:30</option>
                                                        <option value="7:00">7:00</option>
                                                        <option value="7:30">7:30</option>
                                                        <option value="8:00">8:00</option>
                                                        <option value="8:30">8:30</option>
                                                        <option value="9:00">9:00</option>
                                                        <option value="9:30">9:30</option>
                                                        <option value="10:00">10:00</option>
                                                        <option value="10:30">10:30</option>
                                                        <option value="11:00">11:00</option>
                                                        <option value="11:30">11:30</option>
                                                        <option value="12:00">12:00</option>
                                                        <option value="12:30">12:30</option>
                                                        <option value="13:00">13:00</option>
                                                        <option value="13:30">13:30</option>
                                                        <option value="14:00">14:00</option>
                                                        <option value="14:30">14:30</option>
                                                        <option value="15:00">15:00</option>
                                                        <option value="15:30">15:30</option>
                                                        <option value="16:00">16:00</option>
                                                        <option value="16:30">16:30</option>
                                                        <option value="17:00">17:00</option>
                                                        <option value="17:30">17:30</option>
                                                        <option value="18:00">18:00</option>
                                                        <option value="18:30">18:30</option>
                                                        <option value="19:00">19:00</option>
                                                        <option value="19:30">19:30</option>
                                                        <option value="20:00">20:00</option>
                                                        <option value="20:30">20:30</option>
                                                        <option value="21:00">21:00</option>
                                                        <option value="21:30">21:30</option>
                                                        <option value="22:00">22:00</option>
                                                        <option value="22:30">22:30</option>
                                                        <option value="23:00">23:00</option>
                                                        <option value="23:30">23:30</option>
                                                        <option value="24:00">24:00</option>
                                                        <option value="24:30">24:30</option>
                                                    </select></span> </label>
                                        </p>
                                        <p>
                                            <button type="submit" class="btn btn-success btn-lg">Realizar Reserva</button>
                                            <?php $req = $renta->registrarRenta($idauto, $precio); ?>
                                        </p>

                                    </form>
                                </div>
                                <br class="clear" />
                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <!-- End main content -->

            <br class="clear" />

        </div>
        </div>


        <link rel="stylesheet" href="//unpkg.com/bootstrap@3.3.7/dist/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="//unpkg.com/bootstrap-select@1.12.4/dist/css/bootstrap-select.min.css" type="text/css" />
        <link rel="stylesheet" href="//unpkg.com/bootstrap-select-country@4.0.0/dist/css/bootstrap-select-country.min.css" type="text/css" />


        <script src="//unpkg.com/jquery@3.4.1/dist/jquery.min.js"></script>
        <script src="//unpkg.com/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
        <script src="//unpkg.com/bootstrap-select@1.12.4/dist/js/bootstrap-select.min.js"></script>
        <script src="//unpkg.com/bootstrap-select-country@4.0.0/dist/js/bootstrap-select-country.min.js"></script>
        <style type="text/css">
            .bootstrap-select>.dropdown-toggle {
                width: 130%;
                height: 25%;
            }
        </style>
<?php
        include('footer.php');
    }
}
?>
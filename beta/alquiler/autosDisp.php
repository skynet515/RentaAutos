<?php 

    include('menu.php');
    include('../conexion.php');

    
?>

        <div id="page_caption" class="hasbg parallax  withtopbar  " style="background-image:url(upload/driver-2.jpg);">

            <div class="page_title_wrapper">
                <div class="page_title_inner">
                    <div class="page_title_content">
                        <h1 class="withtopbar">Disfruta nuestra nueva flota</h1>
                        <div class="page_tagline">
                            Reserva los mejores autos, no te arrenpetiras</div>
                    </div>
                </div>
            </div>

        </div>

        <div id="page_content_wrapper" class="hasbg withtopbar ">
            <div class="inner">

                <div class="inner_wrapper nopadding">

                    <div id="page_main_content" class="sidebar_content full_width fixed_column">

                        <div class="standard_wrapper">

                            <div id="portfolio_filter_wrapper" class="gallery classic three_cols portfolio-content section content clearfix" data-columns="3">
                                <!--INICIO DE WHILE-->

                                <?php  
                                    $query = mysqli_query($miconexion,"
                                    
                                        SELECT  md.modelo, tra.transmision, aut.precio, aut.capacidad, mc.marca, img.img
                                        FROM tblautos AS aut inner join tblmodelo AS md on aut.idmodelo = md.idmodelo
                                        inner join tbltransmision AS tra on tra.idtransmision = aut.idtransmision
                                        inner join tblmarca AS mc on mc.idmarca = aut.idmarca
                                        INNER JOIN asignarimg AS a ON a.idautos = aut.idautos
                                        INNER JOIN tblimg AS img ON img.idimg = a.idimg

                                    
                                    
                                    ");
                                    mysqli_data_seek( $query, 0 );
                                    

                                    while ($data = mysqli_fetch_array($query)) { 

                                ?>
                                <div class="element grid classic3_cols animated2">

                                    <div class="one_third gallery3 classic static filterable portfolio_type themeborder" data-id="post-2">

                                        <a class="car_image" href="#">
                                            <img src="upload/<?=$data['img'];?>" alt="BMW 3 Series" />
                                        </a>

                                        <div class="portfolio_info_wrapper">
                                            <div class="car_attribute_wrapper">
                                                <a class="car_link" href="#"><h4><?=$data['marca'];?> <?=$data['modelo'];?></h4></a>
                                                

                                                <div class="car_attribute_wrapper_icon">
                                                    <div class="one_fourth">
                                                        <div class="car_attribute_icon ti-user"></div>
                                                        <div class="car_attribute_content">
                                                        <?=$data['capacidad'];?> </div>
                                                    </div>

                                                    <div class="one_fourth">
                                                        <div class="car_attribute_icon ti-briefcase"></div>
                                                        <div class="car_attribute_content">
                                                            2 </div>
                                                    </div>

                                                    <div class="one_fourth">
                                                        <div class="car_attribute_icon ti-panel"></div>
                                                        <div class="car_attribute_content">
                                                        <?=$data['transmision'];?>   </div>
                                                    </div>

                                                </div>
                                                <br class="clear" />
                                            </div>
                                            <div class="car_attribute_price">
                                                <div class="car_attribute_price_day three_cols">
                                                    <span class="single_car_currency">$</span><span class="single_car_price"><?=$data['precio'];?></span> <span class="car_unit_day">Per Day</span>
                                                </div>
                                            </div>
                                            <br class="clear" />
                                        </div>
                                    </div>
                                </div>

                                    <?php } ?>
                               <!--FIN DE WHILE-->
                            </div>
                            <br class="clear" />
                            <div class="pagination"><span class="current">1</span><a href='#' class="inactive">2</a></div>
                            <div class="pagination_detail">
                                Page 1 of 2 </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php include('footer.php')?>


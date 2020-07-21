<?php include('menu.php');
include_once('../../CapaNegocios/Nrenta.php');
$renta = new Nrenta();

$idauto = $_GET['id'];
$data = $renta->ListarPortada($idauto);

?>

<div id="page_caption" class="hasbg  withtopbar " style="background-image:url(upload/<?= $data['portada']; ?>">

    <div class="single_car_header_button">
        <div class="standard_wrapper">

            <?php
            $num = 0;
            $lista = $renta->ListaImages($idauto);
            foreach ($lista as $matriz => $img) {


            ?>
                <?php if ($matriz == 0) {  ?>

                    <a href="upload/<?= $img['img']; ?>" id="single_car_gallery_open" class="button fancy-gallery"><span class="ti-camera"></span>View Photos</a>

                <?php } else if ($matriz > 0) {

                ?>

                    <div style="display:none;">
                        <a id="single_car_gallery_image1" href="upload/<?= $img['img']; ?>" title="" class="fancy-gallery"></a>
                    </div>

            <?php    }
            } ?>
            <a href="#video_review143" id="single_car_video_review_open" class="button" data-type="inline"><span class="ti-control-play"></span>Video Review</a>

            <div id="video_review143" class="car_video_review_wrapper" style="display:none;">
                <iframe width="1280" height="720" src="https://www.youtube.com/embed/ajeCEr-SRac" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="single_car_header_content">
        <div class="standard_wrapper">
            <div class="single_car_header_price">
                <span id="single_car_price"><span class="single_car_currency">$</span><span class="single_car_price"><?= $data['precio']; ?></span></span>
                <span id="single_car_price_per_unit_change" class="single_car_price_per_unit">
                    <span id="single_car_unit">Por día</span>
                    <span class="ti-angle-down"></span>

                    <ul id="price_per_unit_select">
                        <li class="icon arrow"></li>
                        <li class="active">
                            <a class="active" href="javascript:;" data-filter="car_price_day" data-price="&lt;span class=&quot;single_car_currency&quot;&gt;$&lt;/span&gt;&lt;span class=&quot;single_car_price&quot;&gt;64&lt;/span&gt;">Per Day</a>
                        </li>
                        <li>
                            <a class="active" href="javascript:;" data-filter="car_price_hour" data-price="&lt;span class=&quot;single_car_currency&quot;&gt;$&lt;/span&gt;&lt;span class=&quot;single_car_price&quot;&gt;8&lt;/span&gt;">Per Hour</a>
                        </li>
                        <li>
                            <a class="active" href="javascript:;" data-filter="car_price_airport" data-price="&lt;span class=&quot;single_car_currency&quot;&gt;$&lt;/span&gt;&lt;span class=&quot;single_car_price&quot;&gt;75&lt;/span&gt;">Airport Transfer</a>
                        </li>
                    </ul>
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
                <div class="single_car_content">
                    <h4 class="p1">Refueling</h4>
                    <p class="p2">Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse.</p>
                    <h4 class="p1">Car Wash</h4>
                    <p class="p2">Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar jean vinegar stumptown yr pop-up artisan sunt. Craft beer elit seitan exercitation, photo booth</p>
                    <h4 class="p1">No Smoking</h4>
                    <p class="p2">See-through delicate embroidered organza blue lining luxury acetate-mix stretch pleat detailing. Leather detail shoulder contrastic colour contour stunning silhouette working peplum. Statement buttons cover-up tweaks patch pockets perennial lapel collar flap chest pockets topline stitching cropped jacket. Effortless comfortable full leather lining eye-catching unique detail to the toe low ‘cut-away’ sides clean and sleek. Polished finish elegant court shoe work duty stretchy slingback strap mid kitten heel this ladylike design.</p>
                </div>
                <?php// }?>
                <ul class="single_car_departure_wrapper themeborder">
                    <li>
                        <div class="single_car_departure_title">Included</div>
                        <div class="single_car_departure_content">
                            <div class="one_half ">
                                <span class="ti-check"></span>Audio input </div>
                            <div class="one_half last">
                                <span class="ti-check"></span>All Wheel drive </div>
                            <div class="one_half ">
                                <span class="ti-check"></span>Bluetooth </div>
                            <div class="one_half last">
                                <span class="ti-check"></span>USB input </div>
                            <div class="one_half ">
                                <span class="ti-check"></span>Heated seats </div>
                            <div class="one_half last">
                                <span class="ti-check"></span>FM Radio </div>
                        </div>
                    </li>

                    <li>
                        <div class="single_car_departure_title">Not Included</div>
                        <div class="single_car_departure_content">
                            <div class="one_half ">
                                <span class="ti-close"></span>GPS Navigation </div>
                            <div class="one_half last">
                                <span class="ti-close"></span>Sunroof </div>
                        </div>
                    </li>
                </ul>

                <div class="fullwidth_comment_wrapper sidebar">

                    <h3 class="comment_title">4 Reviews</span></h3>
                    <div class="avg_comment_rating_wrapper themeborder">
                        <div class="comment_rating_wrapper">
                            <div class="comment_rating_label">Driving</div>
                            <div class="br-theme-fontawesome-stars-o">
                                <div class="br-widget">
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;"></a>
                                </div>
                            </div>
                        </div>
                        <div class="comment_rating_wrapper">
                            <div class="comment_rating_label">Interior Layout</div>
                            <div class="br-theme-fontawesome-stars-o">
                                <div class="br-widget">
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;"></a>
                                </div>
                            </div>
                        </div>
                        <div class="comment_rating_wrapper">
                            <div class="comment_rating_label">Space &amp; Practicality</div>
                            <div class="br-theme-fontawesome-stars-o">
                                <div class="br-widget">
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;"></a>
                                </div>
                            </div>
                        </div>
                        <div class="comment_rating_wrapper">
                            <div class="comment_rating_label">Overall</div>
                            <div class="br-theme-fontawesome-stars-o">
                                <div class="br-widget">
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a name="comments"></a>

                        <div class="comment" id="comment-48">
                            <div class="gravatar">
                                <img src="upload/author1-x.jpg" width="60" height="60" alt="Jack Dawson" class="avatar avatar-60 wp-user-avatar wp-user-avatar-60 alignnone photo" /> </div>

                            <div class="right ">

                                <h7>Jack Dawson</h7>

                                <div class="comment_date">January 18, 2017 at 8:08 am</div>
                                <a rel='nofollow' class='comment-reply-link' href='#' aria-label='Reply to Jack Dawson'>Reply</a>
                                <div class="comment_text" />
                                <p>Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. Deep v cliche lomo biodiesel Neutra selfies. Shorts fixie consequat flexitarian four loko tempor duis single-origin coffee. Banksy, elit small batch freegan sed.</p>
                                <div class="comment_rating_wrapper">
                                    <div class="comment_rating_label">Driving</div>
                                    <div class="br-theme-fontawesome-stars-o">
                                        <div class="br-widget">
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment_rating_wrapper">
                                    <div class="comment_rating_label">Interior Layout</div>
                                    <div class="br-theme-fontawesome-stars-o">
                                        <div class="br-widget">
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment_rating_wrapper">
                                    <div class="comment_rating_label">Space &amp; Practicality</div>
                                    <div class="br-theme-fontawesome-stars-o">
                                        <div class="br-widget">
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment_rating_wrapper">
                                    <div class="comment_rating_label">Overall</div>
                                    <div class="br-theme-fontawesome-stars-o">
                                        <div class="br-widget">
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br class="clear" />
                    </li>
                    <!-- #comment-## -->

                    <div class="comment" id="comment-49">
                        <div class="gravatar">
                            <img src="upload/me-x.jpg" width="60" height="60" alt="Anna Kornikova" class="avatar avatar-60 wp-user-avatar wp-user-avatar-60 alignnone photo" /> </div>

                        <div class="right ">

                            <h7>Anna Kornikova</h7>

                            <div class="comment_date">January 18, 2017 at 8:08 am</div>
                            <a rel='nofollow' class='comment-reply-link' href='#' aria-label='Reply to Anna Kornikova'>Reply</a>
                            <div class="comment_text" />
                            <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar jean vinegar stumptown yr pop-up artisan sunt. Craft beer elit seitan exercitation, photo booth,</p>
                            <div class="comment_rating_wrapper">
                                <div class="comment_rating_label">Driving</div>
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_rating_wrapper">
                                <div class="comment_rating_label">Interior Layout</div>
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_rating_wrapper">
                                <div class="comment_rating_label">Space &amp; Practicality</div>
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_rating_wrapper">
                                <div class="comment_rating_label">Overall</div>
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br class="clear" />
                </li>
                <!-- #comment-## -->

                <div class="comment" id="comment-50">
                    <div class="gravatar">
                        <img src="upload/avatar-x.png" width="60" height="60" alt="Marie Argeris" class="avatar avatar-60 wp-user-avatar wp-user-avatar-60 alignnone photo" /> </div>

                    <div class="right ">

                        <h7>Marie Argeris</h7>

                        <div class="comment_date">January 18, 2017 at 8:08 am</div>
                        <a rel='nofollow' class='comment-reply-link' href='#' aria-label='Reply to Marie Argeris'>Reply</a>
                        <div class="comment_text" />
                        <p>Statement buttons cover-up tweaks patch pockets perennial lapel collar flap chest pockets topline stitching cropped jacket. Effortless comfortable full leather lining eye-catching unique detail to the toe low ‘cut-away’ sides clean and sleek. Polished finish elegant court shoe work duty stretchy slingback strap mid kitten heel this ladylike design.</p>
                        <div class="comment_rating_wrapper">
                            <div class="comment_rating_label">Driving</div>
                            <div class="br-theme-fontawesome-stars-o">
                                <div class="br-widget">
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;"></a>
                                </div>
                            </div>
                        </div>
                        <div class="comment_rating_wrapper">
                            <div class="comment_rating_label">Interior Layout</div>
                            <div class="br-theme-fontawesome-stars-o">
                                <div class="br-widget">
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                </div>
                            </div>
                        </div>
                        <div class="comment_rating_wrapper">
                            <div class="comment_rating_label">Space &amp; Practicality</div>
                            <div class="br-theme-fontawesome-stars-o">
                                <div class="br-widget">
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                </div>
                            </div>
                        </div>
                        <div class="comment_rating_wrapper">
                            <div class="comment_rating_label">Overall</div>
                            <div class="br-theme-fontawesome-stars-o">
                                <div class="br-widget">
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br class="clear" />
            </li>
            <!-- #comment-## -->

            <div class="comment" id="comment-51">
                <div class="gravatar">
                    <img src="upload/author2-x.jpg" width="60" height="60" alt="Jessica Medina" class="avatar avatar-60 wp-user-avatar wp-user-avatar-60 alignnone photo" /> </div>

                <div class="right ">

                    <h7>Jessica Medina</h7>

                    <div class="comment_date">January 18, 2017 at 8:08 am</div>
                    <a rel='nofollow' class='comment-reply-link' href='#' aria-label='Reply to Jessica Medina'>Reply</a>
                    <div class="comment_text" />
                    <p>Foam padding in the insoles leather finest quality staple flat slip-on design pointed toe off-duty shoe. Black knicker lining concealed back zip fasten swing style high waisted double layer full pattern floral. Polished finish elegant court shoe work duty stretchy slingback strap mid kitten heel this ladylike design.</p>
                    <div class="comment_rating_wrapper">
                        <div class="comment_rating_label">Driving</div>
                        <div class="br-theme-fontawesome-stars-o">
                            <div class="br-widget">
                                <a href="javascript:;" class="br-selected"></a>
                                <a href="javascript:;" class="br-selected"></a>
                                <a href="javascript:;" class="br-selected"></a>
                                <a href="javascript:;" class="br-selected"></a>
                                <a href="javascript:;" class="br-selected"></a>
                            </div>
                        </div>
                    </div>
                    <div class="comment_rating_wrapper">
                        <div class="comment_rating_label">Interior Layout</div>
                        <div class="br-theme-fontawesome-stars-o">
                            <div class="br-widget">
                                <a href="javascript:;" class="br-selected"></a>
                                <a href="javascript:;" class="br-selected"></a>
                                <a href="javascript:;" class="br-selected"></a>
                                <a href="javascript:;" class="br-selected"></a>
                                <a href="javascript:;"></a>
                            </div>
                        </div>
                    </div>
                    <div class="comment_rating_wrapper">
                        <div class="comment_rating_label">Space &amp; Practicality</div>
                        <div class="br-theme-fontawesome-stars-o">
                            <div class="br-widget">
                                <a href="javascript:;" class="br-selected"></a>
                                <a href="javascript:;" class="br-selected"></a>
                                <a href="javascript:;" class="br-selected"></a>
                                <a href="javascript:;" class="br-selected"></a>
                                <a href="javascript:;" class="br-selected"></a>
                            </div>
                        </div>
                    </div>
                    <div class="comment_rating_wrapper">
                        <div class="comment_rating_label">Overall</div>
                        <div class="br-theme-fontawesome-stars-o">
                            <div class="br-widget">
                                <a href="javascript:;" class="br-selected"></a>
                                <a href="javascript:;" class="br-selected"></a>
                                <a href="javascript:;" class="br-selected"></a>
                                <a href="javascript:;" class="br-selected"></a>
                                <a href="javascript:;" class="br-selected"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br class="clear" />
        </li>
        <!-- #comment-## -->
    </div>

    <!-- End of thread -->
    <div style="height:10px"></div>

    <div id="respond" class="comment-respond">
        <h3 id="reply-title" class="comment-reply-title">Write A Review <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a></small></h3>
        <form action="#" method="post" id="commentform" class="comment-form">
            <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
            <p class="comment-form-comment">
                <label for="comment">Comment</label>
                <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea>
            </p>
            <p class="comment-form-author">
                <label for="author">Name <span class="required">*</span></label>
                <input id="author" name="author" type="text" value="" size="30" maxlength="245" required='required' />
            </p>
            <p class="comment-form-email">
                <label for="email">Email <span class="required">*</span></label>
                <input id="email" name="email" type="text" value="" size="30" maxlength="" aria-describedby="email-notes" required='required' />
            </p>
            <p class="comment-form-url">
                <label for="url">Website</label>
                <input id="url" name="url" type="text" value="" size="30" maxlength="200" />
            </p>
            <p class="comment-form-rating">
                <label for="driving_rating">Driving</label>
                <span class="commentratingbox">
                    <select id="driving_rating" name="driving_rating">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select></p>
            <p class="comment-form-rating"><label for="interior_rating">Interior Layout</label>
                <span class="commentratingbox">
                    <select id="interior_rating" name="interior_rating">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select></p>
            <p class="comment-form-rating"><label for="space_rating">Space &amp; Practicality</label>
                <span class="commentratingbox">
                    <select id="space_rating" name="space_rating">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select></p>
            <p class="comment-form-rating"><label for="overall_rating">Overall</label>
                <span class="commentratingbox">
                    <select id="overall_rating" name="overall_rating">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select></p>
            <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Review" /> <input type='hidden' name='comment_post_ID' value='153' id='comment_post_ID' />
                <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
            </p> \
        </form>
    </div><!-- #respond -->

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
                                <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="John Doe" /></span> </label>
                        </p>
                        <p>
                            <label> Correo Electrónico
                                <br />
                                <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="sample@yourcompany.com" /></span> </label>
                        </p>
                        <p>
                            <label> Número de teléfono
                                <br />
                                <span class="wpcf7-form-control-wrap your-tel"><input type="tel" name="your-tel" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="+66-4353434" /></span> </label>
                        </p>
                        <p>
                            <label> Dirección de recogida
                                <br />
                                <span class="wpcf7-form-control-wrap pickup-address"><input type="text" name="pickup-address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="34 Mainfield Road" /></span> </label>
                        </p>
                        <p>
                            <label> Fecha de recogida
                                <br />
                                <span class="wpcf7-form-control-wrap pickup-date"><input type="date" name="pickup-date" value="mm/dd/yyyy" class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date" aria-required="true" aria-invalid="false" /></span> </label>
                        </p>

                        <p>
                            <label> Hora de recogida
                                <br />
                                <span class="wpcf7-form-control-wrap pickup-time"><select name="pickup-time" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
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
                                <span class="wpcf7-form-control-wrap pickup-date"><input type="date" name="pickup-date" value="mm/dd/yyyy" class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date" aria-required="true" aria-invalid="false" /></span> </label>
                        </p>

                        <p>
                            <label> Dirección de entrega
                                <br />
                                <span class="wpcf7-form-control-wrap dropoff-address"><input type="text" name="dropoff-address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Heatrow Airport" /></span> </label><span class="wpcf7-form-control-wrap dynamicurl"><input type="hidden" name="dynamicurl" value="http://themes.themegoods.com/grandcarrental/demo/car/mercedes-benz-gle/" size="40" class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamichidden" aria-invalid="false" /></span></p>

                        <p>
                            <label> Hora de recogida
                                <br />
                                <span class="wpcf7-form-control-wrap pickup-time"><select name="pickup-time" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
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
                            <button data-product="132" data-processing="Please wait..." data-url="#" class="single_car_add_to_cart button">Realizar Reserva</button>

                        </p>

                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                    </form>
                </div>
                <br class="clear" />
            </div>


            <div class="single_car_users_online_wrapper themeborder">
                <div class="single_car_users_online_icon">
                    <span class="ti-info-alt"></span>
                </div>
                <div class="single_car_users_online_content">
                    <strong>231</strong> traveler(s) are considering our cars right now! </div>
            </div>

        </div>

    </div>
    <br class="clear" />

    <div class="sidebar_bottom"></div>
</div>

</div>
<!-- End main content -->

<br class="clear" />

</div>
</div>
<?php include('footer.php') ?>
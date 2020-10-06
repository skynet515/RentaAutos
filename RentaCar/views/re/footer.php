       <!--_________________________________________________________________________________-->
       <div id="footer" class=" r">

           <ul class="sidebar_widget three">
               <li id="text-3" class="widget widget_text">
                   <h2 class="widgettitle"></h2>
                   <div class="textwidget" align="center">
                       <p><img src="images/log1.png" alt=""></p>
                   </div>
               </li>
               <li id="text-2" class="widget widget_text">


                   <h2 class="widgettitle">Sobre Nosotros</h2>
                   <p>¡Somos la mejor opción en renta de vehículos En El Salvador, Automóviles del año, Equipados, Asegurados y económicos! <br><br></p>
                   <div class="textwidget">
                       <p><img src="images/logo2.png" alt="" width="175" height="24"></p>
                   </div>
               </li>

               <li id="mc4wp_form_widget-5" class="widget widget_mc4wp_form_widget">
                   <h2 class="widgettitle">Información de Contacto.</h2>

                   <p><span class="ti-mobile" style="margin-right:10px;"></span>(503) 7602-4801</p>
                   <p><span class="ti-alarm-clock" style="margin-right:10px;"></span>24 Horas al día, los 7 dás de la semana.</p>
                   <div style="margin-top:20px;">
                       <div class="social_wrapper shortcode dark ">
                           <ul>
                               <li class="facebook"><a target="_blank" title="Facebook" href="https://www.facebook.com/cabezasrentacar"><i class="fa fa-facebook"></i></a></li>
                               <li class="instagram"><a target="_blank" title="Instagram" href="https://www.instagram.com/cabezas_rent_a_car_sv/"><i class="fa fa-instagram"></i></a></li>
                           </ul>
                       </div>
                   </div>
               </li>
           </ul>
       </div>

       <!--_________________________________________________________________________________-->

       <div class="footer_bar  ppb_wrapper ">


           <div class="footer_bar_wrapper ">
               <div class="menu-footer-menu-container">
                   <ul id="footer_menu" class="footer_nav">
                       <li class="menu-item"><a href="../Admin/dist/login.php">Admin</a></li>
                   </ul>
               </div>
               <div id="copyright">© Copyright Cabezas Rent a Car</div>
               <br class="clear" />

           </div>
       </div>
       </div>


       <div id="side_menu_wrapper" class="overlay_background">
           <a id="close_share" href="javascript:;"><span class="ti-close"></span></a>
       </div>



       <script type='text/javascript' src='js/jquery.js'></script>
       <script type='text/javascript' src='js/jquery-migrate.min.js'></script>
       <script type='text/javascript' src='js/plugins/grandcarrental-custom-post/js/jquery.barrating.js'></script>
       <script src='js/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js'></script>
       <script src='js/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js'></script>
       <script src="js/plugins/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js"></script>
       <script src="js/plugins/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
       <script src="js/plugins/revslider/public/assets/js/extensions/revolution.extension.kenburn.min.js"></script>
       <script src="js/plugins/revslider/public/assets/js/extensions/revolution.extension.navigation.min.js"></script>
       <script src="js/plugins/revslider/public/assets/js/extensions/revolution.extension.parallax.min.js"></script>
       <script src="js/plugins/revslider/public/assets/js/extensions/revolution.extension.actions.min.js"></script>
       <script src="js/plugins/revslider/public/assets/js/extensions/revolution.extension.video.min.js"></script>
       <script type="text/javascript">
           function setREVStartSize(e) {
               try {
                   var i = jQuery(window).width(),
                       t = 9999,
                       r = 0,
                       n = 0,
                       l = 0,
                       f = 0,
                       s = 0,
                       h = 0;
                   if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                           f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                       }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                       var u = (e.c.width(), jQuery(window).height());
                       if (void 0 != e.fullScreenOffsetContainer) {
                           var c = e.fullScreenOffsetContainer.split(",");
                           if (c) jQuery.each(c, function(e, i) {
                               u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                           }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                       }
                       f = u
                   } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                   e.c.closest(".rev_slider_wrapper").css({
                       height: f
                   })
               } catch (d) {
                   console.log("Failure at Presize of Slider:" + d)
               }
           };
       </script>
       <script>
           (function() {
               function addEventListener(element, event, handler) {
                   if (element.addEventListener) {
                       element.addEventListener(event, handler, false);
                   } else if (element.attachEvent) {
                       element.attachEvent('on' + event, handler);
                   }
               }

               function maybePrefixUrlField() {
                   if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
                       this.value = "http://" + this.value;
                   }
               }

               var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
               if (urlFields && urlFields.length > 0) {
                   for (var j = 0; j < urlFields.length; j++) {
                       addEventListener(urlFields[j], 'blur', maybePrefixUrlField);
                   }
               } /* test if browser supports date fields */
               var testInput = document.createElement('input');
               testInput.setAttribute('type', 'date');
               if (testInput.type !== 'date') {

                   /* add placeholder & pattern to all date fields */
                   var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');
                   for (var i = 0; i < dateFields.length; i++) {
                       if (!dateFields[i].placeholder) {
                           dateFields[i].placeholder = 'YYYY-MM-DD';
                       }
                       if (!dateFields[i].pattern) {
                           dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
                       }
                   }
               }

           })();
       </script>
       <script type='text/javascript' src='js/plugins/ui/core.min.js'></script>
       <script type='text/javascript' src='js/plugins/ui/datepicker.min.js'></script>
       <script type='text/javascript'>
           jQuery(document).ready(function(jQuery) {
               jQuery.datepicker.setDefaults({
                   "closeText": "Close",
                   "currentText": "Today",
                   "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                   "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                   "nextText": "Next",
                   "prevText": "Previous",
                   "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                   "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                   "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
                   "dateFormat": "MM d, yy",
                   "firstDay": 1,
                   "isRTL": false
               });
           });
       </script>
       <script type='text/javascript' src='js/plugins/jquery.requestAnimationFrame.js'></script>
       <script type='text/javascript' src='js/plugins/ilightbox.packed.js'></script>
       <script type='text/javascript' src='js/plugins/jquery.easing.js'></script>
       <script type='text/javascript' src='js/plugins/waypoints.min.js'></script>
       <script type='text/javascript' src='js/plugins/jquery.isotope.js'></script>
       <script type='text/javascript' src='js/plugins/jquery.masory.js'></script>
       <script type='text/javascript' src='js/plugins/jquery.tooltipster.min.js'></script>
       <script type='text/javascript' src='js/plugins/jarallax.js'></script>
       <script type='text/javascript' src='js/plugins/jquery.sticky-kit.min.js'></script>
       <script type='text/javascript' src='js/plugins/jquery.stellar.min.js'></script>
       <script type='text/javascript' src='js/plugins/jquery.cookie.js'></script>
       <script type='text/javascript' src='js/plugins/custom_plugins.js'></script>
       <script type='text/javascript' src='js/plugins/custom.js'></script>
       <script type='text/javascript' src='js/plugins/custom_onepage.js'></script>
       <script type='text/javascript' src='js/plugins/jarallax-video.js'></script>
       <script type='text/javascript' src='js/plugins/jquery.cookie.js'></script>
       <script type='text/javascript'>
           /* <![CDATA[ */
           var mc4wp_forms_config = [];
           /* ]]> */
       </script>
       <script>
           var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
           var htmlDivCss = "";
           if (htmlDiv) {
               htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
           } else {
               var htmlDiv = document.createElement("div");
               htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
               document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
           }
       </script>
       <script type="text/javascript">
           setREVStartSize({
               c: jQuery('#rev_slider_1_1'),
               gridwidth: [1240],
               gridheight: [868],
               sliderLayout: 'fullscreen',
               fullScreenAutoWidth: 'off',
               fullScreenAlignForce: 'off',
               fullScreenOffsetContainer: '',
               fullScreenOffset: ''
           });

           var revapi1,
               tpj = jQuery;

           tpj(document).ready(function() {
               if (tpj("#rev_slider_1_1").revolution == undefined) {
                   revslider_showDoubleJqueryError("#rev_slider_1_1");
               } else {
                   revapi1 = tpj("#rev_slider_1_1").show().revolution({
                       sliderType: "standard",
                       jsFileLocation: "js/plugins/revslider/public/assets/js/",
                       sliderLayout: "fullscreen",
                       dottedOverlay: "none",
                       delay: 9000,
                       navigation: {
                           keyboardNavigation: "off",
                           keyboard_direction: "horizontal",
                           mouseScrollNavigation: "off",
                           mouseScrollReverse: "default",
                           onHoverStop: "off",
                           arrows: {
                               style: "uranus",
                               enable: true,
                               hide_onmobile: false,
                               hide_onleave: true,
                               hide_delay: 200,
                               hide_delay_mobile: 1200,
                               tmp: '',
                               left: {
                                   h_align: "left",
                                   v_align: "center",
                                   h_offset: 20,
                                   v_offset: 0
                               },
                               right: {
                                   h_align: "right",
                                   v_align: "center",
                                   h_offset: 20,
                                   v_offset: 0
                               }
                           }
                       },
                       visibilityLevels: [1240, 1024, 778, 480],
                       gridwidth: 1240,
                       gridheight: 868,
                       lazyType: "none",
                       shadow: 0,
                       spinner: "spinner3",
                       stopLoop: "off",
                       stopAfterLoops: -1,
                       stopAtSlide: -1,
                       shuffle: "off",
                       autoHeight: "off",
                       fullScreenAutoWidth: "off",
                       fullScreenAlignForce: "off",
                       fullScreenOffsetContainer: "",
                       fullScreenOffset: "",
                       disableProgressBar: "on",
                       hideThumbsOnMobile: "off",
                       hideSliderAtLimit: 0,
                       hideCaptionAtLimit: 0,
                       hideAllCaptionAtLilmit: 0,
                       debugMode: false,
                       fallbacks: {
                           simplifyAll: "off",
                           nextSlideOnWindowFocus: "off",
                           disableFocusListener: false,
                       }
                   });
               }

           }); /*ready*/
       </script>
       <script>
           var htmlDivCss = '  #rev_slider_1_1_wrapper .tp-loader.spinner3 div { background-color: #04dbc0 !important; } ';
           var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
           if (htmlDiv) {
               htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
           } else {
               var htmlDiv = document.createElement('div');
               htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
               document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
           }
       </script>
       <script>
           var htmlDivCss = unescape("%23rev_slider_1_1%20.uranus.tparrows%20%7B%0A%20%20width%3A50px%3B%0A%20%20height%3A50px%3B%0A%20%20background%3Argba%28255%2C255%2C255%2C0%29%3B%0A%20%7D%0A%20%23rev_slider_1_1%20.uranus.tparrows%3Abefore%20%7B%0A%20width%3A50px%3B%0A%20height%3A50px%3B%0A%20line-height%3A50px%3B%0A%20font-size%3A40px%3B%0A%20transition%3Aall%200.3s%3B%0A-webkit-transition%3Aall%200.3s%3B%0A%20%7D%0A%20%0A%20%20%23rev_slider_1_1%20.uranus.tparrows%3Ahover%3Abefore%20%7B%0A%20%20%20%20opacity%3A0.75%3B%0A%20%20%7D%0A");
           var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
           if (htmlDiv) {
               htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
           } else {
               var htmlDiv = document.createElement('div');
               htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
               document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
           }
       </script>
       </body>

       </html>
<div class="demo">    
        <div class="jquery-script-ads" style="margin:50px auto;"><script type="text/javascript"><!--
    google_ad_client = "ca-pub-2783044520727903";
    /* jQuery_demo */
    google_ad_slot = "2780937993";
    google_ad_width = 728;
    google_ad_height = 90;
    //-->
    </script>
    <script type="text/javascript"
    src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
    </script></div>	
        <!-- Ace Responsive Menu -->
        <nav>
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
                <h3>Menu</h3>
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Responsive Menu Structure-->
            <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
            <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                  <li>
                    <a href="javascript:;">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <span class="title">Home</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-cube" aria-hidden="true"></i>
                        <span class="title">About Us</span>
    
                    </a>
                    <!-- Level Two-->
                    <ul>
                        <li>
                            <a href="#">Sub Item One</a>
                        </li>
                        <li>
                            <a href="#">Sub Item Two</a>
                        </li>
                        <li>
                            <a href="#">Sub Item Three</a>
                        </li>
                        <li>
                            <a href="#">Sub Item Four</a>
                        </li>
                    </ul>
                </li>
    
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-crop" aria-hidden="true"></i>
                        <span class="title">4 Level Menu</span>
                    </a>
                    <!-- Level Two-->
                    <ul>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                Sub Item One						
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-database" aria-hidden="true"></i>
                                Sub Item Two
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-amazon" aria-hidden="true"></i>
                                Sub Item Three							
                            </a>
                            <!-- Level Three-->
                            <ul>
                                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Sub Item Link 1</a></li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-diamond" aria-hidden="true"></i>Sub Item Link 2</a>
                                    <!-- Level Four-->
                                    <ul>
                                        <li><a href="#"><i class="fa fa-trash" aria-hidden="true"></i>Sub Item Link 1</a></li>
                                        <li><a href="#"><i class="fa fa-dashcube" aria-hidden="true"></i>Sub Item Link 2</a></li>
                                        <li><a href="#"><i class="fa fa-dropbox" aria-hidden="true"></i>Sub Item Link 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Sub Item Link 3</a></li>
                            </ul>
                        </li>
    
                        <li>
                            <a href="#">
                                <i class="fa fa-database" aria-hidden="true"></i>
                                Sub Item Four
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="" href="javascript:;">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        <span class="title">Services</span>
    
                    </a>
                    <ul>
                        <li>
                            <a href="#">Sub Item One
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">Sub Item Two							
                            </a>
                            <ul>
                                <li><a href="#">Sub Item Link 1</a></li>
                                <li><a href="#">Sub Item Link 2</a></li>
                                <li><a href="#">Sub Item Link 3</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">Sub Item Three							
                            </a>
                            <ul>
                                <li><a href="#">Sub Item Link 1</a></li>
                                <li><a href="#">Sub Item Link 1</a></li>
                                <li><a href="#">Sub Item Link 1</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Sub Item Four
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                        <span class="title">Products</span>
                    </a>
                </li>
                <li class="last ">
                    <a href="javascript:;">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span class="title">Contact Us</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End of Responsive Menu -->
        </div>
        <!--Scripts-->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="{{ asset('js/responsive-menu.js') }}" type="text/javascript"></script>
        
        <!--Plugin Initialization-->
         <script type="text/javascript">
             $(document).ready(function () {
                 $("#respMenu").aceResponsiveMenu({
                     resizeWidth: '768', // Set the same in Media query       
                     animationSpeed: 'fast', //slow, medium, fast
                     accoridonExpAll: false //Expands all the accordion menu on click
                 });
             });
        </script>
    <script type="text/javascript">
    
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-36251023-1']);
      _gaq.push(['_setDomainName', 'jqueryscript.net']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    
    </script>
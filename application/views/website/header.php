<input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">
<div class="menu-gap"></div>
<div class="main-menu">
    <nav class="navbar navbar-dark fixed-top">
        <div class="container-fluid mainContainer">
            <a class="navbar-brand" href="<?php echo base_url(); ?>"><?php include('assets_web/images/logo.svg'); ?> </a>
            <div class="d-none d-xl-flex navbar-expand ml-auto outer-menu">
                <ul class="navbar-nav">
             <?php 

                                                
                $url1 = $_SERVER['REQUEST_URI'];



                $url = "https://www.kalpataru.com" . $url1;

                


                if ($url == 'https://www.kalpataru.com/kalpataru-nri') {


                
                    echo '<li class="nav-item enquiryNowBtn" data-toggle="modal" data-target="#gettouchPopupWrapper">
                    <div class="nav-link d-flex align-items-center" href="#"><span>ENQUIRE NOW</span></div></li>';
                } else {

                

                    echo '<li><a href="javascript:void(0);" data-toggle="modal" data-target="#enquiryPopupWrapper"> <div class="nav-link d-flex align-items-center" href="#"><span>ENQUIRE NOW</span></div></a></li>';
                }



                ?>

            <li class="projectsNav nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>projects">PROJECTS</a>
            </li>  
            <?php
                if (isset($properties->booking_url) && $properties->booking_url!="") {
            ?>
                    <li class="bookNowNav nav-item">
                        <a class="nav-link" href="<?php echo $properties->booking_url; ?>">BOOK NOW</a>
                    </li> 
            <?php
                }
            ?> 
        </ul>
    </div>  

           <!--  <div class="mobileSearchIco" data-toggle="modal" data-target="#searchPopupWrapper"><i class="kalpataru-icon-search"></i></div>
            <div class="mobilePhoneIco" data-toggle="modal" data-target="#enquiryPopupWrapper"><i class="kalpataru-icon-call"></i></div> -->
            <?php
                if (isset($properties->booking_url) && $properties->booking_url!="") {
            ?>
            <a class="phoneNavLink bookNowLink d-none" href="<?php echo $properties->booking_url; ?>">
                <!-- <img src="<?php echo base_url(); ?>assets_web/images/icons/booking-icon.svg"> -->
                <img style="height:30px;" src="<?php echo base_url(); ?>assets_web/images/icons/Book-now-new.svg">
            </a>
            <?php
                }
            ?>



                <?php 

                                                                
                $url1 = $_SERVER['REQUEST_URI'];



                $url = "https://www.kalpataru.com" . $url1;




                if ($url == 'https://www.kalpataru.com/kalpataru-nri') {



                    echo ' <a class="phoneNavLink d-flex d-xl-none" href="javascript:void(0);" data-toggle="modal" data-target="#gettouchPopupWrapper">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    width="35.17px" height="35.362px" viewBox="7.342 7.323 35.17 35.362" enable-background="new 7.342 7.323 35.17 35.362"
                    xml:space="preserve">
                    <g>
                        <g>
                            <path fill="#BF973F" d="M34.038,42.686c-0.147,0-0.312-0.008-0.468-0.015c-2.738-0.174-5.174-1.187-6.996-2.048
                            c-4.691-2.268-8.801-5.484-12.218-9.564c-2.801-3.369-4.697-6.533-5.967-9.958c-0.527-1.422-1.206-3.583-1.014-5.92
                            c0.134-1.512,0.744-2.82,1.813-3.889L11.8,8.656c1.779-1.71,4.228-1.686,5.912-0.021c0.495,0.456,0.985,0.955,1.453,1.438
                            c0.233,0.249,0.475,0.491,0.71,0.727l2.099,2.098c1.803,1.803,1.803,4.225,0,6.028l-0.781,0.79
                            c-0.449,0.456-0.909,0.923-1.395,1.381c0.442,0.902,1.027,1.794,1.86,2.847c1.943,2.388,3.974,4.241,6.203,5.657
                            c0.207,0.127,0.453,0.25,0.717,0.381l0.275,0.144l2.17-2.164c1.752-1.748,4.259-1.737,5.941,0.017l4.217,4.23
                            c0.868,0.857,1.33,1.893,1.33,2.989c0,1.079-0.449,2.12-1.3,3.007c-0.339,0.354-0.683,0.688-1.017,1.008l-0.105,0.104
                            c-0.417,0.401-0.813,0.783-1.152,1.188l-0.104,0.121C37.578,41.988,35.962,42.686,34.038,42.686z M14.786,8.361
                            c-0.809,0-1.594,0.342-2.269,0.99l-2.621,2.644c-0.9,0.9-1.413,1.999-1.525,3.268c-0.176,2.136,0.46,4.155,0.955,5.488
                            c1.23,3.317,3.072,6.388,5.797,9.666c3.325,3.97,7.323,7.101,11.882,9.304c1.847,0.873,4.074,1.79,6.581,1.95
                            c0.169,0.007,0.316,0.015,0.451,0.015c1.628,0,2.992-0.584,4.059-1.734l0.023-0.029c0.388-0.469,0.818-0.886,1.275-1.328
                            l0.108-0.104c0.328-0.313,0.659-0.639,0.987-0.979c0.667-0.696,1.021-1.497,1.021-2.313c0-0.823-0.359-1.611-1.037-2.281
                            l-4.225-4.239c-1.316-1.372-3.16-1.366-4.521-0.008l-2.692,2.687l-0.916-0.483c-0.28-0.14-0.556-0.276-0.789-0.423
                            c-2.328-1.479-4.437-3.399-6.453-5.877c-0.977-1.233-1.657-2.307-2.144-3.384l-0.149-0.33l0.268-0.245
                            c0.573-0.524,1.107-1.067,1.627-1.595l0.787-0.796c1.423-1.423,1.423-3.191,0-4.614l-2.099-2.098
                            c-0.243-0.243-0.492-0.493-0.727-0.744c-0.449-0.463-0.927-0.949-1.42-1.404C16.358,8.702,15.59,8.361,14.786,8.361z"/>
                        </g>
                        <g>
                            <path fill="#BF973F" d="M37.121,22.208c-0.396-2.335-1.501-4.462-3.189-6.151c-1.69-1.689-3.818-2.792-6.15-3.19l0.168-0.985
                            c2.539,0.433,4.852,1.632,6.689,3.469c1.836,1.837,3.036,4.15,3.469,6.69L37.121,22.208z"/>
                        </g>
                        <g>
                            <path fill="#BF973F" d="M41.665,22.247c-0.59-3.482-2.235-6.657-4.757-9.181c-2.533-2.524-5.709-4.169-9.182-4.757l0.166-0.986
                            c3.678,0.623,7.039,2.364,9.721,5.036c2.672,2.672,4.412,6.033,5.037,9.721L41.665,22.247z"/>
                        </g>
                    </g>
                   </svg>
                </a>';
                } else {



                    echo ' <a class="phoneNavLink d-flex d-xl-none" href="javascript:void(0);" data-toggle="modal" data-target="#enquiryPopupWrapper">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    width="35.17px" height="35.362px" viewBox="7.342 7.323 35.17 35.362" enable-background="new 7.342 7.323 35.17 35.362"
                    xml:space="preserve">
                    <g>
                        <g>
                            <path fill="#BF973F" d="M34.038,42.686c-0.147,0-0.312-0.008-0.468-0.015c-2.738-0.174-5.174-1.187-6.996-2.048
                            c-4.691-2.268-8.801-5.484-12.218-9.564c-2.801-3.369-4.697-6.533-5.967-9.958c-0.527-1.422-1.206-3.583-1.014-5.92
                            c0.134-1.512,0.744-2.82,1.813-3.889L11.8,8.656c1.779-1.71,4.228-1.686,5.912-0.021c0.495,0.456,0.985,0.955,1.453,1.438
                            c0.233,0.249,0.475,0.491,0.71,0.727l2.099,2.098c1.803,1.803,1.803,4.225,0,6.028l-0.781,0.79
                            c-0.449,0.456-0.909,0.923-1.395,1.381c0.442,0.902,1.027,1.794,1.86,2.847c1.943,2.388,3.974,4.241,6.203,5.657
                            c0.207,0.127,0.453,0.25,0.717,0.381l0.275,0.144l2.17-2.164c1.752-1.748,4.259-1.737,5.941,0.017l4.217,4.23
                            c0.868,0.857,1.33,1.893,1.33,2.989c0,1.079-0.449,2.12-1.3,3.007c-0.339,0.354-0.683,0.688-1.017,1.008l-0.105,0.104
                            c-0.417,0.401-0.813,0.783-1.152,1.188l-0.104,0.121C37.578,41.988,35.962,42.686,34.038,42.686z M14.786,8.361
                            c-0.809,0-1.594,0.342-2.269,0.99l-2.621,2.644c-0.9,0.9-1.413,1.999-1.525,3.268c-0.176,2.136,0.46,4.155,0.955,5.488
                            c1.23,3.317,3.072,6.388,5.797,9.666c3.325,3.97,7.323,7.101,11.882,9.304c1.847,0.873,4.074,1.79,6.581,1.95
                            c0.169,0.007,0.316,0.015,0.451,0.015c1.628,0,2.992-0.584,4.059-1.734l0.023-0.029c0.388-0.469,0.818-0.886,1.275-1.328
                            l0.108-0.104c0.328-0.313,0.659-0.639,0.987-0.979c0.667-0.696,1.021-1.497,1.021-2.313c0-0.823-0.359-1.611-1.037-2.281
                            l-4.225-4.239c-1.316-1.372-3.16-1.366-4.521-0.008l-2.692,2.687l-0.916-0.483c-0.28-0.14-0.556-0.276-0.789-0.423
                            c-2.328-1.479-4.437-3.399-6.453-5.877c-0.977-1.233-1.657-2.307-2.144-3.384l-0.149-0.33l0.268-0.245
                            c0.573-0.524,1.107-1.067,1.627-1.595l0.787-0.796c1.423-1.423,1.423-3.191,0-4.614l-2.099-2.098
                            c-0.243-0.243-0.492-0.493-0.727-0.744c-0.449-0.463-0.927-0.949-1.42-1.404C16.358,8.702,15.59,8.361,14.786,8.361z"/>
                        </g>
                        <g>
                            <path fill="#BF973F" d="M37.121,22.208c-0.396-2.335-1.501-4.462-3.189-6.151c-1.69-1.689-3.818-2.792-6.15-3.19l0.168-0.985
                            c2.539,0.433,4.852,1.632,6.689,3.469c1.836,1.837,3.036,4.15,3.469,6.69L37.121,22.208z"/>
                        </g>
                        <g>
                            <path fill="#BF973F" d="M41.665,22.247c-0.59-3.482-2.235-6.657-4.757-9.181c-2.533-2.524-5.709-4.169-9.182-4.757l0.166-0.986
                            c3.678,0.623,7.039,2.364,9.721,5.036c2.672,2.672,4.412,6.033,5.037,9.721L41.665,22.247z"/>
                        </g>
                    </g>
                   </svg>
                </a>';
                }



                ?>

           
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <div class="menu">
                <div class="bar"></div>
                <!-- <div class="bar"></div> -->
                <div class="bar"> </div>
            </div>
        </button>

    </div>
</nav>
</div>

<!-- Menu Start -->
<div class="mainMenu position-fixed">
    <div class="mainMenuInner container-fluid mainContainer">
        <div class="mainMenuHeader d-flex justify-content-between position-relative">
            <a class="mainMenuLogo" href="<?php echo base_url(); ?>"><?php include('assets_web/images/logo.svg'); ?> </a>
            <div class="menuCloseBtn"><i class="kalpataru-icon-close"></i> CLOSE</div>
            <div class="mobileButtons">
                <a class="projectMobile nav-link" href="<?php echo base_url(); ?>projects">Projects</a>
                <!-- <div class="bookNowMobile nav-link d-none">BOOK NOW
                </div> -->
            </div>
        </div>
        <!-- Main Menu Header Left -->
        <!-- <div class="row h-100 align-items-center"> -->
            <div class="row h-100" itemscope itemtype="https://schema.org/SiteNavigationElement" >
                <div class="col-lg-8">
                    <div class="mainMenuLeft">
                        <div id="mainMenuAccordion">
                            <div class="mainMenuAccordionBox">
                                <div class="mainMenuAccordionHeader" data-toggle="collapse" data-target="#AboutAccordion" aria-expanded="true" aria-controls="AboutAccordion">
                                    <h2 id="about">
                                        <span class="menuLinksNumber">01</span>About
                                        <div class="submenu_arrow">
                                            <span></span>
                                            <span></span>
                                        </div>
                                        <!-- Desktop Menu line -->
                                        <div class="desktopMenuLine transition">
                                            <span></span>
                                        </div>
                                    </h2>
                                </div>
                                <div id="AboutAccordion" class="collapse show mainMenuAccordionDesc" data-parent="#mainMenuAccordion">
                                    <div class="allMenuLinks_box">
                                        <div class="subMenuTitle"><a class="nav-highlight nav-company" href="<?php echo base_url(); ?>company-profile" itemprop="url" title="Company Profile">Company</a></div>
                                        <!-- <div class="subMenuTitle"><a class="nav-highlight nav-chairmans" href="<?php echo base_url(); ?>">Chairman’s Message</a></div> -->
                                        <div class="subMenuTitle"><a class="nav-highlight nav-leadership" href="<?php echo base_url(); ?>leadership-team" itemprop="url" title="Leadership">Leadership</a></div>
                                        <div class="subMenuTitle"><a class="nav-highlight nav-group" href="<?php echo base_url(); ?>group-company" itemprop="url" title="Group Companies">Group Companies</a></div>
                                        <!-- <div class="subMenuTitle"><a class="nav-highlight nav-why" href="<?php echo base_url(); ?>">Why Kalpataru</a></div> -->
                                        <div class="subMenuTitle"><a class="nav-highlight nav-year" href="<?php echo base_url(); ?>50-plus-years-of-our-legacy" itemprop="url" title="50+ years of our legacy">50+ years of our legacy</a></div>
                                        <!-- <div class="subMenuTitle"><a class="nav-highlight nav-gallery" href="<?php echo base_url(); ?>gallery">Gallery</a></div> -->
                                        <!-- <div class="subMenuTitle"><a class="nav-highlight nav-completed" href="<?php echo base_url(); ?>completed-projects">Completed projects</a></div> -->
                                        <!-- <div class="subMenuTitle"><a class="nav-highlight nav-legacy" href="<?php echo base_url(); ?>">Legacy</a></div> -->
                                        <!-- <div class="subMenuTitle"><a class="nav-highlight nav-experts" href="<?php echo base_url(); ?>">Experts</a></div> -->
                                        <div class="subMenuTitle"><a class="nav-highlight nav-awards" href="<?php echo base_url(); ?>awards" itemprop="url" title="Company Profile">Awards</a></div>
                                        <div class="subMenuTitle"><a class="nav-highlight nav-csr" href="<?php echo base_url(); ?>csr" itemprop="url" title="Csr">Csr</a></div>
                                        <!-- <div class="subMenuTitle"><a class="nav-highlight nav-press" href="<?php echo base_url(); ?>press">Press</a></div> -->
                                    </div>
                                </div>
                            </div>

                            <div class="mainMenuAccordionBox">
                                <div class="mainMenuAccordionHeader" data-toggle="collapse" data-target="#ResidentialAccordion1" aria-expanded="false" aria-controls="ResidentialAccordion1">
                                    <a href="<?=base_url()?>projects/residential" itemprop="url" title="Residential Projects">
                                        <h2 class="nav-highlight nav-residential">
                                            <span class="menuLinksNumber">02</span>Residential Projects
                                        </h2>
                                    </a>
                                </div>
                            </div>

                       <!--  <div class="mainMenuAccordionBox">
                            <div class="mainMenuAccordionHeader">
                                <h2 class="nav-highlight nav-featured">
                                    <span class="menuLinksNumber">03</span>Featured
                                </h2>
                            </div>
                        </div> -->

                        <div class="mainMenuAccordionBox">
                            <div class="mainMenuAccordionHeader" data-toggle="collapse" data-target="#CommercialAccordion1" aria-expanded="false" aria-controls="CommercialAccordion1">
                                <a href="<?=base_url()?>projects/commercial" itemprop="url" title="Commercial Projects">
                                    <h2 class="nav-highlight nav-commercial">
                                        <span class="menuLinksNumber">03</span>Commercial Projects
                                    </h2>
                                </a>
                            </div>
                        </div>

                        <div class="mainMenuAccordionBox">
                            <div class="mainMenuAccordionHeader" data-toggle="collapse" data-target="#nriAccordion1" aria-expanded="false" aria-controls="nriAccordion1">
                                <a href="<?=base_url()?>kalpataru-nri"  itemprop="url" title="NRI Corner">
                                    <h2 class="nav-highlight nav-kalpataru-nri">
                                        <span class="menuLinksNumber">04</span>NRI Corner
                                    </h2>
                                </a>
                            </div>
                        </div>

                        <!-- <div class="mainMenuAccordionBox">
                            <div class="mainMenuAccordionHeader">
                                <a href="<?php echo base_url(); ?>sustainability">
                                    <h2 class="nav-highlight nav-sustainability">
                                        <span class="menuLinksNumber">04</span>Sustainability
                                    </h2>
                                </a>
                            </div>
                        </div> -->

                        <!-- <div class="mainMenuAccordionBox">
                            <div class="mainMenuAccordionHeader">
                                <h2 class="nav-highlight nav-nris">
                                    <span class="menuLinksNumber">06</span>For Nris
                                </h2>
                            </div>
                        </div> -->

                       <!--  <div class="mainMenuAccordionBox">
                            <div class="mainMenuAccordionHeader" data-toggle="collapse" data-target="#ForInvestorsAccordion1" aria-expanded="false" aria-controls="ForInvestorsAccordion1">
                                <h2 class="nav-highlight nav-investors">
                                    <span class="menuLinksNumber">07</span>For Investor
                                </h2>
                            </div>
                        </div>

                        <div class="mainMenuAccordionBox">
                            <div class="mainMenuAccordionHeader">
                                <h2 class="nav-highlight nav-showcase">
                                    <span class="menuLinksNumber">08</span>Showcase
                                </h2>
                            </div>
                        </div> -->

                        <div class="mainMenuAccordionBox">
                            <div class="mainMenuAccordionHeader" data-toggle="collapse" data-target="#ContactUsAccordion1" aria-expanded="false" aria-controls="ContactUsAccordion1">
                                <a href="<?php echo base_url(); ?>contact-us" itemprop="url" title="Contact Us">
                                    <h2 class="nav-highlight nav-contact">
                                        <span class="menuLinksNumber">05</span>Contact Us
                                    </h2>
                                </a>
                            </div>
                        </div>

                        <div class="mainMenuAccordionBox">
                            <div class="mainMenuAccordionHeader" data-toggle="collapse" data-target="#ContactUsAccordion1" aria-expanded="false" aria-controls="ContactUsAccordion1">
                                <a href="https://careers.kalpataru.com/" target="_blank" itemprop="url" title="Careers">
                                    <h2 class="nav-highlight nav-contact">
                                        <span class="menuLinksNumber">06</span>Careers
                                    </h2>
                                </a>
                            </div>
                        </div>

                        <div class="mainMenuAccordionBox">
                            <div class="mainMenuAccordionHeader" data-toggle="collapse" data-target="#ContactUsAccordion1" aria-expanded="false" aria-controls="ContactUsAccordion1">
                                <a href="https://vendorconnect.kalpatarugroup.com/" target="_blank" itemprop="url" title="Vendor Connect">
                                    <h2 class="nav-highlight nav-contact">
                                        <span class="menuLinksNumber">07</span>Vendor Connect
                                    </h2>
                                </a>
                            </div>
                        </div>

                        <div class="mainMenuAccordionBox">
                                <div class="mainMenuAccordionHeader" data-toggle="collapse" data-target="#CommercialAccordion1" aria-expanded="false" aria-controls="CommercialAccordion1">
                                    <a href="<?=base_url()?>completed-projects">
                                        <h2 class="nav-highlight nav-commercial">
                                            <span class="menuLinksNumber">08</span> Completed Projects
                                        </h2>
                                    </a>
                                </div>
                            </div>

                    </div>
                </div>

                <!-- Menu footer social icons -->
                <div class="menuFooterSocial">
                    <div class="menu-footer-social-icons d-flex align-items-center">
                        <?php /*<a href="http://instagram.com/kalpatarulimited" class="d-inline-block" target="_blank"><i class="demo-icon kalpataru-icon-instagram"></i></a>*/ ?>
                        <a href="https://www.youtube.com/c/KalpatarulimitedOfficial" class="d-inline-block" target="_blank"><i class="demo-icon kalpataru-icon-youtube" title="YouTube"></i></a>
                        <a href="https://www.linkedin.com/company/kalpataru-limited" target="_blank" title="Linkedin">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g transform="translate(1)">
                                    <g>
                                        <g>
                                            <path d="M68.12,4.267c-18.773,0-35.84,6.827-48.64,19.627C5.827,37.547-1,54.613-1,72.533c0,18.773,7.68,35.84,20.48,48.64
                                                c12.8,12.8,30.72,20.48,47.787,19.627c0,0,0.853,0,1.707,0c17.067,0,33.28-6.827,46.08-19.627
                                                c12.8-12.8,20.48-29.867,20.48-48.64c0.853-17.92-6.827-34.987-19.627-47.787C103.107,11.093,86.04,4.267,68.12,4.267z
                                                 M103.107,109.227c-9.387,9.387-22.187,15.36-35.84,14.507c-12.8,0-26.453-5.12-35.84-14.507
                                                c-10.24-9.387-15.36-23.04-15.36-36.693s5.12-26.453,15.36-36.693c9.387-9.387,22.187-14.507,36.693-14.507
                                                c12.8,0,25.6,5.12,34.987,14.507c10.24,10.24,15.36,23.04,15.36,36.693S113.347,99.84,103.107,109.227z"/>
                                            <path d="M101.4,157.867H32.28c-13.653,0-24.747,11.093-24.747,25.6v298.667c0,13.653,11.947,25.6,25.6,25.6H101.4
                                                c13.653,0,25.6-11.947,25.6-24.747v-299.52C127,169.813,115.053,157.867,101.4,157.867z M109.933,482.987
                                                c0,4.267-4.267,7.68-8.533,7.68H33.133c-4.267,0-8.533-4.267-8.533-8.533V183.467c0-4.267,3.413-8.533,7.68-8.533h69.12
                                                c4.267,0,8.533,4.267,8.533,8.533V482.987z"/>
                                            <path d="M391.533,149.333h-17.92c-33.28,0-64.853,14.507-85.333,37.547v-11.947c0-8.533-8.533-17.067-17.067-17.067H185.88
                                                c-7.68,0-17.067,6.827-17.067,16.213v318.293c0,9.387,9.387,15.36,17.067,15.36h93.867c7.68,0,17.067-5.973,17.067-15.36v-184.32
                                                c0-28.16,20.48-50.347,46.933-50.347c13.653,0,26.453,5.12,35.84,14.507c8.533,7.68,11.947,19.627,11.947,34.987v183.467
                                                c0,8.533,8.533,17.067,17.067,17.067h85.333c8.533,0,17.067-8.533,17.067-17.067v-220.16
                                                C511,202.24,458.947,149.333,391.533,149.333z M493.933,489.813l-0.853,0.853h-83.627L408.6,307.2
                                                c0-20.48-5.12-35.84-16.213-46.933c-12.8-12.8-29.867-19.627-47.787-19.627c-35.84,0.853-64,29.867-64,67.413v182.613h-93.867
                                                V174.933h84.48l0.853,0.853v53.76l23.04-23.04l0.853-0.853c17.067-23.893,46.933-39.253,78.507-39.253h17.92
                                                c57.173,0,101.547,46.08,101.547,104.107V489.813z"/>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>
                        <?php /*<a href="https://www.facebook.com/kalpatarugroup" class="d-inline-block" target="_blank"><i class="demo-icon kalpataru-icon-facebook"></i></a>*/ ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mainMenuRight">
        <div class="mainMenuRightInner">
            <div class="mainMenuRightImg about activeImg" style="background-image:url('<?php echo $this->config->item('cdn_url'); ?>assets_web/images/menu-image.jpg');"></div>
        </div>
    </div>
</div>
<!-- Menu end -->

<!-- Enquiry pop up start -->
<div class="main_popup_wrapper modal fade" id="enquiryPopupWrapper">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">PLEASE ENTER YOUR DETAILS BELOW</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="kalpataru-icon-close"></i></span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="enquiry_popup_form" name="enquiry_popup_form" class="form-inline relative-box">

                    <input type="hidden" class="csrf_token" id="enquiry_csrf_token" name="csrf_token" value="<?php echo generateToken('book_now'); ?>">
                    <input id="00N2800000IQrme" name="00N2800000IQrme" type="hidden" />
                    <div class="relative-box w-100 m-auto form_element">
                        <input type="name" id="enquiry_user_name" name="enquiry_user_name" class="form-control w-100" placeholder="Name">
                        <div id="enquiry_error_name" class="msg error"></div>
                        <!-- <div id="forgot_email_error" class="msg error">Please Enter Your Full Name</div> -->
                    </div>
                    <div class="relative-box w-100 m-auto form_element">
                        <input type="email" id="enquiry_user_email" name="enquiry_user_email" class="form-control w-100" placeholder="Email id">
                        <div id="enquiry_error_email" class="msg error"></div>
                        <!-- <div id="forgot_email_error" class="msg error">Please Enter Valid Email</div> -->
                    </div>
                    <div class="relative-box w-100 m-auto form_element">
                        <div class="contactNumberWithCountryCode d-flex">
                            <div class="countryCodeBox">
                                <div class="custom_dropdown_element">
                                    <div class="custom_dropdown_box">
                                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><div class="selectedValue selected-enquiry">+91</div>
                                            <div class="dropdown_arrow">
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu country-data">
                                            <li class="dropdown-item"><a href="#">+91</a></li>
                                            <li class="dropdown-item"><a href="#">+1</a></li>
                                            <li class="dropdown-item"><a href="#">+20</a></li>
                                            <li class="dropdown-item"><a href="#">+27</a></li>
                                            <li class="dropdown-item"><a href="#">+30</a></li>
                                            <li class="dropdown-item"><a href="#">+31</a></li>
                                            <li class="dropdown-item"><a href="#">+32</a></li>
                                            <li class="dropdown-item"><a href="#">+33</a></li>
                                            <li class="dropdown-item"><a href="#">+34</a></li>
                                            <li class="dropdown-item"><a href="#">+36</a></li>
                                            <li class="dropdown-item"><a href="#">+39</a></li>
                                            <li class="dropdown-item"><a href="#">+40</a></li>
                                            <li class="dropdown-item"><a href="#">+41</a></li>
                                            <li class="dropdown-item"><a href="#">+43</a></li>
                                            <li class="dropdown-item"><a href="#">+44</a></li>
                                            <li class="dropdown-item"><a href="#">+45</a></li>
                                            <li class="dropdown-item"><a href="#">+46</a></li>
                                            <li class="dropdown-item"><a href="#">+47</a></li>
                                            <li class="dropdown-item"><a href="#">+48</a></li>
                                            <li class="dropdown-item"><a href="#">+49</a></li>
                                            <li class="dropdown-item"><a href="#">+51</a></li>
                                            <li class="dropdown-item"><a href="#">+52</a></li>
                                            <li class="dropdown-item"><a href="#">+53</a></li>
                                            <li class="dropdown-item"><a href="#">+54</a></li>
                                            <li class="dropdown-item"><a href="#">+55</a></li>
                                            <li class="dropdown-item"><a href="#">+56</a></li>
                                            <li class="dropdown-item"><a href="#">+57</a></li>
                                            <li class="dropdown-item"><a href="#">+58</a></li>
                                            <li class="dropdown-item"><a href="#">+60</a></li>
                                            <li class="dropdown-item"><a href="#">+61</a></li>
                                            <li class="dropdown-item"><a href="#">+62</a></li>
                                            <li class="dropdown-item"><a href="#">+63</a></li>
                                            <li class="dropdown-item"><a href="#">+64</a></li>
                                            <li class="dropdown-item"><a href="#">+65</a></li>
                                            <li class="dropdown-item"><a href="#">+66</a></li>
                                            <li class="dropdown-item"><a href="#">+7</a></li>
                                            <li class="dropdown-item"><a href="#">+81</a></li>
                                            <li class="dropdown-item"><a href="#">+82</a></li>
                                            <li class="dropdown-item"><a href="#">+84</a></li>
                                            <li class="dropdown-item"><a href="#">+86</a></li>
                                            <li class="dropdown-item"><a href="#">+90</a></li>
                                            <li class="dropdown-item"><a href="#">+92</a></li>
                                            <li class="dropdown-item"><a href="#">+94</a></li>
                                            <li class="dropdown-item"><a href="#">+95</a></li>
                                            <li class="dropdown-item"><a href="#">+98</a></li>
                                            <li class="dropdown-item"><a href="#">+212</a></li>
                                            <li class="dropdown-item"><a href="#">+213</a></li>
                                            <li class="dropdown-item"><a href="#">+216</a></li>
                                            <li class="dropdown-item"><a href="#">+218</a></li>
                                            <li class="dropdown-item"><a href="#">+220</a></li>
                                            <li class="dropdown-item"><a href="#">+221</a></li>
                                            <li class="dropdown-item"><a href="#">+223</a></li>
                                            <li class="dropdown-item"><a href="#">+224</a></li>
                                            <li class="dropdown-item"><a href="#">+225</a></li>
                                            <li class="dropdown-item"><a href="#">+226</a></li>
                                            <li class="dropdown-item"><a href="#">+227</a></li>
                                            <li class="dropdown-item"><a href="#">+228</a></li>
                                            <li class="dropdown-item"><a href="#">+229</a></li>
                                            <li class="dropdown-item"><a href="#">+230</a></li>
                                            <li class="dropdown-item"><a href="#">+231</a></li>
                                            <li class="dropdown-item"><a href="#">+232</a></li>
                                            <li class="dropdown-item"><a href="#">+233</a></li>
                                            <li class="dropdown-item"><a href="#">+234</a></li>
                                            <li class="dropdown-item"><a href="#">+235</a></li>
                                            <li class="dropdown-item"><a href="#">+236</a></li>
                                            <li class="dropdown-item"><a href="#">+237</a></li>
                                            <li class="dropdown-item"><a href="#">+238</a></li>
                                            <li class="dropdown-item"><a href="#">+239</a></li>
                                            <li class="dropdown-item"><a href="#">+240</a></li>
                                            <li class="dropdown-item"><a href="#">+241</a></li>
                                            <li class="dropdown-item"><a href="#">+242</a></li>
                                            <li class="dropdown-item"><a href="#">+242</a></li>
                                            <li class="dropdown-item"><a href="#">+243</a></li>
                                            <li class="dropdown-item"><a href="#">+244</a></li>
                                            <li class="dropdown-item"><a href="#">+245</a></li>
                                            <li class="dropdown-item"><a href="#">+246</a></li>
                                            <li class="dropdown-item"><a href="#">+246</a></li>
                                            <li class="dropdown-item"><a href="#">+247</a></li>
                                            <li class="dropdown-item"><a href="#">+248</a></li>
                                            <li class="dropdown-item"><a href="#">+249</a></li>
                                            <li class="dropdown-item"><a href="#">+250</a></li>
                                            <li class="dropdown-item"><a href="#">+251</a></li>
                                            <li class="dropdown-item"><a href="#">+252</a></li>
                                            <li class="dropdown-item"><a href="#">+253</a></li>
                                            <li class="dropdown-item"><a href="#">+254</a></li>
                                            <li class="dropdown-item"><a href="#">+255</a></li>
                                            <li class="dropdown-item"><a href="#">+256</a></li>
                                            <li class="dropdown-item"><a href="#">+257</a></li>
                                            <li class="dropdown-item"><a href="#">+258</a></li>
                                            <li class="dropdown-item"><a href="#">+260</a></li>
                                            <li class="dropdown-item"><a href="#">+261</a></li>
                                            <li class="dropdown-item"><a href="#">+262</a></li>
                                            <li class="dropdown-item"><a href="#">+263</a></li>
                                            <li class="dropdown-item"><a href="#">+264</a></li>
                                            <li class="dropdown-item"><a href="#">+264</a></li>
                                            <li class="dropdown-item"><a href="#">+265</a></li>
                                            <li class="dropdown-item"><a href="#">+266</a></li>
                                            <li class="dropdown-item"><a href="#">+267</a></li>
                                            <li class="dropdown-item"><a href="#">+268</a></li>
                                            <li class="dropdown-item"><a href="#">+268</a></li>
                                            <li class="dropdown-item"><a href="#">+269</a></li>
                                            <li class="dropdown-item"><a href="#">+269</a></li>
                                            <li class="dropdown-item"><a href="#">+290</a></li>
                                            <li class="dropdown-item"><a href="#">+291</a></li>
                                            <li class="dropdown-item"><a href="#">+297</a></li>
                                            <li class="dropdown-item"><a href="#">+298</a></li>
                                            <li class="dropdown-item"><a href="#">+299</a></li>
                                            <li class="dropdown-item"><a href="#">+345</a></li>
                                            <li class="dropdown-item"><a href="#">+350</a></li>
                                            <li class="dropdown-item"><a href="#">+351</a></li>
                                            <li class="dropdown-item"><a href="#">+352</a></li>
                                            <li class="dropdown-item"><a href="#">+353</a></li>
                                            <li class="dropdown-item"><a href="#">+354</a></li>
                                            <li class="dropdown-item"><a href="#">+355</a></li>
                                            <li class="dropdown-item"><a href="#">+356</a></li>
                                            <li class="dropdown-item"><a href="#">+357</a></li>
                                            <li class="dropdown-item"><a href="#">+358</a></li>
                                            <li class="dropdown-item"><a href="#">+359</a></li>
                                            <li class="dropdown-item"><a href="#">+370</a></li>
                                            <li class="dropdown-item"><a href="#">+371</a></li>
                                            <li class="dropdown-item"><a href="#">+372</a></li>
                                            <li class="dropdown-item"><a href="#">+373</a></li>
                                            <li class="dropdown-item"><a href="#">+374</a></li>
                                            <li class="dropdown-item"><a href="#">+375</a></li>
                                            <li class="dropdown-item"><a href="#">+376</a></li>
                                            <li class="dropdown-item"><a href="#">+377</a></li>
                                            <li class="dropdown-item"><a href="#">+378</a></li>
                                            <li class="dropdown-item"><a href="#">+380</a></li>
                                            <li class="dropdown-item"><a href="#">+381</a></li>
                                            <li class="dropdown-item"><a href="#">+385</a></li>
                                            <li class="dropdown-item"><a href="#">+386</a></li>
                                            <li class="dropdown-item"><a href="#">+387</a></li>
                                            <li class="dropdown-item"><a href="#">+389</a></li>
                                            <li class="dropdown-item"><a href="#">+420</a></li>
                                            <li class="dropdown-item"><a href="#">+421</a></li>
                                            <li class="dropdown-item"><a href="#">+423</a></li>
                                            <li class="dropdown-item"><a href="#">+441</a></li>
                                            <li class="dropdown-item"><a href="#">+473</a></li>
                                            <li class="dropdown-item"><a href="#">+500</a></li>
                                            <li class="dropdown-item"><a href="#">+501</a></li>
                                            <li class="dropdown-item"><a href="#">+502</a></li>
                                            <li class="dropdown-item"><a href="#">+503</a></li>
                                            <li class="dropdown-item"><a href="#">+503</a></li>
                                            <li class="dropdown-item"><a href="#">+505</a></li>
                                            <li class="dropdown-item"><a href="#">+506</a></li>
                                            <li class="dropdown-item"><a href="#">+507</a></li>
                                            <li class="dropdown-item"><a href="#">+509</a></li>
                                            <li class="dropdown-item"><a href="#">+590</a></li>
                                            <li class="dropdown-item"><a href="#">+591</a></li>
                                            <li class="dropdown-item"><a href="#">+592</a></li>
                                            <li class="dropdown-item"><a href="#">+593</a></li>
                                            <li class="dropdown-item"><a href="#">+594</a></li>
                                            <li class="dropdown-item"><a href="#">+595</a></li>
                                            <li class="dropdown-item"><a href="#">+596</a></li>
                                            <li class="dropdown-item"><a href="#">+597</a></li>
                                            <li class="dropdown-item"><a href="#">+598</a></li>
                                            <li class="dropdown-item"><a href="#">+599</a></li>
                                            <li class="dropdown-item"><a href="#">+649</a></li>
                                            <li class="dropdown-item"><a href="#">+664</a></li>
                                            <li class="dropdown-item"><a href="#">+670</a></li>
                                            <li class="dropdown-item"><a href="#">+671</a></li>
                                            <li class="dropdown-item"><a href="#">+672</a></li>
                                            <li class="dropdown-item"><a href="#">+673</a></li>
                                            <li class="dropdown-item"><a href="#">+674</a></li>
                                            <li class="dropdown-item"><a href="#">+675</a></li>
                                            <li class="dropdown-item"><a href="#">+676</a></li>
                                            <li class="dropdown-item"><a href="#">+677</a></li>
                                            <li class="dropdown-item"><a href="#">+678</a></li>
                                            <li class="dropdown-item"><a href="#">+679</a></li>
                                            <li class="dropdown-item"><a href="#">+680</a></li>
                                            <li class="dropdown-item"><a href="#">+681</a></li>
                                            <li class="dropdown-item"><a href="#">+682</a></li>
                                            <li class="dropdown-item"><a href="#">+683</a></li>
                                            <li class="dropdown-item"><a href="#">+684</a></li>
                                            <li class="dropdown-item"><a href="#">+685</a></li>
                                            <li class="dropdown-item"><a href="#">+686</a></li>
                                            <li class="dropdown-item"><a href="#">+687</a></li>
                                            <li class="dropdown-item"><a href="#">+688</a></li>
                                            <li class="dropdown-item"><a href="#">+689</a></li>
                                            <li class="dropdown-item"><a href="#">+691</a></li>
                                            <li class="dropdown-item"><a href="#">+692</a></li>
                                            <li class="dropdown-item"><a href="#">+758</a></li>
                                            <li class="dropdown-item"><a href="#">+767</a></li>
                                            <li class="dropdown-item"><a href="#">+787</a></li>
                                            <li class="dropdown-item"><a href="#">+809</a></li>
                                            <li class="dropdown-item"><a href="#">+850</a></li>
                                            <li class="dropdown-item"><a href="#">+852</a></li>
                                            <li class="dropdown-item"><a href="#">+853</a></li>
                                            <li class="dropdown-item"><a href="#">+855</a></li>
                                            <li class="dropdown-item"><a href="#">+856</a></li>
                                            <li class="dropdown-item"><a href="#">+868</a></li>
                                            <li class="dropdown-item"><a href="#">+869</a></li>
                                            <li class="dropdown-item"><a href="#">+876</a></li>
                                            <li class="dropdown-item"><a href="#">+880</a></li>
                                            <li class="dropdown-item"><a href="#">+886</a></li>
                                            <li class="dropdown-item"><a href="#">+960</a></li>
                                            <li class="dropdown-item"><a href="#">+961</a></li>
                                            <li class="dropdown-item"><a href="#">+962</a></li>
                                            <li class="dropdown-item"><a href="#">+963</a></li>
                                            <li class="dropdown-item"><a href="#">+964</a></li>
                                            <li class="dropdown-item"><a href="#">+965</a></li>
                                            <li class="dropdown-item"><a href="#">+966</a></li>
                                            <li class="dropdown-item"><a href="#">+967</a></li>
                                            <li class="dropdown-item"><a href="#">+968</a></li>
                                            <li class="dropdown-item"><a href="#">+970</a></li>
                                            <li class="dropdown-item"><a href="#">+971</a></li>
                                            <li class="dropdown-item"><a href="#">+972</a></li>
                                            <li class="dropdown-item"><a href="#">+973</a></li>
                                            <li class="dropdown-item"><a href="#">+974</a></li>
                                            <li class="dropdown-item"><a href="#">+975</a></li>
                                            <li class="dropdown-item"><a href="#">+976</a></li>
                                            <li class="dropdown-item"><a href="#">+977</a></li>
                                            <li class="dropdown-item"><a href="#">+992</a></li>
                                            <li class="dropdown-item"><a href="#">+993</a></li>
                                            <li class="dropdown-item"><a href="#">+994</a></li>
                                            <li class="dropdown-item"><a href="#">+995</a></li>
                                            <li class="dropdown-item"><a href="#">+996</a></li>
                                            <li class="dropdown-item"><a href="#">+998</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <input type="number" onkeyup="numchange('en');" id="enquiry_user_contact_number" name="enquiry_user_contact_number" class="form-control w-100" placeholder="Contact Number">
                        </div>
                        <div id="enquiry_error_contact" class="msg error"></div>
                        <!-- <div id="forgot_email_error" class="msg error">Please Enter Valid Email</div> -->
                    </div>
                    <div class="relative-box w-100 m-auto form_element form-check-inline">
                        <div class="chooseElementCheck">
                            <label class="checkoutBox">Opt-in for receiving important information and updates on WhatsApp
                                <input type="checkbox" checked id="enquiry_terms_conditions" name="enquiry_terms_conditions">
                                <span class="checkmarkB transition"></span>
                            </label>
                        </div>
                    </div>
                    <!-- <div id="enquiry_success" style="margin-bottom: 5px;display: none;" class="msg error">Your enquiry has been submitted successfully.</div> -->
                    <input type="submit" name="submit" value="Submit" class="kalpataru_btn">
                    <!-- <div id="success_error" class="msg text-center"></div> -->
                </form>

                <div class="callQueryWrapper d-md-none">
                    <h2>For any query call us on:</h2>
                    <a href="tel:+91 22 3064 3065">
                        <div class="enquiryPhoneNumber d-flex align-items-center mt-1">
                            <i class="kalpataru-icon-call"></i>
                            <p class="mb-0">+91 22 3064 3065</p>
                        </div>
                    </a>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Enquiry pop up end -->

<!-- Book now pop up start -->
<div class="main_popup_wrapper modal fade" id="bookNowForm">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">BOOK NOW</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="kalpataru-icon-close"></i></span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="book_popup_form" name="book_popup_form" class="form-inline relative-box">
                    <input type="hidden" class="csrf_token" id="book_csrf_token" name="csrf_token" value="<?php echo generateToken('book_now'); ?>">
                    <div class="relative-box w-100 m-auto form_element">
                        <input type="name" id="book_user_name" name="book_user_name" class="form-control w-100" placeholder="Name">
                        <div id="book_error_name" class="msg error"></div>
                    </div>
                    <div class="relative-box w-100 m-auto form_element">
                        <input type="text" id="book_user_email" name="book_user_email" class="form-control w-100" placeholder="Email id">
                        <div id="book_error_email" class="msg error"></div>
                    </div>
                    <div class="relative-box w-100 m-auto form_element">
                        <div class="contactNumberWithCountryCode d-flex">
                            <div class="countryCodeBox">
                                <div class="custom_dropdown_element">
                                    <div class="custom_dropdown_box">
                                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><div class="selectedValue selected-book">+91</div>
                                            <div class="dropdown_arrow">
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu country-data">
                                           <li class="dropdown-item"><a href="#">+91</a></li>
                                            <li class="dropdown-item"><a href="#">+1</a></li>
                                            <li class="dropdown-item"><a href="#">+20</a></li>
                                            <li class="dropdown-item"><a href="#">+27</a></li>
                                            <li class="dropdown-item"><a href="#">+30</a></li>
                                            <li class="dropdown-item"><a href="#">+31</a></li>
                                            <li class="dropdown-item"><a href="#">+32</a></li>
                                            <li class="dropdown-item"><a href="#">+33</a></li>
                                            <li class="dropdown-item"><a href="#">+34</a></li>
                                            <li class="dropdown-item"><a href="#">+36</a></li>
                                            <li class="dropdown-item"><a href="#">+39</a></li>
                                            <li class="dropdown-item"><a href="#">+40</a></li>
                                            <li class="dropdown-item"><a href="#">+41</a></li>
                                            <li class="dropdown-item"><a href="#">+43</a></li>
                                            <li class="dropdown-item"><a href="#">+44</a></li>
                                            <li class="dropdown-item"><a href="#">+45</a></li>
                                            <li class="dropdown-item"><a href="#">+46</a></li>
                                            <li class="dropdown-item"><a href="#">+47</a></li>
                                            <li class="dropdown-item"><a href="#">+48</a></li>
                                            <li class="dropdown-item"><a href="#">+49</a></li>
                                            <li class="dropdown-item"><a href="#">+51</a></li>
                                            <li class="dropdown-item"><a href="#">+52</a></li>
                                            <li class="dropdown-item"><a href="#">+53</a></li>
                                            <li class="dropdown-item"><a href="#">+54</a></li>
                                            <li class="dropdown-item"><a href="#">+55</a></li>
                                            <li class="dropdown-item"><a href="#">+56</a></li>
                                            <li class="dropdown-item"><a href="#">+57</a></li>
                                            <li class="dropdown-item"><a href="#">+58</a></li>
                                            <li class="dropdown-item"><a href="#">+60</a></li>
                                            <li class="dropdown-item"><a href="#">+61</a></li>
                                            <li class="dropdown-item"><a href="#">+62</a></li>
                                            <li class="dropdown-item"><a href="#">+63</a></li>
                                            <li class="dropdown-item"><a href="#">+64</a></li>
                                            <li class="dropdown-item"><a href="#">+65</a></li>
                                            <li class="dropdown-item"><a href="#">+66</a></li>
                                            <li class="dropdown-item"><a href="#">+7</a></li>
                                            <li class="dropdown-item"><a href="#">+81</a></li>
                                            <li class="dropdown-item"><a href="#">+82</a></li>
                                            <li class="dropdown-item"><a href="#">+84</a></li>
                                            <li class="dropdown-item"><a href="#">+86</a></li>
                                            <li class="dropdown-item"><a href="#">+90</a></li>
                                            <li class="dropdown-item"><a href="#">+92</a></li>
                                            <li class="dropdown-item"><a href="#">+94</a></li>
                                            <li class="dropdown-item"><a href="#">+95</a></li>
                                            <li class="dropdown-item"><a href="#">+98</a></li>
                                            <li class="dropdown-item"><a href="#">+212</a></li>
                                            <li class="dropdown-item"><a href="#">+213</a></li>
                                            <li class="dropdown-item"><a href="#">+216</a></li>
                                            <li class="dropdown-item"><a href="#">+218</a></li>
                                            <li class="dropdown-item"><a href="#">+220</a></li>
                                            <li class="dropdown-item"><a href="#">+221</a></li>
                                            <li class="dropdown-item"><a href="#">+223</a></li>
                                            <li class="dropdown-item"><a href="#">+224</a></li>
                                            <li class="dropdown-item"><a href="#">+225</a></li>
                                            <li class="dropdown-item"><a href="#">+226</a></li>
                                            <li class="dropdown-item"><a href="#">+227</a></li>
                                            <li class="dropdown-item"><a href="#">+228</a></li>
                                            <li class="dropdown-item"><a href="#">+229</a></li>
                                            <li class="dropdown-item"><a href="#">+230</a></li>
                                            <li class="dropdown-item"><a href="#">+231</a></li>
                                            <li class="dropdown-item"><a href="#">+232</a></li>
                                            <li class="dropdown-item"><a href="#">+233</a></li>
                                            <li class="dropdown-item"><a href="#">+234</a></li>
                                            <li class="dropdown-item"><a href="#">+235</a></li>
                                            <li class="dropdown-item"><a href="#">+236</a></li>
                                            <li class="dropdown-item"><a href="#">+237</a></li>
                                            <li class="dropdown-item"><a href="#">+238</a></li>
                                            <li class="dropdown-item"><a href="#">+239</a></li>
                                            <li class="dropdown-item"><a href="#">+240</a></li>
                                            <li class="dropdown-item"><a href="#">+241</a></li>
                                            <li class="dropdown-item"><a href="#">+242</a></li>
                                            <li class="dropdown-item"><a href="#">+242</a></li>
                                            <li class="dropdown-item"><a href="#">+243</a></li>
                                            <li class="dropdown-item"><a href="#">+244</a></li>
                                            <li class="dropdown-item"><a href="#">+245</a></li>
                                            <li class="dropdown-item"><a href="#">+246</a></li>
                                            <li class="dropdown-item"><a href="#">+246</a></li>
                                            <li class="dropdown-item"><a href="#">+247</a></li>
                                            <li class="dropdown-item"><a href="#">+248</a></li>
                                            <li class="dropdown-item"><a href="#">+249</a></li>
                                            <li class="dropdown-item"><a href="#">+250</a></li>
                                            <li class="dropdown-item"><a href="#">+251</a></li>
                                            <li class="dropdown-item"><a href="#">+252</a></li>
                                            <li class="dropdown-item"><a href="#">+253</a></li>
                                            <li class="dropdown-item"><a href="#">+254</a></li>
                                            <li class="dropdown-item"><a href="#">+255</a></li>
                                            <li class="dropdown-item"><a href="#">+256</a></li>
                                            <li class="dropdown-item"><a href="#">+257</a></li>
                                            <li class="dropdown-item"><a href="#">+258</a></li>
                                            <li class="dropdown-item"><a href="#">+260</a></li>
                                            <li class="dropdown-item"><a href="#">+261</a></li>
                                            <li class="dropdown-item"><a href="#">+262</a></li>
                                            <li class="dropdown-item"><a href="#">+263</a></li>
                                            <li class="dropdown-item"><a href="#">+264</a></li>
                                            <li class="dropdown-item"><a href="#">+264</a></li>
                                            <li class="dropdown-item"><a href="#">+265</a></li>
                                            <li class="dropdown-item"><a href="#">+266</a></li>
                                            <li class="dropdown-item"><a href="#">+267</a></li>
                                            <li class="dropdown-item"><a href="#">+268</a></li>
                                            <li class="dropdown-item"><a href="#">+268</a></li>
                                            <li class="dropdown-item"><a href="#">+269</a></li>
                                            <li class="dropdown-item"><a href="#">+269</a></li>
                                            <li class="dropdown-item"><a href="#">+290</a></li>
                                            <li class="dropdown-item"><a href="#">+291</a></li>
                                            <li class="dropdown-item"><a href="#">+297</a></li>
                                            <li class="dropdown-item"><a href="#">+298</a></li>
                                            <li class="dropdown-item"><a href="#">+299</a></li>
                                            <li class="dropdown-item"><a href="#">+345</a></li>
                                            <li class="dropdown-item"><a href="#">+350</a></li>
                                            <li class="dropdown-item"><a href="#">+351</a></li>
                                            <li class="dropdown-item"><a href="#">+352</a></li>
                                            <li class="dropdown-item"><a href="#">+353</a></li>
                                            <li class="dropdown-item"><a href="#">+354</a></li>
                                            <li class="dropdown-item"><a href="#">+355</a></li>
                                            <li class="dropdown-item"><a href="#">+356</a></li>
                                            <li class="dropdown-item"><a href="#">+357</a></li>
                                            <li class="dropdown-item"><a href="#">+358</a></li>
                                            <li class="dropdown-item"><a href="#">+359</a></li>
                                            <li class="dropdown-item"><a href="#">+370</a></li>
                                            <li class="dropdown-item"><a href="#">+371</a></li>
                                            <li class="dropdown-item"><a href="#">+372</a></li>
                                            <li class="dropdown-item"><a href="#">+373</a></li>
                                            <li class="dropdown-item"><a href="#">+374</a></li>
                                            <li class="dropdown-item"><a href="#">+375</a></li>
                                            <li class="dropdown-item"><a href="#">+376</a></li>
                                            <li class="dropdown-item"><a href="#">+377</a></li>
                                            <li class="dropdown-item"><a href="#">+378</a></li>
                                            <li class="dropdown-item"><a href="#">+380</a></li>
                                            <li class="dropdown-item"><a href="#">+381</a></li>
                                            <li class="dropdown-item"><a href="#">+385</a></li>
                                            <li class="dropdown-item"><a href="#">+386</a></li>
                                            <li class="dropdown-item"><a href="#">+387</a></li>
                                            <li class="dropdown-item"><a href="#">+389</a></li>
                                            <li class="dropdown-item"><a href="#">+420</a></li>
                                            <li class="dropdown-item"><a href="#">+421</a></li>
                                            <li class="dropdown-item"><a href="#">+423</a></li>
                                            <li class="dropdown-item"><a href="#">+441</a></li>
                                            <li class="dropdown-item"><a href="#">+473</a></li>
                                            <li class="dropdown-item"><a href="#">+500</a></li>
                                            <li class="dropdown-item"><a href="#">+501</a></li>
                                            <li class="dropdown-item"><a href="#">+502</a></li>
                                            <li class="dropdown-item"><a href="#">+503</a></li>
                                            <li class="dropdown-item"><a href="#">+503</a></li>
                                            <li class="dropdown-item"><a href="#">+505</a></li>
                                            <li class="dropdown-item"><a href="#">+506</a></li>
                                            <li class="dropdown-item"><a href="#">+507</a></li>
                                            <li class="dropdown-item"><a href="#">+509</a></li>
                                            <li class="dropdown-item"><a href="#">+590</a></li>
                                            <li class="dropdown-item"><a href="#">+591</a></li>
                                            <li class="dropdown-item"><a href="#">+592</a></li>
                                            <li class="dropdown-item"><a href="#">+593</a></li>
                                            <li class="dropdown-item"><a href="#">+594</a></li>
                                            <li class="dropdown-item"><a href="#">+595</a></li>
                                            <li class="dropdown-item"><a href="#">+596</a></li>
                                            <li class="dropdown-item"><a href="#">+597</a></li>
                                            <li class="dropdown-item"><a href="#">+598</a></li>
                                            <li class="dropdown-item"><a href="#">+599</a></li>
                                            <li class="dropdown-item"><a href="#">+649</a></li>
                                            <li class="dropdown-item"><a href="#">+664</a></li>
                                            <li class="dropdown-item"><a href="#">+670</a></li>
                                            <li class="dropdown-item"><a href="#">+671</a></li>
                                            <li class="dropdown-item"><a href="#">+672</a></li>
                                            <li class="dropdown-item"><a href="#">+673</a></li>
                                            <li class="dropdown-item"><a href="#">+674</a></li>
                                            <li class="dropdown-item"><a href="#">+675</a></li>
                                            <li class="dropdown-item"><a href="#">+676</a></li>
                                            <li class="dropdown-item"><a href="#">+677</a></li>
                                            <li class="dropdown-item"><a href="#">+678</a></li>
                                            <li class="dropdown-item"><a href="#">+679</a></li>
                                            <li class="dropdown-item"><a href="#">+680</a></li>
                                            <li class="dropdown-item"><a href="#">+681</a></li>
                                            <li class="dropdown-item"><a href="#">+682</a></li>
                                            <li class="dropdown-item"><a href="#">+683</a></li>
                                            <li class="dropdown-item"><a href="#">+684</a></li>
                                            <li class="dropdown-item"><a href="#">+685</a></li>
                                            <li class="dropdown-item"><a href="#">+686</a></li>
                                            <li class="dropdown-item"><a href="#">+687</a></li>
                                            <li class="dropdown-item"><a href="#">+688</a></li>
                                            <li class="dropdown-item"><a href="#">+689</a></li>
                                            <li class="dropdown-item"><a href="#">+691</a></li>
                                            <li class="dropdown-item"><a href="#">+692</a></li>
                                            <li class="dropdown-item"><a href="#">+758</a></li>
                                            <li class="dropdown-item"><a href="#">+767</a></li>
                                            <li class="dropdown-item"><a href="#">+787</a></li>
                                            <li class="dropdown-item"><a href="#">+809</a></li>
                                            <li class="dropdown-item"><a href="#">+850</a></li>
                                            <li class="dropdown-item"><a href="#">+852</a></li>
                                            <li class="dropdown-item"><a href="#">+853</a></li>
                                            <li class="dropdown-item"><a href="#">+855</a></li>
                                            <li class="dropdown-item"><a href="#">+856</a></li>
                                            <li class="dropdown-item"><a href="#">+868</a></li>
                                            <li class="dropdown-item"><a href="#">+869</a></li>
                                            <li class="dropdown-item"><a href="#">+876</a></li>
                                            <li class="dropdown-item"><a href="#">+880</a></li>
                                            <li class="dropdown-item"><a href="#">+886</a></li>
                                            <li class="dropdown-item"><a href="#">+960</a></li>
                                            <li class="dropdown-item"><a href="#">+961</a></li>
                                            <li class="dropdown-item"><a href="#">+962</a></li>
                                            <li class="dropdown-item"><a href="#">+963</a></li>
                                            <li class="dropdown-item"><a href="#">+964</a></li>
                                            <li class="dropdown-item"><a href="#">+965</a></li>
                                            <li class="dropdown-item"><a href="#">+966</a></li>
                                            <li class="dropdown-item"><a href="#">+967</a></li>
                                            <li class="dropdown-item"><a href="#">+968</a></li>
                                            <li class="dropdown-item"><a href="#">+970</a></li>
                                            <li class="dropdown-item"><a href="#">+971</a></li>
                                            <li class="dropdown-item"><a href="#">+972</a></li>
                                            <li class="dropdown-item"><a href="#">+973</a></li>
                                            <li class="dropdown-item"><a href="#">+974</a></li>
                                            <li class="dropdown-item"><a href="#">+975</a></li>
                                            <li class="dropdown-item"><a href="#">+976</a></li>
                                            <li class="dropdown-item"><a href="#">+977</a></li>
                                            <li class="dropdown-item"><a href="#">+992</a></li>
                                            <li class="dropdown-item"><a href="#">+993</a></li>
                                            <li class="dropdown-item"><a href="#">+994</a></li>
                                            <li class="dropdown-item"><a href="#">+995</a></li>
                                            <li class="dropdown-item"><a href="#">+996</a></li>
                                            <li class="dropdown-item"><a href="#">+998</a></li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                           <input type="number" onkeyup="numchange('bo');" id="book_user_contact_number" name="book_user_contact_number" class="form-control w-100" placeholder="Contact Number">
                       </div>
                       <div id="book_error_contact" class="msg error"></div>
                   </div>
                   <div class="relative-box w-100 m-auto form_element form-check-inline">
                    <div class="chooseElementCheck">
                        <label class="checkoutBox">Opt-in for receiving important information and updates on WhatsApp
                            <input type="checkbox" checked id="book_terms_conditions" name="book_terms_conditions">
                            <span class="checkmarkB transition"></span>
                        </label>
                    </div>
                </div>
                <div id="book_success" style="margin-bottom: 5px;display: none;" class="msg error">Your enquiry has been submitted successfully.</div>
                <input type="submit" name="submit" value="Submit" class="kalpataru_btn">
                <!-- <div id="success_error" class="msg text-center"></div> -->
            </form>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- book pop up end -->



<!-- Get In Touch start -->

<div class="main_popup_wrapper modal fade" id="gettouchPopupWrapper">

  <div class="modal-dialog modal-dialog-centered" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <h4 class="modal-title">PLEASE ENTER YOUR DETAILS BELOW</h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">

            <i class="kalpataru-icon-close"></i>

          </span>

          <span class="sr-only">Close</span>

        </button>

      </div>

      <div class="modal-body">

        <form id="book_gettouch" class="form-inline relative-box" method="post" action="<?=base_url('website/savegetintouch')?>">

            <input type="hidden" class="csrf_token" id="book_csrf_token" name="csrf_token" value="

            <?php echo generateToken('book_now'); ?>">

            <div class="relative-box w-100 m-auto form_element">

               

                <input type="name" id="book_gettouch_name" name="book_gettouch_name" class="form-control w-100" placeholder="Name" required>

                <div id="book_error_name" class="msg error"></div>

            </div>

            <div class="relative-box w-100 m-auto form_element">

                

                <input type="email" id="book_gettouch_email" name="book_gettouch_email" pattern="/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/" class="form-control w-100" placeholder="Email" required>

                <div id="book_error_email" class="msg error"></div>

            </div>

                

            

            <div class="relative-box w-100 m-auto form_element">
                <select class="form-control w-100 custom_dropdown_box"  style="color: #848c92;" name="book_gettouch_property" id="book_gettouch_property">
                <option class="dropdown-item" style="color: #848c92;">Select Property</option>

                    <?php
    foreach($featured as $key => $value) { 
     $ci = & get_instance();

    $ci->load->model('common_m');

   $title = $ci->common_m->seoUrl($value->title);
    ?>
               
                <option class="dropdown-item" style="color: #848c92;" value="<?=$value->title?>"><?=$value->title?> , <?=$value->city_name?></option>

                <?php
    } ?>

                </select>

                <div id="book_error_email" class="msg error"></div>

            </div>

            <div class="relative-box w-100 m-auto form_element">

               
                <div class="contactNumberWithCountryCode  d-flex"> <?php $cntrycode = $cntrycode; ?> <select class="country-data" name="country_code" style=" font-family: 'History-Pro';font-size: 0.938em;color: #727171;cursor: pointer; white-space: inherit;overflow-x: hidden;padding: 0px 25px 0px 10px;border: 1px solid #ccc;border-radius: 0;">

                    <option class="dropdown-item" <?php if($cntrycode=='+91'){?> selected <?php } ?>>

                    <a href="#">+91</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+1'){?> selected <?php } ?>>

                    <a href="#">+1</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+20'){?> selected <?php } ?>>

                    <a href="#">+20</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+27'){?> selected <?php } ?>>

                    <a href="#">+27</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+30'){?> selected <?php } ?>>

                    <a href="#">+30</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+31'){?> selected <?php } ?>>

                    <a href="#">+31</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+32'){?> selected <?php } ?>>

                    <a href="#">+32</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+33'){?> selected <?php } ?>>

                    <a href="#">+33</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+34'){?> selected <?php } ?>>

                    <a href="#">+34</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+36'){?> selected <?php } ?>>

                    <a href="#">+36</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+39'){?> selected <?php } ?>>

                    <a href="#">+39</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+40'){?> selected <?php } ?>>

                    <a href="#">+40</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+41'){?> selected <?php } ?>>

                    <a href="#">+41</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+43'){?> selected <?php } ?>>

                    <a href="#">+43</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+44'){?> selected <?php } ?>>

                    <a href="#">+44</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+45'){?> selected <?php } ?>>

                    <a href="#">+45</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+46'){?> selected <?php } ?>>

                    <a href="#">+46</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+47'){?> selected <?php } ?>>

                    <a href="#">+47</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+48'){?> selected <?php } ?>>

                    <a href="#">+48</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+49'){?> selected <?php } ?>>

                    <a href="#">+49</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+51'){?> selected <?php } ?>>

                    <a href="#">+51</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+52'){?> selected <?php } ?>>

                    <a href="#">+52</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+53'){?> selected <?php } ?>>

                    <a href="#">+53</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+54'){?> selected <?php } ?>>

                    <a href="#">+54</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+55'){?> selected <?php } ?>>

                    <a href="#">+55</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+56'){?> selected <?php } ?>>

                    <a href="#">+56</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+57'){?> selected <?php } ?>>

                    <a href="#">+57</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+58'){?> selected <?php } ?>>

                    <a href="#">+58</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+60'){?> selected <?php } ?>>

                    <a href="#">+60</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+61'){?> selected <?php } ?>>

                    <a href="#">+61</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+62'){?> selected <?php } ?>>

                    <a href="#">+62</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+63'){?> selected <?php } ?>>

                    <a href="#">+63</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+64'){?> selected <?php } ?>>

                    <a href="#">+64</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+65'){?> selected <?php } ?>>

                    <a href="#">+65</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+66'){?> selected <?php } ?>>

                    <a href="#">+66</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+7'){?> selected <?php } ?>>

                    <a href="#">+7</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+81'){?> selected <?php } ?>>

                    <a href="#">+81</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+82'){?> selected <?php } ?>>

                    <a href="#">+82</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+84'){?> selected <?php } ?>>

                    <a href="#">+84</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+86'){?> selected <?php } ?>>

                    <a href="#">+86</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+90'){?> selected <?php } ?>>

                    <a href="#">+90</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+92'){?> selected <?php } ?>>

                    <a href="#">+92</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+94'){?> selected <?php } ?>>

                    <a href="#">+94</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+95'){?> selected <?php } ?>>

                    <a href="#">+95</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+98'){?> selected <?php } ?>>

                    <a href="#">+98</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+212'){?> selected <?php } ?>>

                    <a href="#">+212</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+213'){?> selected <?php } ?>>

                    <a href="#">+213</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+216'){?> selected <?php } ?>>

                    <a href="#">+216</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+218'){?> selected <?php } ?>>

                    <a href="#">+218</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+220'){?> selected <?php } ?>>

                    <a href="#">+220</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+221'){?> selected <?php } ?>>

                    <a href="#">+221</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+223'){?> selected <?php } ?>>

                    <a href="#">+223</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+224'){?> selected <?php } ?>>

                    <a href="#">+224</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+225'){?> selected <?php } ?>>

                    <a href="#">+225</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+226'){?> selected <?php } ?>>

                    <a href="#">+226</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+227'){?> selected <?php } ?>>

                    <a href="#">+227</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+228'){?> selected <?php } ?>>

                    <a href="#">+228</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+229'){?> selected <?php } ?>>

                    <a href="#">+229</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+230'){?> selected <?php } ?>>

                    <a href="#">+230</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+231'){?> selected <?php } ?>>

                    <a href="#">+231</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+232'){?> selected <?php } ?>>

                    <a href="#">+232</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+233'){?> selected <?php } ?>>

                    <a href="#">+233</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+234'){?> selected <?php } ?>>

                    <a href="#">+234</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+235'){?> selected <?php } ?>>

                    <a href="#">+235</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+236'){?> selected <?php } ?>>

                    <a href="#">+236</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+237'){?> selected <?php } ?>>

                    <a href="#">+237</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+238'){?> selected <?php } ?>>

                    <a href="#">+238</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+239'){?> selected <?php } ?>>

                    <a href="#">+239</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+240'){?> selected <?php } ?>>

                    <a href="#">+240</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+241'){?> selected <?php } ?>>

                    <a href="#">+241</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+242'){?> selected <?php } ?>>

                    <a href="#">+242</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+243'){?> selected <?php } ?>>

                    <a href="#">+243</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+244'){?> selected <?php } ?>>

                    <a href="#">+244</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+245'){?> selected <?php } ?>>

                    <a href="#">+245</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+246'){?> selected <?php } ?>>

                    <a href="#">+246</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+247'){?> selected <?php } ?>>

                    <a href="#">+247</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+248'){?> selected <?php } ?>>

                    <a href="#">+248</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+249'){?> selected <?php } ?>>

                    <a href="#">+249</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+250'){?> selected <?php } ?>>

                    <a href="#">+250</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+251'){?> selected <?php } ?>>

                    <a href="#">+251</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+252'){?> selected <?php } ?>>

                    <a href="#">+252</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+253'){?> selected <?php } ?>>

                    <a href="#">+253</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+254'){?> selected <?php } ?>>

                    <a href="#">+254</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+255'){?> selected <?php } ?>>

                    <a href="#">+255</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+256'){?> selected <?php } ?>>

                    <a href="#">+256</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+257'){?> selected <?php } ?>>

                    <a href="#">+257</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+258'){?> selected <?php } ?>>

                    <a href="#">+258</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+260'){?> selected <?php } ?>>

                    <a href="#">+260</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+261'){?> selected <?php } ?>>

                    <a href="#">+261</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+262'){?> selected <?php } ?>>

                    <a href="#">+262</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+263'){?> selected <?php } ?>>

                    <a href="#">+263</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+264'){?> selected <?php } ?>>

                    <a href="#">+264</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+265'){?> selected <?php } ?>>

                    <a href="#">+265</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+266'){?> selected <?php } ?>>

                    <a href="#">+266</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+267'){?> selected <?php } ?>>

                    <a href="#">+267</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+268'){?> selected <?php } ?>>

                    <a href="#">+268</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+269'){?> selected <?php } ?>>

                    <a href="#">+269</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+290'){?> selected <?php } ?>>

                    <a href="#">+290</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+291'){?> selected <?php } ?>>

                    <a href="#">+291</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+297'){?> selected <?php } ?>>

                    <a href="#">+297</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+298'){?> selected <?php } ?>>

                    <a href="#">+298</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+299'){?> selected <?php } ?>>

                    <a href="#">+299</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+345'){?> selected <?php } ?>>

                    <a href="#">+345</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+350'){?> selected <?php } ?>>

                    <a href="#">+350</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+351'){?> selected <?php } ?>>

                    <a href="#">+351</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+352'){?> selected <?php } ?>>

                    <a href="#">+352</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+353'){?> selected <?php } ?>>

                    <a href="#">+353</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+354'){?> selected <?php } ?>>

                    <a href="#">+354</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+355'){?> selected <?php } ?>>

                    <a href="#">+355</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+356'){?> selected <?php } ?>>

                    <a href="#">+356</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+357'){?> selected <?php } ?>>

                    <a href="#">+357</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+358'){?> selected <?php } ?>>

                    <a href="#">+358</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+359'){?> selected <?php } ?>>

                    <a href="#">+359</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+370'){?> selected <?php } ?>>

                    <a href="#">+370</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+371'){?> selected <?php } ?>>

                    <a href="#">+371</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+372'){?> selected <?php } ?>>

                    <a href="#">+372</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+373'){?> selected <?php } ?>>

                    <a href="#">+373</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+374'){?> selected <?php } ?>>

                    <a href="#">+374</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+375'){?> selected <?php } ?>>

                    <a href="#">+375</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+376'){?> selected <?php } ?>>

                    <a href="#">+376</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+377'){?> selected <?php } ?>>

                    <a href="#">+377</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+378'){?> selected <?php } ?>>

                    <a href="#">+378</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+380'){?> selected <?php } ?>>

                    <a href="#">+380</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+381'){?> selected <?php } ?>>

                    <a href="#">+381</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+385'){?> selected <?php } ?>>

                    <a href="#">+385</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+386'){?> selected <?php } ?>>

                    <a href="#">+386</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+387'){?> selected <?php } ?>>

                    <a href="#">+387</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+389'){?> selected <?php } ?>>

                    <a href="#">+389</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+420'){?> selected <?php } ?>>

                    <a href="#">+420</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+421'){?> selected <?php } ?>>

                    <a href="#">+421</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+423'){?> selected <?php } ?>>

                    <a href="#">+423</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+441'){?> selected <?php } ?>>

                    <a href="#">+441</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+473'){?> selected <?php } ?>>

                    <a href="#">+473</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+500'){?> selected <?php } ?>>

                    <a href="#">+500</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+501'){?> selected <?php } ?>>

                    <a href="#">+501</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+502'){?> selected <?php } ?>>

                    <a href="#">+502</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+503'){?> selected <?php } ?>>

                    <a href="#">+503</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+505'){?> selected <?php } ?>>

                    <a href="#">+505</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+506'){?> selected <?php } ?>>

                    <a href="#">+506</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+507'){?> selected <?php } ?>>

                    <a href="#">+507</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+509'){?> selected <?php } ?>>

                    <a href="#">+509</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+590'){?> selected <?php } ?>>

                    <a href="#">+590</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+591'){?> selected <?php } ?>>

                    <a href="#">+591</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+592'){?> selected <?php } ?>>

                    <a href="#">+592</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+593'){?> selected <?php } ?>>

                    <a href="#">+593</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+594'){?> selected <?php } ?>>

                    <a href="#">+594</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+595'){?> selected <?php } ?>>

                    <a href="#">+595</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+596'){?> selected <?php } ?>>

                    <a href="#">+596</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+597'){?> selected <?php } ?>>

                    <a href="#">+597</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+598'){?> selected <?php } ?>>

                    <a href="#">+598</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+599'){?> selected <?php } ?>>

                    <a href="#">+599</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+649'){?> selected <?php } ?>>

                    <a href="#">+649</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+664'){?> selected <?php } ?>>

                    <a href="#">+664</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+670'){?> selected <?php } ?>>

                    <a href="#">+670</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+671'){?> selected <?php } ?>>

                    <a href="#">+671</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+672'){?> selected <?php } ?>>

                    <a href="#">+672</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+673'){?> selected <?php } ?>>

                    <a href="#">+673</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+674'){?> selected <?php } ?>>

                    <a href="#">+674</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+675'){?> selected <?php } ?>>

                    <a href="#">+675</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+676'){?> selected <?php } ?>>

                    <a href="#">+676</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+677'){?> selected <?php } ?>>

                    <a href="#">+677</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+678'){?> selected <?php } ?>>

                    <a href="#">+678</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+679'){?> selected <?php } ?>>

                    <a href="#">+679</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+680'){?> selected <?php } ?>>

                    <a href="#">+680</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+681'){?> selected <?php } ?>>

                    <a href="#">+681</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+682'){?> selected <?php } ?>>

                    <a href="#">+682</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+683'){?> selected <?php } ?>>

                    <a href="#">+683</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+684'){?> selected <?php } ?>>

                    <a href="#">+684</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+685'){?> selected <?php } ?>>

                    <a href="#">+685</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+686'){?> selected <?php } ?>>

                    <a href="#">+686</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+687'){?> selected <?php } ?>>

                    <a href="#">+687</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+688'){?> selected <?php } ?>>

                    <a href="#">+688</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+689'){?> selected <?php } ?>>

                    <a href="#">+689</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+691'){?> selected <?php } ?>>

                    <a href="#">+691</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+692'){?> selected <?php } ?>>

                    <a href="#">+692</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+758'){?> selected <?php } ?>>

                    <a href="#">+758</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+767'){?> selected <?php } ?>>

                    <a href="#">+767</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+787'){?> selected <?php } ?>>

                    <a href="#">+787</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+809'){?> selected <?php } ?>>

                    <a href="#">+809</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+850'){?> selected <?php } ?>>

                    <a href="#">+850</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+852'){?> selected <?php } ?>>

                    <a href="#">+852</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+853'){?> selected <?php } ?>>

                    <a href="#">+853</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+855'){?> selected <?php } ?>>

                    <a href="#">+855</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+856'){?> selected <?php } ?>>

                    <a href="#">+856</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+869'){?> selected <?php } ?>>

                    <a href="#">+868</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+869'){?> selected <?php } ?>>

                    <a href="#">+869</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+876'){?> selected <?php } ?>>

                    <a href="#">+876</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+880'){?> selected <?php } ?>>

                    <a href="#">+880</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+886'){?> selected <?php } ?>>

                    <a href="#">+886</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+960'){?> selected <?php } ?>>

                    <a href="#">+960</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+961'){?> selected <?php } ?>>

                    <a href="#">+961</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+962'){?> selected <?php } ?>>

                    <a href="#">+962</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+963'){?> selected <?php } ?>>

                    <a href="#">+963</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+964'){?> selected <?php } ?>>

                    <a href="#">+964</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+965'){?> selected <?php } ?>>

                    <a href="#">+965</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+966'){?> selected <?php } ?>>

                    <a href="#">+966</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+967'){?> selected <?php } ?>>

                    <a href="#">+967</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+968'){?> selected <?php } ?>>

                    <a href="#">+968</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+970'){?> selected <?php } ?>>

                    <a href="#">+970</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+971'){?> selected <?php } ?>>

                    <a href="#">+971</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+972'){?> selected <?php } ?>>

                    <a href="#">+972</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+973'){?> selected <?php } ?>>

                    <a href="#">+973</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+974'){?> selected <?php } ?>>

                    <a href="#">+974</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+975'){?> selected <?php } ?>>

                    <a href="#">+975</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+976'){?> selected <?php } ?>>

                    <a href="#">+976</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+977'){?> selected <?php } ?>>

                    <a href="#">+977</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+992'){?> selected <?php } ?>>

                    <a href="#">+992</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+993'){?> selected <?php } ?>>

                    <a href="#">+993</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+994'){?> selected <?php } ?>>

                    <a href="#">+994</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+995'){?> selected <?php } ?>>

                    <a href="#">+995</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+996'){?> selected <?php } ?>>

                    <a href="#">+996</a>

                    </option>

                    <option class="dropdown-item" <?php if($cntrycode=='+998'){?> selected <?php } ?>>

                    <a href="#">+998</a>

                    </option>

                </select>

                <input type="number" onkeyup="numchange('bo');" id="book_gettouch_contact_number" pattern="[7-9]{1}[0-9]{9}" placeholder="Phone Number"  class="form-control w-100 nriContactNo" placeholder="1234 5678 90">

                </div>

                <div id="book_error_contact" class="msg error"></div>

            </div>

                

            <div class="relative-box w-100 m-auto form_element form-check-inline">

                <div class="chooseElementCheck">

                    <label class="checkoutBox">Opt-in for receiving important information and updates on WhatsApp       <input type="checkbox" checked id="book_terms_conditions" name="book_terms_conditions">

                        <span class="checkmarkB transition"></span>

                    </label>

                </div>
                
               

            </div>
             <div class="relative-box w-100 mb-2 form-check-inline">

             <p class="mb-0 text-uppercase">For any Query Call Us On</p>
            
             </div>
              <div class="relative-box w-100 m-auto form_element form-check-inline">

            
              <svg style="height: 25px; margin-right: 10px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"

width="35.17px" height="35.362px" viewBox="7.342 7.323 35.17 35.362" enable-background="new 7.342 7.323 35.17 35.362"

xml:space="preserve">

<g>

    <g>

        <path fill="#BF973F" d="M34.038,42.686c-0.147,0-0.312-0.008-0.468-0.015c-2.738-0.174-5.174-1.187-6.996-2.048

        c-4.691-2.268-8.801-5.484-12.218-9.564c-2.801-3.369-4.697-6.533-5.967-9.958c-0.527-1.422-1.206-3.583-1.014-5.92

        c0.134-1.512,0.744-2.82,1.813-3.889L11.8,8.656c1.779-1.71,4.228-1.686,5.912-0.021c0.495,0.456,0.985,0.955,1.453,1.438

        c0.233,0.249,0.475,0.491,0.71,0.727l2.099,2.098c1.803,1.803,1.803,4.225,0,6.028l-0.781,0.79

        c-0.449,0.456-0.909,0.923-1.395,1.381c0.442,0.902,1.027,1.794,1.86,2.847c1.943,2.388,3.974,4.241,6.203,5.657

        c0.207,0.127,0.453,0.25,0.717,0.381l0.275,0.144l2.17-2.164c1.752-1.748,4.259-1.737,5.941,0.017l4.217,4.23

        c0.868,0.857,1.33,1.893,1.33,2.989c0,1.079-0.449,2.12-1.3,3.007c-0.339,0.354-0.683,0.688-1.017,1.008l-0.105,0.104

        c-0.417,0.401-0.813,0.783-1.152,1.188l-0.104,0.121C37.578,41.988,35.962,42.686,34.038,42.686z M14.786,8.361

        c-0.809,0-1.594,0.342-2.269,0.99l-2.621,2.644c-0.9,0.9-1.413,1.999-1.525,3.268c-0.176,2.136,0.46,4.155,0.955,5.488

        c1.23,3.317,3.072,6.388,5.797,9.666c3.325,3.97,7.323,7.101,11.882,9.304c1.847,0.873,4.074,1.79,6.581,1.95

        c0.169,0.007,0.316,0.015,0.451,0.015c1.628,0,2.992-0.584,4.059-1.734l0.023-0.029c0.388-0.469,0.818-0.886,1.275-1.328

        l0.108-0.104c0.328-0.313,0.659-0.639,0.987-0.979c0.667-0.696,1.021-1.497,1.021-2.313c0-0.823-0.359-1.611-1.037-2.281

        l-4.225-4.239c-1.316-1.372-3.16-1.366-4.521-0.008l-2.692,2.687l-0.916-0.483c-0.28-0.14-0.556-0.276-0.789-0.423

        c-2.328-1.479-4.437-3.399-6.453-5.877c-0.977-1.233-1.657-2.307-2.144-3.384l-0.149-0.33l0.268-0.245

        c0.573-0.524,1.107-1.067,1.627-1.595l0.787-0.796c1.423-1.423,1.423-3.191,0-4.614l-2.099-2.098

        c-0.243-0.243-0.492-0.493-0.727-0.744c-0.449-0.463-0.927-0.949-1.42-1.404C16.358,8.702,15.59,8.361,14.786,8.361z"/>

    </g>

    <g>

        <path fill="#BF973F" d="M37.121,22.208c-0.396-2.335-1.501-4.462-3.189-6.151c-1.69-1.689-3.818-2.792-6.15-3.19l0.168-0.985

        c2.539,0.433,4.852,1.632,6.689,3.469c1.836,1.837,3.036,4.15,3.469,6.69L37.121,22.208z"/>

    </g>

    <g>

        <path fill="#BF973F" d="M41.665,22.247c-0.59-3.482-2.235-6.657-4.757-9.181c-2.533-2.524-5.709-4.169-9.182-4.757l0.166-0.986

        c3.678,0.623,7.039,2.364,9.721,5.036c2.672,2.672,4.412,6.033,5.037,9.721L41.665,22.247z"/>

    </g>

</g>

</svg> <a href="tel:+971565740802" style="color:#B0B0B0;">+971565740802</a>
             </div>
             

            <div id="book_success" style="margin-bottom: 5px;display: none;" class="msg error">Your enquiry has been submitted successfully.

            </div>

               

            

            <input type="submit" name="submit" value="Submit" class="kalpataru_btn">

                

            <div id="success_error" class="msg text-center"></div>

        </form>

      </div>

    </div>

    <!-- /.modal-content -->

  </div>

  <!-- /.modal-dialog -->

</div>

<!-- /.modal -->

<!-- Get In Touch pop up end -->



<!-- Thnak you pop up -->
<div class="thankYouPopUp main_popup_wrapper modal fade" id="thankYouPage">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="kalpataru-icon-close"></i></span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            <div class="modal-body text-center">
                 <h4 class="modal-title">THANK YOU</h4>
                <p>Our representative will get in touch with you.</p>
            </div>
        </div>
    </div>
</div>

<!-- Search popup start -->
<div class="main_popup_wrapper modal fade" id="searchPopupWrapper">
 <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="container-fluid">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Search</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="kalpataru-icon-close  d-block"></i></span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            <div class="modal-body">
			
			  <div class="locationsWrapper filter_Search" id="prefetch">
                    <form action="<?= base_url('project-search')?>" method="get" autocomplete="off"  class="search-form">
                       <input type="submit" value="" class="search-submit" style="opacity:0;">
                        <input type="search" name="search_box" id="search_data" class="search-text typeahead" placeholder="FIND YOUR NEXT HOME" >
                       
                    </form>
                </div>
			
                <div class="propertyTypeTabs mb-3 w-100">
                    <div class="searchLabel mb-2">PROPERTY TYPE</div>
                    <div class="propertyTypeTabWrap d-flex justify-content-between list-group flex-row">
                        <?php
                        $type = isset($_GET['category']) ? $_GET['category'] : ""; 
                        $data = array();
                        $page_url=current_url();
                        $page_url_arr = explode("/", $page_url);
                        $property_type = array_pop($page_url_arr);
                        if ($property_type == "RESIDENTIAL" || $property_type == "COMMERCIAL") {
                         $type = strtoupper($property_type);
                     }
                     ?>
                     <a class="propertyTypeTab <?php if ($type=="RESIDENTIAL") {echo 'active';}?>" id="show" data-value="RESIDENTIAL" onclick="getCitiesFor('residential',2)"  data-toggle="list" href="#residentialTab">RESIDENTIAL</a>
                     <a class="propertyTypeTab <?php if ($type=="COMMERCIAL") {echo 'active';}?>"  id="hide" data-value="COMMERCIAL" onclick="getCitiesFor('commercial',2)" data-toggle="list" href="#commercialTab">COMMERCIAL</a>
                 </div>
             </div>
             <form id="search_Popup_form" name="search_Popup_form" class="search_Popup_form relative-box tab-content w-100">
                <input type="hidden" class="csrf_token" id="search_csrf_token" name="csrf_token" value="<?php echo generateToken('search_Popup_form'); ?>">
                <!-- Residential Tab content start -->
                <div class="residentialTabContent tab-pane fade show active" <?php /*id="residentialTab"*/ ?>>
                    <!-- Locations Start -->
                    <div class="locationsWrapper">
                        <div class="searchLabel mb-2">LOCATION</div>
                        <div class="custom_dropdown_group row mb-3">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <div class="custom_dropdown_element">
                                    <div class="custom_dropdown_box">
                                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><div class="selectedValue"><?php if(isset($_GET['city']) && $_GET['city']!=""){ echo $this->selected_city; } else { echo 'Select a City'; } ?> </div>
                                            <div class="dropdown_arrow">
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </a>
                                        <input type="hidden" id="search_cityM" name="search_cityM" value="<?=isset($_GET['city']) ? $_GET['city'] : ''?>">
                                        <ul class="dropdown-menu search-cityM">
                                            <?php
                                            //$sql_city = "SELECT * FROM cities";
                                            $where = "";
                                            if(!empty($type)){
                                                $where .= " WHERE property_type='".$type."'";
                                            }
                                            $sql_city = "SELECT DISTINCT cities.id, cities.title FROM `cities` LEFT JOIN properties ON properties.city=cities.id {$where} ORDER by cities.id";
                                            $query_city = $this->db->query($sql_city);
                                            if ($query_city->num_rows() > 0) {
                                                foreach ($query_city->result() as $row_city) { 
                                                 echo '<li onclick="getLocations('.$row_city->id.',2)" class="dropdown-item">'.$row_city->title.'</li>';
                                             }
                                         }
                                         ?>                                        
                                     </ul>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-6">
                            <div class="custom_dropdown_element">
                                <div class="custom_dropdown_box">
                                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><div class="selectedValue"><?php if(isset($_GET['location']) && $_GET['location']!=""){ echo $this->selected_location; } else { echo 'SELECT REGION'; } ?></div>
                                        <div class="dropdown_arrow">
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </a>
                                    <input type="hidden" id="search_locationM" name="search_locationM">
                                    <ul class="dropdown-menu search-locationM">
                                       <?php
                                       foreach ($this->locations_filter as $key => $value) {
                                         echo '<li class="dropdown-item" onclick="selectLocationM('.$value->id.')" >'.$value->location.'</li>';
                                     }
                                     ?>     
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- Locations end -->

             <!-- Select Configuration start -->
             <div class="removedata">
             <div class="selectConfigurationWrapper">
                <div class="searchLabel mb-2">CONFIGURATION</div>
                <div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
                    <label class="btn active">
                        <input type="checkbox" name="search_optionsM" value="1" id="1bhk" autocomplete="off">1 BHK
                    </label>
                    <label class="btn">
                        <input type="checkbox" name="search_optionsM" value="2" id="2bhk" autocomplete="off">2 BHK
                    </label>
                    <label class="btn">
                        <input type="checkbox" name="search_optionsM" value="3" id="3bhk" autocomplete="off">3 BHK
                    </label>
                    <label class="btn">
                        <input type="checkbox" name="search_optionsM" value="4" id="4bhk" autocomplete="off">4+BHK
                    </label>
                    <!-- <label class="btn">
                        <input type="checkbox" name="search_optionsM" value="5" id="5plusbhk" autocomplete="off">5 + BHK
                    </label> -->
                </div>
            </div>
                                    </div>
            <!-- Select Configuration end -->
        </div>
        <!-- Residential Tab content end -->

        <!-- commercial Tab content start -->
        <div class="commercialTabContent tab-pane fade" <?php /*id="commercialTab"*/ ?>>
            <!-- Loctions Start -->
            <div class="locationsWrapper">
                <div class="searchLabel mb-2">LOCATION</div>
                <div class="custom_dropdown_group row mb-3">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <div class="custom_dropdown_element">
                            <div class="custom_dropdown_box">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><div class="selectedValue">Select a City </div>
                                    <div class="dropdown_arrow">
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item"><a href="#">Mumbai</a></li>
                                    <li class="dropdown-item"><a href="#">Pune</a></li>
                                    <li class="dropdown-item"><a href="#">Jaipur</a></li>
                                    <li class="dropdown-item"><a href="#">Udaipur</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="custom_dropdown_element">
                            <div class="custom_dropdown_box">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><div class="selectedValue">SELECT LOCALITY</div>
                                    <div class="dropdown_arrow">
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item"><a href="#">Mumbai</a></li>
                                    <li class="dropdown-item"><a href="#">Pune</a></li>
                                    <li class="dropdown-item"><a href="#">Jaipur</a></li>
                                    <li class="dropdown-item"><a href="#">Udaipur</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Loctions end -->

            <!-- Select Configuration start -->
            <div class="selectConfigurationWrapper">
                <div class="searchLabel mb-2">SELECT CONFIGURATION</div>
                <div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
                    <label class="btn active">
                        <input type="checkbox" name="options" id="1bhk1" autocomplete="off" checked>1 BHK
                    </label>
                    <label class="btn">
                        <input type="checkbox" name="options" id="2bhk1" autocomplete="off">2 BHK
                    </label>
                    <label class="btn">
                        <input type="checkbox" name="options" id="3bhk1" autocomplete="off" checked>3 BHK
                    </label>
                    <label class="btn">
                        <input type="checkbox" name="options" id="4bhk1" autocomplete="off">4 BHK
                    </label>
                    <label class="btn">
                        <input type="checkbox" name="options" id="5plusbhk1" autocomplete="off">5 + BHK
                    </label>
                </div>
            </div>
            <!-- Select Configuration end -->
        </div>
        <!-- commercial Tab content end -->

        <input type="button" onclick="searchResult(2)" name="apply" value="apply" class="kalpataru_btn">
    </form>
</div>
</div>
</div>
</div>
</div>

<script type="text/javascript">
    var property_type = "<?php echo (isset($type) && !empty($type)?$type:'residential'); ?>";
    function getCitiesFor(p_type,type){
        if(type == 1){
            $('.search-city').parents('.custom_dropdown_box').find('.selectedValue').html("Select a City");
            $('.search-location').parents('.custom_dropdown_box').find('.selectedValue').html("Select Region");
        }else{
            $('.search-cityM').parents('.custom_dropdown_box').find('.selectedValue').html("SELECT A CITY");
            $('.search-locationM').parents('.custom_dropdown_box').find('.selectedValue').html("SELECT REGION");
        }
        property_type = p_type;
        data = {"property_type":p_type};
        $.ajax({
            url: '<?php echo base_url() ?>website/getCities',
            data: JSON.stringify(data),
            dataType: 'json',
            type: 'post',
            success: function(result){
                console.log(result);
                var options = '';
                for (var i = 0; i < result.cities.length; i++) {
                    if (type==1) {
                        options+='<li onclick="getLocations('+result.cities[i].id+',1)" class="dropdown-item">'+result.cities[i].title+'</li>';
                    }
                    else{
                        options+='<li onclick="getLocations('+result.cities[i].id+',2)" class="dropdown-item">'+result.cities[i].title+'</li>';
                    }
                }
                if(type==1){
                    $("#search_city,#search_location").val("");
                    $('.search-city').html(options);
                }
                else{
                    $("#search_cityM,#search_locationM").val("");
                    $('.search-cityM').html(options);
                }
                $(".dropdown-menu li").click(function(){
                    var selText = $(this).text();
                    $(this).parents('.custom_dropdown_box').find('.selectedValue').html(selText);
                });
            }
        })
    }

   function getLocations(city_id,type)
   {
    if(type==1)
    {
        $("#search_city").val(city_id);  
        $('.search-location').parents('.custom_dropdown_box').find('.selectedValue').html("Select Region");
    }
    else
    {
       $("#search_cityM").val(city_id);  
       $('.search-locationM').parents('.custom_dropdown_box').find('.selectedValue').html("SELECT REGION");
   }

   var data = {"city_id":city_id,"property_type":property_type}; 
   $.ajax({
    url: '<?=base_url()?>website/getLocations',
    type: 'POST',
    data: JSON.stringify(data),
    contentType: 'application/json; charset=utf-8',
    datatype: 'JSON',
    async: true,
    success: function(data)
    {
      var value = JSON.parse(data);
      var options = '';
      for (var i = 0; i < value.locations.length; i++) {
        if (type==1) {
            options+='<li class="dropdown-item" onclick="selectLocation('+value.locations[i].id+')" >'+value.locations[i].location+'</li>';
        }
        else
        {
            options+='<li class="dropdown-item" onclick="selectLocationM('+value.locations[i].id+')" >'+value.locations[i].location+'</li>';
        }
    }
    if(type==1)
    {
        $("#search_location").val("");
        $('.search-location').html(options);
    }
    else
    {
        $("#search_locationM").val("");
        $('.search-locationM').html(options);
    }
    $(".dropdown-menu li").click(function(){
      var selText = $(this).text();
      $(this).parents('.custom_dropdown_box').find('.selectedValue').html(selText);
  });
}
});
}
function selectLocationM(location_id)
{
    $("#search_locationM").val(location_id);
}
function searchResult(type)
{
    
    var csrf_token = $("#search_csrf_token").val();
    var token = "<?php echo generateToken('search_Popup_form'); ?>";
    if(csrf_token != token){
        return false;
    }
    
    if (type==1) {
        var typo = "";
       // var category = "";
        var category = $('a.propertyTypeTab.active').data('value');
        var search_city = $("#search_city").val();
        var search_box = $("#search_textdata").val();
   
        var search_location = $("#search_location").val();
        var typology = $('input[name="search_options"]:checked');
        typology.each(function () {
            typo += "-"+$(this).val();  
        });
    }
    if (type==2) {
        var typo = "";
        //var category = $(".propertyTypeTab.active").text();
		 var category = $("#searchPopupWrapper .propertyTypeTab.active").text();
        var search_city = $("#search_cityM").val();
        var search_box = $("#search_data").val();
        var search_location = $("#search_locationM").val();
        var typology = $('input[name="search_optionsM"]:checked');
        typology.each(function () {
            typo += "-"+$(this).val();  
        });
    }
    window.location.href='<?=base_url()?>search-result?category='+category+'&search_box='+search_box+'&city='+search_city+'&location='+search_location+'&typology='+myTrim(typo);
}

function myTrim(x) {
    return x.replace(/^-|-$/g,'');
}
function getCountryCode()
{

}
</script>
<!-- Search popup end -->
<!-- BEGIN: Header-->
<header class="page-topbar" id="header">
  <div class="navbar navbar-fixed"> 
    <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-indigo-purple no-shadow">
      <div class="nav-wrapper">
        <ul class="navbar-list right">
          <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="<?=base_url()?>assets/images/avatar/avatar-18.png" alt="avatar"><i></i></span></a></li>
        </ul>
        <!-- profile-dropdown-->
        <ul class="dropdown-content" id="profile-dropdown">
          <li><a class="grey-text text-darken-1" href="<?=base_url()?>common/logout"><i class="material-icons">keyboard_tab</i> Logout</a></li>
        </ul>
      </div>
    </nav>
  </div>
</header>
<!-- END: Header-->
<!-- BEGIN: SideNav-->
<style type="text/css">
  .dropdown-item:hover,.dropdown-item.active{
    background-color: unset !important;
    background: unset !important;
  }
  #preloader {
    display: none;  
    position: fixed;
    text-align: center;
    left: 0;
    top: 0;
    z-index: 99999;
    width: 100%;
    height: 100%;
    overflow: visible;
    background: rgba(75, 113, 250, 0.2);
  }
  #preloader i{
    position: absolute;
    top:50%;
    color: #E89A45;
  }
  .brand-sidebar .brand-logo{
    padding: 7px 12px 22px 15px !important;
  }
</style>
<div id="preloader"><i><div class="preloader-wrapper big active">
    <div class="spinner-layer spinner-blue-only">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
  </div></i></div>
<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-rounded">
  <div class="brand-sidebar">
    <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="jabascript:;">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="200.834px" height="40.658px" viewBox="0 0 454.834 89.658" enable-background="new 0 0 454.834 89.658" xml:space="preserve">
  <g>
    <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#00A5D2" points="89.659,89.658 0,89.658 0,0 89.659,0 89.659,89.658   "></polygon>
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M27.562,8.169c0.053-0.023,0.069-0.03,0.124-0.052
      c6.914-3.34,14.85,1.082,16.806,6.51c1.815-5.034,8.541-9.241,15.296-7.129c0.056,0.02,0.071,0.025,0.125,0.046
      c7.81,2.513,10.35,12.246,7.125,17.34c5.465-0.615,12.387,4.149,12.966,11.495c0.002,0.058,0.002,0.075,0.002,0.134
      c0.562,8.004-7.165,13.898-13.05,13.125c3.301,3.968,3.972,11.269-0.519,16.222l-0.041,0.045
      c-6.321,6.75-15.532,4.377-20.129-2.672l0.112,18.963l3.241-0.007l0,3.557H39.255l0.027-3.557l3.423,0.007V62.837
      c-0.105,0.492-0.268,1.009-0.5,1.545c-2.602,5.804-13.523,8.047-19.33,1.496c-0.041-0.041-0.053-0.054-0.093-0.096
      c-4.337-4.981-3.623-12.15-0.355-16.081c-5.769,0.208-12.832-5.523-12.294-13.189c0-0.059,0-0.077,0.002-0.134
      c0.537-6.818,6.541-11.413,11.77-11.545C19.011,20.043,20.789,11.515,27.562,8.169L27.562,8.169z M42.706,60.299V26.174h3.673
      l0.014,19.72c0.48,3.091,4.804-0.885,7.256-3.952c0.166-0.209,3.04-3.983,3.955-5.705l0.767,0.37
      c-1.732,3.926-5.785,14.406-12.054,16.316c0.486,3.138,1.887,7.586,4.198,9.973c3.404,3.51,8.232,3.921,11.956,1.845
      c0.76-0.425,1.171-0.808,1.705-1.537c3.41-4.663,2.293-10.896-2-13.164c-1.061-0.3-3.875-0.752-5.115,4.398
      c-0.42,0.235-0.632,0.048-0.701-0.241c-0.803-3.489,0.646-5.793,3.396-6.979c0,0,1.175-0.373,2.476-0.311
      c-1.713-2.541-0.574-5.94,2.058-7.671c0.879-0.577,1.012-0.018,0.964,0.169c-2.687,4.404-0.681,5.79,0.725,6.654
      c3.895,2.169,10.283-2.365,10.764-8.727c-0.679-6.323-6.232-10.404-11.133-8.731c-0.944,0.564-3.204,2.302-0.308,6.737
      c-0.118,0.468-0.4,0.494-0.655,0.344c-3.092-1.809-3.773-4.441-2.75-7.258c0,0,0.077-0.164,0.227-0.415
      c-2.659,0.104-4.959-2.065-5.528-4.866c-0.209-1.032,0.36-0.945,0.515-0.833c3.086,4.135,5.119,2.787,6.444,1.806
      c3.462-2.81,1.632-10.425-4.092-13.24c-6.123-1.723-11.979,1.91-12.25,7.082c0.173,1.087,0.945,3.834,6.141,2.796
      c0.389,0.282,0.309,0.554,0.075,0.735c-2.83,2.197-5.527,1.85-7.759-0.148c0,0-0.657-0.722-1.147-1.729
      c-1.333,3.587-5.543,4.131-8.475,2.084c-0.862-0.601-0.391-0.93-0.2-0.956c5.088,0.861,5.629-1.518,5.909-3.14
      c0.568-4.425-6.012-8.673-12.098-6.761c-5.62,2.979-7.35,9.648-3.977,13.58c0.875,0.666,3.328,2.122,6.373-2.215
      c0.477-0.064,0.604,0.189,0.562,0.48c-0.471,3.128-2.237,4.75-4.708,5.15c0.218,0.347,0.334,0.588,0.334,0.588
      c1.023,2.816,0.343,5.449-2.749,7.258c-0.256,0.149-0.538,0.124-0.655-0.344c2.897-4.436,0.635-6.173-0.308-6.737
      c-4.902-1.673-10.453,2.408-11.132,8.731c0.479,6.362,6.868,10.896,10.765,8.727c1.403-0.864,3.41-2.25,0.721-6.654
      c-0.045-0.187,0.086-0.746,0.965-0.169c2.644,1.739,3.777,5.158,2.034,7.703c1.056,0.063,1.903,0.35,1.903,0.35
      c2.728,1.24,4.129,3.572,3.254,7.044c-0.071,0.287-0.288,0.471-0.702,0.229c-1.138-5.175-3.963-4.778-5.027-4.5
      c-4.627,2.327-5.602,9.149-1.562,14.063c4.877,4.11,12.586,2.727,13.767-1.575c0.367-1.607,0.785-4.01-4.243-5.175
      c-0.165-0.097-0.474-0.584,0.554-0.805C38.849,55.914,42.005,57.411,42.706,60.299L42.706,60.299z"></path>
    <path class="logo-text" fill-rule="evenodd" clip-rule="evenodd" d="M264.99,36.021l-0.043,10.288h-12.373l-0.002-10.176l6.299-4.327L264.99,36.021
      L264.99,36.021z M232.93,39.589l-9.198,6.46V32.565L232.93,39.589L232.93,39.589z M172.13,36.105l0.06,10.107l-12.379,0.035
      l0.03-10.124l6.15-4.097L172.13,36.105L172.13,36.105z M126.925,38.572V26.691h12.18L126.925,38.572L126.925,38.572z M270.4,26.624
      l4.67-6.327l-161.704,0.132l-5.044,6.262h12.468v43.275l6.176-4.608l-0.125-17.012l12.263-0.036l0.018,21.563l6.219-4.482
      l0.039-19.064l-3.99-4.301l-9.671-0.015l16.6-15.315l14.601-0.049l-9.154,7.328l-0.026,35.955l5.978-4.724l0.05-12.523h12.448
      l0.07,17.169l6.08-4.597V34.017l-9.123-7.365l17.442,0.04v36.117l15.568,7.03l9.067-5.667l0.009-7.277l-9.22,6.489l-9.291-4.367
      l0.075-32.389h23.87l-6.644,4.157l2.843,4.484l4.502-2.708v37.339l6.248-4.711v-12.34l18.032-13.277l-15.99-12.881l30.136-0.004
      l-9.611,7.173l0.057,35.93l6.268-4.714V52.715h12.383v17.144l6.137-5.024l0.031-30.985l-8.91-7.178L270.4,26.624L270.4,26.624z"></path>
    <polygon class="logo-text" fill-rule="evenodd" clip-rule="evenodd" points="285.379,47.459 282.797,52.61 292.725,52.61 295,47.459 285.379,47.459   
      "></polygon>
    <path class="logo-text" fill-rule="evenodd" clip-rule="evenodd" d="M414.563,62.097l-6.141-4.624V26.625l12.191-0.021v30.803L414.563,62.097
      L414.563,62.097z M382.848,39.2l-9.486,6.854l0.023-14.022L382.848,39.2L382.848,39.2z M350.717,35.979l0.098,10.29l-12.404,0.004
      l-0.154-10.278l6.373-4.06L350.717,35.979L350.717,35.979z M310.721,31.951l-6.559-5.245l13.145-0.015L310.721,31.951
      L310.721,31.951z M295.078,20.305l-5.709,6.372h10.463l-6.605,6.479l3.061,3.097l6.223-5.715l4.918,4.417v34.866l6.293-4.671
      l-0.004-30.144l5.732-4.386l5.535,5.8l3.246-2.929l-6.371-6.8l19.619-0.018l-9.369,7.38l-0.002,35.81l6.117-4.694l0.172-12.485
      h12.346l0.043,17.362l6.004-4.808l0.127-31.243l-8.93-7.383l19.242,0.05l-6.328,4.036l2.295,3.145l4.078-2.42l0.021,38.438
      l6.125-4.915l0.063-12.219h12.078v17.273l6.217-5.009V48.308l-11.07,0.015l12.742-9.318l-17.406-12.379l26.121-0.007l-6.707,3.842
      l1.389,3.317l5.316-2.551l0.02,29.237l12.438,9.43l12.164-9.517V26.58l8.414,0.029l6.035-6.311L295.078,20.305L295.078,20.305z"></path>
    <path class="logo-text-bod" fill="none" stroke="#000000" stroke-width="0.4877" stroke-miterlimit="2.6131" d="M448.15,20.255
      c3.35,0,6.143-2.931,6.143-6.281c0-3.49-2.793-6.281-6.143-6.281c-3.49,0-6.285,2.792-6.285,6.281
      C441.865,17.325,444.66,20.255,448.15,20.255"></path>
    <path class="logo-text" d="M445.236,17.738v-7.525h3.336c0.67,0,1.18,0.068,1.529,0.203c0.348,0.135,0.627,0.374,0.834,0.715
      c0.209,0.341,0.313,0.719,0.313,1.133c0,0.534-0.174,0.984-0.52,1.35c-0.344,0.366-0.877,0.597-1.598,0.697
      c0.264,0.126,0.463,0.252,0.6,0.375c0.291,0.266,0.566,0.601,0.824,1.001l1.301,2.05h-1.244l-0.994-1.566
      c-0.289-0.454-0.529-0.799-0.717-1.039c-0.189-0.24-0.357-0.406-0.506-0.502c-0.146-0.095-0.299-0.161-0.453-0.2
      c-0.113-0.023-0.297-0.035-0.555-0.035h-1.152v3.342H445.236L445.236,17.738z M446.234,13.534h2.137
      c0.457,0,0.811-0.047,1.066-0.142c0.256-0.092,0.449-0.243,0.58-0.452c0.133-0.207,0.201-0.431,0.201-0.674
      c0-0.356-0.129-0.65-0.387-0.879s-0.664-0.343-1.219-0.343h-2.379V13.534L446.234,13.534z"></path>
  </g>
</svg></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
  </div>
  <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
   <!--  <li class="bold"><a class="waves-effect waves-cyan nav-dashboard" href="<?=base_url()?>admin"><i class="material-icons">settings_input_svideo</i><span class="menu-title">Dashboard</span></a>
    </li> -->
    <li class="bold"><a class="waves-effect waves-cyan nav-amenities" href="<?=base_url()?>klconfig/amenities"><i class="material-icons">more</i><span class="menu-title">Amenities</span></a>
    </li>
    <li class="bold"><a class="waves-effect waves-cyan nav-properties" href="<?=base_url()?>klconfig/properties"><i class="material-icons">domain</i><span class="menu-title">Properties</span></a>
    </li>
     <li class="bold"><a class="waves-effect waves-cyan nav-gallery" href="<?=base_url()?>klconfig/gallery"><i class="material-icons">crop_original</i><span class="menu-title">Gallery</span></a>
    </li>
    <li class="bold"><a class="waves-effect waves-cyan nav-home" href="<?=base_url()?>klconfig/home"><i class="material-icons">home</i><span class="menu-title">Home Page</span></a>
    </li>
    <li class="bold"><a class="waves-effect waves-cyan nav-cities" href="<?=base_url()?>klconfig/cities"><i class="material-icons">location_city</i><span class="menu-title">Cities</span></a>
    </li>
    <li class="bold"><a class="waves-effect waves-cyan nav-location" href="<?=base_url()?>klconfig/locations"><i class="material-icons">location_on</i><span class="menu-title">Locations</span></a>
    </li>
    <li class="bold"><a class="waves-effect waves-cyan nav-press" href="<?=base_url()?>klconfig/press"><i class="material-icons">event_note</i><span class="menu-title">Press</span></a>
    </li>
  </ul>
  <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
    <!-- END: SideNav-->
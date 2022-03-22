@extends('front.masters')
@section('content')
<div id="wrapper" class="clearfix">
    @include('front.menu')
    <section id="page-title">
       <div class="container clearfix">
          <h1>Contact</h1>
          <span>Get in Touch with Us</span>
          <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="#">Home</a></li>
             <li class="breadcrumb-item active" aria-current="page">Contact US</li>
          </ol>
       </div>
    </section>
    {{-- <div id="page-menu">
       <div id="page-menu-wrap">
          <div class="container">
             <div class="page-menu-row">
                <div class="page-menu-title">Contact <span>Options</span></div>
                <nav class="page-menu-nav">
                   <ul class="page-menu-container">
                      <li class="page-menu-item current">
                         <a href="contact-7.html">
                            <div>Default</div>
                         </a>
                      </li>
                      <li class="page-menu-item">
                         <a href="contact-7-recaptcha.html">
                            <div>With reCaptcha</div>
                         </a>
                      </li>
                      <li class="page-menu-item">
                         <a href="contact-7-file.html">
                            <div>File Upload</div>
                         </a>
                      </li>
                      <li class="page-menu-item">
                         <a href="contact-7-inline.html">
                            <div>Inline Notification</div>
                         </a>
                      </li>
                   </ul>
                </nav>
                <div id="page-menu-trigger"><i class="icon-reorder"></i></div>
             </div>
          </div>
       </div>
    </div> --}}
    <section id="map-overlay">
       <div class="container">
          <div class="row">
             <div class="contact-form-overlay col-md-6 offset-md-6 col-lg-4 offset-lg-8 p-5">
                <div class="fancy-title title-border">
                   <h3>Send us an Email</h3>
                </div>
                <div class="form-widget">
                   <div class="form-result"></div>
                   <form class="row mb-0" id="template-contactform" name="template-contactform" action="https://themes.semicolonweb.com/html/canvas/include/form.php" method="post">
                      <div class="col-12 form-group">
                         <label for="template-contactform-name">Name <small>*</small></label>
                         <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
                      </div>
                      <div class="col-12 form-group">
                         <label for="template-contactform-email">Email <small>*</small></label>
                         <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
                      </div>
                      <div class="col-12 form-group">
                         <label for="template-contactform-phone">Phone</label>
                         <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
                      </div>
                      <div class="col-12 form-group">
                         <label for="template-contactform-service">Services</label>
                         <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                            <option value="">-- Select One --</option>
                            <option value="Wordpress">Wordpress</option>
                            <option value="PHP / MySQL">PHP / MySQL</option>
                            <option value="HTML5 / CSS3">HTML5 / CSS3</option>
                            <option value="Graphic Design">Graphic Design</option>
                         </select>
                      </div>
                      <div class="col-12 form-group">
                         <label for="template-contactform-subject">Subject <small>*</small></label>
                         <input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
                      </div>
                      <div class="col-12 form-group">
                         <label for="template-contactform-message">Message <small>*</small></label>
                         <textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                      </div>
                      <div class="col-12 form-group d-none">
                         <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                      </div>
                      <div class="col-12 form-group">
                         <button class="button button-3d m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
                      </div>
                      <input type="hidden" name="prefix" value="template-contactform-">
                   </form>
                </div>
             </div>
          </div>
       </div>

       <section class="gmap" data-latitude="-1.270095385011835" data-longitude="36.79794139630994" data-scrollwheel="false" data-markers='[{latitude:-1.270095385011835, longitude:36.79794139630994, html: "<div class=\"p-2\" style=\"width: 300px;\"><h4 class=\"mb-2\">Hi! We are <span>Envato!</span></h4><p class=\"mb-0\" style=\"font-size:1rem;\">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day.</p></div>", icon:{ image: "images/icons/map-icon-red.png", iconsize: [32, 39], iconanchor: [32,39] } }]'>

       </section>
    </section>
    <footer id="footer" class="dark">
       <div class="container">
          <div class="footer-widgets-wrap">
             <div class="row col-mb-50">
                <div class="col-lg-8">
                   <div class="row col-mb-50">
                      <div class="col-md-4">
                         <div class="widget clearfix">
                            <img src="images/footer-widget-logo.png" alt="Image" class="footer-logo">
                            <p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>
                            <div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
                               <address>
                                  <strong>Headquarters:</strong><br>
                                  795 Folsom Ave, Suite 600<br>
                                  San Francisco, CA 94107<br>
                               </address>
                               <abbr title="Phone Number"><strong>Phone:</strong></abbr> (1) 8547 632521<br>
                               <abbr title="Fax"><strong>Fax:</strong></abbr> (1) 11 4752 1433<br>
                               <abbr title="Email Address"><strong>Email:</strong></abbr> <a href="https://themes.semicolonweb.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e980878f86a98a88879f889ac78a8684">[email&#160;protected]</a>
                            </div>
                         </div>
                      </div>
                      <div class="col-md-4">
                         <div class="widget widget_links clearfix">
                            <h4>Blogroll</h4>
                            <ul>
                               <li><a href="https://codex.wordpress.org/">Documentation</a></li>
                               <li><a href="https://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
                               <li><a href="https://wordpress.org/extend/plugins/">Plugins</a></li>
                               <li><a href="https://wordpress.org/support/">Support Forums</a></li>
                               <li><a href="https://wordpress.org/extend/themes/">Themes</a></li>
                               <li><a href="https://wordpress.org/news/">Canvas Blog</a></li>
                               <li><a href="https://planet.wordpress.org/">Canvas Planet</a></li>
                            </ul>
                         </div>
                      </div>
                      <div class="col-md-4">
                         <div class="widget clearfix">
                            <h4>Recent Posts</h4>
                            <div class="posts-sm row col-mb-30" id="post-list-footer">
                               <div class="entry col-12">
                                  <div class="grid-inner row">
                                     <div class="col">
                                        <div class="entry-title">
                                           <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                        </div>
                                        <div class="entry-meta">
                                           <ul>
                                              <li>10th July 2021</li>
                                           </ul>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="entry col-12">
                                  <div class="grid-inner row">
                                     <div class="col">
                                        <div class="entry-title">
                                           <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                        </div>
                                        <div class="entry-meta">
                                           <ul>
                                              <li>10th July 2021</li>
                                           </ul>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="entry col-12">
                                  <div class="grid-inner row">
                                     <div class="col">
                                        <div class="entry-title">
                                           <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                        </div>
                                        <div class="entry-meta">
                                           <ul>
                                              <li>10th July 2021</li>
                                           </ul>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-lg-4">
                   <div class="row col-mb-50">
                      <div class="col-md-4 col-lg-12">
                         <div class="widget clearfix" style="margin-bottom: -20px;">
                            <div class="row">
                               <div class="col-lg-6 bottommargin-sm">
                                  <div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
                                  <h5 class="mb-0">Total Downloads</h5>
                               </div>
                               <div class="col-lg-6 bottommargin-sm">
                                  <div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
                                  <h5 class="mb-0">Clients</h5>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-md-5 col-lg-12">
                         <div class="widget subscribe-widget clearfix">
                            <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
                            <div class="widget-subscribe-form-result"></div>
                            <form id="widget-subscribe-form" action="https://themes.semicolonweb.com/html/canvas/include/subscribe.php" method="post" class="mb-0">
                               <div class="input-group mx-auto">
                                  <div class="input-group-text"><i class="icon-email2"></i></div>
                                  <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                  <button class="btn btn-success" type="submit">Subscribe</button>
                               </div>
                            </form>
                         </div>
                      </div>
                      <div class="col-md-3 col-lg-12">
                         <div class="widget clearfix" style="margin-bottom: -20px;">
                            <div class="row">
                               <div class="col-6 col-md-12 col-lg-6 clearfix bottommargin-sm">
                                  <a href="#" class="social-icon si-dark si-colored si-facebook mb-0" style="margin-right: 10px;">
                                  <i class="icon-facebook"></i>
                                  <i class="icon-facebook"></i>
                                  </a>
                                  <a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
                               </div>
                               <div class="col-6 col-md-12 col-lg-6 clearfix">
                                  <a href="#" class="social-icon si-dark si-colored si-rss mb-0" style="margin-right: 10px;">
                                  <i class="icon-rss"></i>
                                  <i class="icon-rss"></i>
                                  </a>
                                  <a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div id="copyrights">
          <div class="container">
             <div class="row col-mb-30">
                <div class="col-md-6 text-center text-md-start">
                   Copyrights &copy; 2020 All Rights Reserved by Canvas Inc.<br>
                   <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                </div>
                <div class="col-md-6 text-center text-md-end">
                   <div class="d-flex justify-content-center justify-content-md-end">
                      <a href="#" class="social-icon si-small si-borderless si-facebook">
                      <i class="icon-facebook"></i>
                      <i class="icon-facebook"></i>
                      </a>
                      <a href="#" class="social-icon si-small si-borderless si-twitter">
                      <i class="icon-twitter"></i>
                      <i class="icon-twitter"></i>
                      </a>
                      <a href="#" class="social-icon si-small si-borderless si-gplus">
                      <i class="icon-gplus"></i>
                      <i class="icon-gplus"></i>
                      </a>
                      <a href="#" class="social-icon si-small si-borderless si-pinterest">
                      <i class="icon-pinterest"></i>
                      <i class="icon-pinterest"></i>
                      </a>
                      <a href="#" class="social-icon si-small si-borderless si-vimeo">
                      <i class="icon-vimeo"></i>
                      <i class="icon-vimeo"></i>
                      </a>
                      <a href="#" class="social-icon si-small si-borderless si-github">
                      <i class="icon-github"></i>
                      <i class="icon-github"></i>
                      </a>
                      <a href="#" class="social-icon si-small si-borderless si-yahoo">
                      <i class="icon-yahoo"></i>
                      <i class="icon-yahoo"></i>
                      </a>
                      <a href="#" class="social-icon si-small si-borderless si-linkedin">
                      <i class="icon-linkedin"></i>
                      <i class="icon-linkedin"></i>
                      </a>
                   </div>
                   <div class="clear"></div>
                   <i class="icon-envelope2"></i> <a href="https://themes.semicolonweb.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f39a9d959cb390929d859280dd909c9e">[email&#160;protected]</a> <span class="middot">&middot;</span> <i class="icon-headphones"></i> +1-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
                </div>
             </div>
          </div>
       </div>
    </footer>
 </div>
@endsection

<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $SiteSettings)
<div class="sb2-1">
    <!--== USER INFO ==-->
    <div class="sb2-12">
        <ul>
            <li><img src="{{url('/')}}/admin-theme/images/placeholder.jpg" alt="Molly">
            </li>
            <li>
                <h5>{{Auth::user()->name}}<span>{{$SiteSettings->location}}</span></h5>
            </li>
            <li></li>
        </ul>
    </div>
    <!--== LEFT MENU ==-->
    <div class="sb2-13">
        <ul class="collapsible" data-collapsible="accordion">
            <li><a href="{{url('/')}}/admin/home" class="menu-active"><i class="fa fa-home" aria-hidden="true"></i> Dashboard</a>
            </li>
            <li><a target="_blank" href="{{url('/')}}/" class="menu-active"><i class="fa fa-globe" aria-hidden="true"></i> Visit Website</a>
            </li>
            <li><a target="_blank" href="{{url('/')}}/" class="menu-active"><i class="fa fa-phone" aria-hidden="true"></i> Dial a Fundi</a>
            </li>

            {{--  --}}
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-file-image-o" aria-hidden="true"></i> Home Page Slider  </a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="{{url('/')}}/admin/sliders">All Sliders</a>
                        </li>
                        <li><a href="{{url('/')}}/admin/addSlider">Add Slider Content</a>
                        </li>
                    </ul>
                </div>
            </li>
            {{--  --}}

            {{--  --}}
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-file-image-o" aria-hidden="true"></i> Banners </a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="{{url('/')}}/admin/banners">All Banners</a>
                        </li>
                        {{-- <li><a href="{{url('/')}}/admin/addBanner">Add Banners</a>
                        </li> --}}
                    </ul>
                </div>
            </li>
            {{--  --}}

            {{--  --}}
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-folder" aria-hidden="true"></i> Categories </a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="{{url('/')}}/admin/addCategory">Add Category</a>
                        </li>

                        <li><a href="{{url('/')}}/admin/categories">All  Categories </a>
                        </li>

                        <li><a href="{{url('/')}}/admin/categories/web">Web  Categories </a>
                        </li>

                        {{--  --}}
                        <li><a href="{{url('/')}}/admin/categories/homes">Real Estate Categories </a>
                        </li>

                        {{--  --}}
                        <li><a href="{{url('/')}}/admin/categories/shop">Ecommerce Categories </a>
                        </li>

                        {{--  --}}
                    </ul>
                </div>
            </li>
            {{--  --}}

             {{--  --}}
             <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-folder" aria-hidden="true"></i> Sub Categories </a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="{{url('/')}}/admin/addSubCategory">Add Sub Category</a>
                        </li>

                        <li><a href="{{url('/')}}/admin/subCategories">All  Sub Categories </a>
                        </li>

                        <li><a href="{{url('/')}}/admin/subCategories/web">Web  Categories </a>
                        </li>

                        {{--  --}}
                        <li><a href="{{url('/')}}/admin/subCategories/homes">Real Estate Categories </a>
                        </li>

                        {{--  --}}
                        <li><a href="{{url('/')}}/admin/subCategories/shop">Ecommerce Categories </a>
                        </li>

                        {{--  --}}
                    </ul>
                </div>
            </li>
            {{--  --}}

            {{--  --}}
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-folder" aria-hidden="true"></i> Services </a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="{{url('/')}}/admin/services">All Services </a>
                        </li>
                        <li><a href="{{url('/')}}/admin/addService">Add Services</a>
                        </li>
                    </ul>
                </div>
            </li>
            {{--  --}}

            {{--  --}}
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-folder" aria-hidden="true"></i> Portfolios </a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="{{url('/')}}/admin/portfolios">All Portfolios </a>
                        </li>
                        <li><a href="{{url('/')}}/admin/addPortfolio">Add Portfolio</a>
                        </li>
                    </ul>
                </div>
            </li>
            {{--  --}}

            {{--  --}}
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-comment" aria-hidden="true"></i> Testimonials </a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="{{url('/')}}/admin/testimonials">All Testimonials </a>
                        </li>
                        <li><a href="{{url('/')}}/admin/addTestimonials">Add Testimonials</a>
                        </li>
                    </ul>
                </div>
            </li>
            {{--  --}}

             {{--  --}}
             <li><a href="{{url('/')}}/admin/enroll-users" class="collapsible-header"><i class="fa fa-registered " aria-hidden="true"></i> Enroll Users </a>

            </li>
            {{--  --}}

            {{--  --}}
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-home" aria-hidden="true"></i> Real Estate </a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="{{url('/')}}/admin/homes">All Homes </a>
                        </li>
                        <li><a href="{{url('/')}}/admin/addHome">Add Home </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{--  --}}

             {{--  --}}
             <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-shopping-cart" aria-hidden="true"></i> E-Commerce </a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="{{url('/')}}/admin/products">All Products </a>
                        </li>
                        <li><a href="{{url('/')}}/admin/tags">All Tags </a>
                        </li>
                        <li><a href="{{url('/')}}/admin/addProduct">Add Product </a>
                        </li>
                        <li><a href="{{url('/')}}/admin/addTag">Add Tags </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-ticket" aria-hidden="true"></i> Payments</a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li>
                            <a style="color:#000000 !important; font-weight:600" href="javascript:void(0)" class="collapsible-header"><i class="fa fa-money" aria-hidden="true"></i>M-PESA API</a>
                            <div class="left-sub-menu">
                                <ul>
                                    <li><a style="color:#000000 !important; text-align: center;" href="{{url('/')}}/admin/b2b">B2B Transfers</a>
                                    </li>
                                    <li><a style="color:#000000 !important; text-align: center;" href="{{url('/')}}/admin/b2c">B2C Transfers</a>
                                    </li>
                                    <li><a style="color:#000000 !important; text-align: center;" href="{{url('/')}}/admin/lnmo_api_response">STK Transactions</a>
                                    </li>
                                    <li><a style="color:#000000 !important; text-align: center;" href="{{url('/')}}/admin/mobile_payments">C2B Transactions</a>
                                    </li>
                                    <li><a style="color:#000000 !important; text-align: center;" href="{{url('/')}}/admin/reverse_transaction">Reversed Transcations</a>
                                    </li>
                                    <li><a style="color:#000000 !important; text-align: center;" href="{{url('/')}}/admin/transaction_status">Transaction Statuses</a>
                                    </li>
                                    <li><a style="color:#000000 !important; text-align: center;" href="{{url('/')}}/admin/accountbalance">Account Balance</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a style="color:#000000 !important; font-weight:600" href="{{url('/')}}" class="collapsible-header"><i class="fa fa-paypal" aria-hidden="true"></i>Paypal Payments</a>
                            <div class="left-sub-menu">

                            </div>
                        </li>

                        <li>
                            <a style="color:#000000 !important; font-weight:600" href="{{url('/')}}" class="collapsible-header"><i class="fa fa-btc" aria-hidden="true"></i>Crypto Payments</a>
                            <div class="left-sub-menu">

                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            {{--  --}}
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i>System Users</a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="{{url('/')}}/admin/users">Manage Users</a>
                        </li>
                        <li><a href="{{url('/')}}/admin/addUser">Add User</a>
                        </li>
                        <li><a href="{{url('/')}}/admin/admins">Manage Admins</a>
                        </li>

                    </ul>
                </div>
            </li>
            {{--  --}}
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-info" aria-hidden="true"></i>Information Center</a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="{{url('/')}}/admin/faq">Frequently Asked Questions</a>
                        </li>
                        <li><a href="{{url('/')}}/admin/how">How It Works</a>
                        </li>


                    </ul>
                </div>
            </li>
            {{--  --}}

            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-gavel" aria-hidden="true"></i>Legal Pages</a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="{{url('/')}}/admin/editRisk">Risk Declaration</a>
                        </li>
                        <li><a href="{{url('/')}}/admin/privacy">Privacy Policy</a>
                        </li>
                        <li><a href="{{url('/')}}/admin/terms">Terms and Conditions</a>
                        </li>
                        <li><a href="{{url('/')}}/admin/editCopyright"> Copyright Statement</a>
                        </li>

                    </ul>
                </div>
            </li>

            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-rss" aria-hidden="true"></i> Blog & Articles</a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="{{url('/')}}/admin/blog">All Blogs</a>
                        </li>
                        <li><a href="{{url('/')}}/admin/addBlog">Add Blog</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li><a href="{{url('/')}}/admin/logo-and-favicon"><i class="fa fa-info" aria-hidden="true"></i> Logo & Favicon </a>
            </li>

            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-cog" aria-hidden="true"></i> SiteSettings </a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="{{url('/')}}/admin/SiteSettings">Systems Settings </a>
                        </li>
                        <li><a href="{{url('/')}}/admin/mailerSettings">Mailer Settings </a>
                        </li>
                        <li><a href="{{url('/')}}/admin/credentials">Systems Credentials </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a href="{{url('/')}}/admin/SocialMediaSettings"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Social Media</a>
            </li>
            <li><a href="{{url('/')}}/logout" target="_blank"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout </a>
            </li>



        </ul>
    </div>
</div>
@endforeach

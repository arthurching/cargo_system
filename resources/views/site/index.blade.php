@extends('site.layouts.main')
        @section('content')
            <!--BEGIN SLIDER -->
            <div class="tp-banner-container">
                <div class="tp-banner" id="home">
                    <ul>

                        <li data-transition="fade" data-slotamount="5" data-masterspeed="700">
                            <!-- MAIN IMAGE -->
                            <img src="img/bg/picture-1.jpg" alt="slidebg2" data-bgfit="cover" data-bgposition="center center"
                                data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <div class="tp-caption mediumlarge_light_white_center sft tp-resizeme slider" data-x="center"
                                data-hoffset="0" data-y="120" data-speed="500" data-start="800" data-easing="Power4.easeOut"
                                data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                                <h2 class="text-white custom-font title ">
                                   滿足客戶的需求<br>
                                    經濟.方便.快速!</h2>
                            </div>
                            <div class="tp-caption sfb slider tp-resizeme slider" data-x="center" data-hoffset="0"
                                data-y="300" data-speed="800" data-start="1000" data-easing="Power4.easeOut"
                                data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                                <a href="itemform" class="btn btn-info btn-lg  btn-large m-r-10">填寫需求單</a>
                            </div>

                        </li>

                    </ul>
                    <div class="tp-bannertimer">
                    </div>
                </div>
            </div>
            <!--END SLIDER
		
	-->
        </div>
        <div class="section ">
            <div class="container">
                <div class="p-t-40 p-b-40  text-center">
                    <h2 class="text-center">
                        We Provide Awesome Digital Solutions With a Great Attention to Details.</h2>
                    <a href="#" class="btn btn-primary btn-lg  btn-large m-r-10">DOWNLOAD NOW</a>
                </div>
            </div>
        </div>
        <div class="section white ha-waypoint" data-animate-down="ha-header-color" data-animate-up="ha-header-hide">
            <div class="container">
                <div class="p-t-60">
                    <div class="row">
                        <div class="col-md-12 feature-list ">
                            <div class="col-md-4 " data-ride="animated" data-animation="fadeIn" data-delay="300">
                                <i class="fa fa-archive fa-4x"></i>
                                <h4 class="title">
                                    WEB DESIGN</h4>
                                <p>
                                    Intriguing web designs and fascinating results, makes you happy and earns us a loyal
                                    customer – Always there, looking after you!
                                </p>
                            </div>
                            <div class="col-md-4" data-ride="animated" data-animation="fadeIn" data-delay="600">
                                <i class="fa fa-cog fa-4x"></i>
                                <h4 class="title">
                                    CUSTOMIZATION</h4>
                                <p>
                                    We push. We make you nervous. We get results. Let's get to work. Whenever you need,
                                    you will find always there, looking after you!
                                </p>
                            </div>
                            <div class="col-md-4" data-ride="animated" data-animation="fadeIn" data-delay="900">
                                <i class="fa fa-share fa-4x"></i>
                                <h4 class="title">
                                    SOCIAL</h4>
                                <p>
                                    As your business flourishes, we grow as a business and so our team makes sure that
                                    your growth is supported and we go hand in hand.
                                </p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12 feature-list">
                            <div class="col-md-4 " data-ride="animated" data-animation="fadeIn" data-delay="1200">
                                <i class="fa fa-code fa-4x"></i>
                                <h4 class="title">
                                    TEMPLATES</h4>
                                <p>
                                    We work to deliver results, celebrate entrepreneurship, stand for justice, and believe
                                    in the progress of common good.
                                </p>
                            </div>
                            <div class="col-md-4" data-ride="animated" data-animation="fadeIn" data-delay="1500">
                                <i class="fa fa-asterisk fa-4x"></i>
                                <h4 class="title">
                                    BASED ON BOOTSTRAP 3</h4>
                                <p>
                                    This free template is based on the popular Twitter Bootstrap Frameowrk. You can
                                    easily customize if you have little Bootstrap 3 knowledge.
                                </p>
                            </div>
                            <div class="col-md-4" data-ride="animated" data-animation="fadeIn" data-delay="1800">
                                <i class="fa fa-expand  fa-4x"></i>
                                <h4 class="title">
                                    RESPONSIVE DESIGN</h4>
                                <p>
                                    Every project begins with a round of research and discovery. We dig through the
                                    values, strategy, and organizational culture that make you unique.
                                </p>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>

                    <div class="clearfix">
                    </div>
                </div>
            </div>
        </div>
        @endsection




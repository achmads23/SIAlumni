@extends('frontend.template.main')

@section('title')
<?php echo $title;?>
@stop

@section('cssjsheader')
{{ URL::asset('font-awesome/css/font-awesome.min.css') }}
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/custom.css') }}" />
<script type="text/javascript" src="{{ URL::asset('js/modernizr.custom.79639.js') }}"></script>

@stop
@section('toppage')
<header>
        <div class="demo-1" id="article">
            <div id="slider" class="sl-slider-wrapper">
                <div class="sl-slider">
                
                    <div class="sl-slide bg-1" data-orientation="horizontal" >
                        <div class="sl-slide-inner" >
                            <h2>A bene placito</h2>
                            <!-- <blockquote><p>You have just dined, and however scrupulously the slaughterhouse is concealed in the graceful distance of miles, there is complicity.</p><cite>Ralph Waldo Emerson</cite></blockquote> -->
                        </div>
                    </div>
                    
                    <div class="sl-slide bg-2" data-orientation="horizontal">
                        <div class="sl-slide-inner">
                            <h2>Regula aurea</h2>
                            <blockquote><p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p><cite>Albert Schweitzer</cite></blockquote>
                        </div>
                    </div>
                    
                    <div class="sl-slide bg-3" data-orientation="horizontal">
                        <div class="sl-slide-inner">
                            <h2>Dum spiro, spero</h2>
                            <blockquote><p>Thousands of people who say they 'love' animals sit down once or twice a day to enjoy the flesh of creatures who have been utterly deprived of everything that could make their lives worth living and who endured the awful suffering and the terror of the abattoirs.</p><cite>Dame Jane Morris Goodall</cite></blockquote>
                        </div>
                    </div>
                    
                    <div class="sl-slide bg-4" data-orientation="horizontal">
                        <div class="sl-slide-inner">
                            <h2>Donna nobis pacem</h2>
                            <blockquote><p>The human body has no more need for cows' milk than it does for dogs' milk, horses' milk, or giraffes' milk.</p><cite>Michael Klaper M.D.</cite></blockquote>
                        </div>
                    </div>
                    
                </div><!-- /sl-slider -->
                
                <nav id="nav-arrows" class="nav-arrows">
                    <span class="nav-arrow-prev">Previous</span>
                    <span class="nav-arrow-next">Next</span>
                </nav>

                <nav id="nav-dots" class="nav-dots">
                    <span class="nav-dot-current"></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </nav>

            </div>

        </div>
</header>
@stop

@section('content')
<section id="article" class="bg-success">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Article</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9 disablepaddingleft">
                <div class="row">
                    <div class="col-lg-12 col-md-12 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body disablepadding divarticle">
                                <img src="img/article/1.jpg" class="img-responsive photoarticle" alt="">
                            </div>
                            <div class="panel-heading">
                                <h4><i class="fa fa-fw fa-check"></i> Bootstrap v3.2.0</h4>
                            </div>
                            <div class="panel-body">
                                <p class="bodyarticle">Lorem ipsum dolor sit amet, consectetur adipisicing  elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                                <a href="#" class="btn btn-default">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body disablepadding divarticle">
                                <img src="img/article/1.jpg" class="img-responsive photoarticle" alt="">
                            </div>
                            <div class="panel-heading">
                                <h4><i class="fa fa-fw fa-check"></i> Bootstrap v3.2.0</h4>
                            </div>
                            <div class="panel-body">
                                <p class="bodyarticle">Lorem ipsum dolor sit amet, consectetur adipisicing  elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                                <a href="#" class="btn btn-default">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body disablepadding divarticle">
                                <img src="img/article/1.jpg" class="img-responsive photoarticle" alt="">
                            </div>
                            <div class="panel-heading">
                                <h4><i class="fa fa-fw fa-check"></i> Bootstrap v3.2.0</h4>
                            </div>
                            <div class="panel-body">
                                <p class="bodyarticle">Lorem ipsum dolor sit amet, consectetur adipisicing  elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                                <a href="#" class="btn btn-default">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-lg-12 col-md-12 text-center">
                        <div class="row">
                            <div class="panel panel-default">
                                <div class="panel-body disablepadding divarticle">
                                    <img src="img/article/1.jpg" class="img-responsive photoarticle" alt="">
                                </div>
                                <div class="panel-heading">
                                    <h4><i class="fa fa-fw fa-check"></i> Bootstrap v3.2.0</h4>
                                </div>
                                <div class="panel-body">
                                    <p class="bodyarticle">Lorem ipsum dolor sit amet, consectetur adipisicing  elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                                    <a href="#" class="btn btn-default">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 text-center">
                        <div class="row">
                            <div class="panel panel-default">
                                <div class="panel-body disablepadding divarticle">
                                    <img src="img/article/1.jpg" class="img-responsive photoarticle" alt="">
                                </div>
                                <div class="panel-heading">
                                    <h4><i class="fa fa-fw fa-check"></i> Bootstrap v3.2.0</h4>
                                </div>
                                <div class="panel-body">
                                    <p class="bodyarticle">Lorem ipsum dolor sit amet, consectetur adipisicing  elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                                    <a href="#" class="btn btn-default">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 text-center">
                        <div class="row">
                            <div class="panel panel-default">
                                <div class="panel-body disablepadding divarticle">
                                    <img src="img/article/1.jpg" class="img-responsive photoarticle" alt="">
                                </div>
                                <div class="panel-heading">
                                    <h4><i class="fa fa-fw fa-check"></i> Bootstrap v3.2.0</h4>
                                </div>
                                <div class="panel-body">
                                    <p class="bodyarticle">Lorem ipsum dolor sit amet, consectetur adipisicing  elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                                    <a href="#" class="btn btn-default">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop

@section('jsfooter')
        <script type="text/javascript" src="{{ URL::asset('js/jquery.ba-cond.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/jquery.slitslider.js') }}"></script>
        <script> 
            $('.bg-1').find('.sl-slide-inner').css('background-image',"url('../img/article/3.jpg')").css('background-size',"100% 100%");
            $('.bg-2').find('.sl-slide-inner').css('background-image',"url('../img/article/1.jpeg')").css('background-size',"100% 100%");
            $('.bg-3').find('.sl-slide-inner').css('background-image',"url('../img/article/3.jpg')").css('background-size',"100% 100%");
            $('.bg-4').find('.sl-slide-inner').css('background-image',"url('../img/article/1.jpeg')").css('background-size',"100% 100%");
        </script>
        <script type="text/javascript"> 
            $(function() {
            
                var Page = (function() {

                    var $navArrows = $( '#nav-arrows' ),
                        $nav = $( '#nav-dots > span' ),
                        slitslider = $( '#slider' ).slitslider( {
                            onBeforeChange : function( slide, pos ) {

                                $nav.removeClass( 'nav-dot-current' );
                                $nav.eq( pos ).addClass( 'nav-dot-current' );

                            }
                        } ),

                        init = function() {

                            initEvents();
                            
                        },
                        initEvents = function() {

                            // add navigation events
                            $navArrows.children( ':last' ).on( 'click', function() {

                                slitslider.next();
                                return false;

                            } );

                            $navArrows.children( ':first' ).on( 'click', function() {
                                
                                slitslider.previous();
                                return false;

                            } );

                            $nav.each( function( i ) {
                            
                                $( this ).on( 'click', function( event ) {
                                    
                                    var $dot = $( this );
                                    
                                    if( !slitslider.isActive() ) {

                                        $nav.removeClass( 'nav-dot-current' );
                                        $dot.addClass( 'nav-dot-current' );
                                    
                                    }
                                    
                                    slitslider.jump( i + 1 );
                                    return false;
                                
                                } );
                                
                            } );

                        };

                        return { init : init };

                })();

                Page.init();

                /**
                 * Notes: 
                 * 
                 * example how to add items:
                 */

                /*
                
                var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
                
                // call the plugin's add method
                ss.add($items);

                */
            
            });
        </script>
    
@stop

    
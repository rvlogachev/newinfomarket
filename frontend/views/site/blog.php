<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = 'Блог';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="main-container">

    <div class="container">
        <div class="row">

            <!-- main start -->
            <!-- ================ -->
            <div class="main col-md-8">

                <!-- page-title start -->
                <!-- ================ -->
                <h1 class="page-title">Home Blog</h1>
                <div class="separator-2"></div>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <!-- page-title end -->

                <!-- blogpost start -->
                <article class="blogpost">
                    <div id="carousel-blog-post" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators bottom margin-clear">
                            <li data-target="#carousel-blog-post" data-slide-to="0" class=""></li>
                            <li data-target="#carousel-blog-post" data-slide-to="1" class="active"></li>
                            <li data-target="#carousel-blog-post" data-slide-to="2" class=""></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item">
                                <div class="overlay-container">
                                    <img src="/images/blog-1.jpg" alt="">
                                    <a class="overlay-link" href="blog-post.html"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="item active">
                                <div class="overlay-container">
                                    <img src="/images/blog-3.jpg" alt="">
                                    <a class="overlay-link" href="blog-post.html"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="overlay-container">
                                    <img src="/images/blog-4.jpg" alt="">
                                    <a class="overlay-link" href="blog-post.html"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <header>
                        <h2><a href="blog-post.html">Blogpost with slider</a></h2>
                        <div class="post-info">
										<span class="post-date">
											<i class="icon-calendar"></i>
											<span class="day">12</span>
											<span class="month">May 2015</span>
										</span>
                            <span class="submitted"><i class="icon-user-1"></i> by <a href="index-blog.html#">John Doe</a></span>
                            <span class="comments"><i class="icon-chat"></i> <a href="index-blog.html#">22 comments</a></span>
                        </div>
                    </header>
                    <div class="blogpost-content">
                        <p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
                    </div>
                    <footer class="clearfix">
                        <div class="tags pull-left"><i class="icon-tags"></i> <a href="index-blog.html#">tag 1</a>, <a href="index-blog.html#">tag 2</a>, <a href="index-blog.html#">long tag 3</a></div>
                        <div class="link pull-right"><i class="icon-link"></i><a href="index-blog.html#">Read More</a></div>
                    </footer>
                </article>
                <!-- blogpost end -->

                <!-- blogpost start -->
                <article class="blogpost">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/91J8pLHdDB0"></iframe>
                    </div>
                    <header>
                        <h2><a href="blog-post.html">Blogpost with embedded youtube video</a></h2>
                        <div class="post-info">
										<span class="post-date">
											<i class="icon-calendar"></i>
											<span class="day">11</span>
											<span class="month">May 2015</span>
										</span>
                            <span class="submitted"><i class="icon-user-1"></i> by <a href="index-blog.html#">John Doe</a></span>
                            <span class="comments"><i class="icon-chat"></i> <a href="index-blog.html#">22 comments</a></span>
                        </div>
                    </header>
                    <div class="blogpost-content">
                        <p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
                    </div>
                    <footer class="clearfix">
                        <div class="tags pull-left"><i class="icon-tags"></i> <a href="index-blog.html#">tag 1</a>, <a href="index-blog.html#">tag 2</a>, <a href="index-blog.html#">long tag 3</a></div>
                        <div class="link pull-right"><i class="icon-link"></i><a href="index-blog.html#">Read More</a></div>
                    </footer>
                </article>
                <!-- blogpost end -->

                <!-- blogpost start -->
                <article class="blogpost">
                    <div class="audio-wrapper">
                        <iframe height="166" class="margin-clear" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/231321623&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
                    </div>
                    <header>
                        <h2><a href="blog-post.html">Audio post</a></h2>
                        <div class="post-info">
										<span class="post-date">
											<i class="icon-calendar"></i>
											<span class="day">10</span>
											<span class="month">May 2015</span>
										</span>
                            <span class="submitted"><i class="icon-user-1"></i> by <a href="index-blog.html#">John Doe</a></span>
                            <span class="comments"><i class="icon-chat"></i> <a href="index-blog.html#">22 comments</a></span>
                        </div>
                    </header>
                    <div class="blogpost-content">
                        <p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
                    </div>
                    <footer class="clearfix">
                        <div class="tags pull-left"><i class="icon-tags"></i> <a href="index-blog.html#">tag 1</a>, <a href="index-blog.html#">tag 2</a>, <a href="index-blog.html#">long tag 3</a></div>
                        <div class="link pull-right"><i class="icon-link"></i><a href="index-blog.html#">Read More</a></div>
                    </footer>
                </article>
                <!-- blogpost end -->

                <!-- blogpost start -->
                <article class="blogpost">
                    <header>
                        <h2><a href="blog-post.html">Text Post</a></h2>
                        <div class="post-info">
										<span class="post-date">
											<i class="icon-calendar"></i>
											<span class="day">09</span>
											<span class="month">May 2015</span>
										</span>
                            <span class="submitted"><i class="icon-user-1"></i> by <a href="index-blog.html#">John Doe</a></span>
                            <span class="comments"><i class="icon-chat"></i> <a href="index-blog.html#">22 comments</a></span>
                        </div>
                    </header>
                    <div class="blogpost-content">
                        <p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
                    </div>
                    <footer class="clearfix">
                        <div class="tags pull-left"><i class="icon-tags"></i> <a href="index-blog.html#">tag 1</a>, <a href="index-blog.html#">tag 2</a>, <a href="index-blog.html#">long tag 3</a></div>
                        <div class="link pull-right"><i class="icon-link"></i><a href="index-blog.html#">Read More</a></div>
                    </footer>
                </article>
                <!-- blogpost end -->

                <!-- blogpost start -->
                <article class="blogpost">
                    <div class="overlay-container">
                        <img src="/images/blog-2.jpg" alt="">
                        <a class="overlay-link" href="blog-post.html"><i class="fa fa-link"></i></a>
                    </div>
                    <header>
                        <h2><a href="blog-post.html">Cute Robot</a></h2>
                        <div class="post-info">
										<span class="post-date">
											<i class="icon-calendar"></i>
											<span class="day">08</span>
											<span class="month">May 2015</span>
										</span>
                            <span class="submitted"><i class="icon-user-1"></i> by <a href="index-blog.html#">John Doe</a></span>
                            <span class="comments"><i class="icon-chat"></i> <a href="index-blog.html#">22 comments</a></span>
                        </div>
                    </header>
                    <div class="blogpost-content">
                        <p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
                    </div>
                    <footer class="clearfix">
                        <div class="tags pull-left"><i class="icon-tags"></i> <a href="index-blog.html#">tag 1</a>, <a href="index-blog.html#">tag 2</a>, <a href="index-blog.html#">long tag 3</a></div>
                        <div class="link pull-right"><i class="icon-link"></i><a href="index-blog.html#">Read More</a></div>
                    </footer>
                </article>
                <!-- blogpost end -->

                <!-- pagination start -->
                <nav>
                    <ul class="pagination">
                        <li><a href="index-blog.html#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="index-blog.html#">1</a></li>
                        <li><a href="index-blog.html#">2</a></li>
                        <li><a href="index-blog.html#">3</a></li>
                        <li><a href="index-blog.html#">4</a></li>
                        <li><a href="index-blog.html#">5</a></li>
                        <li><a href="index-blog.html#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </nav>
                <!-- pagination end -->

            </div>
            <!-- main end -->

            <!-- sidebar start -->
            <!-- ================ -->
            <aside class="col-md-4 col-lg-3 col-lg-offset-1">
                <div class="sidebar">
                    <div class="block clearfix">
                        <h3 class="title">Sidebar menu</h3>
                        <div class="separator-2"></div>
                        <nav>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="index.html">Home</a></li>
                                <li class="active"><a href="blog-large-image-right-sidebar.html">Blog</a></li>
                                <li><a href="portfolio-grid-2-3-col.html">Portfolio</a></li>
                                <li><a href="page-about.html">About</a></li>
                                <li><a href="page-contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="block clearfix">
                        <h3 class="title">Featured Project</h3>
                        <div class="separator-2"></div>
                        <div id="carousel-portfolio-sidebar" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-portfolio-sidebar" data-slide-to="0" class=""></li>
                                <li data-target="#carousel-portfolio-sidebar" data-slide-to="1" class="active"></li>
                                <li data-target="#carousel-portfolio-sidebar" data-slide-to="2" class=""></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item">
                                    <div class="image-box shadow bordered text-center mb-20">
                                        <div class="overlay-container">
                                            <img src="/images/portfolio-5.jpg" alt="">
                                            <a href="portfolio-item.html" class="overlay-link">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item active">
                                    <div class="image-box shadow bordered text-center mb-20">
                                        <div class="overlay-container">
                                            <img src="/images/portfolio-1-2.jpg" alt="">
                                            <a href="portfolio-item.html" class="overlay-link">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="image-box shadow bordered text-center mb-20">
                                        <div class="overlay-container">
                                            <img src="/images/portfolio-1-3.jpg" alt="">
                                            <a href="portfolio-item.html" class="overlay-link">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block clearfix">
                        <h3 class="title">Latest tweets</h3>
                        <div class="separator-2"></div>
                        <ul class="tweets">
                            <li>
                                <i class="fa fa-twitter"></i>
                                <p><a href="index-blog.html#">@lorem</a> ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, aliquid, et molestias nesciunt <a href="index-blog.html#">http://t.co/dzLEYGeEH9</a>.</p><span>16 hours ago</span>
                            </li>
                            <li>
                                <i class="fa fa-twitter"></i>
                                <p><a href="index-blog.html#">@lorem</a> ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, aliquid, et molestias nesciunt <a href="index-blog.html#">http://t.co/dzLEYGeEH9</a>.</p><span>16 hours ago</span>
                            </li>
                        </ul>
                    </div>
                    <div class="block clearfix">
                        <h3 class="title">Popular Tags</h3>
                        <div class="separator-2"></div>
                        <div class="tags-cloud">
                            <div class="tag">
                                <a href="index-blog.html#">energy</a>
                            </div>
                            <div class="tag">
                                <a href="index-blog.html#">business</a>
                            </div>
                            <div class="tag">
                                <a href="index-blog.html#">food</a>
                            </div>
                            <div class="tag">
                                <a href="index-blog.html#">fashion</a>
                            </div>
                            <div class="tag">
                                <a href="index-blog.html#">finance</a>
                            </div>
                            <div class="tag">
                                <a href="index-blog.html#">culture</a>
                            </div>
                            <div class="tag">
                                <a href="index-blog.html#">health</a>
                            </div>
                            <div class="tag">
                                <a href="index-blog.html#">sports</a>
                            </div>
                            <div class="tag">
                                <a href="index-blog.html#">life style</a>
                            </div>
                            <div class="tag">
                                <a href="index-blog.html#">books</a>
                            </div>
                            <div class="tag">
                                <a href="index-blog.html#">lorem</a>
                            </div>
                            <div class="tag">
                                <a href="index-blog.html#">ipsum</a>
                            </div>
                            <div class="tag">
                                <a href="index-blog.html#">responsive</a>
                            </div>
                            <div class="tag">
                                <a href="index-blog.html#">style</a>
                            </div>
                            <div class="tag">
                                <a href="index-blog.html#">finance</a>
                            </div>
                            <div class="tag">
                                <a href="index-blog.html#">sports</a>
                            </div>
                            <div class="tag">
                                <a href="index-blog.html#">technology</a>
                            </div>
                            <div class="tag">
                                <a href="index-blog.html#">support</a>
                            </div>
                            <div class="tag">
                                <a href="index-blog.html#">life style</a>
                            </div>
                            <div class="tag">
                                <a href="index-blog.html#">books</a>
                            </div>
                        </div>
                    </div>
                    <div class="block clearfix">
                        <h3 class="title">Testimonial</h3>
                        <div class="separator-2"></div>
                        <blockquote class="margin-clear">
                            <p>Design is not just what it looks like and feels like. Design is how it works.</p>
                            <footer><cite title="Source Title">Steve Jobs </cite></footer>
                        </blockquote>
                        <blockquote class="margin-clear">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolorem.</p>
                            <footer><cite title="Source Title">Steve Doe </cite></footer>
                        </blockquote>
                    </div>
                    <div class="block clearfix">
                        <h3 class="title">Latest News</h3>
                        <div class="separator-2"></div>
                        <div class="media margin-clear">
                            <div class="media-left">
                                <div class="overlay-container">
                                    <img class="media-object" src="/images/blog-thumb-1.jpg" alt="blog-thumb">
                                    <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="media-body">
                                <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
                                <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 23, 2015</p>
                            </div>
                            <hr>
                        </div>
                        <div class="media margin-clear">
                            <div class="media-left">
                                <div class="overlay-container">
                                    <img class="media-object" src="/images/blog-thumb-2.jpg" alt="blog-thumb">
                                    <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="media-body">
                                <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
                                <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 22, 2015</p>
                            </div>
                            <hr>
                        </div>
                        <div class="media margin-clear">
                            <div class="media-left">
                                <div class="overlay-container">
                                    <img class="media-object" src="/images/blog-thumb-3.jpg" alt="blog-thumb">
                                    <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="media-body">
                                <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
                                <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 21, 2015</p>
                            </div>
                            <hr>
                        </div>
                        <div class="media margin-clear">
                            <div class="media-left">
                                <div class="overlay-container">
                                    <img class="media-object" src="/images/blog-thumb-4.jpg" alt="blog-thumb">
                                    <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="media-body">
                                <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
                                <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 21, 2015</p>
                            </div>
                        </div>
                        <div class="text-right space-top">
                            <a href="blog-large-image-right-sidebar.html" class="link-dark"><i class="fa fa-plus-circle pl-5 pr-5"></i>More</a>
                        </div>
                    </div>
                    <div class="block clearfix">
                        <h3 class="title">Text Sample</h3>
                        <div class="separator-2"></div>
                        <p class="margin-clear">Debitis eaque officia illo impedit ipsa earum <a href="index-blog.html#">cupiditate repellendus</a> corrupti nisi nemo, perspiciatis optio harum, hic laudantium nulla maiores rem sit magni neque nihil sequi temporibus. Laboriosam ipsum reiciendis iste, nobis obcaecati, a autem voluptatum odio? Recusandae officiis dicta quod qui eligendi.</p>
                    </div>
                    <div class="block clearfix">
                        <form role="search">
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" placeholder="Search">
                                <i class="fa fa-search form-control-feedback"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </aside>
            <!-- sidebar end -->

        </div>
    </div>
</section>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Index - Global News</title>
<link href="/assets/pms/css/common.css" rel="stylesheet" media="all"/>
<link href="/assets/pms/css/style.css" rel="stylesheet" media="all"/>
<link href="/assets/pms/css/skin.css" rel="stylesheet" media="all"/>
<link rel="icon" href="/assets/favicon.png" type="image/x-icon">
<link rel="shortcut icon" href="/assets/pms/images/favicon.ico" type="image/x-icon" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>!window.jQuery && document.write('<script src="/assets/pms/js/jquery-1.7.1.min.js"><\/script>')</script>
<script src="/assets/pms/js/jquery-ui.min.js"></script>
<script src="/assets/pms/js/jquery.ad-gallery.pack.js"></script>
<script src="/assets/pms/js/jquery.anythingslider.min.js"></script>
<script src="/assets/pms/js/jquery.colorbox-min.js"></script>
<script src="/assets/pms/js/script.js"></script>
<!--[if lt IE 9]>
<script src="/assets/pms/js/html5.js"></script>
<![endif]-->
</head>
<body class="two_sidebars">
<!--[if lte IE 8]><div id="ie_message"><div class="wrapper"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="/assets/pms/images/banner_ie.png" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/></a></div></div><![endif]-->
<div id="wrapper"> 
  <!-- header -->
  <header>
    <div id="above_header">
      <div class="inner">
        <div class="region">
          <div id="block_header_time" class="block">
            <p><?php echo __('Today');?>:
                <time datetime="<?php echo date("Y-m-d");?>" class="today"><?php echo date("Y-m-d, H:i");?></time>
            </p>
          </div>
          <div id="block_header_login" class="block">
              <p><a href="<?php echo get_url('user_login')?>"><?php echo __('Login');?></a> | <a href="<?php echo get_url('user_register')?>"><?php echo __('Register');?></a></p>
          </div>
        </div>
      </div>
    </div>
    <div id="header">
      <div class="wrapper">
          <h1 id="logo"><a href="/assets/pms/index.html" title="<?php echo __('Go home');?>"><img src="/assets/pms/images/logo.png" alt="Promotion Management System"/></a></h1>
        <div class="region">
          <div id="block-search-form" class="block">
            <form method="post" action="#">
              <div class="form-type-textfield">
                <input type="text" class="form-text" maxlength="128" size="15" value="Search" onBlur="if(this.value=='') this.value='Search'" onFocus="if(this.value =='Search' ) this.value=''"/>
              </div>
              <div class="form-actions">
                <input type="submit" class="form-submit" value=""/>
              </div>
            </form>
          </div>
          <div id="block_header_rss" class="block">
            <p><a href="#" class="bg_rss rss">RSS Feed</a></p>
          </div>
        </div>
      </div>
    </div>
    <div id="under_header">
      <div class="region">
        <div id="block_main_menu" class="block">
          <div class="inner">
            <nav>
              <ul>
                <li class="first active"><a href="/assets/pms/index.html"><span class="bg">Home</span></a></li>
                <li><a href="/assets/pms/fullwidth.html"><span class="bg">Pages</span></a></li>
                <li><a href="/assets/pms/typography.html"><span class="bg">Features</span></a></li>
                <li><a href="/assets/pms/gallery_3columns.html"><span class="bg">Gallery</span></a></li>
                <li><a href="#"><span class="bg">World</span></a></li>
                <li><a href="#"><span class="bg">U.S.</span></a></li>
                <li><a href="#"><span class="bg">Business</span></a></li>
                <li><a href="#"><span class="bg">Sports</span></a></li>
                <li><a href="#"><span class="bg">Entertainment</span></a></li>
                <li><a href="#"><span class="bg">Health</span></a></li>
                <li><a href="#"><span class="bg">Tech</span></a></li>
                <li><a href="#"><span class="bg">Weather</span></a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div id="block_secondary_menu" class="block">
          <div class="inner">
            <ul>
              <li class="first active"><a href="/assets/pms/index.html">Red</a></li>
              <li><a href="/assets/pms/index_blue.html">Blue</a></li>
              <li><a href="/assets/pms/index_orange.html">Orange</a></li>
              <li><a href="/assets/pms/index_green.html">Green</a></li>
              <li><a href="/assets/pms/index_grey.html">Grey</a></li>
              <li><a href="/assets/pms/index_dark_blue.html">Dark Blue</a></li>
              <li><a href="/assets/pms/index_dark_grey.html">Dark Grey</a></li>
              <li><a href="/assets/pms/index_fixed_layout.html">Fixed Layout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end header --> 
  <!-- content top -->
  <div id="content_top">
    <div class="region">
      <aside id="block_breaking_news" class="block">
        <h3 class="block_title">Breaking News:</h3>
        <div class="content">
          <ul>
            <li><a href="#">Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede.</a></li>
            <li><a href="#">Donec in velit vel ipsum auctor pulvinar. Vestibulum iaculis lacinia est.</a></li>
            <li><a href="#">Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipis.</a></li>
          </ul>
        </div>
      </aside>
      <aside id="block_front_slider" class="block">
        <div class="content ad-gallery">
          <div class="ad-image-wrapper"></div>
          <div class="ad-controls"></div>
          <div class="ad-nav">
            <div class="ad-thumbs">
              <ul class="ad-thumb-list">
                <li><a href="/assets/pms/images/content/front_slider_1.jpg"><img src="/assets/pms/images/content/front_slider_1_thumb.jpg" title="Aenean auctor wisi et urna" alt="Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac..."/></a></li>
                <li><a href="/assets/pms/images/content/front_slider_2.jpg"><img src="/assets/pms/images/content/front_slider_2_thumb.jpg" title="Ut pharetra augue nec augue." alt="Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede..."/></a></li>
                <li><a href="/assets/pms/images/content/front_slider_3.jpg"><img src="/assets/pms/images/content/front_slider_3_thumb.jpg" title="Nam elit agna,endrerit sit amet, tincidunt." alt="Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac..."/></a></li>
                <li><a href="/assets/pms/images/content/front_slider_4.jpg"><img src="/assets/pms/images/content/front_slider_4_thumb.jpg" title="Donec eget tellus non erat lacinia fermentum." alt="Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede..."/></a></li>
                <li><a href="/assets/pms/images/content/front_slider_5.jpg"><img src="/assets/pms/images/content/front_slider_5_thumb.jpg" title="Aenean auctor wisi et urna" alt="Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac..."/></a></li>
                <li><a href="/assets/pms/images/content/front_slider_6.jpg"><img src="/assets/pms/images/content/front_slider_6_thumb.jpg" title="Ut pharetra augue nec augue." alt="Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede..."/></a></li>
                <li><a href="/assets/pms/images/content/front_slider_7.jpg"><img src="/assets/pms/images/content/front_slider_7_thumb.jpg" title="Aenean auctor wisi et urna" alt="Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac..."/></a></li>
                <li><a href="/assets/pms/images/content/front_slider_8.jpg"><img src="/assets/pms/images/content/front_slider_8_thumb.jpg" title="Nam elit agna,endrerit sit amet, tincidunt." alt="Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac..."/></a></li>
                <li><a href="/assets/pms/images/content/front_slider_9.jpg"><img src="/assets/pms/images/content/front_slider_9_thumb.jpg" title="Donec eget tellus non erat lacinia fermentum." alt="Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede..."/></a></li>
                <li><a href="/assets/pms/images/content/front_slider_10.jpg"><img src="/assets/pms/images/content/front_slider_10_thumb.jpg" title="Aenean auctor wisi et urna" alt="Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet, tincidunt ac..."/></a></li>
              </ul>
            </div>
          </div>
        </div>
      </aside>
      <aside id="block_latest_headlines" class="block">
        <h3 class="block_title">Latest Headlines</h3>
        <div class="content">
          <ul>
            <li class="first"><a href="#">Integer rutrum ante eu lacus.</a></li>
            <li><a href="#">Vestibulum libero nisl.</a></li>
            <li><a href="#">Scelerisque eget, malesuada at, neque.</a></li>
            <li><a href="#">Vivamus eget nibh.</a></li>
            <li><a href="#">Etiam cursus leo vel metus.</a></li>
            <li><a href="#">Nulla facilisi. Aenean nec eros.</a></li>
            <li class="last"><a href="#">Vestibulum ante ipsum.</a></li>
          </ul>
          <p><a href="#" class="view_all"><span><span>All News</span></span></a></p>
        </div>
      </aside>
      <div id="block_content_top_tabs" class="block">
        <ul>
          <li><a href="#block_video"><span class="bg">Video</span></a></li>
          <li><a href="#block_opinions"><span class="bg">Opinions</span></a></li>
          <li><a href="#block_extra"><span class="bg">Extra</span></a></li>
          <li><a href="#block_poll"><span class="bg">Poll</span></a></li>
        </ul>
        <aside id="block_video" class="content">
          <div class="video"></div>
          <ul>
            <li class="vimeo"><a href="http://vimeo.com/36597329"></a></li>
            <li class="vimeo"><a href="http://vimeo.com/36597204"></a></li>
            <li class="vimeo"><a href="http://vimeo.com/36597088"></a></li>
            <li class="vimeo"><a href="http://vimeo.com/36596665"></a></li>
            <li class="vimeo"><a href="http://vimeo.com/36597718"></a></li>
            <li class="vimeo"><a href="http://vimeo.com/36597442"></a></li>
          </ul>
          <p><a href="#" class="view_all"><span><span>All Videos</span></span></a></p>
        </aside>
        <aside id="block_opinions" class="content">
          <ul>
            <li>
              <article>
                <div class="photo"><a href="#"><img src="/assets/pms/images/content/opinions_1.jpg" alt="Photo"/></a></div>
                <div class="details">
                  <h4 class="title"><a href="#">Donec porta diam eu massa dictum elementum velit.</a></h4>
                  <p class="date">
                    <time datetime="2012-01-22">Jan 22, 2012</time>
                    <span class="comments_count"><a href="#">27</a></span></p>
                </div>
                <p class="text">Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit...</p>
                <p class="text"><a href="#" class="view_all"><span><span>Read More</span></span></a></p>
              </article>
            </li>
            <li class="last">
              <article>
                <div class="photo"><a href="#"><img src="/assets/pms/images/content/opinions_2.jpg" alt="Photo"/></a></div>
                <div class="details">
                  <h4 class="title"><a href="#">Quisque diam lorem, interdum vitae, dapibus ac..</a></h4>
                  <p class="date">
                    <time datetime="2012-01-24">Jan 24, 2012</time>
                    <span class="comments_count"><a href="#">19</a></span></p>
                </div>
                <p class="text">Sed laoreet aliquam leo. Ut tellus tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna...</p>
                <p class="text"><a href="#" class="view_all"><span><span>Read More</span></span></a></p>
              </article>
            </li>
          </ul>
        </aside>
        <aside id="block_extra" class="content">
          <ul>
            <li>
              <article>
                <p><a href="#"><img src="/assets/pms/images/content/extra_1.jpg" alt="Photo"/></a></p>
                <h4 class="title"><a href="#">Nam elit agna, endrerit sit amet.</a></h4>
                <p class="date">
                  <time datetime="2012-01-14">Jan 14, 2012</time>
                  <span class="comments_count"><a href="#">8</a></span></p>
                <p>Vestibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet dipiscing aliquet, consectetuer...</p>
                <p><a href="#" class="view_all"><span><span>Read More</span></span></a></p>
              </article>
            </li>
            <li class="last">
              <article>
                <p><a href="#"><img src="/assets/pms/images/content/extra_2.jpg" alt="Photo"/></a></p>
                <h4 class="title"><a href="#">Donec porta diam eu massa.</a></h4>
                <p class="date">
                  <time datetime="2012-01-14">Jan 14, 2012</time>
                  <span class="comments_count"><a href="#">3</a></span></p>
                <p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula...</p>
                <p><a href="#" class="view_all"><span><span>Read More</span></span></a></p>
              </article>
            </li>
          </ul>
        </aside>
        <aside id="block_poll" class="content">
          <form action="#" method="post">
            <h3>Donec porta diam eu massa. Quisque diam lorem, interdum vitae, dapibus ac?</h3>
            <div id="edit-choice">
              <div class="form-item">
                <input type="radio" value="1" name="choice" id="edit-choice-1" checked />
                <label for="edit-choice-1">Mauris accumsan</label>
              </div>
              <div class="form-item">
                <input type="radio" value="2" name="choice" id="edit-choice-2"/>
                <label for="edit-choice-2">Nulla vel diam</label>
              </div>
              <div class="form-item">
                <input type="radio" value="3" name="choice" id="edit-choice-3"/>
                <label for="edit-choice-3">Sed in lacus ut enim adipiscing</label>
              </div>
              <div class="form-item">
                <input type="radio" value="4" name="choice" id="edit-choice-4"/>
                <label for="edit-choice-4">In pede mi, aliquet sit</label>
              </div>
              <div class="form-item">
                <input type="radio" value="5" name="choice" id="edit-choice-5"/>
                <label for="edit-choice-5">Amet, euismod in</label>
              </div>
              <div class="form-item">
                <input type="radio" value="6" name="choice" id="edit-choice-6"/>
                <label for="edit-choice-6">Mauris accumsan</label>
              </div>
              <div class="form-item">
                <input type="radio" value="7" name="choice" id="edit-choice-7"/>
                <label for="edit-choice-7">Nulla vel diam</label>
              </div>
            </div>
            <button type="submit"><span class="view_all"><span><span>Vote</span></span></span></button>
            <a href="#" class="view_all"><span><span>Results</span></span></a>
          </form>
        </aside>
      </div>
      <section id="block_editors_choice" class="block">
        <h3 class="block_title">Editor's choice</h3>
        <div class="content">
          <ul>
            <li>
              <div class="editors_inner2">
                <article class="editors_inner">
                  <div class="editors_left"><img src="/assets/pms/images/content/editors_choice_1.jpg" alt="Photo"/></div>
                  <div class="editors_right">
                    <h4 class="title"><a href="#">Suspendisse sollicitudin velit sed leo.</a></h4>
                    <p class="date">
                      <time datetime="2012-01-24">Jan 24, 2012</time>
                      <span class="comments_count"><a href="#">37</a></span></p>
                    <p>Quisque diam lorem, interdum vitae, dapibus...</p>
                  </div>
                </article>
              </div>
            </li>
            <li>
              <div class="editors_inner2">
                <article class="editors_inner">
                  <div class="editors_left"><img src="/assets/pms/images/content/editors_choice_2.jpg" alt="Photo"/></div>
                  <div class="editors_right">
                    <h4 class="title"><a href="#">Ut pharetra augue nec.</a></h4>
                    <p class="date">
                      <time datetime="2012-01-20">Jan 20, 2012</time>
                      <span class="comments_count"><a href="#">18</a></span></p>
                    <p>Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum...</p>
                  </div>
                </article>
              </div>
            </li>
            <li>
              <div class="editors_inner2">
                <article class="editors_inner">
                  <div class="editors_left"><img src="/assets/pms/images/content/editors_choice_3.jpg" alt="Photo"/></div>
                  <div class="editors_right">
                    <h4 class="title"><a href="#">Nam elit agna,endrerit sit amet.</a></h4>
                    <p class="date">
                      <time datetime="2012-01-14">Jan 14, 2012</time>
                      <span class="comments_count"><a href="#">8</a></span></p>
                    <p>Vestibulum iaculis lacinia est. Proin dictum...</p>
                  </div>
                </article>
              </div>
            </li>
            <li>
              <div class="editors_inner2">
                <article class="editors_inner">
                  <div class="editors_left"><img src="/assets/pms/images/content/editors_choice_4.jpg" alt="Photo"/></div>
                  <div class="editors_right">
                    <h4 class="title"><a href="#">Suspendisse sollicitudin velit sed leo.</a></h4>
                    <p class="date">
                      <time datetime="2012-01-24">Jan 24, 2012</time>
                      <span class="comments_count"><a href="#">37</a></span></p>
                    <p>Quisque diam lorem, interdum vitae, dapibus...</p>
                  </div>
                </article>
              </div>
            </li>
            <li>
              <div class="editors_inner2">
                <article class="editors_inner">
                  <div class="editors_left"><img src="/assets/pms/images/content/editors_choice_5.jpg" alt="Photo"/></div>
                  <div class="editors_right">
                    <h4 class="title"><a href="#">Ut pharetra augue nec.</a></h4>
                    <p class="date">
                      <time datetime="2012-01-20">Jan 20, 2012</time>
                      <span class="comments_count"><a href="#">18</a></span></p>
                    <p>Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum...</p>
                  </div>
                </article>
              </div>
            </li>
            <li>
              <div class="editors_inner2">
                <article class="editors_inner">
                  <div class="editors_left"><img src="/assets/pms/images/content/editors_choice_6.jpg" alt="Photo"/></div>
                  <div class="editors_right">
                    <h4 class="title"><a href="#">Nam elit agna,endrerit sit amet.</a></h4>
                    <p class="date">
                      <time datetime="2012-01-14">Jan 14, 2012</time>
                      <span class="comments_count"><a href="#">8</a></span></p>
                    <p>Vestibulum iaculis lacinia est. Proin dictum...</p>
                  </div>
                </article>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </div>
  </div>
  <!-- end content top -->
  <div id="container">
    <div class="wrapper">
      <div id="page"> 
        <!-- left sidebar -->
        <div id="left_sidebar">
          <div class="region">
            <section id="block_left" class="block">
              <h3 class="block_title">U.S. news</h3>
              <div class="content">
                <ul>
                  <li class="first">
                    <article>
                      <h4 class="title"><a href="#">Nam elit agna endrerit.</a></h4>
                      <p class="date">
                        <time datetime="2012-01-29">Jan 29, 2012</time>
                        <span class="comments_count"><a href="#">7</a></span></p>
                      <p>Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae pede. Donec eget...</p>
                    </article>
                  </li>
                  <li>
                    <article>
                      <h4 class="title"><a href="#">Sit amet tincidunt ac, viverra sed.</a></h4>
                      <p class="date">
                        <time datetime="2012-01-25">Jan 25, 2012</time>
                        <span class="comments_count"><a href="#">3</a></span></p>
                      <p>Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum auctor pulvinar...</p>
                    </article>
                  </li>
                  <li>
                    <article>
                      <h4 class="title"><a href="#">Donec porta diam eu.</a></h4>
                      <p class="date">
                        <time datetime="2012-01-22">Jan 22, 2012</time>
                        <span class="comments_count"><a href="#">9</a></span></p>
                      <p>Ipsum auctor pulvinar. Vestibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante metus...</p>
                    </article>
                  </li>
                  <li>
                    <article>
                      <h4 class="title"><a href="#">Quisque diam lorem.</a></h4>
                      <p class="date">
                        <time datetime="2012-01-19">Jan 19, 2012</time>
                        <span class="comments_count"><a href="#">11</a></span></p>
                      <p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis...</p>
                    </article>
                  </li>
                  <li class="last">
                    <article>
                      <h4 class="title"><a href="#">Scelerisque vitae, pede.</a></h4>
                      <p class="date">
                        <time datetime="2012-01-17">Jan 17, 2012</time>
                        <span class="comments_count"><a href="#">21</a></span></p>
                      <p>In pede mi, aliquet sit amet, euismod in,auctor ut, ligula aliquam dapibus tincidunt metus... </p>
                    </article>
                  </li>
                </ul>
                <p><a href="#" class="view_all"><span><span>More</span></span></a></p>
              </div>
            </section>
          </div>
        </div>
        <!-- end left sidebar --> 
        <!-- content -->
        <div id="content">
          <div class="region">
            <section id="block_world_news" class="block">
              <h3 class="block_title_black">World News<a href="#" class="view_all"><span><span>All News</span></span></a></h3>
              <div class="content">
                <div class="left">
                  <article>
                    <p><img src="/assets/pms/images/content/front_content_1.jpg" alt="World News"/></p>
                    <hgroup>
                      <h5 class="category"><a href="#">World</a></h5>
                      <h4 class="title"><a href="#">Nam elit agna, endrerit sit amet.</a></h4>
                    </hgroup>
                    <p class="date">
                      <time datetime="2012-01-26">Jan 26, 2012</time>
                      <span class="comments_count"><a href="#">7</a></span></p>
                    <p>Donec in velit vel ipsum auctor pulvinar. Vestibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer.</p>
                  </article>
                </div>
                <div class="right">
                  <ul>
                    <li class="first">
                      <article>
                        <hgroup>
                          <h5 class="category"><a href="#">Politics</a></h5>
                          <h4 class="title"><a href="#">Donec porta diam eu massa.</a></h4>
                        </hgroup>
                        <p class="date">
                          <time datetime="2012-01-18">Jan 18, 2012</time>
                          <span class="comments_count"><a href="#">10</a></span></p>
                        <p>Proin dictum elementum velit. Fusce euismod consequat ante...</p>
                      </article>
                    </li>
                    <li>
                      <article>
                        <hgroup>
                          <h5 class="category"><a href="#">War</a></h5>
                          <h4 class="title"><a href="#">Quisque diam lorem, interdum.</a></h4>
                        </hgroup>
                        <p class="date">
                          <time datetime="2012-01-14">Jan 14, 2012</time>
                          <span class="comments_count"><a href="#">1</a></span></p>
                        <p>Lorem ipsum dolor sit amet, consectetuer mauris accumsan...</p>
                      </article>
                    </li>
                    <li class="last">
                      <article>
                        <hgroup>
                          <h5 class="category"><a href="#">Society</a></h5>
                          <h4 class="title"><a href="#">Donec eget tellus non erat lacinia. </a></h4>
                        </hgroup>
                        <p class="date">
                          <time datetime="2012-01-12">Jan 12, 2012</time>
                          <span class="comments_count"><a href="#">5</a></span></p>
                        <p>Sed in lacus ut enim adipiscing aliquet. Nulla venenatis...</p>
                      </article>
                    </li>
                  </ul>
                </div>
              </div>
            </section>
            <section id="block_business_news" class="block">
              <h3 class="block_title_black">Business News<a href="#" class="view_all"><span><span>All News</span></span></a></h3>
              <div class="content">
                <div class="left">
                  <article>
                    <p><img src="/assets/pms/images/content/front_content_2.jpg" alt="World News"/></p>
                    <hgroup>
                      <h5 class="category"><a href="#">Stock Market</a></h5>
                      <h4 class="title"><a href="#">Tincidunt ac, viverra sed, nulla.</a></h4>
                    </hgroup>
                    <p class="date">
                      <time datetime="2012-01-24">Jan 24, 2012</time>
                      <span class="comments_count"><a href="#">7</a></span></p>
                    <p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula. Aliquam dapibus tincidunt metus.</p>
                  </article>
                </div>
                <div class="right">
                  <ul>
                    <li class="first">
                      <article>
                        <hgroup>
                          <h5 class="category"><a href="#">Economy</a></h5>
                          <h4 class="title"><a href="#">Donec porta diam eu massa.</a></h4>
                        </hgroup>
                        <p class="date">
                          <time datetime="2012-01-21">Jan 21, 2012</time>
                          <span class="comments_count"><a href="#">10</a></span></p>
                        <p>Proin dictum elementum velit. Fusce euismod consequat ante...</p>
                      </article>
                    </li>
                    <li>
                      <article>
                        <hgroup>
                          <h5 class="category"><a href="#">Personal Finance</a></h5>
                          <h4 class="title"><a href="#">Quisque diam lorem, interdum.</a></h4>
                        </hgroup>
                        <p class="date">
                          <time datetime="2012-01-17">Jan 17, 2012</time>
                          <span class="comments_count"><a href="#">1</a></span></p>
                        <p>Lorem ipsum dolor sit amet, consectetuer mauris accumsan...</p>
                      </article>
                    </li>
                    <li class="last">
                      <article>
                        <hgroup>
                          <h5 class="category"><a href="#">Money</a></h5>
                          <h4 class="title"><a href="#">Donec eget tellus non erat lacinia. </a></h4>
                        </hgroup>
                        <p class="date">
                          <time datetime="2012-01-14">Jan 14, 2012</time>
                          <span class="comments_count"><a href="#">5</a></span></p>
                        <p>Sed in lacus ut enim adipiscing aliquet. Nulla venenatis...</p>
                      </article>
                    </li>
                  </ul>
                </div>
              </div>
            </section>
          </div>
        </div>
        <!-- end content --> 
        <!-- content bottom -->
        <div id="content_bottom">
          <div class="region">
            <aside id="block_sports" class="block one_fourth">
              <h3 class="block_title">Sports</h3>
              <div class="content">
                <ul>
                  <li class="first"><a href="#">Vivamus eget nibh.</a></li>
                  <li><a href="#">Etiam cursus leo vel metus.</a></li>
                  <li class="last"><a href="#">Nulla facilisi. Aenean nec eros.</a></li>
                </ul>
                <p><a href="#" class="view_all"><span><span>More</span></span></a></p>
              </div>
            </aside>
            <aside id="block_entertainment" class="block one_fourth">
              <h3 class="block_title">Entertainment</h3>
              <div class="content">
                <ul>
                  <li class="first"><a href="#">Vestibulum ante ipsum. primis in faucibus.</a></li>
                  <li><a href="#">Orci luctus et ultrices.</a></li>
                  <li class="last"><a href="#">Suspendisse sollicitudin velit sed leo.</a></li>
                </ul>
                <p><a href="#" class="view_all"><span><span>More</span></span></a></p>
              </div>
            </aside>
            <aside id="block_health" class="block one_fourth">
              <h3 class="block_title">Health</h3>
              <div class="content">
                <ul>
                  <li class="first"><a href="#">Ut pharetra augue nec augue.</a></li>
                  <li><a href="#">Nam elit agna,endrerit sit amet, tincidunt.</a></li>
                  <li class="last"><a href="#">Ac viverra sed, nulla.</a></li>
                </ul>
                <p><a href="#" class="view_all"><span><span>More</span></span></a></p>
              </div>
            </aside>
            <aside id="block_tech" class="block last one_fourth">
              <h3 class="block_title">Tech</h3>
              <div class="content">
                <ul>
                  <li class="first"><a href="#">Quisque diam lorem.</a></li>
                  <li><a href="#">Interdum vitae,dapibus ac, scelerisque.</a></li>
                  <li class="last"><a href="#">Donec eget tellus non erat lacinia.</a></li>
                </ul>
                <p><a href="#" class="view_all"><span><span>More</span></span></a></p>
              </div>
            </aside>
          </div>
        </div>
        <!-- end content bottom --> 
      </div>
      <!-- right sidebar -->
      <div id="right_sidebar">
        <div class="region">
          <aside id="block_in_pictures" class="block">
            <h3 class="block_title">In Pictures</h3>
            <div class="content">
              <ul>
                <li>
                  <div class="item"><a href="/assets/pms/images/content/in_pictures_1.jpg" title="Photo 1"><img src="/assets/pms/images/content/in_pictures_1_thumb.jpg" alt="" /></a></div>
                  <div class="item"><a href="/assets/pms/images/content/in_pictures_2.jpg" title="Photo 2"><img src="/assets/pms/images/content/in_pictures_2_thumb.jpg" alt="" /></a></div>
                  <div class="item"><a href="/assets/pms/images/content/in_pictures_3.jpg" title="Photo 3"><img src="/assets/pms/images/content/in_pictures_3_thumb.jpg" alt="" /></a></div>
                  <div class="item"><a href="/assets/pms/images/content/in_pictures_4.jpg" title="Photo 4"><img src="/assets/pms/images/content/in_pictures_4_thumb.jpg" alt="" /></a></div>
                  <div class="item"><a href="/assets/pms/images/content/in_pictures_5.jpg" title="Photo 5"><img src="/assets/pms/images/content/in_pictures_5_thumb.jpg" alt="" /></a></div>
                  <div class="item"><a href="/assets/pms/images/content/in_pictures_6.jpg" title="Photo 6"><img src="/assets/pms/images/content/in_pictures_6_thumb.jpg" alt="" /></a></div>
                </li>
                <li>
                  <div class="item"><a href="/assets/pms/images/content/in_pictures_7.jpg" title="Photo 7"><img src="/assets/pms/images/content/in_pictures_7_thumb.jpg" alt="" /></a></div>
                  <div class="item"><a href="/assets/pms/images/content/in_pictures_8.jpg" title="Photo 8"><img src="/assets/pms/images/content/in_pictures_8_thumb.jpg" alt="" /></a></div>
                  <div class="item"><a href="/assets/pms/images/content/in_pictures_9.jpg" title="Photo 9"><img src="/assets/pms/images/content/in_pictures_9_thumb.jpg" alt="" /></a></div>
                  <div class="item"><a href="/assets/pms/images/content/in_pictures_10.jpg" title="Photo 10"><img src="/assets/pms/images/content/in_pictures_10_thumb.jpg" alt="" /></a></div>
                  <div class="item"><a href="/assets/pms/images/content/in_pictures_11.jpg" title="Photo 11"><img src="/assets/pms/images/content/in_pictures_11_thumb.jpg" alt="" /></a></div>
                  <div class="item"><a href="/assets/pms/images/content/in_pictures_12.jpg" title="Photo 12"><img src="/assets/pms/images/content/in_pictures_12_thumb.jpg" alt="" /></a></div>
                </li>
              </ul>
              <p><a href="#" class="view_all"><span><span>All Photos</span></span></a></p>
            </div>
          </aside>
          <div id="block_sidebar_tabs" class="block">
            <ul>
              <li><a href="#block_popular"><span class="bg">Popular</span></a></li>
              <li><a href="#block_comments"><span class="bg">Comments</span></a></li>
              <li><a href="#block_tags"><span class="bg">Tags</span></a></li>
            </ul>
            <aside id="block_popular" class="content">
              <ul>
                <li>
                  <article>
                    <div class="photo"><a href="#"><img src="/assets/pms/images/content/popular_1.jpg" alt="Photo"/></a></div>
                    <div class="details">
                      <h4 class="title"><a href="#">Donec porta diam eu massa vitae.</a></h4>
                      <p class="date">
                        <time datetime="2012-01-21">Jan 21, 2012</time>
                        <span class="comments_count"><a href="#">27</a></span></p>
                    </div>
                  </article>
                </li>
                <li>
                  <article>
                    <div class="photo"><a href="#"><img src="/assets/pms/images/content/popular_2.jpg" alt="Photo"/></a></div>
                    <div class="details">
                      <h4 class="title"><a href="#">Quisque diam lorem, interdum vitae, dapibus ac.</a></h4>
                      <p class="date">
                        <time datetime="2012-01-23">Jan 23, 2012</time>
                        <span class="comments_count"><a href="#">19</a></span></p>
                    </div>
                  </article>
                </li>
                <li class="last">
                  <article>
                    <div class="photo"><a href="#"><img src="/assets/pms/images/content/popular_3.jpg" alt="Photo"/></a></div>
                    <div class="details">
                      <h4 class="title"><a href="#">Sed in lacus ut enim adipiscing aliquet.</a></h4>
                      <p class="date">
                        <time datetime="2012-01-29">Jan 29, 2012</time>
                        <span class="comments_count"><a href="#">21</a></span></p>
                    </div>
                  </article>
                </li>
              </ul>
            </aside>
            <aside id="block_comments" class="content">
              <ul>
                <li>
                  <article>
                    <div class="photo"><a href="#"><img src="/assets/pms/images/bg_user.png" alt="Photo"/></a></div>
                    <div class="details">
                      <h4 class="title"><a href="#">Patricia Adams</a> on <a href="#">Donec porta diam eu massa.</a></h4>
                      <p class="date">
                        <time datetime="2012-01-29">Jan 29, 2012, 8:47 am</time>
                      </p>
                    </div>
                    <p class="text">Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae pede. Proin dictum elementum velit.</p>
                  </article>
                </li>
                <li class="last">
                  <article>
                    <div class="photo"><a href="#"><img src="/assets/pms/images/bg_user.png" alt="Photo"/></a></div>
                    <div class="details">
                      <h4 class="title"><a href="#">George Clark</a> on <a href="#">Quisque diam lorem, interdum.</a></h4>
                      <p class="date">
                        <time datetime="2012-01-29">Jan 29, 2012, 8:47 am</time>
                      </p>
                    </div>
                    <p class="text">Tellus non erat lacinia fermentum. Donec in velit vel ipsum auctor pulvinar. Vestibulum iaculis lacinia est. Proin dictum elementum velit.</p>
                  </article>
                </li>
              </ul>
            </aside>
            <aside id="block_tags" class="content">
              <ul>
                <li><a href="#">All</a></li>
                <li><a href="#">Africa</a></li>
                <li><a href="#">Asia</a></li>
                <li><a href="#">Australia</a></li>
                <li><a href="#">Attacks</a></li>
                <li><a href="#">earthquake</a></li>
                <li><a href="#">europe</a></li>
                <li><a href="#">entertainment</a></li>
                <li><a href="#">financial</a></li>
                <li><a href="#">football</a></li>
                <li><a href="#">health</a></li>
                <li><a href="#">new</a></li>
                <li><a href="#">people</a></li>
                <li><a href="#">sport</a></li>
                <li><a href="#">tech</a></li>
                <li><a href="#">U.S.</a></li>
                <li><a href="#">weather</a></li>
                <li><a href="#">world</a></li>
              </ul>
            </aside>
          </div>
          <aside id="block_weather" class="block">
            <h3 class="block_title_black">Weather<a href="#" class="view_all"><span><span>More Weather</span></span></a></h3>
            <div class="content">
              <form method="post" action="#">
                <div class="form-type-textfield">
                  <input type="text" class="form-text" maxlength="128" size="15" value="Enter name the city" onBlur="if(this.value=='') this.value='Enter name the city'" onFocus="if(this.value =='Enter name the city' ) this.value=''"/>
                </div>
                <div class="form-actions">
                  <input type="submit" class="form-submit" value=""/>
                </div>
              </form>
              <div class="row">
                <div class="icon"><img src="/assets/pms/images/bg_weather_partly_cloudy.png" alt="Partly Cloudy"/></div>
                <div class="details">
                  <h6>New York, NY</h6>
                  <span class="tempr">27&deg;<span class="unit">F</span></span> <span class="status">Partly Cloudy</span> </div>
              </div>
              <div class="row"> <span class="hi_lo">Hi 41&deg; | Lo 29&deg;</span> <span class="feels">Feels Like: 20&deg;</span> <a href="#" class="view_all"><span><span>5 day</span></span></a> </div>
            </div>
          </aside>
          <aside id="block_follow" class="block">
            <h3 class="block_title">Follow Us</h3>
            <div class="content">
              <ul>
                <li class="first"><a href="#" class="facebook">Facebook</a></li>
                <li><a href="#" class="flickr">Flickr</a></li>
                <li><a href="#" class="twitter">Twitter</a></li>
                <li><a href="#" class="youtube">YouTube</a></li>
                <li class="last"><a href="#" class="vimeo">Vimeo</a></li>
              </ul>
            </div>
          </aside>
          <aside id="block_web_services" class="block">
            <h3 class="block_title">Web Services</h3>
            <div class="content">
              <ul>
                <li class="first"><a href="#" class="podcasts">Podcasts</a></li>
                <li><a href="#" class="rss">RSS</a></li>
                <li><a href="#" class="mobile">Mobile</a></li>
                <li><a href="#" class="newsletter">Newsletter</a></li>
                <li class="last"><a href="#" class="webcasts">Webcasts</a></li>
              </ul>
            </div>
          </aside>
        </div>
      </div>
      <!-- end right sidebar --> 
    </div>
  </div>
  <div id="scroll_to_top_wrapper">
    <div class="wrapper"><a href="#" id="scroll_to_top">Scroll To Top</a></div>
  </div>
  <!-- footer -->
  <footer>
    <div class="region">
      <div id="block_footer_menu" class="block">
        <nav>
          <ul>
            <li class="first active"><a href="/assets/pms/index.html">Home</a></li>
            <li><a href="/assets/pms/fullwidth.html">Pages</a></li>
            <li><a href="/assets/pms/typography.html">Features</a></li>
            <li><a href="/assets/pms/gallery_3columns.html">Gallery</a></li>
            <li><a href="#">World</a></li>
            <li><a href="#">U.S.</a></li>
            <li><a href="#">Business</a></li>
            <li><a href="#">Sports</a></li>
            <li><a href="#">Entertainment</a></li>
            <li><a href="#">Health</a></li>
            <li><a href="#">Tech</a></li>
            <li><a href="#">Weather</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="/assets/pms/contacts.html">Contacts</a></li>
            <li><a href="/assets/pms/sitemap.html">Site Map</a></li>
          </ul>
        </nav>
      </div>
      <div id="block_copyright" class="block">
        <p>Copyright &copy; 2012 Global News. All rights reserved.</p>
      </div>
    </div>
  </footer>
  <!-- end footer --> 
</div>
</body>
</html>

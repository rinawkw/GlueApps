@extends('layouts.index')
@section('content')
    <section class="ot-section-b wide-article">
        <div class="container">
            <div class="wide-article-container">
                <div class="article-heading">
                    <div class="main-heading">
                        <h2>{{$post->judul}}</h2>
                        <h4>by Zigmars Berzins</h4>
                    </div>
                    <div class="post-meta">
                        <span>1. jule 2015</span> <span><a href="post.html">1 comments</a></span> <span>54 views</span>
                    </div>
                </div>
                <div class="article-image"><img src="/{{$post->foto}}" alt=""></div>
            </div>
        </div>
    </section>
    <!-- article -->
    <section class="ot-section-a">
        <!-- container -->
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="theiaStickySidebar">
                        <div class="content ot-article">
                            <p>
                                {{$post->deskripsi}}
                            </p>
                        </div>
                        {{--<div class="ot-article-tags"><span><i class="fa fa-tags"></i></span><a href="index-grid.html">Street Art</a> <a href="index-grid.html">Fashion</a></div>--}}
                        <div class="ot-next-prev-cont">
                            <div class="ot-prev"><a href="post.html"><span><i class="fa fa-chevron-left"></i>Previous article</span><strong>Is This Outfit a Relationship Deal-Breaker?</strong></a></div>
                            <div class="ot-next"><a href="post.html"><span>Next article<i class="fa fa-chevron-right"></i></span><strong>World's top designers muse on shoes</strong></a></div>
                        </div>
                        {{--<div class="ot-author">--}}
                            {{--<div class="author-image">--}}
                                {{--<img src="images/demo/720x720-2.jpg" alt="">--}}
                            {{--</div>--}}
                            {{--<div class="author-text-body">--}}
                                {{--<h3><a href="index-list.html">Stuart Weitzman</a> <span>Editor in chief</span></h3>--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium. Adipisci accusamus accusantium. Adipisci accusamus accusantium.</p>--}}
                                {{--<div class="author-social">--}}
                                    {{--<a href="http://facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>--}}
                                    {{--<a href="http://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>--}}
                                    {{--<a href="http://instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>--}}
                                    {{--<a href="http://pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a>--}}
                                    {{--<a href="http://plus.google.com/#" target="_blank"><i class="fa fa-google-plus"></i></a>--}}
                                    {{--<a href="http://tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i></a>--}}
                                    {{--<a href="#" target="_blank"><i class="fa fa-rss"></i></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="ot-module">
                            <h4 class="section-title">Comments</h4>
                            <div class="no_comments">
                                <i class="fa fa-comments-o"></i>
                                <div>
                                    <h4>No Comments Yet!</h4>
                                    <p>
                                        You can be first to
                                        <a href="#respond">
                                            comment this post!
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <!--== Comments ==-->
                            <div class="comments">
                                <ul class="comment-list">
                                    <li>
                                        <div class="comment">
                                            <div class="comment-author">
                                                <img src="images/demo/author-1.jpg" alt="Author">
                                                <a href="#" rel="external nofollow" class="comment-author-name">James</a>
                                                <span class="comment-meta">March 17, 2015 at 18:45 AM</span>
                                            </div>
                                            <div class="comment-body">
                                                <p>Maecenas lobortis ante leo, ac rhoncus nisl elementum et. Maecenas lobortis ante leo, ac rhoncus nisl elementum et. Maecenas lobortis ante leo, ac rhoncus nisl elementum et. Maecenas lobortis ante leo, ac rhoncus nisl elementum et. Maecenas lobortis ante leo, ac rhoncus nisl elementum et.</p>
                                                <a href="#" class="comment-reply-link"><i class="fa fa-reply"></i> Reply</a>
                                            </div>
                                        </div>
                                        <ul class="children">
                                            <li>
                                                <div class="comment">
                                                    <div class="comment-author">
                                                        <img src="images/demo/author-1.jpg" alt="Author">
                                                        <a href="#" rel="external nofollow" class="comment-author-name">Amanda</a>
                                                        <span class="comment-meta">March 17, 2015 at 18:45 AM</span>
                                                    </div>
                                                    <div class="comment-body">
                                                        <p>Quis autem vel eum iure reprehenderit qui </p>
                                                        <a href="#" class="comment-reply-link"><i class="fa fa-reply"></i> Reply</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="comment">
                                                    <div class="comment-author">
                                                        <img src="images/demo/author-1.jpg" alt="Author">
                                                        <a href="#" rel="external nofollow" class="comment-author-name">Sarah</a>
                                                        <span class="comment-meta">March 17, 2015 at 18:45 AM</span>
                                                    </div>
                                                    <div class="comment-body">
                                                        <p>Nulla fringilla massa a eros varius laoreet. Nulla fringilla massa a eros varius laoreet. Nulla fringilla massa a eros varius laoreet. Nulla fringilla massa a eros varius laoreet. Nulla fringilla massa a eros varius laoreet.</p>
                                                        <a href="#" class="comment-reply-link"><i class="fa fa-reply"></i> Reply</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="comment">
                                            <div class="comment-author">
                                                <img src="images/demo/author-1.jpg" alt="Author">
                                                <a href="#" rel="external nofollow" class="comment-author-name">Amanda</a>
                                                <span class="comment-meta">March 17, 2015 at 18:45 AM</span>
                                            </div>
                                            <div class="comment-body">
                                                <p>Pellentesque suscipit cursus nibh.</p>
                                                <a href="#" class="comment-reply-link"><i class="fa fa-reply"></i> Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment">
                                            <div class="comment-author">
                                                <img src="images/demo/author-1.jpg" alt="Author">
                                                <a href="#" rel="external nofollow" class="comment-author-name">Casper</a>
                                                <span class="comment-meta">March 17, 2015 at 18:45 AM</span>
                                            </div>
                                            <div class="comment-body">
                                                <p>Cras leo odio, ultrices et aliquam quis</p>
                                                <a href="#" class="comment-reply-link"><i class="fa fa-reply"></i> Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--== Post Reply ==-->
                            <h4 class="main-heading"><span>Post Reply</span></h4>
                            <div class="comment-form-body">
                                <div class="row">
                                    <form class="comment-form" action="http://example.org/">
                                        <div class="col-md-6">
                                            <label for="author">Your name</label>
                                            <input id="author" type="text" placeholder="Your name" name="author">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="email">Email</label>
                                            <input id="email" type="text" placeholder="Email" name="author">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="subject">Subject</label>
                                            <input id="subject" type="text" placeholder="Subject" name="subject">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="comment">Comment</label>
                                            <textarea name="comment" id="comment" cols="35" rows="5"></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <p class="form-submit">
                                                <input name="submit" type="submit" id="submit" class="submit submit-button" value="Post Comment" />
                                                <input type='hidden' name='comment_post_ID' value='2' id='comment_post_ID' />
                                                <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end comments module -->
                    </div>
                    <!-- end theiaStickySidebar -->
                </div>
                <div class="col-md-4">
                    <div class="theiaStickySidebar">
                        <aside class="sidebar">
                            <!-- widget articles section -->
                            <div class="widget-container">
                                <h4 class="section-title"><span>Latest From All Categories</span>Latest News</h4>
                                <!-- article post -->
                                <article class="widget-post">
                                    <div class="post-image">
                                        <a href="post.html"><img src="images/demo/1200x800-10.jpg" alt=""></a>
                                    </div>
                                    <div class="post-body">
                                        <h2><a href="post.html">Make Stories Come Alive with Jodi Harvey-Brown</a></h2>
                                    </div>
                                </article>
                                <!-- end article item -->
                                <!-- article post -->
                                <article class="widget-post">
                                    <div class="post-image">
                                        <a href="post.html"><img src="images/demo/1200x800-11.jpg" alt=""></a>
                                    </div>
                                    <div class="post-body">
                                        <h2><span class="hot">Hot <i class="fa fa-bolt"></i></span><a href="post.html">The View From a Peaceful Villa I Visited</a></h2>
                                    </div>
                                </article>
                                <!-- end article item -->
                                <!-- article post -->
                                <article class="widget-post">
                                    <div class="post-image">
                                        <a href="post.html"><img src="images/demo/1200x800-9.jpg" alt=""></a>
                                    </div>
                                    <div class="post-body">
                                        <h2><a href="post.html">Is This Outfit a Relationship Deal-Breaker?</a></h2>
                                    </div>
                                </article>
                                <!-- end article item -->
                                <!-- article post -->
                                <article class="widget-post">
                                    <div class="post-image">
                                        <a href="post.html"><img src="images/demo/1200x800-12.jpg" alt=""></a>
                                    </div>
                                    <div class="post-body">
                                        <h2><a href="post.html">The View From a Peaceful Villa I Visited</a></h2>
                                    </div>
                                </article>
                                <!-- end article item -->
                            </div>
                            <!-- end widget articles section -->
                            <!-- widget advertisement -->
                            <div class="widget-container widget_tag_cloud">
                                <h4 class="section-title">Advertisement</h4>
                                <img src="images/ad340x550.jpg" alt="" />
                            </div>
                            <!-- end widget advertisement -->
                        </aside>
                    </div>
                    <!-- end theiaStickySidebar -->
                </div>
                <!-- col-md-4 -->
            </div>
            <!-- row -->
            <!-- end main content -->
        </div>
        <!-- container -->
    </section>
@stop
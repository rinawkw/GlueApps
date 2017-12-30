@extends('layouts.index')
@section('content')
    <!-- main content -->
    <section class="ot-section-a">
        <!-- container -->
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="theiaStickySidebar">
                        <div class="content ot-article">
                            <div class="article-image">
                                <img src="images/demo/1200x800-2.jpg" alt="">
                            </div>
                            <h2>About GenBI</h2>
                            <article class="shortcode-content">
                                <blockquote class="style-2">There's a lot of information out there for free, so you've
                                    got to figure out what makes your information different.
                                </blockquote>
                                <div class="paragraph-row">
                                    <div class="column6">
                                        <h4>History</h4>
                                        <p>Pro ridens tibique aliquando cu. Brute novum vocibus ex pro, deleniti
                                            rationibus disputando te quo. Tation electram abhorreant et mei. Ad lucilius
                                            mnesarchum quo. Eum ut cetero dolorem senserit.</p>
                                    </div>
                                    <div class="column6">
                                        <h4>Our Mission</h4>
                                        <p>Pro ridens tibique aliquando cu. Brute novum vocibus ex pro, deleniti
                                            rationibus disputando te quo. Tation electram abhorreant et mei. Ad lucilius
                                            mnesarchum quo. Eum ut cetero dolorem senserit.</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <!-- stickysidebar -->
                </div>
                <div class="col-md-4">
                    <div class="theiaStickySidebar">
                        <aside class="sidebar">
                            <!-- widget reviews style 1 -->
                            <div class="widget-container">
                                <h4 class="section-title"><span>Review Widget #1</span>Latest Reviews</h4>
                                <!-- article post -->
                                <article class="widget-post">
                                    <div class="review-bar-score">
                                        <span class="score">80</span><span class="percent">%</span>
                                    </div>
                                    <div class="post-body">
                                        <h2><a href="post.html">Apple iPhone 4s</a></h2>
                                        <div class="review-bar-bg">
                                            <div class="review-bar" style="width: 80%;"><span>80%</span></div>
                                        </div>
                                    </div>
                                </article>
                                <!-- end article item -->
                                <!-- article post -->
                                <article class="widget-post">
                                    <div class="review-bar-score">
                                        <span class="score">70</span><span class="percent">%</span>
                                    </div>
                                    <div class="post-body">
                                        <h2><a href="post.html">Apple iPhone 6s</a></h2>
                                        <div class="review-bar-bg">
                                            <div class="review-bar" style="width: 70%;"><span>70%</span></div>
                                        </div>
                                    </div>
                                </article>
                                <!-- end article item -->
                                <!-- article post -->
                                <article class="widget-post">
                                    <div class="review-bar-score">
                                        <span class="score">83</span><span class="percent">%</span>
                                    </div>
                                    <div class="post-body">
                                        <h2><a href="post.html">Samsung Galaxy S6</a></h2>
                                        <div class="review-bar-bg">
                                            <div class="review-bar" style="width: 83%;"><span>83%</span></div>
                                        </div>
                                    </div>
                                </article>
                                <!-- end article item -->
                                <!-- article post -->
                                <article class="widget-post">
                                    <div class="review-bar-score">
                                        <span class="score">70</span><span class="percent">%</span>
                                    </div>
                                    <div class="post-body">
                                        <h2><a href="post.html">Apple iPhone 6s</a></h2>
                                        <div class="review-bar-bg">
                                            <div class="review-bar" style="width: 70%;"><span>70%</span></div>
                                        </div>
                                    </div>
                                </article>
                                <!-- end article item -->
                            </div>
                            <!-- end widget reviews style 1 -->
                            <!-- widget advertisement -->
                            <div class="widget-container">
                                <h4 class="section-title">Advertisement</h4>
                                <img src="images/banner-300x250.png" alt=""/>
                            </div>
                            <!-- end widget advertisement -->
                            <!-- widget tag cloud -->
                            <div class="widget-container widget_tag_cloud">
                                <h4 class="section-title">TAGS</h4>
                                <div class="tag_item"><a href='category.html' title='Fashion'>Fashion</a><span>34</span>
                                </div>
                                <div class="tag_item"><a href='category.html' title='Fashion'>Outfit</a><span>54</span>
                                </div>
                                <div class="tag_item"><a href='category.html' title='Fashion'>Creative</a><span>2</span>
                                </div>
                                <div class="tag_item"><a href='category.html'
                                                         title='Fashion'>Adventures</a><span>76</span></div>
                                <div class="tag_item"><a href='category.html'
                                                         title='Fashion'>Computers</a><span>134</span></div>
                                <div class="tag_item"><a href='category.html' title='Fashion'>Fashion</a><span>34</span>
                                </div>
                                <div class="tag_item"><a href='category.html' title='Fashion'>Outfit</a><span>4</span>
                                </div>
                                <div class="tag_item"><a href='category.html' title='Fashion'>Creative</a><span>2</span>
                                </div>
                                <div class="tag_item"><a href='category.html'
                                                         title='Fashion'>Adventures</a><span>67</span></div>
                                <div class="tag_item"><a href='category.html'
                                                         title='Fashion'>Computers</a><span>5</span></div>
                            </div>
                            <!-- end widget tag cloud -->
                            <!-- widget calendar -->
                            <div class="widget-container">
                                <h4 class="section-title">Calendar</h4>
                                <div id="calendar_wrap">
                                    <table id="wp-calendar">
                                        <caption>April 2015</caption>
                                        <thead>
                                        <tr>
                                            <th scope="col" title="Monday">M</th>
                                            <th scope="col" title="Tuesday">T</th>
                                            <th scope="col" title="Wednesday">W</th>
                                            <th scope="col" title="Thursday">T</th>
                                            <th scope="col" title="Friday">F</th>
                                            <th scope="col" title="Saturday">S</th>
                                            <th scope="col" title="Sunday">S</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <td colspan="3" id="prev"><a
                                                        href="http://orange-themes.com/testiem/2014/01/">&laquo; Jan</a>
                                            </td>
                                            <td class="pad">&nbsp;</td>
                                            <td colspan="3" id="next" class="pad">&nbsp;</td>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        <tr>
                                            <td colspan="2" class="pad">&nbsp;</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>7</td>
                                            <td>8</td>
                                            <td>9</td>
                                            <td>10</td>
                                            <td>11</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>14</td>
                                            <td>15</td>
                                            <td>16</td>
                                            <td>17</td>
                                            <td>18</td>
                                            <td>19</td>
                                        </tr>
                                        <tr>
                                            <td id="today">20</td>
                                            <td>21</td>
                                            <td>22</td>
                                            <td>23</td>
                                            <td>24</td>
                                            <td>25</td>
                                            <td>26</td>
                                        </tr>
                                        <tr>
                                            <td>27</td>
                                            <td>28</td>
                                            <td>29</td>
                                            <td>30</td>
                                            <td class="pad" colspan="3">&nbsp;</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end widget calendar -->
                        </aside>
                    </div>
                    <!-- theiaStickysidebar -->
                </div>
                <!-- col-md-4 -->
            </div>
            <!-- row -->
            <!-- end main content -->
        </div>
        <!-- container -->
    </section>
@stop
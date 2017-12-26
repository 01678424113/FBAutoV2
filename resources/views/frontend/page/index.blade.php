@extends('frontend.layout')
@section('contend')
    <section id="content">
        <div class="page dashboard-page">
            <!-- bradcome -->
            <div class="b-b mb-20">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <h1 class="h3 m-0">Dashboard</h1>
                        <small class="text-muted">Welcome to Falcon application</small>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                    <div class="boxs top_report_chart l-blue">
                        <div class="boxs-body">
                            <h3 class="mt-0">52.3 Gb</h3>
                            <p>Traffic this month</p>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="3"
                             data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                             data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)"
                             data-spot-Color="rgb(0, 188, 212)"
                             data-offset="90" data-width="100%" data-height="60px" data-line-Width="2"
                             data-line-Color="rgba(255, 255, 255, 0.2)"
                             data-fill-Color="rgba(255, 255, 255, 0.3)"> 7,6,7,8,5,9,8,6,7
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                    <div class="boxs top_report_chart l-parpl">
                        <div class="boxs-body">
                            <h3 class="mt-0">31.8%</h3>
                            <p>Server Load</p>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="3"
                             data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                             data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)"
                             data-spot-Color="rgb(0, 188, 212)"
                             data-offset="90" data-width="100%" data-height="60px" data-line-Width="2"
                             data-line-Color="rgba(255, 255, 255, 0.2)"
                             data-fill-Color="rgba(255, 255, 255, 0.3)"> 6,5,7,4,5,3,8,6,5
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                    <div class="boxs top_report_chart l-seagreen">
                        <div class="boxs-body">
                            <h3 class="mt-0">$ 21,501</h3>
                            <p>Total Sale</p>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="3"
                             data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                             data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)"
                             data-spot-Color="rgb(0, 188, 212)"
                             data-offset="90" data-width="100%" data-height="60px" data-line-Width="2"
                             data-line-Color="rgba(255, 255, 255, 0.2)"
                             data-fill-Color="rgba(255, 255, 255, 0.3)"> 8,7,7,5,5,4,8,7,5
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                    <div class="boxs top_report_chart l-amber">
                        <div class="boxs-body">
                            <h3 class="mt-0">1,195</h3>
                            <p>Total Feedbacks</p>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="3"
                             data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                             data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)"
                             data-spot-Color="rgb(0, 188, 212)"
                             data-offset="90" data-width="100%" data-height="60px" data-line-Width="2"
                             data-line-Color="rgba(255, 255, 255, 0.2)"
                             data-fill-Color="rgba(255, 255, 255, 0.3)"> 7,6,7,8,5,9,8,6,7
                        </div>
                    </div>
                </div>
            </div>
            {{--Social--}}
            <div class="row clearfix">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="boxs mini-social">
                        <div class="boxs-body">
                            <div class="s-icon">
                                <i class="fa fa-facebook"></i>
                            </div>
                            <div class="s-detail">
                                <div class="like"><span>40K</span></div>
                                <span>Likes</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="boxs mini-social">
                        <div class="boxs-body">
                            <div class="s-icon">
                                <i class="fa fa-twitter"></i>
                            </div>
                            <div class="s-detail">
                                <div class="like"><span>2,150</span></div>
                                <span>Twit</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="boxs mini-social">
                        <div class="boxs-body">
                            <div class="s-icon">
                                <i class="fa fa-instagram"></i>
                            </div>
                            <div class="s-detail">
                                <div class="like"><span>12K</span></div>
                                <span>Followers</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="boxs mini-social">
                        <div class="boxs-body">
                            <div class="s-icon">
                                <i class="fa fa-youtube"></i>
                            </div>
                            <div class="s-detail">
                                <div class="like"><span>15,915</span></div>
                                <span>views</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--End social--}}
            {{--Member--}}
            <div class="row clearfix">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <section class="boxs">
                        <div class="boxs-header">
                            <h3 class="custom-font hb-blue">
                                <strong>Members </strong>Profiles</h3>
                            <ul class="controls">
                                <li class="dropdown">
                                    <a role="button" tabindex="0" class="dropdown-toggle settings"
                                       data-toggle="dropdown">
                                        <i class="fa fa-cog"></i>
                                        <i class="fa fa-spinner fa-spin"></i>
                                    </a>
                                    <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                        <li>
                                            <a role="button" tabindex="0" class="boxs-toggle">
                                                    <span class="minimize">
                                                        <i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                                <span class="expand">
                                                        <i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a role="button" tabindex="0" class="boxs-refresh">
                                                <i class="fa fa-refresh"></i> Refresh </a>
                                        </li>
                                        <li>
                                            <a role="button" tabindex="0" class="boxs-fullscreen">
                                                <i class="fa fa-expand"></i> Fullscreen </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" tabindex="0" class="boxs-close">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="boxs-body">
                            <div class="body table-responsive members_profiles">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th style="width:60px;">Member</th>
                                        <th>Name</th>
                                        <th>Earnings</th>
                                        <th>Sales</th>
                                        <th>Reviews</th>
                                        <th class="hidden-md hidden-sm">Progress</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <img class="rounded-circle" src="assets/images/xs/avatar1.jpg" alt="user"
                                                 width="40"></td>
                                        <td>
                                            <a href="javascript:;">Logan</a>
                                        </td>
                                        <td>$420</td>
                                        <td>23</td>
                                        <td>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </td>
                                        <td class="hidden-md hidden-sm">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar"
                                                     aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"
                                                     style="width: 87%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="rounded-circle" src="assets/images/xs/avatar2.jpg" alt="user"
                                                 width="40"></td>
                                        <td>
                                            <a href="javascript:;">Isabella</a>
                                        </td>
                                        <td>$350</td>
                                        <td>16</td>
                                        <td>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </td>
                                        <td class="hidden-md hidden-sm">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-warning" role="progressbar"
                                                     aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"
                                                     style="width: 68%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="rounded-circle" src="assets/images/xs/avatar3.jpg" alt="user"
                                                 width="40"></td>
                                        <td>
                                            <a href="javascript:;">Jackson</a>
                                        </td>
                                        <td>$201</td>
                                        <td>11</td>
                                        <td>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </td>
                                        <td class="hidden-md hidden-sm">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger" role="progressbar"
                                                     aria-valuenow="32" aria-valuemin="0" aria-valuemax="100"
                                                     style="width:32%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="rounded-circle" src="assets/images/xs/avatar4.jpg" alt="user"
                                                 width="40"></td>
                                        <td>
                                            <a href="javascript:;">Victoria</a>
                                        </td>
                                        <td>$651</td>
                                        <td>28</td>
                                        <td>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </td>
                                        <td class="hidden-md hidden-sm">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar"
                                                     aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                                                     style="width: 90%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="rounded-circle" src="assets/images/xs/avatar5.jpg" alt="user"
                                                 width="40"></td>
                                        <td>
                                            <a href="javascript:;">Lucas</a>
                                        </td>
                                        <td>$300</td>
                                        <td>20</td>
                                        <td>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </td>
                                        <td class="hidden-md hidden-sm">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-info" role="progressbar"
                                                     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                                     style="width: 50%;"></div>
                                            </div>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <section class="boxs">
                        <div class="boxs-header">
                            <h3 class="custom-font hb-cyan">
                                <strong>Feeds </strong></h3>
                            <ul class="controls">
                                <li class="dropdown">
                                    <a role="button" tabindex="0" class="dropdown-toggle settings"
                                       data-toggle="dropdown">
                                        <i class="fa fa-cog"></i>
                                        <i class="fa fa-spinner fa-spin"></i>
                                    </a>
                                    <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                        <li>
                                            <a role="button" tabindex="0" class="boxs-toggle">
                                                    <span class="minimize">
                                                        <i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                                <span class="expand">
                                                        <i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a role="button" tabindex="0" class="boxs-refresh">
                                                <i class="fa fa-refresh"></i> Refresh </a>
                                        </li>
                                        <li>
                                            <a role="button" tabindex="0" class="boxs-fullscreen">
                                                <i class="fa fa-expand"></i> Fullscreen </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" tabindex="0" class="boxs-close">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="boxs-body">
                            <ul class="media-list feeds_widget m-0">
                                <li class="media">
                                    <div class="media-img"><i class="fa fa-thumbs-o-up"></i></div>
                                    <div class="media-body">
                                        <div class="media-heading">7 New Feedback
                                            <small class="pull-right text-muted">Today</small>
                                        </div>
                                        <small>It is a long established fact that a reader will be distracted</small>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-img"><i class="fa fa-user"></i></div>
                                    <div class="media-body">
                                        <div class="media-heading">New customer
                                            <small class="pull-right text-muted">10:45</small>
                                        </div>
                                        <small>Contrary to popular belief, Lorem Ipsum is not simply</small>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-img"><i class="fa fa-info-circle"></i></div>
                                    <div class="media-body">
                                        <div class="media-heading text-warning">Server Warning
                                            <small class="pull-right text-muted">10:50</small>
                                        </div>
                                        <small>Lorem Ipsum is simply dummy text.</small>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-img"><i class="fa fa-check"></i></div>
                                    <div class="media-body">
                                        <div class="media-heading text-success">Issue fixed
                                            <small class="pull-right text-muted">11:05</small>
                                        </div>
                                        <small>Lorem Ipsum is simply dummy text.</small>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-img"><i class="fa fa-shopping-cart"></i></div>
                                    <div class="media-body">
                                        <div class="media-heading">7 New orders
                                            <small class="pull-right text-muted">11:35</small>
                                        </div>
                                        <small>There are many variations of passages of Lorem Ipsum</small>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
            {{--End member--}}
        </div>
    </section>
@endsection

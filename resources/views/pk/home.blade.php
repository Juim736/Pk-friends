@include('pk.includes.header')

    <div class="clearfix"></div>
    <div class="inner_content">
        <!-- /inner_content_w3_agile_info-->
        <div class="inner_content_w3_agile_info">
            <!-- /agile_top_w3_grids-->
            <div class="agile_top_w3_grids">
                <ul class="ca-menu">
                    <li>
                        <a href="{{url('education/education')}}">

                            <!-- <i class="fa fa-building-o" aria-hidden="true"></i> -->
                            <i><img src="{{asset('/pk/')}}/images/education1.jpg" class="img-circle" alt="Image"
                                    style="height: 160px;width: 160px;"></i>
                            <div class="ca-content">
                                <!-- <h4 class="ca-main">16,808</h4> -->
                                <h3 class="ca-sub">Education</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('medical/medical-care')}}">
                            <!-- <i class="fa fa-ambulance" aria-hidden="true"></i> -->
                            <i><img src="{{asset('/pk/')}}/images/medicalc1.jpg" class="img-circle" alt="Image"
                                    style="height: 160px;width: 160px;"></i>
                            <div class="ca-content">
                                <!-- <h4 class="ca-main one">26,808</h4> -->
                                <h3 class="ca-sub one">Medical Care</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('emergency/emergency')}}">
                            <!-- <i class="fa fa-database" aria-hidden="true"></i> -->
                            <i><img src="{{asset('/pk/')}}/images/various.jpg" class="img-circle" alt="Image"
                                    style="height: 160px;width: 160px;"></i>
                            <div class="ca-content">
                                <!-- <h4 class="ca-main two">29,008</h4> -->
                                <h3 class="ca-sub two">Emergency</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('pkteam/pkteam')}}">
                            <!-- <i class="fa fa-tasks" aria-hidden="true"></i> -->
                            <i><img src="{{asset('/pk/')}}/images/phychologi.jpg" class="img-circle" alt="Image"
                                    style="height: 160px;width: 160px;"></i>

                            <div class="ca-content">
                                <!-- <h4 class="ca-main three">49,436</h4> -->
                                <h3 class="ca-sub three">Psychologist</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('blood/blood')}}">
                            <!-- <i class="fa fa-database" aria-hidden="true" style="color: red"></i> -->
                            <i><img src="{{asset('/pk/')}}/images/bloodbank.jpg" class="img-circle" alt="Image"
                                    style="height: 140px;width: 140px;"></i>
                            <div class="ca-content">
                                <!-- <h4 class="ca-main four">30,808</h4> -->
                                <h3 class="ca-sub four">Pk Blood Bank</h3>
                            </div>
                        </a>
                    </li>
                    <div class="clearfix"></div>
                </ul>
            </div>

            <div class="w3ls_agile_circle_progress agile_info_shadow">

                <div class="cir_agile_info ">
                    <h3 class="w3_inner_tittle">Event and Seminar</h3>
                    <div class="skill-grids">
                        <div class="skills-grid text-center">
                            <a href="{{url('/upcomming-seminar')}}">
                                <div class="circle" id="circles-1"></div>
                                <p>Upcomming Event</p></a>
                        </div>


                        <div class="skills-grid text-center">
                            <a href="{{url('/recent-event')}}">
                                <div class="circle" id="circles-2"></div>
                                <p>Recent Event</p></a>
                        </div>
                        <div class="skills-grid text-center">
                            <a href="{{url('/feedback-event')}}">
                                <div class="circle" id="circles-3"></div>

                                <p>Feedback of Event</p>
                            </a>
                        </div>
                        <div class="skills-grid text-center">
                            <a href="" data-toggle="modal" data-target="#myModal">
                                <div class="circle" id="circles-4"></div>
                                <p>Create Event</p></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <!-- //agile_top_w3_grids-->
            <!-- /agile_top_w3_post_sections-->
            <div class="agile_top_w3_post_sections">
                <div class="col-md-6 agile_top_w3_post agile_info_shadow">
                    <div class="img_wthee_post">
                        <h3 class="w3_inner_tittle">Latest Report</h3>
                        <div class="stats-wrap">
                            <div class="count_info"><h4 class="count">65,800,587 </h4><span
                                        class="year">Total Companies</span></div>
                            <div class="year-info"><p class="text-no">20 </p><span class="year">This Year</span></div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="stats-wrap">
                            <div class="count_info"><h4 class="count">2,690 </h4><span
                                        class="year">Total Companies</span></div>
                            <div class="year-info"><p class="text-no">40 </p><span class="year">This Month</span></div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="stats-wrap">
                            <div class="count_info"><h4 class="count">24,660 </h4><span
                                        class="year">Total Companies</span></div>
                            <div class="year-info"><p class="text-no">30 </p><span class="year">This Week</span></div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="stats-wrap">
                            <div class="count_info"><h4 class="count">1,204</h4><span
                                        class="year">Total Companies</span></div>
                            <div class="year-info"><p class="text-no">10 </p><span class="year">This Day</span></div>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 agile_top_w3_post_info agile_info_shadow">
                    <div class="img_wthee_post1">
                        <h3 class="w3_inner_tittle"> Flip Clock</h3>
                        <div class="main-example">
                            <div class="clock"></div>
                            <div class="message"></div>

                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="w3ls_agile_cylinder chart agile_info_shadow">
                <h3 class="w3_inner_tittle two"> Union Progress Chart</h3>

                <div id="chartdiv"></div>
            </div>

            <div class="prograc-blocks_agileits">
                <div class="col-md-6 bars_agileits agile_info_shadow">
                    <h3 class="w3_inner_tittle two">Project Progress</h3>
                    <div class='bar_group'>
                        <div class='bar_group__bar thin' label='Rating' show_values='true' tooltip='true'
                             value='343'></div>
                        <div class='bar_group__bar thin' label='Quality' show_values='true' tooltip='true'
                             value='235'></div>
                        <div class='bar_group__bar thin' label='Amount' show_values='true' tooltip='true'
                             value='550'></div>
                        <div class='bar_group__bar thin' label='Farming' show_values='true' tooltip='true'
                             value='456'></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 fallowers_agile agile_info_shadow">
                <h3 class="w3_inner_tittle two">Recent Project</h3>
                <div class="work-progres">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Project</th>
                                <th>Manager</th>

                                <th>Status</th>
                                <th>Progress</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Face book</td>
                                <td>Malorum</td>

                                <td><span class="label label-danger">in progress</span></td>
                                <td><span class="badge badge-info">50%</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Twitter</td>
                                <td>Evan</td>

                                <td><span class="label label-success">completed</span></td>
                                <td><span class="badge badge-success">100%</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Google</td>
                                <td>John</td>

                                <td><span class="label label-warning">in progress</span></td>
                                <td><span class="badge badge-warning">75%</span></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>LinkedIn</td>
                                <td>Danial</td>

                                <td><span class="label label-info">in progress</span></td>
                                <td><span class="badge badge-info">65%</span></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Tumblr</td>
                                <td>David</td>

                                <td><span class="label label-warning">in progress</span></td>
                                <td><span class="badge badge-danger">95%</span></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Tesla</td>
                                <td>Mickey</td>

                                <td><span class="label label-info">in progress</span></td>
                                <td><span class="badge badge-success">95%</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>


            <!--//prograc-blocks_agileits-->
            <!-- /bottom_agileits_grids-->
            <div class="bottom_agileits_grids">
                <div class="col-md-4 profile-main">
                    <div class="profile_bg_agile">
                        <div class="profile-pic wthree">
                            <h2>MR JIM</h2>
                            <img src="{{asset('/pk/')}}/images/profile.jpg" alt="Image">
                            <p>Software Engineer</p>
                            <p>Pk Friends</p>
                        </div>
                        <div class="profile-ser">
                            <div class="follow-grids-agileits-w3layouts">
                                <div class="profile-ser-grids">
                                    <h3>Followers</h3>
                                    <h4>2486</h4>
                                </div>
                                <div class="profile-ser-grids agileinfo">
                                    <h3>Following</h3>
                                    <h4>1582</h4>
                                </div>
                                <div class="profile-ser-grids no-border">
                                    <h3>Tweets</h3>
                                    <h4>1468</h4>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="w3l_social_icons w3l_social_icons1">
                                <ul>
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"
                                                                        aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#" class="google_plus"><i class="fa fa-google-plus"
                                                                           aria-hidden="true"></i></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-8 chart_agile agile_info_shadow">
                    <h3 class="w3_inner_tittle two">Programme and Seminar </h3>
                    <div id="chartdiv1"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- //bottom_agileits_grids-->
            <!-- /weather_w3_agile_info-->
            <div class="weather_w3_agile_info agile_info_shadow">
                <div class="weather_w3_inner_info">

                    <div class="over_lay_agile">
                        <h3 class="w3_inner_tittle">Weather Report</h3>
                        <ul>
                            <li>
                                <figure class="icons">
                                    <canvas id="partly-cloudy-day" width="60" height="60"></canvas>
                                </figure>
                                <h3>25 °C</h3>
                                <div class="clearfix"></div>
                            </li>
                            <li>
                                <figure class="icons">
                                    <canvas id="clear-day" width="60" height="60"></canvas>
                                </figure>
                                <div class="weather-text">
                                    <h4>WED</h4>
                                    <h5>27 °C</h5>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li>
                                <figure class="icons">
                                    <canvas id="snow" width="60" height="60"></canvas>
                                </figure>
                                <div class="weather-text">
                                    <h4>THU</h4>
                                    <h5>13 °C</h5>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li>
                                <figure class="icons">
                                    <canvas id="partly-cloudy-night" width="60" height="60"></canvas>
                                </figure>
                                <div class="weather-text">
                                    <h4>FRI</h4>
                                    <h5>18 °C</h5>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li>
                                <figure class="icons">
                                    <canvas id="cloudy" width="60" height="60"></canvas>
                                </figure>
                                <div class="weather-text">
                                    <h4>SAT</h4>
                                    <h5>15 °C</h5>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li>
                                <figure class="icons">
                                    <canvas id="fog" width="60" height="60"></canvas>
                                </figure>
                                <div class="weather-text">
                                    <h4>SUN</h4>
                                    <h5>11 °C</h5>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('pk.includes.footer')
						 
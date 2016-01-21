<?php 
    require 'header.php';
 ?>

    <!-- Page Content -->
    <div class="container">

        <?php require 'breadcrumbs.php' ?>

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-2">
            
            </div>
            
            <div class="col-md-8">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="<?php echo $imgUrl; ?>" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="http://placehold.it/750x500" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="http://placehold.it/750x500" alt="">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>

            <div class="col-md-2">
                <!-- <h3>Project Description</h3>
                <ul>
                    <li>建校时间：<?php echo @$year; ?></li>
                    <li>Dolor Sit Amet<?php echo @$university; ?></li>
                    <li>Consectetur</li>
                    <li>Adipiscing Elit</li>
                    <li>Lorem Ipsum</li>
                    <li>Dolor Sit Amet</li>
                    <li>Consectetur</li>
                    <li>Adipiscing Elit</li>
                    <li>Lorem Ipsum</li>
                    <li>Dolor Sit Amet</li>
                    <li>Consectetur</li>
                    <li>Adipiscing Elit</li>
                    <li>Lorem Ipsum</li>
                    <li>Dolor Sit Amet</li>
                    <li>Consectetur</li>
                    <li>Adipiscing Elit</li>
                    <li>Consectetur</li>
                    <li>Adipiscing Elit</li>

                </ul> -->
            </div>

        </div>
        <!-- /.row -->

        <!-- School advantages -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">学校优势</h3>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <p><?php echo @$ad1; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-car fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <p><?php echo @$ad2; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-support fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <p><?php echo @$ad3; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-database fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <p><?php echo @$ad4; ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service Tabs -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">学校简介</h3>
            </div>
            <div class="col-lg-12">

                <ul id="myTab" class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-tree"></i> 学校概况 </a>
                    </li>
                    <li class=""><a href="#service-two" data-toggle="tab"><i class="fa fa-car"></i> 学校简介 </a>
                    </li>
                    <li class=""><a href="#service-three" data-toggle="tab"><i class="fa fa-support"></i> 课程设置 </a>
                    </li>
                    <li class=""><a href="#service-four" data-toggle="tab"><i class="fa fa-database"></i> 毕业生去向 </a>
                    </li>
                </ul>

                <hr style="border-top:none;">
                
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="service-one">
                        <div class="col-md-4">
                            <div class="media">
                                <div class="pull-left">
                                    <span class="fa-stack fa-1x">
                                          <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                          <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
                                    </span> 
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">建校时间</h4>
                                    <p><?php echo @$year; ?></p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <span class="fa-stack fa-1x">
                                          <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                          <i class="fa fa-car fa-stack-1x fa-inverse"></i>
                                    </span> 
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">学校认证</h4>
                                    <p><?php echo @$identify; ?></p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <span class="fa-stack fa-1x">
                                          <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                          <i class="fa fa-support fa-stack-1x fa-inverse"></i>
                                    </span> 
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">校址</h4>
                                    <p><?php echo @$address; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="media">
                                <div class="pull-left">
                                    <span class="fa-stack fa-1x">
                                          <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                          <i class="fa fa-database fa-stack-1x fa-inverse"></i>
                                    </span> 
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">城市气候</h4>
                                    <p><?php echo @$weather; ?></p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <span class="fa-stack fa-1x">
                                          <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                          <i class="fa fa-bomb fa-stack-1x fa-inverse"></i>
                                    </span> 
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">附近大学</h4>
                                    <p><?php echo @$university; ?></p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <span class="fa-stack fa-1x">
                                          <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                          <i class="fa fa-bank fa-stack-1x fa-inverse"></i>
                                    </span> 
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">学校性质</h4>
                                    <p><?php echo @$type; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="media">
                                <div class="pull-left">
                                    <span class="fa-stack fa-1x">
                                          <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                          <i class="fa fa-paper-plane fa-stack-1x fa-inverse"></i>
                                    </span> 
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">占地面积</h4>
                                    <p><?php echo @$area; ?></p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <span class="fa-stack fa-1x">
                                          <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                          <i class="fa fa-space-shuttle fa-stack-1x fa-inverse"></i>
                                    </span> 
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">年级设置</h4>
                                    <p><?php echo @$gradeSetup; ?></p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <span class="fa-stack fa-1x">
                                          <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                          <i class="fa fa-recycle fa-stack-1x fa-inverse"></i>
                                    </span> 
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">开放申请年级</h4>
                                    <p><?php echo @$gradeOpen; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="tab-pane fade" id="service-two">
                        <div class="col-md-4">
                            <div class="media">
                                <div class="pull-left">
                                    <span class="fa-stack fa-1x">
                                          <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                          <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
                                    </span> 
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">学校人数</h4>
                                    <p><?php echo @$studentNumber; ?></p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <span class="fa-stack fa-1x">
                                          <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                          <i class="fa fa-car fa-stack-1x fa-inverse"></i>
                                    </span> 
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">国际学生人数</h4>
                                    <p><?php echo @$intlNumber; ?></p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <span class="fa-stack fa-1x">
                                          <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                          <i class="fa fa-support fa-stack-1x fa-inverse"></i>
                                    </span> 
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">师生比例</h4>
                                    <p><?php echo @$ratio; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="media">
                                <div class="pull-left">
                                    <span class="fa-stack fa-1x">
                                          <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                          <i class="fa fa-database fa-stack-1x fa-inverse"></i>
                                    </span> 
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">平均每班人数</h4>
                                    <p><?php echo @$avgNumber; ?></p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <span class="fa-stack fa-1x">
                                          <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                          <i class="fa fa-bomb fa-stack-1x fa-inverse"></i>
                                    </span> 
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">SAT平均分</h4>
                                    <p><?php echo @$sat; ?></p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <span class="fa-stack fa-1x">
                                          <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                          <i class="fa fa-bank fa-stack-1x fa-inverse"></i>
                                    </span> 
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">学校教师资质</h4>
                                    <p><?php echo @$teacher; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="media">
                                <div class="pull-left">
                                    <span class="fa-stack fa-1x">
                                          <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                          <i class="fa fa-paper-plane fa-stack-1x fa-inverse"></i>
                                    </span> 
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">学生种族</h4>
                                    <p><?php echo @$race; ?></p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <span class="fa-stack fa-1x">
                                          <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                          <i class="fa fa-space-shuttle fa-stack-1x fa-inverse"></i>
                                    </span> 
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">ESL课程</h4>
                                    <p><?php echo @$esl; ?></p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <span class="fa-stack fa-1x">
                                          <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                          <i class="fa fa-recycle fa-stack-1x fa-inverse"></i>
                                    </span> 
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">住宿方式</h4>
                                    <p><?php echo @$homestay; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    


                    <div class="tab-pane fade" id="service-three">
                        <h4>课程设置</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                    </div>
                    <div class="tab-pane fade" id="service-four">
                        <h4>毕业生走向</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Service List -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Service List</h2>
            </div>
            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
                        </span> 
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Service One</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-car fa-stack-1x fa-inverse"></i>
                        </span> 
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Service Two</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-support fa-stack-1x fa-inverse"></i>
                        </span> 
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Service Three</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-database fa-stack-1x fa-inverse"></i>
                        </span> 
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Service Four</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-bomb fa-stack-1x fa-inverse"></i>
                        </span> 
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Service Five</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-bank fa-stack-1x fa-inverse"></i>
                        </span> 
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Service Six</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-paper-plane fa-stack-1x fa-inverse"></i>
                        </span> 
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Service Seven</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-space-shuttle fa-stack-1x fa-inverse"></i>
                        </span> 
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Service Eight</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-recycle fa-stack-1x fa-inverse"></i>
                        </span> 
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Service Nine</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Contact us Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-success btn-block" href="#">联系我们</a>
                </div>
            </div>
        </div>

<?php 
    require 'footer.php';
 ?>
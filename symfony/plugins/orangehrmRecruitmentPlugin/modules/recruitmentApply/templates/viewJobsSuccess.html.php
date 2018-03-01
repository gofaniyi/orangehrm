

    
    <link href="<?php echo theme_path('assets/css/app.min.css')?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo theme_path('assets/css/thejobs.css')?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo theme_path('assets/css/custom.css')?>" rel="stylesheet" type="text/css"/>

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>


  <body class="nav-on-header smart-nav">

    <!-- Navigation bar -->
    <nav class="navbar">
      <div class="container">

        <!-- Logo -->
        <div class="pull-left">
          <a class="navbar-toggle" href="#" data-toggle="offcanvas"><i class="ti-menu"></i></a>

          <div class="logo-wrapper">
            <a class="logo" href="index.html"><img src="<?php echo theme_path('assets/img/logo.png')?>" alt="logo"></a>
            <a class="logo-alt" href="index.html"><img src="<?php echo theme_path('assets/img/logo-alt.png')?>" alt="logo-alt"></a>
          </div>

        </div>
        <!-- END Logo -->

      </div>
    </nav>
    <!-- END Navigation bar -->


    <!-- Site header -->
    <header class="site-header size-lg text-center" style="background-image: url(<?php echo theme_path('assets/img/bg-banner1.jpg')?>)">
      <div class="container">
        <div class="col-xs-12">
          <br><br>
          <h2><?php echo __('We offer'); ?> <mark><?php echo __('1,259'); ?></mark> <?php echo __('job vacancies right now!'); ?></h2>
          <h5 class="font-alt"><?php echo __('Find your desire one in a minute '); ?></h5>
          <br><br><br>
        </div>

      </div>
    </header>
    <!-- END Site header -->


    <!-- Main container -->
    <main>



      <!-- Recent jobs -->
      <section>
        <div class="container">
          <header class="section-header">
            <span><?php echo __('Latest'); ?></span>
            <h2><?php echo __('Recent Jobs'); ?></h2>
          </header>

          <div class="row item-blocks-connected">

            <?php if (count($publishedVacancies) != 0): ?>   

                <?php foreach ($publishedVacancies as $vacancy): ?>

                    <!-- Job item -->
                    <div class="col-xs-12">
                      <a class="item-block" target="_blank" href="<?php echo public_path('index.php/recruitmentApply/applyVacancy/id/' . $vacancy->getId(), true); ?>">
                        <header>
                          <div class="hgroup">
                            <h4><?php echo $vacancy->getName(); ?></h4>
                            <h5><?php echo __('Engineering Department'); ?></h5>
                          </div>
                          <div class="header-meta">
                            <span class="location"><?php echo __('Lagos, NG.'); ?></span>
                            <span class="label label-success"><?php echo __('Full-time'); ?></span>
                          </div>
                        </header>
                      </a>
                    </div>
                    <!-- END Job item -->
                <?php endforeach; ?>


          </div>

          <br><br>
          <p class="text-center"><a class="btn btn-info" href="job-list.html">Browse all jobs</a></p>

          <?php else: ?>
                <span class="noVacanciesMessage"><?php echo __('No active job vacancies to display'); ?></span>
            <?php endif; ?>
        </div>
      </section>
      <!-- END Recent jobs -->


      <!-- Categories -->
      <section class="bg-alt">
        <div class="container">
          <header class="section-header">
            <span><?php echo __('Categories'); ?></span>
            <h2>Popular categories</h2>
            <p>Here's the most popular categories</p>
          </header>

          <?php if (count($jobCategories) != 0): ?>   

            <?php foreach ($jobCategories as $category): ?>

              <div class="category-grid">
                <a href="#">
                  <i class="fa fa-laptop"></i>
                  <h6><?php echo $category->getName(); ?></h6>
                </a>
              </div>
            <?php endforeach; ?>

        <?php else: ?>
            <span class="noVacanciesMessage"><?php echo __('No popular categories'); ?></span>
        <?php endif; ?>


           <!--  <a href="job-list-2.html">
              <i class="fa fa-line-chart"></i>
              <h6>Accounting</h6>
              <p>Finance, Tax service, Payroll manager, Book keeper, Human resource</p>
            </a>

            <a href="job-list-3.html">
              <i class="fa fa-medkit"></i>
              <h6>Medical</h6>
              <p>Doctor, Nurse, Hospotal, Dental service, Massagist</p>
            </a>

            <a href="job-list-1.html">
              <i class="fa fa-cutlery"></i>
              <h6>Food</h6>
              <p>Restaurant, Food service, Coffe shop, Cashier, Waitress</p>
            </a>

            <a href="job-list-2.html">
              <i class="fa fa-newspaper-o"></i>
              <h6>Media</h6>
              <p>Journalism, Newspaper, Reporter, Writer, Cameraman</p>
            </a>

            <a href="job-list-3.html">
              <i class="fa fa-institution"></i>
              <h6>Government</h6>
              <p>Federal, Law, Human resource, Manager, Biologist</p>
            </a> 
          </div> -->

        </div>
      </section>
      <!-- END Categories -->


      <!-- Newsletter -->
      <section class="bg-img text-center" style="background-image: url(assets/img/bg-facts.jpg)">
        <div class="container">
          <h2><strong>Subscribe</strong></h2>
          <h6 class="font-alt">Get weekly top new jobs delivered to your inbox</h6>
          <br><br>
          <form class="form-subscribe" action="#">
            <div class="input-group">
              <input type="text" class="form-control input-lg" placeholder="Your eamil address">
              <span class="input-group-btn">
                <button class="btn btn-success btn-lg" type="submit">Subscribe</button>
              </span>
            </div>
          </form>
        </div>
      </section>
      <!-- END Newsletter -->


    </main>
    <!-- END Main container -->


    <!-- Site footer -->
    <footer class="site-footer">

      <!-- Top section -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6><?php echo __('About Page'); ?></h6>
            <p class="text-justify"><?php echo __('This page was built as an enhancement to OrangeHRM Opensource Project'); ?></p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6><?php echo __('Quick Links'); ?></h6>
            <ul class="footer-links">
              <li><a href="<?php echo public_path('index.php/dashboard', true); ?>"><?php echo __('Dashboard'); ?></a></li>
              <li><a href="<?php echo public_path('index.php/directory/viewDirectory/reset/1', true); ?>"><?php echo __('Directory'); ?></a></li>
              <li><a href="<?php echo public_path('index.php/performance/viewEmployeePerformanceTrackerList', true); ?>"><?php echo __('Employee Tracker'); ?></a></li>
              <li><a href="<?php echo public_path('index.php/core/viewDefinedPredefinedReports/reportGroup/3/reportType/PIM_DEFINED', true); ?>"><?php echo __('Reports'); ?></a></li>
              <li><a href="<?php echo public_path('index.php/admin/viewSystemUsers', true); ?>"><?php echo __('Admin'); ?></a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6><?php echo __('Trending jobs'); ?></h6>
            <ul class="footer-links">

            <?php if (count($publishedVacancies) != 0): ?>   

                <?php foreach ($publishedVacancies as $vacancy): ?>
                    <li><a target="_blank" href="<?php echo public_path('index.php/recruitmentApply/applyVacancy/id/' . $vacancy->getId(), true); ?>"><?php echo $vacancy->getName(); ?></a></li>
                <?php endforeach; ?>
            <?php else: ?>
                <li><?php echo __('No trending jobs'); ?></li>
            <?php endif; ?>
            </ul>
          </div>
        </div>

        <hr>
      </div>
      <!-- END Top section -->

      <!-- Bottom section -->
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text"><?php echo __('Copyrights'); ?> &copy; <?php echo __('2018 All Rights Reserved'); ?>
                <a target="_blank" href="www.linkedin.com/in/gofaniyi"><?php echo __('Olaoluwa Faniyi'); ?></a>.</p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- END Bottom section -->

    </footer>
    <!-- END Site footer -->


  </body>
</html>

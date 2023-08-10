<?php session_start() ?>
<?php require_once('connection.php') ?>
<?php require_once('function.php') ?>
<?php require_once('head.php') ?>


<!-- Header
================================================== -->
<?php
//print_r($_SESSION);die;
if (checkLogged() == 1) {
    require_once('header_2.php');
    $sql_select_job = "SELECT job.*, company.* FROM job JOIN employer ON job.id_employer = employer.id_employer JOIN company ON company.id_employer = employer.id_employer GROUP BY id";
    $jobs = callsql($sql_select_job);

} else {
    require_once('header.php');
}
?>
<div class="clearfix"></div>


<!-- Banner
================================================== -->
<?php require_once('banner.php') ?>


<!-- Content
================================================== -->

<!-- Categories -->
<div class="container">
    <div class="sixteen columns">
        <h3 class="margin-bottom-25">Popular Categories</h3>
        <?php
        $sql_select_categories = "select * from categories where parent_id = 0";
        $categories = callsql($sql_select_categories);
        ?>
        <ul id="popular-categories">
            <?php
            foreach ($categories as $category) {
                ?>
                <li><a href="#"> <?php echo $category['name'] ?> </a></li>
                <?php
            }
            ?>
        </ul>
        <div class="clearfix"></div>
        <div class="margin-top-30"></div>
        <a href="browse-categories.php" class="button centered">Browse All Categories</a>
        <div class="margin-bottom-50"></div>
    </div>
</div>


<div class="container">

    <!-- Recent Jobs -->
    <div class="eleven columns">
        <div class="padding-right">
            <h3 class="margin-bottom-25">Recent Jobs</h3>
            <ul class="job-list">
                <?php
                foreach ($jobs as $job) {
                    ?>
                    <li class="highlighted">
                        <a href="job-page.php" class="d-flex align-items-center">
                            <img class="p-0 m-0 float-none" src="<?php echo $job['company_logo']; ?>" style="width: 100px; height: 100px" alt="">
                            <div class="job-list-content ms-5">
                                <h4><?php echo $job['title'] ?><span
                                            class="ms-3 full-time "><?php echo $job['job_type']; ?></span>
                                </h4>
                                <div class="job-icons ">
                                    <span><i class="fa fa-briefcase"></i><?php echo $job['company_name']; ?></span>
                                    <span><i class="fa fa-map-marker"></i><?php echo $job['location']; ?></span>
                                    <span><i class="fa fa-money"></i><?php echo '(' . $job['minimum_salary'] . '$ - ' . $job['maximum_salary'] . '$)/month' . ' or (' . $job['minimum_rate'] . '$ - ' . $job['maximum_rate'] . '$)/hour' ?></span>
                                </div>
                            </div>
                        </a>
                        <div class="clearfix"></div>
                    </li>
                <?php } ?>
            </ul>

            <a href="browse-jobs.php" class="button centered"><i class="fa fa-plus-circle"></i> Show More Jobs</a>
            <div class="margin-bottom-55"></div>
        </div>
    </div>

    <!-- Job Spotlight -->
    <div class="five columns">
        <h3 class="margin-bottom-5">Job Spotlight</h3>

        <!-- Navigation -->
        <div class="showbiz-navigation">
            <div id="showbiz_left_1" class="sb-navigation-left"><i class="fa fa-angle-left"></i></div>
            <div id="showbiz_right_1" class="sb-navigation-right"><i class="fa fa-angle-right"></i></div>
        </div>
        <div class="clearfix"></div>

        <!-- Showbiz Container -->
        <div id="job-spotlight" class="showbiz-container">
            <div class="showbiz" data-left="#showbiz_left_1" data-right="#showbiz_right_1" data-play="#showbiz_play_1">
                <div class="overflowholder">

                    <ul>

                        <li>
                            <div class="job-spotlight">
                                <a href="#"><h4>Social Media: Advertising Coordinator <span
                                                class="part-time">Part-Time</span></h4></a>
                                <span><i class="fa fa-briefcase"></i> Mates</span>
                                <span><i class="fa fa-map-marker"></i> New York</span>
                                <span><i class="fa fa-money"></i> $20 / hour</span>
                                <p>As advertising & content coordinator, you will support our social media team in
                                    producing high quality social content for a range of media channels.</p>
                                <a href="job-page.php" class="button">Apply For This Job</a>
                            </div>
                        </li>

                        <li>
                            <div class="job-spotlight">
                                <a href="#"><h4>Prestashop / WooCommerce Product Listing <span class="freelance">Freelance</span>
                                    </h4></a>
                                <span><i class="fa fa-briefcase"></i> King</span>
                                <span><i class="fa fa-map-marker"></i> London</span>
                                <span><i class="fa fa-money"></i> $25 / hour</span>
                                <p>Etiam suscipit tellus ante, sit amet hendrerit magna varius in. Pellentesque lorem
                                    quis enim venenatis pellentesque.</p>
                                <a href="job-page.php" class="button">Apply For This Job</a>
                            </div>
                        </li>

                        <li>
                            <div class="job-spotlight">
                                <a href="#"><h4>Logo Design <span class="freelance">Freelance</span></h4></a>
                                <span><i class="fa fa-briefcase"></i> Hexagon</span>
                                <span><i class="fa fa-map-marker"></i> Sydney</span>
                                <span><i class="fa fa-money"></i> $10 / hour</span>
                                <p>Proin ligula neque, pretium et ipsum eget, mattis commodo dolor. Etiam tincidunt
                                    libero quis commodo.</p>
                                <a href="job-page.php" class="button">Apply For This Job</a>
                            </div>
                        </li>


                    </ul>
                    <div class="clearfix"></div>

                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
</div>


<!-- Testimonials -->
<div id="testimonials">
    <!-- Slider -->
    <div class="container">
        <div class="sixteen columns">
            <div class="testimonials-slider">
                <ul class="slides">
                    <li>
                        <p>I have already heard back about the internship I applied through Job Finder, that's the
                            fastest job reply I've ever gotten and it's so much better than waiting weeks to hear back.
                            <span>Collis Ta’eed, Envato</span></p>
                    </li>

                    <li>
                        <p>Nam eu eleifend nulla. Duis consectetur sit amet risus sit amet venenatis. Pellentesque
                            pulvinar ante a tincidunt placerat. Donec dapibus efficitur arcu, a rhoncus lectus egestas
                            elementum.
                            <span>John Doe</span></p>
                    </li>

                    <li>
                        <p>Maecenas congue sed massa et porttitor. Duis placerat commodo ex, ut faucibus est facilisis
                            ac. Donec eleifend arcu sed sem posuere aliquet. Etiam lorem metus, suscipit vel tortor
                            vitae.
                            <span>Tom Smith</span></p>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>


<!-- Infobox -->
<div class="infobox">
    <div class="container">
        <div class="sixteen columns">Start Building Your Own Job Board Now <a href="my_account.php">Get Started</a>
        </div>
    </div>
</div>


<!-- Recent Posts -->
<div class="container">
    <div class="sixteen columns">
        <h3 class="margin-bottom-25">Recent Posts</h3>
    </div>


    <div class="one-third column">

        <!-- Post #1 -->
        <div class="recent-post">
            <div class="recent-post-img"><a href="blog-single-post.php"><img src="images/recent-post-01.jpg" alt=""></a>
                <div class="hover-icon"></div>
            </div>
            <a href="blog-single-post.php"><h4>Hey Job Seeker, It’s Time To Get Up And Get Hired</h4></a>
            <div class="meta-tags">
                <span>October 10, 2015</span>
                <span><a href="#">0 Comments</a></span>
            </div>
            <p>The world of job seeking can be all consuming. From secretly stalking the open reqs page of your dream
                company to sending endless applications.</p>
            <a href="blog-single-post.php" class="button">Read More</a>
        </div>

    </div>


    <div class="one-third column">

        <!-- Post #2 -->
        <div class="recent-post">
            <div class="recent-post-img"><a href="blog-single-post.php"><img src="images/recent-post-02.jpg" alt=""></a>
                <div class="hover-icon"></div>
            </div>
            <a href="blog-single-post.php"><h4>How to "Woo" a Recruiter and Land Your Dream Job</h4></a>
            <div class="meta-tags">
                <span>September 12, 2015</span>
                <span><a href="#">0 Comments</a></span>
            </div>
            <p>Struggling to find your significant other the perfect Valentine’s Day gift? If I may make a suggestion:
                woo a recruiter. </p>
            <a href="blog-single-post.php" class="button">Read More</a>
        </div>

    </div>

    <div class="one-third column">

        <!-- Post #3 -->
        <div class="recent-post">
            <div class="recent-post-img"><a href="blog-single-post.php"><img src="images/recent-post-03.jpg" alt=""></a>
                <div class="hover-icon"></div>
            </div>
            <a href="blog-single-post.php"><h4>11 Tips to Help You Get New Clients Through Cold Calling</h4></a>
            <div class="meta-tags">
                <span>August 27, 2015</span>
                <span><a href="#">0 Comments</a></span>
            </div>
            <p>If your dream employer appears on this list, you’re certainly in good company. But it also means you’re
                up for some intense competition.</p>
            <a href="blog-single-post.php" class="button">Read More</a>
        </div>
    </div>

</div>


<!-- Footer
================================================== -->
<div class="margin-top-15"></div>

<?php require_once('footer.php') ?>

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<?php require_once('script_tag.php') ?>


</body>
</html>
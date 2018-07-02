<?php
/**
Template Name: contacts
 */
get_header(); // Подключаем хедер?>
    <?php //$the_query = new WP_Query('p=154'); ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); // Начало цикла ?>
    <header class="supplierspageheader contacts">
        <hr>
        <?php the_title(); // Заголовок ?>
        <hr>
    </header>
    <?php endwhile; // Конец цикла ?>
    <section class="supplierspagemaincontent_contacts">
        <div class="container-fluid">
            <div class="row">
                        <ul  class="nav nav-pills">

                            <li class="active">
                                <?php $the_query = new WP_Query('cat=77'); ?>
                                <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
                                <a  href="#1a" data-toggle="tab"><?php the_title(); ?></a>
    <?php endwhile; ?>
                            </li>


                            <li>
                                <?php $the_query = new WP_Query('cat=79'); ?>
                                <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
                                <a href="#2a" data-toggle="tab"><?php the_title(); ?></a>
                                <?php endwhile; ?>
                            </li>
                        </ul>

                        <div class="tab-content clearfix">
                            <div class="tab-pane active" id="1a">
                                <?php $the_query = new WP_Query('cat=77'); ?>
                                <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
                                <div class="address_block mainaddress">

                        <?php the_content(); ?>

<!--                                    <div><i class="fa fa-map-marker"></i> 61001, м. Харків, майдан Захисників України,<br>-->
<!--                                        будинок 7/8, корпус З-5, поверх 2, офіс 40-->
<!--                                    </div>-->
<!--                                    <div class="phone"><i class="fa fa-mobile"></i> +380 57 757 55 75</div>-->
<!--                                    <div class="btn_letter"><a href="mailto:sales@nectarica.com">Вiдправити листа</a> </div>-->
                                </div>
                                <?php endwhile; ?>

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2565.29356250506!2d36.25675431590211!3d49.987105428522725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a091b865ad25%3A0x7b12ced9e1034623!2z0KLQntCSINCU0YDQuNC70LvQtdC60YE!5e0!3m2!1sen!2sua!4v1524485688710" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

<!--                                <div id="map"></div>-->
                            </div>
                            <div class="tab-pane" id="2a">
                                <?php $the_query = new WP_Query('cat=79'); ?>
                                <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
                                <div class="address_block  ecaddress">

<!--                                    <p><i class="fa fa-map-marker"></i> Nectarica-eu sp. z o.o. <br>-->
<!--                                        Gesia 8/201, 31-535 Krakow, Poland-->
<!--                                    </p>-->
<!--                                    <div class="phone"><i class="fa fa-mobile"></i> +4 8128 812 223</div>-->
                        <?php the_content(); ?>

                                </div>
                                <?php endwhile; ?>

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2561.7379288244892!2d19.954621951777046!3d50.053740479321675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47165b38ba4d7e5d%3A0x3688f6b733ee7ac6!2zR8SZc2lhIDgvMjAxLCAzMS01MzUgS3Jha8OzdywgUG9sYW5k!5e0!3m2!1sen!2sua!4v1524251327867" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>



<!--                                <div id="map"></div>-->


                            </div>
                        </div>
            </div>
         </div>


    </section>


<?php get_footer(); // Подключаем футер ?>
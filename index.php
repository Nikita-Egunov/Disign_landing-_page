<?php get_header();?>


    <content>
        <h1 class="title">Лаконичный дизайн интерьера для современных людей.</h1>
        <img src="<?php echo get_template_directory_uri(); ?>/images/disignPicture.webp" alt="DisignPicture">
        <h2 class="LastProject">Последние проекты</h1>
            <div class="row">
                <?php 
                global 
                    $post;
                    $myposts = get_posts([
                        'numberposts' => -1,
                        // 'offset' =>1,
                        // 'category' => 1
                    ]);
                    if($myposts){
                        foreach($myposts as $post ){
                            setup_postdata( $post );
                            ?>
                            <div class="Project">
                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/disignPicture2.webp" alt="DisignPicture"> -->
                    <?php the_post_thumbnail(array(380, 250)
                );?>
                    <h4><?php the_title();?></h1>
                        <p><?php the_content();?></p>
                        <a href="#" class="ProjectLink"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                            </svg></a>
                </div>
                            <?php
                        }
                    }
                    wp_reset_postdata();
                    ?>    
            
                
                
                

            </div>
            <button onclick="window.open('#all projects')" class="buttonWithBorder">
                <li>Смотреть все работы</li>
            </button>
            
                    

    </content>


 <?php get_footer();?>
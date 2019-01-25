<section class="news p40">
  <div class="container">
    <div class="section-head mb30 text-center">
      <h2>新闻中心</h2>
    </div>
    <div class="news-cat mb30 text-center">
      <ul class="clearfix filters">
        <?php $case = get_categories();?>
        <?php if( $case ): ?>
          <?php foreach( $case as $term):?>
            <?php if($term->term_id == 1) continue;?>
            <li>
              <span>
                <?php echo $term->name; ?>
              </span>
            </li>
          <?php endforeach;endif;?>
        </ul>
      </div>
      <div class="news-list clearfix">
        <?php if( $case ):?>
          <?php foreach( $case as $term):?>
            <?php if($term->term_id == 1) continue;?>
            <div class="news-con">
              <div class="row">
                <div class="col-md-4 news-img wow fadeInLeft delay300">
                  <?php $posts = get_posts('category='.$term->cat_ID.'&numberposts=11&order=ASC');?>
                  <a href="<?php echo $posts[0]->guid ?>" target="_ablank">
                    <img src="<?php echo get_template_directory_uri(); ?>/timthumb.php?src=<?php echo post_thumbnail_src($posts[0]->ID) ?>&h=450&w=600&zc=1" alt="" title="<?php echo $posts[0]->post_title ?>">
                    <p><b style="color: red">热点！</b><?php echo $posts[0]->post_title ?></p>
                  </a>
                </div>
                <div class="col-md-8 wow fadeInRight delay300">
                  <ul class="row">
                    <?php if($posts): ?>
                      <?php foreach ($posts as $key => $value):?> 
                        <?php if($key == 0){continue;}?>
                        <li class="col-md-6">
                          <a href="<?php echo $value->guid ?>" target="_blank" title="<?php echo $value->post_title ?>">
                            <h3><?php echo $value->post_title ?></h3>
                            <span><?php echo date('Y-m-d',strtotime($value->post_date)) ?></span>
                          </a>
                        </li>
                      <?php endforeach;endif;?>
                    </ul>
                  </div>
                </div>
              </div>
            <?php endforeach;endif;?>
          </div>
        </div>
      </section>
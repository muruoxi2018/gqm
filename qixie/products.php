<?php
/**
 * Template Name: 赛事归档
 * 作者：慕若曦
 */
get_header(); ?>
<section id="slider" class="text-center">
	<?php
	$cat_ID = get_query_var('cat');
	if( get_field('top-images','category_'.$cat_ID) ): ?>
		<img src="<?php the_field('top-images','category_'.$cat_ID)?>" alt="<?php single_cat_title(); ?>" title="<?php single_cat_title(); ?>">
		<?php else:?>
			<img src="<?php bloginfo('template_url')?>/images/s1.jpg" alt="<?php single_cat_title(); ?>" title="<?php single_cat_title(); ?>">
		<?php endif; ?>
	</section>
	<?php the_crumbs(); ?>
	<Section id="main" class="p40 fafafa">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="content">
						<div class="entry-meta">
							<h1 class="pull-left">赛事归档</h1>
						</div>
						<?php $posts = get_posts('post_type=product&order=ASC');?>
						<?php if( $posts ):?>
							<?php foreach( $posts as $key => $value):?>
								<?php ?>
								<div class="row Allevent_Contlist">
									<div class="col-md-7 col-sm-7 col-xs-12 mb30 mt20">
										<a href="<?php echo $value->guid ?>"><img src="https://sports.wanda.cn/picserver/userfiles/1e0d20fa41984360bcf885c1f8e76d62/files/event/eventInfo/2018/12/2019%E8%8A%B1%E9%83%BD720X488.jpg"></a>
									</div>
									<div class="col-md-5 col-sm-5 col-xs-12">
										<div class="Righttop">
											<div class="row mb20">
												<h3><a href="<?php echo $value->guid ?>" style="white-space: pre;"><?php echo $value->post_title ?></a></h3>
											</div>
											<div class="row">
												<p><img src="<?php bloginfo('template_url')?>/images/ion55.png">赛事时间：<span id="time0"><?php echo date('Y-m-d',strtotime($value->post_date)) ?></span></p>
											</div>
											<div class="row">
												<p><img src="<?php bloginfo('template_url')?>/images/ion11.png">赛事地点：<span><?php the_field('saishididian',$value->ID) ?></span></p></div>
												<div class="row"><p><img src="<?php bloginfo('template_url')?>/images/ion22.png">报名时间：<span>2018-12-25至&nbsp;2019-01-02</span></p></div>
												<div class="row"><p><img src="<?php bloginfo('template_url')?>/images/ion33.png">报名费：<span id="eventPrice_692a71faec284a2cad20b0095b1e2042">120-228</span></p></div>
												<div class="row hidden-xs"><p><img src="<?php bloginfo('template_url')?>/images/ion44.png">比赛倒计时</p></div>
												<div class="row hidden-xs">
													<div class="col-md-10 col-md-offset-1">
														<div class="time">
														<span>0<label>天&nbsp;DAYS</label></span>
														<span>0<label>时&nbsp;HRS</label></span>
														<span style="background:none">0<label>分&nbsp;MIN</label></span>
													</div>
													</div>
													
												</div>

											</div>
											<div class="Rightbottom">
												<div class="row text-center">
													<div class="col-md-5 col-sm-5 col-xs-12 mb30">
														<a href="#"><p><img src="<?php bloginfo('template_url')?>/images/ion66.png">正在报名</p></a>
													</div>
													<div class="col-md-7 col-sm-7 col-xs-12">
														<div class="col-sm-4 col-md-4 col-xs-4">
															<a><img src="<?php bloginfo('template_url')?>/images/shoucang.png"></a></div>
														<div class="col-sm-4 col-md-4 col-xs-4">
															<a><img src="<?php bloginfo('template_url')?>/images/weixin.png"></a></div>
														<div class="col-sm-4 col-md-4 col-xs-4">
															<a><img src="<?php bloginfo('template_url')?>/images/weibo.png"></a></div>
													</div>
												</div>

											</div>
										</div>
									</div>
								<?php endforeach;endif;?>
							</div>
						</div>
					</div>
				</div>
			</Section>
			<?php get_footer(); ?>
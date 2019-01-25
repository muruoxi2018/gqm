<?php get_header(); ?>
<section id="slider" class="text-center">
<?php 
if( get_field('top-images') ): ?>
<img src="<?php the_field('top-images')?>" alt="<?php the_title();?>" alt="<?php the_title();?>" title="<?php the_title();?>">
<?php else:?>
<img src="<?php bloginfo('template_url')?>/images/s1.jpg" alt="<?php the_title();?>" title="<?php the_title();?>">
<?php endif; ?>
</section>
<?php the_crumbs(); ?>
<Section id="main" class="p40 fafafa">
<div class="container">
	<div class="row">
		<div class="Detail_cont">
				<div class="Dtop">
					<div class="left" id="inforvalue">
							<h4><?php the_title();?><span></span></h4>
							<p><img src="<?php bloginfo('template_url')?>/images/ion55.png">赛事时间：<span id="eventTime"><?php the_field('saishishijian') ?></span></p>
							<p style="text-indent:2.5em;">Race Day：<?php the_field('saishishijian') ?></p>
							<p style="width:750px"><img src="<?php bloginfo('template_url')?>/images/ion11.png">赛事地点：<?php the_field('saishididian') ?> </p>
							<p style="text-indent:2.5em;width:750px">Location：<?php the_field('saishididian') ?></p>
						</div>
					<div class="right">
						<p><img src="<?php bloginfo('template_url')?>/images/ion44.png">比赛倒计时</p>
						<div class="time">
							<span id="t_d">0<label>天&nbsp;DAYS</label></span>
							<span id="t_h">0<label>时&nbsp;HRS</label></span>
							<span style="background:none" id="t_m">0<label>分&nbsp;MIN</label></span>
						</div>
						<div class="bm" style="display: none;"><a href="javascript:void(0)" onclick="volunteerSignup()">参赛选手报名</a></div>
					</div>
					<div class="clear" style="width:100%"></div>
				</div>
				<div class="table-responsive" style="margin: 0 24px;">
				<table border="1" class="table text-nowrap table-bordered table-hover">
					<thead>
					<tr>
						<td>赛事项目<br>Race</td>
						<td>报名时间<br>Registration Time</td>
						<td>赛事费用<br>Registration Fee</td>
						<td style="width:40%">项目描述<br>Event Description</td>
						<td>报名状态<br>Registration Status</td>
					</tr>
					</thead>
					<tbody id="groupinfor">
					<?php $terms = get_field('saishixiangmushezhi');if( $terms ): ?>
					<?php foreach( $terms as $value ): ?>
					<tr>
						<td><?php echo $value['saishixiangmu']?><br></td>
						<td><?php echo str_replace("\\n","<br />",$value['baomingshijian']) ?></td>
						<td><span>￥<?php echo $value['saishifeiyong']?></span></td>
						<td><?php echo $value['xiangmumiaoshu']?></td>
						<td>
							<a style="padding: 5px" href="javascript:void(0)" target="_blank" class="bm-no">报名结束 </a>	
						</td>
					</tr>
					<?php endforeach;?>
					<?php  endif; ?>
                      </tbody>
				</table>
				</div>
				<div class="" style="height:30px"></div>
			</div>
	</div>
	<div class="row">
	<div class="Detail_cont" style="z-index:2;">
						<div class="Eventinfo">
							<div class="title">
								<h4>竞赛规程 | Contest regulations</h4></div>
							<div class="dw">
								<p></p>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
									<h1 style="margin-top:4px;margin-bottom:4px;text-align:center;line-height:114%">
										<span style="font-family:微软雅黑, Microsoft YaHei">
											<strong style="">
												<span style="line-height: 114%;font-size:24px"><?php the_title();?></span>
											</strong>
											<span style="font-size:16px">
												<strong></strong>
											</span>
										</span>
									</h1>
									<h2 style="margin-top:4px;margin-bottom:4px;margin-left:40px;line-height:114%"><span style="font-family:微软雅黑, Microsoft YaHei;font-size:16px"><span style="font-weight: bold;"></span></span></h2>
									<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									
									<div class="entry-content">
									<?php the_content();?> 
									</div>
									</article>
								<?php endwhile;  endif;?>
</div>
							<div class="clear" style="height:50px;"></div>
						</div>
					</div>
	</div>
</section>
<?php get_footer(); ?>
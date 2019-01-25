<section id="footer">
    <div class="container">
        <div class="row">
            <div class="footer-top clearfix p40">
                <div class="col-md-2 col-sm-2 hidden-xs">
                    <h3> 关于我们</h3>
                    <ul class="web-menu-con">
                        <li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64">
                            <a href="#">棋盟简介</a>
                        </li>
                        <li id="menu-item-62" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-62">
                            <a href="#">棋盟荣誉</a>
                        </li>
                        <li id="menu-item-63" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63">
                            <a href="#">棋盟风采</a>
                        </li>
                        <li id="menu-item-66" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-66">
                            <a href="#">运营团队</a>
                        </li>
                        <li id="menu-item-65" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-65">
                            <a href="#">联系我们</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-2 hidden-xs">
                    <h3> 赛事中心</h3>
                    <ul class="custom-menu-con">
                        <li id="menu-item-68" class="menu-item menu-item-type-taxonomy menu-item-object-products menu-item-68">
                            <a href="#">棋王争霸赛</a>
                        </li>
                        <li id="menu-item-69" class="menu-item menu-item-type-taxonomy menu-item-object-products menu-item-69">
                            <a href="#">棋王争霸赛</a>
                        </li>
                        <li id="menu-item-70" class="menu-item menu-item-type-taxonomy menu-item-object-products menu-item-70">
                            <a href="#">棋王争霸赛</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-2 hidden-xs">
                    <h3> 赛事支持</h3>
                    <ul class="theme-menu-con">
                        <li id="menu-item-72" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-72">
                            <a href="#">裁判员名单</a>
                        </li>
                        <li id="menu-item-73" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-73">
                            <a href="#">裁判员培训</a>
                        </li>
                        <li id="menu-item-74" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-74">
                            <a href="#">活动赞助</a>
                        </li>
                        <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71">
                            <a href="#">物资赞助</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6">
                    <h3>联系我们</h3>
                    <div class="tel"> 公司地址：中国.甘肃.兰州<br> 服务热线：13993481533<br> 电子邮箱：13993481533@163.com<br> 不忘初心，方得始终。<br>我们致力于为更多的棋手提供交流平台！
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6">
                    <h3>关注我们</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/wechat.jpg">
                </div>
            </div>
        </div>
        <div class="copyr p20">
            <p>Copyright © <?php the_time('Y');?> <a href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a> All Rights Reserved &nbsp;&nbsp;<a target="_blank" href="http://www.miibeian.gov.cn/" rel="nofollow"><?php the_field('btm-icp','option') ?></a><?php the_field('tjgj','option') ?>&nbsp;&nbsp;<a href="<?php bloginfo("url");?>/sitemap.xml" target="_blank"><?php _e('网站地图','xs')?></a></p>
        </div>
    </div>
</section>
<?php wp_footer(); ?>
<div class="rtbar hidden-xs">
    <div class="rtbar-box">
        <div class="box-left"> 
            <a style="display: block;"  class="btno" title="查看在线客服" href="javascript:void(0);">展开</a> 
            <a style="display: none;"  class="btnc" title="关闭在线客服" href="javascript:void(0);">收缩</a> 
        </div>
        <div class="box-right">
            <div class="cn">
                <h4>赛事合作</h4>
                <ul>
                    <li>
                        <span><?php the_field('qqname1','option') ?></span>
                        <a target="_blank" href="https://wpa.qq.com/msgrd?v=3&amp;uin=<?php the_field('qq1','option') ?>&amp;site=qq&amp;menu=yes"><img border="0" src="https://pub.idqqimg.com/qconn/wpa/button/button_old_11.gif" alt="<?php the_field('qq1','option') ?>" title="<?php the_field('qq1','option') ?>"></a><br>
                    </li>
                    <li>
                        <span><?php the_field('qqname2','option') ?></span>
                        <a target="_blank" href="https://wpa.qq.com/msgrd?v=3&amp;uin=<?php the_field('qq2','option') ?>&amp;site=qq&amp;menu=yes"><img border="0" src="https://pub.idqqimg.com/qconn/wpa/button/button_old_11.gif" alt="<?php the_field('qq2','option') ?>" title="<?php the_field('qq2','option') ?>"></a><br>
                    </li>
                </ul>
                <div class="kf-tel">
                    <p><b>手机号码</b><br><?php the_field('phone','option') ?></p>
                    <p><b>工作时间</b><br>8:30~12:00<br>14:00~18：00</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="side-top hidden-xs">
    <a title="回到顶部" href="javascript:;" class="gotop" style="display: block;"><i class="f_top fa fa-chevron-up"></i></a>
</div>
<script>
    (function(){
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        }
        else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
</script>
<?php if ( is_singular() ){ ?>
    <!-- Baidu Button BEGIN -->
    <script>
        window._bd_share_config = {
            "common": {
                "bdSnsKey": {},
                "bdText": "",
                "bdMini": "2",
                "bdMiniList": false,
                "bdPic": "",
                "bdStyle": "0",
                "bdSize": "12"
            },
            "share": {}
        };
        with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~ ( - new Date() / 36e5)];
        <?php } ?>
        </body>
        </html>
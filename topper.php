<!--banner start here-->
<div class="banner1">
    <div class="header1">
        <div class="container">
            <div class="header-main">
                <div class="logo">
                    <h1><a href="index.html" style="width: 620px;">山东微山湖蛋品公益机构</a></h1>
                </div>
                <div class="header-icons">
                    <ul>
                        <li><a href="#" class="fb"> </a></li>
                        <li><a href="#" class="twit"> </a></li>
                        <li><a href="#" class="gmail"> </a></li>
                        <li><a href="#" class="dri"> </a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="top-nav-main">
        <div class="top-nav">
            <span class="menu"> <img src="images/icon.png" alt=""></span>
            <ul class="res">
                <li><a id="res_home" href="index.html"><i class="glyphicon glyphicon-home"> </i>主页</a></li>
                <li><a id="res_about" href="about.html"><i class="glyphicon glyphicon-user"> </i>关于我们</a></li>
                <li><a id="res_blog" href="blog.html"><i class="glyphicon glyphicon-picture"> </i>资讯</a></li>
                <li><a id="res_shortcodes" href="shortcodes.html"><i class="glyphicon glyphicon-list-alt"> </i>捐赠</a></li>
                <li><a id="res_contact" href="contact.html"><i class="glyphicon glyphicon-envelope"> </i>联系我们</a></li>
            </ul>
            <!-- script-for-menu -->
            <script>
                $( "span.menu" ).click(function() {
                    $( "ul.res" ).slideToggle( 300, function() {
                        // Animation complete.
                    });
                });
            </script>
            <!-- /script-for-menu -->
        </div>
    </div>
</div>
<script type="application/javascript">
    var currentFeild ="<?php echo $_GET['name']?>";
    $("#res_"+currentFeild).addClass("active");
</script>
<!--banner end here-->
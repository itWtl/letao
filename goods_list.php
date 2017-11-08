<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>乐淘 - 后台管理</title>
    <?php include './common/style.html' ?>
    <!-- 此处用相对路径引入公共部分 -->
    <!-- 与绝对路径效果相同，因为绝对路径根目录就是web/  下 -->

</head>
<body>
    <!-- 侧边栏 -->
    <?php include './common/aside.html' ?>
    <!-- 主体 -->
    <div class="main">
        <div class="container-fluid">
            <!-- 头部 -->
            <?php include './common/header.html' ?>
            <!-- 客户列表 -->
            <div class="body goods-list">
                <!-- 面包屑 -->
                <ol class="breadcrumb">
                    <li><a href="javascript:;">商品管理</a></li>
                    <li class="active">商品列表</li>
                </ol>
                <div class="page-title">
                    <a href="./goods_add.html" class="btn btn-success btn-sm pull-right">添加商品</a>
                </div>
                <div class="goods">
                <!-- 此处通过art-template模版引擎放商品 -->
                    <div class="item">
                        <div class="pic">
                            <img src="./uploads/course_1.jpg" alt="">
                        </div>
                        <div class="info">
                            <a href="javascript:;">匡威三星标1970s converse复刻 142334c 144757c三星标黑色高帮</a>
                            <ul class="list-unstyled">
                                <li>
                                    <span>商品原价：888.1</span>
                                </li>
                                <li>
                                    <span>优惠价：499.1</span>
                                </li>
                                <li>
                                    <span>商品库存：32</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- 分页 -->
                <ul class="pagination pull-right">
                </ul>
            </div>
        </div>
    </div>

   <!--  商品列表模版，模版引擎放数据 -->
    <script type="text/template" id="tpl">
        {{each rows}}
        <!-- rows 是从后端服务器得到的信息，ajax请求收到的商品信息 -->
        <div class="item">
            <div class="pic">
                <img src="./uploads/course_1.jpg" alt="">
            </div>
            <div class="info">
            <!-- 内容信息可以查看文档或者猜含义 -->
                <a href="javascript:;">{{$value.proName}}</a>
                <ul class="list-unstyled">
                    <li>
                        <span>商品原价：{{$value.oldPrice}}</span>
                    </li>
                    <li>
                        <span>优惠价：{{$value.price}}}</span>
                    </li>
                    <li>
                        <span>商品库存：{{$value.num}}</span>
                    </li>
                </ul>
            </div>
        </div>
        {{/each}}
    </script>
    <!-- 分页模版 -->
    <script type="text/template" id="page">
    	<!-- page为后端传过来的数据 -->

		<% if(page > 1) { %>

        <li><a href="?page= <% page-1 %>">上一页</a></li>

		<% } %>


        <li><a href="#">上一页</a></li>




		<% if(page < pagelen) { %>
        <li><a href="?page= <% page-0+1 %>">下一页</a></li>
        <!-- page-0 强制转化为数字类型再加1 -->
        <% } %>
    </script>


    <?php include '/common/script.html' ?>
    <!-- 拼接公共部分的script标签 -->

    <script>

        require(['src/goods_list'])

    </script>
</body>
</html>
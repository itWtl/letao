
	define(['jquery', 'template'], function($, template) {
		var pageSize = 2;
		// 一页展示几条数据
		var page = 1;
		// 当前页
		$.ajax({
			// /api 由我们在apache虚拟主机中设置，代表 http://localhost:3000
			url: '/api/product/queryProductDetailList',
			type: 'get',
			data: {page: page, pageSize: pageSize},
			// 根据接口文档，我们需要传入的数据类型
			success: function (info) {
				// console.log(info);
				// 可以查看从后端得到的数据

				var total = info.total;
				// 从后端接口得到的total，总数据条数
				var pagelen = Math.ceil(total / pageSize);
				// 总页数

				// 调用模版引擎处理商品列表
				var goodslist = template('tpl', info);

				// 再次调用模版引擎处理分页
				var pagehtml = template('page', {

				})

				$('.goods').html(goodslist);
				// .goods 是存放商品item的盒子类名


			}
		})
	})
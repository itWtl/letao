
// 模块公共配置
require.config({
    baseUrl: '/public',
    paths: {
        jquery: 'assets/jquery/jquery.min',
        template: 'assets/artTemplate/template-web',
        uploadify: 'assets/iploadify/jquery.uploadify.min',
        nprogress: 'assets/nprogress/nprogress',
        echarts: 'assets/echarts/echarts.min',
        ckeditor: 'assets/ckeditor/ckeditor'
    },
    // 如果某个第三方的类库不支持 AMD ， 通过 shim可以实现类似模块的用法
    shim: {
    	// 模块有何特点？
    	uploadify: {
    		// 1.通过 exports 可以将非模块的方法或属性公开出来，相当于标准模块中
    		// return的作用
    		// exports:

    		// 2.通过 deps 可以依赖其他模块
    		deps: ['jquery']
    		// uploadify 是依赖于jquery的
    	}
    	ckeditor: {
    		exports: 'CKEDITOR'
    		// dep: []
    	}
    }
});





// 全局执行的

require(['nprogress', 'jquery'], function (NProgress, $) {
	// 一个进度条插件,比较好看
	NProgress.start();
	NProgress.done()
	// 当发送ajax请求的时候也触发进度条插件
	$(document).ajaxStart(function () {
		Nprogress.start();
	}).ajaxStop(function () {
		NProgress.done();
	})
})


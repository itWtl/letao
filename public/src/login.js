
define(['jquery'], function ($) {
	// 提交表单
	$('form').on('submit', function () {
		// 缓存外部this
		var _this = $(this);
		$.ajax({
			url: '/api/employee/employeeLogin',
			type: 'post',
			data: _this.serialize(),
			success: function (info) {
				if(info.error) {
					return alert(info.nessage);
				}
				location.href = '.';
			} 
		})
		return false;

	})
})

	
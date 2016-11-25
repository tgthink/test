/** 
 * @description: 公用js封装
 * @author: fire
 * @update: fire (2016-9-22 14:30)
 */
(function(window, undefined) {
	var document = window.document,
	navigator = window.navigator,
	location = window.location;
	/*文字类常量*/
	window.pConstant = {}
	pConstant.msg = {};
	pConstant.msg.neterr = '网络不给力请重试';
	pConstant.BaseUrl = 'http://localhost/gzml/fire/project/code/system/index.php/Home/Index';
	window.pTool = {};

	pConstant.number = {};
	pConstant.number.wordNum = 200;//限制字数

	pConstant.regexp = {};
	pConstant.regexp.mobile = /^1\d{10}$/;//手机号
	pConstant.regexp.zip = /^[1-9][0-9]{5}$/;//邮政编码

	/*
	 * ajax 封装
	 */
	pTool.ajax = function(paraObj) {
		var url = paraObj['url'];
		var sendData = paraObj['data'];
		var success = paraObj['success'];
		var error = paraObj['error'];
		var type = paraObj['type'];
		var dataType = paraObj['dataType'];
		type = !!type ? type : 'POST';
		dataType = !!dataType ? dataType : 'json';
		$.ajax({
			type: type,
			url: url,
			data: sendData,
			dataType: dataType,
			timeout: 6000,
			success: function(data) {
				// console.log(url);
				// console.log(data);
				// console.log("==============================");
				if ( data === null ) {
					data = {};
				}
				//如果是登录失效则清除缓存
				// if ( data["status"] == pConstant.status.loginfail || data["status"] == pConstant.status.tokenexpire ) {
				// 	window.location.href = pConstant.pages.signout;
				// } else {
					success(data);
				// }
			},
			error: function(xhr, type) {
				error(xhr, type);
			}
		});
	}
})(window);

var qq = $('#qq');
var qgrp=$('#qgrp');
var weixinpic=$('#weixinpic');
var weixin=$('#weixin');
qgrp.hide();
weixinpic.hide();
weixin.on('mouseover',function (){
	weixinpic.show();
});
weixin.on('mouseout',function (){
	weixinpic.hide();
});
qq.on('mouseover',function (){
	qgrp.show();
});
qq.on('mouseout',function (){
	qgrp.hide();
});
weixinpic.on('mouseover',function (){
	weixinpic.show();
});
weixinpic.on('mouseout',function (){
	weixinpic.hide();
});
qgrp.on('mouseover',function (){
	qgrp.show();
});
qgrp.on('mouseout',function (){
	qgrp.hide();
});
//表单验证
var username=$('#name');
var name_err=$('#name_err');
var usermail=$('#email');
var mail_err=$('#email_err');
var message=$('#message');
var message_err=$('#message_err');
var captcha=$('#captcha');
username.on('blur',function () {
	if(username.val()==='') {
		name_err.append('<span class="pull-right"><i class="fa fa-times-circle"></i>&nbsp;请输入姓名</span>');
	}
});
username.on('focus',function () {
		name_err.find('span').remove();
});
usermail.on('blur',function () {
	if(usermail.val()==='') {
		mail_err.append('<span class="pull-right"><i class="fa fa-times-circle"></i>&nbsp;请输入E-mail</span>');
	}
});
usermail.on('focus',function () {
		mail_err.find('span').remove();
});
message.on('blur',function () {
	if(message.val()==='') {
		message_err.append('<span class="pull-right"><i class="fa fa-times-circle"></i>&nbsp;请输入内容</span>');
	}
});
message.on('focus',function () {
		message_err.find('span').remove();
});
captcha.on('focus',function () {
		$('#captcha_err').remove();
});
captcha.on('blur',function(){

var code=captcha.val();

	$.ajax({
		url:'/check.php',
		type:'GET',
		data:{code:code},
		dataType:'json',
		success:function(result){

			if(result.ok===1){
			}else{
				captcha.parent().after('<li id="captcha_err"><i class="fa fa-times-circle"></i>&nbsp;验证码错误</li>');
			}
		},
		error:function(msg,status){
			alert('wrong!'+status+msg.status);
		}
	});
});
$('#sheet').submit(function(e){
	if(username.val()===''||usermail.val()===''||message.val()===''||captcha.val()===''){
		e.preventDefault();
	}else{
	}

});

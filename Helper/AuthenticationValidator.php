<?php

function emailValidate($email)
{
	$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
	if (!preg_match($regex, $email)) {
		throw new Exception('ایمیل نامعتبر می باشد.');
	}
}

function mobilelValidate($mobile)
{
	if (!preg_match('/^(\+98|0|98|0098)9[0-9]{9}$/', $mobile)) {
		throw new Exception('فرمت موبایل صحیح نمی باشد.');
	}
}

function passwordValidate($password)
{
	if (empty($password)) {
		throw new Exception('کلمه عبور نمی تواند خالی باشد');
	}
	$uppercase = preg_match('@[A-Z]@', $password);
	$lowercase = preg_match('@[a-z]@', $password);
	$number = preg_match('@[0-9]@', $password);
	if (!$uppercase || !$lowercase || !$number) {
		throw new Exception('رمز عبور باید شامل حروف بزرگ و کوچک و اعداد باشد' . '<br>');
	}
	if (strlen($password) < 10) {
		throw new Exception('کلمه عبور باید حداقل ده کاراکتر باشد.' . '<br>');
	}
}
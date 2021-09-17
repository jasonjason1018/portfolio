<h1>FUKUSHIMA 後台</h1>
<form method="post" action="/login">
	@csrf
	<input type="hidden" name="cookie" value="1">
	<input type="text" name="ac" placeholder="帳號" autocomplete="off"><br>
	<input type="password" name="pw" placeholder="密碼"><br>
	<input type="submit" value="登入">
</form>

<link rel="stylesheet" type="text/css" href="/MVC/assets/css/style_login_index.css">
<form action="<?= BASEURL; ?>index.php?url=login/auth" method="POST">
<h2>Form Login</h2>
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
</form>


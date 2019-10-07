<?php require_once('../pages/header.php');?>

<div class="login-container">
    <form action="./auth.php" method="POST">
        <img src="../assets/logo.svg" alt="samba" id="Login-logo"/>
            <input
                name="username"
                placeholder="Username"
                type="text"
                required
                autofocus
            />
            <input
                name="password"
                placeholder="Password"
                type="password"
                required
            />
        <button type="submit">Entrar</button>
    </form>
</div>

<?php require_once('../pages/footer.php');?>

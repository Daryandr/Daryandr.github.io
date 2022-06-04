<div>
    <button onclick="closew()" class="closebut">&#10006</button>
    <div class="authname">Авторизация</div>
    <form name="authorization" action="#" method="post" class="authform">
        <label>
            E&#8211mail &nbsp&nbsp&nbsp<input type="email" name="login" value="" required>
        </label><br><br>
        <label>
            Пароль <input type="password" name="pass" value="" required>
        </label><br><br>
        <label id="notfound" style="font-size: 2.2vmin; color:red; margin-bottom:1vmin; display: none">Пользователь не найден</label>
        <label>
            <input type="submit" name="authbut" value="Войти" class="authbut"/>
        </label>
    </form>
    <div class="authreg">
        Ещё нет аккаунта?<br>
        <button onclick="reg()" class="regbut">Зарегистрироваться</button>
    </div>
</div>

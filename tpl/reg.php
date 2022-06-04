<div>
    <button onclick="closew()" class="closebut">&#10006</button>
    <div class="authname">Регистрация</div>
    <form name="authorization" action="#" method="post" class="authform">
        <label>
            E&#8211mail &nbsp&nbsp&nbsp&nbsp&nbsp<input type="email" name="login" value="" required>
        </label><br><br>
        <label>
            Пароль&nbsp&nbsp <input type="password" name="pass" minlength="6" value="" required>
        </label><br><br>
        <label>
            Имя &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="username" value="" required>
        </label><br><br>
        <label>
            Телефон <input type="number" name="phone" placeholder="79999999999" max="99999999999" min="10000000000" value="" required>
        </label><br><br>
        <label id="found" style="font-size: 2.2vmin; color:red; margin-bottom: 1vmin; display: none">Данный пользователь уже существует</label>
        <label>
            <input type="submit" name="register" value="Зарегистрироваться" class="authbut"/>
        </label>
    </form>
    <div class="authreg">
        Уже есть аккаунт?<br>
        <button onclick="login()" class="regbut">Войти</button>
    </div>
</div>
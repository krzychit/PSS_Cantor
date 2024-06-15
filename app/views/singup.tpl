{extends file="main.tpl"}
{block "content"}
    <form action="register" method="post">
        <div class="input">
            <label for="name">Imię</label>
            <input type="text" id="name" name="name" value="{$form->name}" />
        </div>

        <div class="input">
            <label for="surname">Nazwisko</label>
            <input type="text" id="surname" name="surname" value="{$form->surname}" />
        </div>

        <div class="input">
            <label for="city">Miasto</label>
            <input type="text" id="city" name="city" value="{$form->city}" />
        </div>

        <div class="input">
            <label for="username">Nazwa użytkownika</label>
            <input type="text" id="username" name="username" value="{$form->username}" />
        </div>

        <div class="input">
            <label for="password">Hasło</label>
            <input type="password" id="password" name="password" value="{$form->password}" />
        </div>

        <div class="input">
            <label for="confirm_password">Powtórz hasło</label>
            <input type="password" id="confirm_password" name="confirm_password" value="{$form->confirm_password}" />
        </div>

        <div class="input">
            <input type="submit" value="Zarejestruj" />
        </div>
    </form>
{/block}

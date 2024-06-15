{extends file="main.tpl"}
{block "content"}
    <form action="login" method="post">
        <div class="input">
            <label for="login">Login</label>
            <input type="text" id="login" name="login" value="{$form->login}" />
        </div>

        <div class="input">
            <label for="password">Hasło</label>
            <input type="password" id="password" name="password" value="{$form->password}" />
        </div>

        <div class="input">
            <input type="submit" value="Zaloguj" />
        </div>
    </form>
{/block}

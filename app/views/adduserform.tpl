{extends file="main.tpl"}
{block "content"}
    <form action="{$action}" method="post">
        <div class="input">
            <label for="login">Nazwa użytkownika</label>
            <input type="text" id="login" name="login" value="{$form->username}" />
        </div>
        <div class="input">
            <label for="password">Hasło użytkownika</label>
            <input type="password" id="password" name="password" value="{$form->password}" />
        </div>
        <div class="input">
            <label for="role">Rola użytkownika</label>
            <input type="text" id="role" name="role" value="{$form->role}" />
        </div>
        <div class="input">
            <label for="name">Imię użytkownika</label>
            <input type="text" id="name" name="name" value="{$form->name}" />
        </div>
        <div class="input">
            <label for="surname">Nazwisko użytkownika</label>
            <input type="text" id="surname" name="surname" value="{$form->surname}" />
        </div>
        <div class="input">
            <label for="city">Miasto użytkownika</label>
            <input type="text" id="city" name="city" value="{$form->city}" />
        </div>
        <div class="input">
            <input type="submit" value="{$buttonText}" />
        </div>
    </form>
{/block}

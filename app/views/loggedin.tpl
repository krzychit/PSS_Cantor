{if isset ($user)}
    <div id="loggedin" style="color:blue;background-color:red">
        Zalogowano jako: {$user['login']} {$user['role']}
    </div>
        {else}
    <div id="loggedin" style="color:blue;background-color:red">
        Niezalogowany
    </div>
{/if}
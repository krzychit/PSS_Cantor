{extends file="main.tpl"}
{block "content"}
    {foreach from=$users item=user}
        <div class="list">
            <div>{$user['login']}</div>
            <div>{$user['name']} {$user['surname']}</div>
            <div>
                <a href="editUserShow/{$user['iduser']}">Edytuj</a>
                <a href="deleteUser/{$user['iduser']}">Usuń</a>
            </div>
        </div>
    {/foreach}
{/block}

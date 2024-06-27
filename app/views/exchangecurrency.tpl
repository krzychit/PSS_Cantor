{if isset ($user)}
    <div>
        <form action="exchange" method="post">
            <div class="input">
                Z:
                <div>
                    <input type="number" id="amount" name="amount" value="{$form->amount}" step="0.01" />
                </div>
                <div>
                    <select name="currencycode1" id="currencycode1">
                        {foreach from=$currencies item=currency}
                            {if $form->currencycode1 == $currency['currencycode']}
                                <option value="{$currency['currencycode']}" selected>
                                    {$currency['currencycode']}
                                </option>
                            {else}
                                <option value="{$currency['currencycode']}">
                                    {$currency['currencycode']}
                                </option>
                            {/if}
                        {/foreach}
                    </select>
                </div>
            </div>
            <div class="input">
                Na:
                <select name="currencycode2" id="currencycode2">
                    {foreach from=$currencies item=currency}
                        {if $form->currencycode2 == $currency['currencycode']}
                            <option value="{$currency['currencycode']}" selected>
                                {$currency['currencycode']}
                            </option>
                        {else}
                            <option value="{$currency['currencycode']}">
                                {$currency['currencycode']}
                            </option>
                        {/if}
                    {/foreach}
                </select>
            </div>
            {if isset($converted_price)}
                <b>Wynik:</b> {$converted_price}
            {/if}
            <div class="input">
                <input type="submit" value="Wymień" />
            </div>
        </form>
    </div>
{/if}

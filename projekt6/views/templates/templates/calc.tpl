<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Credit Calculator</title>
    </head>
    <body>
        <h1>Credit Calculator</h1>

        <form action="{$conf->get('app_url')}/index.php?action=calc" method="post">
            <div>
                <label for="amount">Amount:</label>
                <input type="number" id="amount" name="amount" value="{$form->getAmount()|default:''}" required>
            </div>
            <div>
                <label for="years">Years:</label>
                <input type="number" id="years" name="years" value="{$form->getYears()|default:''}" required>
            </div>
            <div>
                <label for="interest">Interest:</label>
                <input type="number" step="0.01" id="interest" name="interest" value="{$form->getInterest()|default:''}" required>
            </div>
            <div>
                <button type="submit">Calculate</button>
            </div>
        </form>

        {if isset($msgs->getMessages()) && $msgs->isError()}
            <div class="errors">
                <h3>Errors:</h3>
                <ul>
                    {foreach from=$msgs->getMessages() item=msg}
                        <li>{$msg->text}</li>
                    {/foreach}
                </ul>
            </div>
        {/if}

        {if isset($result) && $result !== ''}
            <div class="result">
                <h3>Result:</h3>
                <p>Total amount to pay: {$result->getResult()}</p>
            </div>
        {/if}
    </body>
</html>
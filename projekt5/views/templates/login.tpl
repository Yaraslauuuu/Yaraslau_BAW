<h1>Login</h1>
{if isset($msgs->messages) && count($msgs->messages)>0}
        <div class="errors">
        <ul>
        {foreach $msgs->messages as $err}
            {if $err['type'] == 'error'}
            <li>{$err['text']}</li>
            {/if}
        {/foreach}
        </ul>
        </div>
<form action="" method="POST">
    <div><label for="username">Username:</label><input type="text" id="username" name="username" required></div>
    <div><label for="password">Password:</label><input type="password" id="password" name="password" required></div>
    <div><button type="submit">Login</button></div>
</form>
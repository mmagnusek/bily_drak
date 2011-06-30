{include file="header.tpl"}
{if $login == true}
  <form action="admin.php" method="post">
    <textarea name="special_offer" rows="10" cols="60">{$special_offer}</textarea>
    <input type="submit" value="Uložit nabídku" />
  </form>
{else}
  <form action="admin.php" method="post">
    <input type="text" name="user" />
    <input type="password" name="password" />
    <input type="submit" value="Přihlásit se" />
  </form>
{/if}
{include file="footer.tpl"}
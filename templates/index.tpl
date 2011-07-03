{include file="header.tpl"}


<div id="content-left">
  <h3>O čajovně</h3>
	<p style="padding:13px 16px 0 0;">
		Čajovna u Bílého Draka vznikla v roce 1998 a od úplných počátků je ústředním bodem naší filosofie především vytváření alternativního prostoru pro setkávání lidí v netradičním a klidném  prostředí s důrazem na čajovou kulturu, toleranci a poznávání odlišných kultur.
  </p>
	<img  alt="" src="images/matcha.png" style="margin:2px 18px 0 30px; float:left">
</div>
<div id="content-right">
  <table>
		<tr>
			<td>
			  <h3 style="margin-left: 30px;">Speciální nabídka</h3>
			  <p>{$special_offer}</p>
			</td>
		</tr>
		<tr><td><img  alt="" src="images/1d1.jpg" style="margin:20px 0 17px 0;"></td></tr>
		<tr>
			<td>
			  <h3 style="margin-left: 30px;">Plánované akce</h3>
				<table style="margin-left: 30px;" id="events">
					<tbody>
		        {foreach from=$events item=event}
							<tr>
								<td class="date">{$event['start']}</td>
								<td>{$event['name']}</td>
							</tr>
						{/foreach}
					</tbody>
				</table>
      </td>
		</tr>
	</table>
</div>


{include file="footer.tpl"}

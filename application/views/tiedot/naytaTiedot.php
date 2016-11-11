<h1>Tiedot</h1>
<TABLE BORDER=1>
<TR><TH>Etunimi</TH><TH>Sähköposti</TH></TR>
<?php
foreach ($asiakkaat as $rivi) {
	echo '<tr>';
	echo '<td>'.$rivi['username'].'</td>';
	echo '<td>'.$rivi['email'].'</td>';
	echo '</tr>';
}
?>
</TABLE>
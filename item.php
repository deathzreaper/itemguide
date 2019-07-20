<html>
<head>
<link rel="stylesheet" href="styles.css">

</head>

<?php
	include("login.php"); //include login

	//reopen login if fail
	if(isset($_GET['submitFail'])){
		echo "<script>document.getElementById(\"login\").style.display=\"block\"</script>";
	}

	include("header.php");
?>
<!-- Header -->
<header class="w3-display-container w3-content w3-wide header-width" id="home">
  
  <div class="w3-display-middle w3-margin-top w3-center">
  </div>
</header>
<div id = "grad1">
	<br><br>
	<p class = "a" >Teamfight Tactics Items Combination</p><br>
	<div id = "container2">
	<center>
		<table id = "table1">
			<!-- row 1 -->
			<tr>
			<td></td>
			<td><div class="tooltip"><img src="img/bfsword.png" alt="bf sword"  width="65px" height="65px">
				<span class="tooltiptext"><u>B. F. Sword</u><br>Attack Damage +20</span></div>
			</td>
			<td><div class="tooltip"><img src="img/recurvebow.png" alt="recurve" width="65px" height="65px">
				<span class="tooltiptext"><u>Recurve Bow</u><br>Attack Speed +20%</span></div>
			</td>
			<td><div class="tooltip"><img src="img/nlrod.png" alt="rod" width="65px" height="65px">
				<span class="tooltiptext"><u>Needlessly Large Rod</u><br>Ability Power +20</span></div>
			</td>
			<td><div class="tooltip"><img src="img/tear.png" alt="tear" width="65px" height="65px">
				<span class="tooltiptext"><u>Tear of the Goddess</u><br>Starting Mana +20</span></div>
			</td>
			<td><div class="tooltip"><img src="img/chainvest.png" alt="vest" width="65px" height="65px">
				<span class="tooltiptext"><u>Chain Vest</u><br>Armor +20</span></div>
			</td>
			<td><div class="tooltip"><img src="img/cloak.png" alt="cloak" width="65px" height="65px">
				<span class="tooltiptext"><u>Negatron Cloak</u><br>Magic Resist +20</span></div>
			</td>
			<td><div class="tooltip"><img src="img/giantbelt.png" alt="belt" width="65px" height="65px">
				<span class="tooltiptext"><u>Giant's Belt</u><br>Health +200</span></div>
			</td>
			<td><div class="tooltip"><img src="img/spatula.png" alt="spatula" width="65px" height="65px">
				<span class="tooltiptext"><u>Spatula</u><br>It will do something...</span></div>
			</td>
			</tr>
			
			<!-- row 2 -->
			<tr>
			<td><div class="tooltip"><img src="img/bfsword.png" alt="bf sword" width="65px" height="65px">
				<span class="tooltiptext"><u>B. F. Sword</u><br>Attack Damage +20</span></div>
			</td>
			<td><div class="tooltip"><img src="img/ie.png" alt="infinity edge" width="65px" height="65px">
				<span class="tooltiptext"><u>Infinity Edge</u><br>Attack Damage +40
				<br>Critical strikes deal 300% damage instead of 150%.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/sworddivine.png" alt="divine sword" width="65px" height="65px">
				<span class="tooltiptext"><u>Sword of the Divine</u><br>Attack Speed +20%<br>Attack Damage +20
				<br>Every second, has a 5% chance to gain 100% critical strike chance until the end of combat.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/gunblade.png" alt="hextech gunblade" width="65px" height="65px">
				<span class="tooltiptext"><u>Hextech Gunblade</u><br>Attack Damage +20<br>Ability Power +20
				<br>Heal for 25% of damage dealt. Does not heal for damage dealt by items.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/shojin.png" alt="shojin" width="65px" height="65px">
				<span class="tooltiptext"><u>Spear of Shojin</u><br>Attack Damage +20<br>Starting mana +20
				<br>After casting Special Ability for the first time, basic attacks restore an additional 15% of maximum mana on-hit.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/ga.png" alt="guardian angel" width="65px" height="65px">
				<span class="tooltiptext"><u>Guardian Angel</u><br>Attack Damage +20<br>Armor +20
				<br>Upon death, clears Grievous Wounds and revives after 2 seconds with 1000 health.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/blood.png" alt="bloodthirster" width="65px" height="65px">
				<span class="tooltiptext"><u>Bloodthirster</u><br>Attack Damage +20<br>Magic Resist +20
				<br>Heal for 50% of damage dealt by basic attacks.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/zeke.png" alt="zeke" width="65px" height="65px">
				<span class="tooltiptext"><u>Zeke's Herald</u><br>Attack Damage +20<br>Health +200
				<br>At the beginning of combat, the wearer and the champions two spaces to the left and right of the wearer gain 15% attack speed.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/youmoo.png" alt="youmoo" width="65px" height="65px">
				<span class="tooltiptext"><u>Youmoo's Ghostblade</u><br>Attack Damage +40
				<br>The wearer becomes an Assassin.</span></div>
			</td>
			</tr>
			
			<!-- row 3 -->
			<tr>
			<td><div class="tooltip"><img src="img/recurvebow.png" alt="bf sword" width="65px" height="65px">
				<span class="tooltiptext"><u>Recurve Bow</u><br>Attack Speed +20%</span></div>
			</td>
			<td><div class="tooltip"><img src="img/sworddivine.png" alt="divine sword" width="65px" height="65px">
				<span class="tooltiptext"><u>Sword of the Divine</u><br>Attack Speed +20%<br>Attack Damage +20
				<br>Every second, has a 5% chance to gain 100% critical strike chance until the end of combat.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/rfc.png" alt="rapidfire" width="65px" height="65px">
				<span class="tooltiptext"><u>Rapid Firecannon</u><br>Attack Speed +40%
				<br>Doubles attack range. Basic attacks cannot miss.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/guinsoo.png" alt="guinsoo" width="65px" height="65px">
				<span class="tooltiptext"><u>Guinsoo's Rageblade</u><br>Attack Speed +20%<br>Ability Power +20
				<br>Gain 4% attack speed on-hit. Stacks with no upper limit.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/statikk.png" alt="statikk" width="65px" height="65px">
				<span class="tooltiptext"><u>Statikk Shiv</u><br>Attack Speed +20%<br>Starting mana +20
				<br>Every third basic attack deals 100 magic damage to the target and 3 additional targets.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/pd.png" alt="pd" width="65px" height="65px">
				<span class="tooltiptext"><u>Phantom Dancer</u><br>Attack Speed +20%<br>Armor +20
				<br>Dodge all critical strikes.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/cursed.png" alt="bf sword" width="65px" height="65px">
				<span class="tooltiptext"><u>Cursed Blade</u><br>Attack Speed +20%<br>Magic Resist +20
				<br>Basic attacks have a 20% chance to shrink the target, removing 1 Star. A unit can be reduced to a 0-Star unit.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/titanic.png" alt="bf sword" width="65px" height="65px">
				<span class="tooltiptext"><u>Titanic Hydra</u><br>Attack Speed +20%<br>Health +200
				<br>Basic attacks deal 10% of your maximum health bonus damage to the target and all adjacent enemies.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/botrk.png" alt="bf sword" width="65px" height="65px">
				<span class="tooltiptext"><u>Blade of the Ruined King</u><br>Attack Speed +40%
				<br>The wearer becomes a Blademaster.</span></div>
			</td>
			</tr>
			
			<!-- row 4 -->
			<tr>
			<td><div class="tooltip"><img src="img/nlrod.png" alt="bf sword" width="65px" height="65px">
				<span class="tooltiptext"><u>Needlessly Large Rod</u><br>Ability Power +20</span></div>
			</td>
			<td><div class="tooltip"><img src="img/gunblade.png" alt="hextech gunblade" width="65px" height="65px">
				<span class="tooltiptext"><u>Hextech Gunblade</u><br>Attack Damage +20<br>Ability Power +20
				<br>Heal for 25% of damage dealt. Does not heal for damage dealt by items.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/guinsoo.png" alt="guinsoo" width="65px" height="65px">
				<span class="tooltiptext"><u>Guinsoo's Rageblade</u><br>Attack Speed +20%<br>Ability Power +20
				<br>Gain 4% attack speed on-hit. Stacks with no upper limit.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/rabadon.png" alt="rabadon" width="65px" height="65px">
				<span class="tooltiptext"><u>Rabadon's Deathcap</u><br>Ability Power +40
				<br>Increases ability power by 50%.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/luden.png" alt="luden" width="65px" height="65px">
				<span class="tooltiptext"><u>Luden's Echo</u><br>Ability Power +20<br>Starting mana +20
				<br>Special Ability deals 200 magic damage to all adjacent enemies to target.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/locket.png" alt="locket" width="65px" height="65px">
				<span class="tooltiptext"><u>Locket of the Iron Solari</u><br>Ability Power +20<br>Armor +20
				<br>At the beginning of combat, the wearer and the champions two spaces to the left and right of the wearer gain a 300 health shield.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/spark.png" alt="ionic" width="65px" height="65px">
				<span class="tooltiptext"><u>Ionic Spark</u><br>Ability Power +20<br>Magic Resist +20
				<br>Enemies take 200 true damage whenever they cast their Special Ability.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/morello.png" alt="morello" width="65px" height="65px">
				<span class="tooltiptext"><u>Morellonomicon</u><br>Ability Power +20<br>Health +200
				<br>Special Ability applies a burn on the enemies hit for 3 seconds, dealing 3% of target's maximum health true damage each second and applying 
				Grievous Wounds for the duration, preventing healing on the target.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/yuumi.png" alt="yuumi" width="65px" height="65px">
				<span class="tooltiptext"><u>Yuumi</u><br>Ability Power +40
				<br>The wearer becomes a Sorceror.</span></div>
			</td>
			</tr>
			
			<!-- row 5 -->
			<tr>
			<td><div class="tooltip"><img src="img/tear.png" alt="bf sword" width="65px" height="65px">
				<span class="tooltiptext"><u>Tear of the Goddess</u><br>Starting Mana +20</span></div>
			</td>
			<td><div class="tooltip"><img src="img/shojin.png" alt="shojin" width="65px" height="65px">
				<span class="tooltiptext"><u>Spear of Shojin</u><br>Attack Damage +20<br>Starting mana +20
				<br>After casting Special Ability for the first time, basic attacks restore an additional 15% of maximum mana on-hit.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/statikk.png" alt="statikk" width="65px" height="65px">
				<span class="tooltiptext"><u>Statikk Shiv</u><br>Attack Speed +20%<br>Starting mana +20
				<br>Every third basic attack deals 100 magic damage to the target and 3 additional targets.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/luden.png" alt="luden" width="65px" height="65px">
				<span class="tooltiptext"><u>Luden's Echo</u><br>Ability Power +20<br>Starting mana +20
				<br>Special Ability deals 200 magic damage to all adjacent enemies to target.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/seraph.png" alt="seraph" width="65px" height="65px">
				<span class="tooltiptext"><u>Seraph's Embrace</u><br>Starting mana +40
				<br>After casting Special Ability, gain 20 mana.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/frozen.png" alt="frozen" width="65px" height="65px">
				<span class="tooltiptext"><u>Frozen Heart</u><br>Starting mana +20<br>Armor +20
				<br>Adjacent enemies have their attack speed reduced by 20%.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/hush.png" alt="hush" width="65px" height="65px">
				<span class="tooltiptext"><u>Hush</u><br>Starting Mana +20<br>Magic Resist +20
				<br>Basic attacks have a 30% chance to silence the target.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/redemp.png" alt="redemp" width="65px" height="65px">
				<span class="tooltiptext"><u>Redemption</u><br>Starting Mana +20<br>Health +200
				<br>When reaching 25% of maximum health, creates a zone that, after a small delay, heals allies for 1000 health.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/darkin.png" alt="darkin" width="65px" height="65px">
				<span class="tooltiptext"><u>Darkin</u><br>Starting Mana +40
				<br>The wearer becomes a Demon.</span></div>
			</td>
			</tr>
			
			<!-- row 6 -->
			<tr>
			<td><div class="tooltip"><img src="img/chainvest.png" alt="bf sword" width="65px" height="65px">
				<span class="tooltiptext"><u>Chain Vest</u><br>Armor +20</span></div>
			</td>
			<td><div class="tooltip"><img src="img/ga.png" alt="guardian angel" width="65px" height="65px">
				<span class="tooltiptext"><u>Guardian Angel</u><br>Attack Damage +20<br>Armor +20
				<br>Upon death, clears Grievous Wounds and revives after 2 seconds with 1000 health.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/pd.png" alt="pd" width="65px" height="65px">
				<span class="tooltiptext"><u>Phantom Dancer</u><br>Attack Speed +20%<br>Armor +20
				<br>Dodge all critical strikes.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/locket.png" alt="locket" width="65px" height="65px">
				<span class="tooltiptext"><u>Locket of the Iron Solari</u><br>Ability Power +20<br>Armor +20
				<br>At the beginning of combat, the wearer and the champions two spaces to the left and right of the wearer gain a 300 health shield.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/frozen.png" alt="frozen" width="65px" height="65px">
				<span class="tooltiptext"><u>Frozen Heart</u><br>Starting mana +20<br>Armor +20
				<br>Adjacent enemies have their attack speed reduced by 20%.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/thornmail.png" alt="thorn" width="65px" height="65px">
				<span class="tooltiptext"><u>Thornmail</u><br>Armor +40
				<br>Reflect 100% of physical damage mitigated as true damage to the attacker.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/swordbreaker.png" alt="sword" width="65px" height="65px">
				<span class="tooltiptext"><u>Sword Breaker</u><br>Armor +20<br>Magic Resist +20
				<br>Basic attacks have a 20% chance to disarm the target.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/red.png" alt="red" width="65px" height="65px">
				<span class="tooltiptext"><u>Red Buff</u><br>Armor +20<br>Health +200
				<br>Basic attacks apply a burn on the enemies hit for 5 seconds, dealing 2.5% of target's maximum health true damage each second and applying 
				Grievous Wounds for the duration, preventing healing on the target.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/knights.png" alt="knights" width="65px" height="65px">
				<span class="tooltiptext"><u>Knight's Vow</u><br>Armor +40
				<br>The wearer becomes a Knight.</span></div>
			</td>
			</tr>
			
			<!-- row 7 -->
			<tr>
			<td><div class="tooltip"><img src="img/cloak.png" alt="bf sword" width="65px" height="65px">
				<span class="tooltiptext"><u>Negatron Cloak</u><br>Magic Resist +20</span></div>
			</td>
			<td><div class="tooltip"><img src="img/blood.png" alt="bloodthirster" width="65px" height="65px">
				<span class="tooltiptext"><u>Bloodthirster</u><br>Attack Damage +20<br>Magic Resist +20
				<br>Heal for 50% of damage dealt by basic attacks.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/cursed.png" alt="bf sword" width="65px" height="65px">
				<span class="tooltiptext"><u>Cursed Blade</u><br>Attack Speed +20%<br>Magic Resist +20
				<br>Basic attacks have a 20% chance to shrink the target, removing 1 Star. A unit can be reduced to a 0-Star unit.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/spark.png" alt="ionic" width="65px" height="65px">
				<span class="tooltiptext"><u>Ionic Spark</u><br>Ability Power +20<br>Magic Resist +20
				<br>Enemies take 200 true damage whenever they cast their Special Ability.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/hush.png" alt="hush" width="65px" height="65px">
				<span class="tooltiptext"><u>Hush</u><br>Starting Mana +20<br>Magic Resist +20
				<br>Basic attacks have a 30% chance to silence the target.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/swordbreaker.png" alt="sword" width="65px" height="65px">
				<span class="tooltiptext"><u>Sword Breaker</u><br>Armor +20<br>Magic Resist +20
				<br>Basic attacks have a 20% chance to disarm the target.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/claw.png" alt="claw" width="65px" height="65px">
				<span class="tooltiptext"><u>Dragon's Claw</u><br>Magic Resist +40
				<br>Gain 83% resistance to magic damage.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/zephyr.png" alt="zephyr" width="65px" height="65px">
				<span class="tooltiptext"><u>Spatula</u><br>Magic Resist +20<br>Health +200
				<br>At the start of combat, banishes for 5 seconds the unit that mirrors the wielder placement on the other side of the board.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/runaan.png" alt="runaan" width="65px" height="65px">
				<span class="tooltiptext"><u>Runaan's Hurricane</u><br>Magic Resist +40
				<br>Basic attacks hit 1 additional target for 25% damage.</span></div>
			</td>
			</tr>
			
			<!-- row 8 -->
			<tr>
			<td><div class="tooltip"><img src="img/giantbelt.png" alt="bf sword" width="65px" height="65px">
				<span class="tooltiptext"><u>Giant's Belt</u><br>Health +200</span></div>
			</td>
			<td><div class="tooltip"><img src="img/zeke.png" alt="zeke" width="65px" height="65px">
				<span class="tooltiptext"><u>Zeke's Herald</u><br>Attack Damage +20<br>Health +200
				<br>At the beginning of combat, the wearer and the champions two spaces to the left and right of the wearer gain 15% attack speed.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/titanic.png" alt="bf sword" width="65px" height="65px">
				<span class="tooltiptext"><u>Titanic Hydra</u><br>Attack Speed +20%<br>Health +200
				<br>Basic attacks deal 10% of your maximum health bonus damage to the target and all adjacent enemies.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/morello.png" alt="morello" width="65px" height="65px">
				<span class="tooltiptext"><u>Morellonomicon</u><br>Ability Power +20<br>Health +200
				<br>Special Ability applies a burn on the enemies hit for 3 seconds, dealing 3% of target's maximum health true damage each second and applying 
				Grievous Wounds for the duration, preventing healing on the target.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/redemp.png" alt="redemp" width="65px" height="65px">
				<span class="tooltiptext"><u>Redemption</u><br>Starting Mana +20<br>Health +200
				<br>When reaching 25% of maximum health, creates a zone that, after a small delay, heals allies for 1000 health.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/red.png" alt="red" width="65px" height="65px">
				<span class="tooltiptext"><u>Red Buff</u><br>Armor +20<br>Health +200
				<br>Basic attacks apply a burn on the enemies hit for 5 seconds, dealing 2.5% of target's maximum health true damage each second and applying 
				Grievous Wounds for the duration, preventing healing on the target.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/zephyr.png" alt="zephyr" width="65px" height="65px">
				<span class="tooltiptext"><u>Spatula</u><br>Magic Resist +20<br>Health +200
				<br>At the start of combat, banishes for 5 seconds the unit that mirrors the wielder placement on the other side of the board.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/warmog.png" alt="warmog" width="65px" height="65px">
				<span class="tooltiptext"><u>Warmog's Armor</u><br>Health +400
				<br>Regenerates 6% of missing health per second.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/mallet.png" alt="mallet" width="65px" height="65px">
				<span class="tooltiptext"><u>Frozen Mallet</u><br>Health +400
				<br>The wearer becomes a Glacial.</span></div>
			</td>
			</tr>
			
			<!-- row 9 -->
			<tr>
			<td><div class="tooltip"><img src="img/spatula.png" alt="bf sword" width="65px" height="65px">
				<span class="tooltiptext"><u>Spatula</u><br>It will do something...</span></div>
			</td>
			<td><div class="tooltip"><img src="img/youmoo.png" alt="youmoo" width="65px" height="65px">
				<span class="tooltiptext"><u>Youmoo's Ghostblade</u><br>Attack Damage +40
				<br>The wearer becomes an Assassin.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/botrk.png" alt="bf sword" width="65px" height="65px">
				<span class="tooltiptext"><u>Blade of the Ruined King</u><br>Attack Speed +40%
				<br>The wearer becomes a Blademaster.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/yuumi.png" alt="yuumi" width="65px" height="65px">
				<span class="tooltiptext"><u>Yuumi</u><br>Ability Power +40
				<br>The wearer becomes a Sorceror.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/darkin.png" alt="darkin" width="65px" height="65px">
				<span class="tooltiptext"><u>Darkin</u><br>Starting Mana +40
				<br>The wearer becomes a Demon.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/knights.png" alt="knights" width="65px" height="65px">
				<span class="tooltiptext"><u>Knight's Vow</u><br>Armor +40
				<br>The wearer becomes a Knight.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/runaan.png" alt="runaan" width="65px" height="65px">
				<span class="tooltiptext"><u>Runaan's Hurricane</u><br>Magic Resist +40
				<br>Basic attacks hit 1 additional target for 25% damage.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/mallet.png" alt="mallet" width="65px" height="65px">
				<span class="tooltiptext"><u>Frozen Mallet</u><br>Health +400
				<br>The wearer becomes a Glacial.</span></div>
			</td>
			<td><div class="tooltip"><img src="img/forceofnature.png" alt="force" width="65px" height="65px">
				<span class="tooltiptext"><u>Force of Nature</u><br>Increases the unit cap by 1.</span></div>
			</td>
			</tr>
		</table>
	</center>
	
	<!-- End page content -->
	<div class = "push"></div>
	</div>	
</div>
<?php include("footer.php");?>
</html>
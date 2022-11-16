<?php
//Load Arrays
require_once('./loadRandomContentLists.php');



//Load Random Lists For Cards
$RandomCards = array();

//Dungeons
array_push($RandomCards, array('#','Dungeon Generation'));
array_push($RandomCards, array('A Dungeon Door',$a_dungeon_door));
array_push($RandomCards, array('A Dungeon Room',$a_dungeon_room));
array_push($RandomCards, array('Dungeon Graffiti',$dungeon_graffiti));
array_push($RandomCards, array('Epitaphs',$epitaphs));

//Taverns
array_push($RandomCards, array('#','Taverns and Lodging'));
array_push($RandomCards, array('The Tavern Keeper',$the_tavern_keeper));
array_push($RandomCards, array('A Drunken Boast',$a_drunken_boast));
array_push($RandomCards, array('An Inn Patron',$an_inn_patron));
array_push($RandomCards, array('A Bard Sings',$a_bard_sings));
array_push($RandomCards, array('A Tale From An Old Adventurer',$a_tale_from_an_old_adventurer));
array_push($RandomCards, array('The Local Drink',$the_local_drink));
array_push($RandomCards, array('Tavern Food',$tavern_food));
array_push($RandomCards, array('Baked Goods',$baked_goods));
array_push($RandomCards, array('Meal Made From Monster Parts',$meal_made_from_monster_parts));
array_push($RandomCards, array('Tavern Encounter',$tavern_encounter));
array_push($RandomCards, array('No Tavern But A Colorful Host',$no_tavern_but_a_colorful_host));

//Otherwordly Beings, Contracts, and Bargains
array_push($RandomCards, array('#','Beings and Bargains'));
array_push($RandomCards, array('A Deity',$a_deity));
array_push($RandomCards, array('An Angel',$an_angel));
array_push($RandomCards, array('A Ghost With Unfinished Business',$a_ghost_with_unfinished_business));
array_push($RandomCards, array('A Demonic Physical Trait',$a_demonic_physical_trait));
array_push($RandomCards, array('Evil Contract Asking Price',$evil_contract_asking_price));
array_push($RandomCards, array('A Demon Lord',$a_demon_lord));
array_push($RandomCards, array('A Familiar Or Pet',$a_familiar_or_pet));
array_push($RandomCards, array('A Fey Bargain Cost',$a_fey_bargain_cost));
array_push($RandomCards, array('A Boon From Magical Water',$a_boon_from_magical_water));

//Lore and Worldbuilding
array_push($RandomCards, array('#','Worldbuilding and Effects'));
array_push($RandomCards, array('Secret Societies',$secret_societies));
array_push($RandomCards, array('Marks of Darkness',$marks_of_darkness));
array_push($RandomCards, array('Fantasy Drugs and Their Effects',$fantasy_drugs_and_their_effects));
array_push($RandomCards, array('Random Potion Effects',$random_potion_effects));

//Travel and Weather
array_push($RandomCards, array('#','Travel and Weather'));
array_push($RandomCards, array('Forest Locations',$forest_locations));
array_push($RandomCards, array('Art Along The Path',$art_along_the_path));
//Lodging
//Sailing
array_push($RandomCards, array('A Ship Name',$a_ship_name));
array_push($RandomCards, array('Sailing Conditions',$sailing_conditions));
array_push($RandomCards, array('A Sailing Event',$a_sailing_event));
//Flying
array_push($RandomCards, array('Flight Conditions',$flight_conditions));
//Weather and Shadowfell
array_push($RandomCards, array('Magic Weather and Storms',$magic_weather_and_storms));
array_push($RandomCards, array('Shadowfell Side Effects',$shadowfell_side_effects));

//Items
//Legendary
array_push($RandomCards, array('#','Legendary Items'));
array_push($RandomCards, array('Artifacts of Great Power',$artifacts_of_great_power));
//Class Specific
array_push($RandomCards, array('#','Class Specific Items'));
array_push($RandomCards, array('Paladin Items',$paladin_items));
array_push($RandomCards, array('Rogue Items',$rogue_items));
array_push($RandomCards, array('Druid Items',$druid_items));
array_push($RandomCards, array('Bard Items',$bard_items));
//Setting Specific
array_push($RandomCards, array('#','Setting Specific Items'));
array_push($RandomCards, array('Aquatic Items',$aquatic_items));
array_push($RandomCards, array('Mad Scientist Items',$mad_scientist_items));
array_push($RandomCards, array('Haunted House Items',$haunted_house_items));
array_push($RandomCards, array('Black Market Items',$black_market_items));
array_push($RandomCards, array('Magic Items With Sentimental Origins',$magic_items_with_sentimental_origins));
//Books and Trinkets
array_push($RandomCards, array('#','Books and Trinkets'));
array_push($RandomCards, array('A Random Book',$a_random_book));
array_push($RandomCards, array('Mysterious Trinkets',$mysterious_trinkets));
//Pick A Pocket
array_push($RandomCards, array('#','NPC Items and Pickpocket Loot'));
array_push($RandomCards, array('NPC Pocket Item',$npc_pocket_item));
array_push($RandomCards, array('Ogre Pocket Item',$ogre_pocket_item));
//Interesting Misc
array_push($RandomCards, array('#','Misc Items'));
array_push($RandomCards, array('Dangerous Gnomish Inventions',$dangerous_gnomish_inventions));
array_push($RandomCards, array('Cultist Items',$cultist_items));
array_push($RandomCards, array('Hag Lair Item',$hag_lair_item));
array_push($RandomCards, array('Arrow Types',$arrow_types));
array_push($RandomCards, array('Masks',$masks));
array_push($RandomCards, array('Weapon Runes',$weapon_runes));
array_push($RandomCards, array('Magical Weapon Properties',$magical_weapon_properties));
array_push($RandomCards, array('Recharge Method For Magic Items',$recharge_method_for_magic_items));

//Injuries, Curses, and Madness
array_push($RandomCards, array('#','Injury, Disease, Curses, and Madness'));
array_push($RandomCards, array('Zero HP Injuries',$zero_hp_injuries));
array_push($RandomCards, array('Diseases',$diseases));
array_push($RandomCards, array('Curses',$curses));
array_push($RandomCards, array('Hallucinations',$hallucinations));
array_push($RandomCards, array('Insanity Effects',$insanity_effects));
array_push($RandomCards, array('Indefinite Madnesses',$indefinite_madnesses));

//Event
array_push($RandomCards, array('#','Local Events'));
array_push($RandomCards, array('Local Fair Activity',$local_fair_activity));
array_push($RandomCards, array('A Fortune Teller',$a_fortune_teller));

array_push($RandomCards, array('#','Long Rests'));
array_push($RandomCards, array('Long Rest Events',$long_rest_events));
array_push($RandomCards, array('You Wake Up Without',$you_wake_up_without));

//Encounters
array_push($RandomCards, array('#','Encounters'));
array_push($RandomCards, array('Non Combat Urban Encounters',$non_combat_urban_encounters));
array_push($RandomCards, array('Social Encounters On The Road',$social_encounters_on_the_road));
array_push($RandomCards, array('Beach Encounters',$beach_encounters));
array_push($RandomCards, array('Scary Forest Encounters',$scary_forest_encounters));
array_push($RandomCards, array('Nordic Viking Encounters',$nordic_viking_encounters));
array_push($RandomCards, array('Desert Encounters',$desert_encounters));
array_push($RandomCards, array('Jungle Encounters',$jungle_encounters));

//Roleplaying
array_push($RandomCards, array('#','Roleplaying'));
array_push($RandomCards, array('Warm Up Roleplaying Questions For Players',$warm_up_roleplaying_questions_for_players));

//Character Building
array_push($RandomCards, array('#','Character Building'));
array_push($RandomCards, array('Character Background',$character_background));
array_push($RandomCards, array('Dwarven Clans',$dwarven_clans));
array_push($RandomCards, array('Aasimar Traits',$aasimar_traits));
array_push($RandomCards, array('Dwarven Traits',$dwarven_traits));
array_push($RandomCards, array('Dragonborn Traits',$dragonborn_traits));
array_push($RandomCards, array('Unique Elven Traits',$unique_elven_traits));

//NPC Building
array_push($RandomCards, array('#','NPC Building'));
array_push($RandomCards, array('Interesting Boss Mechanics',$interesting_boss_mechanics));
array_push($RandomCards, array('Annoying Unhelpful NPCs',$annoying_unhelpful_npcs));
array_push($RandomCards, array('Civilian Warforged',$civilian_warforged));
array_push($RandomCards, array('Shopkeepers and Merchants',$shopkeepers_and_merchants));
array_push($RandomCards, array('Maximum Security Prisoners',$maximum_security_prisoners));

//Magic Stuff
array_push($RandomCards, array('#','Magic Stuff'));
array_push($RandomCards, array('Unique Magical Services',$unique_magical_services));
array_push($RandomCards, array('Summoning Mishaps',$summoning_mishaps));
array_push($RandomCards, array('Teleportation Mishaps',$teleportation_mishaps));
array_push($RandomCards, array('Wild Magic Surges',$wild_magic_surges));

//Other Stuff
array_push($RandomCards, array('#','Other'));
array_push($RandomCards, array('Detect Thoughts Results',$detect_thoughts_results));
array_push($RandomCards, array('Noble Ball Gossip',$noble_ball_gossip));
array_push($RandomCards, array('Riddles and Answers',$riddles_and_answers));
array_push($RandomCards, array('Murder Mystery Plot Hooks',$murder_mystery_plot_hooks));
array_push($RandomCards, array('Ridiculous Famous Legends',$ridiculous_famous_legends));


//Instructions
echo '<div class="row">';
echo '<p class="text-muted text-center"><small><a href="https://thegmdb.com/DND/index.php?tool=quickRandomContent">Refresh</a> this page for a whole new set of random content.</small></p>
<p class="text-muted text-center"><small>
Click the "<i class="las la-redo-alt"></i> Get Another" button to change an individual section without reloading the page.</small></p>';
echo '</div>';

//quicklinks
foreach ($RandomCards as $key => $value) {

//Generate Card Category Toggles
	if($value[0][0]=='#'){
	$catid_from_phrase = strtolower(str_replace(" ","_", $value[1]));

	echo '<span class="badge badge-light category_toggles" data-attr-showhide="'.'.$catid_from_phrase.'.'"><a href="#'.$catid_from_phrase.'">'.$value[1].'</a></span> ';

	//echo '<span class="badge badge-default category_toggles" data-attr-showhide="'.$catid_from_phrase.'">'.$value[1].'</span> ';

	}
}

echo '<div class="mt-5 row row-cols-1 row-cols-lg-2 g-4">';
foreach ($RandomCards as $key => $value) {

//Generate Cards
	if($value[0][0]=='#'){
	$catid_from_phrase = strtolower(str_replace(" ","_", $value[1]));

	echo '
	</div>
	<hr>
	<h3 id="'.$catid_from_phrase.'" class="text-uppercase text-center '.$catid_from_phrase.'">'.$value[1].'</h3>
	<div class="row row-cols-1 row-cols-lg-2 g-4">
	';
	}
	else{
		$id_from_phrase = strtolower(str_replace(" ","_", $value[0]));
	echo '
<div class="col">
	<div class="card h-100 bg-light text-dark '.$catid_from_phrase.'" data-attr-card-category="'.$catid_from_phrase.'">
		<div class="card-body">
			<h5 class="card-title text-center align-middle">'.$value[0].' <button data-attr-scana="'.$id_from_phrase.'" type="button" class="align-middle float-end btn btn-dark fillViaAjaxParentChildTarget"><i class="las la-redo-alt"></i></button></h5>
			<hr id="id_'.$id_from_phrase.'">
			<p class="card-text text-justify targetForAjaxFill">
	';
			if (is_array($value)) {
			printOne($value[1]);
			}
echo '
			</p>
    </div><!-- end card body -->
		<div class="card-footer text-center">
		<small class="align-middle float-start text-muted">Credits and sources in footer.</small>
		<small class="align-middle float-end text-muted"><a href="#gmdb_header">Return to top</a>.</small>      
    </div><!-- end card footer -->
	</div>
</div>
';

	}
}
echo '</div>';

function printOne($passedArray){
	//Shuffle and Get Card
	//echo '
	//<script>console.log("Hit printone with '.$passedArray.'")</script>
	//';
	if( isset($passedArray) && is_array($passedArray) ){
	$randomOne=array_rand(array_flip($passedArray),1);
	echo ''.$randomOne.'';
	}
}
?>
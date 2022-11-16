
<div class="row">  
  <div class="col">
   

    <?php 
$linkData = array(
//Main Sites
array('#','Main Sites'),
array('DND Speak','https://www.dndspeak.com/'),
//Dungeons
array('#','Dungeons (DND Speak)'),
array('Pocket Dungeons','https://www.dndspeak.com/pocket-dungeons/'),
//Random,
array('#','Random Generators (DND Speak)'),
array('Random Generator - Book','https://www.dndspeak.com/random-book-generator/'),
array('Random Generator - Dwarven Insults','https://www.dndspeak.com/dwarven-insult-generator/'),
array('Random Generator - Hag','https://www.dndspeak.com/hag-generator/'),
array('Random Generator - NPC','https://www.dndspeak.com/random-npc-generator/'),
array('Random Generator - Potion ','https://www.dndspeak.com/random-potion-generator/'),
array('Random Generator - Tavern','https://www.dndspeak.com/tavern-generator/'),
//1d100,
array('#','1d100 Lists (DND Speak)'),
array('#','BOOKS'),
array('1d100 Wizarding Treatises And Book Titles','https://www.dndspeak.com/2021/02/100-wizarding-treatises-and-book-titles/'),
array('1d100 Library Books','https://www.dndspeak.com/2018/02/100-library-books/'),
array('1d100 Interesting Books','https://www.dndspeak.com/2017/12/100-interesting-books/'),
array('#','CLASSES'),
array('1d100 Paladin Magic Items','https://www.dndspeak.com/2019/09/100-paladin-magic-items/'),
array('1d100 Bard Songs','https://www.dndspeak.com/2019/06/100-bard-songs/'),
array('1d100 Magic Items For A Rogue','https://www.dndspeak.com/2019/04/100-magic-items-for-a-rogue/'),
array('1d100 Druidic Treasures','https://www.dndspeak.com/2018/06/100-druidic-treasures/'),
array('1d100 Interesting Bard Instruments','https://www.dndspeak.com/2018/11/100-interesting-bard-instruments/'),
array('#','CONDITIONS AND CURSES'),
array('1d100 Marks Of Darkness','https://www.dndspeak.com/2021/02/100-marks-of-darkness/'),
array('1d100 Indefinite Madnesses','https://www.dndspeak.com/2020/06/100-indefinite-madnesses/'),
array('1d100 Flight Conditions','https://www.dndspeak.com/2020/06/100-flight-conditions/'),
array('1d100 Sailing Conditions','https://www.dndspeak.com/2019/11/100-sailing-conditions/'),
array('1d100 Things You Might Wake Up And Find Missing','https://www.dndspeak.com/2018/11/100-things-you-might-wake-up-and-find-missing/'),
array('1d100 Shadowfell Side Effects','https://www.dndspeak.com/2018/05/100-shadowfell-side-effects/'),
array('1d100 Magic Weather And Storms','https://www.dndspeak.com/2018/04/100-magic-weather-and-storms/'),
array('1d100 Diseases','https://www.dndspeak.com/2018/04/100-diseases/'),
array('1d100 Hallucinations','https://www.dndspeak.com/2018/03/100-hallucinations/'),
array('1d100 Zero Hp Injuries','https://www.dndspeak.com/2018/02/100-zero-hp-injuries/'),
array('1d100 Random Potion Effects','https://www.dndspeak.com/2017/12/100-random-potion-effects/'),
array('1d100 Insanity Effects','https://www.dndspeak.com/2017/12/100-insanity-effects/'),
array('1d100 Curses','https://www.dndspeak.com/2017/12/100-curses/'),
array('#','ENCOUNTERS'),
array('1d100 Non Combat Urban Encounters','https://www.dndspeak.com/2021/07/100-non-combat-urban-encounters/'),
array('1d100 Fortunes From The Fortune Teller','https://www.dndspeak.com/2021/01/100-fortunes-from-the-fortune-teller/'),
array('1d100 Activities At The Local Faire','https://www.dndspeak.com/2019/08/100-activities-at-the-local-faire/'),
array('1d100 Beach Encounters','https://www.dndspeak.com/2018/09/100-beach-encounters/'),
array('1d100 Scary Forest Encounters','https://www.dndspeak.com/2018/11/100-scary-forest-encounters/'),
array('1d100 Nordic Viking Encounters','https://www.dndspeak.com/2018/06/100-nordic-viking-encounters/'),
array('1d100 Interesting Forest Locations','https://www.dndspeak.com/2018/07/100-interesting-forest-locations/'),
array('1d100 Ghosts Unfinished Business','https://www.dndspeak.com/2018/04/100-ghosts-unfinished-business/'),
array('1d100 Social Encounters On The Road','https://www.dndspeak.com/2018/03/100-social-encounters-on-the-road/'),
array('1d100 Desert Encounters','https://www.dndspeak.com/2018/01/100-desert-encounters/'),
array('1d100 Tavern Encounters','https://www.dndspeak.com/2018/02/100-tavern-encounters/'),
array('1d100 Drunken Boasts','https://www.dndspeak.com/2017/12/100-drunken-boasts/'),
array('1d100 Sea Travel Events','https://www.dndspeak.com/2017/12/100-sea-travel-events/'),
array('1d100 Fey Bargains','https://www.dndspeak.com/2017/12/100-fey-bargains/'),
array('1d100 Jungle Encounters','https://www.dndspeak.com/2017/12/100-jungle-encounters/'),
array('1d100 Long Rest Events','https://www.dndspeak.com/2017/12/100-long-rest-events/'),
array('#','DUNGEON THEMED'),
array('1d100 Interesting Dungeon Doors','https://www.dndspeak.com/2021/03/18/100-interesting-dungeon-doors/'),
array('1d100 Epitaphs','https://www.dndspeak.com/2021/02/12/100-epitaphs/'),
array('1d100 Dungeon Graffiti','https://www.dndspeak.com/2018/11/19/100-dungeon-graffiti/'),
array('#','FOOD AND DRINK'),
array('1d100 Breads Muffins And Other Baked Goods','https://www.dndspeak.com/2020/02/17/100-breads-muffins-and-other-baked-goods/'),
array('1d100 Meals Made From Monster Parts','https://www.dndspeak.com/2020/01/02/100-meals-made-from-monster-parts/'),
array('1d100 Foraged Foods','https://www.dndspeak.com/2018/03/26/100-foraged-foods/'),
array('#','FOREST THEMED'),
array('1d100 Interesting Forest Locations','https://www.dndspeak.com/2018/07/24/100-interesting-forest-locations/'),
array('1d100 Art Along The Path','https://www.dndspeak.com/2017/12/19/100-art-along-the-path/'),
array('#','ITEMS'),
array('1d100 Interesting Trinkets','https://www.dndspeak.com/2021/04/28/100-interesting-trinkets/'),
array('1d100 Fantasy Drugs And Their Effects','https://www.dndspeak.com/2019/03/26/100-fantasy-drugs-and-their-effects/'),
array('1d100 Gnomish Inventions Where Safety Was Clearly An Afterthought','https://www.dndspeak.com/2019/10/28/100-gnomish-inventions-where-safety-was-clearly-an-afterthought/'),
array('1d100 Art Objects Worth 100gp','https://www.dndspeak.com/2019/09/27/100-art-objects-worth-100gp/'),
array('1d100 Paladin Magic Items','https://www.dndspeak.com/2019/09/17/100-paladin-magic-items/'),
array('1d100 Things To Find In A Mad Scientists Lab','https://www.dndspeak.com/2019/08/10/100-things-to-find-in-a-mad-scientists-lab/'),
array('1d100 Things You Can Find In A Haunted House','https://www.dndspeak.com/2019/06/24/100-things-you-can-find-in-a-haunted-house/'),
array('1d100 Magic Items For A Rogue','https://www.dndspeak.com/2019/04/12/100-magic-items-for-a-rogue/'),
array('1d100 Items For Sale In A Fantasy Black Market','https://www.dndspeak.com/2019/04/03/100-items-for-sale-in-a-fantasy-black-market/'),
array('1d100 Interesting Bard Instruments','https://www.dndspeak.com/2018/11/07/100-interesting-bard-instruments/'),
array('1d100 Magical Items With Sentimental Origins','https://www.dndspeak.com/2018/09/21/100-magical-items-with-sentimental-origins/'),
array('1d100 Masks','https://www.dndspeak.com/2018/08/03/100-masks/'),
array('1d100 Items In A Hags Lair','https://www.dndspeak.com/2018/07/19/100-items-in-a-hags-lair/'),
array('1d100 Druidic Treasures','https://www.dndspeak.com/2018/06/27/100-druidic-treasures/'),
array('1d100 Different Arrow Types','https://www.dndspeak.com/2018/05/23/100-different-arrow-types/'),
array('1d100 Artifacts Of Great Power','https://www.dndspeak.com/2018/03/13/100-artifacts-of-great-power/'),
array('1d100 Ways To Recharge A Magic Item','https://www.dndspeak.com/2018/02/07/100-ways-to-recharge-a-magic-item/'),
array('1d100 Items In An Npcs Pockets','https://www.dndspeak.com/2018/02/06/100-items-in-an-npcs-pockets/'),
array('1d100 Campsite Items','https://www.dndspeak.com/2018/01/27/100-campsite-items/'),
array('1d100 Cultist Items','https://www.dndspeak.com/2018/01/19/100-cultist-items/'),
array('1d100 Mysterious Trinkets','https://www.dndspeak.com/2018/01/08/100-mysterious-trinkets/'),
array('1d100 Random Potion Effects','https://www.dndspeak.com/2017/12/24/100-random-potion-effects/'),
array('1d100 Things In An Ogres Pockets','https://www.dndspeak.com/2017/12/04/100-things-in-an-ogres-pockets/'),
array('#','MAGIC'),
array('1d100 Summoning Mishaps','https://www.dndspeak.com/2020/01/20/100-summoning-mishaps/'),
array('1d100 Unique Magical Services','https://www.dndspeak.com/2020/01/13/100-unique-magical-services/'),
array('1d100 Secrets Revealed Through Detect Thoughts','https://www.dndspeak.com/2019/06/26/100-secrets-revealed-through-detect-thoughts/'),
array('1d100 Weapon Runes','https://www.dndspeak.com/2019/04/29/100-weapon-runes/'),
array('1d100 Magic Weather And Storms','https://www.dndspeak.com/2018/04/18/100-magic-weather-and-storms/'),
array('1d100 Teleportation Mishaps','https://www.dndspeak.com/2018/02/22/100-teleportation-mishaps/'),
array('1d100 Wild Magic Surges','https://www.dndspeak.com/2018/02/09/100-wild-magic-surges/'),
array('1d100 Random Boons','https://www.dndspeak.com/2017/12/09/100-random-boons/'),
array('1d100 Fey Bargains','https://www.dndspeak.com/2017/12/04/100-fey-bargains/'),
array('#','MONSTERS'),
array('1d100 Beholder Personalities','https://www.dndspeak.com/2019/04/17/100-beholder-personalities/'),
array('1d100 New Darklords And Domains In The Ravenloft Setting','https://www.dndspeak.com/2018/11/01/100-new-darklords-and-domains-in-the-ravenloft-setting/'),
array('1d100 Things Demons Devils Ask For In Their Contracts','https://www.dndspeak.com/2018/08/30/100-things-demons-devils-ask-for-in-their-contracts/'),
array('1d100 Eldritch Horrors','https://www.dndspeak.com/2018/08/28/100-eldritch-horrors/'),
array('1d100 Angels And Their Descriptions','https://www.dndspeak.com/2018/04/27/100-angels-and-their-descriptions/'),
array('1d100 Interesting Boss Mechanics','https://www.dndspeak.com/2018/04/24/100-interesting-boss-mechanics/'),
array('1d100 Ghosts Unfinished Business','https://www.dndspeak.com/2018/04/12/100-ghosts-unfinished-business/'),
array('1d100 Familiars Pets','https://www.dndspeak.com/2018/03/27/100-familiars-pets/'),
array('1d100 Demon Lords','https://www.dndspeak.com/2017/12/06/100-demon-lords/'),
array('1d100 Demon Physical Traits','https://www.dndspeak.com/2019/09/15/100-demon-physical-traits/'),
array('#','NPCs'),
array('1d100 Villainous Character Traits','https://www.dndspeak.com/2021/05/19/100-villainous-character-traits/'),
array('1d100 Fireside Stories From Retired Adventurers','https://www.dndspeak.com/2021/04/23/100-fireside-stories-from-retired-adventurers/'),
array('1d100 Fortunes From The Fortune Teller','https://www.dndspeak.com/2021/01/03/100-fortunes-from-the-fortune-teller/'),
array('1d100 Rumors Plots Or Pieces Of Gossip The Party Overhears At A Noble Ball','https://www.dndspeak.com/2021/01/02/100-rumors-plots-or-pieces-of-gossip-the-party-overhears-at-a-noble-ball/'),
array('1d100 Maximum Security Prisoners','https://www.dndspeak.com/2020/07/24/100-maximum-security-prisoners/'),
array('1d100 Fantasy Guilds','https://www.dndspeak.com/2020/06/25/100-fantasy-guilds/'),
array('1d100 Unique Elven Features','https://www.dndspeak.com/2020/03/09/100-unique-elven-features/'),
array('1d100 Warforged That Werent Forged For War','https://www.dndspeak.com/2019/10/09/100-warforged-that-werent-forged-for-war/'),
array('1d100 Annoying And Unhelpful Npcs That Your Pcs Will Probably Murder','https://www.dndspeak.com/2019/09/25/100-annoying-and-unhelpful-npcs-that-your-pcs-will-probably-murder/'),
array('1d100 Interesting Shopkeepers And Merchants','https://www.dndspeak.com/2018/12/08/100-interesting-shopkeepers-and-merchants/'),
array('1d100 Aasimar Traits','https://www.dndspeak.com/2018/08/17/100-aasimar-traits/'),
array('1d100 Dwarven Traits','https://www.dndspeak.com/2018/04/02/100-dwarven-traits/'),
array('1d100 Dwarven Clan Names','https://www.dndspeak.com/2018/02/26/100-dwarven-clan-names/'),
array('1d100 Factions','https://www.dndspeak.com/2018/02/14/100-factions/'),
array('1d100 Adventurers','https://www.dndspeak.com/2018/01/16/100-adventurers/'),
array('1d100 Secret Societies','https://www.dndspeak.com/2017/12/21/100-secret-societies/'),
array('1d100 Tiefling Traits','https://www.dndspeak.com/2017/12/04/100-tiefling-traits/'),
array('1d100 Dragonborn Traits','https://www.dndspeak.com/2018/05/30/100-dragonborn-traits/'),
array('1d100 Elven Clothing Accessories Descriptions','https://www.dndspeak.com/2019/05/03/100-elven-clothing-accessories-descriptions/'),
array('#','OCEAN THEMED'),
array('1d100 Things You Pull Up From A Casted Net At Sea','https://www.dndspeak.com/2020/02/13/100-things-you-pull-up-from-a-casted-net-at-sea/'),
array('1d100 Names For A Ship','https://www.dndspeak.com/2020/01/21/100-names-for-a-ship/'),
array('1d100 Minor Inconveniences At Sea','https://www.dndspeak.com/2020/01/09/100-minor-inconveniences-at-sea/'),
array('1d100 Sailing Conditions','https://www.dndspeak.com/2019/11/12/100-sailing-conditions/'),
array('1d100 Aquatic Items','https://www.dndspeak.com/2018/01/10/100-aquatic-items/'),
array('#','PUZZLES'),
array('1d100 Riddles And Their Answers','https://www.dndspeak.com/2018/11/28/100-riddles-and-their-answers/'),
array('#','ROLEPLAYING'),
array('1d100 Murder Mystery Plot Hooks','https://www.dndspeak.com/2020/01/30/100-murder-mystery-plot-hooks/'),
array('1d100 Adventuring School Superlatives','https://www.dndspeak.com/2020/01/10/100-adventuring-school-superlatives/'),
array('1d100 Activities At The Local Faire','https://www.dndspeak.com/2019/08/07/100-activities-at-the-local-faire/'),
array('1d100 Bard Songs','https://www.dndspeak.com/2019/06/05/100-bard-songs/'),
array('1d100 Warm Up Roleplaying Questions For Players','https://www.dndspeak.com/2019/03/05/100-warm-up-roleplaying-questions-for-players/'),
array('1d100 Ridiculous Famous Legends','https://www.dndspeak.com/2018/04/09/100-ridiculous-famous-legends/'),
array('1d100 Character Backgrounds','https://www.dndspeak.com/2018/02/05/100-character-backgrounds/'),
array('#','TAVERNS AND INNS'),
array('1d100 Fireside Stories From Retired Adventurers','https://www.dndspeak.com/2021/04/23/100-fireside-stories-from-retired-adventurers/'),
array('1d100 Interesting Tavernkeepers','https://www.dndspeak.com/2021/03/20/100-interesting-tavernkeepers/'),
array('1d100 Types Of Alcohol That Can Be Purchased In Taverns','https://www.dndspeak.com/2019/03/28/100-types-of-alcohol-that-can-be-purchased-in-taverns/'),
array('1d100 Colorful Hosts','https://www.dndspeak.com/2019/03/15/100-colorful-hosts/'),
array('1d100 Jobs Posted To A Tavern Community Board','https://www.dndspeak.com/2018/05/01/100-jobs-posted-to-a-tavern-community-board/'),
array('1d100 Inn Patrons','https://www.dndspeak.com/2018/04/16/100-inn-patrons/'),
array('1d100 Signature Tavern Drinks','https://www.dndspeak.com/2018/03/01/100-signature-tavern-drinks/'),
array('1d100 Tavern Food','https://www.dndspeak.com/2017/12/12/100-tavern-food/'),
array('1d100 Drunken Boasts','https://www.dndspeak.com/2017/12/05/100-drunken-boasts/'),
array('#','WEAPONS'),
array('1d100 Magical Weapon Properties','https://www.dndspeak.com/2021/04/29/100-magical-weapon-properties/'),
array('1d100 Magic Sword Names','https://www.dndspeak.com/2020/04/27/100-magic-sword-names/'),
array('1d100 Paladin Magic Items','https://www.dndspeak.com/2019/09/17/100-paladin-magic-items/'),
array('1d100 Weapon Runes','https://www.dndspeak.com/2019/04/29/100-weapon-runes/'),
array('1d100 Magic Items For A Rogue','https://www.dndspeak.com/2019/04/12/100-magic-items-for-a-rogue/'),
array('1d100 Different Arrow Types','https://www.dndspeak.com/2018/05/23/100-different-arrow-types/'),
array('1d100 Ways To Recharge A Magic Item','https://www.dndspeak.com/2018/02/07/100-ways-to-recharge-a-magic-item/'),
array('#','...')
);

echo '

  <input autofocus="true" id="d100Datatable_customFilterSearch" name="d100Datatable_customFilterSearch" class="border-0 rounded-right form-control" placeholder="Start typing..." aria-describedby="sizing-addon1" type="text">
';


echo '
<table id="d100Datatable" class="dataTable table table-dark" style="width:100%;">
';
echo '
  <thead>
    <tr>
      <th scope="col">Category</th>
      <th scope="col">Name</th>
      <th scope="col">Link</th>
    </tr>
  </thead>
  <tbody>
  ';
foreach ($linkData as $key => $value){
	if ($value[0]=='#') {
		$category=$value[1];
		/*echo '
    <tr>
    <td colspan="2" class="bg-light text-dark">'.$value[1].'</td>
    </tr>
		';*/
	}
	else{



        echo '
    <tr>
    <td>'.$category.'</td>
    ';
  foreach ($value as $keyx => $valuex) {
    //echo '
//      <td>'.$category.'</td>
    //';
    if ($keyx==0) {
    echo '
      <td>'.$valuex.'</td>
    ';
    }
    if ($keyx==1) {
    echo '
      <td>
<div class="d-grid gap-2">
  <a href="'.$valuex.'" target="_blank" class="btn btn-primary" type="button">Link</a>
</div></td>
    ';
    }
  }
    echo '
    </tr>
    ';
}
	}

echo '
</tbody>
</table>
';

?>


    
  </div>
</div>


    <script type="text/javascript">
    /*
    $(document).ready(function(){
      $('#d100Datatable').DataTable();
    });
    */
    </script>






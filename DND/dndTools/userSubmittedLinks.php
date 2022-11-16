<div class="row">  
  <div class="col">
      <?php 
$linkData = array(
array('Encounters','Goblinist: 5e Encounter Generator','This is a great 5e encounter generator. What sets this generator apart is the fact that it comes complete with filters for biome, number of monsters, number and level of players, difficulty, nad more. This means that you always get exactly the kind of encounter you need.','http://tools.goblinist.com/5enc'),
array('Magic','5e Spells Grimoire','A complete catalog of 5e spells. Search and filter by class, level, school, etcetera.','http://thebombzen.github.io/grimoire/'),
array('Reference','4e Homebrew Wiki','Lots of Homebrew for D&D 4e.','http://www.dandwiki.com/wiki/4e_Homebrew'),
array('Encounters','5e Encounter Builder/Tracker','Monsters from many available resources, neatly organized, with an option to generate random encounters. Create an encounter by clicking the Random encounter button or by adding monsters from the monster table.','http://kobold.club/fight/#/encounter-builder'),
array('Magic','DnD-Spells','Spell descriptions and spell sheet creator','https://www.dnd-spells.com/'),
array('Generators','City and town generator','A nifty settlement generator with the option to set parameters manually. Generates just about everything. Environment, government, local legends, notable people, job postings, and so on.','http://citygenerator.morgajel.net/'),
array('Reference','3.5e Database','Most useful source for 3.5e','https://dndtools.net/'),
array('Reference','3.5e D20SRD','SRD Content for 3.5e','http://www.d20srd.org/index.htm'),
array('Reference','5th Edition SRD','Ad free, super fast web version of the 5th edition SRD','http://5thsrd.org'),
array('Generators','Fantasy Calendar Generator','Allows you to customize a calendar and all its attributes (# of months in a year, # of days in a week, etc.) along with tools for moon phases and celestial events','https://donjon.bin.sh/fantasy/calendar/'),
array('Reference','Monster Analysis Blog','Surf goes into incredible detail to help. Legit.','http://surfarcher.blogspot.com.au/2014/07/d-5e-monsters-master-index.html'),
array('Reference','Alignment: Explained','Detailed explanation of the different aspects of DnDs alignment system.','http://easydamus.com/alignment.html'),
array('Generators','Name/Place/Description/Map/More Generators','Just about any generator you could possibly need is on this website','http://fantasynamegenerators.com/'),
array('Encounters','Improved Initiative','Improved Initative enhances combat in your D&D game without getting between you and your players.','http://www.improved-initiative.com/'),
array('Generators','DM Muse','Collection of crowdsourced generators and utilities','http://www.dmmuse.com'),
array('Encounters','Monster Workbench','SRD-compliant website that allows for creation of custom monsters and saving/loading. Includes dice rollers and so many diferent generators.','https://www.monsterworkbench.com/'),
array('Reference','All About Flumphs','Just for u/Cup_Of_Madness.','https://forgottenrealms.fandom.com/wiki/Flumph'),
array('Utilities','Token Stamp','Quickly convert images into a map token .png file.  Variety of borders and colors available. ','http://rolladvantage.com/tokenstamp/'),
array('Reference','5E Monsters by CR','5E Monsters by Challenge Rating','https://www.5thsrd.org/gamemaster_rules/monster_indexes/monsters_by_cr/'),
array('Reference','D&D Tomb','5e Rules SRD, plus homebrew characters, monsters and D&D news.','https://www.dndtomb.com/5e/')
);


echo '

  <input autofocus="true" id="uSubResDatatable_customFilterSearch" name="uSubResDatatable_customFilterSearch" class="border-0 rounded-right form-control" placeholder="Start typing..." aria-describedby="sizing-addon1" type="text">
';


echo '
<table id="uSubResDatatable" class="dataTable table table-dark">
';
echo '
  <thead>
    <tr>
      <th scope="col">Category</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Link</th>
    </tr>
  </thead>
  <tbody>
  ';
foreach ($linkData as $key => $value){
        echo '
    <tr>
    ';
  foreach ($value as $keyx => $valuex) {

    if ($keyx==0) {
      // code...
    echo '
      <td>'.$valuex.'</td>
    ';
    }
    if ($keyx==1) {
      // code...
    echo '
      <td>'.$valuex.'</td>
    ';
    }
    if ($keyx==2) {
    echo '
      <td>'.$valuex.'</td>
    ';
    }
    if ($keyx==3) {
    echo '
      <td><a target="_blank" href="'.$valuex.'">Link</a></td>
    ';
    }
  }
    echo '
    </tr>
    ';
}

echo '
</tbody>
</table>
';

?>



  </div>
</div>


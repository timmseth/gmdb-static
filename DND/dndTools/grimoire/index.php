<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>The Grimoire</title>
    <meta name="description" content="A searchable D&D 5e spell list, sorted by class and level.">
    <link rel="icon" href="images/calibre-viewer.png">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="./fonts/linux-libertine/index.css">
    <link rel="canonical" href="./">
    <meta property="og:title" content="The Grimoire">
    <meta property="og:type" content="website">
    <meta property="og:url" content="./">
    <meta property="og:description" content="The Grimoire - A searchable D&D 5e spell list, sorted by class and level.">
    <meta property="og:image" content="/images/calibre-viewer.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="256">
    <meta property="og:image:height" content="256">
    <meta property="og:image:alt" content="A book with a magnifying glass">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.0/jets.min.js"></script>
    <script type="text/javascript">
      function menuClick() {
        if ( document.getElementById("menu").className.match(/(?:^|\s)show(?!\S)/) ) {
          document.getElementById("menu").className = document.getElementById("menu").className.replace ( /(?:^|\s)show(?!\S)/g , '' )
        }
        else {
          document.getElementById("menu").className += " show";
        }
        if ( document.getElementById("menu2").className.match(/(?:^|\s)show(?!\S)/) ) {
          document.getElementById("menu2").className = document.getElementById("menu2").className.replace ( /(?:^|\s)show(?!\S)/g , '' )
        }
        else {
          document.getElementById("menu2").className += " show";
        }
      }

      window.onload = function(){
        document.getElementById("menuIcon").addEventListener( 'click' , menuClick );
      }
    </script>
    <script src="js/tagsearch.js"></script>
    <style type="text/css">
      body {
  background-color: #202528!important; 
  background: #202528!important; 
  color: #efefef!important;
  font-family: "Linux Libertine", Georgia, serif;
  font-size: 18px;
  line-height: 1.5;
  font-weight: 400;
  /*color: #333;*/
  /*background-color: #fdfdfd; */

}
    </style>
</head>


  <body style="background-color:#202528!important;background: #202528!important;color: #efefef!important;">

    <header class="site-header">
  <a id="top"></a>
  <div class="wrapper">
    <nav class="site-nav">
      <a class="site-title" href="index.php">The Grimoire</a>
      <a href="#" id="menuIcon" class="menu-icon">
        <svg viewBox="0 0 18 15">
          <path fill="#424242" d="M18,1.484c0,0.82-0.665,1.484-1.484,1.484H1.484C0.665,2.969,0,2.304,0,1.484l0,0C0,0.665,0.665,0,1.484,0 h15.031C17.335,0,18,0.665,18,1.484L18,1.484z"/>
          <path fill="#424242" d="M18,7.516C18,8.335,17.335,9,16.516,9H1.484C0.665,9,0,8.335,0,7.516l0,0c0-0.82,0.665-1.484,1.484-1.484 h15.031C17.335,6.031,18,6.696,18,7.516L18,7.516z"/>
          <path fill="#424242" d="M18,13.516C18,14.335,17.335,15,16.516,15H1.484C0.665,15,0,14.335,0,13.516l0,0 c0-0.82,0.665-1.484,1.484-1.484h15.031C17.335,12.031,18,12.696,18,13.516L18,13.516z"/>
        </svg>
      </a>

      <div id="menu" class="trigger">
        
          <a class="page-link" href="./tags/artificer.html">Artificer</a>
        
          <a class="page-link" href="./tags/bard.html">Bard</a>
        
          <a class="page-link" href="./tags/cleric.html">Cleric</a>
        
          <a class="page-link" href="./tags/druid.html">Druid</a>
        
          <a class="page-link" href="./tags/paladin.html">Paladin</a>
        
          <a class="page-link" href="./tags/ranger.html">Ranger</a>
        
          <a class="page-link" href="./tags/sorcerer.html">Sorcerer</a>
        
          <a class="page-link" href="./tags/warlock.html">Warlock</a>
        
          <a class="page-link" href="./tags/wizard.html">Wizard</a>
        
      </div>
    </nav>

  </div>

</header>



    <div class="page-content">
      <div class="wrapper">
        <div class="home">
  <h1 class="page-heading">All Spells</h1>
  <p id="spellSearch">Search by name: <input type="search" class="jetsSearch" id="jetsSearch"></p>
  <p id="tagSearch">Search by tag: <input type="search" name="tagSearch" id="tagSearchBar" class="jetsSearch"></p>
  <p id="sourceSearch">Search by source: <input type="search" name="sourceSearch" id="sourceSearchBar" class="jetsSearch"></p>
   <dl class="tag-list">
    <dt>Spell tier:</dt>
    
    <dd>
      <a href="#cantrip">Cantrip</a>
    </dd>
    
    <dd>
      <a href="#level1">Level 1</a>
    </dd>
    
    <dd>
      <a href="#level2">Level 2</a>
    </dd>
    
    <dd>
      <a href="#level3">Level 3</a>
    </dd>
    
    <dd>
      <a href="#level4">Level 4</a>
    </dd>
    
    <dd>
      <a href="#level5">Level 5</a>
    </dd>
    
    <dd>
      <a href="#level6">Level 6</a>
    </dd>
    
    <dd>
      <a href="#level7">Level 7</a>
    </dd>
    
    <dd>
      <a href="#level8">Level 8</a>
    </dd>
    
    <dd>
      <a href="#level9">Level 9</a>
    </dd>
    
  </dl>
  
    <a id="cantrip"></a>
    <h2 class="post-list-head jetsHide">Cantrips</h2>
    <ul class="post-list jetsContent">
      
      
        <li class="post-link-container" data-tags="artificer,sorcerer,wizard,cantrip,action,conjuration" data-sources="PHB.211,SRD.114">
          <a class="post-link" href="./spells/acid-splash">Acid Splash</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,warlock,wizard,cantrip,action,abjuration" data-sources="PHB.218">
          <a class="post-link" href="./spells/blade-ward">Blade Ward</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,sorcerer,warlock,wizard,cantrip,action,evocation" data-sources="SCAG.142,TCE.106">
          <a class="post-link" href="./spells/booming-blade">Booming Blade</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,warlock,wizard,cantrip,action,necromancy" data-sources="PHB.221,SRD.124">
          <a class="post-link" href="./spells/chill-touch">Chill Touch</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,wizard,cantrip,action,transmutation" data-sources="EE.16,XGE.152">
          <a class="post-link" href="./spells/control-flames">Control Flames</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,druid,sorcerer,warlock,wizard,cantrip,action,concentration,conjuration" data-sources="EE.16,XGE.152">
          <a class="post-link" href="./spells/create-bonfire">Create Bonfire</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,bard,sorcerer,wizard,cantrip,action,concentration,evocation" data-sources="PHB.230,SRD.133">
          <a class="post-link" href="./spells/dancing-lights">Dancing Lights</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,cantrip,action,transmutation" data-sources="PHB.236,SRD.138">
          <a class="post-link" href="./spells/druidcraft">Druidcraft</a>
        </li>
      
        <li class="post-link-container" data-tags="warlock,cantrip,action,evocation" data-sources="PHB.237,SRD.139">
          <a class="post-link" href="./spells/eldritch-blast">Eldritch Blast</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,sorcerer,wizard,cantrip,action,evocation" data-sources="PHB.241,SRD.144">
          <a class="post-link" href="./spells/fire-bolt">Fire Bolt</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,warlock,wizard,cantrip,action,concentration,enchantment" data-sources="PHB.244">
          <a class="post-link" href="./spells/friends">Friends</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,druid,sorcerer,warlock,wizard,cantrip,action,evocation" data-sources="EE.18,XGE.156">
          <a class="post-link" href="./spells/frostbite">Frostbite</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,sorcerer,warlock,wizard,cantrip,action,evocation" data-sources="SCAG.143,TCE.107">
          <a class="post-link" href="./spells/green-flame-blade">Green-Flame Blade</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,cleric,druid,cantrip,action,concentration,divination" data-sources="PHB.248,SRD.151">
          <a class="post-link" href="./spells/guidance">Guidance</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,wizard,cantrip,action,transmutation" data-sources="EE.19,XGE.157">
          <a class="post-link" href="./spells/gust">Gust</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,warlock,wizard,cantrip,action,conjuration" data-sources="XGE.158">
          <a class="post-link" href="./spells/infestation">Infestation</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,bard,cleric,sorcerer,wizard,cantrip,action,evocation" data-sources="PHB.255,SRD.159">
          <a class="post-link" href="./spells/light">Light</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,sorcerer,warlock,wizard,cantrip,action,evocation" data-sources="SCAG.143,TCE.107">
          <a class="post-link" href="./spells/lightning-lure">Lightning Lure</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,bard,sorcerer,warlock,wizard,cantrip,action,conjuration" data-sources="PHB.256,SRD.160">
          <a class="post-link" href="./spells/mage-hand">Mage Hand</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,druid,warlock,cantrip,bonus,transmutation" data-sources="EE.20,XGE.160">
          <a class="post-link" href="./spells/magic-stone">Magic Stone</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,bard,cleric,druid,sorcerer,wizard,cantrip,long,transmutation" data-sources="PHB.259,SRD.164">
          <a class="post-link" href="./spells/mending">Mending</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,bard,sorcerer,wizard,cantrip,action,transmutation" data-sources="PHB.259,SRD.164">
          <a class="post-link" href="./spells/message">Message</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,warlock,wizard,cantrip,action,enchantment" data-sources="TCE.108">
          <a class="post-link" href="./spells/mind-sliver">Mind Sliver</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,warlock,wizard,cantrip,action,illusion" data-sources="PHB.260,SRD.164">
          <a class="post-link" href="./spells/minor-illusion">Minor Illusion</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,wizard,cantrip,action,transmutation" data-sources="EE.21,XGE.162">
          <a class="post-link" href="./spells/mold-earth">Mold Earth</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,druid,sorcerer,warlock,wizard,cantrip,action,conjuration" data-sources="PHB.266,SRD.169">
          <a class="post-link" href="./spells/poison-spray">Poison Spray</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,bard,sorcerer,warlock,wizard,cantrip,action,transmutation" data-sources="PHB.267,SRD.170">
          <a class="post-link" href="./spells/prestidigitation">Prestidigitation</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,cantrip,action,transmutation" data-sources="XGE.163">
          <a class="post-link" href="./spells/primal-savagery">Primal Savagery</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,cantrip,action,conjuration" data-sources="PHB.269,SRD.172">
          <a class="post-link" href="./spells/produce-flame">Produce Flame</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,sorcerer,wizard,cantrip,action,evocation" data-sources="PHB.271,SRD.174">
          <a class="post-link" href="./spells/ray-of-frost">Ray of Frost</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,cleric,druid,cantrip,action,concentration,abjuration" data-sources="PHB.272,SRD.175">
          <a class="post-link" href="./spells/resistance">Resistance</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,cantrip,action,evocation" data-sources="PHB.272,SRD.176">
          <a class="post-link" href="./spells/sacred-flame">Sacred Flame</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,wizard,cantrip,action,transmutation" data-sources="EE.21,XGE.164">
          <a class="post-link" href="./spells/shape-water">Shape Water</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,cantrip,bonus,transmutation" data-sources="PHB.275,SRD.179">
          <a class="post-link" href="./spells/shillelagh">Shillelagh</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,sorcerer,wizard,cantrip,action,evocation" data-sources="PHB.275,SRD.179">
          <a class="post-link" href="./spells/shocking-grasp">Shocking Grasp</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,cleric,cantrip,action,necromancy" data-sources="PHB.277,SRD.181">
          <a class="post-link" href="./spells/spare-the-dying">Spare the Dying</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,sorcerer,warlock,wizard,cantrip,action,conjuration" data-sources="SCAG.143,TCE.115">
          <a class="post-link" href="./spells/sword-burst">Sword Burst</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,cantrip,action,transmutation" data-sources="PHB.282,SRD.187">
          <a class="post-link" href="./spells/thaumaturgy">Thaumaturgy</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,druid,cantrip,action,transmutation" data-sources="PHB.282">
          <a class="post-link" href="./spells/thorn-whip">Thorn Whip</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,bard,druid,sorcerer,warlock,wizard,cantrip,action,evocation" data-sources="EE.22,XGE.168">
          <a class="post-link" href="./spells/thunderclap">Thunderclap</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,warlock,wizard,cantrip,action,necromancy" data-sources="XGE.169">
          <a class="post-link" href="./spells/toll-the-dead">Toll the Dead</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,warlock,wizard,cantrip,action,concentration,divination" data-sources="PHB.284,SRD.189">
          <a class="post-link" href="./spells/true-strike">True Strike</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,cantrip,action,enchantment" data-sources="PHB.285,SRD.189">
          <a class="post-link" href="./spells/vicious-mockery">Vicious Mockery</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,cantrip,action,evocation" data-sources="XGE.171">
          <a class="post-link" href="./spells/word-of-radiance">Word of Radiance</a>
        </li>
      
    </ul>
    <a class="post-meta jetsHide" href="#top">Back to top &#8593;</a>
  
    <a id="level1"></a>
    <h2 class="post-list-head jetsHide">Level 1</h2>
    <ul class="post-list jetsContent">
      
      
        <li class="post-link-container" data-tags="artificer,druid,ranger,sorcerer,wizard,level1,reaction,abjuration" data-sources="EE.15,XGE.150">
          <a class="post-link" href="./spells/absorb-elements">Absorb Elements</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,ranger,wizard,level1,long,ritual,abjuration" data-sources="PHB.211,SRD.114">
          <a class="post-link" href="./spells/alarm">Alarm</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,druid,ranger,level1,action,enchantment" data-sources="PHB.212,SRD.115">
          <a class="post-link" href="./spells/animal-friendship">Animal Friendship</a>
        </li>
      
        <li class="post-link-container" data-tags="warlock,level1,action,abjuration" data-sources="PHB.215">
          <a class="post-link" href="./spells/armor-of-agathys">Armor of Agathys</a>
        </li>
      
        <li class="post-link-container" data-tags="warlock,level1,action,conjuration" data-sources="PHB.215">
          <a class="post-link" href="./spells/arms-of-hadar">Arms of Hadar</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,cleric,level1,action,concentration,enchantment" data-sources="PHB.216,SRD.120">
          <a class="post-link" href="./spells/bane">Bane</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,ranger,level1,action,concentration,divination" data-sources="EE.15,XGE.150">
          <a class="post-link" href="./spells/beast-bond">Beast Bond</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,paladin,level1,action,concentration,enchantment" data-sources="PHB.219,SRD.122">
          <a class="post-link" href="./spells/bless">Bless</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,wizard,level1,action,evocation" data-sources="PHB.220,SRD.123">
          <a class="post-link" href="./spells/burning-hands">Burning Hands</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,sorcerer,wizard,level1,action,transmutation" data-sources="EE.15,XGE.150">
          <a class="post-link" href="./spells/catapult">Catapult</a>
        </li>
      
        <li class="post-link-container" data-tags="warlock,wizard,level1,action,concentration,necromancy" data-sources="XGE.151">
          <a class="post-link" href="./spells/cause-fear">Cause Fear</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,paladin,level1,long,ritual,abjuration" data-sources="XGE.151">
          <a class="post-link" href="./spells/ceremony">Ceremony</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,level1,action,evocation" data-sources="XGE.151">
          <a class="post-link" href="./spells/chaos-bolt">Chaos Bolt</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,druid,sorcerer,warlock,wizard,level1,action,enchantment" data-sources="PHB.221,SRD.124">
          <a class="post-link" href="./spells/charm-person">Charm Person</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,wizard,level1,action,evocation" data-sources="PHB.221">
          <a class="post-link" href="./spells/chromatic-orb">Chromatic Orb</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,wizard,level1,action,illusion" data-sources="PHB.222,SRD.125">
          <a class="post-link" href="./spells/color-spray">Color Spray</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,cleric,paladin,level1,action,enchantment" data-sources="PHB.223,SRD.125">
          <a class="post-link" href="./spells/command">Command</a>
        </li>
      
        <li class="post-link-container" data-tags="paladin,level1,bonus,concentration,enchantment" data-sources="PHB.224">
          <a class="post-link" href="./spells/compelled-duel">Compelled Duel</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,warlock,wizard,level1,action,ritual,divination" data-sources="PHB.224,SRD.126">
          <a class="post-link" href="./spells/comprehend-languages">Comprehend Languages</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,druid,level1,action,transmutation" data-sources="PHB.229,SRD.132">
          <a class="post-link" href="./spells/create-or-destroy-water">Create or Destroy Water</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,bard,cleric,druid,paladin,ranger,level1,action,evocation" data-sources="PHB.230,SRD.132">
          <a class="post-link" href="./spells/cure-wounds">Cure Wounds</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,paladin,level1,action,concentration,divination" data-sources="PHB.231,SRD.134">
          <a class="post-link" href="./spells/detect-evil-and-good">Detect Evil and Good</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,bard,cleric,druid,paladin,ranger,sorcerer,wizard,level1,action,concentration,ritual,divination" data-sources="PHB.231,SRD.134">
          <a class="post-link" href="./spells/detect-magic">Detect Magic</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,druid,paladin,ranger,level1,action,concentration,ritual,divination" data-sources="PHB.231,SRD.134">
          <a class="post-link" href="./spells/detect-poison-and-disease">Detect Poison and Disease</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,bard,sorcerer,wizard,level1,action,illusion" data-sources="PHB.233,SRD.135">
          <a class="post-link" href="./spells/disguise-self">Disguise Self</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,level1,action,enchantment" data-sources="PHB.234">
          <a class="post-link" href="./spells/dissonant-whispers">Dissonant Whispers</a>
        </li>
      
        <li class="post-link-container" data-tags="paladin,level1,bonus,concentration,evocation" data-sources="PHB.234,SRD.136">
          <a class="post-link" href="./spells/divine-favor">Divine Favor</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,druid,sorcerer,wizard,level1,action,evocation" data-sources="EE.17,XGE.155">
          <a class="post-link" href="./spells/earth-tremor">Earth Tremor</a>
        </li>
      
        <li class="post-link-container" data-tags="ranger,level1,bonus,concentration,conjuration" data-sources="PHB.237">
          <a class="post-link" href="./spells/ensnaring-strike">Ensnaring Strike</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,ranger,level1,action,concentration,conjuration" data-sources="PHB.238,SRD.140">
          <a class="post-link" href="./spells/entangle">Entangle</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,sorcerer,warlock,wizard,level1,bonus,concentration,transmutation" data-sources="PHB.238,SRD.141">
          <a class="post-link" href="./spells/expeditious-retreat">Expeditious Retreat</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,bard,druid,level1,action,concentration,evocation" data-sources="PHB.239,SRD.141">
          <a class="post-link" href="./spells/faerie-fire">Faerie Fire</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,sorcerer,wizard,level1,action,necromancy" data-sources="PHB.239,SRD.142">
          <a class="post-link" href="./spells/false-life">False Life</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,bard,sorcerer,wizard,level1,reaction,transmutation" data-sources="PHB.239,SRD.142">
          <a class="post-link" href="./spells/feather-fall">Feather Fall</a>
        </li>
      
        <li class="post-link-container" data-tags="wizard,level1,long,ritual,conjuration" data-sources="PHB.240,SRD.143">
          <a class="post-link" href="./spells/find-familiar">Find Familiar</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,ranger,sorcerer,wizard,level1,action,concentration,conjuration" data-sources="PHB.243,SRD.146">
          <a class="post-link" href="./spells/fog-cloud">Fog Cloud</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,ranger,level1,action,transmutation" data-sources="PHB.246,SRD.150">
          <a class="post-link" href="./spells/goodberry">Goodberry</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,sorcerer,wizard,level1,action,conjuration" data-sources="PHB.246,SRD.150">
          <a class="post-link" href="./spells/grease">Grease</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,level1,action,evocation" data-sources="PHB.248,SRD.151">
          <a class="post-link" href="./spells/guiding-bolt">Guiding Bolt</a>
        </li>
      
        <li class="post-link-container" data-tags="ranger,level1,bonus,concentration,conjuration" data-sources="PHB.249">
          <a class="post-link" href="./spells/hail-of-thorns">Hail of Thorns</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,cleric,druid,level1,bonus,evocation" data-sources="PHB.250,SRD.153">
          <a class="post-link" href="./spells/healing-word">Healing Word</a>
        </li>
      
        <li class="post-link-container" data-tags="warlock,level1,reaction,evocation" data-sources="PHB.250,SRD.154">
          <a class="post-link" href="./spells/hellish-rebuke">Hellish Rebuke</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,paladin,level1,action,concentration,enchantment" data-sources="PHB.250,SRD.154">
          <a class="post-link" href="./spells/heroism">Heroism</a>
        </li>
      
        <li class="post-link-container" data-tags="warlock,level1,bonus,concentration,enchantment" data-sources="PHB.251">
          <a class="post-link" href="./spells/hex">Hex</a>
        </li>
      
        <li class="post-link-container" data-tags="ranger,level1,bonus,concentration,divination" data-sources="PHB.251,SRD.155">
          <a class="post-link" href="./spells/hunters-mark">Hunter’s Mark</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,wizard,level1,action,conjuration" data-sources="EE.19,XGE.157">
          <a class="post-link" href="./spells/ice-knife">Ice Knife</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,bard,wizard,level1,long,ritual,divination" data-sources="PHB.252,SRD.155">
          <a class="post-link" href="./spells/identify">Identify</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,warlock,wizard,level1,long,ritual,illusion" data-sources="PHB.252,SRD.156">
          <a class="post-link" href="./spells/illusory-script">Illusory Script</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,level1,action,necromancy" data-sources="PHB.253,SRD.157">
          <a class="post-link" href="./spells/inflict-wounds">Inflict Wounds</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,druid,ranger,sorcerer,wizard,level1,action,transmutation" data-sources="PHB.254,SRD.158">
          <a class="post-link" href="./spells/jump">Jump</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,bard,druid,ranger,wizard,level1,action,transmutation" data-sources="PHB.256,SRD.160">
          <a class="post-link" href="./spells/longstrider">Longstrider</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,wizard,level1,action,abjuration" data-sources="PHB.256,SRD.160">
          <a class="post-link" href="./spells/mage-armor">Mage Armor</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,wizard,level1,action,evocation" data-sources="PHB.257,SRD.161">
          <a class="post-link" href="./spells/magic-missile">Magic Missile</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,druid,paladin,warlock,wizard,level1,action,concentration,abjuration" data-sources="PHB.270,SRD.173">
          <a class="post-link" href="./spells/protection-from-evil-and-good">Protection from Evil and Good</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,cleric,druid,paladin,level1,action,ritual,transmutation" data-sources="PHB.270,SRD.173">
          <a class="post-link" href="./spells/purify-food-and-drink">Purify Food and Drink</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,wizard,level1,action,necromancy" data-sources="PHB.271">
          <a class="post-link" href="./spells/ray-of-sickness">Ray of Sickness</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,cleric,level1,bonus,abjuration" data-sources="PHB.272,SRD.176">
          <a class="post-link" href="./spells/sanctuary">Sanctuary</a>
        </li>
      
        <li class="post-link-container" data-tags="paladin,ranger,level1,bonus,concentration,evocation" data-sources="PHB.274">
          <a class="post-link" href="./spells/searing-smite">Searing Smite</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,wizard,level1,reaction,abjuration" data-sources="PHB.275,SRD.179">
          <a class="post-link" href="./spells/shield">Shield</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,paladin,level1,bonus,concentration,abjuration" data-sources="PHB.275,SRD.179">
          <a class="post-link" href="./spells/shield-of-faith">Shield of Faith</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,wizard,level1,action,concentration,illusion" data-sources="PHB.276,SRD.179">
          <a class="post-link" href="./spells/silent-image">Silent Image</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,wizard,level1,reaction,enchantment" data-sources="SCC.38">
          <a class="post-link" href="./spells/silvery-barbs">Silvery Barbs</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,wizard,level1,action,enchantment" data-sources="PHB.276,SRD.180">
          <a class="post-link" href="./spells/sleep">Sleep</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,druid,ranger,wizard,level1,long,abjuration" data-sources="XGE.165">
          <a class="post-link" href="./spells/snare">Snare</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,druid,ranger,level1,action,ritual,divination" data-sources="PHB.277,SRD.181">
          <a class="post-link" href="./spells/speak-with-animals">Speak with Animals</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,sorcerer,wizard,level1,action,concentration,evocation" data-sources="TCE.115">
          <a class="post-link" href="./spells/tashas-caustic-brew">Tasha’s Caustic Brew</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,wizard,level1,action,concentration,enchantment" data-sources="PHB.280">
          <a class="post-link" href="./spells/tashas-hideous-laughter">Tasha’s Hideous Laughter</a>
        </li>
      
        <li class="post-link-container" data-tags="wizard,level1,action,ritual,conjuration" data-sources="PHB.282">
          <a class="post-link" href="./spells/tensers-floating-disk">Tenser’s Floating Disk</a>
        </li>
      
        <li class="post-link-container" data-tags="paladin,level1,bonus,concentration,evocation" data-sources="PHB.282">
          <a class="post-link" href="./spells/thunderous-smite">Thunderous Smite</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,druid,sorcerer,wizard,level1,action,evocation" data-sources="PHB.282,SRD.187">
          <a class="post-link" href="./spells/thunderwave">Thunderwave</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,warlock,wizard,level1,action,ritual,conjuration" data-sources="PHB.284,SRD.189">
          <a class="post-link" href="./spells/unseen-servant">Unseen Servant</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,warlock,wizard,level1,action,concentration,evocation" data-sources="PHB.289">
          <a class="post-link" href="./spells/witch-bolt">Witch Bolt</a>
        </li>
      
        <li class="post-link-container" data-tags="paladin,level1,bonus,concentration,evocation" data-sources="PHB.289">
          <a class="post-link" href="./spells/wrathful-smite">Wrathful Smite</a>
        </li>
      
        <li class="post-link-container" data-tags="ranger,level1,bonus,concentration,transmutation" data-sources="XGE.171">
          <a class="post-link" href="./spells/zephyr-strike">Zephyr Strike</a>
        </li>
      
    </ul>
    <a class="post-meta jetsHide" href="#top">Back to top &#8593;</a>
  
    <a id="level2"></a>
    <h2 class="post-list-head jetsHide">Level 2</h2>
    <ul class="post-list jetsContent">
      
      
        <li class="post-link-container" data-tags="sorcerer,wizard,level2,action,evocation" data-sources="EE.15,XGE.150">
          <a class="post-link" href="./spells/aganazzars-scorcher">Aganazzar’s Scorcher</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,bard,cleric,paladin,ranger,level2,action,abjuration" data-sources="PHB.211,SRD.114">
          <a class="post-link" href="./spells/aid">Aid</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,sorcerer,wizard,level2,action,concentration,transmutation" data-sources="PHB.211,SRD.114">
          <a class="post-link" href="./spells/alter-self">Alter Self</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,druid,ranger,level2,action,ritual,enchantment" data-sources="PHB.212,SRD.115">
          <a class="post-link" href="./spells/animal-messenger">Animal Messenger</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,wizard,level2,action,abjuration" data-sources="PHB.215,SRD.118">
          <a class="post-link" href="./spells/arcane-lock">Arcane Lock</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,druid,wizard,level2,long,ritual,divination" data-sources="PHB.215,SRD.120">
          <a class="post-link" href="./spells/augury">Augury</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,ranger,level2,action,concentration,transmutation" data-sources="PHB.217,SRD.121">
          <a class="post-link" href="./spells/barkskin">Barkskin</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,ranger,level2,action,concentration,ritual,divination" data-sources="PHB.217">
          <a class="post-link" href="./spells/beast-sense">Beast Sense</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,cleric,sorcerer,wizard,level2,action,necromancy" data-sources="PHB.219">
          <a class="post-link" href="./spells/blindnessdeafness">Blindness/Deafness</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,sorcerer,wizard,level2,action,concentration,illusion" data-sources="PHB.219,SRD.123">
          <a class="post-link" href="./spells/blur">Blur</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,cleric,warlock,wizard,level2,action,divination" data-sources="SCC.37">
          <a class="post-link" href="./spells/borrowed-knowledge">Borrowed Knowledge</a>
        </li>
      
        <li class="post-link-container" data-tags="paladin,level2,bonus,concentration,evocation" data-sources="PHB.219,SRD.123">
          <a class="post-link" href="./spells/branding-smite">Branding Smite</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,cleric,level2,action,concentration,enchantment" data-sources="PHB.221,SRD.123">
          <a class="post-link" href="./spells/calm-emotions">Calm Emotions</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,warlock,wizard,level2,action,concentration,conjuration" data-sources="PHB.222">
          <a class="post-link" href="./spells/cloud-of-daggers">Cloud of Daggers</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,cleric,druid,wizard,level2,action,evocation" data-sources="PHB.227,SRD.130">
          <a class="post-link" href="./spells/continual-flame">Continual Flame</a>
        </li>
      
        <li class="post-link-container" data-tags="ranger,level2,action,transmutation" data-sources="PHB.228">
          <a class="post-link" href="./spells/cordon-of-arrows">Cordon Of Arrows</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,warlock,wizard,level2,action,concentration,enchantment" data-sources="PHB.229">
          <a class="post-link" href="./spells/crown-of-madness">Crown of Madness</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,warlock,wizard,level2,action,concentration,evocation" data-sources="PHB.230,SRD.133">
          <a class="post-link" href="./spells/darkness">Darkness</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,druid,ranger,sorcerer,wizard,level2,action,transmutation" data-sources="PHB.230,SRD.133">
          <a class="post-link" href="./spells/darkvision">Darkvision</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,wizard,level2,action,concentration,divination" data-sources="PHB.231,SRD.135">
          <a class="post-link" href="./spells/detect-thoughts">Detect Thoughts</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,wizard,level2,bonus,concentration,transmutation" data-sources="XGE.154">
          <a class="post-link" href="./spells/dragons-breath">Dragon’s Breath</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,wizard,level2,action,concentration,conjuration" data-sources="EE.17,XGE.154">
          <a class="post-link" href="./spells/dust-devil">Dust Devil</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,warlock,wizard,level2,action,concentration,transmutation" data-sources="EE.17,XGE.154">
          <a class="post-link" href="./spells/earthbind">Earthbind</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,bard,cleric,druid,ranger,sorcerer,wizard,level2,action,concentration,transmutation" data-sources="PHB.237,SRD.139">
          <a class="post-link" href="./spells/enhance-ability">Enhance Ability</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,bard,druid,sorcerer,wizard,level2,action,concentration,transmutation" data-sources="PHB.237,SRD.140">
          <a class="post-link" href="./spells/enlarge-reduce">Enlarge/Reduce</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,warlock,level2,action,enchantment" data-sources="PHB.238,SRD.140">
          <a class="post-link" href="./spells/enthrall">Enthrall</a>
        </li>
      
        <li class="post-link-container" data-tags="paladin,level2,long,conjuration" data-sources="PHB.240,SRD.143">
          <a class="post-link" href="./spells/find-steed">Find Steed</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,druid,ranger,level2,action,divination" data-sources="PHB.241,SRD.144">
          <a class="post-link" href="./spells/find-traps">Find Traps</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,level2,bonus,concentration,evocation" data-sources="PHB.242,SRD.145">
          <a class="post-link" href="./spells/flame-blade">Flame Blade</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,wizard,level2,action,concentration,conjuration" data-sources="PHB.242,SRD.145">
          <a class="post-link" href="./spells/flaming-sphere">Flaming Sphere</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,paladin,wizard,level2,action,ritual,necromancy" data-sources="PHB.245,SRD.148">
          <a class="post-link" href="./spells/gentle-repose">Gentle Repose</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,ranger,sorcerer,wizard,level2,action,concentration,evocation" data-sources="PHB.248,SRD.152">
          <a class="post-link" href="./spells/gust-of-wind">Gust of Wind</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,ranger,level2,bonus,concentration,conjuration" data-sources="XGE.157">
          <a class="post-link" href="./spells/healing-spirit">Healing Spirit</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,bard,druid,level2,action,concentration,transmutation" data-sources="PHB.250,SRD.153">
          <a class="post-link" href="./spells/heat-metal">Heat Metal</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,cleric,druid,sorcerer,warlock,wizard,level2,action,concentration,enchantment" data-sources="PHB.251,SRD.154">
          <a class="post-link" href="./spells/hold-person">Hold Person</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,bard,sorcerer,warlock,wizard,level2,action,concentration,illusion" data-sources="PHB.254,SRD.157">
          <a class="post-link" href="./spells/invisibility">Invisibility</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,bard,sorcerer,wizard,level2,bonus,concentration,transmutation" data-sources="SCC.37">
          <a class="post-link" href="./spells/kinetic-jaunt">Kinetic Jaunt</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,wizard,level2,action,transmutation" data-sources="PHB.254,SRD.158">
          <a class="post-link" href="./spells/knock">Knock</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,bard,cleric,druid,paladin,ranger,level2,action,abjuration" data-sources="PHB.255,SRD.158">
          <a class="post-link" href="./spells/lesser-restoration">Lesser Restoration</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,sorcerer,wizard,level2,action,concentration,transmutation" data-sources="PHB.255,SRD.158">
          <a class="post-link" href="./spells/levitate">Levitate</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,druid,ranger,level2,action,ritual,divination" data-sources="PHB.256,SRD.159">
          <a class="post-link" href="./spells/locate-animals-or-plants">Locate Animals or Plants</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,cleric,druid,paladin,ranger,wizard,level2,action,concentration,divination" data-sources="PHB.256,SRD.159">
          <a class="post-link" href="./spells/locate-object">Locate Object</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,bard,wizard,level2,long,ritual,illusion" data-sources="PHB.257,SRD.161">
          <a class="post-link" href="./spells/magic-mouth">Magic Mouth</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,paladin,ranger,sorcerer,wizard,level2,bonus,concentration,transmutation" data-sources="PHB.257,SRD.161">
          <a class="post-link" href="./spells/magic-weapon">Magic Weapon</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,wizard,level2,action,concentration,transmutation" data-sources="EE.20,XGE.161">
          <a class="post-link" href="./spells/maximilians-earthen-grasp">Maximilian’s Earthen Grasp</a>
        </li>
      
        <li class="post-link-container" data-tags="wizard,level2,action,evocation" data-sources="PHB.259">
          <a class="post-link" href="./spells/melfs-acid-arrow">Melf’s Acid Arrow</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,warlock,wizard,level2,action,concentration,divination" data-sources="XGE.162">
          <a class="post-link" href="./spells/mind-spike">Mind Spike</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,warlock,wizard,level2,action,illusion" data-sources="PHB.260,SRD.165">
          <a class="post-link" href="./spells/mirror-image">Mirror Image</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,warlock,wizard,level2,bonus,conjuration" data-sources="PHB.260,SRD.165">
          <a class="post-link" href="./spells/misty-step">Misty Step</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,level2,action,concentration,evocation" data-sources="PHB.261,SRD.166">
          <a class="post-link" href="./spells/moonbeam">Moonbeam</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,wizard,level2,action,concentration,illusion" data-sources="FTD.20">
          <a class="post-link" href="./spells/nathairs-mischief">Nathair’s Mischief</a>
        </li>
      
        <li class="post-link-container" data-tags="wizard,level2,action,illusion" data-sources="PHB.263">
          <a class="post-link" href="./spells/nystuls-magic-aura">Nystul’s Magic Aura</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,ranger,level2,action,concentration,abjuration" data-sources="PHB.264,SRD.167">
          <a class="post-link" href="./spells/pass-without-trace">Pass Without Trace</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,wizard,level2,action,concentration,illusion" data-sources="PHB.264">
          <a class="post-link" href="./spells/phantasmal-force">Phantasmal Force</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,paladin,level2,long,evocation" data-sources="PHB.267,SRD.170">
          <a class="post-link" href="./spells/prayer-of-healing">Prayer of Healing</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,cleric,ranger,paladin,druid,level2,action,abjuration" data-sources="PHB.270,SRD.173">
          <a class="post-link" href="./spells/protection-from-poison">Protection from Poison</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,bard,sorcerer,wizard,level2,action,transmutation" data-sources="EE.21,XGE.163">
          <a class="post-link" href="./spells/pyrotechnics">Pyrotechnics</a>
        </li>
      
        <li class="post-link-container" data-tags="warlock,wizard,level2,action,concentration,necromancy" data-sources="PHB.271,SRD.174">
          <a class="post-link" href="./spells/ray-of-enfeeblement">Ray of Enfeeblement</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,wizard,level2,action,evocation" data-sources="FTD.21">
          <a class="post-link" href="./spells/rimes-binding-ice">Rime’s Binding Ice</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,wizard,level2,action,transmutation" data-sources="PHB.272,SRD.176">
          <a class="post-link" href="./spells/rope-trick">Rope Trick</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,wizard,level2,action,evocation" data-sources="PHB.273,SRD.176">
          <a class="post-link" href="./spells/scorching-ray">Scorching Ray</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,bard,sorcerer,wizard,level2,action,divination" data-sources="PHB.274,SRD.177">
          <a class="post-link" href="./spells/see-invisibility">See Invisibility</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,warlock,wizard,level2,bonus,concentration,illusion" data-sources="XGE.164">
          <a class="post-link" href="./spells/shadow-blade">Shadow Blade</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,warlock,wizard,level2,action,evocation" data-sources="PHB.275,SRD.178">
          <a class="post-link" href="./spells/shatter">Shatter</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,cleric,ranger,level2,action,concentration,ritual,illusion" data-sources="PHB.275,SRD.179">
          <a class="post-link" href="./spells/silence">Silence</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,bard,druid,wizard,level2,action,concentration,ritual,transmutation" data-sources="EE.22,XGE.165">
          <a class="post-link" href="./spells/skywrite">Skywrite</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,wizard,level2,action,evocation" data-sources="EE.22,XGE.165">
          <a class="post-link" href="./spells/snillocs-snowball-swarm">Snilloc’s Snowball Swarm</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,sorcerer,warlock,wizard,level2,action,concentration,transmutation" data-sources="PHB.277,SRD.182">
          <a class="post-link" href="./spells/spider-climb">Spider Climb</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,ranger,level2,action,concentration,transmutation" data-sources="PHB.277,SRD.182">
          <a class="post-link" href="./spells/spike-growth">Spike Growth</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,level2,bonus,evocation" data-sources="PHB.278,SRD.182">
          <a class="post-link" href="./spells/spiritual-weapon">Spiritual Weapon</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,warlock,wizard,level2,action,concentration,enchantment" data-sources="PHB.279,SRD.183">
          <a class="post-link" href="./spells/suggestion">Suggestion</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,ranger,level2,action,concentration,conjuration" data-sources="TCE.109">
          <a class="post-link" href="./spells/summon-beast">Summon Beast</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,wizard,level2,action,enchantment" data-sources="TCE.115">
          <a class="post-link" href="./spells/tashas-mind-whip">Tasha’s Mind Whip</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,sorcerer,wizard,level2,action,conjuration" data-sources="SCC.38">
          <a class="post-link" href="./spells/vortex-warp">Vortex Warp</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,paladin,level2,action,abjuration" data-sources="PHB.287,SRD.191">
          <a class="post-link" href="./spells/warding-bond">Warding Bond</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,druid,sorcerer,wizard,level2,action,concentration,evocation" data-sources="EE.23,XGE.170">
          <a class="post-link" href="./spells/warding-wind">Warding Wind</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,sorcerer,wizard,level2,action,concentration,conjuration" data-sources="PHB.287,SRD.192">
          <a class="post-link" href="./spells/web">Web</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,wizard,level2,action,necromancy" data-sources="SCC.38">
          <a class="post-link" href="./spells/wither-and-bloom">Wither and Bloom</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,cleric,paladin,level2,action,enchantment" data-sources="PHB.289,SRD.193">
          <a class="post-link" href="./spells/zone-of-truth">Zone of Truth</a>
        </li>
      
    </ul>
    <a class="post-meta jetsHide" href="#top">Back to top &#8593;</a>
  
    <a id="level3"></a>
    <h2 class="post-list-head jetsHide">Level 3</h2>
    <ul class="post-list jetsContent">
      
      
        <li class="post-link-container" data-tags="cleric,wizard,level3,long,necromancy" data-sources="PHB.212,SRD.115">
          <a class="post-link" href="./spells/animate-dead">Animate Dead</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,ranger,sorcerer,wizard,level3,bonus,concentration,transmutation" data-sources="FTD.19">
          <a class="post-link" href="./spells/ashardalons-stride">Ashardalon’s Stride</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,druid,paladin,level3,action,concentration,evocation" data-sources="PHB.216">
          <a class="post-link" href="./spells/aura-of-vitality">Aura Of Vitality</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,level3,action,concentration,abjuration" data-sources="PHB.217,SRD.121">
          <a class="post-link" href="./spells/beacon-of-hope">Beacon of Hope</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,cleric,wizard,level3,action,concentration,necromancy" data-sources="PHB.218,SRD.121">
          <a class="post-link" href="./spells/bestow-curse">Bestow Curse</a>
        </li>
      
        <li class="post-link-container" data-tags="paladin,level3,bonus,concentration,evocation" data-sources="PHB.219">
          <a class="post-link" href="./spells/blinding-smite">Blinding Smite</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,sorcerer,wizard,level3,action,transmutation" data-sources="PHB.219,SRD.122">
          <a class="post-link" href="./spells/blink">Blink</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,level3,action,concentration,conjuration" data-sources="PHB.220,SRD.123">
          <a class="post-link" href="./spells/call-lightning">Call Lightning</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,bard,sorcerer,wizard,level3,action,enchantment" data-sources="XGE.151">
          <a class="post-link" href="./spells/catnap">Catnap</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,cleric,sorcerer,wizard,level3,long,concentration,divination" data-sources="PHB.222,SRD.124">
          <a class="post-link" href="./spells/clairvoyance">Clairvoyance</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,ranger,level3,action,concentration,conjuration" data-sources="PHB.225,SRD.127">
          <a class="post-link" href="./spells/conjure-animals">Conjure Animals</a>
        </li>
      
        <li class="post-link-container" data-tags="ranger,level3,action,conjuration" data-sources="PHB.225">
          <a class="post-link" href="./spells/conjure-barrage">Conjure Barrage</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,warlock,wizard,level3,reaction,abjuration" data-sources="PHB.228,SRD.131">
          <a class="post-link" href="./spells/counterspell">Counterspell</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,cleric,paladin,level3,action,conjuration" data-sources="PHB.229,SRD.131">
          <a class="post-link" href="./spells/create-food-and-water">Create Food and Water</a>
        </li>
      
        <li class="post-link-container" data-tags="paladin,level3,action,concentration,evocation" data-sources="PHB.230">
          <a class="post-link" href="./spells/crusaders-mantle">Crusader’s Mantle</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,druid,paladin,ranger,sorcerer,level3,action,evocation" data-sources="PHB.230,SRD.133">
          <a class="post-link" href="./spells/daylight">Daylight</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,bard,cleric,druid,paladin,sorcerer,warlock,wizard,level3,action,abjuration" data-sources="PHB.234,SRD.136">
          <a class="post-link" href="./spells/dispel-magic">Dispel Magic</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,druid,paladin,ranger,level3,action,concentration,transmutation" data-sources="PHB.237">
          <a class="post-link" href="./spells/elemental-weapon">Elemental Weapon</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,warlock,wizard,level3,action,concentration,enchantment" data-sources="XGE.155">
          <a class="post-link" href="./spells/enemies-abound">Enemies Abound</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,wizard,level3,action,transmutation" data-sources="EE.17,XGE.155">
          <a class="post-link" href="./spells/erupting-earth">Erupting Earth</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,warlock,wizard,level3,action,concentration,illusion" data-sources="PHB.239,SRD.142">
          <a class="post-link" href="./spells/fear">Fear</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,cleric,druid,wizard,level3,action,ritual,necromancy" data-sources="PHB.240">
          <a class="post-link" href="./spells/feign-death">Feign Death</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,wizard,level3,action,evocation" data-sources="PHB.241,SRD.144">
          <a class="post-link" href="./spells/fireball">Fireball</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,druid,ranger,sorcerer,wizard,level3,action,concentration,transmutation" data-sources="EE.18,XGE.156">
          <a class="post-link" href="./spells/flame-arrows">Flame Arrows</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,sorcerer,warlock,wizard,level3,action,concentration,transmutation" data-sources="PHB.243,SRD.146">
          <a class="post-link" href="./spells/fly">Fly</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,wizard,warlock,level3,action,concentration,transmutation" data-sources="PHB.244,SRD.148">
          <a class="post-link" href="./spells/gaseous-form">Gaseous Form</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,bard,cleric,wizard,level3,long,abjuration" data-sources="PHB.245,SRD.149">
          <a class="post-link" href="./spells/glyph-of-warding">Glyph of Warding</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,sorcerer,wizard,level3,action,concentration,transmutation" data-sources="PHB.250,SRD.153">
          <a class="post-link" href="./spells/haste">Haste</a>
        </li>
      
        <li class="post-link-container" data-tags="warlock,level3,action,concentration,conjuration" data-sources="PHB.251">
          <a class="post-link" href="./spells/hunger-of-hadar">Hunger of Hadar</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,warlock,wizard,level3,action,concentration,illusion" data-sources="PHB.252,SRD.155">
          <a class="post-link" href="./spells/hypnotic-pattern">Hypnotic Pattern</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,bard,sorcerer,warlock,wizard,level3,action,concentration,abjuration" data-sources="TCE.107">
          <a class="post-link" href="./spells/intellect-fortress">Intellect Fortress</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,wizard,level3,long,ritual,evocation" data-sources="PHB.255">
          <a class="post-link" href="./spells/leomunds-tiny-hut">Leomund’s Tiny Hut</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,wizard,level3,action,necromancy" data-sources="XGE.160">
          <a class="post-link" href="./spells/life-transference">Life Transference</a>
        </li>
      
        <li class="post-link-container" data-tags="ranger,level3,bonus,concentration,transmutation" data-sources="PHB.255">
          <a class="post-link" href="./spells/lightning-arrow">Lightning Arrow</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,wizard,level3,action,evocation" data-sources="PHB.255,SRD.159">
          <a class="post-link" href="./spells/lightning-bolt">Lightning Bolt</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,paladin,warlock,wizard,level3,long,abjuration" data-sources="PHB.256,SRD.160">
          <a class="post-link" href="./spells/magic-circle">Magic Circle</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,warlock,wizard,level3,action,concentration,illusion" data-sources="PHB.258,SRD.162">
          <a class="post-link" href="./spells/major-image">Major Image</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,cleric,level3,bonus,evocation" data-sources="PHB.258,SRD.163">
          <a class="post-link" href="./spells/mass-healing-word">Mass Healing Word</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,druid,ranger,level3,action,ritual,transmutation" data-sources="PHB.259,SRD.163">
          <a class="post-link" href="./spells/meld-into-stone">Meld Into Stone</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,wizard,level3,action,concentration,evocation" data-sources="EE.20,XGE.161">
          <a class="post-link" href="./spells/melfs-minute-meteors">Melf’s Minute Meteors</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,ranger,wizard,level3,action,abjuration" data-sources="PHB.263,SRD.167">
          <a class="post-link" href="./spells/nondetection">Nondetection</a>
        </li>
      
        <li class="post-link-container" data-tags="wizard,level3,long,ritual,illusion" data-sources="PHB.265,SRD.167">
          <a class="post-link" href="./spells/phantom-steed">Phantom Steed</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,druid,ranger,level3,action,transmutation" data-sources="PHB.266,SRD.169">
          <a class="post-link" href="./spells/plant-growth">Plant Growth</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,cleric,druid,ranger,sorcerer,wizard,level3,action,concentration,abjuration" data-sources="PHB.270,SRD.173">
          <a class="post-link" href="./spells/protection-from-energy">Protection from Energy</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,paladin,warlock,wizard,level3,action,abjuration" data-sources="PHB.271,SRD.174">
          <a class="post-link" href="./spells/remove-curse">Remove Curse</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,cleric,druid,paladin,ranger,level3,action,necromancy" data-sources="PHB.272,SRD.175">
          <a class="post-link" href="./spells/revivify">Revivify</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,cleric,wizard,level3,action,evocation" data-sources="PHB.274,SRD.177">
          <a class="post-link" href="./spells/sending">Sending</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,wizard,level3,action,concentration,conjuration" data-sources="PHB.276,SRD.180">
          <a class="post-link" href="./spells/sleet-storm">Sleet Storm</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,wizard,level3,action,concentration,transmutation" data-sources="PHB.277,SRD.180">
          <a class="post-link" href="./spells/slow">Slow</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,cleric,wizard,level3,action,necromancy" data-sources="PHB.277,SRD.181">
          <a class="post-link" href="./spells/speak-with-dead">Speak with Dead</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,druid,ranger,level3,action,transmutation" data-sources="PHB.277,SRD.181">
          <a class="post-link" href="./spells/speak-with-plants">Speak with Plants</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,level3,action,concentration,conjuration" data-sources="PHB.278,SRD.182">
          <a class="post-link" href="./spells/spirit-guardians">Spirit Guardians</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,paladin,warlock,wizard,level3,bonus,concentration,necromancy" data-sources="TCE.108">
          <a class="post-link" href="./spells/spirit-shroud">Spirit Shroud</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,wizard,level3,action,concentration,conjuration" data-sources="PHB.278,SRD.182">
          <a class="post-link" href="./spells/stinking-cloud">Stinking Cloud</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,ranger,warlock,wizard,level3,action,concentration,conjuration" data-sources="TCE.112">
          <a class="post-link" href="./spells/summon-fey">Summon Fey</a>
        </li>
      
        <li class="post-link-container" data-tags="warlock,wizard,level3,action,concentration,conjuration" data-sources="XGE.167">
          <a class="post-link" href="./spells/summon-lesser-demons">Summon Lesser Demons</a>
        </li>
      
        <li class="post-link-container" data-tags="warlock,wizard,level3,action,concentration,conjuration" data-sources="TCE.113">
          <a class="post-link" href="./spells/summon-shadowspawn">Summon Shadowspawn</a>
        </li>
      
        <li class="post-link-container" data-tags="warlock,wizard,level3,action,concentration,necromancy" data-sources="TCE.114">
          <a class="post-link" href="./spells/summon-undead">Summon Undead</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,warlock,wizard,level3,action,conjuration" data-sources="XGE.168">
          <a class="post-link" href="./spells/thunder-step">Thunder Step</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,wizard,level3,action,conjuration" data-sources="EE.22,XGE.168">
          <a class="post-link" href="./spells/tidal-wave">Tidal Wave</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,wizard,level3,long,transmutation" data-sources="XGE.168">
          <a class="post-link" href="./spells/tiny-servant">Tiny Servant</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,cleric,sorcerer,warlock,wizard,level3,action,divination" data-sources="PHB.283,SRD.187">
          <a class="post-link" href="./spells/tongues">Tongues</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,warlock,wizard,level3,action,concentration,necromancy" data-sources="PHB.285,SRD.189">
          <a class="post-link" href="./spells/vampiric-touch">Vampiric Touch</a>
        </li>
      
        <li class="post-link-container" data-tags="wizard,level3,action,concentration,evocation" data-sources="EE.23,XGE.170">
          <a class="post-link" href="./spells/wall-of-sand">Wall of Sand</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,wizard,level3,action,concentration,evocation" data-sources="EE.23,XGE.170">
          <a class="post-link" href="./spells/wall-of-water">Wall of Water</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,druid,ranger,sorcerer,wizard,level3,action,ritual,transmutation" data-sources="PHB.287,SRD.191">
          <a class="post-link" href="./spells/water-breathing">Water Breathing</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,cleric,druid,ranger,sorcerer,level3,action,ritual,transmutation" data-sources="PHB.287,SRD.191">
          <a class="post-link" href="./spells/water-walk">Water Walk</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,ranger,level3,action,concentration,evocation" data-sources="PHB.288,SRD.192">
          <a class="post-link" href="./spells/wind-wall">Wind Wall</a>
        </li>
      
    </ul>
    <a class="post-meta jetsHide" href="#top">Back to top &#8593;</a>
  
    <a id="level4"></a>
    <h2 class="post-list-head jetsHide">Level 4</h2>
    <ul class="post-list jetsContent">
      
      
        <li class="post-link-container" data-tags="artificer,wizard,level4,action,concentration,divination" data-sources="PHB.214,SRD.118">
          <a class="post-link" href="./spells/arcane-eye">Arcane Eye</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,paladin,level4,action,concentration,abjuration" data-sources="PHB.216">
          <a class="post-link" href="./spells/aura-of-life">Aura of Life</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,paladin,level4,action,concentration,abjuration" data-sources="PHB.216">
          <a class="post-link" href="./spells/aura-of-purity">Aura of Purity</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,paladin,sorcerer,warlock,wizard,level4,action,concentration,abjuration" data-sources="PHB.217,SRD.120">
          <a class="post-link" href="./spells/banishment">Banishment</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,warlock,wizard,level4,action,necromancy" data-sources="PHB.219,SRD.122">
          <a class="post-link" href="./spells/blight">Blight</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,druid,sorcerer,warlock,wizard,level4,action,enchantment" data-sources="XGE.151">
          <a class="post-link" href="./spells/charm-monster">Charm Monster</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,level4,action,concentration,enchantment" data-sources="PHB.224,SRD.126">
          <a class="post-link" href="./spells/compulsion">Compulsion</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,druid,sorcerer,wizard,level4,action,concentration,enchantment" data-sources="PHB.224,SRD.127">
          <a class="post-link" href="./spells/confusion">Confusion</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,wizard,level4,long,concentration,conjuration" data-sources="PHB.226,SRD.128">
          <a class="post-link" href="./spells/conjure-minor-elementals">Conjure Minor Elementals</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,ranger,level4,action,concentration,conjuration" data-sources="PHB.226,SRD.129">
          <a class="post-link" href="./spells/conjure-woodland-beings">Conjure Woodland Beings</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,druid,wizard,level4,action,concentration,transmutation" data-sources="PHB.227,SRD.130">
          <a class="post-link" href="./spells/control-water">Control Water</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,paladin,level4,action,abjuration" data-sources="PHB.230,SRD.133">
          <a class="post-link" href="./spells/death-ward">Death Ward</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,warlock,wizard,level4,action,conjuration" data-sources="PHB.233,SRD.135">
          <a class="post-link" href="./spells/dimension-door">Dimension Door</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,druid,wizard,level4,action,ritual,divination" data-sources="PHB.234,SRD.136">
          <a class="post-link" href="./spells/divination">Divination</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,ranger,sorcerer,level4,action,concentration,enchantment" data-sources="PHB.234,SRD.137">
          <a class="post-link" href="./spells/dominate-beast">Dominate Beast</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,druid,warlock,wizard,level4,action,concentration,transmutation" data-sources="EE.17,XGE.155">
          <a class="post-link" href="./spells/elemental-bane">Elemental Bane</a>
        </li>
      
        <li class="post-link-container" data-tags="wizard,level4,action,concentration,conjuration" data-sources="PHB.238">
          <a class="post-link" href="./spells/evards-black-tentacles">Evard’s Black Tentacles</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,wizard,level4,long,transmutation" data-sources="PHB.239,SRD.141">
          <a class="post-link" href="./spells/fabricate">Fabricate</a>
        </li>
      
        <li class="post-link-container" data-tags="paladin,level4,long,conjuration" data-sources="XGE.156">
          <a class="post-link" href="./spells/find-greater-steed">Find Greater Steed</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,wizard,level4,action,evocation" data-sources="PHB.241,SRD.144">
          <a class="post-link" href="./spells/fire-shield">Fire Shield</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,bard,cleric,druid,ranger,level4,action,abjuration" data-sources="PHB.244,SRD.147">
          <a class="post-link" href="./spells/freedom-of-movement">Freedom of Movement</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,level4,action,concentration,transmutation" data-sources="PHB.245,SRD.149">
          <a class="post-link" href="./spells/giant-insect">Giant Insect</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,ranger,level4,bonus,concentration,conjuration" data-sources="PHB.246">
          <a class="post-link" href="./spells/grasping-vine">Grasping Vine</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,wizard,level4,action,concentration,illusion" data-sources="PHB.246,SRD.150">
          <a class="post-link" href="./spells/greater-invisibility">Greater Invisibility</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,level4,action,conjuration" data-sources="PHB.246,SRD.150">
          <a class="post-link" href="./spells/guardian-of-faith">Guardian of Faith</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,ranger,level4,bonus,concentration,transmutation" data-sources="XGE.157">
          <a class="post-link" href="./spells/guardian-of-nature">Guardian of Nature</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,druid,warlock,wizard,level4,long,illusion" data-sources="PHB.249,SRD.152">
          <a class="post-link" href="./spells/hallucinatory-terrain">Hallucinatory Terrain</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,wizard,level4,action,evocation" data-sources="PHB.252,SRD.155">
          <a class="post-link" href="./spells/ice-storm">Ice Storm</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,wizard,level4,action,conjuration" data-sources="PHB.254">
          <a class="post-link" href="./spells/leomunds-secret-chest">Leomund’s Secret Chest</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,cleric,druid,paladin,ranger,wizard,level4,action,concentration,divination" data-sources="PHB.256,SRD.159">
          <a class="post-link" href="./spells/locate-creature">Locate Creature</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,wizard,level4,action,conjuration" data-sources="PHB.261">
          <a class="post-link" href="./spells/mordenkainens-faithful-hound">Mordenkainen’s Faithful Hound</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,wizard,level4,long,abjuration" data-sources="PHB.262">
          <a class="post-link" href="./spells/mordenkainens-private-sanctum">Mordenkainen’s Private Sanctum</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,wizard,level4,action,concentration,evocation" data-sources="PHB.264">
          <a class="post-link" href="./spells/otilukes-resilient-sphere">Otiluke’s Resilient Sphere</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,wizard,level4,action,concentration,illusion" data-sources="PHB.265,SRD.167">
          <a class="post-link" href="./spells/phantasmal-killer">Phantasmal Killer</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,druid,sorcerer,wizard,level4,action,concentration,transmutation" data-sources="PHB.266,SRD.169">
          <a class="post-link" href="./spells/polymorph">Polymorph</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,warlock,wizard,level4,action,enchantment" data-sources="FTD.21">
          <a class="post-link" href="./spells/raulothims-psychic-lance">Raulothim’s Psychic Lance</a>
        </li>
      
        <li class="post-link-container" data-tags="warlock,level4,action,concentration,necromancy" data-sources="XGE.164">
          <a class="post-link" href="./spells/shadow-of-moil">Shadow of Moil</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,warlock,wizard,level4,action,concentration,evocation" data-sources="XGE.164">
          <a class="post-link" href="./spells/sickening-radiance">Sickening Radiance</a>
        </li>
      
        <li class="post-link-container" data-tags="paladin,level4,bonus,concentration,evocation" data-sources="PHB.278">
          <a class="post-link" href="./spells/staggering-smite">Staggering Smite</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,cleric,druid,wizard,level4,action,transmutation" data-sources="PHB.278,SRD.183">
          <a class="post-link" href="./spells/stone-shape">Stone Shape</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,druid,sorcerer,ranger,wizard,level4,action,concentration,abjuration" data-sources="PHB.278,SRD.183">
          <a class="post-link" href="./spells/stoneskin">Stoneskin</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,wizard,level4,action,concentration,evocation" data-sources="EE.22,XGE.166">
          <a class="post-link" href="./spells/storm-sphere">Storm Sphere</a>
        </li>
      
        <li class="post-link-container" data-tags="warlock,wizard,level4,action,concentration,conjuration" data-sources="TCE.109">
          <a class="post-link" href="./spells/summon-aberration">Summon Aberration</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,wizard,level4,action,concentration,conjuration" data-sources="TCE.111">
          <a class="post-link" href="./spells/summon-construct">Summon Construct</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,ranger,wizard,level4,action,concentration,conjuration" data-sources="TCE.111">
          <a class="post-link" href="./spells/summon-elemental">Summon Elemental</a>
        </li>
      
        <li class="post-link-container" data-tags="warlock,wizard,level4,action,concentration,conjuration" data-sources="XGE.166">
          <a class="post-link" href="./spells/summon-greater-demon">Summon Greater Demon</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,wizard,level4,action,evocation" data-sources="EE.23,XGE.170">
          <a class="post-link" href="./spells/vitriolic-sphere">Vitriolic Sphere</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,wizard,level4,action,concentration,evocation" data-sources="PHB.285,SRD.190">
          <a class="post-link" href="./spells/wall-of-fire">Wall of Fire</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,wizard,level4,action,concentration,conjuration" data-sources="EE.23,XGE.170">
          <a class="post-link" href="./spells/watery-sphere">Watery Sphere</a>
        </li>
      
    </ul>
    <a class="post-meta jetsHide" href="#top">Back to top &#8593;</a>
  
    <a id="level5"></a>
    <h2 class="post-list-head jetsHide">Level 5</h2>
    <ul class="post-list jetsContent">
      
      
        <li class="post-link-container" data-tags="artificer,bard,sorcerer,wizard,level5,action,concentration,transmutation" data-sources="PHB.213,SRD.116">
          <a class="post-link" href="./spells/animate-objects">Animate Objects</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,level5,action,concentration,abjuration" data-sources="PHB.213,SRD.116">
          <a class="post-link" href="./spells/antilife-shell">Antilife Shell</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,druid,level5,long,transmutation" data-sources="PHB.216,SRD.120">
          <a class="post-link" href="./spells/awaken">Awaken</a>
        </li>
      
        <li class="post-link-container" data-tags="paladin,level5,bonus,concentration,abjuration" data-sources="PHB.216">
          <a class="post-link" href="./spells/banishing-smite">Banishing Smite</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,sorcerer,wizard,level5,action,concentration,evocation" data-sources="PHB.218">
          <a class="post-link" href="./spells/bigbys-hand">Bigby’s Hand</a>
        </li>
      
        <li class="post-link-container" data-tags="paladin,level5,action,concentration,abjuration" data-sources="PHB.221">
          <a class="post-link" href="./spells/circle-of-power">Circle of Power</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,wizard,level5,action,concentration,conjuration" data-sources="PHB.222,SRD.125">
          <a class="post-link" href="./spells/cloudkill">Cloudkill</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,level5,long,ritual,divination" data-sources="PHB.223,SRD.126">
          <a class="post-link" href="./spells/commune">Commune</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,ranger,level5,long,ritual,divination" data-sources="PHB.224,SRD.126">
          <a class="post-link" href="./spells/commune-with-nature">Commune with Nature</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,wizard,level5,action,evocation" data-sources="PHB.224,SRD.127">
          <a class="post-link" href="./spells/cone-of-cold">Cone of Cold</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,wizard,level5,long,concentration,conjuration" data-sources="PHB.225,SRD.128">
          <a class="post-link" href="./spells/conjure-elemental">Conjure Elemental</a>
        </li>
      
        <li class="post-link-container" data-tags="ranger,level5,action,conjuration" data-sources="PHB.226">
          <a class="post-link" href="./spells/conjure-volley">Conjure Volley</a>
        </li>
      
        <li class="post-link-container" data-tags="warlock,wizard,level5,long,ritual,divination" data-sources="PHB.226,SRD.129">
          <a class="post-link" href="./spells/contact-other-plane">Contact Other Plane</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,druid,level5,action,necromancy" data-sources="PHB.227,SRD.129">
          <a class="post-link" href="./spells/contagion">Contagion</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,wizard,level5,action,concentration,transmutation" data-sources="EE.16,XGE.152">
          <a class="post-link" href="./spells/control-winds">Control Winds</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,sorcerer,wizard,level5,long,illusion" data-sources="PHB.229,SRD.132">
          <a class="post-link" href="./spells/creation">Creation</a>
        </li>
      
        <li class="post-link-container" data-tags="warlock,wizard,level5,action,concentration,necromancy" data-sources="XGE.153">
          <a class="post-link" href="./spells/danse-macabre">Danse Macabre</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,wizard,level5,action,concentration,evocation" data-sources="XGE.153">
          <a class="post-link" href="./spells/dawn">Dawn</a>
        </li>
      
        <li class="post-link-container" data-tags="paladin,level5,action,evocation" data-sources="PHB.231">
          <a class="post-link" href="./spells/destructive-wave">Destructive Wave</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,paladin,level5,action,concentration,abjuration" data-sources="PHB.233,SRD.136">
          <a class="post-link" href="./spells/dispel-evil-and-good">Dispel Evil and Good</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,wizard,level5,action,concentration,enchantment" data-sources="PHB.235,SRD.138">
          <a class="post-link" href="./spells/dominate-person">Dominate Person</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,warlock,wizard,level5,long,illusion" data-sources="PHB.236,SRD.138">
          <a class="post-link" href="./spells/dream">Dream</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,warlock,wizard,level5,action,concentration,necromancy" data-sources="XGE.155">
          <a class="post-link" href="./spells/enervation">Enervation</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,warlock,wizard,level5,bonus,concentration,conjuration" data-sources="XGE.155">
          <a class="post-link" href="./spells/far-step">Far Step</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,level5,action,evocation" data-sources="PHB.242,SRD.145">
          <a class="post-link" href="./spells/flame-strike">Flame Strike</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,wizard,paladin,druid,bard,level5,long,enchantment" data-sources="PHB.245,SRD.148">
          <a class="post-link" href="./spells/geas">Geas</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,bard,cleric,druid,ranger,level5,action,abjuration" data-sources="PHB.246,SRD.150">
          <a class="post-link" href="./spells/greater-restoration">Greater Restoration</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,level5,long,evocation" data-sources="PHB.249,SRD.152">
          <a class="post-link" href="./spells/hallow">Hallow</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,warlock,wizard,level5,action,concentration,enchantment" data-sources="PHB.251,SRD.154">
          <a class="post-link" href="./spells/hold-monster">Hold Monster</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,paladin,level5,bonus,concentration,evocation" data-sources="XGE.157">
          <a class="post-link" href="./spells/holy-weapon">Holy Weapon</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,wizard,level5,action,concentration,evocation" data-sources="EE.19,XGE.158">
          <a class="post-link" href="./spells/immolation">Immolation</a>
        </li>
      
        <li class="post-link-container" data-tags="warlock,wizard,level5,long,concentration,conjuration" data-sources="XGE.158">
          <a class="post-link" href="./spells/infernal-calling">Infernal Calling</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,druid,sorcerer,level5,action,concentration,conjuration" data-sources="PHB.254,SRD.157">
          <a class="post-link" href="./spells/insect-plague">Insect Plague</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,cleric,wizard,level5,long,divination" data-sources="PHB.254,SRD.158">
          <a class="post-link" href="./spells/legend-lore">Legend Lore</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,level5,action,concentration,evocation" data-sources="EE.20,XGE.160">
          <a class="post-link" href="./spells/maelstrom">Maelstrom</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,cleric,druid,level5,action,evocation" data-sources="PHB.258,SRD.162">
          <a class="post-link" href="./spells/mass-cure-wounds">Mass Cure Wounds</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,warlock,wizard,level5,action,concentration,illusion" data-sources="PHB.260,SRD.165">
          <a class="post-link" href="./spells/mislead">Mislead</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,wizard,level5,action,concentration,enchantment" data-sources="PHB.261,SRD.166">
          <a class="post-link" href="./spells/modify-memory">Modify Memory</a>
        </li>
      
        <li class="post-link-container" data-tags="warlock,wizard,level5,action,necromancy" data-sources="XGE.163">
          <a class="post-link" href="./spells/negative-energy-flood">Negative Energy Flood</a>
        </li>
      
        <li class="post-link-container" data-tags="wizard,level5,action,transmutation" data-sources="PHB.264,SRD.167">
          <a class="post-link" href="./spells/passwall">Passwall</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,cleric,druid,warlock,wizard,level5,long,abjuration" data-sources="PHB.265,SRD.168">
          <a class="post-link" href="./spells/planar-binding">Planar Binding</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,paladin,bard,level5,long,necromancy" data-sources="PHB.270,SRD.173">
          <a class="post-link" href="./spells/raise-dead">Raise Dead</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,wizard,level5,ritual,divination" data-sources="PHB.270">
          <a class="post-link" href="./spells/rarys-telepathic-bond">Rary’s Telepathic Bond</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,level5,long,transmutation" data-sources="PHB.271,SRD.174">
          <a class="post-link" href="./spells/reincarnate">Reincarnate</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,cleric,druid,warlock,wizard,level5,long,concentration,divination" data-sources="PHB.273,SRD.176">
          <a class="post-link" href="./spells/scrying">Scrying</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,wizard,level5,action,illusion" data-sources="PHB.274,SRD.177">
          <a class="post-link" href="./spells/seeming">Seeming</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,bard,sorcerer,wizard,level5,action,concentration,transmutation" data-sources="XGE.165">
          <a class="post-link" href="./spells/skill-empowerment">Skill Empowerment</a>
        </li>
      
        <li class="post-link-container" data-tags="ranger,wizard,level5,action,conjuration" data-sources="XGE.166">
          <a class="post-link" href="./spells/steel-wind-strike">Steel Wind Strike</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,paladin,level5,action,concentration,conjuration" data-sources="TCE.110">
          <a class="post-link" href="./spells/summon-celestial">Summon Celestial</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,wizard,level5,action,concentration,conjuration" data-sources="FTD.21">
          <a class="post-link" href="./spells/summon-draconic-spirit">Summon Draconic Spirit</a>
        </li>
      
        <li class="post-link-container" data-tags="ranger,level5,bonus,concentration,transmutation" data-sources="PHB.279">
          <a class="post-link" href="./spells/swift-quiver">Swift Quiver</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,warlock,wizard,level5,action,enchantment" data-sources="XGE.167">
          <a class="post-link" href="./spells/synaptic-static">Synaptic Static</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,wizard,level5,action,concentration,transmutation" data-sources="PHB.280,SRD.185">
          <a class="post-link" href="./spells/telekinesis">Telekinesis</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,warlock,wizard,level5,long,conjuration" data-sources="PHB.281,SRD.186">
          <a class="post-link" href="./spells/teleportation-circle">Teleportation Circle</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,druid,wizard,level5,action,transmutation" data-sources="EE.22,XGE.169">
          <a class="post-link" href="./spells/transmute-rock">Transmute Rock</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,ranger,level5,action,concentration,conjuration" data-sources="PHB.283,SRD.188">
          <a class="post-link" href="./spells/tree-stride">Tree Stride</a>
        </li>
      
        <li class="post-link-container" data-tags="wizard,level5,action,concentration,evocation" data-sources="PHB.285,SRD.190">
          <a class="post-link" href="./spells/wall-of-force">Wall of Force</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,warlock,wizard,level5,action,concentration,evocation" data-sources="XGE.170">
          <a class="post-link" href="./spells/wall-of-light">Wall of Light</a>
        </li>
      
        <li class="post-link-container" data-tags="artificer,druid,sorcerer,wizard,level5,action,concentration,evocation" data-sources="PHB.287,SRD.190">
          <a class="post-link" href="./spells/wall-of-stone">Wall of Stone</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,ranger,level5,action,concentration,evocation" data-sources="XGE.171">
          <a class="post-link" href="./spells/wrath-of-nature">Wrath of Nature</a>
        </li>
      
    </ul>
    <a class="post-meta jetsHide" href="#top">Back to top &#8593;</a>
  
    <a id="level6"></a>
    <h2 class="post-list-head jetsHide">Level 6</h2>
    <ul class="post-list jetsContent">
      
      
        <li class="post-link-container" data-tags="sorcerer,warlock,wizard,level6,action,concentration,conjuration" data-sources="PHB.214">
          <a class="post-link" href="./spells/arcane-gate">Arcane Gate</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,level6,action,concentration,evocation" data-sources="PHB.218,SRD.122">
          <a class="post-link" href="./spells/blade-barrier">Blade Barrier</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,level6,action,transmutation" data-sources="EE.15,XGE.150">
          <a class="post-link" href="./spells/bones-of-the-earth">Bones of the Earth</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,wizard,level6,action,evocation" data-sources="PHB.221,SRD.124">
          <a class="post-link" href="./spells/chain-lightning">Chain Lightning</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,warlock,wizard,level6,action,necromancy" data-sources="PHB.221,SRD.124">
          <a class="post-link" href="./spells/circle-of-death">Circle of Death</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,warlock,level6,long,concentration,conjuration" data-sources="PHB.226,SRD.128">
          <a class="post-link" href="./spells/conjure-fey">Conjure Fey</a>
        </li>
      
        <li class="post-link-container" data-tags="wizard,level6,long,evocation" data-sources="PHB.227,SRD.130">
          <a class="post-link" href="./spells/contingency">Contingency</a>
        </li>
      
        <li class="post-link-container" data-tags="wizard,level6,long,transmutation" data-sources="XGE.152">
          <a class="post-link" href="./spells/create-homunculus">Create Homunculus</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,warlock,wizard,level6,long,necromancy" data-sources="PHB.229,SRD.132">
          <a class="post-link" href="./spells/create-undead">Create Undead</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,wizard,level6,action,transmutation" data-sources="PHB.233,SRD.135">
          <a class="post-link" href="./spells/disintegrate">Disintegrate</a>
        </li>
      
        <li class="post-link-container" data-tags="wizard,level6,long,ritual,conjuration" data-sources="PHB.235">
          <a class="post-link" href="./spells/drawmijs-instant-summons">Drawmij’s Instant Summons</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,level6,long,abjuration" data-sources="XGE.154">
          <a class="post-link" href="./spells/druid-grove">Druid Grove</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,warlock,wizard,level6,action,concentration,necromancy" data-sources="PHB.238,SRD.141">
          <a class="post-link" href="./spells/eyebite">Eyebite</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,cleric,druid,level6,long,concentration,divination" data-sources="PHB.240,SRD.143">
          <a class="post-link" href="./spells/find-the-path">Find the Path</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,wizard,level6,bonus,concentration,abjuration" data-sources="FTD.20">
          <a class="post-link" href="./spells/fizbans-platinum-shield">Fizban’s Platinum Shield</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,warlock,wizard,level6,action,concentration,transmutation" data-sources="PHB.243,SRD.145">
          <a class="post-link" href="./spells/flesh-to-stone">Flesh to Stone</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,level6,long,ritual,abjuration" data-sources="PHB.243,SRD.146">
          <a class="post-link" href="./spells/forbiddance">Forbiddance</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,wizard,level6,action,concentration,abjuration" data-sources="PHB.245,SRD.149">
          <a class="post-link" href="./spells/globe-of-invulnerability">Globe of Invulnerability</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,wizard,level6,long,abjuration" data-sources="PHB.248,SRD.151">
          <a class="post-link" href="./spells/guards-and-wards">Guards and Wards</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,level6,action,necromancy" data-sources="PHB.249,SRD.153">
          <a class="post-link" href="./spells/harm">Harm</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,druid,level6,action,evocation" data-sources="PHB.250,SRD.153">
          <a class="post-link" href="./spells/heal">Heal</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,cleric,druid,level6,long,conjuration" data-sources="PHB.251,SRD.154">
          <a class="post-link" href="./spells/heroes-feast">Heroes’ Feast</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,warlock,wizard,level6,action,concentration,transmutation" data-sources="EE.19,XGE.159">
          <a class="post-link" href="./spells/investiture-of-flame">Investiture of Flame</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,warlock,wizard,level6,action,concentration,transmutation" data-sources="EE.19,XGE.159">
          <a class="post-link" href="./spells/investiture-of-ice">Investiture of Ice</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,warlock,wizard,level6,action,concentration,transmutation" data-sources="EE.19,XGE.159">
          <a class="post-link" href="./spells/investiture-of-stone">Investiture of Stone</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,warlock,wizard,level6,action,concentration,transmutation" data-sources="EE.20,XGE.160">
          <a class="post-link" href="./spells/investiture-of-wind">Investiture of Wind</a>
        </li>
      
        <li class="post-link-container" data-tags="wizard,level6,long,necromancy" data-sources="PHB.257,SRD.160">
          <a class="post-link" href="./spells/magic-jar">Magic Jar</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,warlock,wizard,level6,action,enchantment" data-sources="PHB.258,SRD.163">
          <a class="post-link" href="./spells/mass-suggestion">Mass Suggestion</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,warlock,wizard,level6,action,concentration,illusion" data-sources="XGE.161">
          <a class="post-link" href="./spells/mental-prison">Mental Prison</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,wizard,level6,action,concentration,transmutation" data-sources="PHB.263,SRD.166">
          <a class="post-link" href="./spells/move-earth">Move Earth</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,wizard,level6,action,evocation" data-sources="PHB.263">
          <a class="post-link" href="./spells/otilukes-freezing-sphere">Otiluke’s Freezing Sphere</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,wizard,level6,action,concentration,enchantment" data-sources="PHB.264">
          <a class="post-link" href="./spells/ottos-irresistible-dance">Otto’s Irresistible Dance</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,level6,long,conjuration" data-sources="PHB.265,SRD.168">
          <a class="post-link" href="./spells/planar-ally">Planar Ally</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,level6,action,concentration,abjuration" data-sources="EE.21,XGE.163">
          <a class="post-link" href="./spells/primordial-ward">Primordial Ward</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,wizard,level6,action,illusion" data-sources="PHB.269,SRD.172">
          <a class="post-link" href="./spells/programmed-illusion">Programmed Illusion</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,warlock,wizard,level6,action,conjuration" data-sources="XGE.164">
          <a class="post-link" href="./spells/scatter">Scatter</a>
        </li>
      
        <li class="post-link-container" data-tags="warlock,wizard,level6,reaction,necromancy" data-sources="XGE.165">
          <a class="post-link" href="./spells/soul-cage">Soul Cage</a>
        </li>
      
        <li class="post-link-container" data-tags="warlock,wizard,level6,action,concentration,conjuration" data-sources="TCE.112">
          <a class="post-link" href="./spells/summon-fiend">Summon Fiend</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,druid,sorcerer,wizard,level6,action,concentration,evocation" data-sources="PHB.279,SRD.184">
          <a class="post-link" href="./spells/sunbeam">Sunbeam</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,warlock,wizard,level6,bonus,concentration,conjuration" data-sources="TCE.116">
          <a class="post-link" href="./spells/tashas-otherwordly-guise">Tasha’s Otherworldly Guise</a>
        </li>
      
        <li class="post-link-container" data-tags="wizard,level6,action,concentration,transmutation" data-sources="XGE.168">
          <a class="post-link" href="./spells/tensers-transformation">Tenser’s Transformation</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,level6,action,conjuration" data-sources="PHB.283,SRD.188">
          <a class="post-link" href="./spells/transport-via-plants">Transport via Plants</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,cleric,sorcerer,warlock,wizard,level6,action,divination" data-sources="PHB.284,SRD.189">
          <a class="post-link" href="./spells/true-seeing">True Seeing</a>
        </li>
      
        <li class="post-link-container" data-tags="wizard,level6,action,concentration,evocation" data-sources="PHB.285,SRD.190">
          <a class="post-link" href="./spells/wall-of-ice">Wall of Ice</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,level6,action,concentration,conjuration" data-sources="PHB.287,SRD.191">
          <a class="post-link" href="./spells/wall-of-thorns">Wall of Thorns</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,level6,long,transmutation" data-sources="PHB.288,SRD.192">
          <a class="post-link" href="./spells/wind-walk">Wind Walk</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,level6,action,conjuration" data-sources="PHB.289,SRD.193">
          <a class="post-link" href="./spells/word-of-recall">Word of Recall</a>
        </li>
      
    </ul>
    <a class="post-meta jetsHide" href="#top">Back to top &#8593;</a>
  
    <a id="level7"></a>
    <h2 class="post-list-head jetsHide">Level 7</h2>
    <ul class="post-list jetsContent">
      
      
        <li class="post-link-container" data-tags="cleric,level7,conjuration" data-sources="PHB.225,SRD.127">
          <a class="post-link" href="./spells/conjure-celestial">Conjure Celestial</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,warlock,wizard,level7,action,evocation" data-sources="XGE.152">
          <a class="post-link" href="./spells/crown-of-stars">Crown of Stars</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,wizard,level7,evocation" data-sources="PHB.230,SRD.133">
          <a class="post-link" href="./spells/delayed-blast-fireball">Delayed Blast Fireball</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,level7,evocation" data-sources="PHB.234,SRD.137">
          <a class="post-link" href="./spells/divine-word">Divine Word</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,wizard,level7,bonus,concentration,transmutation" data-sources="FTD.19">
          <a class="post-link" href="./spells/draconic-transformation">Draconic Transformation</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,warlock,wizard,level7,long,conjuration" data-sources="TCE.106">
          <a class="post-link" href="./spells/dream-of-the-blue-veil">Dream of the Blue Veil</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,cleric,sorcerer,warlock,wizard,level7,transmutation" data-sources="PHB.238,SRD.140">
          <a class="post-link" href="./spells/etherealness">Etherealness</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,warlock,wizard,level7,necromancy" data-sources="PHB.241,SRD.144">
          <a class="post-link" href="./spells/finger-of-death">Finger of Death</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,druid,sorcerer,level7,evocation" data-sources="PHB.241,SRD.145">
          <a class="post-link" href="./spells/fire-storm">Fire Storm</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,warlock,wizard,level7,action,evocation" data-sources="PHB.243,SRD.147">
          <a class="post-link" href="./spells/forcecage">Forcecage</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,druid,wizard,level7,illusion" data-sources="PHB.260,SRD.165">
          <a class="post-link" href="./spells/mirage-arcane">Mirage Arcane</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,wizard,level7,conjuration" data-sources="PHB.261">
          <a class="post-link" href="./spells/mordenkainens-magnificent-mansion">Mordenkainen’s Magnificent Mansion</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,wizard,level7,evocation" data-sources="PHB.262">
          <a class="post-link" href="./spells/mordenkainens-sword">Mordenkainen’s Sword</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,druid,sorcerer,warlock,wizard,level7,conjuration" data-sources="PHB.266,SRD.168">
          <a class="post-link" href="./spells/plane-shift">Plane Shift</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,warlock,wizard,level7,action,enchantment" data-sources="XGE.163">
          <a class="post-link" href="./spells/power-word-pain">Power Word Pain</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,wizard,level7,evocation" data-sources="PHB.267,SRD.170">
          <a class="post-link" href="./spells/prismatic-spray">Prismatic Spray</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,wizard,level7,illusion" data-sources="PHB.270,SRD.172">
          <a class="post-link" href="./spells/project-image">Project Image</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,cleric,druid,level7,transmutation" data-sources="PHB.271,SRD.174">
          <a class="post-link" href="./spells/regenerate">Regenerate</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,cleric,level7,necromancy" data-sources="PHB.272,SRD.175">
          <a class="post-link" href="./spells/resurrection">Resurrection</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,wizard,level7,transmutation" data-sources="PHB.272,SRD.175">
          <a class="post-link" href="./spells/reverse-gravity">Reverse Gravity</a>
        </li>
      
        <li class="post-link-container" data-tags="wizard,level7,transmutation" data-sources="PHB.274,SRD.178">
          <a class="post-link" href="./spells/sequester">Sequester</a>
        </li>
      
        <li class="post-link-container" data-tags="wizard,level7,illusion" data-sources="PHB.276,SRD.180">
          <a class="post-link" href="./spells/simulacrum">Simulacrum</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,druid,wizard,cleric,level7,long,abjuration" data-sources="PHB.280,SRD.184">
          <a class="post-link" href="./spells/symbol">Symbol</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,wizard,level7,conjuration" data-sources="PHB.281,SRD.185">
          <a class="post-link" href="./spells/teleport">Teleport</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,level7,long,conjuration" data-sources="XGE.167">
          <a class="post-link" href="./spells/temple-of-the-gods">Temple of the Gods</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,wizard,level7,action,concentration,evocation" data-sources="EE.23,XGE.171">
          <a class="post-link" href="./spells/whirlwind">Whirlwind</a>
        </li>
      
    </ul>
    <a class="post-meta jetsHide" href="#top">Back to top &#8593;</a>
  
    <a id="level8"></a>
    <h2 class="post-list-head jetsHide">Level 8</h2>
    <ul class="post-list jetsContent">
      
      
        <li class="post-link-container" data-tags="sorcerer,wizard,level8,action,necromancy" data-sources="EE.15,XGE.150">
          <a class="post-link" href="./spells/abi-dalzims-horrid-wilting">Abi-Dalzim’s Horrid Wilting</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,level8,action,concentration,transmutation" data-sources="PHB.212,SRD.115">
          <a class="post-link" href="./spells/animal-shapes">Animal Shapes</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,wizard,level8,action,concentration,abjuration" data-sources="PHB.213,SRD.117">
          <a class="post-link" href="./spells/antimagic-field">Antimagic Field</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,druid,wizard,level8,enchantment" data-sources="PHB.214,SRD.117">
          <a class="post-link" href="./spells/antipathy-sympathy">Antipathy/Sympathy</a>
        </li>
      
        <li class="post-link-container" data-tags="wizard,level8,necromancy" data-sources="PHB.222,SRD.125">
          <a class="post-link" href="./spells/clone">Clone</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,druid,wizard,level8,transmutation" data-sources="PHB.228,SRD.131">
          <a class="post-link" href="./spells/control-weather">Control Weather</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,warlock,wizard,level8,action,conjuration" data-sources="PHB.231,SRD.134">
          <a class="post-link" href="./spells/demiplane">Demiplane</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,warlock,wizard,level8,enchantment" data-sources="PHB.235,SRD.137">
          <a class="post-link" href="./spells/dominate-monster">Dominate Monster</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,druid,sorcerer,level8,evocation" data-sources="PHB.236,SRD.139">
          <a class="post-link" href="./spells/earthquake">Earthquake</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,druid,warlock,wizard,level8,action,enchantment" data-sources="PHB.239,SRD.142">
          <a class="post-link" href="./spells/feeblemind">Feeblemind</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,warlock,level8,transmutation" data-sources="PHB.245,SRD.149">
          <a class="post-link" href="./spells/glibness">Glibness</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,level8,abjuration" data-sources="PHB.251,SRD.155">
          <a class="post-link" href="./spells/holy-aura">Holy Aura</a>
        </li>
      
        <li class="post-link-container" data-tags="wizard,level8,action,concentration,illusion" data-sources="XGE.157">
          <a class="post-link" href="./spells/illusory-dragon">Illusory Dragon</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,sorcerer,wizard,level8,action,concentration,conjuration" data-sources="PHB.253,SRD.157">
          <a class="post-link" href="./spells/incendiary-cloud">Incendiary Cloud</a>
        </li>
      
        <li class="post-link-container" data-tags="warlock,wizard,level8,action,concentration,evocation" data-sources="XGE.160">
          <a class="post-link" href="./spells/maddening-darkness">Maddening Darkness</a>
        </li>
      
        <li class="post-link-container" data-tags="wizard,level8,conjuration" data-sources="PHB.258,SRD.163">
          <a class="post-link" href="./spells/maze">Maze</a>
        </li>
      
        <li class="post-link-container" data-tags="wizard,level8,long,conjuration" data-sources="XGE.161">
          <a class="post-link" href="./spells/mighty-fortress">Mighty Fortress</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,wizard,level8,abjuration" data-sources="PHB.259,SRD.164">
          <a class="post-link" href="./spells/mind-blank">Mind Blank</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,warlock,wizard,level8,enchantment" data-sources="PHB.267,SRD.170">
          <a class="post-link" href="./spells/power-word-stun">Power Word Stun</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,druid,sorcerer,wizard,level8,action,evocation" data-sources="PHB.279,SRD.184">
          <a class="post-link" href="./spells/sunburst">Sunburst</a>
        </li>
      
        <li class="post-link-container" data-tags="wizard,level8,evocation" data-sources="PHB.281">
          <a class="post-link" href="./spells/telepathy">Telepathy</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,level8,conjuration" data-sources="PHB.284">
          <a class="post-link" href="./spells/tsunami">Tsunami</a>
        </li>
      
    </ul>
    <a class="post-meta jetsHide" href="#top">Back to top &#8593;</a>
  
    <a id="level9"></a>
    <h2 class="post-list-head jetsHide">Level 9</h2>
    <ul class="post-list jetsContent">
      
      
        <li class="post-link-container" data-tags="cleric,warlock,wizard,level9,necromancy" data-sources="PHB.215,SRD.119">
          <a class="post-link" href="./spells/astral-projection">Astral Projection</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,warlock,wizard,level9,bonus,concentration,conjuration" data-sources="TCE.106">
          <a class="post-link" href="./spells/blade-of-disaster">Blade of Disaster</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,druid,warlock,wizard,level9,divination" data-sources="PHB.244,SRD.147">
          <a class="post-link" href="./spells/foresight">Foresight</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,sorcerer,warlock,wizard,level9,action,concentration,conjuration" data-sources="PHB.244,SRD.148">
          <a class="post-link" href="./spells/gate">Gate</a>
        </li>
      
        <li class="post-link-container" data-tags="warlock,wizard,level9,abjuration" data-sources="PHB.252,SRD.156">
          <a class="post-link" href="./spells/imprisonment">Imprisonment</a>
        </li>
      
        <li class="post-link-container" data-tags="wizard,level9,action,concentration,abjuration" data-sources="XGE.160">
          <a class="post-link" href="./spells/invulnerability">Invulnerability</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,level9,evocation" data-sources="PHB.258,SRD.163">
          <a class="post-link" href="./spells/mass-heal">Mass Heal</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,wizard,level9,action,concentration,transmutation" data-sources="XGE.160">
          <a class="post-link" href="./spells/mass-polymorph">Mass Polymorph</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,wizard,level9,evocation" data-sources="PHB.259,SRD.164">
          <a class="post-link" href="./spells/meteor-swarm">Meteor Swarm</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,bard,level9,action,evocation" data-sources="PHB.266">
          <a class="post-link" href="./spells/power-word-heal">Power Word Heal</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,warlock,wizard,level9,enchantment" data-sources="PHB.266,SRD.170">
          <a class="post-link" href="./spells/power-word-kill">Power Word Kill</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,wizard,level9,abjuration" data-sources="PHB.267,SRD.171">
          <a class="post-link" href="./spells/prismatic-wall">Prismatic Wall</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,sorcerer,warlock,wizard,level9,action,enchantment" data-sources="XGE.163">
          <a class="post-link" href="./spells/psychic-scream">Psychic Scream</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,wizard,level9,transmutation" data-sources="PHB.274,SRD.178">
          <a class="post-link" href="./spells/shapechange">Shapechange</a>
        </li>
      
        <li class="post-link-container" data-tags="druid,level9,conjuration" data-sources="PHB.279,SRD.183">
          <a class="post-link" href="./spells/storm-of-vengeance">Storm of Vengeance</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,wizard,level9,transmutation" data-sources="PHB.283,SRD.187">
          <a class="post-link" href="./spells/time-stop">Time Stop</a>
        </li>
      
        <li class="post-link-container" data-tags="bard,warlock,wizard,level9,transmutation" data-sources="PHB.283,SRD.188">
          <a class="post-link" href="./spells/true-polymorph">True Polymorph</a>
        </li>
      
        <li class="post-link-container" data-tags="cleric,druid,level9,necromancy" data-sources="PHB.284,SRD.189">
          <a class="post-link" href="./spells/true-resurrection">True Resurrection</a>
        </li>
      
        <li class="post-link-container" data-tags="warlock,wizard,level9,action,concentration,illusion" data-sources="PHB.288,SRD.192">
          <a class="post-link" href="./spells/weird">Weird</a>
        </li>
      
        <li class="post-link-container" data-tags="sorcerer,wizard,level9,conjuration" data-sources="PHB.288,SRD.193">
          <a class="post-link" href="./spells/wish">Wish</a>
        </li>
      
    </ul>
    <a class="post-meta jetsHide" href="#top">Back to top &#8593;</a>
  

  <p class="rss-subscribe">subscribe <a href="feed.xml">via RSS</a></p>

</div>


      </div>
    </div>

    <footer class="site-footer">

  <div class="wrapper">

    <h2 class="footer-heading">The Grimoire</h2>

    <div class="footer-col-wrapper">
      <div class="footer-col  footer-col-1">
        <ul class="contact-list">
          <li><p class="text">A searchable D&D 5e spell list, sorted by class and level.</p></li>
          <li><a href="mailto:"></a></li>
        </ul>
      </div>

      <div class="footer-col  footer-col-2">
        <p>Dr. <a href="https://jekyllrb.com/" target="_blank">Jekyll</a> tempts fickle fate in his pursuit of the <a href="https://code.visualstudio.com/" target="_blank">code</a>.</p>
      </div>
    
    <div class="footer-col  footer-col-3">
      <p>Source available on <a href="https://github.com/thebombzen/grimoire/" target="_blank">Github</a>.</p>
    </div>
  </div>
  <div class="footer-top-link"><a href="#top">Back to top &#8593;</a></div>

  </div>

</footer>
<script>
  var jets = new Jets({
    searchTag: '#jetsSearch',
    contentTag: '.jetsContent',
    didSearch: function(search_phrase) {
      var elements = document.getElementsByClassName("jetsHide");
      if (!search_phrase.trim()) {
        for (var i = 0; i < elements.length; i++) {
          elements[i].classList.remove("searchHide");
        }
      } else {
        for (var i = 0; i < elements.length; i++) {
          elements[i].classList.add("searchHide");
        }
      }     
    }
  })
  </script>


  </body>

</html>

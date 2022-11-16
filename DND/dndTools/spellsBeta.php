<?php
//set up
//require_once('./dndTools/simple_html_dom.php');

//Spell Names
$spellNames=array(
'Acid Splash',
'Blade Ward',
'Booming Blade',
'Chill Touch',
'Control Flames',
'Create Bonfire',
'Dancing Lights',
'Druidcraft',
'Eldritch Blast',
'Fire Bolt',
'Friends',
'Frostbite',
'Green-Flame Blade',
'Guidance',
'Gust',
'Infestation',
'Light',
'Lightning Lure',
'Mage Hand',
'Magic Stone',
'Mending',
'Message',
'Mind Sliver',
'Minor Illusion',
'Mold Earth',
'Poison Spray',
'Prestidigitation',
'Primal Savagery',
'Produce Flame',
'Ray of Frost',
'Resistance',
'Sacred Flame',
'Shape Water',
'Shillelagh',
'Shocking Grasp',
'Spare the Dying',
'Sword Burst',
'Thaumaturgy',
'Thorn Whip',
'Thunderclap',
'Toll the Dead',
'True Strike',
'Vicious Mockery',
'Word of Radiance',
'Absorb Elements',
'Alarm',
'Animal Friendship',
'Armor of Agathys',
'Arms of Hadar',
'Bane',
'Beast Bond',
'Bless',
'Burning Hands',
'Catapult',
'Cause Fear',
'Ceremony',
'Chaos Bolt',
'Charm Person',
'Chromatic Orb',
'Color Spray',
'Command',
'Compelled Duel',
'Comprehend Languages',
'Create or Destroy Water',
'Cure Wounds',
'Detect Evil and Good',
'Detect Magic',
'Detect Poison and Disease',
'Disguise Self',
'Dissonant Whispers',
'Divine Favor',
'Earth Tremor',
'Ensnaring Strike',
'Entangle',
'Expeditious Retreat',
'Faerie Fire',
'False Life',
'Feather Fall',
'Find Familiar',
'Fog Cloud',
'Goodberry',
'Grease',
'Guiding Bolt',
'Hail of Thorns',
'Healing Word',
'Hellish Rebuke',
'Heroism',
'Hex',
'Hunters Mark',
'Ice Knife',
'Identify',
'Illusory Script',
'Inflict Wounds',
'Jump',
'Longstrider',
'Mage Armor',
'Magic Missile',
'Protection from Evil and Good',
'Purify Food and Drink',
'Ray of Sickness',
'Sanctuary',
'Searing Smite',
'Shield',
'Shield of Faith',
'Silent Image',
'Silvery Barbs',
'Sleep',
'Snare',
'Speak with Animals',
'Tashas Caustic Brew',
'Tashas Hideous Laughter',
'Tensers Floating Disk',
'Thunderous Smite',
'Thunderwave',
'Unseen Servant',
'Witch Bolt',
'Wrathful Smite',
'Zephyr Strike',
'Aganazzars Scorcher',
'Aid',
'Alter Self',
'Animal Messenger',
'Arcane Lock',
'Augury',
'Barkskin',
'Beast Sense',
'Blindness/Deafness',
'Blur',
'Borrowed Knowledge',
'Branding Smite',
'Calm Emotions',
'Cloud of Daggers',
'Continual Flame',
'Cordon Of Arrows',
'Crown of Madness',
'Darkness',
'Darkvision',
'Detect Thoughts',
'Dragons Breath',
'Dust Devil',
'Earthbind',
'Enhance Ability',
'Enlarge/Reduce',
'Enthrall',
'Find Steed',
'Find Traps',
'Flame Blade',
'Flaming Sphere',
'Gentle Repose',
'Gust of Wind',
'Healing Spirit',
'Heat Metal',
'Hold Person',
'Invisibility',
'Kinetic Jaunt',
'Knock',
'Lesser Restoration',
'Levitate',
'Locate Animals or Plants',
'Locate Object',
'Magic Mouth',
'Magic Weapon',
'Maximilians Earthen Grasp',
'Melfs Acid Arrow',
'Mind Spike',
'Mirror Image',
'Misty Step',
'Moonbeam',
'Nathairs Mischief',
'Nystuls Magic Aura',
'Pass Without Trace',
'Phantasmal Force',
'Prayer of Healing',
'Protection from Poison',
'Pyrotechnics',
'Ray of Enfeeblement',
'Rimes Binding Ice',
'Rope Trick',
'Scorching Ray',
'See Invisibility',
'Shadow Blade',
'Shatter',
'Silence',
'Skywrite',
'Snillocs Snowball Swarm',
'Spider Climb',
'Spike Growth',
'Spiritual Weapon',
'Suggestion',
'Summon Beast',
'Tashas Mind Whip',
'Vortex Warp',
'Warding Bond',
'Warding Wind',
'Web',
'Wither and Bloom',
'Zone of Truth',
'Animate Dead',
'Ashardalons Stride',
'Aura Of Vitality',
'Beacon of Hope',
'Bestow Curse',
'Blinding Smite',
'Blink',
'Call Lightning',
'Catnap',
'Clairvoyance',
'Conjure Animals',
'Conjure Barrage',
'Counterspell',
'Create Food and Water',
'Crusaders Mantle',
'Daylight',
'Dispel Magic',
'Elemental Weapon',
'Enemies Abound',
'Erupting Earth',
'Fear',
'Feign Death',
'Fireball',
'Flame Arrows',
'Fly',
'Gaseous Form',
'Glyph of Warding',
'Haste',
'Hunger of Hadar',
'Hypnotic Pattern',
'Intellect Fortress',
'Leomunds Tiny Hut',
'Life Transference',
'Lightning Arrow',
'Lightning Bolt',
'Magic Circle',
'Major Image',
'Mass Healing Word',
'Meld Into Stone',
'Melfs Minute Meteors',
'Nondetection',
'Phantom Steed',
'Plant Growth',
'Protection from Energy',
'Remove Curse',
'Revivify',
'Sending',
'Sleet Storm',
'Slow',
'Speak with Dead',
'Speak with Plants',
'Spirit Guardians',
'Spirit Shroud',
'Stinking Cloud',
'Summon Fey',
'Summon Lesser Demons',
'Summon Shadowspawn',
'Summon Undead',
'Thunder Step',
'Tidal Wave',
'Tiny Servant',
'Tongues',
'Vampiric Touch',
'Wall of Sand',
'Wall of Water',
'Water Breathing',
'Water Walk',
'Wind Wall',
'Arcane Eye',
'Aura of Life',
'Aura of Purity',
'Banishment',
'Blight',
'Charm Monster',
'Compulsion',
'Confusion',
'Conjure Minor Elementals',
'Conjure Woodland Beings',
'Control Water',
'Death Ward',
'Dimension Door',
'Divination',
'Dominate Beast',
'Elemental Bane',
'Evards Black Tentacles',
'Fabricate',
'Find Greater Steed',
'Fire Shield',
'Freedom of Movement',
'Giant Insect',
'Grasping Vine',
'Greater Invisibility',
'Guardian of Faith',
'Guardian of Nature',
'Hallucinatory Terrain',
'Ice Storm',
'Leomunds Secret Chest',
'Locate Creature',
'Mordenkainens Faithful Hound',
'Mordenkainens Private Sanctum',
'Otilukes Resilient Sphere',
'Phantasmal Killer',
'Polymorph',
'Raulothims Psychic Lance',
'Shadow of Moil',
'Sickening Radiance',
'Staggering Smite',
'Stone Shape',
'Stoneskin',
'Storm Sphere',
'Summon Aberration',
'Summon Construct',
'Summon Elemental',
'Summon Greater Demon',
'Vitriolic Sphere',
'Wall of Fire',
'Watery Sphere',
'Animate Objects',
'Antilife Shell',
'Awaken',
'Banishing Smite',
'Bigbys Hand',
'Circle of Power',
'Cloudkill',
'Commune',
'Commune with Nature',
'Cone of Cold',
'Conjure Elemental',
'Conjure Volley',
'Contact Other Plane',
'Contagion',
'Control Winds',
'Creation',
'Danse Macabre',
'Dawn',
'Destructive Wave',
'Dispel Evil and Good',
'Dominate Person',
'Dream',
'Enervation',
'Far Step',
'Flame Strike',
'Geas',
'Greater Restoration',
'Hallow',
'Hold Monster',
'Holy Weapon',
'Immolation',
'Infernal Calling',
'Insect Plague',
'Legend Lore',
'Maelstrom',
'Mass Cure Wounds',
'Mislead',
'Modify Memory',
'Negative Energy Flood',
'Passwall',
'Planar Binding',
'Raise Dead',
'Rarys Telepathic Bond',
'Reincarnate',
'Scrying',
'Seeming',
'Skill Empowerment',
'Steel Wind Strike',
'Summon Celestial',
'Summon Draconic Spirit',
'Swift Quiver',
'Synaptic Static',
'Telekinesis',
'Teleportation Circle',
'Transmute Rock',
'Tree Stride',
'Wall of Force',
'Wall of Light',
'Wall of Stone',
'Wrath of Nature',
'Arcane Gate',
'Blade Barrier',
'Bones of the Earth',
'Chain Lightning',
'Circle of Death',
'Conjure Fey',
'Contingency',
'Create Homunculus',
'Create Undead',
'Disintegrate',
'Drawmijs Instant Summons',
'Druid Grove',
'Eyebite',
'Find the Path',
'Fizbans Platinum Shield',
'Flesh to Stone',
'Forbiddance',
'Globe of Invulnerability',
'Guards and Wards',
'Harm',
'Heal',
'Heroes’ Feast',
'Investiture of Flame',
'Investiture of Ice',
'Investiture of Stone',
'Investiture of Wind',
'Magic Jar',
'Mass Suggestion',
'Mental Prison',
'Move Earth',
'Otilukes Freezing Sphere',
'Ottos Irresistible Dance',
'Planar Ally',
'Primordial Ward',
'Programmed Illusion',
'Scatter',
'Soul Cage',
'Summon Fiend',
'Sunbeam',
'Tashas Otherworldly Guise',
'Tensers Transformation',
'Transport via Plants',
'True Seeing',
'Wall of Ice',
'Wall of Thorns',
'Wind Walk',
'Word of Recall',
'Conjure Celestial',
'Crown of Stars',
'Delayed Blast Fireball',
'Divine Word',
'Draconic Transformation',
'Dream of the Blue Veil',
'Etherealness',
'Finger of Death',
'Fire Storm',
'Forcecage',
'Mirage Arcane',
'Mordenkainens Magnificent Mansion',
'Mordenkainens Sword',
'Plane Shift',
'Power Word Pain',
'Prismatic Spray',
'Project Image',
'Regenerate',
'Resurrection',
'Reverse Gravity',
'Sequester',
'Simulacrum',
'Symbol',
'Teleport',
'Temple of the Gods',
'Whirlwind',
'Abi-Dalzims Horrid Wilting',
'Animal Shapes',
'Antimagic Field',
'Antipathy/Sympathy',
'Clone',
'Control Weather',
'Demiplane',
'Dominate Monster',
'Earthquake',
'Feeblemind',
'Glibness',
'Holy Aura',
'Illusory Dragon',
'Incendiary Cloud',
'Maddening Darkness',
'Maze',
'Mighty Fortress',
'Mind Blank',
'Power Word Stun',
'Sunburst',
'Telepathy',
'Tsunami',
'Astral Projection',
'Blade of Disaster',
'Foresight',
'Gate',
'Imprisonment',
'Invulnerability',
'Mass Heal',
'Mass Polymorph',
'Meteor Swarm',
'Power Word Heal',
'Power Word Kill',
'Prismatic Wall',
'Psychic Scream',
'Shapechange',
'Storm of Vengeance',
'Time Stop',
'True Polymorph',
'True Resurrection',
'Weird',
'Wish');
//Spell Links
$spellLinks=array(
'./dndTools/grimoire/spells/acid-splash',
'./dndTools/grimoire/spells/blade-ward',
'./dndTools/grimoire/spells/booming-blade',
'./dndTools/grimoire/spells/chill-touch',
'./dndTools/grimoire/spells/control-flames',
'./dndTools/grimoire/spells/create-bonfire',
'./dndTools/grimoire/spells/dancing-lights',
'./dndTools/grimoire/spells/druidcraft',
'./dndTools/grimoire/spells/eldritch-blast',
'./dndTools/grimoire/spells/fire-bolt',
'./dndTools/grimoire/spells/friends',
'./dndTools/grimoire/spells/frostbite',
'./dndTools/grimoire/spells/green-flame-blade',
'./dndTools/grimoire/spells/guidance',
'./dndTools/grimoire/spells/gust',
'./dndTools/grimoire/spells/infestation',
'./dndTools/grimoire/spells/light',
'./dndTools/grimoire/spells/lightning-lure',
'./dndTools/grimoire/spells/mage-hand',
'./dndTools/grimoire/spells/magic-stone',
'./dndTools/grimoire/spells/mending',
'./dndTools/grimoire/spells/message',
'./dndTools/grimoire/spells/mind-sliver',
'./dndTools/grimoire/spells/minor-illusion',
'./dndTools/grimoire/spells/mold-earth',
'./dndTools/grimoire/spells/poison-spray',
'./dndTools/grimoire/spells/prestidigitation',
'./dndTools/grimoire/spells/primal-savagery',
'./dndTools/grimoire/spells/produce-flame',
'./dndTools/grimoire/spells/ray-of-frost',
'./dndTools/grimoire/spells/resistance',
'./dndTools/grimoire/spells/sacred-flame',
'./dndTools/grimoire/spells/shape-water',
'./dndTools/grimoire/spells/shillelagh',
'./dndTools/grimoire/spells/shocking-grasp',
'./dndTools/grimoire/spells/spare-the-dying',
'./dndTools/grimoire/spells/sword-burst',
'./dndTools/grimoire/spells/thaumaturgy',
'./dndTools/grimoire/spells/thorn-whip',
'./dndTools/grimoire/spells/thunderclap',
'./dndTools/grimoire/spells/toll-the-dead',
'./dndTools/grimoire/spells/true-strike',
'./dndTools/grimoire/spells/vicious-mockery',
'./dndTools/grimoire/spells/word-of-radiance',
'./dndTools/grimoire/spells/absorb-elements',
'./dndTools/grimoire/spells/alarm',
'./dndTools/grimoire/spells/animal-friendship',
'./dndTools/grimoire/spells/armor-of-agathys',
'./dndTools/grimoire/spells/arms-of-hadar',
'./dndTools/grimoire/spells/bane',
'./dndTools/grimoire/spells/beast-bond',
'./dndTools/grimoire/spells/bless',
'./dndTools/grimoire/spells/burning-hands',
'./dndTools/grimoire/spells/catapult',
'./dndTools/grimoire/spells/cause-fear',
'./dndTools/grimoire/spells/ceremony',
'./dndTools/grimoire/spells/chaos-bolt',
'./dndTools/grimoire/spells/charm-person',
'./dndTools/grimoire/spells/chromatic-orb',
'./dndTools/grimoire/spells/color-spray',
'./dndTools/grimoire/spells/command',
'./dndTools/grimoire/spells/compelled-duel',
'./dndTools/grimoire/spells/comprehend-languages',
'./dndTools/grimoire/spells/create-or-destroy-water',
'./dndTools/grimoire/spells/cure-wounds',
'./dndTools/grimoire/spells/detect-evil-and-good',
'./dndTools/grimoire/spells/detect-magic',
'./dndTools/grimoire/spells/detect-poison-and-disease',
'./dndTools/grimoire/spells/disguise-self',
'./dndTools/grimoire/spells/dissonant-whispers',
'./dndTools/grimoire/spells/divine-favor',
'./dndTools/grimoire/spells/earth-tremor',
'./dndTools/grimoire/spells/ensnaring-strike',
'./dndTools/grimoire/spells/entangle',
'./dndTools/grimoire/spells/expeditious-retreat',
'./dndTools/grimoire/spells/faerie-fire',
'./dndTools/grimoire/spells/false-life',
'./dndTools/grimoire/spells/feather-fall',
'./dndTools/grimoire/spells/find-familiar',
'./dndTools/grimoire/spells/fog-cloud',
'./dndTools/grimoire/spells/goodberry',
'./dndTools/grimoire/spells/grease',
'./dndTools/grimoire/spells/guiding-bolt',
'./dndTools/grimoire/spells/hail-of-thorns',
'./dndTools/grimoire/spells/healing-word',
'./dndTools/grimoire/spells/hellish-rebuke',
'./dndTools/grimoire/spells/heroism',
'./dndTools/grimoire/spells/hex',
'./dndTools/grimoire/spells/hunters-mark',
'./dndTools/grimoire/spells/ice-knife',
'./dndTools/grimoire/spells/identify',
'./dndTools/grimoire/spells/illusory-script',
'./dndTools/grimoire/spells/inflict-wounds',
'./dndTools/grimoire/spells/jump',
'./dndTools/grimoire/spells/longstrider',
'./dndTools/grimoire/spells/mage-armor',
'./dndTools/grimoire/spells/magic-missile',
'./dndTools/grimoire/spells/protection-from-evil-and-good',
'./dndTools/grimoire/spells/purify-food-and-drink',
'./dndTools/grimoire/spells/ray-of-sickness',
'./dndTools/grimoire/spells/sanctuary',
'./dndTools/grimoire/spells/searing-smite',
'./dndTools/grimoire/spells/shield',
'./dndTools/grimoire/spells/shield-of-faith',
'./dndTools/grimoire/spells/silent-image',
'./dndTools/grimoire/spells/silvery-barbs',
'./dndTools/grimoire/spells/sleep',
'./dndTools/grimoire/spells/snare',
'./dndTools/grimoire/spells/speak-with-animals',
'./dndTools/grimoire/spells/tashas-caustic-brew',
'./dndTools/grimoire/spells/tashas-hideous-laughter',
'./dndTools/grimoire/spells/tensers-floating-disk',
'./dndTools/grimoire/spells/thunderous-smite',
'./dndTools/grimoire/spells/thunderwave',
'./dndTools/grimoire/spells/unseen-servant',
'./dndTools/grimoire/spells/witch-bolt',
'./dndTools/grimoire/spells/wrathful-smite',
'./dndTools/grimoire/spells/zephyr-strike',
'./dndTools/grimoire/spells/aganazzars-scorcher',
'./dndTools/grimoire/spells/aid',
'./dndTools/grimoire/spells/alter-self',
'./dndTools/grimoire/spells/animal-messenger',
'./dndTools/grimoire/spells/arcane-lock',
'./dndTools/grimoire/spells/augury',
'./dndTools/grimoire/spells/barkskin',
'./dndTools/grimoire/spells/beast-sense',
'./dndTools/grimoire/spells/blindnessdeafness',
'./dndTools/grimoire/spells/blur',
'./dndTools/grimoire/spells/borrowed-knowledge',
'./dndTools/grimoire/spells/branding-smite',
'./dndTools/grimoire/spells/calm-emotions',
'./dndTools/grimoire/spells/cloud-of-daggers',
'./dndTools/grimoire/spells/continual-flame',
'./dndTools/grimoire/spells/cordon-of-arrows',
'./dndTools/grimoire/spells/crown-of-madness',
'./dndTools/grimoire/spells/darkness',
'./dndTools/grimoire/spells/darkvision',
'./dndTools/grimoire/spells/detect-thoughts',
'./dndTools/grimoire/spells/dragons-breath',
'./dndTools/grimoire/spells/dust-devil',
'./dndTools/grimoire/spells/earthbind',
'./dndTools/grimoire/spells/enhance-ability',
'./dndTools/grimoire/spells/enlarge-reduce',
'./dndTools/grimoire/spells/enthrall',
'./dndTools/grimoire/spells/find-steed',
'./dndTools/grimoire/spells/find-traps',
'./dndTools/grimoire/spells/flame-blade',
'./dndTools/grimoire/spells/flaming-sphere',
'./dndTools/grimoire/spells/gentle-repose',
'./dndTools/grimoire/spells/gust-of-wind',
'./dndTools/grimoire/spells/healing-spirit',
'./dndTools/grimoire/spells/heat-metal',
'./dndTools/grimoire/spells/hold-person',
'./dndTools/grimoire/spells/invisibility',
'./dndTools/grimoire/spells/kinetic-jaunt',
'./dndTools/grimoire/spells/knock',
'./dndTools/grimoire/spells/lesser-restoration',
'./dndTools/grimoire/spells/levitate',
'./dndTools/grimoire/spells/locate-animals-or-plants',
'./dndTools/grimoire/spells/locate-object',
'./dndTools/grimoire/spells/magic-mouth',
'./dndTools/grimoire/spells/magic-weapon',
'./dndTools/grimoire/spells/maximilians-earthen-grasp',
'./dndTools/grimoire/spells/melfs-acid-arrow',
'./dndTools/grimoire/spells/mind-spike',
'./dndTools/grimoire/spells/mirror-image',
'./dndTools/grimoire/spells/misty-step',
'./dndTools/grimoire/spells/moonbeam',
'./dndTools/grimoire/spells/nathairs-mischief',
'./dndTools/grimoire/spells/nystuls-magic-aura',
'./dndTools/grimoire/spells/pass-without-trace',
'./dndTools/grimoire/spells/phantasmal-force',
'./dndTools/grimoire/spells/prayer-of-healing',
'./dndTools/grimoire/spells/protection-from-poison',
'./dndTools/grimoire/spells/pyrotechnics',
'./dndTools/grimoire/spells/ray-of-enfeeblement',
'./dndTools/grimoire/spells/rimes-binding-ice',
'./dndTools/grimoire/spells/rope-trick',
'./dndTools/grimoire/spells/scorching-ray',
'./dndTools/grimoire/spells/see-invisibility',
'./dndTools/grimoire/spells/shadow-blade',
'./dndTools/grimoire/spells/shatter',
'./dndTools/grimoire/spells/silence',
'./dndTools/grimoire/spells/skywrite',
'./dndTools/grimoire/spells/snillocs-snowball-swarm',
'./dndTools/grimoire/spells/spider-climb',
'./dndTools/grimoire/spells/spike-growth',
'./dndTools/grimoire/spells/spiritual-weapon',
'./dndTools/grimoire/spells/suggestion',
'./dndTools/grimoire/spells/summon-beast',
'./dndTools/grimoire/spells/tashas-mind-whip',
'./dndTools/grimoire/spells/vortex-warp',
'./dndTools/grimoire/spells/warding-bond',
'./dndTools/grimoire/spells/warding-wind',
'./dndTools/grimoire/spells/web',
'./dndTools/grimoire/spells/wither-and-bloom',
'./dndTools/grimoire/spells/zone-of-truth',
'./dndTools/grimoire/spells/animate-dead',
'./dndTools/grimoire/spells/ashardalons-stride',
'./dndTools/grimoire/spells/aura-of-vitality',
'./dndTools/grimoire/spells/beacon-of-hope',
'./dndTools/grimoire/spells/bestow-curse',
'./dndTools/grimoire/spells/blinding-smite',
'./dndTools/grimoire/spells/blink',
'./dndTools/grimoire/spells/call-lightning',
'./dndTools/grimoire/spells/catnap',
'./dndTools/grimoire/spells/clairvoyance',
'./dndTools/grimoire/spells/conjure-animals',
'./dndTools/grimoire/spells/conjure-barrage',
'./dndTools/grimoire/spells/counterspell',
'./dndTools/grimoire/spells/create-food-and-water',
'./dndTools/grimoire/spells/crusaders-mantle',
'./dndTools/grimoire/spells/daylight',
'./dndTools/grimoire/spells/dispel-magic',
'./dndTools/grimoire/spells/elemental-weapon',
'./dndTools/grimoire/spells/enemies-abound',
'./dndTools/grimoire/spells/erupting-earth',
'./dndTools/grimoire/spells/fear',
'./dndTools/grimoire/spells/feign-death',
'./dndTools/grimoire/spells/fireball',
'./dndTools/grimoire/spells/flame-arrows',
'./dndTools/grimoire/spells/fly',
'./dndTools/grimoire/spells/gaseous-form',
'./dndTools/grimoire/spells/glyph-of-warding',
'./dndTools/grimoire/spells/haste',
'./dndTools/grimoire/spells/hunger-of-hadar',
'./dndTools/grimoire/spells/hypnotic-pattern',
'./dndTools/grimoire/spells/intellect-fortress',
'./dndTools/grimoire/spells/leomunds-tiny-hut',
'./dndTools/grimoire/spells/life-transference',
'./dndTools/grimoire/spells/lightning-arrow',
'./dndTools/grimoire/spells/lightning-bolt',
'./dndTools/grimoire/spells/magic-circle',
'./dndTools/grimoire/spells/major-image',
'./dndTools/grimoire/spells/mass-healing-word',
'./dndTools/grimoire/spells/meld-into-stone',
'./dndTools/grimoire/spells/melfs-minute-meteors',
'./dndTools/grimoire/spells/nondetection',
'./dndTools/grimoire/spells/phantom-steed',
'./dndTools/grimoire/spells/plant-growth',
'./dndTools/grimoire/spells/protection-from-energy',
'./dndTools/grimoire/spells/remove-curse',
'./dndTools/grimoire/spells/revivify',
'./dndTools/grimoire/spells/sending',
'./dndTools/grimoire/spells/sleet-storm',
'./dndTools/grimoire/spells/slow',
'./dndTools/grimoire/spells/speak-with-dead',
'./dndTools/grimoire/spells/speak-with-plants',
'./dndTools/grimoire/spells/spirit-guardians',
'./dndTools/grimoire/spells/spirit-shroud',
'./dndTools/grimoire/spells/stinking-cloud',
'./dndTools/grimoire/spells/summon-fey',
'./dndTools/grimoire/spells/summon-lesser-demons',
'./dndTools/grimoire/spells/summon-shadowspawn',
'./dndTools/grimoire/spells/summon-undead',
'./dndTools/grimoire/spells/thunder-step',
'./dndTools/grimoire/spells/tidal-wave',
'./dndTools/grimoire/spells/tiny-servant',
'./dndTools/grimoire/spells/tongues',
'./dndTools/grimoire/spells/vampiric-touch',
'./dndTools/grimoire/spells/wall-of-sand',
'./dndTools/grimoire/spells/wall-of-water',
'./dndTools/grimoire/spells/water-breathing',
'./dndTools/grimoire/spells/water-walk',
'./dndTools/grimoire/spells/wind-wall',
'./dndTools/grimoire/spells/arcane-eye',
'./dndTools/grimoire/spells/aura-of-life',
'./dndTools/grimoire/spells/aura-of-purity',
'./dndTools/grimoire/spells/banishment',
'./dndTools/grimoire/spells/blight',
'./dndTools/grimoire/spells/charm-monster',
'./dndTools/grimoire/spells/compulsion',
'./dndTools/grimoire/spells/confusion',
'./dndTools/grimoire/spells/conjure-minor-elementals',
'./dndTools/grimoire/spells/conjure-woodland-beings',
'./dndTools/grimoire/spells/control-water',
'./dndTools/grimoire/spells/death-ward',
'./dndTools/grimoire/spells/dimension-door',
'./dndTools/grimoire/spells/divination',
'./dndTools/grimoire/spells/dominate-beast',
'./dndTools/grimoire/spells/elemental-bane',
'./dndTools/grimoire/spells/evards-black-tentacles',
'./dndTools/grimoire/spells/fabricate',
'./dndTools/grimoire/spells/find-greater-steed',
'./dndTools/grimoire/spells/fire-shield',
'./dndTools/grimoire/spells/freedom-of-movement',
'./dndTools/grimoire/spells/giant-insect',
'./dndTools/grimoire/spells/grasping-vine',
'./dndTools/grimoire/spells/greater-invisibility',
'./dndTools/grimoire/spells/guardian-of-faith',
'./dndTools/grimoire/spells/guardian-of-nature',
'./dndTools/grimoire/spells/hallucinatory-terrain',
'./dndTools/grimoire/spells/ice-storm',
'./dndTools/grimoire/spells/leomunds-secret-chest',
'./dndTools/grimoire/spells/locate-creature',
'./dndTools/grimoire/spells/mordenkainens-faithful-hound',
'./dndTools/grimoire/spells/mordenkainens-private-sanctum',
'./dndTools/grimoire/spells/otilukes-resilient-sphere',
'./dndTools/grimoire/spells/phantasmal-killer',
'./dndTools/grimoire/spells/polymorph',
'./dndTools/grimoire/spells/raulothims-psychic-lance',
'./dndTools/grimoire/spells/shadow-of-moil',
'./dndTools/grimoire/spells/sickening-radiance',
'./dndTools/grimoire/spells/staggering-smite',
'./dndTools/grimoire/spells/stone-shape',
'./dndTools/grimoire/spells/stoneskin',
'./dndTools/grimoire/spells/storm-sphere',
'./dndTools/grimoire/spells/summon-aberration',
'./dndTools/grimoire/spells/summon-construct',
'./dndTools/grimoire/spells/summon-elemental',
'./dndTools/grimoire/spells/summon-greater-demon',
'./dndTools/grimoire/spells/vitriolic-sphere',
'./dndTools/grimoire/spells/wall-of-fire',
'./dndTools/grimoire/spells/watery-sphere',
'./dndTools/grimoire/spells/animate-objects',
'./dndTools/grimoire/spells/antilife-shell',
'./dndTools/grimoire/spells/awaken',
'./dndTools/grimoire/spells/banishing-smite',
'./dndTools/grimoire/spells/bigbys-hand',
'./dndTools/grimoire/spells/circle-of-power',
'./dndTools/grimoire/spells/cloudkill',
'./dndTools/grimoire/spells/commune',
'./dndTools/grimoire/spells/commune-with-nature',
'./dndTools/grimoire/spells/cone-of-cold',
'./dndTools/grimoire/spells/conjure-elemental',
'./dndTools/grimoire/spells/conjure-volley',
'./dndTools/grimoire/spells/contact-other-plane',
'./dndTools/grimoire/spells/contagion',
'./dndTools/grimoire/spells/control-winds',
'./dndTools/grimoire/spells/creation',
'./dndTools/grimoire/spells/danse-macabre',
'./dndTools/grimoire/spells/dawn',
'./dndTools/grimoire/spells/destructive-wave',
'./dndTools/grimoire/spells/dispel-evil-and-good',
'./dndTools/grimoire/spells/dominate-person',
'./dndTools/grimoire/spells/dream',
'./dndTools/grimoire/spells/enervation',
'./dndTools/grimoire/spells/far-step',
'./dndTools/grimoire/spells/flame-strike',
'./dndTools/grimoire/spells/geas',
'./dndTools/grimoire/spells/greater-restoration',
'./dndTools/grimoire/spells/hallow',
'./dndTools/grimoire/spells/hold-monster',
'./dndTools/grimoire/spells/holy-weapon',
'./dndTools/grimoire/spells/immolation',
'./dndTools/grimoire/spells/infernal-calling',
'./dndTools/grimoire/spells/insect-plague',
'./dndTools/grimoire/spells/legend-lore',
'./dndTools/grimoire/spells/maelstrom',
'./dndTools/grimoire/spells/mass-cure-wounds',
'./dndTools/grimoire/spells/mislead',
'./dndTools/grimoire/spells/modify-memory',
'./dndTools/grimoire/spells/negative-energy-flood',
'./dndTools/grimoire/spells/passwall',
'./dndTools/grimoire/spells/planar-binding',
'./dndTools/grimoire/spells/raise-dead',
'./dndTools/grimoire/spells/rarys-telepathic-bond',
'./dndTools/grimoire/spells/reincarnate',
'./dndTools/grimoire/spells/scrying',
'./dndTools/grimoire/spells/seeming',
'./dndTools/grimoire/spells/skill-empowerment',
'./dndTools/grimoire/spells/steel-wind-strike',
'./dndTools/grimoire/spells/summon-celestial',
'./dndTools/grimoire/spells/summon-draconic-spirit',
'./dndTools/grimoire/spells/swift-quiver',
'./dndTools/grimoire/spells/synaptic-static',
'./dndTools/grimoire/spells/telekinesis',
'./dndTools/grimoire/spells/teleportation-circle',
'./dndTools/grimoire/spells/transmute-rock',
'./dndTools/grimoire/spells/tree-stride',
'./dndTools/grimoire/spells/wall-of-force',
'./dndTools/grimoire/spells/wall-of-light',
'./dndTools/grimoire/spells/wall-of-stone',
'./dndTools/grimoire/spells/wrath-of-nature',
'./dndTools/grimoire/spells/arcane-gate',
'./dndTools/grimoire/spells/blade-barrier',
'./dndTools/grimoire/spells/bones-of-the-earth',
'./dndTools/grimoire/spells/chain-lightning',
'./dndTools/grimoire/spells/circle-of-death',
'./dndTools/grimoire/spells/conjure-fey',
'./dndTools/grimoire/spells/contingency',
'./dndTools/grimoire/spells/create-homunculus',
'./dndTools/grimoire/spells/create-undead',
'./dndTools/grimoire/spells/disintegrate',
'./dndTools/grimoire/spells/drawmijs-instant-summons',
'./dndTools/grimoire/spells/druid-grove',
'./dndTools/grimoire/spells/eyebite',
'./dndTools/grimoire/spells/find-the-path',
'./dndTools/grimoire/spells/fizbans-platinum-shield',
'./dndTools/grimoire/spells/flesh-to-stone',
'./dndTools/grimoire/spells/forbiddance',
'./dndTools/grimoire/spells/globe-of-invulnerability',
'./dndTools/grimoire/spells/guards-and-wards',
'./dndTools/grimoire/spells/harm',
'./dndTools/grimoire/spells/heal',
'./dndTools/grimoire/spells/heroes-feast',
'./dndTools/grimoire/spells/investiture-of-flame',
'./dndTools/grimoire/spells/investiture-of-ice',
'./dndTools/grimoire/spells/investiture-of-stone',
'./dndTools/grimoire/spells/investiture-of-wind',
'./dndTools/grimoire/spells/magic-jar',
'./dndTools/grimoire/spells/mass-suggestion',
'./dndTools/grimoire/spells/mental-prison',
'./dndTools/grimoire/spells/move-earth',
'./dndTools/grimoire/spells/otilukes-freezing-sphere',
'./dndTools/grimoire/spells/ottos-irresistible-dance',
'./dndTools/grimoire/spells/planar-ally',
'./dndTools/grimoire/spells/primordial-ward',
'./dndTools/grimoire/spells/programmed-illusion',
'./dndTools/grimoire/spells/scatter',
'./dndTools/grimoire/spells/soul-cage',
'./dndTools/grimoire/spells/summon-fiend',
'./dndTools/grimoire/spells/sunbeam',
'./dndTools/grimoire/spells/tashas-otherwordly-guise',
'./dndTools/grimoire/spells/tensers-transformation',
'./dndTools/grimoire/spells/transport-via-plants',
'./dndTools/grimoire/spells/true-seeing',
'./dndTools/grimoire/spells/wall-of-ice',
'./dndTools/grimoire/spells/wall-of-thorns',
'./dndTools/grimoire/spells/wind-walk',
'./dndTools/grimoire/spells/word-of-recall',
'./dndTools/grimoire/spells/conjure-celestial',
'./dndTools/grimoire/spells/crown-of-stars',
'./dndTools/grimoire/spells/delayed-blast-fireball',
'./dndTools/grimoire/spells/divine-word',
'./dndTools/grimoire/spells/draconic-transformation',
'./dndTools/grimoire/spells/dream-of-the-blue-veil',
'./dndTools/grimoire/spells/etherealness',
'./dndTools/grimoire/spells/finger-of-death',
'./dndTools/grimoire/spells/fire-storm',
'./dndTools/grimoire/spells/forcecage',
'./dndTools/grimoire/spells/mirage-arcane',
'./dndTools/grimoire/spells/mordenkainens-magnificent-mansion',
'./dndTools/grimoire/spells/mordenkainens-sword',
'./dndTools/grimoire/spells/plane-shift',
'./dndTools/grimoire/spells/power-word-pain',
'./dndTools/grimoire/spells/prismatic-spray',
'./dndTools/grimoire/spells/project-image',
'./dndTools/grimoire/spells/regenerate',
'./dndTools/grimoire/spells/resurrection',
'./dndTools/grimoire/spells/reverse-gravity',
'./dndTools/grimoire/spells/sequester',
'./dndTools/grimoire/spells/simulacrum',
'./dndTools/grimoire/spells/symbol',
'./dndTools/grimoire/spells/teleport',
'./dndTools/grimoire/spells/temple-of-the-gods',
'./dndTools/grimoire/spells/whirlwind',
'./dndTools/grimoire/spells/abi-dalzims-horrid-wilting',
'./dndTools/grimoire/spells/animal-shapes',
'./dndTools/grimoire/spells/antimagic-field',
'./dndTools/grimoire/spells/antipathy-sympathy',
'./dndTools/grimoire/spells/clone',
'./dndTools/grimoire/spells/control-weather',
'./dndTools/grimoire/spells/demiplane',
'./dndTools/grimoire/spells/dominate-monster',
'./dndTools/grimoire/spells/earthquake',
'./dndTools/grimoire/spells/feeblemind',
'./dndTools/grimoire/spells/glibness',
'./dndTools/grimoire/spells/holy-aura',
'./dndTools/grimoire/spells/illusory-dragon',
'./dndTools/grimoire/spells/incendiary-cloud',
'./dndTools/grimoire/spells/maddening-darkness',
'./dndTools/grimoire/spells/maze',
'./dndTools/grimoire/spells/mighty-fortress',
'./dndTools/grimoire/spells/mind-blank',
'./dndTools/grimoire/spells/power-word-stun',
'./dndTools/grimoire/spells/sunburst',
'./dndTools/grimoire/spells/telepathy',
'./dndTools/grimoire/spells/tsunami',
'./dndTools/grimoire/spells/astral-projection',
'./dndTools/grimoire/spells/blade-of-disaster',
'./dndTools/grimoire/spells/foresight',
'./dndTools/grimoire/spells/gate',
'./dndTools/grimoire/spells/imprisonment',
'./dndTools/grimoire/spells/invulnerability',
'./dndTools/grimoire/spells/mass-heal',
'./dndTools/grimoire/spells/mass-polymorph',
'./dndTools/grimoire/spells/meteor-swarm',
'./dndTools/grimoire/spells/power-word-heal',
'./dndTools/grimoire/spells/power-word-kill',
'./dndTools/grimoire/spells/prismatic-wall',
'./dndTools/grimoire/spells/psychic-scream',
'./dndTools/grimoire/spells/shapechange',
'./dndTools/grimoire/spells/storm-of-vengeance',
'./dndTools/grimoire/spells/time-stop',
'./dndTools/grimoire/spells/true-polymorph',
'./dndTools/grimoire/spells/true-resurrection',
'./dndTools/grimoire/spells/weird',
'./dndTools/grimoire/spells/wish');

echo'
    <p>Type or click tags to filter results.<br />Click a spell name to open that spell in a new tab.</p>
';
// type filters
echo '
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckAdditive" checked>
  <label class="form-check-label" for="flexSwitchCheckAdditive">Additive Mode</label>
  <!-- <p class="text-muted help-block"><small>Enable "Additive Mode" To Add Additional Tags On Click Instead Of Replacing The Filter Entirely.</small></p> -->
</div>';
echo '
<div class="input-group mb-3">
  <input autofocus="true" id="spellsDatatable_customFilterSearch" name="spellsDatatable_customFilterSearch" class="border-0 rounded-right form-control" placeholder="Start typing..." aria-describedby="sizing-addon1" type="text">
  <button id="clearSpellSearch" class="btn btn-outline-primary" type="button">Clear</button>
</div>

  
';



echo '<br />';

// click filters
$presetFilters_level=array(
	'level1',
	'level2',
	'level3',
	'level4',
	'level5',
	'level6',
	'level7',
	'level8',
	'level9'
);
foreach ($presetFilters_level as $key => $value) {
echo '<span class="tagBadge badge bg-primary">'.$value.'</span> ';
}
echo '<br />';

// click filters
$presetFilters_class=array(
	'artificer',
	'bard',
	'cleric',
	'druid',
	'paladin',
	'ranger',
	'sorcerer',
	'warlock',
	'wizard'
);

foreach ($presetFilters_class as $key => $value) {
echo '<span class="tagBadge badge bg-primary">'.$value.'</span> ';
}

//table
echo '
<table id="spellsDatatable" class="dataTable table table-dark" style="width:100%;">
';
echo '
  <thead>
    <tr>
      <th scope="col">Tags</th>
      <th scope="col">Spell</th>
    </tr>
  </thead>
  <tbody>
  ';
foreach ($spellNames as $key => $value){
$filetext=file_get_contents($spellLinks[$key]);
//require_once('simple_html_dom.php');
$DOM = new \DOMDocument();
$DOM->loadHTML($filetext);
//get all tags
$tags = $DOM->getElementsByTagName('dd');
//get all tags
$articles = $DOM->getElementsByTagName('article');

//$html = file_get_html($spellLinks[$key]);
//$html=file_get_html($spellLinks[$key]);
//$html=file_get_html($spellLinks[$key]);
//print_r($html);
//$ddList=$html->find('dd');
//try load html
//$tags = $dom->find('dd');
// find all link
echo '<tr>';
//1
	//echo '<td><a href="'.$spellLinks[$key].'" target="_blank">'.$value.'</a></td>';

//2
	echo '<td>';

	//print_r($tags);
	//print_r($tags->length);
	for ($i=0; $i < $tags->length; $i++) {
	$tags[$i]->nodeValue=str_replace('.', ' ', $tags[$i]->nodeValue);
	$tags[$i]->nodeValue=str_replace(' ', '', $tags[$i]->nodeValue);
	$tags[$i]->nodeValue=str_replace(PHP_EOL, '', $tags[$i]->nodeValue);

	//replace all EE as EE
	if(substr($tags[$i]->nodeValue,0,2)=='EE'){
		$tags[$i]->nodeValue='EE';
	}
	//replace all xge as phb
	if(substr($tags[$i]->nodeValue,0,3)=='XGE'){
		$tags[$i]->nodeValue='XGE';
	}
	//replace all SRD as SRD
	if(substr($tags[$i]->nodeValue,0,3)=='SRD'){
		$tags[$i]->nodeValue='SRD';
	}
	//replace all phb as phb
	if(substr($tags[$i]->nodeValue,0,3)=='PHB'){
		$tags[$i]->nodeValue='PHB';
	}
		echo '<span class="tagBadge badge bg-primary">'.$tags[$i]->nodeValue.'</span>';
		echo ' ';
	}
   //echo 'tags tags tags';
   //display all tags
   //for ($i = 0; $i < $tags->length; $i++)
        //echo $tags->tag($i)->nodeValue . "<br/>";
	echo '</td>';
//3
	//echo '<td>'.$filetext.'</td>';
		echo '<td>
		<h4><a href="'.$spellLinks[$key].'" target="_blank">'.$value.'</a></h4><br />';
	//add formatting
	$breakpoints=array('Casting Time:','Range:','Components:');
	foreach ($breakpoints as $bpkey => $bpvalue) {
	$articles[0]->nodeValue=str_replace($bpvalue, '<br />'.$bpvalue, $articles[0]->nodeValue);
	}
	//add formatting
	$breakpoints=array('Duration: 1 round','Duration: 10 days','Duration: 10 minutes','Duration: 24 hours','Duration: 30 days','Duration: 6 hours','Duration: 7 days','Duration: 8 hours','Duration: Concentration, up to 1 day','Duration: Concentration, up to 1 hour','Duration: Concentration, up to 1 minute','Duration: Concentration, up to 1 round','Duration: Concentration, up to 10 minutes','Duration: Concentration, up to 2 hours','Duration: Concentration, up to 24 hours','Duration: Concentration, up to 6 rounds','Duration: Concentration, up to 8 hours','Duration: Concentration, up to a minute','Duration: Concentration, up to one minute','Duration: Instantaneous','Duration: Special ','Duration: Until dispelled','Duration: Up to 1 hour','Duration: Up to 1 minute','Duration: Up to 8 hours');
	foreach ($breakpoints as $bpkey => $bpvalue) {
	$articles[0]->nodeValue=str_replace($bpvalue, '<br />'.$bpvalue.'<hr>', $articles[0]->nodeValue);
	}

	//print article
	print_r($articles[0]->nodeValue);
   //display all articles
   //for ($i = 0; $i < $articles->length; $i++)
        //echo $articles->article($i)->nodeValue . "<br/>";
	echo '</td>';
echo '</tr>';

//$dom =file_get_html($spellLinks[$key])->plaintext


  /*
$articles = $dom->find('article');
$html = file_get_html('http://www.google.com/');


//get the link html
//$dom = file_get_html($spellLinks[$key]);
//$dom = file_get_html($url);
//echo $tables[0];
//echo $tables[1];
// example of how to use basic selector to retrieve HTML contents
// get DOM from URL or file
// find all link
foreach($html->find('a') as $e) 
    echo $e->href . '<br>';


	echo '
    <tr>
	<td>'.$value.'</td>
	<td><small>';
	foreach ($tags as $tkey => $tvalue) {
		echo $tvalue.' ';
	}
	echo '</small></td>
	<td>';
	foreach ($articles as $akey => $avalue) {
		echo $avalue.' ';
	}
	echo '</td>
    </tr>
	';

		/*echo '
	if ($value[0]=='#') {
		$category=$value[1];
    <tr>
    <td colspan="2" class="bg-light text-dark">'.$value[1].'</td>
    </tr>
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
		';
*/

	}
echo '
</tbody>
</table>
';


?>
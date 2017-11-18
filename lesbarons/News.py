from xml.dom import minidom
from xml.dom import Node

kNewsTitle = "title"
kNewsContent = "content"
kNewsMob = "mob"
kNewsItem = "item"
kNewsScreenshot = "screenshot"
kNewsText = "text"
kNewsLink = "link"
kNewsId = "id"
kNewsName = "name"
kNewsLoot = "loot"

news = [{
    kNewsTitle: "Lundi 29 Septembre 2003:",
    kNewsContent: [
        {kNewsMob: {
            kNewsId: 6841, kNewsName: "The Progenitor", kNewsLoot: [{
                kNewsItem: {kNewsId: 16074, kNewsName: "Ancient Prismatic Axe", kNewsText: "gratz Sianur"}
            }]
        }}
    ]}]

kAllakMob = ""
kAllakItem = ""

news = "\
Lundi 29 Septembre 2003:\
    6841, The Progenitor\
        16074, Ancient Prismatic Axe, gratz Sianur\
    6843, Master of the Guard\
        16076 Ancient Prismatic Mace, gratz Tapdur\
        16085 Velium Fraught Shackles, gratz Hahol\
        16195 Rime Encrusted Harness, gratz Sisyphe\
\
Dimanche 28 Septembre 2003:\
    12914, Guardian of the Seal\
        22994, Ghostly Mantle of the Dead, gratz Soloa\
        23096, Simple Pure Gold Ring, gratz Nygoth\
    4503, Trakanon\
        2117, Mana Robe, gratz Titefleur\
        587, Trakanon's Tooth, gratz aux quatres gagnants\
\
Friday 27 Septembre 2003:\
    6465, Klandicar\
        5551, Klandicar's Talisman, gratz Tapdur\
\
Jeudi 25 Septembre 2003:\
    11125, Overlord Ngrub Brokenskull\
        19246, Jurglash's Legacy, gratz Rakaniz\
        19672, Weighted Mantle, gratz Guillomus\
\
    11127, Taskmaster Lugald Brokenskull\
        19223, Black Runed Pauldrons, gratz Rakaniz\
\
    11128, Spiritseeker Nadox\
        19287, Disease Infested Girdle, gratz Dagmentar\
\
Jeudi 25 Septembre 2003:\
    2 nouvelles epic warrior :) gratz Tapdur et Grafdrek :)\
    2629, Blade of Tactics\
    2630, Blade of Strategy\
    2631, Jagged Blade of War\
    Screenshots/EpicWarTapEtGraf.jpg\
    GROUMPF !!! un Hahol a la coque !! :)\
    Screenshots/Groumpf.JPG\
    Jolie texture :)\
    Screenshots/CaCDuGraf.JPG\
\
Mardi 23 Septembre 2003:\
    Encore un premier kill au premier essai :) une etape de plus dans velious :)\
    5597, Lord Yelinak\
    4715, Celestial Essence Robe, gratz Lehila et Biro\
    4404, Dragons Blood Earring, gratz Jenaex\
    4553, Sacrifice, gratz Damus\
    4669, Yelinak's Talisman, gratz Celamir\
    4363, Gauntlets of Dragon Slaying, gratz Elsane\
    Screenshots/Yelinak.JPG\
\
Lundi 22 Septembre 2003:\
    Quelques VP key pour commencer la soiree :)<br><br>\
    4503, Trakanon\
    Screenshots/Trakanon.JPG\
    12914, Guardian of the Seal\
    23097, Velvet Gloves of the Forsaken, gratz Yiuzen\
    22992, Purified Steel Earring, gratz Rosalie\
\
Jeudi 18 Septembre 2003:\
    Seconde tentative sur AoW, wipe a 31% :( On progresse, on progresse :)\
    6416, The Avatar of War\
    7923, The Idol of Rallos Zek\
    Premiere Statue ... Groovy Baby !! :)\
    5508, The Statue of Rallos Zek\
    5802, Cloak of the Falling Stars, gratz Neho\
    6414, Iron Scroll of War, gratz Sisyphe\
    5628, Reaver, gratz Grafdrek\
    16246, Shard of Hsagra's Talisman, gratz Nygoth\
    Derakor the Vindicator has been explode by Les Barons :)\
    5509, Derakor the Vindicator\
    6040, Boots of the Vindicator, gratz Meriandis\
    11711, An Evolved Burrower\
    8715, Strands of Power, gratz Irden et Qaedariel\
\
Mercredi 17 Septembre 2003:\
    Et hop first kill :)\
    7627, Grieg Veneficus\
    11744, Black Silken Bridle, gratz Dobliniel\
    10202, Boots of Stability, gratz Berthe\
    12914, Guardian of the Seal\
    22994, Ghostly Mantle of the Dead, gratz Gurmarck\
    22992, Purified Steel Earring, gratz Neho\
    6364, Echo of Nortlav\
    3226, Red Dragon Scales, gratz Bank\
\
Mardi 16 Septembre 2003:\
    KT up !!!, Inc King Tormax !!!, King Tormax has been slain by Les Barons !!! :) Une nouvelle target de plus :)\
    5768, King Tormax\
    6139, Crown of the Kromzek Kings, gratz Sisyphe et Choupette\
    16178, King Tormax's Head, gratz Dohrian\
    6387, White Dragon Scale Sash, gratz Hahol\
    6093, The Horn of Hsagra, gratz Grafdrek\
    16246, Shard of Hsagra's Talisman, gratz Rosalie\
    /yawn :)\
    5509, Derakor the Vindicator\
    5521, Chestplate of Vindication, gratz Elsane\
    Quintoun has been slain by Wuoshi !!! Wuoshi has been slain by Les Barons !!! :)\
    5491, Wuoshi\
    4027, Crescent Blades of Luclin, 2x gratz Bank\
    15980, Emerald Dragon Scales, 4x gratz Bank\
\
Lundi 15 Septembre 2003:\
    800K HP Baby !!! :)\
    9223, An Acidic Mass\
    11901, Acid Scarred Chain Tunic, gratz Perket et Rakaniz\
    11716, Forlorn Hero's Blade, gratz Rakaniz\
    Berthe hit Trakanon for 8125 points of non-melee damage.\
    Imothep hit Trakanon for 7668 points of non-melee damage.\
    Trakanon writhes in the grip of agony.\
    ...\
    Trakanon was slain by Les Barons :))\
    4503, Trakanon\
    8923, Undead Dragon Sinew, gratz Meriandis\
    2017, Elder Spiritist's Breastplate, gratz Cailloux\
    587, Trakanon's Tooth, gratz Titefleur, Hahol, Tapdur et Dobliniel\
    Neho tells raid:1, 'JAIME LE BOSS POUR CA JUST KEN IL PULL EHE C ETS FUN ET SPORT !'\
    5152, Wraith of a Shissar\
\
    10541, Head of the Serpent, gratz Ayosa\
\
Dimanche 14 Septembre 2003:\
    12914, Guardian of the Seal\
    22994, Ghostly Mantle of the Dead, gratz Rosalie\
    22992, Purified Steel Earring, gratz Kylaz\
    6364, Echo of Nortlav\
    3226, Red Dragon Scales, gratz Tapdur\
\
Vendredi 12 Septembre 2003:\
    736, Cazic Thule\
    5558, Eye of Cazic Thule, gratz Titefleur\
    5514, Cloak of the Fearsome, gratz Facelift\
    5512, Bile Etched Obsidian Choker, gratz Warka\
    11711, An Evolved Burrower\
    8885, Bile Coated Codex, gratz Dohrian\
    8834, Bile Stained Robes, gratz Bellea\
\
Mardi 9 Septembre 2003:\
    Petite session ST key pour commencer :) on est reparti de plus belle :)<br><br>\
    6465, Klandicar\
    5551, Klandicar's Talisman, gratz Sianur\
    ENFIN 5508 The Statue of Rallos Zek  et 5768 King Tormax up a Kael !!!\
    Dommage qu'une guilde elemetaire (ivm) nous ai prive de ces 2 targets.\
    Evidement aussi ubber qu'ils soient, ils se sont degonfles pour AoW !!!! ET BEN PAS NOUS !!! DI DIOU !!! :))\
    Premiere tentative et premier kill :)) C'est ca la baron touch !!!! on assure trop :)\
    7923, The Idol of Rallos Zek\
    Screenshots/IoRZ.JPG\
    Screenshots/IoRZ2.JPG\
    Et pour notre premiere tentative sur AoW, enchaine juste apres l'Idol, vu que insta repop, ... 70% !!!!\
    Je suis fier de vous les amis :)\
    6416, The Avatar of War\
    Screenshots/AoW.JPG\
    Screenshots/AoW2.JPG\
\
Lundi 8 Septembre 2003:\
    7907, The Va`Dyn\
    7129, Shaderock Robe, gratz Minimeck\
    7253, Shaderock Girdle, gratz Grafdrek\
    7398, Rumblecrush\
    8925, Calamity's End, gratz Jahan\
    10146, Grand Shield of Faith, gratz Qintana\
    10259, Necklace of Wishes, gratz Kylaz\
    Screenshots/RCPhatLewt.JPG\
    16266, Signet Earring of Veracity, gratz Titefleur\
    Arx Key gratz Les Barons :)) On va pouvoir tester 7231, Lord Inquisitor Seru !!! :)\
\
Dimanche 7 Septembre 2003:\
    12914, Guardian of the Seal\
    22994, Ghostly Mantle of the Dead, gratz Cailloux\
    22992, Purified Steel Earring, gratz Waza\
    6364, Echo of Nortlav\
    3226, Red Dragon Scales, gratz Grafdrek\
\
Dimanche 7 Septembre 2003:\
    11082, Paruek the Strong\
    10553, Pendubk the Turbulent\
    10537, Laruken the Rigid\
    10546, Faruek the Bold\
    10550, Solnebk the Unruly\
    10536, Zertuken the Unyielding\
    17094, Crashing Wave Earring, gratz Jahan\
    -> gratz Soloa, Jahan, Harelorf, Gurmarck, Quintoun, Cailloux, Grafdrek, Guillomus pour vos medaillons :)"


def recurseTraverseHierarchy(node, indent, level, printNext):
    tags = ["1 :", "2 :"]
    # print tags
    indent = indent + "\t"
    for currentNode in node.childNodes:
        print currentNode.nodeType
        print currentNode.nodeValue
        continue
        # value = None
        # if currentNode.nodeType == Node.TEXT_NODE and currentNode.nodeValue is not None:
        #     value = currentNode.nodeValue.encode('utf-8').strip()
        # print "{}{} - {}". format(indent, currentNode.nodeName, printNext[0])
        # print "type {} value {} - {}".format(currentNode.nodeType, currentNode.nodeValue, currentNode)
        # print "{}{}".format(indent, currentNode)

        if printNext[0] == 0:
            if currentNode.nodeType == Node.TEXT_NODE and currentNode.nodeValue is not None:
                try:
                    value = currentNode.nodeValue.encode('utf-8').strip()
                    # print value
                    if value in tags:
                        # print "{0} value = {1}". format(indent, value)
                        printNext[0] = 1
                except Exception, e:
                    print e
        elif printNext[0] == 1:
                if currentNode.nodeName == 'td':
                    printNext[0] = 2
        elif printNext[0] == 2:
            if currentNode.nodeType == Node.TEXT_NODE and currentNode.nodeValue is not None:
                value = currentNode.nodeValue.encode('utf-8').strip()
                if not printNext[2]:
                    print "\t\t{0}".format(value)
                    printNext[2] = True
                    # slow
                    # m = re.search("^Decrease Attack Speed by ()% \(()\) to ()% \(()\)$", line)
                    m = re.search("^Decrease\sHitpoints\sby\s(\d*)$", value)
                    if m is not None:
                        print "{}".format(m.group(1))
                else:
                    print "\t\t{}".format(value)
                    printNext[2] = False
                    m = re.search("^Increase\sMana\sby\s([\?|\d]*)\s\(L(\d*)\)\sto\s(\d*)\s\(L(\d*)\)$", value)
                    if m is not None:
                        print "{} {} {} {}".format(m.group(1), m.group(2), m.group(3), m.group(4))
                    else:
                        m = re.search("Increase\sMana\sby(.*)\s\(.*", value)
                        # m = re.search("Increase\sMana\sby(.*)\sto\s(\d*)\sL\((\d*)\)$", value)
                        if m is not None:
                            print "{}".format(m.group(1))
                            # print "{} {} {}".format(m.group(1), m.group(2), m.group(3))
                        else:
                            print "awa"

                printNext[0] = 0

        recurseTraverseHierarchy2(currentNode, indent, level, printNext)
    indent = indent[:-1]

from HTMLParser import HTMLParser

verbosity = True

def Message(text, force=False):
    if verbosity or force:
        print(text)

# create a subclass and override the handler methods
class MyHTMLParser(HTMLParser):
    log = False

    def __init__(self):
        HTMLParser.__init__(self)
        self.indent = ""
        self.currentTag = ""
        self.currentIndent = ""
        self.phase = 0
        self.index = 0
        self.phaseTagsIndex = 0
        self.phaseTags = [["body", "table",  "tr", "td", "div", "font", "td", "div", "font", "b", "span"], ["table", "tr", "td", "div", "font", "td", "div", "p", "font", "b"]]
        self.tagsStack = []

    def handle_starttag(self, tag, attrs):
        self.tagsStack.append(tag)
        if len(attrs) > 0:
            Message("{}{} - {}".format(self.indent, tag, attrs))
        else:
            Message("{}{}".format(self.indent, tag))

        if self.phase == 2:
            if len(attrs) > 0:
                print("{}Content: {} - {}".format(self.indent, tag, attrs))
            else:
                print("{}Content: {}".format(self.indent, tag))

        Message("{} on {}".format(self.index, len(self.phaseTags[self.phaseTagsIndex])))

        if self.phase < 2:
            if tag == self.phaseTags[self.phaseTagsIndex][self.index]:
                self.index = self.index + 1
                if self.index == len(self.phaseTags[self.phaseTagsIndex]):
                    self.phase = self.phase + 1
                    self.phaseTagsIndex = ( self.phaseTagsIndex + 1 ) % len(self.phaseTags)
                    self.index = 0
            else:
                self.index = 0

        self.currentTag = tag
        self.currentIndent = self.indent
        self.indent = self.indent + "\t"

    def handle_endtag(self, tag):
        self.indent = self.indent[:-1]
        if self.indent == self.currentIndent and tag != self.currentTag:
            print "ERROR > Closing {} but should be {}".format(tag, self.currentTag)
            count = 0
            print "ERROR > Still opened tags:".format(tag, self.currentTag)
            for  currentTag in reversed(self.tagsStack):
                if currentTag != tag:
                    print "ERROR > \t{}".format(currentTag)
                    count = count + 1
                else:
                    break
            self.tagsStack = self.tagsStack[:-count]
        else:
            self.tagsStack = self.tagsStack[:-1]

        Message("{}/{}".format(self.indent, tag))
        if self.phase == 2:
            if tag == self.phaseTags[1][len(self.phaseTags[1]) - 1]:
                self.phase = 0

    def handle_data(self, data):
        # print type(data)
        cleanData = data.replace("\t", "")
        cleanData = cleanData.replace("\n", "")
        cleanData = cleanData.strip()
        if len(cleanData) > 0:
            if self.phase == 1:
                print '{}Title: "{}"'.format(self.indent, cleanData)
            elif self.phase == 2:
                print '{}Content: "{}"'.format(self.indent, cleanData)




def ParseHtmlNews(filename):
    f = open(filename)
    news = f.read()
    # xmldoc = minidom.parseString(news)
    # xmldoc = minidom.parse( 'Waza.html' )
    # metas = xmldoc.getElementsByTagName('table')
    # print metas

    parser = MyHTMLParser()
    parser.feed(news)

    indent = ""
    # recurseTraverseHierarchy2(xmldoc, indent, level, [0, "", False])


# ParseHtmlNews("news.html")
ParseHtmlNews("2002_decembre.html")

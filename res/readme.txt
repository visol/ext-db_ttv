*********
* english
*********
How to install YAML for TemplaVoila:

  1. Install TYPO3 and make sure everything works. If TYPO3 itself doesn't work properly, this template won't help you...
  
  2. Adjust TYPO3 to use utf-8 encoding. Either use the Install-Tool or manually add the following lines
  
     $TYPO3_CONF_VARS['BE']['forceCharset'] = 'utf-8';
     $TYPO3_CONF_VARS['SYS']['setDBinit'] = 'SET NAMES utf8;'.chr(10).'SET CHARACTER_SET utf8;';
     
     to the file typo3conf/localconf.php
     
  3. Extract the file fileadmin.zip und upload its content to your server.
  
  4. Install this extension. It will automatically inform you about missing mandatory extensions and also try to install them automatically.
  
  5. Import one of the provided t3d Files. If you don't do that, there are no Datastructures (DS) and Templateobjects (TO) for TemplaVoila and nothing can be displayed.
  
Your are done.
*********
* german
*********
YAML für TemplaVoila installieren:

  1. TYPO3 installieren und sicherstellen, dass alles läuft. Wenn TYPO3 selbst nicht richtig funktioniert, wird auch dieses Template nicht funktionieren.
  
  2. TYPO3 auf utf-8 umstellen. Entweder mit dem Install-Tool oder die beiden Zeilen
  
     $TYPO3_CONF_VARS['BE']['forceCharset'] = 'utf-8';
     $TYPO3_CONF_VARS['SYS']['setDBinit'] = 'SET NAMES utf8;'.chr(10).'SET CHARACTER_SET utf8;';
     
     in die Datei typo3conf/localconf.php MANUELL einfügen.
     
  3. Das Archiv fileadmin.zip entpacken und auf den Webserver hochladen.
  
  4. Diese Extension mit dem Extension-Manager installieren. Wenn nicht alle anderen erforderlichen Extensions installiert sind, werden diese automatisch nachinstalliert.
  
  5. Importieren Sie eine der beiliegenden t3d Dateien in die Weltkugel. Wenn Sie das nicht tun, sind die Datenstrukturen (DS) sowie die Templateobjekte (TO) nicht vorhanden und es kann nichts angezeigt werden.
  
Das war es. Bitte Reihenfolge einhalten.

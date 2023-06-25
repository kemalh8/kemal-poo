
# kemal-poo
LES 5 METHODES MAGIQUES SONT LES SUIVANTES:
1. _ _ consctruct : appelé quand on veut créer un nouvel objet.
exemple: public function _ _ construct() {$this->pdo = new pdo('mysql:dbname='.$this->dbname.';host='.$this->host,$this->user,$this->password) $this->dbname = $dbname; $this->host = $host;$this->user;$this->password };

2. _ _ destruct : appelé quand notre objet est supprimé et on l'utilise souvent à la fin d'un script. exemple: public function _ _ destruct(){$_session['serialize']=serialize($this);}

3. __ get : permet d'acceder à un attribut inaccessible tel que attribut (protected ou private). exemple: public function _ _ get($nom){ return $this->attributs[$nom];}
 
4. _ _ set permet de détecter l'affectation d'une valeur à un attribut inaccessible. exemple:   public function _ _ set($key, $valeur){ $this->attributs[key] = $valeur}
 
5. _ _ isset : permet de détécter l'appel de la fonction php "isset ou empty" sur un attribut inaccessible. exemple: public function _ _ isset($nom){return isset ($this->attributs[$nom]);}

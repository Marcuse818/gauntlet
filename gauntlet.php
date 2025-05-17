public function f($g) {
            $a = $this->connection->prepare("SELECT * FROM gauntlets");
            $a->execute();
            $a = $a->fetchAll();
            
            $b = $this->connection->prepare("SELECT * FROM levels");
            $b->execute();
            $b = $b->fetchAll();
            
            if (empty($g)) return false;

            foreach($b as &$d) {
                foreach ($a as &$c) {
                    if ($d["gauntletLevel"] == 0 && $d["gauntletID"] == 0)
                    {
                        switch($d["levelID"]) {
                            
                            case $c["level1"]:
                                if ($g != $c["ID"]) 
                                {
                                    $this->update($c["ID"], 1, $c["level1"]);
                                }
                                break;
                            
                            case $c["level2"]:
                                if ($g != $c["ID"]) 
                                {
                                    $this->update($c["ID"], 2, $c["level2"]);
                                }
                                break;

                            case $c["level3"]:
                                if ($g != $c["ID"]) 
                                {
                                    $this->update($c["ID"], 3, $c["level3"]);
                                }
                                break;

                            case $c["level4"]:
                                if ($g != $c["ID"]) 
                                {
                                    $this->update($c["ID"], 4, $c["level4"]);
                                }
                                break;

                            case $c["level5"]:
                                if ($g != $c["ID"]) 
                                {
                                    $this->update($c["ID"], 5, $c["level5"]);
                                }
                                break;
                        }
                    }
                }
            }

            return true;
}

<?php
include_once("DTO/personnagesDTO");
class personnagesDAO {
    public static function get($id){
        $charac = null;
    $enter= DatabaseLinker::getconnexion();
    $wantcharac=$enter->prepare("SELECT * FROM personnages WHERE id=?");
    $wantcharac->execute(array($id));
    $gotcharac=$wantcharac->fetch();
    if ($gotcharac) {
        $charac= new personnagesDTO($gotcharac["id"],$gotcharac["nom"],$gotcharac["face_id"],$gotcharac["role"],$gotcharac["mythologie_id"],$gotcharac["equipe_id"]);
    }
    return $charac;
    }
    public static function getallcharacs(){
        $characters= array();
        $enter= DatabaseLinker::getconnexion();
        $wantedlistofcharacs=$enter->prepare("SELECT id FROM personnages");
        $wantedlistofcharacs->execute();
        $gotlistofcharacs=$wantedlistofcharacs->fetchAll();
        foreach($gotlistofcharacs as $listofcharacs){
            $characters[] = personnagesDAO::get($listofcharacs["id"]); 
        }
        

    }
}
?>
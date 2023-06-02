<?php
class usersDAO{
    public static function getuser($id){
        $user = null;
    $enter= DatabaseLinker::getconnexion();
    $wantuser=$enter->prepare("SELECT * FROM personnages WHERE id=?");
    $wantuser->execute(array($id));
    $gotuser=$wantuser->fetch();
    if ($gotuser) {
        $user= new userDTO($gotuser["id"],$gotuser["username"],$gotuser["passw"]);
    }
    return $user;
    }
    public static function getallusers(){
        $users= array();
        $enter= DatabaseLinker::getconnexion();
        $wantedlistofusers=$enter->prepare("SELECT id FROM personnages");
        $wantedlistofusers->execute();
        $gotlistofusers=$wantedlistofusers->fetchAll();
        foreach($gotlistofusers as $listofusers){
            $users[] = usersDAO::getuser($listofusers["id"]); 
        }
        return $users; 
        

}
}
?>
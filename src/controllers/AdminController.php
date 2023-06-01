<?php 

class AdminController 
{
    public static function gestionUser()
    {
        Verif::admin();
        $users = User::findAll();



        include(VIEWS . 'admin/gestionUser.php');
    }

    public static function supprimerUser()
    {
        if(!empty($_GET['id']))
        {
            User::delete([
                'id_user' => $_GET['id']
            ]);
            $_SESSION['messages']['success'][] = 'Le user a bien été supprimé';
        }

        header('location:' . BASE . 'produit/gestion');
        exit;
    }

    public static function modifierRole(){
        Verif::admin();
        if (!empty($_GET['id']) && !empty($_GET['role'])) {
            if ($_GET['role'] == "ROLE_USER") {
                $role = "ROLE_ADMIN";
            }
            else $role = "ROLE_USER";
        }
        User::modifierRole([
            'role' => $role,
            'id_user' => $_GET['id']
        ]);
        $_SESSION['messages']['success'][] =  "Le user d'id : ".$_GET['id']." a maintenant le role: $role ";
        header('location:'. BASE . "user/gestion");
    }



    // * j'ai essaie de modifié tous les utilisateurs , pas fini
    // public static function modifierUser()
    // {
    //      //*ici on vérifier que notre GET['id'] n'est pas vide afin de récupérer notre produit
    //      if(!empty($_GET['id'])){
    //         //*je récupère mon produit grâce a son id
    //         $user = User::findById(['id_user' => $_GET['id']]);
    //     }
    //     else{
    //         header('location:' . BASE . 'user/gestion');
    //         exit();
    //     }
    //     //*si l'utilisateur a cliqué sur modifier alors je rentre dans les accolades
    //     if(!empty($_POST))
    //     {
    //         //*création d'un tableau d'erreur vide
    //         $error = [];
    //         foreach($_POST as $indice => $valeur)
    //         {
    //             if(empty($valeur))
    //             {
    //                 $error[$indice] = "le champs $indice est obligatoire";
    //             }
    //         }
    //         //* s'il y a pas d'erreur on fait notre traitement
    //             if(!$error)
    //             {
                    
    //                 //*on procède à la modification en BDD de notre user
    //                 User::update([
    //                     'l_name' => $_POST['l_name'],
    //                     'f_name' => $_POST['f_name'],
    //                     'email' => $_POST['email'],
    //                     'pseudo' => $_POST['pseudo'],
    //                     'password' => $mdp
    //                 ]);
    //                 $_SESSION['messages']['success'][] = 'Le USER a bien été modifié';

    //                 header('location:' . BASE . 'user/gestion');
    //                 exit();
    //             }
            

    //     }
    //     include(VIEWS . 'admin/modifierUser.php');
     

    // }
}
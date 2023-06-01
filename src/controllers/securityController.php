<?php  
class SecurityController 
{
    public static function inscription()
    {
        if(!empty($_POST))
        {
            $error = [];

            function valid_pass($candidate)
            {
                $r1 = '/[A-Z]/';  //Uppercase
                $r2 = '/[a-z]/';  //lowercase
                $r3 = '/[!@#$%^&*()\-_=+{};:,<.>]/';  // whatever you mean by 'special char'
                $r4 = '/[0-9]/';  //numbers
                
            //     if (preg_match_all($r1, $candidate, $o) < 1) return FALSE;

            //    if (preg_match_all($r2, $candidate, $o) < 1) return FALSE;

            //     if (preg_match_all($r3, $candidate, $o) < 1) return FALSE;

            //     if (preg_match_all($r4, $candidate, $o) < 1) return FALSE;

            //    if (strlen($candidate) < 5) return FALSE;

                return TRUE;
            }

            if(empty($_POST['f_name']) || preg_match('#[0-9]#',$_POST['f_name']))
            {
                $error['f_name'] = "le champs est  obligatoire et doit contenir uniquement des lettres";
            }
            if(empty($_POST['l_name']) || preg_match('#[0-9]#',$_POST['l_name']))
            {
                $error['l_name'] = "le champs est  obligatoire et doit contenir uniquement des lettres";
            }
            if(empty($_POST['pseudo']))
            {
                $error['pseudo'] = "le champs est  obligatoire";
            }
            if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || User::findByEmail(['email' => $_POST['email']]))
            {
                if(User::findByEmail(['email' => $_POST['email']]))
                {
                    $_SESSION['messages']['danger'][] = "un compte est déja existant à cette adresse email , veuillez proceder à la recuperation du mot de passe";
                    $error['email'] = "";
                } else {
                    $error['email'] = "le champ email est obligatoire et l'adresse mail doit être valide"; 
                }
            }

            if (empty($_POST['password']) || !valid_pass($_POST['password'])) {
                $error['password'] = "Le champs est obligatoire et votre mot de passe doit contenir : <ul><li> une majuscule</li> <li>une minuscule</li> <li>un chiffe</li> <li>un caractere spécial</li> <li>plus de 5 caractère</li></ul>";
            }

            if (empty($_POST['checkPwd']) || $_POST['password'] != $_POST['checkPwd']) {
                $error['checkPwd'] = "Le champs est obligatoire et les mot de passe doivent concorder";
            }

            if(!$error)
            {
                $mdp = password_hash($_POST['password'], PASSWORD_DEFAULT);

                User::ajouter([
                    'f_name' => $_POST['f_name'],
                    'l_name' => $_POST['l_name'],
                    'email' => $_POST['email'],
                    'pseudo' => $_POST['pseudo'],
                    'password' => $mdp,
                ]);

                $_SESSION['messages']['success'][] = "Félicitations , vous etes a present inscrits!";
                
                header("location:" . BASE);
                exit;

            }
        }
        include(VIEWS . 'security/inscription.php');
    }

    public static function login()
    {
        if(!empty($_POST))
        {
            $user = User::findByEmail(['email' => $_POST['email']]);
            if($user)
            {
                if(password_verify($_POST['password'], $user['password']))
                {
                    $_SESSION['user'] = $user;
                    $_SESSION['messages']['success'][] = "Bienvenue " . $user['pseudo'] . "!!!";
                    header("location:" . BASE);
                    exit;
                }else
                {
                    $_SESSION['messages']['danger'][] = " Erreur sur le mot de passe ";

                }

            }else
            {
                $_SESSION['messages']['danger'][] = "Aucun compte existant à cette adresse mail";
            }
        }

        include(VIEWS . 'security/login.php');
    }

    public static function logout()
    {
        unset($_SESSION['user']);

        $_SESSION['messages']['info'][] = "A bientôt !!!";

        header("location:" . BASE);
        exit;
    }

    
    
}

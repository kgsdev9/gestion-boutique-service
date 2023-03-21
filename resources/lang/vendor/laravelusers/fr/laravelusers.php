<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel Users Blades Language Lines
    |--------------------------------------------------------------------------
    */

    'showing-all-users'     => 'Affichage de tous les utilisateurs',
    'users-menu-alt'        => 'Afficher le menu de gestion des utilisateurs',
    'create-new-user'       => 'Créer un nouvel utilisateur',
    'show-deleted-users'    => 'Afficher l\'utilisateur supprimé',
    'editing-user'          => 'Modification de l\'utilisateur :name',
    'showing-user'          => 'Affichage de l\'utilisateur :name',
    'showing-user-title'    => ':name\'s Information',

    'users-table' => [
        'caption'   => '{1} :userscount user total|[2,*] :userscount nombre total d\'utilisateurs',
        'id'        => 'identifiant',
        'name'      => 'Nom',
        'email'     => 'E-mail',
        'role'      => 'Role',
        'created'   => 'Créé',
        'updated'   => 'Mise à jour',
        'actions'   => 'Actions',
        'updated'   => 'Mise à jour',
    ],

    'buttons' => [
        'create-new'    => '<span class="hidden-xs hidden-sm">Nouvel utilisateur</span>',
        'delete'        => '<i class="far fa-trash-alt fa-fw" aria-hidden="true"></i>  <span class="hidden-xs hidden-sm">Effacer</span><span class="hidden-xs hidden-sm hidden-md"> Utilisateur</span>',
        'show'          => '<i class="fas fa-eye fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm">Show</span><span class="hidden-xs hidden-sm hidden-md"> Utilisateur</span>',
        'edit'          => '<i class="fas fa-pencil-alt fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm">Edit</span><span class="hidden-xs hidden-sm hidden-md"> Utilisateur</span>',
        'back-to-users' => '<span class="hidden-sm hidden-xs">Back to </span><span class="hidden-xs">Utilisateurs</span>',
        'back-to-user'  => 'Back  <span class="hidden-xs">à l\'utilisateur</span>',
        'delete-user'   => '<i class="far fa-trash-alt fa-fw" aria-hidden="true"></i>  <span class="hidden-xs">Delete</span><span class="hidden-xs"> utilisateur</span>',
        'edit-user'     => '<i class="fas fa-pencil-alt fa-fw" aria-hidden="true"></i> <span class="hidden-xs">modifier</span><span class="hidden-xs"> utilisateur</span>',
    ],

    'tooltips' => [
        'delete'        => 'Effacer',
        'show'          => 'Afficher',
        'edit'          => 'Modifier',
        'create-new'    => 'Créer un nouvel utilisateur',
        'back-users'    => 'Retour aux utilisateurs',
        'email-user'    => 'E-mail :user',
        'submit-search' => 'Soumettre la recherche d\'utilisateurs',
        'clear-search'  => 'Effacer les résultats de la recherche',
    ],

    'messages' => [
        'userNameTaken'          => 'Le nom d\'utilisateur est pris',
        'userNameRequired'       => 'Le Nom d\'utilisateur est nécessaire',
        'fNameRequired'          => 'Le prénom est requis',
        'lNameRequired'          => 'Le nom de famille est requis',
        'emailRequired'          => 'Le e-mail est requis',
        'emailInvalid'           => 'Le courriel est invalide',
        'passwordRequired'       => 'Mot de passe requis',
        'PasswordMin'            => 'Le mot de passe doit avoir au moins 6 caractères',
        'PasswordMax'            => 'La longueur maximale du mot de passe est de 20 caractères',
        'captchaRequire'         => 'Captcha est requis',
        'CaptchaWrong'           => 'Mauvais captcha, veuillez réessayer.',
        'roleRequired'           => 'Le rôle d\'utilisateur est requis.',
        'user-creation-success'  => 'Utilisateur créé avec succès !',
        'update-user-success'    => 'Utilisateur mis à jour avec succès !',
        'delete-success'         => 'L\'utilisateur a bien été supprimé !',
        'cannot-delete-yourself' => 'Vous ne pouvez pas vous supprimer!',
    ],

    'show-user' => [
        'id'                => 'Identifiant de l\'utilisateur',
        'name'              => 'Nom d\'utilisateur',
        'email'             => '<span class="hidden-xs">Utilisateur </span>Email',
        'role'              => 'Rôle d\'utilisateur',
        'created'           => 'Créé <span class="hidden-xs">at</span>',
        'updated'           => 'Mise à jour <span class="hidden-xs">at</span>',
        'labelRole'         => 'Rôle d\'utilisateur',
        'labelAccessLevel'  => '<span class="hidden-xs">Utilisateur</span> Access Level|<span class="hidden-xs">Utilisateur</span> Niveaux d\'accès',
    ],

    'search'  => [
        'title'         => 'Affichage du résultat de la recherches',
        'found-footer'  => ' Enregistrement(s) trouvé(s)',
        'no-results'    => 'Pas de résultats',
    ],
];

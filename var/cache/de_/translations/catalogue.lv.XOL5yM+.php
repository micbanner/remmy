<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('lv', array (
  'validators' => 
  array (
    'This value should be false.' => 'Šai vērtībai ir jābūt nepatiesai.',
    'This value should be true.' => 'Šai vērtībai ir jābūt patiesai.',
    'This value should be of type {{ type }}.' => 'Šīs vērtības tipam ir jābūt {{ type }}.',
    'This value should be blank.' => 'Šai vērtībai ir jābūt tukšai.',
    'The value you selected is not a valid choice.' => 'Vērtība, kuru jūs izvēlējāties nav derīga izvēle.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Jums nav jāveic izvēle.|Jums ir jāveic vismaz {{ limit }} izvēle.|Jums ir jāveic vismaz {{ limit }} izvēles.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Jums nav jāveic izvēle.|Jums ir jāveic ne vairāk kā {{ limit }} izvēle.|Jums ir jāveic ne vairāk kā {{ limit }} izvēles.',
    'One or more of the given values is invalid.' => 'Viena vai vairākas no dotajām vērtībām ir nederīgas.',
    'This field was not expected.' => 'Šis lauks netika gaidīts.',
    'This field is missing.' => 'Šis lauks ir pazudis.',
    'This value is not a valid date.' => 'Šī vērtība ir nederīgs datums.',
    'This value is not a valid datetime.' => 'Šī vērtība ir nederīgs datums un laiks',
    'This value is not a valid email address.' => 'Šī vērtība ir nederīga e-pasta adrese.',
    'The file could not be found.' => 'Fails nav atrasts.',
    'The file is not readable.' => 'Fails nav lasāms.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fails ir pārāk liels ({{ size }} {{ suffix }}). Atļautais maksimālais izmērs ir {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Faila mime tips nav derīgs ({{ type }}). Atļautie mime tipi ir {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Šai vērtībai ir jābūt ne vairāk kā {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Šīs vērtības garums ir 0 rakstzīmju.|Šī vērtība ir pārāk gara. Tai būtu jābūt ne vairāk kā {{ limit }} rakstzīmei.|Šī vērtība ir pārāk gara. Tai būtu jābūt ne vairāk kā {{ limit }} rakstzīmēm.',
    'This value should be {{ limit }} or more.' => 'Šai vērtībai ir jābūt ne mazāk kā {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Šīs vērtības garums ir 0 rakstzīmju.|Šī vērtība ir pārāk īsa. Tai būtu jābūt ne mazāk kā {{ limit }} rakstzīmei.|Šī vērtība ir pārāk īsa. Tai būtu jābūt ne mazāk kā {{ limit }} rakstzīmēm.',
    'This value should not be blank.' => 'Šai vērtībai nav jābūt tukšai.',
    'This value should not be null.' => 'Šai vērtībai nav jābūt null.',
    'This value should be null.' => 'Šai vērtībai ir jābūt null.',
    'This value is not valid.' => 'Šī vērtība ir nederīga.',
    'This value is not a valid time.' => 'Šī vērtība ir nederīgs laiks.',
    'This value is not a valid URL.' => 'Šī vērtība ir nederīgs URL.',
    'The two values should be equal.' => 'Abām vērtībām jābūt vienādam.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fails ir pārāk liels. Atļautais maksimālais izmērs ir {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Fails ir pārāk liels.',
    'The file could not be uploaded.' => 'Failu nevarēja augšupielādēt.',
    'This value should be a valid number.' => 'Šai vērtībai ir jābūt derīgam skaitlim.',
    'This file is not a valid image.' => 'Šis fails nav derīgs attēls.',
    'This is not a valid IP address.' => 'Šī nav derīga IP adrese.',
    'This value is not a valid language.' => 'Šī vērtība nav derīga valoda.',
    'This value is not a valid locale.' => 'Šī vērtība nav derīga lokalizācija.',
    'This value is not a valid country.' => 'Šī vērtība nav derīga valsts.',
    'This value is already used.' => 'Šī vērtība jau tiek izmantota.',
    'The size of the image could not be detected.' => 'Nevar noteikt attēla izmēru.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Attēla platums ir pārāk liels ({{ width }}px). Atļautais maksimālais platums ir {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Attēla platums ir pārāk mazs ({{ width }}px). Minimālais sagaidāmais platums ir {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Attēla augstums ir pārāk liels ({{ height }}px). Atļautais maksimālais augstums ir {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Attēla augstums ir pārāk mazs ({{ height }}px). Minimālais sagaidāmais augstums ir {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Šai vērtībai ir jābūt lietotāja pašreizējai parolei.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Šīs vērtības garums ir 0 rakstzīmju.|Šai vērtībai ir jābūt tieši {{ limit }} rakstzīmei.|Šai vērtībai ir jābūt tieši {{ limit }} rakstzīmēm.',
    'The file was only partially uploaded.' => 'Fails bija tikai daļēji augšupielādēts.',
    'No file was uploaded.' => 'Fails netika augšupielādēts.',
    'No temporary folder was configured in php.ini.' => 'Pagaidu mape php.ini failā nav nokonfigurēta.',
    'Cannot write temporary file to disk.' => 'Nevar ierakstīt pagaidu failu uz diska.',
    'A PHP extension caused the upload to fail.' => 'PHP paplašinājums izraisīja augšupielādes neizdošanos.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Šis krājums satur 0 elementu.|Šim krājumam jāsatur vismaz {{ limit }} elementu.|Šim krājumam jāsatur vismaz {{ limit }} elementus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Šis krājums satur 0 elementu.|Šim krājumam jāsatur ne vairāk kā {{ limit }} elementu.|Šim krājumam jāsatur ne vairāk kā {{ limit }} elementus.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Šis krājums satur 0 elementu.|Šim krājumam jāsatur tieši {{ limit }} elementu.|Šim krājumam jāsatur tieši {{ limit }} elementus.',
    'Invalid card number.' => 'Nederīgs kartes numurs.',
    'Unsupported card type or invalid card number.' => 'Neatbalstīts kartes tips vai nederīgs kartes numurs.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Šis nav derīgs starptautisks banku konta numurs (IBAN).',
    'This value is not a valid ISBN-10.' => 'Šī vērtība nav derīgs ISBN-10 numurs.',
    'This value is not a valid ISBN-13.' => 'Šī vērtība nav derīgs ISBN-13 numurs',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Šī vērtība neatbilst ne derīgam ISBN-10 numuram, ne derīgm ISBN-13 numuram.',
    'This value is not a valid ISSN.' => 'Šī vērtība nav derīgs ISSN numurs',
    'This value is not a valid currency.' => 'Šī vērtība nav derīga valūta',
    'This value should be equal to {{ compared_value }}.' => 'Šai vērtībai ir jābūt vienādai ar {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Šai vērtībai ir jābūt lielākai par {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Šai vērtībai ir jābūt lielākai vai vienādai ar {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Šai vērtībai ir jābūt identiskai ar {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Šai vērtībai ir jābūt mazākai par {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'TŠai vērtībai ir jābūt mazākai vai vienādai ar {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Šai vērtībai ir jābūt vienādai ar {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Šai vērtībai nav jābūt identiskai ar {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Attēla attiecība ir pārāk liela ({{ ratio }}). Atļautā maksimālā attiecība ir {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Attēla attiecība ir pārāk maza ({{ ratio }}). Minimālā sagaidāmā attiecība ir {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Šis attēls ir kvadrāts ({{ width }}x{{ height }}px). Kvadrātveida attēli nav atļauti.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Attēls ir orientēts kā ainava ({{ width }}x{{ height }}px). Attēli, kas ir orientēti kā ainavas nav atļauti.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Attēls ir orientēts kā portrets ({{ width }}x{{ height }}px). Attēli, kas ir orientēti kā portreti nav atļauti.',
    'An empty file is not allowed.' => 'Tukšs fails nav atļauts.',
    'The host could not be resolved.' => 'Resursdatora nosaukumu nevar atrisināt.',
    'This value does not match the expected {{ charset }} charset.' => 'Šī vērtība neatbilst sagaidāmajai rakstzīmju kopai {{ charset }}.',
    'This form should not contain extra fields.' => 'Šajā veidlapā nevajadzētu būt papildus ievades laukiem.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Augšupielādētā faila izmērs bija par lielu. Lūdzu mēģiniet augšupielādēt mazāka izmēra failu.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Dotais CSRF talons nav derīgs. Lūdzu mēģiniet vēlreiz iesniegt veidlapu.',
    'fos_user.username.already_used' => 'Šis lietotājvārds jau ir aizņemts.',
    'fos_user.username.blank' => 'Lūdzu ievadiet lietotājvārdu.',
    'fos_user.username.short' => 'Lietotājvārds ir pārāk īss.',
    'fos_user.username.long' => 'Lietotājvārds ir pārāk garš.',
    'fos_user.email.already_used' => 'Šis e-pasts jau ir aizņemts.',
    'fos_user.email.blank' => 'Lūdzu ievadiet e-pastu.',
    'fos_user.email.short' => 'E-pasts ir pārāk īss.',
    'fos_user.email.long' => 'E-pasts ir pārāk garš.',
    'fos_user.email.invalid' => 'E-pasts nav derīgs.',
    'fos_user.password.blank' => 'Lūdzu ievadiet paroli.',
    'fos_user.password.short' => 'Parole ir pārāk īsa.',
    'fos_user.new_password.blank' => 'Lūdzu ievadiet jaunu paroli.',
    'fos_user.new_password.short' => 'Jaunā parole ir pārāk īsa.',
    'fos_user.current_password.invalid' => 'Ievadītā parole nav pareiza.',
    'fos_user.group.blank' => 'Lūdzu ievadiet nosaukumu.',
    'fos_user.group.short' => 'Nosaukums ir pārāk īss.',
    'fos_user.group.long' => 'Nosaukums ir pārāk garš.',
    'fos_group.name.already_used' => 'Šis nosaukums tiek jau izmantots.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Radās autentifikācijas kļūda.',
    'Authentication credentials could not be found.' => 'Autentifikācijas dati nav atrasti.',
    'Authentication request could not be processed due to a system problem.' => 'Autentifikācijas pieprasījums nevar tikt apstrādāts sistēmas problēmas dēļ.',
    'Invalid credentials.' => 'Nederīgi autentifikācijas dati.',
    'Cookie has already been used by someone else.' => 'Kāds cits jau izmantoja sīkdatni.',
    'Not privileged to request the resource.' => 'Nav tiesību ši resursa izsaukšanai.',
    'Invalid CSRF token.' => 'Nederīgs CSRF talons.',
    'Digest nonce has expired.' => 'Vienreiz lietojamās atslēgas darbības laiks ir beidzies.',
    'No authentication provider found to support the authentication token.' => 'Nav atrasts, autentifikācijas talonu atbalstošs, autentifikācijas sniedzējs.',
    'No session available, it either timed out or cookies are not enabled.' => 'Sesija nav pieejama - vai nu tā beidzās, vai nu sīkdatnes nav iespējotas.',
    'No token could be found.' => 'Nevar atrast nevienu talonu.',
    'Username could not be found.' => 'Nevar atrast lietotājvārdu.',
    'Account has expired.' => 'Konta derīguma termiņš ir beidzies.',
    'Credentials have expired.' => 'Autentifikācijas datu derīguma termiņš ir beidzies.',
    'Account is disabled.' => 'Konts ir atspējots.',
    'Account is locked.' => 'Konts ir slēgts.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Saglabāt izmaiņas',
    'group.show.name' => 'Grupas nosaukums',
    'group.new.submit' => 'Izveidot grupu',
    'group.flash.updated' => 'Grupa tika atjaunināta.',
    'group.flash.created' => 'Grupa tika izveidota.',
    'group.flash.deleted' => 'Grupa tika dzēsta.',
    'security.login.username' => 'Lietotājvārds',
    'security.login.password' => 'Parole',
    'security.login.remember_me' => 'Atcerēties mani',
    'security.login.submit' => 'Ienākt',
    'profile.show.username' => 'Lietotājvārds',
    'profile.show.email' => 'E-pasts',
    'profile.edit.submit' => 'Saglabāt',
    'profile.flash.updated' => 'Profila izmaiņas tika saglabātas.',
    'change_password.submit' => 'Nomainīt paroli',
    'change_password.flash.success' => 'Parole tika nomainīta.',
    'registration.check_email' => 'Uz %email% tika nosūtīts e-pasts ar aktivizācijas saiti. Lūdzu sekojiet tai, lai aktivizētu savu kontu.',
    'registration.confirmed' => 'Apsveicam, %username%, tavs konts tika aktivizēts!',
    'registration.back' => 'Atpakaļ uz sākotnējo lapu.',
    'registration.submit' => 'Reģistrēties',
    'registration.flash.user_created' => 'Lietotājs tika izveidots.',
    'registration.email.subject' => 'Sveiki, %username%!',
    'registration.email.message' => 'Sveiks, %username%!

Lai pabeigtu aktivizēt savu kontu, lūdzu apmeklē %confirmationUrl%

Jauku dienu,
lapas kolektīvs.
',
    'resetting.request.username' => 'Lietotājvārds vai e-pasta adrese',
    'resetting.request.submit' => 'Atiestatīt paroli',
    'resetting.reset.submit' => 'Nomainīt paroli',
    'resetting.flash.success' => 'Parole tika atiestatīta.',
    'resetting.email.subject' => 'Paroles atiestatīšana',
    'resetting.email.message' => 'Sveiki, %username%!

Lai atiestatītu savu paroli, lūdzu apmeklē %confirmationUrl%

Jauku dienu,
lapas kolektīvs.
',
    'layout.logout' => 'Iziet',
    'layout.login' => 'Ienākt',
    'layout.register' => 'Reģistrēties',
    'layout.logged_in_as' => 'Autorizējies kā %username%',
    'form.group_name' => 'Grupas nosaukums',
    'form.username' => 'Lietotājvārds',
    'form.email' => 'E-pasts',
    'form.current_password' => 'Esošā parole',
    'form.password' => 'Parole',
    'form.password_confirmation' => 'Atkārtoti',
    'form.new_password' => 'Jaunā parole',
    'form.new_password_confirmation' => 'Atkārtoti',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'This field was not expected.' => 'Ce champ n\'a pas été prévu.',
    'This field is missing.' => 'Ce champ est manquant.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaîne doit avoir exactement {{ limit }} caractère.|Cette chaîne doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Le numéro IBAN (International Bank Account Number) saisi n\'est pas valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop grand ({{ ratio }}). Le rapport maximal autorisé est {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop petit ({{ ratio }}). Le rapport minimal attendu est {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'image est carrée ({{ width }}x{{ height }}px). Les images carrées ne sont pas autorisées.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'image est au format paysage ({{ width }}x{{ height }}px). Les images au format paysage ne sont pas autorisées.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'image est au format portrait ({{ width }}x{{ height }}px). Les images au format portrait ne sont pas autorisées.',
    'An empty file is not allowed.' => 'Un fichier vide n\'est pas autorisé.',
    'The host could not be resolved.' => 'Le nom de domaine n\'a pas pu être résolu.',
    'This value does not match the expected {{ charset }} charset.' => 'Cette valeur ne correspond pas au jeu de caractères {{ charset }} attendu.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ce n\'est pas un code universel d\'identification des banques (BIC) valide.',
    'Error' => 'Erreur',
    'This is not a valid UUID.' => 'Ceci n\'est pas un UUID valide.',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir des champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
    'fos_user.username.already_used' => 'Le nom d\'utilisateur est déjà utilisé.',
    'fos_user.username.blank' => 'Entrez un nom d\'utilisateur s\'il vous plait.',
    'fos_user.username.short' => 'Le nom d\'utilisateur est trop court.',
    'fos_user.username.long' => 'Le nom d\'utilisateur est trop long.',
    'fos_user.email.already_used' => 'L\'adresse e-mail est déjà utilisée.',
    'fos_user.email.blank' => 'Entrez une adresse e-mail s\'il vous plait.',
    'fos_user.email.short' => 'L\'adresse e-mail est trop courte.',
    'fos_user.email.long' => 'L\'adresse e-mail est trop longue.',
    'fos_user.email.invalid' => 'L\'adresse e-mail est invalide.',
    'fos_user.password.blank' => 'Entrez un mot de passe s\'il vous plait.',
    'fos_user.password.short' => 'Le mot de passe est trop court.',
    'fos_user.password.mismatch' => 'Les deux mots de passe ne sont pas identiques.',
    'fos_user.new_password.blank' => 'Entrez un nouveau mot de passe s\'il vous plait.',
    'fos_user.new_password.short' => 'Le nouveau mot de passe est trop court.',
    'fos_user.current_password.invalid' => 'Le mot de passe est invalide.',
    'fos_user.group.blank' => 'Entrez un nom s\'il vous plait.',
    'fos_user.group.short' => 'Le nom est trop court.',
    'fos_user.group.long' => 'Le nom est trop long.',
    'fos_group.name.already_used' => 'Le nom est déjà utilisé.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les identifiants d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Identifiants invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Privilèges insuffisants pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'Digest nonce has expired.' => 'Le digest nonce a expiré.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Aucune session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur n\'a pas pu être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les identifiants ont expiré.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Mettre à jour le groupe',
    'group.show.name' => 'Nom du groupe',
    'group.new.submit' => 'Créer le groupe',
    'group.flash.updated' => 'Le groupe a été mis à jour.',
    'group.flash.created' => 'Le groupe a été créé.',
    'group.flash.deleted' => 'Le groupe a été supprimé.',
    'security.login.username' => 'Nom d\'utilisateur',
    'security.login.password' => 'Mot de passe',
    'security.login.remember_me' => 'Se souvenir de moi',
    'security.login.submit' => 'Connexion',
    'profile.show.username' => 'Nom d\'utilisateur',
    'profile.show.email' => 'Adresse e-mail',
    'profile.show.profile' => 'Page profil',
    'profile.show.firstname' => 'Prénom',
    'profile.show.lastname' => 'Nom',
    'profile.show.change_password' => 'modifier le mot de passe',
    'profile.show.last_login' => 'derniere connexion',
    'profile.show.address' => 'Adresse',
    'profile.show.zipcode' => 'Code Poste',
    'profile.show.city' => 'Ville',
    'profile.show.country' => 'Pays',
    'profile.show.phone' => 'telephone',
    'profile.edit.submit' => 'Mettre à jour',
    'profile.flash.updated' => 'Le profil a été mis à jour.',
    'change_password.submit' => 'Modifier le mot de passe',
    'change_password.flash.success' => 'Le mot de passe a été modifié.',
    'registration.check_email' => 'Un e-mail a été envoyé à l\'adresse %email%. Il contient un lien d\'activation sur lequel il vous faudra cliquer afin d\'activer votre compte.',
    'registration.confirmed' => 'Votre compte est maintenant activé.',
    'registration.back' => 'Retour à la page d\'origine.',
    'registration.submit' => 'Créer un compte',
    'registration.flash.user_created' => 'L\'utilisateur a été créé avec succès.',
    'registration.email.subject' => 'Confirmation de l\'inscription
',
    'registration.email.message' => '<p>Pour valider votre compte utilisateur, merci de vous rendre sur :</p>
<p><a href="%confirmationUrl%">%confirmationUrl%</a></p>
',
    'resetting.check_email' => 'Un e-mail a été envoyé. Il contient un lien sur lequel il vous faudra cliquer pour réinitialiser votre mot de passe.
Remarque : Vous ne pouvez demander un nouveau mot de passe que toutes les %tokenLifetime% heures.

Si vous ne recevez pas un email, vérifiez votre dossier spam ou essayez à nouveau.
',
    'resetting.request.username' => 'Nom d\'utilisateur ou adresse e-mail',
    'resetting.request.submit' => 'Réinitialiser le mot de passe',
    'resetting.reset.submit' => 'Modifier le mot de passe',
    'resetting.flash.success' => 'Le mot de passe a été réinitialisé avec succès.',
    'resetting.email.subject' => 'Réinitialisation de votre mot de passe
',
    'resetting.email.message' => '<p>Pour réinitialiser votre mot de passe, merci de cliquer sur le lien suivant :</p>
<p><a href="%confirmationUrl%">%confirmationUrl%</a></p>
',
    'layout.logout' => 'Déconnexion',
    'layout.login' => 'Connexion',
    'layout.register' => 'Inscription',
    'layout.logged_in_as' => 'Connecté en tant que %username%',
    'form.gender' => 'Mr. Mme. Mlle',
    'form.group_name' => 'Nom du groupe',
    'form.username' => 'Nom d\'utilisateur',
    'form.email' => 'Adresse e-mail',
    'form.enter a email adresse' => 'entrez une addresse E-mail',
    'form.current_password' => 'Mot de passe actuel',
    'form.password' => 'Mot de passe',
    'form.password_confirmation' => 'Répéter le mot de passe',
    'form.new_password' => 'Nouveau mot de passe',
    'form.new_password_confirmation' => 'Répéter le nouveau mot de passe',
    'form.shopping_card' => 'panier',
    'form.describe your needs' => 'Decrivez vos besoins',
    'form.ask a question' => 'Posez une question',
    'form.object' => 'Motif',
    'form.submit' => 'Soumettre',
    'form.order' => 'Commande',
    'form.other' => 'Autre',
    'form.claim' => 'Reclamation',
    'form.search' => 'recherche',
    'footer.about us' => 'A Propo',
    'footer.generals conditions' => 'conditions generales',
    'footer.site map' => 'plan du site',
    'profile.fields.gender' => 'Civilité',
    'profile.fields.firstname' => 'Prénom',
    'profile.fields.lastname' => 'Nom',
    'profile.fields.address' => 'Adresse',
    'profile.fields.zip_code' => 'Code postal',
    'profile.fields.phone' => 'Tél.',
    'profile.fields.email' => 'E-mail',
    'profile.fields.password_first' => 'Mot de passe',
    'profile.fields.password_second' => 'Mot de passe (validation)',
    'register.fields.firstname' => 'Nom',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;

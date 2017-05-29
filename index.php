<?php

$locations = array(
	"http://www.lepoint.fr/justice/fin-de-l-enquete-sur-le-patrimoine-des-balkany-29-01-2017-2100967_2386.php",
	"http://www.liberation.fr/france/2017/01/29/les-juges-ont-termine-leur-enquete-sur-le-patrimoine-des-epoux-balkany_1544886",
	"http://www.europe1.fr/societe/affaire-balkany-les-juges-ont-boucle-leur-enquete-sur-le-blanchiment-de-fraude-fiscale-2963783",
	"http://www.parismatch.com/Actu/Politique/L-incroyable-enquete-Balkany-1173473",
	"http://www.lexpress.fr/actualite/societe/fait-divers/une-ex-employee-des-balkany-conteste-son-licenciement-economique-aux-prud-hommes_1873490.html",
	"http://www.lesoir.be/1428231/article/actualite/france/2017-01-29/balkany-barjot-ces-personnalites-genantes-presentes-au-meeting-francois-fillon",
	"http://www.lemonde.fr/les-decodeurs/article/2017/01/11/villas-des-balkany-se-reperer-dans-une-affaire-aux-multiples-volets_5061067_4355770.html",
	"http://www.lemonde.fr/police-justice/article/2017/01/08/patrick-balkany-a-reconnu-avoir-ete-titulaire-de-societes-offshore_5059454_1653578.html",
	"http://www.leparisien.fr/levallois-perret-92300/renvoyee-une-ex-employee-de-maison-des-balkany-se-rebiffe-25-01-2017-6618624.php",
	"http://tempsreel.nouvelobs.com/en-direct/a-chaud/32838-balkany-justice-ancienne-employee-maison-balkany-attaque.html",
	"http://www.gala.fr/l_actu/news_de_stars/video_patrick_balkany_perd_ses_nerfs_et_insulte_un_journaliste_du_petit_journal_384287",
	"http://www.closermag.fr/video/patrick-balkany-insulte-un-reporter-du-petit-journal-video-698542",
	"http://lelab.europe1.fr/video-patrick-balkany-aime-toujours-autant-les-cons-de-journalistes-vous-etes-des-gens-epouvantables-2953373",
	"https://www.mediapart.fr/journal/france/170117/chez-les-balkany-meme-les-bijoux-passent-par-les-paradis-fiscaux",
	"http://www.paris-normandie.fr/ouverture/giverny--une-ex-employee-du-moulin-de-cossy-accuse-les-balkany-HH8238889",
	"http://www.leparisien.fr/levallois-perret-92300/alexandre-balkany-en-prison-22-%C2%B202-2017-6700716.php",
	"http://www.lefigaro.fr/flash-actu/2016/12/13/97001-20161213FILWWW00045-l-affaire-qui-preoccupe-le-couple-balkany.php",
	"http://www.huffingtonpost.fr/2016/12/13/le-mariage-suspect-la-nouvelle-affaire-qui-eclabousse-les-bal/",
	"http://www.lefigaro.fr/elections/presidentielles/2017/02/02/35003-20170202ARTFIG00154-les-republicains-tournent-la-page-balkany-dans-les-hauts-de-seine.php",
	"http://www.leparisien.fr/info-paris-ile-de-france-oise/levallois-deux-nouveaux-revers-judiciaires-pour-les-balkany-09-11-2016-6309069.php",
	"http://www.humanite.fr/et-de-deux-nouvelles-mises-en-examen-pour-balkany-618759",
	"http://www.lepoint.fr/societe/dans-la-famille-balkany-le-juge-demande-le-fils-02-03-2017-2108686_23.php",
	"http://www.linternaute.com/actualite/politique/1367250-reserve-parlementaire-patrick-balkany-a-verse-100-000-euros-a-levallois-perret/"
);

header("Location: " . $locations[rand(0, count($locations)-1)], true, 307);

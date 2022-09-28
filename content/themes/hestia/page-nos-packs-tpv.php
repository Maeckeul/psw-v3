<?php 

get_header();

do_action( 'hestia_before_single_page_wrapper' );

?>

<div class="page-custom">
    <h2 class="tpv-title">Découvrez nos packs <span class="bold">Terminaux Point de Vente</span></h2>
    <div class="tabs">
        <div class="tabs-lists">
            <ul class="tabs-list">
                <li class="tabs-list-item yuno activebis" data-target="#yuno">Pack YUNO</li>
                <li class="tabs-list-item yuno-vesa" data-target="#yuno-vesa">Pack YUNO VESA</li>
                <li class="tabs-list-item sango" data-target="#sango">Pack SANGO</li>
            </ul>
            <ul class="tabs-list">
                <li class="tabs-list-item jazz" data-target="#jazz">Pack JAZZ</li>
                <li class="tabs-list-item zy3000" data-target="#zi">Pack ZY-3000</li>
                <li class="tabs-list-item pc" data-target="#pc">Pack PC</li>
            </ul>
        </div>
        <div class="tabs-content">
            <div id="yuno" class="tabs-content-item">
                <img src="<?= get_template_directory_uri(); ?>/public/img/Yuno.png" alt="" class="tabs-content-item-img">
            </div>
            <div id="yuno-vesa" class="tabs-content-item">
                <img src="<?= get_template_directory_uri(); ?>/public/img/Yuno VESA.png" alt="" class="tabs-content-item-img">
            </div>
            <div id="sango" class="tabs-content-item">
                <img src="<?= get_template_directory_uri(); ?>/public/img/Sango.png" alt="" class="tabs-content-item-img">
            </div>
            <div id="jazz" class="tabs-content-item">
                <img src="<?= get_template_directory_uri(); ?>/public/img/JAZZ.png" alt="" class="tabs-content-item-img">
            </div>
            <div id="zi" class="tabs-content-item">
                <img src="<?= get_template_directory_uri(); ?>/public/img/ZY3000.png" alt="" class="tabs-content-item-img">
            </div>
            <div id="pc" class="tabs-content-item">
                <img src="<?= get_template_directory_uri(); ?>/public/img/pc.png" alt="" class="tabs-content-item-img">
            </div>
        </div>
    </div>
    <div class="description desYuno active3">
        <div class="include">
            <p class="include-text">Le pack YUNO comprend :</p>
            <ul class="include-list">
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Poste tactile</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Tiroir caisse</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Imprimante tiquet thermique</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Logiciel Tahiti Caisse complet</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Installation</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Formation</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Suivi pendant 1 an</p>
                </li>
            </ul>
        </div>
        <div class="technique">
            <div class="technique-lists">
                <ul class="technique-list">
                    <li class="technique-list-item listYuno active2" data-target="#descriptionYuno">Description</li>
                    <li class="technique-list-item" data-target="#optionYuno">Option</li>
                    <li class="technique-list-item" data-target="#ficheYuno">Fiche Technique</li>
                </ul>
            </div>
            <div class="technique-yuno">
                <div id="descriptionYuno" class="technique-content techYuno show2">
                    <div class="technique-content-item">
                        <h3 class="technique-content-item-title">Un tpv intégré tout terrain et tout en style, aux multiples configurations</h3>
                        <p class="technique-content-item-text">Equipé de trois processeurs au choix, YUNO d’AURES est un TPV fanless, compact et performant.</p>
                        <p class="technique-content-item-text">Disponible en 2 formats d’écran (15,1 pouces 4/3 traditionnel et 15,6 pouces Wide de type 16/9ème), sa dalle capacitive projetée est multi-touch (technologie PCAP) et résiste aux chocs et aux rayures.</p>
                        <p class="technique-content-item-text">Tout-terrain et tout en style à la fois, YUNO est ultra-modulable et déclinable en version VESA (utilisation en support mural – sans son socle – ou en positionnement sur mât) ; il est également proposé en option simple écran tactile (moniteurs de 15,1’’ et 15,6’’ Wide).</p>
                        <p class="technique-content-item-text">Disponible en standard d’un disque flash (SSD 2,5’’) de 128 Go, il ne craint pas les nuisances des environnements les plus difficiles (graisses, miettes, poussières, projections et résidus des cuisines, restaurants, boulangeries) ; ses trois processeurs (Broadwell i5 ou i3, ou BayTrail J1900 au choix) consomment peu d’énergie et sa structure en aluminium agit comme dissipateur de chaleur, permettant d’éviter les surchauffes et d’être en phase avec les normes environnementales (faible empreinte carbone).</p>
                        <p class="technique-content-item-text">Accessible et d’un bon rapport qualité-prix au vu de ses nombreux atouts (technologies, ergonomie, modularité et design), YUNO représente un investissement raisonnable, rentable et durable pour vos parcs informatiques POS.</p>
                    </div>
                </div>
                <div id="optionYuno" class="technique-content">
                    <p class="technique-content-text">Vous avez la possibilité de choisir des options en plus avec votre pack: </p>
                    <ul class="technique-content-list">
                        <li class="technique-content-list-item">• Imprimante tiquet chèque</li>
                        <li class="technique-content-list-item">• 8 GO de RAM</li>
                        <li class="technique-content-list-item">• Afficheur client 2 lignes</li>
                    </ul>
                </div>
                <div id="ficheYuno" class="technique-content">
                    <ul class="technique-content-list">
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Processeur :</p>
                            <p class="technique-content-list-item-2-text">Bay Trall J1900 Quad-Core</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Système :</p>
                            <p class="technique-content-list-item-2-text">Windows 10</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Disque SSD :</p>
                            <p class="technique-content-list-item-2-text">2,5" 128 GO (2 emplacements)</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Mémoire :</p>
                            <p class="technique-content-list-item-2-text">DDR3 SODIMM 4 GO standard (jusqu'à 8 GO)</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">LCD :</p>
                            <p class="technique-content-list-item-2-text">15" TFT (1024 x 768) rétroéclairage LED</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Ecran tactile :</p>
                            <p class="technique-content-list-item-2-text">Ecran plat sans bord - dalle capacitive projetée (PCAP)</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Inclinaison :</p>
                            <p class="technique-content-list-item-2-text">Base inclinable de 0 à 90°</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Connectique :</p>
                            <p class="technique-content-list-item-2-text">Connectique multiple, dissimulé dans le socle</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Fixation :</p>
                            <p class="technique-content-list-item-2-text">VESA sur mat ou bras</p>
                        </li>
                    </ul>
                    <div class="technique-content-download">
                        <a href="#" download class="technique-content-download-link">
                            <i class="bi bi-file-earmark-pdf-fill"></i>Fiche technique complète
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="description desYunoVesa">
        <div class="include">
            <p class="include-text">Le pack YUNO VESA comprend :</p>
            <ul class="include-list">
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Poste tactile</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Mât ou bras métallique</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Tiroir caisse</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Imprimante tiquet thermique</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Logiciel Tahiti Caisse complet</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Installation</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Formation</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Suivi pendant 1 an</p>
                </li>
            </ul>
        </div>
        <div class="technique">
            <div class="technique-lists">
                <ul class="technique-list">
                    <li class="technique-list-item listYunoVesa" data-target="#descriptionYunoVesa">Description</li>
                    <li class="technique-list-item" data-target="#optionYunoVesa">Option</li>
                    <li class="technique-list-item" data-target="#ficheYunoVesa">Fiche Technique</li>
                </ul>
            </div>
            <div class="technique-yuno">
                <div id="descriptionYunoVesa" class="technique-content techYunoVesa">
                    <div class="technique-content-item">
                        <h3 class="technique-content-item-title">Un tpv intégré tout terrain et tout en style, aux multiples configurations</h3>
                        <p class="technique-content-item-text">Equipé de trois processeurs au choix, YUNO d’AURES est un TPV fanless, compact et performant.</p>
                        <p class="technique-content-item-text">Disponible en 2 formats d’écran (15,1 pouces 4/3 traditionnel et 15,6 pouces Wide de type 16/9ème), sa dalle capacitive projetée est multi-touch (technologie PCAP) et résiste aux chocs et aux rayures.</p>
                        <p class="technique-content-item-text">Tout-terrain et tout en style à la fois, YUNO est ultra-modulable et déclinable en version VESA (utilisation en support mural – sans son socle – ou en positionnement sur mât) ; il est également proposé en option simple écran tactile (moniteurs de 15,1’’ et 15,6’’ Wide).</p>
                        <p class="technique-content-item-text">Disponible en standard d’un disque flash (SSD 2,5’’) de 128 Go, il ne craint pas les nuisances des environnements les plus difficiles (graisses, miettes, poussières, projections et résidus des cuisines, restaurants, boulangeries) ; ses trois processeurs (Broadwell i5 ou i3, ou BayTrail J1900 au choix) consomment peu d’énergie et sa structure en aluminium agit comme dissipateur de chaleur, permettant d’éviter les surchauffes et d’être en phase avec les normes environnementales (faible empreinte carbone).</p>
                        <p class="technique-content-item-text">Accessible et d’un bon rapport qualité-prix au vu de ses nombreux atouts (technologies, ergonomie, modularité et design), YUNO représente un investissement raisonnable, rentable et durable pour vos parcs informatiques POS.</p>
                    </div>
                </div>
                <div id="optionYunoVesa" class="technique-content">
                    <p class="technique-content-text">Vous avez la possibilité de choisir des options en plus avec votre pack: </p>
                    <ul class="technique-content-list">
                        <li class="technique-content-list-item">• Imprimante tiquet chèque</li>
                        <li class="technique-content-list-item">• 8 GO de RAM</li>
                        <li class="technique-content-list-item">• Afficheur client 2 lignes</li>
                    </ul>
                </div>
                <div id="ficheYunoVesa" class="technique-content">
                    <ul class="technique-content-list">
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Processeur :</p>
                            <p class="technique-content-list-item-2-text">Bay Trall J1900 Quad-Core</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Système :</p>
                            <p class="technique-content-list-item-2-text">Windows 10</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Disque SSD :</p>
                            <p class="technique-content-list-item-2-text">2,5" 128 GO (2 emplacements)</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Mémoire :</p>
                            <p class="technique-content-list-item-2-text">DDR3 SODIMM 4 GO standard (jusqu'à 8 GO)</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">LCD :</p>
                            <p class="technique-content-list-item-2-text">15" TFT (1024 x 768) rétroéclairage LED</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Ecran tactile :</p>
                            <p class="technique-content-list-item-2-text">Ecran plat sans bord - dalle capacitive projetée (PCAP)</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Inclinaison :</p>
                            <p class="technique-content-list-item-2-text">Base inclinable de 0 à 90°</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Connectique :</p>
                            <p class="technique-content-list-item-2-text">Connectique multiple, dissimulé dans le socle</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Fixation :</p>
                            <p class="technique-content-list-item-2-text">VESA sur mat ou bras</p>
                        </li>
                    </ul>
                    <div class="technique-content-download">
                        <a href="#" download class="technique-content-download-link">
                            <i class="bi bi-file-earmark-pdf-fill"></i>Fiche technique complète
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="description desSango">
        <div class="include">
            <p class="include-text">Le pack SANGO comprend :</p>
            <ul class="include-list">
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Poste tactile</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Afficheur 2 lignes</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Tiroir caisse</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Imprimante tiquet thermique</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Logiciel Tahiti Caisse complet</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Installation</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Formation</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Suivi pendant 1 an</p>
                </li>
            </ul>
        </div>
        <div class="technique">
            <div class="technique-lists">
                <ul class="technique-list">
                    <li class="technique-list-item listSango" data-target="#descriptionSango">Description</li>
                    <li class="technique-list-item" data-target="#optionSango">Option</li>
                    <li class="technique-list-item" data-target="#ficheSango">Fiche Technique</li>
                </ul>
            </div>
            <div class="technique-yuno">
                <div id="descriptionSango" class="technique-content techSango">
                    <div class="technique-content-item">
                        <h3 class="technique-content-item-title">Concept exclusif permettant de libérer l'espace sous l'écran tactile de caisse</h3>
                        <p class="technique-content-item-text">Ne reposant sur aucun socle massif ou trop imposant, Sango s’élance avec légèreté, comme en apesanteur,afin d’offrir et révéler un espace traditionnellement occupé par l’unité centrale et la carte mère. Elégamment rattaché à son bras déportéen aluminium, véritable exo-squelette du TPV et support de son cœur technologique (UC), il conjugue esthétique minimaliste, ergonomie et faible consommation énergétique.</p>
                        <p class="technique-content-item-text">Ses performances s’adaptent aux besoins de tous les utilisateurs, quel que soit leur secteur d’activité ; 3 types de processeurs sont disponibles, au choix, ainsi qu’une connectique multiple. L’écran plat tactile à LED, doté d’une dalle sans bord, est proposé en version capacitive projetée et multi-touch.</p>
                        <p class="technique-content-item-text">Sublimés par la brillance du polycarbonate, les sept coloris modulables de Sango (White, Black, Red, Blue, Orange, Grey et Cassis) apportent la touche finale à l’identité visuelle des enseignes, jusqu’au point d’encaissement.</p>
                        <p class="technique-content-item-text">De nombreux accessoires et options sont disponibles (afficheur client graphique, système double-écran pour affichage dynamique(intégré ou externe), scanners codes-barres 1D et 2D, imprimante tickets, tiroir-caisse associé, lecteurs de cartes, etc).</p>
                    </div>
                </div>
                <div id="optionSango" class="technique-content">
                    <p class="technique-content-text">Vous avez la possibilité de choisir des options en plus avec votre pack: </p>
                    <ul class="technique-content-list">
                        <li class="technique-content-list-item">• Imprimante tiquet chèque</li>
                        <li class="technique-content-list-item">• 8 GO de RAM</li>
                        <li class="technique-content-list-item">• Ecran client</li>
                        <li class="technique-content-list-item">• Lecteur code barre intégré</li>
                    </ul>
                </div>
                <div id="ficheSango" class="technique-content">
                    <ul class="technique-content-list">
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Processeur :</p>
                            <p class="technique-content-list-item-2-text">Intel I3</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Système :</p>
                            <p class="technique-content-list-item-2-text">Windows 10</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Disque SSD :</p>
                            <p class="technique-content-list-item-2-text">2,5" 128 GO (2 emplacements)</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Mémoire :</p>
                            <p class="technique-content-list-item-2-text">DDR3 SODIMM 4 GO standard (jusqu'à 8 GO)</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">LCD :</p>
                            <p class="technique-content-list-item-2-text">LCD 15 pouces à LED</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Ecran tactile :</p>
                            <p class="technique-content-list-item-2-text">Dalle tactile capacitive projetée et multi-touch (PCAP)</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Inclinaison :</p>
                            <p class="technique-content-list-item-2-text">Base inclinable de 0 à 90°</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Connectique :</p>
                            <p class="technique-content-list-item-2-text">Connectique multiple, dissimulé dans le socle</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Couleur :</p>
                            <p class="technique-content-list-item-2-text">Couleur aux choix</p>
                        </li>
                    </ul>
                    <div class="technique-content-download">
                        <a href="#" download class="technique-content-download-link">
                            <i class="bi bi-file-earmark-pdf-fill"></i>Fiche technique complète
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="description desJazz">
        <div class="include">
            <p class="include-text">Le pack JAZZ comprend :</p>
            <ul class="include-list">
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Poste tactile</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Tiroir caisse</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Imprimante tiquet thermique</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Logiciel Tahiti Caisse complet</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Installation</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Formation</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Suivi pendant 1 an</p>
                </li>
            </ul>
        </div>
        <div class="technique">
            <div class="technique-lists">
                <ul class="technique-list">
                    <li class="technique-list-item listJazz" data-target="#description">Description</li>
                    <li class="technique-list-item" data-target="#option">Option</li>
                    <li class="technique-list-item" data-target="#fiche">Fiche Technique</li>
                </ul>
            </div>
            <div class="technique-yuno">
                <div id="description" class="technique-content techJazz">
                    <div class="technique-content-item">
                        <h3 class="technique-content-item-title">Performances sublimées</h3>
                        <p class="technique-content-item-text">JAZZ est un concept inédit d’équipement IT du point de service qui offre un éventail de plusieurs configurations ;son design épuré et intemporel est fidèle à l’esprit et aux fondamentaux AURES.</p>
                        <p class="technique-content-item-text">Conçus pour s’adapter aux évolutions de tous les parcs informatiques POS, les différentes options offertes par les matérielsde la gamme permettent d’accompagner toutes les étapes du parcours client.</p>
                        <p class="technique-content-item-text">Disponible en version TPV classique sur socle, en version mât (JAZZPOLE) ou encore en borne Self Check Out nommée JAZZSCO (encaissement libre-service), cette solution hardware (matériel) est polyvalente et évolutive. Déclinées à partir d’une carte mèreidentique, les différentes options de JAZZ associées entre elles sur le lieu de vente constituent des plateformes informatiques dont les mises à jour logicielles et la maintenance matérielle sont extrêmement simplifiées.</p>
                        <p class="technique-content-item-text">Supportée par les dernières générations de processeurs sans ventilateur, cette carte mère est protégée par un boitier compact miniaturisé très rigide (10 cm de côté seulement) qui accueille deux emplacements SSD M2 ainsi que la mémoire RAM ce boitier se clipse au dos de l’écran et est accessible sans outil.</p>
                        <p class="technique-content-item-text">Les systèmes de la famille JAZZ intègrent une technologie nouvelle mais éprouvée, dont l’intérêt est la réduction très significativede la connectique : un seul câble USB de type C suffit pour la transmission simultanée de tous les signaux nécessaires à son fonctionnement (alimentation, données USB et vidéo).</p>
                        <p class="technique-content-item-text">La structure élégante de JAZZ – en forme de « Z » dans sa version TPV – est faite de fonte d’aluminium et de zinc, pour renforcer sa rigidité et favoriser un refroidissement optimal ; elle se déploie et se replie intégralement grâce à un bras effilé à double charnière et permet ainsi à l’écran tactile ultra plat de s’orienter de façon ergonomique.</p>
                        <p class="technique-content-item-text">Le faible encombrement de l’ensemble optimise l’espace disponible sur le point de service.</p>
                    </div>
                </div>
                <div id="option" class="technique-content">
                    <p class="technique-content-text">Vous avez la possibilité de choisir des options en plus avec votre pack: </p>
                    <ul class="technique-content-list">
                        <li class="technique-content-list-item">• Imprimante tiquet chèque</li>
                        <li class="technique-content-list-item">• Afficheur client 2 lignes déporté</li>
                        <li class="technique-content-list-item">• Jazz Pol (Mât à la place du pied)</li>
                    </ul>
                </div>
                <div id="fiche" class="technique-content">
                    <ul class="technique-content-list">
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Processeur :</p>
                            <p class="technique-content-list-item-2-text">Bay Trall J1900 Quad-Core</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Système :</p>
                            <p class="technique-content-list-item-2-text">Windows 10</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Disque SSD :</p>
                            <p class="technique-content-list-item-2-text">2,5" 128 GO (2 emplacements)</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Mémoire :</p>
                            <p class="technique-content-list-item-2-text">DDR3 SODIMM 4 GO standard (jusqu'à 8 GO)</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">LCD :</p>
                            <p class="technique-content-list-item-2-text">15" TFT 1024 x 768</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Ecran tactile :</p>
                            <p class="technique-content-list-item-2-text">Ultra plat et sans bord, technologie capacitive projetée (multi-touch)</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Inclinaison :</p>
                            <p class="technique-content-list-item-2-text">Base inclinable de 0 à 90°</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Connectique :</p>
                            <p class="technique-content-list-item-2-text">Connectique multiple, dissimulé dans le socle</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Fixation :</p>
                            <p class="technique-content-list-item-2-text">VESA sur mat ou bras</p>
                        </li>
                    </ul>
                    <div class="technique-content-download">
                        <a href="#" download class="technique-content-download-link">
                            <i class="bi bi-file-earmark-pdf-fill"></i>Fiche technique complète
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="description desZy3000">
        <div class="include">
            <p class="include-text">Le pack ZY-3000 comprend :</p>
            <ul class="include-list">
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Poste tactile</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Tiroir caisse</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Imprimante tiquet thermique</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Logiciel Tahiti Caisse complet</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Installation</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Formation</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Suivi pendant 1 an</p>
                </li>
            </ul>
        </div>
        <div class="technique">
            <div class="technique-lists">
                <ul class="technique-list">
                    <li class="technique-list-item listZy3000 active2" data-target="#descriptionZy3000">Description</li>
                    <li class="technique-list-item" data-target="#optionZy3000">Option</li>
                    <li class="technique-list-item" data-target="#ficheZy3000">Fiche Technique</li>
                </ul>
            </div>
            <div class="technique-yuno">
                <div id="descriptionZy3000" class="technique-content techZy3000">
                    <div class="technique-content-item">
                        <h3 class="technique-content-item-title">Un tpv intégré tout terrain et tout en style, aux multiples configurations</h3>
                        <p class="technique-content-item-text">Equipé de trois processeurs au choix, YUNO d’AURES est un TPV fanless, compact et performant.</p>
                        <p class="technique-content-item-text">Disponible en 2 formats d’écran (15,1 pouces 4/3 traditionnel et 15,6 pouces Wide de type 16/9ème), sa dalle capacitive projetée est multi-touch (technologie PCAP) et résiste aux chocs et aux rayures.</p>
                        <p class="technique-content-item-text">Tout-terrain et tout en style à la fois, YUNO est ultra-modulable et déclinable en version VESA (utilisation en support mural – sans son socle – ou en positionnement sur mât) ; il est également proposé en option simple écran tactile (moniteurs de 15,1’’ et 15,6’’ Wide).</p>
                        <p class="technique-content-item-text">Disponible en standard d’un disque flash (SSD 2,5’’) de 128 Go, il ne craint pas les nuisances des environnements les plus difficiles (graisses, miettes, poussières, projections et résidus des cuisines, restaurants, boulangeries) ; ses trois processeurs (Broadwell i5 ou i3, ou BayTrail J1900 au choix) consomment peu d’énergie et sa structure en aluminium agit comme dissipateur de chaleur, permettant d’éviter les surchauffes et d’être en phase avec les normes environnementales (faible empreinte carbone).</p>
                        <p class="technique-content-item-text">Accessible et d’un bon rapport qualité-prix au vu de ses nombreux atouts (technologies, ergonomie, modularité et design), YUNO représente un investissement raisonnable, rentable et durable pour vos parcs informatiques POS.</p>
                    </div>
                </div>
                <div id="optionZy3000" class="technique-content">
                    <p class="technique-content-text">Vous avez la possibilité de choisir des options en plus avec votre pack: </p>
                    <ul class="technique-content-list">
                        <li class="technique-content-list-item">• Imprimante tiquet chèque</li>
                        <li class="technique-content-list-item">• 8 GO de RAM</li>
                        <li class="technique-content-list-item">• Afficheur client 2 lignes</li>
                    </ul>
                </div>
                <div id="ficheZy3000" class="technique-content">
                    <ul class="technique-content-list">
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Processeur :</p>
                            <p class="technique-content-list-item-2-text">Bay Trall J1900 Quad-Core</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Système :</p>
                            <p class="technique-content-list-item-2-text">Windows 10</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Disque SSD :</p>
                            <p class="technique-content-list-item-2-text">2,5" 128 GO (2 emplacements)</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Mémoire :</p>
                            <p class="technique-content-list-item-2-text">DDR3 SODIMM 4 GO standard (jusqu'à 8 GO)</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">LCD :</p>
                            <p class="technique-content-list-item-2-text">15" TFT (1024 x 768) rétroéclairage LED</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Ecran tactile :</p>
                            <p class="technique-content-list-item-2-text">Ecran plat sans bord - dalle capacitive projetée (PCAP)</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Inclinaison :</p>
                            <p class="technique-content-list-item-2-text">Base inclinable de 0 à 90°</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Connectique :</p>
                            <p class="technique-content-list-item-2-text">Connectique multiple, dissimulé dans le socle</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Fixation :</p>
                            <p class="technique-content-list-item-2-text">VESA sur mat ou bras</p>
                        </li>
                    </ul>
                    <div class="technique-content-download">
                        <a href="#" download class="technique-content-download-link">
                            <i class="bi bi-file-earmark-pdf-fill"></i>Fiche technique complète
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="description desPc">
        <div class="include">
            <p class="include-text">Le pack PC comprend :</p>
            <ul class="include-list">
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">PC</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Ecran non tactile</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Logiciel Tahiti Caisse complet</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Installation</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Formation</p>
                </li>
                <li class="include-list-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <p class="include-list-item-text">Suivi pendant 1 an</p>
                </li>
            </ul>
        </div>
        <div class="technique">
            <div class="technique-lists">
                <ul class="technique-list">
                    <li class="technique-list-item listPc" data-target="#descriptionPc">Description</li>
                    <li class="technique-list-item" data-target="#optionPc">Option</li>
                    <li class="technique-list-item" data-target="#fichePc">Fiche Technique</li>
                </ul>
            </div>
            <div class="technique-yuno">
                <div id="descriptionPc" class="technique-content techPc">
                    <div class="technique-content-item">
                        <h3 class="technique-content-item-title">Pack de démarrage, utile pour démarrer avec notre logiciel Tahiti Caisse à bas prix</h3>
                        <p class="technique-content-item-text">Le PC est monté avec le minimum nécessaire pour vous permettre une gestion de Tahiti Caisse et tout çà à prix réduit.Par la suite vous aurez la possibilité de migrer votre gestion vers un poste tactile.</p>
                        <p class="technique-content-item-text">Des périphériques peuvent être rajouté (Imprimante ticket de caisse, tiroir-caisse, lecteur code barres, imprimante code barres...)</p>
                    </div>
                </div>
                <div id="optionPc" class="technique-content">
                    <p class="technique-content-text">Aucune option disponible pour ce pack</p>
                </div>
                <div id="fichePc" class="technique-content">
                    <ul class="technique-content-list">
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Processeur :</p>
                            <p class="technique-content-list-item-2-text">Intel I3</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Système :</p>
                            <p class="technique-content-list-item-2-text">Windows 10</p>
                        </li>
                        <li class="technique-content-list-item-2">
                            <p class="technique-content-list-item-2-title">Equipement :</p>
                            <p class="technique-content-list-item-2-text">Clavier souris</p>
                        </li>
                    </ul>
                    <div class="technique-content-download">
                        <a href="#" download class="technique-content-download-link">
                            <i class="bi bi-file-earmark-pdf-fill"></i>Fiche technique complète
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

<?php 

get_footer();
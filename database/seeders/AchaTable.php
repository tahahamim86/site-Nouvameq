<?php

namespace Database\Seeders;

use App\Models\Achat;
use Illuminate\Database\Seeder;

class AchaTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $achat= new Achat();
        $achat->nom='SentinelLe Pro';
        $achat->description='Sentinel Pro a un design unique et moderne et des performances améliorées créées par l’équipe de recherche et développement de Riello UPS. Sentinel Pro utilise la technologie de double conversion ON LINE, ce qui se traduit par les plus hauts niveaux de fiabilité et de protection maximale pour les charges critiques telles que les serveurs, les applications informatiques et voix/données.
 
        Pour les applications de continuité d’activité nécessitant une longue durée de vie de la batterie, l’autonomie de la batterie peut être étendue jusqu’à plusieurs heures à l’aide de modèles ER équipés de chargeurs de batterie plus puissants.
        Le panneau d’affichage avant a été entièrement repensé, ajoutant un écran LCD qui affiche les tensions d’entrée et de sortie, les lectures de la batterie et les informations sur l’état de fonctionnement de l’onduleur. L’onduleur et l’étage de contrôle du microprocesseur ont été entièrement repensés pour offrir une efficacité accrue et de meilleures options de configuration.
        
        Extensibilité maximale : le Sentinel Pro est fourni en standard avec un port USB et un emplacement d’extension pour la conversion de protocole ou les cartes de contacts relais. Dans un souci d’économies d’énergie, Sentinel Pro est également équipé d’un bouton d’arrêt pour réduire la consommation d’énergie à zéro pendant les périodes prolongées d’inactivité (ECO LINE). Sentinel Pro est disponible en modèles 700 VA, 1000 VA, 1500 VA, 2200 VA et 3000 VA.';
        $achat->photo='1.jpg';
        $achat->puissance='700 -3000 VA';
        $achat->save();
 
         $achat= new Achat();
        $achat->nom='Sentinel Rack';
        $achat->description='Compacité et protection totale pour les systèmes de rack.
 
  
 
        Le Sentinel Rack est une version montée en rack de la populaire gamme Sentinel Pro d’alimentations sans coupure ON LINE. La technologie avancée de double conversion offre les plus hauts niveaux de fiabilité et de protection pour les serveurs critiques, les systèmes informatiques de traitement des données et les applications voix/données. Disponibles en versions 1500 VA et 3000 VA, les deux produits se trouvent à seulement 380 mm de profondeur, ce qui en fait le choix idéal pour améliorer l’alimentation dans les salles de serveurs abritant des racks hérités de 600 mm de profondeur.
        
        Pour les applications nécessitant plusieurs heures d’autonomie, le SER 3000 ER est équipé d’un chargeur de batterie de 6 A et de batteries supplémentaires pour une autonomie supplémentaire. Ces systèmes UPS plug and play sont conçus pour s’adapter aux racks d’armoires standard de 19 pouces et intègrent une fonction de démarrage à froid qui leur permet de s’allumer même s’il n’y a pas d’alimentation secteur. Choisissez parmi une large gamme de modes de fonctionnement (c.-à-d. ON LINE, ECO, SMART ACTIVE, STANDBY OFF, Frequency Converter) pour améliorer les performances et l’efficacité énergétique.';
        $achat->photo='2.jpg';
        $achat->puissance='1.5 - 3 kVA';
        $achat->save();
 
         $achat= new Achat();
        $achat->nom='Sentinel Dual (faible consommation)';
        $achat->description='Haute efficacité et densité.
 
  
 
        Sentinel Dual est la nouvelle gamme d’onduleurs ON LINE à double conversion haute densité adaptés à l’alimentation d’une large gamme d’appareils tels que les serveurs, les systèmes de stockage, les équipements de téléphonie VoIP, les systèmes réseau et médicaux ainsi que les applications industrielles.
        Il est également idéal pour alimenter et protéger les systèmes Blade Server avec un facteur de puissance d’entrée élevé. Avec seulement 2U, Sentinel Dual est idéal pour les installations d’armoires en rack de 19 pouces. Sentinel Dual a un design pratique et moderne et comprend plusieurs avantages de performance par rapport aux onduleurs ON LINE traditionnels.
        L’onduleur nouvellement conçu est l’un des meilleurs systèmes de conversion d’énergie sur le marché, avec un facteur de puissance de sortie de 0,9 et une efficacité de fonctionnement de 92% en mode ON LINE. Pour les applications de continuité d’activité nécessitant une longue durée de vie de la batterie, l’autonomie de la batterie peut être étendue jusqu’à plusieurs heures à l’aide de modèles ER équipés de chargeurs de batterie plus puissants. Avec des économies d’énergie à l’esprit, Sentinel Dual est également équipé d’un bouton d’arrêt pour réduire la consommation d’énergie à zéro pendant les périodes prolongées d’inactivité.';
        $achat->photo='3.jpg';
        $achat->puissance='1000-3000 VA';
        $achat->save();
 
         $achat= new Achat();
        $achat->nom='Sentinel Double SDU';
        $achat->description='Sentinel Dual est la meilleure solution pour alimenter les applications critiques et les dispositifs électromédicaux nécessitant une fiabilité de puissance maximale.
 
        La gamme Sentinel Dual est disponible en modèles 4 kVA et 5-6-8-10 kVA/kW avec technologie de double conversion ON LINE (VFI) : la charge est alimentée en continu par l’onduleur qui fournit une tension sinusoïdale, filtrée et stabilisée en termes de tension, de forme et de fréquence.
        
        Réduisez votre consommation d’énergie en utilisant les modes ECO et SMART ACTIVE. Priorisez vos charges les plus critiques avec les prises EnergyShare qui facilitent le délestage. Les ventilateurs à charge contrôlée minimisent les perturbations sonores (<48 dBA).';
        $achat->photo='4.jpg';
        $achat->puissance='4 - 10 kVA';
        $achat->save();
 
         $achat= new Achat();
        $achat->nom='Tour Sentinelle';
        $achat->description='Sentinel Tower est la solution idéale pour protéger les systèmes critiques tels que les dispositifs de sécurité, les équipements de télécommunications mais aussi les systèmes informatiques afin d’assurer une fiabilité énergétique maximale.
        Sentinel Tower est conçu et construit à l’aide d’une technologie et de composants de pointe pour fournir une protection maximale aux charges alimentées sans impact sur les systèmes en aval et des économies d’énergie optimisées.
        La série comprend des modèles de sortie monophasés/monophasés de 5 à 6 kVA et de 8 à 10 kVA à entrée monophasée/triphasés avec technologie de double conversion ON LINE (VFI) :
        la charge est alimentée en continu par l’onduleur qui fournit une tension sinusoïdale, filtrée et stabilisée en termes de forme et de fréquence. Les filtres d’entrée et de sortie offrent une immunité supplémentaire significative contre les perturbations principales et les coups de foudre.
        En termes de technologie et de performances, Sentinel Tower est l’un des meilleurs onduleurs disponibles sur le marché aujourd’hui: onduleur à trois niveaux pour atteindre une efficacité de 95%, facteur de puissance de sortie 1 pour augmenter l’efficacité du système et des appareils et réduire les pertes du système d’alimentation.
        Fonctions sélectionnables du mode ECO et du mode SMART ACTIVE; nouvel écran LCD de diagnostic personnalisé, interfaces RS232 et USB avec logiciel Powershield³, entrée ESD, emplacement d’interface avec cartes en option.';
        $achat->photo='5.jpg';
        $achat->puissance='5 - 10 kVA';
        $achat->save();
 
         $achat= new Achat();
        $achat->nom='Sentryum';
        $achat->description='Notre troisième génération de systèmes ON LINE UPS sans transformateur, le Sentryum de 10 à 40 kVA, réécrit le concept d’alimentation flexible en offrant un choix de trois tailles d’armoires compactes pour répondre aux besoins de tout petit centre de données ou application critique.
 
        Une capacité de surcharge et de court-circuit améliorée garantit une disponibilité maximale. Intégrant un écran tactile couleur de 5 pouces et un indicateur d’état LED intuitif qui change automatiquement de couleur en fonction de l’état de fonctionnement actuel de l’onduleur.';
        $achat->photo='6.jpg';
        $achat->puissance='10 - 40 kVA';
        $achat->save();
 
         $achat= new Achat();
        $achat->nom='Multi Sentinelle';
        $achat->description='Performances et efficacité exceptionnelles.
        Multi Sentry est une alimentation sans coupure de pointe, atteignant le plus haut niveau possible de performance de double conversion ON LINE (VFI-SS-111) tel que défini dans la norme CEI EN 62040-3.
        
        L’onduleur a été conçu pour protéger les systèmes, réseaux, services et processus critiques d’information et de télécommunications dont le fonctionnement pourrait être perturbé par une mauvaise qualité de l’alimentation électrique et/ou des coupures de leur alimentation secteur.
        Les tailles disponibles comprennent 60-80-100-120-160-200 kVA, le tout avec une entrée et une sortie triphasées.
        L’onduleur Multi Sentry est l’un des onduleurs les plus efficaces disponibles avec un impact minimal sur son environnement et ses sources d’alimentation.';
        $achat->photo='7.jpg';
        $achat->puissance='60 - 200 kVA';
        $achat->save();
         $achat= new Achat();
        $achat->nom='Multi Puissance';
        $achat->description='15-240 kW + redondance
        25-400 kW + redondance
        42-1008 kW + redondance
        
         
        
        Riello UPS MULTI POWER (MPW et MPX) est une alimentation triphasée sans coupure avec une architecture modulaire, de type ON LINE Double Conversion, avec possibilité de redondance.
        
        Il délivre une puissance nominale de 15 à 1176 kW et est fabriqué à l’aide de composants spécialement conçus et de technologies sans transformateur qui offrent une efficacité exceptionnelle jusqu’à 96,5% et une densité de puissance élevée dans un encombrement compact.
        
        La modularité réduit le risque de surdimensionnement inutile lors de l’installation, tout en offrant une évolutivité « pay as you grow » lorsqu’il est temps de se développer, optimisant ainsi l’investissement initial et le coût total de possession (TCO).
        
        Il est conçu pour protéger :
        
        tout environnement informatique et informatique haute densité critique
        centres de données
        charges critiques';
        $achat->photo='8.jpg';
        $achat->puissance='45 - 294 kVA';
        $achat->save();
         $achat= new Achat();
        $achat->nom='Sentryum Rack';
        $achat->description='La gamme Sentryum Rack a été spécialement développée pour assurer la continuité de l’alimentation dans tous les secteurs jugés critiques en raison des conditions environnementales spécifiques ou des processus industriels nécessitant une protection. Il s’agit d’un véritable onduleur ON LINE à double conversion, disponible en version autonome de 20 kVA/kW et en versions modulaires de 20 à 160 kVA/kW. Le Sentryum Rack est disponible en configurations de sortie monophasées et triphasées. Il accepte les entrées monophasées et triphasées sans nécessiter de configurations spéciales ou d’intervention de l’opérateur. La disposition de la tension peut changer pendant le fonctionnement sans aucune réinitialisation ou opération manuelle, donc l’onduleur détecte automatiquement la tension d’entrée et se comporte en conséquence.';
        $achat->photo='9.jpg';
        $achat->puissance=' 10 - 200 kVA';
        $achat->save();
         $achat= new Achat();
        $achat->nom='MPS maître';
        $achat->description='Protection totale
 
        3:1 10-120 kVA
        3:3 10-200 kVA
        
         
        
        Les onduleurs de la série Master MPS assurent une protection et une qualité d’alimentation maximales pour tout type de charge, en particulier pour les applications critiques, les centres de données, les systèmes de sécurité et les équipements électromédicaux, les processus industriels et les télécommunications.
        Master Plus est un onduleur ON LINE à double conversion (classe VFI SS 111 conformément à la norme CEI EN 62040-3) avec un onduleur isolé par transformateur.';
        $achat->photo='10.jpg';
        $achat->puissance='10 - 40 kVA';
        $achat->save();
         $achat= new Achat();
        $achat->nom='SuivantÉnergie NXE';
        $achat->description='NextEnergy est la dernière série d’onduleurs conçue pour les applications critiques. L’onduleur triphasé offre la technologie de double conversion sans transformateur VFI SS 111, avec la dernière conception IGBT à trois niveaux intégrée.
        NextEnergy est conçu pour répondre aux besoins en énergie de demain, offrant la plus grande efficacité du marché et un faible coût d’exploitation. Grâce au système de contrôle de l’efficacité (ECS), NextEnergy garantit également les plus hauts niveaux d’efficacité, même à des charges partielles.
        Son facteur de puissance unitaire et sa mise à niveau facile du système en font la solution idéale pour la continuité des activités de toute application informatique.';
        $achat->photo='11.jpg';
        $achat->puissance='250 - 800 kVA';
        $achat->save();
         $achat= new Achat();
        $achat->nom='Maître HP UL';
        $achat->description='Puissance de qualité ininterrompue pour les applications critiques.
 
  
 
        Les niveaux améliorés de qualité, de fiabilité et d’économies d’énergie offerts par la gamme d’onduleurs Master HP ont été étendus pour inclure une version 480 Vac - 60 Hz, certifiée UL/CSA, avec des puissances nominales de 65 kVA à 500 kVA, en configuration monomodule ou parallèle.
        
        Les responsables informatiques, les gestionnaires d’installations et les CTO sont soumis à une pression croissante pour réduire les temps d’arrêt et s’assurer que leurs charges critiques sont alimentées en énergie ininterrompue et de haute qualité.
        Avec cette exigence de plus en plus stricte, Riello UPS a investi dans des solutions d’alimentation qui répondent à des exigences strictes; un engagement qui a abouti au lancement de la gamme Master HP UL.
        Plus qu’un simple onduleur innovant et technologiquement avancé, c’est un saut dans l’avenir de la technologie triphasée.
        
        Avec sa technologie de double conversion en ligne entièrement basée sur l’IGBT et les processeurs de signaux numériques (DSP), la gamme Master HP UL assure une protection maximale de la charge critique, avec la classification VFI SS 111 (indépendante de la tension et de la fréquence) conformément à la norme CEI EN 62040-3.
        
        Cette gamme est conçue à l’aide d’une nouvelle configuration qui comprend un redresseur d’entrée sinusoïdal IGBT. Unique dans sa conception, la technologie de double conversion avec sortie galvanique isolée garantit une alimentation de qualité qui est complètement protégée de toutes les anomalies électriques à l’entrée.';
        $achat->photo='12.jpg';
        $achat->puissance='65 - 500 kVA';
        $achat->save();
         $achat= new Achat();
        $achat->nom='Maître HP';
        $achat->description='Protection et performances maximales.
 
  
 
        La série Master HP de 100 à 600 kVA est la solution UPS Riello pour les installations nécessitant une efficacité énergétique élevée et une disponibilité maximale de la puissance. La série Master HP offre une protection et une qualité d’alimentation maximales pour les centres de données et les charges industrielles. L’onduleur dispose d’un redresseur basé sur IGBT, de la technologie DSP (Digital Signal Processor) et offre une protection de puissance à double conversion (VFI SS 11 - Indépendant de la tension et de la fréquence conformément à la norme CEI EN 62040-3).';
        $achat->photo='13.jpg';
        $achat->puissance='100 - 600 kVA';
        $achat->save();
         $achat= new Achat();
        $achat->nom='Maître HE';
        $achat->description='Notre troisième génération de systèmes ON LINE UPS sans transformateur, le Sentryum de 10 à 40 kVA, réécrit le concept d’alimentation flexible en offrant un choix de trois tailles d’armoires compactes pour répondre aux besoins de tout petit centre de données ou application critique.
 
        Une capacité de surcharge et de court-circuit améliorée garantit une disponibilité maximale. Intégrant un écran tactile couleur de 5 pouces et un indicateur d’état LED intuitif qui change automatiquement de couleur en fonction de l’état de fonctionnement actuel de l’onduleur.';
        $achat->photo='14.jpg';
        $achat->puissance='10 - 40 kVA';
        $achat->save();
         $achat= new Achat();
        $achat->nom='Master Industriel';
        $achat->description='DC BUS 220 Vdc
        Idéal pour les installations industrielles
        
         
        
        Les onduleurs de la série Master Industrial offrent une protection et une qualité d’alimentation maximales pour tout type de charge, en particulier les applications industrielles, telles que les processus de fabrication et pétrochimiques, la distribution électrique et les centrales électriques.
        Master Industrial est un onduleur ON LINE à double conversion (classe VFI SS 111 conformément à la norme CEI EN 62040-3) avec transformateurs d’isolation d’entrée et de sortie.';
        $achat->photo='15.jpg';
        $achat->puissance='30 - 80 kVA';
        $achat->save();
        
    }
}

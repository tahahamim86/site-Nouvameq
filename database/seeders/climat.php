<?php

namespace Database\Seeders;

use App\Models\climat as ModelsClimat;
use Illuminate\Database\Seeder;

class climat extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $climat= new ModelsClimat();
        $climat->nom="TRF CW";
        $climat->description="VERSIONS DISPONIBLES Dimensions Du Débit Ascendant Dimensions Du Débit Descendant Dimensions Du Déplacement PRODUIT PLUS Efficacité Flexibilité Échangeurs De Chaleur À Géométrie Variable Conception Interne Optimisée TRF - Inspiré Par Le Meilleur Du TREF, Révolutionné Dans La Conception Les Climatiseurs À Eau Glacée TRF CW Sont Particulièrement Adaptés Aux Installations Technologiques Qui Nécessitent Un Contrôle Constant De La Température Et Du Débit D’air. Les Composants Des Unités TRF CW Permettent De Fournir Une Solution De Refroidissement De Centre De Données Ultra-Efficace Qui Garantit La Fiabilité, Le Contrôle Précis Des Paramètres Thermo-Hygrométriques Et L’adaptation Flexible À Une Gamme De Conditions De Travail Si Nécessaire. PRINCIPAUX AVANTAGES Nouveau Design: Efficacité, Flexibilité Et Aménagement Interne Optimisé Un Nouveau Design, Caractérisé Par Une Redistribution Des Espaces Internes, A Abouti À Un Échangeur D’emballage À Ailettes Plus Grand Et À L’installation D’un Ventilateur À Haut Rendement De Nouvelle Génération. Une Analyse Méticuleuse De La Dynamique Des Fluides A Permis De Réduire Davantage Les Pertes De Charge Tout En Maximisant La Capacité Et L’efficacité De La Réfrigération. Ventilateurs EC 2.0 L’utilisation De Ventilateurs À Prise EC (En Standard Sur Toute La Gamme) Permet Aux Utilisateurs D’adopter Différentes Logiques De Réglage (Débit D’air, Surpression, DT Constants) Tout En Alimentant Efficacement La Ventilation, Ayant Ainsi Un Impact Positif Sur Le PUE Du Système. Le Réglage De La Vitesse À Grande Échelle Est Effectué Via Le Protocole MODBUS. La Fonction « Vitesse D’urgence » Assure La Continuité Du Ventilateur Même En Cas De Dysfonctionnement Du Microprocesseur. Bobine D’emballage À Ailettes Avec Revêtement Hydrophile Tous Les Modèles De La Gamme TRF CW Sont Équipés De Serpentins D’échange De Chaleur Avec Revêtement Hydrophile. Ce Revêtement Spécial - Associé À Un Réglage Approprié Des Vitesses De Circulation De L’air - Facilite La Collecte Et La Sortie Des Condensats Pendant Le Processus De Déshumidification, Empêchant Tout Écoulement À L’intérieur Et À L’extérieur De L’unité. Flexibilité Garantie Trois Types D’échangeurs De Chaleur Différents, Chacun Optimisé Sur Un ΔT D’eau Spécifique (Différence De Température Entre Eau Entrante/Sortante), Assurent Une Adaptation Exceptionnellement Flexible Au Système Ou Aux Refroidisseurs Liquides Déjà En Fonctionnement, Sans Compromettre Les Performances De Refroidissement : 1. Géométrie « A » Pour ΔT = 5°C 2. Géométrie « B » Pour ΔT = 8°C 3. Géométrie « C » Pour ΔT = 12°C Réglage Précis Avec Plusieurs Types De Vannes La Vanne Modulatrice Avec Servomoteur De 0 À 10 V (En Standard Sur Toute La Gamme) Peut Être À 2 Voies (Avec Système À Débit Variable) Ou À 3 Voies. Les Autres Versions Disponibles Dans Le Configurateur Sont Celles Avec Un Servomoteur À Retour De Ressort. Il Est Également Possible, Sur Demande, De Sélectionner Des Vannes Qui Fonctionnent Indépendamment De La Pression. Les Performances Exceptionnelles De Contrôle Du Débit Sur Ce Type De Vanne Assurent Un Réglage Précis Tout En Maintenant L’équilibre Hydronique Du Système. Réglage De La Ventilation Selon La Logique De Distribution D’air Dans La Salle Des Serveurs, Il Est Possible D’agir Sur Le Système De Ventilation Sur Machine Pour Assurer Un Flux D’air Constant (Contrôle Du Débit D’air) Ou Une Disponibilité Constante De La Surpression (Contrôle Δp). Ce Dernier Est Fortement Recommandé Si Le Système Se Trouve Sur Un Plancher Flottant. Maintenance De Routine Simplifiée L’unité A Été Soigneusement Conçue Pour Assurer Un Accès Frontal Aux Composants. Cela Facilite La Maintenance De Routine Dans Le Plein Respect Des Normes De Sécurité.
        ";
        $climat->photo="IMG1.png";
        $climat->save();
 
        $climat= new ModelsClimat();
        $climat->nom="NRG 2.0";
        $climat->description="VERSIONS DISPONIBLES
 
        NRG-A Air condensé avec condenseur à distance
        NRG-Z Eau condensée avec de l’eau de ville (15°C)
        Eau NRG-W condensée avec tour de refroidissement ou refroidisseur sec
        NRG-F Eau condensée et Free-Cooling indirect
        NRG-D Air condensé avec condenseur à distance et double refroidissement
        Eau NRG-Q condensée avec de l’eau de ville (15°C) et Dual-Cooling
        Eau NRG-K condensée avec tour de refroidissement ou refroidisseur sec et double refroidissement
        PRODUIT PLUS
        
        Efficacité maximale du système
        Densité de puissance maximisée
        Les unités de climatisation NRG montées sur le périmètre de HiRef sont conçues pour les installations informatiques à haute densité thermique nécessitant un contrôle précis des paramètres hygrothermiques et un fonctionnement continu. L’utilisation de compresseurs à commande inverseur, capables de suivre la charge thermique avec une extrême précision, de ventilateurs EC (standard) et de vannes de laminage à commande électronique (standard) permet également d’atteindre des performances élevées avec une consommation d’énergie réduite, améliorant ainsi le PUE du centre de données. La force de la nouvelle gamme NRG 2.0 réside dans son rendement spécifique élevé (kW/m2), obtenu grâce à une conception interne précise et à un choix minutieux des composants.
        ";
        $climat->photo="IMG2.png";
        $climat->save();
 
        $climat= new ModelsClimat();
        $climat->nom="LE";
        $climat->description="VERSIONS DISPONIBLES
 
        NRG-A Air condensé avec condenseur à distance
        NRG-Z Eau condensée avec de l’eau de ville (15°C)
        Eau NRG-W condensée avec tour de refroidissement ou refroidisseur sec
        NRG-F Eau condensée et Free-Cooling indirect
        NRG-D Air condensé avec condenseur à distance et double refroidissement
        Eau NRG-Q condensée avec de l’eau de ville (15°C) et Dual-Cooling
        Eau NRG-K condensée avec tour de refroidissement ou refroidisseur sec et double refroidissement
        PRODUIT PLUS
        
        Efficacité maximale du système avec les compresseurs BLDC et les ventilateurs EC
        Serpentins d’évaporation avec revêtement hydrophile
        Accessibilité totale depuis l’avant de l’unité;
        Les unités de climatisation NRG CRAC de HiRef sont conçues pour les installations informatiques à haute densité thermique pour lesquelles un contrôle précis des paramètres hygrothermiques et un fonctionnement continu sont demandés. Les performances exceptionnelles de la gamme NRG sont fournies par des compresseurs BLDC à onduleur, capables de répondre à la demande de refroidissement avec une extrême précision. L’utilisation de ventilateurs EC (en standard), de vannes de laminage à commande électronique (en standard) et de configurations avec des systèmes Dual Cooling ou Free-Cooling garantit des performances élevées avec une faible consommation d’énergie, clairement avantageuse pour les niveaux puE du centre de données. Grâce aux différentes configurations, la gamme NRG convient à de nombreuses applications dans le domaine de la climatisation des centres de données. PRINCIPAUX AVANTAGES Les choix de conception appliqués à la gamme NRG permettent un réglage très précis des paramètres hygrothermiques dans les salles de serveurs, avec des niveaux d’efficacité énergétique élevés. Surtout, lorsqu’ils travaillent à charge partielle, les compresseurs scroll à vitesse variable, le détendeur à commande électronique et les ventilateurs EC (en standard) sont contrôlés de manière à garantir de faibles niveaux de PUE. Tous les modèles de la gamme NRG sont équipés de serpentins d’échange de chaleur avec revêtement hydrophile des ailettes. Ce revêtement spécial - associé à une conception appropriée des vitesses de débit d’air traversant - facilite la collecte des condensats pendant le processus de déshumidification, évitant ainsi les conséquences graves du transport des gouttelettes vers l’extérieur de l’unité. La version Dual Cooling abrite - en plus du serpentin d’évaporation DX et en série en ce qui concerne le flux d’air - un serpentin d’eau glacée qui peut, par exemple, être alimenté par un refroidisseur. Cela signifie que la capacité de refroidissement demandée peut être fournie même en cas de défaillance sur le circuit frigorifique principal, assurant ainsi une redondance maximale du système. Dans les périodes où l’air extérieur est plus froid que l’air chaud dans le centre de données, le refroidisseur à sec externe, normalement utilisé pour la condensation du circuit de réfrigération de l’unité, est exploité pour générer un refroidissement efficace. Un deuxième serpentin d’échange de chaleur, positionné en série sur le flux d’air par rapport à l’évaporateur DX, est en effet alimenté par l’air froid produit par le Dry-Cooler et fournit une partie ou 100% de la capacité de refroidissement requise. L’utilisation du compresseur est réduite et, dans des conditions de free-cooling totale, éteinte, avec des réductions significatives des niveaux de PUE du système. L’unité a été soigneusement conçue pour accorder un accès frontal aux composants même lorsque les unités fonctionnent. Ces aspects facilitent la maintenance de routine dans le plein respect des normes de sécurité. CARACTÉRISTIQUES TECHNIQUES Systèmes de post-chauffage; éléments chauffants électriques bobine de gaz chaud bobine d’eau chaude Vanne de lamination à commande électronique Cuve de vidange de condensat en acier inoxydable Contrôle à microprocesseur programmable intégré avec écran LCD Fonction Humidifier / déshumidifier le capteur de débit d’air Filtre à air G3 en standard Capteurs de température de livraison / retour d’air Boîtier de compresseur séparé du flux d’air Interrupteurs de coupure de surcharge automatiques";
        $climat->photo="IMG3.jpg";
        $climat->save();
 
        $climat= new ModelsClimat();
        $climat->nom="JREF DX";
        $climat->description="Circuit frigorifique Connexions Rotalock pour faciliter l’installation Vanne de laminage avec égalisation externe Séchoir à filtre et indicateur de débit Relais de séquence de phase Interrupteur haute pression avec réinitialisation manuelle et interrupteur basse pression avec réinitialisation automatique";
        $climat->photo="IMG4.jpg";
        $climat->save();
 
        $climat= new ModelsClimat();
        $climat->nom="FCDR";
        $climat->description="PRODUIT PLUS
 
        Encombrement réduit
        Efficacité et ventilation à faible bruit
        Profil « E-Wing »
        Section de filtrage optimisée
        Solution « Free-Fan »
        Aérodynamique minutieuse
        SCDR est la nouvelle gamme d’unités à eau glacée pour racks de serveurs à haute densité thermique. L’analyse approfondie de la dynamique des fluides a abouti à la conception méticuleuse de chaque détail constructif pour minimiser les pertes de charge d’air et, par conséquent, la consommation d’énergie du ventilateur, la seule entrée de puissance dans l’unité. Le module de base permet un flux d’air plus large tandis que le profil « E-Wing » sépare les flux d’air provenant de chaque ventilateur. Cela réduit le contact / impact entre les deux flux et, par conséquent, toute chute de pression d’air possible du ventilateur. L’utilisation de ventilateurs avec moteurs ÉLECTRONIQUES EC permet un réglage efficace et un débit d’air précis. L’encombrement réduit a l’avantage de garantir que la majeure partie de l’espace de la pièce est utilisée pour installer l’équipement informatique. Le filtre à air, parallèle à la bobine, a une surface plus large, ce qui réduit considérablement la perte de charge de l’air qui circule. CARACTÉRISTIQUES TECHNIQUES Version extra-haute disponible sur demande Ventilateurs à pales incurvées vers l’arrière avec moteurs EC et roue en plastique Modulation de la vitesse du ventilateur en fonction de la demande de refroidissement (ΔT constant) Les ventilateurs sont sélectionnés pour maximiser l’efficacité dans des conditions de basse pression Modulation de la vitesse du ventilateur en fonction de la demande de débit d’air (Δp constante) Circuit hydraulique simple, version à double circuit disponible Connexions électriques rapides Pieds réglables en hauteur
        ";
        $climat->photo="IMG5.png";
        $climat->save();
    }
}

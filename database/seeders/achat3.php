<?php

namespace Database\Seeders;

use App\Models\achat3 as ModelsAchat3;
use Illuminate\Database\Seeder;

class achat3 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $achat3= new ModelsAchat3();
        $achat3->nom="Solutions de batteries au lithium";
        $achat3->puissance="";
        $achat3->description="UPS et systèmes de stockage d’énergie (ESS) alimentés par des solutions de batteries au lithium.
        
         
        
        La proposition de batterie au lithium Riello UPS intègre plusieurs solutions couvrant un grand nombre d’exigences d’application qui répondent aux demandes les plus pressantes du marché. Ceci est réalisé grâce à une série de produits qui se caractérisent par la durée de décharge, le nombre de cycles de batterie et le taux de courant de charge / décharge.
        
        La proposition de batterie au lithium Riello UPS convient pour:
        
        Centres de données (p. ex., colocalisation, salles de contrôle);
        Télécommunications (p. ex., opérateur fixe et mobile);
        Soins de santé (p. ex., hôpitaux et centres médicaux);
        Construire des infrastructures (p. ex., institutions financières, centres d’éducation);
        Transport (p. ex., infrastructure ferroviaire et aéroportuaire);
        Fabrication (p. ex., industrie des aliments et des boissons);
        Stockage d’énergie (p. ex., applications photovoltaïques, éoliennes et de cogénération, réseaux intelligents et applications hors réseau).";
       $achat3->photo="show_Riello-UPS-Riello-Solartech-ESS-Lithium-Batteries-01.jpg";
$achat3->save();
       $achat3= new ModelsAchat3();
       $achat3->nom="SuperCaps UPS";
       $achat3->puissance="";
       $achat3->description="Solutions avec SuperCaps
        
         
        
       Les supercondensateurs offrent une alternative écologique aux systèmes UPS traditionnels à batterie. Nos dispositifs de stockage d’énergie à haute densité de puissance offrent une autonomie de l’ordre de quelques secondes, ils sont donc idéaux pour les sites sujets à de très courtes interruptions.
       
       Peut fonctionner dans une plage de température beaucoup plus large que l’onduleur standard, ce qui réduit le besoin de chauffage ou de climatisation. L’encombrement réduit permet d’économiser de l’espace. Offre des économies de coût total de possession à long terme sur la surveillance, le remplacement, le recyclage et l’élimination des batteries.";
      $achat3->photo="show_Riello_UPS_Supercaps.jpg";
      $achat3->save();
    }
}

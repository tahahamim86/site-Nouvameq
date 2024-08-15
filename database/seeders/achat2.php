<?php

namespace Database\Seeders;

use App\Models\achat2 as ModelsAchat2;
use Illuminate\Database\Seeder;

class achat2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $achat2= new ModelsAchat2();
        $achat2->nom="iDialog";
        $achat2->puissance="1.1 - 3 kVA";
        $achat2->description="Fiabilité maximale dans la protection des PC.
        La gamme iDialog est la solution idéale pour la protection des PC et des périphériques à la maison et au bureau.
        iDialog est une solution économique et facile à installer pour toute personne souhaitant protéger :
        Équipements informatiques tels que PC, Media Centers et périphériques
        Téléviseurs, Home Cinémas, Récepteurs satellite et numérique terrestre et enregistreurs et lecteurs de DVD.
        Modem et routeurs xDSL
        Petits appareils électroménagers      ";
      $achat2->photo="show_Riello_UPS_IDG.jpg";
      $achat2->save();
      $achat2= new ModelsAchat2();
      $achat2->nom="Rack iDialog";
      $achat2->puissance="600 - 1200 VA";
      $achat2->description="Fiabilité maximale dans la protection des systèmes Voip.
      Fiabilité maximale dans la protection des systèmes Voip. La gamme iDialog Rack est la solution idéale pour protéger les PC et les périphériques à la maison et au bureau.
          
      Matériel informatique tel que PC, centres multimédias et périphériques, téléviseurs, systèmes Home Cinéma, satellite et numérique terrestre, récepteurs et lecteurs de DVD;
      Modems et routeurs xDSL;
      Voip et application réseau.    ";
    $achat2->photo="show_Riello_UPS_IDR.jpg";
    $achat2->save();
    }
}

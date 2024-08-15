<?php

namespace Database\Seeders;

use App\Models\achat1 as ModelsAchat1;
use Illuminate\Database\Seeder;

class achat1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $achat11= new ModelsAchat1();
        $achat11->nom='Net Power';
        $achat11->description='Idéal pour la protection des PC.
 
  
 
        La série Net Power comprend les modèles 600-2000 VA et utilise la technologie numérique Line Interactive (VI).
        
        La charge est alimentée par le secteur via un AVR pour stabiliser les baisses de tension, les creux et les surtensions, et des filtres EMI pour supprimer les pointes et les transitoires. Lorsque le secteur tombe en panne, la charge est alimentée par londuleur avec une pseudo-onde sinusoïdale pour fournir une durée dexécution suffisante pour larrêt du système informatique à laide du PowerShield³.';
        $achat11->photo='show_Riello_UPS_NPW_front.jpg';
        $achat11->puissance='600 - 2000 VA';
        $achat11->save();
 
        $achat11= new ModelsAchat1();
        $achat11->nom='Vision';
        $achat11->description="Solution idéale pour les utilisateurs les plus exigeants.
 
  
 
        La gamme Vision se décline en modèles de 800 VA à 2000 VA avec technologie numérique sinusoïdale.
        
        La gamme Vision, avec ses options avancées de communication et de connectivité, est la solution idéale pour les installations nécessitant une protection et une polyvalence supérieures dans le système d'alimentation.
        
        Vision offre une protection éprouvée des périphériques réseau, des serveurs et des systèmes de sauvegarde réseau.'";
        $achat11->photo='show_Riello_UPS_VST_front.jpg';
        $achat11->puissance='800 - 2000 VA';
        $achat11->save();
 
        $achat11= new ModelsAchat1();
        $achat11->nom='Vision Rack';
        $achat11->description="Alimentation sans coupure interactive en ligne de 800 VA ou 1100 VA de type montage en rack qui protège contre les pannes de courant et intègre un stabilisateur de tension automatique qui équilibre les creux et les surtensions.
 
        Conçu pour être utilisé avec des serveurs de stockage, des périphériques et du matériel réseau, le Vision Rack dispose d'une prise EnergyShare spéciale qui permet le délestage pour prolonger l'autonomie de la batterie disponible pour des charges plus critiques.";
        $achat11->photo='show_Riello_UPS_VSR_front.jpg';
        $achat11->puissance='800 - 1100 VA';
        $achat11->save();
 
    }
}

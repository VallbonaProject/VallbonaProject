<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PoblacioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('poblacions')->insert([
            'name' => "Aiguamúrcia",
            'comarca_id' => 1,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Alcover",
            'comarca_id' => 1,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Alió",
            'comarca_id' => 1,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Bràfim",
            'comarca_id' => 1,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Cabra del Camp",
            'comarca_id' => 1,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Figuerola del Camp",
            'comarca_id' => 1,
        ]);
        DB::table('poblacions')->insert([
            'name' => "els Garidells",
            'comarca_id' => 1,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Masó",
            'comarca_id' => 1,
        ]);
        DB::table('poblacions')->insert([
            'name' => "el Milà",
            'comarca_id' => 1,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Mont-ral",
            'comarca_id' => 1,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Montferri",
            'comarca_id' => 1,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Nulles",
            'comarca_id' => 1,
        ]);
        DB::table('poblacions')->insert([
            'name' => "el Pla de Santa Maria",
            'comarca_id' => 1,
        ]);
        DB::table('poblacions')->insert([
            'name' => "el Pont d'Armentera",
            'comarca_id' => 1,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Puigpelat",
            'comarca_id' => 1,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Querol",
            'comarca_id' => 1,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Riba",
            'comarca_id' => 1,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Rodonyà",
            'comarca_id' => 1,
        ]);
        DB::table('poblacions')->insert([
            'name' => "el Rourell",
            'comarca_id' => 1,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vallmoll",
            'comarca_id' => 1,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Valls",
            'comarca_id' => 1,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vila-rodona",
            'comarca_id' => 1,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilabella",
            'comarca_id' => 1,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Agullana",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Albanyà",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "l'Armentera",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Avinyonet de Puigventós",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Bàscara",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Biure",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Boadella i les Escaules",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Borrassà",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Cabanelles",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Cabanes",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Cadaqués",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Cantallops",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Capmany",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Castelló d'Empúries",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Cistella",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Colera",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Darnius",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "l'Escala",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Espolla",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "el Far d'Empordà",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Figueres",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Fortià",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Garrigàs",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Garriguella",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Jonquera",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Lladó",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Llançà",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Llers",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Maçanet de Cabrenys",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Masarac",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Mollet de Peralada",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Navata",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Ordis",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Palau de Santa Eulàlia",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Palau-saverdera",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Pau",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Pedret i Marzà",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Peralada",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Pont de Molins",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Pontós",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "el Port de la Selva",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Portbou",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Rabós",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Riumors",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Roses",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Climent Sescebes",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Llorenç de la Muga",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Miquel de Fluvià",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Mori",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Pere Pescador",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Santa Llogaia d'Àlguema",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Camallera i Llampaies Saus",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Selva de Mar",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Siurana",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Terrades",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Torroella de Fluvià",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Vajol",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Ventalló",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vila-sacra",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilabertran",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Viladamat",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilafant",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilajuïga",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilamacolum",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilamalla",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilamaniscle",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilanant",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilaür",
            'comarca_id' => 2,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Avinyonet del Penedès",
            'comarca_id' => 3,
        ]);
        DB::table('poblacions')->insert([
            'name' => "les Cabanyes",
            'comarca_id' => 3,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Castellet i la Gornal",
            'comarca_id' => 3,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Castellví de la Marca",
            'comarca_id' => 3,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Font-rubí",
            'comarca_id' => 3,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Gelida",
            'comarca_id' => 3,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Granada",
            'comarca_id' => 3,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Mediona",
            'comarca_id' => 3,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Olèrdola",
            'comarca_id' => 3,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Olesa de Bonesvalls",
            'comarca_id' => 3,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Pacs del Penedès",
            'comarca_id' => 3,
        ]);
        DB::table('poblacions')->insert([
            'name' => "el Pla del Penedès",
            'comarca_id' => 3,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Pontons",
            'comarca_id' => 3,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Puigdàlber",
            'comarca_id' => 3,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Cugat Sesgarrigues",
            'comarca_id' => 3,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Llorenç d'Hortons",
            'comarca_id' => 3,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Martí Sarroca",
            'comarca_id' => 3,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Pere de Riudebitlles",
            'comarca_id' => 3,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Quintí de Mediona",
            'comarca_id' => 3,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Sadurní d'Anoia",
            'comarca_id' => 3,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Santa Fe del Penedès",
            'comarca_id' => 3,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Santa Margarida i els Monjos",
            'comarca_id' => 3,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Subirats",
            'comarca_id' => 3,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Torrelavit",
            'comarca_id' => 3,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Torrelles de Foix",
            'comarca_id' => 3,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilafranca del Penedès",
            'comarca_id' => 3,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilobí del Penedès",
            'comarca_id' => 3,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Alàs i Cerc",
            'comarca_id' => 4,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Arsèguel",
            'comarca_id' => 4,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Bassella",
            'comarca_id' => 4,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Cabó",
            'comarca_id' => 4,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Cava",
            'comarca_id' => 4,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Coll de Nargó",
            'comarca_id' => 4,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Estamariu",
            'comarca_id' => 4,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Fígols i Alinyà",
            'comarca_id' => 4,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Josa i Tuixén",
            'comarca_id' => 4,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Montferrer i Castellbò",
            'comarca_id' => 4,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Oliana",
            'comarca_id' => 4,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Organyà",
            'comarca_id' => 4,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Peramola",
            'comarca_id' => 4,
        ]);
        DB::table('poblacions')->insert([
            'name' => "el Pont de Bar",
            'comarca_id' => 4,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Ribera d'Urgellet",
            'comarca_id' => 4,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Seu d'Urgell",
            'comarca_id' => 4,
        ]);
        DB::table('poblacions')->insert([
            'name' => "les Valls d'Aguilar",
            'comarca_id' => 4,
        ]);
        DB::table('poblacions')->insert([
            'name' => "les Valls de Valira",
            'comarca_id' => 4,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Vansa i Fórnols",
            'comarca_id' => 4,
        ]);
        DB::table('poblacions')->insert([
            'name' => "el Pont de Suert",
            'comarca_id' => 5,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Vall de Boí",
            'comarca_id' => 5,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilaller",
            'comarca_id' => 5,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Argençola",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Bellprat",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "el Bruc",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Cabrera d'Anoia",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Calaf",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Calonge de Segarra",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Capellades",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Carme",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Castellfollit de Riubregós",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Castellolí",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Copons",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "els Hostalets de Pierola",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Igualada",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Jorba",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Llacuna",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Masquefa",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Montmaneu",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Òdena",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Orpí",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Piera",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Pobla de Claramunt",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "els Prats de Rei",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Pujalt",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Rubió",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Martí de Tous",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Martí Sesgueioles",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Pere Sallavinera",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Santa Margarida de Montbui",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Santa Maria de Miralles",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Torre de Claramunt",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vallbona d'Anoia",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Veciana",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilanova del Camí",
            'comarca_id' => 6,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Aguilar de Segarra",
            'comarca_id' => 7,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Artés",
            'comarca_id' => 7,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Avinyó",
            'comarca_id' => 7,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Balsareny",
            'comarca_id' => 7,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Callús",
            'comarca_id' => 7,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Cardona",
            'comarca_id' => 7,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Castellbell i el Vilar",
            'comarca_id' => 7,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Castellfollit del Boix",
            'comarca_id' => 7,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Castellgalí, Castellnou de Bages",
            'comarca_id' => 7,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Fonollosa",
            'comarca_id' => 7,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Gaià",
            'comarca_id' => 7,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Manresa",
            'comarca_id' => 7,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Marganell",
            'comarca_id' => 7,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Monistrol de Montserrat",
            'comarca_id' => 7,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Mura",
            'comarca_id' => 7,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Navarcles",
            'comarca_id' => 7,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Navàs",
            'comarca_id' => 7,
        ]);
        DB::table('poblacions')->insert([
            'name' => "el Pont de Vilomara i Rocafort",
            'comarca_id' => 7,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Rajadell, Sallent",
            'comarca_id' => 7,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Feliu Sasserra",
            'comarca_id' => 7,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Fruitós de Bages",
            'comarca_id' => 7,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Joan de Vilatorrada",
            'comarca_id' => 7,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Mateu de Bages",
            'comarca_id' => 7,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Salvador de Guardiola",
            'comarca_id' => 7,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Vicenç de Castellet",
            'comarca_id' => 7,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Santpedor",
            'comarca_id' => 7,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Súria",
            'comarca_id' => 7,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Talamanca",
            'comarca_id' => 7,
        ]); 
        DB::table('poblacions')->insert([
            'name' => "l'Albiol",
            'comarca_id' => 8,
        ]);
        DB::table('poblacions')->insert([
            'name' => "l'Aleixar",
            'comarca_id' => 8,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Alforja",
            'comarca_id' => 8,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Almoster",
            'comarca_id' => 8,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Arbolí",
            'comarca_id' => 8,
        ]);
        DB::table('poblacions')->insert([
            'name' => "l'Argentera",
            'comarca_id' => 8,
        ]);
        DB::table('poblacions')->insert([
            'name' => "les Borges del Camp",
            'comarca_id' => 8,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Botarell",
            'comarca_id' => 8,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Cambrils",
            'comarca_id' => 8,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Capafonts",
            'comarca_id' => 8,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Castellvell del Camp",
            'comarca_id' => 8,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Colldejou",
            'comarca_id' => 8,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Duesaigües",
            'comarca_id' => 8,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Febró",
            'comarca_id' => 8,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Maspujols",
            'comarca_id' => 8,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Mont-roig del Camp",
            'comarca_id' => 8,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Montbrió del Camp",
            'comarca_id' => 8,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Prades",
            'comarca_id' => 8,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Pratdip",
            'comarca_id' => 8,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Reus",
            'comarca_id' => 8,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Riudecanyes",
            'comarca_id' => 8,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Riudecols",
            'comarca_id' => 8,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Riudoms",
            'comarca_id' => 8,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Selva del Camp",
            'comarca_id' => 8,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vandellòs i l'Hospitalet de l'Infant",
            'comarca_id' => 8,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilanova d'Escornalbou",
            'comarca_id' => 8,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilaplana",
            'comarca_id' => 8,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vinyols i els Arcs",
            'comarca_id' => 8,
        ]);
        DB::table('poblacions')->insert([
            'name' => "l'Aldea",
            'comarca_id' => 9,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Aldover",
            'comarca_id' => 9,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Alfara de Carles",
            'comarca_id' => 9,
        ]);
        DB::table('poblacions')->insert([
            'name' => "l'Ametlla de Mar",
            'comarca_id' => 9,
        ]);
        DB::table('poblacions')->insert([
            'name' => "l'Ampolla",
            'comarca_id' => 9,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Benifallet",
            'comarca_id' => 9,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Camarles",
            'comarca_id' => 9,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Deltebre",
            'comarca_id' => 9,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Paüls",
            'comarca_id' => 9,
        ]);
        DB::table('poblacions')->insert([
            'name' => "el Perelló",
            'comarca_id' => 9,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Roquetes",
            'comarca_id' => 9,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Tivenys",
            'comarca_id' => 9,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Tortosa",
            'comarca_id' => 9,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Xerta",
            'comarca_id' => 9,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Albons",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Begur",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Bellcaire d'Empordà",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Bisbal d'Empordà",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Calonge i Sant Antoni",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Castell-Platja d'Aro",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Colomers",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Corçà",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Monells i Sant Sadurní de l'Heura Cruïlles",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Foixà",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Fontanilles",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Forallac",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Garrigoles",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Gualta",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Jafre",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Mont-ras",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Palafrugell",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Palamós",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Palau-sator",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Pals",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Parlavà",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Pera",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Regencós",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Rupià",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Feliu de Guíxols",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Santa Cristina d'Aro",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Serra de Daró",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Tallada d'Empordà",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Torrent",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Torroella de Montgrí",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Ullà",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Ullastret",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Ultramort",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vall-llobrega",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Verges",
            'comarca_id' => 10,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilopriu",
            'comarca_id' => 10,
        ]); 
        DB::table('poblacions')->insert([
            'name' => "Abrera",
            'comarca_id' => 11,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Begues",
            'comarca_id' => 11,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Castelldefels",
            'comarca_id' => 11,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Castellví de Rosanes",
            'comarca_id' => 11,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Cervelló",
            'comarca_id' => 11,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Collbató",
            'comarca_id' => 11,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Corbera de Llobregat",
            'comarca_id' => 11,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Cornellà de Llobregat",
            'comarca_id' => 11,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Esparreguera",
            'comarca_id' => 11,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Esplugues de Llobregat",
            'comarca_id' => 11,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Gavà",
            'comarca_id' => 11,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Martorell",
            'comarca_id' => 11,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Molins de Rei",
            'comarca_id' => 11,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Olesa de Montserrat",
            'comarca_id' => 11,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Pallejà",
            'comarca_id' => 11,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Palma de Cervelló",
            'comarca_id' => 11,
        ]);
        DB::table('poblacions')->insert([
            'name' => "el Papiol",
            'comarca_id' => 11,
        ]);
        DB::table('poblacions')->insert([
            'name' => "el Prat de Llobregat",
            'comarca_id' => 11,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Andreu de la Barca",
            'comarca_id' => 11,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Boi de Llobregat",
            'comarca_id' => 11,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Climent de Llobregat",
            'comarca_id' => 11,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Esteve Sesrovires",
            'comarca_id' => 11,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Feliu de Llobregat",
            'comarca_id' => 11,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Joan Despí",
            'comarca_id' => 11,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Just Desvern",
            'comarca_id' => 11,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Vicenç dels Horts",
            'comarca_id' => 11,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Santa Coloma de Cervelló",
            'comarca_id' => 11,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Torrelles de Llobregat",
            'comarca_id' => 11,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vallirana",
            'comarca_id' => 11,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Viladecans",
            'comarca_id' => 11,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Albinyana",
            'comarca_id' => 12,
        ]);
        DB::table('poblacions')->insert([
            'name' => "l'Arboç",
            'comarca_id' => 12,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Banyeres del Penedès",
            'comarca_id' => 12,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Bellvei",
            'comarca_id' => 12,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Bisbal del Penedès",
            'comarca_id' => 12,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Bonastre",
            'comarca_id' => 12,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Calafell",
            'comarca_id' => 12,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Cunit",
            'comarca_id' => 12,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Llorenç del Penedès",
            'comarca_id' => 12,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Masllorenç",
            'comarca_id' => 12,
        ]);
        DB::table('poblacions')->insert([
            'name' => "el Montmell",
            'comarca_id' => 12,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Jaume dels Domenys",
            'comarca_id' => 12,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Santa Oliva",
            'comarca_id' => 12,
        ]);
        DB::table('poblacions')->insert([
            'name' => "el Vendrell",
            'comarca_id' => 12,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Badalona",
            'comarca_id' => 13,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Barcelona",
            'comarca_id' => 13,
        ]);
        DB::table('poblacions')->insert([
            'name' => "l'Hospitalet de Llobregat",
            'comarca_id' => 13,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Adrià de Besòs",
            'comarca_id' => 13,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Santa Coloma de Gramenet",
            'comarca_id' => 13,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Avià",
            'comarca_id' => 14,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Bagà",
            'comarca_id' => 14,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Berga",
            'comarca_id' => 14,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Borredà",
            'comarca_id' => 14,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Capolat",
            'comarca_id' => 14,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Casserres",
            'comarca_id' => 14,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Castell de l'Areny",
            'comarca_id' => 14,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Castellar de n'Hug",
            'comarca_id' => 14,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Castellar del Riu",
            'comarca_id' => 14,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Cercs",
            'comarca_id' => 14,
        ]);
        DB::table('poblacions')->insert([
            'name' => "l'Espunyola",
            'comarca_id' => 14,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Fígols",
            'comarca_id' => 14,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Gironella",
            'comarca_id' => 14,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Gisclareny",
            'comarca_id' => 14,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Gósol",
            'comarca_id' => 14,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Guardiola de Berguedà",
            'comarca_id' => 14,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Montclar",
            'comarca_id' => 14,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Montmajor",
            'comarca_id' => 14,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Nou de Berguedà",
            'comarca_id' => 14,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Olvan",
            'comarca_id' => 14,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Pobla de Lillet",
            'comarca_id' => 14,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Puig-reig",
            'comarca_id' => 14,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Quar",
            'comarca_id' => 14,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sagàs",
            'comarca_id' => 14,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Saldes",
            'comarca_id' => 14,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Jaume de Frontanyà",
            'comarca_id' => 14,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Julià de Cerdanyola",
            'comarca_id' => 14,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Santa Maria de Merlès",
            'comarca_id' => 14,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vallcebre",
            'comarca_id' => 14,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilada",
            'comarca_id' => 14,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Viver i Serrateix",
            'comarca_id' => 14,
        ]); 
        DB::table('poblacions')->insert([
            'name' => "Alp",
            'comarca_id' => 15,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Bellver de Cerdanya",
            'comarca_id' => 15,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Bolvir",
            'comarca_id' => 15,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Das",
            'comarca_id' => 15,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Fontanals de Cerdanya",
            'comarca_id' => 15,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Ger",
            'comarca_id' => 15,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Guils de Cerdanya",
            'comarca_id' => 15,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Isòvol",
            'comarca_id' => 15,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Lles de Cerdanya",
            'comarca_id' => 15,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Llívia",
            'comarca_id' => 15,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Meranges",
            'comarca_id' => 15,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Montellà i Martinet",
            'comarca_id' => 15,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Prats i Sansor",
            'comarca_id' => 15,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Prullans",
            'comarca_id' => 15,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Puigcerdà",
            'comarca_id' => 15,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Riu de Cerdanya",
            'comarca_id' => 15,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Urús",
            'comarca_id' => 15,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Barberà de la Conca",
            'comarca_id' => 16,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Blancafort",
            'comarca_id' => 16,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Conesa",
            'comarca_id' => 16,
        ]);
        DB::table('poblacions')->insert([
            'name' => "l'Espluga de Francolí",
            'comarca_id' => 16,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Forès",
            'comarca_id' => 16,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Llorac",
            'comarca_id' => 16,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Montblanc",
            'comarca_id' => 16,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Passanant i Belltall",
            'comarca_id' => 16,
        ]);
        DB::table('poblacions')->insert([
            'name' => "les Piles",
            'comarca_id' => 16,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Pira",
            'comarca_id' => 16,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Pontils",
            'comarca_id' => 16,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Rocafort de Queralt",
            'comarca_id' => 16,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Santa Coloma de Queralt",
            'comarca_id' => 16,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sarral",
            'comarca_id' => 16,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Savallà del Comtat",
            'comarca_id' => 16,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Senan",
            'comarca_id' => 16,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Solivella",
            'comarca_id' => 16,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vallclara",
            'comarca_id' => 16,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vallfogona de Riucorb",
            'comarca_id' => 16,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilanova de Prades",
            'comarca_id' => 16,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilaverd",
            'comarca_id' => 16,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vimbodí i Poblet",
            'comarca_id' => 16,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Canyelles",
            'comarca_id' => 17,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Cubelles",
            'comarca_id' => 17,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Olivella",
            'comarca_id' => 17,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Pere de Ribes",
            'comarca_id' => 17,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sitges",
            'comarca_id' => 17,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilanova i la Geltrú",
            'comarca_id' => 17,
        ]);
        DB::table('poblacions')->insert([
            'name' => "l'Albagés",
            'comarca_id' => 18,
        ]);
        DB::table('poblacions')->insert([
            'name' => "l'Albi",
            'comarca_id' => 18,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Arbeca",
            'comarca_id' => 18,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Bellaguarda",
            'comarca_id' => 18,
        ]);
        DB::table('poblacions')->insert([
            'name' => "les Borges Blanques",
            'comarca_id' => 18,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Bovera",
            'comarca_id' => 18,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Castelldans",
            'comarca_id' => 18,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Cervià de les Garrigues",
            'comarca_id' => 18,
        ]);
        DB::table('poblacions')->insert([
            'name' => "el Cogul",
            'comarca_id' => 18,
        ]);
        DB::table('poblacions')->insert([
            'name' => "l'Espluga Calba",
            'comarca_id' => 18,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Floresta",
            'comarca_id' => 18,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Fulleda",
            'comarca_id' => 18,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Granadella",
            'comarca_id' => 18,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Granyena de les Garrigues",
            'comarca_id' => 18,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Juncosa",
            'comarca_id' => 18,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Juneda",
            'comarca_id' => 18,
        ]);
        DB::table('poblacions')->insert([
            'name' => "els Omellons",
            'comarca_id' => 18,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Pobla de Cérvoles",
            'comarca_id' => 18,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Puiggròs",
            'comarca_id' => 18,
        ]);
        DB::table('poblacions')->insert([
            'name' => "el Soleràs",
            'comarca_id' => 18,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Tarrés",
            'comarca_id' => 18,
        ]);
        DB::table('poblacions')->insert([
            'name' => "els Torms",
            'comarca_id' => 18,
        ]);
        DB::table('poblacions')->insert([
            'name' => "el Vilosell",
            'comarca_id' => 18,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vinaixa",
            'comarca_id' => 18,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Argelaguer",
            'comarca_id' => 19,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Besalú",
            'comarca_id' => 19,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Beuda",
            'comarca_id' => 19,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Castellfollit de la Roca",
            'comarca_id' => 19,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Maià de Montcal",
            'comarca_id' => 19,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Mieres",
            'comarca_id' => 19,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Montagut i Oix",
            'comarca_id' => 19,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Olot",
            'comarca_id' => 19,
        ]);
        DB::table('poblacions')->insert([
            'name' => "les Planes d'Hostoles",
            'comarca_id' => 19,
        ]);
        DB::table('poblacions')->insert([
            'name' => "les Preses",
            'comarca_id' => 19,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Riudaura",
            'comarca_id' => 19,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sales de Llierca",
            'comarca_id' => 19,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Aniol de Finestres",
            'comarca_id' => 19,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Feliu de Pallerols",
            'comarca_id' => 19,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Ferriol",
            'comarca_id' => 19,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Jaume de Llierca",
            'comarca_id' => 19,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Joan les Fonts",
            'comarca_id' => 19,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Santa Pau",
            'comarca_id' => 19,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Tortellà",
            'comarca_id' => 19,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Vall d'en Bas",
            'comarca_id' => 19,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Vall de Bianya",
            'comarca_id' => 19,
        ]); 
        DB::table('poblacions')->insert([
            'name' => "Aiguaviva",
            'comarca_id' => 20,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Bescanó",
            'comarca_id' => 20,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Bordils",
            'comarca_id' => 20,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Campllong",
            'comarca_id' => 20,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Canet d'Adri",
            'comarca_id' => 20,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Cassà de la Selva",
            'comarca_id' => 20,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Celrà",
            'comarca_id' => 20,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Cervià de Ter",
            'comarca_id' => 20,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Flaçà",
            'comarca_id' => 20,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Fornells de la Selva",
            'comarca_id' => 20,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Girona",
            'comarca_id' => 20,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Juià",
            'comarca_id' => 20,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Llagostera",
            'comarca_id' => 20,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Llambilles",
            'comarca_id' => 20,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Madremanya",
            'comarca_id' => 20,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Quart",
            'comarca_id' => 20,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Salt",
            'comarca_id' => 20,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Andreu Salou",
            'comarca_id' => 20,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Gregori",
            'comarca_id' => 20,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Joan de Mollet",
            'comarca_id' => 20,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Jordi Desvalls",
            'comarca_id' => 20,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Julià de Ramis",
            'comarca_id' => 20,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Martí de Llémena",
            'comarca_id' => 20,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Martí Vell",
            'comarca_id' => 20,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sarrià de Ter",
            'comarca_id' => 20,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilablareix",
            'comarca_id' => 20,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Viladasens",
            'comarca_id' => 20,
        ]); 
        DB::table('poblacions')->insert([
            'name' => "Alella",
            'comarca_id' => 21,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Arenys de Mar",
            'comarca_id' => 21,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Arenys de Munt",
            'comarca_id' => 21,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Argentona",
            'comarca_id' => 21,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Cabrera de Mar",
            'comarca_id' => 21,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Cabrils",
            'comarca_id' => 21,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Caldes d'Estrac",
            'comarca_id' => 21,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Calella",
            'comarca_id' => 21,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Canet de Mar",
            'comarca_id' => 21,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Dosrius",
            'comarca_id' => 21,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Malgrat de Mar",
            'comarca_id' => 21,
        ]);
        DB::table('poblacions')->insert([
            'name' => "el Masnou",
            'comarca_id' => 21,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Mataró",
            'comarca_id' => 21,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Montgat",
            'comarca_id' => 21,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Òrrius",
            'comarca_id' => 21,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Palafolls",
            'comarca_id' => 21,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Pineda de Mar",
            'comarca_id' => 21,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Premià de Dalt",
            'comarca_id' => 21,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Premià de Mar",
            'comarca_id' => 21,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Andreu de Llavaneres",
            'comarca_id' => 21,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Cebrià de Vallalta",
            'comarca_id' => 21,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Iscle de Vallalta",
            'comarca_id' => 21,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Pol de Mar",
            'comarca_id' => 21,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Vicenç de Montalt",
            'comarca_id' => 21,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Santa Susanna",
            'comarca_id' => 21,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Teià",
            'comarca_id' => 21,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Tiana",
            'comarca_id' => 21,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Tordera",
            'comarca_id' => 21,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilassar de Dalt",
            'comarca_id' => 21,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilassar de Mar",
            'comarca_id' => 21,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Alcanar",
            'comarca_id' => 22,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Amposta",
            'comarca_id' => 22,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Freginals",
            'comarca_id' => 22,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Galera",
            'comarca_id' => 22,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Godall",
            'comarca_id' => 22,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Mas de Barberans",
            'comarca_id' => 22,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Masdenverge",
            'comarca_id' => 22,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Ràpita",
            'comarca_id' => 22,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Jaume d'Enveja",
            'comarca_id' => 22,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Santa Bàrbara",
            'comarca_id' => 22,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Sénia",
            'comarca_id' => 22,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Ulldecona",
            'comarca_id' => 22,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Àger",
            'comarca_id' => 23,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Albesa",
            'comarca_id' => 23,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Algerri",
            'comarca_id' => 23,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Alòs de Balaguer",
            'comarca_id' => 23,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Artesa de Segre",
            'comarca_id' => 23,
        ]);
        DB::table('poblacions')->insert([
            'name' => "les Avellanes i Santa Linya",
            'comarca_id' => 23,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Balaguer",
            'comarca_id' => 23,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Baronia de Rialb",
            'comarca_id' => 23,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Bellcaire d'Urgell",
            'comarca_id' => 23,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Bellmunt d'Urgell",
            'comarca_id' => 23,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Cabanabona",
            'comarca_id' => 23,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Camarasa",
            'comarca_id' => 23,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Castelló de Farfanya",
            'comarca_id' => 23,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Cubells",
            'comarca_id' => 23,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Foradada",
            'comarca_id' => 23,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Ivars de Noguera",
            'comarca_id' => 23,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Menàrguens",
            'comarca_id' => 23,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Montgai",
            'comarca_id' => 23,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Oliola",
            'comarca_id' => 23,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Os de Balaguer",
            'comarca_id' => 23,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Penelles",
            'comarca_id' => 23,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Ponts",
            'comarca_id' => 23,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Preixens",
            'comarca_id' => 23,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Sentiu de Sió",
            'comarca_id' => 23,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Térmens",
            'comarca_id' => 23,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Tiurana",
            'comarca_id' => 23,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Torrelameu",
            'comarca_id' => 23,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vallfogona de Balaguer",
            'comarca_id' => 23,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilanova de l'Aguda",
            'comarca_id' => 23,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilanova de Meià",
            'comarca_id' => 23,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Alpens",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Balenyà",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "el Brull",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Calldetenes",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Centelles",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Espinelves",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "l'Esquirol",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Folgueroles",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Gurb",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Lluçà",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Malla",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Manlleu",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "les Masies de Roda",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "les Masies de Voltregà",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Montesquiu",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Muntanyola",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Olost",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Orís",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Oristà",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Perafita",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Prats de Lluçanès",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Roda de Ter",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Rupit i Pruit",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Agustí de Lluçanès",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Bartomeu del Grau",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Boi de Lluçanès",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Hipòlit de Voltregà",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Julià de Vilatorta",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Martí d'Albars",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Martí de Centelles",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Pere de Torelló",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Quirze de Besora",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Sadurní d'Osormort",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Vicenç de Torelló",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Santa Cecília de Voltregà",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Santa Eugènia de Berga",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Santa Eulàlia de Riuprimer",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Santa Maria de Besora",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Seva",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sobremunt",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sora",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Taradell",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Tavèrnoles",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Tavertet",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Tona",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Torelló",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vic",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vidrà",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Viladrau",
            'comarca_id' => 24,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilanova de Sau",
            'comarca_id' => 24,
        ]); 
        DB::table('poblacions')->insert([
            'name' => "Abella de la Conca",
            'comarca_id' => 25,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Castell de Mur",
            'comarca_id' => 25,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Conca de Dalt",
            'comarca_id' => 25,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Gavet de la Conca",
            'comarca_id' => 25,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Isona i Conca Dellà",
            'comarca_id' => 25,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Llimiana",
            'comarca_id' => 25,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Pobla de Segur",
            'comarca_id' => 25,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Salàs de Pallars",
            'comarca_id' => 25,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Esteve de la Sarga",
            'comarca_id' => 25,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sarroca de Bellera",
            'comarca_id' => 25,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Senterada",
            'comarca_id' => 25,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Talarn",
            'comarca_id' => 25,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Torre de Cabdella",
            'comarca_id' => 25,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Tremp",
            'comarca_id' => 25,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Alins",
            'comarca_id' => 26,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Alt Àneu",
            'comarca_id' => 26,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Baix Pallars",
            'comarca_id' => 26,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Espot",
            'comarca_id' => 26,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Esterri d'Àneu",
            'comarca_id' => 26,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Esterri de Cardós",
            'comarca_id' => 26,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Farrera",
            'comarca_id' => 26,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Guingueta d'Àneu",
            'comarca_id' => 26,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Lladorre",
            'comarca_id' => 26,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Llavorsí",
            'comarca_id' => 26,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Rialp",
            'comarca_id' => 26,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Soriguera",
            'comarca_id' => 26,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sort",
            'comarca_id' => 26,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Tírvia",
            'comarca_id' => 26,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vall de Cardós",
            'comarca_id' => 26,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Barbens",
            'comarca_id' => 27,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Bell-lloc d'Urgell",
            'comarca_id' => 27,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Bellvís",
            'comarca_id' => 27,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Castellnou de Seana",
            'comarca_id' => 27,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Fondarella",
            'comarca_id' => 27,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Golmés",
            'comarca_id' => 27,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Ivars d'Urgell",
            'comarca_id' => 27,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Linyola",
            'comarca_id' => 27,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Miralcamp",
            'comarca_id' => 27,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Mollerussa",
            'comarca_id' => 27,
        ]);
        DB::table('poblacions')->insert([
            'name' => "el Palau d'Anglesola",
            'comarca_id' => 27,
        ]);
        DB::table('poblacions')->insert([
            'name' => "el Poal",
            'comarca_id' => 27,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sidamon",
            'comarca_id' => 27,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Torregrossa",
            'comarca_id' => 27,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vila-sana",
            'comarca_id' => 27,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilanova de Bellpuig",
            'comarca_id' => 27,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Banyoles",
            'comarca_id' => 28,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Camós",
            'comarca_id' => 28,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Cornellà del Terri",
            'comarca_id' => 28,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Crespià",
            'comarca_id' => 28,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Esponellà",
            'comarca_id' => 28,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Fontcoberta",
            'comarca_id' => 28,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Palol de Revardit",
            'comarca_id' => 28,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Porqueres",
            'comarca_id' => 28,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Miquel de Campmajor",
            'comarca_id' => 28,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Serinyà",
            'comarca_id' => 28,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilademuls",
            'comarca_id' => 28,
        ]); 
        DB::table('poblacions')->insert([
            'name' => "Bellmunt del Priorat",
            'comarca_id' => 29,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Bisbal de Falset",
            'comarca_id' => 29,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Cabacés",
            'comarca_id' => 29,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Capçanes",
            'comarca_id' => 29,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Cornudella de Montsant",
            'comarca_id' => 29,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Falset",
            'comarca_id' => 29,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Figuera",
            'comarca_id' => 29,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Gratallops",
            'comarca_id' => 29,
        ]);
        DB::table('poblacions')->insert([
            'name' => "els Guiamets",
            'comarca_id' => 29,
        ]);
        DB::table('poblacions')->insert([
            'name' => "el Lloar",
            'comarca_id' => 29,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Marçà",
            'comarca_id' => 29,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Margalef",
            'comarca_id' => 29,
        ]);
        DB::table('poblacions')->insert([
            'name' => "el Masroig",
            'comarca_id' => 29,
        ]);
        DB::table('poblacions')->insert([
            'name' => "el Molar",
            'comarca_id' => 29,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Morera de Montsant",
            'comarca_id' => 29,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Poboleda",
            'comarca_id' => 29,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Porrera",
            'comarca_id' => 29,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Pradell de la Teixeta",
            'comarca_id' => 29,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Torre de Fontaubella",
            'comarca_id' => 29,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Torroja del Priorat",
            'comarca_id' => 29,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Ulldemolins",
            'comarca_id' => 29,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Vilella Alta",
            'comarca_id' => 29,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Vilella Baixa",
            'comarca_id' => 29,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Ascó",
            'comarca_id' => 30,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Benissanet",
            'comarca_id' => 30,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Flix",
            'comarca_id' => 30,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Garcia",
            'comarca_id' => 30,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Ginestar",
            'comarca_id' => 30,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Miravet",
            'comarca_id' => 30,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Móra d'Ebre",
            'comarca_id' => 30,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Móra la Nova",
            'comarca_id' => 30,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Palma d'Ebre",
            'comarca_id' => 30,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Rasquera",
            'comarca_id' => 30,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Riba-roja d'Ebre",
            'comarca_id' => 30,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Tivissa",
            'comarca_id' => 30,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Torre de l'Espanyol",
            'comarca_id' => 30,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vinebre",
            'comarca_id' => 30,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Campdevànol",
            'comarca_id' => 31,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Campelles",
            'comarca_id' => 31,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Camprodon",
            'comarca_id' => 31,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Gombrèn",
            'comarca_id' => 31,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Llanars",
            'comarca_id' => 31,
        ]);
        DB::table('poblacions')->insert([
            'name' => "les Llosses",
            'comarca_id' => 31,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Molló",
            'comarca_id' => 31,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Ogassa",
            'comarca_id' => 31,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Pardines",
            'comarca_id' => 31,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Planoles",
            'comarca_id' => 31,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Queralbs",
            'comarca_id' => 31,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Ribes de Freser",
            'comarca_id' => 31,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Ripoll",
            'comarca_id' => 31,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Joan de les Abadesses",
            'comarca_id' => 31,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Pau de Segúries",
            'comarca_id' => 31,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Setcases",
            'comarca_id' => 31,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Toses",
            'comarca_id' => 31,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vallfogona de Ripollès",
            'comarca_id' => 31,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilallonga de Ter",
            'comarca_id' => 31,
        ]); 
        DB::table('poblacions')->insert([
            'name' => "Biosca",
            'comarca_id' => 32,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Cervera",
            'comarca_id' => 32,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Estaràs",
            'comarca_id' => 32,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Granyanella",
            'comarca_id' => 32,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Granyena de Segarra",
            'comarca_id' => 32,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Guissona",
            'comarca_id' => 32,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Ivorra",
            'comarca_id' => 32,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Massoteres",
            'comarca_id' => 32,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Montoliu de Segarra",
            'comarca_id' => 32,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Montornès de Segarra",
            'comarca_id' => 32,
        ]);
        DB::table('poblacions')->insert([
            'name' => "les Oluges",
            'comarca_id' => 32,
        ]);
        DB::table('poblacions')->insert([
            'name' => "els Plans de Sió",
            'comarca_id' => 32,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Ribera d'Ondara",
            'comarca_id' => 32,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sanaüja",
            'comarca_id' => 32,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Guim de Freixenet",
            'comarca_id' => 32,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Guim de la Plana",
            'comarca_id' => 32,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Ramon",
            'comarca_id' => 32,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Talavera",
            'comarca_id' => 32,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Tarroja de Segarra",
            'comarca_id' => 32,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Torà",
            'comarca_id' => 32,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Torrefeta i Florejacs",
            'comarca_id' => 32,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Aitona",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "els Alamús",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Albatàrrec",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Alcanó",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Alcarràs",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Alcoletge",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Alfarràs",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Alfés",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Alguaire",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Almacelles",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Almatret",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Almenar",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Alpicat",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Artesa de Lleida",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Aspa",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Benavent de Segrià",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Corbins",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Gimenells i el Pla de la Font",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Granja d'Escarp",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Llardecans",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Lleida",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Maials",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Massalcoreig",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Montoliu de Lleida",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Portella",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Puigverd de Lleida",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Rosselló",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sarroca de Lleida",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Seròs",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Soses",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sudanell",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sunyer",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Torre-serona",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Torrebesses",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Torrefarrera",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Torres de Segre",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilanova de la Barca",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilanova de Segrià",
            'comarca_id' => 33,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Amer",
            'comarca_id' => 34,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Anglès",
            'comarca_id' => 34,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Arbúcies",
            'comarca_id' => 34,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Blanes",
            'comarca_id' => 34,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Breda",
            'comarca_id' => 34,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Brunyola i Sant Martí Sapresa",
            'comarca_id' => 34,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Caldes de Malavella",
            'comarca_id' => 34,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Cellera de Ter",
            'comarca_id' => 34,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Fogars de la Selva",
            'comarca_id' => 34,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Hostalric",
            'comarca_id' => 34,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Lloret de Mar",
            'comarca_id' => 34,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Maçanet de la Selva",
            'comarca_id' => 34,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Massanes",
            'comarca_id' => 34,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Osor",
            'comarca_id' => 34,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Riells i Viabrea",
            'comarca_id' => 34,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Riudarenes",
            'comarca_id' => 34,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Riudellots de la Selva",
            'comarca_id' => 34,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Feliu de Buixalleu",
            'comarca_id' => 34,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Hilari Sacalm",
            'comarca_id' => 34,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Julià del Llor i Bonmatí",
            'comarca_id' => 34,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Santa Coloma de Farners",
            'comarca_id' => 34,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sils",
            'comarca_id' => 34,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Susqueda",
            'comarca_id' => 34,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Tossa de Mar",
            'comarca_id' => 34,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vidreres",
            'comarca_id' => 34,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilobí d'Onyar",
            'comarca_id' => 34,
        ]); 
        DB::table('poblacions')->insert([
            'name' => "Castellar de la Ribera",
            'comarca_id' => 35,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Clariana de Cardener",
            'comarca_id' => 35,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Coma i la Pedra",
            'comarca_id' => 35,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Guixers",
            'comarca_id' => 35,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Lladurs
            Llobera",
            'comarca_id' => 35,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Molsosa",
            'comarca_id' => 35,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Navès",
            'comarca_id' => 35,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Odèn",
            'comarca_id' => 35,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Olius",
            'comarca_id' => 35,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Pinell de Solsonès",
            'comarca_id' => 35,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Pinós",
            'comarca_id' => 35,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Riner",
            'comarca_id' => 35,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Llorenç de Morunys",
            'comarca_id' => 35,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Solsona",
            'comarca_id' => 35,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Altafulla",
            'comarca_id' => 36,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Canonja",
            'comarca_id' => 36,
        ]);
        DB::table('poblacions')->insert([
            'name' => "el Catllar",
            'comarca_id' => 36,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Constantí",
            'comarca_id' => 36,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Creixell",
            'comarca_id' => 36,
        ]);
        DB::table('poblacions')->insert([
            'name' => "el Morell",
            'comarca_id' => 36,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Nou de Gaià",
            'comarca_id' => 36,
        ]);
        DB::table('poblacions')->insert([
            'name' => "els Pallaresos",
            'comarca_id' => 36,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Perafort",
            'comarca_id' => 36,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Pobla de Mafumet",
            'comarca_id' => 36,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Pobla de Montornès",
            'comarca_id' => 36,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Renau",
            'comarca_id' => 36,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Riera de Gaià",
            'comarca_id' => 36,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Roda de Berà",
            'comarca_id' => 36,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Salomó",
            'comarca_id' => 36,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Salou",
            'comarca_id' => 36,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Secuita",
            'comarca_id' => 36,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Tarragona",
            'comarca_id' => 36,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Torredembarra",
            'comarca_id' => 36,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vespella de Gaià",
            'comarca_id' => 36,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vila-seca",
            'comarca_id' => 36,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilallonga del Camp",
            'comarca_id' => 36,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Arnes",
            'comarca_id' => 37,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Batea",
            'comarca_id' => 37,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Bot",
            'comarca_id' => 37,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Caseres",
            'comarca_id' => 37,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Corbera d'Ebre",
            'comarca_id' => 37,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Fatarella",
            'comarca_id' => 37,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Gandesa",
            'comarca_id' => 37,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Horta de Sant Joan",
            'comarca_id' => 37,
        ]);
        DB::table('poblacions')->insert([
            'name' => "el Pinell de Brai",
            'comarca_id' => 37,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Pobla de Massaluca",
            'comarca_id' => 37,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Prat de Comte",
            'comarca_id' => 37,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilalba dels Arcs",
            'comarca_id' => 37,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Agramunt",
            'comarca_id' => 38,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Anglesola",
            'comarca_id' => 38,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Belianes",
            'comarca_id' => 38,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Bellpuig",
            'comarca_id' => 38,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Castellserà",
            'comarca_id' => 38,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Ciutadilla",
            'comarca_id' => 38,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Fuliola",
            'comarca_id' => 38,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Guimerà",
            'comarca_id' => 38,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Maldà",
            'comarca_id' => 38,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Nalec",
            'comarca_id' => 38,
        ]);
        DB::table('poblacions')->insert([
            'name' => "els Omells de na Gaia",
            'comarca_id' => 38,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Ossó de Sió",
            'comarca_id' => 38,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Preixana",
            'comarca_id' => 38,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Puigverd d'Agramunt",
            'comarca_id' => 38,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Martí de Riucorb",
            'comarca_id' => 38,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Tàrrega",
            'comarca_id' => 38,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Tornabous",
            'comarca_id' => 38,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vallbona de les Monges",
            'comarca_id' => 38,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Verdú",
            'comarca_id' => 38,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilagrassa",
            'comarca_id' => 38,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Arres",
            'comarca_id' => 39,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Bausen",
            'comarca_id' => 39,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Es Bòrdes",
            'comarca_id' => 39,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Bossòst",
            'comarca_id' => 39,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Canejan",
            'comarca_id' => 39,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Les",
            'comarca_id' => 39,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Naut Aran",
            'comarca_id' => 39,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vielha e Mijaran",
            'comarca_id' => 39,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilamòs",
            'comarca_id' => 39,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Badia del Vallès",
            'comarca_id' => 40,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Barberà del Vallès",
            'comarca_id' => 40,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Castellar del Vallès",
            'comarca_id' => 40,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Castellbisbal",
            'comarca_id' => 40,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Cerdanyola del Vallès",
            'comarca_id' => 40,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Gallifa",
            'comarca_id' => 40,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Matadepera",
            'comarca_id' => 40,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Montcada i Reixac",
            'comarca_id' => 40,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Palau-solità i Plegamans",
            'comarca_id' => 40,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Polinyà",
            'comarca_id' => 40,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Rellinars",
            'comarca_id' => 40,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Ripollet",
            'comarca_id' => 40,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Rubí",
            'comarca_id' => 40,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sabadell",
            'comarca_id' => 40,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Cugat del Vallès",
            'comarca_id' => 40,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Llorenç Savall",
            'comarca_id' => 40,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Quirze del Vallès",
            'comarca_id' => 40,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Santa Perpètua de Mogoda",
            'comarca_id' => 40,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sentmenat",
            'comarca_id' => 40,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Terrassa",
            'comarca_id' => 40,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Ullastrell",
            'comarca_id' => 40,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vacarisses",
            'comarca_id' => 40,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Viladecavalls",
            'comarca_id' => 40,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Aiguafreda",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "l'Ametlla del Vallès",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Bigues i Riells del Fai",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Caldes de Montbui",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Campins",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Canovelles",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Cànoves i Samalús",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Cardedeu",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Figaró-Montmany",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Fogars de Montclús",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "les Franqueses del Vallès",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Garriga",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Granollers",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Gualba",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Llagosta",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Lliçà d'Amunt",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Lliçà de Vall",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Llinars del Vallès",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Martorelles",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Mollet del Vallès",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Montmeló",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Montornès del Vallès",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Montseny",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Parets del Vallès",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "la Roca del Vallès",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Antoni de Vilamajor",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Celoni",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Esteve de Palautordera",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Feliu de Codines",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Fost de Campsentelles",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Pere de Vilamajor",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Santa Eulàlia de Ronçana",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Santa Maria de Martorelles",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Santa Maria de Palautordera",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Tagamanent",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vallgorguina",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vallromanes",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilalba Sasserra",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Vilanova del Vallès",
            'comarca_id' => 41,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Calders",
            'comarca_id' => 42,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Castellcir",
            'comarca_id' => 42,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Castellterçol",
            'comarca_id' => 42,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Collsuspina",
            'comarca_id' => 42,
        ]);
        DB::table('poblacions')->insert([
            'name' => "l'Estany",
            'comarca_id' => 42,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Granera",
            'comarca_id' => 42,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Moià",
            'comarca_id' => 42,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Monistrol de Calders",
            'comarca_id' => 42,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Sant Quirze Safaja",
            'comarca_id' => 42,
        ]);
        DB::table('poblacions')->insert([
            'name' => "Santa Maria d'Oló",
            'comarca_id' => 42,
        ]); 

    }
}
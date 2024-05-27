<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            [
              "id" => 1,
              "name" => "Asunción",
              "department_id" =>  1
            ],
            [
              "id" => 2,
              "name" => "Fuerte Olimpo",
              "department_id" =>  2
            ],
            [
              "id" => 4,
              "name" => "Carmelo Peralta",
              "department_id" =>  2
            ],
            [
              "id" => 3,
              "name" => "Bahia Negra",
              "department_id" =>  2
            ],
            [
              "id" => 5,
              "name" => "Puerto Casado",
              "department_id" =>  2
            ],
            [
              "id" => 13,
              "name" => "Iruña",
              "department_id" =>  3
            ],
            [
              "id" => 26,
              "name" => "Santa Rosa Del Monday",
              "department_id" =>  3
            ],
            [
              "id" => 12,
              "name" => "Hernandarias",
              "department_id" =>  3
            ],
            [
              "id" => 23,
              "name" => "San Cristobal",
              "department_id" =>  3
            ],
            [
              "id" => 21,
              "name" => "Presidente Franco",
              "department_id" =>  3
            ],
            [
              "id" => 27,
              "name" => "Tavapy",
              "department_id" =>  3
            ],
            [
              "id" => 14,
              "name" => "Itakyry",
              "department_id" =>  3
            ],
            [
              "id" => 22,
              "name" => "San Alberto",
              "department_id" =>  3
            ],
            [
              "id" => 25,
              "name" => "Santa Rita",
              "department_id" =>  3
            ],
            [
              "id" => 8,
              "name" => "Ñacunday",
              "department_id" =>  3
            ],
            [
              "id" => 28,
              "name" => "Yguazu",
              "department_id" =>  3
            ],
            [
              "id" => 17,
              "name" => "Mbaracayu",
              "department_id" =>  3
            ],
            [
              "id" => 24,
              "name" => "Santa Fe Del Parana",
              "department_id" =>  3
            ],
            [
              "id" => 16,
              "name" => "Los Cedrales",
              "department_id" =>  3
            ],
            [
              "id" => 19,
              "name" => "Minga Pora",
              "department_id" =>  3
            ],
            [
              "id" => 9,
              "name" => "Domingo Martinez De Irala",
              "department_id" =>  3
            ],
            [
              "id" => 7,
              "name" => "Ciudad Del Este",
              "department_id" =>  3
            ],
            [
              "id" => 11,
              "name" => "Dr. Raul Peña",
              "department_id" =>  3
            ],
            [
              "id" => 20,
              "name" => "Naranjal",
              "department_id" =>  3
            ],
            [
              "id" => 10,
              "name" => "Dr. Juan Leon Mallorquin",
              "department_id" =>  3
            ],
            [
              "id" => 15,
              "name" => "Juan E. O┤leary",
              "department_id" =>  3
            ],
            [
              "id" => 18,
              "name" => "Minga Guazu",
              "department_id" =>  3
            ],
            [
              "id" => 30,
              "name" => "Pedro Juan Caballero",
              "department_id" =>  4
            ],
            [
              "id" => 269,
              "name" => "Bella Vista Norte",
              "department_id" =>  4
            ],
            [
              "id" => 31,
              "name" => "Zanja Pyta",
              "department_id" =>  4
            ],
            [
              "id" => 29,
              "name" => "Capitan Bado",
              "department_id" =>  4
            ],
            [
              "id" => 36,
              "name" => "Loma Plata",
              "department_id" =>  5
            ],
            [
              "id" => 39,
              "name" => "Menno",
              "department_id" =>  5
            ],
            [
              "id" => 34,
              "name" => "Fernhein",
              "department_id" =>  5
            ],
            [
              "id" => 38,
              "name" => "3 De Febrero",
              "department_id" =>  5
            ],
            [
              "id" => 32,
              "name" => "Dr. Pedro P.peña",
              "department_id" =>  5
            ],
            [
              "id" => 37,
              "name" => "Mariscal Estigarribia",
              "department_id" =>  5
            ],
            [
              "id" => 35,
              "name" => "Gral. E. A.garay",
              "department_id" =>  5
            ],
            [
              "id" => 33,
              "name" => "Filadelfia",
              "department_id" =>  5
            ],
            [
              "id" => 40,
              "name" => "Neuland",
              "department_id" =>  5
            ],
            [
              "id" => 45,
              "name" => "Dr. J. Eulogio Estigarribia",
              "department_id" =>  6
            ],
            [
              "id" => 42,
              "name" => "Carayao",
              "department_id" =>  6
            ],
            [
              "id" => 55,
              "name" => "San Joaquin",
              "department_id" =>  6
            ],
            [
              "id" => 56,
              "name" => "San Jose De Los Arroyos",
              "department_id" =>  6
            ],
            [
              "id" => 47,
              "name" => "Jose Domingo Ocampos",
              "department_id" =>  6
            ],
            [
              "id" => 52,
              "name" => "Raul Arsenio Oviedo",
              "department_id" =>  6
            ],
            [
              "id" => 53,
              "name" => "Repatriacion",
              "department_id" =>  6
            ],
            [
              "id" => 58,
              "name" => "Simon Bolivar",
              "department_id" =>  6
            ],
            [
              "id" => 43,
              "name" => "Cecilio Baez",
              "department_id" =>  6
            ],
            [
              "id" => 44,
              "name" => "Coronel Oviedo",
              "department_id" =>  6
            ],
            [
              "id" => 48,
              "name" => "La Pastora",
              "department_id" =>  6
            ],
            [
              "id" => 50,
              "name" => "Nueva Londres",
              "department_id" =>  6
            ],
            [
              "id" => 41,
              "name" => "Caaguazu",
              "department_id" =>  6
            ],
            [
              "id" => 49,
              "name" => "Mariscal Francisco Solano Lope",
              "department_id" =>  6
            ],
            [
              "id" => 54,
              "name" => "R.I. 3 Corrales",
              "department_id" =>  6
            ],
            [
              "id" => 57,
              "name" => "Santa Rosa Del Mbutuy",
              "department_id" =>  6
            ],
            [
              "id" => 260,
              "name" => "Santa Rosa del Mbutuy",
              "department_id" =>  6
            ],
            [
              "id" => 59,
              "name" => "Tembiapora",
              "department_id" =>  6
            ],
            [
              "id" => 51,
              "name" => "Nueva Toledo",
              "department_id" =>  6
            ],
            [
              "id" => 60,
              "name" => "Vaqueria",
              "department_id" =>  6
            ],
            [
              "id" => 61,
              "name" => "Yhu",
              "department_id" =>  6
            ],
            [
              "id" => 46,
              "name" => "Dr. Juan Manuel Frutos",
              "department_id" =>  6
            ],
            [
              "id" => 259,
              "name" => "3 de Febrero",
              "department_id" =>  6
            ],
            [
              "id" => 72,
              "name" => "Yuty",
              "department_id" =>  7
            ],
            [
              "id" => 63,
              "name" => "Abai",
              "department_id" =>  7
            ],
            [
              "id" => 67,
              "name" => "Fulgencio Yegros",
              "department_id" =>  7
            ],
            [
              "id" => 71,
              "name" => "Tavai",
              "department_id" =>  7
            ],
            [
              "id" => 62,
              "name" => "3 De Mayo",
              "department_id" =>  7
            ],
            [
              "id" => 65,
              "name" => "Caazapa",
              "department_id" =>  7
            ],
            [
              "id" => 68,
              "name" => "General Higinio Morinigo",
              "department_id" =>  7
            ],
            [
              "id" => 70,
              "name" => "San Juan Nepomuceno",
              "department_id" =>  7
            ],
            [
              "id" => 69,
              "name" => "Maciel",
              "department_id" =>  7
            ],
            [
              "id" => 64,
              "name" => "Buena Vista",
              "department_id" =>  7
            ],
            [
              "id" => 66,
              "name" => "Dr. Moises Bertoni",
              "department_id" =>  7
            ],
            [
              "id" => 75,
              "name" => "Francisco Caballero Alvarez",
              "department_id" =>  8
            ],
            [
              "id" => 80,
              "name" => "Saltos Del Guaira",
              "department_id" =>  8
            ],
            [
              "id" => 76,
              "name" => "Itanara",
              "department_id" =>  8
            ],
            [
              "id" => 79,
              "name" => "Nueva Esperanza",
              "department_id" =>  8
            ],
            [
              "id" => 84,
              "name" => "Ybyrarobana",
              "department_id" =>  8
            ],
            [
              "id" => 85,
              "name" => "Ypejhu",
              "department_id" =>  8
            ],
            [
              "id" => 78,
              "name" => "Katuete",
              "department_id" =>  8
            ],
            [
              "id" => 261,
              "name" => "Maracana",
              "department_id" =>  8
            ],
            [
              "id" => 73,
              "name" => "Corpus Christi",
              "department_id" =>  8
            ],
            [
              "id" => 81,
              "name" => "Villa Ygatimi",
              "department_id" =>  8
            ],
            [
              "id" => 82,
              "name" => "Yasy Kañy",
              "department_id" =>  8
            ],
            [
              "id" => 83,
              "name" => "Yby Pyta",
              "department_id" =>  8
            ],
            [
              "id" => 77,
              "name" => "La Paloma",
              "department_id" =>  8
            ],
            [
              "id" => 74,
              "name" => "Curuguaty",
              "department_id" =>  8
            ],
            [
              "id" => 97,
              "name" => "Mariano Roque Alonso",
              "department_id" =>  9
            ],
            [
              "id" => 96,
              "name" => "Luque",
              "department_id" =>  9
            ],
            [
              "id" => 90,
              "name" => "Guarambare",
              "department_id" =>  9
            ],
            [
              "id" => 95,
              "name" => "Limpio",
              "department_id" =>  9
            ],
            [
              "id" => 101,
              "name" => "Villa Elisa",
              "department_id" =>  9
            ],
            [
              "id" => 94,
              "name" => "Lambaré",
              "department_id" =>  9
            ],
            [
              "id" => 89,
              "name" => "Fernando De La Mora",
              "department_id" =>  9
            ],
            [
              "id" => 98,
              "name" => "San Antonio",
              "department_id" =>  9
            ],
            [
              "id" => 92,
              "name" => "Itaugua",
              "department_id" =>  9
            ],
            [
              "id" => 99,
              "name" => "Nueva Italia",
              "department_id" =>  9
            ],
            [
              "id" => 86,
              "name" => "Aregua",
              "department_id" =>  9
            ],
            [
              "id" => 102,
              "name" => "Villeta",
              "department_id" =>  9
            ],
            [
              "id" => 104,
              "name" => "Ypane",
              "department_id" =>  9
            ],
            [
              "id" => 103,
              "name" => "Ypacarai",
              "department_id" =>  9
            ],
            [
              "id" => 88,
              "name" => "Ñemby",
              "department_id" =>  9
            ],
            [
              "id" => 93,
              "name" => "J Augusto Saldivar",
              "department_id" =>  9
            ],
            [
              "id" => 87,
              "name" => "Capiata",
              "department_id" =>  9
            ],
            [
              "id" => 91,
              "name" => "Ita",
              "department_id" =>  9
            ],
            [
              "id" => 100,
              "name" => "San Lorenzo",
              "department_id" =>  9
            ],
            [
              "id" => 109,
              "name" => "Loreto",
              "department_id" =>  10
            ],
            [
              "id" => 111,
              "name" => "Paso Barreto",
              "department_id" =>  10
            ],
            [
              "id" => 106,
              "name" => "Belen",
              "department_id" =>  10
            ],
            [
              "id" => 114,
              "name" => "Sgto. Jose Felix Lopez",
              "department_id" =>  10
            ],
            [
              "id" => 105,
              "name" => "Azotey",
              "department_id" =>  10
            ],
            [
              "id" => 116,
              "name" => "Vallemi",
              "department_id" =>  10
            ],
            [
              "id" => 108,
              "name" => "Horqueta",
              "department_id" =>  10
            ],
            [
              "id" => 113,
              "name" => "San Carlos",
              "department_id" =>  10
            ],
            [
              "id" => 115,
              "name" => "Yby Yau",
              "department_id" =>  10
            ],
            [
              "id" => 107,
              "name" => "Concepcion",
              "department_id" =>  10
            ],
            [
              "id" => 262,
              "name" => "Arroyito",
              "department_id" =>  10
            ],
            [
              "id" => 112,
              "name" => "San Lazaro",
              "department_id" =>  10
            ],
            [
              "id" => 110,
              "name" => "San Alfredo",
              "department_id" =>  10
            ],
            [
              "id" => 135,
              "name" => "Santa Elena",
              "department_id" =>  11
            ],
            [
              "id" => 127,
              "name" => "Mbocayaty Del Yhaguy",
              "department_id" =>  11
            ],
            [
              "id" => 118,
              "name" => "Arroyos Y Esteros",
              "department_id" =>  11
            ],
            [
              "id" => 120,
              "name" => "Caacupe",
              "department_id" =>  11
            ],
            [
              "id" => 131,
              "name" => "Primero De Marzo",
              "department_id" =>  11
            ],
            [
              "id" => 132,
              "name" => "San Jose Obrero",
              "department_id" =>  11
            ],
            [
              "id" => 136,
              "name" => "Valenzuela",
              "department_id" =>  11
            ],
            [
              "id" => 123,
              "name" => "Eusebio Ayala",
              "department_id" =>  11
            ],
            [
              "id" => 134,
              "name" => "Tobati",
              "department_id" =>  11
            ],
            [
              "id" => 117,
              "name" => "Altos",
              "department_id" =>  11
            ],
            [
              "id" => 119,
              "name" => "Atyra",
              "department_id" =>  11
            ],
            [
              "id" => 129,
              "name" => "Piribebuy",
              "department_id" =>  11
            ],
            [
              "id" => 133,
              "name" => "San Bernardino",
              "department_id" =>  11
            ],
            [
              "id" => 122,
              "name" => "Emboscada",
              "department_id" =>  11
            ],
            [
              "id" => 128,
              "name" => "Loma Grande",
              "department_id" =>  11
            ],
            [
              "id" => 124,
              "name" => "Isla Pucu",
              "department_id" =>  11
            ],
            [
              "id" => 125,
              "name" => "Itacurubi De La Cordillera",
              "department_id" =>  11
            ],
            [
              "id" => 121,
              "name" => "Caraguatay",
              "department_id" =>  11
            ],
            [
              "id" => 130,
              "name" => "Nueva Colombia",
              "department_id" =>  11
            ],
            [
              "id" => 126,
              "name" => "Juan De Mena",
              "department_id" =>  11
            ],
            [
              "id" => 142,
              "name" => "Felix Perez Cardozo",
              "department_id" =>  12
            ],
            [
              "id" => 140,
              "name" => "Ñumi",
              "department_id" =>  12
            ],
            [
              "id" => 153,
              "name" => "Tebicuary",
              "department_id" =>  12
            ],
            [
              "id" => 154,
              "name" => "Yataity",
              "department_id" =>  12
            ],
            [
              "id" => 139,
              "name" => "Coronel Martinez",
              "department_id" =>  12
            ],
            [
              "id" => 151,
              "name" => "San Salvador",
              "department_id" =>  12
            ],
            [
              "id" => 147,
              "name" => "Mauricio Jose Troche",
              "department_id" =>  12
            ],
            [
              "id" => 150,
              "name" => "Paso Yobai",
              "department_id" =>  12
            ],
            [
              "id" => 145,
              "name" => "Iturbe",
              "department_id" =>  12
            ],
            [
              "id" => 144,
              "name" => "Itape",
              "department_id" =>  12
            ],
            [
              "id" => 152,
              "name" => "Villarrica",
              "department_id" =>  12
            ],
            [
              "id" => 141,
              "name" => "Dr. Bottrell",
              "department_id" =>  12
            ],
            [
              "id" => 143,
              "name" => "General Eugenio A. Garay",
              "department_id" =>  12
            ],
            [
              "id" => 149,
              "name" => "Natalicio Talavera",
              "department_id" =>  12
            ],
            [
              "id" => 148,
              "name" => "Mbocayaty",
              "department_id" =>  12
            ],
            [
              "id" => 146,
              "name" => "Jose Fassardi",
              "department_id" =>  12
            ],
            [
              "id" => 137,
              "name" => "Borja",
              "department_id" =>  12
            ],
            [
              "id" => 138,
              "name" => "Colonia Independencia",
              "department_id" =>  12
            ],
            [
              "id" => 156,
              "name" => "Bella Vista",
              "department_id" =>  13
            ],
            [
              "id" => 163,
              "name" => "Edelira",
              "department_id" =>  13
            ],
            [
              "id" => 167,
              "name" => "General Delgado",
              "department_id" =>  13
            ],
            [
              "id" => 184,
              "name" => "Yatytay",
              "department_id" =>  13
            ],
            [
              "id" => 157,
              "name" => "Cambyreta",
              "department_id" =>  13
            ],
            [
              "id" => 175,
              "name" => "Nueva Alborada",
              "department_id" =>  13
            ],
            [
              "id" => 181,
              "name" => "San Rafael Del Parana",
              "department_id" =>  13
            ],
            [
              "id" => 161,
              "name" => "Coronel Bogado",
              "department_id" =>  13
            ],
            [
              "id" => 178,
              "name" => "San Cosme",
              "department_id" =>  13
            ],
            [
              "id" => 162,
              "name" => "Carmen Del Parana",
              "department_id" =>  13
            ],
            [
              "id" => 164,
              "name" => "Encarnacion",
              "department_id" =>  13
            ],
            [
              "id" => 171,
              "name" => "Leandro Oviedo",
              "department_id" =>  13
            ],
            [
              "id" => 179,
              "name" => "San Pedro Del Parana",
              "department_id" =>  13
            ],
            [
              "id" => 158,
              "name" => "Capitan Meza",
              "department_id" =>  13
            ],
            [
              "id" => 160,
              "name" => "Carlos Antonio Lopez",
              "department_id" =>  13
            ],
            [
              "id" => 169,
              "name" => "Itapua Poty",
              "department_id" =>  13
            ],
            [
              "id" => 170,
              "name" => "Jesus",
              "department_id" =>  13
            ],
            [
              "id" => 174,
              "name" => "Natalio",
              "department_id" =>  13
            ],
            [
              "id" => 180,
              "name" => "San Juan Del Parana",
              "department_id" =>  13
            ],
            [
              "id" => 168,
              "name" => "Hohenau",
              "department_id" =>  13
            ],
            [
              "id" => 172,
              "name" => "Mayor Otaño",
              "department_id" =>  13
            ],
            [
              "id" => 155,
              "name" => "Alto Vera",
              "department_id" =>  13
            ],
            [
              "id" => 159,
              "name" => "Capitan Miranda",
              "department_id" =>  13
            ],
            [
              "id" => 177,
              "name" => "Pirapo",
              "department_id" =>  13
            ],
            [
              "id" => 182,
              "name" => "Tomas Romero Pereira",
              "department_id" =>  13
            ],
            [
              "id" => 166,
              "name" => "General Artigas",
              "department_id" =>  13
            ],
            [
              "id" => 165,
              "name" => "Fram",
              "department_id" =>  13
            ],
            [
              "id" => 176,
              "name" => "Obligado",
              "department_id" =>  13
            ],
            [
              "id" => 183,
              "name" => "Trinidad",
              "department_id" =>  13
            ],
            [
              "id" => 173,
              "name" => "La Paz",
              "department_id" =>  13
            ],
            [
              "id" => 186,
              "name" => "San Ignacio",
              "department_id" =>  14
            ],
            [
              "id" => 190,
              "name" => "Santa Maria",
              "department_id" =>  14
            ],
            [
              "id" => 192,
              "name" => "Santiago",
              "department_id" =>  14
            ],
            [
              "id" => 185,
              "name" => "Ayolas",
              "department_id" =>  14
            ],
            [
              "id" => 193,
              "name" => "Villa Florida",
              "department_id" =>  14
            ],
            [
              "id" => 188,
              "name" => "San Miguel",
              "department_id" =>  14
            ],
            [
              "id" => 266,
              "name" => "Santa Rosa Misiones",
              "department_id" =>  14
            ],
            [
              "id" => 194,
              "name" => "Yabebyry",
              "department_id" =>  14
            ],
            [
              "id" => 187,
              "name" => "San Juan Bautista",
              "department_id" =>  14
            ],
            [
              "id" => 189,
              "name" => "San Patricio",
              "department_id" =>  14
            ],
            [
              "id" => 191,
              "name" => "Santa Rosa",
              "department_id" =>  14
            ],
            [
              "id" => 264,
              "name" => "Santa Rosa de Lima",
              "department_id" =>  14
            ],
            [
              "id" => 195,
              "name" => "Alberdi",
              "department_id" =>  15
            ],
            [
              "id" => 196,
              "name" => "Cerrito",
              "department_id" =>  15
            ],
            [
              "id" => 209,
              "name" => "Villalbin",
              "department_id" =>  15
            ],
            [
              "id" => 203,
              "name" => "Pilar",
              "department_id" =>  15
            ],
            [
              "id" => 201,
              "name" => "Isla Umbu",
              "department_id" =>  15
            ],
            [
              "id" => 206,
              "name" => "Tacuaras",
              "department_id" =>  15
            ],
            [
              "id" => 210,
              "name" => "Villa Oliva",
              "department_id" =>  15
            ],
            [
              "id" => 198,
              "name" => "General Diaz",
              "department_id" =>  15
            ],
            [
              "id" => 204,
              "name" => "Mayor Martinez",
              "department_id" =>  15
            ],
            [
              "id" => 208,
              "name" => "Villa Franca",
              "department_id" =>  15
            ],
            [
              "id" => 207,
              "name" => "San Juan Bautista De Ñeembucu",
              "department_id" =>  15
            ],
            [
              "id" => 199,
              "name" => "Guazu Cua",
              "department_id" =>  15
            ],
            [
              "id" => 200,
              "name" => "Humaita",
              "department_id" =>  15
            ],
            [
              "id" => 202,
              "name" => "Los Laureles",
              "department_id" =>  15
            ],
            [
              "id" => 205,
              "name" => "Paso De Patria",
              "department_id" =>  15
            ],
            [
              "id" => 197,
              "name" => "Desmochados",
              "department_id" =>  15
            ],
            [
              "id" => 219,
              "name" => "Quiindy",
              "department_id" =>  16
            ],
            [
              "id" => 213,
              "name" => "Carapegua",
              "department_id" =>  16
            ],
            [
              "id" => 224,
              "name" => "Tebicuary-mi",
              "department_id" =>  16
            ],
            [
              "id" => 226,
              "name" => "Ybycui",
              "department_id" =>  16
            ],
            [
              "id" => 222,
              "name" => "San Roque Gonzalez",
              "department_id" =>  16
            ],
            [
              "id" => 227,
              "name" => "Yvytimi",
              "department_id" =>  16
            ],
            [
              "id" => 217,
              "name" => "La Colmena",
              "department_id" =>  16
            ],
            [
              "id" => 220,
              "name" => "Pirayu",
              "department_id" =>  16
            ],
            [
              "id" => 216,
              "name" => "Mbuyapey",
              "department_id" =>  16
            ],
            [
              "id" => 215,
              "name" => "General Bernardino Caballero",
              "department_id" =>  16
            ],
            [
              "id" => 211,
              "name" => "Acahay",
              "department_id" =>  16
            ],
            [
              "id" => 268,
              "name" => "Ybytymí",
              "department_id" =>  16
            ],
            [
              "id" => 214,
              "name" => "Escobar",
              "department_id" =>  16
            ],
            [
              "id" => 223,
              "name" => "Sapucai",
              "department_id" =>  16
            ],
            [
              "id" => 221,
              "name" => "Quyquyho",
              "department_id" =>  16
            ],
            [
              "id" => 225,
              "name" => "Yaguaron",
              "department_id" =>  16
            ],
            [
              "id" => 212,
              "name" => "Caapucu",
              "department_id" =>  16
            ],
            [
              "id" => 218,
              "name" => "Paraguari",
              "department_id" =>  16
            ],
            [
              "id" => 258,
              "name" => "María Antonia",
              "department_id" =>  16
            ],
            [
              "id" => 236,
              "name" => "Tte. Esteban Martinez",
              "department_id" =>  17
            ],
            [
              "id" => 228,
              "name" => "Benjamin Aceval",
              "department_id" =>  17
            ],
            [
              "id" => 267,
              "name" => "Campo Aceval",
              "department_id" =>  17
            ],
            [
              "id" => 234,
              "name" => "Tte 1ro Manuel Irala Fernandez",
              "department_id" =>  17
            ],
            [
              "id" => 231,
              "name" => "Pozo Colorado",
              "department_id" =>  17
            ],
            [
              "id" => 232,
              "name" => "Puerto Pinasco",
              "department_id" =>  17
            ],
            [
              "id" => 235,
              "name" => "Villa Hayes",
              "department_id" =>  17
            ],
            [
              "id" => 230,
              "name" => "Jose Falcon",
              "department_id" =>  17
            ],
            [
              "id" => 233,
              "name" => "Nanawa",
              "department_id" =>  17
            ],
            [
              "id" => 229,
              "name" => "General Jose Maria Bruguez",
              "department_id" =>  17
            ],
            [
              "id" => 254,
              "name" => "Union",
              "department_id" =>  18
            ],
            [
              "id" => 240,
              "name" => "Chore",
              "department_id" =>  18
            ],
            [
              "id" => 238,
              "name" => "Antequera",
              "department_id" =>  18
            ],
            [
              "id" => 248,
              "name" => "Nueva Germania",
              "department_id" =>  18
            ],
            [
              "id" => 255,
              "name" => "Yataity Del Norte",
              "department_id" =>  18
            ],
            [
              "id" => 241,
              "name" => "General Elizardo Aquino",
              "department_id" =>  18
            ],
            [
              "id" => 245,
              "name" => "Liberacion",
              "department_id" =>  18
            ],
            [
              "id" => 247,
              "name" => "San Estanislao",
              "department_id" =>  18
            ],
            [
              "id" => 256,
              "name" => "Yryvu Cua",
              "department_id" =>  18
            ],
            [
              "id" => 243,
              "name" => "Guajayvi",
              "department_id" =>  18
            ],
            [
              "id" => 252,
              "name" => "Tacuati",
              "department_id" =>  18
            ],
            [
              "id" => 242,
              "name" => "General Resquin",
              "department_id" =>  18
            ],
            [
              "id" => 249,
              "name" => "San Pablo",
              "department_id" =>  18
            ],
            [
              "id" => 263,
              "name" => "San José del Rosario",
              "department_id" =>  18
            ],
            [
              "id" => 250,
              "name" => "San Pedro Del Ykuamandiyu",
              "department_id" =>  18
            ],
            [
              "id" => 244,
              "name" => "Itacurubi Del Rosario",
              "department_id" =>  18
            ],
            [
              "id" => 246,
              "name" => "Lima",
              "department_id" =>  18
            ],
            [
              "id" => 237,
              "name" => "25 De Diciembre",
              "department_id" =>  18
            ],
            [
              "id" => 239,
              "name" => "Capiibary",
              "department_id" =>  18
            ],
            [
              "id" => 253,
              "name" => "Villa Del Rosario",
              "department_id" =>  18
            ],
            [
              "id" => 251,
              "name" => "Santa Rosa Del Aguaray",
              "department_id" =>  18
            ]
        ];

        DB::table('cities')->insert($cities);
    }
}

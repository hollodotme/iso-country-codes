<?php declare(strict_types=1);

namespace hollodotme\ISO\CountryCodes\Data;

abstract class CountryRecords
{
	private const AF = [
		"Afghanistan",
		"Afghanistan (l')",
		"AF",
		"AFG",
		"004",
	];

	private const AL = [
		"Albania",
		"Albanie (l')",
		"AL",
		"ALB",
		"008",
	];

	private const DZ = [
		"Algeria",
		"Algérie (l')",
		"DZ",
		"DZA",
		"012",
	];

	private const AS = [
		"American Samoa",
		"Samoa américaines (les)",
		"AS",
		"ASM",
		"016",
	];

	private const AD = [
		"Andorra",
		"Andorre (l')",
		"AD",
		"AND",
		"020",
	];

	private const AO = [
		"Angola",
		"Angola (l')",
		"AO",
		"AGO",
		"024",
	];

	private const AI = [
		"Anguilla",
		"Anguilla",
		"AI",
		"AIA",
		"660",
	];

	private const AQ = [
		"Antarctica",
		"Antarctique (l')",
		"AQ",
		"ATA",
		"010",
	];

	private const AG = [
		"Antigua and Barbuda",
		"Antigua-et-Barbuda",
		"AG",
		"ATG",
		"028",
	];

	private const AR = [
		"Argentina",
		"Argentine (l')",
		"AR",
		"ARG",
		"032",
	];

	private const AM = [
		"Armenia",
		"Arménie (l')",
		"AM",
		"ARM",
		"051",
	];

	private const AW = [
		"Aruba",
		"Aruba",
		"AW",
		"ABW",
		"533",
	];

	private const AU = [
		"Australia",
		"Australie (l')",
		"AU",
		"AUS",
		"036",
	];

	private const AT = [
		"Austria",
		"Autriche (l')",
		"AT",
		"AUT",
		"040",
	];

	private const AZ = [
		"Azerbaijan",
		"Azerbaïdjan (l')",
		"AZ",
		"AZE",
		"031",
	];

	private const BS = [
		"Bahamas (the)",
		"Bahamas (les)",
		"BS",
		"BHS",
		"044",
	];

	private const BH = [
		"Bahrain",
		"Bahreïn",
		"BH",
		"BHR",
		"048",
	];

	private const BD = [
		"Bangladesh",
		"Bangladesh (le)",
		"BD",
		"BGD",
		"050",
	];

	private const BB = [
		"Barbados",
		"Barbade (la)",
		"BB",
		"BRB",
		"052",
	];

	private const BY = [
		"Belarus",
		"Bélarus (le)",
		"BY",
		"BLR",
		"112",
	];

	private const BE = [
		"Belgium",
		"Belgique (la)",
		"BE",
		"BEL",
		"056",
	];

	private const BZ = [
		"Belize",
		"Belize (le)",
		"BZ",
		"BLZ",
		"084",
	];

	private const BJ = [
		"Benin",
		"Bénin (le)",
		"BJ",
		"BEN",
		"204",
	];

	private const BM = [
		"Bermuda",
		"Bermudes (les)",
		"BM",
		"BMU",
		"060",
	];

	private const BT = [
		"Bhutan",
		"Bhoutan (le)",
		"BT",
		"BTN",
		"064",
	];

	private const BO = [
		"Bolivia (Plurinational State of)",
		"Bolivie (État plurinational de)",
		"BO",
		"BOL",
		"068",
	];

	private const BQ = [
		"Bonaire, Sint Eustatius and Saba",
		"Bonaire, Saint-Eustache et Saba",
		"BQ",
		"BES",
		"535",
	];

	private const BA = [
		"Bosnia and Herzegovina",
		"Bosnie-Herzégovine (la)",
		"BA",
		"BIH",
		"070",
	];

	private const BW = [
		"Botswana",
		"Botswana (le)",
		"BW",
		"BWA",
		"072",
	];

	private const BV = [
		"Bouvet Island",
		"Bouvet (l'Île)",
		"BV",
		"BVT",
		"074",
	];

	private const BR = [
		"Brazil",
		"Brésil (le)",
		"BR",
		"BRA",
		"076",
	];

	private const IO = [
		"British Indian Ocean Territory (the)",
		"Indien (le Territoire britannique de l'océan)",
		"IO",
		"IOT",
		"086",
	];

	private const BN = [
		"Brunei Darussalam",
		"Brunéi Darussalam (le)",
		"BN",
		"BRN",
		"096",
	];

	private const BG = [
		"Bulgaria",
		"Bulgarie (la)",
		"BG",
		"BGR",
		"100",
	];

	private const BF = [
		"Burkina Faso",
		"Burkina Faso (le)",
		"BF",
		"BFA",
		"854",
	];

	private const BI = [
		"Burundi",
		"Burundi (le)",
		"BI",
		"BDI",
		"108",
	];

	private const CV = [
		"Cabo Verde",
		"Cabo Verde",
		"CV",
		"CPV",
		"132",
	];

	private const KH = [
		"Cambodia",
		"Cambodge (le)",
		"KH",
		"KHM",
		"116",
	];

	private const CM = [
		"Cameroon",
		"Cameroun (le)",
		"CM",
		"CMR",
		"120",
	];

	private const CA = [
		"Canada",
		"Canada (le)",
		"CA",
		"CAN",
		"124",
	];

	private const KY = [
		"Cayman Islands (the)",
		"Caïmans (les Îles)",
		"KY",
		"CYM",
		"136",
	];

	private const CF = [
		"Central African Republic (the)",
		"République centrafricaine (la)",
		"CF",
		"CAF",
		"140",
	];

	private const TD = [
		"Chad",
		"Tchad (le)",
		"TD",
		"TCD",
		"148",
	];

	private const CL = [
		"Chile",
		"Chili (le)",
		"CL",
		"CHL",
		"152",
	];

	private const CN = [
		"China",
		"Chine (la)",
		"CN",
		"CHN",
		"156",
	];

	private const CX = [
		"Christmas Island",
		"Christmas (l'Île)",
		"CX",
		"CXR",
		"162",
	];

	private const CC = [
		"Cocos (Keeling) Islands (the)",
		"Cocos (les Îles)/ Keeling (les Îles)",
		"CC",
		"CCK",
		"166",
	];

	private const CO = [
		"Colombia",
		"Colombie (la)",
		"CO",
		"COL",
		"170",
	];

	private const KM = [
		"Comoros (the)",
		"Comores (les)",
		"KM",
		"COM",
		"174",
	];

	private const CD = [
		"Congo (the Democratic Republic of the)",
		"Congo (la République démocratique du)",
		"CD",
		"COD",
		"180",
	];

	private const CG = [
		"Congo (the)",
		"Congo (le)",
		"CG",
		"COG",
		"178",
	];

	private const CK = [
		"Cook Islands (the)",
		"Cook (les Îles)",
		"CK",
		"COK",
		"184",
	];

	private const CR = [
		"Costa Rica",
		"Costa Rica (le)",
		"CR",
		"CRI",
		"188",
	];

	private const HR = [
		"Croatia",
		"Croatie (la)",
		"HR",
		"HRV",
		"191",
	];

	private const CU = [
		"Cuba",
		"Cuba",
		"CU",
		"CUB",
		"192",
	];

	private const CW = [
		"Curaçao",
		"Curaçao",
		"CW",
		"CUW",
		"531",
	];

	private const CY = [
		"Cyprus",
		"Chypre",
		"CY",
		"CYP",
		"196",
	];

	private const CZ = [
		"Czechia",
		"Tchéquie (la)",
		"CZ",
		"CZE",
		"203",
	];

	private const CI = [
		"Côte d'Ivoire",
		"Côte d'Ivoire (la)",
		"CI",
		"CIV",
		"384",
	];

	private const DK = [
		"Denmark",
		"Danemark (le)",
		"DK",
		"DNK",
		"208",
	];

	private const DJ = [
		"Djibouti",
		"Djibouti",
		"DJ",
		"DJI",
		"262",
	];

	private const DM = [
		"Dominica",
		"Dominique (la)",
		"DM",
		"DMA",
		"212",
	];

	private const DO = [
		"Dominican Republic (the)",
		"dominicaine (la République)",
		"DO",
		"DOM",
		"214",
	];

	private const EC = [
		"Ecuador",
		"Équateur (l')",
		"EC",
		"ECU",
		"218",
	];

	private const EG = [
		"Egypt",
		"Égypte (l')",
		"EG",
		"EGY",
		"818",
	];

	private const SV = [
		"El Salvador",
		"El Salvador",
		"SV",
		"SLV",
		"222",
	];

	private const GQ = [
		"Equatorial Guinea",
		"Guinée équatoriale (la)",
		"GQ",
		"GNQ",
		"226",
	];

	private const ER = [
		"Eritrea",
		"Érythrée (l')",
		"ER",
		"ERI",
		"232",
	];

	private const EE = [
		"Estonia",
		"Estonie (l')",
		"EE",
		"EST",
		"233",
	];

	private const SZ = [
		"Eswatini",
		"Eswatini (l')",
		"SZ",
		"SWZ",
		"748",
	];

	private const ET = [
		"Ethiopia",
		"Éthiopie (l')",
		"ET",
		"ETH",
		"231",
	];

	private const FK = [
		"Falkland Islands (the) [Malvinas]",
		"Falkland (les Îles)/Malouines (les Îles)",
		"FK",
		"FLK",
		"238",
	];

	private const FO = [
		"Faroe Islands (the)",
		"Féroé (les Îles)",
		"FO",
		"FRO",
		"234",
	];

	private const FJ = [
		"Fiji",
		"Fidji (les)",
		"FJ",
		"FJI",
		"242",
	];

	private const FI = [
		"Finland",
		"Finlande (la)",
		"FI",
		"FIN",
		"246",
	];

	private const FR = [
		"France",
		"France (la)",
		"FR",
		"FRA",
		"250",
	];

	private const GF = [
		"French Guiana",
		"Guyane française (la )",
		"GF",
		"GUF",
		"254",
	];

	private const PF = [
		"French Polynesia",
		"Polynésie française (la)",
		"PF",
		"PYF",
		"258",
	];

	private const TF = [
		"French Southern Territories (the)",
		"Terres australes françaises (les)",
		"TF",
		"ATF",
		"260",
	];

	private const GA = [
		"Gabon",
		"Gabon (le)",
		"GA",
		"GAB",
		"266",
	];

	private const GM = [
		"Gambia (the)",
		"Gambie (la)",
		"GM",
		"GMB",
		"270",
	];

	private const GE = [
		"Georgia",
		"Géorgie (la)",
		"GE",
		"GEO",
		"268",
	];

	private const DE = [
		"Germany",
		"Allemagne (l')",
		"DE",
		"DEU",
		"276",
	];

	private const GH = [
		"Ghana",
		"Ghana (le)",
		"GH",
		"GHA",
		"288",
	];

	private const GI = [
		"Gibraltar",
		"Gibraltar",
		"GI",
		"GIB",
		"292",
	];

	private const GR = [
		"Greece",
		"Grèce (la)",
		"GR",
		"GRC",
		"300",
	];

	private const GL = [
		"Greenland",
		"Groenland (le)",
		"GL",
		"GRL",
		"304",
	];

	private const GD = [
		"Grenada",
		"Grenade (la)",
		"GD",
		"GRD",
		"308",
	];

	private const GP = [
		"Guadeloupe",
		"Guadeloupe (la)",
		"GP",
		"GLP",
		"312",
	];

	private const GU = [
		"Guam",
		"Guam",
		"GU",
		"GUM",
		"316",
	];

	private const GT = [
		"Guatemala",
		"Guatemala (le)",
		"GT",
		"GTM",
		"320",
	];

	private const GG = [
		"Guernsey",
		"Guernesey",
		"GG",
		"GGY",
		"831",
	];

	private const GN = [
		"Guinea",
		"Guinée (la)",
		"GN",
		"GIN",
		"324",
	];

	private const GW = [
		"Guinea-Bissau",
		"Guinée-Bissau (la)",
		"GW",
		"GNB",
		"624",
	];

	private const GY = [
		"Guyana",
		"Guyana (le)",
		"GY",
		"GUY",
		"328",
	];

	private const HT = [
		"Haiti",
		"Haïti",
		"HT",
		"HTI",
		"332",
	];

	private const HM = [
		"Heard Island and McDonald Islands",
		"Heard-et-Îles MacDonald (l'Île)",
		"HM",
		"HMD",
		"334",
	];

	private const VA = [
		"Holy See (the)",
		"Saint-Siège (le)",
		"VA",
		"VAT",
		"336",
	];

	private const HN = [
		"Honduras",
		"Honduras (le)",
		"HN",
		"HND",
		"340",
	];

	private const HK = [
		"Hong Kong",
		"Hong Kong",
		"HK",
		"HKG",
		"344",
	];

	private const HU = [
		"Hungary",
		"Hongrie (la)",
		"HU",
		"HUN",
		"348",
	];

	private const IS = [
		"Iceland",
		"Islande (l')",
		"IS",
		"ISL",
		"352",
	];

	private const IN = [
		"India",
		"Inde (l')",
		"IN",
		"IND",
		"356",
	];

	private const ID = [
		"Indonesia",
		"Indonésie (l')",
		"ID",
		"IDN",
		"360",
	];

	private const IR = [
		"Iran (Islamic Republic of)",
		"Iran (République Islamique d')",
		"IR",
		"IRN",
		"364",
	];

	private const IQ = [
		"Iraq",
		"Iraq (l')",
		"IQ",
		"IRQ",
		"368",
	];

	private const IE = [
		"Ireland",
		"Irlande (l')",
		"IE",
		"IRL",
		"372",
	];

	private const IM = [
		"Isle of Man",
		"Île de Man",
		"IM",
		"IMN",
		"833",
	];

	private const IL = [
		"Israel",
		"Israël",
		"IL",
		"ISR",
		"376",
	];

	private const IT = [
		"Italy",
		"Italie (l')",
		"IT",
		"ITA",
		"380",
	];

	private const JM = [
		"Jamaica",
		"Jamaïque (la)",
		"JM",
		"JAM",
		"388",
	];

	private const JP = [
		"Japan",
		"Japon (le)",
		"JP",
		"JPN",
		"392",
	];

	private const JE = [
		"Jersey",
		"Jersey",
		"JE",
		"JEY",
		"832",
	];

	private const JO = [
		"Jordan",
		"Jordanie (la)",
		"JO",
		"JOR",
		"400",
	];

	private const KZ = [
		"Kazakhstan",
		"Kazakhstan (le)",
		"KZ",
		"KAZ",
		"398",
	];

	private const KE = [
		"Kenya",
		"Kenya (le)",
		"KE",
		"KEN",
		"404",
	];

	private const KI = [
		"Kiribati",
		"Kiribati",
		"KI",
		"KIR",
		"296",
	];

	private const KP = [
		"Korea (the Democratic People's Republic of)",
		"Corée (la République populaire démocratique de)",
		"KP",
		"PRK",
		"408",
	];

	private const KR = [
		"Korea (the Republic of)",
		"Corée (la République de)",
		"KR",
		"KOR",
		"410",
	];

	private const KW = [
		"Kuwait",
		"Koweït (le)",
		"KW",
		"KWT",
		"414",
	];

	private const KG = [
		"Kyrgyzstan",
		"Kirghizistan (le)",
		"KG",
		"KGZ",
		"417",
	];

	private const LA = [
		"Lao People's Democratic Republic (the)",
		"Lao (la République démocratique populaire)",
		"LA",
		"LAO",
		"418",
	];

	private const LV = [
		"Latvia",
		"Lettonie (la)",
		"LV",
		"LVA",
		"428",
	];

	private const LB = [
		"Lebanon",
		"Liban (le)",
		"LB",
		"LBN",
		"422",
	];

	private const LS = [
		"Lesotho",
		"Lesotho (le)",
		"LS",
		"LSO",
		"426",
	];

	private const LR = [
		"Liberia",
		"Libéria (le)",
		"LR",
		"LBR",
		"430",
	];

	private const LY = [
		"Libya",
		"Libye (la)",
		"LY",
		"LBY",
		"434",
	];

	private const LI = [
		"Liechtenstein",
		"Liechtenstein (le)",
		"LI",
		"LIE",
		"438",
	];

	private const LT = [
		"Lithuania",
		"Lituanie (la)",
		"LT",
		"LTU",
		"440",
	];

	private const LU = [
		"Luxembourg",
		"Luxembourg (le)",
		"LU",
		"LUX",
		"442",
	];

	private const MO = [
		"Macao",
		"Macao",
		"MO",
		"MAC",
		"446",
	];

	private const MG = [
		"Madagascar",
		"Madagascar",
		"MG",
		"MDG",
		"450",
	];

	private const MW = [
		"Malawi",
		"Malawi (le)",
		"MW",
		"MWI",
		"454",
	];

	private const MY = [
		"Malaysia",
		"Malaisie (la)",
		"MY",
		"MYS",
		"458",
	];

	private const MV = [
		"Maldives",
		"Maldives (les)",
		"MV",
		"MDV",
		"462",
	];

	private const ML = [
		"Mali",
		"Mali (le)",
		"ML",
		"MLI",
		"466",
	];

	private const MT = [
		"Malta",
		"Malte",
		"MT",
		"MLT",
		"470",
	];

	private const MH = [
		"Marshall Islands (the)",
		"Marshall (les Îles)",
		"MH",
		"MHL",
		"584",
	];

	private const MQ = [
		"Martinique",
		"Martinique (la)",
		"MQ",
		"MTQ",
		"474",
	];

	private const MR = [
		"Mauritania",
		"Mauritanie (la)",
		"MR",
		"MRT",
		"478",
	];

	private const MU = [
		"Mauritius",
		"Maurice",
		"MU",
		"MUS",
		"480",
	];

	private const YT = [
		"Mayotte",
		"Mayotte",
		"YT",
		"MYT",
		"175",
	];

	private const MX = [
		"Mexico",
		"Mexique (le)",
		"MX",
		"MEX",
		"484",
	];

	private const FM = [
		"Micronesia (Federated States of)",
		"Micronésie (États fédérés de)",
		"FM",
		"FSM",
		"583",
	];

	private const MD = [
		"Moldova (the Republic of)",
		"Moldova (la République de)",
		"MD",
		"MDA",
		"498",
	];

	private const MC = [
		"Monaco",
		"Monaco",
		"MC",
		"MCO",
		"492",
	];

	private const MN = [
		"Mongolia",
		"Mongolie (la)",
		"MN",
		"MNG",
		"496",
	];

	private const ME = [
		"Montenegro",
		"Monténégro (le)",
		"ME",
		"MNE",
		"499",
	];

	private const MS = [
		"Montserrat",
		"Montserrat",
		"MS",
		"MSR",
		"500",
	];

	private const MA = [
		"Morocco",
		"Maroc (le)",
		"MA",
		"MAR",
		"504",
	];

	private const MZ = [
		"Mozambique",
		"Mozambique (le)",
		"MZ",
		"MOZ",
		"508",
	];

	private const MM = [
		"Myanmar",
		"Myanmar (le)",
		"MM",
		"MMR",
		"104",
	];

	private const NA = [
		"Namibia",
		"Namibie (la)",
		"NA",
		"NAM",
		"516",
	];

	private const NR = [
		"Nauru",
		"Nauru",
		"NR",
		"NRU",
		"520",
	];

	private const NP = [
		"Nepal",
		"Népal (le)",
		"NP",
		"NPL",
		"524",
	];

	private const NL = [
		"Netherlands (the)",
		"Pays-Bas (les)",
		"NL",
		"NLD",
		"528",
	];

	private const NC = [
		"New Caledonia",
		"Nouvelle-Calédonie (la)",
		"NC",
		"NCL",
		"540",
	];

	private const NZ = [
		"New Zealand",
		"Nouvelle-Zélande (la)",
		"NZ",
		"NZL",
		"554",
	];

	private const NI = [
		"Nicaragua",
		"Nicaragua (le)",
		"NI",
		"NIC",
		"558",
	];

	private const NE = [
		"Niger (the)",
		"Niger (le)",
		"NE",
		"NER",
		"562",
	];

	private const NG = [
		"Nigeria",
		"Nigéria (le)",
		"NG",
		"NGA",
		"566",
	];

	private const NU = [
		"Niue",
		"Niue",
		"NU",
		"NIU",
		"570",
	];

	private const NF = [
		"Norfolk Island",
		"Norfolk (l'Île)",
		"NF",
		"NFK",
		"574",
	];

	private const MK = [
		"North Macedonia",
		"Macédoine du Nord (la)",
		"MK",
		"MKD",
		"807",
	];

	private const MP = [
		"Northern Mariana Islands (the)",
		"Mariannes du Nord (les Îles)",
		"MP",
		"MNP",
		"580",
	];

	private const NO = [
		"Norway",
		"Norvège (la)",
		"NO",
		"NOR",
		"578",
	];

	private const OM = [
		"Oman",
		"Oman",
		"OM",
		"OMN",
		"512",
	];

	private const PK = [
		"Pakistan",
		"Pakistan (le)",
		"PK",
		"PAK",
		"586",
	];

	private const PW = [
		"Palau",
		"Palaos (les)",
		"PW",
		"PLW",
		"585",
	];

	private const PS = [
		"Palestine, State of",
		"Palestine, État de",
		"PS",
		"PSE",
		"275",
	];

	private const PA = [
		"Panama",
		"Panama (le)",
		"PA",
		"PAN",
		"591",
	];

	private const PG = [
		"Papua New Guinea",
		"Papouasie-Nouvelle-Guinée (la)",
		"PG",
		"PNG",
		"598",
	];

	private const PY = [
		"Paraguay",
		"Paraguay (le)",
		"PY",
		"PRY",
		"600",
	];

	private const PE = [
		"Peru",
		"Pérou (le)",
		"PE",
		"PER",
		"604",
	];

	private const PH = [
		"Philippines (the)",
		"Philippines (les)",
		"PH",
		"PHL",
		"608",
	];

	private const PN = [
		"Pitcairn",
		"Pitcairn",
		"PN",
		"PCN",
		"612",
	];

	private const PL = [
		"Poland",
		"Pologne (la)",
		"PL",
		"POL",
		"616",
	];

	private const PT = [
		"Portugal",
		"Portugal (le)",
		"PT",
		"PRT",
		"620",
	];

	private const PR = [
		"Puerto Rico",
		"Porto Rico",
		"PR",
		"PRI",
		"630",
	];

	private const QA = [
		"Qatar",
		"Qatar (le)",
		"QA",
		"QAT",
		"634",
	];

	private const RO = [
		"Romania",
		"Roumanie (la)",
		"RO",
		"ROU",
		"642",
	];

	private const RU = [
		"Russian Federation (the)",
		"Russie (la Fédération de)",
		"RU",
		"RUS",
		"643",
	];

	private const RW = [
		"Rwanda",
		"Rwanda (le)",
		"RW",
		"RWA",
		"646",
	];

	private const RE = [
		"Réunion",
		"Réunion (La)",
		"RE",
		"REU",
		"638",
	];

	private const BL = [
		"Saint Barthélemy",
		"Saint-Barthélemy",
		"BL",
		"BLM",
		"652",
	];

	private const SH = [
		"Saint Helena, Ascension and Tristan da Cunha",
		"Sainte-Hélène, Ascension et Tristan da Cunha",
		"SH",
		"SHN",
		"654",
	];

	private const KN = [
		"Saint Kitts and Nevis",
		"Saint-Kitts-et-Nevis",
		"KN",
		"KNA",
		"659",
	];

	private const LC = [
		"Saint Lucia",
		"Sainte-Lucie",
		"LC",
		"LCA",
		"662",
	];

	private const MF = [
		"Saint Martin (French part)",
		"Saint-Martin (partie française)",
		"MF",
		"MAF",
		"663",
	];

	private const PM = [
		"Saint Pierre and Miquelon",
		"Saint-Pierre-et-Miquelon",
		"PM",
		"SPM",
		"666",
	];

	private const VC = [
		"Saint Vincent and the Grenadines",
		"Saint-Vincent-et-les Grenadines",
		"VC",
		"VCT",
		"670",
	];

	private const WS = [
		"Samoa",
		"Samoa (le)",
		"WS",
		"WSM",
		"882",
	];

	private const SM = [
		"San Marino",
		"Saint-Marin",
		"SM",
		"SMR",
		"674",
	];

	private const ST = [
		"Sao Tome and Principe",
		"Sao Tomé-et-Principe",
		"ST",
		"STP",
		"678",
	];

	private const SA = [
		"Saudi Arabia",
		"Arabie saoudite (l')",
		"SA",
		"SAU",
		"682",
	];

	private const SN = [
		"Senegal",
		"Sénégal (le)",
		"SN",
		"SEN",
		"686",
	];

	private const RS = [
		"Serbia",
		"Serbie (la)",
		"RS",
		"SRB",
		"688",
	];

	private const SC = [
		"Seychelles",
		"Seychelles (les)",
		"SC",
		"SYC",
		"690",
	];

	private const SL = [
		"Sierra Leone",
		"Sierra Leone (la)",
		"SL",
		"SLE",
		"694",
	];

	private const SG = [
		"Singapore",
		"Singapour",
		"SG",
		"SGP",
		"702",
	];

	private const SX = [
		"Sint Maarten (Dutch part)",
		"Saint-Martin (partie néerlandaise)",
		"SX",
		"SXM",
		"534",
	];

	private const SK = [
		"Slovakia",
		"Slovaquie (la)",
		"SK",
		"SVK",
		"703",
	];

	private const SI = [
		"Slovenia",
		"Slovénie (la)",
		"SI",
		"SVN",
		"705",
	];

	private const SB = [
		"Solomon Islands",
		"Salomon (les Îles)",
		"SB",
		"SLB",
		"090",
	];

	private const SO = [
		"Somalia",
		"Somalie (la)",
		"SO",
		"SOM",
		"706",
	];

	private const ZA = [
		"South Africa",
		"Afrique du Sud (l')",
		"ZA",
		"ZAF",
		"710",
	];

	private const GS = [
		"South Georgia and the South Sandwich Islands",
		"Géorgie du Sud-et-les Îles Sandwich du Sud (la)",
		"GS",
		"SGS",
		"239",
	];

	private const SS = [
		"South Sudan",
		"Soudan du Sud (le)",
		"SS",
		"SSD",
		"728",
	];

	private const ES = [
		"Spain",
		"Espagne (l')",
		"ES",
		"ESP",
		"724",
	];

	private const LK = [
		"Sri Lanka",
		"Sri Lanka",
		"LK",
		"LKA",
		"144",
	];

	private const SD = [
		"Sudan (the)",
		"Soudan (le)",
		"SD",
		"SDN",
		"729",
	];

	private const SR = [
		"Suriname",
		"Suriname (le)",
		"SR",
		"SUR",
		"740",
	];

	private const SJ = [
		"Svalbard and Jan Mayen",
		"Svalbard et l'Île Jan Mayen (le)",
		"SJ",
		"SJM",
		"744",
	];

	private const SE = [
		"Sweden",
		"Suède (la)",
		"SE",
		"SWE",
		"752",
	];

	private const CH = [
		"Switzerland",
		"Suisse (la)",
		"CH",
		"CHE",
		"756",
	];

	private const SY = [
		"Syrian Arab Republic (the)",
		"République arabe syrienne (la)",
		"SY",
		"SYR",
		"760",
	];

	private const TW = [
		"Taiwan (Province of China)",
		"Taïwan (Province de Chine)",
		"TW",
		"TWN",
		"158",
	];

	private const TJ = [
		"Tajikistan",
		"Tadjikistan (le)",
		"TJ",
		"TJK",
		"762",
	];

	private const TZ = [
		"Tanzania, the United Republic of",
		"Tanzanie (la République-Unie de)",
		"TZ",
		"TZA",
		"834",
	];

	private const TH = [
		"Thailand",
		"Thaïlande (la)",
		"TH",
		"THA",
		"764",
	];

	private const TL = [
		"Timor-Leste",
		"Timor-Leste (le)",
		"TL",
		"TLS",
		"626",
	];

	private const TG = [
		"Togo",
		"Togo (le)",
		"TG",
		"TGO",
		"768",
	];

	private const TK = [
		"Tokelau",
		"Tokelau (les)",
		"TK",
		"TKL",
		"772",
	];

	private const TO = [
		"Tonga",
		"Tonga (les)",
		"TO",
		"TON",
		"776",
	];

	private const TT = [
		"Trinidad and Tobago",
		"Trinité-et-Tobago (la)",
		"TT",
		"TTO",
		"780",
	];

	private const TN = [
		"Tunisia",
		"Tunisie (la)",
		"TN",
		"TUN",
		"788",
	];

	private const TR = [
		"Turkey",
		"Turquie (la)",
		"TR",
		"TUR",
		"792",
	];

	private const TM = [
		"Turkmenistan",
		"Turkménistan (le)",
		"TM",
		"TKM",
		"795",
	];

	private const TC = [
		"Turks and Caicos Islands (the)",
		"Turks-et-Caïcos (les Îles)",
		"TC",
		"TCA",
		"796",
	];

	private const TV = [
		"Tuvalu",
		"Tuvalu (les)",
		"TV",
		"TUV",
		"798",
	];

	private const UG = [
		"Uganda",
		"Ouganda (l')",
		"UG",
		"UGA",
		"800",
	];

	private const UA = [
		"Ukraine",
		"Ukraine (l')",
		"UA",
		"UKR",
		"804",
	];

	private const AE = [
		"United Arab Emirates (the)",
		"Émirats arabes unis (les)",
		"AE",
		"ARE",
		"784",
	];

	private const GB = [
		"United Kingdom of Great Britain and Northern Ireland (the)",
		"Royaume-Uni de Grande-Bretagne et d'Irlande du Nord (le)",
		"GB",
		"GBR",
		"826",
	];

	private const UM = [
		"United States Minor Outlying Islands (the)",
		"Îles mineures éloignées des États-Unis (les)",
		"UM",
		"UMI",
		"581",
	];

	private const US = [
		"United States of America (the)",
		"États-Unis d'Amérique (les)",
		"US",
		"USA",
		"840",
	];

	private const UY = [
		"Uruguay",
		"Uruguay (l')",
		"UY",
		"URY",
		"858",
	];

	private const UZ = [
		"Uzbekistan",
		"Ouzbékistan (l')",
		"UZ",
		"UZB",
		"860",
	];

	private const VU = [
		"Vanuatu",
		"Vanuatu (le)",
		"VU",
		"VUT",
		"548",
	];

	private const VE = [
		"Venezuela (Bolivarian Republic of)",
		"Venezuela (République bolivarienne du)",
		"VE",
		"VEN",
		"862",
	];

	private const VN = [
		"Viet Nam",
		"Viet Nam (le)",
		"VN",
		"VNM",
		"704",
	];

	private const VG = [
		"Virgin Islands (British)",
		"Vierges britanniques (les Îles)",
		"VG",
		"VGB",
		"092",
	];

	private const VI = [
		"Virgin Islands (U.S.)",
		"Vierges des États-Unis (les Îles)",
		"VI",
		"VIR",
		"850",
	];

	private const WF = [
		"Wallis and Futuna",
		"Wallis-et-Futuna",
		"WF",
		"WLF",
		"876",
	];

	private const EH = [
		"Western Sahara*",
		"Sahara occidental (le)*",
		"EH",
		"ESH",
		"732",
	];

	private const YE = [
		"Yemen",
		"Yémen (le)",
		"YE",
		"YEM",
		"887",
	];

	private const ZM = [
		"Zambia",
		"Zambie (la)",
		"ZM",
		"ZMB",
		"894",
	];

	private const ZW = [
		"Zimbabwe",
		"Zimbabwe (le)",
		"ZW",
		"ZWE",
		"716",
	];

	private const AX = [
		"Åland Islands",
		"Åland(les Îles)",
		"AX",
		"ALA",
		"248",
	];

	private const ALPHA2_MAP = [
		'AF' => self::AF,
		'AL' => self::AL,
		'DZ' => self::DZ,
		'AS' => self::AS,
		'AD' => self::AD,
		'AO' => self::AO,
		'AI' => self::AI,
		'AQ' => self::AQ,
		'AG' => self::AG,
		'AR' => self::AR,
		'AM' => self::AM,
		'AW' => self::AW,
		'AU' => self::AU,
		'AT' => self::AT,
		'AZ' => self::AZ,
		'BS' => self::BS,
		'BH' => self::BH,
		'BD' => self::BD,
		'BB' => self::BB,
		'BY' => self::BY,
		'BE' => self::BE,
		'BZ' => self::BZ,
		'BJ' => self::BJ,
		'BM' => self::BM,
		'BT' => self::BT,
		'BO' => self::BO,
		'BQ' => self::BQ,
		'BA' => self::BA,
		'BW' => self::BW,
		'BV' => self::BV,
		'BR' => self::BR,
		'IO' => self::IO,
		'BN' => self::BN,
		'BG' => self::BG,
		'BF' => self::BF,
		'BI' => self::BI,
		'CV' => self::CV,
		'KH' => self::KH,
		'CM' => self::CM,
		'CA' => self::CA,
		'KY' => self::KY,
		'CF' => self::CF,
		'TD' => self::TD,
		'CL' => self::CL,
		'CN' => self::CN,
		'CX' => self::CX,
		'CC' => self::CC,
		'CO' => self::CO,
		'KM' => self::KM,
		'CD' => self::CD,
		'CG' => self::CG,
		'CK' => self::CK,
		'CR' => self::CR,
		'HR' => self::HR,
		'CU' => self::CU,
		'CW' => self::CW,
		'CY' => self::CY,
		'CZ' => self::CZ,
		'CI' => self::CI,
		'DK' => self::DK,
		'DJ' => self::DJ,
		'DM' => self::DM,
		'DO' => self::DO,
		'EC' => self::EC,
		'EG' => self::EG,
		'SV' => self::SV,
		'GQ' => self::GQ,
		'ER' => self::ER,
		'EE' => self::EE,
		'SZ' => self::SZ,
		'ET' => self::ET,
		'FK' => self::FK,
		'FO' => self::FO,
		'FJ' => self::FJ,
		'FI' => self::FI,
		'FR' => self::FR,
		'GF' => self::GF,
		'PF' => self::PF,
		'TF' => self::TF,
		'GA' => self::GA,
		'GM' => self::GM,
		'GE' => self::GE,
		'DE' => self::DE,
		'GH' => self::GH,
		'GI' => self::GI,
		'GR' => self::GR,
		'GL' => self::GL,
		'GD' => self::GD,
		'GP' => self::GP,
		'GU' => self::GU,
		'GT' => self::GT,
		'GG' => self::GG,
		'GN' => self::GN,
		'GW' => self::GW,
		'GY' => self::GY,
		'HT' => self::HT,
		'HM' => self::HM,
		'VA' => self::VA,
		'HN' => self::HN,
		'HK' => self::HK,
		'HU' => self::HU,
		'IS' => self::IS,
		'IN' => self::IN,
		'ID' => self::ID,
		'IR' => self::IR,
		'IQ' => self::IQ,
		'IE' => self::IE,
		'IM' => self::IM,
		'IL' => self::IL,
		'IT' => self::IT,
		'JM' => self::JM,
		'JP' => self::JP,
		'JE' => self::JE,
		'JO' => self::JO,
		'KZ' => self::KZ,
		'KE' => self::KE,
		'KI' => self::KI,
		'KP' => self::KP,
		'KR' => self::KR,
		'KW' => self::KW,
		'KG' => self::KG,
		'LA' => self::LA,
		'LV' => self::LV,
		'LB' => self::LB,
		'LS' => self::LS,
		'LR' => self::LR,
		'LY' => self::LY,
		'LI' => self::LI,
		'LT' => self::LT,
		'LU' => self::LU,
		'MO' => self::MO,
		'MG' => self::MG,
		'MW' => self::MW,
		'MY' => self::MY,
		'MV' => self::MV,
		'ML' => self::ML,
		'MT' => self::MT,
		'MH' => self::MH,
		'MQ' => self::MQ,
		'MR' => self::MR,
		'MU' => self::MU,
		'YT' => self::YT,
		'MX' => self::MX,
		'FM' => self::FM,
		'MD' => self::MD,
		'MC' => self::MC,
		'MN' => self::MN,
		'ME' => self::ME,
		'MS' => self::MS,
		'MA' => self::MA,
		'MZ' => self::MZ,
		'MM' => self::MM,
		'NA' => self::NA,
		'NR' => self::NR,
		'NP' => self::NP,
		'NL' => self::NL,
		'NC' => self::NC,
		'NZ' => self::NZ,
		'NI' => self::NI,
		'NE' => self::NE,
		'NG' => self::NG,
		'NU' => self::NU,
		'NF' => self::NF,
		'MK' => self::MK,
		'MP' => self::MP,
		'NO' => self::NO,
		'OM' => self::OM,
		'PK' => self::PK,
		'PW' => self::PW,
		'PS' => self::PS,
		'PA' => self::PA,
		'PG' => self::PG,
		'PY' => self::PY,
		'PE' => self::PE,
		'PH' => self::PH,
		'PN' => self::PN,
		'PL' => self::PL,
		'PT' => self::PT,
		'PR' => self::PR,
		'QA' => self::QA,
		'RO' => self::RO,
		'RU' => self::RU,
		'RW' => self::RW,
		'RE' => self::RE,
		'BL' => self::BL,
		'SH' => self::SH,
		'KN' => self::KN,
		'LC' => self::LC,
		'MF' => self::MF,
		'PM' => self::PM,
		'VC' => self::VC,
		'WS' => self::WS,
		'SM' => self::SM,
		'ST' => self::ST,
		'SA' => self::SA,
		'SN' => self::SN,
		'RS' => self::RS,
		'SC' => self::SC,
		'SL' => self::SL,
		'SG' => self::SG,
		'SX' => self::SX,
		'SK' => self::SK,
		'SI' => self::SI,
		'SB' => self::SB,
		'SO' => self::SO,
		'ZA' => self::ZA,
		'GS' => self::GS,
		'SS' => self::SS,
		'ES' => self::ES,
		'LK' => self::LK,
		'SD' => self::SD,
		'SR' => self::SR,
		'SJ' => self::SJ,
		'SE' => self::SE,
		'CH' => self::CH,
		'SY' => self::SY,
		'TW' => self::TW,
		'TJ' => self::TJ,
		'TZ' => self::TZ,
		'TH' => self::TH,
		'TL' => self::TL,
		'TG' => self::TG,
		'TK' => self::TK,
		'TO' => self::TO,
		'TT' => self::TT,
		'TN' => self::TN,
		'TR' => self::TR,
		'TM' => self::TM,
		'TC' => self::TC,
		'TV' => self::TV,
		'UG' => self::UG,
		'UA' => self::UA,
		'AE' => self::AE,
		'GB' => self::GB,
		'UM' => self::UM,
		'US' => self::US,
		'UY' => self::UY,
		'UZ' => self::UZ,
		'VU' => self::VU,
		'VE' => self::VE,
		'VN' => self::VN,
		'VG' => self::VG,
		'VI' => self::VI,
		'WF' => self::WF,
		'EH' => self::EH,
		'YE' => self::YE,
		'ZM' => self::ZM,
		'ZW' => self::ZW,
		'AX' => self::AX,
	];

	private const ALPHA3_MAP = [
		'AFG' => self::AF,
		'ALB' => self::AL,
		'DZA' => self::DZ,
		'ASM' => self::AS,
		'AND' => self::AD,
		'AGO' => self::AO,
		'AIA' => self::AI,
		'ATA' => self::AQ,
		'ATG' => self::AG,
		'ARG' => self::AR,
		'ARM' => self::AM,
		'ABW' => self::AW,
		'AUS' => self::AU,
		'AUT' => self::AT,
		'AZE' => self::AZ,
		'BHS' => self::BS,
		'BHR' => self::BH,
		'BGD' => self::BD,
		'BRB' => self::BB,
		'BLR' => self::BY,
		'BEL' => self::BE,
		'BLZ' => self::BZ,
		'BEN' => self::BJ,
		'BMU' => self::BM,
		'BTN' => self::BT,
		'BOL' => self::BO,
		'BES' => self::BQ,
		'BIH' => self::BA,
		'BWA' => self::BW,
		'BVT' => self::BV,
		'BRA' => self::BR,
		'IOT' => self::IO,
		'BRN' => self::BN,
		'BGR' => self::BG,
		'BFA' => self::BF,
		'BDI' => self::BI,
		'CPV' => self::CV,
		'KHM' => self::KH,
		'CMR' => self::CM,
		'CAN' => self::CA,
		'CYM' => self::KY,
		'CAF' => self::CF,
		'TCD' => self::TD,
		'CHL' => self::CL,
		'CHN' => self::CN,
		'CXR' => self::CX,
		'CCK' => self::CC,
		'COL' => self::CO,
		'COM' => self::KM,
		'COD' => self::CD,
		'COG' => self::CG,
		'COK' => self::CK,
		'CRI' => self::CR,
		'HRV' => self::HR,
		'CUB' => self::CU,
		'CUW' => self::CW,
		'CYP' => self::CY,
		'CZE' => self::CZ,
		'CIV' => self::CI,
		'DNK' => self::DK,
		'DJI' => self::DJ,
		'DMA' => self::DM,
		'DOM' => self::DO,
		'ECU' => self::EC,
		'EGY' => self::EG,
		'SLV' => self::SV,
		'GNQ' => self::GQ,
		'ERI' => self::ER,
		'EST' => self::EE,
		'SWZ' => self::SZ,
		'ETH' => self::ET,
		'FLK' => self::FK,
		'FRO' => self::FO,
		'FJI' => self::FJ,
		'FIN' => self::FI,
		'FRA' => self::FR,
		'GUF' => self::GF,
		'PYF' => self::PF,
		'ATF' => self::TF,
		'GAB' => self::GA,
		'GMB' => self::GM,
		'GEO' => self::GE,
		'DEU' => self::DE,
		'GHA' => self::GH,
		'GIB' => self::GI,
		'GRC' => self::GR,
		'GRL' => self::GL,
		'GRD' => self::GD,
		'GLP' => self::GP,
		'GUM' => self::GU,
		'GTM' => self::GT,
		'GGY' => self::GG,
		'GIN' => self::GN,
		'GNB' => self::GW,
		'GUY' => self::GY,
		'HTI' => self::HT,
		'HMD' => self::HM,
		'VAT' => self::VA,
		'HND' => self::HN,
		'HKG' => self::HK,
		'HUN' => self::HU,
		'ISL' => self::IS,
		'IND' => self::IN,
		'IDN' => self::ID,
		'IRN' => self::IR,
		'IRQ' => self::IQ,
		'IRL' => self::IE,
		'IMN' => self::IM,
		'ISR' => self::IL,
		'ITA' => self::IT,
		'JAM' => self::JM,
		'JPN' => self::JP,
		'JEY' => self::JE,
		'JOR' => self::JO,
		'KAZ' => self::KZ,
		'KEN' => self::KE,
		'KIR' => self::KI,
		'PRK' => self::KP,
		'KOR' => self::KR,
		'KWT' => self::KW,
		'KGZ' => self::KG,
		'LAO' => self::LA,
		'LVA' => self::LV,
		'LBN' => self::LB,
		'LSO' => self::LS,
		'LBR' => self::LR,
		'LBY' => self::LY,
		'LIE' => self::LI,
		'LTU' => self::LT,
		'LUX' => self::LU,
		'MAC' => self::MO,
		'MDG' => self::MG,
		'MWI' => self::MW,
		'MYS' => self::MY,
		'MDV' => self::MV,
		'MLI' => self::ML,
		'MLT' => self::MT,
		'MHL' => self::MH,
		'MTQ' => self::MQ,
		'MRT' => self::MR,
		'MUS' => self::MU,
		'MYT' => self::YT,
		'MEX' => self::MX,
		'FSM' => self::FM,
		'MDA' => self::MD,
		'MCO' => self::MC,
		'MNG' => self::MN,
		'MNE' => self::ME,
		'MSR' => self::MS,
		'MAR' => self::MA,
		'MOZ' => self::MZ,
		'MMR' => self::MM,
		'NAM' => self::NA,
		'NRU' => self::NR,
		'NPL' => self::NP,
		'NLD' => self::NL,
		'NCL' => self::NC,
		'NZL' => self::NZ,
		'NIC' => self::NI,
		'NER' => self::NE,
		'NGA' => self::NG,
		'NIU' => self::NU,
		'NFK' => self::NF,
		'MKD' => self::MK,
		'MNP' => self::MP,
		'NOR' => self::NO,
		'OMN' => self::OM,
		'PAK' => self::PK,
		'PLW' => self::PW,
		'PSE' => self::PS,
		'PAN' => self::PA,
		'PNG' => self::PG,
		'PRY' => self::PY,
		'PER' => self::PE,
		'PHL' => self::PH,
		'PCN' => self::PN,
		'POL' => self::PL,
		'PRT' => self::PT,
		'PRI' => self::PR,
		'QAT' => self::QA,
		'ROU' => self::RO,
		'RUS' => self::RU,
		'RWA' => self::RW,
		'REU' => self::RE,
		'BLM' => self::BL,
		'SHN' => self::SH,
		'KNA' => self::KN,
		'LCA' => self::LC,
		'MAF' => self::MF,
		'SPM' => self::PM,
		'VCT' => self::VC,
		'WSM' => self::WS,
		'SMR' => self::SM,
		'STP' => self::ST,
		'SAU' => self::SA,
		'SEN' => self::SN,
		'SRB' => self::RS,
		'SYC' => self::SC,
		'SLE' => self::SL,
		'SGP' => self::SG,
		'SXM' => self::SX,
		'SVK' => self::SK,
		'SVN' => self::SI,
		'SLB' => self::SB,
		'SOM' => self::SO,
		'ZAF' => self::ZA,
		'SGS' => self::GS,
		'SSD' => self::SS,
		'ESP' => self::ES,
		'LKA' => self::LK,
		'SDN' => self::SD,
		'SUR' => self::SR,
		'SJM' => self::SJ,
		'SWE' => self::SE,
		'CHE' => self::CH,
		'SYR' => self::SY,
		'TWN' => self::TW,
		'TJK' => self::TJ,
		'TZA' => self::TZ,
		'THA' => self::TH,
		'TLS' => self::TL,
		'TGO' => self::TG,
		'TKL' => self::TK,
		'TON' => self::TO,
		'TTO' => self::TT,
		'TUN' => self::TN,
		'TUR' => self::TR,
		'TKM' => self::TM,
		'TCA' => self::TC,
		'TUV' => self::TV,
		'UGA' => self::UG,
		'UKR' => self::UA,
		'ARE' => self::AE,
		'GBR' => self::GB,
		'UMI' => self::UM,
		'USA' => self::US,
		'URY' => self::UY,
		'UZB' => self::UZ,
		'VUT' => self::VU,
		'VEN' => self::VE,
		'VNM' => self::VN,
		'VGB' => self::VG,
		'VIR' => self::VI,
		'WLF' => self::WF,
		'ESH' => self::EH,
		'YEM' => self::YE,
		'ZMB' => self::ZM,
		'ZWE' => self::ZW,
		'ALA' => self::AX,
	];

	private const NUMERIC_MAP = [
		'004' => self::AF,
		'008' => self::AL,
		'012' => self::DZ,
		'016' => self::AS,
		'020' => self::AD,
		'024' => self::AO,
		'660' => self::AI,
		'010' => self::AQ,
		'028' => self::AG,
		'032' => self::AR,
		'051' => self::AM,
		'533' => self::AW,
		'036' => self::AU,
		'040' => self::AT,
		'031' => self::AZ,
		'044' => self::BS,
		'048' => self::BH,
		'050' => self::BD,
		'052' => self::BB,
		'112' => self::BY,
		'056' => self::BE,
		'084' => self::BZ,
		'204' => self::BJ,
		'060' => self::BM,
		'064' => self::BT,
		'068' => self::BO,
		'535' => self::BQ,
		'070' => self::BA,
		'072' => self::BW,
		'074' => self::BV,
		'076' => self::BR,
		'086' => self::IO,
		'096' => self::BN,
		'100' => self::BG,
		'854' => self::BF,
		'108' => self::BI,
		'132' => self::CV,
		'116' => self::KH,
		'120' => self::CM,
		'124' => self::CA,
		'136' => self::KY,
		'140' => self::CF,
		'148' => self::TD,
		'152' => self::CL,
		'156' => self::CN,
		'162' => self::CX,
		'166' => self::CC,
		'170' => self::CO,
		'174' => self::KM,
		'180' => self::CD,
		'178' => self::CG,
		'184' => self::CK,
		'188' => self::CR,
		'191' => self::HR,
		'192' => self::CU,
		'531' => self::CW,
		'196' => self::CY,
		'203' => self::CZ,
		'384' => self::CI,
		'208' => self::DK,
		'262' => self::DJ,
		'212' => self::DM,
		'214' => self::DO,
		'218' => self::EC,
		'818' => self::EG,
		'222' => self::SV,
		'226' => self::GQ,
		'232' => self::ER,
		'233' => self::EE,
		'748' => self::SZ,
		'231' => self::ET,
		'238' => self::FK,
		'234' => self::FO,
		'242' => self::FJ,
		'246' => self::FI,
		'250' => self::FR,
		'254' => self::GF,
		'258' => self::PF,
		'260' => self::TF,
		'266' => self::GA,
		'270' => self::GM,
		'268' => self::GE,
		'276' => self::DE,
		'288' => self::GH,
		'292' => self::GI,
		'300' => self::GR,
		'304' => self::GL,
		'308' => self::GD,
		'312' => self::GP,
		'316' => self::GU,
		'320' => self::GT,
		'831' => self::GG,
		'324' => self::GN,
		'624' => self::GW,
		'328' => self::GY,
		'332' => self::HT,
		'334' => self::HM,
		'336' => self::VA,
		'340' => self::HN,
		'344' => self::HK,
		'348' => self::HU,
		'352' => self::IS,
		'356' => self::IN,
		'360' => self::ID,
		'364' => self::IR,
		'368' => self::IQ,
		'372' => self::IE,
		'833' => self::IM,
		'376' => self::IL,
		'380' => self::IT,
		'388' => self::JM,
		'392' => self::JP,
		'832' => self::JE,
		'400' => self::JO,
		'398' => self::KZ,
		'404' => self::KE,
		'296' => self::KI,
		'408' => self::KP,
		'410' => self::KR,
		'414' => self::KW,
		'417' => self::KG,
		'418' => self::LA,
		'428' => self::LV,
		'422' => self::LB,
		'426' => self::LS,
		'430' => self::LR,
		'434' => self::LY,
		'438' => self::LI,
		'440' => self::LT,
		'442' => self::LU,
		'446' => self::MO,
		'450' => self::MG,
		'454' => self::MW,
		'458' => self::MY,
		'462' => self::MV,
		'466' => self::ML,
		'470' => self::MT,
		'584' => self::MH,
		'474' => self::MQ,
		'478' => self::MR,
		'480' => self::MU,
		'175' => self::YT,
		'484' => self::MX,
		'583' => self::FM,
		'498' => self::MD,
		'492' => self::MC,
		'496' => self::MN,
		'499' => self::ME,
		'500' => self::MS,
		'504' => self::MA,
		'508' => self::MZ,
		'104' => self::MM,
		'516' => self::NA,
		'520' => self::NR,
		'524' => self::NP,
		'528' => self::NL,
		'540' => self::NC,
		'554' => self::NZ,
		'558' => self::NI,
		'562' => self::NE,
		'566' => self::NG,
		'570' => self::NU,
		'574' => self::NF,
		'807' => self::MK,
		'580' => self::MP,
		'578' => self::NO,
		'512' => self::OM,
		'586' => self::PK,
		'585' => self::PW,
		'275' => self::PS,
		'591' => self::PA,
		'598' => self::PG,
		'600' => self::PY,
		'604' => self::PE,
		'608' => self::PH,
		'612' => self::PN,
		'616' => self::PL,
		'620' => self::PT,
		'630' => self::PR,
		'634' => self::QA,
		'642' => self::RO,
		'643' => self::RU,
		'646' => self::RW,
		'638' => self::RE,
		'652' => self::BL,
		'654' => self::SH,
		'659' => self::KN,
		'662' => self::LC,
		'663' => self::MF,
		'666' => self::PM,
		'670' => self::VC,
		'882' => self::WS,
		'674' => self::SM,
		'678' => self::ST,
		'682' => self::SA,
		'686' => self::SN,
		'688' => self::RS,
		'690' => self::SC,
		'694' => self::SL,
		'702' => self::SG,
		'534' => self::SX,
		'703' => self::SK,
		'705' => self::SI,
		'090' => self::SB,
		'706' => self::SO,
		'710' => self::ZA,
		'239' => self::GS,
		'728' => self::SS,
		'724' => self::ES,
		'144' => self::LK,
		'729' => self::SD,
		'740' => self::SR,
		'744' => self::SJ,
		'752' => self::SE,
		'756' => self::CH,
		'760' => self::SY,
		'158' => self::TW,
		'762' => self::TJ,
		'834' => self::TZ,
		'764' => self::TH,
		'626' => self::TL,
		'768' => self::TG,
		'772' => self::TK,
		'776' => self::TO,
		'780' => self::TT,
		'788' => self::TN,
		'792' => self::TR,
		'795' => self::TM,
		'796' => self::TC,
		'798' => self::TV,
		'800' => self::UG,
		'804' => self::UA,
		'784' => self::AE,
		'826' => self::GB,
		'581' => self::UM,
		'840' => self::US,
		'858' => self::UY,
		'860' => self::UZ,
		'548' => self::VU,
		'862' => self::VE,
		'704' => self::VN,
		'092' => self::VG,
		'850' => self::VI,
		'876' => self::WF,
		'732' => self::EH,
		'887' => self::YE,
		'894' => self::ZM,
		'716' => self::ZW,
		'248' => self::AX,
	];

	private const SHORTNAME_MAP_EN = [
		"Afghanistan" => self::AF,
		"Albania" => self::AL,
		"Algeria" => self::DZ,
		"American Samoa" => self::AS,
		"Andorra" => self::AD,
		"Angola" => self::AO,
		"Anguilla" => self::AI,
		"Antarctica" => self::AQ,
		"Antigua and Barbuda" => self::AG,
		"Argentina" => self::AR,
		"Armenia" => self::AM,
		"Aruba" => self::AW,
		"Australia" => self::AU,
		"Austria" => self::AT,
		"Azerbaijan" => self::AZ,
		"Bahamas (the)" => self::BS,
		"Bahrain" => self::BH,
		"Bangladesh" => self::BD,
		"Barbados" => self::BB,
		"Belarus" => self::BY,
		"Belgium" => self::BE,
		"Belize" => self::BZ,
		"Benin" => self::BJ,
		"Bermuda" => self::BM,
		"Bhutan" => self::BT,
		"Bolivia (Plurinational State of)" => self::BO,
		"Bonaire, Sint Eustatius and Saba" => self::BQ,
		"Bosnia and Herzegovina" => self::BA,
		"Botswana" => self::BW,
		"Bouvet Island" => self::BV,
		"Brazil" => self::BR,
		"British Indian Ocean Territory (the)" => self::IO,
		"Brunei Darussalam" => self::BN,
		"Bulgaria" => self::BG,
		"Burkina Faso" => self::BF,
		"Burundi" => self::BI,
		"Cabo Verde" => self::CV,
		"Cambodia" => self::KH,
		"Cameroon" => self::CM,
		"Canada" => self::CA,
		"Cayman Islands (the)" => self::KY,
		"Central African Republic (the)" => self::CF,
		"Chad" => self::TD,
		"Chile" => self::CL,
		"China" => self::CN,
		"Christmas Island" => self::CX,
		"Cocos (Keeling) Islands (the)" => self::CC,
		"Colombia" => self::CO,
		"Comoros (the)" => self::KM,
		"Congo (the Democratic Republic of the)" => self::CD,
		"Congo (the)" => self::CG,
		"Cook Islands (the)" => self::CK,
		"Costa Rica" => self::CR,
		"Croatia" => self::HR,
		"Cuba" => self::CU,
		"Curaçao" => self::CW,
		"Cyprus" => self::CY,
		"Czechia" => self::CZ,
		"Côte d'Ivoire" => self::CI,
		"Denmark" => self::DK,
		"Djibouti" => self::DJ,
		"Dominica" => self::DM,
		"Dominican Republic (the)" => self::DO,
		"Ecuador" => self::EC,
		"Egypt" => self::EG,
		"El Salvador" => self::SV,
		"Equatorial Guinea" => self::GQ,
		"Eritrea" => self::ER,
		"Estonia" => self::EE,
		"Eswatini" => self::SZ,
		"Ethiopia" => self::ET,
		"Falkland Islands (the) [Malvinas]" => self::FK,
		"Faroe Islands (the)" => self::FO,
		"Fiji" => self::FJ,
		"Finland" => self::FI,
		"France" => self::FR,
		"French Guiana" => self::GF,
		"French Polynesia" => self::PF,
		"French Southern Territories (the)" => self::TF,
		"Gabon" => self::GA,
		"Gambia (the)" => self::GM,
		"Georgia" => self::GE,
		"Germany" => self::DE,
		"Ghana" => self::GH,
		"Gibraltar" => self::GI,
		"Greece" => self::GR,
		"Greenland" => self::GL,
		"Grenada" => self::GD,
		"Guadeloupe" => self::GP,
		"Guam" => self::GU,
		"Guatemala" => self::GT,
		"Guernsey" => self::GG,
		"Guinea" => self::GN,
		"Guinea-Bissau" => self::GW,
		"Guyana" => self::GY,
		"Haiti" => self::HT,
		"Heard Island and McDonald Islands" => self::HM,
		"Holy See (the)" => self::VA,
		"Honduras" => self::HN,
		"Hong Kong" => self::HK,
		"Hungary" => self::HU,
		"Iceland" => self::IS,
		"India" => self::IN,
		"Indonesia" => self::ID,
		"Iran (Islamic Republic of)" => self::IR,
		"Iraq" => self::IQ,
		"Ireland" => self::IE,
		"Isle of Man" => self::IM,
		"Israel" => self::IL,
		"Italy" => self::IT,
		"Jamaica" => self::JM,
		"Japan" => self::JP,
		"Jersey" => self::JE,
		"Jordan" => self::JO,
		"Kazakhstan" => self::KZ,
		"Kenya" => self::KE,
		"Kiribati" => self::KI,
		"Korea (the Democratic People's Republic of)" => self::KP,
		"Korea (the Republic of)" => self::KR,
		"Kuwait" => self::KW,
		"Kyrgyzstan" => self::KG,
		"Lao People's Democratic Republic (the)" => self::LA,
		"Latvia" => self::LV,
		"Lebanon" => self::LB,
		"Lesotho" => self::LS,
		"Liberia" => self::LR,
		"Libya" => self::LY,
		"Liechtenstein" => self::LI,
		"Lithuania" => self::LT,
		"Luxembourg" => self::LU,
		"Macao" => self::MO,
		"Madagascar" => self::MG,
		"Malawi" => self::MW,
		"Malaysia" => self::MY,
		"Maldives" => self::MV,
		"Mali" => self::ML,
		"Malta" => self::MT,
		"Marshall Islands (the)" => self::MH,
		"Martinique" => self::MQ,
		"Mauritania" => self::MR,
		"Mauritius" => self::MU,
		"Mayotte" => self::YT,
		"Mexico" => self::MX,
		"Micronesia (Federated States of)" => self::FM,
		"Moldova (the Republic of)" => self::MD,
		"Monaco" => self::MC,
		"Mongolia" => self::MN,
		"Montenegro" => self::ME,
		"Montserrat" => self::MS,
		"Morocco" => self::MA,
		"Mozambique" => self::MZ,
		"Myanmar" => self::MM,
		"Namibia" => self::NA,
		"Nauru" => self::NR,
		"Nepal" => self::NP,
		"Netherlands (the)" => self::NL,
		"New Caledonia" => self::NC,
		"New Zealand" => self::NZ,
		"Nicaragua" => self::NI,
		"Niger (the)" => self::NE,
		"Nigeria" => self::NG,
		"Niue" => self::NU,
		"Norfolk Island" => self::NF,
		"North Macedonia" => self::MK,
		"Northern Mariana Islands (the)" => self::MP,
		"Norway" => self::NO,
		"Oman" => self::OM,
		"Pakistan" => self::PK,
		"Palau" => self::PW,
		"Palestine, State of" => self::PS,
		"Panama" => self::PA,
		"Papua New Guinea" => self::PG,
		"Paraguay" => self::PY,
		"Peru" => self::PE,
		"Philippines (the)" => self::PH,
		"Pitcairn" => self::PN,
		"Poland" => self::PL,
		"Portugal" => self::PT,
		"Puerto Rico" => self::PR,
		"Qatar" => self::QA,
		"Romania" => self::RO,
		"Russian Federation (the)" => self::RU,
		"Rwanda" => self::RW,
		"Réunion" => self::RE,
		"Saint Barthélemy" => self::BL,
		"Saint Helena, Ascension and Tristan da Cunha" => self::SH,
		"Saint Kitts and Nevis" => self::KN,
		"Saint Lucia" => self::LC,
		"Saint Martin (French part)" => self::MF,
		"Saint Pierre and Miquelon" => self::PM,
		"Saint Vincent and the Grenadines" => self::VC,
		"Samoa" => self::WS,
		"San Marino" => self::SM,
		"Sao Tome and Principe" => self::ST,
		"Saudi Arabia" => self::SA,
		"Senegal" => self::SN,
		"Serbia" => self::RS,
		"Seychelles" => self::SC,
		"Sierra Leone" => self::SL,
		"Singapore" => self::SG,
		"Sint Maarten (Dutch part)" => self::SX,
		"Slovakia" => self::SK,
		"Slovenia" => self::SI,
		"Solomon Islands" => self::SB,
		"Somalia" => self::SO,
		"South Africa" => self::ZA,
		"South Georgia and the South Sandwich Islands" => self::GS,
		"South Sudan" => self::SS,
		"Spain" => self::ES,
		"Sri Lanka" => self::LK,
		"Sudan (the)" => self::SD,
		"Suriname" => self::SR,
		"Svalbard and Jan Mayen" => self::SJ,
		"Sweden" => self::SE,
		"Switzerland" => self::CH,
		"Syrian Arab Republic (the)" => self::SY,
		"Taiwan (Province of China)" => self::TW,
		"Tajikistan" => self::TJ,
		"Tanzania, the United Republic of" => self::TZ,
		"Thailand" => self::TH,
		"Timor-Leste" => self::TL,
		"Togo" => self::TG,
		"Tokelau" => self::TK,
		"Tonga" => self::TO,
		"Trinidad and Tobago" => self::TT,
		"Tunisia" => self::TN,
		"Turkey" => self::TR,
		"Turkmenistan" => self::TM,
		"Turks and Caicos Islands (the)" => self::TC,
		"Tuvalu" => self::TV,
		"Uganda" => self::UG,
		"Ukraine" => self::UA,
		"United Arab Emirates (the)" => self::AE,
		"United Kingdom of Great Britain and Northern Ireland (the)" => self::GB,
		"United States Minor Outlying Islands (the)" => self::UM,
		"United States of America (the)" => self::US,
		"Uruguay" => self::UY,
		"Uzbekistan" => self::UZ,
		"Vanuatu" => self::VU,
		"Venezuela (Bolivarian Republic of)" => self::VE,
		"Viet Nam" => self::VN,
		"Virgin Islands (British)" => self::VG,
		"Virgin Islands (U.S.)" => self::VI,
		"Wallis and Futuna" => self::WF,
		"Western Sahara*" => self::EH,
		"Yemen" => self::YE,
		"Zambia" => self::ZM,
		"Zimbabwe" => self::ZW,
		"Åland Islands" => self::AX,
	];

	private const SHORTNAME_MAP_FR = [
		"Afghanistan (l')" => self::AF,
		"Albanie (l')" => self::AL,
		"Algérie (l')" => self::DZ,
		"Samoa américaines (les)" => self::AS,
		"Andorre (l')" => self::AD,
		"Angola (l')" => self::AO,
		"Anguilla" => self::AI,
		"Antarctique (l')" => self::AQ,
		"Antigua-et-Barbuda" => self::AG,
		"Argentine (l')" => self::AR,
		"Arménie (l')" => self::AM,
		"Aruba" => self::AW,
		"Australie (l')" => self::AU,
		"Autriche (l')" => self::AT,
		"Azerbaïdjan (l')" => self::AZ,
		"Bahamas (les)" => self::BS,
		"Bahreïn" => self::BH,
		"Bangladesh (le)" => self::BD,
		"Barbade (la)" => self::BB,
		"Bélarus (le)" => self::BY,
		"Belgique (la)" => self::BE,
		"Belize (le)" => self::BZ,
		"Bénin (le)" => self::BJ,
		"Bermudes (les)" => self::BM,
		"Bhoutan (le)" => self::BT,
		"Bolivie (État plurinational de)" => self::BO,
		"Bonaire, Saint-Eustache et Saba" => self::BQ,
		"Bosnie-Herzégovine (la)" => self::BA,
		"Botswana (le)" => self::BW,
		"Bouvet (l'Île)" => self::BV,
		"Brésil (le)" => self::BR,
		"Indien (le Territoire britannique de l'océan)" => self::IO,
		"Brunéi Darussalam (le)" => self::BN,
		"Bulgarie (la)" => self::BG,
		"Burkina Faso (le)" => self::BF,
		"Burundi (le)" => self::BI,
		"Cabo Verde" => self::CV,
		"Cambodge (le)" => self::KH,
		"Cameroun (le)" => self::CM,
		"Canada (le)" => self::CA,
		"Caïmans (les Îles)" => self::KY,
		"République centrafricaine (la)" => self::CF,
		"Tchad (le)" => self::TD,
		"Chili (le)" => self::CL,
		"Chine (la)" => self::CN,
		"Christmas (l'Île)" => self::CX,
		"Cocos (les Îles)/ Keeling (les Îles)" => self::CC,
		"Colombie (la)" => self::CO,
		"Comores (les)" => self::KM,
		"Congo (la République démocratique du)" => self::CD,
		"Congo (le)" => self::CG,
		"Cook (les Îles)" => self::CK,
		"Costa Rica (le)" => self::CR,
		"Croatie (la)" => self::HR,
		"Cuba" => self::CU,
		"Curaçao" => self::CW,
		"Chypre" => self::CY,
		"Tchéquie (la)" => self::CZ,
		"Côte d'Ivoire (la)" => self::CI,
		"Danemark (le)" => self::DK,
		"Djibouti" => self::DJ,
		"Dominique (la)" => self::DM,
		"dominicaine (la République)" => self::DO,
		"Équateur (l')" => self::EC,
		"Égypte (l')" => self::EG,
		"El Salvador" => self::SV,
		"Guinée équatoriale (la)" => self::GQ,
		"Érythrée (l')" => self::ER,
		"Estonie (l')" => self::EE,
		"Eswatini (l')" => self::SZ,
		"Éthiopie (l')" => self::ET,
		"Falkland (les Îles)/Malouines (les Îles)" => self::FK,
		"Féroé (les Îles)" => self::FO,
		"Fidji (les)" => self::FJ,
		"Finlande (la)" => self::FI,
		"France (la)" => self::FR,
		"Guyane française (la )" => self::GF,
		"Polynésie française (la)" => self::PF,
		"Terres australes françaises (les)" => self::TF,
		"Gabon (le)" => self::GA,
		"Gambie (la)" => self::GM,
		"Géorgie (la)" => self::GE,
		"Allemagne (l')" => self::DE,
		"Ghana (le)" => self::GH,
		"Gibraltar" => self::GI,
		"Grèce (la)" => self::GR,
		"Groenland (le)" => self::GL,
		"Grenade (la)" => self::GD,
		"Guadeloupe (la)" => self::GP,
		"Guam" => self::GU,
		"Guatemala (le)" => self::GT,
		"Guernesey" => self::GG,
		"Guinée (la)" => self::GN,
		"Guinée-Bissau (la)" => self::GW,
		"Guyana (le)" => self::GY,
		"Haïti" => self::HT,
		"Heard-et-Îles MacDonald (l'Île)" => self::HM,
		"Saint-Siège (le)" => self::VA,
		"Honduras (le)" => self::HN,
		"Hong Kong" => self::HK,
		"Hongrie (la)" => self::HU,
		"Islande (l')" => self::IS,
		"Inde (l')" => self::IN,
		"Indonésie (l')" => self::ID,
		"Iran (République Islamique d')" => self::IR,
		"Iraq (l')" => self::IQ,
		"Irlande (l')" => self::IE,
		"Île de Man" => self::IM,
		"Israël" => self::IL,
		"Italie (l')" => self::IT,
		"Jamaïque (la)" => self::JM,
		"Japon (le)" => self::JP,
		"Jersey" => self::JE,
		"Jordanie (la)" => self::JO,
		"Kazakhstan (le)" => self::KZ,
		"Kenya (le)" => self::KE,
		"Kiribati" => self::KI,
		"Corée (la République populaire démocratique de)" => self::KP,
		"Corée (la République de)" => self::KR,
		"Koweït (le)" => self::KW,
		"Kirghizistan (le)" => self::KG,
		"Lao (la République démocratique populaire)" => self::LA,
		"Lettonie (la)" => self::LV,
		"Liban (le)" => self::LB,
		"Lesotho (le)" => self::LS,
		"Libéria (le)" => self::LR,
		"Libye (la)" => self::LY,
		"Liechtenstein (le)" => self::LI,
		"Lituanie (la)" => self::LT,
		"Luxembourg (le)" => self::LU,
		"Macao" => self::MO,
		"Madagascar" => self::MG,
		"Malawi (le)" => self::MW,
		"Malaisie (la)" => self::MY,
		"Maldives (les)" => self::MV,
		"Mali (le)" => self::ML,
		"Malte" => self::MT,
		"Marshall (les Îles)" => self::MH,
		"Martinique (la)" => self::MQ,
		"Mauritanie (la)" => self::MR,
		"Maurice" => self::MU,
		"Mayotte" => self::YT,
		"Mexique (le)" => self::MX,
		"Micronésie (États fédérés de)" => self::FM,
		"Moldova (la République de)" => self::MD,
		"Monaco" => self::MC,
		"Mongolie (la)" => self::MN,
		"Monténégro (le)" => self::ME,
		"Montserrat" => self::MS,
		"Maroc (le)" => self::MA,
		"Mozambique (le)" => self::MZ,
		"Myanmar (le)" => self::MM,
		"Namibie (la)" => self::NA,
		"Nauru" => self::NR,
		"Népal (le)" => self::NP,
		"Pays-Bas (les)" => self::NL,
		"Nouvelle-Calédonie (la)" => self::NC,
		"Nouvelle-Zélande (la)" => self::NZ,
		"Nicaragua (le)" => self::NI,
		"Niger (le)" => self::NE,
		"Nigéria (le)" => self::NG,
		"Niue" => self::NU,
		"Norfolk (l'Île)" => self::NF,
		"Macédoine du Nord (la)" => self::MK,
		"Mariannes du Nord (les Îles)" => self::MP,
		"Norvège (la)" => self::NO,
		"Oman" => self::OM,
		"Pakistan (le)" => self::PK,
		"Palaos (les)" => self::PW,
		"Palestine, État de" => self::PS,
		"Panama (le)" => self::PA,
		"Papouasie-Nouvelle-Guinée (la)" => self::PG,
		"Paraguay (le)" => self::PY,
		"Pérou (le)" => self::PE,
		"Philippines (les)" => self::PH,
		"Pitcairn" => self::PN,
		"Pologne (la)" => self::PL,
		"Portugal (le)" => self::PT,
		"Porto Rico" => self::PR,
		"Qatar (le)" => self::QA,
		"Roumanie (la)" => self::RO,
		"Russie (la Fédération de)" => self::RU,
		"Rwanda (le)" => self::RW,
		"Réunion (La)" => self::RE,
		"Saint-Barthélemy" => self::BL,
		"Sainte-Hélène, Ascension et Tristan da Cunha" => self::SH,
		"Saint-Kitts-et-Nevis" => self::KN,
		"Sainte-Lucie" => self::LC,
		"Saint-Martin (partie française)" => self::MF,
		"Saint-Pierre-et-Miquelon" => self::PM,
		"Saint-Vincent-et-les Grenadines" => self::VC,
		"Samoa (le)" => self::WS,
		"Saint-Marin" => self::SM,
		"Sao Tomé-et-Principe" => self::ST,
		"Arabie saoudite (l')" => self::SA,
		"Sénégal (le)" => self::SN,
		"Serbie (la)" => self::RS,
		"Seychelles (les)" => self::SC,
		"Sierra Leone (la)" => self::SL,
		"Singapour" => self::SG,
		"Saint-Martin (partie néerlandaise)" => self::SX,
		"Slovaquie (la)" => self::SK,
		"Slovénie (la)" => self::SI,
		"Salomon (les Îles)" => self::SB,
		"Somalie (la)" => self::SO,
		"Afrique du Sud (l')" => self::ZA,
		"Géorgie du Sud-et-les Îles Sandwich du Sud (la)" => self::GS,
		"Soudan du Sud (le)" => self::SS,
		"Espagne (l')" => self::ES,
		"Sri Lanka" => self::LK,
		"Soudan (le)" => self::SD,
		"Suriname (le)" => self::SR,
		"Svalbard et l'Île Jan Mayen (le)" => self::SJ,
		"Suède (la)" => self::SE,
		"Suisse (la)" => self::CH,
		"République arabe syrienne (la)" => self::SY,
		"Taïwan (Province de Chine)" => self::TW,
		"Tadjikistan (le)" => self::TJ,
		"Tanzanie (la République-Unie de)" => self::TZ,
		"Thaïlande (la)" => self::TH,
		"Timor-Leste (le)" => self::TL,
		"Togo (le)" => self::TG,
		"Tokelau (les)" => self::TK,
		"Tonga (les)" => self::TO,
		"Trinité-et-Tobago (la)" => self::TT,
		"Tunisie (la)" => self::TN,
		"Turquie (la)" => self::TR,
		"Turkménistan (le)" => self::TM,
		"Turks-et-Caïcos (les Îles)" => self::TC,
		"Tuvalu (les)" => self::TV,
		"Ouganda (l')" => self::UG,
		"Ukraine (l')" => self::UA,
		"Émirats arabes unis (les)" => self::AE,
		"Royaume-Uni de Grande-Bretagne et d'Irlande du Nord (le)" => self::GB,
		"Îles mineures éloignées des États-Unis (les)" => self::UM,
		"États-Unis d'Amérique (les)" => self::US,
		"Uruguay (l')" => self::UY,
		"Ouzbékistan (l')" => self::UZ,
		"Vanuatu (le)" => self::VU,
		"Venezuela (République bolivarienne du)" => self::VE,
		"Viet Nam (le)" => self::VN,
		"Vierges britanniques (les Îles)" => self::VG,
		"Vierges des États-Unis (les Îles)" => self::VI,
		"Wallis-et-Futuna" => self::WF,
		"Sahara occidental (le)*" => self::EH,
		"Yémen (le)" => self::YE,
		"Zambie (la)" => self::ZM,
		"Zimbabwe (le)" => self::ZW,
		"Åland(les Îles)" => self::AX,
	];

	/**
	 * @param string $alpha2Code
	 *
	 * @return array<string>
	 */
	final public static function getRecordByAlpha2Code( string $alpha2Code ) : array
	{
		return self::ALPHA2_MAP[ $alpha2Code ] ?? [];
	}

	/**
	 * @param string $alpha3Code
	 *
	 * @return array<string>
	 */
	final public static function getRecordByAlpha3Code( string $alpha3Code ) : array
	{
		return self::ALPHA3_MAP[ $alpha3Code ] ?? [];
	}

	/**
	 * @param string $numericCode
	 *
	 * @return array<string>
	 */
	final public static function getRecordByNumericCode( string $numericCode ) : array
	{
		return self::NUMERIC_MAP[ $numericCode ] ?? [];
	}

	/**
	 * @param string $englishShortName
	 *
	 * @return array<string>
	 */
	final public static function getRecordByEnglishShortName( string $englishShortName ) : array
	{
		return self::SHORTNAME_MAP_EN[ $englishShortName ] ?? [];
	}

	/**
	 * @param string $frenchShortName
	 *
	 * @return array<string>
	 */
	final public static function getRecordByFrenchShortName( string $frenchShortName ) : array
	{
		return self::SHORTNAME_MAP_FR[ $frenchShortName ] ?? [];
	}

	/**
	 * @return array<string, array<string>>
	 */
	final public static function getAllRecords() : array
	{
		return self::ALPHA2_MAP;
	}
}

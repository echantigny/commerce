<?php

namespace Market\Seed;

use Craft\Market_CountryRecord;

/ *
 * Class Market_CountriesSeeder
 *
 * @package Market\Seed
 */
class Market_CountriesSeeder implements Market_SeederInterface
{

	public function seed()
	{
		$table     = Market_CountryRecord::model()->getTableName();
		$countries = [
			['AD', 'Andorra'],
			['AE', 'United Arab Emirates'],
			['AF', 'Afghanistan'],
			['AG', 'Antigua and Barbuda'],
			['AI', 'Anguilla'],
			['AL', 'Albania'],
			['AM', 'Armenia'],
			['AO', 'Angola'],
			['AQ', 'Antarctica'],
			['AR', 'Argentina'],
			['AS', 'American Samoa'],
			['AT', 'Austria'],
			['AU', 'Australia'],
			['AW', 'Aruba'],
			['AX', 'Aland Islands'],
			['AZ', 'Azerbaijan'],
			['BA', 'Bosnia and Herzegovina'],
			['BB', 'Barbados'],
			['BD', 'Bangladesh'],
			['BE', 'Belgium'],
			['BF', 'Burkina Faso'],
			['BG', 'Bulgaria'],
			['BH', 'Bahrain'],
			['BI', 'Burundi'],
			['BJ', 'Benin'],
			['BL', 'Saint Barthelemy'],
			['BM', 'Bermuda'],
			['BN', 'Brunei Darussalam'],
			['BO', 'Bolivia'],
			['BQ', 'Bonaire, Sint Eustatius and Saba'],
			['BR', 'Brazil'],
			['BS', 'Bahamas'],
			['BT', 'Bhutan'],
			['BV', 'Bouvet Island'],
			['BW', 'Botswana'],
			['BY', 'Belarus'],
			['BZ', 'Belize'],
			['CA', 'Canada'],
			['CC', 'Cocos (Keeling] Islands'],
			['CD', 'Democratic Republic of Congo'],
			['CF', 'Central African Republic'],
			['CG', 'Congo'],
			['CH', 'Switzerland'],
			['CI', 'Ivory Coast'],
			['CK', 'Cook Islands'],
			['CL', 'Chile'],
			['CM', 'Cameroon'],
			['CN', 'China'],
			['CO', 'Colombia'],
			['CR', 'Costa Rica'],
			['CU', 'Cuba'],
			['CV', 'Cape Verde'],
			['CW', 'Curacao'],
			['CX', 'Christmas Island'],
			['CY', 'Cyprus'],
			['CZ', 'Czech Republic'],
			['DE', 'Germany'],
			['DJ', 'Djibouti'],
			['DK', 'Denmark'],
			['DM', 'Dominica'],
			['DO', 'Dominican Republic'],
			['DZ', 'Algeria'],
			['EC', 'Ecuador'],
			['EE', 'Estonia'],
			['EG', 'Egypt'],
			['EH', 'Western Sahara'],
			['ER', 'Eritrea'],
			['ES', 'Spain'],
			['ET', 'Ethiopia'],
			['FI', 'Finland'],
			['FJ', 'Fiji'],
			['FK', 'Falkland Islands (Malvinas]'],
			['FM', 'Micronesia'],
			['FO', 'Faroe Islands'],
			['FR', 'France'],
			['GA', 'Gabon'],
			['GB', 'United Kingdom'],
			['GD', 'Grenada'],
			['GE', 'Georgia'],
			['GF', 'French Guiana'],
			['GG', 'Guernsey'],
			['GH', 'Ghana'],
			['GI', 'Gibraltar'],
			['GL', 'Greenland'],
			['GM', 'Gambia'],
			['GN', 'Guinea'],
			['GP', 'Guadeloupe'],
			['GQ', 'Equatorial Guinea'],
			['GR', 'Greece'],
			['GS', 'S. Georgia and S. Sandwich Isls.'],
			['GT', 'Guatemala'],
			['GU', 'Guam'],
			['GW', 'Guinea-Bissau'],
			['GY', 'Guyana'],
			['HK', 'Hong Kong'],
			['HM', 'Heard and McDonald Islands'],
			['HN', 'Honduras'],
			['HR', 'Croatia (Hrvatska]'],
			['HT', 'Haiti'],
			['HU', 'Hungary'],
			['ID', 'Indonesia'],
			['IE', 'Ireland'],
			['IL', 'Israel'],
			['IM', 'Isle Of Man'],
			['IN', 'India'],
			['IO', 'British Indian Ocean Territory'],
			['IQ', 'Iraq'],
			['IR', 'Iran'],
			['IS', 'Iceland'],
			['IT', 'Italy'],
			['JE', 'Jersey'],
			['JM', 'Jamaica'],
			['JO', 'Jordan'],
			['JP', 'Japan'],
			['KE', 'Kenya'],
			['KG', 'Kyrgyzstan'],
			['KH', 'Cambodia'],
			['KI', 'Kiribati'],
			['KM', 'Comoros'],
			['KN', 'Saint Kitts and Nevis'],
			['KP', 'Korea (North]'],
			['KR', 'Korea (South]'],
			['KW', 'Kuwait'],
			['KY', 'Cayman Islands'],
			['KZ', 'Kazakhstan'],
			['LA', 'Laos'],
			['LB', 'Lebanon'],
			['LC', 'Saint Lucia'],
			['LI', 'Liechtenstein'],
			['LK', 'Sri Lanka'],
			['LR', 'Liberia'],
			['LS', 'Lesotho'],
			['LT', 'Lithuania'],
			['LU', 'Luxembourg'],
			['LV', 'Latvia'],
			['LY', 'Libya'],
			['MA', 'Morocco'],
			['MC', 'Monaco'],
			['MD', 'Moldova'],
			['ME', 'Montenegro'],
			['MF', 'Saint Martin (French part]'],
			['MG', 'Madagascar'],
			['MH', 'Marshall Islands'],
			['MK', 'Macedonia'],
			['ML', 'Mali'],
			['MM', 'Burma (Myanmar]'],
			['MN', 'Mongolia'],
			['MO', 'Macau'],
			['MP', 'Northern Mariana Islands'],
			['MQ', 'Martinique'],
			['MR', 'Mauritania'],
			['MS', 'Montserrat'],
			['MT', 'Malta'],
			['MU', 'Mauritius'],
			['MV', 'Maldives'],
			['MW', 'Malawi'],
			['MX', 'Mexico'],
			['MY', 'Malaysia'],
			['MZ', 'Mozambique'],
			['NA', 'Namibia'],
			['NC', 'New Caledonia'],
			['NE', 'Niger'],
			['NF', 'Norfolk Island'],
			['NG', 'Nigeria'],
			['NI', 'Nicaragua'],
			['NL', 'Netherlands'],
			['NO', 'Norway'],
			['NP', 'Nepal'],
			['NR', 'Nauru'],
			['NU', 'Niue'],
			['NZ', 'New Zealand'],
			['OM', 'Oman'],
			['PA', 'Panama'],
			['PE', 'Peru'],
			['PF', 'French Polynesia'],
			['PG', 'Papua New Guinea'],
			['PH', 'Philippines'],
			['PK', 'Pakistan'],
			['PL', 'Poland'],
			['PM', 'St. Pierre and Miquelon'],
			['PN', 'Pitcairn'],
			['PR', 'Puerto Rico'],
			['PS', 'Palestinian Territory, Occupied'],
			['PT', 'Portugal'],
			['PW', 'Palau'],
			['PY', 'Paraguay'],
			['QA', 'Qatar'],
			['RE', 'Reunion'],
			['RO', 'Romania'],
			['RS', 'Republic of Serbia'],
			['RU', 'Russia'],
			['RW', 'Rwanda'],
			['SA', 'Saudi Arabia'],
			['SB', 'Solomon Islands'],
			['SC', 'Seychelles'],
			['SD', 'Sudan'],
			['SE', 'Sweden'],
			['SG', 'Singapore'],
			['SH', 'St. Helena'],
			['SI', 'Slovenia'],
			['SJ', 'Svalbard and Jan Mayen Islands'],
			['SK', 'Slovak Republic'],
			['SL', 'Sierra Leone'],
			['SM', 'San Marino'],
			['SN', 'Senegal'],
			['SO', 'Somalia'],
			['SR', 'Suriname'],
			['SS', 'South Sudan'],
			['ST', 'Sao Tome and Principe'],
			['SV', 'El Salvador'],
			['SX', 'Sint Maarten (Dutch part]'],
			['SY', 'Syria'],
			['SZ', 'Swaziland'],
			['TC', 'Turks and Caicos Islands'],
			['TD', 'Chad'],
			['TF', 'French Southern Territories'],
			['TG', 'Togo'],
			['TH', 'Thailand'],
			['TJ', 'Tajikistan'],
			['TK', 'Tokelau'],
			['TL', 'Timor-Leste'],
			['TM', 'Turkmenistan'],
			['TN', 'Tunisia'],
			['TO', 'Tonga'],
			['TR', 'Turkey'],
			['TT', 'Trinidad and Tobago'],
			['TV', 'Tuvalu'],
			['TW', 'Taiwan'],
			['TZ', 'Tanzania'],
			['UA', 'Ukraine'],
			['UG', 'Uganda'],
			['UM', 'United States Minor Outlying Islands'],
			['US', 'United States'],
			['UY', 'Uruguay'],
			['UZ', 'Uzbekistan'],
			['VA', 'Vatican City State (Holy See]'],
			['VC', 'Saint Vincent and the Grenadines'],
			['VE', 'Venezuela'],
			['VG', 'Virgin Islands (British]'],
			['VI', 'Virgin Islands (U.S.]'],
			['VN', 'Viet Nam'],
			['VU', 'Vanuatu'],
			['WF', 'Wallis and Futuna Islands'],
			['WS', 'Samoa'],
			['YE', 'Yemen'],
			['YT', 'Mayotte'],
			['ZA', 'South Africa'],
			['ZM', 'Zambia'],
			['ZW', 'Zimbabwe'],
		];

		\Craft\craft()->db->createCommand()->insertAll($table, ['iso', 'name'], $countries);
	}
}
var ccount={'classic_1':{c:1511,u:1134},'classic_2':{c:1353,u:514},'asiimov_1':{c:282,u:242},'csgo_1':{c:680,u:547},'spb_1':{c:509,u:368},'asiimov_2':{c:343,u:185},'csgo_2':{c:777,u:317},'spb_2':{c:421,u:168},'asiimov_3':{c:102,u:98},'classic_3':{c:207,u:198},'csgo_3':{c:114,u:104},'spb_3':{c:114,u:106},'fnatic_1':{c:127,u:114},'fnatic_2':{c:183,u:117},'fnatic_3':{c:73,u:73},'improved_1':{c:277,u:238},'improved_2':{c:290,u:157},'improved_3':{c:81,u:79},'navi_1':{c:145,u:131},'navi_2':{c:206,u:123},'navi_3':{c:70,u:70},'kowka_1':{c:131,u:115},'kowka_2':{c:196,u:118},'kowka_3':{c:75,u:75},'gold_1':{c:162,u:151},'gold_2':{c:165,u:120},'gold_3':{c:84,u:84},'csl6_1':{c:177,u:158},'csl6_2':{c:212,u:128},'csl6_3':{c:79,u:78},'butcher_1':{c:519,u:389},'butcher_2':{c:669,u:268},'butcher_3':{c:138,u:132},'original_1':{c:1074,u:883},'original_2':{c:852,u:409},'original_3':{c:145,u:138},'ilove_1':{c:387,u:199},'ilove_2':{c:334,u:156},'ilove_3':{c:135,u:92},'steam_1':{c:161,u:139},'steam_2':{c:213,u:145},'steam_3':{c:91,u:89},'newbeerd_1':{c:255,u:220},'newbeerd_2':{c:223,u:154},'newbeerd_3':{c:99,u:99},'sah4r_1':{c:164,u:141},'sah4r_2':{c:219,u:134},'sah4r_3':{c:97,u:97},'zxd_1':{c:10,u:5},'zxd_2':{c:12,u:4},'zxd_3':{c:7,u:4},'ebash_1':{c:318,u:225},'ebash_2':{c:292,u:152},'ebash_3':{c:94,u:85},'pirate_1':{c:396,u:305},'pirate_2':{c:435,u:173},'pirate_3':{c:82,u:79},'Orange_1':{c:332,u:239},'Orange_2':{c:155,u:56},'Orange_3':{c:45,u:32},'KOT3_1':{c:136,u:107},'KOT3_2':{c:138,u:62},'KOT3_3':{c:36,u:33},'proskill_1':{c:132,u:115},'proskill_2':{c:141,u:70},'proskill_3':{c:44,u:41},'virtuspro_1':{c:74,u:69},'virtuspro_2':{c:110,u:68},'virtuspro_3':{c:50,u:47},'SteelSeries_1':{c:62,u:57},'SteelSeries_2':{c:83,u:39},'SteelSeries_3':{c:32,u:32},'ukrlesn1k_1':{c:95,u:82},'ukrlesn1k_2':{c:133,u:60},'ukrlesn1k_3':{c:40,u:40},'Ultimate_1':{c:85,u:69},'Ultimate_2':{c:77,u:43},'Ultimate_3':{c:25,u:22},'Putin_1':{c:106,u:95},'Putin_2':{c:146,u:73},'Putin_3':{c:40,u:39},'':{}};
function ccount_display(id)
{
	document.write(ccount[id]['c'].formatThousands('US'));
}
function ccount_unique(id)
{
	document.write(ccount[id]['u'].formatThousands('US'));
}

Number.prototype.formatThousands = function(notation)
{
	var n = this, separator = "";
	switch (notation)
	{
		case "US":
			separator = ",";
			break;
		case "UK":
			separator = ".";
			break;
		case "FR":
			separator = " ";
			break;
		default:
			return n;
	}
	n = parseInt(n) + "";
	j = (j = n.length) > 3 ? j % 3 : 0;
	return (j ? n.substr(0, j) + separator : "") + n.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + separator);
}

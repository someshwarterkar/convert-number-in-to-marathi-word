<?php
function numberTomarathiwords($num)
{

$onetohundred = array(
0 =>"",
1 => "एक",
2 => "दोन",
3 => "तीन",
4 => "चार",
5 => "पाच",
6 => "सहा",
7 => "सात",
8 => "आठ",
9 => "नऊ",
10 => "दहा",
11 => "अकरा",
12 => "बारा",
13 => "तेरा",
14 => "चौदा",
15 => "पंधरा",
16 => "सोळा",
17 => "सतरा",
18 => "अठरा",
19 => "एकोणीस",
20 => "वीस",
21 => "एकवीस",
22 => "बावीस",
23 => "तेवीस",
24 => "चोवीस",
25 => "पंचवीस",
26 => "सव्वीस",
27 => "सत्तावीस",
28 => "अठ्ठावीस",
29 => "एकोणतीस",
30 => "तीस",
31 => "एकतीस",
32 => "बत्तीस",
33 => "तेहेतीस",
34 => "चौतीस",
35 => "पस्तीस",
36 => "छत्तीस",
37 => "सदतीस",
38 => "अडतीस",
39 => "एकोणचाळीस",
40 => "चाळीस",
41 => "एक्केचाळीस",
42 => "बेचाळीस",
43 => "त्रेचाळीस",
44 => "चव्वेचाळीस",
45 => "पंचेचाळीस",
46 => "सेहेचाळीस",
47 => "सत्तेचाळीस",
48 => "अठ्ठेचाळीस",
49 => "एकोणपन्नास",
50 => "पन्नास",
51 => "एक्कावन्न",
52 => "बावन्न",
53 => "त्रेपन्न",
54 => "चोपन्न",
55 => "पंचावन्न",
56 => "छप्पन्न",
57 => "सत्तावन्न",
58 => "अठ्ठावन्न",
59 => "एकोणसाठ",
60 => "साठ",
61 => "एकसष्ठ",
62 => "बासष्ठ",
63 => "त्रेसष्ठ",
64 => "चौसष्ठ",
65 => "पासष्ठ",
66 => "सहासष्ठ",
67 => "सदुसष्ठ",
68 => "अडुसष्ठ",
69 => "एकोणसत्तर",
70 => "सत्तर",
71 => "एक्काहत्तर",
72 => "बाहत्तर",
73 => "त्र्याहत्तर",
74 => "चौर्‍याहत्तर",
75 => "पंच्याहत्तर",
76 => "शहात्तर",
77 => "सत्याहत्तर",
78 => "अठ्ठ्याहत्तर",
79 => "एकोण ऐंशी",
80 => "ऐंशी",
81 => "एक्क्याऐंशी",
82 => "ब्याऐंशी",
83 => "त्र्याऐंशी",
84 => "चौऱ्याऐंशी",
85 => "पंच्याऐंशी",
86 => "शहाऐंशी",
87 => "सत्त्याऐंशी",
88 => "अठ्ठ्याऐंशी",
89 => "एकोणनव्वद",
90 => "नव्वद", 
91 => "एक्क्याण्णव",
92 => "ब्याण्णव",
93 => "त्र्याण्णव",
94 => "चौऱ्याण्णव",
95 => "पंच्याण्णव",
96 => "शहाण्णव",
97 => "सत्त्याण्णव",
98 => "अठ्ठ्याण्णव",
99 => "नव्व्याण्णव",
100 => "शंभर"
);

$afterhundred = array(
0 =>"शे",
1 =>"हजार",
2 => "लाख",
3 => "कोटी",
4 => "अब्ज"
);

$space=' ';
$beforedecimal=$num;

if($beforedecimal==0){
return 'शून्य';
	}

else if($beforedecimal<101){
return $onetohundred[$beforedecimal];
}else if($beforedecimal>100 && $beforedecimal<1000){
 $part1 = floor($beforedecimal/100);
$part2 = $beforedecimal%100;
return $onetohundred[$part1].$afterhundred[0].$space.$onetohundred[$part2];
}

else if($beforedecimal>=1000 && $beforedecimal<100000){
 $part1 = floor($beforedecimal/1000);
$part2 = $beforedecimal%1000;

if($part2<101 && $part2>0){
return $onetohundred[$part1].$space.$afterhundred[1].$space.$onetohundred[$part2];
}else if($part2>100 && $part2<1000){
 $part3 = floor($part2/100);
$part4 = $part2%100;
return $onetohundred[$part1].$space.$afterhundred[1].$space.$onetohundred[$part3].$afterhundred[0].$space.$onetohundred[$part4];
}else{
return $onetohundred[$part1].$space.$afterhundred[1];
}
}

else if($beforedecimal>=100000 && $beforedecimal<10000000){
$part1 = floor($beforedecimal/100000);
$part2 = $beforedecimal%100000;

if($part2<101){
return $onetohundred[$part1].$space.$afterhundred[2].$space.$onetohundred[$part2];
}else if($part2>100 && $part2<1000){
 $part3 = floor($part2/100);
$part4 = $part2%100;
return $onetohundred[$part1].$space.$afterhundred[2].$space.$onetohundred[$part3].$afterhundred[0].$space.$onetohundred[$part4];
}
else if($part2>=1000 && $part2<100000){
 $part3 = floor($part2/1000);
$part4 = $part2%1000;

if($part4<101 && $part4>0){
return $onetohundred[$part1].$space.$afterhundred[2].$space.$onetohundred[$part3].$space.$afterhundred[1].$space.$onetohundred[$part4];
}else if($part4>100 && $part4<1000){
 $part5 = floor($part4/100);
$part6 = $part4%100;
return $onetohundred[$part1].$space.$afterhundred[2].$space.$onetohundred[$part3].$space.$afterhundred[1].$space.$onetohundred[$part5].$afterhundred[0].$space.$onetohundred[$part6];
}else{
return $onetohundred[$part1].$space.$afterhundred[2].$space.$onetohundred[$part3].$space.$afterhundred[1];
}
}	


}

}
?>



<?php
echo numberTomarathiwords(52415);
?>
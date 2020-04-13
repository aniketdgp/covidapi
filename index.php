<?php
include_once('simple_html_dom.php');


//Count start
// Create DOM from URL or file
$html = file_get_html('https://www.mygov.in/covid-19/');

$LastUpdatedVal = $html->find('div.info_title',0);
$Activecase = $html->find('span.icount',0);
$Discharged = $html->find('span.icount',1);
$Deaths = $html->find('span.icount',2);
$Migrated = $html->find('span.icount',3);

//Get The Data of Last Updated
$lu = $LastUpdatedVal->plaintext;
$len = strlen($lu);
$LastUpdated = substr($lu,45,$len);
//ends here

//Array For Count
$arr['countrycount'] = array(
    
    'lastupdated' => $LastUpdated, 
    'activecases' => $Activecase->plaintext, 
    'discharged' => $Discharged->plaintext, 
    'deaths' => $Deaths->plaintext, 
    'migrated' => $Migrated->plaintext
);
//Count end




//Statewise count start
// Create DOM from URL or file
$sc = file_get_html('https://www.mygov.in/corona-data/covid19-statewise-status');

$statelastup = $sc->find('div.field-item.even',0);





//Array For StateCount
$arr['statecount'] = array(
    
    'lastupdated' => $statelastup->plaintext,
   
);


//AndhraPadesh
$i=8;
$arr['statecount']['states'][] = array(
    
    'state' =>$sc->find('div.field-item.even',$i)->plaintext,
    'confirmedcases' => $sc->find('div.field-item.even',$i+1)->plaintext,
    'recovered' =>  $sc->find('div.field-item.even',$i+2)->plaintext,
    'death' =>  $sc->find('div.field-item.even',$i+3)->plaintext,
   
);

//Andaman
$i=12;
$arr['statecount']['states'][] = array(
    
    'state' =>$sc->find('div.field-item.even',$i)->plaintext,
    'confirmedcases' => $sc->find('div.field-item.even',$i+1)->plaintext,
    'recovered' =>  $sc->find('div.field-item.even',$i+2)->plaintext,
    'death' =>  $sc->find('div.field-item.even',$i+3)->plaintext,
   
);

//Bihar
$i=17;
$arr['statecount']['states'][] = array(
    
    'state' =>$sc->find('div.field-item.even',$i)->plaintext,
    'confirmedcases' => $sc->find('div.field-item.even',$i+1)->plaintext,
    'recovered' =>  $sc->find('div.field-item.even',$i+2)->plaintext,
    'death' =>  $sc->find('div.field-item.even',$i+3)->plaintext,
   
);

//Chandigarh
$i=21;
$arr['statecount']['states'][] = array(
    
    'state' =>$sc->find('div.field-item.even',$i)->plaintext,
    'confirmedcases' => $sc->find('div.field-item.even',$i+1)->plaintext,
    'recovered' =>  $sc->find('div.field-item.even',$i+2)->plaintext,
    'death' =>  $sc->find('div.field-item.even',$i+3)->plaintext,
   
);

//Chattisgarh
$i=26;
$arr['statecount']['states'][] = array(
    
    'state' =>$sc->find('div.field-item.even',$i)->plaintext,
    'confirmedcases' => $sc->find('div.field-item.even',$i+1)->plaintext,
    'recovered' =>  $sc->find('div.field-item.even',$i+2)->plaintext,
    'death' =>  $sc->find('div.field-item.even',$i+3)->plaintext,
   
);

//Delhi
$i=30;
$arr['statecount']['states'][] = array(
    
    'state' =>$sc->find('div.field-item.even',$i)->plaintext,
    'confirmedcases' => $sc->find('div.field-item.even',$i+1)->plaintext,
    'recovered' =>  $sc->find('div.field-item.even',$i+2)->plaintext,
    'death' =>  $sc->find('div.field-item.even',$i+3)->plaintext,
   
);

//Goa
$i=35;
$arr['statecount']['states'][] = array(
    
    'state' =>$sc->find('div.field-item.even',$i)->plaintext,
    'confirmedcases' => $sc->find('div.field-item.even',$i+1)->plaintext,
    'recovered' =>  $sc->find('div.field-item.even',$i+2)->plaintext,
    'death' =>  $sc->find('div.field-item.even',$i+3)->plaintext,
   
);
    
//Gujrat
$i=39;
$arr['statecount']['states'][] = array(
    
    'state' =>$sc->find('div.field-item.even',$i)->plaintext,
    'confirmedcases' => $sc->find('div.field-item.even',$i+1)->plaintext,
    'recovered' =>  $sc->find('div.field-item.even',$i+2)->plaintext,
    'death' =>  $sc->find('div.field-item.even',$i+3)->plaintext,
   
);


//Haryana
$i=44;
$arr['statecount']['states'][] = array(
    
    'state' =>$sc->find('div.field-item.even',$i)->plaintext,
    'confirmedcases' => $sc->find('div.field-item.even',$i+1)->plaintext,
    'recovered' =>  $sc->find('div.field-item.even',$i+2)->plaintext,
    'death' =>  $sc->find('div.field-item.even',$i+3)->plaintext,
   
);


//Himachal Pradesh
$i=48;
$arr['statecount']['states'][] = array(
    
    'state' =>$sc->find('div.field-item.even',$i)->plaintext,
    'confirmedcases' => $sc->find('div.field-item.even',$i+1)->plaintext,
    'recovered' =>  $sc->find('div.field-item.even',$i+2)->plaintext,
    'death' =>  $sc->find('div.field-item.even',$i+3)->plaintext,
   
);

//Jammu Kashmir
$i=53;
$arr['statecount']['states'][] = array(
    
    'state' =>'JammuKashmir',
    'confirmedcases' => $sc->find('div.field-item.even',$i+1)->plaintext,
    'recovered' =>  $sc->find('div.field-item.even',$i+2)->plaintext,
    'death' =>  $sc->find('div.field-item.even',$i+3)->plaintext,
   
);

//Karnataka
$i=57;
$arr['statecount']['states'][] = array(
    
    'state' =>$sc->find('div.field-item.even',$i)->plaintext,
    'confirmedcases' => $sc->find('div.field-item.even',$i+1)->plaintext,
    'recovered' =>  $sc->find('div.field-item.even',$i+2)->plaintext,
    'death' =>  $sc->find('div.field-item.even',$i+3)->plaintext,
   
);

//Kerala
$i=62;
$arr['statecount']['states'][] = array(
    
    'state' =>$sc->find('div.field-item.even',$i)->plaintext,
    'confirmedcases' => $sc->find('div.field-item.even',$i+1)->plaintext,
    'recovered' =>  $sc->find('div.field-item.even',$i+2)->plaintext,
    'death' =>  $sc->find('div.field-item.even',$i+3)->plaintext,
   
);

//Ladakh
$i=66;
$arr['statecount']['states'][] = array(
    
    'state' =>$sc->find('div.field-item.even',$i)->plaintext,
    'confirmedcases' => $sc->find('div.field-item.even',$i+1)->plaintext,
    'recovered' =>  $sc->find('div.field-item.even',$i+2)->plaintext,
    'death' =>  $sc->find('div.field-item.even',$i+3)->plaintext,
   
);

//MadhaPradesh
$i=71;
$arr['statecount']['states'][] = array(
    
    'state' =>'MadhyaPradesh',
    'confirmedcases' => $sc->find('div.field-item.even',$i+1)->plaintext,
    'recovered' =>  $sc->find('div.field-item.even',$i+2)->plaintext,
    'death' =>  $sc->find('div.field-item.even',$i+3)->plaintext,
   
);

//Maharastra
$i=75;
$arr['statecount']['states'][] = array(
    
    'state' =>$sc->find('div.field-item.even',$i)->plaintext,
    'confirmedcases' => $sc->find('div.field-item.even',$i+1)->plaintext,
    'recovered' =>  $sc->find('div.field-item.even',$i+2)->plaintext,
    'death' =>  $sc->find('div.field-item.even',$i+3)->plaintext,
   
);


//Manipur
$i=80;
$arr['statecount']['states'][] = array(
    
    'state' =>$sc->find('div.field-item.even',$i)->plaintext,
    'confirmedcases' => $sc->find('div.field-item.even',$i+1)->plaintext,
    'recovered' =>  $sc->find('div.field-item.even',$i+2)->plaintext,
    'death' =>  $sc->find('div.field-item.even',$i+3)->plaintext,
   
);


//Mizoram
$i=84;
$arr['statecount']['states'][] = array(
    
    'state' =>$sc->find('div.field-item.even',$i)->plaintext,
    'confirmedcases' => $sc->find('div.field-item.even',$i+1)->plaintext,
    'recovered' =>  $sc->find('div.field-item.even',$i+2)->plaintext,
    'death' =>  $sc->find('div.field-item.even',$i+3)->plaintext,
   
);

//Oddisha
$i=89;
$arr['statecount']['states'][] = array(
    
    'state' =>$sc->find('div.field-item.even',$i)->plaintext,
    'confirmedcases' => $sc->find('div.field-item.even',$i+1)->plaintext,
    'recovered' =>  $sc->find('div.field-item.even',$i+2)->plaintext,
    'death' =>  $sc->find('div.field-item.even',$i+3)->plaintext,
   
);

//Puducherry
$i=93;
$arr['statecount']['states'][] = array(
    
    'state' =>$sc->find('div.field-item.even',$i)->plaintext,
    'confirmedcases' => $sc->find('div.field-item.even',$i+1)->plaintext,
    'recovered' =>  $sc->find('div.field-item.even',$i+2)->plaintext,
    'death' =>  $sc->find('div.field-item.even',$i+3)->plaintext,
   
);

//Punjab
$i=98;
$arr['statecount']['states'][] = array(
    
    'state' =>$sc->find('div.field-item.even',$i)->plaintext,
    'confirmedcases' => $sc->find('div.field-item.even',$i+1)->plaintext,
    'recovered' =>  $sc->find('div.field-item.even',$i+2)->plaintext,
    'death' =>  $sc->find('div.field-item.even',$i+3)->plaintext,
   
);

//Rajesthan
$i=102;
$arr['statecount']['states'][] = array(
    
    'state' =>$sc->find('div.field-item.even',$i)->plaintext,
    'confirmedcases' => $sc->find('div.field-item.even',$i+1)->plaintext,
    'recovered' =>  $sc->find('div.field-item.even',$i+2)->plaintext,
    'death' =>  $sc->find('div.field-item.even',$i+3)->plaintext,
   
);


//TamilNadu
$i=107;
$arr['statecount']['states'][] = array(
    
    'state' =>$sc->find('div.field-item.even',$i)->plaintext,
    'confirmedcases' => $sc->find('div.field-item.even',$i+1)->plaintext,
    'recovered' =>  $sc->find('div.field-item.even',$i+2)->plaintext,
    'death' =>  $sc->find('div.field-item.even',$i+3)->plaintext,
   
);

//Telangana
$i=111;
$arr['statecount']['states'][] = array(
    
    'state' =>$sc->find('div.field-item.even',$i)->plaintext,
    'confirmedcases' => $sc->find('div.field-item.even',$i+1)->plaintext,
    'recovered' =>  $sc->find('div.field-item.even',$i+2)->plaintext,
    'death' =>  $sc->find('div.field-item.even',$i+3)->plaintext,
   
);

//Uttarakhand
$i=116;
$arr['statecount']['states'][] = array(
    
    'state' =>$sc->find('div.field-item.even',$i)->plaintext,
    'confirmedcases' => $sc->find('div.field-item.even',$i+1)->plaintext,
    'recovered' =>  $sc->find('div.field-item.even',$i+2)->plaintext,
    'death' =>  $sc->find('div.field-item.even',$i+3)->plaintext,
   
);

//UttarPradesh
$i=120;
$arr['statecount']['states'][] = array(
    
    'state' =>$sc->find('div.field-item.even',$i)->plaintext,
    'confirmedcases' => $sc->find('div.field-item.even',$i+1)->plaintext,
    'recovered' =>  $sc->find('div.field-item.even',$i+2)->plaintext,
    'death' =>  $sc->find('div.field-item.even',$i+3)->plaintext,
   
);

//WestBengal
$i=125;
$arr['statecount']['states'][] = array(
    
    'state' =>$sc->find('div.field-item.even',$i)->plaintext,
    'confirmedcases' => $sc->find('div.field-item.even',$i+1)->plaintext,
    'recovered' =>  $sc->find('div.field-item.even',$i+2)->plaintext,
    'death' =>  $sc->find('div.field-item.even',$i+3)->plaintext,
   
);

//Assam
$i=129;
$arr['statecount']['states'][] = array(
    
    'state' =>$sc->find('div.field-item.even',$i)->plaintext,
    'confirmedcases' => $sc->find('div.field-item.even',$i+1)->plaintext,
    'recovered' =>  $sc->find('div.field-item.even',$i+2)->plaintext,
    'death' =>  $sc->find('div.field-item.even',$i+3)->plaintext,
   
);

//Jharkhand
$i=134;
$arr['statecount']['states'][] = array(
    
    'state' =>$sc->find('div.field-item.even',$i)->plaintext,
    'confirmedcases' => $sc->find('div.field-item.even',$i+1)->plaintext,
    'recovered' =>  $sc->find('div.field-item.even',$i+2)->plaintext,
    'death' =>  $sc->find('div.field-item.even',$i+3)->plaintext,
   
);

//Arunachal Pradesh
$i=138;
$arr['statecount']['states'][] = array(
    
    'state' =>$sc->find('div.field-item.even',$i)->plaintext,
    'confirmedcases' => $sc->find('div.field-item.even',$i+1)->plaintext,
    'recovered' =>  $sc->find('div.field-item.even',$i+2)->plaintext,
    'death' =>  $sc->find('div.field-item.even',$i+3)->plaintext,
   
);

//Tripura
$i=143;
$arr['statecount']['states'][] = array(
    
    'state' =>$sc->find('div.field-item.even',$i)->plaintext,
    'confirmedcases' => $sc->find('div.field-item.even',$i+1)->plaintext,
    'recovered' =>  $sc->find('div.field-item.even',$i+2)->plaintext,
    'death' =>  $sc->find('div.field-item.even',$i+3)->plaintext,
   
);

//Nagaland
$i=147;
$arr['statecount']['states'][] = array(
    
    'state' =>$sc->find('div.field-item.even',$i)->plaintext,
    'confirmedcases' => $sc->find('div.field-item.even',$i+1)->plaintext,
    'recovered' =>  $sc->find('div.field-item.even',$i+2)->plaintext,
    'death' =>  $sc->find('div.field-item.even',$i+3)->plaintext,
   
);















//Count end





echo json_encode($arr);

?>
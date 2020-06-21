<?php define('DBHOST', 'localhost');  
define('DBNAME', 'PJ2-travel');  
define('DBUSER', 'testuser');  
define('DBPASS', 'mypassword');  
define('DBCONNSTRING','mysql:dbname=PJ2-travel;charset=utf8mb4;'); 
/*$sql='select * 
from geocities,geocontinents,geocountries,travelimage,travelimagefavor,traveluser
where geocontinents.ContinentCode=geocountries.fipsCountryCode
and geocities.GeoNameID=geocountries.GeoNameID
and geocities.CountryCodeISO=travelimage.CountryCodeISO
and travelimage.UID=traveluser.UID
and travelimage.ImageID=travelimagefavor.ImageID
and traveluser.UID=travelimagefavor.UID
';*/
?>
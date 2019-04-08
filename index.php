<?php
function disclaimer($us,$company,$website){
	if(!isset($us) || empty($us) || !isset($company) || empty($company) || !isset($website) || empty($website)){
		die('something is missing...');
	}	
$text = "Notice of Non-Affiliation and Disclaimer<br><br>
		We are not affiliated, associated, authorized, endorsed by, or in any way officially connected with $company, or any of its subsidiaries or its affiliates. The official $company website can be found at $website. The name $company as well as related names, marks, emblems and images are registered trademarks of $company.<br><br>
		The use in this website and/or in related promotional print or video material of trademarked names and images is strictly for editorial and descriptive purposes, and no commercial claim to their use, or suggestion of sponsorship or endorsement, is made by $us. Those words or terms that the authors and publisher have reason to believe are trademarks are designated as such by the use of initial capitalization, where appropriate. However no attempt has been made to identify or designate all words or terms to which trademark or other proprietary rights may exist. Nothing contained herein is intended to express a judgment on, or affect the validity of legal status of, any word or term as a trademark, service mark, or other proprietary mark. 
		</p>";	
echo $text;
}
// you, their name, their website
disclaimer('Us','Example','www.example.com');
?>

<?php

$inhalt = array(
	array(
		"titel" => "Tokyo Japan",
		"inhalt" => "Tokyo, Japan’s busy capital, mixes the ultramodern and the traditional, from neon-lit skyscrapers to historic temples. The opulent Meiji Shinto Shrine is known for its towering gate and surrounding woods. The Imperial Palace sits amid large public gardens. The city's many museums offer exhibits ranging from classical art (in the Tokyo National Museum) to a reconstructed kabuki theater (in the Edo-Tokyo Museum).",
		"erstellt" => "",
		"preis" => "399€",
		"bild" => "img/tokyo_japan1.jpg",
		"url" => "destinations/tokyo.html"
		 ),
	array(
			"titel" => "Pai Thailand",
			"inhalt" => "Pai is a small town in northern Thailand's Mae Hong Son Province, near the Myanmar border, about 146 km north-west of Chiang Mai on the northern route to Mae Hong Son. It lies on the Pai River.",
			"erstellt" => "",
			"preis" => "199€",
			"bild" => "img/pai_thailand.jpg",
			"url" => "destinations/pai.html"
			 ),
	array(
			"titel" => "South Korea Seoul",
			"inhalt" => "Seoul, the capital of South Korea, is a huge metropolis where modern skyscrapers, high-tech subways and pop culture meet Buddhist temples, palaces and street markets. Notable attractions include futuristic Dongdaemun Design Plaza, a convention hall with curving architecture and a rooftop park; Gyeongbokgung Palace, which once had more than 7,000 rooms; and Jogyesa Temple, site of ancient locust and pine trees.",
			"erstellt" => "",
			"preis" => "299€",
			"bild" => "img/south_korea_seoul3.jpg",
			"url" => "destinations/seoul.html",
			 ),
	);

// Index der Arrazs in denen sucht vorkommt
array(0,1,2);

file_put_contents("daten/inhalt.txt", serialize($inhalt));
 ?>
<!-- inhalt[0][1] -->

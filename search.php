<!DOCTYPE html>
<html>
<head>
	<title>Gateway</title>
	<style type="text/css">
		
* {
	margin: 0;
	padding: 0;
	font-family: "Century Gothic";
}

#Gateway {
	margin: 0px;
	letter-spacing: 0%;
	font-size: 30px;
	position: absolute;
	top: 1%;
	left: 2%;
}

#G {
	
	color: #6F79FF;
	
}

.a {
	
	color: #A37900;
	
}

#t {
	
	color: red;
	
}

#e {
	
	color: purple;
	
}

#w {
	
	color: purple;
	
}


#y {
	
	color: #6F79FF;
	
}

#search-icon {
	position: fixed;
	left: 35%;
	top: 37.5%;
	z-index: 2;
}

.search-text-field {
	height: 42.5px;
    width: 600px;


    border-radius: 20px;

    font-size: 17.5px;
    text-indent: 50px;
}

.search-text-field:focus {
	border-width: medium;
}

.margin-class {
	margin-left: 200px;
}


.autocomplete {
	position: relative;
	top: 10px;
	left: 10%;
	display: inline-block;

}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}

.margin-class a {
	color: #800080;
	text-decoration: none;

}

	</style>
	<link rel="stylesheet" type="text/css" href="C://localhost/void/searchPage.css">
</head>
<body>
	<a href="search.html"><h1 id="Gateway"><span id="G">g</span><span class="a">a</span><span id="t">t</span><span id="e">e</span><span id="w">w</span><span class="a">a</span><span id="y">y</span></h1></a>

		<div id="search-container">
			<form autocomplete="off" action="http://localhost/search.php" method="get">
				<i class="fa fa-search" aria-hidden="true" id="search-icon"></i>
				<div class="autocomplete">
					<input type="text" name="q" class="search-text-field" selectionDirection="aria-hidden" id="myInput" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }">
				</div>
			</form>
		</div>

		<script>
function autocomplete(inp, arr) {
  var currentFocus;
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      this.parentNode.appendChild(a);
      for (i = 0; i < arr.length; i++) {
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          b = document.createElement("DIV");
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          b.addEventListener("click", function(e) {
              inp.value = this.getElementsByTagName("input")[0].value;
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        currentFocus++;
        addActive(x);
      } else if (e.keyCode == 38) { //up
        addActive(x);
      } else if (e.keyCode == 13) {
        e.preventDefault();
        if (currentFocus > -1) {
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    if (!x) return false;
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

autocomplete(document.getElementById("myInput"), countries);

</script> 

	<?php
	$pdo = new PDO('mysql:host=127.0.0.1;dbname=gateway-db-main', 'root', '');

	$search = $_GET['q'];
	$searche = explode(" ", $search);
	$x = 0;
	$construct = "";
	$construct2 = "";
	$params = array();
	$params2 = array();
	$params3 = array();

	$page_rank = 0;

	foreach ($searche as $term) {
		$x++;

		if ($x == 1) {
			$construct .= "(title LIKE CONCAT('%',:search$x,'%') OR description LIKE CONCAT('%',:search$x,'%') OR keywords LIKE CONCAT('%',:search$x,'%'))";
		} else {
			$construct .= " AND (title LIKE CONCAT('%',:search$x,'%') OR description LIKE CONCAT('%',:search$x,'%') OR keywords LIKE CONCAT('%',:search$x,'%'))";
		}

		$search_test = "title = CONCAT('%',:search$x,'%')";


		// $ranked = $pdo->prepare("UPDATE `search-engine-db` SET page_rank='1' WHERE title=$search");

		// if ($term == $search) {
		// }

		// $construct2 .= "title=CONCAT('%',:search$x,'%') ";


		// echo nl2br("%".":search$x"."%"."\n");


		$params[":search$x"] = $term;

	}


/*	$results = $pdo->prepare("UPDATE `search-index` SET id='1' WHERE $construct2");
*/
	

	$ranked = $pdo->prepare("UPDATE `search-engine-db` SET page_rank=1 WHERE $search_test");

	echo $search."<br>";
	echo $search_test;
	
	$ranked->execute();



	$results = $pdo->prepare("SELECT * FROM `search-engine-db` WHERE $construct ORDER BY page_rank");


	$results->execute($params);
	// $results->execute($params2);
	// $results->execute($params3);


	


	echo "<br><br><br>";

	if ($results->rowCount() == 0) {
		echo "<span class='margin-class'>"."No results found"."</span>";
	} elseif ($results->rowCount() == 1) {
		echo "<span class='margin-class'>"."1 result found"."</span>";
	} else {
		echo "<span class='margin-class'>".number_format($results->rowCount())." results found"."</span>";
	}

	echo "<br><br><br>";

	echo "<pre>";
//<span class='margin-class' style='color: #800080; font-size: 25px;'>".
	foreach ($results->fetchAll() as $result) {

		echo "<span class='margin-class' style='color: green; font-size: 15px;'>".$result["url"]."</span><br>";
		echo "<span class='margin-class' style='color: #800080; font-size: 25px;'>"."<a href=".$result["url"].">".$result["title"]."</a></span><br>";
		if ($result["description"] == "") {
			echo "<span class='margin-class'>"."No description available."."</span><br>";
		} else {
			echo "<span class='margin-class'>".$result["description"]."</span><br>";
		}
		echo "<br><br><br><br>";
	}

	// print_r($results->fetchAll());

	?>
</body>
</html>

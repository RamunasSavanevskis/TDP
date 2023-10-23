<!DOCTYPE html>
<?php
function mapNumberToRange($inputNumber) {
    if ($inputNumber == "NA"){
	return 100;
    } else {
      return 100 - $inputNumber;
    }
}
    if (isset($_POST['data'])) {
        $encodedArray = $_POST['data'];
	$all_data_json2 = $encodedArray;
        $all_data = json_decode($encodedArray, true);
        $gotten_number = $all_data[0];
    } 
?>


<script>
var allData = <?php echo $all_data_json2; ?>;
</script>
<html>
<h1>Section of 10 welds </h1>
<h4>The weld's quality is represented by 3 colours - the first is the result of the preliminary hydrogen embrittlement assessment, the second is a measure of crack size and the third is the result of the spherical indenter test. Darker colour is worse</h4>
<head>

<style>
    #rectangle {
        position: absolute;
	border: 2px solid #000;
        border-radius: 10px;     
        background-color: #FFFFFF; 
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 90%;
        height: 30%;
        background-color: #3498db; /* Blue color */
    }
    .inner-rectangle{
	position: absolute;
        top: 50%;
	transform: translate(-50%, -50%);
        width: 1.2%;
        height: 30%;
	margin: 0 auto;
        cursor: pointer; 
        left: 20%;
         transition: width 0.3s, height 0.3s; 
     }
     .inner-rectangle:hover {
        width: 3%; 
        height: 34%; 
    }
#inner-rectangle01 {
    left: 10%;
    background-color: <?php echo "hsl(240, 100%, " . mapNumberToRange($all_data[$gotten_number][0][0]) . "%)" ?>;
}

#inner-rectangle02 {
    left: 11.2%;
    background-color: <?php echo "hsl(300, 100%, " . mapNumberToRange($all_data[$gotten_number][0][1]) . "%)" ?>;
}

#inner-rectangle03 {
    left: 12.4%;
    background-color: <?php echo "hsl(350, 100%, " . mapNumberToRange($all_data[$gotten_number][0][2]) . "%)" ?>;
}

#inner-rectangle11 {
    left: 18.4%;
    background-color: <?php echo "hsl(240, 100%, " . mapNumberToRange($all_data[$gotten_number][1][0]) . "%)" ?>;
}

#inner-rectangle12 {
    left: 19.6%;
    background-color: <?php echo "hsl(300, 100%, " . mapNumberToRange($all_data[$gotten_number][1][1]) . "%)" ?>;
}

#inner-rectangle13 {
    left: 20.8%;
    background-color: <?php echo "hsl(350, 100%, " . mapNumberToRange($all_data[$gotten_number][1][2]) . "%)" ?>;
}

#inner-rectangle21 {
    left: 26.8%;
    background-color: <?php echo "hsl(240, 100%, " . mapNumberToRange($all_data[$gotten_number][2][0]) . "%)" ?>;
}

#inner-rectangle22 {
    left: 28%;
    background-color: <?php echo "hsl(300, 100%, " . mapNumberToRange($all_data[$gotten_number][2][1]) . "%)" ?>;
}

#inner-rectangle23 {
    left: 29.2%;
    background-color: <?php echo "hsl(350, 100%, " . mapNumberToRange($all_data[$gotten_number][2][2]) . "%)" ?>;
}

#inner-rectangle31 {
    left: 35.2%;
    background-color: <?php echo "hsl(240, 100%, " . mapNumberToRange($all_data[$gotten_number][3][0]) . "%)" ?>;
}

#inner-rectangle32 {
    left: 36.4%;
    background-color: <?php echo "hsl(300, 100%, " . mapNumberToRange($all_data[$gotten_number][3][1]) . "%)" ?>;
}

#inner-rectangle33 {
    left: 37.6%;
    background-color: <?php echo "hsl(350, 100%, " . mapNumberToRange($all_data[$gotten_number][3][2]) . "%)" ?>;
}

#inner-rectangle41 {
    left: 43.6%;
    background-color: <?php echo "hsl(240, 100%, " . mapNumberToRange($all_data[$gotten_number][4][0]) . "%)" ?>;
}

#inner-rectangle42 {
    left: 44.8%;
    background-color: <?php echo "hsl(300, 100%, " . mapNumberToRange($all_data[$gotten_number][4][1]) . "%)" ?>;
}

#inner-rectangle43 {
    left: 46%;
    background-color: <?php echo "hsl(350, 100%, " . mapNumberToRange($all_data[$gotten_number][4][2]) . "%)" ?>;
}

#inner-rectangle51 {
    left: 52%;
    background-color: <?php echo "hsl(240, 100%, " . mapNumberToRange($all_data[$gotten_number][5][0]) . "%)" ?>;
}

#inner-rectangle52 {
    left: 53.2%;
    background-color: <?php echo "hsl(300, 100%, " . mapNumberToRange($all_data[$gotten_number][5][1]) . "%)" ?>;
}

#inner-rectangle53 {
    left: 54.4%;
    background-color: <?php echo "hsl(350, 100%, " . mapNumberToRange($all_data[$gotten_number][5][2]) . "%)" ?>;
}

#inner-rectangle61 {
    left: 60.4%;
    background-color: <?php echo "hsl(240, 100%, " . mapNumberToRange($all_data[$gotten_number][6][0]) . "%)" ?>;
}

#inner-rectangle62 {
    left: 61.6%;
    background-color: <?php echo "hsl(300, 100%, " . mapNumberToRange($all_data[$gotten_number][6][1]) . "%)" ?>;
}

#inner-rectangle63 {
    left: 62.8%;
    background-color: <?php echo "hsl(350, 100%, " . mapNumberToRange($all_data[$gotten_number][6][2]) . "%)" ?>;
}

#inner-rectangle71 {
    left: 68.8%;
    background-color: <?php echo "hsl(240, 100%, " . mapNumberToRange($all_data[$gotten_number][7][0]) . "%)" ?>;
}

#inner-rectangle72 {
    left: 70%;
    background-color: <?php echo "hsl(300, 100%, " . mapNumberToRange($all_data[$gotten_number][7][1]) . "%)" ?>;
}

#inner-rectangle73 {
    left: 71.2%;
    background-color: <?php echo "hsl(350, 100%, " . mapNumberToRange($all_data[$gotten_number][7][2]) . "%)" ?>;
}

#inner-rectangle81 {
    left: 77.2%;
    background-color: <?php echo "hsl(240, 100%, " . mapNumberToRange($all_data[$gotten_number][8][0]) . "%)" ?>;
}

#inner-rectangle82 {
    left: 78.4%;
    background-color: <?php echo "hsl(300, 100%, " . mapNumberToRange($all_data[$gotten_number][8][1]) . "%)" ?>;
}

#inner-rectangle83 {
    left: 79.6%;
    background-color: <?php echo "hsl(350, 100%, " . mapNumberToRange($all_data[$gotten_number][8][2]) . "%)" ?>;
}

#inner-rectangle91 {
    left: 85.6%;
    background-color: <?php echo "hsl(240, 100%, " . mapNumberToRange($all_data[$gotten_number][9][0]) . "%)" ?>;
}

#inner-rectangle92 {
    left: 86.8%;
    background-color: <?php echo "hsl(300, 100%, " . mapNumberToRange($all_data[$gotten_number][9][1]) . "%)" ?>;
}

#inner-rectangle93 {
    left: 88%;
    background-color: <?php echo "hsl(350, 100%, " . mapNumberToRange($all_data[$gotten_number][9][2]) . "%)" ?>;
}


   
</style>

</head>
<body>
    <div id="rectangle"></div>
    <div class="inner-rectangle" id="inner-rectangle01" onclick="showPopup(01)" onmouseover="onHoverFunction(01)"></div>
<div class="inner-rectangle" id="inner-rectangle02" onclick="showPopup(02)" onmouseover="onHoverFunction(02)"></div>
<div class="inner-rectangle" id="inner-rectangle03" onclick="showPopup(03)" onmouseover="onHoverFunction(03)"></div>
<div class="inner-rectangle" id="inner-rectangle11" onclick="showPopup(11)" onmouseover="onHoverFunction(11)"></div>
<div class="inner-rectangle" id="inner-rectangle12" onclick="showPopup(12)" onmouseover="onHoverFunction(12)"></div>
<div class="inner-rectangle" id="inner-rectangle13" onclick="showPopup(13)" onmouseover="onHoverFunction(13)"></div>
<div class="inner-rectangle" id="inner-rectangle21" onclick="showPopup(21)" onmouseover="onHoverFunction(21)"></div>
<div class="inner-rectangle" id="inner-rectangle22" onclick="showPopup(22)" onmouseover="onHoverFunction(22)"></div>
<div class="inner-rectangle" id="inner-rectangle23" onclick="showPopup(23)" onmouseover="onHoverFunction(23)"></div>
<div class="inner-rectangle" id="inner-rectangle31" onclick="showPopup(31)" onmouseover="onHoverFunction(31)"></div>
<div class="inner-rectangle" id="inner-rectangle32" onclick="showPopup(32)" onmouseover="onHoverFunction(32)"></div>
<div class="inner-rectangle" id="inner-rectangle33" onclick="showPopup(33)" onmouseover="onHoverFunction(33)"></div>
<div class="inner-rectangle" id="inner-rectangle41" onclick="showPopup(41)" onmouseover="onHoverFunction(41)"></div>
<div class="inner-rectangle" id="inner-rectangle42" onclick="showPopup(42)" onmouseover="onHoverFunction(42)"></div>
<div class="inner-rectangle" id="inner-rectangle43" onclick="showPopup(43)" onmouseover="onHoverFunction(43)"></div>
<div class="inner-rectangle" id="inner-rectangle51" onclick="showPopup(51)" onmouseover="onHoverFunction(51)"></div>
<div class="inner-rectangle" id="inner-rectangle52" onclick="showPopup(52)" onmouseover="onHoverFunction(52)"></div>
<div class="inner-rectangle" id="inner-rectangle53" onclick="showPopup(53)" onmouseover="onHoverFunction(53)"></div>
<div class="inner-rectangle" id="inner-rectangle61" onclick="showPopup(61)" onmouseover="onHoverFunction(61)"></div>
<div class="inner-rectangle" id="inner-rectangle62" onclick="showPopup(62)" onmouseover="onHoverFunction(62)"></div>
<div class="inner-rectangle" id="inner-rectangle63" onclick="showPopup(63)" onmouseover="onHoverFunction(63)"></div>
<div class="inner-rectangle" id="inner-rectangle71" onclick="showPopup(71)" onmouseover="onHoverFunction(71)"></div>
<div class="inner-rectangle" id="inner-rectangle72" onclick="showPopup(72)" onmouseover="onHoverFunction(72)"></div>
<div class="inner-rectangle" id="inner-rectangle73" onclick="showPopup(73)" onmouseover="onHoverFunction(73)"></div>
<div class="inner-rectangle" id="inner-rectangle81" onclick="showPopup(81)" onmouseover="onHoverFunction(81)"></div>
<div class="inner-rectangle" id="inner-rectangle82" onclick="showPopup(82)" onmouseover="onHoverFunction(82)"></div>
<div class="inner-rectangle" id="inner-rectangle83" onclick="showPopup(83)" onmouseover="onHoverFunction(83)"></div>
<div class="inner-rectangle" id="inner-rectangle91" onclick="showPopup(91)" onmouseover="onHoverFunction(91)"></div>
<div class="inner-rectangle" id="inner-rectangle92" onclick="showPopup(92)" onmouseover="onHoverFunction(92)"></div>
<div class="inner-rectangle" id="inner-rectangle93" onclick="showPopup(93)" onmouseover="onHoverFunction(93)"></div>


    <script>
var gottenNumber = <?php echo $gotten_number; ?>;
function showPopup(number) {
        var strNumber = number.toString();
        var firstDigit = strNumber.length > 1 ? parseInt(strNumber.charAt(0)) : 0;
        var secondDigit = parseInt(strNumber.charAt(strNumber.length - 1)) - 1; // Decrease by 1

         var value = allData[gottenNumber][firstDigit][secondDigit];
            
         if (secondDigit == 0) {
	    $windowText = `Preliminary fracture toughness of pipe 0${gottenNumber}${firstDigit}: ${value}`;
            openNewWindow("preliminary_results.php", "Preliminary Results", $windowText);
          } else if (secondDigit == 1) {
	    $windowText = `Crack size of pipe 0${gottenNumber}${firstDigit}: ${value}`;
            openNewWindow("crack_results.php", "Crack Results", $windowText);
          } else if (secondDigit == 2) {
            if (value == "NA") {
	      $windowText = `No spherical indenter tests done on this weld for pipe 0${gottenNumber}${firstDigit}`;
              openNewWindow("spherical_results.php", "Spherical Results", $windowText);
            } else {
	      $windowText = `Secondary estimate of fracture toughness of pipe 0${gottenNumber}${firstDigit}: ${value}`;
              openNewWindow("spherical_results2.php", "Spherical Results", $windowText);
            }

        } 
    } 

function openNewPage(page, title, content) {
    var url = page + "?title=" + encodeURIComponent(title) + "&content=" + encodeURIComponent(content);
    window.open(url, "_blank");
}
function openNewWindow(page, title, content) {
var width = 500;
var height = 300;
var left = 0;
    var top = 0;

    var features = `width=${width},height=${height},left=${left},top=${top}`;

    var url = page + "?title=" + encodeURIComponent(title) + "&content=" + encodeURIComponent(content);
    window.open(url, "_blank", features);
}


function onHoverFunction(number) {
    var strNumber = number.toString();
    var firstDigit = strNumber.length > 1 ? parseInt(strNumber.charAt(0)) : 0;
    var secondDigit = parseInt(strNumber.charAt(strNumber.length - 1)) - 1; 
    var value = allData[gottenNumber][firstDigit][secondDigit]; 
    var textElement = document.createElement("div");
    textElement.innerText = value;
    textElement.style.position = "absolute";
    textElement.style.top = "-20px"; // Adjust the value for the desired distance above the div
    textElement.style.left = "0";
    var container = document.getElementById("inner-rectangle" + (number >= 10 ? number : "0" + number));
    container.appendChild(textElement);
    container.onmouseout = function() {
      container.removeChild(textElement);
    };
}


    </script>
</body>
</html>

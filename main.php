<?php 
function mapRange2($value, $inMin=0.2, $inMax=0.3, $outMin = 100, $outMax = 0) {
    $value = max($inMin, min($inMax, $value));
    $proportion = ($value - $inMin) / ($inMax - $inMin);
    return 100-($outMax - ($proportion * ($outMax - $outMin)));
}
if (!isset($all_data9)){
$total_values = array();
$all_data9 = array();
for ($i = 0; $i < 21; $i++) {
    $data_set = [];
    for ($j = 0; $j < 10; $j++) {
        $inner_array = [];
        for ($k = 0; $k < 3; $k++) {
            $random_number = mt_rand(0, 99); // Generate a random number between 0 and 99
            if ($k === 2) {
                $random_number = mt_rand(0, 9); // Generate a number between 0 and 9
                if ($random_number === 0) {
                    $inner_array[] = mt_rand(0, 100);
                } else {
                    $inner_array[] = "NA";
                }
            } else {
                $random_number = mt_rand(0, 100);
                if ($random_number <= 90) {
                    $inner_array[] = mt_rand(0, 20); // Generate a number between 0 and 20
                } else {
                    $inner_array[] = mt_rand(0, 99); // Generate a number between 21 and 99
                }
            }
        }
        
        $data_set[] = $inner_array;
    }
    $sum = 0;
    foreach ($data_set as $inner_array) {
        foreach ($inner_array as $value) {
            if ($value === "NA") {
                $sum += 50;
            } else {
                $sum += $value;
            }
        }
    }
    $all_data9[] = $data_set;
    $total_values[] = $sum/3000;
}
};
?>
<?php
$all_data_json = json_encode($all_data9);
?>
<script>
const multiDimArray = <?php echo $all_data_json; ?>;
</script>
<!DOCTYPE html>
<html>
<h1>Large section of pipe </h1>
<h4>A section of the pipe showing collections of 10 welds and how poor/good they are. Black = very risky, white = no risk </h4>
<head>
<style>
    #rectangle {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 90%;
        height: 30%;
        background-color: #3498db; /* Blue color */
    }
    .inner-rectangle {
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 2%;
        height: 30%;
        margin: 0 auto;
        cursor: pointer; 
        transition: width 0.3s, height 0.3s; 
    }
    #inner-rectangle1 {
        left: 10%;
        background-color: <?php echo "hsl(0, 0%, " . mapRange2($total_values[0]) .  "%)" ?>;
    }
    #inner-rectangle2 {
        left: 14%;
        background-color: <?php echo "hsl(0, 0%, " . mapRange2($total_values[1]) .  "%)" ?>;
    }
   #inner-rectangle3 {
    left: 18%;
    background-color: hsl(0, 0%, <?php echo mapRange2($total_values[2]); ?>%);
}

#inner-rectangle4 {
    left: 22%;
    background-color: hsl(0, 0%, <?php echo mapRange2($total_values[3]); ?>%);
}

#inner-rectangle5 {
    left: 26%;
    background-color: hsl(0, 0%, <?php echo mapRange2($total_values[4]); ?>%);
}

#inner-rectangle6 {
    left: 30%;
    background-color: hsl(0, 0%, <?php echo mapRange2($total_values[5]); ?>%);
}

#inner-rectangle7 {
    left: 34%;
    background-color: hsl(0, 0%, <?php echo mapRange2($total_values[6]); ?>%);
}

#inner-rectangle8 {
    left: 38%;
    background-color: hsl(0, 0%, <?php echo mapRange2($total_values[7]); ?>%);
}

#inner-rectangle9 {
    left: 42%;
    background-color: hsl(0, 0%, <?php echo mapRange2($total_values[8]); ?>%);
}

#inner-rectangle10 {
    left: 46%;
    background-color: hsl(0, 0%, <?php echo mapRange2($total_values[9]); ?>%);
}

#inner-rectangle11 {
    left: 50%;
    background-color: hsl(0, 0%, <?php echo mapRange2($total_values[10]); ?>%);
}

#inner-rectangle12 {
    left: 54%;
    background-color: hsl(0, 0%, <?php echo mapRange2($total_values[11]); ?>%);
}

#inner-rectangle13 {
    left: 58%;
    background-color: hsl(0, 0%, <?php echo mapRange2($total_values[12]); ?>%);
}

#inner-rectangle14 {
    left: 62%;
    background-color: hsl(0, 0%, <?php echo mapRange2($total_values[13]); ?>%);
}

#inner-rectangle15 {
    left: 66%;
    background-color: hsl(0, 0%, <?php echo mapRange2($total_values[14]); ?>%);
}

#inner-rectangle16 {
    left: 70%;
    background-color: hsl(0, 0%, <?php echo mapRange2($total_values[15]); ?>%);
}

#inner-rectangle17 {
    left: 74%;
    background-color: hsl(0, 0%, <?php echo mapRange2($total_values[16]); ?>%);
}

#inner-rectangle18 {
    left: 78%;
    background-color: hsl(0, 0%, <?php echo mapRange2($total_values[17]); ?>%);
}

#inner-rectangle19 {
    left: 82%;
    background-color: hsl(0, 0%, <?php echo mapRange2($total_values[18]); ?>%);
}

#inner-rectangle20 {
    left: 86%;
    background-color: hsl(0, 0%, <?php echo mapRange2($total_values[19]); ?>%);
}

#inner-rectangle21 {
    left: 90%;
    background-color: hsl(0, 0%, <?php echo mapRange2($total_values[20]); ?>%);
}

</style>
</head>
<body>
    <div id="rectangle"></div>
    <div class="inner-rectangle" id="inner-rectangle1" onclick="callHTML(1)"></div>
    <div class="inner-rectangle" id="inner-rectangle2" onclick="callHTML(2)"></div>
    <div class="inner-rectangle" id="inner-rectangle3" onclick="callHTML(3)"></div>
    <div class="inner-rectangle" id="inner-rectangle4" onclick="callHTML(4)"></div>
    <div class="inner-rectangle" id="inner-rectangle5" onclick="callHTML(5)"></div>
    <div class="inner-rectangle" id="inner-rectangle6" onclick="callHTML(6)"></div>
    <div class="inner-rectangle" id="inner-rectangle7" onclick="callHTML(7)"></div>
    <div class="inner-rectangle" id="inner-rectangle8" onclick="callHTML(8)"></div>
    <div class="inner-rectangle" id="inner-rectangle9" onclick="callHTML(9)"></div>
    <div class="inner-rectangle" id="inner-rectangle10" onclick="callHTML(10)"></div>
    <div class="inner-rectangle" id="inner-rectangle11" onclick="callHTML(11)"></div>
    <div class="inner-rectangle" id="inner-rectangle12" onclick="callHTML(12)"></div>
    <div class="inner-rectangle" id="inner-rectangle13" onclick="callHTML(13)"></div>
    <div class="inner-rectangle" id="inner-rectangle14" onclick="callHTML(14)"></div>
    <div class="inner-rectangle" id="inner-rectangle15" onclick="callHTML(15)"></div>
    <div class="inner-rectangle" id="inner-rectangle16" onclick="callHTML(16)"></div>
    <div class="inner-rectangle" id="inner-rectangle17" onclick="callHTML(17)"></div>
    <div class="inner-rectangle" id="inner-rectangle18" onclick="callHTML(18)"></div>
    <div class="inner-rectangle" id="inner-rectangle19" onclick="callHTML(19)"></div>
    <div class="inner-rectangle" id="inner-rectangle20" onclick="callHTML(20)"></div>
    <div class="inner-rectangle" id="inner-rectangle21" onclick="callHTML(21)"></div>
    <!-- Add more inner rectangles here as needed -->
<script>
        function callHTML(number) {
            
	    var multiDimArray2 = multiDimArray;
	    if (Array.isArray(multiDimArray[0])) {
    		multiDimArray2.unshift(number);
	    } else {
		multiDimArray2.shift();
		multiDimArray2.unshift(number);
            }
            const multiDimArray3 = multiDimArray2;
            const encodedArray = JSON.stringify(multiDimArray3);
            const form = document.createElement('form');
            form.action = 'html2.php';
            form.method = 'post';
            const dataInput = document.createElement('input');
            dataInput.type = 'hidden';
            dataInput.name = 'data';
            dataInput.value = encodedArray;
            form.appendChild(dataInput);
            form.target = '_blank';
            document.body.appendChild(form);
            form.submit();
        }
    </script>


</body>

</html>


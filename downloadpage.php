<?php
echo $_GET['psentence'];

echo "<!DOCTYPE html>
<html>

	<head>

		<title>Butterfly Puzzles - Download</title>
		<link rel=\"stylesheet\" href=\"downloadstyle2.css\"
		type=\"text/css\">
	</head>
	<body>
	<button class=\"about\" onclick=\"location.href='index.html'\" type=\"button\">
				Home
	</button>	
	<button class=\"about\" onclick=\"location.href='about.html'\" type=\"button\">
				About
	</button>
	<button class=\"about\" onclick=\"location.href='acrostic.html'\" type=\"button\">
				Acrostic Puzzle
	</button>
	<button class=\"about\" onclick=\"location.href='double.html'\" type=\"button\">
				Double Puzzle
	</button>
	<button class=\"about\" onclick=\"location.href='quote.html'\" type=\"button\">
				Drop Quote Puzzle
	</button>
	<button class=\"about\" onclick=\"location.href='wordsearch.html'\" type=\"button\">
				Word Search Puzzle
	</button>
	<button class=\"about\" onclick=\"location.href='conjunction.html'\" type=\"button\">
				Conjunction Junction Puzzle
	</button>
		<div class=\"heading\">
			<span class=\"title1\">Butterfly Puzzles</span>
			<span class=\"title2\">Chain Puzzle Generating Website</span>
		

			";



/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "dictionary");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution

$sql2 = "SELECT * FROM quotes";
$listofQuotes = "";
if($result2 = mysqli_query($link, $sql2)){
    if(mysqli_num_rows($result2) > 0){
        while($row = mysqli_fetch_array($result2)){
	if($listofQuotes == ""){     $listofQuotes =  "" . $row['quote'] ;

}else{
         $listofQuotes =   $listofQuotes . "," . $row['quote'] ;}
        }
echo "<script> var cookie3 = \"" . $listofQuotes . "\"; </script>";

$sql = "SELECT * FROM words";
$listofWords = "";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
if($listofWords == ""){     $listofWords =  "" . $row['word'] ;

}else{
         $listofWords =   $listofWords . " " . $row['word'] ;}
        }

	echo "<script> var cookie = \"" . $listofWords . "\"; </script>";

echo "<script> var cookie2 = \"" . $_GET['psentence'] . "\"; </script>";


echo "
<!DOCTYPE html>
<html>
<body>


<p class class=\"doNotShow\">
<p id=\"puzzles\"></p>
<p id=\"solution\"></p>
</p>

<script type=\"text/javascript\"> 
var sentence =cookie2;
</script>";
echo "

<script type=\"text/javascript\"> 
var buttons = [0,1,2,3];
</script>

<script type=\"text/javascript\">
var error = 0;
var endSolutionEND = \"\";
var endPuzzlesEND = \"\";

function wordSearch(wordGiven){

var hiddenWord = wordGiven.toUpperCase();
var cookies = cookie.toUpperCase();
const values = cookies.split(\" \");
//const values = [ \"TAIL\", \"EAT\", \"SAD\", \"TALK\",\"ME\", \"NO\", \"RAGE\", \"HUG\"];
var grid = new Array(hiddenWord.length+3);

for (var i = 0; i < grid.length; i++) {
  grid[i] = new Array(hiddenWord.length+3).fill(\"\");
}

const words = [];

for(var letter = 0; letter < hiddenWord.length; letter++){
	
	var k = Math.floor(Math.random() * values.length);
	for(let i = 0; i < values.length; i++){
		var check = values[k];
        k++;
        if(k >= values.length){
        	k = 0;
        }
        
        if((check.charAt(0) == hiddenWord.charAt(letter)) && (check.length <= hiddenWord.length+3)){
  
        	if(!(words.includes(check))){
    			words.push(check);
              break;
            
        	}       
    	}
    }
}

var nope = 0;
if(words.length != hiddenWord.length){
    error = 1;
endSolutionEND = \"ERROR\";
endPuzzlesEND = \"ERROR\";
}
";
echo "
else{
for(var val = 0; val < words.length; val++){
	var reverse = Math.floor(Math.random() * 2);
	var direction = Math.floor(Math.random() * 3);
	var word = words[val];
    var fit = 0;
    var dirCount = 0;
    while(dirCount < 2 && fit == 0){
    direction++;
    if(direction >= 3){
    	direction = 0;
    }
    if(reverse == 1){
    	var temp = \"\";
    	for(var letter = word.length-1; letter >= 0; letter--){
        	temp += word[letter];
        }
        word = temp;
        reverse = 0;
    }
    else{
    	reverse = 1;
    }
  
    if(direction == 2 && dirCount < 2 && fit == 0){
    	dirCount++;
    	var currentCol = Math.floor(Math.random() * grid.length);
        for(var col = 0; col < grid.length; col++){
        		currentCol++;
        		if(currentCol >= grid.length){
        			currentCol = 0;
        		}
                var currentRow = Math.floor(Math.random() * grid.length);
                for(var row = 0; row < grid[0].length; row++){
                	currentRow++;
            		if(currentRow >= grid[currentCol].length){
             			currentRow = 0;
            		}
                
                    if((grid.length - currentCol) >= word.length && (grid[currentCol].length - currentRow >= word.length)){
                    	for(var letter = 0; letter < word.length; letter++){
                        	if(word.charAt(letter) == grid[currentCol+letter][currentRow+letter] 						|| grid[currentCol+letter][currentRow+letter] == \"\"){
                            
                            	fit = 1;
                            }
                            else{
                            	fit = 0;
                                break;
                            }
                        
                        }
                        if(fit == 1){
                        	for(var letter = 0; letter < word.length; letter++){
                            grid[currentCol+letter][currentRow+letter] = word.charAt(letter);
                            
                            }
                        }
                        
                    
                    }
                    if(fit == 1){
            			break;
            		}  
                  
                }
                 if(fit == 1){
            		break;
            	}  
         
         }
    	
    
	}
";
    echo "
    if(direction == 1  && dirCount < 2 && fit == 0){
    	dirCount++;
    	var currentRow = Math.floor(Math.random() * grid.length);
        for(var row = 0; row < grid[0].length; row++){
        	currentRow++;
            if(currentRow >= grid[0].length){
             currentRow = 0;
            }
        	var currentCol = Math.floor(Math.random() * grid.length);
            for(var col = 0; col < grid.length; col++){
            	currentCol++;
        		if(currentCol >= grid.length){
        			currentCol = 0;
        		}
                if(grid.length - currentCol >= word.length){
                	for(var letter = 0; letter < word.length; letter++){
                    	if(word.charAt(letter) == grid[currentCol+letter][currentRow] 						|| grid[currentCol+letter][currentRow] == \"\"){
                			fit = 1;
                		}
                		else{
                			fit = 0;
                    		break;
                		}
                    }
                    if(fit == 1){
                		for(var letter = 0; letter < word.length; letter++){
                    		grid[currentCol+letter][currentRow] = word.charAt(letter);
            			}
                	}
                
                }
                if(fit == 1){
            		break;
            	}   
            }
            if(fit == 1){
            	break;
            }
        }
    
    }
    
    if(direction == 0 && dirCount < 2 && fit == 0){
    	dirCount++;
    var currentCol = Math.floor(Math.random() * grid.length);
	for(var col = 0; col < grid.length; col++){
    	currentCol++;
        if(currentCol >= grid.length){
        	currentCol = 0;
        }
    	var currentRow = Math.floor(Math.random() * grid[currentCol].length);
    	for(var row = 0; row < grid[currentCol].length; row++){
        	currentRow++;
            if(currentRow >= grid[currentCol].length){
             currentRow = 0;
            }
        	if(grid[currentCol].length - currentRow >= word.length){
        		for(var letter = 0; letter < word.length; letter++){
            		if(word.charAt(letter) == grid[currentCol][currentRow+letter] || 						grid[currentCol][currentRow+letter] == \"\"){
                		fit = 1;
                	}
                	else{
                		fit = 0;
                    	break;
                	}
            	}
                if(fit == 1){
                	for(var letter = 0; letter < word.length; letter++){
                    	grid[currentCol][currentRow+letter] = word.charAt(letter);
            		
            		}
                }
            }
            if(fit == 1){
            	break;
            }
        }
        if(fit == 1){
        	break;
        }

	}}
    if(dirCount == 2 && fit ==0){
    	nope = 1;
    }}
}
if(nope == 1){
error = 1;
endSolutionEND = \"ERROR\";
endPuzzlesEND = \"ERROR\";

}
else{
var out = \"\";
var outPuz = \"\";
for (var i = 0; i < grid.length; i++) {
  for(var n = 0; n < (grid[i]).length; n++){
  			if(grid[i][n] == \"\"){
            	var tempLetter =\" \" + String.fromCharCode(65 + Math.floor(Math.random() * 26)) + \" \";
            	out+= tempLetter;
                outPuz+= tempLetter;
                
            }
            else{
            out+= \"|\";
        	out += grid[i][n];
            outPuz += grid[i][n];
            out+= \"|\";
            }
            outPuz += \" \";
            out+= \" \";
      
  }
  outPuz +=\"<br>\";
  out += \"<br>\";
}


endPuzzlesEND += \"<br> <br>Word Search: <br> <br>\"+outPuz;
endSolutionEND += \"<br><br>Word Search: <br> <br>\" +out;
}
}


}


function double(wordGiven){";
//echo "var cookie = \"" . $listofWords . "\";";
echo "
var word = wordGiven.toUpperCase();
var cookies = cookie.toUpperCase();
const values = cookies.split(\" \");
//const values = [\"TIGER\", \"WEBSITE\", \"ICECREAM\", \"TYRANT\", \"EVENING\", \"SWORD\", \"ICELAND\", \"EDGE\", \"BRAIN\", \"TASTE\", \"ANGER\"];
const words = [];

for(let n = 0; n < word.length; n++){
	var k = Math.floor(Math.random() * values.length);
	for(let i = 0; i < values.length; i++){
		var check = values[k];
        k++;
        if(k >= values.length){
        	k = 0;
        }
    	if(check.charAt(0) == word.charAt(n)){
  
        	if(!(words.includes(check))){
    			words.push(check);
              break;
            
        	}       
    }
}
}
if(words.length != word.length){
error = 1;
endSolutionEND = \"ERROR\";
endPuzzlesEND = \"ERROR\";
}
else{
var list = \"\";
var solution = \"\";
for(let n = 0; n < words.length; n++){
	var text = words[n];
	var scramble = \"\";
	var temp = text;
	var temp2 = temp;
	var blanks = \"\";
	for(let i = 0; i < text.length; i++){
		temp = temp2;
		var number = Math.floor(Math.random() * temp.length);
		scramble += temp.charAt(number);
		temp2 = temp.substring(0, number) + temp.substring(number+1);
		blanks += \"__ \";
	}

	if(scramble == text){
		n = n -1;
	}
	else{
		list += scramble + \"<br> \" + blanks + \"<br>\" + \"<br>\";
		solution += scramble + \"<br>\"  + text + \"<br>\" + \"<br>\";
	}


}
endPuzzlesEND += \"<br> <br> Double Puzzle: <br> <br>\"+ list +\"<br>\" + \"<br>\" + \"Solutions:\" + \"<br>\" + \"<br>\" + solution + \"<br>\" + \"WORD: \" + word;
endSolutionEND += \"<br> <br> Double Puzzle Solution: <br> <br>\" + solution;
}



}


 function dropQuote(wordGiven) {
var word = wordGiven.toUpperCase();
var cookies3 = cookie3.toUpperCase();
const values = cookies3.split(\",\");
//const values = [\"TE\", \"TO BE OR NOT TO BE THAT IS THE QUESTION\",  \"POTATO\"];
const words = [\"\"];
var found = 0;
var loc = new Array(word.length);
for(var phrase = 0; phrase < values.length; phrase++){
 

    var locLet = 0;
    found = 0;
    for(var wordLet = 0; wordLet < word.length; wordLet++){
    var k = Math.floor(Math.random() * values[phrase].length);
	for(var letter = 0; letter < values[phrase].length; letter++){
    	k++;
    	if(k >= values[phrase].length){
        	k = 0;
        }
    	if(values[phrase].charAt(k) == word.charAt(wordLet)){
        	loc[locLet] = k;
            locLet++;
       
           found++;
           break;
        }
        
       
    }
    }
    if(found == word.length){
    words[0] = values[phrase];
 		break;   
	}
    
}
if(found != word.length){
document.getElementById(\"demo\").innerHTML = \"ERROR CANNOT GENERATE PUZZLE\";
error = 1;
endSolutionEND = \"ERROR\";
endPuzzlesEND = \"ERROR\";
}

else{
var grid;


for(var val = 0; val < words.length; val++){
	hints = \"\";
	var str = words[val];
    var num = words[val].length;
    var col = Math.ceil(num/10);
    grid = new Array(col);
	for (var i = 0; i < grid.length; i++) {
  		grid[i] = new Array(10).fill(\"\");
	}
    const wordsList = str.split(\" \");
 	for(var word = 0; word < wordsList.length; word++){
    	var temp = wordsList[word] + \"%\";
    	wordsList[word] = temp;
    	letter = 0;
    	for(var col = 0; col < grid.length; col++){
        	for(var row = 0; row < grid[0].length; row++){
            	
            	if(grid[col][row] == \"\"){
            	grid[col][row] = wordsList[word].charAt(letter);
                letter++;
                if(letter > wordsList[word].length){
                	if(col >= grid.length){
                    	col = 0;
                    }
                    if(row >= grid[0].length){
                    	row = 0;
                    }
                   
                	break;
                }}
            }
            if(letter >= wordsList[word].length){
                	break;
                }
        }
        
    }
}
var solution = \"\";
var grid2 = new Array(10);
	for (var i = 0; i < grid2.length; i++) {
  		grid2[i] = new Array(grid.length).fill(\"_\");
	}

for(var col = 0; col < grid.length; col++){
	for(var row = 0; row < grid[0].length; row++){
    	if(grid[col][row] != \"%\"){
        	grid2[row][col] = grid[col][row];
    	}
    }

    
}


for(var col = 0; col < grid.length; col++){
	for(var row = 0; row < grid[0].length; row++){
     	if(grid[col][row] == \"%\"){
         solution += \"吒";
        }
        else{
    	solution += grid[col][row];
        }
    
    }
    solution += \"<br>\";

}


var question = \"\";
for(var col = 0; col < grid.length; col++){
	for(var row = 0; row < grid[0].length; row++){
      	if(grid[col][row] != \"%\"){
    	question += \" _ \";
        }
        else{
        question += \"吒";
        }
    
    }
    question += \"<br>\";

}


for(var row = 0; row < grid2.length; row++){
	var count = 0;
	var k = Math.floor(Math.random() * grid2[0].length);
	for(var col = 0; col < grid2[0].length; col++){
    	k++;
        if(k >= grid2[0].length){
        	k = 0;
        }
    	grid[col][row] = \" \"+ grid2[row][k] +\" \";
        if(grid[col][row] == \" _ \"){
        	var temp = grid[count][row];
            grid[col][row] = temp;
            grid[count][row] = \" _ \";
            count++;
        }
    }

}

var hint = \"\";
for(var col = 0; col < grid.length; col++){

for(var row = 0; row < grid[0].length; row++){

	hint+=grid[col][row];

}
   hint+= \"<br>\";
}";



echo "


	
 endPuzzlesEND += \"<br> <br> Drop Quote Puzzle: <br> <br>\" + hint + question + \"<br>\" + \"<br> The letters of the hidden word in order (including spaces) are in the following positions:\" + loc + \"<br> Solution: <br>\" + solution + \"<br> Hidden Word:\" + wordGiven;
 endSolutionEND += \"<br> <br> Drop Quote Solution <br> <br>\" +  solution;
}


 
 }



 function conjunctionJunction(wordGiven) {
var word = wordGiven.toUpperCase();
const values = [\"BOW AND ARROW\", \"BELIEVEIT OR NOT\", \"SILENT BUT DEADLY\", \"TIFFANY BUT CO\", \"SAFE AND SOUND\", \"EVIL AND GOOD\", \"TALL OR SHORT\"];
const hintList = [];
const words = [];
for(let n = 0; n < word.length; n++){
	var k = Math.floor(Math.random() * values.length);
	for(let i = 0; i < values.length; i++){
		var check = values[k];
        k++;
        if(k >= values.length){
        	k = 0;
        }
    	if(check.charAt(0) == word.charAt(n)){
        	if(!(words.includes(check))){
    		words.push(check);
            break;
        }       
    }
}
}"; echo "
if(words.length != word.length){

error = 1;
endSolutionEND = \"ERROR\";
endPuzzlesEND = \"ERROR\";
}
else{
var hints = \"\";
var puzzle = \"\";
var hintEnd = \"\";

for(var val = 0; val < words.length; val++){
	hints = \"\";
	var str = words[val];
    var wordsList = str.split(\" AND \");
    var con = \" AND \";
    if(wordsList.length < 2){
    	con = \"OR\";
       	wordsList = str.split(\" OR \");
    }
    if(wordsList.length < 2){
    	con = \" BUT \";
       	wordsList = str.split(\" BUT \");
    }
    var word = wordsList[0];
    puzzle += word.replace(word.charAt(0), \"__\");
    puzzle += \"&emsp; &emsp;________ &emsp;&emsp;__ _____________\";
    word = wordsList[1];
    hints += word.replace(word.charAt(0), \"__\");
    hints += \"&emsp;&emsp; <br>\";
    hintEnd += hints;
    puzzle += \"<br>\"; 
}
var solution = \"\";
for(var word = 0; word < words.length; word++){
	solution += words[word] + \"<br>\";
}


endPuzzlesEND += \"Conjunction Junction Puzzle: <br> <br>\" + puzzle + \"<br>\" +\"<br>\" + hintEnd + \"<br>\" + \"<br>\" + \"SOLUTIONS:\" + \"<br>\" + solution;
endSolutionEND += \"<br><br>Conjunction Junction Solution <br> <br>\" + solution;
}
}";
   
    echo"
      function printPuzzle() {
      document.getElementById(\"puzzles\").innerHTML = endPuzzlesEND+ \"<br>\";
      var printContents = document.getElementById(\"puzzles\").innerHTML;
    document.getElementById(\"puzzles\").innerHTML = \"\";
        w=window.open();
        w.document.write(printContents);
        w.print();
        w.close();
    
    }
    
    function printSolution() {
    document.getElementById(\"solution\").innerHTML = endSolutionEND + \"<br>\";
      var printContents = document.getElementById(\"solution\").innerHTML;
  document.getElementById(\"solution\").innerHTML = \"\";
        w=window.open();
        w.document.write(printContents);
        w.print();
        w.close();
    
    }
	
    const listSentence = sentence.split(\" \");
    var curButton = Math.floor(Math.random() * buttons.length);
 
    for(var wordSentence = 0; wordSentence < listSentence.length; 		wordSentence++){
   
         curButton++;
   
         if(curButton >= buttons.length){
        	curButton = 0;
        }
    	if(buttons[curButton] == 0){
   	 		conjunctionJunction(listSentence[wordSentence]);
    	}
        else if(buttons[curButton] == 1){
         dropQuote(listSentence[wordSentence]);
        }
        
        else if(buttons[curButton] == 2){
         double(listSentence[wordSentence]);
        }
        
        else if(buttons[curButton] == 3){
         wordSearch(listSentence[wordSentence]);
        }
        
      
        
    }


    if(error == 1){
    	alert(\"Error: Could not generate puzzle set. Please try again.\");
    }
    
</script>";

		

echo "			
<br>
 <form>

<button class=\"downloadp\" type=\"button\" onclick=\"printPuzzle()\">
			Download Puzzles	
</button>


<button class=\"downloads\" type=\"button\" onclick=\"printSolution()\">
			Download Solution	
</button>";

echo"   
<button class=\"create\" onclick=\"location.href='index.html'\" type=\"button\">
			Back	
</button>

</div>";


		

echo "</body>
</html>";
	
        // Free result set
 mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 // Free result set
 mysqli_free_result($result2);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql2. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

?>
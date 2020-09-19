var playerScore = 0; 
var pcScore = 0;

var playerSum = 0;
var pcSum = 0;


var pcCard2 = 0;
var pcFace2 = 0;

var y = 3;
var x = 3;
//document.getElementById("score").value = playerScore;

//Old Array
CardFace = new Array(["A", "Clubs", "Diamonds", "Hearts", "Spades"], ["2","Clubs", "Diamonds", "Hearts", "Spades"], 
			["3", "Clubs", "Diamonds", "Hearts", "Spades"], 
			["4", "Clubs", "Diamonds", "Hearts", "Spades"],
			["5", "Clubs", "Diamonds", "Hearts", "Spades"],
			["6", "Clubs", "Diamonds", "Hearts", "Spades"],
			["7", "Clubs", "Diamonds", "Hearts", "Spades"], 
			["8", "Clubs", "Diamonds", "Hearts", "Spades"], 
			["9", "Clubs", "Diamonds", "Hearts", "Spades"],
			["10", "Clubs", "Diamonds", "Hearts", "Spades"], 
			["J", "Clubs", "Diamonds", "Hearts", "Spades"], 
			["Q", "Clubs", "Diamonds", "Hearts", "Spades"],
			["K", "Clubs", "Diamonds", "Hearts", "Spades"]);



		CardImages = new Array(['A', '<img src="assets/images/AC.png">',  '<img src="assets/images/AD.png">',  '<img src="assets/images/AH.png">',  '<img src="assets/images/AS.png">', ],
			['2', '<img src="assets/images/2C.png">',  '<img src="assets/images/2D.png">',  '<img src="assets/images/2H.png">',  '<img src="assets/images/2S.png">' ],
			['3', '<img src="assets/images/3C.png">',  '<img src="assets/images/3D.png">',  '<img src="assets/images/3H.png">',  '<img src="assets/images/3S.png">' ],
			['4', '<img src="assets/images/4C.png">',  '<img src="assets/images/4D.png">',  '<img src="assets/images/4H.png">',  '<img src="assets/images/4S.png">' ],
			['5', '<img src="assets/images/5C.png">',  '<img src="assets/images/5D.png">',  '<img src="assets/images/5H.png">',  '<img src="assets/images/5S.png">' ],
			['6', '<img src="assets/images/6C.png">',  '<img src="assets/images/6D.png">',  '<img src="assets/images/6H.png">',  '<img src="assets/images/6S.png">' ],
			['7', '<img src="assets/images/7C.png">',  '<img src="assets/images/7D.png">',  '<img src="assets/images/7H.png">',  '<img src="assets/images/7S.png">' ],
			['8', '<img src="assets/images/8C.png">',  '<img src="assets/images/8D.png">',  '<img src="assets/images/8H.png">',  '<img src="assets/images/8S.png">' ],
			['9', '<img src="assets/images/9C.png">',  '<img src="assets/images/9D.png">',  '<img src="assets/images/9H.png">',  '<img src="assets/images/9S.png">' ],
			['10', '<img src="assets/images/10C.png">',  '<img src="assets/images/10D.png">',  '<img src="assets/images/10H.png">',  '<img src="assets/images/10S.png">' ],
			['J', '<img src="assets/images/JC.png">',  '<img src="assets/images/JD.png">',  '<img src="assets/images/JH.png">',  '<img src="assets/images/JS.png">' ],
			['Q', '<img src="assets/images/QC.png">',  '<img src="assets/images/QD.png">',  '<img src="assets/images/QH.png">',  '<img src="assets/images/QS.png">' ],
			['K', '<img src="assets/images/KC.png">',  '<img src="assets/images/KD.png">',  '<img src="assets/images/KH.png">',  '<img src="assets/images/KS.png">' ]

			);





//Array that is sorted. 


oldScores = new Array(500, 50, 100, 300, 250, 750);


function sortNumber(a,b) 
{
    return b - a;
}

function oldStats()
{
	document.getElementById('oldStats').innerHTML += ("<li>2017 High Scores without names</li>");

	oldScores.sort(sortNumber);
	for (var x = 0; x < oldScores.length; ++x) 
	{
		document.getElementById('oldStats').innerHTML += ("<li>" + oldScores[x] + "</li>");

	}
}











//Start of game


function battleIt()
{
		//initialize variables
		
		playerSum = 0;
		pcSum = 0;


		//reset card spots
		document.getElementById("dealerStatus").innerHTML = ("");
		document.getElementById("playerStatus").innerHTML = ("");
		document.getElementById("dealer2").innerHTML = '<img src="assets/images/gray_back.png">';
		document.getElementById("dealer3").innerHTML = "";
		document.getElementById("dealer4").innerHTML = "";
		document.getElementById("dealer5").innerHTML = "";
		document.getElementById("dealer6").innerHTML = "";
		document.getElementById("dealer7").innerHTML = "";
		document.getElementById("dealer8").innerHTML = "";

		document.getElementById("player3").innerHTML = "";

		document.getElementById("player4").innerHTML = "";
		document.getElementById("player5").innerHTML = "";
		document.getElementById("player6").innerHTML = "";
		document.getElementById("player7").innerHTML = "";
		document.getElementById("player8").innerHTML = "";

		x = 3;
		y = 3;



		

		
 		
		
		
			var playerCard1 = Math.floor(Math.random() * 13);

			var playerCard2 = Math.floor(Math.random() * 13); 


			var pcCard1 = Math.floor(Math.random() * 13);
			var pcCard2 = Math.floor(Math.random() * 13);

			var playerFace1 = Math.floor(Math.random() * 4) + 1;
			playerFace2 = Math.floor(Math.random() * 4) + 1;
			var pcFace1 = Math.floor(Math.random()  * 4) + 1;
			pcFace2 = Math.floor(Math.random()  * 4) + 1;

			

			document.getElementById("dealer1").innerHTML = CardImages[pcCard1][pcFace1];
			//document.getElementById("dealer2").innerHTML = '<img src="assets/images/gray_back.png">';

			document.getElementById("player1").innerHTML = CardImages[playerCard1][playerFace1];
			document.getElementById("player2").innerHTML = CardImages[playerCard2][playerFace2];




			var newPlayerCard1;
			var newPlayerCard2;

			var newPcCard1;
			var newPcCard2;



			if (playerCard1 >= 10)
				newPlayerCard1 = 9;
			else
				newPlayerCard1 = playerCard1;

			if (playerCard2 >= 10)
				newPlayerCard2 = 9;
			else
				newPlayerCard2 = playerCard2;


			playerSum = newPlayerCard1 + 1 + newPlayerCard2 + 1;



			if (pcCard1 >=10)
				newPcCard1 = 9;
			else
				newPcCard1 = pcCard1;

			if (pcCard2 >=10)
				newPcCard2 = 9;
			else
				newPcCard2 = pcCard2;


			pcSum = newPcCard1 + 1 + newPcCard2 + 1;


			document.getElementById("dealerTotal").innerHTML = pcSum;
			document.getElementById("dealer2").innerHTML = CardImages[pcCard2][pcFace2];




			document.getElementById("playerTotal").innerHTML = playerSum;

			//document.getElementById("dealerTotal").innerHTML = newPcCard1 + 1;


			




		
}

//Adds car to player

function Hit()
{


	if(playerSum < 1)
	{
		alert("You need to press PLAY!");
		return;
	}
	var hitPlayerCard = Math.floor(Math.random() * 13);

	var id = "player" + y;

	document.getElementById(id).innerHTML = CardImages[hitPlayerCard][Math.floor(Math.random()  * 4) + 1];


	if (hitPlayerCard >= 10)
				hitPlayerCard = 9;
	//alert(hitPlayerCard);
	//alert(playerSum);

	playerSum += (hitPlayerCard + 1);


	document.getElementById("playerTotal").innerHTML = playerSum;

	++y

	if(playerSum > 21)
	{
		whoWins();
	}


	//alert(playerSum);


	//display card




}

//No cards are added. 


function Stay()
{

	//So people can't hit stay without playing
	if(playerSum < 1)
	{
		alert("You need to press PLAY!");
		return;
	}

	whoWins();

}




//Checks to see who won
function whoWins()
{

	
	

	//alert(pcSum);
	//alert(id + x)

	//document.getElementById("dealerTotal").innerHTML = pcSum;
	//document.getElementById("dealer2").innerHTML = CardImages[pcCard2][pcFace2];





	//Adds more cards to the dealer if his score is < 16
	while(pcSum < 16)
	{
		var hitPcCard = Math.floor(Math.random() * 13);

		var id = "dealer" + x;
		// alert(id);
		document.getElementById(id).innerHTML = CardImages[hitPcCard][Math.floor(Math.random()  * 4) + 1];

		if (hitPcCard >= 10)
				hitPcCard = 9;

		pcSum += (hitPcCard + 1);

		++x;
	
	}

	document.getElementById("dealerTotal").innerHTML = pcSum;
	// document.getElementById("dealer2").innerHTML = CardImages[pcCard2][pcFace2];







	
		
	
	//Score checker
		
	
	
	if (pcSum > 21 && playerSum > 21)
	{
		//alert("Tie");
		document.getElementById("dealerStatus").innerHTML = ("TIE!");
	}
	




	else if (pcSum == playerSum)
	{
		//alert("Tie");
		document.getElementById("playerStatus").innerHTML = ("TIE!");
	}





	else if(((playerSum < pcSum) && (pcSum > 21)) || ((playerSum < 21) && pcSum < playerSum))
	{
		playerScore += 50;
		pcScore -= 10;
		document.getElementById("playerStatus").innerHTML = ("Win!");
	}





	else if(((playerSum < pcSum) && (playerSum > 21)) || ((pcSum < 21) && pcSum > playerSum))
	{
		pcScore += 50;
		playerScore -=10;
		document.getElementById("dealerStatus").innerHTML = ("Win!");
	}





	else if ((pcSum > 21) && (playerSum <= 21))
		{
			playerScore += 50;
			pcScore -= 10;
			document.getElementById("playerStatus").innerHTML = ("Win!");
		}


	else if (playerSum > pcSum && playerSum <=21)
		{
			playerScore += 50;
			pcScore -= 10;
			document.getElementById("playerStatus").innerHTML = ("Win!");
		}






	else if ((pcSum <= 21) && (playerSum > 21))
		{
			pcScore += 50;
			playerScore -=10;
			document.getElementById("dealerStatus").innerHTML = ("Win!");
		}

	else if ((pcSum == 21) && (playerSum < 21))
		{
			pcScore += 50;
			playerScore -=10;
			document.getElementById("dealerStatus").innerHTML = ("Win!");
		}
	
	document.getElementById("playerScore").innerHTML = playerScore;
	document.getElementById("dealerScore").innerHTML = pcScore;

	

	document.getElementById("score").value = playerScore;

	playerSum = 0;

}



function stop()
{

	//Search to see if the player beat last years high score using the array
	if(playerScore > oldScores[0])
	{
		alert("You beat last years high score");
	}

	else
	{
		alert("You did not beat last years high score")
	}
	document.getElementById("hide").classList.remove('hide');
	document.getElementById("oldStats").classList.add('hide');
}
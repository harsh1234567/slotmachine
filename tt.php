<!DOCTYPE HTML><html>  <head>    <meta charset="UTF-8"/>    <title>Slots </title>     
<script src="phaser.min.js"></script>  </head>  <body>     <script type="text/javascript" >  
      window.onload = function () {          var game = new Phaser.Game(640,480, Phaser.CANVAS, 'd',{ preload: preload, create: create, update: update });  
	  var seven; 
	  var bar;   
	  var twobar;    
      var cherry;  
	  var cherry2;    
      var tween;  
	  var spinning = false; 
	  var timer;    
      var tick = 0;
	  var reel1;       
	  var reel2;        
	  var reel3;    
      var reel4;  
	  function preload() {    
	  // Pre load all images.        
	  //Cherry      
      game.load.image('cherry', 'img/cherry.png'); 
	  // Bar    
	  game.load.image('bar', 'img/bar.png');
	  // TwoBars  
	  game.load.image('twoBar', 'img/twobar.png');   
	  //seven      
      game.load.image('seven', 'img/seven.png');    
	  // Spin Button 
	  game.load.image('spin_button', 'img/spin_button.png');   
	  // Machine_body      
      game.load.image('machine_body', 'img/machine__body.png');      
	  }          function create() {         
	  var items = ['cherry', 'bar', 'seven', 'twoBar', 'cherry', 'bar', 'seven', 'twoBar'];  
	  reel1 = game.add.group(); // first reel.     
	  reel2 = game.add.group();  
	  reel3 = game.add.group();   
	  reel4 = game.add.group(); 
	  for(var i = 0; i < 5; i++)
		  {      
	  sprite = reel1.create(5, i * 98 +3, items[game.rnd.integerInRange(0,5)]);     
	  sprite2 = reel2.create(131, i * 98 +3, items[game.rnd.integerInRange(0,5)]);    
	  sprite3 = reel3.create(258, i * 98 +3, items[game.rnd.integerInRange(0,5)]);   
	  sprite4 = reel4.create(386, i * 98 +3, items[game.rnd.integerInRange(0,5)]);  
	  }                            var body = game.add.sprite(0,0, 'machine_body');     
	  var button = game.add.button(175, 400,'spin_button', actionOnClick, this);  
	  game.stage.backgroundColor = '#FFFFFF';  
	  timer = game.time.create(false);
	  timer.loop(3000, updateTicks, this);         
	  timer.start();     
	  }          function actionOnClick () {   
	  spinning = true;          }
	  function update() {       
	  if(spinning) { 
	  reel1.y += 50      
	  reel2.y += 40;    
	  reel3.y += 57;  
	  reel4.y += 60;    
	  if(reel1.y >= 400){    
	  reel1.y = 0;    
	  }       
	  if(reel2.y >= 400){    
	  reel2.y = 0;   
	  }         
	  if(reel3.y >= 400){  
	  reel3.y = 0;      

	  } 
	  if(reel4.y >= 400){  
	  reel4.y = 0;  
	  } 
	  }
	  var tween = game.add.tween(reel1);   
	  var tween2 = game.add.tween(reel2);   
	  var tween3 = game.add.tween(reel3);
	  var tween4 = game.add.tween(reel4);   
	  tween.to({y: 180}, 60);  
	  tween2.to({y: 180}, 70);  
	  tween3.to({y: 180}, 80); 
	  tween4.to({y: 180}, 90);  
	  tween.start();     
	  tween2.start(); 
	  tween3.start();       
	  tween4.start();     
	  }     
	  function updateTicks() {      
      if(spinning){

	  spinning = false;   
	  }     
	  }
	  
	  }
	  </script> 
	  </body>
	  </html>  
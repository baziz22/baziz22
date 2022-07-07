<style type="text/css">
	
	@font-face{

		font-family: headFont;
		src: url(ui/fonts/Summer-Vibes-OTF.otf);
	}

	@font-face{

		font-family: myFont;
		src: url(ui/fonts/OpenSans-Regular.ttf);
	}
	#wrapper{
		max-width:900px;
		min-height: 27.75em;
		max-height: 32em;
		display:flex;
		margin: auto;
		color: white;
		font-family: myFont;
		font-size: 13px;
	}

	#left_pannel{
		min-height: 33.25em;
		background-color: var(--bg_glassy);
        background-color: linear-gradient(to top left, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.9));
		flex: 1;
		text-align: center;

	}

	#profile_image{

		width: 50%;
		border: solid thin white;
		border-radius: 50%;
		margin:10px;

	}

	#left_pannel label{

		width: 100%;
		height: 20px;
		display: block;
		background: linear-gradient(to top left, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.9));
        /* box-shadow: 6px 6px 20px rgba(255, 255, 255, 0.8); */
		border-bottom:solid thin #ffffff55; 
		cursor: pointer;
		padding: 5px;
		transition: all 1s ease;
	}

	#left_pannel label:hover{
		background-color: var(--bg_glassy);
	}

	#left_pannel label img{

		float: right;
		width:25px;
	}

	#right_pannel{

		min-height: 500px;
		flex: 4;
		text-align: center;
	}

	#header{

		background-color: var(--bg_glassy);
		height:70px;
		font-size: 40px;
		text-align: center;
		font-family: headFont;
		position: relative;
	}
	
	#inner_left_pannel{

		/* background-color: #383e48; */
        background-color: var(--bg_glassylight);
		flex: 1;
        min-height: 27.75em;
		max-height: 32em;
	}


	#inner_right_pannel{

		background-color: #f2f7f8;
		flex: 2;
		min-height: 27.75em;
		transition: all 2s ease;
		max-height: 32em;
	}

	#radio_contacts:checked ~ #inner_right_pannel{

		flex: 0;
	}

	#radio_settings:checked ~ #inner_right_pannel{

		flex: 0;
	}
 
 	#contact{

 		width: 100px;
 		height: 120px;
 		margin: 10px;
 		display: inline-block;
 		vertical-align: top;
  	}
	
	#contact img{

		width: 100px;
		height: 100px;
  	}

 	#active_contact{

  		height: 70px;
 		margin: 10px;
 		border: solid thin #aaa;
 		padding:2px;
 		background-color: #eee;
 		color: #444;
   	}
	
	#active_contact img{

		width: 70px;
		height: 70px;
		float:left;
		margin:2px;
  	}
	
	#message_left{

  		margin: 10px;
  		padding:2px;
  		padding-right:10px;
 		background-color: #c979d5;
 		color: white4;
 		float:left;
 		box-shadow: 0px 0px 10px #aaa;
  		border-bottom-left-radius: 50%;
  		border-top-right-radius: 30%;
  		position: relative;
  		width:60%;
  		min-width: 200px;
   	}
	
	#message_left #prof_img{

		width: 60px;
		height: 60px;
		float:left;
		margin:2px;
		border-radius: 50%;
		border: solid 2px white;
  	}

	#message_left div{

		width: 20px;
		height: 20px;
		background-color: #34474f;
		border: solid 2px white;
		border-radius: 50%;
		position: absolute;
		left:-10px;
		top:20px;
  	}

	#message_right{
  		margin: 10px;
  		padding:2px;
  		padding-right:10px;
 		background-color: #fbffee;
 		color: #444;
 		float:right;
 		box-shadow: 0px 0px 10px #aaa;
  		border-bottom-right-radius: 50%;
  		border-top-left-radius: 30%;
  		position: relative;
  		width:60%;
  		min-width: 200px;
   	}
	
	#message_right #prof_img{

		width: 60px;
		height: 60px;
		float:left;
		margin:2px;
		border-radius: 50%;
		border: solid 2px white;
  	}

  	#message_right div img{

		width: 25px;
		height: 18px;
		float:none;
		margin:0px;
		border-radius: 50%;
		border: none;
		position:absolute;
		top:30px;
		right:10px;
  	}

	#message_right #trash{

		width: 20px;
		height: 20px;
 		position:absolute;
		top:15px;
		left:-10px;
		cursor: pointer;
  	}

  	#message_left #trash{

		width: 20px;
		height: 20px;
 		position:absolute;
		top:15px;
		right:-10px;
		cursor: pointer;
  	}



	#message_right div{

		width: 20px;
		height: 20px;
		background-color: #34474f;
		border: solid 2px white;
		border-radius: 50%;
		position: absolute;
		right:-10px;
		top:20px;
  	}

  	.loader_on{

  		position: absolute;
  		width: 30%;
   	}

	.loader_off{

  		display: none;
   	}

   	.image_on{

  		position: absolute;
   		height: 350px;
  		width: 350px;
   		margin:auto;
  		z-index: 10;
  		top:50px;
  		left:50px;
   	}

	.image_off{

  		display: none;
   	}

	/*********** Responsive Area ****************/

	@media screen and (max-width: 500px) {
		#wrapper{
			max-width:35em;
			min-height: 27.75em;
			max-height: 32em;
			display:flex;
			margin: auto;
			color: white;
			font-family: myFont;
			font-size: 13px;
		}
		#header{
			font-size: 35px;
		}
	}
	
</style>

	<div id="wrapper">
		
		<div id="left_pannel">

			<div id="user_info" style="padding: 10px;">
            <img id="profile_image" src="<?php URLROOT; ?>public/images/user_male.jpg" style="height: 100px;width: 100px;">
				<br>
				<span id="username">Username</span>
				<br>
				<span id="email" style="font-size: 12px;opacity: 0.5;">user@example.com</span>
				
				<br>
				<br>
				<br>
				<div>
					<label id="label_chat" for="radio_chat">Chat <img src="<?php URLROOT; ?>public/icons/chat.png"></label>
					<label id="label_contacts" for="radio_contacts">Contacts <img src="<?php URLROOT; ?>public/icons/contacts.png"></label>
					<label id="label_settings" for="radio_settings">Settings <img src="<?php URLROOT; ?>public/icons/settings.png"></label>
					<label id="logout" for="radio_logout">Logout<img src="<?php URLROOT; ?>public/icons/logout.png"></label>
				</div>

			</div>

		</div>
		<div id="right_pannel">
			<div id="header">
				<div id="loader_holder" class="loader_on"><img style="width:70px;" src="<?php URLROOT; ?>public/icons/giphy.gif"></div>

				<div id="image_viewer" class="image_off" onclick="close_image(event)"></div>
				Lobby
			</div>
			
			<div id="container" style="display: flex;">
 				
				<div id="inner_left_pannel">
			 
				</div>

				<input type="radio" id="radio_chat" name="myradio" style="display: none;">
				<input type="radio" id="radio_contacts" name="myradio" style="display: none;">
				<input type="radio" id="radio_settings" name="myradio" style="display: none;">
				<div id="inner_right_pannel">
                <p style=" color: black; font-size: 30px; font-family: Ubuntu;">
                    Chat Engine is under Construction
                    <br>
                    Come back again to see the full version
                </p>
				</div>
			</div>
		</div>
	</div>

        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

	<div class="container">
		<!--This is the header-->
		<div class="row header">
			<div class="span9 heading">
				<div id="conference-header-line-one"><?php echo($con['Conference']['title']); ?></div> 
				<div id="conference-header-line-two"><?php echo($con['Conference']['subtitle']); ?></div>                             
			</div>
			<div class="span3 logo">
				<a href="http://www.typo3.org"><img src="img/t3-logo.png"/></a>
			</div>
		</div>
		<div class="row">
			<div class="span3">&nbsp;</div>
			<div class="span8 daytext">Friday</div>
		</div>

		<!-- Here starts the main content-->
		<div class="row">
			<!--This is the left sidecontent (for the bubbles)-->
			<div class="span3 sidebar">
				<div class="bubble_left" id="bubble-2">
					<canvas id="canvas2" class="bubbleborder" width="240" height="200" >
					</canvas>
					<div class="bubbletext">
						<h3 class="title-left">Der Titel des Vortrags</h3>
						<div class="speaker-name-left">Liesa Burgey</div>
						<div class="bubble-content-left">
							<p class="bubble-text-left"> Dies ist ein Satz in welchem der Inhalt beschrieben ist.</p>
						</div>
						<div class="button-left"> Info »</div>
					</div>
				</div>
			</div>
			
			<!--Here is the centered content-->
			<div class="span6 center-content">
				<div class="row">
					<div class="span6 content-heading">
						<div class="left-floating heading-text">
							Business/Community Track
						</div>
						<div class="right-floating heading-text">
							Technical Track
						</div>
					</div>
				</div>
				<div class="row">
					<div class="span6">
						<div class="keynote-time">
							08:00-09:15
						</div>
						<div class="keynote-track red-track">
							<div class="track-title">Keynote</div> 
							<div class="track-speaker">(Kaspar Skorhoj)</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="span6">
						<div class="left-floating green-track track">
							<div class="track-title">User experience as your core competence</div> 
							<div class="track-speaker">(Sam Ng)</div>
						</div>
						<div class="left-floating middle-field first-field">
							08:00-<br/>09:15 
						</div>
						<div class="left-floating yellow-track track">
							<div class="track-title">Some other presentation</div>
							<div class="track-speaker">(Fabian Stein)</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="span6">
						<div class="left-floating red-track track">
							<div class="track-title">User experience as your core competence</div> 
							 <div class="track-speaker">(Sam Ng)</div>
						</div>
						<div class="left-floating middle-field">
							08:00-<br/>09:15 
						</div>
						<div class="left-floating green-track track" id="1">
							<div class="track-title">Some other presentation</div>
							<div class="track-speaker">(Fabian Stein)</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="span6 content-heading bordered-line">
						<div class="left-floating heading-text">
							Coffee break
						</div>
					</div>
				</div>
				<div class="row">
					<div class="span6">
						<div class="left-floating green-track track">
							<div class="track-title">User experience as your core competence</div> 
							<div class="track-speaker">(Sam Ng)</div>
						</div>
						<div class="left-floating middle-field first-field">
							08:00-<br/>09:15 
						</div>
						<div class="left-floating yellow-track track">
							<div class="track-title">Some other presentation</div>
							<div class="track-speaker">(Fabian Stein)</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="span6">
						<div class="left-floating red-track track">
							<div class="track-title">User experience as your core competence</div> 
							<div class="track-speaker">(Sam Ng)</div>
						</div>
						<div class="left-floating middle-field">
							08:00-<br/>09:15 
						</div>
						<div class="left-floating green-track track">
							<div class="track-title">Some other presentation</div>
							<div class="track-speaker">(Fabian Stein)</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="span6 content-heading bordered-line">
						<div class="left-floating heading-text">
							Lunch
						</div>
					</div>
				</div>
				<div class="row">
					<div class="span6">
						<div class="left-floating green-track track">
							<div class="track-title">User experience as your core competence</div> 
							<div class="track-speaker">(Sam Ng)</div>
						</div>
						<div class="left-floating middle-field first-field">
							08:00-<br/>09:15 
						</div>
						<div class="left-floating yellow-track track">
							<div class="track-title">Some other presentation</div>
							<div class="track-speaker">(Fabian Stein)</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="span6">
						<div class="left-floating orange-track track">
							<div class="track-title">User experience as your core competence </div>
							<div class="track-speaker">(Sam Ng)</div>
						</div>
						<div class="left-floating middle-field">
							08:00-<br/>09:15 
						</div>
						<div class="left-floating green-track track">
							<div class="track-title">Some other presentation</div>
							<div class="track-speaker">(Fabian Stein)</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="span6">
						<div class="left-floating purple-track track">
							<div class="track-title">User experience as your core competence</div>
							<div class="track-speaker">(Sam Ng)</div>
						</div>
						<div class="left-floating middle-field">
							08:00-<br/>09:15 
						</div>
						<div class="left-floating blue-track track">
							<div class="track-title">Some other presentation</div>
							<div class="track-speaker">(Fabian Stein)</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="span6">
						<div class="legend" id="legend-yellow">Business and <br/>Best Practices</div>
						<div class="legend" id="legend-purple">Mobile Development</div>
						<div class="legend" id="legend-blue">TYPO3 Enterprise CMS</div>
						<div class="legend" id="legend-green">FLOW3 PHP <br/>Framework</div>
						<div class="legend" id="legend-orange">Design and UX</div>
						<div class="legend" id="legend-red">Community / General</div>
					</div>
				</div>
			</div>

			<!--This is the right sidecontent (for the bubbles)-->
			<div class="span3 sidebar">
				<div class="bubble" id="bubble-1">
					<canvas id="canvas2" class="bubbleborder" width="240" height="200" >
					</canvas>
					<div class="bubbletext">
						<h3>Der Titel des Vortrags</h3>
						<div class="speaker-name">Liesa Burgey</div>
						<div class="bubble-content">
							<img src="youtube.png" class="bubble-picture"/>
							<p class="bubble-text"> Dies ist ein Satz in welchem der Inhalt beschrieben ist.</p>
						</div>
						<div class="button"> Info »</div>
					</div>
				</div>
			</div>
		</div>
	</div>  

	
      	

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.3.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

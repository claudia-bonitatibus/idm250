<?php
/*
Template Name: General with Sidebar
*/

get_header(); ?>
		<header>
			<div class="headerText">
				<h1>
					Heading 1
				</h1>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. 
				</p>
			</div>
		</header>
		<div class="bodyWithSidebar">
			<aside>
				<h6>Recent Comments</h6>
				<p>This is the third comment in the list</p>
				<p>This is the second comment in the list</p>
				<p>This is the first comment in the list</p>
				<h6>Archives</h6>
				<p>sub-item 1</p>
				<p>sub-item 2</p>
				<p>sub-item 3</p>
				<h6>Wiki</h6>
				<h6>User Interface Design</h6> 
				<h6>Support</h6>

			</aside>
			<main class="mainWithSidebar">
				<h2>
					Heading 2
				</h2>
				<h3>
					Heading 3
				</h3>
				<h4>
					Heading 4
				</h4>
				<h5>
					Heading 5
				</h5>
				<h6>
					Heading 6
				</h6>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
					<i class="quote">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</i>
				</p>
				<p class="blockQuote">
					"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." 
				</p>
				<div class="paddedItem">
					<a href="home.html" class="inactive">
						Inactive Link
					</a>
					<a href="home.html" class="active">
						Active Link
					</a>
				</div>
				<div>
					<button>
						button
					</button>
				</div>
				<div>
					<button class="smallBtn">
						button
					</button>
				</div>
				<div class="archiveGrid">
					<div class="portfolioItem">
						<div class="displayImage">
							<img src="<?php echo get_template_directory_uri();?>/assets/large-display/large-display-layers-and-opacities.png">
						</div>
						<div class="displayText">
							<h4> Lorem ipsum dolor </h4>
							<h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
						</div>
					</div>
				</div>
<?php require "footer.php"; ?>
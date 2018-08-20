<?php  
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 */
get_header(); ?>
		<header>
			<div class="headerText">
				<h1>
					<?php the_title();?>
				</h1>
				<p>
					An aspiring user experience designer who strives for the 
					balance of creativity, expressivity and accesibility in the digital platform. 
				</p>
				<!-- <img src = assets/scroll-down-button.svg alt="scroll" class="scrollButton"> -->
			</div>
			
		</header>
		<main>
			<div class="aboutMe">
				<div class="aboutMeImg">
					<img src="<?php echo get_template_directory_uri();?>/assets/photo-about-claudia.jpg">
				</div>
				<div class="aboutMeText">
					<h2>
						About Me
					</h2>
					<p>
						I am a student majoring in Interactive Digital Media at Drexel University. I am a Philadelphia native who fully embraces of the liveliness, pace, and diversity of the urban environment. I have been active in my community and believes in the importance of supporting citizen programs. As design is my passion, I enjoy drawing, designing patterns, origami, and constructing jewelry. I am currently is working part time as a CAD draftsman at Bonitatibus Architects.  
					</p>
				</div>
			</div>			
			<div class="resumeContainer">
				<h2>
					Resume
				</h2>
				<div class="resumeSection">
					<h4>
						Skills
					</h4>
					<p>
						HTML
						<br>
						CSS
						<br>
						JavaScript
						<br>
						Adobe Suite (Illustrator, After Effects, Photoshop)
						<br>
						Responsive Design
						<br>
						Prototyping (Invision, UXPin, Flinto)
					</p>
				</div>
				<div class="resumeSection">
					<h4>
						Work Experience 
					</h4>
					<h5>
						Bonitatibus Architects 
					</h5>
					<h6>
						Architectural Assistant
						<br>
						September 2016 – Present  
					</h6>
					<ul>
						<li> Visualized solutions for clients requests</li>
						<li>Revised drafts of floor plans</li>
						<li>Drafted iterations of designs through photo manipulation</li>
						<li>Produced graphics to present to clients</li>
						<li>Developed organizational skills</li>
					</ul>
				</div>
				
				<div class="resumeSection">
					<h5>
						Campus Activities Board 
					</h5>
					<h6>
						Website Manager
						<br>
						June 2018 - Present		
					</h6>
					
					<ul>
						<li> Collaborated with board members to conceptualize and develop a digital brand</li>
						<li>Promoted large-scale events through a digital format</li>
						<li>Utilized feedback from potential users to come up with a solution</li>
						<li>Clarified information architecture of existing website</li>
						<li>Identified and resolved issues in design and structure</li>
					</ul>
				</div>
				<div class="resumeSection">
					<h4>
						Volunteer Experience
					</h4>
					<h5>
						Community Involvement Club  
					</h5>
					<h6>
						Club leader
						<br>
						September 2012 – June 2016 	
					</h6>
					<ul>
						<li>Managed and organized service events</li>
						<li>Promoted events to increase student interest and awareness</li>
						<li>Participated in and volunteered at the Philadelphia AIDS Walk </li>
						<li>Facilitated water stations at the Philadelphia Marathon and the Broad Street Run </li>
					</ul>
					<h5>
						Science Leadership Academy Interviews 
					</h5>
					<h6>
						Winters 2012, 2013, 2014, 2015 	
					</h6>
					<ul>
						<li> 
							Supervised and prepared potential students for the interview process 
						</li>
						<li>
							Assessed combatibility of potential students to Science Leadership Academy’s environment
						</li>
					</ul>
				</div>
			</div>
<?php get_footer(); ?>
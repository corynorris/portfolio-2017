@extends('layouts.master')

@section('title', 'Resume')

@section('description', "The personal portfolio website of Cory Norris. This page gives a brief history of what I've been up to, including my volunteering, travel and work history.")


@section('navbar') 
@include('layouts.navigation-bar', ['navbarStyle'=>'navbar-inverse'])
@endsection

@section('content')
<section id="resume" class="container">
<!-- 	<div class="row">
		<div class="col-sm-6">
			<div class="page-header">
				<h1>Skills</h1>
			</div>
			<ul>
				<li>Experience with application languages and technologies (e.g. C++, C#, Java, PL/SQL, VB, VBA and Python).</li>
				<li>Experience with numerous web technologies and frameworks (e.g. Html5, Css, JavaScript, JQuery, Vue, React, Bootstrap, Sass, PHP, Laravel and Yii, Npm, Gulp, etc).</li>
				<li>Created, modified and maintained all aspects of databases in Oracle, MySql and MsSql.</li>
				<li>Fluent in French and English.</li>
			</ul>			
		</div>
		<div class="col-sm-6">
			<div class="page-header">
				<h1>Me</h1>
			</div>
		</div>
	</div> -->


	<div class="page-header">
		<h1 id="timeline">What I've been up to</h1>
	</div>
	<ul class="timeline">
		<li>
			<div class="timeline-badge danger"><i class="fa fa-certificate"></i></div>
			<div class="timeline-panel">
				<div class="timeline-heading text-center">
					<h4 class="timeline-title">Front End Development Certificate &#8210; FreeCodeCamp</h4>
					<p><small class="text-muted"><i class="fa fa-globe"></i> Online — <i class="fa fa-clock-o"></i> Dec 2015</small></p>
				</div>
				<div class="timeline-body">         
					<ul>
						<li>Solved more than 250 challenges related to HTML5, CSS and Javscript</li>
						<li>Created a small portfolio of projects, viewable on my Codepen.</li>
						<li>Gave and received feedback to other campers and.</li>
					</ul>
				</div>
			</div>
		</li>
		<li class="timeline-inverted">
			<div class="timeline-badge"><i class="fa fa-plane"></i></div>
			<div class="timeline-panel">
				<div class="timeline-heading text-center">
					<h4 class="timeline-title">Moved to Canada</h4>
					<p><small class="text-muted"><i class="fa fa-globe"></i> Guelph, Canada — <i class="fa fa-clock-o"></i> Nov 2015</small></p>
				</div>
			</div>
		</li>
		<li>
			<div class="timeline-badge warning"><i class="fa fa-briefcase"></i></div>
			<div class="timeline-panel">
				<div class="timeline-heading text-center">
					<h4 class="timeline-title">English Teacher &#8210; Busan Global Village</h4>
					<p><small class="text-muted"><i class="fa fa-globe"></i> Busan, Korea — <i class="fa fa-clock-o"></i> Nov 2014 - Nov 2015</small></p>
				</div>
				<div class="timeline-body">         
					<ul>
						<li>Engaged students and seeded their interested in the English language and its importance.</li>
						<li>Created and maintained themed lesson plans around various common day to day interactions.</li>
						<li>Contributed to and gave feedback for several major events.</li>
					</ul>
				</div>
			</div>
		</li>
		<li class="timeline-inverted">
			<div class="timeline-badge"><i class="fa fa-plane"></i></div>
			<div class="timeline-panel">
				<div class="timeline-heading text-center">
					<h4 class="timeline-title">Moved to Korea</h4>
					<p><small class="text-muted"><i class="fa fa-globe"></i> Busan, Korea — <i class="fa fa-clock-o"></i> Nov 2014</small></p>
				</div>
			</div>
		</li>
		<li>
			<div class="timeline-badge info"><i class="fa fa-graduation-cap"></i></div>
			<div class="timeline-panel">
				<div class="timeline-heading text-center">
					<h4 class="timeline-title">Graduated &#8210; Wilfrid Laurier</h4>
					<p><small class="text-muted"><i class="fa fa-globe"></i> Waterloo, Ontario — <i class="fa fa-clock-o"></i> 2008 - 2014</small></p>
				</div>
				<div class="timeline-body">
					<ul>
						<li>Honours Business Administration and Computer Science.</li>
						<li>Senior Level Transfer Credit from Waterloo Univerity (CS370).</li>
						<li>Co-op Option.</li>
					</ul>
				</div>
			</div>
		</li>
		<li class="timeline-inverted">
			<div class="timeline-badge warning"><i class="fa fa-briefcase"></i></div>
			<div class="timeline-panel">
				<div class="timeline-heading text-center">
					<h4 class="timeline-title">Project Manager &#8210; Babcock & Wilcox Canada, Ltd.</h4>
					<p><small class="text-muted"><i class="fa fa-globe"></i> Cambridge, Ontario — <i class="fa fa-clock-o"></i> May 2012 - Aug 2012</small></p>
				</div>
				<div class="timeline-body">
					<ul>
						<li>Developed processes and workflows to expedite and better coordinate project management with SharePoint and various web technologies.</li>
						<li>Improved Excel-based nuclear dosage tracking tools using VBA.</li>
					</ul>
				</div>
			</div>
		</li>
		<li>
			<div class="timeline-badge success"><i class="fa fa-heart"></i></div>
			<div class="timeline-panel">
				<div class="timeline-heading text-center">
					<h4 class="timeline-title">Painted and Restored Eldercare Center</h4>
					<p><small class="text-muted"><i class="fa fa-globe"></i> Mississauga, Ontario —  <i class="fa fa-clock-o"></i> Nov 2011</small></p>
				</div>
				<div class="timeline-body">
					<ul>
						<li> Leveraged my personal painting experience to organize a group of coworkers in painting and restoring a Eldercare home.</li>
					</ul>
				</div>
			</div>
		</li>
		<li class="timeline-inverted">
			<div class="timeline-badge warning"><i class="fa fa-briefcase"></i></div>
			<div class="timeline-panel">
				<div class="timeline-heading text-center">
					<h4 class="timeline-title">Retail Programs Intern &#8210; Suncor Energy</h4>
					<p><small class="text-muted"><i class="fa fa-globe"></i> Mississauga, Ontario — <i class="fa fa-clock-o"></i> Sept 2012 - Dec 2012</small></p>
				</div>
				<div class="timeline-body">
					<ul>
						<li>Assisted in organizing and creating material for a national conference.</li>
						<li>Coordinated retail specialist across multiple east coast territories.</li>
						<li>Participated in and chaired meetings and teleconferences.</li>
					</ul>
				</div>
			</div>
		</li>
		<li>
			<div class="timeline-badge success"><i class="fa fa-heart"></i></div>
			<div class="timeline-panel">
				<div class="timeline-heading text-center">
					<h4 class="timeline-title">Climbed the CN Tower &#8210; United Way</h4>
					<p><small class="text-muted"><i class="fa fa-globe"></i> Toronto, Ontario —  <i class="fa fa-clock-o"></i> Oct 2011</small></p>
				</div>
				<div class="timeline-body">
					<ul>
						<li> Fundraised and participated in numerous charitable events and awareness raising stunts culminating in climbing the CN Tower.</li>
					</ul>
				</div>
			</div>
		</li>
		<li class="timeline-inverted">
			<div class="timeline-badge warning"><i class="fa fa-briefcase"></i></div>
			<div class="timeline-panel">
				<div class="timeline-heading text-center">
					<h4 class="timeline-title">Application Developer &#8210; Sun Life Financial</h4>
					<p><small class="text-muted"><i class="fa fa-globe"></i> Kitchener, Ontario — <i class="fa fa-clock-o"></i> Jan 2011 - May 2011</small></p>
				</div>
				<div class="timeline-body">
					<ul>
						<li>Coordinated business and application analyst to create new system monitoring tools using Asp.Net & C#.</li>
						<li>Patched back-end pension software using C++ and PL/SQL.</li>
					</ul>
				</div>
			</div>
		</li>
		<li>
			<div class="timeline-badge warning"><i class="fa fa-briefcase"></i></div>
			<div class="timeline-panel">
				<div class="timeline-heading text-center">
					<h4 class="timeline-title">Investment Performance Intern &#8210; SS&C Technologies</h4>
					<p><small class="text-muted"><i class="fa fa-globe"></i> Mississauga, Ontario —  <i class="fa fa-clock-o"></i> May 2010 - Sept 2010</small></p>
				</div>
				<div class="timeline-body">
					<ul>
						<li> Designed and implemented tests for portfolio attribution software to ensure consistency and accuracy using VBA and C#.</li>
						<li>Analyzed performance measurement and attribution formulas and their associated exception cases.</li>
					</ul>
				</div>
			</div>
		</li>		
		<li class="timeline-inverted">
			<div class="timeline-badge success"><i class="fa fa-heart"></i></div>
			<div class="timeline-panel">
				<div class="timeline-heading text-center">
					<h4 class="timeline-title">Tutor &#8210; Business and Computer Science Club</h4>
					<p><small class="text-muted"><i class="fa fa-globe"></i> Waterloo, Ontario —  <i class="fa fa-clock-o"></i> Sept 2009 - Dec 2013</small></p>
				</div>
				<div class="timeline-body">
					<ul>
						<li>Business and Computer Science Club (BUCS) funded by RIM.</li>
						<li>Helped students who were struggling in the program to succeed.</li>
					</ul>
				</div>
			</div>
		</li>
		<li>
			<div class="timeline-badge success"><i class="fa fa-heart"></i></div>
			<div class="timeline-panel">
				<div class="timeline-heading text-center">
					<h4 class="timeline-title">Treasurer &#8210; Laurier Chess Club</h4>
					<p><small class="text-muted"><i class="fa fa-globe"></i> Waterloo, Ontario —  <i class="fa fa-clock-o"></i> Sept 2009 - Sept 2010</small></p>
				</div>
				<div class="timeline-body">
					<ul>
						<li>Created tournament budgets and managed club finances.</li>
						<li>Coordinated with the WLU student union to attain club funding.</li>
					</ul>
				</div>
			</div>
		</li>

	</ul>
</section>
@endsection
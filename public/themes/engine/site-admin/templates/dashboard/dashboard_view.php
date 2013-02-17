	<!-- Prompt IE 6 users to install Chrome Frame -->
	<!--[if lt IE 7]><p class="message red-gradient simpler">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

	<!-- Title bar -->
	<header role="banner" id="title-bar">
		<h2>BackOffice</h2>
	</header>

	<!-- Button to open/hide menu -->
	<a href="javascript:void(0);" id="open-menu"><span>Menu</span></a>

	<!-- Button to open/hide shortcuts -->
	<a href="javascript:void(0);" id="open-shortcuts"><span class="icon-thumbs"></span></a>

	<!-- Main content -->
	<section role="main" id="main">

		<div>
			ทดสอบข้อมูล
		</div>


	</section>
	<!-- End main content -->

	<!-- Side tabs shortcuts -->
<!-- 	<ul id="shortcuts" role="complementary" class="children-tooltip tooltip-right">
		<li class="current"><a href="index-2.html" class="shortcut-dashboard" title="Dashboard">Dashboard</a></li>
		<li><a href="inbox.html" class="shortcut-messages" title="Messages">Messages</a></li>
		<li><a href="agenda.html" class="shortcut-agenda" title="Agenda">Agenda</a></li>
		<li><a href="tables.html" class="shortcut-contacts" title="Contacts">Contacts</a></li>
		<li><a href="explorer.html" class="shortcut-medias" title="Medias">Medias</a></li>
		<li><a href="sliders.html" class="shortcut-stats" title="Stats">Stats</a></li>
		<li><a href="form.html" class="shortcut-settings" title="Settings">Settings</a></li>
		<li><span class="shortcut-notes" title="Notes">Notes</span></li>
	</ul> -->

	<!-- Sidebar/drop-down menu -->
	<section id="menu" role="complementary">

		<!-- This wrapper is used by several responsive layouts -->
		<div id="menu-content">

			<header>
				Administrator
			</header>

			<div id="profile">
				<img src="<?php echo $this->theme_path; ?>img/user.png" width="64" height="64" alt="User name" class="user-icon">
				Welcome
				<br><br>
				<span class="">Website <b>Admin</b></span>
			</div>

			<!-- By default, this section is made for 4 icons, see the doc to learn how to change this, in "basic markup explained" -->
			<ul id="access" class="children-tooltip">
				<!-- <li><a href="inbox.html" title="Messages"><span class="icon-inbox"></span><span class="count">2</span></a></li>
				<li><a href="calendars.html" title="Calendar"><span class="icon-calendar"></span></a></li>
				<li><a href="login.html" title="Profile"><span class="icon-user"></span></a></li>
				<li class="disabled"><span class="icon-gear"></span></li> -->
			</ul>

			<section class="navigable">
				<ul class="big-menu">
					<li class="with-right-arrow">
						<span><span class="list-count">11</span>Main styles</span>
						<ul class="big-menu">
							<li><a href="typography.html">Typography</a></li>
							<li><a href="columns.html">Columns</a></li>
							<li><a href="tables.html">Tables</a></li>
							<li><a href="colors.html">Colors &amp; backgrounds</a></li>
							<li><a href="icons.html">Icons</a></li>
							<li><a href="files.html">Files &amp; Gallery</a></li>
							<li class="with-right-arrow">
								<span><span class="list-count">4</span>Forms &amp; buttons</span>
								<ul class="big-menu">
									<li><a href="buttons.html">Buttons</a></li>
									<li><a href="form.html">Form elements</a></li>
									<li><a href="textareas.html">Textareas &amp; WYSIWYG</a></li>
									<li><a href="form-layouts.html">Form layouts</a></li>
									<li><a href="wizard.html">Wizard</a></li>
								</ul>
							</li>
							<li class="with-right-arrow">
								<span><span class="list-count">2</span>Agenda &amp; Calendars</span>
								<ul class="big-menu">
									<li><a href="agenda.html">Agenda</a></li>
									<li><a href="calendars.html">Calendars</a></li>
								</ul>
							</li>
							<li><a href="blocks.html">Blocks &amp; infos</a></li>
						</ul>
					</li>
					<li class="with-right-arrow">
						<span><span class="list-count">8</span>Main features</span>
						<ul class="big-menu">
							<li><a href="auto-setup.html">Automatic setup</a></li>
							<li><a href="responsive.html">Responsiveness</a></li>
							<li><a href="tabs.html">Tabs</a></li>
							<li><a href="sliders.html">Slider &amp; progress</a></li>
							<li><a href="modals.html">Modal windows</a></li>
							<li class="with-right-arrow">
								<span><span class="list-count">3</span>Messages &amp; notifications</span>
								<ul class="big-menu">
									<li><a href="messages.html">Messages</a></li>
									<li><a href="notifications.html">Notifications</a></li>
									<li><a href="tooltips.html">Tooltips</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="with-right-arrow">
						<a href="ajax-demo/submenu.html" class="navigable-ajax" title="Menu title">With ajax sub-menu</a>
					</li>
				</ul>
			</section>

<!-- 			<ul class="unstyled-list">
				<li class="title-menu">Today's event</li>
				<li>
					<ul class="calendar-menu">
						<li>
							<a href="javascript:void(0);" title="See event">
								<time datetime="2011-02-24"><b>24</b> Feb</time>
								<small class="green">10:30</small>
								Event's description
							</a>
						</li>
					</ul>
				</li>
				<li class="title-menu">New messages</li>
				<li>
					<ul class="message-menu">
						<li>
							<span class="message-status">
								<a href="javascript:void(0);" class="starred" title="Starred">Starred</a>
								<a href="javascript:void(0);" class="new-message" title="Mark as read">New</a>
							</span>
							<span class="message-info">
								<span class="blue">17:12</span>
								<a href="javascript:void(0);" class="attach" title="Download attachment">Attachment</a>
							</span>
							<a href="javascript:void(0);" title="Read message">
								<strong class="blue">John Doe</strong><br>
								<strong>Mail subject</strong>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);" title="Read message">
								<span class="message-status">
									<span class="unstarred">Not starred</span>
									<span class="new-message">New</span>
								</span>
								<span class="message-info">
									<span class="blue">15:47</span>
								</span>
								<strong class="blue">May Starck</strong><br>
								<strong>Mail subject a bit longer</strong>
							</a>
						</li>
						<li>
							<span class="message-status">
								<span class="unstarred">Not starred</span>
							</span>
							<span class="message-info">
								<span class="blue">15:12</span>
							</span>
							<strong class="blue">May Starck</strong><br>
							Read message
						</li>
					</ul>
				</li>
			</ul> -->

		</div>
		<!-- End content wrapper -->

		<!-- This is optional -->
<!-- 		<footer id="menu-footer">
			<p class="button-height">
				<input type="checkbox" name="auto-refresh" id="auto-refresh" checked="checked" class="switch float-right">
				<label for="auto-refresh">Auto-refresh</label>
			</p>
		</footer> -->

	</section>
	<!-- End sidebar/drop-down menu -->

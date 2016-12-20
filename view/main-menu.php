<div data-role='page' id='main-menu' data-theme='b'>
	<div data-role='header' data-position='fixed'>
		<h2>Monopoly</h2>
		<a href="#popupDialog" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-delete ui-btn-icon-left ui-btn-b"><small>Logout</small></a>

	</div>	
	<div data-role='content' class='ui-content'>
		<h1 align='center'><span class='user-name'>Name</span></h1>
		<h2 align='center'>Your Money</h2>
		<h2 align='center'>$<span class='amount-money'></span></h2>
	</div>

	<div data-role='navbar' data-iconpos="left">
		<a href="#bank" data-icon='tag' data-role='button' data-transition='slide'>Bank</a>
		<a href="#player" data-icon='user' data-role='button' data-transition='slide'>Player</a>
		<a href="#transfer" data-icon='minus' data-role='button' data-transition='slide'>Transfer</a>
	</div>

	<div data-role='footer' data-position="fixed">
		<h1>&copy; Stoopid Inhooman 2016</h1>
	</div>

	<div data-role="popup" id="popupDialog" data-overlay-theme="b" data-theme="b" data-dismissible="false" style="max-width:300px;">
		<div role="main" class="ui-content">
			<h3 class="ui-title">Are you sure?</h3>
			<a href="#login" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b confirm-logout" data-transition="flow">Yay</a>
			<a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b" data-rel="back">Nay</a>

		</div>
	</div>
</div>




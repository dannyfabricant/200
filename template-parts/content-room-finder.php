<div class='room-finder-wrapper'>
	<div class='title medium'>Room Search</div>
	<div class='small'>
		<span>I need a room for</span>
		<div class='room-use select-outer'>
			<div class='down'>&#9662;</div>
			<select class='small' name="room-use" form="room-finder">
				<option value="solo practice">solo practice</option>
				<option value="group practice">group practice</option>
				<option value="teaching">teaching</option>
			</select>
		</div>
	</div>
	<div class='small occupants'>
		<span>I need space for</span>
		<div class='select-outer'>
			<div class='down'>&#9662;</div>
			<select class='small' name="occupants" form="room-finder">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7+">7+</option>
			</select>
		</div>
		<span>people</span>
	</div>
	<form id='room-finder' action="/rooms">
		  <input class='small' type="submit" value="Submit">
	</form>
</div>
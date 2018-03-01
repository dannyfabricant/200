  <div id='res-check'>
	<div class='res-check-inner'>
	    <div class='title medium'>Reservation Check</div>
	    <link rel='stylesheet' href='https://www.planyo.com/li.css'><script type='text/javascript' src='https://www.planyo.com/li.js'></script>
	    <form action='https://www.planyo.com/booking.php' method='get' target='planyo_li_iframe' onsubmit='return planyo_li_on_submit_form()'>
		<input class='small' type='text' name='ppp_reservation_id' value="Reservation ID" onfocus="this.value == 'Reservation ID' ? this.value = '' : this.value = this.value" onblur="this.value == '' ? this.value = 'Reservation ID' : this.value = this.value"/><br/>
		<input class='small' type='text' name='ppp_email' value="Email address" onfocus="this.value == 'Email address' ? this.value = '' : this.value = this.value" onblur="this.value == '' ? this.value = 'Email address' : this.value = this.value"/>
		<input type='hidden' name='mode' value='widget' /><br />
		<input type='hidden' name='planyo_lang' value='EN' />
		<input type='hidden' name='ppp_widget_type' value='reservation_details' />
		<input class='small' type='submit' value='Submit' />
	  </form>
	</div>
  </div>
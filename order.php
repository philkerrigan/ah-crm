<?php global $active;
    $active ='order';
    include('header.php');
?>

<section id="content" role="main">

	<div class="two column alpha">
        <?php include('sidebar.php')?>
    </div>

	<div class="ten column omega">

        <div class="page-title">Orders</div>

    	<div id="tabs">

        	<ul class="tabnav">
            	<li><a href="#customer-info">Search by Customer Info</a></li>
            	<li><a href="#order-details">Search by Order Details</a></li>
            	<li><a href="#credit-card">Search by Credit Card Data</a></li>
        	</ul>

        	<div id="customer-info" class="tabdiv">

            	<hr>
                <div class="page-subtitle">Search by Customer Info</div>

				<div class="four column alpha">
					<input type="text" id="customer-info-search-first-name-textfield" name="customer_info_search[first_name]" placeholder="First Name" />
					<input type="text" id="customer-info-search-last-name-textfield" name="customer_info_search[last_name]" placeholder="Last Name" />

					<input type="text" id="customer-info-search-street-textfield" name="customer_info_search[street]" placeholder="Street Address" />
					<input type="text" id="customer-info-search-city-textfield" name="customer_info_search[city]" placeholder="City" />

					<select id="customer-info-search-state-select" class="required" name="customer_info_search[state]">
  					<option value="">Any</option>
  						<optgroup data-country="US" label="States">
              				<option value="AL">Alabama</option>
              				<option value="AK">Alaska</option>
              				<option value="AS">American Samoa</option>
             				<option value="AZ">Arizona</option>
              				<option value="AR">Arkansas</option>
              				<option value="CA">California</option>
              				<option value="CO">Colorado</option>
              				<option value="CT">Connecticut</option>
              				<option value="DE">Delaware</option>
              				<option value="DC">District Of Columbia</option>
              				<option value="FM">Federated States Of Micronesia</option>
              				<option value="FL">Florida</option>
              				<option value="GA">Georgia</option>
             				<option value="GU">Guam</option>
             				<option value="HI">Hawaii</option>
             				<option value="ID">Idaho</option>
              				<option value="IL">Illinois</option>
              				<option value="IN">Indiana</option>
              				<option value="IA">Iowa</option>
              				<option value="KS">Kansas</option>
              				<option value="KY">Kentucky</option>
              				<option value="LA">Louisiana</option>
              				<option value="ME">Maine</option>
              				<option value="MH">Marshall Islands</option>
              				<option value="MD">Maryland</option>
              				<option value="MA">Massachusetts</option>
             			 	<option value="MI">Michigan</option>
              				<option value="MN">Minnesota</option>
              				<option value="MS">Mississippi</option>
              				<option value="MO">Missouri</option>
              				<option value="MT">Montana</option>
             				<option value="NE">Nebraska</option>
              				<option value="NV">Nevada</option>
              				<option value="NH">New Hampshire</option>
              				<option value="NJ">New Jersey</option>
              				<option value="NM">New Mexico</option>
              				<option value="NY">New York</option>
              				<option value="NC">North Carolina</option>
              				<option value="ND">North Dakota</option>
              				<option value="MP">Northern Mariana Islands</option>
              				<option value="OH">Ohio</option>
              				<option value="OK">Oklahoma</option>
              				<option value="OR">Oregon</option>
              				<option value="PW">Palau</option>
              				<option value="PA">Pennsylvania</option>
              				<option value="PR">Puerto Rico</option>
              				<option value="RI">Rhode Island</option>
              				<option value="SC">South Carolina</option>
              				<option value="SD">South Dakota</option>
              				<option value="TN">Tennessee</option>
              				<option value="TX">Texas</option>
              				<option value="UT">Utah</option>
              				<option value="VT">Vermont</option>
              				<option value="VI">Virgin Islands</option>
              				<option value="VA">Virginia</option>
              				<option value="WA">Washington</option>
              				<option value="WV">West Virginia</option>
              				<option value="WI">Wisconsin</option>
              				<option value="WY">Wyoming</option>
              				<option value="AA">Armed Forces America</option>
              				<option value="AE">Armed Forces Africa</option>
              				<option value="AE">Armed Forces Canada</option>
              				<option value="AE">Armed Forces Europe</option>
              				<option value="AE">Armed Forces Middle East</option>
              				<option value="AP">Armed Forces Pacific</option>
          				</optgroup>

  						<optgroup data-country="CA" label="Provinces">
              				<option value="AB">Alberta</option>
              				<option value="BC">British Columbia</option>
              				<option value="MB">Manitoba</option>
              				<option value="NB">New Brunswick</option>
              				<option value="NL">Newfoundland and Labrador</option>
             				<option value="NS">Nova Scotia</option>
              				<option value="ON">Ontario</option>
              				<option value="PE">Prince Edward Island</option>
              				<option value="QC">Quebec</option>
              				<option value="SK">Saskatchewan</option>
              				<option value="NT">Northwest Territories</option>
              				<option value="YT">Yukon</option>
              				<option value="NU">Nunavut</option>
          				</optgroup>
					</select>

					<input type="text" id="customer-info-search-zip-code-textfield" name="customer_info_search[zip_code]" placeholder="Zip Code" />

					<select id="customer-info-search-country-select" name="customer_info_search[country]" class="required">
                		<option value="" selected="selected">Country</option>
                    	<option value="US">United States</option><option value="CA">Canada</option>
                	</select>
                </div><!--<.four.column.alpha>-->

                <div class="four column omega">
                	<input type="text" id="customer-info-search-phone-number-textfield" name="customer_info_search[phone_number]" placeholder="Phone Number: xxx-xxx-xxxx" />
					<input type="text" id="customer-info-search-email-address-textfield" name="customer_info_search[email_address]" placeholder="Email: name@host.com" />
					<input type="text" id="customer-info-search-cc-name-textfield" name="customer_info_search[cc_name]" placeholder="Name On Credit Card" />
					<input type="text" id="customer-info-search-lead-id-textfield" name="customer_info_search[lead_id]" placeholder="Lead/Customer ID Number" />

					<div class="search-customer">
						<select class="limit-select" name="limit">
                			<option value="" selected="selected">Number of Results</option>
                			<option value="10">10</option>
                        	<option value="20">20</option>
	                    	<option value="50">50</option>
    	                	<option value="100">100</option>
    	            	</select>
						<button class="positive search-btn">Search</button>
                	</div><!--.search-customer-->
            	</div><!--<.four.column.alpha>-->

        	</div><!--#customer-info-->

        	<div id="order-details" class="tabdiv">

            	<hr>
                <div class="page-subtitle">Search by Order Details</div>

				<div class="four column alpha">
					<select id="order-details-search-order-status-select" name="order_details_search[order_status]">
                		<option value="Order Status" selected="selected">Order Status</option>
                	<option value="Any">Any</option>
                    <option value="Shipped">Shipped</option>
                    <option value="Canceled">Canceled</option>
                    <option value="Hard Declined">Hard Declined</option>
                    <option value="Declined">Declined</option>
                    <option value="Refunded">Refunded</option>
                    <option value="Voided">Voided</option>
                    <option value="Pending">Pending</option>
                    <option value="Awaiting Shipment">Awaiting Shipment</option>
					</select>
					<input type="text" id="order-details-search-tracking-textfield" name="order_details_search[tracking]" placeholder="Tracking Number" />
					<input type="text" id="order-details-search-rma-textfield" name="order_details_search[rma]" placeholder="RMA Number" />
					<input type="text" id="order-details-search-date-ordered-textfield" name="order_details_search[date_ordered]" class="datepicker" placeholder="Date Ordered" />
					<input type="text" id="order-details-search-next-ship-textfield" name="order_details_search[next_ship]" class="datepicker" placeholder="Next Ship Date" />
            	</div><!--<.four.column.alpha>-->

				<div class="four column omega">
					<div class="search-customer">
						<select class="limit-select" name="limit">
                			<option value="" selected="selected">Number of Results</option>
                			<option value="10">10</option>
                        	<option value="20">20</option>
	                    	<option value="50">50</option>
    	                	<option value="100">100</option>
    	            	</select>
						<button class="positive search-btn">Search</button>
                	</div><!--.search-customer-->
            	</div><!--<.four.column.omega>-->

        	</div><!--#order-details-->

       		<div id="credit-card" class="tabdiv">

            	<hr>
                <div class="page-subtitle">Search by Credit Card Data</div>

				<div class="four column alpha">
					<input type="text" id="credit-card-search-cc-name-textfield" name="credit_card_search[cc_name]" placeholder="Name On Credit Card" />
						<select id="credit-card-search-cc-type-select" name="credit_card_search[cc_type]">
            			<option value="" selected="selected">Any</option>
                		<option value="VI">Visa</option><option value="MC">Mastercard</option>
                		<option value="AX">American Express</option>
                		<option value="DI">Discover</option>
            		</select>
					<input type="text" id="credit-card-search-cc-suffix-textfield" name="credit_card_search[cc_suffix]" placeholder="Last 4 digits of card" />
					<input type="text" id="credit-card-search-charge-date-textfield" name="credit_card_search[charge_date]" placeholder="Transaction date" />
				</div><!--<.four.column.alpha>-->

				<div class="four column omega">
					<div class="search-customer">
						<select class="limit-select" name="limit">
                			<option value="" selected="selected">Number of Results</option>
                			<option value="10">10</option>
                        	<option value="20">20</option>
	                    	<option value="50">50</option>
    	                	<option value="100">100</option>
    	            	</select>
						<button class="positive search-btn">Search</button>
                	</div><!--.search-customer-->
            	</div><!--<.four.column.omega>-->

        	</div><!--#credit-card-->

    	</div><!--#tabs-->

        <div style="clear:both;"></div>

        <hr>
        <table class="search-results">
			<thead>
  				<tr>
    				<th>Order ID</th>
    				<th>Status</th>
    				<th>Type</th>
    				<th>Country</th>
    				<th>Name</th>
    				<th>Phone Number</th>
    				<th>E-Mail Address</th>
    				<th>Date Ordered</th>
    				<th>Product</th>
    				<th>Sub ID</th>
    				<th>Shown</th>
  				</tr>
			</thead>

		<tbody>
			<tr class="search-result">
      			<td><a href="/ah-crm/customer.php">32884444</a></td>
      			<td><a href="/ah-crm/customer.php">Awaiting Shipment</a></td>
      			<td><a href="/ah-crm/customer.php">Master</a></td>
      			<td><a href="/ah-crm/customer.php">US</a></td>
      			<td><a href="/ah-crm/customer.php">John Doe</a></td>
      			<td><a href="/ah-crm/customer.php">617-222-5555</a></td>
      			<td><a href="/ah-crm/customer.php">johndoe@gmail.com</a></td>
      			<td><a href="/ah-crm/customer.php">2013-02-20 10:40:39</a></td>
      			<td><a href="/ah-crm/customer.php">Instaflex 14 Day Trial</a></td>
      			<td><a href="/ah-crm/customer.php">76968811</a></td>
      			<td><a href="/ah-crm/customer.php">589</a></td>
    		</tr>

   			<tr class="search-result">
      			<td><a href="/ah-crm/customer.php">74564871</a></td>
      			<td><a href="/ah-crm/customer.php">Awaiting Shipment</a></td>
      			<td><a href="/ah-crm/customer.php">Master</a></td>
      			<td><a href="/ah-crm/customer.php">US</a></td>
      			<td><a href="/ah-crm/customer.php">John Doe</a></td>
	          	<td><a href="/ah-crm/customer.php">617-222-5555</a></td>
      			<td><a href="/ah-crm/customer.php">johndoe@gmail.com</a></td>
      			<td><a href="/ah-crm/customer.php">2013-02-20 10:35:58</a></td>
      			<td><a href="/ah-crm/customer.php">Instaflex 14 Day Trial</a></td>
      			<td><a href="/ah-crm/customer.php">76968258</a></td>
      			<td><a href="/ah-crm/customer.php">589</a></td>
    		</tr>
			<tr class="search-result">
      			<td><a href="/ah-crm/customer.php">34561481</a></td>
      			<td><a href="/ah-crm/customer.php">Awaiting Shipment</a></td>
      			<td><a href="/ah-crm/customer.php">Master</a></td>
      			<td><a href="/ah-crm/customer.php">US</a></td>
      			<td><a href="/ah-crm/customer.php">John Doe</a></td>
      			<td><a href="/ah-crm/customer.php">617-222-5555</a></td>
      			<td><a href="/ah-crm/customer.php">johndoe@gmail.com</a></td>
      			<td><a href="/ah-crm/customer.php">2013-02-20 10:40:39</a></td>
      			<td><a href="/ah-crm/customer.php">Instaflex 14 Day Trial</a></td>
      			<td><a href="/ah-crm/customer.php">76968811</a></td>
      			<td><a href="/ah-crm/customer.php">589</a></td>
    		</tr>

   			<tr class="search-result">
      			<td><a href="/ah-crm/customer.php">37465471</a></td>
      			<td><a href="/ah-crm/customer.php">Awaiting Shipment</a></td>
      			<td><a href="/ah-crm/customer.php">Master</a></td>
      			<td><a href="/ah-crm/customer.php">US</a></td>
      			<td><a href="/ah-crm/customer.php">John Doe</a></td>
	          	<td><a href="/ah-crm/customer.php">617-222-5555</a></td>
      			<td><a href="/ah-crm/customer.php">johndoe@gmail.com</a></td>
      			<td><a href="/ah-crm/customer.php">2013-02-20 10:35:58</a></td>
      			<td><a href="/ah-crm/customer.php">Instaflex 14 Day Trial</a></td>
      			<td><a href="/ah-crm/customer.php">76968258</a></td>
      			<td><a href="/ah-crm/customer.php">589</a></td>
    		</tr>
	</tbody>
	</table>

    </div><!--.ten.column.omega-->

</section><!-- #main -->

<?php include('footer.php')?>

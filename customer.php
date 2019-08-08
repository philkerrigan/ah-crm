<?php global $active;
    $active ='customer';
    include('header.php');
?>

<section id="content" role="main">

    <div class="two column alpha">
        <?php include('sidebar.php')?>
    </div>

	<div class="eight column customer-profile">

    	<div class="page-title">Bobby Johnson <span style="font-size:26px;">Customer ID #5477984</span></div>

    	<div id="tabs">

        	<ul class="tabnav">
                <li><a href="#customer-and-payment-info">Customer / Payment Info</a></li>
            	<li><a href="#customer-activity">Customer Activity</a></li>
                <li><a href="#order-details">Order Details</a></li>
            	<li><a href="#return-details">Return Details</a></li>
            	<li><a href="#ticket">Ticket</a></li>
        	</ul>

        	<div id="customer-and-payment-info" class="tabdiv">
            	<hr>
            	<div class="column twelve information">Customer is within the initial 14 day free trial period and is eligible for a trial period extension.</div>

                <div style="clear:both"></div>

                    <hr>
                    <div class="page-subtitle">Credit Card Info</div>

                    <div class="ticket" data-status="Closed">

                    	<div class="ticket-stub">
							<table id="customer-table">
  								<thead>
									<tr>
                                    	<th>Edit Info</th>
  										<th>Name on Card</th>
  										<th>CC Number</th>
  										<th>Card Type</th>
  										<th>Exp. Date</th>
									</tr>
								</thead>
								<tbody>
									<tr class="related-order status-awaiting-shipment">
                                    	<td><span><button class="positive edit" name="order_id" value="3710878">Edit Credit Card Info</button></span></td>
										<td>John Doe</td>
	    								<td>**** **** **** 9898 <a href="#">Show Full Number</a></td>
										<td>Visa</td>
    									<td>02/2020</td>
  			    	                </tr>
								</tbody>
							</table>
                        </div><!--.ticket-stub-->

            			<div class="ticket-body">
                        	<div class="hr2"></div>
                            <div class="page-subtitle">Update Payment Info</div>
                            <div class="four column alpha">
                                <input type="text" id="lead-cc-number-textfield" name="lead[cc_number]" placeholder="Card Number"/>
                            </div><!--<.four.column.alpha>-->

                            <div class="four column">
                                <select id="lead-cc-type-select" name="lead[cc_type]">
                                    <option value="" selected="selected">Select Card Type</option>
                                    <option value="VI">Visa</option>
                                    <option value="MC">Mastercard</option>
                                    <option value="AX">American Express</option>
                                    <option value="DI">Discover</option>
                                </select>
                                <select class="lead-cc-month-select" name="lead[cc_month]">
                                    <option value="" selected="selected">Exp. Month</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                                <select class="lead-cc-year-select" name="lead[cc_year]">
                                    <option value="" selected="selected">Exp. Year</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                </select>
                            </div>

                            <div class="four column omega">
                                <button class="positive update-btn">Update Card</button>
                            </div><!--.four.column.omega-->

                		</div><!--.ticket-body-->

                    	<div style="clear:both"></div>

                    </div><!--.ticket-->

                    <hr>
                    <div class="page-subtitle">Billing Address</div>
                    <div class="ticket" data-status="Closed">

                    	<div class="ticket-stub">
							<table id="customer-table">
  								<thead>
									<tr>
                                    	<th>Edit Info</th>
  										<th>Name</th>
  										<th>Address</th>
  										<th>Phone</th>
  										<th>Email</th>
									</tr>
								</thead>
								<tbody>
									<tr class="related-order status-awaiting-shipment">
                                    	<td><span><button class="positive edit" name="order_id" value="3710878">Edit Billing Address</button></span></td>
										<td>John Doe</td>
                                        <td>1324 Allston St<br />Boston, MA 02134<br />UNITED STATES</td>
                                        <td>617-456-4564</td>
                                        <td>imabadass@gmail.com</td>
  			    	                </tr>
								</tbody>
							</table>
                        </div><!--.ticket-stub-->

            			<div class="ticket-body">
                        	<div class="hr2"></div>
                            <div class="page-subtitle">Update Billing Address</div>
                            <div class="four column alpha">
                            	<input type="text" id="customer-info-search-first-name-textfield" name="customer_info_search[first_name]" placeholder="First Name" />
								<input type="text" id="customer-info-search-last-name-textfield" name="customer_info_search[last_name]" placeholder="Last Name" />
                            </div><!--<.four.column.alpha>-->

                            <div class="four column">
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
                            </div>

                            <div class="four column omega">
                				<input type="text" id="customer-info-search-phone-number-textfield" name="customer_info_search[phone_number]" placeholder="Phone Number: xxx-xxx-xxxx" />
								<input type="text" id="customer-info-search-email-address-textfield" name="customer_info_search[email_address]" placeholder="Email: name@host.com" />
                                <button class="positive update-btn">Update Address</button>
                            </div><!--.four.column.omega-->

                		</div><!--.ticket-body-->

                    	<div style="clear:both"></div>

                    </div><!--.ticket-->

                    <hr>
                    <div class="page-subtitle">Mailing Address</div>
                    <div class="ticket" data-status="Closed">

                    	<div class="ticket-stub">
							<table id="customer-table">
  								<thead>
									<tr>
                                    	<th>Edit Info</th>
  										<th>Name</th>
  										<th>Address</th>
  										<th>Phone</th>
  										<th>Email</th>
									</tr>
								</thead>
								<tbody>
									<tr class="related-order status-awaiting-shipment">
                                    	<td><span><button class="positive edit" name="order_id" value="3710878">Edit Mailing Address</button></span></td>
										<td>John Doe</td>
                                        <td>1324 Allston St<br />Boston, MA 02134<br />UNITED STATES</td>
                                        <td>617-456-4564</td>
                                        <td>imabadass@gmail.com</td>
  			    	                </tr>
								</tbody>
							</table>
                        </div><!--.ticket-stub-->

            			<div class="ticket-body">
                        	<div class="hr2"></div>
                            <div class="page-subtitle">Update Mailing Address</div>
                            <div class="four column alpha">
                            	<input type="text" id="customer-info-search-first-name-textfield" name="customer_info_search[first_name]" placeholder="First Name" />
								<input type="text" id="customer-info-search-last-name-textfield" name="customer_info_search[last_name]" placeholder="Last Name" />
                            </div><!--<.four.column.alpha>-->

                            <div class="four column">
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
                            </div>

                            <div class="four column omega">
                				<input type="text" id="customer-info-search-phone-number-textfield" name="customer_info_search[phone_number]" placeholder="Phone Number: xxx-xxx-xxxx" />
								<input type="text" id="customer-info-search-email-address-textfield" name="customer_info_search[email_address]" placeholder="Email: name@host.com" />
                                <button class="positive update-btn">Update Address</button>
                            </div><!--.four.column.omega-->

                		</div><!--.ticket-body-->

                    	<div style="clear:both"></div>

                    </div><!--.ticket-->

        	</div><!--#customer-and-payment-info-->

        	<div id="customer-activity" class="tabdiv">
            	<hr>
            	<div class="information">Customer is within the initial 14 day free trial period and is eligible for a trial period extension.</div>
                <hr>
                <div class="page-subtitle">Customer Activity</div>
						<div id="customer-activity-tab">
    					<ul id="activity-list">
      						<li data-order-id="3746495">
                            	<span class="activity-date">Feb 25, 2013 @ 11:17 AM</span>
    							<span class="activity-description">#334595 -- Viewed by: Phil Kerrigan</span>
  							</li>
      						<li data-order-id="3746495">
    							<span class="activity-date">Feb 25, 2013 @ 11:16 AM</span>
    							<span class="activity-description">#373455 -- $4.99 -- Master : Approved [$0.00 + $4.99]</span>
							</li>
      						<li data-order-id="3746495">
                            	<span class="activity-date">Feb 25, 2013 @ 11:17 AM</span>
    							<span class="activity-description">#74556495 -- Viewed by: Phil kerrigan</span>
  							</li>
      						<li data-order-id="3746495">
    							<span class="activity-date">Feb 25, 2013 @ 11:16 AM</span>
    							<span class="activity-description">#321458 -- $4.99 -- Master : Approved [$0.00 + $4.99]</span>
							</li>
						</ul>
					</div>
        	</div><!--#customer-activity-->

       		<div id="order-details" class="tabdiv">
                <hr>
            	<div class="information">Customer is within the initial 14 day free trial period and is eligible for a trial period extension.</div>
                <hr>
                <div class="page-subtitle">Credit Card Info</div>

                    <div class="ticket" data-status="Closed">

                    	<div class="ticket-stub">
							<table id="history-table">
  								<thead>
									<tr>
    	                            	<th></th>
  										<th>Refund</th>
                                        <th>Cancel</th>
  										<th>Order#</th>
  										<th>Date</th>
  										<th>Details</th>
  										<th>Shipping</th>
  										<th>Total</th>
									</tr>
								</thead>
								<tbody>
									<tr class="related-order status-awaiting-shipment">
                	            		<td><span class="down-btn">&#9660;</span></td>
										<td class="line-item-options-cell">
                        	        	    <button class="negative refund-button" name="process_type" value="line_item_refund">Refund</button>
                                    	</td>
                                        <td class="line-item-options-cell">
                  							<button class="negative cancel-button" name="process_type" value="line_item_cancel">Cancel</button>
                                    	</td>
										<td>376fghf49<br /><span class="litle-txn-id">TXN 8564564412266</span></td>
	    								<td>Feb 26, 2013 04:40 PM</td>
										<td>Instaflex 14 Day Trial $0.00 x1 $0.00</td>
    									<td>$4.99</td>
    									<td><strong>$4.99</strong></td>
  			    	                </tr>
								</tbody>
							</table>
                        </div><!--.ticket-stub-->

            			<div class="ticket-body">
                        	<div class="hr2"></div>
            				<div class="four column alpha">

        			            <div class="page-subtitle">Initial Order Details</div>
		                        	<dl>
										<dt>Order Status</dt>
											<dd>Awaiting Shipment</dd>
		  								<dt>Order Number</dt>
												<dd>3763649</dd>
											<dt>Order Source</dt>
											<dd>Internet Lead</dd>
										<dt>Lander Revision</dt>
											<dd>Lander 589</dd>
									</dl>
                			</div><!--.four column alpha-->

		                    <div class="four column">

        			            <div class="page-subtitle">Monthly Recurring Shipment</div>
									<dl>
										<dt>Recurring Shipment</dt>
											<dd>Instaflex 30 Day Supply</dd>
										<dt>Next Shipment Date</dt>
			 									<dd>March 16, 2013</dd>
		    							<dt>Next Shipment Quantity</dt>
											<dd>1</dd>
										<dt>Next Shipment Price</dt>
											<dd>69.99</dd>
									 </dl>
        			        </div><!--.four column-->

		                    <div class="four column omega">

		                        <div class="page-subtitle">Adjustable</div>

									<select id="order-ship-interval-select" name="order[ship_interval]">
        			                	<option value="" selected="selected">Shipment Intervals</option>
                    			    	<option value="15">15 Days</option>
		                                <option value="30">30 Days</option>
        			                    <option value="45">45 Days</option>
                    			        <option value="60">60 Days</option>
		                                <option value="75">75 Days</option>
        			                    <option value="90">90 Days</option>
                    			    </select>
		   							<select id="order-quantity-select" name="order[quantity]">
        			                	<option value="" selected="selected">New Quantity</option>
                    			    	<option value="1">1</option>
		                                <option value="2">2</option>
        			                    <option value="3">3</option>
                    			        <option value="4">4</option>
		                                <option value="5">5</option>
        			                    <option value="6">6</option>
                    			    </select>
									<select id="order-price-select" name="order[price]">
        			                	<option value="" selected="selected">New Price</option>
                    			    	<option value="69.99">69.99</option>
		                                <option value="49.99">49.99</option>
        			                    <option value="29.99">29.99</option>
                    			    </select>
									<button id="selldown-save-button" class="positive">Save</button>
		                    </div><!--.four column omega-->
                		</div><!--.ticket-body-->

                    	<div style="clear:both"></div>

                    </div><!--.ticket-->

        	</div><!--#order-details-->

            <div id="return-details" class="tabdiv">
                <hr>
            	<div class="information">Customer is within the initial 14 day free trial period and is eligible for a trial period extension.</div>

            	<hr>
            	<div class="page-subtitle">Possible Matches</div>
				<div class="btn-back">
						<form id="match-order-id-form">
						<input type="text" id="match-order-id-field" placeholder="Select an order below or enter an order ID to associate it with this return:" name="return[order_id]">
						<button class="positive match-order-id-button">Match</button>
						</form>
            	</div>

        		<div id="returns">
					<ul class="tickets-list">
						<li class="ticket" data-status="Closed">
							<div class="ticket-stub">
                        		<span class="down-btn" style="font-size:11px; position:relative; top:-2px; cursor:pointer">&#9660;</span>
                            	<span><button class="positive use-order" name="order_id" value="3710878">Use This Order</button></span>
                            	<span>
                       	            <select class="return-action-select">
	    	           					<option value="Ignore">Ignore</option>
					            	    <option value="Unignore">Unignore</option>
						            	<option value="Mark as Dealt">Mark as Dealt</option>
    				    			    <option value="Mark as Not Dealt">Mark as Not Dealt</option>
       					        		<option value="Refresh">Refresh</option>
		            		        </select>
    		   		         	</span>
  								<span>#1545621</span>
  								<span>John Doe</span>
	      						<span>SKU: DD-ISF60</span>
							</div><!--.ticket-stub-->

								<div class="ticket-body">

								<table id="return-table">
									<thead>
										<tr>
											<th>Address</th>
											<th>Return Status</th>
											<th>Order Status</th>
											<th>Order Type</th>
											<th>Date</th>
											<th>Notes</th>
                                            <th>Disposition</th>
                                            <th>Return Reason</th>
                                            <th>Quantity</th>
										</tr>
									</thead>

									<tbody>
										<tr>
        									<td>1234 Allston St<br />East Boston, MA 02128</td>
        									<td>Dealt With</td>
        									<td>Shipped</td>
                                            <td>Rebill</td>
                                            <td>2013-02-28</td>
                                            <td>letter/cancel</td>
                                            <td>Resalable</td>
                                            <td>Cust. Pd Postage</td>
                                            <td>1</td>
                                        </tr>
                                    </tbody>
                                </table>

								<div class="hr2"></div>
                				<div class="page-subtitle" style="margin-top:20px;">Return Notes</div>
									<select id="reason-select" name="reason" class="required">
   	                 					<option value="" selected="selected">Reason for Canceling</option>
                        				<option value="Benefits Not Working">Benefits Not Working</option>
	                       				<option value="Dissatisfied with Product">Dissatisfied with Product</option>
    	                   				<option value="Never Signed Up">Never Signed Up</option>
        	               				<option value="No Reason">No Reason</option>
            	           				<option value="Other - See Notes">Other - See Notes</option>
                	       				<option value="Unable to See the Value">Unable to See the Value</option>
                        				<option value="Unaffordable">Unaffordable</option>
                   					</select>
                                    	<br />
									<textarea class="return-details" name="notes" placeholder="Cancel Notes"></textarea>
                                    	<br />
  									<button class="negative return-details-button">Cancel Order</button>
								</div><!--.ticket-body-->

						</li><!--.ticket-->
                	</ul><!--.tickets-list-->
                </div><!-- #returns -->

        	</div><!--#return-details-->

            <div id="ticket" class="tabdiv">
                <hr>
            	<div class="information">Customer is within the initial 14 day free trial period and is eligible for a trial period extension.</div>
            	<hr>
                <div class="page-subtitle">Ticket</div>

					<div id="support-tickets-tab">
      				<ul class="tickets-list">
                       	<li class="ticket" data-status="Closed" data-ticket-id="156442">
								<div class="ticket-stub">
                               	<span style="font-size:11px; margin-right:4px; position:relative; top:-2px;">&#9660;</span>
								<span class="id">#555442</span>
								<span class="user-name">John Doe</span>
								<span class="subject">cancellation</span>
								<span class="timestamp">February 28, 2013 10:42 AM</span>
								<span class="status">(Closed)</span>
							</div><!--.ticket-stub-->

								<div class="ticket-body">

								<div class="ticket-message">
									cci to ask if they were billed for item they received. cust did not about autoship. cancelled autoship. cust would like to return most recent autoship. gave rma and return info ap gisellen
                                </div><!--.ticket-message-->

								<ul class="comments">
									<li id="comment-166339" class="comment" data-comment-id="166339">
										<div class="comment-stub">
											<span class="comment-user-name">John Doe</span>
											<span class="comment-timestamp">February 28, 2013 10:42 AM</span>
											<span class="comment-status">(Closed)</span>
										</div><!--.comment-stub-->
										<div class="comment-body">
											<div class="comment-message"><em>Status changed to "Closed".</em></div>
										</div><!--.comment-body-->
									</li>
              					</ul><!--.comments-->

								<div class="new-comment">
  									<form method="post" action="/new-master/orders/3635448/tickets/156442/comments/create">
											<textarea id="comment-message-textarea" name="comment[message]" placeholder="Reply Here / Change Status"></textarea>
										<select id="comment-status-select" name="comment[status]">
                                   			<option value="" selected="selected">Don&#039;t change ticket status.</option>
	                                        <option value="Open">Open</option>
    		                                <option value="Pending">Pending</option>
            		                        <option value="Needs Follow Up">Needs Follow Up</option>
                    		                <option value="Closed">Closed</option>
	                                    </select>
										<span class="form-buttons">
											<button class="save-btn">Save</button>
										</span>
	  									<span class="loading-indicator hide">Saving...</span>
											<span class="hide error validation-message">Please enter a message or select a new status.</span>
									</form>
								</div><!--.new-comment-->

								</div><!--.ticket-body-->

						</li><!--.ticket-->
                	</ul><!--.tickets-list-->

                	<hr>
                	<div class="page-subtitle">Create Ticket</div>
                	<div class="six column">
						<input type="text" id="subject-textfield" name="subject" placeholder="Subject" />
                    	<textarea class="required" name="notes" placeholder="Cancel Notes"></textarea>
  						<button class="positive">Create Ticket</button>
                	</div><!--.six.column-->
            	</div><!--#support-tickets-tab-->

        	</div><!--#ticket-->

    	</div><!--#tabs-->

    </div><!--.eight.column-->

		<div class="two column omega">
		<nav id="secondary">
        	<hr>
			<ul>
				<li class="accordion-btn"><a href="#"><i class="halflings-icon white list"></i>Edit Orders</a></li>
                <li class="accordion-btn"><a href="#"><span style="font-size:11px; margin-right:4px; position:relative; top:-2px;">&#9660;</span> Order Actions</a></li>
                <li>
					<ul class="accordion-dropdown">
                		<li class="accordion-dropdown-btn"><a href="#"><i class="halflings-icon white warning-sign"></i>Request Refund</a></li>
						<li class="accordion-dropdown-btn"><a href="#"><i class="halflings-icon white time"></i>Extend Trial</a></li>
						<li class="accordion-dropdown-btn"><a href="#"><i class="halflings-icon white refresh"></i>Restart Trial</a></li>
						<li class="accordion-dropdown-btn"><a href="#"><i class="halflings-icon white shopping-cart"></i>Create Sale</a></li>
						<li class="accordion-dropdown-btn"><a href="#"><i class="halflings-icon white gift"></i>Send a Gift</a></li>
					</ul>
                </li>
                <li class="accordion-btn"><a href="#"><span style="font-size:11px; margin-right:4px; position:relative; top:-2px;">&#9660;</span> Admin</a></li>
                <li>
					<ul class="accordion-dropdown">
						<li class="accordion-dropdown-btn"><a href="#"><i class="halflings-icon white warning-sign"></i>Issue Refund</a></li>
						<li class="accordion-dropdown-btn"><a href="#"><i class="halflings-icon white warning-sign"></i>RMA Refund</a></li>
            		</ul>
            	</li>
			</ul>
		</nav>
	</div><!--.two.column.omega-->

</section><!-- #main -->

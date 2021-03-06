<?php global $active;
    $active ='sale';
    include('header.php');
?>

<section id="content" role="main">

    <div class="two column alpha">
        <?php include('sidebar.php')?>
    </div>

	<div class="ten column omega">

        <div class="page-title">Sale</div>

        <div id="tabs">

        	<ul class="tabnav">
            	<li><a href="#trial-order">Trial Order</a></li>
            	<li><a href="#retail-order">Retail Order</a></li>
        	</ul>

        	<div id="trial-order" class="tabdiv">

				<div class="four column alpha">
                	<hr>
                    <div class="page-subtitle">Sale / Product Details</div>

					<div id="trial-order-details">

						<select id="sale-trial-product-pricing-break-select" name="sale[trial_product][pricing_break]">
                        	<option value="" selected="selected">Pricing Options</option>
                        	<option value="69.99">$69.99</option>
                            <option value="49.99">$49.99</option>
                            <option value="29.99">$29.99</option>
                        </select>

						<select id="trial-country-select" name="trial_country" class="required">
                        	<option value="" selected="selected">Ship to Country</option>
                            <option value="CA">CANADA</option>
                            <option value="US">UNITED STATES</option>
                        </select>

    					<select id="trial-product-select" name="trial_product">
      						<option value="" class="CA US">Upsell - Add a Product</option>
      						<option class="CA US" value="4">Instaflex Bone Support&nbsp;&nbsp;&#45;&nbsp;&#36;26.99</option>
                            <option class="US" value="5">Instaflex Multivitamin&nbsp;&nbsp;&#45;&nbsp;&#36;19.99</option>
                            <option class="US" value="6">Instaflex Muscle Support&nbsp;&nbsp;&#45;&nbsp;&#36;26.99</option>
              			</select>

                	<hr>
                    <div class="page-subtitle">Items</div>
    					<ul id="line-items-trial">
                  			<li data-product-id="4" data-maximum-quantity="1" class="span-10 last">
                  				<!--<span class="line-item-trial-product-name">Instaflex Bone Support</span>-->
          							<select id="sale-trial-products-4-pricing-break-select" name="sale[trial_products][4][pricing_break]" class="line-item-trial-pricing-break-select">
                                    	<option value="26.99">Instaflex Bone Support - $26.99</option>
                                    </select>
          						<!--<span>x</span>-->
          							 <select id="sale-trial-products-4-quantity-select" name="sale[trial_products][4][quantity]" class="line-item-trial-quantity-select">
                                     	<option value="0" selected="selected">x 0</option>
                                        <option value="1">x 1</option>
                                    </select>
                                    <div class="remove-trial">
                                    	<button type="button" class="remove-line-item-trial-button negative line-item-cancel-button">Cancel</button>
        								<span class="line-item-trial-amount">$26.99</span>
                                    </div>
      						</li>
                  			<li data-product-id="5" data-maximum-quantity="1" class="span-10 last">
          						<!--<span class="line-item-trial-product-name">Instaflex Multivitamin</span>-->
          							<select id="sale-trial-products-5-pricing-break-select" name="sale[trial_products][5][pricing_break]" class="line-item-trial-pricing-break-select">
                                    	<option value="19.99">Instaflex Multivitamin - $19.99</option>
                                    </select>
          						<!--<span>x</span>-->
          							<select id="sale-trial-products-5-quantity-select" name="sale[trial_products][5][quantity]" class="line-item-trial-quantity-select">
                                    	<option value="0" selected="selected">x 0</option>
                                        <option value="1">x 1</option>
                                    </select>
                                    <div class="remove-trial">
                                    	<button type="button" class="negative line-item-cancel-button">Cancel</button>
        								<span class="line-item-trial-amount">$19.99</span>
                                    </div>
							</li>
                  			<li data-product-id="6" data-maximum-quantity="1" class="span-10 last">
          						<!--<span class="line-item-trial-product-name">Instaflex Muscle Support</span>-->
          							<select id="sale-trial-products-6-pricing-break-select" name="sale[trial_products][6][pricing_break]" class="line-item-trial-pricing-break-select">
                                    	<option value="26.99">Instaflex Muscle Support - $26.99</option>
                                    </select>
          						<!--<span>x</span>-->
          							<select id="sale-trial-products-6-quantity-select" name="sale[trial_products][6][quantity]" class="line-item-trial-quantity-select">
                                    	<option value="0" selected="selected">x 0</option>
                                        <option value="1">x 1</option>
                                    </select>
                                    <div class="remove-trial">
                                        <button type="button" class="negative line-item-cancel-button">Cancel</button>
	        							<span class="line-item-trial-amount">$26.99</span>
                                    </div>
      						</li>
              			</ul>
                        <hr>
    					<div class="subtotal span-10 last">
      						<span>Subtotal</span><span id="line-items-trial-subtotal">4.99</span>
    					</div>
    					<div class="total span-10 last">
      						<span>Total Plus Shipping</span><span id="line-items-trial-total">4.99</span>
    					</div>

					</div><!--#trial-order-details-->

            	</div><!--<.four.column.alpha>-->

            	<div class="four column">
                	<hr>
                    <div class="page-subtitle">Shipping Address</div>

					<div id="trial-customer-details" class="span-22 last">

						<input type="text" class="first-name" name="customer_info_search[first_name]" placeholder="First Name" />
						<input type="text" class="last-name" name="customer_info_search[last_name]" placeholder="Last Name" />
						<input type="text" class="street-address" name="customer_info_search[street]" placeholder="Street Address" />
						<input type="text" class="city" name="customer_info_search[city]" placeholder="City" />
						<select class="state required" name="customer_info_search[state]">
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
						<input type="text" class="zip" name="customer_info_search[zip_code]" placeholder="Zip Code" />
						<select name="customer_info_search[country]" class="country required">
                			<option value="" selected="selected">Country</option>
                    		<option value="US">United States</option><option value="CA">Canada</option>
                		</select>
                		<input type="text" class="phone" name="customer_info_search[phone_number]" placeholder="Phone Number: xxx-xxx-xxxx" />
						<input type="text" class="e-mail" name="customer_info_search[email_address]" placeholder="Email: name@host.com" />

                	<hr>
						<div class="same-address">
  						<input type="checkbox" value="None" id="trial-address" name="check" />
  						<label for="trial-address"></label>
						</div>
                	<hr>
                    <div class="page-subtitle">Billing Address</div>

						<input type="text" class="first-name" name="customer_info_search[first_name]" placeholder="First Name" />
						<input type="text" class="last-name" name="customer_info_search[last_name]" placeholder="Last Name" />
						<input type="text" class="street-address" name="customer_info_search[street]" placeholder="Street Address" />
						<input type="text" class="city" name="customer_info_search[city]" placeholder="City" />
						<select class="state required" name="customer_info_search[state]">
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
						<input type="text" class="zip" name="customer_info_search[zip_code]" placeholder="Zip Code" />
						<select name="customer_info_search[country]" class="country required">
                			<option value="" selected="selected">Country</option>
                    		<option value="US">United States</option><option value="CA">Canada</option>
                		</select>
                		<input type="text" class="phone" name="customer_info_search[phone_number]" placeholder="Phone Number: xxx-xxx-xxxx" />
						<input type="text" class="e-mail" name="customer_info_search[email_address]" placeholder="Email: name@host.com" />

                	</div><!--<#customer-details>-->

            	</div><!--<.four.column>-->

				<div class="four column omega">
                	<hr>
                    <div class="page-subtitle">Pay by Credit Card</div>

						<div id="trial-credit-card-details">
							<input type="text" name="sale[credit_card][cc_name]" class="required" placeholder="Name on Card" />
							<input type="text" name="sale[credit_card][cc_number]" class="required creditcard" placeholder="Card Number" />
							<select name="sale[credit_card][cc_type]" class="required">
								<option value="" selected="selected">Select Card Type</option>
                                <option value="VI">Visa</option><option value="MC">Mastercard</option>
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
                            <div class="btn-back"><button class="process-sale-btn">Process Sale</button></div>
                        </div>
                    <hr>
                    <div class="pay-with-check">
  						<input type="checkbox" value="None" id="trial-cc" name="check" />
  						<label for="trial-cc"></label>
						</div>
                	<hr>
                    <div class="page-subtitle">Pay by Check</div>
    					<div class="check-details">
							<input type="text" name="sale[check][check_aba]" class="integer-field required" placeholder="Routing Number" />
							<input type="text" name="sale[check][check_account]" class="integer-field required" placeholder="Account Number" />
							<input type="text" name="sale[check][check_number]" class="integer-field required" placeholder="Check Number" />
                            <div class="btn-back"><button class="process-sale-btn">Process Sale</button></div>
						</div>
            	</div><!--<.four.column.omega>-->

        	</div><!--#trial-order-->

        	<div id="retail-order" class="tabdiv">

				<div class="four column alpha">
                	<hr>
                    <div class="page-subtitle">Sale / Product Details</div>

					<div id="retial-order-details">

						<select id="retail-country-select" name="trial_country" class="required">
                        	<option value="" selected="selected">Ship to Country</option>
                            <option value="CA">CANADA</option>
                            <option value="US">UNITED STATES</option>
                        </select>

    					<select id="retail-product-select" name="retail_product">
      						<option value="" class="CA US">Add a Product</option>
      						<option class="CA US" value="2">Instaflex 30 Day Supply</option>
                  			<option class="CA US" value="4">Instaflex Bone Support</option>
                  			<option class="US" value="5">Instaflex Multivitamin</option>
                  			<option class="US" value="6">Instaflex Muscle Support</option>
              			</select>

                	<hr>
                    <div class="page-subtitle">Items</div>

   					<ul id="line-items" class="span-10 last">
                  		<li data-product-id="2" data-maximum-quantity="6" class="span-10 last">
							<!--<span class="line-item-product-name">Instaflex 30 Day Supply</span>-->
          						<select id="sale-retail-products-2-pricing-break-select" name="sale[retail_products][2][pricing_break]" class="line-item-pricing-break-select">
                                	<option value="69.99">Instaflex 30 Day Supply - $69.99</option>
                                    <option value="49.99">Instaflex 30 Day Supply - $49.99</option>
                                    <option value="29.99">Instaflex 30 Day Supply - $29.99</option>
                                </select>

								<select id="sale-retail-products-2-quantity-select" name="sale[retail_products][2][quantity]" class="line-item-quantity-select">
                                	<option value="0" selected="selected">x 0</option>
                                    <option value="1">x 1</option>
                                    <option value="2">x 2</option>
                                    <option value="3">x 3</option>
                                    <option value="4">x 4</option>
                                    <option value="5">x 5</option>
                                    <option value="6">x 6</option>
                                </select>

                                <div class="remove-trial">
                                	<button type="button" class="remove-line-item-button negative line-item-cancel-button">Cancel</button>
          							<span class="line-item-amount">69.99</span>
                                </div>
        				</li>
                  		<li data-product-id="4" data-maximum-quantity="6" class="span-10 last">
							<!--<span class="line-item-product-name">Instaflex Bone Support</span>-->
          						<select id="sale-retail-products-4-pricing-break-select" name="sale[retail_products][4][pricing_break]" class="line-item-pricing-break-select">
                                	<option value="26.99">Instaflex Bone Support - $26.99</option>
                                </select>

          			            <select id="sale-retail-products-4-quantity-select" name="sale[retail_products][4][quantity]" class="line-item-quantity-select">
                                	<option value="0" selected="selected">x 0</option>
                                    <option value="1">x 1</option>
                                    <option value="2">x 2</option>
                                    <option value="3">x 3</option>
                                    <option value="4">x 4</option>
                                    <option value="5">x 5</option>
                                    <option value="6">x 6</option>
                                </select>

                                <div class="remove-trial">
                                	<button type="button" class="remove-line-item-button negative line-item-cancel-button">Cancel</button>
          							<span class="line-item-amount">26.99</span>
                                </div>
        				</li>
                  		<li data-product-id="5" data-maximum-quantity="6" class="span-10 last">
          					<!--<span class="line-item-product-name">Instaflex Multivitamin</span>-->
          						<select id="sale-retail-products-5-pricing-break-select" name="sale[retail_products][5][pricing_break]" class="line-item-pricing-break-select">
                                	<option value="29.99">Instaflex Multivitamin - $29.99</option>
                                </select>

          						<select id="sale-retail-products-5-quantity-select" name="sale[retail_products][5][quantity]" class="line-item-quantity-select">
                                	<option value="0" selected="selected">x 0</option>
                                    <option value="1">x 1</option>
                                    <option value="2">x 2</option>
                                    <option value="3">x 3</option>
                                    <option value="4">x 4</option>
                                    <option value="5">x 5</option>
                                    <option value="6">x 6</option>
                                </select>

                                <div class="remove-trial">
                                	<button type="button" class="remove-line-item-button negative line-item-cancel-button">Cancel</button>
          							<span class="line-item-amount">29.99</span>
                                </div>
        				</li>
                  		<li data-product-id="6" data-maximum-quantity="6" class="span-10 last">
							<!--<span class="line-item-product-name">Instaflex Muscle Support</span>-->
          						<select id="sale-retail-products-6-pricing-break-select" name="sale[retail_products][6][pricing_break]" class="line-item-pricing-break-select">
                                	<option value="26.99">Instaflex Muscle Support - $26.99</option>
                                </select>

          						<select id="sale-retail-products-6-quantity-select" name="sale[retail_products][6][quantity]" class="line-item-quantity-select">
                                	<option value="0" selected="selected">x 0</option>
                                    <option value="1">x 1</option>
                                    <option value="2">x 2</option>
                                    <option value="3">x 3</option>
                                    <option value="4">x 4</option>
                                    <option value="5">x 5</option>
                                    <option value="6">x 6</option>
                                </select>

                                <div class="remove-trial">
                                	<button type="button" class="remove-line-item-button negative line-item-cancel-button">Cancel</button>
          							<span class="line-item-amount">26.99</span>
                                </div>
        				</li>
              		</ul>

                        <hr>
    					<div class="subtotal span-10 last">
      						<span>Subtotal</span><span id="line-items-subtotal">0.00</span>
    					</div>
    					<div class="total span-10 last">
      						<span>Total Plus Shipping</span><span id="line-items-total">0.00</span>
    					</div>

					</div><!--#retail-order-details-->

            	</div><!--<.four.column.alpha>-->

            	<div class="four column">
                	<hr>
                    <div class="page-subtitle">Shipping Address</div>

					<div id="retail-customer-details" class="span-22 last">

						<input type="text" class="first-name" name="customer_info_search[first_name]" placeholder="First Name" />
						<input type="text" class="last-name" name="customer_info_search[last_name]" placeholder="Last Name" />
						<input type="text" class="street-address" name="customer_info_search[street]" placeholder="Street Address" />
						<input type="text" class="city" name="customer_info_search[city]" placeholder="City" />
						<select class="state required" name="customer_info_search[state]">
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
						<input type="text" class="zip" name="customer_info_search[zip_code]" placeholder="Zip Code" />
						<select name="customer_info_search[country]" class="country required">
                			<option value="" selected="selected">Country</option>
                    		<option value="US">United States</option><option value="CA">Canada</option>
                		</select>
                		<input type="text" class="phone" name="customer_info_search[phone_number]" placeholder="Phone Number: xxx-xxx-xxxx" />
						<input type="text" class="e-mail" name="customer_info_search[email_address]" placeholder="Email: name@host.com" />

                	<hr>
						<div class="same-address">
  						<input type="checkbox" value="None" id="retail-address" name="check" checked />
  						<label for="retail-address"></label>
						</div>
                	<hr>
                    <div class="page-subtitle">Billing Address</div>

						<input type="text" class="first-name" name="customer_info_search[first_name]" placeholder="First Name" />
						<input type="text" class="last-name" name="customer_info_search[last_name]" placeholder="Last Name" />
						<input type="text" class="street-address" name="customer_info_search[street]" placeholder="Street Address" />
						<input type="text" class="city" name="customer_info_search[city]" placeholder="City" />
						<select class="state required" name="customer_info_search[state]">
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
						<input type="text" class="zip" name="customer_info_search[zip_code]" placeholder="Zip Code" />
						<select name="customer_info_search[country]" class="country required">
                			<option value="" selected="selected">Country</option>
                    		<option value="US">United States</option><option value="CA">Canada</option>
                		</select>
                		<input type="text" class="phone" name="customer_info_search[phone_number]" placeholder="Phone Number: xxx-xxx-xxxx" />
						<input type="text" class="e-mail" name="customer_info_search[email_address]" placeholder="Email: name@host.com" />

                	</div><!--<#customer-details>-->

            	</div><!--<.four.column>-->

				<div class="four column omega">
                	<hr>
                    <div class="page-subtitle">Pay by Credit Card</div>

						<div id="retail-credit-card-details">
							<input type="text" name="sale[credit_card][cc_name]" class="required" placeholder="Name on Card" />
							<input type="text" name="sale[credit_card][cc_number]" class="required creditcard" placeholder="Card Number" />
							<select name="sale[credit_card][cc_type]" class="required">
								<option value="" selected="selected">Select Card Type</option>
                                <option value="VI">Visa</option><option value="MC">Mastercard</option>
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
                            <div class="btn-back"><button class="process-sale-btn">Process Sale</button></div>
                        </div>
                    <hr>
                    <div class="pay-with-check">
  						<input type="checkbox" value="None" id="retail-cc" name="check" checked />
  						<label for="retail-cc"></label>
						</div>
                	<hr>
                    <div class="page-subtitle">Pay by Check</div>
    					<div class="check-details">
							<input type="text" name="sale[check][check_aba]" class="integer-field required" placeholder="Routing Number" />
							<input type="text" name="sale[check][check_account]" class="integer-field required" placeholder="Account Number" />
							<input type="text" name="sale[check][check_number]" class="integer-field required" placeholder="Check Number" />
                            <div class="btn-back"><button class="process-sale-btn">Process Sale</button></div>
						</div>
            	</div><!--<.four.column.omega>-->

        	</div><!--#retail-order-->

    	</div><!--#tabs-->

    </div><!--.ten.column.omega-->

</section><!-- #main -->

<?php include('footer.php')?>

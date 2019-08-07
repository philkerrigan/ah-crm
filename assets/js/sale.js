$(function() {
  var sale_form = $('#sale-form');
  var sale_type_select = $('#sale-product-type-select');
  var trial_options = $('#trial-options');
  var retail_options = $('#retail-options');
  var line_items = $('#line-items > li');
  var line_items_trial = $('#line-items-trial > li');
  var sale_form_overlay = $('#sale-form-overlay');
  var customer_details = $('#customer-details');
  var trial_script = $('#trial-script');
  var start_new_trial_button = $('#start-new-trial-button');
  var start_new_retail_button = $('#start-new-retail-button');
  var retail_product_select = $('#retail-product-select');
  var trial_product_select = $('#trial-product-select');
  var add_shipping_address_button = $('#add-shipping-address-button');
  var remove_shipping_address_button = $('#remove-shipping-address-button');
  var edit_shipping_address_button = $('#edit-shipping-address-button');
  var has_shipping_address_checkbox = $('#has-shipping-address-checkbox');
  var shipping_address = $('#shipping-address');
  var pay_by_check_checkbox = $('#pay-by-check-checkbox');
  var credit_card_details = $('#credit-card-details');
  var check_details = $('#check-details');
  var billing_country_select = $('#sale-billing-address-country-select');
  var billing_state_select = $('#sale-billing-address-state-select');
  var shipping_country_select = $('#sale-shipping-address-country-select');
  var shipping_state_select = $('#sale-shipping-address-state-select');
  
  //Inits the pink overlay form with new trial and new retial order buttons
  var initOverlay = function() {
    sale_form_overlay.offset(customer_details.offset());
    sale_form_overlay.height(customer_details.height());
    sale_form_overlay.width(customer_details.width());
  };
  
  //hides retail order related elements and shows trial order ones
  var switchToTrialMode = function() {
    trial_script.hide();
    sale_form_overlay.hide();
    sale_type_select.val('trial');
    retail_options.hide();
    trial_options.show();
  };
  
  //hides trial order related elements and shows retail order ones
  var switchToRetailMode = function() {
    trial_script.hide();
    sale_form_overlay.hide();
    sale_type_select.val('retail');
    trial_options.hide();
    retail_options.show();
  };
  
  //shows the pink form and asks for user input on starting trial or retail order
  var switchToOverlayMode = function() {
    initOverlay();
    sale_form_overlay.show();
    trial_options.hide();
    retail_options.hide();
    trial_script.show();
  };
  
  /**
  *Disables an option from retail product list when someone selects a retail
  *product to add to the order. The product is added to items list by another
  *function.
  */
  var disableRetailProductOption = function(retail_product_optionlike) {
    var retail_product_option = (
      findRetailProductOption(retail_product_optionlike)
    );
    retail_product_option.attr('disabled', 'disabled');
  };

  /**
  *Disables an option from trial product list when someone selects an upsell
  *product to add to the trial. The product is added to items list by another
  *function.
  */
  var disableTrialProductOption = function(trial_product_optionlike) {
    var trial_product_option = (
      findTrialProductOption(trial_product_optionlike)
    );
    trial_product_option.attr('disabled', 'disabled');
  };
  
  /**
  *Enables an option for selection into retail product list when 
  *someone deletes an item from Retail Items List. 
  *The product is deleted from items list by another function.
  */
  var enableRetailProductOption = function(retail_product_optionlike) {
    var retail_product_option = (
      findRetailProductOption(retail_product_optionlike)
    );
    retail_product_option.removeAttr('disabled');
  };

  /**
  *Enables an option for selection into trial product list when 
  *someone deletes an item from Upsell Items List. 
  *The product is deleted from items list by another function.
  */
  var enableTrialProductOption = function(trial_product_optionlike) {
    var trial_product_option = (
      findTrialProductOption(trial_product_optionlike)
    );
    trial_product_option.removeAttr('disabled');
  };
  
  //Finds an option in Retail Products List given an option's value
  var findRetailProductOption = function(retail_product_optionlike) {
    var type = typeof retail_product_optionlike;
    if (type == 'string') {
      return $ (
        'option[value=' + retail_product_optionlike + ']',
        retail_product_select
      );
    } else if (type == 'number') {
      return $ (
        'option[value=' + retail_product_optionlike + ']',
        retail_product_select
      );
    } else {
      return $(retail_product_optionlike);
    }
  };

  //Finds an option in Trial Products List given an option's value
  var findTrialProductOption = function(trial_product_optionlike) {
    var type = typeof trial_product_optionlike;
    if (type == 'string') {
      return $ (
        'option[value=' + trial_product_optionlike + ']',
        trial_product_select
      );
    } else if (type == 'number') {
      return $ (
        'option[value=' + trial_product_optionlike + ']',
        trial_product_select
      );
    } else {
      return $(trial_product_optionlike);
    }
  };
  
  /**
  *Finds an item from a list of items added to the Retail Items List, given the Product Id.
  *Items are added to the Retail Items List (after being selected from Retail Products List)
  *by another function
  */
  var findLineItem = function(line_itemlike) {
    var type = typeof line_itemlike;
    if (type == 'string') {
      return $('#line-items > li[data-product-id=' + line_itemlike + ']');
    } else if (type == 'number') {
      return $('#line-items > li[data-product-id=' + line_itemlike + ']');
    } else {
      return $(line_itemlike);
    }
  };

  /**
  *Finds an item from a list of upsell items added to the Trial Items List, given the Product Id.
  *Items are added to the Trial Items List (after being selected from Trial Products List)
  *by another function
  */
  var findLineItemTrial = function(line_itemlike) {
    var type = typeof line_itemlike;
    if (type == 'string') {
      return $('#line-items-trial > li[data-product-id=' + line_itemlike + ']');
    } else if (type == 'number') {
      return $('#line-items-trial > li[data-product-id=' + line_itemlike + ']');
    } else {
      return $(line_itemlike);
    }
  };
  
  //Updates the Retail Line Item's Amount as per selected pricing break  and
  //quantity
  var updateLineItemAmount = function(line_itemlike) {
    var line_item = findLineItem(line_itemlike);
    var amount = (
      getLineItemQuantity(line_item) * getLineItemPricingBreak(line_item)
    );
    $('.line-item-amount', line_item).html(amount.toFixed(2));
    return amount;
  };

  //Updates the Trial Line Item's Amount (added Upsell Item's amount) as per
  //selected pricing break and quantity.
  var updateLineItemAmountTrial = function(line_itemlike) {
    var line_item = findLineItemTrial(line_itemlike);
    var amount = (
      getLineItemQuantityTrial(line_item) * getLineItemPricingBreakTrial(line_item)
    );
    $('.line-item-trial-amount', line_item).html(amount.toFixed(2));
    return amount;
  };
  
  //Updates the Sub total section (at the bottom of the items list) equal to
  //the total of all items added to Retail order
  var updateSubtotal = function() {
    console.log(line_items);
    var subtotal = 0;
    line_items.each(function() {
      var line_item = $(this);
      console.log(line_items);
      subtotal += updateLineItemAmount(line_item);
    });
    $('#line-items-subtotal').html(subtotal.toFixed(2));
    return subtotal;
  };

  //Updates the Sub total section (at the bottom of the items list) equal to
  //the total of all upsell items added to Trial order
  var updateSubtotalTrial = function() {
    console.log(line_items_trial);
    var subtotal = 0;
    line_items_trial.each(function() {
      var line_item = $(this);
      console.log(line_item);
      subtotal += updateLineItemAmountTrial(line_item);
    });
    $('#line-items-trial-subtotal').html(subtotal.toFixed(2));
    return subtotal;
  };
  
  //returns the shipping associated to the Retail Order
  var updateShipping = function() {
    if (updateSubtotal()) {
      return 4.99;
    } else {
      return 0;
    }
  };

  //returns the shipping associated to the Trial Order
  var updateShippingTrial = function() {

      return 4.99;

  };
  
  //Updates the total on the Retail Order by adding Retail Products selected
  //and shipping
  var updateTotal = function() {
    var total = (updateSubtotal() + updateShipping());
    $('#line-items-total').html(total.toFixed(2));
    return total;
  };

  //Updates the total on the Trial Order by adding Upsell Products selected
  //and shipping
  var updateTotalTrial = function() {
    var total = (updateSubtotalTrial() + updateShippingTrial());
    $('#line-items-trial-total').html(total.toFixed(2));
    return total;
  };
  
  //Adds an item to the Retail Items List after selection from the Retail Products List.
  //This function also disables the option in Retail Products List.
  var addLineItem = function(line_itemlike) {
    var line_item = findLineItem(line_itemlike);
    disableRetailProductOption(line_item.attr('data-product-id'));
    setLineItemQuantity(line_item, 1);
    line_item.show();
  };

  //Adds an upsell item to the Trial Items List after selection from the Trial Products List.
  //This function also disables the option in Trial Products List.
  var addLineItemTrial = function(line_itemlike) {
    var line_item = findLineItemTrial(line_itemlike);
    disableTrialProductOption(line_item.attr('data-product-id'));
    setLineItemQuantityTrial(line_item, 1);
    line_item.show();
  };
  
  //Removes an item from the Retail Items List after remove-line-item-button is clicked
  //This function also enables the option in Retail Products List.
  var removeLineItem = function(line_itemlike) {
    var line_item = findLineItem(line_itemlike);
    setLineItemQuantity(line_item, 0);
    line_item.hide();
    enableRetailProductOption(line_item.attr('data-product-id'));
  };

  //Removes an item from the Trial Items List after remove-line-item-trial-button is clicked
  //This function also enables the option in Trial Products List.
  var removeLineItemTrial = function(line_itemlike) {
    var line_item = findLineItemTrial(line_itemlike);
    setLineItemQuantityTrial(line_item, 0);
    line_item.hide();
    enableTrialProductOption(line_item.attr('data-product-id'));
  };
  
  //Gets the user selected pricing break value for Retail Item
  var getLineItemPricingBreak = function(line_itemlike) {
    var line_item = findLineItem(line_itemlike);
    return parseFloat($('.line-item-pricing-break-select', line_item).val());
  };

  //Gets the user selected pricing break value for Trial (Upsell) Item
  var getLineItemPricingBreakTrial = function(line_itemlike) {
    var line_item = findLineItemTrial(line_itemlike);
    return parseFloat($('.line-item-trial-pricing-break-select', line_item).val());
  };
  
  //Sets a user selected pricing break value for Retail Item and updates the total
  var setLineItemPricingBreak = function(line_itemlike, new_pricing_break) {
    var line_item = findLineItem(line_itemlike);
    $('.line-item-pricing-break-select', line_item).val(new_pricing_break);
    updateTotal();
  };

  //Sets a user selected pricing break value for Trial (Upsell) Item and updates tht total
  var setLineItemPricingBreakTrial = function(line_itemlike, new_pricing_break) {
    var line_item = findLineItemTrial(line_itemlike);
    $('.line-item-trial-pricing-break-select', line_item).val(new_pricing_break);
    updateTotalTrial();
  };
  
  //Gets the max quantity value for selected retail item
  var getLineItemMaximumQuantity = function(line_itemlike) {
    var line_item = findLineItem(line_itemlike);
    return parseInt(line_item.attr('data-maximum-quantity'));
  };

  //Gets the max quantity value for selected trial (upsell) item
  var getLineItemMaximumQuantityTrial = function(line_itemlike) {
    var line_item = findLineItemTrial(line_itemlike);
    return parseInt(line_item.attr('data-maximum-quantity'));
  };
  
  //Gets the user selected quantity for selected retail item
  var getLineItemQuantity = function(line_itemlike) {
    var line_item = findLineItem(line_itemlike);
    return parseInt($('.line-item-quantity-select', line_item).val());
  };

  //Gets the user selected quantity for selected trial item
  var getLineItemQuantityTrial = function(line_itemlike) {
    var line_item = findLineItemTrial(line_itemlike);
    return parseInt($('.line-item-trial-quantity-select', line_item).val());
  };
  
  //Sets the user selected quantity for selected retail item provided quantity is
  //less than or equal to maximum allowed quantity value. Then update total.
  var setLineItemQuantity = function(line_itemlike, new_quantity) {
    var line_item = findLineItem(line_itemlike);
    if (
      0 <= new_quantity &&
      new_quantity <= getLineItemMaximumQuantity(line_item)
    ) {
      $('.line-item-quantity-select', line_item).val(new_quantity);
    }
    updateTotal();
  };

  //Sets the user selected quantity for selected trial (upsell) item provided quantity is
  //less than or equal to maximum allowed quantity value. Then update total.
  var setLineItemQuantityTrial = function(line_itemlike, new_quantity) {
    var line_item = findLineItemTrial(line_itemlike);
    if (
      0 <= new_quantity &&
      new_quantity <= getLineItemMaximumQuantityTrial(line_item)
    ) {
      $('.line-item-trial-quantity-select', line_item).val(new_quantity);
    }
    updateTotalTrial();
  };
  
  //increments the quantity for selected item from Retail Items list
  var incrementLineItemQuantity = function(line_itemlike) {
    var line_item = findLineItem(line_itemlike);
    setLineItemQuantity(line_item, getLineItemQuantity(line_item) + 1);
  };

  //increments the quantity for selected item from Trial Items list
  var incrementLineItemQuantityTrial = function(line_itemlike) {
    var line_item = findLineItemTrial(line_itemlike);
    setLineItemQuantityTrial(line_item, getLineItemQuantityTrial(line_item) + 1);
  };
  
  //decrements the quantity for selected item from Retail Items list
  var decrementLineItemQuantity = function(line_itemlike) {
    var line_item = findLineItem(line_itemlike);
    quantity = getLineItemQuantity(line_item);
    if (quantity > 1) {
      setLineItemQuantity(line_item, quantity - 1);
    }
  };

  //decrements the quantity for selected item from Trial Items list
  var decrementLineItemQuantityTrial = function(line_itemlike) {
    var line_item = findLineItemTrial(line_itemlike);
    quantity = getLineItemQuantityTrial(line_item);
    if (quantity > 1) {
      setLineItemQuantityTrial(line_item, quantity - 1);
    }
  };
  
  var switchToPayByCheck = function() {
    pay_by_check_checkbox.attr('checked', 'checked');
    credit_card_details.hide();
    credit_card_details.addClass('ignore');
    check_details.removeClass('ignore');
    check_details.show();
  };
  
  var switchToPayByCreditCard = function() {
    pay_by_check_checkbox.removeAttr('checked');
    check_details.hide();
    check_details.addClass('ignore');
    credit_card_details.removeClass('ignore');
    credit_card_details.show();
  };
  
  var initShippingAddressDialog = function() {
    shipping_address.dialog({
      autoOpen: false,
      resizable: false,
      width: '500px',
      title: 'Shipping Address',
      buttons: {
        "Ok": function(e) {
          addShippingAddress();
          shipping_address.dialog('close');
          e.preventDefault();
        }
      }
    });
    shipping_address.dialog('widget').detach();
    shipping_address.dialog('widget').appendTo($('#customer-details'));
  }
  
  var showShippingAddress = function() {
    shipping_address.dialog('open');
  };
  
  var addShippingAddress = function() {
    shipping_address.removeClass('ignore');
    add_shipping_address_button.hide();
    has_shipping_address_checkbox.attr('checked', 'checked');
    edit_shipping_address_button.show();
    remove_shipping_address_button.show();
  };
  
  var removeShippingAddress = function() {
    shipping_address.addClass('ignore');
    edit_shipping_address_button.hide();
    remove_shipping_address_button.hide();
    has_shipping_address_checkbox.removeAttr('checked');
    add_shipping_address_button.show();
  };
  
  /**
  *Binds functions to user actions on Retail Line Items.
  */
  line_items.each(function() {
    var line_item = $(this);
    
    if (getLineItemQuantity(line_item) == 0) {
      removeLineItem(line_item);
    }
    
    //The increment and decrement quantity buttons below are not present anywhere
    //in HTML. Keeping them in the code as they are not affecting anything.
    var increment_quantity_button = $('.increment-quantity-button', line_item);
    var decrement_quantity_button = $('.decrement-quantity-button', line_item);

    //This button is used in the present code. function: deletes the line item
    var remove_line_item_button = $('.remove-line-item-button', line_item);
    
    var line_item_pricing_break_select = (
      $('.line-item-pricing-break-select', line_item)
    );
    
    var line_item_quantity_select = $('.line-item-quantity-select', line_item);
    
    //NOt used
    increment_quantity_button.click(function() {
      incrementLineItemQuantity(line_item);
    });
    
    //Not used
    decrement_quantity_button.click(function() {
      decrementLineItemQuantity(line_item);
    });
    
    remove_line_item_button.click(function() {
      removeLineItem(line_item);
    });
    
    line_item_pricing_break_select.change(function() {
      updateTotal();
    });
    
    line_item_quantity_select.change(function() {
      updateTotal();
    });
  });

  /**
  *Binds functions to user actions on Trial Line Items.
  */
  line_items_trial.each(function() {
    var line_item = $(this);
    
    if (getLineItemQuantityTrial(line_item) == 0) {
      removeLineItemTrial(line_item);
    }
    
    //The increment and decrement quantity buttons below are not present anywhere
    //in HTML. Keeping them in the code as they are not affecting anything.
    var increment_quantity_button = $('.increment-quantity-button', line_item);
    var decrement_quantity_button = $('.decrement-quantity-button', line_item);

    //This button is used in the present code. function: deletes the line item
    var remove_line_item_trial_button = $('.remove-line-item-trial-button', line_item);
    
    var line_item_trial_pricing_break_select = (
      $('.line-item-trial-pricing-break-select', line_item)
    );
    
    var line_item_trial_quantity_select = $('.line-item-trial-quantity-select', line_item);
    
    //Not used
    increment_quantity_button.click(function() {
      incrementLineItemQuantity(line_item);
    });
    
    //Not used
    decrement_quantity_button.click(function() {
      decrementLineItemQuantity(line_item);
    });
    
    remove_line_item_trial_button.click(function() {
      removeLineItemTrial(line_item);
    });
    
    line_item_trial_pricing_break_select.change(function() {
      updateTotalTrial();
    });
    
    line_item_trial_quantity_select.change(function() {
      updateTotalTrial();
    });
  });
  
  //binds function to click event of start new trial button
  start_new_trial_button.click(function() {
    switchToTrialMode();
  });
  
  //binds function to click event of start new retail button
  start_new_retail_button.click(function() {
    switchToRetailMode();
  });
  
  //Binds function to user action of selecting a product from Retail Products List
  retail_product_select.change(function() {
    var value = retail_product_select.val();
    if (value) {
      addLineItem(parseInt(value));
    }
    retail_product_select.val('');
  });

  //Binds function to user action of selecting a product from Trial (upsell) Products List
  trial_product_select.change(function() {
    var value = trial_product_select.val();
    if (value) {
      addLineItemTrial(parseInt(value));
    }
    trial_product_select.val('');
  });
  
  sale_type_select.change(function() {
    if (sale_type_select.val() == 'retail') {
      switchToRetailMode();
    } else {
      switchToOverlayMode();
    }
  });

  pay_by_check_checkbox.change(function() {
    if (pay_by_check_checkbox.attr('checked')) {
      switchToPayByCheck();
    } else {
      switchToPayByCreditCard();
    }
  });
  
  add_shipping_address_button.click(function() {
    showShippingAddress();
  });
  
  remove_shipping_address_button.click(function() {
    removeShippingAddress();
  });
  
  edit_shipping_address_button.click(function() {
    showShippingAddress();
  });
  
  initShippingAddressDialog();
  has_shipping_address_checkbox.hide();
  pay_by_check_checkbox.change();
  
  if (has_shipping_address_checkbox.attr('checked')) {
    addShippingAddress();
  } else {
    removeShippingAddress();
  }
  
  sale_type_select.change();
  
  $('.phoneUS').mask('999-999-9999');
  $('.zipcode').mask('99999');
  
  sale_form.validate({
    ignore: ".ignore, .ignore *",
    groups: {
      cc_date: "sale[credit_card][cc_month] sale[credit_card][cc_year]"
    },
    errorPlacement: function(error, element) {
      if (element.attr("name") == "sale[credit_card][cc_month]") {
        error.insertAfter('[name="sale[credit_card][cc_year]"]')
        return;
      }
      error.insertAfter(element);
    }
  });
  
  var bannedPostalCodes = [
    "V0R 1A0","X0E 0A0","J0M 1V0","P0V 1B0","X0A 0A0","X0C 0E0","P0L 1A0",
    "J0M 1X0","X0C 0A0","X0B 2A0","P0V 1E0","R0B 0A0","P0V 1G0","S0J 0H0",
    "A0K 1N0","P0V 1Z0","R0B 0Z0","V0V 1C0","G0G 2Y0","V0T 1L0","V0P 1M0",
    "X0B 1K0","A0P 1N0","X0B 0E0","R0B 1G0","J0M 1C0","J0M 1P0","J0M 1G0",
    "X0A 0B0","V0P 1J0","J0M 1J0","G0G 1T0","X0E 1R0","R0B 2E0","X0C 0G0",
    "P0V 2A0","R0B 1H0","P0T 1Z0","V0P 1P0","V0V 1H0","X0C 0H0","R0B 0V0",
    "X0A 0V0","X0E 1A0","A0P 1P0","A0P 1J0","P0V 2P0","V0P 1L0","X0E 0Z0",
    "P0V 3B0","J0M 1S0","G0G 2C0","P0V 1V0","A0P 1L0","X0A 0W0","X0A 0X0",
    "R0B 1K0","A0P 1A0","V0P 1S0","R0B 0Z0","R0B 1N0","X0E 0V0","G0G 2R0",
    "P0V 2G0","R0B 1J0","V0T 1P0","R0B 2H0","P0T 2L0","S0J 2R0","Y0B 1N0",
    "V0P 1V0","V0V 1E0","V0N 3H0","V0N 3S0","P0T 3B0","R0B 1C0","V0P 1W0",
    "X0A 0R0","R0B 2C0","R0B 2G0","X0B 1B0","X0E 1N0","J0M 1T0","P0L 2H0",
    "G0G 2W0","P0V 2L0","X0E 1Z0","X0A 0S0","V0J 3N0","P0V 3E0","X0E 1C0",
    "X0E 0K0","X0E 1W0","J0M 1Y0","X0E 1P0","S0J 2W0","X0C 0J0","R0B 1Z0",
    "A0K 5V0","V0J 3B0","S0J 3C0","P0V 2Y0","P0V 2Z0","P0T 3A0","R0B 2B0"
  ];
  
  $.validator.addMethod(
    "canadian-postal-code",
    function(value, element) {
      return (
        this.optional(element) ||
        /^[a-zA-Z][0-9a-zA-Z]{2} [0-9a-zA-Z]{3}?$/.test(value)
      );
    },
    "Enter a Canadian postal code please"
  );
  
  $.validator.addMethod(
    "canadian-postal-code-allowed",
    function(value, element) {
      return (
        this.optional(element) ||
        $.inArray(value.toUpperCase(), bannedPostalCodes) === -1
      );
    },
    "Sorry, we do not currently ship to this postal code"
  );
  
  var countryConventions = {
    US: {
      subdivision: 'State',
      postalCodeName: 'Zip',
      postalCodeMask: '99999',
      validatorRules: []
    },
    CA: {
      subdivision: 'Province',
      postalCodeName: 'Postal Code',
      postalCodeMask: 'a** ***',
      validatorRules: ['canadian-postal-code', 'canadian-postal-code-allowed']
    }
  };
  
  var countries = ['US', 'CA'];
  
  var billingStateOptionElements = {};
  
  $.each(countries, function(i, code) {
    billingStateOptionElements[code] =
      $('option.{0}'.format(code), billing_state_select);
  });
  
  billing_country_select.change(function() {
    var countryCode = $(this).val();
    
    $.each(billingStateOptionElements, function(country, elements) {
      if (country == countryCode) {
        billing_state_select.append(elements)
      } else {
        elements.detach();
      }
    });
    
    var conventions = countryConventions[countryCode];
    
    $('label[for="sale-billing-address-state-select"]')
      .text(conventions.subdivision);
    $('label[for="sale-billing-address-zip-code-textfield"]')
      .text(conventions.postalCodeName);
    $('#sale-billing-address-zip-code-textfield')
      .mask(conventions.postalCodeMask);
    
    $('#sale-billing-address-zip-code-textfield').rules('remove');
    
    $.each(conventions.validatorRules, function(i, rule) {
      $('#sale-billing-address-zip-code-textfield').rules('add', rule);
    });
  });
  
  billing_country_select.change();
  
  var shippingStateOptionElements = {};
  
  $.each(countries, function(i, code) {
    shippingStateOptionElements[code] =
      $('option.{0}'.format(code), shipping_state_select);
  });
  
  shipping_country_select.change(function() {
    var countryCode = $(this).val();
    
    $.each(shippingStateOptionElements, function(country, elements) {
      if (country == countryCode) {
        shipping_state_select.append(elements)
      } else {
        elements.detach();
      }
    });
    
    var conventions = countryConventions[countryCode];
    
    $('label[for="sale-shipping-address-state-select"]')
      .text(conventions.subdivision);
    $('label[for="sale-shipping-address-zip-code-textfield"]')
      .text(conventions.postalCodeName);
    $('#sale-shipping-address-zip-code-textfield')
      .mask(conventions.postalCodeMask);
      
    $('#sale-shipping-address-zip-code-textfield').rules('remove');
    
    $.each(conventions.validatorRules, function(i, rule) {
      $('#sale-shipping-address-zip-code-textfield').rules('add', rule);
    });
  });
  
  shipping_country_select.change();
  
  var retailCountryField = $('#retail-country-select');
  var retailProductField = $('#retail-product-select');
  var retailProductOptionElements = $('option', retailProductField);
  
  //Binds functions to change Retail Product List options based on a 
  //change in the country selection.
  retailCountryField.change(function() {
    var countryCode = $(this).val();
    
    retailProductOptionElements.each(function() {
      if ($(this).hasClass(countryCode)) {
        retailProductField.append(this)
      } else {
        removeLineItem($(this).attr('value'));
        $(this).detach();
      }
    });
  });
  
  retailCountryField.change();

  //Binds functions to change Trial Product List options based on a 
  //change in the country selection.
  var trialCountryField = $('#trial-country-select');
  var trialProductField = $('#trial-product-select');
  var trialProductOptionElements = $('option', trialProductField);

  trialCountryField.change(function() {
    var countryCode = $(this).val();
    
    trialProductOptionElements.each(function() {
      if ($(this).hasClass(countryCode)) {
        trialProductField.append(this)
      } else {
        removeLineItemTrial($(this).attr('value'));
        $(this).detach();
      }
    });
  });
  trialCountryField.change();
});

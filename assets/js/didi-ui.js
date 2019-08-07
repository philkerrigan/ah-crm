if (/^\/staging\//.test(window.location.pathname)) {
  URLROOT = '/staging';
} else if (/^\/new-master\//.test(window.location.pathname)) {
  URLROOT = '/new-master';
} else if (/^\/dev\//.test(window.location.pathname)) {
  URLROOT = '/dev';
} else {
  URLROOT = '';
}

DidiUI = {
  menus: function(context) {
    $('.menu a, .menu input[type=submit], .menu button, .menu input[type=reset]', context).button();
    $('.menu .ui-button', context).removeClass('ui-corner-all');
    $('.vertical.menu >:first-child .ui-button, .vertical.menu >.ui-button:first-child', context)
      .addClass('ui-corner-top');
    
    $('.vertical.menu >:last-child .ui-button, .vertical.menu >.ui-button:last-child', context)
      .addClass('ui-corner-bottom');
    
    $('.horizontal.menu >:first-child .ui-button, .horizontal.menu >.ui-button:first-child', context)
      .addClass('ui-corner-left');
    
    $('.horizontal.menu >:last-child .ui-button, .horizontal.menu >.ui-button:last-child', context)
      .addClass('ui-corner-right');
  },
  
  autofocuses: function(context) {
    $('[autofocus]', context).focus();
  },
  
  datepickers: function(context) {
    $('.datepicker', context).each(function() {
      $(this).datepicker({
        minDate:$(this).data('minDate'),
        maxDate:$(this).data('maxDate')
      });
    });
  },
  
  buttons: function(context) {
    $('.button', context).button();
  },
  
  placeholders: function(context) {
    $('[placeholder]', context).placeholder();
  },
  
  radios: function(context) {
    $('.radios', context).buttonset();
  },
  
  checkboxes: function(context) {
    $('.checkboxes', context).buttonset();
  },
  
  tabs: function (context) {
    $('.tabs', context).tabs();
  },
  
  accordions: function (context) {
    $('.accordion', context).accordion({icons: false});
  },
  
  ajax_forms: function (context) {
    var ajax_forms = $('.didi-ajax-form', context);
    var valid_positions = ['before', 'after', 'append', 'prepend', 'html'];
    
    ajax_forms.submit(function(event) {
      var form = $(this);
      event.preventDefault();
      var url = form.attr('action');
      var method = form.attr('method');
      var target = $(form.attr('data-ajax-target'));
      var position = form.attr('data-ajax-position');
      
      if ($.inArray(position, valid_positions) != -1) {
        $.ajax({
          url: url,
          data: form.serialize(),
          success: function(data) {
            target[position](data);
            DidiUI.init(target);
          }
        });
      }
    });
  },
  
  ajax_links: function (context) {
    var ajax_links = $('.didi-ajax-link', context);
    
    ajax_links.click(function(event) {
      event.preventDefault();
      var url = $(this).attr('href');
      var target = $($(this).attr('data-ajax-target'));
      var position = $(this).attr('data-ajax-position');
      var valid_positions = ['before', 'after', 'append', 'prepend', 'html'];
      
      if ($.inArray(position, valid_positions) != -1) {
        $.ajax({
          url: url,
          success: function(data) {
            target[position](data);
            DidiUI.init(target);
          }
        });
      }
    });
  },
  
  tablesorters: function (context) {
    $('.tablesorter', context).tablesorter();
  },
  
  init: function(context) {
    DidiUI.menus(context);
    DidiUI.radios(context);
    DidiUI.checkboxes(context);
    DidiUI.buttons(context);
    DidiUI.accordions(context);
    DidiUI.tabs(context);
    DidiUI.placeholders(context);
    DidiUI.datepickers(context);
    DidiUI.ajax_links(context);
    DidiUI.ajax_forms(context);
    DidiUI.tablesorters(context);
    DidiUI.autofocuses(context);
  }
}

$(function() {
  DidiUI.init();
  
  $("#ui-datepicker-div")
    .wrap('<div style="position:absolute;top:0px;"></div>');
});

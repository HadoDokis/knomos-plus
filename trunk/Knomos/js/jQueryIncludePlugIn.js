(function($) {
	/*
	 * includeMany 1.2.0
	 * 
	 * Copyright (c) 2009 Arash Karimzadeh (arashkarimzadeh.com) Licensed under
	 * the MIT (MIT-LICENSE.txt)
	 * http://www.opensource.org/licenses/mit-license.php
	 * 
	 * Date: Mar 14 2009
	 */
	$.chainclude = function(urls, finaly) {
		var onload = function(callback, data) {
			if (typeof urls.length != 'undefined') {
				if (urls.length == 0)
					return $.isFunction(finaly) ? finaly(data) : null;
				urls.shift();
				return $.chainclude.load(urls, onload);
			}
			for ( var item in urls) {
				urls[item](data);
				delete urls[item];
				var count = 0;
				for ( var i in urls)
					count++;
				return (count == 0) ? $.isFunction(finaly) ? finaly(data) : null
						: $.chainclude.load(urls, onload);
			}
		}
		$.chainclude.load(urls, onload);
	};
	$.chainclude.load = function(urls, onload) {
		if (typeof urls == 'object' && typeof urls.length == 'undefined')
			for ( var item in urls)
				return $.include.load(item, onload, urls[item].callback);
		urls = $.makeArray(urls);
		$.include.load(urls[0], onload, null);
	};
	$.include = function(urls, finaly) {
		var luid = $.include.luid++;
		var onload = function(callback, data) {
			if ($.isFunction(callback))
				callback(data);
			if (--$.include.counter[luid] == 0 && $.isFunction(finaly))
				finaly();
		}
		if (typeof urls == 'object' && typeof urls.length == 'undefined') {
			$.include.counter[luid] = 0;
			for ( var item in urls)
				$.include.counter[luid]++;
			return $.each(urls, function(url, callback) {
				$.include.load(url, onload, callback);
			});
		}
		urls = $.makeArray(urls);
		$.include.counter[luid] = urls.length;
		$.each(urls, function() {
			$.include.load(this, onload, null);
		});
	}
	$.extend($.include, {
		luid : 0,
		counter : [],
		load : function(url, onload, callback) {
			if ($.include.exist(url))
				return onload(callback);
			if (/.css$/.test(url))
				$.include.loadCSS(url, onload, callback);
			else if (/.js$/.test(url))
				$.include.loadJS(url, onload, callback);
			else
				$.get(url, function(data) {
					onload(callback, data)
				});
		},
		loadCSS : function(url, onload, callback) {
			var css = document.createElement('link');
			css.setAttribute('type', 'text/css');
			css.setAttribute('rel', 'stylesheet');
			css.setAttribute('href', url);
			$('head').get(0).appendChild(css);
			$.browser.msie ? $.include.IEonload(css, onload, callback)
					: onload(callback);// other browsers do not support it
		},
		loadJS : function(url, onload, callback) {
			var js = document.createElement('script');
			js.setAttribute('type', 'text/javascript');
			js.setAttribute('src', url);
			$.browser.msie ? $.include.IEonload(js, onload, callback)
					: js.onload = function() {
						onload(callback)
					};
			$('head').get(0).appendChild(js);
		},
		IEonload : function(elm, onload, callback) {
			elm.onreadystatechange = function() {
				if (this.readyState == 'loaded' || this.readyState == 'complete')
					onload(callback);
			}
		},
		exist : function(url) {
			var fresh = false;
			$('head script').each(function() {
				if (/.css$/.test(url) && this.href == url)
					return fresh = true;
				else if (/.js$/.test(url) && this.src == url)
					return fresh = true;
			});
			return fresh;
		}
	});
	//
})(jQuery);

(function( $, undefined ) {
	$.widget("ui.combobox", {
		_create : function() {
			var tblMain = $("<table>")
			tblMain.attr('cellspacing', '0');
			var tr = $('<tr>').appendTo(tblMain);
			var td1 = $('<td>').appendTo(tr);
			td1.css('padding', '0');
			td1.css('margin', '0');
			var td2 = $('<td>').appendTo(tr);
			td2.css('padding', '0');
			td2.css('margin', '0');
			var self = this;
			this.element.before(tblMain);
			tblMain.show();
			var select = this.element.hide();
			select.appendTo(td1);
			var selected = select.children(":selected");
			var value = selected.val() ? selected.text() : "";

			var input = $("<input>").insertAfter(select).val(value)
					.autocomplete(
							{
								delay : 0,
								minLength : 0,
								source : function(request, response) {
									var matcher = new RegExp($.ui.autocomplete
											.escapeRegex(request.term), "i");
									response(select.children("option")
											.map(
													function() {
														var text = $(this).text();
														if (this.value
																&& (!request.term || matcher.test(text)))
															return {
																label : text.replace(new RegExp(
																		"(?![^&;]+;)(?!<[^<>]*)("
																				+ $.ui.autocomplete
																						.escapeRegex(request.term)
																				+ ")(?![^<>]*>)(?![^&;]+;)", "gi"),
																		"<strong>$1</strong>"),
																value : text,
																option : this
															};
													}));
								},
								select : function(event, ui) {
									ui.item.option.selected = true;
									self._trigger("selected", event, {
										item : ui.item.option
									});
								},
								change : function(event, ui) {
									if (!ui.item) {
										var matcher = new RegExp("^"
												+ $.ui.autocomplete.escapeRegex($(this).val()) + "$",
												"i"), valid = false;
										select.children("option").each(function() {
											if (this.value.match(matcher)) {
												this.selected = valid = true;
												return false;
											}
										});
										if (!valid) {
											// remove invalid
											// value, as it
											// didn't match
											// anything
											$(this).val("");
											select.val("");
											return false;
										}
									}
								}
							}).addClass("ui-widget ui-widget-content ui-corner-left").css(
							'border-right', 'none');

			input.data("autocomplete")._renderItem = function(ul, item) {
				return $("<li></li>").data("item.autocomplete", item).append(
						"<a>" + item.label + "</a>").appendTo(ul);
			};

			var btn = $("<button>&nbsp;</button>").attr("tabIndex", -1).attr("title",
					"Show All Items").click(function() {
				return false;
			}).appendTo(td2).button({
				icons : {
					primary : "ui-icon-triangle-1-s"
				},
				text : false
			}).removeClass("ui-corner-all")
					.addClass("ui-corner-right ui-button-icon").height("1.65em");
			
			btn.click(
							function() {
								// close if already visible
								if (input.autocomplete("widget").is(":visible")) {
									input.autocomplete("close");
									return;
								}

								// pass empty string as value to
								// search for, displaying all
								// results
								input.autocomplete("search", "");
								input.focus();
							});
		}
	});
}(jQuery));

function toggleDP(dpName) {
	var dp = $(dpName).datepicker('widget');
	if (dp.children().length == 0 || !dp.is(':visible')) {
		$(dpName).datepicker('show');
	} else {
		$(dpName).datepicker('hide');
	}
};

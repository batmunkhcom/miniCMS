(function($) {
  "use strict";

$( document ).ready( function () { 
  
// Show Menu Smooth
$('.dropdown').hover(function() {
   $(this).find('.dropdown-menu').first().stop(true, true).fadeIn(200)
}, function() {
  $(this).find('.dropdown-menu').first().stop(true, true).fadeOut(200)
});

$('.topheadrow .dropdown ul li').click(function() {
  $(this).parent().prev('a').html($(this).text());
 $(".dropdown ul").hide();
});



//sidebar accordion
$('.page-sidebar .collapse').on('shown.bs.collapse', function(){
$(this).parent().find(".fa-plus").removeClass("fa-plus").addClass("fa-minus");
$(this).parent().find(".panel-heading").removeClass("closed").addClass("opened");
}).on('hidden.bs.collapse', function(){
$(this).parent().find(".fa-minus").removeClass("fa-minus").addClass("fa-plus");
$(this).parent().find(".panel-heading").removeClass("opened").addClass("closed");
});

$('[data-toggle="tooltip"]').tooltip({'placement': 'top'});

//star rating

$('.rating').focus();
 var a = 0;
 var b = 1;
$('.rating').bind('focus change', function(event) {
 changed = event.target.id;
 var value   = 2123;
 var valueL  = value.length;
 var rgroup = $(this).find("input:last").attr('name');

 value = value.substring(a,b);     
//alert(rgroup +" : "+ value+" : "+a+" : "+b+" : "+valueL);
$('input:radio[name='+rgroup+']')[value].checked = true;
 if (b < valueL){b = b+1; a = a+1} else {b = 1; a = 0}

       });
	   
	   
//quantity script

$(".qtyplus").click(function(){     
     $(this).parent().parent().find(":text[name='p_quantity']").val( Number($(this).parent().parent().find(":text[name='p_quantity']").val()) + 1 );
    });

$(".qtyminus").click(function(){
     if($(this).parent().parent().find(":text[name='p_quantity']").val()>1)
      $(this).parent().parent().find(":text[name='p_quantity']").val( Number($(this).parent().parent().find(":text[name='p_quantity']").val()) - 1 );

    });            
  }); 
})(jQuery);




// Ion.RangeSlider
// version 1.8.2 Build: 149
// © 2013 Denis Ineshin | IonDen.com
//
// Project page:    http://ionden.com/a/plugins/ion.rangeSlider/
// GitHub page:     https://github.com/IonDen/ion.rangeSlider
//
// Released under MIT licence:
// http://ionden.com/a/plugins/licence-en.html
// =====================================================================================================================

(function ($, document, window, navigator) {
    "use strict";

    var pluginCount = 0;
    var isOldie = (function () {
        var n = navigator.userAgent,
            r = /msie\s\d+/i,
            v;
        if (n.search(r) > 0) {
            v = r.exec(n).toString();
            v = v.split(" ")[1];
            if (v < 9) {
                return true;
            }
        }
        return false;
    }());
    var isTouch = (function () {
        try {
            document.createEvent("TouchEvent");
            return true;
        } catch (e) {
            return false;
        }
    }());

    var methods = {
        init: function (options) {

            // irs = ion range slider css prefix
            var baseHTML =
                '<span class="irs">' +
                '<span class="irs-line"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span>' +
                '<span class="irs-min">0</span><span class="irs-max">1</span>' +
                '<span class="irs-from">0</span><span class="irs-to">0</span><span class="irs-single">0</span>' +
                '</span>' +
                '<span class="irs-grid"></span>';

            var singleHTML =
                '<span class="irs-slider single"></span>';

            var doubleHTML =
                '<span class="irs-diapason"></span>' +
                '<span class="irs-slider from"></span>' +
                '<span class="irs-slider to"></span>';



            return this.each(function () {
                var settings = $.extend({
                    min: 10,
                    max: 100,
                    from: null,
                    to: null,
                    type: "single",
                    step: 1,
                    prefix: "",
                    postfix: "",
                    hasGrid: false,
                    hideMinMax: false,
                    hideFromTo: false,
                    prettify: false,
                    onChange: null,
                    onLoad: null,
                    onFinish: null
                }, options);



                var slider = $(this),
                    self = this;

                if (slider.data("isActive")) {
                    return;
                }
                slider.data("isActive", true);

                pluginCount += 1;
                this.pluginCount = pluginCount;



                // check default values
                if (slider.prop("value")) {
                    settings.min = parseInt(slider.prop("value").split(";")[0], 10);
                    settings.max = parseInt(slider.prop("value").split(";")[1], 10);
                }
                if (typeof settings.from !== "number") {
                    settings.from = settings.min;
                }
                if (typeof settings.to !== "number") {
                    settings.to = settings.max;
                }


                // extend from data-*
                if (typeof slider.data("from") === "number") {
                    settings.from = parseFloat(slider.data("from"));
                }
                if (typeof slider.data("to") === "number") {
                    settings.to = parseFloat(slider.data("to"));
                }
                if (slider.data("step")) {
                    settings.step = parseFloat(slider.data("step"));
                }
                if (slider.data("type")) {
                    settings.type = slider.data("type");
                }
                if (slider.data("prefix")) {
                    settings.prefix = slider.data("prefix");
                }
                if (slider.data("postfix")) {
                    settings.postfix = slider.data("postfix");
                }
                if (slider.data("hasgrid")) {
                    settings.hasGrid = slider.data("hasgrid");
                }
                if (slider.data("hideminmax")) {
                    settings.hideMinMax = slider.data("hideminmax");
                }
                if (slider.data("hidefromto")) {
                    settings.hideFromTo = slider.data("hidefromto");
                }
                if (slider.data("prettify")) {
                    settings.prettify = slider.data("prettify");
                }


                // fix diapason
                if (settings.from < settings.min) {
                    settings.from = settings.min;
                }
                if (settings.to > settings.max) {
                    settings.to = settings.max;
                }
                if (settings.type === "double") {
                    if (settings.from > settings.to) {
                        settings.from = settings.to;
                    }
                    if (settings.to < settings.from) {
                        settings.to = settings.from;
                    }
                }


                var prettify = function (num) {
                    var n = num.toString();
                    if (settings.prettify) {
                        n = n.replace(/(\d{1,3}(?=(?:\d\d\d)+(?!\d)))/g, "$1 ");
                    }
                    return n;
                };


                var containerHTML = '<span class="irs" id="irs-' + this.pluginCount + '"></span>';
                slider[0].style.display = "none";
                slider.before(containerHTML);

                var $container = $("#irs-" + this.pluginCount),
                    $body = $(document.body),
                    $window = $(window),
                    $rangeSlider,
                    $fieldMin,
                    $fieldMax,
                    $fieldFrom,
                    $fieldTo,
                    $fieldSingle,
                    $singleSlider,
                    $fromSlider,
                    $toSlider,
                    $activeSlider,
                    $diapason,
                    $grid;

                var allowDrag = false,
                    sliderIsActive = false,
                    firstStart = true,
                    numbers = {};

                var mouseX = 0,
                    fieldMinWidth = 0,
                    fieldMaxWidth = 0,
                    normalWidth = 0,
                    fullWidth = 0,
                    sliderWidth = 0,
                    width = 0,
                    left = 0,
                    right = 0,
                    minusX = 0,
                    stepFloat = 0;


                if (parseInt(settings.step, 10) !== parseFloat(settings.step)) {
                    stepFloat = settings.step.toString().split(".")[1];
                    stepFloat = Math.pow(10, stepFloat.length);
                }



                // public methods
                this.updateData = function (options) {
                    firstStart = true;
                    settings = $.extend(settings, options);
                    removeHTML();
                };
                this.removeSlider = function () {
                    $container.find("*").off();
                    $window.off("mouseup.irs" + self.pluginCount);
                    $body.off("mouseup.irs" + self.pluginCount);
                    $body.off("mousemove.irs" + self.pluginCount);
                    $container.html("").remove();
                    slider.data("isActive", false);
                    slider.show();
                };





                // private methods
                var removeHTML = function () {
                    $container.find("*").off();
                    $window.off("mouseup.irs" + self.pluginCount);
                    $body.off("mouseup.irs" + self.pluginCount);
                    $body.off("mousemove.irs" + self.pluginCount);
                    $container.html("");

                    placeHTML();
                };
                var placeHTML = function () {
                    $container.html(baseHTML);
                    $rangeSlider = $container.find(".irs");

                    $fieldMin = $rangeSlider.find(".irs-min");
                    $fieldMax = $rangeSlider.find(".irs-max");
                    $fieldFrom = $rangeSlider.find(".irs-from");
                    $fieldTo = $rangeSlider.find(".irs-to");
                    $fieldSingle = $rangeSlider.find(".irs-single");
                    $grid = $container.find(".irs-grid");

                    if (settings.hideMinMax) {
                        $fieldMin[0].style.display = "none";
                        $fieldMax[0].style.display = "none";

                        fieldMinWidth = 0;
                        fieldMaxWidth = 0;
                    }
                    if (settings.hideFromTo) {
                        $fieldFrom[0].style.display = "none";
                        $fieldTo[0].style.display = "none";
                        $fieldSingle[0].style.display = "none";
                    }
                    if (!settings.hideMinMax) {
                        $fieldMin.html(settings.prefix + prettify(settings.min) + settings.postfix);
                        $fieldMax.html(settings.prefix + prettify(settings.max) + settings.postfix);

                        fieldMinWidth = $fieldMin.outerWidth();
                        fieldMaxWidth = $fieldMax.outerWidth();
                    }

                    if (settings.type === "single") {
                        $rangeSlider.append(singleHTML);

                        $singleSlider = $rangeSlider.find(".single");

                        $singleSlider.on("mousedown", function (e) {
                            e.preventDefault();
                            e.stopPropagation();

                            calcDimensions(e, $(this), null);

                            allowDrag = true;
                            sliderIsActive = true;

                            if (isOldie) {
                                $("*").prop("unselectable", true);
                            }
                        });
                        if (isTouch) {
                            $singleSlider.on("touchstart", function (e) {
                                e.preventDefault();
                                e.stopPropagation();

                                calcDimensions(e.originalEvent.touches[0], $(this), null);

                                allowDrag = true;
                                sliderIsActive = true;
                            });
                        }

                    } else if (settings.type === "double") {
                        $rangeSlider.append(doubleHTML);

                        $fromSlider = $rangeSlider.find(".from");
                        $toSlider = $rangeSlider.find(".to");
                        $diapason = $rangeSlider.find(".irs-diapason");

                        setDiapason();

                        $fromSlider.on("mousedown", function (e) {
                            e.preventDefault();
                            e.stopPropagation();

                            $(this).addClass("last");
                            $toSlider.removeClass("last");
                            calcDimensions(e, $(this), "from");
                            allowDrag = true;
                            sliderIsActive = true;

                            if (isOldie) {
                                $("*").prop("unselectable", true);
                            }
                        });
                        $toSlider.on("mousedown", function (e) {
                            e.preventDefault();
                            e.stopPropagation();

                            $(this).addClass("last");
                            $fromSlider.removeClass("last");
                            calcDimensions(e, $(this), "to");
                            allowDrag = true;
                            sliderIsActive = true;

                            if (isOldie) {
                                $("*").prop("unselectable", true);
                            }
                        });

                        if (isTouch) {
                            $fromSlider.on("touchstart", function (e) {
                                e.preventDefault();
                                e.stopPropagation();

                                $(this).addClass("last");
                                $toSlider.removeClass("last");
                                calcDimensions(e.originalEvent.touches[0], $(this), "from");
                                allowDrag = true;
                                sliderIsActive = true;
                            });
                            $toSlider.on("touchstart", function (e) {
                                e.preventDefault();
                                e.stopPropagation();

                                $(this).addClass("last");
                                $fromSlider.removeClass("last");
                                calcDimensions(e.originalEvent.touches[0], $(this), "to");
                                allowDrag = true;
                                sliderIsActive = true;
                            });
                        }

                        if (settings.to === settings.max) {
                            $fromSlider.addClass("last");
                        }
                    }

                    var mouseup = function () {
                        if (allowDrag) {
                            sliderIsActive = false;
                            allowDrag = false;
                            $activeSlider.removeAttr("id");
                            $activeSlider = null;
                            if (settings.type === "double") {
                                setDiapason();
                            }
                            getNumbers();

                            if (isOldie) {
                                $("*").prop("unselectable", false);
                            }
                        }
                    };
                    $body.on("mouseup.irs" + self.pluginCount, function () {
                        mouseup();
                    });
                    $window.on("mouseup.irs" + self.pluginCount, function () {
                        mouseup();
                    });


                    $body.on("mousemove.irs" + self.pluginCount, function (e) {
                        if (allowDrag) {
                            mouseX = e.pageX;
                            dragSlider();
                        }
                    });

                    if (isTouch) {
                        $window.on("touchend", function () {
                            if (allowDrag) {
                                sliderIsActive = false;
                                allowDrag = false;
                                $activeSlider.removeAttr("id");
                                $activeSlider = null;
                                if (settings.type === "double") {
                                    setDiapason();
                                }
                                getNumbers();
                            }
                        });
                        $window.on("touchmove", function (e) {
                            if (allowDrag) {
                                mouseX = e.originalEvent.touches[0].pageX;
                                dragSlider();
                            }
                        });
                    }

                    getSize();
                    setNumbers();
                    if (settings.hasGrid) {
                        setGrid();
                    }
                };

                var getSize = function () {
                    normalWidth = $rangeSlider.width();
                    if ($singleSlider) {
                        sliderWidth = $singleSlider.width();
                    } else {
                        sliderWidth = $fromSlider.width();
                    }
                    fullWidth = normalWidth - sliderWidth;
                };

                var calcDimensions = function (e, currentSlider, whichSlider) {
                    getSize();

                    firstStart = false;
                    $activeSlider = currentSlider;
                    $activeSlider.attr("id", "irs-active-slider");

                    var _x1 = $activeSlider.offset().left,
                        _x2 = e.pageX - _x1;
                    minusX = _x1 + _x2 - $activeSlider.position().left;

                    if (settings.type === "single") {

                        width = $rangeSlider.width() - sliderWidth;

                    } else if (settings.type === "double") {

                        if (whichSlider === "from") {
                            left = 0;
                            right = parseInt($toSlider.css("left"), 10);
                        } else {
                            left = parseInt($fromSlider.css("left"), 10);
                            right = $rangeSlider.width() - sliderWidth;
                        }

                    }
                };

                var setDiapason = function () {
                    var _w = $fromSlider.width(),
                        _x = $.data($fromSlider[0], "x") || parseInt($fromSlider[0].style.left, 10) || $fromSlider.position().left,
                        _width = $.data($toSlider[0], "x") || parseInt($toSlider[0].style.left, 10) || $toSlider.position().left,
                        x = _x + (_w),
                        w = _width - _x;
                    $diapason[0].style.left = x + "px";
                    $diapason[0].style.width = w + "px";
                };

                var dragSlider = function () {
                    var x_pure = mouseX - minusX,
                        x;

                    if (settings.type === "single") {

                        if (x_pure < 0) {
                            x_pure = 0;
                        }
                        if (x_pure > width) {
                            x_pure = width;
                        }

                    } else if (settings.type === "double") {

                        if (x_pure < left) {
                            x_pure = left;
                        }
                        if (x_pure > right) {
                            x_pure = right;
                        }
                        setDiapason();

                    }

                    $.data($activeSlider[0], "x", x_pure);
                    getNumbers();

                    x = Math.round(x_pure);
                    $activeSlider[0].style.left = x + "px";
                };

                var getNumbers = function () {
                    var nums = {
                        fromNumber: 0,
                        toNumber: 0,
                        fromPers: 0,
                        toPers: 0,
                        fromX: 0,
                        toX: 0
                    };
                    var diapason = settings.max - settings.min, _from, _to;

                    if (settings.type === "single") {

                        nums.fromX = $.data($singleSlider[0], "x") || parseInt($singleSlider[0].style.left, 10) || $singleSlider.position().left;
                        nums.fromPers = nums.fromX / fullWidth * 100;
                        _from = (diapason / 100 * nums.fromPers) + parseInt(settings.min, 10);
                        nums.fromNumber = Math.round(_from / settings.step) * settings.step;

                        if (stepFloat) {
                            nums.fromNumber = parseInt(nums.fromNumber * stepFloat, 10) / stepFloat;
                        }

                    } else if (settings.type === "double") {

                        nums.fromX = $.data($fromSlider[0], "x") || parseInt($fromSlider[0].style.left, 10) || $fromSlider.position().left;
                        nums.fromPers = nums.fromX / fullWidth * 100;
                        _from = (diapason / 100 * nums.fromPers) + parseInt(settings.min, 10);
                        nums.fromNumber = Math.round(_from / settings.step) * settings.step;

                        nums.toX = $.data($toSlider[0], "x") || parseInt($toSlider[0].style.left, 10) || $toSlider.position().left;
                        nums.toPers = nums.toX / fullWidth * 100;
                        _to = (diapason / 100 * nums.toPers) + parseInt(settings.min, 10);
                        nums.toNumber = Math.round(_to / settings.step) * settings.step;

                        if (stepFloat) {
                            nums.fromNumber = parseInt(nums.fromNumber * stepFloat, 10) / stepFloat;
                            nums.toNumber = parseInt(nums.toNumber * stepFloat, 10) / stepFloat;
                        }

                    }

                    numbers = nums;
                    setFields();
                };

                var setNumbers = function () {
                    var nums = {
                        fromNumber: settings.from,
                        toNumber: settings.to,
                        fromPers: 0,
                        toPers: 0,
                        fromX: 0,
                        fromX_pure: 0,
                        toX: 0,
                        toX_pure: 0
                    };
                    var diapason = settings.max - settings.min;

                    if (settings.type === "single") {

                        nums.fromPers = (nums.fromNumber - settings.min) / diapason * 100;
                        nums.fromX_pure = fullWidth / 100 * nums.fromPers;
                        nums.fromX = Math.round(nums.fromX_pure);
                        $singleSlider[0].style.left = nums.fromX + "px";
                        $.data($singleSlider[0], "x", nums.fromX_pure);

                    } else if (settings.type === "double") {

                        nums.fromPers = (nums.fromNumber - settings.min) / diapason * 100;
                        nums.fromX_pure = fullWidth / 100 * nums.fromPers;
                        nums.fromX = Math.round(nums.fromX_pure);
                        $fromSlider[0].style.left = nums.fromX + "px";
                        $.data($fromSlider[0], "x", nums.fromX_pure);

                        nums.toPers = (nums.toNumber - settings.min) / diapason * 100;
                        nums.toX_pure = fullWidth / 100 * nums.toPers;
                        nums.toX = Math.round(nums.toX_pure);
                        $toSlider[0].style.left = nums.toX + "px";
                        $.data($toSlider[0], "x", nums.toX_pure);

                        setDiapason();

                    }

                    numbers = nums;
                    setFields();
                };

                var setFields = function () {
                    var _from, _fromW, _fromX,
                        _to, _toW, _toX,
                        _single, _singleW, _singleX,
                        _slW = (sliderWidth / 2);

                    if (settings.type === "single") {

                        if (!settings.hideText) {
                            $fieldFrom[0].style.display = "none";
                            $fieldTo[0].style.display = "none";

                            _single = settings.prefix +
                                prettify(numbers.fromNumber) +
                                settings.postfix;
                            $fieldSingle.html(_single);

                            _singleW = $fieldSingle.outerWidth();
                            _singleX = numbers.fromX - (_singleW / 2) + _slW;
                            if (_singleX < 0) {
                                _singleX = 0;
                            }
                            if (_singleX > normalWidth - _singleW) {
                                _singleX = normalWidth - _singleW;
                            }
                            $fieldSingle[0].style.left = _singleX + "px";

                            if (!settings.hideMinMax && !settings.hideFromTo) {
                                if (_singleX < fieldMinWidth) {
                                    $fieldMin[0].style.display = "none";
                                } else {
                                    $fieldMin[0].style.display = "block";
                                }

                                if (_singleX + _singleW > normalWidth - fieldMaxWidth) {
                                    $fieldMax[0].style.display = "none";
                                } else {
                                    $fieldMax[0].style.display = "block";
                                }
                            }
                        }

                        slider.attr("value", parseInt(numbers.fromNumber, 10));

                    } else if (settings.type === "double") {

                        if (!settings.hideText) {
                            _from = settings.prefix +
                                prettify(numbers.fromNumber) +
                                settings.postfix;
                            _to = settings.prefix +
                                prettify(numbers.toNumber) +
                                settings.postfix;

                            if (numbers.fromNumber !== numbers.toNumber) {
                                _single = settings.prefix +
                                    prettify(numbers.fromNumber) +
                                    " — " + settings.prefix +
                                    prettify(numbers.toNumber) +
                                    settings.postfix;
                            } else {
                                _single = settings.prefix +
                                    prettify(numbers.fromNumber) +
                                    settings.postfix;
                            }

                            $fieldFrom.html(_from);
                            $fieldTo.html(_to);
                            $fieldSingle.html(_single);

                            _fromW = $fieldFrom.outerWidth();
                            _fromX = numbers.fromX - (_fromW / 3) + _slW;
                            if (_fromX < 0) {
                                _fromX = 0;
                            }
                            if (_fromX > normalWidth - _fromW) {
                                _fromX = normalWidth - _fromW;
                            }
                            $fieldFrom[0].style.left = _fromX + "px";

                            _toW = $fieldTo.outerWidth();
                            _toX = numbers.toX - (_toW / 3) + _slW;
                            if (_toX < 0) {
                                _toX = 0;
                            }
                            if (_toX > normalWidth - _toW) {
                                _toX = normalWidth - _toW;
                            }
                            $fieldTo[0].style.left = _toX + "px";

                            _singleW = $fieldSingle.outerWidth();
                            _singleX = numbers.fromX + ((numbers.toX - numbers.fromX) / 2) - (_singleW / 2) + _slW;
                            if (_singleX < 0) {
                                _singleX = 0;
                            }
                            if (_singleX > normalWidth - _singleW) {
                                _singleX = normalWidth - _singleW;
                            }
                            $fieldSingle[0].style.left = _singleX + "px";

                            if (_fromX + _fromW < _toX) {
                                $fieldSingle[0].style.display = "none";
                                $fieldFrom[0].style.display = "block";
                                $fieldTo[0].style.display = "block";
                            } else {
                                $fieldSingle[0].style.display = "block";
                                $fieldFrom[0].style.display = "none";
                                $fieldTo[0].style.display = "none";
                            }

                            if (!settings.hideMinMax && !settings.hideFromTo) {
                                if (_singleX < fieldMinWidth || _fromX < fieldMinWidth) {
                                    $fieldMin[0].style.display = "none";
                                } else {
                                    $fieldMin[0].style.display = "block";
                                }

                                if (_singleX + _singleW > normalWidth - fieldMaxWidth || _toX + _toW > normalWidth - fieldMaxWidth) {
                                    $fieldMax[0].style.display = "none";
                                } else {
                                    $fieldMax[0].style.display = "block";
                                }
                            }
                        }

                        slider.attr("value", parseInt(numbers.fromNumber, 10) + ";" + parseInt(numbers.toNumber, 10));

                    }

                    // trigger onChange function
                    if (typeof settings.onChange === "function") {
                        settings.onChange.call(this, numbers);
                    }

                    // trigger onFinish function
                    if (typeof settings.onFinish === "function" && !sliderIsActive && !firstStart) {
                        settings.onFinish.call(this, numbers);
                    }

                    // trigger onLoad function
                    if (typeof settings.onLoad === "function" && !sliderIsActive && firstStart) {
                        settings.onLoad.call(this, numbers);
                    }
                };

                var setGrid = function () {
                    $container.addClass("irs-with-grid");

                    var i,
                        text = '',
                        step = 0,
                        tStep = 0,
                        gridHTML = '',
                        smNum = 20,
                        bigNum = 4;

                    for (i = 0; i <= smNum; i += 1) {
                        step = Math.floor(normalWidth / smNum * i);

                        if (step >= normalWidth) {
                            step = normalWidth - 1;
                        }
                        gridHTML += '<span class="irs-grid-pol small" style="left: ' + step + 'px;"></span>';
                    }
                    for (i = 0; i <= bigNum; i += 1) {
                        step = Math.floor(normalWidth / bigNum * i);

                        if (step >= normalWidth) {
                            step = normalWidth - 1;
                        }
                        gridHTML += '<span class="irs-grid-pol" style="left: ' + step + 'px;"></span>';

                        if (stepFloat) {
                            text = (settings.min + ((settings.max - settings.min) / bigNum * i));
                            text = (text / settings.step) * settings.step;
                            text = parseInt(text * stepFloat, 10) / stepFloat;
                        } else {
                            text = Math.round(settings.min + ((settings.max - settings.min) / bigNum * i));
                            text = Math.round(text / settings.step) * settings.step;
                            text = prettify(text);
                        }

                        if (i === 0) {
                            tStep = step;
                            gridHTML += '<span class="irs-grid-text" style="left: ' + tStep + 'px; text-align: left;">' + text + '</span>';
                        } else if (i === bigNum) {
                            tStep = step - 100;
                            gridHTML += '<span class="irs-grid-text" style="left: ' + tStep + 'px; text-align: right;">' + text + '</span>';
                        } else {
                            tStep = step - 50;
                            gridHTML += '<span class="irs-grid-text" style="left: ' + tStep + 'px;">' + text + '</span>';
                        }
                    }

                    $grid.html(gridHTML);
                };

                placeHTML();
            });
        },
        update: function (options) {
            return this.each(function () {
                this.updateData(options);
            });
        },
        remove: function () {
            return this.each(function () {
                this.removeSlider();
            });
        }
    };

    $.fn.ionRangeSlider = function (method) {
        if (methods[method]) {
            return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
        } else if (typeof method === 'object' || !method) {
            return methods.init.apply(this, arguments);
        } else {
            $.error('Method ' + method + ' does not exist for jQuery.ionRangeSlider');
        }
    };

}(jQuery, document, window, navigator));





/**
* jQuery Form Validator
* ------------------------------------------
* Created by Victor Jonsson <http://www.victorjonsson.se>
*
* @website http://formvalidator.net/
* @license Dual licensed under the MIT or GPL Version 2 licenses
* @version 2.1.27
*/
(function($){"use strict";$.fn.validateOnBlur=function(language,settings){var blurValidationCallback=function(){$(this).validateInputOnBlur(language,settings)};this.find("input[data-validation], textarea[data-validation]").unbind("blur",blurValidationCallback).bind("blur",blurValidationCallback);return this};$.fn.showHelpOnFocus=function(attrName){if(!attrName){attrName="data-validation-help"}this.find(".has-help-txt").valAttr("has-keyup-event",false).valAttr("backend-valid",false).valAttr("backend-invalid",false).unbind("focus").unbind("blur").removeClass("has-help-txt");this.find("textarea,input").each(function(){var $element=$(this),className="jquery_form_help_"+$element.attr("name"),help=$element.attr(attrName);if(help){$element.addClass("has-help-txt").focus(function(){var $help=$element.parent().find("."+className);if($help.length==0){$help=$("<span />").addClass(className).addClass("help-block").text(help).hide();$element.after($help)}$help.fadeIn()}).blur(function(){$(this).parent().find("."+className).fadeOut("slow")})}});return this};$.fn.validateInputOnBlur=function(language,config,attachKeyupEvent,eventContext){if(attachKeyupEvent===undefined)attachKeyupEvent=true;if(!eventContext)eventContext="blur";language=$.extend($.formUtils.LANG,language||{});config=$.extend($.formUtils.defaultConfig(),config||{});config.errorMessagePosition="element";var $element=this,elementErrMsgObj=document.getElementById($element.attr("name")+"_err_msg"),$form=$element.closest("form"),validationRule=$element.attr(config.validationRuleAttribute);$element.removeClass(config.errorElementClass).css("border-color","").parent().find("."+config.errorMessageClass).remove();$form.find(".has-error").removeClass("has-error");$element.removeClass("valid").parent().removeClass("has-success");if(elementErrMsgObj!=null){elementErrMsgObj.innerHTML=""}var validation=$.formUtils.validateInput($element,language,config,$form,eventContext);if(validation===true){$element.addClass("valid").parent().addClass("has-success")}else if(validation===null){$element.removeClass("valid").parent().removeClass("has-error").removeClass("has-success")}else{$element.addClass(config.errorElementClass).removeClass("valid").parent().addClass("has-error").removeClass("has-success");if(elementErrMsgObj!=null){elementErrMsgObj.innerHTML=validation}else{var $parent=$element.parent();$parent.append('<span class="'+config.errorMessageClass+' help-block">'+validation+"</span>");$parent.addClass("has-error")}if(config.borderColorOnError!==""){$element.css("border-color",config.borderColorOnError)}if(attachKeyupEvent){$element.bind("keyup",function(){$(this).validateInputOnBlur(language,config,false,"keyup")})}}return this};$.fn.valAttr=function(name,val){if(val===undefined){return this.attr("data-validation-"+name)}else if(val===false||val===null){return this.removeAttr("data-validation-"+name)}else{if(name.length>0)name="-"+name;return this.attr("data-validation"+name,val)}};$.fn.validateForm=function(language,config){language=$.extend($.formUtils.LANG,language||{});config=$.extend($.formUtils.defaultConfig(),config||{});$.formUtils.isValidatingEntireForm=true;$.formUtils.haltValidation=false;var addErrorMessage=function(mess,$element){if(mess!==null){if($.inArray(mess,errorMessages)<0){errorMessages.push(mess)}errorInputs.push($element);$element.valAttr("current-error",mess).removeClass("valid").parent().removeClass("has-success")}},errorMessages=[],errorInputs=[],$form=this,ignoreInput=function(name,type){if(type==="submit"||type==="button"){return true}return $.inArray(name,config.ignore||[])>-1};$form.find("input,textarea,select").filter(':not([type="submit"],[type="button"])').each(function(){var $element=$(this);var elementType=$element.attr("type");if(!ignoreInput($element.attr("name"),elementType)){var validation=$.formUtils.validateInput($element,language,config,$form,"submit");if(validation!==true){addErrorMessage(validation,$element)}else{$element.valAttr("current-error",false).addClass("valid").parent().addClass("has-success")}}});$form.find(".has-error").removeClass("has-error");$form.find("input,textarea,select").css("border-color","").removeClass(config.errorElementClass);$("."+$.split(config.errorMessageClass," ").join(".")).remove();$("."+config.errorMessageClass).remove();if(typeof config.onValidate=="function"){var resp=config.onValidate($form);if(resp&&resp.element&&resp.message){addErrorMessage(resp.message,resp.element)}}if(!$.formUtils.haltValidation&&errorInputs.length>0){$.formUtils.isValidatingEntireForm=false;$.each(errorInputs,function(i,$input){if(config.borderColorOnError!==""){$input.css("border-color",config.borderColorOnError)}$input.addClass(config.errorElementClass).parent().addClass("has-error")});if(config.errorMessagePosition==="top"){var messages="<strong>"+language.errorTitle+"</strong>";$.each(errorMessages,function(i,mess){messages+="<br />* "+mess});$form.children().eq(0).before('<div class="'+config.errorMessageClass+' alert alert-danger">'+messages+"</div>");if(config.scrollToTopOnError){$(window).scrollTop($form.offset().top-20)}}else{$.each(errorInputs,function(i,$input){var $parent=$input.parent(),$errorSpan=$parent.find("span[class="+config.errorMessageClass+"]");if($errorSpan.length>0){$errorSpan.text(", "+$input.valAttr("current-error"))}else{$parent.append('<span class="'+config.errorMessageClass+' help-block">'+$input.valAttr("current-error")+"</span>")}})}return false}$.formUtils.isValidatingEntireForm=false;return!$.formUtils.haltValidation};$.fn.restrictLength=function(maxLengthElement){new $.formUtils.lengthRestriction(this,maxLengthElement);return this};$.fn.addSuggestions=function(settings){var sugs=false;this.find("input").each(function(){var $field=$(this);sugs=$.split($field.attr("data-suggestions"));if(sugs.length>0&&!$field.hasClass("has-suggestions")){$.formUtils.suggest($field,sugs,settings);$field.addClass("has-suggestions")}});return this};$.split=function(val,func,delim){if(typeof func!="function"){if(!val)return[];var values=[];$.each(val.split(func?func:","),function(i,str){str=$.trim(str);if(str.length)values.push(str)});return values}else if(val){if(!delim)delim=",";$.each(val.split(delim),function(i,str){str=$.trim(str);if(str.length)return func(str,i)})}};$.validate=function(config){config=$.extend({form:"form",validateOnBlur:true,showHelpOnFocus:true,addSuggestions:true,modules:"",onModulesLoaded:null,language:false,onSuccess:false,onError:false},config||{});var formSubmitCallback=function(){var $form=$(this);if($.formUtils.isLoadingModules){setTimeout(function(){$form.trigger("submit")},200);return false}var valid=$(this).validateForm(config.language,config);if(valid&&typeof config.onSuccess=="function"){var callbackResponse=config.onSuccess($form);if(callbackResponse===false)return false}else if(!valid&&typeof config.onError=="function"){config.onError($form);return false}else{return valid}};$("form").unbind("submit",formSubmitCallback);$.split(config.form,function(formQuery){var $form=$(formQuery);$form.bind("submit",formSubmitCallback);if(config.showHelpOnFocus){$form.showHelpOnFocus()}if(config.addSuggestions){$form.addSuggestions()}if(config.validateOnBlur){$form.validateOnBlur(config.language,config)}});if(config.modules!=""){if(typeof config.onModulesLoaded=="function"){$.formUtils.on("load",function(){config.onModulesLoaded()})}$.formUtils.loadModules(config.modules)}};$.validationSetup=function(config){if(typeof console!="undefined"&&console.warn){window.console.warn("Using deprecated function $.validationSetup, pls use $.validate instead")}$.validate(config)};$.formUtils={defaultConfig:function(){return{ignore:[],errorElementClass:"error",borderColorOnError:"red",errorMessageClass:"form-error",validationRuleAttribute:"data-validation",validationErrorMsgAttribute:"data-validation-error-msg",errorMessagePosition:"element",scrollToTopOnError:true,dateFormat:"yyyy-mm-dd",addValidClassOnAll:false,decimalSeparator:"."}},validators:{},_events:{load:[],valid:[],invalid:[]},haltValidation:false,isValidatingEntireForm:false,addValidator:function(validator){var name=validator.name.indexOf("validate_")===0?validator.name:"validate_"+validator.name;if(validator.validateOnKeyUp===undefined)validator.validateOnKeyUp=true;this.validators[name]=validator},on:function(evt,callback){if(this._events[evt]===undefined)this._events[evt]=[];this._events[evt].push(callback)},trigger:function(evt,argA,argB){$.each(this._events[evt]||[],function(i,func){func(argA,argB)})},isLoadingModules:false,loadedModules:{},loadModules:function(modules,path,fireEvent){if(fireEvent===undefined)fireEvent=true;if($.formUtils.isLoadingModules){setTimeout(function(){$.formUtils.loadModules(modules,path,fireEvent)});return}var hasLoadedAnyModule=false;var loadModuleScripts=function(modules,path){var moduleList=$.split(modules),numModules=moduleList.length,moduleLoadedCallback=function(){numModules--;if(numModules==0){$.formUtils.isLoadingModules=false;if(fireEvent&&hasLoadedAnyModule){$.formUtils.trigger("load",path)}}};if(numModules>0){$.formUtils.isLoadingModules=true}var cacheSuffix="?__="+(new Date).getTime(),appendToElement=document.getElementsByTagName("head")[0]||document.getElementsByTagName("body")[0];$.each(moduleList,function(i,modName){modName=$.trim(modName);if(modName.length==0){moduleLoadedCallback()}else{var scriptUrl=path+modName+(modName.substr(-3)==".js"?"":".js"),script=document.createElement("SCRIPT");if(scriptUrl in $.formUtils.loadedModules){moduleLoadedCallback()}else{$.formUtils.loadedModules[scriptUrl]=1;hasLoadedAnyModule=true;script.type="text/javascript";script.onload=moduleLoadedCallback;script.src=scriptUrl+(scriptUrl.substr(-7)==".dev.js"?cacheSuffix:"");script.onreadystatechange=function(){if(this.readyState=="complete"){moduleLoadedCallback()}};appendToElement.appendChild(script)}}})};if(path){loadModuleScripts(modules,path)}else{var findScriptPathAndLoadModules=function(){var foundPath=false;$("script").each(function(){if(this.src){var scriptName=this.src.substr(this.src.lastIndexOf("/")+1,this.src.length);if(scriptName.indexOf("jquery.form-validator.js")>-1||scriptName.indexOf("jquery.form-validator.min.js")>-1){foundPath=this.src.substr(0,this.src.lastIndexOf("/"))+"/";if(foundPath=="/")foundPath="";return false}}});if(foundPath!==false){loadModuleScripts(modules,foundPath);return true}return false};if(!findScriptPathAndLoadModules()){$(findScriptPathAndLoadModules)}}},validateInput:function($element,language,config,$form,eventContext){var value=$.trim($element.val()||""),optional=$element.valAttr("optional"),validationDependsOnCheckedInput=false,validationDependentInputIsChecked=false,validateIfCheckedElement=false,validateIfCheckedElementName=$element.valAttr("if-checked");if(validateIfCheckedElementName!=null){validationDependsOnCheckedInput=true;validateIfCheckedElement=$form.find('input[name="'+validateIfCheckedElementName+'"]');if(validateIfCheckedElement.prop("checked")){validationDependentInputIsChecked=true}}if(!value&&optional==="true"||validationDependsOnCheckedInput&&!validationDependentInputIsChecked){return config.addValidClassOnAll?true:null}var validationRules=$element.attr(config.validationRuleAttribute),validationErrorMsg=true;if(!validationRules){return config.addValidClassOnAll?true:null}$.split(validationRules,function(rule){if(rule.indexOf("validate_")!==0){rule="validate_"+rule}var validator=$.formUtils.validators[rule];if(validator&&typeof validator["validatorFunction"]=="function"){if(rule=="validate_checkbox_group"){$element=$("[name='"+$element.attr("name")+"']:eq(0)")}var isValid=true;if(eventContext!="keyup"||validator.validateOnKeyUp){isValid=validator.validatorFunction(value,$element,config,language,$form)}if(!isValid){validationErrorMsg=$element.attr(config.validationErrorMsgAttribute);if(!validationErrorMsg){validationErrorMsg=language[validator.errorMessageKey];if(!validationErrorMsg)validationErrorMsg=validator.errorMessage}return false}}else{console.warn('Using undefined validator "'+rule+'"')}}," ");if(typeof validationErrorMsg=="string"){return validationErrorMsg}else{return true}},parseDate:function(val,dateFormat){var divider=dateFormat.replace(/[a-zA-Z]/gi,"").substring(0,1),regexp="^",formatParts=dateFormat.split(divider),matches,day,month,year;$.each(formatParts,function(i,part){regexp+=(i>0?"\\"+divider:"")+"(\\d{"+part.length+"})"});regexp+="$";matches=val.match(new RegExp(regexp));if(matches===null){return false}var findDateUnit=function(unit,formatParts,matches){for(var i=0;i<formatParts.length;i++){if(formatParts[i].substring(0,1)===unit){return $.formUtils.parseDateInt(matches[i+1])}}return-1};month=findDateUnit("m",formatParts,matches);day=findDateUnit("d",formatParts,matches);year=findDateUnit("y",formatParts,matches);if(month===2&&day>28&&(year%4!==0||year%100===0&&year%400!==0)||month===2&&day>29&&(year%4===0||year%100!==0&&year%400===0)||month>12||month===0){return false}if(this.isShortMonth(month)&&day>30||!this.isShortMonth(month)&&day>31||day===0){return false}return[year,month,day]},parseDateInt:function(val){if(val.indexOf("0")===0){val=val.replace("0","")}return parseInt(val,10)},isShortMonth:function(m){return m%2===0&&m<7||m%2!==0&&m>7},lengthRestriction:function($inputElement,$maxLengthElement){var maxChars=parseInt($maxLengthElement.text(),10),countCharacters=function(){var numChars=$inputElement.val().length;if(numChars>maxChars){var currScrollTopPos=$inputElement.scrollTop();$inputElement.val($inputElement.val().substring(0,maxChars));$inputElement.scrollTop(currScrollTopPos)}$maxLengthElement.text(maxChars-numChars)};$($inputElement).bind("keydown keyup keypress focus blur",countCharacters).bind("cut paste",function(){setTimeout(countCharacters,100)});$(document).bind("ready",countCharacters)},numericRangeCheck:function(value,rangeAllowed){var range=$.split(rangeAllowed,"-");var minmax=parseInt(rangeAllowed.substr(3),10);if(range.length==2&&(value<parseInt(range[0],10)||value>parseInt(range[1],10))){return["out",range[0],range[1]]}else if(rangeAllowed.indexOf("min")===0&&value<minmax){return["min",minmax]}else if(rangeAllowed.indexOf("max")===0&&value>minmax){return["max",minmax]}else{return["ok"]}},_numSuggestionElements:0,_selectedSuggestion:null,_previousTypedVal:null,suggest:function($element,suggestions,settings){var config={css:{maxHeight:"150px",background:"#FFF",lineHeight:"150%",textDecoration:"underline",overflowX:"hidden",overflowY:"auto",border:"#CCC solid 1px",borderTop:"none",cursor:"pointer"},activeSuggestionCSS:{background:"#E9E9E9"}};if(settings)$.extend(config,settings);config.css["position"]="absolute";config.css["z-index"]=9999;$element.attr("autocomplete","off");this._numSuggestionElements++;var onSelectSuggestion=function($el){var suggestionId=$el.valAttr("suggestion-nr");$.formUtils._selectedSuggestion=null;$.formUtils._previousTypedVal=null;$(".jquery-form-suggestion-"+suggestionId).fadeOut("fast")};$element.data("suggestions",suggestions).valAttr("suggestion-nr",this._numSuggestionElements).bind("focus",function(){$(this).trigger("keyup");$.formUtils._selectedSuggestion=null}).bind("keyup",function(){var $input=$(this),foundSuggestions=[],val=$.trim($input.val()).toLocaleLowerCase();if(val==$.formUtils._previousTypedVal){return}else{$.formUtils._previousTypedVal=val}var hasTypedSuggestion=false,suggestionId=$input.valAttr("suggestion-nr"),$suggestionContainer=$(".jquery-form-suggestion-"+suggestionId);$suggestionContainer.scrollTop(0);if(val!=""){var findPartial=val.length>2;$.each($input.data("suggestions"),function(i,suggestion){var lowerCaseVal=suggestion.toLocaleLowerCase();if(lowerCaseVal==val){foundSuggestions.push("<strong>"+suggestion+"</strong>");hasTypedSuggestion=true;return false}else if(lowerCaseVal.indexOf(val)===0||findPartial&&lowerCaseVal.indexOf(val)>-1){foundSuggestions.push(suggestion.replace(new RegExp(val,"gi"),"<strong>$&</strong>"))}})}if(hasTypedSuggestion||foundSuggestions.length==0&&$suggestionContainer.length>0){$suggestionContainer.hide()}else if(foundSuggestions.length>0&&$suggestionContainer.length==0){$suggestionContainer=$("<div></div>").css(config.css).appendTo("body");$suggestionContainer.addClass("jquery-form-suggestions");$suggestionContainer.addClass("jquery-form-suggestion-"+suggestionId)}else if(foundSuggestions.length>0&&!$suggestionContainer.is(":visible")){$suggestionContainer.show()}if(foundSuggestions.length>0&&val.length!=foundSuggestions[0].length){var offset=$input.offset();$suggestionContainer.css({width:$input.outerWidth(),left:offset.left+"px",top:offset.top+$input.outerHeight()+"px"});$suggestionContainer.html("");$.each(foundSuggestions,function(i,text){$("<div></div>").append(text).css({overflow:"hidden",textOverflow:"ellipsis",whiteSpace:"nowrap",padding:"5px"}).addClass("form-suggest-element").appendTo($suggestionContainer).click(function(){$input.focus();$input.val($(this).text());onSelectSuggestion($input)})})}}).bind("keydown",function(e){var code=e.keyCode?e.keyCode:e.which,suggestionId,$suggestionContainer,$input=$(this);if(code==13&&$.formUtils._selectedSuggestion!==null){suggestionId=$input.valAttr("suggestion-nr");$suggestionContainer=$(".jquery-form-suggestion-"+suggestionId);if($suggestionContainer.length>0){var newText=$suggestionContainer.find("div").eq($.formUtils._selectedSuggestion).text();$input.val(newText);onSelectSuggestion($input);e.preventDefault()}}else{suggestionId=$input.valAttr("suggestion-nr");$suggestionContainer=$(".jquery-form-suggestion-"+suggestionId);var $suggestions=$suggestionContainer.children();if($suggestions.length>0&&$.inArray(code,[38,40])>-1){if(code==38){if($.formUtils._selectedSuggestion===null)$.formUtils._selectedSuggestion=$suggestions.length-1;else $.formUtils._selectedSuggestion--;if($.formUtils._selectedSuggestion<0)$.formUtils._selectedSuggestion=$suggestions.length-1}else if(code==40){if($.formUtils._selectedSuggestion===null)$.formUtils._selectedSuggestion=0;else $.formUtils._selectedSuggestion++;if($.formUtils._selectedSuggestion>$suggestions.length-1)$.formUtils._selectedSuggestion=0}var containerInnerHeight=$suggestionContainer.innerHeight(),containerScrollTop=$suggestionContainer.scrollTop(),suggestionHeight=$suggestionContainer.children().eq(0).outerHeight(),activeSuggestionPosY=suggestionHeight*$.formUtils._selectedSuggestion;if(activeSuggestionPosY<containerScrollTop||activeSuggestionPosY>containerScrollTop+containerInnerHeight){$suggestionContainer.scrollTop(activeSuggestionPosY)}$suggestions.removeClass("active-suggestion").css("background","none").eq($.formUtils._selectedSuggestion).addClass("active-suggestion").css(config.activeSuggestionCSS);e.preventDefault();return false}}}).bind("blur",function(){onSelectSuggestion($(this))});return $element},LANG:{errorTitle:"Form submission failed!",requiredFields:"You have not answered all required fields",badTime:"You have not given a correct time",badEmail:"You have not given a correct e-mail address",badTelephone:"You have not given a correct phone number",badSecurityAnswer:"You have not given a correct answer to the security question",badDate:"You have not given a correct date",lengthBadStart:"You must give an answer between ",lengthBadEnd:" characters",lengthTooLongStart:"You have given an answer longer than ",lengthTooShortStart:"You have given an answer shorter than ",notConfirmed:"Values could not be confirmed",badDomain:"Incorrect domain value",badUrl:"The answer you gave was not a correct URL",badCustomVal:"You gave an incorrect answer",badInt:"The answer you gave was not a correct number",badSecurityNumber:"Your social security number was incorrect",badUKVatAnswer:"Incorrect UK VAT Number",badStrength:"The password isn't strong enough",badNumberOfSelectedOptionsStart:"You have to choose at least ",badNumberOfSelectedOptionsEnd:" answers",badAlphaNumeric:"The answer you gave must contain only alphanumeric characters ",badAlphaNumericExtra:" and ",wrongFileSize:"The file you are trying to upload is too large",wrongFileType:"The file you are trying to upload is of wrong type",groupCheckedRangeStart:"Please choose between ",groupCheckedTooFewStart:"Please choose at least ",groupCheckedTooManyStart:"Please choose a maximum of ",groupCheckedEnd:" item(s)"}};$.formUtils.addValidator({name:"email",validatorFunction:function(email){var emailParts=email.split("@");if(emailParts.length==2){return $.formUtils.validators.validate_domain.validatorFunction(emailParts[1])&&!/[^a-zA-Z0-9_\+\.\-]/.test(emailParts[0])}return false},errorMessage:"",errorMessageKey:"badEmail"});$.formUtils.addValidator({name:"domain",validatorFunction:function(val,$input){var topDomains=[".eu",".com",".net",".org",".biz",".coop",".info",".museum",".name",".pro",".edu",".gov",".int",".mil",".ac",".ad",".ae",".af",".ag",".ai",".al",".am",".an",".ao",".aq",".ar",".as",".at",".au",".aw",".az",".ba",".bb",".bd",".be",".bf",".bg",".bh",".bi",".bj",".bm",".bn",".bo",".br",".bs",".bt",".bv",".bw",".by",".bz",".ca",".cc",".cd",".cf",".cg",".ch",".ci",".ck",".cl",".cm",".cn",".co",".cr",".cu",".cv",".cx",".cy",".cz",".de",".dj",".dk",".dm",".do",".dz",".ec",".ee",".eg",".eh",".er",".es",".et",".fi",".fj",".fk",".fm",".fo",".fr",".ga",".gd",".ge",".gf",".gg",".gh",".gi",".gl",".gm",".gn",".gp",".gq",".gr",".gs",".gt",".gu",".gv",".gy",".hk",".hm",".hn",".hr",".ht",".hu",".id",".ie",".il",".im",".in",".io",".iq",".ir",".is",".it",".je",".jm",".jo",".jp",".ke",".kg",".kh",".ki",".km",".kn",".kp",".kr",".kw",".ky",".kz",".la",".lb",".lc",".li",".lk",".lr",".ls",".lt",".lu",".lv",".ly",".ma",".mc",".md",".me",".mg",".mh",".mk",".ml",".mm",".mn",".mo",".mp",".mq",".mr",".ms",".mt",".mu",".mv",".mw",".mx",".my",".mz",".na",".nc",".ne",".nf",".ng",".ni",".nl",".no",".np",".nr",".nu",".nz",".om",".pa",".pe",".pf",".pg",".ph",".pk",".pl",".pm",".pn",".pr",".ps",".pt",".pw",".py",".qa",".re",".ro",".rs",".rw",".ru",".sa",".sb",".sc",".sd",".se",".sg",".sh",".si",".sj",".sk",".sl",".sm",".sn",".so",".sr",".st",".sv",".sy",".sz",".tc",".td",".tf",".tg",".th",".tj",".tk",".tm",".tn",".to",".tp",".tr",".tt",".tv",".tw",".tz",".ua",".ug",".uk",".um",".us",".uy",".uz",".va",".vc",".ve",".vg",".vi",".vn",".vu",".ws",".wf",".ye",".yt",".za",".zm",".zw",".mobi",".xxx",".asia"],ukTopDomains=["co","me","ac","gov","judiciary","ltd","mod","net","nhs","nic","org","parliament","plc","police","sch","bl","british-library","jet","nls"],dot=val.lastIndexOf("."),domain=val.substring(0,dot),ext=val.substring(dot,val.length),hasTopDomain=false;for(var i=0;i<topDomains.length;i++){if(topDomains[i]===ext){if(ext===".uk"){var domainParts=val.split(".");var tld2=domainParts[domainParts.length-2];for(var j=0;j<ukTopDomains.length;j++){if(ukTopDomains[j]===tld2){hasTopDomain=true;break}}if(hasTopDomain)break}else{hasTopDomain=true;break}}}if(!hasTopDomain){return false}else if(dot<2||dot>57){return false}else{var firstChar=domain.substring(0,1);var lastChar=domain.substring(domain.length-1,domain.length);if(firstChar==="-"||firstChar==="."||lastChar==="-"||lastChar==="."){return false}if(domain.split(".").length>3||domain.split("..").length>1){return false}if(domain.replace(/[0-9a-z\.\-]/g,"")!==""){return false}}if(typeof $input!=="undefined"){$input.val(val)}return true},errorMessage:"",errorMessageKey:"badDomain"});$.formUtils.addValidator({name:"required",validatorFunction:function(val,$el){return $el.attr("type")=="checkbox"?$el.is(":checked"):$.trim(val)!==""},errorMessage:"",errorMessageKey:"requiredFields"});$.formUtils.addValidator({name:"length",validatorFunction:function(val,$el,config,lang){var lengthAllowed=$el.valAttr("length"),type=$el.attr("type");if(lengthAllowed==undefined){var elementType=$el.get(0).nodeName;alert('Please add attribute "data-validation-length" to '+elementType+" named "+$el.attr("name"));return true}var len=type=="file"&&$el.get(0).files!==undefined?$el.get(0).files.length:val.length,lengthCheckResults=$.formUtils.numericRangeCheck(len,lengthAllowed),checkResult;switch(lengthCheckResults[0]){case"out":this.errorMessage=lang.lengthBadStart+lengthAllowed+lang.lengthBadEnd;checkResult=false;break;case"min":this.errorMessage=lang.lengthTooShortStart+lengthCheckResults[1]+lang.lengthBadEnd;checkResult=false;break;case"max":this.errorMessage=lang.lengthTooLongStart+lengthCheckResults[1]+lang.lengthBadEnd;checkResult=false;break;default:checkResult=true}return checkResult},errorMessage:"",errorMessageKey:""});$.formUtils.addValidator({name:"url",validatorFunction:function(url){var urlFilter=/^(https|http|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|\[|\]|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i;if(urlFilter.test(url)){var domain=url.split("://")[1];var domainSlashPos=domain.indexOf("/");if(domainSlashPos>-1)domain=domain.substr(0,domainSlashPos);return $.formUtils.validators.validate_domain.validatorFunction(domain)}return false},errorMessage:"",errorMessageKey:"badUrl"});$.formUtils.addValidator({name:"number",validatorFunction:function(val,$el,config){if(val!==""){var allowing=$el.valAttr("allowing")||"",decimalSeparator=$el.valAttr("decimal-separator")||config.decimalSeparator,allowsRange=false,begin,end;if(allowing.indexOf("number")==-1)allowing+=",number";if(allowing.indexOf("negative")>-1&&val.indexOf("-")===0){val=val.substr(1)}if(allowing.indexOf("range")>-1){begin=parseFloat(allowing.substring(allowing.indexOf("[")+1,allowing.indexOf(";")));end=parseFloat(allowing.substring(allowing.indexOf(";")+1,allowing.indexOf("]")));allowsRange=true}if(allowing.indexOf("number")>-1&&val.replace(/[0-9]/g,"")===""&&(!allowsRange||val>=begin&&val<=end)){return true}if(allowing.indexOf("float")>-1&&val.match(new RegExp("^([0-9]+)\\"+decimalSeparator+"([0-9]+)$"))!==null&&(!allowsRange||val>=begin&&val<=end)){return true}}return false},errorMessage:"",errorMessageKey:"badInt"});$.formUtils.addValidator({name:"alphanumeric",validatorFunction:function(val,$el,config,language){var patternStart="^([a-zA-Z0-9",patternEnd="]+)$",additionalChars=$el.attr("data-validation-allowing"),pattern="";if(additionalChars){pattern=patternStart+additionalChars+patternEnd;var extra=additionalChars.replace(/\\/g,"");if(extra.indexOf(" ")>-1){extra=extra.replace(" ","");extra+=" and spaces "}this.errorMessage=language.badAlphaNumeric+language.badAlphaNumericExtra+extra}else{pattern=patternStart+patternEnd;this.errorMessage=language.badAlphaNumeric}return new RegExp(pattern).test(val)},errorMessage:"",errorMessageKey:""});$.formUtils.addValidator({name:"custom",validatorFunction:function(val,$el,config){var regexp=new RegExp($el.valAttr("regexp"));return regexp.test(val)},errorMessage:"",errorMessageKey:"badCustomVal"});$.formUtils.addValidator({name:"date",validatorFunction:function(date,$el,conf){var dateFormat="yyyy-mm-dd";if($el.valAttr("format")){dateFormat=$el.valAttr("format")}else if(conf.dateFormat){dateFormat=conf.dateFormat}return $.formUtils.parseDate(date,dateFormat)!==false},errorMessage:"",errorMessageKey:"badDate"});$.formUtils.addValidator({name:"checkbox_group",validatorFunction:function(val,$el,config,lang,$form){var checkResult=true;var elname=$el.attr("name");var checkedCount=$("input[type=checkbox][name^='"+elname+"']:checked",$form).length;var qtyAllowed=$el.valAttr("qty");if(qtyAllowed==undefined){var elementType=$el.get(0).nodeName;alert('Attribute "data-validation-qty" is missing from '+elementType+" named "+$el.attr("name"))}var qtyCheckResults=$.formUtils.numericRangeCheck(checkedCount,qtyAllowed);switch(qtyCheckResults[0]){case"out":this.errorMessage=lang.groupCheckedRangeStart+qtyAllowed+lang.groupCheckedEnd;checkResult=false;break;case"min":this.errorMessage=lang.groupCheckedTooFewStart+qtyCheckResults[1]+lang.groupCheckedEnd;checkResult=false;break;case"max":this.errorMessage=lang.groupCheckedTooManyStart+qtyCheckResults[1]+lang.groupCheckedEnd;checkResult=false;break;default:checkResult=true}return checkResult}})})(jQuery);









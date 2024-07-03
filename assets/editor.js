(function ($) {
    "use strict";

    var UfoGlobal = function ($scope, $) {

        // Js Start
        $('[data-background]').each(function () {
            $(this).css('background-image', 'url(' + $(this).attr('data-background') + ')');
        });
        // Js End

    };


    var UfoProductTabs = function ($scope, $) {

        $scope.find('.ufo-product-tab-wrapper').each(function () {
            $(document).ready(function() {
                function updateBundleBuyLink() {
                    var selectedProduct = $('.tab-content .product input[type="radio"]:checked');
                    var link = selectedProduct.data('link');
                    $('#bundleBuy').attr('href', link);
                }

                function filterProducts(tabId) {
                    $('.tab-content .product').hide();
                    $('.tab-content .product').each(function() {
                        var productTabId = $(this).data('tab-id').toString();
                        if (productTabId === tabId.toString()) {
                            $(this).show();
                        }
                    });
                }

                $('.tab-button').click(function() {
                    var tabId = $(this).data('tab');

                    $('.tab-button').removeClass('active');
                    $(this).addClass('active');

                    filterProducts(tabId);
                });

                $('.tab-content .product input[type="radio"]').change(function() {
                    $('.tab-content .product').removeClass('active');
                    $(this).closest('.product').addClass('active');
                    updateBundleBuyLink();
                });

                // Initialize
                $('.tab-button').first().click();
            });
            // Js End
        });

    };

    $(window).on('elementor/frontend/init', function () {
            elementorFrontend.hooks.addAction('frontend/element_ready/global', UfoGlobal);
            elementorFrontend.hooks.addAction('frontend/element_ready/ufo-product_tabs-addons.default', UfoProductTabs);
    });
    console.log('addon js loaded');
})(jQuery);
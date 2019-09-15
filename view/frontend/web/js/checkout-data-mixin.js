define(function () {
    'use strict';

    return function (checkoutData) {
        debugger;
        const origin = checkoutData.getNewCustomerShippingAddress;

        checkoutData.getNewCustomerShippingAddress = function () {
            const address = origin.call(checkoutData);
            console.log('getNewCustomerShippingAddress intercepted');
            return address;
        };

        return checkoutData;
    }
});

define(function () {
    'use strict';

    return function (Minicart) {
        return Minicart.extend({
            update: function (updatedCart) {
                console.log('Minicart update intercepted');
                return this._super(updatedCart);
            }
        });
    }
});

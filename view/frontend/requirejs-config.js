var config = {
    config: {
        mixins: {
            // Basic mixin example
            'Magento_Checkout/js/checkout-data': {
                'Matozan_MagentoExtensibility/js/checkout-data-mixin': true
            },
            // jQuery UI Widget mixin
            'Magento_Catalog/js/catalog-add-to-cart': {
                'Matozan_MagentoExtensibility/js/catalog-add-to-cart-mixin': true
            },
            // UiComponent mixin
            'Magento_Checkout/js/view/minicart': {
                'Matozan_MagentoExtensibility/js/minicart-mixin': true
            }
        }
    },
};

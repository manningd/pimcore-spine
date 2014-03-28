pimcore.registerNS("pimcore.plugin.spine");

pimcore.plugin.spine = Class.create(pimcore.plugin.admin, {
    getClassName: function() {
        return "pimcore.plugin.spine";
    },

    initialize: function() {
        pimcore.plugin.broker.registerPlugin(this);
    },
 
    pimcoreReady: function (params,broker){
        // alert("Example Ready!");
    }
});

var spinePlugin = new pimcore.plugin.spine();


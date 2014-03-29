pimcore.registerNS("pimcore.plugin.spine");

pimcore.plugin.spine = Class.create(pimcore.plugin.admin, {
    getClassName: function() {
        return "pimcore.plugin.spine";
    },

    initialize: function() {
        pimcore.plugin.broker.registerPlugin(this);
    },
 
    pimcoreReady: function (params,broker)
    {
        this.loadJsFile("/object/classes/data/nationality.js");
        this.loadJsFile("/object/tags/nationality.js");
    },

    loadJsFile: function(url)
    {
        var js = document.createElement('script');

        js.type = "text/javascript";
        js.src  = '/plugins/Spine/static/js' + url;

        document.body.appendChild(js);
    }
});

var spinePlugin = new pimcore.plugin.spine();


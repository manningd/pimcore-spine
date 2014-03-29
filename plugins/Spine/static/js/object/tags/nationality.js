pimcore.registerNS("pimcore.object.tags.nationality");
pimcore.object.tags.nationality = Class.create(pimcore.object.tags.select, {

    type: "nationality",

    initialize: function (data, fieldConfig)
    {
        this.data = data;
        this.fieldConfig = fieldConfig;
        this.fieldConfig.width = 350;
    }
});
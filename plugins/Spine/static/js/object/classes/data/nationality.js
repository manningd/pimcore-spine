/**
 * Spine
 *
 * @copyright  Copyright (c) 2009-2014 manningd.com
 */
pimcore.registerNS("pimcore.object.classes.data.nationality");
pimcore.object.classes.data.nationality = Class.create(pimcore.object.classes.data.data, {

    type: "nationality",
    /**
     * define where this datatype is allowed
     */
    allowIn: {
        object: true,
        objectbrick: true,
        fieldcollection: true,
        localizedfield: true
    },

    initialize: function (treeNode, initData) {
        this.type = "nationality";

        this.initData(initData);

        this.treeNode = treeNode;
    },

    getTypeName: function () {
        return t("nationality");
    },

    getGroup: function () {
        return "select";
    },

    getIconClass: function () {
        return "spine_icon_nationality";
    },

    getLayout: function ($super) {

        $super();

        this.specificPanel.removeAll();
        return this.layout;
    }
});

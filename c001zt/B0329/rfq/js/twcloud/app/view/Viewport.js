/**
 * Enterprise Spreadsheet Solutions
 * Copyright(c) FeyaSoft Inc. All right reserved.
 * info@enterpriseSheet.com
 * http://www.enterpriseSheet.com
 * 
 * Licensed under the EnterpriseSheet Commercial License.
 * http://enterprisesheet.com/license.jsp
 * 
 * You need to have a valid license key to access this file.
 */
Ext.define('EnterpriseSheetApp.view.Viewport', {
    extend: 'Ext.container.Viewport',

    requires:[
        'Ext.layout.container.Fit',
        'Ext.layout.container.Border',
        'Ext.layout.container.Form',
        'EnterpriseSheet.Config',
        'EnterpriseSheet.api.SheetAPI'      
    ],

    layout: {
        type: 'fit'
    },

    constructor : function(config){
        config = config || {};

        var sheetAPI = Ext.create('EnterpriseSheet.api.SheetAPI');
        var hd = sheetAPI.createSheetApp({});
        config.items = [hd.appCt];

        this.callParent([config]);

        /*
         * load the file
         */
        if(Ext.isDefined(config.fileId)){
            sheetAPI.loadFile(hd, config.fileId);
        }
    }

});

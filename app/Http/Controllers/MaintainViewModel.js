Ext.define('Admin.view.customertype.MaintainViewModel', {
    extend: 'Ext.app.ViewModel',
    alias: 'viewmodel.maintainviewmodel',
    requires: [
        'Admin.model.MaintainType'
    ],
    stores: {
      MaintainTypeListStore: {
            model: 'Admin.model.MaintainType',
            autoLoad: false,
            autoSync: false,
            storeId: 'MaintainTypeListStoreId',
            simpleSortMode: true,
            pageSize: 15,
            remoteSort: true,
            proxy:
            {
                type: 'ajax',
                reader:
                {
                    rootProperty: 'data',
                    type: 'json',
                    totalProperty: 'total'
                },
                url:  Admin.Global.getApiUrl() + 'maintaintype'
            }
        }

    }
});

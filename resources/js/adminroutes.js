import ItemComponent from './components/admin/ItemComponent.vue';
import EditComponent from './components/admin/EditComponent.vue';
import FileUpload from './components/admin/FileUpload.vue';
import AdminDashboard from './components/admin/AdminDashboard.vue';
export const adminroutes = [
    {
        name: 'items',
        path: 'view-items',
        component: ItemComponent
    },
    // {
    //     name: 'create',
    //     path: '/create',
    //     component: CreateComponent
    // },
    {
        name: 'edit',
        path: '/admin/item/:id',
        component: EditComponent
    },
    {
        name: 'add',
        path: '/admin/add-item',
        component: FileUpload
    },
    {
        name: 'dashboard',
        path: '/admin/dashboard',
        component: AdminDashboard
    },
];
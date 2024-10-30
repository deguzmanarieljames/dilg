import { createRouter, createWebHistory } from 'vue-router'

//ADMIN
import AdDashboard from '../views/AdminView/AdDashboard.vue'
import AdAckReceipt from '../views/AdminView/AdAckReceipt.vue'
import AdDatabasePPE from '../views/AdminView/AdDatabasePPE.vue'
import AdLedgerCard from '../views/AdminView/AdLedgerCard.vue'
import AdPropertyCard from '../views/AdminView/AdPropertyCard.vue'
import AdPropertySticker from '../views/AdminView/AdPropertySticker.vue'
import AdRLSDDP from '../views/AdminView/AdRLSDDP.vue'
import AdServiceable from '../views/AdminView/AdServiceable.vue'
import AdTransferReport from '../views/AdminView/AdTransferReport.vue'
import AdUnserviceable from '../views/AdminView/AdUnserviceable.vue'
import AdWorkspace from '../views/AdminView/AdWorkspace.vue'
import AdLogbook from '../views/AdminView/AdLogbook.vue'
import AdUserverify from '../views/AdminView/AdUserverify.vue'
import AdInventory from '../views/AdminView/AdInventory.vue'
import AdOrdering from '../views/AdminView/AdOrdering.vue'
import AdOrderPending from '../views/AdminView/AdOrderPending.vue'
import AdOrderIncoming from '../views/AdminView/AdOrderIncoming.vue'
import SignupView from '../views/SignupView.vue'
import SigninView from '../views/SigninView.vue'
// import LandingPage2 from '../views/Interface/LandingPage2.vue'


//EMPLOYEE
import EmpDashboard from '../views/EmpView/EmpDashboard.vue'
import EmpRequest from '../views/EmpView/EmpRequest.vue'
import EmpServiceable from '../views/EmpView/EmpServiceable.vue'
import EmpUnserviceable from '../views/EmpView/EmpUnserviceable.vue'
import EmpProfile from '../views/EmpView/EmpProfile.vue'

//OFFICER

import OffAdmin from '../views/OfficerView/OffAdmin.vue'

const routes = [
  //ADMIN ROUTES
  // {
  //   path: '/',
  //   name: 'LandingPage2',
  //   component: LandingPage2
  // },
  {
    path: '/signin',
    name: 'SigninView',
    component: SigninView
  },
  {
    path: '/signup',
    name: 'SignupView',
    component: SignupView
  },
  {
    path: '/dashboard',
    name: 'AdDashboard',
    component: AdDashboard,
    meta: {requireAuth: true}
  },
  {
    path: '/databaseppe',
    name: 'AdDatabasePPE',
    component: AdDatabasePPE,
    meta: {requireAuth: true}
  },
  {
    path: '/serviceable',
    name: 'AdServiceable',
    component: AdServiceable,
    meta: {requireAuth: true}
  },
  {
    path: '/unserviceable',
    name: 'AdUnserviceable',
    component: AdUnserviceable,
    meta: {requireAuth: true}
  },
  {
    path: '/propertysticker',
    name: 'AdPropertySticker',
    component: AdPropertySticker,
    meta: {requireAuth: true}
  },
  {
    path: '/ledgercard',
    name: 'AdLedgerCard',
    component: AdLedgerCard,
    meta: {requireAuth: true}
  },
  {
    path: '/propertycard',
    name: 'AdPropertyCard',
    component: AdPropertyCard,
    meta: {requireAuth: true}
  },
  {
    path: '/ackreceipt',
    name: 'AdAckReceipt',
    component: AdAckReceipt,
    meta: {requireAuth: true}
  },
  {
    path: '/transferreport',
    name: 'AdTransferReport',
    component: AdTransferReport,
    meta: {requireAuth: true}
  },
  {
    path: '/rlsddp',
    name: 'AdRLSDDP',
    component: AdRLSDDP,
    meta: {requireAuth: true}
  },
  {
    path: '/workspace',
    name: 'AdWorkspace',
    component: AdWorkspace,
    meta: {requireAuth: true}
  },
  {
    path: '/logbook',
    name: 'AdLogbook',
    component: AdLogbook,
    meta: {requireAuth: true}
  },
  {
    path: '/inventory',
    name: 'AdInventory',
    component: AdInventory,
    meta: {requireAuth: true}
  },
  {
    path: '/ordering',
    name: 'AdOrdering',
    component: AdOrdering,
    meta: {requireAuth: true}
  },
  {
    path: '/orderpending',
    name: 'AdOrderPending',
    component: AdOrderPending,
    meta: {requireAuth: true}
  },
  {
    path: '/orderincoming',
    name: 'AdOrderIncoming',
    component: AdOrderIncoming,
    meta: {requireAuth: true}
  },
  {
    path: '/userverify',
    name: 'AdUserverify',
    component: AdUserverify,
    meta: {requireAuth: true}
  },



  //EMPLOYEE ROUTES
  {
    path: '/empdashboard',
    name: 'Empdashboard',
    component: EmpDashboard,
    meta: {requireAuth: true}
  },
  {
    path: '/emprequest',
    name: 'EmpRequest',
    component: EmpRequest,
    meta: {requireAuth: true}
  },
  {
    path: '/empserviceable',
    name: 'EmpServiceable',
    component: EmpServiceable,
    meta: {requireAuth: true}
  },
  {
    path: '/empunserviceable',
    name: 'EmpUnserviceable',
    component: EmpUnserviceable,
    meta: {requireAuth: true}
  },
  {
    path: '/empprofile',
    name: 'EmpProfile',
    component: EmpProfile,
    meta: {requireAuth: true}
  },

//OFFICER

  {
    path: '/offadmin',
    name: 'OffAdmin',
    component: OffAdmin,
    meta: {requireAuth: true}
  },

]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

router.beforeEach((to, from, next) =>{
  const isLoggedin = checkUserLogin();
  if(to.matched.some((record) => record.meta.requireAuth)){
    if(!isLoggedin){
      next("/");
    }else{
      next();
    }
  }else{
    next();
  }
});

function checkUserLogin() {
  const userToken = sessionStorage.getItem("token");
  return !!userToken;
}
export default router

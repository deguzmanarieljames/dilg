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
import SignupView from '../views/SignupView.vue'
import SigninView from '../views/SigninView.vue'

//EMPLOYEE
import EmpDashboard from '../views/EmpView/EmpDashboard.vue'

const routes = [
  //ADMIN ROUTES
  {
    path: '/',
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
    //meta: {requireAuth: true}
  },
  {
    path: '/databaseppe',
    name: 'AdDatabasePPE',
    component: AdDatabasePPE
    
  },
  {
    path: '/serviceable',
    name: 'AdServiceable',
    component: AdServiceable
  },
  {
    path: '/unserviceable',
    name: 'AdUnserviceable',
    component: AdUnserviceable
  },
  {
    path: '/propertysticker',
    name: 'AdPropertySticker',
    component: AdPropertySticker
  },
  {
    path: '/ledgercard',
    name: 'AdLedgerCard',
    component: AdLedgerCard
  },
  {
    path: '/propertycard',
    name: 'AdPropertyCard',
    component: AdPropertyCard
  },
  {
    path: '/ackreceipt',
    name: 'AdAckReceipt',
    component: AdAckReceipt
  },
  {
    path: '/transferreport',
    name: 'AdTransferReport',
    component: AdTransferReport
  },
  {
    path: '/rlsddp',
    name: 'AdRLSDDP',
    component: AdRLSDDP
  },
  {
    path: '/workspace',
    name: 'AdWorkspace',
    component: AdWorkspace
  },



  //EMPLOYEE ROUTES
  {
    path: '/empdashboard',
    name: 'Empempdashboard',
    component: EmpDashboard
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

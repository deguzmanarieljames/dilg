import { createRouter, createWebHistory } from 'vue-router'
import Dashboard from '../views/EmpAdmin/AdDashboard.vue'
import DatabasePPE from '../views/EmpAdmin/AdDatabasePPE.vue'
import RCPPE from '../views/EmpAdmin/AdRCPPE.vue'
import IIRUP from '../views/EmpAdmin/AdIIRUP.vue'
import Sticker from '../views/EmpAdmin/AdSticker.vue'
import LedgerCard from '../views/EmpAdmin/AdLedgerCard.vue'
import Receipt from '../views/EmpAdmin/AdReceipt.vue'
import TransferReport from '../views/EmpAdmin/AdTransferReport.vue'
import RLSDDP from '../views/EmpAdmin/AdRLSDDP.vue'

const routes = [
  {
    path: '/',
    name: 'Dashboard',
    component: Dashboard
  },
  {
    path: '/databaseppe',
    name: 'DatabasePPE',
    component: DatabasePPE
  },
  {
    path: '/rcppe',
    name: 'RCPPE',
    component: RCPPE
  },
  {
    path: '/iirup',
    name: 'IIRUP',
    component: IIRUP
  },
  {
    path: '/sticker',
    name: 'Sticker',
    component: Sticker
  },
  {
    path: '/ledgercard',
    name: 'LedgerCard',
    component: LedgerCard
  },
  {
    path: '/receipt',
    name: 'Receipt',
    component: Receipt
  },
  {
    path: '/transferreport',
    name: 'TransferReport',
    component: TransferReport
  },
  {
    path: '/rlsddp',
    name: 'RLSDDP',
    component: RLSDDP
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router

// Define all routes
const routes = [
  {
    path: '/',
    component: {
      template: `<home-page></home-page>`
    }
  },
  {
    path: '/bpjs',
    component: BpjsPage
  },
  {
    path: '/imunisasi',
    component: ImunisasiPage
  },
  {
    path: '/kesehatan',
    component: KesehatanPage
  },
  {
    path: '/konsistensi',
    component: KonsistensiPage
  },
  {
    path: '/konversi',
    component: KonversiPage
  },
  {
    path: '/listrik',
    component: ListrikPage
  },
  {
    path: '/makanan',
    component: MakananPage
  },
  {
    path: '/oop',
    component: OopPage
  },
  {
    path: '/pbb',
    component: PbbPage
  },
  {
    path: '/pdam',
    component: PdamPage
  },
  {
    path: '/pph',
    component: PphPage
  },
  {
    path: '/r502',
    component: R502Page
  },
  {
    path: '/sekolah',
    component: SekolahPage
  },
  {
    path: '/stnk',
    component: StnkPage
  }
];

// Create router
const router = new VueRouter({
  mode: 'hash',
  routes: routes
});

// Create Vue instance
new Vue({
  router: router,
  el: '#app'
});

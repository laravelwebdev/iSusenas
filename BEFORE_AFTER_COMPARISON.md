/**
 * =====================================================
 * CONTOH PERBANDINGAN: BPJS (Before vs After)
 * =====================================================
 * 
 * BEFORE (bpjs.html + bpjs.js):
 * 
 * bpjs.html:
 * - HTML standalone dengan id="app"
 * - Include vue.min.js dan bpjs.js
 * 
 * bpjs.js:
 * - Vue.component('currency', {...}) - DEFINED HERE
 * - new Vue({ el: "#app", data: {...}, methods: {...}, computed: {...} })
 * 
 * MASALAH:
 * ❌ Currency component juga ada di imunisasi.js, konversi.js, listrik.js, makanan.js, etc
 * ❌ Duplikasi kode untuk Currency component
 * 
 * =====================================================
 * 
 * AFTER (components/BpjsPage.js + app.js + index_spa.html):
 * 
 * index_spa.html (MAIN ENTRY POINT):
 * ```html
 * <!DOCTYPE html>
 * <html lang="id">
 * <head>
 *   <title>iSusenas</title>
 *   <link rel="stylesheet" href="style.css">
 * </head>
 * <body>
 *   <div id="app">
 *     <router-view></router-view>
 *   </div>
 * 
 *   <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
 *   <script src="https://cdn.jsdelivr.net/npm/vue-router@3.5.3/dist/vue-router.js"></script>
 *   
 *   <!-- Currency component DEFINED ONCE -->
 *   <script src="components/Currency.js"></script>
 *   
 *   <!-- All page components -->
 *   <script src="components/Home.js"></script>
 *   <script src="components/BpjsPage.js"></script>
 *   <script src="components/ImunisasiPage.js"></script>
 *   <!-- ... etc ... -->
 *   
 *   <!-- Main app with router -->
 *   <script src="app.js"></script>
 * </body>
 * </html>
 * ```
 * 
 * components/Currency.js (SHARED COMPONENT - DEFINED ONCE):
 * ```javascript
 * Vue.component('currency', {
 *   props: ["value"],
 *   template: `<input type="text" ... />`,
 *   data: function() { ... },
 *   computed: { displayValue: { get: {...}, set: {...} } }
 * });
 * ```
 * 
 * components/BpjsPage.js (PAGE COMPONENT):
 * ```javascript
 * var BpjsPage = {
 *   template: `<div>...uses <currency> component...</div>`,
 *   data() { return { pbi: 0, k1: 0, ... } },
 *   methods: { ... },
 *   computed: { ... }
 * };
 * ```
 * 
 * app.js (ROUTER & MAIN APP):
 * ```javascript
 * const routes = [
 *   { path: '/', component: { template: '<home-page></home-page>' } },
 *   { path: '/bpjs', component: BpjsPage },
 *   { path: '/imunisasi', component: ImunisasiPage },
 *   // ... etc ...
 * ];
 * 
 * const router = new VueRouter({ routes: routes });
 * new Vue({ router: router, el: '#app' });
 * ```
 * 
 * KEUNTUNGAN:
 * ✅ Currency defined ONCE
 * ✅ BpjsPage uses currency component (tidak perlu copy-paste)
 * ✅ ImunisasiPage uses currency component (tidak perlu copy-paste)
 * ✅ Mudah update currency component - update di satu tempat
 * ✅ Semua pages load dalam 1 SPA
 * 
 * =====================================================
 * 
 * SEBELUM (REDUNDANT):
 * 
 * bpjs.js:
 * Vue.component('currency', { ...FULL DEFINITION... });
 * new Vue({ el: "#app", data: { pbi: 0, ... }, ... });
 * 
 * imunisasi.js:
 * Vue.component('currency', { ...SAME DEFINITION... }); ← DUPLICATE!
 * new Vue({ el: "#app", data: { bcg: 0, ... }, ... });
 * 
 * konversi.js:
 * Vue.component('currency', { ...SAME DEFINITION... }); ← DUPLICATE!
 * new Vue({ el: "#app", data: { komoditas: "", ... }, ... });
 * 
 * listrik.js:
 * Vue.component('currency', { ...SAME DEFINITION... }); ← DUPLICATE!
 * new Vue({ el: "#app", data: { daya: 0, ... }, ... });
 * 
 * makanan.js:
 * Vue.component('currency', { ...SAME DEFINITION... }); ← DUPLICATE!
 * new Vue({ el: "#app", data: { harga: 0, ... }, ... });
 * 
 * TOTAL CURRENCY DEFINITIONS: 5+ (berbeda-beda di setiap file)
 * PROBLEM: Jika ada bug di currency, harus fix di 5+ tempat!
 * 
 * =====================================================
 * 
 * SESUDAH (NO REDUNDANCY):
 * 
 * components/Currency.js:
 * Vue.component('currency', { ...DEFINITION... });
 * ← HANYA 1 DEFINITION, SHARED OLEH SEMUA PAGES
 * 
 * components/BpjsPage.js:
 * var BpjsPage = {
 *   template: `<... uses <currency> component ...>`,
 *   data: { pbi: 0, ... }
 * };
 * ← Tidak perlu definisikan currency, cukup gunakan di template
 * 
 * components/ImunisasiPage.js:
 * var ImunisasiPage = {
 *   template: `<... uses <currency> component ...>`,
 *   data: { bcg: 0, ... }
 * };
 * ← Tidak perlu definisikan currency, cukup gunakan di template
 * 
 * TOTAL CURRENCY DEFINITIONS: 1 (shared)
 * BENEFIT: Jika ada bug, fix hanya di 1 tempat, semua pages terupdate!
 * 
 * =====================================================
 * 
 * RINGKASAN:
 * 
 * BEFORE:  5+ files dengan currency component yg sama → REDUNDANT
 * AFTER:   1 file dengan currency component, dipakai oleh 5+ pages → EFFICIENT
 * 
 * =====================================================
 */

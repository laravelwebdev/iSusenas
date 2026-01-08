/**
 * =============================================
 * iSusenas Vue SPA - CONVERSION SUMMARY
 * =============================================
 * 
 * SEBELUM (Old Structure - Redundant):
 * ├── index.html (standalone)
 * ├── index.js (standalone)
 * ├── bpjs.html + bpjs.js
 * ├── imunisasi.html + imunisasi.js
 * ├── konversi.html + konversi.js
 * ├── listrik.html + listrik.js
 * ├── makanan.html + makanan.js
 * ├── ...etc...
 * 
 * MASALAH:
 * ❌ Vue.component('currency', {...}) diulang di SETIAP FILE (redundant)
 * ❌ Setiap halaman load script terpisah (boros memory)
 * ❌ Tidak ada centralized state management
 * ❌ Sulit di-maintain
 * ❌ Tidak scalable
 * 
 * =====================================================
 * 
 * SESUDAH (New SPA Structure - No Redundancy):
 * ├── index_spa.html (single entry point)
 * ├── app.js (Vue Router + Main instance)
 * ├── components/
 * │   ├── Currency.js (shared, defined ONCE)
 * │   ├── Home.js (home page)
 * │   ├── BpjsPage.js
 * │   ├── ImunisasiPage.js
 * │   ├── KonversiPage.js
 * │   ├── ListrikPage.js
 * │   ├── MakananPage.js
 * │   ├── KesehatanPage.js
 * │   ├── KonsistensiPage.js
 * │   ├── OopPage.js
 * │   ├── PbbPage.js
 * │   ├── PdamPage.js
 * │   ├── PphPage.js
 * │   ├── R502Page.js
 * │   ├── SekolahPage.js
 * │   └── StnkPage.js
 * 
 * KEUNTUNGAN:
 * ✅ Currency component hanya ada 1 copy (no redundancy)
 * ✅ Semua halaman load dalam 1 HTML (fast)
 * ✅ Vue Router menangani client-side navigation
 * ✅ Mudah maintenance & scale
 * ✅ Centralized component management
 * ✅ Behavior tetap sama seperti sebelumnya
 * ✅ No need to reload page saat navigate
 * 
 * =====================================================
 * 
 * IMPLEMENTASI:
 * 
 * 1. index_spa.html
 *    - Load Vue & Vue Router dari CDN
 *    - Load Currency.js (shared component)
 *    - Load semua page components
 *    - Load app.js (main app initialization)
 * 
 * 2. components/Currency.js
 *    - Defined ONCE globally
 *    - Used by multiple pages (BPJS, Listrik, dll)
 *    - No duplicate definition
 * 
 * 3. app.js
 *    - Setup Vue Router dengan routes ke semua pages
 *    - Create Vue instance dengan router
 *    - Handle navigation
 * 
 * 4. components/*.js
 *    - Setiap page adalah component object
 *    - Template, data, methods, computed
 *    - Same logic seperti sebelumnya
 * 
 * =====================================================
 * 
 * CARA MENGGUNAKAN:
 * 
 * Desktop/Laptop:
 *   1. Buka index_spa.html di browser
 *   2. Klik card untuk navigate
 *   3. URL berubah jadi #/pagename
 * 
 * Server (PHP/Apache):
 *   1. Copy semua file ke server
 *   2. Buka http://server/iSusenas/index_spa.html
 *   3. Gunakan seperti normal
 * 
 * =====================================================
 * 
 * MIGRATION DARI OLD KE NEW:
 * 
 * Old files tetap ada (backward compatibility), tapi yang baru adalah:
 * - index_spa.html (USE THIS)
 * - app.js
 * - components/ folder (NEW)
 * 
 * Untuk mengganti, cukup ganti link dari index.html ke index_spa.html
 * 
 * =====================================================
 * 
 * NEXT STEPS:
 * 
 * 1. Isi template untuk halaman yang masih placeholder:
 *    - Makanan
 *    - Listrik
 *    - PDAM
 *    - Kesehatan
 *    - Konsistensi
 *    - Sekolah
 *    - PBB
 *    - PPH
 *    - R502
 *    - STNK
 *    - OOP
 * 
 * 2. Copy template dari file HTML original yang sesuai
 * 
 * 3. Copy data/methods/computed dari file JS original
 * 
 * 4. Test setiap page untuk ensure behavior sama
 * 
 * =====================================================
 */

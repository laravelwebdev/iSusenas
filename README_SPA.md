# iSusenas Vue SPA - Dokumentasi

## Struktur Proyek

Proyek ini telah dikonversi dari multiple HTML files dengan inline Vue instances menjadi Single Page Application (SPA) yang modern dan tidak redundant.

### Perubahan Utama

#### Sebelum (Multiple Files)
- Setiap halaman punya file `.html` dan `.js` terpisah
- `Vue.component('currency')` diulang di setiap file `.js` (redundant)
- Tidak ada routing, setiap halaman adalah file terpisah
- Sulit untuk memaintain karena duplikasi kode

#### Sesudah (Vue SPA)
- 1 file HTML utama: `index_spa.html` sebagai entry point
- Struktur folder `components/` untuk semua page components
- `Currency` component hanya didefinisikan sekali di `components/Currency.js`
- Vue Router menangani semua routing di client-side
- Tidak ada redundansi kode

### File-File Penting

1. **index_spa.html** - Entry point utama
   - Load semua dependencies (Vue, Vue Router)
   - Load semua components
   - Definisikan root app element

2. **app.js** - Main application file
   - Setup Vue Router dengan semua routes
   - Create Vue instance dengan router

3. **components/Currency.js** - Shared component
   - Currency input component yang digunakan di multiple pages
   - Defined ONCE, tidak redundant

4. **components/*.js** - Page components
   - `Home.js` - Halaman utama dengan card navigation
   - `BpjsPage.js` - Halaman BPJS dengan logic calculation
   - `ImunisasiPage.js` - Halaman Imunisasi
   - `KonversiPage.js` - Halaman Konversi Satuan
   - Lainnya sebagai placeholder siap untuk dikembangkan

### Cara Menggunakan

1. Buka `index_spa.html` di browser
2. Aplikasi akan meload dengan halaman Home menampilkan semua menu
3. Klik card untuk navigate ke page yang diinginkan
4. URL akan berubah dengan format `#/pagename` (hash-based routing)

### Menambah Page Baru

1. Buat file baru di `components/` dengan nama `PageNamePage.js`
2. Definisikan component object dengan template dan logic
3. Import file di `index_spa.html`
4. Tambahkan route di `app.js`

Contoh:
```javascript
// components/NewPage.js
var NewPage = {
  template: `<div>Konten halaman</div>`,
  data() { return {}; },
  methods: {},
  computed: {}
};
```

### Keuntungan Struktur Baru

✅ **No Redundancy** - Currency component hanya ada 1 copy
✅ **Better Organization** - Components terstruktur rapi di folder
✅ **Easy Maintenance** - Update logic hanya di 1 tempat
✅ **Scalable** - Mudah menambah halaman baru
✅ **Same Behavior** - Semua halaman bekerja persis sama seperti sebelumnya
✅ **Faster Loading** - Semua HTML di 1 file, tidak perlu reload

### Browser Support

- Chrome, Firefox, Safari, Edge (Modern browsers)
- Menggunakan Vue 2 CDN
- Memerlukan JavaScript enabled

## Catatan Penting

- Folder `components/Pages.js` berisi semua page components dalam satu file (opsional, bisa dipecah)
- Beberapa pages masih placeholder (Makanan, Listrik, PDAM, dll) - tinggal isi templatenya
- Style CSS tetap menggunakan `style.css` yang sama

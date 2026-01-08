# Quick Start Guide - iSusenas Vue SPA

## 🚀 Memulai Cepat

### Langkah 1: Buka File
```
Buka file ini di browser:
  → index_spa.html
```

### Langkah 2: Gunakan Aplikasi
```
1. Anda akan melihat halaman Home dengan menu grid
2. Klik salah satu kartu untuk navigate ke halaman itu
3. URL akan berubah (contoh: #/bpjs, #/imunisasi, dll)
4. Tekan tombol back untuk kembali ke home
```

## 📁 Struktur File

```
iSusenas/
├── index_spa.html          ← BUKA INI (entry point)
├── app.js                  ← Router & main app config
├── style.css               ← Styling (shared)
├── vue.min.js              ← Vue library (jika offline)
├── components/
│   ├── Currency.js         ← Shared component (1x saja!)
│   ├── Home.js             ← Home page
│   ├── BpjsPage.js         ← BPJS calculator
│   ├── ImunisasiPage.js    ← Imunisasi calculator
│   ├── KonversiPage.js     ← Unit converter
│   └── ...PagePage.js      ← Other pages
├── README_SPA.md           ← Full documentation
├── CONVERSION_NOTES.md     ← Why we changed
└── BEFORE_AFTER_COMPARISON.md ← Before vs after
```

## 🎯 Key Points

### ✅ Sudah Done
- Currency component defined ONCE (tidak redundant)
- BpjsPage fully implemented
- ImunisasiPage fully implemented  
- KonversiPage fully implemented
- Home page dengan navigation
- Vue Router setup

### 🔄 In Progress / TODO
Halaman yang masih placeholder (tinggal isi template):
- Makanan
- Listrik
- PDAM
- Kesehatan
- Konsistensi
- Sekolah
- PBB
- PPH
- R502
- STNK
- OOP

## 📝 Cara Mengisi Placeholder Page

1. Buka file original yang sesuai (contoh: makanan.html + makanan.js)
2. Copy template HTML dari makanan.html → ke MakananPage.js di section `template:`
3. Copy data/methods/computed dari makanan.js → ke MakananPage.js
4. Pastikan jangan copy Vue.component('currency',...) atau new Vue({...})
5. Test di browser

Contoh (untuk Makanan):
```javascript
// components/MakananPage.js
var MakananPage = {
  template: `
    <div class="container">
      <form class="vue-form">
        <!-- Copy template dari makanan.html di sini -->
      </form>
    </div>
  `,
  data() {
    return {
      // Copy data dari makanan.js
    };
  },
  methods: {
    // Copy methods dari makanan.js
  },
  computed: {
    // Copy computed dari makanan.js
  }
};
```

## 🌐 Server Deployment

### Option 1: Static Files (Recommended)
```
1. Copy semua file ke server
2. Buka: http://yourserver/iSusenas/index_spa.html
3. Done! (Tidak perlu PHP)
```

### Option 2: With PHP Server
```
1. Copy ke folder /var/www/html/iSusenas/
2. Start PHP server: php -S localhost:8000
3. Buka: http://localhost:8000/iSusenas/index_spa.html
```

## 🐛 Troubleshooting

**Masalah: Page tidak load**
- Pastikan index_spa.html dibuka (bukan index.html)
- Check browser console (F12) untuk errors
- Pastikan semua file di folder yang sama

**Masalah: Currency component tidak bekerja**
- Pastikan Currency.js di-load SEBELUM pages
- Check index_spa.html load order

**Masalah: Navigation tidak bekerja**
- Pastikan app.js load paling akhir
- Check console untuk route errors

## 📚 Dokumentasi Lengkap

Lihat file:
- `README_SPA.md` - Full documentation
- `CONVERSION_NOTES.md` - Technical details
- `BEFORE_AFTER_COMPARISON.md` - Why structure changed

## ✨ Benefits

- ✅ No redundancy (Currency component 1x)
- ✅ Faster loading (single page)
- ✅ Easy to maintain (components organized)
- ✅ Scalable (easy to add new pages)
- ✅ Same behavior (no logic changes)

---

**Happy coding! 🎉**

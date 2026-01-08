# Vue SPA Architecture Diagram

## 🏗️ Application Flow

```
┌─────────────────────────────────────────────────────────────┐
│                     index_spa.html                           │
│                    (Entry Point)                             │
│  - Load Vue.js                                               │
│  - Load Vue Router                                           │
│  - Load all components                                       │
│  - Render <div id="app"><router-view></router-view></div>   │
└─────────────────────────────────────────────────────────────┘
                             ↓
┌─────────────────────────────────────────────────────────────┐
│                        app.js                                │
│              (Router Configuration)                          │
│                                                              │
│  const routes = [                                            │
│    { path: '/',          component: Home }                  │
│    { path: '/bpjs',      component: BpjsPage }              │
│    { path: '/imunisasi',  component: ImunisasiPage }        │
│    { path: '/konversi',   component: KonversiPage }         │
│    ...etc                                                    │
│  ]                                                           │
│                                                              │
│  new Vue({ router: router, el: '#app' })                    │
└─────────────────────────────────────────────────────────────┘
                             ↓
        ┌────────────────────┴────────────────────┐
        ↓                                          ↓
┌──────────────────┐              ┌──────────────────────────┐
│  Shared Module   │              │  Page Components         │
├──────────────────┤              ├──────────────────────────┤
│ Currency.js      │              │ Home.js                  │
│ (Defined ONCE)   │              │ ├─ Template             │
│                  │              │ ├─ Data                 │
│ Vue.component    │              │ ├─ Methods              │
│  ('currency', {  │              │ └─ Computed             │
│   props, data,   │              │                          │
│   computed, ...  │              │ BpjsPage.js             │
│  })              │              │ ├─ Template (uses <cur.>)│
│                  │              │ ├─ Data                 │
└──────────────────┘              │ ├─ Methods              │
        ↑                          │ └─ Computed             │
        │                          │                          │
        └──────────────────────────┼──────────────────────────┤
                 USED BY ALL       │                          │
                 PAGES             │ ImunisasiPage.js        │
                                   │ ├─ Template (uses <cur.>)│
                                   │ ├─ Data                 │
                                   │ ├─ Methods              │
                                   │ └─ Computed             │
                                   │                          │
                                   │ KonversiPage.js         │
                                   │ ├─ Template             │
                                   │ ├─ Data                 │
                                   │ ├─ Methods              │
                                   │ └─ Computed             │
                                   │                          │
                                   │ ...More pages...        │
                                   └──────────────────────────┘
```

## 📊 Component Hierarchy

```
App
├── <router-view>
│   └── Current Page Component
│       ├── Home (/)
│       ├── BpjsPage (/bpjs)
│       │   └── Uses <currency> component
│       ├── ImunisasiPage (/imunisasi)
│       │   └── Uses <currency> component
│       ├── KonversiPage (/konversi)
│       │   └── No <currency> needed
│       └── Other pages...
```

## 🔄 User Interaction Flow

```
┌──────────────────┐
│  User Opens      │
│  index_spa.html  │
└────────┬─────────┘
         ↓
┌──────────────────┐
│   App Loads      │
│   - Vue instance │
│   - Vue Router   │
│   - Components   │
└────────┬─────────┘
         ↓
┌──────────────────┐
│  Home Page       │
│  (route: /)      │
│  Shows cards     │
└────────┬─────────┘
         ↓
    User clicks
      card
         ↓
┌──────────────────┐
│  Router changes  │
│  URL to #/xxx    │
└────────┬─────────┘
         ↓
┌──────────────────┐
│  <router-view>   │
│  renders new     │
│  page component  │
└────────┬─────────┘
         ↓
┌──────────────────┐
│  Page displayed  │
│  (BPJS/Imun/etc) │
└──────────────────┘
```

## 🎯 No Page Reload

```
Traditional Multi-Page:
├── Open bpjs.html
├── [RELOAD] → Load entire page
├── Click link
├── [RELOAD] → Load imunisasi.html
├── [RELOAD] → Load entire page
└── ...MANY RELOADS...

Vue SPA:
├── Open index_spa.html
├── [LOAD ONCE] → All resources loaded
├── Click card
├── [NO RELOAD] → Just change <router-view> content
├── Click card
├── [NO RELOAD] → Just change <router-view> content
└── ...INSTANT SWITCHING...
```

## 💾 File Size Comparison

```
BEFORE (Multiple Files):
├── index.html        ~50KB
├── bpjs.html         ~30KB + bpjs.js (5KB)
├── imunisasi.html    ~25KB + imunisasi.js (3KB)
├── konversi.html     ~20KB + konversi.js (2KB)
├── listrik.html      ~25KB + listrik.js (3KB)
├── makanan.html      ~35KB + makanan.js (8KB)
├── kesehatan.html    ~30KB + kesehatan.js (3KB)
├── ...and more
└── TOTAL HTML LOAD: ~300KB (when page loaded)

AFTER (SPA):
├── index_spa.html         ~60KB (contains all HTML)
├── app.js                 ~2KB
├── components/Currency.js ~2KB
├── components/BpjsPage.js ~3KB
├── components/ImunisasiPage.js ~2KB
├── ...and more
├── TOTAL INITIAL LOAD: ~65KB
├── TOTAL AFTER LOAD: ~70KB (with cache)
└── benefit: Can reuse for all pages!
```

## 🔗 Routing Configuration

```javascript
// app.js
const routes = [
  {
    path: '/',
    component: { template: '<home-page></home-page>' }
  },
  {
    path: '/bpjs',
    component: BpjsPage
  },
  {
    path: '/imunisasi',
    component: ImunisasiPage
  },
  // ... each page gets a route
];

const router = new VueRouter({
  mode: 'hash',  // Uses URL hash (#/page)
  routes: routes
});

new Vue({
  router: router,
  el: '#app'
});
```

## 📱 URL Examples

```
Home:          http://site.com/iSusenas/index_spa.html#/
BPJS:          http://site.com/iSusenas/index_spa.html#/bpjs
Imunisasi:     http://site.com/iSusenas/index_spa.html#/imunisasi
Konversi:      http://site.com/iSusenas/index_spa.html#/konversi
Listrik:       http://site.com/iSusenas/index_spa.html#/listrik
PDAM:          http://site.com/iSusenas/index_spa.html#/pdam

Note: URLs use hash (#) because we're not using server routing
```

## 🔐 No Redundancy = Maintenance Win

```
OLD WAY (5+ Files):
If bug in <currency> component:
  ├── Fix in bpjs.js ✓
  ├── Fix in imunisasi.js ✓
  ├── Fix in konversi.js ✓
  ├── Fix in listrik.js ✓
  ├── Fix in makanan.js ✓
  ├── Fix in kesehatan.js ✓
  └── ...REPEAT IN EVERY FILE... 😫

NEW WAY (1 File):
If bug in <currency> component:
  ├── Fix in components/Currency.js ✓
  └── DONE! All pages updated! 😊
```

---

**This SPA is optimized for:**
- No redundancy
- Easy maintenance  
- Fast performance
- Simple scalability
- Clear organization

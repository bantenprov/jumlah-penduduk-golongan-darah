# jumlah-penduduk-golongan-darah

[![Join the chat at https://gitter.im/jumlah-penduduk-golongan-darah/Lobby](https://badges.gitter.im/jumlah-penduduk-golongan-darah/Lobby.svg)](https://gitter.im/jumlah-penduduk-golongan-darah/Lobby?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/bantenprov/jumlah-penduduk-golongan-darah/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/jumlah-penduduk-golongan-darah/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/bantenprov/jumlah-penduduk-golongan-darah/badges/build.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/jumlah-penduduk-golongan-darah/build-status/master)
[![Latest Stable Version](https://poser.pugx.org/bantenprov/jumlah-penduduk-golongan-darah/v/stable)](https://packagist.org/packages/bantenprov/jumlah-penduduk-golongan-darah)
[![Total Downloads](https://poser.pugx.org/bantenprov/jumlah-penduduk-golongan-darah/downloads)](https://packagist.org/packages/bantenprov/jumlah-penduduk-golongan-darah)
[![Latest Unstable Version](https://poser.pugx.org/bantenprov/jumlah-penduduk-golongan-darah/v/unstable)](https://packagist.org/packages/bantenprov/jumlah-penduduk-golongan-darah)
[![License](https://poser.pugx.org/bantenprov/jumlah-penduduk-golongan-darah/license)](https://packagist.org/packages/bantenprov/jumlah-penduduk-golongan-darah)
[![Monthly Downloads](https://poser.pugx.org/bantenprov/jumlah-penduduk-golongan-darah/d/monthly)](https://packagist.org/packages/bantenprov/jumlah-penduduk-golongan-darah)
[![Daily Downloads](https://poser.pugx.org/bantenprov/jumlah-penduduk-golongan-darah/d/daily)](https://packagist.org/packages/bantenprov/jumlah-penduduk-golongan-darah)

Jumlah penduduk berdasarkan golongan darah per desa/kelurahan

### install via composer

- Development snapshot
```bash
$ composer require bantenprov/indikator-kemiskinan-provinsi:dev-master
```
- Latest release:


### download via github

~~~bash
$ git clone https://github.com/bantenprov/indikator-kemiskinan-provinsi.git
~~~


#### Edit `config/app.php` :
```php

'providers' => [

    /*
    * Laravel Framework Service Providers...
    */
    Illuminate\Auth\AuthServiceProvider::class,
    Illuminate\Broadcasting\BroadcastServiceProvider::class,
    Illuminate\Bus\BusServiceProvider::class,
    Illuminate\Cache\CacheServiceProvider::class,
    Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    Illuminate\Cookie\CookieServiceProvider::class,
    //....
    Bantenprov\IkProvinsi\IkProvinsiServiceProvider::class,

```

#### Tambahkan route di dalam route : `resources/assets/js/routes.js` :

```javascript
path: '/dashboard',
component: layout('Default'),
children: [
  {
    path: '/dashboard',
    components: {
      main: resolve => require(['./components/views/DashboardHome.vue'], resolve),
      navbar: resolve => require(['./components/Navbar.vue'], resolve),
      sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
    },
    meta: {
      title: "Dashboard"
    }
  },
  //== ...
  {
    path: '/dashboard/ik-provinsi',
    components: {
      main: resolve => require(['./components/views/bantenprov/ik-provinsi/DashboardIkProvinsi.vue'], resolve),
      navbar: resolve => require(['./components/Navbar.vue'], resolve),
      sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
    },
    meta: {
      title: "IK Provinsi"
    }
  }
```

```javascript
{
path: '/admin',
redirect: '/admin/dashboard',
component: resolve => require(['./AdminLayout.vue'], resolve),
children: [
//== ...
    {
      path: '/admin/dashboard/ik-provinsi',
      components: {
        main: resolve => require(['./components/bantenprov/ik-provinsi/IkProvinsiAdmin.show.vue'], resolve),
        navbar: resolve => require(['./components/Navbar.vue'], resolve),
        sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
      },
      meta: {
        title: "IK Provinsi"
      }
    }
 //== ...   
  ]
},

```

#### Edit menu `resources/assets/js/menu.js`

```javascript
{
  name: 'Dashboard',
  icon: 'fa fa-dashboard',
  childType: 'collapse',
  childItem: [
        {
          name: 'Dashboard',
          link: '/dashboard',
          icon: 'fa fa-angle-double-right'
        },
        {
          name: 'Entity',
          link: '/dashboard/entity',
          icon: 'fa fa-angle-double-right'
        },
        //== ...
        {
          name: 'IK Provinsi',
          link: '/dashboard/ik-provinsi',
          icon: 'fa fa-angle-double-right'
        }
  ]
},
```


#### Tambahkan components `resources/assets/js/components.js` :

```javascript

import IkProvinsi from './components/bantenprov/ik-provinsi/IkProvinsi.chart.vue';
Vue.component('echarts-ik-provinsi', IkProvinsi);

import IkProvinsiKota from './components/bantenprov/ik-provinsi/IkProvinsiKota.chart.vue';
Vue.component('echarts-ik-provinsi-kota', IkProvinsiKota);

import IkProvinsiTahun from './components/bantenprov/ik-provinsi/IkProvinsiTahun.chart.vue';
Vue.component('echarts-ik-provinsi-tahun', IkProvinsiTahun);

import IkProvinsiAdminShow from './components/bantenprov/ik-provinsi/IkProvinsiAdmin.show.vue';
Vue.component('admin-view-ik-provinsi-tahun', IkProvinsiAdminShow);

//== Echarts pdrb

import IkProvinsiBar01 from './components/views/bantenprov/ik-provinsi/IkProvinsiBar01.vue';
Vue.component('ik-provinsi-bar-01', IkProvinsiBar01);

import IkProvinsiBar02 from './components/views/bantenprov/ik-provinsi/IkProvinsiBar02.vue';
Vue.component('ik-provinsi-bar-02', IkProvinsiBar02);

//== mini bar charts
import IkProvinsiBar03 from './components/views/bantenprov/ik-provinsi/IkProvinsiBar03.vue';
Vue.component('ik-provinsi-bar-03', IkProvinsiBar03);

import IkProvinsiPie01 from './components/views/bantenprov/ik-provinsi/IkProvinsiPie01.vue';
Vue.component('ik-provinsi-pie-01', IkProvinsiPie01);

import IkProvinsiPie02 from './components/views/bantenprov/ik-provinsi/IkProvinsiPie02.vue';
Vue.component('ik-provinsi-pie-02', IkProvinsiPie02);

//== mini pie charts
import IkProvinsiPie03 from './components/views/bantenprov/ik-provinsi/IkProvinsiPie03.vue';
Vue.component('ik-provinsi-pie-03', IkProvinsiPie03);
```

#### Untuk publish component vue :

```bash
$ php artisan vendor:publish --tag=ik-assets
$ php artisan vendor:publish --tag=ik-public
```


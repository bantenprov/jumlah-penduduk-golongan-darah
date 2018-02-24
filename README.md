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
$ composer require bantenprov/jumlah-penduduk-golongan-darah:dev-master
```
- Latest release:


### download via github

~~~bash
$ git clone https://github.com/bantenprov/jumlah-penduduk-golongan-darah.git
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
    Bantenprov\JPGolonganDarah\JPGolonganDarahServiceProvider::class,

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
    path: '/dashboard/jumlah-penduduk-golongan-darah',
    components: {
      main: resolve => require(['./components/views/bantenprov/jumlah-penduduk-golongan-darah/DashboardJPGolonganDarah.vue'], resolve),
      navbar: resolve => require(['./components/Navbar.vue'], resolve),
      sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
    },
    meta: {
      title: "Jumlah Penduduk Golongan Darah"
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
      path: '/admin/dashboard/jumlah-penduduk-golongan-darah',
      components: {
        main: resolve => require(['./components/bantenprov/jumlah-penduduk-golongan-darah/JPGolonganDarahAdmin.show.vue'], resolve),
        navbar: resolve => require(['./components/Navbar.vue'], resolve),
        sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
      },
      meta: {
        title: "Jumlah Penduduk Golongan Darah"
      }
    },
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
          name: 'Jumlah Penduduk Golongan Darah',
          link: '/admin/dashboard/jumlah-penduduk-golongan-darah',
          icon: 'fa fa-angle-right'
        }
  ]
},
```


#### Tambahkan components `resources/assets/js/components.js` :

```javascript

//== Jumlah Penduduk Golongan Darah
import JPGolonganDarah from './components/bantenprov/jumlah-penduduk-golongan-darah/JPGolonganDarah.chart.vue';
Vue.component('echarts-jumlah-penduduk-golongan-darah', JPGolonganDarah);

import JPGolonganDarahBar01 from './components/views/bantenprov/jumlah-penduduk-golongan-darah/JPGolonganDarahBar01.vue';
Vue.component('jumlah-penduduk-golongan-darah-bar-01', JPGolonganDarahBar01);

import JPGolonganDarahBar02 from './components/views/bantenprov/jumlah-penduduk-golongan-darah/JPGolonganDarahBar02.vue';
Vue.component('jumlah-penduduk-golongan-darah-bar-02', JPGolonganDarahBar02);

import JPGolonganDarahBar03 from './components/views/bantenprov/jumlah-penduduk-golongan-darah/JPGolonganDarahBar03.vue';
Vue.component('jumlah-penduduk-golongan-darah-bar-03', JPGolonganDarahBar03);

import JPGolonganDarahPie01 from './components/views/bantenprov/jumlah-penduduk-golongan-darah/JPGolonganDarahPie01.vue';
Vue.component('jumlah-penduduk-golongan-darah-pie-01', JPGolonganDarahPie01);

import JPGolonganDarahPie02 from './components/views/bantenprov/jumlah-penduduk-golongan-darah/JPGolonganDarahPie02.vue';
Vue.component('jumlah-penduduk-golongan-darah-pie-02', JPGolonganDarahPie02);

import JPGolonganDarahPie03 from './components/views/bantenprov/jumlah-penduduk-golongan-darah/JPGolonganDarahPie03.vue';
Vue.component('jumlah-penduduk-golongan-darah-pie-03', JPGolonganDarahPie03);
```

#### Untuk publish component vue :

```bash
$ php artisan vendor:publish --tag=jumlah-penduduk-golongan-darah-assets
$ php artisan vendor:publish --tag=jumlah-penduduk-golongan-darah-public
```


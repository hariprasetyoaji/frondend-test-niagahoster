<template>
  <div class="wrapper">
    <div class="section hero px-3 py-3 pt-md-5 pb-md-5 border-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h1 class="hero-title mb-3">PHP Hosting</h1>
            <h2 class="hero-desc mb-4">
              Cepat, handal, penuh dengan modul PHP yang Anda
              butuhkan
            </h2>
            <ul class="hero-list list-icon">
              <li>
                <i class="fa fa-check-circle" aria-hidden="true"></i>
                Solusi PHP untuk performa query yang lebih
                cepat.
              </li>
              <li>
                <i class="fa fa-check-circle" aria-hidden="true"></i>
                Konsumsi memori yang lebih rendah.
              </li>
              <li>
                <i class="fa fa-check-circle" aria-hidden="true"></i>
                Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP
                7
              </li>
              <li>
                <i class="fa fa-check-circle" aria-hidden="true"></i>
                Fitur enkripsi IonCube dan Zend Guard Loaders
              </li>
            </ul>
          </div>
          <div class="col-lg-6">
            <img class="img-fluid" src="/svg/banner-01.svg" />
          </div>
        </div>
      </div>
    </div>
    <div class="section hosting px-3 py-3 pt-md-5">
      <div class="container-sm">
        <div class="row">
          <div class="col-lg-4 d-flex align-items-center justify-content-center flex-column">
            <img class="img-fluid img-hosting mb-3" src="/svg/hosting_zendguard.svg" />
            <p class="p-hosting">PHP Zend Guard Loader</p>
          </div>
          <div class="col-lg-4 d-flex align-items-center justify-content-center flex-column">
            <img class="img-fluid img-hosting mb-3" src="/svg/hosting_composer.svg" />
            <p class="p-hosting">PHP Composer</p>
          </div>
          <div class="col-lg-4 d-flex align-items-center justify-content-center flex-column">
            <img class="img-fluid img-hosting mb-3" src="/svg/hosting_ioncube.svg" />
            <p class="p-hosting">PHP ionCube Loader</p>
          </div>
        </div>
      </div>
    </div>
    <div class="section packages px-3 py-3 pt-md-3 pb-md-3">
      <div class="container">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-5 mx-auto text-center">
          <h2 class="header-title">Paket Hosting Singapura yang Tepat</h2>
          <p class="lead">Diskon 40% + Domain dan SSL Gratis untuk Anda</p>
        </div>
        <div class="card-deck mb-3 text-center">
          <div
            class="card mb-4"
            v-for="(price, index) in prices"
            :key="price.id"
            v-bind:class="{ 'card--best-seller': price.id==3 }"
          >
            <div class="ribbon ribbon-top-left" v-if="price.id==3">
              <span>BEST SELLER!</span>
            </div>
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">{{ price.title }}</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title border-bottom py-2 px-4 mb-0">
                <div class="card-price card-price--sm font1-light mb-2">Rp. {{ price.price }}</div>
                <div class="card-price">
                  <span class="card-price--cur">Rp</span>
                  <span class="card-price--val">{{ price.promo.split(".")[0] }}</span>
                  <span class="card-price--cent">
                    .{{ price.promo.split(".")[1] }}
                    <small class="font1-light text-muted">/ bln</small>
                  </span>
                </div>
              </h1>
              <div class="pricing-card-user border-bottom py-2 px-4">
                <span class="text-bold">{{ price.registered }}</span>
                Pengguna Terdaftar
              </div>
              <ul class="list-unstyled pricing-card-list mt-2 mb-4 py-2 px-4">
                <li>
                  <span class="text-bold">{{ price.power }} RESOURCE POWER</span>
                </li>
                <li>
                  <span class="text-bold">{{ price.disk_space }}</span>
                  Disk Space
                </li>
                <li>
                  <span class="text-bold">{{ price.bandwidth }}</span>
                  Bandwidth
                </li>
                <li v-if="price.pop3_email">
                  <span class="text-bold">{{ price.pop3_email }}</span>
                  POP3 Email
                </li>
                <li>
                  <span class="text-bold">{{ price.databases }}</span>
                  Databases
                </li>
                <li v-if="price.id == 1">
                  <span class="text-bold">{{ price.addon_domain }}</span>
                  Domain
                </li>
                <li v-else>
                  <span class="text-bold">{{ price.addon_domain }}</span>
                  Addon Domain
                </li>
                <li v-if="price.backup != 'Instant'">
                  <span class="text-bold">{{ price.backup }}</span>
                  Backup & Restore
                </li>
                <li v-else>
                  <span class="text-bold">{{ price.backup }}</span>
                  Backup
                </li>
                <li v-if="price.free_domain">
                  <span class="text-bold">{{ price.free_domain }}</span>
                  Selamanya
                </li>
                <li>
                  <span class="text-bold">{{ price.free_ssl }} SSL</span>
                  Gratis Selamanya
                </li>
                <li v-if="price.name_server">
                  <span class="text-bold">{{ price.name_server }}</span>
                  Name Server
                </li>
                <li v-if="price.support_priority">
                  <span class="text-bold">{{ price.support_priority }}</span>
                  Layanan Support
                  <div class="packages--support-stars">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>
                </li>
                <li v-if="price.mail_protection">
                  <span class="text-bold">{{ price.mail_protection }}</span>
                  Mail Protection
                </li>
              </ul>
              <button v-if="price.id==3" type="button" class="btn btn-primary">Pilih Sekarang</button>
              <button
                v-else-if="price.id==4"
                type="button"
                class="btn btn-outline-secondary"
              >Diskon 40%</button>
              <button v-else type="button" class="btn btn-outline-secondary">Pilih Sekarang</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section specs px-3 py-3 pt-md-2">
      <div class="container">
        <div class="pt-md-2 pb-md-5 mx-auto text-center">
          <h2 class="header-title header-title--light">Powerful dengan Limit PHP yang lebih Besar</h2>
        </div>
        <div class="row mb-4 pb-4">
          <div class="col-12 col-md-6">
            <ul class="list-group">
              <li class="list-group-item">
                <i class="fa fa-check-circle" aria-hidden="true"></i>
                max execution time 300s
              </li>
              <li class="list-group-item list-group-item-secondary">
                <i class="fa fa-check-circle" aria-hidden="true"></i>
                max execution time 300s
              </li>
              <li class="list-group-item">
                <i class="fa fa-check-circle" aria-hidden="true"></i>
                php memory limit 1024 MB
              </li>
            </ul>
          </div>
          <div class="col-12 col-md-6">
            <ul class="list-group">
              <li class="list-group-item">
                <i class="fa fa-check-circle" aria-hidden="true"></i>
                post amx size 128 MB
              </li>
              <li class="list-group-item list-group-item-secondary">
                <i class="fa fa-check-circle" aria-hidden="true"></i>
                upload max filesize 128 MB
              </li>
              <li class="list-group-item">
                <i class="fa fa-check-circle" aria-hidden="true"></i>
                max input vars 2500
              </li>
            </ul>
          </div>
        </div>
        <hr class="line-small" />
      </div>
    </div>
    <div class="section included px-3 py-3">
      <div class="container">
        <div class="pt-md-2 pb-md-4 mx-auto text-center">
          <h2 class="header-title header-title--light">Semua Paket Hosting Sudah Termasuk</h2>
        </div>
        <div class="row pb-lg-5">
          <div
            class="col-lg-4 d-flex align-items-center justify-content-center flex-column text-center px-4"
          >
            <img class="img-fluid img-included mb-3" src="/svg/php_semua_versi.svg" />
            <h5 class="font1-bold">PHP Semua Versi</h5>
            <p class="p-hosting">
              Pulih mulai dari versi PHP 5.3 s/d PHP 7. Ubah
              sesuka Anda!
            </p>
          </div>
          <div
            class="col-lg-4 d-flex align-items-center justify-content-center flex-column text-center px-4"
          >
            <img class="img-fluid img-included mb-3" src="/svg/mysql.svg" />
            <h5 class="font1-bold">MySQL Versi 5.6</h5>
            <p class="p-hosting">
              Nikmati MySQL versi terbaru, tercepat dan kaya akan
              fitur.
            </p>
          </div>
          <div
            class="col-lg-4 d-flex align-items-center justify-content-center flex-column text-center px-4"
          >
            <img class="img-fluid img-included mb-3" src="/svg/cpanel.svg" />
            <h5 class="font1-bold">Panel Hosting cPanel</h5>
            <p class="p-hosting">
              Kelola website dengan panel canggih yang familiar di
              hati Anda.
            </p>
          </div>
        </div>
        <div class="row pb-lg-3">
          <div
            class="col-lg-4 d-flex align-items-center justify-content-center flex-column text-center px-4"
          >
            <img class="img-fluid img-included mb-3" src="/svg/garansi_uptime.svg" />
            <h5 class="font1-bold">Garansi Uptime 99.9%</h5>
            <p class="p-hosting">
              Data center yang mendukung kelangsungan website Anda
              24/7.
            </p>
          </div>
          <div
            class="col-lg-4 d-flex align-items-center justify-content-center flex-column text-center px-4"
          >
            <img class="img-fluid img-included mb-3" src="/svg/innodb.svg" />
            <h5 class="font1-bold">Database InnoDB Unlimited</h5>
            <p class="p-hosting">
              Jumlah dan ukuran database yang tumbuh sesuai
              kebutuhan Anda.
            </p>
          </div>
          <div
            class="col-lg-4 d-flex align-items-center justify-content-center flex-column text-center px-4"
          >
            <img class="img-fluid img-included mb-3" src="/svg/mysql_remote.svg" />
            <h5 class="font1-bold">Wildcard Remote MySQL</h5>
            <p class="p-hosting">
              mendukung s/d 25 max_user_connections dan 100
              max_connections.
            </p>
          </div>
        </div>
        <hr class="line-small" />
      </div>
    </div>
    <div class="section support px-3 pt-md-5 mb-5 border-bottom">
      <div class="container">
        <div class="pt-md-2 pb-md-4 mx-auto text-center">
          <h2 class="header-title header-title--light">Mendukung Penuh Framework Laravel</h2>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <h4
              class="support-desc mb-4"
            >Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP hosting murah kami mendukung penuh framework favorit Anda</h4>
            <ul class="list-unstyled support-list list-icon mb-4">
              <li>
                <i class="fa fa-check-circle" aria-hidden="true"></i>
                <span>
                  Install Laravel
                  <strong>1 klik</strong> dengan Softaculous Installer.
                </span>
              </li>
              <li>
                <i class="fa fa-check-circle" aria-hidden="true"></i>
                <span>
                  Mendukung ekstensi
                  <strong>PHP MCrypt, phar, mbstring, json,</strong> dan
                  <strong>fileinfo.</strong>
                </span>
              </li>
              <li>
                <i class="fa fa-check-circle" aria-hidden="true"></i>
                <span>
                  Tersedia
                  <strong>Composer</strong> dan
                  <strong>SSH</strong> untuk menginstal packages pilihan Anda.
                </span>
              </li>
            </ul>
            <div class="support-note mb-4">
              <p
                class="text-small"
              >Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</p>
            </div>
            <div class="btn btn-lg btn-primary">Pilih Hosting Anda</div>
          </div>
          <div class="col-lg-6">
            <img class="img-fluid" src="/svg/banner_support_laravel.svg" />
          </div>
        </div>
      </div>
    </div>
    <div class="section module px-3 py-3 pt-md-2 mb-5">
      <div class="container">
        <div class="pt-md-2 pb-md-5 mx-auto text-center">
          <h2
            class="header-title header-title--light"
          >Modul Lengkap Untuk Menjalankan Aplikasi PHP Anda.</h2>
        </div>
        <div class="row mb-3">
          <div class="col-6 col-lg-3">
            <ul class="list-unstyled">
              <li>IcePHP</li>
              <li>apc</li>
              <li>apcu</li>
              <li>apm</li>
              <li>ares</li>
              <li>bcmath</li>
              <li>bcompiler</li>
              <li>big_int</li>
              <li>bitset</li>
              <li>bloomy</li>
              <li>bz2_filter</li>
              <li>clamav</li>
              <li>coin_acceptor</li>
              <li>crack</li>
              <li>dba</li>
            </ul>
          </div>
          <div class="col-6 col-lg-3">
            <ul class="list-unstyled">
              <li>http</li>
              <li>huffman</li>
              <li>idn</li>
              <li>igbinary</li>
              <li>imagick</li>
              <li>imap</li>
              <li>inclued</li>
              <li>inotify</li>
              <li>interbase</li>
              <li>intl</li>
              <li>ioncube_loader</li>
              <li>ioncube_loader_4</li>
              <li>jsmin</li>
              <li>json</li>
              <li>ldap</li>
            </ul>
          </div>
          <div class="col-6 col-lg-3">
            <ul class="list-unstyled">
              <li>nd_pdo_mysql</li>
              <li>oauth</li>
              <li>oci8</li>
              <li>odbc</li>
              <li>opcache</li>
              <li>pdf</li>
              <li>pdo</li>
              <li>pdo_dblib</li>
              <li>pdo_firebird</li>
              <li>pdo_mysql</li>
              <li>pdo_odbc</li>
              <li>pdo_pgsql</li>
              <li>pdo_sqlite</li>
              <li>pgsql</li>
              <li>phalcon</li>
            </ul>
          </div>
          <div class="col-6 col-lg-3">
            <ul class="list-unstyled">
              <li>stats</li>
              <li>stem</li>
              <li>stomp</li>
              <li>suhosin</li>
              <li>sybase_ct</li>
              <li>sysvmsg</li>
              <li>sysvsem</li>
              <li>sysvshm</li>
              <li>tidy</li>
              <li>timezonedb</li>
              <li>trader</li>
              <li>translit</li>
              <li>uploadprogress</li>
              <li>uri_template</li>
              <li>uuid</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <a href="#" class="btn btn-outline-secondary btn-lg mx-auto">Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
    <div class="section tech px-3 pt-md-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2
              class="tech-title header-title header-title--light mb-4"
            >Linux Hosting yang Stabil dengan Teknologi LVE</h2>
            <p class="tech-desc">
              SuperMicro
              <strong>Intel Xeon 24-Cores</strong> server dengan RAM
              <strong>128 GB</strong> dan teknologi
              <strong>LVE CloudLinux</strong>
              untuk stabilitas server Anda. Dilengkapi dengan
              <strong>SSD</strong> untuk kecepatan
              <strong>MySQL</strong> dan caching. Apache load balancer berbasis LiteSpeed
              Technologies,
              <strong>CageFS</strong> security,
              <strong>Raid-10</strong> protection dan auto backup untuk keamanan website PHP Anda.
            </p>
            <div class="btn btn-lg btn-primary mb-5">Pilih Hosting Anda</div>
          </div>
          <div class="col-lg-6 align-self-end">
            <img class="img-fluid" src="/images/image_support.png" />
          </div>
        </div>
      </div>
    </div>
    <div class="section section-secondary share px-3 py-4">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-12 text-center text-md-left">
            <span class="font1-regular">Bagikan jika Anda menyukai halaman ini.</span>
          </div>
          <div class="col-12 col-md-12 text-center text-md-left">
            <a href="#" class="social-share social-share--faceboook mr-2">
              <span class="social-share-total">80k</span>
            </a>
            <a href="#" class="social-share social-share--twitter mr-2">
              <span class="social-share-total">450</span>
            </a>
            <a href="#" class="social-share social-share--google-plus">
              <span class="social-share-total">1900</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="section section-primary chat px-3 py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-lg-9">
            <h2 class="font1-light">
              Perlu
              <strong class="font1-bold">BANTUAN?</strong> Hubungi Kami :
              <Strong class="font1-bold">0274-5305505</Strong>
            </h2>
          </div>
          <div class="col-12 col-lg-3">
            <a href="#" class="btn btn-outline-light btn-lg">
              <div class="fa fa-comments mr-3"></div>Live Chat
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      prices: []
    };
  },
  created() {
    let uri = `/api/packages`;
    this.axios.get(uri).then(response => {
      this.prices = response.data.data;
    });
  }
};
</script>

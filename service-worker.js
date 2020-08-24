self.addEventListener('install', function(e) {
 e.waitUntil(
   caches.open('title').then(function(cache) {
     return cache.addAll([
       '/',
       '/index',
       //'/library',
       '/contacts',
       '/public/json/manifest.json',
       '/public/img/logoKz.webp',
       '/public/img/logoRu.webp',
       '/public/css/style.css',
       '/public/js/headerEffect.js',
       '/public/img/bgImg/1.webp',
       '/public/img/bgImg/3.webp',
       '/public/img/bgImg/5.webp',
       '/public/img/bgImg/6.webp',
       '/public/img/bgImg/11.webp',
       '/public/img/bgImg/12.webp',
       '/public/img/bgImg/13.webp',
       '/public/img/miniBgImg/1.webp',
       '/public/img/miniBgImg/3.webp',
       '/public/img/miniBgImg/5.webp',
       '/public/img/miniBgImg/6.webp',
       '/public/img/miniBgImg/11.webp',
       '/public/img/miniBgImg/12.webp',
       '/public/img/miniBgImg/13.webp'
     ]);
   })
 );
});

 // Кэширование запросов с родительской страници
self.addEventListener('fetch', function(event) {

  //console.log(event.request.url);
  
  event.respondWith(
  
    caches.match(event.request).then(function(response) {
      
      return response || fetch(event.request);
      
    })
  );
});
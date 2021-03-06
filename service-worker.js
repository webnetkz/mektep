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
       '/public/img/bgImg/1.jpg',
       '/public/img/bgImg/2.jpg',
       '/public/img/bgImg/3.jpg',
       '/public/img/miniBgImg/1.jpg',
       '/public/img/miniBgImg/2.jpg',
       '/public/img/miniBgImg/3.jpg',
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
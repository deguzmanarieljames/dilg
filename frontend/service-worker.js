self.addEventListener('install', (event) => {
    event.waitUntil(self.skipWaiting());
  });
  
  self.addEventListener('activate', (event) => {
    event.waitUntil(self.clients.claim());
  });
  
  self.addEventListener('message', (event) => {
    if (event.data && event.data.type === 'logout') {
      self.clients.matchAll().then(clients => {
        clients.forEach(client => {
          client.postMessage({ type: 'logout' });
        });
      });
    }
  });
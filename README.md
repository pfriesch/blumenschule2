##Setup

#### Setup dependencies 
```bash
# for php stuff
composer install
# for prod
composer install --no-dev --optimize-autoloader
php bin/console cache:clear --env=prod --no-debug

# When developing frontend js stuff
yarn encore dev 
# or with continuously watching files
yarn encore dev --watch
# or 
yarn encore production

#E.g. run the Server
php bin/console server:run
```
#### Add plentymarkets access to ENV
```ini
PLENTY_USERNAME=TODO_username
PLENTY_PASSWORD=TODO_password
PLENTY_HOST=https://www.blumenschule-schongau.de
```

##TODO
- Label Barcode is wrong for (EAN8). 
  - Historically, an old article Id has been used. Which has I think up to 4 chars.
  - Currently only the VariationId is used, which has 4 digits, might make sense to use ArticleId + VariationId. 
  - How is this Barcode even used nowadays? I guess not that much. Is it necessary?
- Apache as webserver?
  
  

  
  
  
  
  
  
  
  
  
  
  
  
 - Fix the horrible implementation to add notifications to the frontend.



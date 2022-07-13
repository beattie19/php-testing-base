### Pre-requisites
- Install composer - https://getcomposer.org/download/
- run `composer install` (if installed globally). This will fail unless the php extensions are installed for:
    - `curl` (Might not be required, but indicates it's slower otherwise)
    - `dom`
    - `zip`  
    - `mbstring` 
- Once installed, run tests with `vendor/bin/phpunit`
- You should see that one test has passed